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

/* admin/dashboard/admissions/edit.html.twig */
class __TwigTemplate_16fca3eee518d043f9566ad351091206 extends Template
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
        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/admissions/edit.html.twig", 1);
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
        <div class=\"col-12 mx-auto \">
            <div class=\"d-flex justify-content-between align-items-center\">
                <h3 class=\"c\">";
        // line 12
        echo twig_escape_filter($this->env, t("Créer un groupe d'admission "), "html", null, true);
        echo "</h3>

            </div>
            <div class=\"error-form\"></div>
            <div class=\" mt-4 create-content\" >
                <form class=\"group-form\">
                    <div class=\"input-group-lg mt-4\">
                        <label class=\"mb-1\">";
        // line 19
        echo twig_escape_filter($this->env, t("Nom du groupe"), "html", null, true);
        echo "</label>
                        <input type=\"text\" name=\"name\" class=\"form-control form-control-lg \"
                            value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_name", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"mt-4\">
                        <label class=\"mb-1\">";
        // line 24
        echo twig_escape_filter($this->env, t("Programme concerné"), "html", null, true);
        echo "</label>
                        <select name=\"program\" class=\"form-select form-select-lg\">
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["programs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 27
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "program_id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_program_id", [], "any", false, false, false, 27) == twig_get_attribute($this->env, $this->source, $context["s"], "admission_group_program_id", [], "any", false, false, false, 27))) ? ("selected='selected'") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "program_name", [], "any", false, false, false, 27), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </select>
                    </div>
                    <div class=\"mt-4\">
                        <label class=\"mb-1\">";
        // line 32
        echo twig_escape_filter($this->env, t("Insitution concerné"), "html", null, true);
        echo "</label>
                        <select name=\"institution\" class=\"form-select form-select-lg\">
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["institutions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 35
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "institution_id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_institution_id", [], "any", false, false, false, 35) == twig_get_attribute($this->env, $this->source, $context["s"], "institution_id", [], "any", false, false, false, 35))) ? ("selected='selected'") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "institution_name", [], "any", false, false, false, 35), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </select>
                    </div>
                    <div class=\"input-group-lg mt-4\">
                        <label class=\"mb-1\">";
        // line 40
        echo twig_escape_filter($this->env, t("Code du groupe"), "html", null, true);
        echo "</label>
                        <input type=\"text\" name=\"code\" class=\"form-control form-control-lg \"
                            value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_code", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"input-group-lg mt-4\">
                        <label class=\"mb-1\">";
        // line 45
        echo twig_escape_filter($this->env, t("Description du groupe"), "html", null, true);
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
                    <div class=\"input-group-lg mt-4\">
                        <label class=\"mb-1\">";
        // line 83
        echo twig_escape_filter($this->env, t("Nombre de places disponibles"), "html", null, true);
        echo "</label>
                        <input type=\"text\" name=\"max_places\" class=\"form-control form-control-lg \"
                            value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_max_places", [], "any", false, false, false, 85), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"row\">
                            <div class=\"input-group-lg mt-4 col-12 col-md-6\">
                                <label class=\"mb-1\">";
        // line 89
        echo twig_escape_filter($this->env, t("Date de début d'ouverture des candidature"), "html", null, true);
        echo "</label>
                                <input type=\"date\" name=\"start_date\" class=\"form-control form-control-lg \"
                                    value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_start_date", [], "any", false, false, false, 91), "Y-m-d"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"input-group-lg mt-4 col-12 col-md-6\">
                                <label class=\"mb-1\">";
        // line 94
        echo twig_escape_filter($this->env, t("Date de fermerture des candidatures"), "html", null, true);
        echo "</label>
                                <input type=\"date\" name=\"end_date\" class=\"form-control form-control-lg \"
                                    value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_end_date", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true);
        echo "\">
                            </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-md-6\">
                           
                            <div class=\"input-group-lg mt-4\">
                                <label class=\"mb-1\">";
        // line 103
        echo twig_escape_filter($this->env, t("Date de début du programme"), "html", null, true);
        echo "</label>
                                <input type=\"date\" name=\"start_program_date\" class=\"form-control form-control-lg \"
                                    value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_program_start_date", [], "any", false, false, false, 105), "Y-m-d"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-12 col-md-6\">
                            <div class=\"input-group-lg mt-4\">
                                <label class=\"mb-1\">";
        // line 110
        echo twig_escape_filter($this->env, t("Date de fin du programme"), "html", null, true);
        echo "</label>
                                <input type=\"date\" name=\"end_program_date\" class=\"form-control form-control-lg \"
                                    value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_program_close_date", [], "any", false, false, false, 112), "Y-m-d"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-4\">
                        <p class=\"mb-2\">";
        // line 117
        echo twig_escape_filter($this->env, t("Bourse de formation"), "html", null, true);
        echo "</p>
                        <div class=\"form-control\">
                            <input class=\"form-check-input\" name=\"scholarship_available\"
                                type=\"checkbox\" id=\"firstCheckbox\" ";
        // line 120
        echo ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_scholarship_available", [], "any", false, false, false, 120)) ? ("checked='checked'") : (""));
        echo ">
                            <label class=\"form-check-label\" for=\"firstCheckbox\">";
        // line 121
        echo twig_escape_filter($this->env, t("Bourses disponibles"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"mt-4\">
                        <p class=\"mb-2\">";
        // line 125
        echo twig_escape_filter($this->env, t("Période de cours (Journée)"), "html", null, true);
        echo "</p>
                        <div class=\"form-control\">
                            <input class=\"form-check-input\" name=\"in_day_course\"
                                type=\"checkbox\" value=\"\" id=\"firstCheckbox\" ";
        // line 128
        echo ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_in_day_course", [], "any", false, false, false, 128)) ? ("checked='checked'") : (""));
        echo ">
                            <label class=\"form-check-label\" for=\"firstCheckbox\">";
        // line 129
        echo twig_escape_filter($this->env, t("Disponible en cours du jour"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"mt-4\">
                        <p class=\"mb-2\">";
        // line 133
        echo twig_escape_filter($this->env, t("Période de cours (Soirée)"), "html", null, true);
        echo "</p>
                        <div class=\"form-control\">
                            <input class=\"form-check-input\" name=\"in_night_course\"
                                type=\"checkbox\" value=\"\" id=\"firstCheckbox\" ";
        // line 136
        echo ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_in_night_course", [], "any", false, false, false, 136)) ? ("checked='checked'") : (""));
        echo ">
                            <label class=\"form-check-label\" for=\"firstCheckbox\">";
        // line 137
        echo twig_escape_filter($this->env, t("Disponible en cours du soir"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"mt-4\">
                        <label class=\"mb-1\">";
        // line 141
        echo twig_escape_filter($this->env, t("Information Additionnelles"), "html", null, true);
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
                    <div class=\"input-group-lg mt-4\">
                        <label class=\"mb-1\">";
        // line 179
        echo twig_escape_filter($this->env, t("Frais d'admission en Euro"), "html", null, true);
        echo "</label>
                        <input value=\"74.99\" type=\"text\" name=\"fees\" class=\"form-control form-control-lg \"
                            value=\"";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_fees", [], "any", false, false, false, 181), "html", null, true);
        echo "\">
                    </div>

                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">
                    <div class=\"p-4 text-center\">
                        <button type=\"submit\" class=\"btn-lg btn btn-primary\">";
        // line 186
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_id", [], "any", false, false, false, 186)) ? (t("Editer")) : (t("Créér & Continuer"))), "html", null, true);
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var quilInitialDescription=`";
        // line 196
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_description", [], "any", false, false, false, 196);
        echo "`
    var quilInitialConditions=`";
        // line 197
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_additionnal_info", [], "any", false, false, false, 197);
        echo "`
    var goals = [];
    var item_id=\"";
        // line 199
        ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_id", [], "any", false, false, false, 199)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "admission_group_id", [], "any", false, false, false, 199), "html", null, true))) : (print ("")));
        echo "\";
    window.onload = function () {
        
        /*\$(\"#create-btn\").on(\"click\", function(){
            console.log(\"click\")
            \$(\".create-content\").slideToggle();
        })*/

        

        
        new AdmissionGroups();
    }

    /*    var isCenter = ";
        // line 213
        ((($context["isCenter"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["isCenter"] ?? null), "html", null, true))) : (print (0)));
        echo ";
        var parent = '";
        // line 214
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "institution_id", [], "any", false, false, false, 214))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "institution_id", [], "any", false, false, false, 214), "html", null, true))) : (print ("")));
        echo "'
    
        var quilInitial = `";
        // line 216
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_description", [], "any", false, false, false, 216);
        echo "`
        var itemsId = `";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_id", [], "any", false, false, false, 217), "html", null, true);
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
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 228), "html", null, true);
        echo "\") {
                handleIconClick(\".icon-file-selector\", \"";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 229), "html", null, true);
        echo "\")
            }
        });*/
</script>


";
    }

    public function getTemplateName()
    {
        return "admin/dashboard/admissions/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 229,  426 => 228,  412 => 217,  408 => 216,  403 => 214,  399 => 213,  382 => 199,  377 => 197,  373 => 196,  360 => 186,  355 => 184,  349 => 181,  344 => 179,  303 => 141,  296 => 137,  292 => 136,  286 => 133,  279 => 129,  275 => 128,  269 => 125,  262 => 121,  258 => 120,  252 => 117,  244 => 112,  239 => 110,  231 => 105,  226 => 103,  216 => 96,  211 => 94,  205 => 91,  200 => 89,  193 => 85,  188 => 83,  147 => 45,  141 => 42,  136 => 40,  131 => 37,  118 => 35,  114 => 34,  109 => 32,  104 => 29,  91 => 27,  87 => 26,  82 => 24,  76 => 21,  71 => 19,  61 => 12,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard/admissions/edit.html.twig", "/home/admicuwm/public_html/templates/admin/dashboard/admissions/edit.html.twig");
    }
}
