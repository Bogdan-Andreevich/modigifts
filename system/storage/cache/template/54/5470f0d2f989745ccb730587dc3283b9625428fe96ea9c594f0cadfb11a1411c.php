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

/* extension/module/cookies.twig */
class __TwigTemplate_b581e81b7d87bfffee7aeb7637ee0925d860628be6137c50e3f63e7ef9e31ddb extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "cancel", [], "any", false, false, false, 7);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li>";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "permission", [], "any", false, false, false, 17)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_permission"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        } elseif ((twig_length_filter($this->env,         // line 21
($context["error"] ?? null)) > 0)) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
        <div class=\"tab-content\">

      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "save", [], "any", false, false, false, 33);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 35
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 37
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_name"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\" />
              ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "name", [], "any", false, false, false, 38)) {
            // line 39
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 41
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 44
        echo ($context["entry_message"] ?? null);
        echo " </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"message\" value=\"";
        // line 46
        echo ($context["message"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\" />
              ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "message", [], "any", false, false, false, 47)) {
            // line 48
            echo "              <div class=\"text-danger\">";
            echo ($context["error_message"] ?? null);
            echo "</div>
              ";
        }
        // line 50
        echo "            </div>
          </div>
                      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-button-text\">";
        // line 53
        echo ($context["entry_button_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"button_text\" value=\"";
        // line 55
        echo ($context["button_text"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_button_text"] ?? null);
        echo "\" id=\"input-redirect\" class=\"form-control\" />
              ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "button_text", [], "any", false, false, false, 56)) {
            // line 57
            echo "              <div class=\"text-danger\">";
            echo ($context["error_button_text"] ?? null);
            echo "</div>
              ";
        }
        // line 59
        echo "            </div>
          </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-cookies-informations\">";
        // line 62
        echo ($context["entry_cookies_informations"] ?? null);
        echo "<span data-toggle=\"tooltip\" title=\"Select 'None' if you dont need a link to information\"></span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_cookies_informations\" id=\"input-cookies-informations\" class=\"form-control\">
                      <option value=\"0\">";
        // line 65
        echo ($context["text_none"] ?? null);
        echo "</option>
                        
                      ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 68
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 68) == ($context["config_cookies_informations"] ?? null))) {
                // line 69
                echo "
                      <option value=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 70);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 70);
                echo "</option>

                      ";
            } else {
                // line 73
                echo "
                      <option value=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 74);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 74);
                echo "</option>

                      ";
            }
            // line 77
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
                    </select>
                  </div>
                </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-informations-text\">";
        // line 84
        echo ($context["entry_informations_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"informations_text\" value=\"";
        // line 86
        echo ($context["informations_text"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_informations_text"] ?? null);
        echo "\" id=\"input-redirect-url\" class=\"form-control\" />
              ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "informations_text", [], "any", false, false, false, 87)) {
            // line 88
            echo "              <div class=\"text-danger\">";
            echo ($context["error_informations_text"] ?? null);
            echo "</div>
              ";
        }
        // line 90
        echo "            </div>
          </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-show-type\">";
        // line 93
        echo ($context["entry_show_type"] ?? null);
        echo "<span data-toggle=\"tooltip\" title=\"Choose how you want the module to work\"></span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"show_type\" id=\"input-show-type\" class=\"form-control\">
\t\t\t";
        // line 96
        if ((($context["show_type"] ?? null) == 1)) {
            // line 97
            echo "\t\t\t<option value=\"1\" selected=\"selected\">Show until user press the button</option>
                      \t<option value=\"0\">Show only the first time user visits the page</option>
\t\t\t";
        } elseif ((        // line 99
($context["show_type"] ?? null) == 0)) {
            // line 100
            echo "\t\t\t<option value=\"1\">Show until user press the button</option>
\t\t\t<option value=\"0\" selected=\"selected\">Show only the first time user visits the page</option>
\t\t\t";
        }
        // line 103
        echo "                    </select>
                  </div>
                </div>

            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.js\"></script>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-bg-colour\">";
        // line 109
        echo ($context["entry_bg_colour"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"bg_colour\" value=\"";
        // line 111
        echo ($context["bg_colour"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_bg_colour"] ?? null);
        echo "\" id=\"input-redirect-url\" class=\"jscolor {hash:true} form-control\" />
              ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "bg_colour", [], "any", false, false, false, 112)) {
            // line 113
            echo "              <div class=\"text-danger\">";
            echo ($context["error_bg_colour"] ?? null);
            echo "</div>
              ";
        }
        // line 115
        echo "            </div>
          </div>
                      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-text-colour\">";
        // line 118
        echo ($context["entry_text_colour"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"text_colour\" value=\"";
        // line 120
        echo ($context["text_colour"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_text_colour"] ?? null);
        echo "\" id=\"input-text-colour\" class=\"jscolor {hash:true} form-control\" />
              ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "text_colour", [], "any", false, false, false, 121)) {
            // line 122
            echo "              <div class=\"text-danger\">";
            echo ($context["error_text_colour"] ?? null);
            echo "</div>
              ";
        }
        // line 124
        echo "            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 128
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 131
        if (($context["status"] ?? null)) {
            // line 132
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 133
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 135
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 136
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 138
        echo "              </select>
            </div>
          </div>
          <input type=\"hidden\"name=\"module_id\" value=\"";
        // line 141
        echo ($context["module_id"] ?? null);
        echo "\" />
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 147
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/cookies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 147,  375 => 141,  370 => 138,  365 => 136,  360 => 135,  355 => 133,  350 => 132,  348 => 131,  342 => 128,  336 => 124,  330 => 122,  328 => 121,  322 => 120,  317 => 118,  312 => 115,  306 => 113,  304 => 112,  298 => 111,  293 => 109,  285 => 103,  280 => 100,  278 => 99,  274 => 97,  272 => 96,  266 => 93,  261 => 90,  255 => 88,  253 => 87,  247 => 86,  242 => 84,  234 => 78,  228 => 77,  220 => 74,  217 => 73,  209 => 70,  206 => 69,  203 => 68,  199 => 67,  194 => 65,  188 => 62,  183 => 59,  177 => 57,  175 => 56,  169 => 55,  164 => 53,  159 => 50,  153 => 48,  151 => 47,  145 => 46,  140 => 44,  135 => 41,  129 => 39,  127 => 38,  121 => 37,  116 => 35,  111 => 33,  105 => 30,  99 => 26,  91 => 22,  89 => 21,  82 => 18,  80 => 17,  74 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/cookies.twig", "");
    }
}
