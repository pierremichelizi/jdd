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

/* client/contact-us.html.twig */
class __TwigTemplate_8d8745f976ecc6083d965efe97dc287b extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/contact-us.html.twig", 1);
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
        echo "<!-- about page start here  -->
<div class=\"contact-us-wrapper single-page-section-top-space single-page-section-bottom-space\">
    <!-- breadcrumb area start here  -->
    <div class=\"breadcrumb-wrap style-01\">
        <div class=\"container custom-container-01\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-content\">
                        <h3 class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, t("Contactez Nous"), "html", null, true);
        echo "</h3>
                        <p class=\"details\">
                            ";
        // line 16
        echo twig_escape_filter($this->env, t("Vous avez besoin d'information ? Nos équipes sont disponible pour vous répondre à tout moment. Veuillez nous décrire votre préoccupation."), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- contact form start hare  -->
    <section class=\"contact-form-area-wrapper section-bottom-space\">
        <div class=\"container custom-container-01\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"apply-form-inner\">
                        <div class=\"row justify-content-between\">
                            <div class=\"col-lg-5\">
                                <div class=\"contact-address\">
                                    <h3 class=\"title\">";
        // line 34
        echo twig_escape_filter($this->env, t("Contactez-Nous"), "html", null, true);
        echo "</h3>

                                    <ul class=\"ul contact-address-list\">
                                        <!--li class=\"single-address-item\">
                                            <span class=\"icon-wrap color-01\">
                                                <i class=\"fa-sharp fa-solid fa-location-dot icon\"></i>
                                            </span>
                                            <span class=\"text\">Paris, France</span>
                                        </li-->
                                        <!--li class=\"single-address-item\">
                                            <span class=\"icon-wrap color-02\">
                                                <i class=\"fa-solid fa-phone icon\"></i>
                                            </span>
                                            <span class=\"text\">(270) 555-0117 <br>
                                                (270) 589-7395</span>
                                        </li-->
                                        <li class=\"single-address-item\">
                                            <span class=\"icon-wrap color-03\">
                                                <i class=\"fa-solid fa-envelope-open icon\"></i>
                                            </span>
                                            <span class=\"text\"><a href=\"\" class=\"__cf_email__\" >support@admissionfacile.com</a> <br></span>
                                        </li>
                                    </ul>

                                    <!--ul class=\"ul social-media-list style-01 color-02\">
                                        <li class=\"single-social-item\">
                                            <a href=\"#\" tabindex=\"-1\">
                                                <i class=\"fa-brands fa-instagram icon\"></i>
                                            </a>
                                        </li>
                                        <li class=\"single-social-item\">
                                            <a href=\"#\" tabindex=\"-1\">
                                                <i class=\"fa-brands fa-facebook-f icon\"></i>
                                            </a>
                                        </li>
                                        <li class=\"single-social-item\">
                                            <a href=\"#\" tabindex=\"-1\">
                                                <i class=\"fa-brands fa-youtube icon\"></i>
                                            </a>
                                        </li>
                                        <li class=\"single-social-item\">
                                            <a href=\"#\" tabindex=\"-1\">
                                                <i class=\"fa-brands fa-linkedin-in icon\"></i>
                                            </a>
                                        </li>
                                    </ul-->
                                </div>
                            </div>
                            <div class=\"col-lg-7\">
                                <div class=\"form\">
                                    <form class=\"contact-form\" >
                                        <div class=\"part\">
                                            <h5 class=\"title\">Posez votre préoccupation</h5>
                                            <div class=\"form-element\">
                                                <div class=\"row\">
                                                    <div class=\"col-12\">
                                                        <i class=\"fa-solid fa-user\"></i>
                                                        <input type=\"text\" placeholder=\"Nom Complet\" required=\"\" name=\"fullname\">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class=\"form-element\">
                                                <div class=\"row\">
                                                    <div class=\"col-12\">
                                                        <i class=\"fa-solid fa-user\"></i>
                                                        <input type=\"text\" placeholder=\"Email\" name=\"email\" required=\"\">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class=\"form-element\">
                                                <div class=\"row\">
                                                    <div class=\"col-12\">
                                                        <i class=\"fa-solid fa-phone\"></i>
                                                        <input type=\"tel\" placeholder=\"Numéro de téléphone\" name=\"phone\"
                                                            required=\"\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-element\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12\">
                                                        <textarea class=\"textarea\" name=\"description\"
                                                            placeholder=\"Poser votre question ici...\"
                                                            rows=\"10\" style=\"min-height: 200px;;\"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" id=\"\">
                                        <div class=\"form-submit text-right\">
                                            <button type=\"submit\" class=\"btn-common btn-active\">

                                                Soumettre
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- about page end here  -->
<script>
    window.onload=function(){
        console.log(Contact)
        new Contact();
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "client/contact-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 124,  95 => 34,  74 => 16,  69 => 14,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/contact-us.html.twig", "/home/admicuwm/public_html/templates/client/contact-us.html.twig");
    }
}
