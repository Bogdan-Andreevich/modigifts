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

/* paybox/template/extension/module/wbcategory_tab.twig */
class __TwigTemplate_54097df2170ef95e7310390fe98841cd17a1fe1718d443998f85ab86a5f8feea extends \Twig\Template
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
        echo "<div class=\"cate-bg mb-2 martb\">
   <div class=\"category-tab tabpro pro-nepr container\">
      <h1 class=\"heading text-left\"><span>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</span>
         <button type=\"button\" class=\"btn btn-primary toggle collapsed catb\" data-toggle=\"collapse\" data-target=\"#cat_tab\"></button>
      </h1>
      ";
        // line 7
        echo "      ";
        // line 31
        echo "      <!--category-tab-->
      <div class=\"cat-tab row rless\">
         <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-5 home-cat footer-collapse collapse cless\" id=\"cat_tab\">
              <ul class=\"nav nav-tabs text-left cate-ul\">
          <div class=\"\">
                  <div id=\"catli\" class=\"owl-theme owl-carousel\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 38
            echo "                    
                      ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39) == 0)) {
                // line 40
                echo "                          ";
                $context["class"] = " class=\"active webTab\"";
                // line 41
                echo "                      ";
            } else {
                // line 42
                echo "                          ";
                $context["class"] = " class=\"webTab\"";
                // line 43
                echo "                      ";
            }
            // line 44
            echo "                      <li ";
            echo ($context["class"] ?? null);
            echo "><a class=\"tab-title\" href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 44);
            echo "</a></li>
                 
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "             </div>
             </div>
              </ul>
          </div>
         <div class=\"col-lg-9 col-md-9 col-sm-8 col-xs-7 cate-tab cless\">
            <div class=\"cattabright\">
               <div class=\"tab-content\">
                  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["products"]) {
            // line 55
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 55) == 0)) {
                // line 56
                echo "                  ";
                $context["class"] = " active in";
                // line 57
                echo "                  ";
            } else {
                // line 58
                echo "                  ";
                $context["class"] = "";
                // line 59
                echo "                  ";
            }
            // line 60
            echo "                  <div class=\"tab-pane fade";
            echo ($context["class"] ?? null);
            echo " row rless\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60);
            echo "\">
                     <div id=\"cattab\" class=\"owl-theme owl-carousel\">
                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["products"], "products", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 63
                echo "                        <div class=\"product-layout col-xs-12 cless\">
                           <div class=\"product-thumb transition\">
                              <div class=\"image\">
                                 <div class=\"hoverbg\">
                                    <div class=\"owl-catadditional\">
                                       <a href=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 68);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                echo "\" class=\"img-responsive center-block\" /></a>
                                       ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                    // line 70
                    echo "                                       ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                        // line 71
                        echo "                                       <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 71);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 71);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                       ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                                    </div>
                                 </div>
                              </div>
                              <div class=\"caption\">
                                 ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                                 <div class=\"rating\">
                                    ";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 81
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 81) < $context["i"])) {
                            // line 82
                            echo "                                    <span class=\"fa fa-stack\">
                                    <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                    </span>
                                    ";
                        } else {
                            // line 86
                            echo "                                    <span class=\"fa fa-stack\">
                                    <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                                    </span>
                                    ";
                        }
                        // line 90
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                                 </div>
                                 ";
                } else {
                    // line 93
                    echo "                                 <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 94
                        echo "                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                                 </div>
                                 ";
                }
                // line 98
                echo "                                 <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 98);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 98);
                echo "</a></h4>
                                 ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "                                 <div class=\"price\">
                                    ";
                    // line 101
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 101)) {
                        // line 102
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                        echo "
                                    ";
                    } else {
                        // line 104
                        echo "                                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 104);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104);
                        echo "</span>
                                    ";
                    }
                    // line 106
                    echo "                                 </div>
                                 ";
                }
                // line 108
                echo "                                 <div class=\"form-group homeaddq\">
                                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 109
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 109);
                echo "');\">
                                      <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
                // line 110
                echo ($context["button_cart"] ?? null);
                echo "</span>
                                    </button>
                                    <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
                // line 112
                echo ($context["atleast_cart"] ?? null);
                echo "\">
                                  </div>
                                  <div class=\"button-group text-center\">
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 115
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 116
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 116);
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
            // line 123
            echo "                     </div>
                  </div>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--/category-tab-->
<script type=\"text/javascript\">
   // \$(document).ready(function() {
   // \$('.tab-content .tab-pane #cattab').slick({
   // dots: false,
   // arrows: true,
   // slidesToShow: 3,
   // slidesToScroll: 1,
   // autoplay: false,
   // autoplaySpeed: 2000,
   // rows: 2,
   // responsive: [
   // {
   //   breakpoint: 1920,
   //   settings: {
   //     slidesToShow: 3
   //   }
   // },
   // {
   //   breakpoint: 1410,
   //   settings: {
   //     slidesToShow: 3
   //   }
   // },
   // {
   //   breakpoint: 1410,
   //   settings: {
   //     slidesToShow: 2
   //   }
   // },
   // {
   //   breakpoint: 1200,
   //   settings: {
   //     slidesToShow: 2
   //   }
   // },
   // {
   //   breakpoint: 992,
   //   settings: {
   //     slidesToShow: 2
   //   }
   // },
   // {
   //   breakpoint: 768,
   //   settings: {
   //     slidesToShow: 2
   //   }
   // },
   // {
   //   breakpoint: 767,
   //   settings: {
   //     slidesToShow: 2
   //   }
   // },
   // {
   //   breakpoint: 600,
   //   settings: {
   //     slidesToShow: 1
   //   }
   // },
   // {
   //   breakpoint: 400,
   //   settings: {
   //     slidesToShow: 1
   //   }
   // },
   // {
   //   breakpoint: 320,
   //   settings: {
   //     slidesToShow: 1
   //   }
   // }
   // ]
   // });
   // });
   


   (function(\$){
   if (\$(document).width() > 767){
    var count_block = \$('.tabpro .webTab').length;
    var number_blocks = 6;
    if(count_block < number_blocks){
         return false; 
    } else {
         \$('.tabpro .webTab').each(function(i,n){
            \$('tabpro .webTab').addClass(i);
            if(i == number_blocks) {
            \$('#catli').append('<li class=\"view_more webTab\"><a>+ More</a></li>');
            }
            if(i> number_blocks) {
            \$(this).addClass('it_hide_wbtab_main').hide();
            }
        });
        \$('.view_more').click(function() {
            \$(this).toggleClass('active');
            \$('.it_hide_wbtab_main').slideToggle();
        });
    }
   }
   }(jQuery));
   
   \$(document).ready(function() {
   \$('.webTab').click(function(){
    \$('.webTab').addClass('active');
    \$('.webTab').removeClass('active');
   });
   });
   
</script>
<script type=\"text/javascript\">
   (function(\$){
    \$(\".tab-content .tab-pane #cattab\").owlCarousel({
    itemsCustom : [
    [0, 2],
    [400, 2],
    [600, 3],
    [768, 2],
    [992, 3],
    [1200, 3],
    [1410, 4]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : true,
      pagination:false
    });
   }(jQuery));
</script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/wbcategory_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 126,  338 => 123,  323 => 116,  317 => 115,  311 => 112,  306 => 110,  300 => 109,  297 => 108,  293 => 106,  285 => 104,  279 => 102,  277 => 101,  274 => 100,  272 => 99,  265 => 98,  261 => 96,  254 => 94,  249 => 93,  245 => 91,  239 => 90,  233 => 86,  227 => 82,  224 => 81,  220 => 80,  217 => 79,  215 => 78,  209 => 74,  203 => 73,  192 => 71,  187 => 70,  183 => 69,  173 => 68,  166 => 63,  162 => 62,  154 => 60,  151 => 59,  148 => 58,  145 => 57,  142 => 56,  139 => 55,  122 => 54,  113 => 47,  91 => 44,  88 => 43,  85 => 42,  82 => 41,  79 => 40,  77 => 39,  74 => 38,  57 => 37,  49 => 31,  47 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/wbcategory_tab.twig", "");
    }
}
