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
class __TwigTemplate_4dcfe2074479b5cb84b052546652063e2e13cea866f4682c03868032b947d86c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "\" alt=\"logo\" style=\"width: 300px; height: 150px; margin-top: 70px\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\" style=\"margin-top: 70px\">
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
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) {
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
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
<div style=\"margin-top: 70px\">
    <hr style=\"border-top: 3px solid white; width: 95%\">
    <hr style=\"border-top: 3px solid white; width: 95%; margin-top: 1px\">
</div>

";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "<footer class=\"footer text-center\">
    <hr style=\"border-top: 3px solid white; width: 95%\">
    <hr style=\"border-top: 3px solid white; width: 95%; margin-top: 1px\">

    <div class=\"container\" style=\"color: white\">
        <div class=\"row\">
            <!-- Footer Location-->
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"\"><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop");
        echo "\">Atelier</a></h4>
                <p class=\"lead mb-0\">17 Rue Lucien Deslinières<br />6600 Perpignan</p>
            </div>
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"\">Contact</h4>
                <p class=\"lead mb-0\"><a id=\"tel\" href=\"tel:0662224957\">06 24 42 60 09</a></p>
                <p class=\"lead mb-0\"><a id=\"mail\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact/newMail");
        echo "\">Ecrivez moi!</a></p>
            </div>
            <!-- Footer Social Icons-->
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"\">Mes réseaux</h4>
                <a class=\"btn btn-outline-light btn-social mx-1\" target=\"_blank\" href=\"https://www.facebook.com/VinZhWokNWoll/\"><i class=\"fab fa-fw fa-facebook-f\"></i></a>
                <!--                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#\"><i class=\"fab fa-fw fa-twitter\"></i></a>-->
                <a class=\"btn btn-outline-light btn-social mx-1\" target=\"_blank\" href=\"https://www.linkedin.com/in/vincent-sales-ab8598165/\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a>
                <!--                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#\"><i class=\"fab fa-fw fa-dribbble\"></i></a>-->
            </div>

        </div>
    </div>
</footer>



<script src=\"https://code.jquery.com/jquery-3.4.1.js\"  integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
        crossorigin=\"anonymous\"></script>
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0\"></script>
";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  307 => 115,  289 => 77,  271 => 8,  252 => 7,  238 => 116,  236 => 115,  210 => 92,  201 => 86,  191 => 78,  189 => 77,  178 => 68,  172 => 65,  166 => 62,  163 => 61,  160 => 60,  154 => 57,  151 => 56,  149 => 55,  142 => 51,  136 => 48,  130 => 45,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  88 => 27,  75 => 19,  72 => 18,  65 => 11,  61 => 9,  59 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Bienvenue!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('app.css') }}\">
</head>
<body>

{#    <div class=\"jumbotron\">#}
{#        <h1>E. Llanas</h1>#}
{#    </div>#}
<nav class=\"navbar navbar-expand-lg navbar-perso bg-perso\" style=\"height: 80px\">
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\" ><img src=\"{{ asset('images/ellanas.png')}}\" alt=\"logo\" style=\"width: 300px; height: 150px; margin-top: 70px\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\" style=\"margin-top: 70px\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Oeuvres
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"{{ path('getAcrylic')  }}\">Acryliques et Huiles</a>
                    <a class=\"dropdown-item\" href=\"{{ path('getPastel') }}\">Pastels</a>
                    <a class=\"dropdown-item\" href=\"{{ path('getInk') }}\">Encres</a>
                    <a class=\"dropdown-item\" href=\"{{ path('getSticking') }}\">Collages</a>
                    <a class=\"dropdown-item\" href=\"{{ path('getDraws') }}\">Dessins</a>
                    <a class=\"dropdown-item\" href=\"{{ path('getWatercolor')  }}\">Aquarelles et Gouaches</a>
                    <a class=\"dropdown-item\" href=\"{{ path('getVarious') }}\">Créations diverses</a>
                </div>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('workshop') }}\">Atelier</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('news') }}\">Actualité</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            {% if not app.user %}
                <li class=\"nav-item\" style=\"float: right\">
                    <a class=\"nav-link \" href=\"{{ path('admin.getAll') }}\" >Connexion</a>
                </li>
            {% endif %}
            {% if app.user %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('logout') }}\">Se déconnecter</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin.getAll') }}\" class=\"nav-link\">Tableau de bord</a>
                </li>
            {% endif %}
        </ul>

    </div>
</nav>
<div style=\"margin-top: 70px\">
    <hr style=\"border-top: 3px solid white; width: 95%\">
    <hr style=\"border-top: 3px solid white; width: 95%; margin-top: 1px\">
</div>

{% block body %}{% endblock %}
<footer class=\"footer text-center\">
    <hr style=\"border-top: 3px solid white; width: 95%\">
    <hr style=\"border-top: 3px solid white; width: 95%; margin-top: 1px\">

    <div class=\"container\" style=\"color: white\">
        <div class=\"row\">
            <!-- Footer Location-->
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"\"><a href=\"{{ path('workshop') }}\">Atelier</a></h4>
                <p class=\"lead mb-0\">17 Rue Lucien Deslinières<br />6600 Perpignan</p>
            </div>
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"\">Contact</h4>
                <p class=\"lead mb-0\"><a id=\"tel\" href=\"tel:0662224957\">06 24 42 60 09</a></p>
                <p class=\"lead mb-0\"><a id=\"mail\" href=\"{{ path('contact/newMail') }}\">Ecrivez moi!</a></p>
            </div>
            <!-- Footer Social Icons-->
            <div class=\"col-lg-4 mb-5 mb-lg-0\">
                <h4 class=\"\">Mes réseaux</h4>
                <a class=\"btn btn-outline-light btn-social mx-1\" target=\"_blank\" href=\"https://www.facebook.com/VinZhWokNWoll/\"><i class=\"fab fa-fw fa-facebook-f\"></i></a>
                <!--                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#\"><i class=\"fab fa-fw fa-twitter\"></i></a>-->
                <a class=\"btn btn-outline-light btn-social mx-1\" target=\"_blank\" href=\"https://www.linkedin.com/in/vincent-sales-ab8598165/\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a>
                <!--                        <a class=\"btn btn-outline-light btn-social mx-1\" href=\"#\"><i class=\"fab fa-fw fa-dribbble\"></i></a>-->
            </div>

        </div>
    </div>
</footer>



<script src=\"https://code.jquery.com/jquery-3.4.1.js\"  integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
        crossorigin=\"anonymous\"></script>
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0\"></script>
{% block javascripts %}{% endblock %}

</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\base.html.twig");
    }
}
