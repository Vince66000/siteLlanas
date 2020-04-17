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

/* workshop.html.twig */
class __TwigTemplate_b9ef7e702d762b26f0475cd640418410555386e621ac7736c93b17b0fb6fb1e9 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "workshop.html.twig", 1);
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

        echo "Atelier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "


    <div class=\"grid mt-4\" style=\"width: 70%; margin: auto; display: flex; flex-direction: row-reverse; justify-content: flex-start\">
        <div class=\"text\">
            <div style=\"width: 500px; height: 400px\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/latetedelart.png"), "html", null, true);
        echo "\" alt=\"portrait\" style=\"width: 500px; height: 400px\">
            </div>
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/atelier1.JPG"), "html", null, true);
        echo "\" alt=\"portrait\" style=\"width: 500px; height: 400px; border: solid 8px white\">

        </div>

        <div class=\"text\" style=\"margin-right: 10px; height: 500px\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/atelier2.jpg"), "html", null, true);
        echo "\" alt=\"portrait\" style=\"width: 500px; height: 400px; border: solid 8px white\">
         <div style=\"margin-top: 150px\"></div>

            <p style=\"color: #DDDDDD; text-align: center; vertical-align: center\" >
                Pas de démotivation profonde pour une quelconque discipline,
                c’est ainsi que E.LLANAS passe avec autant de plaisir des acryliques géométriques, aux pastels figuratifs ou
                abstraits, des encres aux collages, aux dessins a la mine plomb, etc….



                C’est dans son Atelier Galerie que sont présentées les diverses créations.
            </p>
        </div>
    </div>
    <div style=\"margin-bottom: 30px\">

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "workshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  101 => 17,  96 => 15,  88 => 9,  78 => 8,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title 'Atelier' %}



{% block body %}



    <div class=\"grid mt-4\" style=\"width: 70%; margin: auto; display: flex; flex-direction: row-reverse; justify-content: flex-start\">
        <div class=\"text\">
            <div style=\"width: 500px; height: 400px\">
                <img src=\"{{asset('/images/latetedelart.png')}}\" alt=\"portrait\" style=\"width: 500px; height: 400px\">
            </div>
            <img src=\"{{asset('/images/atelier1.JPG')}}\" alt=\"portrait\" style=\"width: 500px; height: 400px; border: solid 8px white\">

        </div>

        <div class=\"text\" style=\"margin-right: 10px; height: 500px\">
            <img src=\"{{asset('/images/atelier2.jpg')}}\" alt=\"portrait\" style=\"width: 500px; height: 400px; border: solid 8px white\">
         <div style=\"margin-top: 150px\"></div>

            <p style=\"color: #DDDDDD; text-align: center; vertical-align: center\" >
                Pas de démotivation profonde pour une quelconque discipline,
                c’est ainsi que E.LLANAS passe avec autant de plaisir des acryliques géométriques, aux pastels figuratifs ou
                abstraits, des encres aux collages, aux dessins a la mine plomb, etc….



                C’est dans son Atelier Galerie que sont présentées les diverses créations.
            </p>
        </div>
    </div>
    <div style=\"margin-bottom: 30px\">

    </div>

{% endblock %}
", "workshop.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\workshop.html.twig");
    }
}
