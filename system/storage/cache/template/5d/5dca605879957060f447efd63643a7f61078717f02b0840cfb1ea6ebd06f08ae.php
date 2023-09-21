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

/* design/layout_form.twig */
class __TwigTemplate_240d097dde56b8c4941f4d0fcb53798ef55464f1f28dfc6677d3630ee70d9037 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
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
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 34
        if (($context["error_name"] ?? null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                <tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 52
            echo ($context["text_default"] ?? null);
            echo "</option>
                      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 54) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 54))) {
                    // line 55
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 55);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 55);
                    echo "</option>
                      ";
                } else {
                    // line 57
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 57);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 57);
                    echo "</option>
                      ";
                }
                // line 59
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 61);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 64
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        echo ($context["text_module"] ?? null);
        echo "</legend>
          
          
            ";
        // line 79
        $context["module_row"] = 0;
        // line 80
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 85
        echo ($context["text_column_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 90
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 90) == "column_left")) {
                // line 91
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 93
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 95
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 95);
                    echo "\">
                            ";
                    // line 96
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 96)) {
                        // line 97
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 97) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 97))) {
                            // line 98
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 98);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 98);
                            echo "</option>
                            ";
                        } else {
                            // line 100
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 100);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 100);
                            echo "</option>
                            ";
                        }
                        // line 102
                        echo "                            ";
                    } else {
                        // line 103
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 103));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 104
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 104) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 104))) {
                                // line 105
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 105);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 105);
                                echo "</option>
                            ";
                            } else {
                                // line 107
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 107);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 107);
                                echo "</option>
                            ";
                            }
                            // line 109
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 110
                        echo "                            ";
                    }
                    // line 111
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 114
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 114);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 115
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 115);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 116);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 117
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 121
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 122
                echo "                    ";
            }
            // line 123
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 131
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 131);
            echo "\">
                            ";
            // line 132
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 132)) {
                // line 133
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 133);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 133);
                echo "</option>
                            ";
            } else {
                // line 135
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 135));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 136
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 136);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 136);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "                            ";
            }
            // line 139
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 143
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 154
        echo ($context["text_content_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 159
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 159) == "content_top")) {
                // line 160
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 162
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 164
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 164);
                    echo "\">
                            ";
                    // line 165
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 165)) {
                        // line 166
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 166) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 166))) {
                            // line 167
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 167);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 167);
                            echo "</option>
                            ";
                        } else {
                            // line 169
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 169);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 169);
                            echo "</option>
                            ";
                        }
                        // line 171
                        echo "                            ";
                    } else {
                        // line 172
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 172));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 173
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 173) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 173))) {
                                // line 174
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 174);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 174);
                                echo "</option>
                            ";
                            } else {
                                // line 176
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 176);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 176);
                                echo "</option>
                            ";
                            }
                            // line 178
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 179
                        echo "                            ";
                    }
                    // line 180
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 183
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 183);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 184
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 184);
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 185);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 186
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 190
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 191
                echo "                    ";
            }
            // line 192
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 200
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 200);
            echo "\">
                            ";
            // line 201
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 201)) {
                // line 202
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 202);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 202);
                echo "</option>
                            ";
            } else {
                // line 204
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 204));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 205
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 205);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 205);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "                            ";
            }
            // line 208
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 212
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 221
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 226
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 226) == "content_bottom")) {
                // line 227
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 229
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 231
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 231);
                    echo "\">
                            ";
                    // line 232
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 232)) {
                        // line 233
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 233) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 233))) {
                            // line 234
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 234);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 234);
                            echo "</option>
                            ";
                        } else {
                            // line 236
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 236);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 236);
                            echo "</option>
                            ";
                        }
                        // line 238
                        echo "                            ";
                    } else {
                        // line 239
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 239));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 240
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 240) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 240))) {
                                // line 241
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 241);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 241);
                                echo "</option>
                            ";
                            } else {
                                // line 243
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 243);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 243);
                                echo "</option>
                            ";
                            }
                            // line 245
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 246
                        echo "                            ";
                    }
                    // line 247
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 250
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 250);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 251
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 251);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 252);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 253
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 257
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 258
                echo "                    ";
            }
            // line 259
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 267
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 267);
            echo "\">
                            ";
            // line 268
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 268)) {
                // line 269
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 269);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 269);
                echo "</option>
                            ";
            } else {
                // line 271
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 271));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 272
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 272);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 272);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "                            ";
            }
            // line 275
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 279
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 290
        echo ($context["text_column_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 295
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 295) == "column_right")) {
                // line 296
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 298
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 299
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 300
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 300);
                    echo "\">
                            ";
                    // line 301
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 301)) {
                        // line 302
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 302) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 302))) {
                            // line 303
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 303);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 303);
                            echo "</option>
                            ";
                        } else {
                            // line 305
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 305);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 305);
                            echo "</option>
                            ";
                        }
                        // line 307
                        echo "                            ";
                    } else {
                        // line 308
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 308));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 309
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 309) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 309))) {
                                // line 310
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 310);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 310);
                                echo "</option>
                            ";
                            } else {
                                // line 312
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 312);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 312);
                                echo "</option>
                            ";
                            }
                            // line 314
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 315
                        echo "                            ";
                    }
                    // line 316
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 318
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 319
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 319);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 320
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 320);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 321
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 321);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 322
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 326
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 327
                echo "                    ";
            }
            // line 328
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 336
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 336);
            echo "\">
                            ";
            // line 337
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 337)) {
                // line 338
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 338);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 338);
                echo "</option>
                            ";
            } else {
                // line 340
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 340));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 341
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 341);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 341);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 343
                echo "                            ";
            }
            // line 344
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 348
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

             <!-- custom position -->
            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-footer-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 363
        echo ($context["text_footer_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 368
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 368) == "footer_left")) {
                // line 369
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 371
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 372
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 373
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 373);
                    echo "\">
                            ";
                    // line 374
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 374)) {
                        // line 375
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 375) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 375))) {
                            // line 376
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 376);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 376);
                            echo "</option>
                            ";
                        } else {
                            // line 378
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 378);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 378);
                            echo "</option>
                            ";
                        }
                        // line 380
                        echo "                            ";
                    } else {
                        // line 381
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 381));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 382
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 382) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 382))) {
                                // line 383
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 383);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 383);
                                echo "</option>
                            ";
                            } else {
                                // line 385
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 385);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 385);
                                echo "</option>
                            ";
                            }
                            // line 387
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 388
                        echo "                            ";
                    }
                    // line 389
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 391
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 392
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 392);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 393
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 393);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 394
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 394);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 395
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 399
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 400
                echo "                    ";
            }
            // line 401
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 409
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 409);
            echo "\">
                            ";
            // line 410
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 410)) {
                // line 411
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 411);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 411);
                echo "</option>
                            ";
            } else {
                // line 413
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 413));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 414
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 414);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 414);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 416
                echo "                            ";
            }
            // line 417
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('footer-left');\" data-toggle=\"tooltip\" title=\"";
        // line 421
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-ftop-full\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 432
        echo ($context["text_ftop_full"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 437
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 437) == "ftop_full")) {
                // line 438
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 440
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 441
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 442
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 442);
                    echo "\">
                            ";
                    // line 443
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 443)) {
                        // line 444
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 444) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 444))) {
                            // line 445
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 445);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 445);
                            echo "</option>
                            ";
                        } else {
                            // line 447
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 447);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 447);
                            echo "</option>
                            ";
                        }
                        // line 449
                        echo "                            ";
                    } else {
                        // line 450
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 450));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 451
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 451) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 451))) {
                                // line 452
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 452);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 452);
                                echo "</option>
                            ";
                            } else {
                                // line 454
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 454);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 454);
                                echo "</option>
                            ";
                            }
                            // line 456
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 457
                        echo "                            ";
                    }
                    // line 458
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 460
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 461
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 461);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 462
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 462);
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 463
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 463);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 464
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 468
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 469
                echo "                    ";
            }
            // line 470
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 471
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 477
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 478
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 478);
            echo "\">
                            ";
            // line 479
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 479)) {
                // line 480
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 480);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 480);
                echo "</option>
                            ";
            } else {
                // line 482
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 482));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 483
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 483);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 483);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 485
                echo "                            ";
            }
            // line 486
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('ftop-full');\" data-toggle=\"tooltip\" title=\"";
        // line 490
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-fbottom-full\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 499
        echo ($context["text_fbottom_full"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 504
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 504) == "fbottom_full")) {
                // line 505
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 507
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 508
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 509
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 509);
                    echo "\">
                            ";
                    // line 510
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 510)) {
                        // line 511
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 511) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 511))) {
                            // line 512
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 512);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 512);
                            echo "</option>
                            ";
                        } else {
                            // line 514
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 514);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 514);
                            echo "</option>
                            ";
                        }
                        // line 516
                        echo "                            ";
                    } else {
                        // line 517
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 517));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 518
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 518) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 518))) {
                                // line 519
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 519);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 519);
                                echo "</option>
                            ";
                            } else {
                                // line 521
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 521);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 521);
                                echo "</option>
                            ";
                            }
                            // line 523
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 524
                        echo "                            ";
                    }
                    // line 525
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 527
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 528
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 528);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 529
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 529);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 530
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 530);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 531
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 535
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 536
                echo "                    ";
            }
            // line 537
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 544
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 545
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 545);
            echo "\">
                            ";
            // line 546
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 546)) {
                // line 547
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 547);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 547);
                echo "</option>
                            ";
            } else {
                // line 549
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 549));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 550
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 550);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 550);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 552
                echo "                            ";
            }
            // line 553
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 555
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('fbottom-full');\" data-toggle=\"tooltip\" title=\"";
        // line 557
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-footer-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 568
        echo ($context["text_footer_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 572
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 573
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 573) == "footer_right")) {
                // line 574
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 576
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 577
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 578
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 578);
                    echo "\">
                            ";
                    // line 579
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 579)) {
                        // line 580
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 580) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 580))) {
                            // line 581
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 581);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 581);
                            echo "</option>
                            ";
                        } else {
                            // line 583
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 583);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 583);
                            echo "</option>
                            ";
                        }
                        // line 585
                        echo "                            ";
                    } else {
                        // line 586
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 586));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 587
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 587) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 587))) {
                                // line 588
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 588);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 588);
                                echo "</option>
                            ";
                            } else {
                                // line 590
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 590);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 590);
                                echo "</option>
                            ";
                            }
                            // line 592
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 593
                        echo "                            ";
                    }
                    // line 594
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 596
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 597
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 597);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 598
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 598);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 599
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 599);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 600
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 604
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 605
                echo "                    ";
            }
            // line 606
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 607
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 613
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 614
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 614);
            echo "\">
                            ";
            // line 615
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 615)) {
                // line 616
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 616);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 616);
                echo "</option>
                            ";
            } else {
                // line 618
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 618));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 619
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 619);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 619);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 621
                echo "                            ";
            }
            // line 622
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 624
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('footer-right');\" data-toggle=\"tooltip\" title=\"";
        // line 626
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- custom position over-->
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var route_row = ";
        // line 641
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 646
        echo ($context["text_default"] ?? null);
        echo "</option>';
\t";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 648
            echo "\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 648);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 648), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 650
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 651
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 652
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 660
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 665
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 666
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 666), "js");
            echo "\">';
\t";
            // line 667
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 667)) {
                // line 668
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 668);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 668), "js");
                echo "</option>';
\t";
            } else {
                // line 670
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 670));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 671
                    echo "\thtml += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 671);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 671), "js");
                    echo "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 673
                echo "\t";
            }
            // line 674
            echo "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 676
        echo "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 679
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 699
        echo ($context["user_token"] ?? null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 701
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script> 
</div>
";
        // line 708
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2074 => 708,  2064 => 701,  2059 => 699,  2034 => 679,  2029 => 676,  2022 => 674,  2019 => 673,  2008 => 671,  2003 => 670,  1995 => 668,  1993 => 667,  1988 => 666,  1984 => 665,  1976 => 660,  1965 => 652,  1961 => 651,  1958 => 650,  1947 => 648,  1943 => 647,  1939 => 646,  1931 => 641,  1913 => 626,  1909 => 624,  1902 => 622,  1899 => 621,  1888 => 619,  1883 => 618,  1875 => 616,  1873 => 615,  1868 => 614,  1864 => 613,  1856 => 607,  1850 => 606,  1847 => 605,  1845 => 604,  1836 => 600,  1830 => 599,  1824 => 598,  1818 => 597,  1815 => 596,  1808 => 594,  1805 => 593,  1799 => 592,  1791 => 590,  1783 => 588,  1780 => 587,  1775 => 586,  1772 => 585,  1764 => 583,  1756 => 581,  1753 => 580,  1751 => 579,  1746 => 578,  1742 => 577,  1738 => 576,  1732 => 574,  1729 => 573,  1725 => 572,  1718 => 568,  1704 => 557,  1700 => 555,  1693 => 553,  1690 => 552,  1679 => 550,  1674 => 549,  1666 => 547,  1664 => 546,  1659 => 545,  1655 => 544,  1647 => 538,  1641 => 537,  1638 => 536,  1636 => 535,  1627 => 531,  1621 => 530,  1615 => 529,  1609 => 528,  1606 => 527,  1599 => 525,  1596 => 524,  1590 => 523,  1582 => 521,  1574 => 519,  1571 => 518,  1566 => 517,  1563 => 516,  1555 => 514,  1547 => 512,  1544 => 511,  1542 => 510,  1537 => 509,  1533 => 508,  1529 => 507,  1523 => 505,  1520 => 504,  1516 => 503,  1509 => 499,  1497 => 490,  1493 => 488,  1486 => 486,  1483 => 485,  1472 => 483,  1467 => 482,  1459 => 480,  1457 => 479,  1452 => 478,  1448 => 477,  1440 => 471,  1434 => 470,  1431 => 469,  1429 => 468,  1420 => 464,  1414 => 463,  1408 => 462,  1402 => 461,  1399 => 460,  1392 => 458,  1389 => 457,  1383 => 456,  1375 => 454,  1367 => 452,  1364 => 451,  1359 => 450,  1356 => 449,  1348 => 447,  1340 => 445,  1337 => 444,  1335 => 443,  1330 => 442,  1326 => 441,  1322 => 440,  1316 => 438,  1313 => 437,  1309 => 436,  1302 => 432,  1288 => 421,  1284 => 419,  1277 => 417,  1274 => 416,  1263 => 414,  1258 => 413,  1250 => 411,  1248 => 410,  1243 => 409,  1239 => 408,  1231 => 402,  1225 => 401,  1222 => 400,  1220 => 399,  1211 => 395,  1205 => 394,  1199 => 393,  1193 => 392,  1190 => 391,  1183 => 389,  1180 => 388,  1174 => 387,  1166 => 385,  1158 => 383,  1155 => 382,  1150 => 381,  1147 => 380,  1139 => 378,  1131 => 376,  1128 => 375,  1126 => 374,  1121 => 373,  1117 => 372,  1113 => 371,  1107 => 369,  1104 => 368,  1100 => 367,  1093 => 363,  1075 => 348,  1071 => 346,  1064 => 344,  1061 => 343,  1050 => 341,  1045 => 340,  1037 => 338,  1035 => 337,  1030 => 336,  1026 => 335,  1018 => 329,  1012 => 328,  1009 => 327,  1007 => 326,  998 => 322,  992 => 321,  986 => 320,  980 => 319,  977 => 318,  970 => 316,  967 => 315,  961 => 314,  953 => 312,  945 => 310,  942 => 309,  937 => 308,  934 => 307,  926 => 305,  918 => 303,  915 => 302,  913 => 301,  908 => 300,  904 => 299,  900 => 298,  894 => 296,  891 => 295,  887 => 294,  880 => 290,  866 => 279,  862 => 277,  855 => 275,  852 => 274,  841 => 272,  836 => 271,  828 => 269,  826 => 268,  821 => 267,  817 => 266,  809 => 260,  803 => 259,  800 => 258,  798 => 257,  789 => 253,  783 => 252,  777 => 251,  771 => 250,  768 => 249,  761 => 247,  758 => 246,  752 => 245,  744 => 243,  736 => 241,  733 => 240,  728 => 239,  725 => 238,  717 => 236,  709 => 234,  706 => 233,  704 => 232,  699 => 231,  695 => 230,  691 => 229,  685 => 227,  682 => 226,  678 => 225,  671 => 221,  659 => 212,  655 => 210,  648 => 208,  645 => 207,  634 => 205,  629 => 204,  621 => 202,  619 => 201,  614 => 200,  610 => 199,  602 => 193,  596 => 192,  593 => 191,  591 => 190,  582 => 186,  576 => 185,  570 => 184,  564 => 183,  561 => 182,  554 => 180,  551 => 179,  545 => 178,  537 => 176,  529 => 174,  526 => 173,  521 => 172,  518 => 171,  510 => 169,  502 => 167,  499 => 166,  497 => 165,  492 => 164,  488 => 163,  484 => 162,  478 => 160,  475 => 159,  471 => 158,  464 => 154,  450 => 143,  446 => 141,  439 => 139,  436 => 138,  425 => 136,  420 => 135,  412 => 133,  410 => 132,  405 => 131,  401 => 130,  393 => 124,  387 => 123,  384 => 122,  382 => 121,  373 => 117,  367 => 116,  361 => 115,  355 => 114,  352 => 113,  345 => 111,  342 => 110,  336 => 109,  328 => 107,  320 => 105,  317 => 104,  312 => 103,  309 => 102,  301 => 100,  293 => 98,  290 => 97,  288 => 96,  283 => 95,  279 => 94,  275 => 93,  269 => 91,  266 => 90,  262 => 89,  255 => 85,  248 => 80,  246 => 79,  240 => 76,  231 => 70,  225 => 66,  219 => 65,  217 => 64,  210 => 62,  202 => 61,  199 => 60,  193 => 59,  185 => 57,  177 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  157 => 50,  152 => 49,  150 => 48,  142 => 43,  138 => 42,  131 => 37,  125 => 35,  123 => 34,  117 => 33,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/layout_form.twig", "");
    }
}
