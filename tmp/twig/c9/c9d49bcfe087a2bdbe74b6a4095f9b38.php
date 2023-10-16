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

/* emails/confirm-email.html.twig */
class __TwigTemplate_92bf71ce1e5e4c6ca7b94cbcea8bd9f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!Doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">

<head>
    <title>
        AdmissionFacile
    </title>
    <!--[if !mso]>-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <!--[if !mso]><!-->
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            @-ms-viewport {
                width: 320px;
            }
            @viewport {
                width: 320px;
            }
        }
    </style>
    <!--<![endif]-->
    <!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
    <!--[if lte mso 11]>
        <style type=\"text/css\">
          .outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->


    <style type=\"text/css\">
        @media only screen and (min-width:480px) {
            .mj-column-per-100 {
                width: 100% !important;
            }
        }
    </style>


    <style type=\"text/css\">
    </style>

</head>

<body style=\"background-color:#f9f9f9;\">


    <div style=\"background-color:#f9f9f9;\">


        <!--[if mso | IE]>
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:600px;\" width=\"600\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->


        <div style=\"background:#f9f9f9;background-color:#f9f9f9;Margin:0px auto;max-width:600px;\">

            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#f9f9f9;background-color:#f9f9f9;width:100%;\">
                <tbody>
                    <tr>
                        <td style=\"border-bottom:#333957 solid 5px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;\">
                            <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
        <tr>
      
        </tr>
      
                  </table>
                <![endif]-->
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>


        <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:600px;\" width=\"600\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->


        <div style=\"background:#fff;background-color:#fff;Margin:0px auto;max-width:600px;\">

            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#fff;background-color:#fff;width:100%;\">
                <tbody>
                    <tr>
                        <td style=\"border:#dddddd solid 1px;border-top:0px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;\">
                            <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
        <tr>
      
            <td
               style=\"vertical-align:bottom;width:600px;\"
            >
          <![endif]-->

                            <div class=\"mj-column-per-100 outlook-group-fix\" style=\"font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;\">

                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:bottom;\" width=\"100%\">

                                    <tr>
                                        <td align=\"center\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">

                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse:collapse;border-spacing:0px;\">
                                                <tbody>
                                                    <tr>
                                                        <td style=\"width:64px;\">

                                                            <!--img height=\"auto\" src=\"https://i.imgur.com/KO1vcE9.png\" style=\"border:0;display:block;outline:none;text-decoration:none;width:100%;\" width=\"64\" /-->

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td align=\"center\" style=\"font-size:0px;padding:10px 25px;padding-bottom:40px;word-break:break-word;\">

                                            <div style=\"font-family:'Helvetica Neue',Arial,sans-serif;font-size:32px;font-weight:bold;line-height:1;text-align:center;color:#555;\">
                                                ";
        // line 192
        echo twig_escape_filter($this->env, t("Confirmer votre mail"), "html", null, true);
        echo "
                                            </div>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td align=\"center\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">

                                            <div style=\"font-family:'Helvetica Neue',Arial,sans-serif;font-size:16px;line-height:22px;text-align:center;color:#555;\">
                                               ";
        // line 203
        echo twig_escape_filter($this->env, t("Cliquer sur le bouton ci dessous pour valider votre compte"), "html", null, true);
        echo "
                                            </div>
                                            <p>
                                                ";
        // line 206
        echo twig_escape_filter($this->env, t("Ce code a une durée de validitée de "), "html", null, true);
        echo twig_escape_filter($this->env, ($context["expiry"] ?? null), "html", null, true);
        echo "
                                            </p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-size:0px;padding-bottom:20px;word-break:break-word;\">

                                            <div style=\"font-family:'Helvetica Neue',Arial,sans-serif;font-size:16px;line-height:22px;text-align:center;color:#555;\">
                                                ";
        // line 215
        echo twig_escape_filter($this->env, t("Ce code a une durée de validitée de "), "html", null, true);
        echo twig_escape_filter($this->env, ($context["expiry"] ?? null), "html", null, true);
        echo "
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td align=\"center\" style=\"font-size:0px;padding:10px 25px;padding-top:30px;padding-bottom:40px;word-break:break-word;\">

                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse:separate;line-height:100%;\">
                                                <tr>
                                                    <td align=\"center\" bgcolor=\"#2F67F6\" role=\"presentation\" style=\"border:none;border-radius:3px;color:#ffffff;cursor:auto;\" valign=\"middle\">
                                                        <a href=\"";
        // line 227
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\" style=\"background:#2F67F6;color:#ffffff;font-family:'Helvetica Neue',Arial,sans-serif;font-size:15px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;padding:15px 25px;\">
                                                            ";
        // line 228
        echo twig_escape_filter($this->env, t("Confirmer"), "html", null, true);
        echo "
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td align=\"center\" style=\"font-size:0px;padding:10px 25px;padding-bottom:0;word-break:break-word;\">

                                            <div style=\"font-family:'Helvetica Neue',Arial,sans-serif;font-size:16px;line-height:22px;text-align:center;color:#555;\">
                                                ";
        // line 241
        echo twig_escape_filter($this->env, t("Ou Copier ce lien dans un navigateur"), "html", null, true);
        echo "
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td align=\"center\" style=\"font-size:0px;padding:10px 25px;padding-bottom:40px;word-break:break-word;\">

                                            <div style=\"font-family:'Helvetica Neue',Arial,sans-serif;font-size:16px;line-height:22px;text-align:center;color:#555;\">
                                                <a href=\"";
        // line 251
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\" style=\"color:#2F67F6\">";
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "</a>
                                            </div>

                                        </td>
                                    </tr>

                                </table>

                            </div>

                            <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>


    </div>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "emails/confirm-email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 251,  299 => 241,  283 => 228,  279 => 227,  263 => 215,  250 => 206,  244 => 203,  230 => 192,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/confirm-email.html.twig", "/home/admicuwm/public_html/templates/emails/confirm-email.html.twig");
    }
}
