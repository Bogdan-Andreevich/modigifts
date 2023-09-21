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
class __TwigTemplate_800c22b7e0542dce87f980af280832479b77854298b5f21a57448e1d0915212a extends \Twig\Template
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
        echo "            <div class=\"";
        echo ($context["class"] ?? null);
        echo " pro-content\">
              <h1>";
        // line 60
        echo ($context["heading_title"] ?? null);
        echo "</h1><hr class=\"producthr\">
              <ul class=\"list-unstyled\">
                ";
        // line 62
        if (($context["manufacturer"] ?? null)) {
            // line 63
            echo "                <li><span class=\"text-decor\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"textdeb\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 65
        echo "                <li><span class=\"text-decor\">";
        echo ($context["text_model"] ?? null);
        echo "</span> ";
        echo ($context["model"] ?? null);
        echo "</li>
                ";
        // line 66
        if (($context["reward"] ?? null)) {
            // line 67
            echo "                <li><span class=\"text-decor\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> ";
            echo ($context["reward"] ?? null);
            echo "</li>
                ";
        }
        // line 69
        echo "                <li><span class=\"text-decor\">";
        echo ($context["text_stock"] ?? null);
        echo "</span> ";
        echo ($context["stock"] ?? null);
        echo "</li>
                <hr class=\"producthr\">
              </ul>
              ";
        // line 72
        if (($context["price"] ?? null)) {
            // line 73
            echo "              <ul class=\"list-unstyled\">
                ";
            // line 74
            if ( !($context["special"] ?? null)) {
                // line 75
                echo "                <li class=\"text-decor-bold\">
                  <h2 class=\"pro-price\">";
                // line 76
                echo ($context["price"] ?? null);
                echo "</h2>
                </li>
                ";
            } else {
                // line 79
                echo "                <ul class=\"list-inline\">
                <li class=\"text-decor-bold\">
                  <h2>";
                // line 81
                echo ($context["special"] ?? null);
                echo "</h2>
                </li>
                <li><span class=\"price-old\">";
                // line 83
                echo ($context["price"] ?? null);
                echo "</span></li></ul>
                ";
            }
            // line 85
            echo "                <!-- ";
            if (($context["tax"] ?? null)) {
                // line 86
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                ";
            }
            // line 87
            echo " -->
                ";
            // line 88
            if (($context["points"] ?? null)) {
                // line 89
                echo "                <li class=\"text-decor-bold\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                ";
            }
            // line 91
            echo "                ";
            if (($context["discounts"] ?? null)) {
                // line 92
                echo "                <li>
                  <hr class=\"producthr\">
                </li>
                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 96
                    echo "                <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 96);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 96);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                ";
            }
            // line 99
            echo "              </ul>
              ";
        }
        // line 101
        echo "              <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 102
            echo "                <hr class=\"producthr\">
                <h3>";
            // line 103
            echo ($context["text_option"] ?? null);
            echo "</h3>
                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 105
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 105) == "select")) {
                    // line 106
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 106)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 107);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 107);
                    echo "</label>
                  <select name=\"option[";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 109
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 110));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 111
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 111);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 111);
                        echo "
                    ";
                        // line 112
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 112)) {
                            // line 113
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 113);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113);
                            echo ")
                    ";
                        }
                        // line 114
                        echo " </option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "                  </select>
                </div>
                ";
                }
                // line 119
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 119) == "radio")) {
                    // line 120
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 120)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 121);
                    echo "</label>
                  <div id=\"input-option";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 122);
                    echo "\" class=\"custom-radio\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 122));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 123
                        echo "                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"option[";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 125);
                        echo "\" />
                        ";
                        // line 126
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 126)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 126);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 126);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 126);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 127
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 127);
                        echo "
                        ";
                        // line 128
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 128)) {
                            // line 129
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 129);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129);
                            echo ")
                        ";
                        }
                        // line 130
                        echo " </label>
                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo " </div>
                </div>
                ";
                }
                // line 135
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 135) == "checkbox")) {
                    // line 136
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 136)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 137);
                    echo "</label>
                  <div id=\"input-option";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 138);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 138));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 139
                        echo "                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" name=\"option[";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 141);
                        echo "\" />
                        ";
                        // line 142
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 142)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 142);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 142);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 143
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 143);
                        echo "
                        ";
                        // line 144
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144)) {
                            // line 145
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 145);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145);
                            echo ")
                        ";
                        }
                        // line 146
                        echo " </label>
                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo " </div>
                </div>
                ";
                }
                // line 151
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 151) == "text")) {
                    // line 152
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 152)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153);
                    echo "</label>
                  <input type=\"text\" name=\"option[";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 154);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "\" class=\"form-control\" />
                </div>
                ";
                }
                // line 157
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157) == "textarea")) {
                    // line 158
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 158)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 159);
                    echo "</label>
                  <textarea name=\"option[";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 160);
                    echo "</textarea>
                </div>
                ";
                }
                // line 163
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 163) == "file")) {
                    // line 164
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 164)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 165);
                    echo "</label>
                  <button type=\"button\" id=\"button-upload";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btnup btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                  <input type=\"hidden\" name=\"option[";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    echo "\" />
                </div>
                ";
                }
                // line 170
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 170) == "date")) {
                    // line 171
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 171)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 172);
                    echo "</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"option[";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 174);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button class=\"btn datebtn\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 180
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 180) == "datetime")) {
                    // line 181
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 181)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 182);
                    echo "</label>
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"option[";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 184);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 190
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 190) == "time")) {
                    // line 191
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 191)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                    echo "</label>
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"option[";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 194);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 200
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "                
                ";
        }
        // line 203
        echo "                ";
        if (($context["recurrings"] ?? null)) {
            // line 204
            echo "                
                <h3>";
            // line 205
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                <div class=\"form-group required\">
                  <select name=\"recurring_id\" class=\"form-control\">
                    <option value=\"\">";
            // line 208
            echo ($context["text_select"] ?? null);
            echo "</option>
                    ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 210
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 210);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 210);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                  </select>
                  <div class=\"help-block\" id=\"recurring-description\"></div>
                </div>
                ";
        }
        // line 216
        echo "                <hr class=\"producthr\">
                <!-- Quantity option -->
                <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-md-3 col-xs-3 col-lg-2 op-box qtlabel\">
                        <label class=\"control-label text-decorop\" for=\"input-quantity\">";
        // line 221
        echo ($context["entry_qty"] ?? null);
        echo " :</label>
                    </div>
                  <div class=\"col-md-9 col-sm-9 col-xs-9 col-lg-10 op-box qty-plus-minus\">
                  <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\">
                      <span class=\"glyphicon glyphicon-minus\"></span>
                   </button>
                  <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
        // line 227
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 228
        echo ($context["product_id"] ?? null);
        echo "\" />
                   <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\">
                      <span class=\"glyphicon glyphicon-plus\"></span>
                   </button>
                   </div>
                   </div><hr class=\"producthr\">
                  <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 234
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn pcrt add-to-cart btn-primary\"><svg><use xlink:href=\"#pcart\"></use></svg> ";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                 <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 235
        echo ($context["button_wishlist"] ?? null);
        echo "\" class=\"btn pcrt btn-primary\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#heart\" /></svg></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 236
        echo ($context["button_compare"] ?? null);
        echo "\" class=\"btn pcrt  btn-primary\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\" ><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#compare\"/></svg></button>
                  <hr class=\"producthr\">
                </div>
                <!-- Quantity option end -->
                ";
        // line 240
        if ((($context["minimum"] ?? null) > 1)) {
            // line 241
            echo "                <div class=\"alert alert-info palert\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 242
        echo "</div>
              ";
        // line 243
        if (($context["review_status"] ?? null)) {
            // line 244
            echo "              <div class=\"rating\">
                <li>";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 246
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 247
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </li>
                  <li class=\"proreview\">
                    <a id=\"ratecount\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 249
            echo ($context["reviews"] ?? null);
            echo "</a>
                  </li>
                  <li>
                    <a id=\"ratep\" href=\"#rt\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 252
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
        // line 267
        echo " </div>
          </div>
        </div>
<div class=\"product-tab\">
      <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 272
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 273
        if (($context["attribute_groups"] ?? null)) {
            // line 274
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 276
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 277
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 279
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 281
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 282
        if (($context["attribute_groups"] ?? null)) {
            // line 283
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 286
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 288
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 288);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 292
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 292));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 293
                    echo "                <tr>
                  <td>";
                    // line 294
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 294);
                    echo "</td>
                  <td>";
                    // line 295
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 295);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 298
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "              </table>
            </div>
            ";
        }
        // line 303
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 304
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2 class=\"co-heading\">";
            // line 307
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 308
            if (($context["review_guest"] ?? null)) {
                // line 309
                echo "                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 311
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 312
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 317
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <!-- <div class=\"help-block\">";
                // line 319
                echo ($context["text_note"] ?? null);
                echo "</div> -->
                  </div>
                </div>
                <div class=\"form-group required\">

                  <div class=\"radi\">
                                          <label class=\"control-label\" for=\"input-review\">";
                // line 325
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
                // line 358
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 361
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 365
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 367
            echo "              </form>
            </div>
            ";
        }
        // line 369
        echo "</div>
            </div>
<!-- relatedproduct -->
      ";
        // line 372
        if (($context["products"] ?? null)) {
            // line 373
            echo "      <div class=\"relpro\">
      <div class=\"borbutt\">
        <h1 class=\"heading text-left\"><span>";
            // line 375
            echo ($context["text_related"] ?? null);
            echo "</span></h1>
      </div>
      <div class=\"row xspspace rless\">
        <div id=\"related\" class=\"owl-carousel owl-theme\">
       ";
            // line 379
            $context["i"] = 0;
            // line 380
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 381
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 382
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 383
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 384
                    echo "        ";
                    $context["class"] = "col-xs-12";
                    // line 385
                    echo "        ";
                } else {
                    // line 386
                    echo "        ";
                    $context["class"] = "col-xs-12 col-sm-12";
                    // line 387
                    echo "        ";
                }
                // line 388
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo " product-layout cless\">
         <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 390
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 390);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 390);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 390);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 390);
                echo "\" class=\"img-responsive center-block\" /></a>

      ";
                // line 392
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 392)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 393
                echo "
          ";
                // line 394
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 394)) {
                    // line 395
                    echo "        <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 395);
                    echo "%</span>
        ";
                }
                // line 397
                echo "
        ";
                // line 398
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 398)) {
                    // line 399
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 399)) {
                        // line 400
                        echo "               <!-- <span class=\"reduce-price\">";
                        echo ($context["pro_sale"] ?? null);
                        echo "</span> -->
          ";
                    }
                    // line 402
                    echo "      ";
                }
                // line 403
                echo "

      </div>
              <div class=\"caption text-left\">
                  ";
                // line 407
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 407)) {
                    // line 408
                    echo "                    <div class=\"rating\">
                      ";
                    // line 409
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 410
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 410) < $context["i"])) {
                            // line 411
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        } else {
                            // line 415
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        }
                        // line 419
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 420
                    echo "                    </div>";
                } else {
                    // line 421
                    echo "                    <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 422
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 423
                    echo "</div>
                  ";
                }
                // line 425
                echo "                  <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 425);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 425);
                echo "</a></h4>
                   ";
                // line 426
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 426)) {
                    // line 427
                    echo "                  <div class=\"price\">
                    ";
                    // line 428
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 428)) {
                        // line 429
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 429);
                        echo "
                    ";
                    } else {
                        // line 431
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 431);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 431);
                        echo "</span>
                    ";
                    }
                    // line 433
                    echo "                   ";
                    // line 436
                    echo "                  </div>
                  ";
                }
                // line 438
                echo "                  <div class=\"form-group homeaddq\">
                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 439
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 439);
                echo "');\">
                      <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
                // line 440
                echo ($context["button_cart"] ?? null);
                echo "</span>
                    </button>
                    <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
                // line 442
                echo ($context["atleast_cart"] ?? null);
                echo "\">
                  </div>
                  <div class=\"button-group text-center\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 445
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 445);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 446
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 446);
                echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
                    <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
                  </div>
              </div>

    </div>
        </div>
        <!-- ";
                // line 453
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 454
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 455
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 456
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 457
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 458
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 459
                echo " -->
        ";
                // line 460
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 461
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            echo "        </div>
      </div>
    </div>
        ";
        }
        // line 466
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 467
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 468
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 469
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 469);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 469);
                    echo "</a>,
        ";
                } else {
                    // line 470
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 470);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 470);
                    echo "</a> ";
                }
                // line 471
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 473
        echo "      </div></div>
    ";
        // line 474
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
        // line 556
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 561
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 567
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
        // line 712
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 716
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
        // line 812
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 813
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
        return array (  1736 => 813,  1732 => 812,  1633 => 716,  1626 => 712,  1478 => 567,  1469 => 561,  1461 => 556,  1376 => 474,  1373 => 473,  1364 => 471,  1357 => 470,  1347 => 469,  1343 => 468,  1338 => 467,  1335 => 466,  1329 => 462,  1323 => 461,  1321 => 460,  1318 => 459,  1314 => 458,  1312 => 457,  1309 => 456,  1307 => 455,  1304 => 454,  1302 => 453,  1290 => 446,  1284 => 445,  1278 => 442,  1273 => 440,  1267 => 439,  1264 => 438,  1260 => 436,  1258 => 433,  1250 => 431,  1244 => 429,  1242 => 428,  1239 => 427,  1237 => 426,  1230 => 425,  1226 => 423,  1219 => 422,  1214 => 421,  1211 => 420,  1205 => 419,  1199 => 415,  1193 => 411,  1190 => 410,  1186 => 409,  1183 => 408,  1181 => 407,  1175 => 403,  1172 => 402,  1166 => 400,  1163 => 399,  1161 => 398,  1158 => 397,  1152 => 395,  1150 => 394,  1147 => 393,  1141 => 392,  1130 => 390,  1124 => 388,  1121 => 387,  1118 => 386,  1115 => 385,  1112 => 384,  1109 => 383,  1106 => 382,  1103 => 381,  1098 => 380,  1096 => 379,  1089 => 375,  1085 => 373,  1083 => 372,  1078 => 369,  1073 => 367,  1067 => 365,  1058 => 361,  1052 => 358,  1016 => 325,  1007 => 319,  1002 => 317,  994 => 312,  990 => 311,  986 => 309,  984 => 308,  980 => 307,  975 => 304,  972 => 303,  967 => 300,  960 => 298,  951 => 295,  947 => 294,  944 => 293,  940 => 292,  933 => 288,  929 => 286,  925 => 285,  921 => 283,  919 => 282,  915 => 281,  911 => 279,  905 => 277,  902 => 276,  896 => 274,  894 => 273,  890 => 272,  883 => 267,  864 => 252,  858 => 249,  849 => 247,  842 => 246,  838 => 245,  835 => 244,  833 => 243,  830 => 242,  824 => 241,  822 => 240,  813 => 236,  807 => 235,  801 => 234,  792 => 228,  788 => 227,  779 => 221,  772 => 216,  766 => 212,  755 => 210,  751 => 209,  747 => 208,  741 => 205,  738 => 204,  735 => 203,  731 => 201,  725 => 200,  712 => 194,  705 => 192,  698 => 191,  695 => 190,  682 => 184,  675 => 182,  668 => 181,  665 => 180,  652 => 174,  645 => 172,  638 => 171,  635 => 170,  627 => 167,  619 => 166,  615 => 165,  608 => 164,  605 => 163,  593 => 160,  587 => 159,  580 => 158,  577 => 157,  565 => 154,  559 => 153,  552 => 152,  549 => 151,  544 => 148,  536 => 146,  529 => 145,  527 => 144,  522 => 143,  506 => 142,  500 => 141,  496 => 139,  490 => 138,  486 => 137,  479 => 136,  476 => 135,  471 => 132,  463 => 130,  456 => 129,  454 => 128,  449 => 127,  433 => 126,  427 => 125,  423 => 123,  417 => 122,  413 => 121,  406 => 120,  403 => 119,  398 => 116,  391 => 114,  384 => 113,  382 => 112,  375 => 111,  371 => 110,  367 => 109,  361 => 108,  355 => 107,  348 => 106,  345 => 105,  341 => 104,  337 => 103,  334 => 102,  331 => 101,  327 => 99,  324 => 98,  313 => 96,  309 => 95,  304 => 92,  301 => 91,  293 => 89,  291 => 88,  288 => 87,  280 => 86,  277 => 85,  272 => 83,  267 => 81,  263 => 79,  257 => 76,  254 => 75,  252 => 74,  249 => 73,  247 => 72,  238 => 69,  230 => 67,  228 => 66,  221 => 65,  211 => 63,  209 => 62,  204 => 60,  199 => 59,  196 => 58,  193 => 57,  190 => 56,  187 => 55,  185 => 54,  182 => 53,  178 => 51,  173 => 48,  164 => 45,  155 => 44,  151 => 43,  147 => 41,  144 => 40,  135 => 36,  128 => 35,  126 => 34,  123 => 33,  121 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  102 => 26,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/product/product.twig", "");
    }
}
