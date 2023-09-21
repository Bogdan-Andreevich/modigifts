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

/* paybox/template/extension/module/latest.twig */
class __TwigTemplate_c21b6a7afda72719f8a851fcf28a4e38540cf590189227272732e02429510931 extends \Twig\Template
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
        echo "<div class=\"tab-pane\" id=\"latestp\">
<div class=\"row rless\">
  <div id=\"latest\" class=\"owl-theme owl-carousel\">
 ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive center-block\" /></a>
        
                        ";
            // line 9
            $context["t"] = 0;
            // line 10
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 11
                echo "                          ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 12
                    echo "                           <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 12);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                    // line 13
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 14
                    echo "                          ";
                }
                // line 15
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        
       
        ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 18)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 19
            echo "
          ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 20)) {
                // line 21
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 21);
                echo "%</span>
        ";
            }
            // line 23
            echo "
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24)) {
                // line 25
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "               <!-- <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
          ";
                }
                // line 28
                echo "      ";
            }
            // line 29
            echo "
    
      </div>
      
              <div class=\"caption text-left\">
                  ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 34)) {
                // line 35
                echo "                    <div class=\"rating\">
                      ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 37
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 37) < $context["i"])) {
                        // line 38
                        echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                    } else {
                        // line 42
                        echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                    }
                    // line 46
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    </div>";
            } else {
                // line 48
                echo "                    <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 49
                    echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "</div>
                  ";
            }
            // line 52
            echo "                  <h4 class=\"protitle\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
            echo "</a></h4>
                   ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53)) {
                // line 54
                echo "                  <div class=\"price\">
                    ";
                // line 55
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55)) {
                    // line 56
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56);
                    echo "
                    ";
                } else {
                    // line 58
                    echo "                    <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58);
                    echo "</span>
                    ";
                }
                // line 60
                echo "                   ";
                // line 63
                echo "                  </div>
                  ";
            }
            // line 65
            echo "                  <div class=\"form-group homeaddq\">
                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 66
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 66);
            echo "');\">
                      <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
            // line 67
            echo ($context["button_cart"] ?? null);
            echo "</span>
                    </button>
                    <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
            // line 69
            echo ($context["atleast_cart"] ?? null);
            echo "\">
                  </div>
                  <div class=\"button-group text-center\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 72
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 72);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 73
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 73);
            echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
                    <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
                  </div>
              </div>
      
    </div>
  </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </div>
      </div>
    </div>
</div>
";
        // line 87
        echo "
<script type=\"text/javascript\">
   (function(\$){
    \$(\"#latest\").owlCarousel({
    itemsCustom : [
    [0, 2],
    [400, 2],
    [600, 3],
    [700, 3],
    [992, 4],
    [1200, 5],
    [1410, 6]
    ],
      // autoPlay: 1000,
       navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : true,
      pagination:false
    });
     }(jQuery));
</script>
";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 87,  260 => 82,  243 => 73,  237 => 72,  231 => 69,  226 => 67,  220 => 66,  217 => 65,  213 => 63,  211 => 60,  203 => 58,  197 => 56,  195 => 55,  192 => 54,  190 => 53,  183 => 52,  179 => 50,  172 => 49,  167 => 48,  164 => 47,  158 => 46,  152 => 42,  146 => 38,  143 => 37,  139 => 36,  136 => 35,  134 => 34,  127 => 29,  124 => 28,  118 => 26,  115 => 25,  113 => 24,  110 => 23,  104 => 21,  102 => 20,  99 => 19,  93 => 18,  89 => 16,  83 => 15,  80 => 14,  78 => 13,  71 => 12,  68 => 11,  63 => 10,  61 => 9,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/latest.twig", "");
    }
}
