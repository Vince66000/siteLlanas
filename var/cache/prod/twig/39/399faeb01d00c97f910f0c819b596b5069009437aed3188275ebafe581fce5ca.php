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

/* home.html.twig */
class __TwigTemplate_bce334ef56090145e3233c8b510736bea855982110b7af30cff4df658c6aace6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "

     <div xmlns=\"http://www.w3.org/1999/html\">
         <div class=\"jumbotron\" style=\"text-align: center; height: 180px\">
             <h1>Bonjour! Bon Dia! Buenos Dias! Guten Morgen! Good Morning!</h1>
         </div>

     </div>
     <div class=\"grid\" style=\"width: 70%; margin: auto; display: flex; flex-direction: row-reverse; justify-content: flex-start\">

         <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
             <div class=\"carousel-inner\" role=\"listbox\" style=\"width: 400px; height: 500px; \">
                 <!-- Slide One - Set the background image for this slide in the line below -->
                 <div class=\"carousel-item active\">
                     <img class=\"imgCarousel\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Diaporama 1/diapo1.jpg"), "html", null, true);
        echo "\" alt=\"diapo\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <!-- Slide Two - Set the background image for this slide in the line below -->
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Diaporama 1/diapo2.jpg"), "html", null, true);
        echo "\" alt=\"diapo2\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <!-- Slide Three - Set the background image for this slide in the line below -->
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Diaporama 1/diapo3.jpg"), "html", null, true);
        echo "\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Diaporama 1/diapo4.jpg"), "html", null, true);
        echo "\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Diaporama 1/diapo5.jpg"), "html", null, true);
        echo "\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Diaporama 1/diapo6.jpg"), "html", null, true);
        echo "\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Diaporama 1/diapo7.jpg"), "html", null, true);
        echo "\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
             </div>
         </div>
";
        // line 46
        echo "         <div class=\"text\" style=\"margin-right: 10px; height: 500px\">
             <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/RSCN1232.JPG"), "html", null, true);
        echo "\" alt=\"portrait\" style=\"width: 300px; height: 300px\">
             <div style=\"margin-top: 20px\"></div>
             <p style=\"color: #DDDDDD\"><b>Juste quelqu’un de bien.</b>
                 <br/>
                 <br/>

                 Telle est la formule de E.LLANAS pour se définir.
                 Artiste cherchant a exprimer par ses peintures et
                 autres créations un univers parfois haut en couleurs mais aussi fait de noir intense.
                 Admiratif des autres artistes, E.LLANAS cherche juste à occuper une place dans un
                 monde artistique et devenir \"Juste quelqu’un de bien\".</p>
         </div>
     </div>
<div style=\"margin-bottom: 30px\">

</div>
 ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  111 => 46,  104 => 39,  98 => 36,  92 => 33,  86 => 30,  80 => 27,  73 => 23,  66 => 19,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\home.html.twig");
    }
}
