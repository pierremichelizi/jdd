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

/* admin/dashboard/base.html.twig */
class __TwigTemplate_11a6cfb32ae59b475cb8ae063a667196 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"wrapper\">
\t<nav id=\"sidebar\" class=\"sidebar\">
\t\t<div class=\"sidebar-content js-simplebar\">
\t\t\t<a class='sidebar-brand' href='/'>
\t\t\t\t<img src=\"/assets/img/Logos/logo-white.svg\" class=\"align-middle me-3\" />
\t\t\t</a>

\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t<!--li class=\"sidebar-header\">
\t\t\t\t\tPages
\t\t\t\t</li-->
\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t<a class='sidebar-link' href='tables-bootstrap.html'>
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"home\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 19
        echo twig_escape_filter($this->env, t("Dashboard"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item ";
        // line 22
        echo (((is_string($__internal_compile_0 = ($context["current_url"] ?? null)) && is_string($__internal_compile_1 = "/admin/institutions") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<a class='sidebar-link' href='/admin/institutions'>
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"briefcase\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 25
        echo twig_escape_filter($this->env, t("Instituts"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item ";
        // line 28
        echo (((is_string($__internal_compile_2 = ($context["current_url"] ?? null)) && is_string($__internal_compile_3 = "/admin/formations/secteurs") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3)))) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<a class='sidebar-link' href='/admin/formations/secteurs'>
\t\t\t\t\t\t<!--i class=\"align-middle\" data-feather=\"grid\"></i-->
\t\t\t\t\t\t<i class=\"fas fa-columns\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 32
        echo twig_escape_filter($this->env, t("Secteurs"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, t("Formations"), "html", null, true);
        echo "
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"sidebar-item ";
        // line 39
        echo (((is_string($__internal_compile_4 = ($context["current_url"] ?? null)) && is_string($__internal_compile_5 = "/admin/formations/diplomes") && ('' === $__internal_compile_5 || 0 === strpos($__internal_compile_4, $__internal_compile_5)))) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<a class='sidebar-link '
\t\t\t\t\t\thref='/admin/formations/diplomes'>
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"award\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 43
        echo twig_escape_filter($this->env, t("Diplomes"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item ";
        // line 46
        echo (((is_string($__internal_compile_6 = ($context["current_url"] ?? null)) && is_string($__internal_compile_7 = "/admin/formations/programs") && ('' === $__internal_compile_7 || 0 === strpos($__internal_compile_6, $__internal_compile_7)))) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<a class='sidebar-link '
\t\t\t\t\t\thref='/admin/formations/programs'>
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"book\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 50
        echo twig_escape_filter($this->env, t("Formations"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item ";
        // line 53
        echo (((is_string($__internal_compile_8 = ($context["current_url"] ?? null)) && is_string($__internal_compile_9 = "/admin/formations/admission-groups") && ('' === $__internal_compile_9 || 0 === strpos($__internal_compile_8, $__internal_compile_9)))) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<a class='sidebar-link '
\t\t\t\t\t\thref='/admin/formations/admission-groups/list'>
\t\t\t\t\t\t<!--i class=\"align-middle\" data-feather=\"award\"></i-->
\t\t\t\t\t\t<i class=\"fas fa-user-friends\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 58
        echo twig_escape_filter($this->env, t("Groupes d'admission"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item ";
        // line 61
        echo (((is_string($__internal_compile_10 = ($context["current_url"] ?? null)) && is_string($__internal_compile_11 = "/admin/formations/applications") && ('' === $__internal_compile_11 || 0 === strpos($__internal_compile_10, $__internal_compile_11)))) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<a class='sidebar-link '
\t\t\t\t\t\thref='/admin/formations/applications'>
\t\t\t\t\t\t<!--i class=\"align-middle\" data-feather=\"award\"></i-->
\t\t\t\t\t\t<i class=\"fas fa-address-book\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 66
        echo twig_escape_filter($this->env, t("Candidatures"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t";
        // line 70
        echo twig_escape_filter($this->env, t("Emplois"), "html", null, true);
        echo "
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item ";
        // line 72
        echo (((is_string($__internal_compile_12 = ($context["current_url"] ?? null)) && is_string($__internal_compile_13 = "/admin/jobs") && ('' === $__internal_compile_13 || 0 === strpos($__internal_compile_12, $__internal_compile_13)))) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<a class='sidebar-link '
\t\t\t\t\t\thref='/admin/jobs'>
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"briefcase\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 76
        echo twig_escape_filter($this->env, t("Les Jobs"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"sidebar-item ";
        // line 79
        echo (((is_string($__internal_compile_14 = ($context["current_url"] ?? null)) && is_string($__internal_compile_15 = "/admin/formations/candidatures") && ('' === $__internal_compile_15 || 0 === strpos($__internal_compile_14, $__internal_compile_15)))) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<a class='sidebar-link '
\t\t\t\t\t\thref='#'>
\t\t\t\t\t\t<!--i class=\"align-middle\" data-feather=\"award\"></i-->
\t\t\t\t\t\t<i class=\"fas fa-address-book\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">";
        // line 84
        echo twig_escape_filter($this->env, t("Candidatures"), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
\t<div class=\"main\">
\t\t<nav class=\"navbar navbar-expand navbar-light navbar-bg\">
\t\t\t<a class=\"sidebar-toggle\">
\t\t\t\t<i class=\"hamburger align-self-center\"></i>
\t\t\t</a>

\t\t\t<form class=\"d-none d-sm-inline-block\">
\t\t\t\t<div class=\"input-group input-group-navbar\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search projects…\" aria-label=\"Search\">
\t\t\t\t\t<button class=\"btn\" type=\"button\">
\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item px-2 dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"servicesDropdown\" role=\"button\"
\t\t\t\t\t\tdata-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tMega menu
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-start dropdown-mega\" aria-labelledby=\"servicesDropdown\">
\t\t\t\t\t\t<div class=\"d-md-flex align-items-start justify-content-start\">
\t\t\t\t\t\t\t<div class=\"dropdown-mega-list\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">UI Elements</div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Alerts</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Buttons</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Cards</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Carousel</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">General</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Grid</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Modals</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Tabs</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Typography</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-mega-list\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Forms</div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Layouts</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Basic Inputs</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Input Groups</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Advanced Inputs</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Editors</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Validation</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Wizard</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-mega-list\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Tables</div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Basic Tables</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Responsive Table</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Table with Buttons</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Column Search</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Muulti Selection</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Ajax Sourced Data</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t<ul class=\"navbar-nav navbar-align\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"message-circle\"></i>
\t\t\t\t\t\t\t\t<span class=\"indicator\">4</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\"
\t\t\t\t\t\t\taria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t4 New Messages
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/avatars/avatar-5.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"avatar img-fluid rounded-circle\" alt=\"Ashley Briggs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Ashley Briggs</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu
\t\t\t\t\t\t\t\t\t\t\t\ttortor.</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">15m ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/avatars/avatar-2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"avatar img-fluid rounded-circle\" alt=\"Carl Jenkins\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Carl Jenkins</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/avatars/avatar-4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"avatar img-fluid rounded-circle\" alt=\"Stacie Hall\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Stacie Hall</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">4h ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/avatars/avatar-3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"avatar img-fluid rounded-circle\" alt=\"Bertha Martin\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Bertha Martin</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed,
\t\t\t\t\t\t\t\t\t\t\t\tposuere ac, mattis non.</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all messages</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bell-off\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\"
\t\t\t\t\t\t\taria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t4 New Notifications
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-danger\" data-feather=\"alert-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Update completed</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Restart server 12 to complete the update.
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-warning\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Lorem ipsum</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate
\t\t\t\t\t\t\t\t\t\t\t\thendrerit et.</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">6h ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-primary\" data-feather=\"home\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Login from 192.186.1.1</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">8h ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-success\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">New connection</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Anna accepted your request.</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">12h ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all notifications</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-flag dropdown-toggle\" href=\"#\" id=\"languageDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<img src=\"/assets/img/flags/us.png\" alt=\"English\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"languageDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/flags/us.png\" alt=\"English\" width=\"20\"
\t\t\t\t\t\t\t\t\tclass=\"align-middle me-1\" />
\t\t\t\t\t\t\t\t<span class=\"align-middle\">English</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/flags/es.png\" alt=\"Spanish\" width=\"20\"
\t\t\t\t\t\t\t\t\tclass=\"align-middle me-1\" />
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Spanish</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/flags/de.png\" alt=\"German\" width=\"20\" class=\"align-middle me-1\" />
\t\t\t\t\t\t\t\t<span class=\"align-middle\">German</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t<img src=\"/assets/img/flags/nl.png\" alt=\"Dutch\" width=\"20\" class=\"align-middle me-1\" />
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Dutch</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"settings\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t<img src=\"/assets/img/avatars/avatar.jpg\" class=\"avatar img-fluid rounded-circle me-1\"
\t\t\t\t\t\t\t\talt=\"Chris Wood\" />
\t\t\t\t\t\t\t<span class=\"text-dark\">Chris Wood</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t<a class='dropdown-item' href='pages-profile.html'>
\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"user\"></i>
\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i>
\t\t\t\t\t\t\t\tAnalytics</a>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class='dropdown-item' href='pages-settings.html'>Settings & Privacy</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Help</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Sign out</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>

\t\t<main class=\"content\">
\t\t\t";
        // line 347
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "error", [], "any", false, false, false, 347))) {
            // line 348
            echo "\t\t\t<div class=\"alert alert-danger p-3\" role=\"alert\">
\t\t\t\t";
            // line 349
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "error", [], "any", false, false, false, 349), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 352
        echo "\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "success", [], "any", false, false, false, 352))) {
            // line 353
            echo "\t\t\t<div class=\"alert alert-success p-3\" role=\"alert\">
\t\t\t\t";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "success", [], "any", false, false, false, 354), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 357
        echo "\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 358
        echo "\t\t</main>


\t</div>
</div>
<div class=\"modal fade\" id=\"delete-action-modal\"  data-bs-keyboard=\"false\" tabindex=\"-1\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h1 class=\"modal-title text-lg\" id=\"staticBackdropLabel\">Vous etes sur de vouloir supprimer cet institut ? </h1>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\">Supprimer</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
    }

    // line 357
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 381
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 382
        echo "<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\tif (\"";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "error", [], "any", false, false, false, 384), "html", null, true);
        echo "\") {
\t\t\t// Create an instance of Notyf
\t\t\tconst notyf = new Notyf();

\t\t\t// Display an error notification 
\t\t\tnotyf.error(\"";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "error", [], "any", false, false, false, 389), "html", null, true);
        echo "\");
\t\t}else if(\"";
        // line 390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "success", [], "any", false, false, false, 390), "html", null, true);
        echo "\"){
\t\t\t// Create an instance of Notyf
\t\t\tconst notyf = new Notyf();

\t\t\t// Display an error notification 
\t\t\tnotyf.error(\"";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "success", [], "any", false, false, false, 395), "html", null, true);
        echo "\");
\t\t}

\t});
</script>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\t// Bar chart
\t\tnew Chart(document.getElementById(\"chartjs-dashboard-bar\"), {
\t\t\ttype: \"bar\",
\t\t\tdata: {
\t\t\t\tlabels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
\t\t\t\tdatasets: [{
\t\t\t\t\tlabel: \"Last year\",
\t\t\t\t\tbackgroundColor: window.theme.primary,
\t\t\t\t\tborderColor: window.theme.primary,
\t\t\t\t\thoverBackgroundColor: window.theme.primary,
\t\t\t\t\thoverBorderColor: window.theme.primary,
\t\t\t\t\tdata: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
\t\t\t\t\tbarPercentage: .325,
\t\t\t\t\tcategoryPercentage: .5
\t\t\t\t}, {
\t\t\t\t\tlabel: \"This year\",
\t\t\t\t\tbackgroundColor: window.theme[\"primary-light\"],
\t\t\t\t\tborderColor: window.theme[\"primary-light\"],
\t\t\t\t\thoverBackgroundColor: window.theme[\"primary-light\"],
\t\t\t\t\thoverBorderColor: window.theme[\"primary-light\"],
\t\t\t\t\tdata: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
\t\t\t\t\tbarPercentage: .325,
\t\t\t\t\tcategoryPercentage: .5
\t\t\t\t}]
\t\t\t},
\t\t\toptions: {
\t\t\t\tmaintainAspectRatio: false,
\t\t\t\tcornerRadius: 15,
\t\t\t\tlegend: {
\t\t\t\t\tdisplay: false
\t\t\t\t},
\t\t\t\tscales: {
\t\t\t\t\tyAxes: [{
\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\tdisplay: false
\t\t\t\t\t\t},
\t\t\t\t\t\tticks: {
\t\t\t\t\t\t\tstepSize: 20
\t\t\t\t\t\t},
\t\t\t\t\t\tstacked: true,
\t\t\t\t\t}],
\t\t\t\t\txAxes: [{
\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\tcolor: \"transparent\"
\t\t\t\t\t\t},
\t\t\t\t\t\tstacked: true,
\t\t\t\t\t}]
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\t\$(\"#datetimepicker-dashboard\").datetimepicker({
\t\t\tinline: true,
\t\t\tsideBySide: false,
\t\t\tformat: \"L\"
\t\t});
\t});
</script>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\t// Pie chart
\t\tnew Chart(document.getElementById(\"chartjs-dashboard-pie\"), {
\t\t\ttype: \"pie\",
\t\t\tdata: {
\t\t\t\tlabels: [\"Direct\", \"Affiliate\", \"E-mail\", \"Other\"],
\t\t\t\tdatasets: [{
\t\t\t\t\tdata: [2602, 1253, 541, 1465],
\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\twindow.theme.primary,
\t\t\t\t\t\twindow.theme.warning,
\t\t\t\t\t\twindow.theme.danger,
\t\t\t\t\t\t\"#E8EAED\"
\t\t\t\t\t],
\t\t\t\t\tborderWidth: 5,
\t\t\t\t\tborderColor: window.theme.white
\t\t\t\t}]
\t\t\t},
\t\t\toptions: {
\t\t\t\tresponsive: !window.MSInputMethodContext,
\t\t\t\tmaintainAspectRatio: false,
\t\t\t\tcutoutPercentage: 70,
\t\t\t\tlegend: {
\t\t\t\t\tdisplay: false
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\t\$(\"#datatables-dashboard-projects\").DataTable({
\t\t\tpageLength: 6,
\t\t\tlengthChange: false,
\t\t\tbFilter: false,
\t\t\tautoWidth: false
\t\t});
\t});
</script>
<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\",()=>{
\t\t\t
\t\t\t
\t\t\tfunction hookupEvent(){
\t\t\t    \$(\".delete-action-modal-btn\").off(\"click\")
\t\t\t\t\$(\".delete-action-modal-btn\").click(function (e) {
\t\t\t\t    const modal=new bootstrap.Modal('#delete-action-modal')
\t\t\t\t    console.log(modal)
\t\t\t\t    modal.show();
\t\t\t\t\tlet actionUrl = \$(e.target).data(\"bs-action-url\");
\t\t\t\t\tlet actionMessage = \$(e.target).data(\"bs-action-message\");
\t\t\t\t\t
\t\t\t\t\t\$(\"#delete-action-modal h1\").html(actionMessage);
\t\t\t\t\t\$(\"#delete-action-modal .delete\").off(\"click\");
\t\t\t\t\t\$(\"#delete-action-modal .delete\").on(\"click\", function (e) {
\t\t\t\t\t\tif (actionUrl) {
\t\t\t\t\t\t\twindow.location.href = actionUrl
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t})
\t\t\t\t})
\t\t\t}
\t\t\t
            if(!\$.fn.dataTable.isDataTable(\"#datatables-clients\")){
                \$(\"#datatables-clients\").DataTable({
    \t\t\t\tresponsive: true,
    \t\t\t\torder: [
    \t\t\t\t\t[1, \"asc\"]
    \t\t\t\t]
    \t\t\t});
            }
\t\t\t
\t\t\t\$(\"#datatables-clients\").on('page.dt',hookupEvent )
\t
\t\t\thookupEvent()
\t\t})
\t</script>
";
    }

    public function getTemplateName()
    {
        return "admin/dashboard/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 395,  531 => 390,  527 => 389,  519 => 384,  515 => 382,  511 => 381,  505 => 357,  480 => 358,  477 => 357,  471 => 354,  468 => 353,  465 => 352,  459 => 349,  456 => 348,  454 => 347,  188 => 84,  180 => 79,  174 => 76,  167 => 72,  162 => 70,  155 => 66,  147 => 61,  141 => 58,  133 => 53,  127 => 50,  120 => 46,  114 => 43,  107 => 39,  101 => 36,  94 => 32,  87 => 28,  81 => 25,  75 => 22,  69 => 19,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard/base.html.twig", "/home/admicuwm/public_html/templates/admin/dashboard/base.html.twig");
    }
}
