<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/dashboard/programs/edit.html.twig */
class __TwigTemplate_65a927bc4c6dec57e70e82fc90c81cb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/programs/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<style>
    #program_goals [data-type='container'] >*:nth-child(2n + 1) {
        background-color: #eee;
    }
</style>
<div class=\"container-fluid p-0\">
    <div class=\"row\">
        <div class=\"col-12 col-md-8 mx-auto \">
            <h4 class=\"c\">";
        // line 11
        echo twig_escape_filter($this->env, t("Créer un nouveau programme de formation"), "html", null, true);
        echo "</h4>
            <div class=\"card mt-4\">
                <div class=\"error-form\"></div>
                <form class=\"card-body formation-form\">
                    <div class=\"mt-4\">
                        <label class=\"mb-1\">";
        // line 16
        echo twig_escape_filter($this->env, t("Icon du programme"), "html", null, true);
        echo "</label>
                        <div style=\"max-width: 100px; height:100px\"
                            class=\" rounded-pill relative icon-file-selector  rounded-lg  shadow text-lg d-flex justify-content-center align-items-center\">
                            <input type=\"file\" name=\"icon\" />
                            <i class=\"fas fa-image image_icon\"></i>
                            <button style=\"width:10px; height:10px;\"
                                class=\"close absolute shadow-lg rounded-full p-2 bg-white border-0 d-none\">
                                <i class=\"fas fa-close\"></i>
                            </button>
                        </div>
                    </div>
                    <div class=\"input-group-lg mt-4\">
                        <label class=\"mb-1\">";
        // line 28
        echo twig_escape_filter($this->env, t("Nom du programme"), "html", null, true);
        echo "</label>
                        <input type=\"text\" name=\"program_name\" class=\"form-control form-control-lg \"
                            value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_name", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"input-group-lg mt-4\">
                        <label class=\"mb-1\">";
        // line 33
        echo twig_escape_filter($this->env, t("Code du programme"), "html", null, true);
        echo "</label>
                        <input type=\"text\" name=\"program_code\" class=\"form-control form-control-lg \"
                            value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_code", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"input-group-lg mt-4\">
                        <label class=\"mb-1\">";
        // line 38
        echo twig_escape_filter($this->env, t("Description du programme"), "html", null, true);
        echo "</label>
                        <div class=\" form-wysiwyg\">
                            <div class=\"clearfix mt-4\">
                                <div id=\"quill-toolbar\" class=\"rounded-top-lg\">
                                    <span class=\"ql-formats\">
                                        <select class=\"ql-size\"></select>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-bold\"></button>
                                        <button class=\"ql-italic\"></button>
                                        <button class=\"ql-underline\"></button>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <select class=\"ql-color\"></select>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-header\" value=\"1\"></button>
                                        <button class=\"ql-header\" value=\"2\"></button>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-list\" value=\"ordered\"></button>
                                        <button class=\"ql-list\" value=\"bullet\"></button>
                                        <button class=\"ql-indent\" value=\"-1\"></button>
                                        <button class=\"ql-indent\" value=\"+1\"></button>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-direction\" value=\"rtl\"></button>
                                        <select class=\"ql-align\"></select>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-clean\"></button>
                                    </span>
                                </div>
                                <div id=\"quill-editor\" class=\"rounded-bottom-lg\"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-4\">
                        <label class=\"mb-1\">";
        // line 77
        echo twig_escape_filter($this->env, t("Condition d'admission"), "html", null, true);
        echo "</label>
                        <div class=\" form-wysiwyg\">
                            <div class=\"clearfix mt-4\">
                                <div id=\"quill-toolbar-conditions\" class=\"rounded-top-lg \">
                                    <span class=\"ql-formats\">
                                        <select class=\"ql-size\"></select>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-bold\"></button>
                                        <button class=\"ql-italic\"></button>
                                        <button class=\"ql-underline\"></button>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <select class=\"ql-color\"></select>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-header\" value=\"1\"></button>
                                        <button class=\"ql-header\" value=\"2\"></button>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-list\" value=\"ordered\"></button>
                                        <button class=\"ql-list\" value=\"bullet\"></button>
                                        <button class=\"ql-indent\" value=\"-1\"></button>
                                        <button class=\"ql-indent\" value=\"+1\"></button>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-direction\" value=\"rtl\"></button>
                                        <select class=\"ql-align\"></select>
                                    </span>
                                    <span class=\"ql-formats\">
                                        <button class=\"ql-clean\"></button>
                                    </span>
                                </div>
                                <div id=\"quill-editor-conditions\" class=\"rounded-bottom-lg\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-4\">
                        <label class=\"mb-1\">";
        // line 115
        echo twig_escape_filter($this->env, t("Le secteur de formation"), "html", null, true);
        echo "</label>
                        <select name=\"sector\" class=\"form-select form-select-lg\">
                            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sectors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 118
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "sector_id", [], "any", false, false, false, 118), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_sector_id", [], "any", false, false, false, 118) == twig_get_attribute($this->env, $this->source, $context["s"], "sector_id", [], "any", false, false, false, 118))) ? ("selected='selected'") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "sector_name", [], "any", false, false, false, 118), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                        </select>
                    </div>
                    <div class=\"mt-4\">
                        <label class=\"mb-1\">";
        // line 123
        echo twig_escape_filter($this->env, t("Le diplome du programme"), "html", null, true);
        echo "</label>
                        <select name=\"diploma\" class=\"form-select form-select-lg\">
                            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["diplomas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 126
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "diploma_id", [], "any", false, false, false, 126), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_diploma_id", [], "any", false, false, false, 126) == twig_get_attribute($this->env, $this->source, $context["s"], "diploma_id", [], "any", false, false, false, 126))) ? ("selected='selected'") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "diploma_name", [], "any", false, false, false, 126), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                        </select>
                    </div>
                    <!--div class=\"py-4 mt-5  border-bottom\">
                        <div id=\"program_goals\">
                            <div >
                                <label class=\"mb-1\">";
        // line 133
        echo twig_escape_filter($this->env, t("Les Objectifs du programme"), "html", null, true);
        echo "</label>
                                <div class=\"d-flex\">
                                    <textarea placeholder=\"";
        // line 135
        echo twig_escape_filter($this->env, t("Ajouter un nouvel objectif"), "html", null, true);
        echo "\" type=\"text\"  class=\"form-control-lg  form-control form-control-lg \"></textarea>
                                    <div>
                                        <button data-type=\"element\" class=\" btn btn-primary\"><i class=\"fas fa-plus\"></i></button>
                                    </div>
                                </div>
                                
                            </div>
                            <div  data-type=\"container\" class=\" mt-4\">
                                <p class=\"my-5 text-center\">";
        // line 143
        echo twig_escape_filter($this->env, t("Aucun objectif ajouté"), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div-->
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">
                    <div class=\"p-4 text-center\">
                        <button type=\"submit\" class=\"btn-lg btn btn-primary\">";
        // line 149
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_id", [], "any", false, false, false, 149)) ? (t("Editer")) : (t("Créér"))), "html", null, true);
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var quilInitialDescription=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_goal_description", [], "any", false, false, false, 159), "html", null, true);
        echo "\"
    var quilInitialConditions=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_admission_terms", [], "any", false, false, false, 160), "html", null, true);
        echo "\"
    var goals = [];
    var item_id=\"";
        // line 162
        ((($context["item_id"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["item_id"] ?? null), "html", null, true))) : (print ("")));
        echo "\";
    window.onload = function () {
        
        
        /*function addEvent(container){
            \$(container+\" [data-type='container'] button\").on(\"click\", (e)=>{
                console.log(\"here\", \$(e.currentTarget).data(\"index\"));
                e.preventDefault()
                goals=goals.filter((v, i)=>i !=\$(e.currentTarget).data(\"index\"))
                console.log(goals)
                renderGoals(container)
            })
        }

        function renderGoals(container){
            const formated = []
            for (let i in goals) {
                formated.push(`
                <div class=\" d-flex justify-content-between p-2 align-items-center\">
                    <div class=\"col-11\">
                        <h5 class=\"m-0\">\${goals[i]}</h5>
                    </div>
                    <div  class=\"col-1\">
                        <button class=\"btn\" data-index=\"\${i}\"><i class=\"fas fa-close\"></i></button>
                    </div>
                </div>

            `)
            }
            \$(container+\" [data-type='container']\").html(formated.join(\"\"))
            \$(container+\"  textarea\").val(\"\")
            addEvent(container)
        }

        function initOptionsSelection(container){
            \$(container+\" [data-type='element']\").on(\"click\", (e) => {
                e.preventDefault();
                if(\$(container+\"  textarea\").val()){
                    goals.push(\$(container+\"  textarea\").val());
                    renderGoals(container+\"\")
                }
            })
            renderGoals(container)
        }
          
        
        initOptionsSelection(\"#program_goals\")*/

        if(\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_iconLogo", [], "any", false, false, false, 210), "html", null, true);
        echo "\"){
            handleIconClick(\".icon-file-selector\", \"";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_iconLogo", [], "any", false, false, false, 211), "html", null, true);
        echo "\")
        }
        initFileInputPreviewer(\".icon-file-selector\");

        
        new Program();
    }

    /*    var isCenter = ";
        // line 219
        ((($context["isCenter"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["isCenter"] ?? null), "html", null, true))) : (print (0)));
        echo ";
        var parent = '";
        // line 220
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "institution_id", [], "any", false, false, false, 220))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "institution_id", [], "any", false, false, false, 220), "html", null, true))) : (print ("")));
        echo "'
    
        var quilInitial = `";
        // line 222
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_description", [], "any", false, false, false, 222);
        echo "`
        var itemsId = `";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_id", [], "any", false, false, false, 223), "html", null, true);
        echo "`
        document.addEventListener(\"DOMContentLoaded\", function (e) {
            \$(\".select2\").each(function () {
                \$(this)
                    .wrap(\"<div class=\\\"position-relative\\\"></div>\")
                    .select2({
                        placeholder: \"Sélectionner une langue\",
                        dropdownParent: \$(this).parent()
                    });
            })
            
            if (\"";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 234), "html", null, true);
        echo "\") {
                handleIconClick(\".icon-file-selector\", \"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 235), "html", null, true);
        echo "\")
            }
        });*/
</script>


";
    }

    public function getTemplateName()
    {
        return "admin/dashboard/programs/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 235,  387 => 234,  373 => 223,  369 => 222,  364 => 220,  360 => 219,  349 => 211,  345 => 210,  294 => 162,  289 => 160,  285 => 159,  272 => 149,  267 => 147,  260 => 143,  249 => 135,  244 => 133,  237 => 128,  224 => 126,  220 => 125,  215 => 123,  210 => 120,  197 => 118,  193 => 117,  188 => 115,  147 => 77,  105 => 38,  99 => 35,  94 => 33,  88 => 30,  83 => 28,  68 => 16,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard/programs/edit.html.twig", "/home/admicuwm/public_html/templates/admin/dashboard/programs/edit.html.twig");
    }
}
