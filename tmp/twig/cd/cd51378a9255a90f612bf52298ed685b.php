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

/* admin/auth/login.html.twig */
class __TwigTemplate_818315962a080575a81d87dc85206eb0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'contentDescription' => [$this, 'block_contentDescription'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/auth/auth-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/auth/auth-base.html.twig", "admin/auth/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->displayBlock('contentDescription', $context, $blocks);
        // line 5
        echo "<div class=\"card\">
\t<div class=\"card-body\">

\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "csrf_token", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t\t<div class=\"alert alert-danger p-2\">
\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "csrf_token", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "\t\t\t<span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</span>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t</div>
\t\t";
        }
        // line 15
        echo "
\t\t<div class=\"m-sm-3\">
\t\t\t";
        // line 17
        if (((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "form", [], "any", false, false, false, 17) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 17)) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 17))) {
            // line 18
            echo "\t\t\t<div class=\"alert d-block p-2 px-3 alert-danger mb-2\">
\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "form", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "\t\t\t\t<span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo " </span><br/>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 23
                echo "\t\t\t\t<span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo " </span><br/>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "\t\t\t\t<span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo " </span>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 30
        echo "
\t\t\t<form method=\"post\" action=\"/auth/admin/login\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label class=\"form-label\">";
        // line 33
        echo twig_escape_filter($this->env, t("Email"), "html", null, true);
        echo "</label>
\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"email\" name=\"email\"
\t\t\t\t\t\tplaceholder=\"";
        // line 35
        echo twig_escape_filter($this->env, t("Entrez votre email"), "html", null, true);
        echo "\" />
\t\t\t\t\t";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 36)) {
            // line 37
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 38
                echo "\t\t\t\t\t<small class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</small>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label class=\"form-label\">";
        // line 43
        echo twig_escape_filter($this->env, t("Mot de passe"), "html", null, true);
        echo "</label>
\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"password\" name=\"password\"
\t\t\t\t\t\tplaceholder=\"";
        // line 45
        echo twig_escape_filter($this->env, t("Entrez votre mot de passe"), "html", null, true);
        echo "\" />
\t\t\t\t\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 46)) {
            // line 47
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 48
                echo "\t\t\t\t\t<small class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</small>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t\t";
        }
        // line 51
        echo "
\t\t\t\t\t<small>
\t\t\t\t\t\t<a href='/auth/reset/request'>";
        // line 53
        echo twig_escape_filter($this->env, t("Mot de passe oublié ?"), "html", null, true);
        echo "</a>
\t\t\t\t\t</small>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"form-check align-items-center\">
\t\t\t\t\t\t<input id=\"customControlInline\" type=\"checkbox\" class=\"form-check-input\" value=\"remember-me\"
\t\t\t\t\t\t\tname=\"remember-me\" checked>
\t\t\t\t\t\t<label class=\"form-check-label text-small\" for=\"customControlInline\">";
        // line 60
        echo twig_escape_filter($this->env, t("Se Souvenir de
\t\t\t\t\t\t\tmoi"), "html", null, true);
        // line 61
        echo "</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<input name=\"csrf_token\" type=\"hidden\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
\t\t\t\t<div class=\"d-grid gap-2 mt-3\">
\t\t\t\t\t<button class='btn btn-lg btn-primary'>Sign in</button>
\t\t\t\t</div>

\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
    }

    // line 4
    public function block_contentDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Connectez-Vous à au panneau d'administration"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "admin/auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 4,  221 => 64,  216 => 61,  213 => 60,  203 => 53,  199 => 51,  196 => 50,  187 => 48,  182 => 47,  180 => 46,  176 => 45,  171 => 43,  167 => 41,  164 => 40,  155 => 38,  150 => 37,  148 => 36,  144 => 35,  139 => 33,  134 => 30,  130 => 28,  121 => 26,  116 => 25,  107 => 23,  102 => 22,  93 => 20,  89 => 19,  86 => 18,  84 => 17,  80 => 15,  76 => 13,  67 => 11,  63 => 10,  60 => 9,  58 => 8,  53 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/auth/login.html.twig", "/home/admicuwm/public_html/templates/admin/auth/login.html.twig");
    }
}
