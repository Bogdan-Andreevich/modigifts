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

/* paybox/template/extension/module/webinewsletter/default.twig */
class __TwigTemplate_df6cbcef9adefaf27f2e142812ed9707ec9670279f3abc8ba82ccf149d65b9f8 extends \Twig\Template
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
        echo "<div class=\"newsl webi-newsletter col-xs-12 col-lg-12 ";
        echo ($context["prefix"] ?? null);
        echo "\" id=\"newsletter_";
        echo ($context["id"] ?? null);
        echo "\" data-mode=\"";
        echo ($context["mode"] ?? null);
        echo "\">
\t<div class=\"row news_row\">
\t    <div class=\"news_letter col-xs-12\">
\t\t\t<form id=\"formNewLestter\" method=\"post\" action=\"";
        // line 4
        echo ($context["action"] ?? null);
        echo "\" class=\"formNewLestter\" ";
        if ( !twig_test_empty(($context["banner"] ?? null))) {
            echo " style=\"background-image: url('";
            echo ($context["banner"] ?? null);
            echo "')\" ";
        }
        echo ">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-5 col-xs-12 social_icon\">
\t\t\t\t\t\t";
        // line 8
        echo "\t\t\t\t\t\t<ul class=\"list-unstyled fsocial list-inline\">
\t\t\t\t\t\t  <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t          <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t          <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t          <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t          <li><a href=\"#\"><i class=\"fa fa-vimeo\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"newsletter\" class=\"col-lg-9 col-md-8 col-sm-7 col-xs-12\">
\t\t\t\t\t\t<h2>";
        // line 17
        echo ($context["entry_sign_up_for_newsletter"] ?? null);
        echo "</h2>
\t\t\t\t\t\t";
        // line 19
        echo "\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-md inputNew\" ";
        // line 20
        if ( !array_key_exists("customer_email", $context)) {
            echo " onblur=\"javascript:if(this.value=='')this.value='";
            echo ($context["default_input_text"] ?? null);
            echo "';\" onfocus=\"javascript:if(this.value=='";
            echo ($context["default_input_text"] ?? null);
            echo "')this.value='';\"";
        }
        echo " value=\"";
        echo ((($context["customer_email"] ?? null)) ? (($context["customer_email"] ?? null)) : (($context["default_input_text"] ?? null)));
        echo "\" size=\"18\" name=\"email\" placeholder=\"Your email address\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group-btn\"><button type=\"submit\" name=\"submitNewsletter\" class=\"newsbtn btn btn-primary\">";
        // line 22
        echo ($context["button_subscribe"] ?? null);
        echo "</button></div>
\t\t\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"action\">
\t\t\t\t\t\t<div class=\"valid\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\"><!--
\$(\"#newsletter_";
        // line 34
        echo ($context["id"] ?? null);
        echo "\").webiNewsletter().work(  '";
        echo ($context["valid_email"] ?? null);
        echo "' );
--></script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/webinewsletter/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  91 => 22,  78 => 20,  75 => 19,  71 => 17,  60 => 8,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/webinewsletter/default.twig", "");
    }
}
