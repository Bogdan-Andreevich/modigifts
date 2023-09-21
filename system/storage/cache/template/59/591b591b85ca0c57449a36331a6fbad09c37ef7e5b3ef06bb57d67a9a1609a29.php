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

/* paybox/template/mail/register_alert.twig */
class __TwigTemplate_f4a7f04cc7d118e12c18aad959c834e9d13ba86399ff0cdbba5bbb318ba548c3 extends \Twig\Template
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
        echo ($context["text_signup"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_firstname"] ?? null);
        echo " ";
        echo ($context["firstname"] ?? null);
        echo "
";
        // line 4
        echo ($context["text_lastname"] ?? null);
        echo " ";
        echo ($context["lastname"] ?? null);
        echo "
";
        // line 5
        if (($context["customer_group"] ?? null)) {
            // line 6
            echo ($context["text_customer_group"] ?? null);
            echo " ";
            echo ($context["customer_group"] ?? null);
            echo "
";
        }
        // line 8
        echo ($context["text_email"] ?? null);
        echo " ";
        echo ($context["email"] ?? null);
        echo "
";
        // line 9
        echo ($context["text_telephone"] ?? null);
        echo " ";
        echo ($context["telephone"] ?? null);
    }

    public function getTemplateName()
    {
        return "paybox/template/mail/register_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  63 => 8,  56 => 6,  54 => 5,  48 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/mail/register_alert.twig", "");
    }
}
