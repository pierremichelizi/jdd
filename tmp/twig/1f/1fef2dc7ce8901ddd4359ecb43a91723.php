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

/* client/login.html.twig */
class __TwigTemplate_2014c4eef57c6d282a20543d73ef66c1 extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/login.html.twig", 1);
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
<div class=\"mt-4\">

    <div class=\"row\">
        <div class=\" col-12 col-sm-9 col-md-7 col-lg-5 mx-auto px-4\">
            <div class=\" card  p-4 p-xl-5\" style=\"border-radius: 20px;\">
                <h5>";
        // line 12
        echo twig_escape_filter($this->env, t("Connexion"), "html", null, true);
        echo "</h5>
                <p>";
        // line 13
        echo twig_escape_filter($this->env, t("Connectez-vous pour suivre votre dossier "), "html", null, true);
        echo "</p>
                <div>
                    <div class=\"form-element\">
                        <div class=\"row\">
                            <div class=\"contact-form\">
                                <div class=\"form-error hidden\">
                                    <div class=\"alert alert-danger\">

                                    </div>
                                </div>
                                <form class=\"form\">
                                    <div class=\"form-element\">
                                        <div class=\"row \">
                                            <div class=\"col-12  mt-4\">
                                                <i class=\"fa-solid fa-envelope-open\"></i>
                                                <input type=\"text\" name=\"email\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, t("Email"), "html", null, true);
        echo "\" required=\"\">
                                            </div>
                                            <div class=\"col-12 mt-4 relative\">
                                                <i class=\"fa-solid fa-lock\"></i>
                                                <input type=\"password\" name=\"password\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, t("Mot de passe"), "html", null, true);
        echo "\" required=\"\">
                                                <span class=\"displayer\" style=\"position: absolute; top:3px; right:80px\">
                                                    <i class=\"fas fa-eye\"></i>
                                                    <i class=\"fas fa-eye-slash d-none\"></i>
                                                </span>
                                                <a href=\"/auth/reset/request\">";
        // line 37
        echo twig_escape_filter($this->env, t("Mot de passe oublié ?"), "html", null, true);
        echo "</a>
                                            </div>
                                            <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">
                                            <div class=\"col-12 mt-5\">
                                                <button class=\"btn-common btn-active w-100\" type=\"submit\">";
        // line 41
        echo twig_escape_filter($this->env, t("Se
                                                    Connecter"), "html", null, true);
        // line 42
        echo "</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class=\"text-center mt-4\">

                        <a href=\"/signup\">
                            ";
        // line 56
        echo twig_escape_filter($this->env, t("Vous ne disposez pas encore d'un compte? "), "html", null, true);
        echo " <br /></br.>
                            ";
        // line 57
        echo "Inscrivez-Vous";
        echo "</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"instructors-wrapper single-page-section-bottom-space\">


</div>
<script>
    
    document.addEventListener(\"DOMContentLoaded\", (e) => {
        \$(\"span.displayer\").click((e)=>{
            if(\$(e.currentTarget).find(\".fa-eye-slash\").hasClass('d-none')){
                \$(e.currentTarget).parent().find(\"input[type='password']\").attr('type', \"text\")
                \$(e.currentTarget).find(\".fa-eye\").addClass('d-none')
                \$(e.currentTarget).find(\".fa-eye-slash\").removeClass('d-none')
            }else{
                \$(e.currentTarget).parent().find(\"input[type='text']\").attr('type', \"password\")
                \$(e.currentTarget).find(\".fa-eye\").removeClass('d-none')
                \$(e.currentTarget).find(\".fa-eye-slash\").addClass('d-none')
            }
        })
        \$(\"form.form\").on(\"submit\", (e) => {
            e.preventDefault();
           
           
            \$(e.currentTarget)
                .find('button[type=\"submit\"]')
                .attr(\"disabled\", \"disabled\")
                .addClass('disabled')
                .prepend(`
                    <div class=\"spinner-border spinner-border-sm\" role=\"status\">
                        <span class=\"sr-only\">Loading...</span>
                    </div>
                `)

            submitForm(\"form.form\", \"/auth/login\", (d) => {
                if (document.querySelector(\".form-error\") && !document.querySelector(\".form-error\")?.classList.contains(\"hidden\")) document.querySelector(\".form-error\")?.classList.add(\"hidden\");
                console.log(d)
                window.location.href=\"/\";
            },null, null, null, ()=>{
                \$(e.currentTarget)
                .find(\" button[type='submit']\")
                .removeClass(\"disabled\")
                .removeAttr(\"disabled\")
                .find(\".spinner-border\")
                .remove();
            })

        })

    })
</script>
";
    }

    public function getTemplateName()
    {
        return "client/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 57,  133 => 56,  117 => 42,  114 => 41,  109 => 39,  104 => 37,  96 => 32,  89 => 28,  71 => 13,  67 => 12,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/login.html.twig", "/home/admicuwm/public_html/templates/client/login.html.twig");
    }
}
