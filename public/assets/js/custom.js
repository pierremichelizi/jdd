function slugify(str) {
    return String(str)
        .normalize('NFKD') // split accented characters into their base characters and diacritical marks
        .replace(/[\u0300-\u036f]/g, '') // remove all the accents, which happen to be all in the \u03xx UNICODE block.
        .trim() // trim leading or trailing whitespace
        .toLowerCase() // convert to lowercase
        .replace(/[^a-z0-9 -]/g, '') // remove non-alphanumeric characters
        .replace(/\s+/g, '-') // replace spaces with hyphens
        .replace(/-+/g, '-'); // remove consecutive hyphens
}
/**
 * 
 * @param {string|Element} el 
 * @returns 
 */
async function getImageUri(el) {
    return new Promise((res, rej) => {
        var file = (typeof el === "string" ? document.querySelector(el) : el).files[0];
        var reader = new FileReader();
        // it's onload event and you forgot (parameters)
        reader.onload = function (e) {
            res(e.target.result);
        }
        reader.onerror = function (e) {
            rej(e);
        }
        // you have to declare the file loading
        reader.readAsDataURL(file);
    })
}

//img Preview input
function initFileInputPreviewer(className = ".icon-file-selector") {
    //Initiate Login icon image

    $(className + " input[type='file']").on("change", async () => {
        const url = await getImageUri(className + " input[type='file']");
        handleIconClick(className, url)
    })
    document.querySelector(className + " button")?.addEventListener("click", function (e) {
        e.preventDefault();
        $(className + " img").remove();
        $(className + " i.fa-image").show();
        $(className + " button").addClass("d-none");
        $(className + " input[type='file']").val("")
    })

}

function handleIconClick(className, url) {
    $(className + " img").remove();
    $(className + " i.fa-image").hide();
    $(className + "").append(`<img src="${url}"/>`);
    $(className + " button").removeClass("d-none");
}

function getFormValues(className, additionnalsToAppend) {
    const formTypes = {};
    const form = {}
    const formData = new FormData();
    for (let input of [...document.querySelectorAll(className + " input"), ...document.querySelectorAll(className + " textarea"), ...document.querySelectorAll(className + " select")]) {
        switch (input.type) {
            case "file": {
                formTypes[input.name] = input.tagName.toLowerCase();
                form[input.name] = !!(input?.files.length) ? input.files[0] : null;
                formData.append(input.name, !!(input?.files.length) ? input.files[0] : null);
                break;
            }
            case "checkbox": {
                formTypes[input.name] = input.tagName.toLowerCase();
                form[input.name] = input.checked
                if(input.checked){
                    formData.append(input.name, input.checked);
                }
                
                break;
            }
            case "radio": {
                formTypes[input.name] = input.tagName.toLowerCase();
                form[input.name] = input.checked
                if(input.checked){
                    formData.append(input.name, input.value);
                }
                break;
            }
            //all inputs
            default: {
                formTypes[input.name] = input.tagName.toLowerCase();
                form[input.name] = $(input).val()
                formData.append(input.name, $(input).val());
                break;
            }
        }
    }
    for (let a in additionnalsToAppend) {
        formData.append(a, additionnalsToAppend[a]);
        form[a] = additionnalsToAppend[a];
    }
    return { formTypes, formData, form }
}

function showErrorMessages(inputNames, errors, getParentCallback, formElClass = null) {
    
    for (let name in errors) {
        if (inputNames[name] || name === "form") {
            if (name === "form") {
                
                const div = document.createElement("div");
                div.classList.add("alert","alert-danger","form-error","p-3", "my-4");
                if(document.querySelector(formElClass+" div.form-error")){
                    var element=document.querySelector(formElClass+" div.form-error");
                }else{
                    document.querySelector(formElClass).parentElement.prepend(div)
                    var element= div;
                }
                if(element){
                    element.innerHTML=`<p class="text-danger">${Object.values(errors[name])[0]}</p>`;
                }
            } else {
                const element = document.createElement("small");
                $(`${inputNames[name]}[name='${name}'] .error-input`).remove();
                element.innerHTML = Object.values(errors[name])[0]
                element.classList.add("text-danger", "error-input");
                let callBackReturn = getParentCallback ? getParentCallback(name, element, errors[name]) : undefined
                const node = callBackReturn ?? document.querySelector(`${inputNames[name]}[name='${name}']`).parentNode
                node.append(element);
            }

        } else {
            const element = document.createElement("small");
            element.innerHTML = Object.values(errors[name])[0]
            element.classList.add("text-danger", "error-input");
            let callBackReturn = getParentCallback ? getParentCallback(name, element, errors[name]) : undefined

            if (callBackReturn) {
                callBackReturn.append(element);
            }
        }

    }
}

function submitForm(formClass, to, onSuccess, getParentCallback, additionnals = {}, onError, finallyFunc) {
    const { formTypes, formData } = getFormValues(formClass, additionnals)

    fetch(to, {
        method: "POST",
        body: formData
    })
        .then(async (e) => {
            $(formClass + " .error-input").remove()
            $("div.form-error").remove();
            $(".error-form").remove()
            if (e.ok) {
                const data = await e.json()
                onSuccess(data)
                return data;
            } else {
                throw await e.json();
            }

        })
        .catch(e => {
            $(formClass + " .error-input").remove()
            $("div.form-error").remove();
            if (onError) onError()
            showErrorMessages(formTypes, e, getParentCallback, formClass)
        })
        .finally(()=>{
            
            if(finallyFunc) finallyFunc()
        })

}