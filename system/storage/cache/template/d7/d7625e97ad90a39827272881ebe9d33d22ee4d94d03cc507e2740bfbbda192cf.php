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

/* extension/module/wbocproduct.twig */
class __TwigTemplate_2dc6aadc9cc0a862e8ecc5b04f23c532d2e0b78c84aea9e4426b287f133280a1 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"control-label col-sm-2\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
         <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 38
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 41
        if (($context["status"] ?? null)) {
            // line 42
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 43
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 45
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 46
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 48
        echo "              </select>
            </div>
          </div>
      
          <div class=\"form-group parent-form\">
            <label class=\"control-label col-sm-2\" for=\"input-option\">";
        // line 53
        echo ($context["entry_type"] ?? null);
        echo "</label>
            <div class=\"control-option col-sm-10\">
              <div class=\"switch switch-long switch-multi3\">
                <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-all\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 56
        if ((($context["option"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-all\" class=\"switch-label switch-label-1\">";
        // line 57
        echo ($context["entry_type_all"] ?? null);
        echo "</label>
                <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-cate\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 58
        if ((($context["option"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-cate\" class=\"switch-label switch-label-2\">";
        // line 59
        echo ($context["entry_type_cate"] ?? null);
        echo "</label>
                 <input type=\"radio\" name=\"option\" class=\"switch-input\" id=\"option-auto\" value=\"2\" onClick=\"GetOptionsSelect();\" ";
        // line 60
        if ((($context["option"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                <label for=\"option-auto\" class=\"switch-label switch-label-3\">";
        // line 61
        echo ($context["entry_type_auto"] ?? null);
        echo "</label>
                <span class=\"switch-selection\"></span>
              </div>
            </div>
          </div>
       
          ";
        // line 68
        echo "          <div class=\"option-all-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label col-sm-2\" for=\"input-product\">";
        // line 70
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 72
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                <div id=\"featured-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                  ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 75
            echo "          
                  <div id=\"featured-product";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 76);
            echo "\">
                  ";
            // line 78
            echo "                  <img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 78);
            echo "\" alt=\"\" />
                  ";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
            echo "
            
                  <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
            echo "\" />
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </div>
              </div>
            </div>
          </div>
          ";
        // line 89
        echo "          <div class=\"option-cate-selected select-options\">
            <div class=\"form-group\">
              <label class=\"control-label col-sm-2\" for=\"input-cate_id\">";
        // line 91
        echo ($context["entry_cate_select"] ?? null);
        echo "</label>
              <div class=\"control-option col-sm-10\">
                <input type=\"text\" name=\"cate_name\" value=\"";
        // line 93
        echo twig_get_attribute($this->env, $this->source, ($context["cate_ids"] ?? null), "name", [], "any", false, false, false, 93);
        echo "\" placeholder=\"Search category\" id=\"input-cate_name\" class=\"form-control\" />";
        // line 94
        echo "                 <input type=\"hidden\" name=\"cate_id\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["cate_ids"] ?? null), "category_id", [], "any", false, false, false, 94);
        echo "\" id=\"input-cate_id\" />
               </div>
               ";
        // line 96
        if (($context["error_category"] ?? null)) {
            // line 97
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_category"] ?? null);
            echo "</div>
               ";
        }
        // line 99
        echo "             </div>
            <div class=\"form-group parent-form\">
              <label class=\"control-label col-sm-2\" for=\"input-productfrom\">";
        // line 101
        echo ($context["entry_pfrom"] ?? null);
        echo "</label>
              <div class=\"control-option col-sm-10\">            
                <div class=\"switch switch-long switch-multi3\">
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"productfrom-all\" value=\"1\" onClick=\"GetOptionsSelect();\" ";
        // line 104
        if ((($context["productfrom"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"productfrom-all\" class=\"switch-label switch-label-1\">";
        // line 105
        echo ($context["entry_pfrom_all"] ?? null);
        echo "</label>
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"productfrom-select\" value=\"0\" onClick=\"GetOptionsSelect();\" ";
        // line 106
        if ((($context["productfrom"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"productfrom-select\" class=\"switch-label switch-label-2\">";
        // line 107
        echo ($context["entry_pfrom_select"] ?? null);
        echo "</label>
                  <input type=\"radio\" name=\"productfrom\" class=\"switch-input\" id=\"specific-product\" value=\"2\" onClick=\"GetOptionsSelect();\" ";
        // line 108
        if ((($context["productfrom"] ?? null) == 2)) {
            echo " checked=\"checked\"";
        }
        echo "/>
                  <label for=\"specific-product\" class=\"switch-label switch-label-3\">";
        // line 109
        echo ($context["entry_specificproduct"] ?? null);
        echo "</label>
                  <span class=\"switch-selection\"></span>
                </div>
              </div>
            </div>
            <div class=\"productfrom-all-selected select-options\">
            </div>
            <div class=\"productfrom-select-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"input-productcate\">";
        // line 118
        echo ($context["entry_product"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"productcate\" value=\"\" placeholder=\"";
        // line 120
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-productcate\" class=\"form-control\" />
                  <div id=\"category-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productcates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["productcate"]) {
            // line 123
            echo "                    <div id=\"category-product";
            echo twig_get_attribute($this->env, $this->source, $context["productcate"], "product_id", [], "any", false, false, false, 123);
            echo "\">          
                      <img src=\"";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["productcate"], "image", [], "any", false, false, false, 124);
            echo "\" alt=\"\" />
                      ";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["productcate"], "name", [], "any", false, false, false, 125);
            echo "            
                      <input type=\"hidden\" name=\"productcate[]\" value=\"";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["productcate"], "product_id", [], "any", false, false, false, 126);
            echo "\" />
                      <i class=\"fa fa-times\"></i>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productcate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"specific-product-selected select-options\">
              <div class=\"form-group\">
                <label class=\"control-label col-sm-2\" for=\"input-specific-product\">";
        // line 136
        echo ($context["entry_selectspecificproduct"] ?? null);
        echo "</label>
                <div class=\"control-option col-sm-10\">
                  <small class=\"text-for-specificproducts\" style=\"padding: 0 0 10px 0; float: left;\">";
        // line 138
        echo ($context["entry_selectspecificproduct_small"] ?? null);
        echo "</small>
                  <select name=\"input_specific_product\" id=\"input-specific-product\" class=\"form-control\">
                    ";
        // line 140
        if ((($context["input_specific_product"] ?? null) == 0)) {
            // line 141
            echo "                      <option value=\"0\" selected=\"selected\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 142
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\">";
            // line 143
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                     ";
        } elseif ((        // line 144
($context["input_specific_product"] ?? null) == 1)) {
            // line 145
            echo "                      <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\" selected=\"selected\">";
            // line 146
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\">";
            // line 147
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                     ";
        } elseif ((        // line 148
($context["input_specific_product"] ?? null) == 2)) {
            // line 149
            echo "                      <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 150
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\" selected=\"selected\">";
            // line 151
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                    ";
        } elseif ((        // line 152
($context["input_specific_product"] ?? null) == 3)) {
            // line 153
            echo "                      <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 154
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\">";
            // line 155
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 157
            echo "                      <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 158
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                      <option value=\"2\">";
            // line 159
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                    ";
        }
        // line 161
        echo "                  </select>
                </div>
              </div>
            </div>
          </div>";
        // line 168
        echo "          <div class=\"option-auto-selected select-options\">
            <div class=\"form-group auto-select\">
              <label class=\"control-label col-sm-2\" for=\"input-autoproduct\">";
        // line 170
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <div class=\"control-option col-sm-10\">
                <select name=\"autoproduct\" id=\"input-select\" class=\"form-control\">
                  ";
        // line 173
        if ((($context["autoproduct"] ?? null) == 0)) {
            // line 174
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 175
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 176
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                   ";
        } elseif ((        // line 177
($context["autoproduct"] ?? null) == 1)) {
            // line 178
            echo "                    <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\" selected=\"selected\">";
            // line 179
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 180
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                   ";
        } elseif ((        // line 181
($context["autoproduct"] ?? null) == 2)) {
            // line 182
            echo "                    <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 183
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\" selected=\"selected\">";
            // line 184
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 185
($context["autoproduct"] ?? null) == 3)) {
            // line 186
            echo "                    <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 187
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 188
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 190
            echo "                    <option value=\"0\">";
            echo ($context["entry_new"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 191
            echo ($context["entry_sale"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 192
            echo ($context["entry_bestseller"] ?? null);
            echo "</option>
                  ";
        }
        // line 194
        echo "                </select>
              </div>
            </div>
          </div>
     
      ";
        // line 200
        echo "     
      
      
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 204
        echo ($context["entry_countdown"] ?? null);
        echo "<small>";
        echo ($context["entry_countdown_small"] ?? null);
        echo "</small></label>
        <div class=\"col-sm-10\">
          <select name=\"countdown\" id=\"countdown-on\" class=\"form-control\">
            ";
        // line 207
        if ((($context["countdown"] ?? null) == 1)) {
            // line 208
            echo "            <option value=\"1\" selected=\"selected\">";
            echo ($context["entry_yes"] ?? null);
            echo "</option>
            <option value=\"0\">";
            // line 209
            echo ($context["entry_no"] ?? null);
            echo "</option>
            ";
        } elseif ((        // line 210
($context["countdown"] ?? null) == 0)) {
            // line 211
            echo "            <option value=\"0\" selected=\"selected\">";
            echo ($context["entry_no"] ?? null);
            echo "</option>
            <option value=\"1\" >";
            // line 212
            echo ($context["entry_yes"] ?? null);
            echo "</option>
            ";
        }
        // line 214
        echo "          </select>
        </div>
      </div>
    
      <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"input-limit\">";
        // line 219
        echo ($context["entry_limit"] ?? null);
        echo "</label>
        <div class=\"control-option col-sm-10\">
          <input type=\"text\" name=\"limit\" value=\"";
        // line 221
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
        </div>
      </div>
      <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 225
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 227
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 228
        if (($context["error_width"] ?? null)) {
            // line 229
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 231
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 234
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 236
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 237
        if (($context["error_height"] ?? null)) {
            // line 238
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 240
        echo "            </div>
          </div>

    </form>
    </div>
  </div>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  var category_id;
\$('input[name=\\'product\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wbocproduct/autocomplete&user_token=";
        // line 262
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            image: item['image'],
            label: item['name'],
            value: item['product_id'] 
          }
        }));
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'product\\']').val('');
    
    \$('#featured-product' + item['value']).remove();
    
    \$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');  
    
    \$('#featured-product').scrollTop(1000);
  }
});
\$('#featured-product').delegate('.fa-times', 'click', function() {
  \$(this).parent().remove();
});
// Search category
\$('input[name=\\'cate_name\\']').autocomplete({
  source: function(request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wbocproduct/autocompleteCategory&user_token=";
        // line 292
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  select: function(item) {  
    document.getElementById(\"input-cate_name\").value= item['label'];  
    document.getElementById(\"input-cate_id\").value= item['value'];  
    \$('#featured-productcate').children().remove();
    }
});
\$('#input-cate_name').parent().delegate('.fa-times', 'click', function() {
  document.getElementById(\"input-cate_name\").value= '';
  document.getElementById(\"input-cate_id\").value= '';
  \$('#category-product').children().remove();
});

// Search product from category
\$('input[name=\\'productcate\\']').autocomplete({
  source: function( request, response) {
    \$.ajax({
      url: 'index.php?route=extension/module/wbocproduct/getProductCategory&user_token=";
        // line 320
        echo ($context["user_token"] ?? null);
        echo "&category_id=' + \$(\"#input-cate_id\").val()+ '&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      data: {
      },
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            image: item['image'],
            label: item['name'],
            value: item['product_id'] 
          }
        }));
        
      }
    });
  },
  select: function(item) {
    \$('input[name=\\'productcate\\']').val('');
    
    \$('#category-product' + item['value']).remove();
    
    \$('#category-product').append('<div id=\"category-product' + item['value'] + '\"><i class=\"fa fa-times\"></i> ' + '<img src=\"' +item['image']+ '\" alt=\"\"/>' + item['label'] + '<input type=\"hidden\" name=\"productcate[]\" value=\"' + item['value'] + '\" /></div>');  
    
    \$('#category-product').scrollTop(1000);
  }
});
  
\$('#category-product').delegate('.fa-times', 'click', function() {
  \$(this).parent().remove();
});

function GetOptionsSelect() {
    \$('.select-options').hide();
    var ParentForms = document.getElementsByClassName('parent-form');
    for (var j = 0; j < ParentForms.length; j ++){
      var InputChilds = ParentForms[j].getElementsByTagName('input');
      for (var i = 0; i < InputChilds.length; i++) {
            if (InputChilds[i].checked) {
              console.log(id);
              var id = InputChilds[i].id;
              var test = \$('.'+id+'-selected');
              \$(test).show();

            } //end if
 
      } // end for
    };
    
} //end

\$(document).ready(function(){
  GetOptionsSelect(); 
  \$('.list-selection label').on('click',function(){
      \$(this).parent().find('.active').removeClass('active');
      \$(this).addClass('active');
  });

})
";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 379
            echo "\$('#input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 379);
            echo "').summernote({height: 300});
\$('#language";
            // line 380
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 380);
            echo " .html-content').hide();
\$('#language";
            // line 381
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 381);
            echo " a').click(function(){
  \$('#language";
            // line 382
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 382);
            echo " .html-content').slideToggle();
});
\$('#input-title";
            // line 384
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 384);
            echo "').parent().parent().parent().css('border-top','2px solid #279CBB');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 386
        echo "//--></script>
</div>
";
        // line 388
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/wbocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  843 => 388,  839 => 386,  831 => 384,  826 => 382,  822 => 381,  818 => 380,  813 => 379,  809 => 378,  748 => 320,  717 => 292,  684 => 262,  660 => 240,  654 => 238,  652 => 237,  646 => 236,  641 => 234,  636 => 231,  630 => 229,  628 => 228,  622 => 227,  617 => 225,  608 => 221,  603 => 219,  596 => 214,  591 => 212,  586 => 211,  584 => 210,  580 => 209,  575 => 208,  573 => 207,  565 => 204,  559 => 200,  552 => 194,  547 => 192,  543 => 191,  538 => 190,  533 => 188,  529 => 187,  524 => 186,  522 => 185,  518 => 184,  514 => 183,  509 => 182,  507 => 181,  503 => 180,  499 => 179,  494 => 178,  492 => 177,  488 => 176,  484 => 175,  479 => 174,  477 => 173,  471 => 170,  467 => 168,  461 => 161,  456 => 159,  452 => 158,  447 => 157,  442 => 155,  438 => 154,  433 => 153,  431 => 152,  427 => 151,  423 => 150,  418 => 149,  416 => 148,  412 => 147,  408 => 146,  403 => 145,  401 => 144,  397 => 143,  393 => 142,  388 => 141,  386 => 140,  381 => 138,  376 => 136,  368 => 130,  358 => 126,  354 => 125,  350 => 124,  345 => 123,  341 => 122,  336 => 120,  331 => 118,  319 => 109,  313 => 108,  309 => 107,  303 => 106,  299 => 105,  293 => 104,  287 => 101,  283 => 99,  277 => 97,  275 => 96,  269 => 94,  266 => 93,  261 => 91,  257 => 89,  251 => 84,  242 => 81,  237 => 79,  232 => 78,  228 => 76,  225 => 75,  221 => 74,  216 => 72,  211 => 70,  207 => 68,  198 => 61,  192 => 60,  188 => 59,  182 => 58,  178 => 57,  172 => 56,  166 => 53,  159 => 48,  154 => 46,  149 => 45,  144 => 43,  139 => 42,  137 => 41,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/wbocproduct.twig", "");
    }
}
