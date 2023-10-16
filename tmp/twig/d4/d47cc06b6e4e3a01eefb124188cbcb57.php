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

/* admin/dashboard/instituts/details.html.twig */
class __TwigTemplate_542d79032f6f2bd3b91fb35f8d7f50c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/instituts/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"container-fluid p-0\">
    <div class=\"row\">
        <div class=\"col-12 mx-auto row \">
            ";
        // line 6
        if (($context["institution_logoUrl"] ?? null)) {
            // line 7
            echo "            <div class=\"col-12 col-md-2\">
                <div class=\"rounded-pill mx-auto\"
                    style=\"width: 100px; height:100px; background-color:#eee; background-image:url(";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 9), "html", null, true);
            echo ")\">
                </div>
            </div>
            ";
        }
        // line 13
        echo "            <div class=\"col-12 ";
        echo ((($context["institution_logoUrl"] ?? null)) ? (" col-md-10") : (""));
        echo "\">
                <h4>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h4>
                <div class=\"description-text text-collapse position-relative\" style=\"height: 60px;\">
                    ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_description", [], "any", false, false, false, 16);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"card mt-4\">
        <div class=\"card-body\">
            <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#home-tab-pane\"
                        type=\"button\" role=\"tab\" aria-controls=\"home-tab-pane\" aria-selected=\"true\">Centres de
                        formations</button>
                </li>
                <!--li class=\"nav-item\" role=\"presentation\">
                    <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-tab-pane\"
                        type=\"button\" role=\"tab\" aria-controls=\"profile-tab-pane\" aria-selected=\"false\">Profile</button>
                </li-->
            </ul>
            <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"home-tab-pane\" role=\"tabpanel\" aria-labelledby=\"home-tab\"
                    tabindex=\"0\">
                    <div class=\"d-flex justify-content-between py-4\">
                        <h4>";
        // line 37
        echo twig_escape_filter($this->env, t("Les Centres  de formation "), "html", null, true);
        echo "</h4>
                        <div>
                            <a href=\"/admin/institutions/items?center&parent_id=";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_id", [], "any", false, false, false, 39), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">";
        echo twig_escape_filter($this->env, t("Ajouter"), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                    <table id=\"datatables-clients\" class=\"table table-striped\" style=\"width:100%\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>";
        // line 46
        echo twig_escape_filter($this->env, t("Nom de l'initution"), "html", null, true);
        echo "</th>
                                <th>";
        // line 47
        echo twig_escape_filter($this->env, t("Type d'institution"), "html", null, true);
        echo "</th>
                                <th>";
        // line 48
        echo twig_escape_filter($this->env, t("Site Web"), "html", null, true);
        echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["institutions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 54
            echo "                            <tr>
                                <td>
                                    ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["d"], "institution_logoUrl", [], "any", false, false, false, 56)) {
                // line 57
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_logoUrl", [], "any", false, false, false, 57), "html", null, true);
                echo "\" class=\"card-image my-n1\" alt=\"Avatar\">
                                    ";
            }
            // line 59
            echo "                                </td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_name", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 62
            echo (((twig_get_attribute($this->env, $this->source, $context["d"], "institution_type", [], "any", false, false, false, 62) == "PROFESIONNAL_CENTER")) ? ("Centre Professionnel") : (""));
            echo "
                                    ";
            // line 63
            echo (((twig_get_attribute($this->env, $this->source, $context["d"], "institution_type", [], "any", false, false, false, 63) == "UNIVERSITY")) ? ("Université") : (""));
            echo "
                                    ";
            // line 64
            echo (((twig_get_attribute($this->env, $this->source, $context["d"], "institution_type", [], "any", false, false, false, 64) == "SCHOOL")) ? ("Ecole") : (""));
            echo "
                                    ";
            // line 65
            echo (((twig_get_attribute($this->env, $this->source, $context["d"], "institution_type", [], "any", false, false, false, 65) == "OTHER")) ? ("Autres") : (""));
            echo "
                                </td>
                                <td>
                                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_website_url", [], "any", false, false, false, 68), "html", null, true);
            echo "\">
                                        ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_website_url", [], "any", false, false, false, 69), "html", null, true);
            echo "
                                    </a>
                                </td>
                                <td>
                                    <div class=\"dropdown position-relative\">
                                        <a href=\"#\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\">
                                            <i class=\"align-middle\" data-feather=\"more-vertical\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-end\">
                                            <a class=\"dropdown-item\"
                                                href=\"/admin/institutions/items?item_id=";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_id", [], "any", false, false, false, 79), "html", null, true);
            echo "&action=edit&center&&parent_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_id", [], "any", false, false, false, 79), "html", null, true);
            echo "\">Editer</a>
                                            <a class=\"delete-action-modal-btn dropdown-item  text-white bg-danger\"
                                                href=\"#\" data-bs-action-url=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "institution_id", [], "any", false, false, false, 81), "html", null, true);
            echo "\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-action-message=\"Vous voulez vraiment supprimé ce centre ?\">Supprimer</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
                        </tbody>
                    </table>
                </div>
                <!--div class=\"tab-pane fade\" id=\"profile-tab-pane\" role=\"tabpanel\" aria-labelledby=\"profile-tab\"
                    tabindex=\"0\">...</div-->
            </div>
        </div>
    </div>
</div>

<script>
    
    window.onload = () => {
        \$(\".description-text\").on(\"click\", (e) => {
            console.log(\"click\")
            \$(e.currentTarget).toggleClass(\"text-collapse\");
            \$(e.currentTarget).toggleClass(\"h-auto\")
        })
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "admin/dashboard/instituts/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 89,  201 => 81,  194 => 79,  181 => 69,  177 => 68,  171 => 65,  167 => 64,  163 => 63,  159 => 62,  154 => 60,  151 => 59,  145 => 57,  143 => 56,  139 => 54,  135 => 53,  127 => 48,  123 => 47,  119 => 46,  107 => 39,  102 => 37,  78 => 16,  73 => 14,  68 => 13,  61 => 9,  57 => 7,  55 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard/instituts/details.html.twig", "/home/admicuwm/public_html/templates/admin/dashboard/instituts/details.html.twig");
    }
}
