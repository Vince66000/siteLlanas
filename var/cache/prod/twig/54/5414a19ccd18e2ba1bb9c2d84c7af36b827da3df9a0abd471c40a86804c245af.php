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

/* Security/login.html.twig */
class __TwigTemplate_fec8fb5842b0f6f94e94e7cb30bafab3bcd0a00d74b954657689f1c8f12fd190 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Se connecter";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container mt-4\">

        ";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 10), "security"), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 13
        echo "        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\" style=\"color: #DDDDDD\">Nom d'utilisateur</label>
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\" style=\"color: #DDDDDD\"> Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
        </form>
    </div>



";
    }

    public function getTemplateName()
    {
        return "Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 13,  67 => 10,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Security/login.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\Security\\login.html.twig");
    }
}
