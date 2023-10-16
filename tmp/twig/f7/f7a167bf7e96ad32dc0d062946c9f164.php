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

/* client/catalogue.html.twig */
class __TwigTemplate_5d41a4c6e3637653a190ddf1fb920449 extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/catalogue.html.twig", 1);
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
        echo twig_escape_filter($this->env, t("Programmes & Formations"), "html", null, true);
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
                                <div>
                                    <h6 class=\"\">";
        // line 35
        echo twig_escape_filter($this->env, t("Langue"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" name=\"lang:en\" ";
        // line 39
        echo ((twig_in_filter("en", ($context["filters_langs"] ?? null))) ? ("checked") : (""));
        echo "
                                                    type=\"checkbox\" value=\"en\" id=\"defaultCheck1\">
                                                <label class=\"form-check-label\" for=\"defaultCheck1\">
                                                    Anglais
                                                </label>
                                            </div>
                                            <div class=\"\">
                                                <!--p class=\"px-2 text-white rounded-pill bg-primary small\">6</p-->
                                            </div>
                                        </div>
                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check mt-1\">
                                                <input class=\"form-check-input\" name=\"lang:fr\" type=\"checkbox\"
                                                    value=\"fr\" id=\"defaultCheck2\" ";
        // line 52
        echo ((twig_in_filter("fr",         // line 53
($context["filters_langs"] ?? null))) ? ("checked") : (""));
        echo ">
                                                <label class=\"form-check-label\" for=\"defaultCheck2\">
                                                    Français
                                                </label>
                                            </div>
                                            <div class=\"\">
                                                <!--p class=\"px-2 text-white rounded-pill bg-primary small\">6</p-->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"mt-4\">
                                    <h6>";
        // line 66
        echo twig_escape_filter($this->env, t("Villes"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3 d-flex flex-column\">
                                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["towns"] ?? null), 0, 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 69
            echo "                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check form-check-inline\">
                                                <input class=\"form-check-input\" name=\"town:";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
                                                    ";
            // line 72
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 72),             // line 73
($context["filters_towns"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\" id=\"inlineCheckbox1\"
                                                    value=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 74), "html", null, true);
            echo "\">
                                                <label class=\"form-check-label\"
                                                    for=\"inlineCheckbox1\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_name", [], "any", false, false, false, 76), "html", null, true);
            echo "</label>
                                            </div>
                                            ";
            // line 78
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 78))) {
                // line 79
                echo "                                            <div class=\"\">
                                                <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 80), "html", null, true);
                echo "</p>
                                            </div>
                                            ";
            }
            // line 83
            echo "                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                        <div id=\"collapseOne\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["towns"] ?? null), 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 87
            echo "                                            <div class=\"d-flex justify-content-between mt-1\">
                                                <div class=\"form-check form-check-inline\">
                                                    <input class=\"form-check-input\" name=\"town:";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 89), "html", null, true);
            echo "\"
                                                        ";
            // line 90
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 90),             // line 91
($context["filters_towns"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\"
                                                        id=\"inlineCheckbox1\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 92), "html", null, true);
            echo "\">
                                                    <label class=\"form-check-label\"
                                                        for=\"inlineCheckbox1\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_name", [], "any", false, false, false, 94), "html", null, true);
            echo "</label>
                                                </div>
                                                ";
            // line 96
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 96))) {
                // line 97
                echo "                                                <div class=\"\">
                                                    <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 98), "html", null, true);
                echo "
                                                    </p>
                                                </div>
                                                ";
            }
            // line 102
            echo "                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                        </div>
                                        ";
        // line 105
        if (twig_length_filter($this->env, twig_slice($this->env, ($context["towns"] ?? null), 4))) {
            // line 106
            echo "                                        <div>
                                            <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#collapseOne\" aria-expanded=\"false\"
                                                aria-controls=\"collapseOne\">
                                                <p class=\" mt-2 \"><small>";
            // line 110
            echo twig_escape_filter($this->env, t("Voir plus"), "html", null, true);
            echo "</small></p>
                                            </a>
                                        </div>
                                        ";
        }
        // line 114
        echo "
                                    </div>
                                </div>
                                <div class=\"mt-4\">
                                    <h6>";
        // line 118
        echo twig_escape_filter($this->env, t("Secteurs"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3 d-flex flex-column\">
                                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["domaines"] ?? null), 0, 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 121
            echo "                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check form-check-inline\">
                                                <input class=\"form-check-input\" name=\"domaine:";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 123), "html", null, true);
            echo "\"
                                                    ";
            // line 124
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 124),             // line 125
($context["filter_domaines"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\"
                                                    id=\"inlineCheckbox1\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 126), "html", null, true);
            echo "\">
                                                <label class=\"form-check-label\"
                                                    for=\"inlineCheckbox1\">";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["r"], "sector_name", [], "any", false, false, false, 128);
            echo "</label>
                                            </div>
                                            ";
            // line 130
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 130))) {
                // line 131
                echo "                                            <div class=\"\">
                                                <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 132), "html", null, true);
                echo "</p>
                                            </div>
                                            ";
            }
            // line 135
            echo "                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                                        <div id=\"collapsetwo\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                            ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["domaines"] ?? null), 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 139
            echo "                                            <div class=\"d-flex justify-content-between mt-1\">
                                                <div class=\"form-check form-check-inline\">
                                                    <input class=\"form-check-input\" name=\"domaine:";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 141), "html", null, true);
            echo "\"
                                                        ";
            // line 142
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 142),             // line 143
($context["filter_domaines"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\"
                                                        id=\"inlineCheckbox1\" value=\"";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_id", [], "any", false, false, false, 144), "html", null, true);
            echo "\">
                                                    <label class=\"form-check-label\"
                                                        for=\"inlineCheckbox1\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sector_name", [], "any", false, false, false, 146), "html", null, true);
            echo "</label>
                                                </div>
                                                ";
            // line 148
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 148))) {
                // line 149
                echo "                                                <div class=\"\">
                                                    <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 150), "html", null, true);
                echo "
                                                    </p>
                                                </div>
                                                ";
            }
            // line 154
            echo "                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                        </div>
                                        ";
        // line 157
        if (twig_length_filter($this->env, twig_slice($this->env, ($context["domaines"] ?? null), 4))) {
            // line 158
            echo "                                        <div>
                                            <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#collapsetwo\" aria-expanded=\"false\"
                                                aria-controls=\"collapsetwo\">
                                                <p class=\" mt-2 \"><small>";
            // line 162
            echo twig_escape_filter($this->env, t("Voir plus"), "html", null, true);
            echo "</small></p>
                                            </a>
                                        </div>
                                        ";
        }
        // line 166
        echo "

                                    </div>
                                </div>
                                <div class=\"mt-4\">
                                    <h6>";
        // line 171
        echo twig_escape_filter($this->env, t("Diplomes"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3 d-flex flex-column\">
                                        ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["diplomas"] ?? null), 0, 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 174
            echo "                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check form-check-inline\">
                                                <input class=\"form-check-input\" name=\"diploma:";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "diploma_id", [], "any", false, false, false, 176), "html", null, true);
            echo "\"
                                                    ";
            // line 177
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "diploma_id", [], "any", false, false, false, 177),             // line 178
($context["filter_diplomas"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\"
                                                    id=\"inlineCheckbox1\" value=\"";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "diploma_id", [], "any", false, false, false, 179), "html", null, true);
            echo "\">
                                                <label class=\"form-check-label\"
                                                    for=\"inlineCheckbox1\">";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "diploma_name", [], "any", false, false, false, 181), "html", null, true);
            echo "</label>
                                            </div>
                                            ";
            // line 183
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 183))) {
                // line 184
                echo "                                            <div class=\"\">
                                                <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 185), "html", null, true);
                echo "</p>
                                            </div>
                                            ";
            }
            // line 188
            echo "                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                                        <div id=\"collapseThree\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                            ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["diplomas"] ?? null), 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 192
            echo "                                            <div class=\"d-flex justify-content-between mt-1\">
                                                <div class=\"form-check form-check-inline\">
                                                    <input class=\"form-check-input\" name=\"diploma:";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "diploma_id", [], "any", false, false, false, 194), "html", null, true);
            echo "\"
                                                        ";
            // line 195
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "diploma_id", [], "any", false, false, false, 195),             // line 196
($context["filter_diplomas"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\"
                                                        id=\"inlineCheckbox1\" value=\"";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "diploma_id", [], "any", false, false, false, 197), "html", null, true);
            echo "\">
                                                    <label class=\"form-check-label\"
                                                        for=\"inlineCheckbox1\">";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "diploma_name", [], "any", false, false, false, 199), "html", null, true);
            echo "</label>
                                                </div>
                                                ";
            // line 201
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 201))) {
                // line 202
                echo "                                                <div class=\"\">
                                                    <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 203), "html", null, true);
                echo "
                                                    </p>
                                                </div>
                                                ";
            }
            // line 207
            echo "                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                                        </div>
                                        ";
        // line 210
        if (twig_length_filter($this->env, twig_slice($this->env, ($context["diplomas"] ?? null), 4))) {
            // line 211
            echo "                                        <div>
                                            <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#collapseThree\" aria-expanded=\"false\"
                                                aria-controls=\"collapseThree\">
                                                <p class=\" mt-2 \"><small>";
            // line 215
            echo twig_escape_filter($this->env, t("Voir plus"), "html", null, true);
            echo "</small></p>
                                            </a>
                                        </div>
                                        ";
        }
        // line 219
        echo "

                                    </div>
                                </div>
                                <div>
                                    <button type=\"submit\"
                                        class=\"btn btn-common w-100 p-3 round-lg btn-primary\">";
        // line 225
        echo twig_escape_filter($this->env, t("Filtrer"), "html", null, true);
        echo "</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-8 p-3 mt-lg-4  \">
                        ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["p"]) {
            // line 232
            echo "                        <div>

                            <div class=\"mt-3 shadow-sm offer-item p-4 p-lg-4 bg-white col-12 ";
            // line 234
            echo ((($context["k"] == 0)) ? ("mt-0") : (""));
            echo "\"
                                style=\"border-radius: 30px;\">
                                <div class=\"d-flex justify-content-between\">
                                    <h4>";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "program_name", [], "any", false, false, false, 237), "html", null, true);
            echo " </h4>
                                    <p class=\"\"> <span class=\"mb-0\">
                                        <i class=\"fas fa-location-pin\"></i>
                                        <span class=\"ms-2\">";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "town_name", [], "any", false, false, false, 240), "html", null, true);
            echo "</span>
                                    </span> | <strong>";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "program_code", [], "any", false, false, false, 241), "html", null, true);
            echo "</strong></p>
                                </div>
                                <div class=\" d-sm-flex justify-content-between \">
                                    <div class=\"d-flex align-items-center\">
                                       
                                    </div>
                                    <div class=\"mt-sm-0 mt-4 d-flex justify-content-end align-items-center\">
                                        <p class=\" text-success m-0 me-2 text-center \" style=\"min-width: 70px\">
                                            <!--span>";
            // line 249
            echo twig_escape_filter($this->env, t("Active"), "html", null, true);
            echo "</span>
                                            <span>
                                                <span style=\"width:10px; height:10px;\"
                                                    class=\"d-inline-block   bg-success border border-light rounded-circle\">
                                                    <span class=\"visually-hidden\">New alerts</span>
                                                </span>
                                            </span-->
                                        </p>
                                        <a href=\"/catalogue/";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "program_id", [], "any", false, false, false, 257), "html", null, true);
            echo "\"
                                            class=\"w-100  btn-action btn btn-primary text-primary px-4\"
                                            style=\"background:rgba(118, 74, 241, 0.18); border-radius: 10px;\">";
            // line 259
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
        // line 265
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"pagination\">
                            <ul class=\"pagination-list\">
                                ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 272
            echo "                                <li>
                                    <a href=\"";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "url", [], "any", false, false, false, 273), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            echo "\"
                                        class=\"page-number  ";
            // line 274
            echo (((($context["currentPage"] ?? null) == twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 274))) ? ("current") : (""));
            echo " ";
            echo ((($context["k"] == "prev")) ? ("able left-arrow") : (((($context["k"] == "next")) ? ("able right-arrow") : (""))));
            echo "\">
                                        ";
            // line 275
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 275)), "html", null, true);
            echo "
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
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
            
            window.location.href = \"/catalogue?\" + query.join(\"&\")
        })
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "client/catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 279,  611 => 275,  605 => 274,  599 => 273,  596 => 272,  592 => 271,  584 => 265,  572 => 259,  567 => 257,  556 => 249,  545 => 241,  541 => 240,  535 => 237,  529 => 234,  525 => 232,  521 => 231,  512 => 225,  504 => 219,  497 => 215,  491 => 211,  489 => 210,  486 => 209,  479 => 207,  472 => 203,  469 => 202,  467 => 201,  462 => 199,  457 => 197,  453 => 196,  452 => 195,  448 => 194,  444 => 192,  440 => 191,  437 => 190,  430 => 188,  424 => 185,  421 => 184,  419 => 183,  414 => 181,  409 => 179,  405 => 178,  404 => 177,  400 => 176,  396 => 174,  392 => 173,  387 => 171,  380 => 166,  373 => 162,  367 => 158,  365 => 157,  362 => 156,  355 => 154,  348 => 150,  345 => 149,  343 => 148,  338 => 146,  333 => 144,  329 => 143,  328 => 142,  324 => 141,  320 => 139,  316 => 138,  313 => 137,  306 => 135,  300 => 132,  297 => 131,  295 => 130,  290 => 128,  285 => 126,  281 => 125,  280 => 124,  276 => 123,  272 => 121,  268 => 120,  263 => 118,  257 => 114,  250 => 110,  244 => 106,  242 => 105,  239 => 104,  232 => 102,  225 => 98,  222 => 97,  220 => 96,  215 => 94,  210 => 92,  206 => 91,  205 => 90,  201 => 89,  197 => 87,  193 => 86,  190 => 85,  183 => 83,  177 => 80,  174 => 79,  172 => 78,  167 => 76,  162 => 74,  158 => 73,  157 => 72,  153 => 71,  149 => 69,  145 => 68,  140 => 66,  124 => 53,  123 => 52,  107 => 39,  100 => 35,  93 => 31,  77 => 17,  74 => 16,  70 => 15,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/catalogue.html.twig", "/home/admicuwm/public_html/templates/client/catalogue.html.twig");
    }
}
