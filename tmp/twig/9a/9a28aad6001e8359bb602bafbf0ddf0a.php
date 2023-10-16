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

/* client/cookies.html.twig */
class __TwigTemplate_c38775424702aa8204395033b928abfb extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/cookies.html.twig", 1);
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
<div>
    <h1>";
        // line 8
        echo twig_escape_filter($this->env, t("Politique en matière de cookies pour AdmissionFacile"), "html", null, true);
        echo "</h1>

    <p>";
        // line 10
        echo twig_escape_filter($this->env, t("Voici la politique en matière de cookies d'AdmissionFacile, accessible depuis https://admissionfacile.com"), "html", null, true);
        echo "</p>

    <p><strong>";
        // line 12
        echo twig_escape_filter($this->env, t("Que sont les cookies"), "html", null, true);
        echo "</strong></p>

    <p>";
        // line 14
        echo twig_escape_filter($this->env, t(" Comme c'est une pratique courante sur presque tous les sites Web professionnels, ce site utilise des cookies, qui
        sont de petits fichiers téléchargés sur votre ordinateur, pour améliorer votre expérience. Cette page décrit les
        informations qu'ils collectent, comment nous les utilisons et pourquoi nous devons parfois stocker ces cookies.
        Nous vous expliquerons également comment vous pouvez empêcher le stockage de ces cookies, mais cela pourrait
        dégrader ou « casser » certains éléments des fonctionnalités du site."), "html", null, true);
        // line 18
        echo "</p>

    <p><strong>";
        // line 20
        echo twig_escape_filter($this->env, t("Comment nous utilisons les cookies"), "html", null, true);
        echo "</strong></p>

    <p>";
        // line 22
        echo twig_escape_filter($this->env, t("Nous utilisons des cookies pour diverses raisons détaillées ci-dessous. Malheureusement, dans la plupart des cas,
        il n'existe aucune option standard de l'industrie pour désactiver les cookies sans désactiver complètement les
        fonctionnalités et les caractéristiques qu'ils ajoutent à ce site. Il est recommandé de laisser tous les cookies
        si vous n'êtes pas sûr d'en avoir besoin ou non au cas où ils seraient utilisés pour fournir un service que vous
        utilisez."), "html", null, true);
        // line 26
        echo "</p>

    <p><strong>";
        // line 28
        echo twig_escape_filter($this->env, t("Désactiver les cookies"), "html", null, true);
        echo "</strong></p>

    <p>";
        // line 30
        echo twig_escape_filter($this->env, t("Vous pouvez empêcher l'installation de cookies en ajustant les paramètres de votre navigateur (voir l'aide de
        votre navigateur pour savoir comment procéder). Sachez que la désactivation des cookies affectera la
        fonctionnalité de ce site et de nombreux autres sites Web que vous visitez. La désactivation des cookies
        entraînera généralement également la désactivation de certaines fonctionnalités et caractéristiques de ce site.
        Il est donc recommandé de ne pas désactiver les cookies. Cette politique de cookies a été créée avec l'aide du"), "html", null, true);
        // line 34
        echo "
        <a href=\"https://www.cookiepolicygenerator.com/cookie-policy-generator/\">";
        // line 35
        echo twig_escape_filter($this->env, t("Générateur de politique de cookies"), "html", null, true);
        echo "</a>.
    </p>
    <p><strong>";
        // line 37
        echo twig_escape_filter($this->env, t("Les cookies que nous définissons"), "html", null, true);
        echo "</strong></p>

    <ul>

        <li>
            <p>";
        // line 42
        echo twig_escape_filter($this->env, t("Cookies liés au compte"), "html", null, true);
        echo "</p>
            <p>";
        // line 43
        echo twig_escape_filter($this->env, t("Si vous créez un compte chez nous, nous utiliserons des cookies pour la gestion du processus
                d'inscription et l'administration générale. Ces cookies seront généralement supprimés lorsque vous vous
                déconnecterez, mais dans certains cas, ils pourront rester par la suite pour mémoriser vos préférences
                de site lorsque vous vous déconnecterez."), "html", null, true);
        // line 46
        echo "</p>
        </li>

        <li>
            <p>";
        // line 50
        echo twig_escape_filter($this->env, t("Cookies liés à la connexion"), "html", null, true);
        echo "</p>
            <p>";
        // line 51
        echo twig_escape_filter($this->env, t("Nous utilisons des cookies lorsque vous êtes connecté afin que nous puissions nous en souvenir. Cela vous
                évite de devoir vous connecter à chaque fois que vous visitez une nouvelle page. Ces cookies sont
                généralement supprimés ou effacés lorsque vous vous déconnectez pour garantir que vous ne pouvez accéder
                aux fonctionnalités et zones restreintes que lorsque vous êtes connecté."), "html", null, true);
        // line 54
        echo "</p>
        </li>




        <li>
            <p>";
        // line 61
        echo twig_escape_filter($this->env, t("Cookies liés aux formulaires"), "html", null, true);
        echo "</p>
            <p>";
        // line 62
        echo twig_escape_filter($this->env, t("Lorsque vous soumettez des données via un formulaire tel que ceux trouvés sur les pages de contact ou les
                formulaires de commentaires, des cookies peuvent être définis pour mémoriser vos informations
                d'utilisateur pour une correspondance future."), "html", null, true);
        // line 64
        echo "</p>
        </li>


    </ul>

    <p><strong>";
        // line 70
        echo twig_escape_filter($this->env, t("Cookies tiers"), "html", null, true);
        echo "</strong></p>

    <p>";
        // line 72
        echo twig_escape_filter($this->env, t("Dans certains cas particuliers, nous utilisons également des cookies fournis par des tiers de confiance. La
        section suivante détaille les cookies tiers que vous pourriez rencontrer via ce site."), "html", null, true);
        // line 73
        echo "</p>

    <ul>

        <li>
            <p>";
        // line 78
        echo twig_escape_filter($this->env, t("Ce site utilise Google Analytics, l'une des solutions d'analyse les plus répandues et les plus fiables
                sur le Web, pour nous aider à comprendre comment vous utilisez le site et comment nous pouvons améliorer
                votre expérience. Ces cookies peuvent suivre des éléments tels que le temps que vous passez sur le site
                et les pages que vous visitez afin que nous puissions continuer à produire un contenu attrayant."), "html", null, true);
        // line 81
        echo "</p>
            <p>";
        // line 82
        echo twig_escape_filter($this->env, t("Pour plus d'informations sur les cookies Google Analytics, consultez la page officielle de Google
                Analytics."), "html", null, true);
        // line 83
        echo "</p>
        </li>



    </ul>

    <p><strong>";
        // line 90
        echo twig_escape_filter($this->env, t("Plus d'informations"), "html", null, true);
        echo "</strong></p>

    <p>";
        // line 92
        echo twig_escape_filter($this->env, t("J'espère que cela a clarifié les choses pour vous et comme mentionné précédemment, si vous n'êtes pas sûr d'avoir
        besoin ou non de quelque chose, il est généralement plus sûr de laisser les cookies activés au cas où ils
        interagiraient avec l'une des fonctionnalités que vous utilisez. notre site."), "html", null, true);
        // line 94
        echo "</p>

    <p>";
        // line 96
        echo twig_escape_filter($this->env, t("Pour des informations plus générales sur les cookies, veuillez lire"), "html", null, true);
        echo " <a
            href=\"https://www.cookiepolicygenerator.com/sample-cookies-policy/\">";
        // line 97
        echo twig_escape_filter($this->env, t("l'article sur la politique en matière de
            cookies"), "html", null, true);
        // line 98
        echo "</a>.</p>

    <p>";
        // line 100
        echo twig_escape_filter($this->env, t("Cependant, si vous recherchez toujours plus d'informations, vous pouvez nous contacter via l'une de nos méthodes
        de contact préférées :"), "html", null, true);
        // line 101
        echo "</p>

    <ul>

        <li>";
        // line 105
        echo twig_escape_filter($this->env, t("En visitant ce lien : https://admissionfacile.com"), "html", null, true);
        echo "</li>
    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "client/cookies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 105,  241 => 101,  238 => 100,  234 => 98,  231 => 97,  227 => 96,  223 => 94,  219 => 92,  214 => 90,  205 => 83,  202 => 82,  199 => 81,  194 => 78,  187 => 73,  184 => 72,  179 => 70,  171 => 64,  167 => 62,  163 => 61,  154 => 54,  149 => 51,  145 => 50,  139 => 46,  134 => 43,  130 => 42,  122 => 37,  117 => 35,  114 => 34,  108 => 30,  103 => 28,  99 => 26,  93 => 22,  88 => 20,  84 => 18,  78 => 14,  73 => 12,  68 => 10,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/cookies.html.twig", "/home/admicuwm/public_html/templates/client/cookies.html.twig");
    }
}
