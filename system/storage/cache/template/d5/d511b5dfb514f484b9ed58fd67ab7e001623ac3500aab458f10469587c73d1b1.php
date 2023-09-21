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

/* paybox/template/account/login.twig */
class __TwigTemplate_08e86210599673778cb98ada178922ff1c81d23e543791626df47028f993ab3a extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"breadbg\">
  <div class=\"container\">
    <div class=\"row\">
      <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
  </div>
</div>
</div>
<div id=\"account-login\" class=\"container acpage\">
  ";
        // line 14
        if (($context["success"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 17
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 20
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-lg-8 col-sm-5 col-md-6 col-xs-12";
            // line 23
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9 col-xs-12 colright";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "

      <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-lg-6 col-xs-12\">
          <div class=\"well\">
            <h2>";
        // line 33
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 34
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 35
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a href=\"";
        // line 36
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-lg-6 col-xs-12\">
          <div class=\"well\">
            <h2>";
        // line 40
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 41
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 42
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 44
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 45
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 48
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 49
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <div class=\"text-right\"><a href=\"";
        // line 50
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div></div>
              <input type=\"submit\" value=\"";
        // line 51
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 52
        if (($context["redirect"] ?? null)) {
            // line 53
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 55
        echo "            </form>
          </div>
        </div>
      </div>
      </div>
    ";
        // line 60
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 62
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 63
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "paybox/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 63,  206 => 62,  201 => 60,  194 => 55,  188 => 53,  186 => 52,  182 => 51,  176 => 50,  170 => 49,  166 => 48,  158 => 45,  154 => 44,  149 => 42,  145 => 41,  141 => 40,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  97 => 24,  94 => 23,  91 => 22,  89 => 21,  84 => 20,  78 => 18,  75 => 17,  69 => 15,  67 => 14,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/account/login.twig", "");
    }
}
