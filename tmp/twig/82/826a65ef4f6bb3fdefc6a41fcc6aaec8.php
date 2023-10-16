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

/* client/institution.html.twig */
class __TwigTemplate_0a90030bb107a3d8eb0148cd07ec6f0a extends Template
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
        $this->parent = $this->loadTemplate("client/institution-base.html.twig", "client/institution.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_userContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div>
    <div class=\"row\">
        <div class=\"col-12 \">
            <div class=\"card\" style=\"border-radius: 20px;\">
                <div class=\"card-body\">
                    <nav>
                        <div class=\"nav nav-pills flex-column flex-sm-row\" id=\"nav-tab\" role=\"tablist\">
                            <button class=\" text-sm-center nav-link btn-common active\" style=\"border-radius: 10px;\"
                                id=\"nav-home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-home\" type=\"button\"
                                role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">";
        // line 14
        echo twig_escape_filter($this->env, t("Information
                                Générale"), "html", null, true);
        // line 15
        echo "</button>
                            ";
        // line 16
        if ( !twig_test_empty(($context["centers"] ?? null))) {
            // line 17
            echo "                            <button class=\" text-sm-center nav-link btn-common\" style=\"border-radius: 10px;\"
                                id=\"nav-profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-profile\" type=\"button\"
                                role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">";
            // line 19
            echo twig_escape_filter($this->env, t("Centres de
                                formation"), "html", null, true);
            // line 20
            echo "</button>
                            ";
        }
        // line 22
        echo "                            <button class=\" text-sm-center nav-link btn-common\" style=\"border-radius: 10px;\"
                                id=\"nav-admission-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-admission\" type=\"button\"
                                role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">";
        // line 24
        echo twig_escape_filter($this->env, t("Groupes
                                d'Admissions"), "html", null, true);
        // line 25
        echo "</button>
                        </div>
                    </nav>
                    <div class=\"tab-content\" id=\"nav-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\"
                            aria-labelledby=\"nav-home-tab\" tabindex=\"0\">
                            <div class=\"mt-4\">
                                <p>
                                    ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_description", [], "any", false, false, false, 33);
        echo "
                                </p>
                            </div>
                        </div>
                        ";
        // line 37
        if ( !twig_test_empty(($context["centers"] ?? null))) {
            // line 38
            echo "                        <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\"
                            tabindex=\"0\">
                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 41
                echo "                            <div class=\" my-4 px-4 px-md-6 \">
                                <div class=\"row border-bottom pb-2 d-md-flex align-content-center\">
                                    <div class=\"col-12 col-md-6 \">
                                        <a href=\"/institution/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "institution_id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
                                            <h6 class=\"text-primary\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["a"], "institution_name", [], "any", false, false, false, 45);
                echo "<i
                                                    class=\"me-2 fa fa-external-link\"></i></h6>
                                        </a>
                                    </div>
                                    <div class=\"col-12 col-md-6  d-md-flex justify-content-end\">
                                        <p class=\"text-truncate\">
                                            <span><i class=\"me-2 fa fa-location-pin\"></i></span>
                                            <span>";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["a"], "town_name", [], "any", false, false, false, 52);
                echo "</span>
                                        </p>
                                    </div>
                                </div>
                                <div class=\"row mt-4\">
                                    <div class=\"col-md-6 col-12\">
                                        <div>
                                            <p>
                                                <span>
                                                    <i class=\"me-2 fa fa-location-pin\"></i>
                                                </span>
                                                <span>";
                // line 63
                echo "Adresse";
                echo "</span>
                                            </p>
                                            <p class=\"mt-1 ps-4\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["a"], "institution_adress", [], "any", false, false, false, 65);
                echo "</p>
                                        </div>
                                        <div>
                                            <p>
                                                <span>
                                                    <i class=\"me-2 fa fa-phone\"></i>
                                                </span>
                                                <span>";
                // line 72
                echo "Téléphone";
                echo "</span>
                                            </p>
                                            <p class=\"mt-1 ps-4\">";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "institution_tel", [], "any", false, false, false, 74), "html", null, true);
                echo "</p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-12\">
                                        <div>
                                            <p>
                                                <span>
                                                    <i class=\"me-2 fa fa-mail\"></i>
                                                </span>
                                                <span>";
                // line 83
                echo "Email";
                echo "</span>
                                            </p>
                                            <p class=\"mt-1 ps-4\">";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "institution_contactEmail", [], "any", false, false, false, 85), "html", null, true);
                echo "</p>
                                        </div>
                                        <!--div>
                                            <p>
                                                <span>
                                                    <i class=\"me-2 fa fa-phone\"></i>
                                                </span>
                                                <span>";
                // line 92
                echo "Téléphone";
                echo "</span>
                                            </p>
                                            <p class=\"mt-1 ps-4\">";
                // line 94
                echo "+26266 2525";
                echo "</p>
                                        </div-->

                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                        </div>
                        ";
        }
        // line 103
        echo "                        <div class=\"tab-pane fade\" id=\"nav-admission\" role=\"tabpanel\" aria-labelledby=\"nav-admission-tab\"
                            tabindex=\"0\">
                            <div>
                                <div class=\"mt-4\">
                                    <h5>";
        // line 107
        echo twig_escape_filter($this->env, t("Les groupes d'admission"), "html", null, true);
        echo "</h5>
                                </div>
                                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["diplomasAdmissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 110
            echo "                                <div class=\"mt-4\">
                                    <h6 class=\"text-primary border-bottom pb-2\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "name", [], "any", false, false, false, 111), "html", null, true);
            echo "</h6>
                                    <table class=\"table table-borderless\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\">";
            // line 115
            echo twig_escape_filter($this->env, t("Programme"), "html", null, true);
            echo "</th>
                                                <th scope=\"col\">";
            // line 116
            echo twig_escape_filter($this->env, t("Groupe"), "html", null, true);
            echo "</th>
                                                <th scope=\"col\">";
            // line 117
            echo twig_escape_filter($this->env, t("Etat"), "html", null, true);
            echo "</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"\">
                                            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["d"], "admissions", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 122
                echo "                                            <tr>
                                                <th scope=\"row\">
                                                    ";
                // line 124
                if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_close_date", [], "any", false, false, false, 124)) > twig_date_converter($this->env, "now"))) {
                    // line 125
                    echo "                                                    <a href=\"/admission/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_id", [], "any", false, false, false, 125), "html", null, true);
                    echo "\" class=\"text-primary\" style=\"text-decoration: underline;\">
                                                        <i class=\"fas fa-link\"></i> ";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["a"], "program_name", [], "any", false, false, false, 126);
                    echo "
                                                    </a>
                                                    ";
                } else {
                    // line 129
                    echo "                                                    <a href=\"#\">
                                                        ";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["a"], "program_name", [], "any", false, false, false, 130);
                    echo "
                                                    </a>
                                                    ";
                }
                // line 133
                echo "                                                </th>
                                                <td>
                                                    <p>";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_name", [], "any", false, false, false, 135), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_code", [], "any", false, false, false, 135), "html", null, true);
                echo ")</p>
                                                </td>
                                                <td>
                                                    ";
                // line 138
                if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "admission_group_close_date", [], "any", false, false, false, 138)) > twig_date_converter($this->env, "now"))) {
                    // line 139
                    echo "                                                    <p class=\" text-success\">
                                                        <span class=\"text-success\">";
                    // line 140
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
                    // line 149
                    echo "                                                    <p class=\"text-danger\">
                                                        <span class=\"text-danger\">";
                    // line 150
                    echo twig_escape_filter($this->env, t("Cloturée"), "html", null, true);
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
                // line 159
                echo "                                                </td>
                                            </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                                        </tbody>
                                    </table>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                            </div>
                        </div>
                    </div>




                </div>
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
        return "client/institution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 166,  338 => 162,  330 => 159,  318 => 150,  315 => 149,  303 => 140,  300 => 139,  298 => 138,  290 => 135,  286 => 133,  280 => 130,  277 => 129,  271 => 126,  266 => 125,  264 => 124,  260 => 122,  256 => 121,  249 => 117,  245 => 116,  241 => 115,  234 => 111,  231 => 110,  227 => 109,  222 => 107,  216 => 103,  212 => 101,  199 => 94,  194 => 92,  184 => 85,  179 => 83,  167 => 74,  162 => 72,  152 => 65,  147 => 63,  133 => 52,  123 => 45,  119 => 44,  114 => 41,  110 => 40,  106 => 38,  104 => 37,  97 => 33,  87 => 25,  84 => 24,  80 => 22,  76 => 20,  73 => 19,  69 => 17,  67 => 16,  64 => 15,  61 => 14,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/institution.html.twig", "/home/admicuwm/public_html/templates/client/institution.html.twig");
    }
}
