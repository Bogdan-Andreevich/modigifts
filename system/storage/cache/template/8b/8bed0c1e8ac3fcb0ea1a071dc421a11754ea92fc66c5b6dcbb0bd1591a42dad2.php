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

/* paybox/template/product/product.twig */
class __TwigTemplate_356d1641abe5377fb6cb7c663dc93573aa5033d6bc45a36bfa90d58787b7d549 extends \Twig\Template
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
  <div class=\"container\">
    <div class=\"row\">
      <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
  </div>
</div>
<div id=\"product-product\" class=\"container\">

  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12 col-md-9 col-xs-12";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo " marpro\">";
        echo ($context["content_top"] ?? null);
        echo "
       <div class=\"productbg\">
        <div class=\"pro-wid\">
          <div class=\"row\">
            ";
        // line 26
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "            ";
            $context["class"] = "col-sm-6 col-lg-5 col-md-6 col-xs-12 proimg sticky";
            // line 28
            echo "            ";
        } else {
            // line 29
            echo "            ";
            $context["class"] = "col-sm-6 col-lg-5 col-md-6 col-xs-12 proimg sticky";
            // line 30
            echo "            ";
        }
        // line 31
        echo "            <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
            ";
        // line 32
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 33
            echo "                            <ul class=\"thumbnails\">
                                ";
            // line 34
            if (($context["thumb"] ?? null)) {
                // line 35
                echo "                                <li><a class=\"thumbnail\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                                        <img data-zoom-image=\"";
                // line 36
                echo ($context["popup"] ?? null);
                echo "\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" id=\"zoom_03\" class=\"img-responsive center-block\" alt=\"image\">
                                    </a>
                                </li>
                                ";
            }
            // line 40
            echo "                                ";
            if (($context["images"] ?? null)) {
                // line 41
                echo "                                <div class=\"row\">
                                <li id=\"gallery_01\" class=\"owl-carousel\">
                                    ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 44
                    echo "                                    <a data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 44);
                    echo "\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 44);
                    echo "\"  href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 44);
                    echo "\" class=\"col-xs-12\">
                                        <img src=\"";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 45);
                    echo "\" class=\"img-responsive center-block\" alt=\"additional image\">
                                    </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                </li>
                                </div>
                                ";
            }
            // line 51
            echo "                            </ul>
              ";
        }
        // line 53
        echo "            </div>
            ";
        // line 54
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 55
            echo "            ";
            $context["class"] = "col-lg-7 col-md-6 col-xs-12 col-sm-6";
            // line 56
            echo "            ";
        } else {
            // line 57
            echo "            ";
            $context["class"] = "col-lg-7 col-md-6 col-xs-12 col-sm-6";
            // line 58
            echo "            ";
        }
        // line 59
        echo "
            <div class=\"";
        // line 60
        echo ($context["class"] ?? null);
        echo " pro-content\">
              <h1>";
        // line 61
        echo ($context["heading_title"] ?? null);
        echo "</h1><hr class=\"producthr\">
                <div>";
        // line 62
        echo ($context["description"] ?? null);
        echo "</div>
                <hr class=\"producthr\">
              <ul class=\"list-unstyled\">
                ";
        // line 65
        if (($context["manufacturer"] ?? null)) {
            // line 66
            echo "                <li><span class=\"text-decor\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"textdeb\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 68
        echo "                <li><span class=\"text-decor\">";
        echo ($context["text_model"] ?? null);
        echo "</span> ";
        echo ($context["model"] ?? null);
        echo "</li>
                ";
        // line 69
        if (($context["reward"] ?? null)) {
            // line 70
            echo "                <li><span class=\"text-decor\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> ";
            echo ($context["reward"] ?? null);
            echo "</li>
                ";
        }
        // line 72
        echo "                <li><span class=\"text-decor\">";
        echo ($context["text_stock"] ?? null);
        echo "</span> ";
        echo ($context["stock"] ?? null);
        echo "</li>
                <hr class=\"producthr\">
              </ul>
              ";
        // line 75
        if (($context["price"] ?? null)) {
            // line 76
            echo "              <ul class=\"list-unstyled\">
                ";
            // line 77
            if ( !($context["special"] ?? null)) {
                // line 78
                echo "                <li class=\"text-decor-bold\">
                  <h2 class=\"pro-price\">";
                // line 79
                echo ($context["price"] ?? null);
                echo "</h2>
                </li>
                ";
            } else {
                // line 82
                echo "                <ul class=\"list-inline\">
                <li class=\"text-decor-bold\">
                  <h2>";
                // line 84
                echo ($context["special"] ?? null);
                echo "</h2>
                </li>
                <li><span class=\"price-old\">";
                // line 86
                echo ($context["price"] ?? null);
                echo "</span></li></ul>
                ";
            }
            // line 88
            echo "                <!-- ";
            if (($context["tax"] ?? null)) {
                // line 89
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                ";
            }
            // line 90
            echo " -->
                ";
            // line 91
            if (($context["points"] ?? null)) {
                // line 92
                echo "                <li class=\"text-decor-bold\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                ";
            }
            // line 94
            echo "                ";
            if (($context["discounts"] ?? null)) {
                // line 95
                echo "                <li>
                  <hr class=\"producthr\">
                </li>
                ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 99
                    echo "                <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 99);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 99);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                ";
            }
            // line 102
            echo "              </ul>
              ";
        }
        // line 104
        echo "              <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 105
            echo "                <hr class=\"producthr\">
                <h3>";
            // line 106
            echo ($context["text_option"] ?? null);
            echo "</h3>
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 108
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 108) == "select")) {
                    // line 109
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 109)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 110);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 110);
                    echo "</label>
                  <select name=\"option[";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 112
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 113));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 114
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 114);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 114);
                        echo "
                    ";
                        // line 115
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 115)) {
                            // line 116
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 116);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 116);
                            echo ")
                    ";
                        }
                        // line 117
                        echo " </option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                  </select>
                </div>
                ";
                }
                // line 122
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 122) == "radio")) {
                    // line 123
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 123)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 124);
                    echo "</label>
                  <div id=\"input-option";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                    echo "\" class=\"custom-radio\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 125));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 126
                        echo "                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"option[";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        echo "\" />
                        ";
                        // line 129
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 129)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 129);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 129);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 130
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 130);
                        echo "
                        ";
                        // line 131
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 131)) {
                            // line 132
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 132);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132);
                            echo ")
                        ";
                        }
                        // line 133
                        echo " </label>
                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo " </div>
                </div>
                ";
                }
                // line 138
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 138) == "checkbox")) {
                    // line 139
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 139)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 140);
                    echo "</label>
                  <div id=\"input-option";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 141));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 142
                        echo "                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" name=\"option[";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 144);
                        echo "\" />
                        ";
                        // line 145
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 145)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 145);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 145);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 145);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 146
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 146);
                        echo "
                        ";
                        // line 147
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 147)) {
                            // line 148
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 148);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 148);
                            echo ")
                        ";
                        }
                        // line 149
                        echo " </label>
                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo " </div>
                </div>
                ";
                }
                // line 154
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 154) == "text")) {
                    // line 155
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 155)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 156);
                    echo "</label>
                  <input type=\"text\" name=\"option[";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 157);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 157);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    echo "\" class=\"form-control\" />
                </div>
                ";
                }
                // line 160
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 160) == "textarea")) {
                    // line 161
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 161)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    echo "</label>
                  <textarea name=\"option[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 163);
                    echo "</textarea>
                </div>
                ";
                }
                // line 166
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 166) == "file")) {
                    // line 167
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 167)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 168);
                    echo "</label>
                  <button type=\"button\" id=\"button-upload";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btnup btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                  <input type=\"hidden\" name=\"option[";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    echo "\" />
                </div>
                ";
                }
                // line 173
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 173) == "date")) {
                    // line 174
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 174)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 175);
                    echo "</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"option[";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 177);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button class=\"btn datebtn\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 183
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 183) == "datetime")) {
                    // line 184
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 184)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 185);
                    echo "</label>
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"option[";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 187);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 193
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 193) == "time")) {
                    // line 194
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 194)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 195);
                    echo "</label>
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"option[";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 197);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 203
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                
                ";
        }
        // line 206
        echo "                ";
        if (($context["recurrings"] ?? null)) {
            // line 207
            echo "                
                <h3>";
            // line 208
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                <div class=\"form-group required\">
                  <select name=\"recurring_id\" class=\"form-control\">
                    <option value=\"\">";
            // line 211
            echo ($context["text_select"] ?? null);
            echo "</option>
                    ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 213
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 213);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 213);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                  </select>
                  <div class=\"help-block\" id=\"recurring-description\"></div>
                </div>
                ";
        }
        // line 219
        echo "                <hr class=\"producthr\">
                <!-- Quantity option -->
                <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-md-3 col-xs-3 col-lg-2 op-box qtlabel\">
                        <label class=\"control-label text-decorop\" for=\"input-quantity\">";
        // line 224
        echo ($context["entry_qty"] ?? null);
        echo " :</label>
                    </div>
                  <div class=\"col-md-9 col-sm-9 col-xs-9 col-lg-10 op-box qty-plus-minus\">
                  <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\">
                      <span class=\"glyphicon glyphicon-minus\"></span>
                   </button>
                  <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
        // line 230
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 231
        echo ($context["product_id"] ?? null);
        echo "\" />
                   <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\">
                      <span class=\"glyphicon glyphicon-plus\"></span>
                   </button>
                   </div>
                   </div><hr class=\"producthr\">
                  <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 237
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn pcrt add-to-cart btn-primary\"><svg><use xlink:href=\"#pcart\"></use></svg> ";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                 <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 238
        echo ($context["button_wishlist"] ?? null);
        echo "\" class=\"btn pcrt btn-primary\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#heart\" /></svg></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 239
        echo ($context["button_compare"] ?? null);
        echo "\" class=\"btn pcrt  btn-primary\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\" ><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#compare\"/></svg></button>
                  <hr class=\"producthr\">
                </div>
                <!-- Quantity option end -->
                ";
        // line 243
        if ((($context["minimum"] ?? null) > 1)) {
            // line 244
            echo "                <div class=\"alert alert-info palert\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 245
        echo "</div>
              ";
        // line 246
        if (($context["review_status"] ?? null)) {
            // line 247
            echo "              <div class=\"rating\">
                <li>";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 249
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 250
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </li>
                  <li class=\"proreview\">
                    <a id=\"ratecount\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 252
            echo ($context["reviews"] ?? null);
            echo "</a>
                  </li>
                  <li>
                    <a id=\"ratep\" href=\"#rt\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 255
            echo ($context["text_write"] ?? null);
            echo "</a>
                  </li>
                <hr class=\"producthr\">
                 <!-- AddToAny BEGIN -->
                            <div class=\"a2a_kit a2a_kit_size_32 a2a_default_style\">
                                <a class=\"a2a_button_facebook\"></a>
                                <a class=\"a2a_button_twitter\"></a>
                                <a class=\"a2a_button_google_plus\"></a>
                                <a class=\"a2a_button_pinterest\"></a>
                                <a class=\"a2a_button_linkedin\"></a>
                                <a class=\"a2a_dd\" href=\"https://www.addtoany.com/share\"></a>
                            </div>
                            <script async src=\"https://static.addtoany.com/menu/page.js\"></script>
                <!-- AddToAny END -->
              </div>

              ";
        }
        // line 271
        echo " </div>
          </div>
        </div>
<div class=\"product-tab\">
      <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 276
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 277
        if (($context["attribute_groups"] ?? null)) {
            // line 278
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 280
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 281
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 283
        echo "          </ul>
          <div class=\"tab-content\">
";
        // line 286
        echo "            ";
        if (($context["attribute_groups"] ?? null)) {
            // line 287
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 289
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 290
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 292
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 292);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 296
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 296));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 297
                    echo "                <tr>
                  <td>";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 298);
                    echo "</td>
                  <td>";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 299);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 302
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "              </table>
            </div>
            ";
        }
        // line 307
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 308
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2 class=\"co-heading\">";
            // line 311
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 312
            if (($context["review_guest"] ?? null)) {
                // line 313
                echo "                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 315
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 316
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 321
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <!-- <div class=\"help-block\">";
                // line 323
                echo ($context["text_note"] ?? null);
                echo "</div> -->
                  </div>
                </div>
                <div class=\"form-group required\">

                  <div class=\"radi\">
                                          <label class=\"control-label\" for=\"input-review\">";
                // line 329
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                  <div class=\"form-rating\">

                      <div class=\"form-rating-container pull-left\">
                        <input id=\"rating-5\" type=\"radio\" name=\"rating\" value=\"5\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-5\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-4\" type=\"radio\" name=\"rating\" value=\"4\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-4\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-3\" type=\"radio\" name=\"rating\" value=\"3\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-3\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-2\" type=\"radio\" name=\"rating\" value=\"2\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-2\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-1\" type=\"radio\" name=\"rating\" value=\"1\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-1\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                      </div>
                    </div></div>
                </div>

                ";
                // line 362
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 365
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 369
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 371
            echo "              </form>
            </div>
            ";
        }
        // line 373
        echo "</div>
            </div>
<!-- relatedproduct -->
      ";
        // line 376
        if (($context["products"] ?? null)) {
            // line 377
            echo "      <div class=\"relpro\">
      <div class=\"borbutt\">
        <h1 class=\"heading text-left\"><span>";
            // line 379
            echo ($context["text_related"] ?? null);
            echo "</span></h1>
      </div>
      <div class=\"row xspspace rless\">
        <div id=\"related\" class=\"owl-carousel owl-theme\">
       ";
            // line 383
            $context["i"] = 0;
            // line 384
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 385
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 386
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 387
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 388
                    echo "        ";
                    $context["class"] = "col-xs-12";
                    // line 389
                    echo "        ";
                } else {
                    // line 390
                    echo "        ";
                    $context["class"] = "col-xs-12 col-sm-12";
                    // line 391
                    echo "        ";
                }
                // line 392
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo " product-layout cless\">
         <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 394
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 394);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 394);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 394);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 394);
                echo "\" class=\"img-responsive center-block\" /></a>

      ";
                // line 396
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 396)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 397
                echo "
          ";
                // line 398
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 398)) {
                    // line 399
                    echo "        <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 399);
                    echo "%</span>
        ";
                }
                // line 401
                echo "
        ";
                // line 402
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 402)) {
                    // line 403
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 403)) {
                        // line 404
                        echo "               <!-- <span class=\"reduce-price\">";
                        echo ($context["pro_sale"] ?? null);
                        echo "</span> -->
          ";
                    }
                    // line 406
                    echo "      ";
                }
                // line 407
                echo "

      </div>
              <div class=\"caption text-left\">
                  ";
                // line 411
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 411)) {
                    // line 412
                    echo "                    <div class=\"rating\">
                      ";
                    // line 413
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 414
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 414) < $context["i"])) {
                            // line 415
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        } else {
                            // line 419
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        }
                        // line 423
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 424
                    echo "                    </div>";
                } else {
                    // line 425
                    echo "                    <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 426
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 427
                    echo "</div>
                  ";
                }
                // line 429
                echo "                  <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 429);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 429);
                echo "</a></h4>
                   ";
                // line 430
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 430)) {
                    // line 431
                    echo "                  <div class=\"price\">
                    ";
                    // line 432
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 432)) {
                        // line 433
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 433);
                        echo "
                    ";
                    } else {
                        // line 435
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 435);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 435);
                        echo "</span>
                    ";
                    }
                    // line 437
                    echo "                   ";
                    // line 440
                    echo "                  </div>
                  ";
                }
                // line 442
                echo "                  <div class=\"form-group homeaddq\">
                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 443
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 443);
                echo "');\">
                      <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
                // line 444
                echo ($context["button_cart"] ?? null);
                echo "</span>
                    </button>
                    <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
                // line 446
                echo ($context["atleast_cart"] ?? null);
                echo "\">
                  </div>
                  <div class=\"button-group text-center\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 449
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 449);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 450
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 450);
                echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
                    <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
                  </div>
              </div>

    </div>
        </div>
        <!-- ";
                // line 457
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 458
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 459
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 460
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 461
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 462
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 463
                echo " -->
        ";
                // line 464
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 465
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            echo "        </div>
      </div>
    </div>
        ";
        }
        // line 470
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 471
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 472
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 473
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 473);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 473);
                    echo "</a>,
        ";
                } else {
                    // line 474
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 474);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 474);
                    echo "</a> ";
                }
                // line 475
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 477
        echo "      </div></div>
    ";
        // line 478
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart').button('loading');
    },
    complete: function() {
      \$('#button-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        \$('#content').parent().before('<div class=\"a-one\"><div class=\"alert alert-success alert-dismissible alertsuc\"><svg width=\"20px\" height=\"20px\"> <use xlink:href=\"#successi\"></use> </svg> ' + json.success + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div></div>');
                    
                    setTimeout(function() {
                        \$('#cart > button').html('<div class=\"ussvg\"><svg><use xlink:href=\"#hcart\"></use></svg></div><span id=\"cart-total\" class=\"hdis text-left\">' + json['total'] + '</span>')
                    }, 100);
                    \$('.a-one').delay(5000).fadeOut();
                    \$('#cart > ul').load('index.php?route=common/cart/info ul li')
                    \$(\"button.close\").click(function() {
                        \$(\".a-one\").remove();
                    })

      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
  });
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 560
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 565
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 571
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script>
<!--for product quantity plus minus-->
<script type=\"text/javascript\">
    //plugin bootstrap minus and plus
    \$(document).ready(function() {
    \$('.btn-number').click(function(e){
    e.preventDefault();
    var fieldName = \$(this).attr('data-field');
    var type = \$(this).attr('data-type');
    var input = \$(\"input[name='\" + fieldName + \"']\");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
    if (type == 'minus') {
    var minValue = parseInt(input.attr('min'));
    if (!minValue) minValue = 1;
    if (currentVal > minValue) {
    input.val(currentVal - 1).change();
    }
    if (parseInt(input.val()) == minValue) {
    \$(this).attr('disabled', true);
    }

    } else if (type == 'plus') {
    var maxValue = parseInt(input.attr('max'));
    if (!maxValue) maxValue = 999;
    if (currentVal < maxValue) {
    input.val(currentVal + 1).change();
    }
    if (parseInt(input.val()) == maxValue) {
    \$(this).attr('disabled', true);
    }

    }
    } else {
    input.val(0);
    }
    });
    \$('.input-number').focusin(function(){
    \$(this).data('oldValue', \$(this).val());
    });
    \$('.input-number').change(function() {

    var minValue = parseInt(\$(this).attr('min'));
    var maxValue = parseInt(\$(this).attr('max'));
    if (!minValue) minValue = 1;
    if (!maxValue) maxValue = 999;
    var valueCurrent = parseInt(\$(this).val());
    var name = \$(this).attr('name');
    if (valueCurrent >= minValue) {
    \$(\".btn-number[data-type='minus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the minimum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
    \$(\".btn-number[data-type='plus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the maximum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    });
    \$(\".input-number\").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
            // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
            }
            });
    });
</script>

<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 716
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 720
        echo ($context["product_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});

\$(document).ready(function() {
  \$('.thumbnails').magnificPopup({
    type:'image',
    delegate: 'a',
    gallery: {
      enabled: true
    }
  });
});
//--></script>
<!-- related -->
<script type=\"text/javascript\">
    (function(\$){
    \$(\"#related\").owlCarousel({
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
<!-- related over -->
<!-- zoom product start -->
<!-- zoom product start -->
<script>
     if (jQuery(window).width() >= 1200){
        //initiate the plugin and pass the id of the div containing gallery images
            \$(\"#zoom_03\").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: ''});
        //pass the images to Fancybox
            \$(\"#zoom_03\").bind(\"click\", function (e) {
            var ez = \$('#zoom_03').data('elevateZoom');
            \$.fancybox(ez.getGalleryList());
            return false;
            });
    }
</script>
<!--ZOOM END-->

<!--slider for product-->
<script type=\"text/javascript\"><!--
\$('#gallery_01').owlCarousel({
  itemsCustom : [
        [0, 2],
        [320, 3],
        [600, 4],
        [768, 3],
        [992, 4],
        [1200, 4],
        [1410, 4]
        ],
   autoPlay: 1000,
  autoPlay: true,
  navigation: false,
  navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
  pagination: false
});
--></script>
<!--over slider for product-->

";
        // line 816
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 817
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "paybox/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1741 => 817,  1737 => 816,  1638 => 720,  1631 => 716,  1483 => 571,  1474 => 565,  1466 => 560,  1381 => 478,  1378 => 477,  1369 => 475,  1362 => 474,  1352 => 473,  1348 => 472,  1343 => 471,  1340 => 470,  1334 => 466,  1328 => 465,  1326 => 464,  1323 => 463,  1319 => 462,  1317 => 461,  1314 => 460,  1312 => 459,  1309 => 458,  1307 => 457,  1295 => 450,  1289 => 449,  1283 => 446,  1278 => 444,  1272 => 443,  1269 => 442,  1265 => 440,  1263 => 437,  1255 => 435,  1249 => 433,  1247 => 432,  1244 => 431,  1242 => 430,  1235 => 429,  1231 => 427,  1224 => 426,  1219 => 425,  1216 => 424,  1210 => 423,  1204 => 419,  1198 => 415,  1195 => 414,  1191 => 413,  1188 => 412,  1186 => 411,  1180 => 407,  1177 => 406,  1171 => 404,  1168 => 403,  1166 => 402,  1163 => 401,  1157 => 399,  1155 => 398,  1152 => 397,  1146 => 396,  1135 => 394,  1129 => 392,  1126 => 391,  1123 => 390,  1120 => 389,  1117 => 388,  1114 => 387,  1111 => 386,  1108 => 385,  1103 => 384,  1101 => 383,  1094 => 379,  1090 => 377,  1088 => 376,  1083 => 373,  1078 => 371,  1072 => 369,  1063 => 365,  1057 => 362,  1021 => 329,  1012 => 323,  1007 => 321,  999 => 316,  995 => 315,  991 => 313,  989 => 312,  985 => 311,  980 => 308,  977 => 307,  972 => 304,  965 => 302,  956 => 299,  952 => 298,  949 => 297,  945 => 296,  938 => 292,  934 => 290,  930 => 289,  926 => 287,  923 => 286,  919 => 283,  913 => 281,  910 => 280,  904 => 278,  902 => 277,  898 => 276,  891 => 271,  871 => 255,  865 => 252,  856 => 250,  849 => 249,  845 => 248,  842 => 247,  840 => 246,  837 => 245,  831 => 244,  829 => 243,  820 => 239,  814 => 238,  808 => 237,  799 => 231,  795 => 230,  786 => 224,  779 => 219,  773 => 215,  762 => 213,  758 => 212,  754 => 211,  748 => 208,  745 => 207,  742 => 206,  738 => 204,  732 => 203,  719 => 197,  712 => 195,  705 => 194,  702 => 193,  689 => 187,  682 => 185,  675 => 184,  672 => 183,  659 => 177,  652 => 175,  645 => 174,  642 => 173,  634 => 170,  626 => 169,  622 => 168,  615 => 167,  612 => 166,  600 => 163,  594 => 162,  587 => 161,  584 => 160,  572 => 157,  566 => 156,  559 => 155,  556 => 154,  551 => 151,  543 => 149,  536 => 148,  534 => 147,  529 => 146,  513 => 145,  507 => 144,  503 => 142,  497 => 141,  493 => 140,  486 => 139,  483 => 138,  478 => 135,  470 => 133,  463 => 132,  461 => 131,  456 => 130,  440 => 129,  434 => 128,  430 => 126,  424 => 125,  420 => 124,  413 => 123,  410 => 122,  405 => 119,  398 => 117,  391 => 116,  389 => 115,  382 => 114,  378 => 113,  374 => 112,  368 => 111,  362 => 110,  355 => 109,  352 => 108,  348 => 107,  344 => 106,  341 => 105,  338 => 104,  334 => 102,  331 => 101,  320 => 99,  316 => 98,  311 => 95,  308 => 94,  300 => 92,  298 => 91,  295 => 90,  287 => 89,  284 => 88,  279 => 86,  274 => 84,  270 => 82,  264 => 79,  261 => 78,  259 => 77,  256 => 76,  254 => 75,  245 => 72,  237 => 70,  235 => 69,  228 => 68,  218 => 66,  216 => 65,  210 => 62,  206 => 61,  202 => 60,  199 => 59,  196 => 58,  193 => 57,  190 => 56,  187 => 55,  185 => 54,  182 => 53,  178 => 51,  173 => 48,  164 => 45,  155 => 44,  151 => 43,  147 => 41,  144 => 40,  135 => 36,  128 => 35,  126 => 34,  123 => 33,  121 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  102 => 26,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/product/product.twig", "");
    }
}
