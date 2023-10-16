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

/* admin/base.html.twig */
class __TwigTemplate_92cb4853699c595c0d5a235ed7132c37 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"description\" content=\"Responsive Bootstrap 5 Admin &amp; Dashboard Template\">
\t<meta name=\"author\" content=\"Bootlab\">

\t<title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<link rel=\"canonical\" href=\"dashboard-default-2.html\" />
\t<link rel=\"shortcut icon\" href=\"/assets/img/favicon.ico\">

\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap\" rel=\"stylesheet\">

\t<!-- Choose your prefered color scheme -->
\t<!-- <link href=\"/assets/css/light.css\" rel=\"stylesheet\"> -->
\t<!-- <link href=\"/assets/css/dark.css\" rel=\"stylesheet\"> -->

\t<!-- BEGIN SETTINGS -->
\t<!-- Remove this after purchasing -->
\t<link class=\"js-stylesheet\" href=\"/assets/css/light.css\" rel=\"stylesheet\">
\t<link class=\"\" href=\"/assets/css/admin-custom.css\" rel=\"stylesheet\">
\t<!--script src=\"/assets/js/settings.js\"></script-->
\t<!-- END SETTINGS -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script></head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme=\"default\" data-layout=\"fluid\" data-sidebar-position=\"left\" data-sidebar-behavior=\"sticky\">


    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "\t
\t<script src=\"/assets/js/app.js\"></script>
\t<script  src=\"/assets/js/custom.js\"></script>
\t<script src=\"/assets/js/admin-custom-pages.js\"></script>
    ";
        // line 56
        $this->displayBlock('script', $context, $blocks);
        // line 57
        echo "\t

</body>


</html>";
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 56
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 56,  120 => 51,  114 => 13,  105 => 57,  103 => 56,  97 => 52,  95 => 51,  54 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/base.html.twig", "/home/admicuwm/public_html/templates/admin/base.html.twig");
    }
}
