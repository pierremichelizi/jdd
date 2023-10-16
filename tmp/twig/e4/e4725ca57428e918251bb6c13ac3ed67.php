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

/* client/admission.html.twig */
class __TwigTemplate_0d5b9730246ce6f8dc7b8b433b32e0b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'userContent' => [$this, 'block_userContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "client/institution-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("client/institution-base.html.twig", "client/admission.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_userContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div>
    <div class=\"row\">
        <div class=\"col-12 \">
            <div class=\"card\" style=\"border-radius: 20px;\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <p class=\"m-0\"><small>";
        // line 11
        echo twig_escape_filter($this->env, t("Programme"), "html", null, true);
        echo "</small></p>
                            <h3>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "program_name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>
                        </div>
                       
                        ";
        // line 15
        $context["isActiveAdmission"] = (((twig_date_converter($this->env, "now") > twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_close_date", [], "any", false, false, false, 15)))) ? (0) : (1));
        // line 16
        echo "                        <div class=\"d-flex align-items-center\">
                            ";
        // line 17
        if (($context["isActiveAdmission"] ?? null)) {
            // line 18
            echo "                            <p class=\" text-success m-0 me-2 \">
                                <span>";
            // line 19
            echo twig_escape_filter($this->env, t("Ouverte"), "html", null, true);
            echo "</span>
                                <span>
                                    <span style=\"width:10px; height:10px;\"
                                        class=\"d-inline-block   bg-success border border-light rounded-circle\">
                                        <span class=\"visually-hidden\">New alerts</span>
                                    </span>
                                </span>
                            </p>
                            ";
        } else {
            // line 28
            echo "                            ";
            if (($context["isActiveAdmission"] ?? null)) {
                // line 29
                echo "                            <p class=\" text-danger m-0 me-2 \">
                                <span class=\"text-danger\">";
                // line 30
                echo twig_escape_filter($this->env, t("Cloturé"), "html", null, true);
                echo "</span>
                                <span>
                                    <span style=\"width:10px; height:10px;\"
                                        class=\"d-inline-block   bg-danger border border-light rounded-circle\">
                                        <span class=\"visually-hidden\">New alerts</span>
                                    </span>
                                </span>
                            </p>
                            ";
            }
            // line 39
            echo "                            ";
        }
        // line 40
        echo "                            <a href=\"/admission/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_id", [], "any", false, false, false, 40), "html", null, true);
        echo "/application\"  class=\"d-none d-none btn btn-common bg-primary text-white\">";
        echo twig_escape_filter($this->env, t("Postuler"), "html", null, true);
        echo "</a>
                        </div>
                        
                    </div>
                    <div class=\"mt-4\">
                        <div class=\"border-bottom pb-2\">
                            <h6>";
        // line 46
        echo twig_escape_filter($this->env, t("Détails du programme"), "html", null, true);
        echo "</h6>
                        </div>
                        <p class=\"mt-4\">
                            ";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "program_goal_description", [], "any", false, false, false, 49);
        echo "
                        </p>
                    </div>
                    <div>
                        <div class=\"mt-4\">
                            <div class=\"border-bottom pb-2\">
                                <p class=\"m-0\"><small>";
        // line 55
        echo twig_escape_filter($this->env, t("Groupe d'admission"), "html", null, true);
        echo "</small></p>
                                <h6>";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_name", [], "any", false, false, false, 56);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_code", [], "any", false, false, false, 56), "html", null, true);
        echo ")</h6>
                            </div>
                            <div class=\"mt-4\">
                                ";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_description", [], "any", false, false, false, 59);
        echo "
                            </div>
                            <div class=\"mt-4\">

                                <h6 style=\"font-size: 0.9rem;\">
                                    ";
        // line 64
        echo twig_escape_filter($this->env, t("Période de candidature"), "html", null, true);
        echo "
                                </h6>
                                <div class=\"row\">
                                    <div class=\"col-12 col-md-6\">
                                        ";
        // line 68
        echo twig_escape_filter($this->env, t("Début : "), "html", null, true);
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_start_date", [], "any", false, false, false, 68), "d/m/Y H\\h "), "html", null, true);
        echo "
                                    </div>
                                    <div class=\"col-12 col-md-6\">
                                        ";
        // line 71
        echo twig_escape_filter($this->env, t("FIn : "), "html", null, true);
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_close_date", [], "any", false, false, false, 71), "d/m/Y H\\h "), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"mt-4\">

                                <div class=\"\">
                                    <h6 style=\"font-size: 0.9rem;\">
                                        ";
        // line 79
        echo twig_escape_filter($this->env, t("Durée du programme"), "html", null, true);
        echo "
                                    </h6>
                                    <div class=\"row\">
                                        <div class=\"col-12 col-md-6\">
                                            ";
        // line 83
        echo twig_escape_filter($this->env, t("Début : "), "html", null, true);
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_program_start_date", [], "any", false, false, false, 83), "d/m/Y
                                            H\\h "), "html", null, true);
        // line 84
        echo "
                                        </div>
                                        <div class=\"col-12 col-md-6\">
                                            ";
        // line 87
        echo twig_escape_filter($this->env, t("FIn : "), "html", null, true);
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_program_close_date", [], "any", false, false, false, 87), "d/m/Y H\\h
                                            "), "html", null, true);
        // line 88
        echo "
                                        </div>
                                    </div> 
                                </div>
                                
                            </div>
                            <div class=\"mt-4 row\">

                                <div class=\"col-12 col-md-6\">
                                    <h6 style=\"font-size: 0.9rem;\">
                                        ";
        // line 98
        echo twig_escape_filter($this->env, t("Détails de la formation"), "html", null, true);
        echo "
                                    </h6>
                                    <p class=\"";
        // line 100
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_in_day_course", [], "any", false, false, false, 100)) ? (" text-success") : ("text-danger"));
        echo "\">
                                        <span class=\"\">
                                            <i class=\"fas fa-check ";
        // line 102
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_in_day_course", [], "any", false, false, false, 102)) ? ("") : ("
                                                hidden"));
        // line 103
        echo "\"></i>
                                            <i class=\"fas fa-close ";
        // line 104
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_in_day_course", [], "any", false, false, false, 104)) ? ("
                                                hidden") : (""));
        // line 105
        echo "\"></i>
                                        </span>
                                        <span>";
        // line 107
        echo twig_escape_filter($this->env, t("Cours du Jour"), "html", null, true);
        echo "</span>
                                    </p>
                                    <p class=\"";
        // line 109
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_in_night_course", [], "any", false, false, false, 109)) ? ("
                                        text-success") : ("text-danger"));
        // line 110
        echo "\">
                                        <span>
                                            <i class=\"fas fa-check ";
        // line 112
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_in_night_course", [], "any", false, false, false, 112)) ? ("") : ("
                                                hidden"));
        // line 113
        echo "\"></i>
                                            <i class=\"fas fa-close ";
        // line 114
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_in_night_course", [], "any", false, false, false, 114)) ? ("
                                                hidden") : (""));
        // line 115
        echo "\"></i>
                                        </span>
                                        <span class=\"ms-1\">";
        // line 117
        echo twig_escape_filter($this->env, t("Cours du Soir"), "html", null, true);
        echo "</span>
                                    </p>
                                    <p class=\"";
        // line 119
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_scholarship_available", [], "any", false, false, false, 119)) ? ("
                                        text-success") : ("text-danger"));
        // line 120
        echo "\">
                                        <span>
                                            <i class=\"fas fa-check ";
        // line 122
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_scholarship_available", [], "any", false, false, false, 122)) ? ("") : ("
                                                hidden"));
        // line 123
        echo "\"></i>
                                            <i class=\"fas fa-close ";
        // line 124
        echo ((twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_scholarship_available", [], "any", false, false, false, 124)) ? ("
                                                hidden") : (""));
        // line 125
        echo "\"></i>
                                        </span>
                                        <span class=\"ms-1\">";
        // line 127
        echo twig_escape_filter($this->env, t("Bourse de formation"), "html", null, true);
        echo "</span>
                                    </p>
                                </div>

                                <div  class=\"col-12 col-md-6\">
                                    <h6 style=\"font-size: 0.9rem;\">
                                        ";
        // line 133
        echo twig_escape_filter($this->env, t("Nombre de places disponibles"), "html", null, true);
        echo "
                                    </h6>
                                    <p>";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_max_places", [], "any", false, false, false, 135), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            ";
        // line 138
        if (($context["admission_group_additionnal_info"] ?? null)) {
            // line 139
            echo "                            
                            <div>
                                <h6 style=\"font-size: 0.9rem;\">
                                    ";
            // line 142
            echo twig_escape_filter($this->env, t("Informtations Additionnelles"), "html", null, true);
            echo "
                                </h6>
                                <p>";
            // line 144
            echo twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_additionnal_info", [], "any", false, false, false, 144);
            echo "</p>
                            </div>
                            ";
        }
        // line 147
        echo "                           
                        </div>
                    </div>
                    ";
        // line 150
        if (($context["isActiveAdmission"] ?? null)) {
            // line 151
            echo "                    <div class=\"mt-4  \">
                        <a href=\"/admission/";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admission"] ?? null), "admission_group_id", [], "any", false, false, false, 152), "html", null, true);
            echo "/application\"  class=\"w-100 btn btn-common bg-primary text-white\">";
            echo twig_escape_filter($this->env, t("Postuler"), "html", null, true);
            echo "</a>
                    </div>
                    ";
        } else {
            // line 155
            echo "                    <div class=\"mt-4 d-lg-none \">
                        <a disabled=\"disabled\" href=\"#\"  class=\"w-100 btn btn-common bg-primary text-white disabled\">";
            // line 156
            echo twig_escape_filter($this->env, t("Cloturé"), "html", null, true);
            echo "</a>
                    </div>
                    ";
        }
        // line 159
        echo "                </div>

            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function () {
        if (window.location.hash == '#nav-admission-tab') {
            document.querySelector('#nav-admission-tab').click(); // theTabID of the tab you want to open

        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "client/admission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 159,  349 => 156,  346 => 155,  338 => 152,  335 => 151,  333 => 150,  328 => 147,  322 => 144,  317 => 142,  312 => 139,  310 => 138,  304 => 135,  299 => 133,  290 => 127,  286 => 125,  283 => 124,  280 => 123,  277 => 122,  273 => 120,  270 => 119,  265 => 117,  261 => 115,  258 => 114,  255 => 113,  252 => 112,  248 => 110,  245 => 109,  240 => 107,  236 => 105,  233 => 104,  230 => 103,  227 => 102,  222 => 100,  217 => 98,  205 => 88,  201 => 87,  196 => 84,  192 => 83,  185 => 79,  173 => 71,  166 => 68,  159 => 64,  151 => 59,  143 => 56,  139 => 55,  130 => 49,  124 => 46,  112 => 40,  109 => 39,  97 => 30,  94 => 29,  91 => 28,  79 => 19,  76 => 18,  74 => 17,  71 => 16,  69 => 15,  63 => 12,  59 => 11,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/admission.html.twig", "/home/admicuwm/public_html/templates/client/admission.html.twig");
    }
}
