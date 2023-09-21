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

/* paybox/template/extension/module/webinewsletter/popup.twig */
class __TwigTemplate_f5f9676c3624e99553981f157b6a5714d70e9c91725411b1f26f663177e4b433 extends \Twig\Template
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
        echo "<div class=\"webi-newsletter ";
        echo ($context["prefix"] ?? null);
        echo " webi-newsletterp hide\" id=\"newsletter_";
        echo ($context["id"] ?? null);
        echo "\" data-mode=\"";
        echo ($context["mode"] ?? null);
        echo "\">
\t\t<form id=\"formNewLestter\" method=\"post\" action=\"";
        // line 2
        echo ($context["action"] ?? null);
        echo "\" class=\"formNewLestter  white-popup newsletter-bg news-popup\" ";
        if ( !twig_test_empty(($context["banner"] ?? null))) {
            echo " style=\"background-image: url('";
            echo ($context["banner"] ?? null);
            echo "')\" ";
        }
        echo ">
\t\t\t<div class=\"inner\">
\t\t\t";
        // line 5
        echo "\t\t\t\t<div class=\"description-top\">
\t\t\t\t\t";
        // line 6
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control input-md inputNew\" ";
        // line 9
        if ( !array_key_exists("customer_email", $context)) {
            echo " onblur=\"javascript:if(this.value=='')this.value='";
            echo ($context["default_input_text"] ?? null);
            echo "';\" onfocus=\"javascript:if(this.value=='";
            echo ($context["default_input_text"] ?? null);
            echo "')this.value='';\"";
        }
        echo " value=\"";
        echo ((($context["customer_email"] ?? null)) ? (($context["customer_email"] ?? null)) : (($context["default_input_text"] ?? null)));
        echo "\" size=\"18\" name=\"email\">
\t\t\t\t</div>
\t\t\t\t<div class=\"valid\"></div>
\t\t\t\t<div class=\"button-submit\">
\t\t\t\t\t<button type=\"submit\" name=\"submitNewsletter\" class=\"btn btn-primary\">";
        // line 13
        echo ($context["button_subscribe"] ?? null);
        echo "</button>
\t\t\t\t</div>\t
\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"action\">
\t\t\t\t
\t\t\t\t<div class=\"description-bottom\">
\t\t\t\t\t";
        // line 18
        echo ($context["social"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t    <label><input type=\"checkbox\" checked=\"false\"> ";
        // line 23
        echo ($context["text_dont_show"] ?? null);
        echo " </label>
\t\t\t  </div>
\t\t\t</div>\t
\t\t</form>
</div>

<script type=\"text/javascript\"><!--
\$(\"#newsletter_";
        // line 30
        echo ($context["id"] ?? null);
        echo "\").webiNewsletter().work(  '";
        echo ($context["valid_email"] ?? null);
        echo "' );
--></script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/webinewsletter/popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  97 => 23,  89 => 18,  81 => 13,  66 => 9,  60 => 6,  57 => 5,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/webinewsletter/popup.twig", "");
    }
}
