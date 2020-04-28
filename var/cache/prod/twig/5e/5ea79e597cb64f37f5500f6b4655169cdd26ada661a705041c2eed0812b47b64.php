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

/* news/news.html.twig */
class __TwigTemplate_4b94ae809dd86d695baebcff4334a31288e9c078ee5c45a58863dd2813daf7b3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "news/news.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Actualités";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <h1 style=\"text-align: center; color: white\">Actualités</h1>
    <div style=\"margin-top: 50px\"></div>
    <div class=\"row justify-content-center\" style=\" margin: auto;display: flex; flex-direction: row; align-content: space-around; width: 95%; height: auto\">


                <div    style=\"margin: 5px \"
                        class=\"fb-page\"
                        data-href=\"https://www.facebook.com/E.llanas.art/?__tn__=%2Cd%2CP-R&amp;eid=ARAXrfSPOTZuUG8XRfwmuOVVkk8vLQQ86Bkz_ZdyHMpO9zb4E2EXR5EUbaz2ENAtrq32QXehiaosiBA7\"
                        data-tabs=\"timeline\"
                        data-width=\"500\"
                        data-height=\"1000\"
                        data-small-header=\"false\"
                        data-adapt-container-width=\"true\"
                        data-hide-cover=\"false\"
                        data-show-facepile=\"true\">
                </div>
            <div style=\"width: 130px \"></div>
            <div class=\"col-1\"   >
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/BouchonCatalan/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/BouchonCatalan/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/BouchonCatalan/\">Le Bouchon Catalan</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/La-Maison-Secall-1453953411572129/\">La maison Secall</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/masnostrecase/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/masnostrecase/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/masnostrecase/\">Mas Nostre Case</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/pontdesarts66440/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/pontdesarts66440/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/pontdesarts66440/\">Le pont des Arts</a></blockquote></div>
                <div style=\"margin:5px; border: white solid 2px\" class=\"fb-page\" data-href=\"https://www.facebook.com/Haka.Informatique/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"70\" data-small-header=\"false\" data-adapt-container-width=\"false\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/Haka.Informatique/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Haka.Informatique/\">Haka Informatique</a></blockquote></div>
            </div>
        </div>




";
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "      <div id=\"fb-root\"></div>
      <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "news/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  93 => 38,  59 => 7,  55 => 6,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "news/news.html.twig", "C:\\wamp64\\www\\site_Llanas\\templates\\news\\news.html.twig");
    }
}
