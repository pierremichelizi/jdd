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

/* client/institution-base.html.twig */
class __TwigTemplate_9bd25f81d8984f16df9ada4309042090 extends Template
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
            'userContent' => [$this, 'block_userContent'],
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/institution-base.html.twig", 1);
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
        echo "
<div class=\"mt-4 container pb-5\">

    <div class=\"row\">
        <div class=\"col-12 col-md-4\">
            <div class=\"institution user-menu close card border-0\">
                <div class=\"card-body p-0 \">
                    <div class=\"p-3 p-md-0 img-user-menu-header w-100 bg-primary justify-content-center\"
                        style=\"border-radius:20px ;\">
                        <div class=\"institution-profile w-100\">
                            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 16)) {
            // line 17
            echo "                            <div class=\"d-none d-md-flex flex-column align-items-center\">
                                <img class=\" img-user-profile\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 18), "html", null, true);
            echo "\" />
                                <h5 class=\"mt-3 mb-0 \">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_name", [], "any", false, false, false, 19);
            echo "</h5>
                            </div>
                            ";
        } else {
            // line 22
            echo "                            <h5 class=\"d-none d-md-flex mx-3 text-center mb-0 \" style=\"margin-top: -50px;\"> ";
            echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_name", [], "any", false, false, false, 22);
            echo "</h5>
                            ";
        }
        // line 24
        echo "                            <div
                                class=\"px-2  mobile-user-menu d-flex w-100 justify-content-between align-items-center d-md-none\">
                                <div class=\"user-ig-container  align-items-center\">
                                    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 27)) {
            // line 28
            echo "                                    <img class=\"img-user-profile\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_logoUrl", [], "any", false, false, false, 28), "html", null, true);
            echo "\" />
                                    ";
        }
        // line 30
        echo "                                    <h6 class=\"m-0 ms-4 text-white\">
                                        ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_name", [], "any", false, false, false, 31), "html", null, true);
        echo "
                                    </h6>
                                </div>
                                <span class=\"tab-icon  text-white\">
                                    <i class=\"fa fa-chevron-down\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"menu-container px-4 pt-md-5 mt-md-5\">
                        <p class=\"\" style=\"font-weight: 600;\">
                            <span class=\"\"><i class=\"fa fa-location-pin\"></i></span>
                            <span class=\"ms-2\">";
        // line 43
        echo twig_escape_filter($this->env, t("Adresse"), "html", null, true);
        echo "</span>
                        </p>
                        <p class=\"ps-4\">
                            ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_adress", [], "any", false, false, false, 46), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"mt-3 menu-container px-4 \">
                        <p class=\"\" style=\"font-weight: 600;\">
                            <span class=\"\"><i class=\"fa fa-phone\"></i></span>
                            <span class=\"ms-2\">";
        // line 52
        echo twig_escape_filter($this->env, t("Numéro de téléphone"), "html", null, true);
        echo "</span>
                        </p>
                        <p class=\"ps-4\">
                            ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_tel", [], "any", false, false, false, 55), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"mt-3 mb-5 menu-container px-4 \">
                        <p class=\"\" style=\"font-weight: 600;\">
                            <span class=\"\"><i class=\"fa fa-url\"></i></span>
                            <span class=\"ms-2\">";
        // line 61
        echo twig_escape_filter($this->env, t("Adresse de site web"), "html", null, true);
        echo "</span>
                        </p>
                        <p class=\"ps-4\">
                            ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "institution_website_url", [], "any", false, false, false, 64), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"mt-5 mt-md-0 col-12 col-md-8 \">
            ";
        // line 71
        $this->displayBlock('userContent', $context, $blocks);
        // line 72
        echo "        </div>
    </div>
</div>
<script>
    document.addEventListener(\"DOMContentLoaded\", (e) => {
        \$(\".user-menu\").on(\"click\", (e) => {
            //if (window.innerHeight <= 800)
            \$(e.currentTarget).toggleClass(\"close\");
        })

    })
</script>
";
    }

    // line 71
    public function block_userContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "client/institution-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 71,  172 => 72,  170 => 71,  160 => 64,  154 => 61,  145 => 55,  139 => 52,  130 => 46,  124 => 43,  109 => 31,  106 => 30,  100 => 28,  98 => 27,  93 => 24,  87 => 22,  81 => 19,  77 => 18,  74 => 17,  72 => 16,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/institution-base.html.twig", "/home/admicuwm/public_html/templates/client/institution-base.html.twig");
    }
}
