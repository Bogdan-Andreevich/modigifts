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

/* paybox/template/extension/module/featured.twig */
class __TwigTemplate_3dcd9c3d31d54e450fdd906ccbd23cf1f3bf309a0bbad86da83badffc2c71260 extends \Twig\Template
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
        echo "<div class=\"tab-content container protabcont martb\">
   <div class=\"tab-head tab_head text-left\">
      <h1 class=\"heading pull-left\"><span>";
        // line 3
        echo ($context["head_title"] ?? null);
        echo "</span></h1>
      <ul class=\"nav nav-tabs pro-tab\">
         <li class=\"active\"><a href=\"#featurep\" data-toggle=\"tab\">";
        // line 5
        echo ($context["fea_title"] ?? null);
        echo "</a></li>
         <li><a href=\"#bestseller\" data-toggle=\"tab\">";
        // line 6
        echo ($context["best_title"] ?? null);
        echo "</a></li>
         <li><a href=\"#latestp\" data-toggle=\"tab\">";
        // line 7
        echo ($context["latest_title"] ?? null);
        echo "</a></li>
      </ul>
   </div>
   <div class=\"tab-pane active\" id=\"featurep\">
      <div class=\"row rless\">
         <div id=\"feature\" class=\"owl-theme owl-carousel\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "               <div class=\"product-layout col-xs-12 cless\">
                  <div class=\"product-thumb transition\">
                     <div class=\"image\">
                        <a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\" class=\"img-responsive center-block\" /></a>
                        ";
            // line 18
            $context["t"] = 0;
            // line 19
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 20
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 21
                    echo "                        ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 22
                        echo "                        <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 22);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                        ";
                        // line 23
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 24
                        echo "                        ";
                    }
                    // line 25
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 27)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 28
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 28)) {
                // line 29
                echo "                        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 29);
                echo "%</span>
                        ";
            }
            // line 31
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31)) {
                // line 32
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "                        <!-- <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
                        ";
                }
                // line 35
                echo "                        ";
            }
            // line 36
            echo "                     </div>
                     <div class=\"caption text-left\">
                        ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 38)) {
                // line 39
                echo "                        <div class=\"rating\">
                           ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 41
                    echo "                           ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 41) < $context["i"])) {
                        // line 42
                        echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star-o fa-stack-2x\"></i>
                           </span>
                           ";
                    } else {
                        // line 46
                        echo "                           <span class=\"fa fa-stack\">
                           <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                           </span>
                           ";
                    }
                    // line 50
                    echo "                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                        </div>
                        ";
            } else {
                // line 53
                echo "                        <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "                           <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                        </div>
                        ";
            }
            // line 58
            echo "                        <h4 class=\"protitle\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
            echo "</a></h4>
                        ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59)) {
                // line 60
                echo "                        <div class=\"price\">
                           ";
                // line 61
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                           ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62);
                    echo "
                           ";
                } else {
                    // line 64
                    echo "                           <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64);
                    echo "</span>
                           ";
                }
                // line 66
                echo "                           ";
                // line 69
                echo "                        </div>
                        ";
            }
            // line 71
            echo "                        <div class=\"form-group homeaddq\">
                          <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 72
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 72);
            echo "');\">
                            <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
            // line 73
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                          <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
            // line 75
            echo ($context["atleast_cart"] ?? null);
            echo "\">
                        </div>
                        <div class=\"button-group text-center\">
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 78
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 78);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 79
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 79);
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
        // line 86
        echo "         </div>
      </div>
   </div>
";
        // line 90
        echo "<script type=\"text/javascript\">
   (function(\$){
    \$(\"#feature\").owlCarousel({
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
        return "paybox/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 90,  281 => 86,  266 => 79,  260 => 78,  254 => 75,  249 => 73,  243 => 72,  240 => 71,  236 => 69,  234 => 66,  226 => 64,  220 => 62,  218 => 61,  215 => 60,  213 => 59,  206 => 58,  202 => 56,  195 => 54,  190 => 53,  186 => 51,  180 => 50,  174 => 46,  168 => 42,  165 => 41,  161 => 40,  158 => 39,  156 => 38,  152 => 36,  149 => 35,  143 => 33,  140 => 32,  137 => 31,  131 => 29,  128 => 28,  121 => 27,  115 => 26,  109 => 25,  106 => 24,  104 => 23,  97 => 22,  94 => 21,  89 => 20,  84 => 19,  82 => 18,  72 => 17,  67 => 14,  63 => 13,  54 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/featured.twig", "");
    }
}
