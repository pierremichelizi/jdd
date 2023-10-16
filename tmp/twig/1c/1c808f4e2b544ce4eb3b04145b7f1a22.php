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

/* admin/dashboard/admissions/groups.html.twig */
class __TwigTemplate_fc45e7f95e9cc55ac044abd137909775 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/admissions/groups.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des institus | Administration | AdmissionFacile
";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container-fluid p-0\">

    <div class=\"d-flex justify-space-between row\">
        <div class=\"mb-4 col-12 col-sm-8  \">
            <div class=\"d-flex w-100\">
                <h1 class=\"h3 mb-1 col-10\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Les Groupes d'admission"), "html", null, true);
        echo "</h1>
            </div>

            <p>";
        // line 13
        echo twig_escape_filter($this->env, t("Créer les pools d'admission aux programmes "), "html", null, true);
        echo "</p>
        </div>
        <div class=\" col-sm-4 text-end mb-4 mb-sm-0 \">
            <a href=\"/admin/formations/admission-groups\" class=\"btn btn-outline-secondary\">";
        // line 16
        echo twig_escape_filter($this->env, t("Ajouter"), "html", null, true);
        echo "</a>
        </div>

    </div>

    <div class=\"row\">
        <div class=\"col-xl-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <table id=\"datatables-clients\" class=\"table table-striped\" style=\"width:100%\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>";
        // line 29
        echo twig_escape_filter($this->env, t("Nom du groupe"), "html", null, true);
        echo "</th>
                                <th>";
        // line 30
        echo twig_escape_filter($this->env, t("Status"), "html", null, true);
        echo "</th>
                                <th>";
        // line 31
        echo twig_escape_filter($this->env, t("Institutions"), "html", null, true);
        echo "</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 37
            echo "                            <tr>
                                <td>
                                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_code", [], "any", false, false, false, 39), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_name", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                </td>

                                <td>
                                    ";
            // line 46
            if (((twig_date_format_filter($this->env, "now", "U") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_start_date", [], "any", false, false, false, 46), "U")) && (twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 47
$context["d"], "admission_group_close_date", [], "any", false, false, false, 47), "U")))) {
                echo " <small
                                        class=\"text-white bg-success rounded p-1\">";
                // line 48
                echo twig_escape_filter($this->env, t("En Cours"), "html", null, true);
                echo "</small>
                                    ";
            } else {
                // line 50
                echo "                                        ";
                if ((twig_date_format_filter($this->env, "now", "U") > twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_close_date", [], "any", false, false, false, 50), "U"))) {
                    // line 51
                    echo "                                        <small class=\"text-white bg-danger rounded p-1\">";
                    echo twig_escape_filter($this->env, t("Cloturé"), "html", null, true);
                    echo "</small>
                                        ";
                } else {
                    // line 53
                    echo "                                            ";
                    if ((twig_date_format_filter($this->env, "now", "U") < twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_start_date", [], "any", false, false, false, 53), "U"))) {
                        echo " 
                                            <small  class=\"text-white bg-warning rounded p-1\">";
                        // line 54
                        echo twig_escape_filter($this->env, t("Débute Prochainement"), "html", null, true);
                        echo "</small>
                                            ";
                    }
                    // line 56
                    echo "
                                        ";
                }
                // line 58
                echo "                                    ";
            }
            // line 59
            echo "                                </td>
                                <td>
                                    <p>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_name", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
                                </td>
                                <td>
                                    <div class=\"dropdown position-relative\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-bs-toggle=\"dropdown\"
                                            data-bs-display=\"static\">
                                            <i class=\"fas fa-ellipsis-v\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-end\">
                                            <a class=\"dropdown-item\"
                                                href=\"/admin/formations/admission-groups?item_id=";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_id", [], "any", false, false, false, 71), "html", null, true);
            echo "&action=edit\">Editer</a>
                                            <a class=\"dropdown-item\"
                                                href=\"/admin/formations/admission-groups/form/";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_id", [], "any", false, false, false, 73), "html", null, true);
            echo "/rule\">Regles
                                                d'admission</a>
                                            <a class=\"dropdown-item\"
                                                href=\"/admin/formations/admission-groups/form/";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_id", [], "any", false, false, false, 76), "html", null, true);
            echo "/question\">Questionnaire
                                                d'admission</a>
                                            <a class=\"dropdown-item delete-action-modal-btn text-white bg-danger\"
                                                href=\"#\"
                                                data-bs-action-url=\"/admin/formations/admission-groups?item_id=";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "admission_group_id", [], "any", false, false, false, 80), "html", null, true);
            echo "&action=delete\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-action-message=\"Voulez vous supprimer ce programme ?\">Supprimer</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener(\"DOMContentLoaded\", function () { // Datatables clients
        /*\$(\"#datatables-clients\").DataTable({
            responsive: true,
            order: [
                [1, \"asc\"]
            ]
        });*/


    });
</script>

";
    }

    public function getTemplateName()
    {
        return "admin/dashboard/admissions/groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 88,  202 => 80,  195 => 76,  189 => 73,  184 => 71,  171 => 61,  167 => 59,  164 => 58,  160 => 56,  155 => 54,  150 => 53,  144 => 51,  141 => 50,  136 => 48,  132 => 47,  131 => 46,  124 => 42,  118 => 39,  114 => 37,  110 => 36,  102 => 31,  98 => 30,  94 => 29,  78 => 16,  72 => 13,  66 => 10,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard/admissions/groups.html.twig", "/home/admicuwm/public_html/templates/admin/dashboard/admissions/groups.html.twig");
    }
}
