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

/* client/program-details.html.twig */
class __TwigTemplate_398e5e6bc1ef72b5b84cc73f2ef3795f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "client/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/program-details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "AdmissionFacile | ";
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Obtener votre admission sans perdre du temps"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!-- about page start here  -->
<div class=\"course-details-wrapper single-page-section-top-space single-page-section-bottom-space\">
    <div class=\"container custom-container-01\">
        <div class=\"row\">
            <div class=\"col-lg-7 col-xl-8\">
                <!-- breadcrumb area start here  -->
                <div class=\"breadcrumb-wrap style-01\" style=\"margin-bottom: 30px !important; padding:0px\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"breadcrumb-content\">
                                <h3 class=\"title\">";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_name", [], "any", false, false, false, 16);
        echo "</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb area end here  -->

                <!-- course details area start hare  -->
                <div class=\"course-derails-inner\">
                    <!--div class=\"feedback-and-review\">
                        <div class=\"feedback\">
                            <i class=\"fa-solid fa-star icon active\"></i>
                            <i class=\"fa-solid fa-star icon active\"></i>
                            <i class=\"fa-solid fa-star icon active\"></i>
                            <i class=\"fa-solid fa-star icon active\"></i>
                            <i class=\"fa-solid fa-star icon\"></i>
                            <span class=\"numb\">4.8 de popularité </span>
                        </div>
                    </div-->
                    ";
        // line 35
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_goal_description", [], "any", false, false, false, 35))) {
            // line 36
            echo "                    <div class=\"about-course mt-4\">

                        <h3 class=\"details-title\">";
            // line 38
            echo twig_escape_filter($this->env, t("Les Objectifs Du Programme"), "html", null, true);
            echo "</h3>

                        <p class=\"paragraph\">
                            ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_goal_description", [], "any", false, false, false, 41);
            echo "
                        </p>

                    </div>
                    ";
        }
        // line 46
        echo "                    <div class=\"row\">
                        
                        ";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_targeted_jobs", [], "any", false, false, false, 48))) {
            // line 49
            echo "                        <div class=\"about-course mt-4 col-lg-6\">
                            <h3 class=\"details-title\">";
            // line 50
            echo twig_escape_filter($this->env, t("Les Professions Visés"), "html", null, true);
            echo "</h3>

                            <ul class=\"ul check-point-list style-01 v-03\">
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(json_decode(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_targeted_jobs", [], "any", false, false, false, 53)));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 54
                echo "                                <li class=\"single-check-point\">
                                    <span class=\"icon-wrap\">
                                        <i class=\"fa-solid fa-check icon\"></i>
                                    </span>
                                    <span class=\"content\">
                                        <p class=\"text\">";
                // line 59
                echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                echo "</p>
                                    </span>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                            </ul>
                        </div>
                        ";
        }
        // line 66
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_job_callings", [], "any", false, false, false, 66))) {
            // line 67
            echo "                        <div class=\"about-course mt-4  col-lg-6\">
                            <h3 class=\"details-title\">";
            // line 68
            echo twig_escape_filter($this->env, t("Les Débouchés"), "html", null, true);
            echo "</h3>

                            <ul class=\"ul check-point-list style-01 v-03\">
                                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(json_decode(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_job_callings", [], "any", false, false, false, 71)));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 72
                echo "                                <li class=\"single-check-point\">
                                    <span class=\"icon-wrap\">
                                        <i class=\"fa-solid fa-check icon\"></i>
                                    </span>
                                    <span class=\"content\">
                                        <p class=\"text\">";
                // line 77
                echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                echo "</p>
                                    </span>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                            </ul>
                        </div>
                        ";
        }
        // line 84
        echo "                    </div>


                    <div class=\"course-tutorial\">
                        <section class=\"category-section-area mt-4\">
                            <div class=\"container custom-container-01\">
                                <div class=\"row\">
                                    <div class=\"section-title-wrapper p-0 align-items-center d-flex justify-content-between\">
                                        <h3 class=\"mb-lg-0\">";
        // line 92
        echo twig_escape_filter($this->env, t("Informations"), "html", null, true);
        echo "</h3>
                                        <ul class=\"nav nav-pills mt-0\">
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link active\" style=\"padding: 15px 20px;\" data-bs-toggle=\"pill\"
                                                    data-bs-target=\"#discipline\">";
        // line 96
        echo twig_escape_filter($this->env, t("Admission"), "html", null, true);
        echo "</a>
                                            </li>
                                            <!--li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\" style=\"padding: 15px 20px;\" data-bs-toggle=\"pill\"
                                                    data-bs-target=\"#collage\">";
        // line 100
        echo twig_escape_filter($this->env, t("Contenu"), "html", null, true);
        echo "</a>
                                            </li-->
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade show active\" id=\"discipline\">
                                        <h5>";
        // line 107
        echo twig_escape_filter($this->env, t("Conditions d'admission"), "html", null, true);
        echo "</h5>
                                        <div class=\"mt-4\">
                                            ";
        // line 109
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_admission_terms", [], "any", false, false, false, 109);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"collage\">
                                        <h5>";
        // line 113
        echo twig_escape_filter($this->env, t("Le contenu du programme"), "html", null, true);
        echo "</h5>
                
                                        <div class=\"course-video-wrap\">
                                            <div class=\"accordion-wrapper style-03\">
                                                <!-- accordion wrapper -->
                                                ";
        // line 118
        $context["subjectHous"] = 0;
        // line 119
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["s"]) {
            // line 120
            echo "                                                <div id=\"accordion";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo " \">
                                                    <div class=\"card\">
                                                        <div class=\"card-header\" id=\"heading";
            // line 122
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">
                                                            <h5 class=\"mb-4\">
                                                                <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                                                    data-bs-target=\"#collapse";
            // line 125
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" aria-expanded=\"false\"
                                                                    aria-controls=\"collapse";
            // line 126
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">
                                                                    <p class=\"heading-text\">";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "program_subject_name", [], "any", false, false, false, 127), "html", null, true);
            echo "</p>
                                                                    <p class=\"details\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "program_subject_code", [], "any", false, false, false, 128), "html", null, true);
            echo " • ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "program_subject_hours_duration", [], "any", false, false, false, 128), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, t("Heure(s)"), "html", null, true);
            echo "</p>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id=\"collapse";
            // line 132
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" class=\"collapse\" data-bs-parent=\"#accordion";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\">
                                                            <div class=\"card-body pt-0\">
                                                                <div class=\"row mb-4\">
                                                                    <div class=\"col-md-6\">
                                                                        <h6>";
            // line 136
            echo twig_escape_filter($this->env, t("Durée du programme"), "html", null, true);
            echo "</h6>
                                                                        <p>";
            // line 137
            echo twig_escape_filter($this->env, t(twig_get_attribute($this->env, $this->source, $context["s"], "program_subject_hours_duration", [], "any", false, false, false, 137)), "html", null, true);
            echo "</p>
                                                                    </div>
                                                                    <div class=\"col-md-6\">
                                                                        <h6>";
            // line 140
            echo twig_escape_filter($this->env, t("Code du programme"), "html", null, true);
            echo "</h6>
                                                                        <p>";
            // line 141
            echo t(twig_get_attribute($this->env, $this->source, $context["s"], "program_subject_code", [], "any", false, false, false, 141));
            echo "</p>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class=\"mb-4\">
                                                                    <h6>";
            // line 146
            echo twig_escape_filter($this->env, t("Description"), "html", null, true);
            echo "</h6>
                                                                <p>";
            // line 147
            echo t(twig_get_attribute($this->env, $this->source, $context["s"], "program_subject_description", [], "any", false, false, false, 147));
            echo "</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                ";
            // line 154
            $context["subjectHous"] = (($context["subjectHous"] ?? null) + twig_get_attribute($this->env, $this->source, $context["s"], "program_subject_hours_duration", [], "any", false, false, false, 154));
            // line 155
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>

                </div>
                <!-- course details area end hare  -->
            </div>

            <div class=\"col-md-7 col-lg-5 col-xl-4\">
                <div class=\"course-as-product-wrap\">
                    <div class=\"content\">
                        <div class=\"price-and-enroll text-success\">
                            <span class=\"price \">";
        // line 173
        echo twig_escape_filter($this->env, ($context["institutesCount"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, t("Etablissements"), "html", null, true);
        echo "</span>
                            <span class=\"enroll text-success\">
                                ";
        // line 175
        if (($context["isActive"] ?? null)) {
            // line 176
            echo "                                <span>
                                    <span style=\"width:10px; height:10px;\"
                                        class=\"d-inline-block   bg-success border border-light rounded-circle\">
                                        <span class=\"visually-hidden\">New alerts</span>
                                    </span>
                                </span>
                                <span>";
            // line 182
            echo twig_escape_filter($this->env, t(" Ouverte"), "html", null, true);
            echo "</span>
                                ";
        }
        // line 184
        echo "                            </span>
                        </div>
                        <div class=\"feature-wrap mt-4\">
                            <h5 class=\"mb-4\">";
        // line 187
        echo twig_escape_filter($this->env, t("Détails Utiles"), "html", null, true);
        echo "</h5>

                            <ul class=\"ul check-point-list style-01 v-03\">
                                <li class=\"single-check-point\">
                                    <span class=\"icon-wrap\">
                                        <i class=\"fa-solid fa-check icon\"></i>
                                    </span>
                                    <span class=\"content\">
                                        <p class=\"text\">";
        // line 195
        echo twig_escape_filter($this->env, t("Code"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_code", [], "any", false, false, false, 195), "html", null, true);
        echo "
                                        </p>
                                    </span>
                                </li>
                                <li class=\"single-check-point\">
                                    <span class=\"icon-wrap\">
                                        <i class=\"fa-solid fa-check icon\"></i>
                                    </span>
                                    <span class=\"content\">
                                        <p class=\"text\">";
        // line 204
        echo twig_escape_filter($this->env, t("Diplome"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "diploma_name", [], "any", false, false, false, 204), "html", null, true);
        echo "
                                        </p>
                                    </span>
                                </li>

                                <!--li class=\"single-check-point\">
                                    <span class=\"icon-wrap\">
                                        <i class=\"fa-solid fa-check icon\"></i>
                                    </span>
                                    <span class=\"content\">
                                        <p class=\"text\">";
        // line 214
        echo twig_escape_filter($this->env, t("Nombres D'Unités"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["subjects"] ?? null)), "html", null, true);
        echo "
                                        </p>
                                    </span>
                                </li>
                                <li class=\"single-check-point\">
                                    <span class=\"icon-wrap\">
                                        <i class=\"fa-solid fa-check icon\"></i>
                                    </span>
                                    <span class=\"content\">
                                        <p class=\"text\">";
        // line 223
        echo twig_escape_filter($this->env, t("Nombres Total d'heures"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, ($context["subjectHous"] ?? null), "html", null, true);
        echo " h
                                        </p>
                                    </span>
                                </li-->

                               
                            </ul>
                        </div>
                        <div class=\"btn-wrap\">
                            <a href=\"/catalogue/";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_id", [], "any", false, false, false, 232), "html", null, true);
        echo "/institus\" class=\"btn-common p-4 add-to-cart\">Voir les établissements</a>
                        </div>

                        <p class=\"garunte-tag \">Veillez consulter les établissements offrant ce programme</p>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- about page end here  -->
";
    }

    public function getTemplateName()
    {
        return "client/program-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 232,  441 => 223,  427 => 214,  412 => 204,  398 => 195,  387 => 187,  382 => 184,  377 => 182,  369 => 176,  367 => 175,  360 => 173,  341 => 156,  335 => 155,  333 => 154,  323 => 147,  319 => 146,  311 => 141,  307 => 140,  301 => 137,  297 => 136,  288 => 132,  277 => 128,  273 => 127,  269 => 126,  265 => 125,  259 => 122,  253 => 120,  248 => 119,  246 => 118,  238 => 113,  231 => 109,  226 => 107,  216 => 100,  209 => 96,  202 => 92,  192 => 84,  187 => 81,  177 => 77,  170 => 72,  166 => 71,  160 => 68,  157 => 67,  154 => 66,  149 => 63,  139 => 59,  132 => 54,  128 => 53,  122 => 50,  119 => 49,  117 => 48,  113 => 46,  105 => 41,  99 => 38,  95 => 36,  93 => 35,  71 => 16,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/program-details.html.twig", "/home/admicuwm/public_html/templates/client/program-details.html.twig");
    }
}
