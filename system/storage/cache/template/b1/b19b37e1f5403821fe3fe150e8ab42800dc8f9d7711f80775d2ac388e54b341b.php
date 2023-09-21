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

/* paybox/template/information/contact.twig */
class __TwigTemplate_c6a3011d58b028a81b30c2f9ceee4c47b0090c38354fb09b598a73e34d92e1c4 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
  <div class=\"row infobg\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"borbutt\">
        <h1 class=\"heading text-left\"><span>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</span></h1>
      </div>
      <div class=\"row\">
      
      <div class=\"col-md-4 col-xs-12 infocnt\">
      <legend>";
        // line 29
        echo ($context["text_location"] ?? null);
        echo "</legend>
      <div class=\"\">
          <!--   ";
        // line 31
        if (($context["image"] ?? null)) {
            // line 32
            echo "           <img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-responsive\" />
            ";
        }
        // line 33
        echo " -->

            <!-- <strong>";
        // line 35
        echo ($context["store"] ?? null);
        echo "</strong> -->

            ";
        // line 37
        if (($context["comment"] ?? null)) {
            // line 38
            echo "              <div>";
            echo ($context["comment"] ?? null);
            echo "</div>
              ";
        }
        // line 40
        echo "
              

              <div class=\"pull-left\"><i class=\"fa fa-home\"></i></div>
              <div class=\"contsp\">";
        // line 44
        echo ($context["address"] ?? null);
        echo "</div>

              ";
        // line 46
        if (($context["geocode"] ?? null)) {
            // line 47
            echo "              <div class=\"contsp\">
              <a href=\"https://maps.google.com/maps?q=";
            // line 48
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a></div>
              ";
        }
        // line 50
        echo "
              <div class=\"pull-left\"><i class=\"fa fa-phone\"></i></div>
             <div class=\"contsp\"> ";
        // line 52
        echo ($context["telephone"] ?? null);
        echo "</div>

              ";
        // line 54
        if (($context["fax"] ?? null)) {
            // line 55
            echo "              <div class=\"pull-left\"><i class=\"fa fa-fax\"></i></div>
             <div class=\"contsp\"> ";
            // line 56
            echo ($context["fax"] ?? null);
            echo "</div>
              ";
        }
        // line 58
        echo "
              ";
        // line 59
        if (($context["open"] ?? null)) {
            // line 60
            echo "              <div class=\"pull-left\"><i class=\"fa fa-clock-o\"></i></div>
             <div class=\"contsp\"> ";
            // line 61
            echo ($context["open"] ?? null);
            echo "</div>
              ";
        }
        // line 63
        echo "              
      </div>
 

      ";
        // line 67
        if (($context["locations"] ?? null)) {
            // line 68
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div id=\"accordion\">
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 71
                echo "          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 72);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 72);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 74);
                echo "\">
                ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 76);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 76);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 76);
                    echo "\" class=\"center-block img-responsive\" />
                ";
                }
                // line 78
                echo "                <strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 78);
                echo "</strong>
                  <address>
                  ";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 80);
                echo "
                  </address>
                  ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 83));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 85
                echo "                <strong>";
                echo ($context["text_telephone"] ?? null);
                echo "</strong>
                  ";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 86);
                echo "
                  ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong>
                  ";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 89);
                    echo "
                  ";
                }
                // line 91
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong>
                  ";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 93);
                    echo "
                  ";
                }
                // line 95
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 95)) {
                    // line 96
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong>
                  ";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 97);
                    echo "
                  ";
                }
                // line 99
                echo "          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "      </div>
      ";
        }
        // line 103
        echo "    </div>
<div class=\"col-md-8 col-xs-12\">
      <form action=\"";
        // line 105
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 107
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 109
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 111
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 112
        if (($context["error_name"] ?? null)) {
            // line 113
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 115
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 control-label\" for=\"input-email\">";
        // line 118
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 120
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 121
        if (($context["error_email"] ?? null)) {
            // line 122
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 124
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 control-label\" for=\"input-enquiry\">";
        // line 127
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 129
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 130
        if (($context["error_enquiry"] ?? null)) {
            // line 131
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 133
        echo "            </div>
          </div>
          ";
        // line 135
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 139
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form></div>
      </div></div>
    ";
        // line 144
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 146
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 147
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "paybox/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 147,  422 => 146,  417 => 144,  409 => 139,  402 => 135,  398 => 133,  392 => 131,  390 => 130,  386 => 129,  381 => 127,  376 => 124,  370 => 122,  368 => 121,  364 => 120,  359 => 118,  354 => 115,  348 => 113,  346 => 112,  342 => 111,  337 => 109,  332 => 107,  327 => 105,  323 => 103,  319 => 101,  312 => 99,  307 => 97,  302 => 96,  299 => 95,  294 => 93,  289 => 92,  286 => 91,  281 => 89,  276 => 88,  274 => 87,  270 => 86,  265 => 85,  255 => 83,  253 => 82,  248 => 80,  242 => 78,  232 => 76,  230 => 75,  226 => 74,  219 => 72,  216 => 71,  212 => 70,  206 => 68,  204 => 67,  198 => 63,  193 => 61,  190 => 60,  188 => 59,  185 => 58,  180 => 56,  177 => 55,  175 => 54,  170 => 52,  166 => 50,  157 => 48,  154 => 47,  152 => 46,  147 => 44,  141 => 40,  135 => 38,  133 => 37,  128 => 35,  124 => 33,  114 => 32,  112 => 31,  107 => 29,  99 => 24,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  67 => 14,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/information/contact.twig", "");
    }
}
