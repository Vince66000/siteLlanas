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

/* @email/zurb_2/notification/local.css */
class __TwigTemplate_30057b4230ed5d8dd961c31b7090a62763ba103b3f533ebc3c139a1c3dcd6f16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "body {
    background: #f3f3f3;
}

.wrapper.secondary {
    background: #f3f3f3;
}

.container.body_alert {
    border-top: 8px solid #ec5840;
}

.container.body_warning {
    border-top: 8px solid #ffae00;
}

.container.body_default {
    border-top: 8px solid #aaaaaa;
}
";
    }

    public function getTemplateName()
    {
        return "@email/zurb_2/notification/local.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@email/zurb_2/notification/local.css", "C:\\wamp64\\www\\site_Llanas\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\zurb_2\\notification\\local.css");
    }
}
