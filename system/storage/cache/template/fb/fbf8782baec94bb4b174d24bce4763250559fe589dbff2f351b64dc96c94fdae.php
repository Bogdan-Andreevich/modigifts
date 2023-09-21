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

/* paybox/template/extension/module/wbleftproduct.twig */
class __TwigTemplate_a1127ec6ca010dd05af7ea3e053ad79ec9d33610bde013d51f0a7690bc14b136 extends \Twig\Template
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
        echo "<div class=\"container martb\">
   <div class=\"tab-head\">
      <div class=\"heading text-left\">
         <h1><span>";
        // line 4
        echo ($context["left_head_title"] ?? null);
        echo "</span></h1>
      </div>
   </div>

      <div class=\"row rless\">

        <div class=\"col-md-3 col-sm-3 col-xs-12 cless left_product\">
        ";
        // line 11
        $context["num_row"] = 2;
        // line 12
        echo "        ";
        $context["i"] = 0;
        // line 13
        echo "         <div id=\"left_prod\" class=\"owl-theme owl-carousel\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "               ";
            if ((($context["i"] ?? null) == 0)) {
                // line 16
                echo "          <div>
            <div>
        ";
            }
            // line 19
            echo "               <div class=\"product-layout col-xs-12 cless\">
                  <div class=\"product-thumb transition\">
                     <div class=\"image col-xs-4\">
                        <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
            echo "\" class=\"img-responsive center-block\" /></a>
                        ";
            // line 23
            $context["t"] = 0;
            // line 24
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 25
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 26
                    echo "                        ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 27
                        echo "                        <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 27);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                        ";
                        // line 28
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 29
                        echo "                        ";
                    }
                    // line 30
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        ";
            // line 41
            echo "                     </div>
                     <div class=\"caption col-xs-8 text-left\">
                        ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 43)) {
                // line 44
                echo "                        <div class=\"rating\">
                           ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 46
                    echo "                           ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 46) < $context["i"])) {
                        // line 47
                        echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star-o fa-stack-2x\"></i>
                           </span>
                           ";
                    } else {
                        // line 51
                        echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                           </span>
                           ";
                    }
                    // line 55
                    echo "                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                        </div>
                        ";
            } else {
                // line 58
                echo "                        <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 59
                    echo "                           <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                        </div>
                        ";
            }
            // line 63
            echo "                        <h4 class=\"protitle\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 63);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63);
            echo "</a></h4>
                        ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64)) {
                // line 65
                echo "                        <div class=\"price\">
                           ";
                // line 66
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "                           ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67);
                    echo "
                           ";
                } else {
                    // line 69
                    echo "                           <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 69);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69);
                    echo "</span>
                           ";
                }
                // line 71
                echo "                           ";
                // line 74
                echo "                        </div>
                        ";
            }
            // line 76
            echo "                        ";
            // line 87
            echo "                     </div>
                  </div>
               </div>

           ";
            // line 91
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 92
            echo "        ";
            if ((($context["i"] ?? null) == ($context["num_row"] ?? null))) {
                // line 93
                echo "            </div>
          </div>
          ";
                // line 95
                $context["i"] = 0;
                // line 96
                echo "        ";
            }
            // line 97
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            
          
        </div>
      </div>

<script type=\"text/javascript\">
   (function(\$){
    \$(\"#left_prod\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [400, 1],
    [600, 2],
    [768, 2],
    [992, 3],
    [1200, 1],
    [1410, 1]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      autoPlay : 5000,
      navigation : false,
      pagination:false
    });
   }(jQuery));
</script>

";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/wbleftproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 98,  238 => 97,  235 => 96,  233 => 95,  229 => 93,  226 => 92,  224 => 91,  218 => 87,  216 => 76,  212 => 74,  210 => 71,  202 => 69,  196 => 67,  194 => 66,  191 => 65,  189 => 64,  182 => 63,  178 => 61,  171 => 59,  166 => 58,  162 => 56,  156 => 55,  150 => 51,  144 => 47,  141 => 46,  137 => 45,  134 => 44,  132 => 43,  128 => 41,  126 => 32,  120 => 31,  114 => 30,  111 => 29,  109 => 28,  102 => 27,  99 => 26,  94 => 25,  89 => 24,  87 => 23,  77 => 22,  72 => 19,  67 => 16,  64 => 15,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/wbleftproduct.twig", "");
    }
}
