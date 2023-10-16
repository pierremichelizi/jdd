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

/* client/base.html.twig */
class __TwigTemplate_f2369ff480866c8ce2a079dd40f9e716 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- favicon -->
    <link rel=\"icon\" href=\"/assets/img/favicon.png\" sizes=\"20x20\" type=\"image/png\">
    
    <!-- animate -->
    <link rel=\"stylesheet\" href=\"/assets/css/animate.css\">
    <!-- bootstrap -->
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\">
    <!-- magnific popup -->
    <link rel=\"stylesheet\" href=\"/assets/css/magnific-popup.css\">
    <!-- Nice Select -->
    <link rel=\"stylesheet\" href=\"/assets/css/nice-select.css\">
    <!-- Odomiters css -->
    <link rel=\"stylesheet\" href=\"/assets/css/odometer.css\">
    <!-- fontawesome -->
    <link rel=\"stylesheet\" href=\"/assets/css/font-awesome.min.css\">
    <!-- Slick Slider -->
    <link rel=\"stylesheet\" href=\"/assets/css/slick.css\">
    <!-- Main Stylesheet -->
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
    <!-- Responsive Css -->
    <link rel=\"stylesheet\" href=\"/assets/css/responsive.css\" />
    <!-- Responsive Css -->
    <link rel=\"stylesheet\" href=\"/assets/css/custom.css\" />
    <style>
        .page-wrapper{
            overflow: hidden !important;
        }
    </style>
    
</head>



<body>
    <!-- preloader area start -->
    <div class=\"preloader\" id=\"preloader\">
        <div class=\"preloader-inner\">
            <div class=\"loader\">
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!--  search Popup start -->
    <div class=\"body-overlay\" id=\"body-overlay\"></div>
    <div class=\"search-popup\" id=\"search-popup\">
        <form action=\"https://themeim.com/demo/eduplan/index.html\" class=\"search-form\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search.....\">
            </div>
            <button class=\"close-btn border-none\"><i class=\"fas fa-search\"></i></button>
        </form>
    </div>
    <!-- Search Popup End -->

    <main class=\"page-wrapper\">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Nav Area Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class=\"nav-area-wrapper-relative\">
            <nav class=\"navbar navbar-area navbar-expand-lg navigation-style-02\">
                <div class=\"container custom-container custom-container-01\">
                    <div class=\"responsive-menu\">
                        <div class=\"logo-wrapper\">
                            <a href=\"/\" class=\"logo\">
                                <img src=\"/assets/img/Logos/logo-black.svg\" alt=\"\">
                            </a>
                        </div>
                        <button class=\"navbar-toggler navbar-bs-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#themeim_main_menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"themeim_main_menu\">
                        <ul class=\"navbar-nav\">


                            <li><a href=\"/catalogue\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Formations"), "html", null, true);
        echo "</a></li>

                            <li><a href=\"/jobs\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Jobs"), "html", null, true);
        echo "</a></li>

                            <li><a href=\"/institutions\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Etablissements"), "html", null, true);
        echo "</a></li>

                            <!--li class=\"menu-item-has-children\">
                                <a href=\"/institutions\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Etablissements"), "html", null, true);
        echo "</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"https://themeim.com/\">Our Services</a></li>
                                    <li><a href=\"services-details.html\">Services Details</a></li>
                                    <li><a href=\"our-team.html\">Team</a></li>
                                    <li><a href=\"instructors.html\">Instructors</a></li>
                                    <li><a href=\"about-instructor.html\">About Instructor</a></li>
                                    <li><a href=\"country-details.html\">Country Details</a></li>
                                    <li><a href=\"all-course.html\">All Course</a></li>
                                    <li><a href=\"all-course-widget.html\">All Course with widget</a></li>
                                    <li><a href=\"course-details.html\">Course Details</a></li>
                                    <li><a href=\"apply-online.html\">Apply Online</a></li>
                                    <li><a href=\"shop-cart.html\">Shop Cart</a></li>
                                    <li><a href=\"faq.html\">FAQ</a></li>
                                    <li><a href=\"404.html\">404</a></li>
                                    <li><a href=\"cart-empty.html\">Cart Empty</a></li>
                                </ul-->
                            </li!-->

                            <li class=\"menu-item-has-children\">
                                <a href=\"/about-us\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("A Propos"), "html", null, true);
        echo "</a>
                                <!--ul class=\"sub-menu\">
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"blog-classic.html\">Blog Classic</a></li>
                                    <li><a href=\"blog-details.html\">Blog Single</a></li>
                                </ul-->
                            </li>

                            <li><a href=\"/contact-us\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Contatez-Nous"), "html", null, true);
        echo "</a></li>
                            ";
        // line 122
        if (($context["isLogged"] ?? null)) {
            // line 123
            echo "                            <li><a href=\"/user/submissions\" class=\"text-primary d-lg-none\">";
            echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Mon Compte"), "html", null, true);
            echo "</a></li>
                            ";
        } else {
            // line 125
            echo "                            <li><a href=\"/login\" class=\"d-lg-none\">";
            echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Connexion"), "html", null, true);
            echo "</a></li>
                            <li><a href=\"/signup\" class=\"text-primary d-lg-none\">";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Inscription"), "html", null, true);
            echo "</a></li>
                            ";
        }
        // line 128
        echo "                        </ul>
                    </div>
                    <div class=\"nav-right-content\">
                        
                        ";
        // line 132
        if (($context["isLogged"] ?? null)) {
            // line 133
            echo "                        <div class=\"btn-wrap\">
                            <a href=\"/user/submissions\" class=\"btn-common nav-btn\">";
            // line 134
            echo "Mon Compte";
            echo "</a>
                        </div>
                        ";
        } else {
            // line 137
            echo "                        <div class=\"btn-wrap\">
                            <a href=\"/login\" class=\"btn-common nav-btn\">";
            // line 138
            echo "Se Connecter";
            echo "</a>
                        </div>
                        ";
        }
        // line 141
        echo "                    </div>
                </div>
            </nav>
        </div>
        ";
        // line 145
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "success", [], "any", false, false, false, 145))) {
            // line 146
            echo "        <div class=\"row\">
            <div class=\"col-10 col-md-8 col-xl-7  mx-auto\">
                <div class=\"alert alert-success \">
                    ";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "success", [], "any", false, false, false, 149), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        ";
        }
        // line 154
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "error", [], "any", false, false, false, 154))) {
            // line 155
            echo "        <div class=\"row\">
            <div class=\"col-10 col-md-8 col-xl-7 mx-auto \">
                <div class=\"alert alert-danger\">
                    ";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flash"] ?? null), "error", [], "any", false, false, false, 158), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        ";
        }
        // line 163
        echo "        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Nav Area End Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        ";
        // line 166
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "
         <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            footer area start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <footer class=\"footer-area style-01\">
            <div class=\"footer-top p-0\">
                <div class=\"container custom-container-01\">
                    <!--div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12\">
                            <div class=\"footer-widget widget widget_subscribe\">
                                <div class=\"subscibe-wrapper\">
                                    <div class=\"content-wrap\">
                                        <div class=\"icon\">
                                            <img src=\"/assets/img/icon/newslater.png\" alt=\"\">
                                        </div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Subscribe our newsletter</h4>
                                            <p>Enter your mail address to get our updates, offer and study abroad
                                                related all updates</p>
                                        </div>

                                    </div>
                                    <div class=\"subscribe-form\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"fname\" placeholder=\"Enter your Email...\"
                                                class=\"form-control\" required=\"\" aria-required=\"true\">
                                            <div class=\"btn-wrap\">
                                                <a href=\"https://themeim.com/\" class=\"subscribe-btn\">
                                                    <img src=\"/assets/img/icon/bell.png\" alt=\"\">subscribe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div-->
                    <div class=\"footer-middle\">
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"footer-widget widget widget_nav_menu\">
                                    <h4 class=\"widget-headline\">";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Nos Offres"), "html", null, true);
        echo "</h4>
                                    <ul>
                                        <li><a href=\"/catalogue\">";
        // line 210
        echo twig_escape_filter($this->env, t("Offres d'étude"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"/jobs\">";
        // line 211
        echo twig_escape_filter($this->env, t("Offres d'emploi"), "html", null, true);
        echo "</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"footer-widget widget widget_nav_menu\">
                                    <h4 class=\"widget-headline\">";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Mentions légales"), "html", null, true);
        echo "</h4>
                                    <ul>
                                        <li><a href=\"/confidentiality\">";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Politique de confidentialité"), "html", null, true);
        echo "</a></li>
                                        <!--li><a href=\"#\">";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Termes & Conditions"), "html", null, true);
        echo " </a></li-->
                                        <li><a href=\"/cookies\">";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Cookies"), "html", null, true);
        echo " </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"footer-widget widget widget_nav_menu\">
                                    <h4 class=\"widget-headline\">";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("A Propos"), "html", null, true);
        echo "</h4>
                                    <ul>
                                        <li><a href=\"/about-us\">";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Qui Sommes-Nous ?"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"/contact-us\">";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Contactez-Nous"), "html", null, true);
        echo "</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--div class=\"col-lg-2 col-md-6 col-sm-6\">
                                <div class=\"footer-widget widget widget_nav_menu\">
                                    <h4 class=\"widget-headline\">Services</h4>
                                    <ul>
                                        <li><a href=\"#\">Counselling</a></li>
                                        <li><a href=\"#\">Test Preparation</a></li>
                                        <li><a href=\"#\">Admission</a></li>
                                        <li><a href=\"#\">Education Loan</a></li>
                                        <li><a href=\"#\">Visa Processing</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-lg-2 col-md-6 col-sm-6\">
                                <div class=\"footer-widget widget widget_nav_menu\">
                                    <h4 class=\"widget-headline\">Location</h4>
                                    <ul class=\"contact_info_list\">
                                        <li class=\"single-info-item\">
                                            <div class=\"icon\">
                                                <img src=\"/assets/img/icon/location-02.png\" alt=\"\">
                                            </div>
                                            <div class=\"details\">
                                                8502 Preston Rd. Inglewood, Maine Bangladesh
                                            </div>
                                        </li>
                                        <li class=\"single-info-item\">
                                            <div class=\"icon me-4\">
                                                <img src=\"/assets/img/icon/edu-award.png\" alt=\"\">
                                            </div>
                                            <div class=\"icon\">
                                                <img src=\"/assets/img/icon/iso.png\" alt=\"\">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"copyright-area\">
                <div class=\"container custom-container-01\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"copyright-area-inner\">
                                <p>© 2023 AdmissionFacile. Tous droits réservé </p>
                                <div class=\"footer-social-area\">
                                    <ul class=\"social-icon-02\">
                                        <li><a href=\"https://www.facebook.com/profile.php?id=61552004423773\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                         </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            footer area End Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </main>

<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/651bbbdbe6bed319d0054bd0/1hbq5bktn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- back to top area start -->
    <div class=\"back-to-top\">
        <span class=\"back-top\"><i class=\"fa fa-angle-up\"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- Jquery Js -->
    <script src=\"/assets/js/jquery-3.6.0.min.js\"></script>
    <!-- bootstrap -->
    <script src=\"/assets/js/bootstrap.min.js\"></script>
    <!-- magnific popup -->
    <script src=\"/assets/js/jquery.magnific-popup.js\"></script>
    <!-- wow -->
    <script src=\"/assets/js/wow.min.js\"></script>
    <!-- Nice Select -->
    <script src=\"/assets/js/jquery.nice-select.js\"></script>
    <!-- countdown -->
    <script src=\"/assets/js/jquery.countdown.min.js\"></script>

    <script src=\"https://unpkg.com/typeit@8.7.1/dist/index.umd.js\"></script>
    <!-- Odomiters -->
    <script src=\"/assets/js/odometer.min.js\"></script>
    <!-- Viewport Js -->
    <script src=\"/assets/js/viewport.jquery.js\"></script>
    <!-- slick Js -->
    <script src=\"/assets/js/slick.min.js\"></script>
    <!-- main js -->
    <script src=\"/assets/js/main.js\"></script>
    <script src=\"/assets/js/custom.js\"></script>
    <script src=\"/assets/js/admin-custom-pages.js\"></script>

</body>


</html>

";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 166
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "        ";
    }

    public function getTemplateName()
    {
        return "client/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 167,  488 => 166,  482 => 8,  362 => 230,  358 => 229,  353 => 227,  344 => 221,  340 => 220,  336 => 219,  331 => 217,  322 => 211,  318 => 210,  313 => 208,  271 => 168,  269 => 166,  264 => 163,  256 => 158,  251 => 155,  248 => 154,  240 => 149,  235 => 146,  233 => 145,  227 => 141,  221 => 138,  218 => 137,  212 => 134,  209 => 133,  207 => 132,  201 => 128,  196 => 126,  191 => 125,  185 => 123,  183 => 122,  179 => 121,  168 => 113,  145 => 93,  139 => 90,  134 => 88,  129 => 86,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/base.html.twig", "/home/admicuwm/public_html/templates/client/base.html.twig");
    }
}
