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

/* client/free-proposal.html.twig */
class __TwigTemplate_3e8b606ed32ce9c296c7db5e45722be8 extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/free-proposal.html.twig", 1);
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
        echo "<style>
    .btn-start {
        border: 0;
        padding: 20px;
        border-radius: 30px;
        border-width: 1px;
        border-style: solid;
        border-color: var(--bs-primary);
        align-items: center;
        max-width: 200px;
        width: 100%;
        background-color: transparent;
        color:var(--bs-primary);
        

    }
    .btn-start:hover{
        background-color: var(--bs-primary);
        color:#fff;
        border: 0;;
    }
    .btn-start i.head-icon {
        font-size: 3rem;
        
    }

    .btn-start i.chevron {}

    .btn-start span {}
</style>
<!-- about page start here  -->
<div class=\"course-details-wrapper single-page-section-top-space single-page-section-bottom-space\">
    <div class=\"container custom-container-01\">
        <div class=\"row  \">
            <div class=\"col-12 col-md-6 mx-auto\">
                <h2 class=\"d-none d-md-block\">";
        // line 41
        echo twig_escape_filter($this->env, t("Que cherchez vous ?"), "html", null, true);
        echo "</h2>
                <h2 class=\"d-md-none\">";
        // line 42
        echo twig_escape_filter($this->env, t("Que cherchez vous ?"), "html", null, true);
        echo "</h2>
                <div class=\"d-flex mt-4 row \">
                    <div class=\"col-12 col-sm-6  d-flex justify-content-center\">
                        <a href=\"/catalogue\" class=\" btn  d-flex flex-column btn-start\">
                            <i class=\"head-icon fa-solid fa-graduation-cap\"></i>
                            <span class=\"mt-4\">
                                ";
        // line 48
        echo twig_escape_filter($this->env, t("Une Formation Profesionnelle"), "html", null, true);
        echo "
                                
                            </span>
                        </a>
                    </div>
                    <div class=\"col-12 col-sm-6 mt-4 mt-sm-0 ms-0  d-flex justify-content-center\">
                        <a  href=\"/jobs\"  class=\" btn  d-flex flex-column btn-start\">
                            <i class=\"head-icon fa-solid fa-suitcase\"></i>
                            <span class=\"mt-4\">
                                ";
        // line 57
        echo twig_escape_filter($this->env, t("Un Emploi"), "html", null, true);
        echo "

                            </span>
                            <p class=\"mt-2 small\"><small></small></p>
                        </a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
<!-- about page end here  -->
";
    }

    public function getTemplateName()
    {
        return "client/free-proposal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  109 => 48,  100 => 42,  96 => 41,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/free-proposal.html.twig", "/home/admicuwm/public_html/templates/client/free-proposal.html.twig");
    }
}
