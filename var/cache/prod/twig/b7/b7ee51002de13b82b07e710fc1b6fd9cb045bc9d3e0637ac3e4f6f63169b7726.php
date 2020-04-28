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
class __TwigTemplate_6134d961918a6b6c13fefa768c94f81e64a6a6fd2373bb22377d2611e68555bb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "artworks/getArtwoks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes tableaux";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <div style=\"margin-top: 50px\"></div>

<div class=\"row\" style=\"width: 95%; height: 100%;   border: solid 5px white; margin: auto; border-radius: 40px; background-color: dimgray; \">

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artworks"] ?? null));
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["artworks"] ?? null), null, [], ["position" => "centered", "size" => "medium", "rounded" => true]);
        // line 35
        echo "
        </div>
    ";
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
        return array (  101 => 35,  99 => 30,  94 => 27,  88 => 26,  77 => 18,  71 => 14,  68 => 13,  64 => 12,  58 => 8,  54 => 7,  47 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "artworks/getArtwoks.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\artworks\\getArtwoks.html.twig");
    }
}
