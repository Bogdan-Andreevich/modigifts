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

/* paybox/template/extension/module/wbonsaleproduct.twig */
class __TwigTemplate_eabf70047d70a9b067eca208d1088d9978a939ea9fe1baf3338df949382807f7 extends \Twig\Template
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
        echo "<div class=\"onsl\">
<div class=\"container\">
<div class=\"row\">
  
  <div class=\"col-xs-12 rtlleft\">
   <h1 class=\"heading text-left\"><span>";
        // line 6
        echo ($context["onsale_title"] ?? null);
        echo "</span>";
        echo "</h1>
  <div class=\"row rless\">
  <div class=\"col-sm-9 col-xs-12 cless onsale_append\">
    ";
        // line 9
        $context["temp"] = 0;
        // line 10
        $context["setCol"] = 2;
        // line 11
        echo "  <div id=\"onsale\" class=\"owl-theme owl-carousel\">
 ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            echo "
 ";
            // line 14
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 15
            echo "        ";
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 16
                echo "            <div class=\"multi-row\">
        ";
            }
            // line 18
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image col-xs-5\"><a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
            echo "\" class=\"img-responsive center-block\" /></a>
          <!-- pixeltemplate Images Start -->
                 ";
            // line 22
            $context["t"] = 0;
            // line 23
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 24
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 25
                    echo "                  ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 26
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 26);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                  ";
                        // line 27
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 28
                        echo "                    ";
                    }
                    // line 29
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "          <!-- End -->

        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 34)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 35
            echo "
          <!-- ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 36)) {
                // line 37
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 37);
                echo "%</span>
        ";
            }
            // line 38
            echo " -->

        <!-- ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40)) {
                // line 41
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "            <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span>
          ";
                }
                // line 44
                echo "        ";
            }
            echo " -->

      </div>

     <div class=\"caption col-xs-7 text-left\">

        ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 50)) {
                // line 51
                echo "          <div class=\"rating\">
            ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 53
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 53) < $context["i"])) {
                        // line 54
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    } else {
                        // line 58
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    }
                    // line 62
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "          </div>";
            } else {
                // line 64
                echo "          <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 65
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "
        <h4 class=\"protitle\"><a href=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 69);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
            echo "</a></h4>

         ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71)) {
                // line 72
                echo "        <div class=\"price\">
          ";
                // line 73
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74);
                    echo "
          ";
                } else {
                    // line 76
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                    echo "</span>
          ";
                }
                // line 78
                echo "         ";
                // line 81
                echo "        </div>
        ";
            }
            // line 83
            echo "
        ";
            // line 90
            echo "       

      </div>

    </div>
  </div>

 ";
            // line 97
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 98
                echo "            </div>
        ";
            }
            // line 100
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "     ";
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 102
            echo "    <!-- <h1>hii</h1> -->
        </div>
        ";
        }
        // line 105
        echo "
</div>
</div>
<div class=\"col-sm-3 col-xs-12 cless right_append\">
  
</div>
</div>
</div>
</div>
</div>
</div>
<script type=\"text/javascript\">
    (function(\$){
    \$(\"#onsale\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320, 1],
    [600, 2],
    [768, 2],
    [992, 2],
    [1200, 2],
    [1410, 3]
    ],
      autoPlay: 5000,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : false,
      pagination:false
    });
   }(jQuery));
</script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/wbonsaleproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 105,  288 => 102,  285 => 101,  279 => 100,  275 => 98,  273 => 97,  264 => 90,  261 => 83,  257 => 81,  255 => 78,  247 => 76,  241 => 74,  239 => 73,  236 => 72,  234 => 71,  227 => 69,  224 => 68,  220 => 66,  213 => 65,  208 => 64,  205 => 63,  199 => 62,  193 => 58,  187 => 54,  184 => 53,  180 => 52,  177 => 51,  175 => 50,  165 => 44,  159 => 42,  156 => 41,  154 => 40,  150 => 38,  144 => 37,  142 => 36,  139 => 35,  133 => 34,  129 => 32,  123 => 31,  116 => 29,  113 => 28,  111 => 27,  104 => 26,  101 => 25,  96 => 24,  91 => 23,  89 => 22,  78 => 20,  74 => 18,  70 => 16,  67 => 15,  65 => 14,  62 => 13,  58 => 12,  55 => 11,  53 => 10,  51 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/wbonsaleproduct.twig", "");
    }
}
