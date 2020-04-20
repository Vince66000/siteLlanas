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

/* base.html.twig */
class __TwigTemplate_4cc729a3e88d9652e4a954641547d2f55bf47286589e38130fe752a820e1e90a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css"), "html", null, true);
        echo "\">
</head>
<body>

";
        // line 18
        echo "<nav class=\"navbar navbar-expand-lg navbar-perso bg-perso\" style=\"height: 80px\">
    <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" ><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ellanas.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"width: 100px; height: 45px\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Oeuvres
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getAcrylic");
        echo "\">Acryliques et Huiles</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getPastel");
        echo "\">Pastels</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getInk");
        echo "\">Encres</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getSticking");
        echo "\">Collages</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getDraws");
        echo "\">Dessins</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getWatercolor");
        echo "\">Aquarelles et Gouaches</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getVarious");
        echo "\">Créations diverses</a>
                </div>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop");
        echo "\">Atelier</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">Actualité</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 55
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55)) {
            // line 56
            echo "                <li class=\"nav-item\" style=\"float: right\">
                    <a class=\"nav-link \" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.getAll");
            echo "\" >Connexion</a>
                </li>
            ";
        }
        // line 60
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Se déconnecter</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.getAll");
            echo "\" class=\"nav-link\">Tableau de bord</a>
                </li>
            ";
        }
        // line 68
        echo "        </ul>
    </div>
</nav>
";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "
<script src=\"https://code.jquery.com/jquery-3.4.1.js\"  integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
        crossorigin=\"anonymous\"></script>
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0\"></script>
";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "
</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Bienvenue!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 79,  211 => 71,  205 => 8,  198 => 7,  190 => 80,  188 => 79,  179 => 72,  177 => 71,  172 => 68,  166 => 65,  160 => 62,  157 => 61,  154 => 60,  148 => 57,  145 => 56,  143 => 55,  136 => 51,  130 => 48,  124 => 45,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  82 => 27,  69 => 19,  66 => 18,  59 => 11,  55 => 9,  53 => 8,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\base.html.twig");
    }
}
