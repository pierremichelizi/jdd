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

/* client/job-detail.html.twig */
class __TwigTemplate_f53fc66b44b6e5eac706be79f13b883a extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/job-detail.html.twig", 1);
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
            <div class=\"mx-auto col-lg-7 col-xl-8 \">
                <!-- breadcrumb area start here  -->
                <div class=\"breadcrumb-wrap style-01\" style=\"margin-bottom: 30px !important; padding:0px\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"breadcrumb-content\">
                                <h3 class=\"title \">";
        // line 16
        echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "job_title", [], "any", false, false, false, 16));
        echo "</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb area end here  -->

                <!-- course details area start hare  -->
                <div class=\"course-derails-inner  bg-white course-as-product-wrap p-5\">

                    ";
        // line 26
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "job_description", [], "any", false, false, false, 26))) {
            // line 27
            echo "                    <div class=\"about-course mt-4\">

                        <h3 class=\"details-title text-primary\">";
            // line 29
            echo twig_escape_filter($this->env, t("Description du Job"), "html", null, true);
            echo "</h3>

                        <p class=\"paragraph\">
                            ";
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "job_description", [], "any", false, false, false, 32);
            echo "
                        </p>

                    </div>

                    ";
        }
        // line 38
        echo "                    <div class=\"row\">
                        
                        ";
        // line 40
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_targeted_jobs", [], "any", false, false, false, 40))) {
            // line 41
            echo "                        <div class=\"about-course mt-4 col-lg-6\">
                            <h3 class=\"details-title\">";
            // line 42
            echo twig_escape_filter($this->env, t("Les Professions Visés"), "html", null, true);
            echo "</h3>

                            <ul class=\"ul check-point-list style-01 v-03\">
                                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(json_decode(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_targeted_jobs", [], "any", false, false, false, 45)));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 46
                echo "                                <li class=\"single-check-point\">
                                    <span class=\"icon-wrap\">
                                        <i class=\"fa-solid fa-check icon\"></i>
                                    </span>
                                    <span class=\"content\">
                                        <p class=\"text\">";
                // line 51
                echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                echo "</p>
                                    </span>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </ul>
                        </div>
                        ";
        }
        // line 58
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_job_callings", [], "any", false, false, false, 58))) {
            // line 59
            echo "                        <div class=\"about-course mt-4  col-lg-6\">
                            <h3 class=\"details-title\">";
            // line 60
            echo twig_escape_filter($this->env, t("Les Débouchés"), "html", null, true);
            echo "</h3>

                            <ul class=\"ul check-point-list style-01 v-03\">
                                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(json_decode(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "program_job_callings", [], "any", false, false, false, 63)));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 64
                echo "                                <li class=\"single-check-point\">
                                    <span class=\"icon-wrap\">
                                        <i class=\"fa-solid fa-check icon\"></i>
                                    </span>
                                    <span class=\"content\">
                                        <p class=\"text\">";
                // line 69
                echo twig_escape_filter($this->env, $context["d"], "html", null, true);
                echo "</p>
                                    </span>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                            </ul>
                        </div>
                        ";
        }
        // line 76
        echo "                    </div>


                    <div class=\"course-tutorial\">
                        <section class=\"category-section-area mt-4\">
                            <div class=\"container custom-container-01 p-0\">
                                <div class=\"row\">
                                    <div class=\"section-title-wrapper p-0  d-flex justify-content-between mb-4\">
                                        <h4 class=\"mb-lg-0 px-2 text-primary\">";
        // line 84
        echo twig_escape_filter($this->env, t("Détails du job"), "html", null, true);
        echo "</h4>
                                        
                                    </div>
                                </div>
                                <div>
                                    <h6>";
        // line 89
        echo twig_escape_filter($this->env, t("Secteur "), "html", null, true);
        echo "</h6>
                                    <p class=\"paragraph ms-3\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "sector_name", [], "any", false, false, false, 90), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"row\">
                                    <div class=\"mt-4 col-12 \">
                                        <h6 class=\"\">";
        // line 94
        echo twig_escape_filter($this->env, t("Compétences requises"), "html", null, true);
        echo "</h6>
                                        <ul class=\" check-point-list mt-2\">
                                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(json_decode(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "job_required_competences", [], "any", false, false, false, 96)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 97
            echo "                                            <li class=\"single-check-point mt-2\">
                                                <p class=\"paragraph\">
                                                    <span class=\"icon-wrap\">
                                                        <i class=\"fa-solid fa-check icon\"></i>
                                                    </span>
                                                    <span class=\"ms-3\">";
            // line 102
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</span>
                                                </p>
                                            </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                        </ul>
                                    </div>
                                    <div class=\"mt-4 col-12 \">
                                        <h6 class=\"\">";
        // line 109
        echo twig_escape_filter($this->env, t("Documents requis"), "html", null, true);
        echo "</h6>
                                        <ul class=\" check-point-list mt-2\">
                                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(json_decode(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "job_required_documents", [], "any", false, false, false, 111)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 112
            echo "                                            <li class=\"single-check-point mt-2\">
                                                <p class=\"paragraph\">
                                                    <span class=\"icon-wrap\">
                                                        <i class=\"fa-solid fa-check icon\"></i>
                                                    </span>
                                                    <span class=\"ms-3\">";
            // line 117
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</span>
                                                </p>
                                            </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                        </ul>
                                    </div>
                                </div>
                               
                                <div class=\"mt-4\">

                                </div>
                            </div>
                        </section>
                        
                    </div>
                    <div class=\"mt-4\">
                        <style>
                            .postuler:hover{
                                color:#fff !important;
                            }
                        </style>
                        <a href=\"/submissions/job/";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "job_id", [], "any", false, false, false, 138), "html", null, true);
        echo "\"   class=\"postuler text-primary w-100  mx-auto btn btn-common btn-primary\">
                            ";
        // line 139
        echo twig_escape_filter($this->env, t("Postuler"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
                <!-- course details area end hare  -->
            </div>

        </div>

    </div>
</div>
<!-- about page end here  -->
";
    }

    public function getTemplateName()
    {
        return "client/job-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 139,  289 => 138,  270 => 121,  260 => 117,  253 => 112,  249 => 111,  244 => 109,  239 => 106,  229 => 102,  222 => 97,  218 => 96,  213 => 94,  206 => 90,  202 => 89,  194 => 84,  184 => 76,  179 => 73,  169 => 69,  162 => 64,  158 => 63,  152 => 60,  149 => 59,  146 => 58,  141 => 55,  131 => 51,  124 => 46,  120 => 45,  114 => 42,  111 => 41,  109 => 40,  105 => 38,  96 => 32,  90 => 29,  86 => 27,  84 => 26,  71 => 16,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/job-detail.html.twig", "/home/admicuwm/public_html/templates/client/job-detail.html.twig");
    }
}
