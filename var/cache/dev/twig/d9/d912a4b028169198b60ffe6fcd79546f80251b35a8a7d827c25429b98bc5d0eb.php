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

/* emails/contact.html.twig */
class __TwigTemplate_24024d9dfaa0a38695015a1928ac5554b64b0e3cc36333ca45e06bc617aff314 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\"
      xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head><title></title><!--[if !mso]><!-- -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <style type=\"text/css\">#outlook a {
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

        table, td {
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
        }</style><!--[if !mso]><!-->
    <style type=\"text/css\">@media only screen and (max-width: 480px) {
            @-ms-viewport {
                width: 320px;
            }
            @viewport {
                width: 320px;
            }
        }</style><!--<![endif]--><!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]--><!--[if lte mso 11]>
    <style type=\"text/css\">
        .outlook-group-fix {
            width: 100% !important;
        }
    </style>
    <![endif]--><!--[if !mso]><!-->
    <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700\" rel=\"stylesheet\" type=\"text/css\">
    <style type=\"text/css\">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style>
    <!--<![endif]-->
    <style type=\"text/css\">@media only screen and (min-width: 480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
        }</style>
    <style type=\"text/css\"></style>
</head>
<body>
<div><!--[if mso | IE]>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\">
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div style=\"Margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;\"><!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"\" style=\"vertical-align:top;width:600px;\"><![endif]-->
                    <div class=\"mj-column-per-100 outlook-group-fix\"
                         style=\"font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\"
                               width=\"100%\">
                            <tr>
                                <td align=\"left\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                    <div style=\"font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;\">
                                        <h1>Demande de contact </h1>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]></td></tr></table><![endif]--></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]></td></tr></table>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\">
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div style=\"Margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;\"><!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"\" style=\"vertical-align:top;width:600px;\"><![endif]-->
                    <div class=\"mj-column-per-100 outlook-group-fix\"
                         style=\"font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\"
                               width=\"100%\">
                            <tr>
                                <td align=\"left\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\"
                                           style=\"cellspacing:0;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;\">
                                        <tr>
                                            <td style=\"font-weight:bold;\">Prénom</td>
                                            <td>";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 135, $this->source); })()), "firstname", [], "any", false, false, false, 135), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-weight:bold;\">Nom</td>
                                            <td>";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 139, $this->source); })()), "lastname", [], "any", false, false, false, 139), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-weight:bold;\">Téléphone</td>
                                            <td>";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 143, $this->source); })()), "phone", [], "any", false, false, false, 143), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-weight:bold;\">Email</td>
                                            <td>";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 147, $this->source); })()), "email", [], "any", false, false, false, 147), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-weight:bold;\">Message</td>
                                            <td>";
        // line 151
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 151, $this->source); })()), "message", [], "any", false, false, false, 151), "html", null, true));
        echo "</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]></td></tr></table><![endif]--></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]></td></tr></table><![endif]--></div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 151,  200 => 147,  193 => 143,  186 => 139,  179 => 135,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\"
      xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head><title></title><!--[if !mso]><!-- -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <style type=\"text/css\">#outlook a {
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

        table, td {
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
        }</style><!--[if !mso]><!-->
    <style type=\"text/css\">@media only screen and (max-width: 480px) {
            @-ms-viewport {
                width: 320px;
            }
            @viewport {
                width: 320px;
            }
        }</style><!--<![endif]--><!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]--><!--[if lte mso 11]>
    <style type=\"text/css\">
        .outlook-group-fix {
            width: 100% !important;
        }
    </style>
    <![endif]--><!--[if !mso]><!-->
    <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700\" rel=\"stylesheet\" type=\"text/css\">
    <style type=\"text/css\">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style>
    <!--<![endif]-->
    <style type=\"text/css\">@media only screen and (min-width: 480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
        }</style>
    <style type=\"text/css\"></style>
</head>
<body>
<div><!--[if mso | IE]>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\">
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div style=\"Margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;\"><!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"\" style=\"vertical-align:top;width:600px;\"><![endif]-->
                    <div class=\"mj-column-per-100 outlook-group-fix\"
                         style=\"font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\"
                               width=\"100%\">
                            <tr>
                                <td align=\"left\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                    <div style=\"font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;\">
                                        <h1>Demande de contact </h1>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]></td></tr></table><![endif]--></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]></td></tr></table>
    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\">
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div style=\"Margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;\"><!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"\" style=\"vertical-align:top;width:600px;\"><![endif]-->
                    <div class=\"mj-column-per-100 outlook-group-fix\"
                         style=\"font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\"
                               width=\"100%\">
                            <tr>
                                <td align=\"left\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\"
                                           style=\"cellspacing:0;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;\">
                                        <tr>
                                            <td style=\"font-weight:bold;\">Prénom</td>
                                            <td>{{ contact.firstname }}</td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-weight:bold;\">Nom</td>
                                            <td>{{ contact.lastname }}</td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-weight:bold;\">Téléphone</td>
                                            <td>{{ contact.phone }}</td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-weight:bold;\">Email</td>
                                            <td>{{ contact.email }}</td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-weight:bold;\">Message</td>
                                            <td>{{ contact.message | nl2br }}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]></td></tr></table><![endif]--></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]></td></tr></table><![endif]--></div>
</body>
</html>
", "emails/contact.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\emails\\contact.html.twig");
    }
}
