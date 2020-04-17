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

/* artworks/getArtwoks.html.twig */
class __TwigTemplate_6324d129183201864e33af12c64896a5a32fb8ebfb0223b0efcd98add0050382 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artworks/getArtwoks.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artworks/getArtwoks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes tableaux";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "        <div style=\"margin-top: 50px\"></div>

<div class=\"row\" style=\"width: 95%; height: 100%;   border: solid 5px white; margin: auto; border-radius: 40px; background-color: dimgray; \">

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 13
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["artwork"], "filename", [], "any", false, false, false, 13)) {
                // line 14
                echo "            <div class=\" col-d-flex\" style=\"width: 30%; margin: auto; border: none; padding: 10px\"  >

                <div class=\"card mt-4\" style=\" border: none;  background-color: dimgray; margin: auto; \">
                    <a  href=\"#\">
                        <img id=\"pic\" class=\"img-fluid img-thumbnail\"  src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["artwork"], "imageFile"), "html", null, true);
                echo "\"
                             alt=\"card-img-top\"   style=\"width: 100%; height: auto ; border: none\" >
                    </a>
                </div>
            </div>


        ";
            }
            // line 26
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artwork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
        <div style=\"margin-top: 40px\"></div>
        <div class=\"pagination justify-content-center\">
            ";
        // line 30
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 30, $this->source); })()), null, [], ["position" => "centered", "size" => "medium", "rounded" => true]);
        // line 35
        echo "
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "artworks/getArtwoks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  114 => 30,  109 => 27,  103 => 26,  92 => 18,  86 => 14,  83 => 13,  79 => 12,  73 => 8,  66 => 7,  53 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block title 'Mes tableaux' %}

    {% block body %}
        <div style=\"margin-top: 50px\"></div>

<div class=\"row\" style=\"width: 95%; height: 100%;   border: solid 5px white; margin: auto; border-radius: 40px; background-color: dimgray; \">

    {% for artwork in artworks %}
        {% if artwork.filename %}
            <div class=\" col-d-flex\" style=\"width: 30%; margin: auto; border: none; padding: 10px\"  >

                <div class=\"card mt-4\" style=\" border: none;  background-color: dimgray; margin: auto; \">
                    <a  href=\"#\">
                        <img id=\"pic\" class=\"img-fluid img-thumbnail\"  src=\"{{ vich_uploader_asset(artwork, 'imageFile')    }}\"
                             alt=\"card-img-top\"   style=\"width: 100%; height: auto ; border: none\" >
                    </a>
                </div>
            </div>


        {% endif %}
    {% endfor %}
</div>
        <div style=\"margin-top: 40px\"></div>
        <div class=\"pagination justify-content-center\">
            {{ knp_pagination_render(artworks, null, {}, {
                'position': 'centered',
                'size': 'medium',
                'rounded': true,

            }) }}
        </div>
    {% endblock %}


", "artworks/getArtwoks.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\artworks\\getArtwoks.html.twig");
    }
}
