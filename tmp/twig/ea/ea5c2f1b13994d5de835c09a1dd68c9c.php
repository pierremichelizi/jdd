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

/* client/jobs.html.twig */
class __TwigTemplate_7cc47f3669225e5894366855c45e6afb extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/jobs.html.twig", 1);
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
<div class=\"instructors-wrapper single-page-section-bottom-space\">

    <!-- breadcrumb area start here  -->
    <div class=\"breadcrumb-wrap style-01\">
        <div class=\"container custom-container-01\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-content py-3\">
                        <h3 class=\"title\">";
        // line 15
        echo twig_escape_filter($this->env, t("Les Programmes D'emploi"), "html", null, true);
        echo "</h3>
                        <p class=\"details\">";
        // line 16
        echo twig_escape_filter($this->env, t("Rechercher et trouver en quelques minutes le programme qui vous
                            correspond"), "html", null, true);
        // line 17
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- teem area start here  -->
    <section class=\"our-team-area-wrapper\">
        <div class=\"our-team-inner\">
            <div class=\"container custom-container-01\">
                <div class=\"row column-gap-50\">
                    <div class=\"col-0 col-md-4 pe-xl-5 \">
                        <h5 class=\"mb-3\">";
        // line 31
        echo "Filtres";
        echo "</h5>
                        <div class=\"\">
                            <form class=\"search-form p-4 p-lg-5  card border-0 shadow-sm\" style=\"border-radius: 30px;\">
                                <div class=\"mt-4\">
                                    <h6>";
        // line 35
        echo twig_escape_filter($this->env, t("Secteurs"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3 d-flex flex-column\">
                                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["domaines"] ?? null), 0, 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 38
            echo "                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check form-check-inline\">
                                                <input class=\"form-check-input\" name=\"domaine:";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 40), "html", null, true);
            echo "\"
                                                    ";
            // line 41
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 41),             // line 42
($context["filter_domaines"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\"
                                                    id=\"inlineCheckbox1\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">
                                                <label class=\"form-check-label\"
                                                    for=\"inlineCheckbox1\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_name", [], "any", false, false, false, 45), "html", null, true);
            echo "</label>
                                            </div>
                                            ";
            // line 47
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 47))) {
                // line 48
                echo "                                            <div class=\"\">
                                                <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 49), "html", null, true);
                echo "</p>
                                            </div>
                                            ";
            }
            // line 52
            echo "                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                        <div id=\"collapsetwo\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["domaines"] ?? null), 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 56
            echo "                                            <div class=\"d-flex justify-content-between mt-1\">
                                                <div class=\"form-check form-check-inline\">
                                                    <input class=\"form-check-input\" name=\"domaine:";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
                                                        ";
            // line 59
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 59),             // line 60
($context["filter_domaines"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\"
                                                        id=\"inlineCheckbox1\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
                                                    <label class=\"form-check-label\"
                                                        for=\"inlineCheckbox1\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_name", [], "any", false, false, false, 63), "html", null, true);
            echo "</label>
                                                </div>
                                                ";
            // line 65
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 65))) {
                // line 66
                echo "                                                <div class=\"\">
                                                    <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 67), "html", null, true);
                echo "
                                                    </p>
                                                </div>
                                                ";
            }
            // line 71
            echo "                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                        </div>
                                        ";
        // line 74
        if (twig_length_filter($this->env, twig_slice($this->env, ($context["domaines"] ?? null), 4))) {
            // line 75
            echo "                                        <div>
                                            <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#collapsetwo\" aria-expanded=\"false\"
                                                aria-controls=\"collapsetwo\">
                                                <p class=\" mt-2 \"><small>";
            // line 79
            echo twig_escape_filter($this->env, t("Voir plus"), "html", null, true);
            echo "</small></p>
                                            </a>
                                        </div>
                                        ";
        }
        // line 83
        echo "

                                    </div>
                                </div>
                                <div>
                                    <button type=\"submit\" class=\"btn btn-common w-100 p-3 round-lg btn-primary\">";
        // line 88
        echo twig_escape_filter($this->env, t("Filtrer"), "html", null, true);
        echo "</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-8 p-3 mt-lg-4  \">
                        ";
        // line 94
        $context["type"] = ["FULLTIME" => "Temps Plein", "PARTIAL-TIME" => "Temps Partiel"];
        // line 95
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
            // line 96
            echo "                        <div>

                            <div class=\"mt-3 shadow-sm offer-item p-4  bg-white col-12 ";
            // line 98
            echo ((($context["k"] == 0)) ? ("mt-0") : (""));
            echo "\"
                                style=\"border-radius: 30px;\">
                                <div class=\"d-flex justify-content-between\">
                                    <h4>";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["p"], "job_title", [], "any", false, false, false, 101);
            echo "</h4>
                                    <p class=\"\"><strong class=\"badge bg-primary\">
                                        ";
            // line 103
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["type"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["p"], "job_type", [], "any", false, false, false, 103)] ?? null) : null), "html", null, true);
            echo "
                                    </strong></p>
                                </div>
                                <p class=\"text-truncate\">
                                    ";
            // line 107
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "job_description", [], "any", false, false, false, 107), 0, 200);
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "job_description", [], "any", false, false, false, 107)) > 200)) ? ("...") : (""));
            echo "
                                </p>
                                <div class=\"mt-4 d-sm-flex justify-content-between \">
                                    <div class=\"d-flex align-items-center\">

                                    </div>
                                    <div class=\"mt-sm-0 mt-4 d-flex justify-content-end align-items-center\">
                                        
                                        <a href=\"/jobs/";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "job_id", [], "any", false, false, false, 115), "html", null, true);
            echo "\"
                                            class=\"w-100  btn-action btn btn-primary text-primary px-4\"
                                            style=\"background:rgba(118, 74, 241, 0.18); border-radius: 10px;\">";
            // line 117
            echo twig_escape_filter($this->env, t("Détails"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"pagination\">
                            <ul class=\"pagination-list\">
                                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 130
            echo "                                <li>
                                    <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "url", [], "any", false, false, false, 131), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            echo "\"
                                        class=\"page-number  ";
            // line 132
            echo (((($context["currentPage"] ?? null) == twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 132))) ? ("current") : (""));
            echo " ";
            echo ((($context["k"] == "prev")) ? ("able left-arrow") : (((($context["k"] == "next")) ? ("able right-arrow") : (""))));
            echo "\">
                                        ";
            // line 133
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 133)), "html", null, true);
            echo "
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teem area end here  -->
</div>
<!-- about page end here  -->
<script>
    document.querySelector(\"body\").onload = function () {
        \$('form.search-form ').on(\"submit\", (e) => {
            e.preventDefault();
            const { form: values } = getFormValues(\"form.search-form\");
            const data = {
                domaines:[],
                diplomas:[],
                langs:[],
                towns:[]
            }
            for (let i in values) {
                if (i && values[i]) {
                    const d = i.split(\":\");
                    const name=d[0] + \"s\";
                    data[name] = [
                        ...(data[name] ?? []),
                        d[1]
                    ]
                    console.log(d[1])
                }
            }
            const query = []
            for (let i in data) {
                query.push(`\${i}=\${data[i].join(\",\")}`)
            }
            
            window.location.href = \"/jobs?\" + query.join(\"&\")
        })
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "client/jobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 137,  318 => 133,  312 => 132,  306 => 131,  303 => 130,  299 => 129,  291 => 123,  279 => 117,  274 => 115,  262 => 107,  255 => 103,  250 => 101,  244 => 98,  240 => 96,  235 => 95,  233 => 94,  224 => 88,  217 => 83,  210 => 79,  204 => 75,  202 => 74,  199 => 73,  192 => 71,  185 => 67,  182 => 66,  180 => 65,  175 => 63,  170 => 61,  166 => 60,  165 => 59,  161 => 58,  157 => 56,  153 => 55,  150 => 54,  143 => 52,  137 => 49,  134 => 48,  132 => 47,  127 => 45,  122 => 43,  118 => 42,  117 => 41,  113 => 40,  109 => 38,  105 => 37,  100 => 35,  93 => 31,  77 => 17,  74 => 16,  70 => 15,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/jobs.html.twig", "/home/admicuwm/public_html/templates/client/jobs.html.twig");
    }
}
