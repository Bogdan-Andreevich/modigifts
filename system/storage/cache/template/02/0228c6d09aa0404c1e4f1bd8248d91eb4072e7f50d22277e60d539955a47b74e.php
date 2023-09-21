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

/* extension/module/da_track_shipment.twig */
class __TwigTemplate_fd29a18851c93a9aebbff585da8938d71587a1e9e246343bc90dceb825ea38f7 extends \Twig\Template
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
        echo "

";
        // line 3
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"<?php echo \$cancel; ?>\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1><?php echo \$heading_title; ?></h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 24
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo " </h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">*";
        // line 31
        echo ($context["entry_key"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_da_track_shipment_after_ship_key\" value=\"";
        // line 33
        echo ($context["module_da_track_shipment_after_ship_key"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 34
        if (($context["error_key"] ?? null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo ($context["error_key"] ?? null);
            echo "</div>
              ";
        }
        // line 37
        echo "              <br/>
              ";
        // line 38
        echo ($context["text_get_key"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">*";
        // line 42
        echo ($context["entry_username"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_da_track_shipment_after_ship_username\" value=\"";
        // line 44
        echo ($context["module_da_track_shipment_after_ship_username"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 45
        if (($context["error_username"] ?? null)) {
            // line 46
            echo "                <div class=\"text-danger\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
              ";
        }
        // line 48
        echo "              <br/>
              ";
        // line 49
        echo ($context["text_get_username"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 53
        echo ($context["entry_courier"] ?? null);
        echo " (";
        echo ($context["text_courier_priority"] ?? null);
        echo ")</label>
            <div class=\"col-sm-10\">
              <table>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["couriers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["couriers_info"]) {
            // line 57
            echo "
                  <tr>
                    <td>";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["couriers_info"], "name", [], "any", false, false, false, 59);
            echo "</td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couriers_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
              </table>
              <br/>
              <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 65
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_refresh"] ?? null);
        echo "</button>
              <br/>
              ";
        // line 67
        echo ($context["text_refresh"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 71
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_da_track_shipment_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 74
        if (($context["module_da_track_shipment_status"] ?? null)) {
            // line 75
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 76
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 78
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 79
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 81
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo \$footer; ?>
";
    }

    public function getTemplateName()
    {
        return "extension/module/da_track_shipment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 81,  227 => 79,  222 => 78,  217 => 76,  212 => 75,  210 => 74,  204 => 71,  197 => 67,  190 => 65,  185 => 62,  176 => 59,  172 => 57,  168 => 56,  160 => 53,  153 => 49,  150 => 48,  144 => 46,  142 => 45,  138 => 44,  133 => 42,  126 => 38,  123 => 37,  117 => 35,  115 => 34,  111 => 33,  106 => 31,  101 => 29,  95 => 26,  91 => 24,  83 => 20,  81 => 19,  75 => 15,  64 => 13,  60 => 12,  54 => 9,  50 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/da_track_shipment.twig", "");
    }
}
