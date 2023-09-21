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

/* paybox/template/product/special.twig */
class __TwigTemplate_d641365ab2d926dcbc69a458ae747a626afeaca01971a3216b86521bd35e35c7 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"breadbg\">
  <div class=\"container\">
    <div class=\"row\">
      <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
  </div>
</div>
</div>
<div id=\"product-manufacturer\" class=\"container cleft manucom\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
   ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9  col-xs-12 colright";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
     <div class=\"borbutt\">
      <h1 class=\"heading text-left\"><span>";
        // line 24
        echo ($context["cheading_title"] ?? null);
        echo "</span></h1>
     </div>
     <div class=\"appres\"></div>
      ";
        // line 27
        if (($context["products"] ?? null)) {
            // line 28
            echo "      <div class=\"row cate-border\">
            <div class=\"col-md-2 col-sm-3 col-xs-4 lgrid\">
                <div class=\"btn-group-sm\">
                    <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 31
            echo ($context["button_list"] ?? null);
            echo "\">
                     <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                    </button>
                    <button type=\"button\" id=\"grid-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 34
            echo ($context["button_grid"] ?? null);
            echo "\">
                       <svg width=\"18px\" height=\"18px\"><use xlink:href=\"#cgrid\"></use> </svg>
                    </button>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 hidden-md hidden-sm ct\">
                <a href=\"";
            // line 40
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 44
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  
                    <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 48
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 48) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 49
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 49);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 49);
                    echo "</option>
                            ";
                } else {
                    // line 51
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 51);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 51);
                    echo "</option>
                            ";
                }
                // line 53
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    </select>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 59
            echo ($context["text_limit"] ?? null);
            echo "</label>
                    <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 62
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 62) == ($context["limit"] ?? null))) {
                    // line 63
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 63);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 63);
                    echo "</option>
                            ";
                } else {
                    // line 65
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 65);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 65);
                    echo "</option>
                            ";
                }
                // line 67
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    </select>
                </div>
            </div>
        </div>
     <div class=\"row cpagerow rless\"> ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 73
                echo "        <div class=\"product-layout product-list col-xs-12 cless\">
          <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "\" class=\"img-responsive center-block\" /></a>
             
                        ";
                // line 77
                $context["t"] = 0;
                // line 78
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 79
                    echo "                          ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 80
                        echo "                           <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 80);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 80);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                        // line 81
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 82
                        echo "                          ";
                    }
                    // line 83
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "     

      ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 86)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 87
                echo "
        ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "        <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 89);
                    echo "%</span>
        ";
                }
                // line 91
                echo "
      ";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "               <!-- <span class=\"reduce-price\">";
                        echo ($context["pro_sale"] ?? null);
                        echo "</span> -->
          ";
                    }
                    // line 96
                    echo "      ";
                }
                // line 97
                echo "
      
      </div>
                <div class=\"caption text-left\">
                  ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 101)) {
                    // line 102
                    echo "                    <div class=\"rating\">
                      ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 104
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 104) < $context["i"])) {
                            // line 105
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        } else {
                            // line 109
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        }
                        // line 113
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "                    </div>";
                } else {
                    // line 115
                    echo "                    <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 116
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo "</div>
                  ";
                }
                // line 119
                echo "                  <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 119);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 119);
                echo "</a></h4>
                  <p class=\"catlist-des\">";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 120);
                echo "</p>
                   ";
                // line 121
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "                  <div class=\"price\">
                    ";
                    // line 123
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 123)) {
                        // line 124
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 124);
                        echo "
                    ";
                    } else {
                        // line 126
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 126);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 126);
                        echo "</span>
                    ";
                    }
                    // line 128
                    echo "                   ";
                    // line 131
                    echo "                  </div>
                  ";
                }
                // line 133
                echo "                  <div class=\"form-group homeaddq\">
                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 134
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 134);
                echo "');\">
                      <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
                // line 135
                echo ($context["button_cart"] ?? null);
                echo "</span>
                    </button>
                    <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
                // line 137
                echo ($context["atleast_cart"] ?? null);
                echo "\">
                  </div>
                  <div class=\"button-group text-center\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 140
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 141
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 141);
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
            // line 148
            echo " 
      </div>
      <div class=\"row pagi\">
        <div class=\"col-sm-6 col-xs-6 text-left\">";
            // line 151
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 col-xs-6 text-right tot\">";
            // line 152
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 155
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 156
            echo "      <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 158
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 161
        echo "     </div>
    ";
        // line 162
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
 ";
        // line 164
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 165
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "paybox/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 165,  478 => 164,  473 => 162,  470 => 161,  462 => 158,  456 => 156,  453 => 155,  447 => 152,  443 => 151,  438 => 148,  422 => 141,  416 => 140,  410 => 137,  405 => 135,  399 => 134,  396 => 133,  392 => 131,  390 => 128,  382 => 126,  376 => 124,  374 => 123,  371 => 122,  369 => 121,  365 => 120,  358 => 119,  354 => 117,  347 => 116,  342 => 115,  339 => 114,  333 => 113,  327 => 109,  321 => 105,  318 => 104,  314 => 103,  311 => 102,  309 => 101,  303 => 97,  300 => 96,  294 => 94,  291 => 93,  289 => 92,  286 => 91,  280 => 89,  278 => 88,  275 => 87,  269 => 86,  265 => 84,  259 => 83,  256 => 82,  254 => 81,  247 => 80,  244 => 79,  239 => 78,  237 => 77,  226 => 75,  222 => 73,  218 => 72,  212 => 68,  206 => 67,  198 => 65,  190 => 63,  187 => 62,  183 => 61,  178 => 59,  171 => 54,  165 => 53,  157 => 51,  149 => 49,  146 => 48,  142 => 47,  136 => 44,  127 => 40,  118 => 34,  112 => 31,  107 => 28,  105 => 27,  99 => 24,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  67 => 14,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/product/special.twig", "");
    }
}
