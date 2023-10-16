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

/* client/catalogue-universities.html.twig */
class __TwigTemplate_21a98a655933f2191a7abf59884dd34d extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/catalogue-universities.html.twig", 1);
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
        echo twig_escape_filter($this->env, t("Les Etablissements"), "html", null, true);
        echo "</h3>
                        <p class=\"details\">";
        // line 16
        echo twig_escape_filter($this->env, t("Rechercher et trouver en quelques minutes un établissement pour votre formation"), "html", null, true);
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
        // line 30
        echo twig_escape_filter($this->env, t("Filtres"), "html", null, true);
        echo "</h5>
                        <div class=\"\">
                            <form class=\"search-form p-4 p-lg-5  card border-0 shadow-sm\" style=\"border-radius: 30px;\">
                                <div>
                                    <h6 class=\"\">";
        // line 34
        echo twig_escape_filter($this->env, t("Langue"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" name=\"lang:en\" ";
        // line 38
        echo ((twig_test_empty(($context["filters_langs"] ?? null))) ? ("checked") : (((twig_in_filter("en", ($context["filters_langs"] ?? null))) ? ("checked") : (""))));
        echo " type=\"checkbox\" value=\"en\"
                                                    id=\"defaultCheck1\" >
                                                <label class=\"form-check-label\" for=\"defaultCheck1\">
                                                    Anglais
                                                </label>
                                            </div>
                                            <div class=\"\">
                                                
                                            </div>
                                        </div>
                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check mt-1\">
                                                <input class=\"form-check-input\" name=\"lang:fr\" type=\"checkbox\" value=\"fr\"
                                                    id=\"defaultCheck2\" ";
        // line 51
        echo ((twig_test_empty(($context["filters_langs"] ?? null))) ? ("checked") : (((twig_in_filter("fr", ($context["filters_langs"] ?? null))) ? ("checked") : (""))));
        echo ">
                                                <label class=\"form-check-label\" for=\"defaultCheck2\">
                                                    Français
                                                </label>
                                            </div>
                                            <div class=\"\">
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"mt-4\">
                                    <h6>";
        // line 64
        echo twig_escape_filter($this->env, t("Villes"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3 d-flex flex-column\">
                                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["town"] ?? null), 0, 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 67
            echo "                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check form-check-inline\">
                                                <input class=\"form-check-input\" name=\"town:";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 69), "html", null, true);
            echo "\" ";
            echo ((twig_test_empty(($context["filters_towns"] ?? null))) ? ("checked") : (((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 69), ($context["filters_towns"] ?? null))) ? ("checked") : (""))));
            echo " type=\"checkbox\" id=\"inlineCheckbox1\"
                                                    value=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
                                                <label class=\"form-check-label\"
                                                    for=\"inlineCheckbox1\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_name", [], "any", false, false, false, 72), "html", null, true);
            echo "</label>
                                            </div>
                                            ";
            // line 74
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 74))) {
                // line 75
                echo "                                            <div class=\"\">
                                                <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 76), "html", null, true);
                echo "</p>
                                            </div>
                                            ";
            }
            // line 79
            echo "                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                        <div id=\"collapseOne\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["town"] ?? null), 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 83
            echo "                                            <div class=\"d-flex justify-content-between mt-1\">
                                                <div class=\"form-check form-check-inline\">
                                                    <input class=\"form-check-input\" name=\"town:";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 85), "html", null, true);
            echo "\" ";
            echo ((twig_test_empty(($context["filters_towns"] ?? null))) ? ("checked") : (((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 85), ($context["filters_towns"] ?? null))) ? ("checked") : (""))));
            echo " type=\"checkbox\" id=\"inlineCheckbox1\"
                                                        value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 86), "html", null, true);
            echo "\">
                                                    <label class=\"form-check-label\"
                                                        for=\"inlineCheckbox1\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_name", [], "any", false, false, false, 88), "html", null, true);
            echo "</label>
                                                </div>
                                                ";
            // line 90
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 90))) {
                // line 91
                echo "                                                <div class=\"\">
                                                    <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 92), "html", null, true);
                echo "</p>
                                                </div>
                                                ";
            }
            // line 95
            echo "                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                        </div>
                                        ";
        // line 98
        if (twig_length_filter($this->env, twig_slice($this->env, ($context["town"] ?? null), 4))) {
            // line 99
            echo "                                        <div>
                                            <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#collapseOne\" aria-expanded=\"false\"
                                                aria-controls=\"collapseOne\">
                                                <p class=\" mt-2 \"><small>";
            // line 103
            echo twig_escape_filter($this->env, t("Voir plus"), "html", null, true);
            echo "</small></p>
                                            </a>
                                        </div>
                                        ";
        }
        // line 107
        echo "                                    </div>
                                </div>
                                <div class=\"mt-3\">
                                    <button type=\"submit\" class=\"btn btn-common w-100 p-3 round-lg btn-primary\">";
        // line 110
        echo twig_escape_filter($this->env, t("Filtrer"), "html", null, true);
        echo "</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-8 p-3 mt-lg-4 ";
        // line 115
        echo ((twig_test_empty(($context["institutions"] ?? null))) ? ("d-flex justify-content-center align-items-center") : (""));
        echo "\">
                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 117
            echo "                        <div class=\"offer-item p-4 p-lg-5 bg-white mt-5\" style=\"border-radius: 30px;\">
                            <div class=\"d-flex justify-content-between\">
                                <h4>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "institution_name", [], "any", false, false, false, 119), "html", null, true);
            echo " - <span class=\"text-primary\">";
            echo twig_escape_filter($this->env, t("Groupe"), "html", null, true);
            echo " ";
            echo "SJFJDND";
            echo "</span></h4>
                                ";
            // line 120
            $context["isActiveAdmission"] = 0;
            // line 121
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["i"], "admissions", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 122
                echo "                                ";
                $context["isActiveAdmission"] = (((twig_date_converter($this->env, "now") > twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_close_date", [], "any", false, false, false, 122)))) ? ((($context["isActiveAdmission"] ?? null) + 0)) : ((($context["isActiveAdmission"] ?? null) + 1)));
                // line 123
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                <p class=\"";
            echo ((($context["isActiveAdmission"] ?? null)) ? ("text-success") : ("text-danger"));
            echo "  m-0 me-2 \">
                                    <span class=\"";
            // line 125
            echo ((($context["isActiveAdmission"] ?? null)) ? ("text-success") : ("text-danger"));
            echo "\">";
            echo twig_escape_filter($this->env, ((($context["isActiveAdmission"] ?? null)) ? (t("Active")) : (t("Cloturée"))), "html", null, true);
            echo "</span>
                                    <span>
                                        <span style=\"width:10px; height:10px;\"
                                            class=\"d-inline-block   ";
            // line 128
            echo ((($context["isActiveAdmission"] ?? null)) ? ("bg-success") : ("bg-danger"));
            echo " border border-light rounded-circle\">
                                            <span class=\"visually-hidden\">New alerts</span>
                                        </span>
                                    </span>
                                </p>
                            </div>
                            <div>
                                <h6 class=\"border-bottom pb-2 mb-2 mt-4 mb-0\">";
            // line 135
            echo twig_escape_filter($this->env, t("Groupe d'admission"), "html", null, true);
            echo "</h6>
                                ";
            // line 136
            $context["places"] = 0;
            // line 137
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "admissions", [], "any", false, false, false, 137), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 138
                echo "                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <p><strong>";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_name", [], "any", false, false, false, 140), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_code", [], "any", false, false, false, 140), "html", null, true);
                echo ")</strong></p>
                                    </div>
                                    <div class=\"col-4\">
                                        ";
                // line 143
                if ((twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_close_date", [], "any", false, false, false, 143), "U"))) {
                    // line 144
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_max_places", [], "any", false, false, false, 144), "html", null, true);
                    echo " places disponibles
                                        ";
                }
                // line 146
                echo "                                    </div>
                                    <div class=\"col-4\">
                                        ";
                // line 148
                if (((twig_date_format_filter($this->env, "now", "U") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_start_date", [], "any", false, false, false, 148), "U")) && (twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_close_date", [], "any", false, false, false, 148), "U")))) {
                    // line 149
                    echo "                                            <span class=\"text-success\">
                                                ";
                    // line 150
                    echo twig_escape_filter($this->env, ("Ouverte jusqu'au " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_close_date", [], "any", false, false, false, 150), "d/m/Y")), "html", null, true);
                    echo "
                                            </span>
                                        ";
                } else {
                    // line 153
                    echo "                                            ";
                    if ((twig_date_format_filter($this->env, "now", "U") > twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_close_date", [], "any", false, false, false, 153), "U"))) {
                        // line 154
                        echo "                                            ";
                        echo twig_escape_filter($this->env, ("Cloturé le " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_close_date", [], "any", false, false, false, 154), "d/m/Y")), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 156
                        echo "                                            ";
                        echo twig_escape_filter($this->env, ("Débute le " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_start_date", [], "any", false, false, false, 156), "U")), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 158
                    echo "                                        ";
                }
                // line 159
                echo "                                    </div>
                                </div>
                                ";
                // line 161
                $context["places"] = (($context["places"] ?? null) + twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_max_places", [], "any", false, false, false, 161));
                // line 162
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                                <div id=\"collapseSimpleOne\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                    ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "admissions", [], "any", false, false, false, 164), 1));
            foreach ($context['_seq'] as $context["k"] => $context["r"]) {
                // line 165
                echo "                                    <div class=\"row\">
                                        <div class=\"col-4\">
                                            <p><strong>";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_name", [], "any", false, false, false, 167), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_code", [], "any", false, false, false, 167), "html", null, true);
                echo ")</strong></p>
                                        </div>
                                        <div class=\"col-4\">
                                            ";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_max_places", [], "any", false, false, false, 170), "html", null, true);
                echo " places disponibles
                                        </div>
                                        <div class=\"col-4\">
                                        ";
                // line 173
                if (((twig_date_converter($this->env, "now") >= twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_start_date", [], "any", false, false, false, 173))) && (twig_date_converter($this->env, "now") < twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_close_date", [], "any", false, false, false, 173))))) {
                    // line 174
                    echo "                                            <span class=\"text-success\">
                                                ";
                    // line 175
                    echo twig_escape_filter($this->env, ("Ouverte jusqu'au " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_close_date", [], "any", false, false, false, 175), "d/m/Y")), "html", null, true);
                    echo "
                                            </span>
                                        ";
                } else {
                    // line 178
                    echo "                                            ";
                    if ((twig_date_converter($this->env, "now") > twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_close_date", [], "any", false, false, false, 178)))) {
                        // line 179
                        echo "                                            ";
                        echo twig_escape_filter($this->env, ("Cloturé le " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_close_date", [], "any", false, false, false, 179), "d/m/Y")), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 181
                        echo "                                            ";
                        echo twig_escape_filter($this->env, ("Débute le " . twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_start_date", [], "any", false, false, false, 181))), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 183
                    echo "                                        ";
                }
                // line 184
                echo "                                        </div>
                                    </div>
                                    ";
                // line 186
                $context["places"] = (($context["places"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "admission_group_max_places", [], "any", false, false, false, 186));
                // line 187
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                                </div>
                                ";
            // line 189
            if (twig_length_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "admissions", [], "any", false, false, false, 189), 1))) {
                // line 190
                echo "                                <div>
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseSimpleOne\" aria-expanded=\"false\"
                                        aria-controls=\"collapseSimpleOne\">
                                        <p class=\" mt-2 \"><small>";
                // line 194
                echo twig_escape_filter($this->env, t("Voir Tout"), "html", null, true);
                echo "</small></p>
                                    </a>
                                </div>
                                ";
            }
            // line 198
            echo "                            </div>
                            <div class=\"mt-4 d-sm-flex justify-content-between \">
                                <div class=\"d-flex align-items-center\">
                                    <p class=\"mb-0 text-success\">
                                        <i class=\"fas fa-user\"></i>
                                        <span class=\"ms-2\">";
            // line 203
            echo twig_escape_filter($this->env, ($context["places"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, t("Places Disponibles"), "html", null, true);
            echo "</span>
                                    </p>
                                    <p class=\"mb-0 ms-1 ms-md-4\">
                                        <i class=\"fas fa-location-pin\"></i>
                                        <span class=\"ms-2\">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "institution_adress", [], "any", false, false, false, 207), "html", null, true);
            echo "</span>
                                    </p>
                                </div>
                                <div class=\"d-flex  mt-4 mt-sm-0 justify-content-end align-items-center\">
                                    <a href=\"/institution/";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "institution_id", [], "any", false, false, false, 211), "html", null, true);
            echo "#nav-admission-tab\" class=\"w-100 btn-action btn btn-primary text-primary px-4\"
                                        style=\"background:rgba(118, 74, 241, 0.18); border-radius: 10px;\">";
            // line 212
            echo twig_escape_filter($this->env, t("Voir"), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                        ";
        if (twig_test_empty(($context["data"] ?? null))) {
            // line 218
            echo "                        <div class=\"text-center\">
                            <p class=\"text-center\">";
            // line 219
            echo twig_escape_filter($this->env, t("Aucune insitutions correspondant à votre recherche"), "html", null, true);
            echo "</p>
                        </div>
                        ";
        }
        // line 222
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"pagination\">
                            
                            <ul class=\"pagination-list\">
                                ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 231
            echo "                                    <li>
                                        <a href=\"";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "url", [], "any", false, false, false, 232), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            echo "\" class=\"page-number  ";
            echo (((($context["currentPage"] ?? null) == twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 232))) ? ("current") : (""));
            echo " ";
            echo ((($context["k"] == "prev")) ? ("able left-arrow") : (((($context["k"] == "next")) ? ("able right-arrow") : (""))));
            echo "\">
                                            ";
            // line 233
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 233)), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
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
    document.querySelector(\"body\").onload=function(){
        \$('form.search-form ').on(\"submit\", (e)=>{
            e.preventDefault();
            const {form:values}=getFormValues(\"form.search-form\");
            const data={
                towns:[],
                langs:[]
            }
            for(let i in values){
                if(i && values[i] ){
                    const d=i.split(\":\");
                    if(d[0]===\"town\" && d[1]){
                        data.towns.push(d[1]); 
                    }else if(d[0]===\"lang\" && d[1]){
                        data.langs.push(d[1]); 
                    }
                }
            }
         
            window.location.href=\"/catalogue/";
        // line 267
        echo twig_escape_filter($this->env, ($context["programId"] ?? null), "html", null, true);
        echo "/institus?towns=\"+data.towns.join(\",\")+\"&langs=\"+data.langs.join(\",\")
        })

        \$('.collapsed').on('click', ()=>{
            
        })
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "client/catalogue-universities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 267,  566 => 237,  556 => 233,  546 => 232,  543 => 231,  539 => 230,  529 => 222,  523 => 219,  520 => 218,  517 => 217,  506 => 212,  502 => 211,  495 => 207,  486 => 203,  479 => 198,  472 => 194,  466 => 190,  464 => 189,  461 => 188,  455 => 187,  453 => 186,  449 => 184,  446 => 183,  440 => 181,  434 => 179,  431 => 178,  425 => 175,  422 => 174,  420 => 173,  414 => 170,  406 => 167,  402 => 165,  398 => 164,  395 => 163,  389 => 162,  387 => 161,  383 => 159,  380 => 158,  374 => 156,  368 => 154,  365 => 153,  359 => 150,  356 => 149,  354 => 148,  350 => 146,  344 => 144,  342 => 143,  334 => 140,  330 => 138,  325 => 137,  323 => 136,  319 => 135,  309 => 128,  301 => 125,  296 => 124,  290 => 123,  287 => 122,  282 => 121,  280 => 120,  272 => 119,  268 => 117,  264 => 116,  260 => 115,  252 => 110,  247 => 107,  240 => 103,  234 => 99,  232 => 98,  229 => 97,  222 => 95,  216 => 92,  213 => 91,  211 => 90,  206 => 88,  201 => 86,  195 => 85,  191 => 83,  187 => 82,  184 => 81,  177 => 79,  171 => 76,  168 => 75,  166 => 74,  161 => 72,  156 => 70,  150 => 69,  146 => 67,  142 => 66,  137 => 64,  121 => 51,  105 => 38,  98 => 34,  91 => 30,  74 => 16,  70 => 15,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/catalogue-universities.html.twig", "/home/admicuwm/public_html/templates/client/catalogue-universities.html.twig");
    }
}
