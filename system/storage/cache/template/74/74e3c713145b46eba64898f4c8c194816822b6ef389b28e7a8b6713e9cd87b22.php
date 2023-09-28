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

/* sale/order_history.twig */
class __TwigTemplate_f9fb8637c0d08448e52206b94d99eac4fd2cddbd5d3bf3c29851c469eb0ca949 extends \Twig\Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 5
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_comment"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo ($context["column_status"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo ($context["column_notify"] ?? null);
        echo "</td>

        ";
        // line 10
        if (($context["module_da_track_shipment_status"] ?? null)) {
            // line 11
            echo "        <td class=\"text-left\">";
            echo ($context["column_tracking_number"] ?? null);
            echo "</td>
        <td class=\"text-left\">";
            // line 12
            echo ($context["column_courier"] ?? null);
            echo "</td>
        ";
        }
        // line 14
        echo "      
      </tr>
    </thead>
    <tbody>
      ";
        // line 18
        if (($context["histories"] ?? null)) {
            // line 19
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 20
                echo "      <tr>
        <td class=\"text-left\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 21);
                echo "</td>
        <td class=\"text-left\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 22);
                echo "</td>
        <td class=\"text-left\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 23);
                echo "</td>
        <td class=\"text-left\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["history"], "notify", [], "any", false, false, false, 24);
                echo "</td>

        ";
                // line 26
                if (($context["module_da_track_shipment_status"] ?? null)) {
                    // line 27
                    echo "        <td class=\"text-left\">
          ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["history"], "tracking_number", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["history_tracking_number"]) {
                        // line 29
                        echo "            <div data-width=\"100\"><a href=\"https://";
                        echo ($context["username"] ?? null);
                        echo ".aftership.com/";
                        echo $context["history_tracking_number"];
                        echo "\" target=\"_blank\">";
                        echo $context["history_tracking_number"];
                        echo "</a></div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history_tracking_number'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "
        </td>
        <td class=\"center\">
          ";
                    // line 34
                    if (twig_get_attribute($this->env, $this->source, $context["history"], "slug", [], "any", false, false, false, 34)) {
                        // line 35
                        echo "
        <a href=\"";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "web_url", [], "any", false, false, false, 36);
                        echo "\" target=\"_blank\">";
                        echo twig_get_attribute($this->env, $this->source, $context["history"], "name", [], "any", false, false, false, 36);
                        echo "</a>
          ";
                    }
                    // line 38
                    echo "        </td>
        ";
                }
                // line 40
                echo "      
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      ";
        } else {
            // line 44
            echo "      <tr>
        <td class=\"text-center\" colspan=\"4\">";
            // line 45
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 48
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 52
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 53
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sale/order_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 53,  174 => 52,  168 => 48,  162 => 45,  159 => 44,  156 => 43,  148 => 40,  144 => 38,  137 => 36,  134 => 35,  132 => 34,  127 => 31,  114 => 29,  110 => 28,  107 => 27,  105 => 26,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  85 => 20,  80 => 19,  78 => 18,  72 => 14,  67 => 12,  62 => 11,  60 => 10,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_history.twig", "");
    }
}
