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

/* client/confidentiality.html.twig */
class __TwigTemplate_55ce2e39285e94a3b2fbc9acef429101 extends Template
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
        $this->parent = $this->loadTemplate("client/base.html.twig", "client/confidentiality.html.twig", 1);
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
        echo "<div class=\"container-fluid my-5\" >
    <h4>";
        // line 7
        echo twig_escape_filter($this->env, t("Politique de confidentialité"), "html", null, true);
        echo "</h4>
    <p>Le site web AdmissionFacile est détenu par AdmissionFacile, qui est un contr&ocirc;leur de données
        de vos données personnelles.</p>
    <p>Nous avons adopté cette politique de confidentialité, qui détermine la manière dont
        nous traitons les informations collectées par AdmissionFacile, qui fournit également les raisons
        pour lesquelles nous devons collecter certaines données personnelles vous concernant. Par
        conséquent, vous devez lire cette politique de confidentialité avant d'utiliser le site web de
        AdmissionFacile.</p>
    <p>Nous prenons soin de vos données personnelles et nous nous engageons à en garantir la
        confidentialité et la sécurité.</p>
    <h4>Les informations personnelles que nous collectons :</h4>
    <p>Lorsque vous visitez le AdmissionFacile, nous recueillons automatiquement certaines informations sur votre
        appareil, notamment des informations sur votre navigateur web, votre adresse IP, votre fuseau horaire et
        certains des cookies installés sur votre appareil. En outre, lorsque vous naviguez sur le site, nous
        recueillons des informations sur les pages web ou les produits individuels que vous consultez, sur les sites web
        ou les termes de recherche qui vous ont renvoyé au site et sur la manière dont vous interagissez
        avec le site. Nous désignons ces informations collectées automatiquement par le terme
        \"informations sur les appareils\". En outre, nous pourrions collecter les données personnelles que vous
        nous fournissez (y compris, mais sans s'y limiter, le nom, le prénom, l'adresse, les informations de
        paiement, etc.) lors de l'inscription afin de pouvoir exécuter le contrat.</p>
    <h4>Pourquoi traitons-nous vos données ?</h4>
    <p>Notre priorité absolue est la sécurité des données des clients et, à ce titre,
        nous ne pouvons traiter que des données minimales sur les utilisateurs, uniquement dans la mesure
        ou cela est absolument nécessaire pour maintenir le site web. Les informations collectées
        automatiquement sont utilisées uniquement pour identifier les cas potentiels d'abus et établir des
        informations statistiques concernant l'utilisation du site web. Ces informations statistiques ne sont pas
        autrement agrégées de manière à identifier un utilisateur particulier du
        système.</p>
    <p>Vous pouvez visiter le site web sans nous dire qui vous &ecirc;tes ni révéler d'informations, par
        lesquelles quelqu'un pourrait vous identifier comme un individu spécifique et identifiable. Toutefois, si
        vous souhaitez utiliser certaines fonctionnalités du site web, ou si vous souhaitez recevoir notre lettre
        d'information ou fournir d'autres détails en remplissant un formulaire, vous pouvez nous fournir des
        données personnelles, telles que votre e-mail, votre prénom, votre nom, votre ville de
        résidence, votre organisation, votre numéro de téléphone. Vous pouvez choisir de ne
        pas nous fournir vos données personnelles, mais il se peut alors que vous ne puissiez pas profiter de
        certaines fonctionnalités du site web. Par exemple, vous ne pourrez pas recevoir notre bulletin
        d'information ou nous contacter directement à partir du site web. Les utilisateurs qui ne savent pas
        quelles informations sont obligatoires sont invités à nous contacter via agblap1@gmail.com.</p>
    <h4>Vos droits :</h4>
    <p>Si vous &ecirc;tes un résident européen, vous disposez des droits suivants liés à vos
        données personnelles :</p>
    <ul>
        <li>Le droit d'&ecirc;tre informé.</li>
        <li>Le droit d'accès.</li>
        <li>Le droit de rectification.</li>
        <li>Le droit à l'effacement.</li>
        <li>Le droit de restreindre le traitement.</li>
        <li>Le droit à la portabilité des données.</li>
        <li>Le droit d'opposition.</li>
        <li>Les droits relatifs à la prise de décision automatisée et au profilage.</li>
    </ul>
    <p>Si vous souhaitez exercer ce droit, veuillez nous contacter via les coordonnées ci-dessous.</p>
    <p>En outre, si vous &ecirc;tes un résident européen, nous notons que nous traitons vos informations
        afin d'exécuter les contrats que nous pourrions avoir avec vous (par exemple, si vous passez une commande
        par le biais du site), ou autrement pour poursuivre nos intér&ecirc;ts commerciaux légitimes
        énumérés ci-dessus. En outre, veuillez noter que vos informations pourraient &ecirc;tre
        transférées en dehors de l'Europe, y compris au Canada et aux états-Unis.</p>
    <h4>Liens vers d'autres sites web :</h4>
    <p>Notre site web peut contenir des liens vers d'autres sites web qui ne sont pas détenus ou
        contr&ocirc;lés par nous. Sachez que nous ne sommes pas responsables de ces autres sites web ou des
        pratiques de confidentialité des tiers. Nous vous encourageons à &ecirc;tre attentif lorsque vous
        quittez notre site web et à lire les déclarations de confidentialité de chaque site web
        susceptible de collecter des informations personnelles.</p>
    <h4>Sécurité de l'information :</h4>
    <p>Nous sécurisons les informations que vous fournissez sur des serveurs informatiques dans un environnement
        contr&ocirc;lé et sécurisé, protégé contre tout accès, utilisation ou
        divulgation non autorisés. Nous conservons des garanties administratives, techniques et physiques
        raisonnables pour nous protéger contre tout accès, utilisation, modification et divulgation non
        autorisés des données personnelles sous son contr&ocirc;le et sa garde. Toutefois, aucune
        transmission de données sur Internet ou sur un réseau sans fil ne peut &ecirc;tre garantie.</p>
    <h4>Divulgation légale :</h4>
    <p>Nous divulguerons toute information que nous collectons, utilisons ou recevons si la loi l'exige ou l'autorise,
        par exemple pour nous conformer à une citation à compara&icirc;tre ou à une
        procédure judiciaire similaire, et lorsque nous pensons de bonne foi que la divulgation est
        nécessaire pour protéger nos droits, votre sécurité ou celle d'autrui,
        enqu&ecirc;ter sur une fraude ou répondre à une demande du gouvernement.</p>
    <h4>Informations de contact :</h4>
    <p>Si vous souhaitez nous contacter pour comprendre davantage la présente politique ou si vous souhaitez nous
        contacter concernant toute question relative aux droits individuels et à vos informations personnelles,
        vous pouvez envoyer un courriel à contact@admissionfacile.com.</p>

</div>

";
    }

    public function getTemplateName()
    {
        return "client/confidentiality.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/confidentiality.html.twig", "/home/admicuwm/public_html/templates/client/confidentiality.html.twig");
    }
}
