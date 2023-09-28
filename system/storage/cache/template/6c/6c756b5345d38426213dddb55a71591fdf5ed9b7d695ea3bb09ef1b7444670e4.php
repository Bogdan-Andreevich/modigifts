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
class __TwigTemplate_68bad9307485dd57a6648d7eab2baf142764077a9cebfce9adb661572cb46bbe extends \Twig\Template
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
                ";
        // line 62
        echo ($context["description"] ?? null);
        echo "
              <ul class=\"list-unstyled\">
                ";
        // line 64
        if (($context["manufacturer"] ?? null)) {
            // line 65
            echo "                <li><span class=\"text-decor\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"textdeb\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 67
        echo "                <li><span class=\"text-decor\">";
        echo ($context["text_model"] ?? null);
        echo "</span> ";
        echo ($context["model"] ?? null);
        echo "</li>
                ";
        // line 68
        if (($context["reward"] ?? null)) {
            // line 69
            echo "                <li><span class=\"text-decor\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> ";
            echo ($context["reward"] ?? null);
            echo "</li>
                ";
        }
        // line 71
        echo "                <li><span class=\"text-decor\">";
        echo ($context["text_stock"] ?? null);
        echo "</span> ";
        echo ($context["stock"] ?? null);
        echo "</li>
                <hr class=\"producthr\">
              </ul>
              ";
        // line 74
        if (($context["price"] ?? null)) {
            // line 75
            echo "              <ul class=\"list-unstyled\">
                ";
            // line 76
            if ( !($context["special"] ?? null)) {
                // line 77
                echo "                <li class=\"text-decor-bold\">
                  <h2 class=\"pro-price\">";
                // line 78
                echo ($context["price"] ?? null);
                echo "</h2>
                </li>
                ";
            } else {
                // line 81
                echo "                <ul class=\"list-inline\">
                <li class=\"text-decor-bold\">
                  <h2>";
                // line 83
                echo ($context["special"] ?? null);
                echo "</h2>
                </li>
                <li><span class=\"price-old\">";
                // line 85
                echo ($context["price"] ?? null);
                echo "</span></li></ul>
                ";
            }
            // line 87
            echo "                <!-- ";
            if (($context["tax"] ?? null)) {
                // line 88
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
                ";
            }
            // line 89
            echo " -->
                ";
            // line 90
            if (($context["points"] ?? null)) {
                // line 91
                echo "                <li class=\"text-decor-bold\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
                ";
            }
            // line 93
            echo "                ";
            if (($context["discounts"] ?? null)) {
                // line 94
                echo "                <li>
                  <hr class=\"producthr\">
                </li>
                ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 98
                    echo "                <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 98);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 98);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                ";
            }
            // line 101
            echo "              </ul>
              ";
        }
        // line 103
        echo "              <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 104
            echo "                <hr class=\"producthr\">
                <h3>";
            // line 105
            echo ($context["text_option"] ?? null);
            echo "</h3>
                ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 107
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 107) == "select")) {
                    // line 108
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 108)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 109);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 109);
                    echo "</label>
                  <select name=\"option[";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 110);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 110);
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 111
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 112));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 113
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 113);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 113);
                        echo "
                    ";
                        // line 114
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 114)) {
                            // line 115
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 115);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 115);
                            echo ")
                    ";
                        }
                        // line 116
                        echo " </option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "                  </select>
                </div>
                ";
                }
                // line 121
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 121) == "radio")) {
                    // line 122
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 122)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123);
                    echo "</label>
                  <div id=\"input-option";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 124);
                    echo "\" class=\"custom-radio\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 124));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 125
                        echo "                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"option[";
                        // line 127
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 127);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 127);
                        echo "\" />
                        ";
                        // line 128
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 128)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 128);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 128);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 128)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 128);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 128);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 129
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129);
                        echo "
                        ";
                        // line 130
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 130)) {
                            // line 131
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 131);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 131);
                            echo ")
                        ";
                        }
                        // line 132
                        echo " </label>
                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo " </div>
                </div>
                ";
                }
                // line 137
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 137) == "checkbox")) {
                    // line 138
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 138)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 139);
                    echo "</label>
                  <div id=\"input-option";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 140));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 141
                        echo "                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" name=\"option[";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 143);
                        echo "\" />
                        ";
                        // line 144
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 144)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 144);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 144);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 144);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 145
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 145);
                        echo "
                        ";
                        // line 146
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 146)) {
                            // line 147
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 147);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 147);
                            echo ")
                        ";
                        }
                        // line 148
                        echo " </label>
                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo " </div>
                </div>
                ";
                }
                // line 153
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "text")) {
                    // line 154
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 154)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 155);
                    echo "</label>
                  <input type=\"text\" name=\"option[";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 156);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 156);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "\" class=\"form-control\" />
                </div>
                ";
                }
                // line 159
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "textarea")) {
                    // line 160
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 160)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</label>
                  <textarea name=\"option[";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 162);
                    echo "</textarea>
                </div>
                ";
                }
                // line 165
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 165) == "file")) {
                    // line 166
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 166)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\">";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 167);
                    echo "</label>
                  <button type=\"button\" id=\"button-upload";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btnup btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                  <input type=\"hidden\" name=\"option[";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "\" />
                </div>
                ";
                }
                // line 172
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 172) == "date")) {
                    // line 173
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 173)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 174);
                    echo "</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"option[";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 176);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 176);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 176);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button class=\"btn datebtn\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 182
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "datetime")) {
                    // line 183
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184);
                    echo "</label>
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"option[";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 186);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 192
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 192) == "time")) {
                    // line 193
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 193)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    echo "</label>
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"option[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 196);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
                ";
                }
                // line 202
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                
                ";
        }
        // line 205
        echo "                ";
        if (($context["recurrings"] ?? null)) {
            // line 206
            echo "                
                <h3>";
            // line 207
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
                <div class=\"form-group required\">
                  <select name=\"recurring_id\" class=\"form-control\">
                    <option value=\"\">";
            // line 210
            echo ($context["text_select"] ?? null);
            echo "</option>
                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 212
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 212);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 212);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                  </select>
                  <div class=\"help-block\" id=\"recurring-description\"></div>
                </div>
                ";
        }
        // line 218
        echo "                <hr class=\"producthr\">
                <!-- Quantity option -->
                <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-md-3 col-xs-3 col-lg-2 op-box qtlabel\">
                        <label class=\"control-label text-decorop\" for=\"input-quantity\">";
        // line 223
        echo ($context["entry_qty"] ?? null);
        echo " :</label>
                    </div>
                  <div class=\"col-md-9 col-sm-9 col-xs-9 col-lg-10 op-box qty-plus-minus\">
                  <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\">
                      <span class=\"glyphicon glyphicon-minus\"></span>
                   </button>
                  <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
        // line 229
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 230
        echo ($context["product_id"] ?? null);
        echo "\" />
                   <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\">
                      <span class=\"glyphicon glyphicon-plus\"></span>
                   </button>
                   </div>
                   </div><hr class=\"producthr\">
                  <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 236
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn pcrt add-to-cart btn-primary\"><svg><use xlink:href=\"#pcart\"></use></svg> ";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                 <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 237
        echo ($context["button_wishlist"] ?? null);
        echo "\" class=\"btn pcrt btn-primary\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#heart\" /></svg></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 238
        echo ($context["button_compare"] ?? null);
        echo "\" class=\"btn pcrt  btn-primary\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\" ><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#compare\"/></svg></button>
                  <hr class=\"producthr\">
                </div>
                <!-- Quantity option end -->
                ";
        // line 242
        if ((($context["minimum"] ?? null) > 1)) {
            // line 243
            echo "                <div class=\"alert alert-info palert\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 244
        echo "</div>
              ";
        // line 245
        if (($context["review_status"] ?? null)) {
            // line 246
            echo "              <div class=\"rating\">
                <li>";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 248
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 249
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </li>
                  <li class=\"proreview\">
                    <a id=\"ratecount\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 251
            echo ($context["reviews"] ?? null);
            echo "</a>
                  </li>
                  <li>
                    <a id=\"ratep\" href=\"#rt\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 254
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
        // line 270
        echo " </div>
          </div>
        </div>
<div class=\"product-tab\">
      <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 275
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 276
        if (($context["attribute_groups"] ?? null)) {
            // line 277
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 279
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 280
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 282
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 284
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 285
        if (($context["attribute_groups"] ?? null)) {
            // line 286
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 289
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 291
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 291);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 295));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 296
                    echo "                <tr>
                  <td>";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 297);
                    echo "</td>
                  <td>";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 298);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 301
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "              </table>
            </div>
            ";
        }
        // line 306
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 307
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2 class=\"co-heading\">";
            // line 310
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 311
            if (($context["review_guest"] ?? null)) {
                // line 312
                echo "                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 314
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 315
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 320
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <!-- <div class=\"help-block\">";
                // line 322
                echo ($context["text_note"] ?? null);
                echo "</div> -->
                  </div>
                </div>
                <div class=\"form-group required\">

                  <div class=\"radi\">
                                          <label class=\"control-label\" for=\"input-review\">";
                // line 328
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
                // line 361
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 364
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 368
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 370
            echo "              </form>
            </div>
            ";
        }
        // line 372
        echo "</div>
            </div>
<!-- relatedproduct -->
      ";
        // line 375
        if (($context["products"] ?? null)) {
            // line 376
            echo "      <div class=\"relpro\">
      <div class=\"borbutt\">
        <h1 class=\"heading text-left\"><span>";
            // line 378
            echo ($context["text_related"] ?? null);
            echo "</span></h1>
      </div>
      <div class=\"row xspspace rless\">
        <div id=\"related\" class=\"owl-carousel owl-theme\">
       ";
            // line 382
            $context["i"] = 0;
            // line 383
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 384
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 385
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 386
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 387
                    echo "        ";
                    $context["class"] = "col-xs-12";
                    // line 388
                    echo "        ";
                } else {
                    // line 389
                    echo "        ";
                    $context["class"] = "col-xs-12 col-sm-12";
                    // line 390
                    echo "        ";
                }
                // line 391
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo " product-layout cless\">
         <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 393
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 393);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 393);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 393);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 393);
                echo "\" class=\"img-responsive center-block\" /></a>

      ";
                // line 395
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 395)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 396
                echo "
          ";
                // line 397
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 397)) {
                    // line 398
                    echo "        <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 398);
                    echo "%</span>
        ";
                }
                // line 400
                echo "
        ";
                // line 401
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 401)) {
                    // line 402
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 402)) {
                        // line 403
                        echo "               <!-- <span class=\"reduce-price\">";
                        echo ($context["pro_sale"] ?? null);
                        echo "</span> -->
          ";
                    }
                    // line 405
                    echo "      ";
                }
                // line 406
                echo "

      </div>
              <div class=\"caption text-left\">
                  ";
                // line 410
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 410)) {
                    // line 411
                    echo "                    <div class=\"rating\">
                      ";
                    // line 412
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 413
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 413) < $context["i"])) {
                            // line 414
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        } else {
                            // line 418
                            echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                        }
                        // line 422
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 423
                    echo "                    </div>";
                } else {
                    // line 424
                    echo "                    <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 425
                        echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 426
                    echo "</div>
                  ";
                }
                // line 428
                echo "                  <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 428);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 428);
                echo "</a></h4>
                   ";
                // line 429
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 429)) {
                    // line 430
                    echo "                  <div class=\"price\">
                    ";
                    // line 431
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 431)) {
                        // line 432
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 432);
                        echo "
                    ";
                    } else {
                        // line 434
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 434);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 434);
                        echo "</span>
                    ";
                    }
                    // line 436
                    echo "                   ";
                    // line 439
                    echo "                  </div>
                  ";
                }
                // line 441
                echo "                  <div class=\"form-group homeaddq\">
                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 442
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 442);
                echo "');\">
                      <svg><use xlink:href=\"#pcart\"></use></svg><span>&nbsp;+";
                // line 443
                echo ($context["button_cart"] ?? null);
                echo "</span>
                    </button>
                    <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
                // line 445
                echo ($context["atleast_cart"] ?? null);
                echo "\">
                  </div>
                  <div class=\"button-group text-center\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 448
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 448);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 449
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 449);
                echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
                    <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
                  </div>
              </div>

    </div>
        </div>
        <!-- ";
                // line 456
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 457
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 458
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 459
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 460
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 461
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 462
                echo " -->
        ";
                // line 463
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 464
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 465
            echo "        </div>
      </div>
    </div>
        ";
        }
        // line 469
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 470
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 471
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 472
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 472);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 472);
                    echo "</a>,
        ";
                } else {
                    // line 473
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 473);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 473);
                    echo "</a> ";
                }
                // line 474
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 476
        echo "      </div></div>
    ";
        // line 477
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
        // line 559
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 564
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 570
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
        // line 715
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 719
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
        // line 815
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 816
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
        return array (  1743 => 816,  1739 => 815,  1640 => 719,  1633 => 715,  1485 => 570,  1476 => 564,  1468 => 559,  1383 => 477,  1380 => 476,  1371 => 474,  1364 => 473,  1354 => 472,  1350 => 471,  1345 => 470,  1342 => 469,  1336 => 465,  1330 => 464,  1328 => 463,  1325 => 462,  1321 => 461,  1319 => 460,  1316 => 459,  1314 => 458,  1311 => 457,  1309 => 456,  1297 => 449,  1291 => 448,  1285 => 445,  1280 => 443,  1274 => 442,  1271 => 441,  1267 => 439,  1265 => 436,  1257 => 434,  1251 => 432,  1249 => 431,  1246 => 430,  1244 => 429,  1237 => 428,  1233 => 426,  1226 => 425,  1221 => 424,  1218 => 423,  1212 => 422,  1206 => 418,  1200 => 414,  1197 => 413,  1193 => 412,  1190 => 411,  1188 => 410,  1182 => 406,  1179 => 405,  1173 => 403,  1170 => 402,  1168 => 401,  1165 => 400,  1159 => 398,  1157 => 397,  1154 => 396,  1148 => 395,  1137 => 393,  1131 => 391,  1128 => 390,  1125 => 389,  1122 => 388,  1119 => 387,  1116 => 386,  1113 => 385,  1110 => 384,  1105 => 383,  1103 => 382,  1096 => 378,  1092 => 376,  1090 => 375,  1085 => 372,  1080 => 370,  1074 => 368,  1065 => 364,  1059 => 361,  1023 => 328,  1014 => 322,  1009 => 320,  1001 => 315,  997 => 314,  993 => 312,  991 => 311,  987 => 310,  982 => 307,  979 => 306,  974 => 303,  967 => 301,  958 => 298,  954 => 297,  951 => 296,  947 => 295,  940 => 291,  936 => 289,  932 => 288,  928 => 286,  926 => 285,  922 => 284,  918 => 282,  912 => 280,  909 => 279,  903 => 277,  901 => 276,  897 => 275,  890 => 270,  870 => 254,  864 => 251,  855 => 249,  848 => 248,  844 => 247,  841 => 246,  839 => 245,  836 => 244,  830 => 243,  828 => 242,  819 => 238,  813 => 237,  807 => 236,  798 => 230,  794 => 229,  785 => 223,  778 => 218,  772 => 214,  761 => 212,  757 => 211,  753 => 210,  747 => 207,  744 => 206,  741 => 205,  737 => 203,  731 => 202,  718 => 196,  711 => 194,  704 => 193,  701 => 192,  688 => 186,  681 => 184,  674 => 183,  671 => 182,  658 => 176,  651 => 174,  644 => 173,  641 => 172,  633 => 169,  625 => 168,  621 => 167,  614 => 166,  611 => 165,  599 => 162,  593 => 161,  586 => 160,  583 => 159,  571 => 156,  565 => 155,  558 => 154,  555 => 153,  550 => 150,  542 => 148,  535 => 147,  533 => 146,  528 => 145,  512 => 144,  506 => 143,  502 => 141,  496 => 140,  492 => 139,  485 => 138,  482 => 137,  477 => 134,  469 => 132,  462 => 131,  460 => 130,  455 => 129,  439 => 128,  433 => 127,  429 => 125,  423 => 124,  419 => 123,  412 => 122,  409 => 121,  404 => 118,  397 => 116,  390 => 115,  388 => 114,  381 => 113,  377 => 112,  373 => 111,  367 => 110,  361 => 109,  354 => 108,  351 => 107,  347 => 106,  343 => 105,  340 => 104,  337 => 103,  333 => 101,  330 => 100,  319 => 98,  315 => 97,  310 => 94,  307 => 93,  299 => 91,  297 => 90,  294 => 89,  286 => 88,  283 => 87,  278 => 85,  273 => 83,  269 => 81,  263 => 78,  260 => 77,  258 => 76,  255 => 75,  253 => 74,  244 => 71,  236 => 69,  234 => 68,  227 => 67,  217 => 65,  215 => 64,  210 => 62,  206 => 61,  202 => 60,  199 => 59,  196 => 58,  193 => 57,  190 => 56,  187 => 55,  185 => 54,  182 => 53,  178 => 51,  173 => 48,  164 => 45,  155 => 44,  151 => 43,  147 => 41,  144 => 40,  135 => 36,  128 => 35,  126 => 34,  123 => 33,  121 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  102 => 26,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/product/product.twig", "");
    }
}
