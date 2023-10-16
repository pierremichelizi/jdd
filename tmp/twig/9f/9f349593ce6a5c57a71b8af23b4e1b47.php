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

/* admin/dashboard/jobs/listing.html.twig */
class __TwigTemplate_c6051f3a5f137869665d11ab33ffe29a extends Template
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
        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/jobs/listing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des offres d'emploi | Administration | AdmissionFacile
";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container-fluid p-0\">

\t<div class=\"d-flex justify-space-between row\">
\t\t<div class=\"mb-4 col-12 col-sm-8  \">
\t\t\t<div class=\"d-flex w-100\">
\t\t\t\t<h1 class=\"h3 mb-1 col-10\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Les Offres D'emploi"), "html", null, true);
        echo "</h1>
\t\t\t</div>

\t\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, t("Ajouter les informations relatives aux offres d'emploi"), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div class=\" col-sm-4 text-end mb-4 mb-sm-0 \">
\t\t\t<a href=\"/admin/jobs/item\" class=\"btn btn-outline-secondary\">";
        // line 16
        echo twig_escape_filter($this->env, t("Ajouter"), "html", null, true);
        echo "</a>
\t\t</div>

\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-xl-12\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<table id=\"datatables-clients\" class=\"table table-striped\" style=\"width:100%\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
        // line 28
        echo twig_escape_filter($this->env, t("Nom du job"), "html", null, true);
        echo "</th>
                                <th>";
        // line 29
        echo twig_escape_filter($this->env, t("Secteur"), "html", null, true);
        echo "</th>
                                <th>Actions</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 35
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["d"], "job_title", [], "any", false, false, false, 38);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["d"], "sector_name", [], "any", false, false, false, 41);
            echo "
\t\t\t\t\t\t\t\t</td>
                                <td>
                                    <div class=\"dropdown position-relative\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"/admin/jobs/item/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "job_id", [], "any", false, false, false, 50), "html", null, true);
            echo "\">Editer</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item delete-action-modal-btn text-white bg-danger\" href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-bs-action-url=\"/admin/jobs?item_id=";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "job_id", [], "any", false, false, false, 52), "html", null, true);
            echo "&action=delete\"  data-bs-toggle=\"modal\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-bs-action-message=\"Voulez vous supprimer ce programme ?\">Supprimer</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function () { // Datatables clients
\t\t\$(\"#datatables-clients\").DataTable({
\t\t\tresponsive: true,
\t\t\torder: [
\t\t\t\t[1, \"asc\"]
\t\t\t]
\t\t});


\t});
</script>

";
    }

    public function getTemplateName()
    {
        return "admin/dashboard/jobs/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  137 => 52,  132 => 50,  120 => 41,  114 => 38,  109 => 35,  105 => 34,  97 => 29,  93 => 28,  78 => 16,  72 => 13,  66 => 10,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard/jobs/listing.html.twig", "/home/admicuwm/public_html/templates/admin/dashboard/jobs/listing.html.twig");
    }
}
