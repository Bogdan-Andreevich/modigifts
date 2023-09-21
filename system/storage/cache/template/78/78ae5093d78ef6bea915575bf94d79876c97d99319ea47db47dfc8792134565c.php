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

/* paybox/template/extension/module/special.twig */
class __TwigTemplate_637a2e81b766354cd2798f24c6faba5ff6868be7c2a7ea10e2dbdedf01fd346c extends \Twig\Template
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
        echo "<div class=\"container spepro martb\">
  <div class=\"borbutt\">
    <h1 class=\"heading text-left\"><span>";
        // line 3
        echo ($context["speheading_title"] ?? null);
        echo "</span></h1>
  </div>
<div class=\"row rless\">
<div class=\"col-xs-12 specpr\">
<div id=\"special\" class=\"owl-theme owl-carousel\">
 ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb\">
      <div class=\"image\"><a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "\" class=\"img-responsive center-block\" /></a>
       
              ";
            // line 13
            $context["t"] = 0;
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 15
                echo "                ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 16
                    echo "                 <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 16);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                ";
                    // line 17
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 18
                    echo "                ";
                }
                // line 19
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      
       
       ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 22)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 23
            echo "
          ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 24)) {
                // line 25
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 25);
                echo "%</span>
        ";
            }
            // line 27
            echo "
        ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28)) {
                // line 29
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "               <!-- <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
          ";
                }
                // line 32
                echo "        ";
            }
            // line 33
            echo "

      </div>
       
       <div class=\"caption text-left\">
                  ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 38)) {
                // line 39
                echo "                    <div class=\"rating\">
                      ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 41
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 41) < $context["i"])) {
                        // line 42
                        echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                    } else {
                        // line 46
                        echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                    }
                    // line 50
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                    </div>";
            } else {
                // line 52
                echo "                    <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 53
                    echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "</div>
                  ";
            }
            // line 56
            echo "                  <h4 class=\"protitle\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 56);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
            echo "</a></h4>
                   ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57)) {
                // line 58
                echo "                  <div class=\"price\">
                    ";
                // line 59
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60);
                    echo "
                    ";
                } else {
                    // line 62
                    echo "                    <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 62);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62);
                    echo "</span>
                    ";
                }
                // line 64
                echo "                   ";
                // line 67
                echo "                  </div>
                  ";
            }
            // line 69
            echo "                  <div class=\"form-group homeaddq\">
                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 70
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 70);
            echo "');\">
                      <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
            // line 71
            echo ($context["button_cart"] ?? null);
            echo "</span>
                    </button>
                    <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
            // line 73
            echo ($context["atleast_cart"] ?? null);
            echo "\">
                  </div>
                  <div class=\"button-group text-center\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 76
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 76);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 77);
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
        echo "
</div>
</div>
</div>
</div>


<script type=\"text/javascript\">
    (function(\$){
    \$(\"#special\").owlCarousel({
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
        return "paybox/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 86,  250 => 77,  244 => 76,  238 => 73,  233 => 71,  227 => 70,  224 => 69,  220 => 67,  218 => 64,  210 => 62,  204 => 60,  202 => 59,  199 => 58,  197 => 57,  190 => 56,  186 => 54,  179 => 53,  174 => 52,  171 => 51,  165 => 50,  159 => 46,  153 => 42,  150 => 41,  146 => 40,  143 => 39,  141 => 38,  134 => 33,  131 => 32,  125 => 30,  122 => 29,  120 => 28,  117 => 27,  111 => 25,  109 => 24,  106 => 23,  100 => 22,  96 => 20,  90 => 19,  87 => 18,  85 => 17,  78 => 16,  75 => 15,  70 => 14,  68 => 13,  57 => 11,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/special.twig", "");
    }
}
