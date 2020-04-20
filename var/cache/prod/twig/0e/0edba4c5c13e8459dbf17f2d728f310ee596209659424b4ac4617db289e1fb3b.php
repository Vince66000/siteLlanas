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
class __TwigTemplate_6cefeff4f9a801fa32b9b796270b4733ad929aad7d14221e998607800ae46307 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "workshop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Atelier";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  79 => 22,  71 => 17,  66 => 15,  58 => 9,  54 => 8,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "workshop.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\workshop.html.twig");
    }
}
