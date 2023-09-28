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

/* paybox/template/account/return_form.twig */
class __TwigTemplate_a1ee73f9a9b9ecb51be54ad2187491be48e4b804e97d4dc16abaceaa35467ec4 extends \Twig\Template
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
<div id=\"account-return\" class=\"container acpage\">
  ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 17
        echo "  <div class=\"row\"> ";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-lg-8 col-sm-5 col-md-6 col-xs-12";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9 col-xs-12 colright";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        echo ($context["content_top"] ?? null);
        echo "
<div class=\"infobg\">
      <div class=\"borbutt\">
        <h1 class=\"text-left\">";
        // line 28
        echo ($context["cheading_title"] ?? null);
        echo "</h1>
      </div>
      <p>";
        // line 30
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 33
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-firstname\">";
        // line 35
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 37
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 38
        if (($context["error_firstname"] ?? null)) {
            // line 39
            echo "              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 40
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-lastname\">";
        // line 43
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 45
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 46
        if (($context["error_lastname"] ?? null)) {
            // line 47
            echo "              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 48
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-email\">";
        // line 51
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 53
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 54
        if (($context["error_email"] ?? null)) {
            // line 55
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-telephone\">";
        // line 59
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 61
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 62
        if (($context["error_telephone"] ?? null)) {
            // line 63
            echo "              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 64
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-order-id\">";
        // line 67
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 69
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 70
        if (($context["error_order_id"] ?? null)) {
            // line 71
            echo "              <div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>
              ";
        }
        // line 72
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-date-ordered\">";
        // line 75
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 78
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 86
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-product\">";
        // line 88
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 90
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              ";
        // line 91
        if (($context["error_product"] ?? null)) {
            // line 92
            echo "              <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 93
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-model\">";
        // line 96
        echo ($context["entry_model"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 98
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 99
        if (($context["error_model"] ?? null)) {
            // line 100
            echo "              <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
              ";
        }
        // line 101
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-quantity\">";
        // line 104
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 106
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\">";
        // line 110
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\"> ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 112
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 112) == ($context["return_reason_id"] ?? null))) {
                // line 113
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 115);
                echo "\" checked=\"checked\" />
                  ";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 116);
                echo "</label>
              </div>
              ";
            } else {
                // line 119
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 121);
                echo "\" />
                  ";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 122);
                echo "</label>
              </div>
              ";
            }
            // line 125
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "              ";
        if (($context["error_reason"] ?? null)) {
            // line 127
            echo "              <div class=\"text-danger\">";
            echo ($context["error_reason"] ?? null);
            echo "</div>
              ";
        }
        // line 128
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 col-xs-12 control-label\">";
        // line 131
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <label class=\"radio-inline\"> ";
        // line 133
        if (($context["opened"] ?? null)) {
            // line 134
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 136
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 138
        echo "                ";
        echo ($context["text_yes"] ?? null);
        echo "</label>
              <label class=\"radio-inline\"> ";
        // line 139
        if ( !($context["opened"] ?? null)) {
            // line 140
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 142
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 144
        echo "                ";
        echo ($context["text_no"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 col-xs-12 control-label\" for=\"input-comment\">";
        // line 148
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-sm-9 col-xs-12\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 150
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 153
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        ";
        // line 155
        if (($context["text_agree"] ?? null)) {
            // line 156
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 157
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-danger\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">";
            // line 158
            echo ($context["text_agree"] ?? null);
            echo "
            ";
            // line 159
            if (($context["agree"] ?? null)) {
                // line 160
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 162
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 164
            echo "            <input type=\"submit\" value=\"";
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 168
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 169
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 171
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 175
        echo "      </form>
      </div></div>
    ";
        // line 177
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 181
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});
//--></script> 
";
        // line 185
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 186
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "paybox/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 186,  517 => 185,  510 => 181,  503 => 177,  499 => 175,  492 => 171,  485 => 169,  482 => 168,  474 => 164,  470 => 162,  466 => 160,  464 => 159,  460 => 158,  454 => 157,  451 => 156,  449 => 155,  444 => 153,  436 => 150,  431 => 148,  423 => 144,  419 => 142,  415 => 140,  413 => 139,  408 => 138,  404 => 136,  400 => 134,  398 => 133,  393 => 131,  388 => 128,  382 => 127,  379 => 126,  373 => 125,  367 => 122,  363 => 121,  359 => 119,  353 => 116,  349 => 115,  345 => 113,  342 => 112,  338 => 111,  334 => 110,  325 => 106,  320 => 104,  315 => 101,  309 => 100,  307 => 99,  301 => 98,  296 => 96,  291 => 93,  285 => 92,  283 => 91,  277 => 90,  272 => 88,  267 => 86,  254 => 78,  248 => 75,  243 => 72,  237 => 71,  235 => 70,  229 => 69,  224 => 67,  219 => 64,  213 => 63,  211 => 62,  205 => 61,  200 => 59,  195 => 56,  189 => 55,  187 => 54,  181 => 53,  176 => 51,  171 => 48,  165 => 47,  163 => 46,  157 => 45,  152 => 43,  147 => 40,  141 => 39,  139 => 38,  133 => 37,  128 => 35,  123 => 33,  118 => 31,  114 => 30,  109 => 28,  100 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  80 => 18,  75 => 17,  69 => 15,  67 => 14,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/account/return_form.twig", "");
    }
}
