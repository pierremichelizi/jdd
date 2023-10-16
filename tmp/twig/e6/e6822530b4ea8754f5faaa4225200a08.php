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

/* admin/auth/auth-base.html.twig */
class __TwigTemplate_f52fe59e8f4c5cfbaf5ca0f191430516 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'contentDescription' => [$this, 'block_contentDescription'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/auth/auth-base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "


<div class=\"main d-flex justify-content-center w-100\">
    <main class=\"content d-flex p-0\">
        <div class=\"container d-flex flex-column\">
            <div class=\"row h-100\">
                <div class=\"col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100\">
                    <div class=\"d-table-cell align-middle\">

                        <div class=\"text-center mt-4\">
                            <h1 class=\"h2\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Administration"), "html", null, true);
        echo "</h1>
                            <p class=\"lead\">
                                ";
        // line 17
        $this->displayBlock('contentDescription', $context, $blocks);
        // line 18
        echo "                            </p>
                        </div>
                        ";
        // line 20
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "error", [], "any", false, false, false, 20))) {
            // line 21
            echo "                        <div class=\"alert alert-danger p-3 mx-auto\" role=\"alert\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "error", [], "any", false, false, false, 22), "html", null, true);
            echo "
                        </div>
                        ";
        }
        // line 25
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "success", [], "any", false, false, false, 25))) {
            // line 26
            echo "                        <div class=\"alert alert-success p-3 mx-auto\" role=\"alert\">
                            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "success", [], "any", false, false, false, 27), "html", null, true);
            echo "
                        </div>

                        ";
        }
        // line 31
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

";
    }

    // line 17
    public function block_contentDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin/auth/auth-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  114 => 17,  103 => 32,  100 => 31,  93 => 27,  90 => 26,  87 => 25,  81 => 22,  78 => 21,  76 => 20,  72 => 18,  70 => 17,  65 => 15,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/auth/auth-base.html.twig", "/home/admicuwm/public_html/templates/admin/auth/auth-base.html.twig");
    }
}
