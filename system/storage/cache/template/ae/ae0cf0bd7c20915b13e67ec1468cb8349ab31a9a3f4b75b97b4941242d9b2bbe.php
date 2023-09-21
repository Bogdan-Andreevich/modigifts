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

/* paybox/template/extension/module/wbrightproduct.twig */
class __TwigTemplate_febf93f5ce597924b352ce1bf6d55033b52c7ad2854e8c1ffaf0deb46a2c813b extends \Twig\Template
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
        // line 9
        echo "
        <div class=\"col-md-3 col-sm-3 col-xs-12 cless right_product\">
        ";
        // line 11
        $context["num_row"] = 2;
        // line 12
        echo "        ";
        $context["i"] = 0;
        // line 13
        echo "         <div id=\"right_prod\" class=\"owl-theme owl-carousel\">
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
    </div>
  </div>

<script type=\"text/javascript\">
   (function(\$){
    \$(\"#right_prod\").owlCarousel({
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
        return "paybox/template/extension/module/wbrightproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 98,  227 => 97,  224 => 96,  222 => 95,  218 => 93,  215 => 92,  213 => 91,  207 => 87,  205 => 76,  201 => 74,  199 => 71,  191 => 69,  185 => 67,  183 => 66,  180 => 65,  178 => 64,  171 => 63,  167 => 61,  160 => 59,  155 => 58,  151 => 56,  145 => 55,  139 => 51,  133 => 47,  130 => 46,  126 => 45,  123 => 44,  121 => 43,  117 => 41,  115 => 32,  109 => 31,  103 => 30,  100 => 29,  98 => 28,  91 => 27,  88 => 26,  83 => 25,  78 => 24,  76 => 23,  66 => 22,  61 => 19,  56 => 16,  53 => 15,  49 => 14,  46 => 13,  43 => 12,  41 => 11,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/wbrightproduct.twig", "");
    }
}
