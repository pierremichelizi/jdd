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

/* client/home.html.twig */
class __TwigTemplate_873084acac3f82b79c42ff2d620ccb50 extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/home.html.twig", 1);
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
        echo "<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Banner Area Start Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class=\"banner-area home-01 mt-4\">
    <div class=\"container custom-container-01\">
        <div class=\"banner-wrapper\">
            <div class=\"row\">
                <div class=\"col-xl-7 col-lg-10\">
                    <div class=\"banner-inner\">
                        <p class=\"subtitle\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("BATISSEZ VOTRE CARRIERE PROFESSIONNELLE"), "html", null, true);
        echo " </p>
                        <h1 class=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Décrochez votre"), "html", null, true);
        echo " <span id=\"context-home\"><span class=\"initial\">admission</span><noscript>admission</noscript></span> ";
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("en quelques étapes !"), "html", null, true);
        echo "</h1>
                        <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Rechercher et trouver la formation ou le travail qui vous convient dans notre catalogue"), "html", null, true);
        echo " <br> ";
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Et demander une admission dès maintenant."), "html", null, true);
        echo "</p>
                        <div class=\"header-btn\">
                            <div class=\"btn-wrap\">
                                <a href=\"/free-submission\" class=\"btn-common flat-btn btn-active\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Soumettre une demande"), "html", null, true);
        echo "</a>
                            </div>
                            <div class=\"btn-wrap ms-md-4\">
                                <a href=\"/catalogue\" class=\"btn-common fill-btn \">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Les Formations"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-5\">
                    <div class=\"thumbnail\">
                        <img  src=\"/assets/img/header/header-img.png\" class=\"banner-img main\" alt=\"Student\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Banner Area End Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Features Area Start Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class=\"features-section margin-top-100\">
    <img src=\"/assets/img/shapes/graduation.png\" class=\"shape\" alt=\"graduation cap\">
    <div class=\"container custom-container-01\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"icon-box-item\">
                    <div class=\"icon\">
                        <img src=\"/assets/img/icon/idea.png\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <h4 class=\"title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Le travail accessible à tous"), "html", null, true);
        echo "</h4>
                        <p>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Que vous ayez déjà un diplôme ou non, vous pouvez postuler quelque soit votre niveau."), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"btn-wrap \" style=\"height:10px\">
                        <a href=\"/jobs\" class=\"more-btn\">";
        // line 58
        echo "Voir les offres";
        echo " <i class=\"fa-solid fa-angle-right icon\"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"icon-box-item\">
                    <div class=\"icon\">
                        <img src=\"/assets/img/icon/coversation.png\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <h4 class=\"title\">";
        // line 69
        echo "Un Processus Facile & Simplifié";
        echo "</h4>
                        <p>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Soumettez votre candidature en ligne, payez les frais de dossier et attendez la réponse."), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"btn-wrap \" style=\"height:10px\">
                        <a href=\"/free-submission\" class=\"more-btn\">";
        // line 73
        echo "Décrouvrez Maintenant";
        echo " <i class=\"fa-solid fa-angle-right icon\"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"icon-box-item\">
                    <div class=\"icon\">
                        <img src=\"/assets/img/icon/emergency.png\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <h4 class=\"title\">";
        // line 84
        echo "Des Formations Professionnelles";
        echo "</h4>
                        <p>";
        // line 85
        echo "Choisissez parmi une gamme variée de formations professionnels proposées pour faire votre choix de carrière.";
        echo "</p>
                    </div>
                    <div class=\"btn-wrap \" style=\"height:10px\">
                        <a href=\"/catalogue\" class=\"more-btn\">";
        // line 88
        echo "Voir les formations";
        echo " <i class=\"fa-solid fa-angle-right icon\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=\"margin-top-110 section-bottom-space\">
    <div class=\"destination-section\">
        <img src=\"/assets/img/shapes/mountant.png\"
            class=\"shape-01 wow animate__animated animate__delay-1s animate__fadeInUp\" alt=\"mountant\">
        <div class=\"plane-wrap\">
            <img src=\"/assets/img/shapes/plane.png\" class=\"shape-02\" alt=\"mountant\">
        </div>
        <div class=\"container custom-container-01\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"theme-section-title desktop-center text-center\">
                        <h4 class=\"title\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Les Pays Que Nous Couvrons"), "html", null, true);
        echo "</h4>
                        <p>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Nous developpons des relations dans plusieurs pays avec des institutions de professionnelles et réputées"), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"destination-items-wrap style-01\">
                
                <div href=\"/catalogue?countries=fr\" class=\"destination-single-item d-flex flex-column align-items-center\">
                    <div class=\"thumbnail\">
                        <img src=\"/assets/img/countries/flags/1x1/fr.svg\" alt=\"\">
                    </div>
                    <h6 class=\"name\">France</h6>
                </div>
                <div ref=\"/catalogue?countries=ch\" class=\"destination-single-item d-flex flex-column align-items-center\">
                    <div class=\"thumbnail\">
                        <img src=\"/assets/img/countries/flags/1x1/ch.svg\" alt=\"\">
                    </div>
                    <h6 class=\"name\">Suisse</h6>
                </div>
                <div ref=\"/catalogue?countries=ca\" class=\"destination-single-item d-flex flex-column align-items-center\">
                    <div class=\"thumbnail\">
                        <img src=\"/assets/img/countries/flags/1x1/ca.svg\" alt=\"\">
                    </div>
                    <h6 class=\"name\">Canada</h6>
                </div>
                <div ref=\"/catalogue?countries=de\" class=\"destination-single-item d-flex flex-column align-items-center\">
                    <div class=\"thumbnail\">
                        <img src=\"/assets/img/countries/flags/1x1/de.svg\" alt=\"\">
                    </div>
                    <h6 class=\"name\">Allemagne</h6>
                </div>
            </div>
            <!--div class=\"btn-wrap desktop-center margin-top-40 text-center\">
                <a href=\"/catalogue/countries\" class=\"btn-common fill-btn style-01\">Voir Plus</a>
            </div-->
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Destinations Area End Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Features Section Area Start Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class=\"features-section home-two section-bottom-space\">
    <div class=\"container custom-container-01\">
        <div class=\"row\">
            <div class=\"col-lg-5\">
                <div class=\"theme-section-title\">
                    <span class=\"subtitle\">";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("OBTENEZ DE L'AIDE SI BESOIN"), "html", null, true);
        echo "</span>
                    <h4 class=\"title\">
                        ";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Obtenez une assistance personnalisée tout au long du processus d'admission"), "html", null, true);
        echo "
                        <svg class=\"title-shape style-02 active\" width=\"355\" height=\"15\" viewBox=\"0 0 355 15\"
                            fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path class=\"path\" d=\"M351.66 12.6362C187.865 -6.32755 49.6478 6.37132 3.41142 12.6362\"
                                stroke=\"#764AF1\" stroke-width=\"3\" stroke-linecap=\"square\"></path>
                            <path class=\"path\" d=\"M351.66 13C187.865 -5.96378 49.6478 6.73509 3.41142 13\"
                                stroke=\"#764AF1\" stroke-width=\"3\" stroke-linecap=\"square\"></path>
                            <path class=\"path\" d=\"M2.5 5.5C168.5 2.0001 280.5 -1.49994 352.5 8.49985\"
                                stroke=\"#FFC44E\" stroke-width=\"3\" stroke-linecap=\"square\"></path>
                        </svg>
                    </h4>
                    <p>";
        // line 172
        echo "Nos conseillers sont disponibles 24h sur 24 pour répondre à tous vos besoins pour vous aider au mieux dans la soumission de votre dossier afin d'éviter le plus d'erreur possible et de décrocher votre admission ou votre job facilement.";
        echo "</p>
                </div>

                <div class=\"icon-box-with-text-wrap\">
                    <ul class=\"ul icon-box-with-text style-01\">
                        <li class=\"single-icon-box-with-text\">
                            <div class=\"icon-wrap color-01\">
                                <img src=\"/assets/img/icon/icon-and-text/key.svg\" alt=\"\">
                            </div>
                            <div class=\"content\">
                                <p class=\"text\">";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Suivez aisément votre dossier à travers votre compte et recevrez les notifications dans votre boite mail."), "html", null, true);
        echo " 
                                </p>
                            </div>
                        </li>
                        <li class=\"single-icon-box-with-text style-02\">
                            <div class=\"icon-wrap color-02\">
                                <img src=\"/assets/img/icon/icon-and-text/board.svg\" alt=\"\">
                            </div>
                            <div class=\"content\">
                                <p class=\"text\">
                                    ";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Obtenez des formations professionnelles de pointe qui sont demandées sur le marché de l'emploi"), "html", null, true);
        echo "
                                </p>
                            </div>
                        </li>
                        <li class=\"single-icon-box-with-text style-03\">
                            <div class=\"icon-wrap color-03\">
                                <img src=\"/assets/img/icon/icon-and-text/monitor.svg\" alt=\"\">
                            </div>
                            <div class=\"content\">
                                <p class=\"text\">";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Postuler pour votre prochain emploi en recherchant dans notre catalogue d'offre ou en nous envoyant directement vos choix . "), "html", null, true);
        echo "</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class=\"btn-wrap margin-top-60\">
                    <a href=\"/signup\" class=\"btn-common fill-btn\">";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Inscrivez-Vous Maintenant"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"col-lg-6 offset-lg-1\">
                <div class=\"thumbnail\">
                    <img src=\"/assets/img/sections/about/student-discuse.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Features Section Area End Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Category Section Area Start Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<section class=\"category-section-area\">
    <div class=\"container custom-container-01\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-12\">
                <div class=\"theme-section-title desktop-center\">
                    <span class=\"subtitle\">Les Formations Les Plus Demandées</span>
                    <h4 class=\"title\">Nos Formations Populaires</h4>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"category-item\">
                    ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["sectors"] ?? null), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 242
            echo "                    <div class=\"categories-inner\">
                        <div class=\"content-wrap\" style=\"display: flex;align-items: center;\">
                            <div class=\"icon\">
                                <img style=\"width: 71px; height: 71px;\" src=\"";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "sector_iconUrl", [], "any", false, false, false, 245), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <div class=\"content\">
                                <h4 class=\"title  ms-2\">";
            // line 248
            echo twig_get_attribute($this->env, $this->source, $context["i"], "sector_name", [], "any", false, false, false, 248);
            echo "</h4>
                                <!--p>458 Courses</p-->
                            </div>
                        </div>
                        <div class=\"icon\">
                            <img src=\"/assets/img/icon/arrow-right.svg\" alt=\"\">
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                   
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"category-item\">

                    ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["sectors"] ?? null), 3, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 264
            echo "                    <div class=\"categories-inner\">
                        <div class=\"content-wrap\" style=\"display: flex;align-items: center;\">
                            <div class=\"icon\">
                                <img style=\"width: 71px; height: 71px;\" src=\"";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "sector_iconUrl", [], "any", false, false, false, 267), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <div class=\"content\">
                                <h4 class=\"title  ms-2\">";
            // line 270
            echo twig_get_attribute($this->env, $this->source, $context["j"], "sector_name", [], "any", false, false, false, 270);
            echo "</h4>
                                <!--p>458 Courses</p-->
                            </div>
                        </div>
                        <div class=\"icon\">
                            <img src=\"/assets/img/icon/arrow-right.svg\" alt=\"\">
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                    
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"category-item\">
                    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["sectors"] ?? null), 6, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 285
            echo "                    <div class=\"categories-inner\">
                        <div class=\"content-wrap\" style=\"display: flex;align-items: center;\">
                            <div class=\"icon\">
                                <img style=\"width: 71px; height: 71px;\" src=\"";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "sector_iconUrl", [], "any", false, false, false, 288), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <div class=\"content\">
                                <h4 class=\"title ms-2\">";
            // line 291
            echo twig_get_attribute($this->env, $this->source, $context["k"], "sector_name", [], "any", false, false, false, 291);
            echo "</h4>
                                <!--p>458 Courses</p-->
                            </div>
                        </div>
                        <div class=\"icon\">
                            <img src=\"/assets/img/icon/arrow-right.svg\" alt=\"\">
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Category Section Area End Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Steps Section Area Start Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class=\"destination-section style-01 margin-top-110 instruction\">
    <div class=\"container custom-container-01\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-12\">
                <div class=\"theme-section-title desktop-center text-center\">
                    <span class=\"subtitle\">ETAPES</span>
                    <h4 class=\"title\">Obtenez votre admission en 5 étapes</h4>
                </div>
            </div>
        </div>
        <div class=\"destination-items-wrap\">
            <div class=\"destination-single-item style-02\">
                <div class=\"thumbnail\">
                    <img src=\"/assets/img/icon/step-01.png\" alt=\"\">
                </div>
                <h6 class=\"name\">Identifier  <br> Votre formation</h6>
            </div>
            <div class=\"destination-single-item style-02\">
                <div class=\"thumbnail\">
                    <img src=\"/assets/img/icon/step-02.png\" alt=\"\">
                </div>
                <h6 class=\"name\">Rechercher une instution <br> offrant la formation</h6>
            </div>
            <div class=\"destination-single-item style-02\">
                <div class=\"thumbnail\">
                    <img src=\"/assets/img/icon/step-03.png\" alt=\"\">
                </div>
                <h6 class=\"name\">Comprendre les <br>conditions d'admission</h6>
            </div>
            <div class=\"destination-single-item style-02\">
                <div class=\"thumbnail\">
                    <img src=\"/assets/img/icon/step-04.png\" alt=\"\">
                </div>
                <h6 class=\"name\">Soumettre votre <br> Demande d'admission</h6>
            </div>
            <div class=\"destination-single-item style-02\">
                <div class=\"thumbnail\">
                    <img src=\"/assets/img/icon/step-05.png\" alt=\"\">
                </div>
                <h6 class=\"name\">Payer les frais <br> de dossier</h6>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Steps Section Area End Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    News Section Area Start Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>
<section class=\"news-section-area margin-top-110\">
    <div class=\"container custom-container-01\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-12\">
                <div class=\"theme-section-title desktop-center text-center\">
                    <span class=\"subtitle\">EDUPLAN UPDATES</span>
                    <h4 class=\"title\">Eduplan Latest Blog</h4>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"blog-grid-item\">
                    <div class=\"thumbnail\">
                        <img src=\"/assets/img/h-blog/01.png\" alt=\"\" class=\"border-radius-20\">
                    </div>
                    <div class=\"content\">
                        <ul class=\"post-categories\">
                            <li><img src=\"/assets/img/icon/calander.png\" alt=\"\">19th Jan 2022</li>
                            <li>12 noon to 4 pm</li>
                        </ul>
                        <h4 class=\"title\">Overseas Education Fair Amravati 2023</h4>
                        <div class=\"btn-wrap\">
                            <a href=\"#0\" class=\"more-btn\">Read More <i
                                    class=\"fa-solid fa-angle-right icon\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"blog-grid-item\">
                    <div class=\"thumbnail\">
                        <img src=\"/assets/img/h-blog/02.png\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <ul class=\"post-categories\">
                            <li><img src=\"/assets/img/icon/calander.png\" alt=\"\">19th Jan 2022</li>
                            <li>12 noon to 4 pm</li>
                        </ul>
                        <h4 class=\"title\">Overseas Education Fair Amravati 2023</h4>
                        <div class=\"btn-wrap\">
                            <a href=\"#0\" class=\"more-btn\">Read More <i
                                    class=\"fa-solid fa-angle-right icon\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"blog-grid-item\">
                    <div class=\"thumbnail\">
                        <img src=\"/assets/img/h-blog/03.png\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <ul class=\"post-categories\">
                            <li><img src=\"/assets/img/icon/calander.png\" alt=\"\">19th Jan 2022</li>
                            <li>12 noon to 4 pm</li>
                        </ul>
                        <h4 class=\"title\">Overseas Education Fair Amravati 2023</h4>
                        <div class=\"btn-wrap\">
                            <a href=\"#0\" class=\"more-btn\">Read More <i
                                    class=\"fa-solid fa-angle-right icon\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    News Section Area End Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Faq Section Area Start Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class=\"faq-section-area margin-top-90\">
    <div class=\"container custom-container-01\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"theme-section-title\">
                    <span class=\"subtitle\">";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("FAQ"), "html", null, true);
        echo "</span>
                    <h4 class=\"title\">";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Question Fréquemment Posées"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"faq-content\">
                    <h6 class=\"subtitle\">";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Vous avez toujours des questions ?"), "html", null, true);
        echo " <br>";
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()(" Posez vos questions à nos conseillers ici."), "html", null, true);
        echo "</h6>
                    <div class=\"btn-wrap\">
                        <a href=\"/contact-us\" class=\"btn-common flat-btn\">";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("POSEZ UNE QUESTION"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"accordion-wrapper\">
                    <!-- accordion wrapper -->
                    <div id=\"accordionOne\">
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingOne\">
                                <h5 class=\"mb-0\">
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseOne\" aria-expanded=\"false\"
                                        aria-controls=\"collapseOne\">
                                        ";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("1. Qu'est-ce que AdmissionFacile ?"), "html", null, true);
        echo " 
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseOne\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                <div class=\"card-body\">
                                    ";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("AdmissionFacile est une plateforme en ligne qui facilite le processus d'admission en formation professionnelle et la recherche d'emploi, en permettant aux individus de postuler , quels que soient leur niveau de diplôme et leur parcours éducatif."), "html", null, true);
        echo " 
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingTwo\">
                                <h5 class=\"mb-0\">
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseTwo\" aria-expanded=\"false\"
                                        aria-controls=\"collapseTwo\">
                                        ";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("2. Qui peut utiliser AdmissionFacile ?"), "html", null, true);
        echo " 
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseTwo\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                <div class=\"card-body\">
                                    ";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Toute personne intéressée par une formation professionnelle ou recherchant un emploi peut utiliser AdmissionFacile. "), "html", null, true);
        echo " 
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingThree\">
                                <h5 class=\"mb-0\">
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseThree\" aria-expanded=\"false\"
                                        aria-controls=\"collapseThree\">
                                        ";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("3. Comment fonctionne le processus d'admission sur AdmissionFacile ?"), "html", null, true);
        echo " 
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseThree\" class=\"collapse show\" data-bs-parent=\"#accordionOne\">
                                <div class=\"card-body\">
                                    ";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Vous soumettez votre dossier de candidature en ligne, payez les frais de dossier, puis attendez la réponse de notre équipe de révision. Si votre candidature est acceptée, vous recevrez une confirmation d'admission."), "html", null, true);
        echo " 
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingFour\">
                                <h5 class=\"mb-0\">
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseFour\" aria-expanded=\"false\"
                                        aria-controls=\"collapseFour\">
                                        ";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("4. Quels types de formations sont disponibles sur AdmissionFacile ?"), "html", null, true);
        echo " 
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseFour\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                <div class=\"card-body\">
                                ";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()(" Nous collaborons avec un réseau diversifié d'écoles partenaires offrant une variété de formations professionnelles. Des domaines tels que la technologie, la santé, les arts, et bien plus encore, sont couverts."), "html", null, true);
        echo " 
                                    
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingFive\">
                                <h5 class=\"mb-0\">
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseFive\" aria-expanded=\"false\"
                                        aria-controls=\"collapseFive\">
                                         ";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("5. Dois-je avoir un diplôme pour postuler ?"), "html", null, true);
        echo " 
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseFive\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                <div class=\"card-body\">
                                    ";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Non, AdmissionFacile accepte les candidatures de personnes ayant ou n'ayant pas de diplôme. Notre objectif est de faciliter l'insertion professionnelle pour tous."), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingSix\">
                                <h5 class=\"mb-0\">
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseSix\" aria-expanded=\"false\"
                                        aria-controls=\"collapseSix\">
                                        ";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("6. Combien de temps faut-il pour recevoir une réponse ?"), "html", null, true);
        echo " 
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseSix\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                <div class=\"card-body\">
                                    ";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Nous nous efforçons de traiter les candidatures rapidement. Vous recevrez généralement une réponse concernant votre admission dans un délai raisonnable après la soumission de votre dossier."), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingSeven\">
                                <h5 class=\"mb-0\">
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseSix\" aria-expanded=\"false\"
                                        aria-controls=\"collapseSix\">
                                        ";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("7. Comment puis-je confirmer mon admission une fois accepté ?"), "html", null, true);
        echo " 
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseSix\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                <div class=\"card-body\">
                                    ";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Une fois accepté, vous recevrez des documents de confirmation et un code d'admission. Vous pouvez utiliser ce code auprès de l'établissement de formation pour finaliser votre inscription."), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-header\" id=\"headingEight\">
                                <h5 class=\"mb-0\">
                                    <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#collapseEight\" aria-expanded=\"false\"
                                        aria-controls=\"collapseEight\">
                                        ";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("8. Quels sont les frais de dossier utilisés pour ?"), "html", null, true);
        echo " 
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseEight\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                <div class=\"card-body\">
                                    ";
        // line 583
        echo twig_escape_filter($this->env, $this->env->getFilter('trans')->getCallable()("Les frais de dossier couvrent les coûts administratifs liés à la révision des candidatures. Ils garantissent également l'engagement sérieux des candidats."), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Faq Section Area End Here
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<script>
    window.onload=()=>{
        document.querySelector(\"#context-home .initial\").remove()
        new TypeIt(\"#context-home\", {
            speed: 100,
            waitUntilVisible: true,
            loop: true
        })
        .type(\"admission\")
        .pause(3000)
        .delete(\"admission\".length)
        .type(\"job\")
        .pause(3000)
        .delete(\"job\".length)
        .go()
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "client/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  818 => 583,  809 => 577,  796 => 567,  787 => 561,  774 => 551,  765 => 545,  752 => 535,  743 => 529,  729 => 518,  720 => 512,  707 => 502,  698 => 496,  685 => 486,  676 => 480,  663 => 470,  654 => 464,  637 => 450,  630 => 448,  624 => 445,  620 => 444,  474 => 300,  459 => 291,  453 => 288,  448 => 285,  444 => 284,  437 => 279,  422 => 270,  416 => 267,  411 => 264,  407 => 263,  399 => 257,  384 => 248,  378 => 245,  373 => 242,  369 => 241,  333 => 208,  323 => 201,  311 => 192,  298 => 182,  285 => 172,  271 => 161,  266 => 159,  214 => 110,  210 => 109,  186 => 88,  180 => 85,  176 => 84,  162 => 73,  156 => 70,  152 => 69,  138 => 58,  132 => 55,  128 => 54,  94 => 23,  88 => 20,  80 => 17,  74 => 16,  70 => 15,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/home.html.twig", "/home/admicuwm/public_html/templates/client/home.html.twig");
    }
}
