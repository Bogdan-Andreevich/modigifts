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

/* paybox/template/common/madebyhand_search.twig */
class __TwigTemplate_858a56d6aa0762dca13beaca18078bab0c54ab7db75214e640bdcd1b1d4fca48 extends \Twig\Template
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
        if ((($context["total_product"] ?? null) > 0)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 3
                echo "<div class=\"madebyhand-cat col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left\">
\t<div class=\"searchbr\">
    <div class=\"product-info col-lg-3 col-sm-4 col-xs-4 image\">
    \t<a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
                echo "\">
    \t\t<img src=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" />
    \t</a>
   \t</div>
   \t<div class=\"madebyhand-dis col-lg-9 col-sm-8 col-xs-8\">
   \t\t<h4><a href=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                echo "</a></h4>
   \t\t<p class=\"list-des\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 12);
                echo "</p>
   \t\t";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                          <div class=\"rating\">
                            ";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 16
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 16) < $context["i"])) {
                            // line 17
                            echo "                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star-o fa-stack-2x\"></i>
                            </span>
                            ";
                        } else {
                            // line 21
                            echo "                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                            </span>
                            ";
                        }
                        // line 25
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "                          </div>";
                } else {
                    // line 27
                    echo "                          <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 28
                        echo "                          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "</div>
                        ";
                }
                // line 31
                echo "\t\t    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "\t\t        <div class=\"price\">
\t\t          ";
                    // line 33
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "\t\t          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
                        echo "
\t\t          ";
                    } else {
                        // line 36
                        echo "\t\t          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 36);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36);
                        echo "</span>
\t\t          ";
                    }
                    // line 38
                    echo "\t\t        </div>
\t\t    ";
                }
                // line 40
                echo "\t</div>
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 45
            echo "\t<div><p>There is no product that matches the search criteria.</p></div>
";
        }
    }

    public function getTemplateName()
    {
        return "paybox/template/common/madebyhand_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  149 => 40,  145 => 38,  137 => 36,  131 => 34,  129 => 33,  126 => 32,  123 => 31,  119 => 29,  112 => 28,  107 => 27,  104 => 26,  98 => 25,  92 => 21,  86 => 17,  83 => 16,  79 => 15,  76 => 14,  74 => 13,  70 => 12,  64 => 11,  53 => 7,  49 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/common/madebyhand_search.twig", "");
    }
}
