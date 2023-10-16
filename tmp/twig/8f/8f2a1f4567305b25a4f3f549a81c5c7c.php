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

/* client/catalogue-institution.html.twig */
class __TwigTemplate_624a88aeebb8dcb8eefca9862a973e9a extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/catalogue-institution.html.twig", 1);
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
<div class=\"instructors-wrapper single-page-section-bottom-space\">

    <!-- breadcrumb area start here  -->
    <div class=\"breadcrumb-wrap style-01\">
        <div class=\"container custom-container-01\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumb-content py-3\">
                        <h3 class=\"title\">";
        // line 15
        echo twig_escape_filter($this->env, t("Les Etablissements"), "html", null, true);
        echo "</h3>
                        <p class=\"details\">";
        // line 16
        echo twig_escape_filter($this->env, t("Rechercher et trouver en quelques minutes un établissement pour votre formation"), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- teem area start here  -->
    <section class=\"our-team-area-wrapper\">
        <div class=\"our-team-inner\">
            <div class=\"container custom-container-01\">
                <div class=\"row column-gap-50\">
                    <div class=\"col-0 col-md-4 pe-xl-5 \">
                        <h5 class=\"mb-3\">Filtres</h5>
                        <div class=\"\">
                            <form class=\"search-form p-4 p-lg-5  card border-0 shadow-sm\" style=\"border-radius: 30px;\">
                                <div>
                                    <h6 class=\"\">";
        // line 34
        echo twig_escape_filter($this->env, t("Langue"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" name=\"lang:en\" ";
        // line 38
        echo ((twig_in_filter("en", ($context["filters_langs"] ?? null))) ? ("checked") : (""));
        echo " type=\"checkbox\" value=\"en\"
                                                    id=\"defaultCheck1\" >
                                                <label class=\"form-check-label\" for=\"defaultCheck1\">
                                                    Anglais
                                                </label>
                                            </div>
                                            <div class=\"\">
                                                 <!--p class=\"px-2 text-white rounded-pill bg-primary small\"></p-->
                                            </div>
                                        </div>
                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check mt-1\">
                                                <input class=\"form-check-input\" name=\"lang:fr\" type=\"checkbox\" value=\"fr\"
                                                    id=\"defaultCheck2\" ";
        // line 51
        echo ((twig_in_filter("fr", ($context["filters_langs"] ?? null))) ? ("checked") : (""));
        echo ">
                                                <label class=\"form-check-label\" for=\"defaultCheck2\">
                                                    Français
                                                </label>
                                            </div>
                                            <div class=\"\">
                                                <!--p class=\"px-2 text-white rounded-pill bg-primary small\"></p-->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"mt-4\">
                                    <h6>";
        // line 64
        echo twig_escape_filter($this->env, t("Villes"), "html", null, true);
        echo "</h6>
                                    <div class=\"mt-3 d-flex flex-column\">
                                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["town"] ?? null), 0, 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 67
            echo "                                        <div class=\"d-flex justify-content-between mt-1\">
                                            <div class=\"form-check form-check-inline\">
                                                <input class=\"form-check-input\" name=\"town:";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 69), "html", null, true);
            echo "\" ";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 69), ($context["filters_towns"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\" id=\"inlineCheckbox1\"
                                                    value=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
                                                <label class=\"form-check-label\"
                                                    for=\"inlineCheckbox1\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_name", [], "any", false, false, false, 72), "html", null, true);
            echo "</label>
                                            </div>
                                            ";
            // line 74
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 74))) {
                // line 75
                echo "                                            <div class=\"\">
                                                <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 76), "html", null, true);
                echo "</p>
                                            </div>
                                            ";
            }
            // line 79
            echo "                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                        <div id=\"collapseOne\" class=\"collapse\" data-bs-parent=\"#accordionOne\">
                                            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["town"] ?? null), 4));
        foreach ($context['_seq'] as $context["k"] => $context["r"]) {
            // line 83
            echo "                                            <div class=\"d-flex justify-content-between mt-1\">
                                                <div class=\"form-check form-check-inline\">
                                                    <input class=\"form-check-input\" name=\"town:";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 85), "html", null, true);
            echo "\" ";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 85), ($context["filters_towns"] ?? null))) ? ("checked") : (""));
            echo " type=\"checkbox\" id=\"inlineCheckbox1\"
                                                        value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_id", [], "any", false, false, false, 86), "html", null, true);
            echo "\">
                                                    <label class=\"form-check-label\"
                                                        for=\"inlineCheckbox1\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "town_name", [], "any", false, false, false, 88), "html", null, true);
            echo "</label>
                                                </div>
                                                ";
            // line 90
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 90))) {
                // line 91
                echo "                                                <div class=\"\">
                                                    <p class=\"px-2 text-white rounded-pill bg-primary small\">";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "total", [], "any", false, false, false, 92), "html", null, true);
                echo "</p>
                                                </div>
                                                ";
            }
            // line 95
            echo "                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                        </div>
                                        ";
        // line 98
        if (twig_length_filter($this->env, twig_slice($this->env, ($context["town"] ?? null), 4))) {
            // line 99
            echo "                                        <div>
                                            <a class=\"collapsed\" role=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#collapseOne\" aria-expanded=\"false\"
                                                aria-controls=\"collapseOne\">
                                                <p class=\" mt-2 \"><small>";
            // line 103
            echo twig_escape_filter($this->env, t("Voir plus"), "html", null, true);
            echo "</small></p>
                                            </a>
                                        </div>
                                        ";
        }
        // line 107
        echo "                                        

                                    </div>
                                </div>
                                <div  class=\"mt-3\">
                                    <button type=\"submit\" class=\"btn btn-common w-100 p-3 round-lg btn-primary\">";
        // line 112
        echo twig_escape_filter($this->env, t("Filtrer"), "html", null, true);
        echo "</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-8 p-3 mt-lg-4 ";
        // line 117
        echo ((twig_test_empty(($context["institutions"] ?? null))) ? ("d-flex justify-content-center align-items-center") : (""));
        echo "\">
                        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["institutions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 119
            echo "
                        <div class=\"row gy-4 \">
                            <div class=\"shadow-sm offer-item p-4 p-lg-5 bg-white mt-5\" style=\"border-radius: 30px;\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <h4>";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["i"], "institution_name", [], "any", false, false, false, 124);
            echo "</h4>
                                    </div>
                                    <div class=\"col-4 d-flex align-items-center justify-content-end\">
                                        <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "institution_website_url", [], "any", false, false, false, 127), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "institution_logoUrl", [], "any", false, false, false, 128), "html", null, true);
            echo "\" style=\"height: 25px;\"/>
                                        </a>
                                        
                                    </div>
                                </div>
                                
                                <div class=\" mt-4 d-sm-flex justify-content-between \">
                                    <div class=\" d-flex align-items-center  col-md-8 col-lg-10\">
                                        <p class=\"mb-0  text-truncate\">
                                            <i class=\"fas fa-location-pin\"></i>
                                            <span class=\"ms-2\">";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["i"], "institution_adress", [], "any", false, false, false, 138);
            echo "</span>
                                        </p>
                                    </div>
                                    <div class=\" d-flex  mt-4 mt-sm-0 justify-content-end align-items-center\">
                                        
                                        <a href=\"/institution/";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "institution_id", [], "any", false, false, false, 143), "html", null, true);
            echo "\" class=\"w-100 btn-action btn btn-primary text-primary px-4\"
                                            style=\"background:rgba(118, 74, 241, 0.18); border-radius: 10px;\">";
            // line 144
            echo twig_escape_filter($this->env, t("Voir"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                        ";
        if (twig_test_empty(($context["institutions"] ?? null))) {
            // line 151
            echo "                        <div class=\"text-center\">
                            <p class=\"text-center\">";
            // line 152
            echo twig_escape_filter($this->env, t("Aucune insitutions correspondant à votre recherche"), "html", null, true);
            echo "</p>
                        </div>
                        ";
        }
        // line 155
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"pagination\">
                            
                            <ul class=\"pagination-list\">
                                ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 164
            echo "                                    <li>
                                        <a href=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "url", [], "any", false, false, false, 165), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            echo "\" class=\"page-number  ";
            echo (((($context["currentPage"] ?? null) == twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 165))) ? ("current") : (""));
            echo " ";
            echo ((($context["k"] == "prev")) ? ("able left-arrow") : (((($context["k"] == "next")) ? ("able right-arrow") : (""))));
            echo "\">
                                            ";
            // line 166
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 166)), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teem area end here  -->
</div>
<!-- about page end here  -->
<script>
    document.querySelector(\"body\").onload=function(){
        \$('form.search-form ').on(\"submit\", (e)=>{
            e.preventDefault();
            const {form:values}=getFormValues(\"form.search-form\");
            const data={
                towns:[],
                langs:[]
            }
            for(let i in values){
                if(i && values[i] ){
                    const d=i.split(\":\");
                    if(d[0]===\"town\" && d[1]){
                        data.towns.push(d[1]); 
                    }else if(d[0]===\"lang\" && d[1]){
                        data.langs.push(d[1]); 
                    }
                }
            }
         
            window.location.href=\"/institutions?towns=\"+data.towns.join(\",\")+\"&langs=\"+data.langs.join(\",\")
        })

        \$('.collapsed').on('click', ()=>{
            
        })
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "client/catalogue-institution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 170,  360 => 166,  350 => 165,  347 => 164,  343 => 163,  333 => 155,  327 => 152,  324 => 151,  321 => 150,  309 => 144,  305 => 143,  297 => 138,  284 => 128,  280 => 127,  274 => 124,  267 => 119,  263 => 118,  259 => 117,  251 => 112,  244 => 107,  237 => 103,  231 => 99,  229 => 98,  226 => 97,  219 => 95,  213 => 92,  210 => 91,  208 => 90,  203 => 88,  198 => 86,  192 => 85,  188 => 83,  184 => 82,  181 => 81,  174 => 79,  168 => 76,  165 => 75,  163 => 74,  158 => 72,  153 => 70,  147 => 69,  143 => 67,  139 => 66,  134 => 64,  118 => 51,  102 => 38,  95 => 34,  74 => 16,  70 => 15,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/catalogue-institution.html.twig", "/home/admicuwm/public_html/templates/client/catalogue-institution.html.twig");
    }
}
