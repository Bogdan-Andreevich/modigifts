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

/* extension/module/webinewsletter/frontend_modules.twig */
class __TwigTemplate_5bdd9cd5fb3705d012307f44aa5f18c8e3ca73b0b517950c373a4a85f39b1da3 extends \Twig\Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "\t\t        \t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t      \t</ul>
\t\t</div>
\t</div><!-- end div .page-header -->
\t<div id=\"page-content\" class=\"container-fluid\">
\t\t";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "\t    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t    </div>
\t    ";
        }
        // line 21
        echo "
\t\t";
        // line 22
        if ((($context["success"] ?? null) && (($context["success"] ?? null) != ""))) {
            // line 23
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\" >

\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<div class=\"logo\"><h3>";
        // line 35
        echo ($context["heading_title"] ?? null);
        echo "</h3></div>
\t\t\t\t\t";
        // line 37
        echo "\t\t\t\t\t<div class=\"sidebar-nav\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t";
        // line 39
        if (array_key_exists("menus", $context)) {
            // line 40
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t";
                $context["class_active"] = "";
                // line 42
                echo "\t\t\t\t\t\t\t\t\t";
                if ((array_key_exists("menu_active", $context) && (($context["menu_active"] ?? null) == $context["key"]))) {
                    echo " ";
                    $context["class_active"] = "active";
                    echo " ";
                }
                // line 43
                echo "\t\t\t\t\t\t\t\t\t<li class=\"";
                echo ($context["class_active"] ?? null);
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "link", [], "any", false, false, false, 43);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 43);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear clr\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"heading\"><h3>";
        // line 52
        echo ($context["text_frontend_modules"] ?? null);
        echo "</h1></div>

\t\t\t\t\t<form action=\"";
        // line 54
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t";
        // line 58
        if (($context["extensions"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_test_empty(($context["module_id"] ?? null))) {
                    echo " ";
                    $context["actived"] = "class=\"active\"";
                    echo " ";
                } else {
                    echo " ";
                    $context["actived"] = "";
                    echo " ";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t<li ";
                echo ($context["actived"] ?? null);
                echo "><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 61);
                echo "\" ><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 61);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                // line 62
                $context["i"] = 0;
                // line 63
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 65
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["module"], "module_id", [], "any", false, false, false, 65) == ($context["module_id"] ?? null))) {
                        echo " ";
                        $context["active"] = "class=\"active\"";
                        echo " ";
                    } else {
                        echo " ";
                        $context["active"] = "";
                        echo " ";
                    }
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t<li ";
                    echo ($context["active"] ?? null);
                    echo "><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "edit", [], "any", false, false, false, 66);
                    echo "\" ><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 66);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"pull-right\">

\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" title=\"\" onclick=\"\$('#form').submit();\" data-toggle=\"tooltip\" data-original-title=\"Save\"><i class=\"fa fa-save\"> Save </i></a>
\t\t\t\t\t\t\t\t";
        // line 77
        if ( !twig_test_empty(($context["module_id"] ?? null))) {
            // line 78
            echo "\t\t\t\t\t\t\t\t<a onclick=\"confirm('Are you sure?') ? location.href='";
            echo ($context["delete"] ?? null);
            echo "' : false;\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-danger\" data-original-title=\"";
            echo ($context["text_delete"] ?? null);
            echo "\"><i class=\"fa fa-trash-o\"> ";
            echo ($context["text_delete"] ?? null);
            echo " </i></a>
\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"tab-content-newsletter\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-module-newsletter\">
\t\t\t\t\t\t\t\t\t<table class=\"table noborder\">
\t\t\t\t\t\t\t\t\t\t<tr class=\"alert alert-warning\">
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 89
        echo ($context["text_display_mode"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"displaymode\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["displaymode"] ?? null) == $context["key"])) {
                echo " ";
                $context["selected"] = "selected=\"selected\"";
                echo " ";
            } else {
                echo " ";
                $context["selected"] = "";
                echo " ";
            }
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            echo ($context["selected"] ?? null);
            echo " value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["val"];
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-2\">";
        // line 102
        echo ($context["entry_module_name"] ?? null);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 104
        echo ($context["entry_module_name"] ?? null);
        echo " \" value=\"";
        echo ($context["name"] ?? null);
        echo "\" name=\"name\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t  \t<label class=\"control-label\" for=\"input-status\">";
        // line 109
        echo ($context["entry_background_banner"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-img\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 113
        if (twig_test_empty(($context["thumb"] ?? null))) {
            echo " ";
            echo ($context["placeholder"] ?? null);
            echo " ";
        } else {
            echo " ";
            echo ($context["thumb"] ?? null);
            echo " ";
        }
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"banner\" value=\"";
        // line 115
        echo ((($context["banner"] ?? null)) ? (($context["banner"] ?? null)) : (""));
        echo "\" id=\"input-icon-menu\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-2\">";
        // line 119
        echo ($context["entry_status"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 122
        if (($context["status"] ?? null)) {
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 124
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 127
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 129
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 135
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-module-language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 135);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 135);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 135);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 135);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 135);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane \" id=\"tab-module-language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table noborder\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-2\">";
            // line 143
            echo ($context["entry_description"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" data-toggle=\"summernote\" id=\"description-";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145);
            echo "\" name=\"description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145);
            echo "]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 146
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null)) : (""));
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-2\">";
            // line 151
            echo ($context["entry_description_bottom"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" data-toggle=\"summernote\" id=\"social-";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
            echo "\" name=\"social[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
            echo "]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 154
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["social"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["social"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154)] ?? null) : null)) : (""));
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help\">";
            // line 156
            echo ($context["about_entry_description_bottom"] ?? null);
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div><!-- end div .panel-body -->
\t\t</div><!-- end div .panel -->
\t</div><!-- end div #page-content -->

</div><!-- end div #content -->
<script type=\"text/javascript\">
\t\$('#language a:first').tab('show');
</script>
<style type=\"text/css\">
\t.noborder tbody > tr > td {border: 1px solid #fff;}
\t.help {font-style:italic;}
</style>
";
        // line 181
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/webinewsletter/frontend_modules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 181,  477 => 162,  465 => 156,  460 => 154,  454 => 153,  449 => 151,  441 => 146,  435 => 145,  430 => 143,  423 => 140,  419 => 139,  415 => 137,  398 => 135,  394 => 134,  387 => 129,  382 => 127,  377 => 126,  372 => 124,  367 => 123,  365 => 122,  359 => 119,  352 => 115,  337 => 113,  330 => 109,  320 => 104,  315 => 102,  309 => 98,  296 => 96,  285 => 95,  281 => 94,  273 => 89,  262 => 80,  252 => 78,  250 => 77,  241 => 70,  238 => 69,  232 => 68,  219 => 66,  208 => 65,  204 => 64,  201 => 63,  199 => 62,  190 => 61,  179 => 60,  174 => 59,  172 => 58,  165 => 54,  160 => 52,  152 => 46,  149 => 45,  136 => 43,  129 => 42,  126 => 41,  121 => 40,  119 => 39,  115 => 37,  111 => 35,  103 => 30,  98 => 27,  90 => 23,  88 => 22,  85 => 21,  77 => 17,  75 => 16,  69 => 12,  58 => 10,  54 => 9,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/webinewsletter/frontend_modules.twig", "");
    }
}
