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

/* artworks/dashboard.html.twig */
class __TwigTemplate_f57ec5fbe310b2ba46e148027cc38e75322bfd3bc3796ded5f72b880fa44380d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artworks/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artworks/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artworks/dashboard.html.twig", 1);
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

        echo "Tableau de bord";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"div\" style=\"margin-top: 100px\">


        <div class=\"container\" style=\"width: 95%; margin-top: 50px; border: solid 5px white; border-radius: 30px\">

            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.new.artwork");
        echo "\" class=\"btn btn-secondary\" style=\"width: 100%; margin-top: 20px; margin-left: auto; margin-right: auto\">Ajouter une oeuvre</a>



            <div class=\"row\" style=\"margin: auto\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artwork"]) {
            // line 18
            echo "                    <div class=\"col-6\" >
                        <table style=\"margin-left: auto; margin-right: auto \">
                            ";
            // line 21
            echo "                            <tr>
                                <td>
                                    <img class=\"img-fluid img-thumbnail\"  src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["artwork"], "imageFile"), "html", null, true);
            echo "\"
                                         alt=\"card-img-top\" style=\"width:200px; height:200px ; border: none\" >
                                </td>
                                <td>
                                    <form  method=\"post\" action=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">
                                        ";
            // line 29
            echo "                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["artwork"], "id", [], "any", false, false, false, 30))), "html", null, true);
            echo "\">
                                        <button class=\"btn btn-danger\"  style=\"text-align: center; vertical-align: center ; margin: 92px; color: white \">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            ";
            // line 36
            echo "                        </table>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artwork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            </div>
        </div>

    </div>
    <div style=\"margin-top: 40px\"></div>
    <div class=\"pagination justify-content-center\">
        ";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["artworks"]) || array_key_exists("artworks", $context) ? $context["artworks"] : (function () { throw new RuntimeError('Variable "artworks" does not exist.', 46, $this->source); })()), null, [], ["position" => "centered", "size" => "medium", "rounded" => true]);
        // line 50
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "artworks/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 50,  155 => 46,  146 => 39,  138 => 36,  130 => 30,  127 => 29,  123 => 27,  116 => 23,  112 => 21,  108 => 18,  104 => 17,  96 => 12,  88 => 6,  78 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{%  block title 'Tableau de bord' %}
{% block body %}

    <div class=\"div\" style=\"margin-top: 100px\">


        <div class=\"container\" style=\"width: 95%; margin-top: 50px; border: solid 5px white; border-radius: 30px\">

            <a href=\"{{ path('admin.new.artwork') }}\" class=\"btn btn-secondary\" style=\"width: 100%; margin-top: 20px; margin-left: auto; margin-right: auto\">Ajouter une oeuvre</a>



            <div class=\"row\" style=\"margin: auto\">
                {% for artwork in artworks %}
                    <div class=\"col-6\" >
                        <table style=\"margin-left: auto; margin-right: auto \">
                            {#                <table class=\"table table-bordered\">#}
                            <tr>
                                <td>
                                    <img class=\"img-fluid img-thumbnail\"  src=\"{{ vich_uploader_asset(artwork, 'imageFile')    }}\"
                                         alt=\"card-img-top\" style=\"width:200px; height:200px ; border: none\" >
                                </td>
                                <td>
                                    <form  method=\"post\" action=\"{{ path('admin.delete', {id: artwork.id}) }}\">
                                        {#                                <a class=\"btn btn-danger\" href=\"\" style=\"text-align: center; vertical-align: center ; margin: 92px; color: white \">Supprimer</a>#}
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ artwork.id) }}\">
                                        <button class=\"btn btn-danger\"  style=\"text-align: center; vertical-align: center ; margin: 92px; color: white \">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            {#                </table>#}
                        </table>
                    </div>
                {% endfor %}

            </div>
        </div>

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

", "artworks/dashboard.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\artworks\\dashboard.html.twig");
    }
}
