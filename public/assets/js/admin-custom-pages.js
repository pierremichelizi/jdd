
var editor
class InsitutionPage {
    constructor() {

        if (!window.Quill) {
            $("#quill-editor,#quill-toolbar").remove();
        } else {
            editor = new Quill("#quill-editor", {
                modules: {
                    toolbar: "#quill-toolbar"
                },
                placeholder: "Description de l'institut",
                theme: "snow",
            });
            editor.root.innerHTML = quilInitial ?? ""
        }

        initFileInputPreviewer(".icon-file-selector");
        $("button").on("click", (e) => {
            e.preventDefault()
            if (e.currentTarget.type === "submit") {
                $(e.currentTarget).attr("disabled", "disabled")
                $(e.currentTarget).addClass("disabled")
                const d = {};
                if (editor) {
                    d.institution_description = editor.root.innerHTML
                }
                submitForm("form",
                    itemsId ? "/admin/institutions/items?item_id=" + itemsId + "&action=edit" + (isCenter ? "&center&parent_id=" + parent : "") : "/admin/institutions/items" + (isCenter ? "?center&parent_id=" + parent : ""),
                    () => {
                        $(".messagealert").html("")
                        window.history.back();
                    }, (name) => {
                        if (name === "institution_description") {
                            return document.querySelector(".form-wysiwyg");
                        } else if (name === "institution_logoUrl") {
                            return document.querySelector("[name='institution_logoUrl']").parentElement.parentElement
                        }
                    }, d, (error) => {
                        $(e.currentTarget).removeClass("disabled")
                        $(e.currentTarget).removeAttr("disabled");
                        $(".messagealert").html("")
                        $(".messagealert").html(`<div class="alert alert-danger p-3">Certains champs soumis sont érronés.</div>`)
                    });
            }
        })
        $(".form-next").on("click", (e) => {
            document.querySelector(`button[data-bs-target="#${e.currentTarget.dataset.nextTarget}"]`).click();
        })

        $("form").on("submit", (e) => {
            e.preventDefault();
        })
    }
}

class Program {
    constructor() {
        var descriptionEditor, conditionsEditor = null;
        if (!window.Quill) {
            $("#quill-editor,#quill-toolbar").remove();
        } else {
            descriptionEditor = new Quill("#quill-editor", {
                modules: {
                    toolbar: "#quill-toolbar"
                },
                placeholder: "Description de l'institut",
                theme: "snow",
            });
            descriptionEditor.root.innerHTML = quilInitialDescription ?? ""

            conditionsEditor = new Quill("#quill-editor-conditions", {
                modules: {
                    toolbar: "#quill-toolbar-conditions"
                },
                placeholder: "Description de l'institut",
                theme: "snow",
            });
            conditionsEditor.root.innerHTML = quilInitialConditions ?? ""
        }


        $("form.formation-form").on("submit", (e) => {
            e.preventDefault();
            $(e.currentTarget).attr("disabled", "disabled");
            submitForm("form.formation-form", "/admin/formations/programs" + (item_id ? "?item_id=" + item_id : ""), () => {
                $(".error-form").html("")
            }, (name) => {
                if (name === "form") {
                    return document.querySelector(".error-form")
                } else if (name === "conditions") {
                    return document.querySelector(".quill-toolbar-conditions").parentElement.parentElement
                } else if (name === "description") {
                    return document.querySelector(".quill-toolbar").parentElement.parentElement
                }
            }, {
                jobs: goals,
                description: descriptionEditor ? descriptionEditor.root.innerHTML : "",
                conditions: conditionsEditor ? conditionsEditor.root.innerHTML : ""
            }, () => {

                if (!$(".error-form").html().length) {
                    $(".error-form").html("<div class='alert alert-danger p-3'>Erreur de soumission du formulaire. Champs invalides</div>")
                }
            })
        })

    }
}

class AdmissionGroups {
    constructor() {
        var descriptionEditor, conditionsEditor = null;
        if (!window.Quill) {
            $("#quill-editor,#quill-toolbar").remove();
        } else {
            descriptionEditor = new Quill("#quill-editor", {
                modules: {
                    toolbar: "#quill-toolbar"
                },
                placeholder: "Description de l'institut",
                theme: "snow",
            });
            descriptionEditor.root.innerHTML = quilInitialDescription ?? ""

            conditionsEditor = new Quill("#quill-editor-conditions", {
                modules: {
                    toolbar: "#quill-toolbar-conditions"
                },
                placeholder: "Description de l'institut",
                theme: "snow",
            });
            conditionsEditor.root.innerHTML = quilInitialConditions ?? ""
        }


        $("form.group-form").on("submit", (e) => {
            e.preventDefault();
            $(e.currentTarget).attr("disabled", "disabled");
            submitForm("form.group-form", "/admin/formations/admission-groups" + (item_id ? "?item_id=" + item_id : ""), () => {
                $(".error-form").html("")
                window.history.back();
            }, (name) => {
                if (name === "form") {
                    return document.querySelector(".error-form")
                } else if (name === "conditions") {
                    return document.querySelector("#quill-toolbar-conditions").parentElement.parentElement
                } else if (name === "description") {
                    return document.querySelector("#quill-toolbar").parentElement.parentElement
                }
            }, {
                description: descriptionEditor ? descriptionEditor.root.innerHTML : "",
                additionnal_info: conditionsEditor ? conditionsEditor.root.innerHTML : ""
            }, () => {
                $(".error-form").html("")
                $(".error-form").html("<div class='alert alert-danger p-3'>Erreur de soumission du formulaire. Champs invalides</div>")
            })
        })

    }
}

class Jobs {
    constructor() {
        var descriptionEditor, conditionsEditor = null;
        if (!window.Quill) {
            $("#quill-editor,#quill-toolbar").remove();
        } else {
            descriptionEditor = new Quill("#quill-editor", {
                modules: {
                    toolbar: "#quill-toolbar"
                },
                placeholder: "Description de l'institut",
                theme: "snow",
            });
            descriptionEditor.root.innerHTML = quilInitialDescription ?? ""

        }


        $("form.group-form").on("submit", (e) => {
            e.preventDefault();
            $(e.currentTarget).attr("disabled", "disabled");
            submitForm("form.group-form", "/admin/jobs" + (item_id ? "?item_id=" + item_id : ""), (data) => {
                console.log(data)
                $(".error-form").html("")
                console.log("fait")
                window.history.back();
            }, (name) => {
                if (name === "form") {
                    return document.querySelector(".error-form")
                } else if (name === "description") {
                    return document.querySelector("#quill-toolbar").parentElement.parentElement
                } else if (name=="required_competences"|| name=="required_documents"){
                    return document.querySelector("[name='"+name+"']").parentElement.parentElement
                }
            }, {
                description: descriptionEditor ? descriptionEditor.root.innerHTML : "",
                required_competences,
                required_documents,
            }, () => {
                $(".error-form").html("")
                $(".error-form").html("<div class='alert alert-danger p-3'>Erreur de soumission du formulaire. Champs invalides</div>")
            })
        })

    }
}