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

/* admin/dashboard/instituts/listing.html.twig */
class __TwigTemplate_9fe2abfd77f72a9c1835ea696bca90e8 extends Template
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
        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/instituts/listing.html.twig", 1);
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

\t<div class=\"d-flex justify-space-between row\">
\t\t<div class=\"mb-4 col-12 col-sm-8  \">
\t\t\t<div class=\"d-flex w-100\">
\t\t\t\t<h1 class=\"h3 mb-1 col-10\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Les Instituts de formation"), "html", null, true);
        echo "</h1>
\t\t\t</div>

\t\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, t("Ajouter les informations relatives aux institutions universitaires"), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div class=\" col-sm-4 text-end mb-4 mb-sm-0 \">
\t\t\t<a href=\"/admin/institutions/items\" class=\"btn btn-outline-secondary\">";
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
\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, t("Nom de l'initution"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, t("Type d'institution"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, t("Site Web"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["institutions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 37
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["d"], "institution_logoUrl", [], "any", false, false, false, 39)) {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_logoUrl", [], "any", false, false, false, 40), "html", null, true);
                echo "\" class=\"card-image my-n1\" alt=\"Avatar\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"/admin/institutions/items/details/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_name", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 47
            echo (((twig_get_attribute($this->env, $this->source, $context["d"], "institution_type", [], "any", false, false, false, 47) == "PROFESIONNAL_CENTER")) ? ("Centre Professionnel") : (""));
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 48
            echo (((twig_get_attribute($this->env, $this->source, $context["d"], "institution_type", [], "any", false, false, false, 48) == "UNIVERSITY")) ? ("Université") : (""));
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 49
            echo (((twig_get_attribute($this->env, $this->source, $context["d"], "institution_type", [], "any", false, false, false, 49) == "SCHOOL")) ? ("Ecole") : (""));
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 50
            echo (((twig_get_attribute($this->env, $this->source, $context["d"], "institution_type", [], "any", false, false, false, 50) == "OTHER")) ? ("Autres") : (""));
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_website_url", [], "any", false, false, false, 53), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_website_url", [], "any", false, false, false, 54), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown position-relative\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"/admin/institutions/items?item_id=";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_id", [], "any", false, false, false, 64), "html", null, true);
            echo "&action=edit\">Editer</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item delete-action-modal-btn text-white bg-danger\" href=\"#\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-bs-action-url=\"/admin/institutions/items?item_id=";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_id", [], "any", false, false, false, 66), "html", null, true);
            echo "&action=delete\"  data-bs-toggle=\"modal\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-bs-action-message=\"Voulez vous supprimer ce institut ? ";
            // line 67
            echo ((($context["institution_isGroup"] ?? null)) ? ("Tous les centres associés seront supprimés aussi.") : (""));
            echo " \">Supprimer</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        return "admin/dashboard/instituts/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 73,  182 => 67,  178 => 66,  173 => 64,  160 => 54,  156 => 53,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  130 => 44,  126 => 42,  120 => 40,  118 => 39,  114 => 37,  110 => 36,  102 => 31,  98 => 30,  94 => 29,  78 => 16,  72 => 13,  66 => 10,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard/instituts/listing.html.twig", "/home/admicuwm/public_html/templates/admin/dashboard/instituts/listing.html.twig");
    }
}
