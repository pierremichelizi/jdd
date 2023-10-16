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

/* client/about-us.html.twig */
class __TwigTemplate_00570d1d2a81c256ac885c3a4727bd0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/about-us.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "     

<!-- about page start here  -->
<div class=\"about-page-area-wrapper single-page-section-top-space single-page-section-bottom-space\">
    <!-- about area start here  -->
    <section class=\"about-section-area section-bottom-space\">
        <div class=\"container custom-container-01\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"about-content\">
                        <h3 class=\"content-title\">";
        // line 13
        echo twig_escape_filter($this->env, t("A Propos de nous"), "html", null, true);
        echo "</h3>

                        <p class=\"paragraph\">";
        // line 15
        echo twig_escape_filter($this->env, t("Bienvenue sur AdmissionFacile, votre porte d'entrée vers l'éducation professionnelle. Notre plateforme a pour mission de rendre le processus d'admission accessible à tous, quel que soit votre parcours éducatif."), "html", null, true);
        echo "</p>
                        <p class=\"paragraph\">";
        // line 16
        echo twig_escape_filter($this->env, t("Nous croyons que l'éducation est la clé du développement personnel et professionnel. Notre objectif est de briser les barrières qui empêchent certaines personnes de poursuivre leur rêve de formation professionnelle. Nous faisons en sorte que chaque individu ait la possibilité de postuler et de se former."), "html", null, true);
        echo "
                        </p>

                       

                        <div class=\"btn-wrap\">
                            <a href=\"/contact-us\" class=\"btn-common btn-new\">Obtenir une consultation</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12\">
                    <div class=\"thumbnail \">
                        <div class=\"right-frame\">
                            <img src=\"assets/img/about/01.jpg\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end here  -->

    <!-- counter area start here -->
    <!--section class=\"counter-area-wrapper\">
        <div class=\"counter-section-area\">
            <div class=\"container custom-container-01\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"counter-section-inner style-01\">
                            <div class=\"single-counterup\">
                                <div class=\"image-wrap\">
                                    <img src=\"assets/img/sections/client/people-group.png\" alt=\"\">
                                </div>
                                <div class=\"content-wrap\">
                                    <div class=\"odo-area\">
                                        <h3 class=\"odometer odo-title\" data-odometer-final=\"458712\">0</h3>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"subtitle\">More then students</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single-counterup\">
                                <div class=\"image-wrap\">
                                    <img src=\"assets/img/sections/client/customer-care.png\" alt=\"\">
                                </div>
                                <div class=\"content-wrap\">
                                    <div class=\"odo-area\">
                                        <h3 class=\"odometer odo-title\" data-odometer-final=\"211\">0</h3>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"subtitle\">Total consultants</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single-counterup\">
                                <div class=\"image-wrap\">
                                    <img src=\"assets/img/sections/client/graduation.png\" alt=\"\">
                                </div>
                                <div class=\"content-wrap\">
                                    <div class=\"odo-area\">
                                        <h3 class=\"odometer odo-title\" data-odometer-final=\"425\">0</h3>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"subtitle\">Total courses</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single-counterup\">
                                <div class=\"image-wrap\">
                                    <img src=\"assets/img/sections/client/world.png\" alt=\"\">
                                </div>
                                <div class=\"content-wrap\">
                                    <div class=\"odo-area\">
                                        <h3 class=\"odometer odo-title\" data-odometer-final=\"32\">0</h3>
                                    </div>
                                    <div class=\"content\">
                                        <h6 class=\"subtitle\">Countries</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
    <!-- counter area end here -->

    <!-- chose us area start here  -->
    <section class=\"chose-area-wrapper section-bottom-space\">
        <div class=\"chose-area-inner bg-color-01\">
            <div class=\"bg-image background-image\" style=\"background-image: url(assets/img/chose-us/01.jpg);\">
            </div>
            <div class=\"container custom-container-01\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-lg-6\">
                        <div class=\"img-box\">

                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"content-wrap\">
                            <div class=\"section-title-wrapper\">
                                <h4 class=\"section-title\">Pourquoi nous choisir</h4>
                                <p class=\"description color-02\">Nous croyons en l'accès à l'éducation pour tous, quel que soit votre niveau de diplôme ou votre parcours éducatif. AdmissionFacile offre une opportunité égale à chaque individu de poursuivre sa formation professionnelle et de développer ses compétences.</p>
                            </div>

                            <div class=\"icon-box-with-text-wrap\">
                                <ul class=\"ul icon-box-with-text style-02\">
                                    <li class=\"single-icon-box-with-text\">
                                        <div class=\"icon-wrap\">
                                            <img src=\"assets/img/icon/icon-and-text/02/01.png\" alt=\"\">
                                        </div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Notre Vision</h4>
                                            <p class=\"paragraph\">Notre vision est guidée par un profond engagement envers l'éducation et l'accès équitable à l'apprentissage. Nous aspirons à être bien plus qu'une simple plateforme d'admission en formation professionnelle. 
                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"single-icon-box-with-text style-02\">
                                        <div class=\"icon-wrap\">
                                            <img src=\"assets/img/icon/icon-and-text/02/02.png\" alt=\"\">
                                        </div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Notre Mission</h4>
                                            <p class=\"paragraph\">
                                                Nous nous engageons à rendre le processus d'admission en formation professionnelle aussi simple, transparent et accessible que possible pour tous les individus.

                                            </p>
                                        </div>
                                    </li>
                                    <li class=\"single-icon-box-with-text style-03\">
                                        <div class=\"icon-wrap\">
                                            <img src=\"assets/img/icon/icon-and-text/02/03.png\" alt=\"\">
                                        </div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Our Goal</h4>
                                            <p class=\"paragraph\">
                                                Nous avons pour objectif de simplifier l'Admission et de rendre possible l'égalité dans chances à tous.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chose us area end here  -->

</div>
<!-- about page end here  -->
";
    }

    public function getTemplateName()
    {
        return "client/about-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  67 => 15,  62 => 13,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/about-us.html.twig", "/home/admicuwm/public_html/templates/client/about-us.html.twig");
    }
}
