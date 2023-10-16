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

/* client/verification-mail-sent.html.twig */
class __TwigTemplate_a9cd1e0edd17938c021dc95d6fb6d8bd extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/verification-mail-sent.html.twig", 1);
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
                ";
        // line 12
        if (twig_test_empty(($context["noverify"] ?? null))) {
            // line 13
            echo "                <div class=\"d-flex justify-content-center\">

                    <svg style=\"max-width: 200px;
                    width: 100%;
                    height: 150px;\" xmlns=\"http://www.w3.org/2000/svg\" data-name=\"Layer 1\" width=\"570\"
                        height=\"511.67482\" viewBox=\"0 0 570 511.67482\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                        <path
                            d=\"M879.99927,389.83741a.99678.99678,0,0,1-.5708-.1792L602.86963,197.05469a5.01548,5.01548,0,0,0-5.72852.00977L322.57434,389.65626a1.00019,1.00019,0,0,1-1.14868-1.6377l274.567-192.5918a7.02216,7.02216,0,0,1,8.02-.01318l276.55883,192.603a1.00019,1.00019,0,0,1-.57226,1.8208Z\"
                            transform=\"translate(-315 -194.16259)\" fill=\"#3f3d56\" />
                        <polygon
                            points=\"23.264 202.502 285.276 8.319 549.276 216.319 298.776 364.819 162.776 333.819 23.264 202.502\"
                            fill=\"#e6e6e6\" />
                        <path
                            d=\"M489.25553,650.70367H359.81522a6.04737,6.04737,0,1,1,0-12.09473H489.25553a6.04737,6.04737,0,1,1,0,12.09473Z\"
                            transform=\"translate(-315 -194.16259)\" fill=\"#0053db\" />
                        <path
                            d=\"M406.25553,624.70367H359.81522a6.04737,6.04737,0,1,1,0-12.09473h46.44031a6.04737,6.04737,0,1,1,0,12.09473Z\"
                            transform=\"translate(-315 -194.16259)\" fill=\"#0053db\" />
                        <path
                            d=\"M603.96016,504.82207a7.56366,7.56366,0,0,1-2.86914-.562L439.5002,437.21123v-209.874a7.00817,7.00817,0,0,1,7-7h310a7.00818,7.00818,0,0,1,7,7v210.0205l-.30371.12989L606.91622,504.22734A7.61624,7.61624,0,0,1,603.96016,504.82207Z\"
                            transform=\"translate(-315 -194.16259)\" fill=\"#fff\" />
                        <path
                            d=\"M603.96016,505.32158a8.07177,8.07177,0,0,1-3.05957-.59863L439.0002,437.54521v-210.208a7.50851,7.50851,0,0,1,7.5-7.5h310a7.50851,7.50851,0,0,1,7.5,7.5V437.68779l-156.8877,66.999A8.10957,8.10957,0,0,1,603.96016,505.32158Zm-162.96-69.1123,160.66309,66.66455a6.1182,6.1182,0,0,0,4.668-.02784l155.669-66.47851V227.33721a5.50653,5.50653,0,0,0-5.5-5.5h-310a5.50653,5.50653,0,0,0-5.5,5.5Z\"
                            transform=\"translate(-315 -194.16259)\" fill=\"#3f3d56\" />
                        <path
                            d=\"M878,387.83741h-.2002L763,436.85743l-157.06982,67.07a5.06614,5.06614,0,0,1-3.88038.02L440,436.71741l-117.62012-48.8-.17968-.08H322a7.00778,7.00778,0,0,0-7,7v304a7.00779,7.00779,0,0,0,7,7H878a7.00779,7.00779,0,0,0,7-7v-304A7.00778,7.00778,0,0,0,878,387.83741Zm5,311a5.002,5.002,0,0,1-5,5H322a5.002,5.002,0,0,1-5-5v-304a5.01106,5.01106,0,0,1,4.81006-5L440,438.87739l161.28027,66.92a7.12081,7.12081,0,0,0,5.43994-.03L763,439.02741l115.2002-49.19a5.01621,5.01621,0,0,1,4.7998,5Z\"
                            transform=\"translate(-315 -194.16259)\" fill=\"#3f3d56\" />
                        <path
                            d=\"M602.345,445.30958a27.49862,27.49862,0,0,1-16.5459-5.4961l-.2959-.22217-62.311-47.70752a27.68337,27.68337,0,1,1,33.67407-43.94921l40.36035,30.94775,95.37793-124.38672a27.68235,27.68235,0,0,1,38.81323-5.12353l-.593.80517.6084-.79346a27.71447,27.71447,0,0,1,5.12353,38.81348L624.36938,434.50586A27.69447,27.69447,0,0,1,602.345,445.30958Z\"
                            transform=\"translate(-315 -194.16259)\" fill=\"#0053db\" />
                    </svg>
                </div>
                <div class=\"mt-5\">
                    <h5 class=\"text-center\">";
            // line 46
            echo twig_escape_filter($this->env, t("Email de vérification envoyé !"), "html", null, true);
            echo "</h5>
                    <p class=\"my-3\">
                        <small>
                            ";
            // line 49
            if (twig_test_empty(($context["text"] ?? null))) {
                // line 50
                echo "                            ";
                echo twig_escape_filter($this->env, ((($context["resent"] ?? null)) ? (t("Le mail a été renvoyé ")) : (t("Un email de vérification de votre copte vous a
                            été envoyé "))), "html", null, true);
                // line 51
                echo "
                            ";
                // line 52
                echo twig_escape_filter($this->env, t("à l'adresse. "), "html", null, true);
                echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, t("Veillez cliquer sur le lien dans l'email pour confirmer votre
                            compte "), "html", null, true);
                // line 53
                echo "
                            ";
            } else {
                // line 55
                echo "                            ";
                echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
                echo "
                            ";
            }
            // line 57
            echo "                        </small>
                    </p>

                    <div>
                        <p class=\"text-center mt-4\">
                            ";
            // line 62
            if ((($context["resend"] ?? null) != false)) {
                // line 63
                echo "                            <small>
                                <a href=\"/email-verification/";
                // line 64
                echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
                echo "?action=resend\">
                                    ";
                // line 65
                echo twig_escape_filter($this->env, t("Vous n'avez pas reçu le mail ? "), "html", null, true);
                echo " <br /></br.>";
                echo "Renvoyer";
                echo "</a>
                            </small>
                            ";
            }
            // line 68
            echo "                        </p>
                    </div>
                </div>
                ";
        } else {
            // line 72
            echo "                <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, ($context["noverify"] ?? null), "html", null, true);
            echo "</h3>
                ";
        }
        // line 74
        echo "            </div>
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
        // line 87
        echo twig_escape_filter($this->env, t("Programmes & Formations"), "html", null, true);
        echo "</h3>
                        <p class=\"details\">";
        // line 88
        echo twig_escape_filter($this->env, t("Rechercher et trouver en quelques minutes le programme qui vous
                            correspond"), "html", null, true);
        // line 89
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <!-- breadcrumb area end here  -->

</div>

";
    }

    public function getTemplateName()
    {
        return "client/verification-mail-sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 89,  190 => 88,  186 => 87,  171 => 74,  165 => 72,  159 => 68,  151 => 65,  147 => 64,  144 => 63,  142 => 62,  135 => 57,  129 => 55,  125 => 53,  119 => 52,  116 => 51,  112 => 50,  110 => 49,  104 => 46,  69 => 13,  67 => 12,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/verification-mail-sent.html.twig", "/home/admicuwm/public_html/templates/client/verification-mail-sent.html.twig");
    }
}
