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

/* news/news.html.twig */
class __TwigTemplate_72225287892b0f3d63d799c91243241792f92aa1ff9033a54e3426135a15e8c6 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/news.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "news/news.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Actualités";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <h1 style=\"text-align: center; color: white\">Actualités</h1>
    <div style=\"margin-top: 50px\"></div>
    <div class=\"row justify-content-center\" style=\" margin: auto;display: flex; flex-direction: row; align-content: space-around; width: 95%; height: auto\">


                <div    style=\"margin: 5px \"
                        class=\"fb-page\"
                        data-href=\"https://www.facebook.com/E.llanas.art/?__tn__=%2Cd%2CP-R&amp;eid=ARAXrfSPOTZuUG8XRfwmuOVVkk8vLQQ86Bkz_ZdyHMpO9zb4E2EXR5EUbaz2ENAtrq32QXehiaosiBA7\"
                        data-tabs=\"timeline\"
                        data-width=\"500\"
                        data-height=\"1000\"
                        data-small-header=\"false\"
                        data-adapt-container-width=\"true\"
                        data-hide-cover=\"false\"
                        data-show-facepile=\"true\">
                </div>
            <div style=\"width: 130px \"></div>
            <div class=\"col-1\"   >
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/BouchonCatalan/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/BouchonCatalan/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/BouchonCatalan/\">Le Bouchon Catalan</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\">La maison Secall</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/masnostrecase/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/masnostrecase/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/masnostrecase/\">Mas Nostre Case</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/pontdesarts66440/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/pontdesarts66440/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/pontdesarts66440/\">Le pont des Arts</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/Haka.Informatique/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/Haka.Informatique/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Haka.Informatique/\">Haka Informatique</a></blockquote></div>
            </div>
        </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "      <div id=\"fb-root\"></div>
      <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0\"></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "news/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  129 => 38,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title 'Actualités' %}

{% block body %}

    <h1 style=\"text-align: center; color: white\">Actualités</h1>
    <div style=\"margin-top: 50px\"></div>
    <div class=\"row justify-content-center\" style=\" margin: auto;display: flex; flex-direction: row; align-content: space-around; width: 95%; height: auto\">


                <div    style=\"margin: 5px \"
                        class=\"fb-page\"
                        data-href=\"https://www.facebook.com/E.llanas.art/?__tn__=%2Cd%2CP-R&amp;eid=ARAXrfSPOTZuUG8XRfwmuOVVkk8vLQQ86Bkz_ZdyHMpO9zb4E2EXR5EUbaz2ENAtrq32QXehiaosiBA7\"
                        data-tabs=\"timeline\"
                        data-width=\"500\"
                        data-height=\"1000\"
                        data-small-header=\"false\"
                        data-adapt-container-width=\"true\"
                        data-hide-cover=\"false\"
                        data-show-facepile=\"true\">
                </div>
            <div style=\"width: 130px \"></div>
            <div class=\"col-1\"   >
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/BouchonCatalan/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/BouchonCatalan/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/BouchonCatalan/\">Le Bouchon Catalan</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\">La maison Secall</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/masnostrecase/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/masnostrecase/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/masnostrecase/\">Mas Nostre Case</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/pontdesarts66440/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/pontdesarts66440/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/pontdesarts66440/\">Le pont des Arts</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/Haka.Informatique/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/Haka.Informatique/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Haka.Informatique/\">Haka Informatique</a></blockquote></div>
            </div>
        </div>




{% endblock %}
  {% block javascripts %}
      <div id=\"fb-root\"></div>
      <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0\"></script>
  {% endblock %}


", "news/news.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\news\\news.html.twig");
    }
}
