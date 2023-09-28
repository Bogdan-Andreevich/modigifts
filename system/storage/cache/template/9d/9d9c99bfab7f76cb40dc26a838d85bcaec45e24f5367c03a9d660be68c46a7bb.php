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

/* paybox/template/product/categories.twig */
class __TwigTemplate_23101fd6e2cc23775b4872f5bd4266ad547de6ea74af29c62930d41b26f48667 extends \Twig\Template
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
<div id=\"product-category\" class=\"container cleft\">
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
            $context["class"] = "col-sm-12 col-md-9  col-xs-12 colright";
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
      ";
        // line 23
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 24
            echo "      <div class=\"cate-top hidden-xs\"> 
         <h2>";
            // line 25
            echo ($context["heading_title"] ?? null);
            echo "</h2>
         <div class=\"row\">
            <div class=\"col-lg-2 col-md-3 col-sm-3\">
              ";
            // line 28
            if (($context["thumb"] ?? null)) {
                // line 29
                echo "              <img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive center-block\" />
            ";
            }
            // line 31
            echo "            </div>
            <div class=\"col-lg-10 col-md-9 col-sm-9 col-xs-12 catedes\">
             ";
            // line 33
            if (($context["description"] ?? null)) {
                // line 34
                echo "              ";
                echo ($context["description"] ?? null);
                echo "
            ";
            }
            // line 36
            echo "            </div>
         </div>
      </div>
      ";
        }
        // line 40
        echo "
      <div class=\"appres\"></div>
      ";
        // line 42
        if ((($context["categories"] ?? null) && ($context["products"] ?? null))) {
            // line 43
            echo "    <div class=\"refines\">
      <h3>";
            // line 44
            echo ($context["text_refine"] ?? null);
            echo "</h3>
      ";
            // line 45
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 46
                echo "          <ul class=\"list-unstyled list-inline\">
            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 48
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 48);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "          </ul>
      ";
            } else {
                // line 52
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 53
                    echo "          <ul class=\"list-unstyled list-inline\">
            ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 55
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 55);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 55);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "          </ul>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "      ";
            }
            // line 60
            echo "    </div>
    ";
        }
        // line 62
        echo "    
      ";
        // line 63
        if (($context["products"] ?? null)) {
            // line 64
            echo "      <div class=\"row cate-border\">
            <div class=\"col-md-2 col-sm-3 col-xs-4 lgrid\">
                <div class=\"btn-group-sm\">
                    <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 67
            echo ($context["button_list"] ?? null);
            echo "\">
                     <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                    </button>
                    <button type=\"button\" id=\"grid-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 70
            echo ($context["button_grid"] ?? null);
            echo "\">
                       <svg width=\"18px\" height=\"18px\"><use xlink:href=\"#cgrid\"></use> </svg>
                    </button>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 hidden-md hidden-sm ct\">
                <a href=\"";
            // line 76
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 80
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  
                    <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 84
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 84) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 85
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 85);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 85);
                    echo "</option>
                            ";
                } else {
                    // line 87
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 87);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 87);
                    echo "</option>
                            ";
                }
                // line 89
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                    </select>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 95
            echo ($context["text_limit"] ?? null);
            echo "</label>
                    <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 98
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 98) == ($context["limit"] ?? null))) {
                    // line 99
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 99);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 99);
                    echo "</option>
                            ";
                } else {
                    // line 101
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 101);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 101);
                    echo "</option>
                            ";
                }
                // line 103
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                    </select>
                </div>
            </div>
        </div>
      <div class=\"row cpagerow rless\"> ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 109
                echo "        <div class=\"product-layout product-list col-xs-12 cless\">
          <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 111);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 111);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                echo "\" class=\"img-responsive center-block\" /></a>
               
                        ";
                // line 113
                $context["t"] = 0;
                // line 114
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 114));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 115
                    echo "                          ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 116
                        echo "                           <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 116);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                        // line 117
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 118
                        echo "                          ";
                    }
                    // line 119
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "        
       
       ";
                // line 122
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 122)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 123
                echo "
          ";
                // line 124
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "        <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 125);
                    echo "%</span>
        ";
                }
                // line 127
                echo "
        ";
                // line 128
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 128)) {
                    // line 129
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 129)) {
                        // line 130
                        echo "              <!--  <span class=\"reduce-price\">";
                        echo ($context["pro_sale"] ?? null);
                        echo "</span> -->
          ";
                    }
                    // line 132
                    echo "      ";
                }
                // line 133
                echo "
      
      </div>

                <div class=\"caption text-left\">
                  ";
                // line 138
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 138)) {
                    // line 139
                    echo "                    <div class=\"rating\">
                      ";
                    // line 140
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 141
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 141) < $context["i"])) {
                            // line 142
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        } else {
                            // line 146
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        }
                        // line 150
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                    </div>";
                } else {
                    // line 152
                    echo "                    <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 153
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "</div>
                  ";
                }
                // line 156
                echo "                  <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 156);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 156);
                echo "</a></h4>
                  <p class=\"catlist-des\">";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 157);
                echo "</p>
                   ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "                  <div class=\"price\">
                    ";
                    // line 160
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 160)) {
                        // line 161
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 161);
                        echo "
                    ";
                    } else {
                        // line 163
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 163);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163);
                        echo "</span>
                    ";
                    }
                    // line 165
                    echo "                   ";
                    // line 168
                    echo "                  </div>
                  ";
                }
                // line 170
                echo "                  <div class=\"form-group homeaddq\">
                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 171
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 171);
                echo "');\">
                      <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
                // line 172
                echo ($context["button_cart"] ?? null);
                echo "</span>
                    </button>
                    <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
                // line 174
                echo ($context["atleast_cart"] ?? null);
                echo "\">
                  </div>
                  <div class=\"button-group text-center\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 177
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 177);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 178
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 178);
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
            // line 187
            echo " </div>
      <div class=\"row pagi\">
        <div class=\"col-sm-6 col-xs-6 text-left\">";
            // line 189
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 col-xs-6 text-right tot\">";
            // line 190
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 193
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 194
            echo "      <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 196
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 199
        echo "      </div>
    ";
        // line 200
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 202
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 203
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "paybox/template/product/categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 203,  591 => 202,  586 => 200,  583 => 199,  575 => 196,  569 => 194,  566 => 193,  560 => 190,  556 => 189,  552 => 187,  534 => 178,  528 => 177,  522 => 174,  517 => 172,  511 => 171,  508 => 170,  504 => 168,  502 => 165,  494 => 163,  488 => 161,  486 => 160,  483 => 159,  481 => 158,  477 => 157,  470 => 156,  466 => 154,  459 => 153,  454 => 152,  451 => 151,  445 => 150,  439 => 146,  433 => 142,  430 => 141,  426 => 140,  423 => 139,  421 => 138,  414 => 133,  411 => 132,  405 => 130,  402 => 129,  400 => 128,  397 => 127,  391 => 125,  389 => 124,  386 => 123,  380 => 122,  376 => 120,  370 => 119,  367 => 118,  365 => 117,  358 => 116,  355 => 115,  350 => 114,  348 => 113,  337 => 111,  333 => 109,  329 => 108,  323 => 104,  317 => 103,  309 => 101,  301 => 99,  298 => 98,  294 => 97,  289 => 95,  282 => 90,  276 => 89,  268 => 87,  260 => 85,  257 => 84,  253 => 83,  247 => 80,  238 => 76,  229 => 70,  223 => 67,  218 => 64,  216 => 63,  213 => 62,  209 => 60,  206 => 59,  199 => 57,  188 => 55,  184 => 54,  181 => 53,  176 => 52,  172 => 50,  161 => 48,  157 => 47,  154 => 46,  152 => 45,  148 => 44,  145 => 43,  143 => 42,  139 => 40,  133 => 36,  127 => 34,  125 => 33,  121 => 31,  111 => 29,  109 => 28,  103 => 25,  100 => 24,  98 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  67 => 14,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/product/categories.twig", "");
    }
}
