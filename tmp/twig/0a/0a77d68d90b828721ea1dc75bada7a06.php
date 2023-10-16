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

/* /admin/dashboard/instituts/form.html.twig */
class __TwigTemplate_6922ee11d4b13182aec7e5eb374129ca extends Template
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
        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "/admin/dashboard/instituts/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"container-fluid p-0\">
    <div class=\"row\">
        <div class=\"col-12 col-md-8 mx-auto \">
            <div class=\"mb-3\">
                ";
        // line 7
        if (twig_test_empty(($context["isCenter"] ?? null))) {
            // line 8
            echo "                <h1 class=\"h3 mb-1 col-10\">";
            echo twig_escape_filter($this->env, ((($context["data"] ?? null)) ? (t("Editer ")) : (t("Ajouter "))), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()(" une nouvelle institution"), "html", null, true);
            echo "</h1>
                <p>";
            // line 9
            echo twig_escape_filter($this->env, ((($context["data"] ?? null)) ? (t("Editer ")) : (t("Ajouter "))), "html", null, true);
            echo twig_escape_filter($this->env, t("une nouvelle institution de formation."), "html", null, true);
            echo "
                </p>
                ";
        } else {
            // line 12
            echo "                <h1 class=\"h3 mb-1 col-10\">";
            echo twig_escape_filter($this->env, ((($context["data"] ?? null)) ? (t("Editer ")) : (t("Ajouter "))), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()(" un nouveau centre"), "html", null, true);
            echo "</h1>
                <p>";
            // line 13
            echo twig_escape_filter($this->env, ((($context["data"] ?? null)) ? (t("Editer ")) : (t("Ajouter "))), "html", null, true);
            echo twig_escape_filter($this->env, t("un nouveau centre de formation."), "html", null, true);
            echo "
                </p>
                ";
        }
        // line 16
        echo "            </div>
            <div class=\"card\">
                <div class=\"error-shower\"></div>
                <nav class=\"card-header\">
                    <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                        <button class=\"nav-link active\" id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#general\"
                            type=\"button\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Information
                            Générales</button>
                        <button class=\"nav-link\" id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#contact\"
                            type=\"button\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Information de
                            contact
                        </button>
                    </div>
                </nav>
                ";
        // line 30
        if (( !twig_test_empty(($context["message"] ?? null)) &&  !twig_test_empty(($context["errors"] ?? null)))) {
            // line 31
            echo "                <div class=\"alert alert-danger p-3\" role=\"alert\">
                    ";
            // line 32
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 35
        echo "                <div class=\"messagealert\">
                </div>
                <form  class=\"tab-content data-insitution card-body \" id=\"nav-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"general\" role=\"tabpanel\" tabindex=\"0\">
                        <div class=\"\">

                            <div class=\"\">
                                <div class=\"input-group-lg\">
                                    <label class=\"mb-1\">";
        // line 43
        echo twig_escape_filter($this->env, t("Nom "), "html", null, true);
        echo ((($context["isCenter"] ?? null)) ? ("du centre") : ("de l'institution"));
        echo "</label>
                                    <input type=\"text\" name=\"institution_name\"
                                        class=\"form-control form-lg \" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_name", [], "any", false, false, false, 45), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"input-group-lg mt-4\">
                                    <label class=\"mb-1\">";
        // line 48
        echo twig_escape_filter($this->env, t("Type "), "html", null, true);
        echo ((($context["isCenter"] ?? null)) ? ("du centre") : ("de l'institution"));
        echo "</label>
                                    <select name=\"institution_type\" class=\"form-select\" id=\"\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_type", [], "any", false, false, false, 49), "html", null, true);
        echo "\" >
                                        <option>Choisir un type d'";
        // line 50
        echo ((($context["isCenter"] ?? null)) ? ("center") : ("instution"));
        echo "</option>
                                        <option value=\"UNIVERSITY\" ";
        // line 51
        echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_type", [], "any", false, false, false, 51) == "UNIVERSITY")) ? ("selected") : (""));
        echo ">University</option>
                                        <option value=\"PROFESIONNAL_CENTER\" ";
        // line 52
        echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_type", [], "any", false, false, false, 52) == "PROFESIONNAL_CENTER")) ? ("selected") : (""));
        echo ">Centre Professionnel</option>
                                        <option value=\"SCHOOL\" ";
        // line 53
        echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_type", [], "any", false, false, false, 53) == "SCHOOL")) ? ("selected") : (""));
        echo ">Ecole</option>
                                        <option value=\"OTHER\" ";
        // line 54
        echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_type", [], "any", false, false, false, 54) == "OTHER")) ? ("selected") : (""));
        echo ">Autres</option>
                                    </select>
                                </div>
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

                                <div class=\"mt-4\">
                                    <label class=\"mb-1\">";
        // line 94
        echo twig_escape_filter($this->env, t("Langue de formation"), "html", null, true);
        echo "</label>
                                    <select value=\"\" name=\"institution_supported_languages\" class=\"form-control select2\" data-toggle=\"select2\" multiple>
                                        <option value=\"fr\" ";
        // line 96
        echo ((twig_in_filter("fr", twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_supported_languages", [], "any", false, false, false, 96))) ? ("selected=\"selected\"") : (""));
        echo ">Français</option>
                                        <option value=\"en\" ";
        // line 97
        echo ((twig_in_filter("en", twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_supported_languages", [], "any", false, false, false, 97))) ? ("selected=\"selected\"") : (""));
        echo ">Anglais</option>
                                </select>
                                </div>
                                
                                <div class=\"mt-4\">
                                    <label class=\"mb-1\">";
        // line 102
        echo twig_escape_filter($this->env, t("Logo "), "html", null, true);
        echo ((($context["isCenter"] ?? null)) ? ("du centre") : ("de l'instution"));
        echo "</label>
                                    <div style=\"max-width: 100%;\"
                                        class=\"relative icon-file-selector  rounded-lg  shadow text-lg d-flex justify-content-center align-items-center\">
                                        <input type=\"file\" name=\"institution_logoUrl\" />
                                        <i class=\"fas fa-image image_icon\"></i>
                                        <button style=\"width:10px; height:10px;\"
                                            class=\"close absolute shadow-lg rounded-full p-2 bg-white border-0 d-none\">
                                            <i class=\"fas fa-close\"></i>
                                        </button>
                                    </div>
                                </div>
                                ";
        // line 113
        if (twig_test_empty(($context["isCenter"] ?? null))) {
            // line 114
            echo "                                <div class=\"mt-4\">
                                    <label class=\"form-check\">
                                        <input class=\"form-check-input\" ";
            // line 116
            echo ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_isGroup", [], "any", false, false, false, 116)) ? ("checked") : (""));
            echo " type=\"checkbox\"
                                            name=\"institution_isGroup\" value=\"\">
                                        <span class=\"form-check-label\">
                                            ";
            // line 119
            echo twig_escape_filter($this->env, t("Cette institution dispose de plusieurs centres"), "html", null, true);
            echo "
                                        </span>
                                    </label>
                                </div>
                                ";
        }
        // line 124
        echo "                                <div class=\"text-end mt-4\">
                                    <button  data-next-target=\"contact\" type=\"button\"
                                        class=\"form-next btn btn-lg btn-primary border-0\">
                                        <span class=\"d-sm-none\">";
        // line 127
        echo twig_escape_filter($this->env, t("Suivant"), "html", null, true);
        echo "</span>
                                        <span class=\"d-none d-sm-inline \">";
        // line 128
        echo twig_escape_filter($this->env, t("Suivant"), "html", null, true);
        echo "</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" tabindex=\"0\">
                        <div class=\"row\">
                            <div class=\"input-group-lg  col-12 \">
                                <label class=\"mb-1\">";
        // line 137
        echo twig_escape_filter($this->env, t("Email Officiel"), "html", null, true);
        echo "</label>
                                <input type=\"text\" name=\"institution_contactEmail\"
                                    class=\"form-control form-lg \" value=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_contactEmail", [], "any", false, false, false, 139), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"row mt-4\">
                            <div class=\"input-group-lg col-12\">
                                <label class=\"mb-1\">";
        // line 144
        echo twig_escape_filter($this->env, t("Téléphone Officiel"), "html", null, true);
        echo "</label>
                                <input type=\"text\" name=\"institution_tel\"
                                    class=\"form-control form-lg \" value=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_tel", [], "any", false, false, false, 146), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"row mt-4\">
                            <div class=\"input-group-lg  col-12\">
                                <label class=\"mb-1\">";
        // line 151
        echo twig_escape_filter($this->env, t("Pays"), "html", null, true);
        echo "</label>
                                <select name=\"institution_country\"value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_country", [], "any", false, false, false, 152), "html", null, true);
        echo "\" class=\"form-select\" id=\"\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_type", [], "any", false, false, false, 152), "html", null, true);
        echo "\">
                                    <option>Choisir un pays</option>
                                    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 155
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "code", [], "any", false, false, false, 155), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_country", [], "any", false, false, false, 155) == twig_get_attribute($this->env, $this->source, $context["p"], "code", [], "any", false, false, false, 155))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 155), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"row mt-4\">
                            <div class=\"input-group-lg  col-12\">
                                <label class=\"mb-1\">";
        // line 162
        echo twig_escape_filter($this->env, t("Nom de le ville"), "html", null, true);
        echo "</label>
                                <input list=\"townlist\" type=\"text\" name=\"institution_town\"
                                    class=\"form-control form-lg\"  value=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_town", [], "any", false, false, false, 164), "html", null, true);
        echo "\">
                                <datalist id=\"townlist\">
                                    ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["town"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 167
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "town_name", [], "any", false, false, false, 167), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "town_name", [], "any", false, false, false, 167), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                                    
                                </datalist>
                            </div>
                        </div>
                        <div class=\"row mt-4\">
                            <div class=\"input-group-lg col-12 col-md-6 \">
                                <label class=\"mb-1\">";
        // line 175
        echo twig_escape_filter($this->env, t("Adresse 1"), "html", null, true);
        echo "</label>
                                <input type=\"text\" name=\"institution_adress\"
                                    class=\"form-control form-lg \" value=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_adress", [], "any", false, false, false, 177), "html", null, true);
        echo "\">
                            </div>

                            <div class=\"input-group-lg col-12 col-md-6 \">
                                <label class=\"mb-1\">";
        // line 181
        echo twig_escape_filter($this->env, t("Adresse 2"), "html", null, true);
        echo "</label>
                                <input type=\"text\" name=\"institution_adress_additionnal\"
                                    class=\"form-control form-lg \" value=\"";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_adress_additionnal", [], "any", false, false, false, 183), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"row mt-4\">
                            <div class=\"input-group-lg  col-12\">
                                <label class=\"mb-1\">";
        // line 188
        echo twig_escape_filter($this->env, t("Url du site internet"), "html", null, true);
        echo "</label>
                                <input type=\"text\" name=\"institution_website_url\"
                                    class=\"form-control form-lg \" value=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_website_url", [], "any", false, false, false, 190), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div>
                            <div class=\"text-end mt-4\">
                                <button data-next-target=\"contact\" type=\"submit\"
                                    class=\"form-next btn btn-lg btn-primary border-0\">
                                    <span class=\"d-sm-none\">";
        // line 197
        echo twig_escape_filter($this->env, t("Suivant"), "html", null, true);
        echo "</span>
                                    <span class=\"d-none d-sm-inline \">";
        // line 198
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_id", [], "any", false, false, false, 198)) ? (t("Modifier")) : (t("Ajouter"))), "html", null, true);
        echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    var isCenter=";
        // line 212
        ((($context["isCenter"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["isCenter"] ?? null), "html", null, true))) : (print (0)));
        echo ";
    var parent='";
        // line 213
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "institution_id", [], "any", false, false, false, 213))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "institution_id", [], "any", false, false, false, 213), "html", null, true))) : (print ("")));
        echo "'

    var quilInitial=`";
        // line 215
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_description", [], "any", false, false, false, 215);
        echo "`
    var itemsId=`";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_id", [], "any", false, false, false, 216), "html", null, true);
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
        new InsitutionPage();
        if(\"";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 227), "html", null, true);
        echo "\"){
            handleIconClick(\".icon-file-selector\", \"";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 228), "html", null, true);
        echo "\")
        }
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "/admin/dashboard/instituts/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 228,  459 => 227,  445 => 216,  441 => 215,  436 => 213,  432 => 212,  420 => 203,  412 => 198,  408 => 197,  398 => 190,  393 => 188,  385 => 183,  380 => 181,  373 => 177,  368 => 175,  360 => 169,  349 => 167,  345 => 166,  340 => 164,  335 => 162,  328 => 157,  315 => 155,  311 => 154,  304 => 152,  300 => 151,  292 => 146,  287 => 144,  279 => 139,  274 => 137,  262 => 128,  258 => 127,  253 => 124,  245 => 119,  239 => 116,  235 => 114,  233 => 113,  218 => 102,  210 => 97,  206 => 96,  201 => 94,  158 => 54,  154 => 53,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  133 => 48,  127 => 45,  121 => 43,  111 => 35,  105 => 32,  102 => 31,  100 => 30,  84 => 16,  77 => 13,  71 => 12,  64 => 9,  58 => 8,  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/dashboard/instituts/form.html.twig", "/home/admicuwm/public_html/templates/admin/dashboard/instituts/form.html.twig");
    }
}
