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

/* contact/contact.html.twig */
class __TwigTemplate_ed5920f5ec6330aa5ce8b61c24e15899c6ca2ddf408375844ad029c5bb01389b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Me contacter";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "            <div class=\"alert alert-success\" style=\"width: 100%; text-align: center\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    <div class=\"container\" style=\"width: 1000px\">

        <h1 style=\"text-align: center; color: dimgrey\">Contact</h1>
        <div style=\"width: 1000px; text-align: center\" >
            <a href=\"tel:0624426009\" class=\"btn btn-secondary btn-lg\" style=\"border-radius: 20px\">Téléphone</a>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact/newMail");
        echo "\" class=\"btn btn-secondary btn-lg\" style=\"border-radius: 20px\">Mail</a>
        </div>
        <div style=\"margin-bottom: 30px\"></div>
        <div class=\"col-6\" style=\"border: 10px white;\">
            <iframe id=\"map\"
                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.6841441391975!2d2.889143815466748!3d42.68923257916604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b06e36421bc027%3A0x14b4f4dd561620bc!2sE.Llanas-ART!5e0!3m2!1sfr!2sfr!4v1583863736603!5m2!1sfr!2sfr\"
                    width=\"1000\"
                    height=\"600\"
                    allowfullscreen=\"\">
            </iframe>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  75 => 11,  66 => 8,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/contact.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\contact\\contact.html.twig");
    }
}
