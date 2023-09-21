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

/* paybox/template/extension/module/wbocproduct.twig */
class __TwigTemplate_14c537a5fa5f9eae7a9f45b265e88906b124a084717621bcb3b83fb88fc5cd25 extends \Twig\Template
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
        // line 3
        echo "    ";
        // line 8
        echo "    <div class=\"col-md-6 col-sm-6 col-xs-12 cless timerpro count_product\">
      <div id=\"count\" class=\"owl-theme owl-carousel\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "      <div class=\"product-layout col-xs-12 cless\">
        <div class=\"product-thumb transition\">

          <div class=\"hidimg col-lg-2 col-md-4 col-sm-4 col-xs-12\">
                <div class=\"slider-for\">
                          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 17
                echo "                          
                          <div class=\"img_sli\">
                           <img src=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 19);
                echo "\" class=\"img-responsive img-thumb\" alt=\"hover image\"/>
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                </div>
          </div> 
          <div class=\"image custw col-lg-4 col-md-4 col-sm-4 col-xs-12\">
            <a href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
            echo "\">
            <img src=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
            echo "\" data-image-large-src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
            echo "\"  title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
            echo "\" class=\"img-responsive center-block js-product-cover\" /></a>
            
                          ";
            // line 28
            $context["t"] = 0;
            // line 29
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 30
                echo "                            ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 31
                    echo "                             <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 31);
                    echo "\" class=\"img-responsive second-img js-product-cover\" alt=\"hover image\"/></a>
                            ";
                    // line 32
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 33
                    echo "                            ";
                }
                // line 34
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                  
              ";
            // line 47
            echo "          </div>
         
          <div class=\"caption text-left col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <h4 class=\"protitle\"><a href=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 50);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
            echo "</a></h4>
            ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 51)) {
                // line 52
                echo "              <div class=\"rating\">
                ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 54) < $context["i"])) {
                        // line 55
                        echo "                <span class=\"fa fa-stack\">
                  <i class=\"fa fa-star-o fa-stack-2x\"></i>
                </span>
                ";
                    } else {
                        // line 59
                        echo "                <span class=\"fa fa-stack\">
                  <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                </span>
                ";
                    }
                    // line 63
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 64
                echo "              <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 65
                    echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
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
            ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69)) {
                // line 70
                echo "            <div class=\"price\">
              ";
                // line 71
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72);
                    echo "
              ";
                } else {
                    // line 74
                    echo "              <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 74);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74);
                    echo "</span>
              ";
                }
                // line 76
                echo "             ";
                // line 79
                echo "            </div>
            ";
            }
            // line 81
            echo "
            <p class=\"countdes\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 82);
            echo "</p>

            <hr>
            <div class=\"all-timer\">
              ";
            // line 87
            echo "             ";
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 87)) {
                echo "<div id=\"Countdown";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 87);
                echo "\" class=\"box-timer\"></div> ";
            }
            // line 88
            echo "
             ";
            // line 90
            echo "            </div>

            ";
            // line 99
            echo "          </div>
       ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 100)) {
                // line 101
                echo "                <script type=\"text/javascript\">
                    (function(\$){
                        \$('#Countdown";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 103);
                echo "').countdown({
                            until: new Date(";
                // line 104
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 104), "Y");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 104), "m");
                echo "-1, ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 104), "d");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 104), "H");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 104), "i");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 104), "s");
                echo "),
                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                        });
                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                   }(jQuery));
                </script>
                ";
            }
            // line 112
            echo "                </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "       </div>
    </div>
   ";
        // line 121
        echo "

<script type=\"text/javascript\">
   (function(\$){
    \$(\"#count\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320, 1],
    [400, 1],
    [600, 1],
    [768, 1],
    [992, 1],
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
<script type=\"text/javascript\">
   \$(document).ready(function() {
  \$('.slider-for').slick({
  dots: false,

  vertical: true,
  slidesToShow: 3,
    slidesToScroll: 3,
  arrows: false,
  verticalSwiping: false,
  autoplay: true,
  infinite: true,
  autoplaySpeed:5000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: \"unslick\"
    // instead of a settings object
  ]
});
    });

</script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/wbocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 121,  277 => 115,  269 => 112,  248 => 104,  244 => 103,  240 => 101,  238 => 100,  235 => 99,  231 => 90,  228 => 88,  221 => 87,  214 => 82,  211 => 81,  207 => 79,  205 => 76,  197 => 74,  191 => 72,  189 => 71,  186 => 70,  184 => 69,  181 => 68,  177 => 66,  170 => 65,  165 => 64,  157 => 63,  151 => 59,  145 => 55,  142 => 54,  138 => 53,  135 => 52,  133 => 51,  127 => 50,  122 => 47,  119 => 35,  113 => 34,  110 => 33,  108 => 32,  101 => 31,  98 => 30,  93 => 29,  91 => 28,  80 => 26,  76 => 25,  71 => 22,  62 => 19,  58 => 17,  54 => 16,  47 => 11,  43 => 10,  39 => 8,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/wbocproduct.twig", "");
    }
}
