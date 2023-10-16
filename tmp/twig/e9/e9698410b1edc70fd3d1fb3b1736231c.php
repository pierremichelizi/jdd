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

/* client/signup.html.twig */
class __TwigTemplate_4edfcdeb698c60a3e99741de29474f74 extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/signup.html.twig", 1);
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
            <div class=\"card  p-4 p-xl-5\" style=\"border-radius: 20px;\">
                <h5>";
        // line 12
        echo twig_escape_filter($this->env, t("Inscription"), "html", null, true);
        echo "</h5>
                <p>";
        // line 13
        echo twig_escape_filter($this->env, t("Inscrivez vous et commençer suivre votre dossier "), "html", null, true);
        echo "</p>
                <div>
                    <div class=\"form-element\">
                        <div class=\"row\">
                            <div class=\"contact-form\">
                                <div class=\"form-error hidden\">
                                    <div class=\"alert alert-danger\">

                                    </div>
                                </div>
                                <form class=\"form form_login\" action=\"POST\" action=\"/auth/login\">

                                    <div class=\"form-element\">
                                        <div class=\"row \">
                                            <div class=\"col-12  mt-4\">
                                                <i class=\"fa-solid fa-user\"></i>
                                                <input type=\"text\" name=\"fullname\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, t("Nom Complet"), "html", null, true);
        echo "\"
                                                    required=\"\">
                                            </div>
                                            <div class=\"col-12  mt-4\">
                                                <i class=\"fa-solid fa-envelope-open\"></i>
                                                <input type=\"email\" name=\"email\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, t("Email"), "html", null, true);
        echo "\"
                                                    required=\"\">
                                            </div>
                                            <div class=\"col-12 mt-4 relative\">
                                                <i class=\"fa-solid fa-lock\"></i>
                                                <input type=\"password\" name=\"password\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, t(" Mot de passe"), "html", null, true);
        echo "\" required=\"\">
                                                <span class=\"displayer\" style=\"position: absolute; top:3px; right:80px\">
                                                    <i class=\"fas fa-eye\"></i>
                                                    <i class=\"fas fa-eye-slash d-none\"></i>
                                                </span>
                                            </div>
                                            <input type=\"hidden\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" name=\"csrf_token\">
                                            <div class=\"col-12 mt-5\">
                                                <button type=\"submit\" class=\"btn-common btn-active w-100\">";
        // line 47
        echo twig_escape_filter($this->env, t("S'inscrire"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"instructors-wrapper single-page-section-bottom-space\">

    <!-- breadcrumb area start here  -->
    <!--div class=\"breadcrumb-wrap style-01\">
        <div class=\"container custom-container-01\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-content py-3\">
                        <h3 class=\"title\">";
        // line 70
        echo twig_escape_filter($this->env, t("Programmes & Formations"), "html", null, true);
        echo "</h3>
                        <p class=\"details\">";
        // line 71
        echo twig_escape_filter($this->env, t("Rechercher et trouver en quelques minutes le programme qui vous
                            correspond"), "html", null, true);
        // line 72
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <!-- breadcrumb area end here  -->

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
        \$(\"form.form.form_login\").on(\"submit\", (e) => {
            e.preventDefault();
            if(document.querySelector(\".form-error .alert\")){
                document.querySelector(\".form-error .alert\").innerHTML = \"\"
    
            }
            if (document.querySelector(\".form-error\") && !document.querySelector(\".form-error\")?.classList.contains(\"hidden\")) document.querySelector(\".form-error\")?.classList.add(\"hidden\");

            submitForm(\"form.form.form_login\", \"/auth/signup\", () => {
                if (document.querySelector(\".form-error\") && !document.querySelector(\".form-error\")?.classList.contains(\"hidden\")) document.querySelector(\".form-error\")?.classList.add(\"hidden\");
                window.location.href = \"/email-verification/\" + document.querySelector('input[type=\"email\"]').value;
            }, (name) => {

                if (name == \"form\") {
                    document.querySelector(\".form-error\")?.classList.remove(\"hidden\");
                    return document.querySelector(\".form-error .alert\")
                }
            })

        })

    })
</script>
";
    }

    public function getTemplateName()
    {
        return "client/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 72,  150 => 71,  146 => 70,  120 => 47,  115 => 45,  106 => 39,  98 => 34,  90 => 29,  71 => 13,  67 => 12,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/signup.html.twig", "/home/admicuwm/public_html/templates/client/signup.html.twig");
    }
}
