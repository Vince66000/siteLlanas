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

/* contact/newMail.html.twig */
class __TwigTemplate_eb49350cfdc49787fa5e73d1fdffb56067189563daa2ae10f25d8b9a8828d361 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/newMail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/newMail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


    <div id=\"contactForm\" class=\"col-sm mt-4\">
        <h1 style=\"text-align: center; margin-bottom: 50px; color: white\">Ecrivez moi</h1>
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        <div class=\"container col-4\">
            <div class=\"row\" style=\"width: 100%;color: white\">
                <div class=\"col\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "firstName", [], "any", false, false, false, 12), 'row', ["label" => "Prénom"]);
        echo "</div>
                <div class=\"col\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "lastName", [], "any", false, false, false, 13), 'row', ["label" => "Nom"]);
        echo "</div>
            </div>
            <div class=\"row\" style=\"width: 100%; color: white\">
                <div class=\"col\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "phone", [], "any", false, false, false, 16), 'row', ["label" => "Téléphone"]);
        echo "</div>
                <div class=\"col\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row', ["label" => "Email"]);
        echo "</div>
            </div>
            <div class=\"row\" style=\"width: 100%; color: white\">
                <div class=\"col\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'rest');
        echo "</div>
            </div>
            <div class=\"form-group\">
                <button id=\"send\" disabled=\"disabled\" class=\"btn btn-primary\">Envoyer</button>
            </div>

            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

        </div>
        <div class=\"alert alert-success\" style=\"width: 100%; text-align: center\" >
            <label for=\"accept\">J'accepte de recevoir une réponse par mail</label>
            <input name=\"accept\" id=\"accept\" onchange=\"checkbox() \" type=\"checkbox\">

            <p>Vos coordonnées ne seront pas enregistrées dans nos bases de données,
                ni communiquées à des tiers, et ne seront utilisées, le cas échéant, que pour répondre aux échanges
                d'emails sollicités par l'envoi de ce formulaire.</p>
        </div>


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "
    <script type=\"text/javascript\">

        function checkbox() {

            if(document.getElementById('accept').checked === true){
                document.getElementById('send').disabled = '';
            }
            else{

                document.getElementById('send').disabled = 'disabled';
            }
        }
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/newMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  125 => 42,  102 => 26,  93 => 20,  87 => 17,  83 => 16,  77 => 13,  73 => 12,  67 => 9,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}



    <div id=\"contactForm\" class=\"col-sm mt-4\">
        <h1 style=\"text-align: center; margin-bottom: 50px; color: white\">Ecrivez moi</h1>
        {{ form_start(form)}}
        <div class=\"container col-4\">
            <div class=\"row\" style=\"width: 100%;color: white\">
                <div class=\"col\">{{ form_row(form.firstName, {'label': 'Prénom'}) }}</div>
                <div class=\"col\">{{ form_row(form.lastName, {'label': 'Nom'}) }}</div>
            </div>
            <div class=\"row\" style=\"width: 100%; color: white\">
                <div class=\"col\">{{ form_row(form.phone, {'label': 'Téléphone'}) }}</div>
                <div class=\"col\">{{ form_row(form.email, {'label': 'Email'}) }}</div>
            </div>
            <div class=\"row\" style=\"width: 100%; color: white\">
                <div class=\"col\">{{ form_rest(form) }}</div>
            </div>
            <div class=\"form-group\">
                <button id=\"send\" disabled=\"disabled\" class=\"btn btn-primary\">Envoyer</button>
            </div>

            {{ form_end(form) }}

        </div>
        <div class=\"alert alert-success\" style=\"width: 100%; text-align: center\" >
            <label for=\"accept\">J'accepte de recevoir une réponse par mail</label>
            <input name=\"accept\" id=\"accept\" onchange=\"checkbox() \" type=\"checkbox\">

            <p>Vos coordonnées ne seront pas enregistrées dans nos bases de données,
                ni communiquées à des tiers, et ne seront utilisées, le cas échéant, que pour répondre aux échanges
                d'emails sollicités par l'envoi de ce formulaire.</p>
        </div>


    </div>

{% endblock %}
{% block javascripts %}

    <script type=\"text/javascript\">

        function checkbox() {

            if(document.getElementById('accept').checked === true){
                document.getElementById('send').disabled = '';
            }
            else{

                document.getElementById('send').disabled = 'disabled';
            }
        }
    </script>


{% endblock %}
", "contact/newMail.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\contact\\newMail.html.twig");
    }
}
