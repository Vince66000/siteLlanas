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
class __TwigTemplate_7c01b0408ee94c3c4f3e55e6dc8ae444b07d00dcf846d4b759814fd0cb9da8fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  132 => 47,  129 => 46,  122 => 39,  116 => 36,  110 => 33,  104 => 30,  98 => 27,  91 => 23,  84 => 19,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


 {% block body %}


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
                     <img class=\"imgCarousel\" src=\"{{ asset('images/Diaporama 1/diapo1.jpg') }}\" alt=\"diapo\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <!-- Slide Two - Set the background image for this slide in the line below -->
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"{{ asset('images/Diaporama 1/diapo2.jpg') }}\" alt=\"diapo2\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <!-- Slide Three - Set the background image for this slide in the line below -->
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"{{ asset('images/Diaporama 1/diapo3.jpg') }}\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"{{ asset('images/Diaporama 1/diapo4.jpg') }}\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"{{ asset('images/Diaporama 1/diapo5.jpg') }}\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"{{ asset('images/Diaporama 1/diapo6.jpg') }}\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
                 <div class=\"carousel-item\">
                     <img class=\"imgCarousel\" src=\"{{ asset('images/Diaporama 1/diapo7.jpg') }}\" alt=\"diapo3\" style=\"width: 400px; height: 500px; margin: auto\">
                 </div>
             </div>
         </div>
{#         <div class=\"portrait\">#}
{#             <img src=\"{{asset('/images/RSCN1232.JPG')}}\" alt=\"portrait\" style=\"width: 200px; height: 200px\">#}
{#         </div>#}
         <div class=\"text\" style=\"margin-right: 10px; height: 500px\">
             <img src=\"{{asset('/images/RSCN1232.JPG')}}\" alt=\"portrait\" style=\"width: 300px; height: 300px\">
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
 {% endblock %}
", "home.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\home.html.twig");
    }
}
