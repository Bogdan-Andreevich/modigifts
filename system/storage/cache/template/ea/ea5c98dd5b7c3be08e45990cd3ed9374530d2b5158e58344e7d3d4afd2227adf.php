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

/* paybox/template/common/search.twig */
class __TwigTemplate_8b6f6b7ba5e4590e21a5627ea4c0ad410cbfcc76ee0fdf04a7f7a9fdbb886d69 extends \Twig\Template
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
        echo "<li id=\"search\" class=\"desktop-search d-inline-block\">

<div id=\"search\" class=\"wbSearch\">
<div id=\"search_block_top\">
\t<select id=\"madebyhand-search-category\">
      <option value=\"0\">";
        // line 6
        echo ($context["text_category"] ?? null);
        echo "</option>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 8
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 8) == ($context["category_id"] ?? null))) {
                // line 9
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 9);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 9);
                echo "</option>
        ";
            } else {
                // line 11
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 11);
                echo "</option>
        ";
            }
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 14
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 14) == ($context["category_id"] ?? null))) {
                    // line 15
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 15);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 15);
                    echo "</option>
          ";
                } else {
                    // line 17
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 17);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 17);
                    echo "</option>
          ";
                }
                // line 19
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 20
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 20) == ($context["category_id"] ?? null))) {
                        // line 21
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 21);
                        echo "\" selected=\"selected\">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        // line 22
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 22);
                        echo "
              </option>
            ";
                    } else {
                        // line 25
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 25);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 25);
                        echo "</option>
            ";
                    }
                    // line 27
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
<div class=\"input-group input_search\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 32
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"search_query form-control input-lg madebyhand-search\" />
    <div class=\"input-group-btn\">
    \t<button type=\"button\" class=\"btn btn-primary btn-lg\"><!-- <i class=\"fa fa-search hidden-lg hidden-md hidden-sm\"></i> -->
      <span class=\"hidden-xs\">";
        // line 35
        echo ($context["text_search"] ?? null);
        echo "</span>
        <svg class=\"hidden-lg hidden-md hidden-sm\"><use xlink:href=\"#hsearch\"></use></svg>
      </button>
  \t\t<!-- <a href=\"javascript:void(0)\" class=\"closebtn close-nav\" onclick=\"closeSearch()\"><i class=\"fa fa-close\"></i></a> -->
  \t</div>
  <!-- madebyhand Search Start  -->
        <div class=\"madebyhand-search text-left\">
          <div class=\"madebyhand-search-loader\" style=\"display: none;\"><div class=\"loaders\"></div></div><!-- Add Loader -->
          <div class=\"madebyhand-search-result\"><!-- search results --></div>
        </div>
        <!-- madebyhand Search End  -->
</div>
</div>
</div>
</li>";
    }

    public function getTemplateName()
    {
        return "paybox/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 35,  144 => 32,  140 => 30,  134 => 29,  128 => 28,  122 => 27,  114 => 25,  108 => 22,  103 => 21,  100 => 20,  95 => 19,  87 => 17,  79 => 15,  76 => 14,  71 => 13,  63 => 11,  55 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/common/search.twig", "");
    }
}
