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
class __TwigTemplate_1840ed282e32308f0179ad4e539332b39502cdd8acdb2fb579da39ab5ba1a06b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/newMail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "


    <div id=\"contactForm\" class=\"col-sm mt-4\">
        <h1 style=\"text-align: center; margin-bottom: 50px; color: white\">Ecrivez moi</h1>
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"container col-4\">
            <div class=\"row\" style=\"width: 100%;color: white\">
                <div class=\"col\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstName", [], "any", false, false, false, 12), 'row', ["label" => "Prénom"]);
        echo "</div>
                <div class=\"col\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastName", [], "any", false, false, false, 13), 'row', ["label" => "Nom"]);
        echo "</div>
            </div>
            <div class=\"row\" style=\"width: 100%; color: white\">
                <div class=\"col\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 16), 'row', ["label" => "Téléphone"]);
        echo "</div>
                <div class=\"col\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 17), 'row', ["label" => "Email"]);
        echo "</div>
            </div>
            <div class=\"row\" style=\"width: 100%; color: white\">
                <div class=\"col\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "</div>
            </div>
            <div class=\"form-group\">
                <button id=\"send\" disabled=\"disabled\" class=\"btn btn-primary\">Envoyer</button>
            </div>

            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  117 => 43,  113 => 42,  93 => 26,  84 => 20,  78 => 17,  74 => 16,  68 => 13,  64 => 12,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/newMail.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\contact\\newMail.html.twig");
    }
}
