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

/* extension/module/webinewsletter/subscribes.twig */
class __TwigTemplate_91704c9140376fbcbd4a3b46f68e3bc2945e57c45d73c4d9a888dfdda28082cb extends \Twig\Template
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

\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<div class=\"logo\"><h3>";
        // line 35
        echo ($context["heading_title"] ?? null);
        echo "</h3></div>
\t\t\t\t\t<div class=\"slidebar\">
\t\t\t\t\t\t";
        // line 38
        echo "\t\t\t\t\t\t<div class=\"sidebar-nav\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t";
        // line 40
        if (array_key_exists("menus", $context)) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["menu"]) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["class_active"] = "";
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((array_key_exists("menu_active", $context) && (($context["menu_active"] ?? null) == $context["key"]))) {
                    echo " ";
                    $context["class_active"] = "active";
                    echo " ";
                }
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"";
                echo ($context["class_active"] ?? null);
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "link", [], "any", false, false, false, 44);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 44);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear clr\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<div class=\"heading\"><h3>";
        // line 54
        echo ($context["text_subscribes"] ?? null);
        echo "</h1></div>
\t\t\t\t\t<div class=\"toolbar\">
\t\t\t\t\t\t";
        // line 57
        echo "\t\t\t\t\t\t<div class=\"pull-right webibtn\">
\t\t\t\t\t\t\t";
        // line 58
        if (array_key_exists("menu_active", $context)) {
            // line 59
            echo "
\t\t\t\t\t\t\t\t";
            // line 60
            if ((($context["menu_active"] ?? null) == "subscribes")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#action').val('delete');\$('#form').submit();\" class=\"btn btn-danger\">";
                echo ($context["button_delete"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } elseif ((            // line 62
($context["menu_active"] ?? null) == "modules")) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#form').submit();\" class=\"btn btn-primary\">";
                echo ($context["button_save"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 64
                echo ($context["cancel"] ?? null);
                echo "\" class=\"btn btn-danger\">";
                echo ($context["button_cancel"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t";
            } elseif ((            // line 65
($context["menu_active"] ?? null) == "templates")) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#action').val('copy_default');\$('#form').submit();\" class=\"btn btn-primary\">";
                echo ($context["button_copy_default"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#action').val('copy');\$('#form').submit();\" class=\"btn btn-success\">";
                // line 67
                echo ($context["button_copy"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 68
                echo ($context["insert_link"] ?? null);
                echo "\" class=\"btn btn-success\">";
                echo ($context["button_insert"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#action').val('delete');\$('#form').submit();\" class=\"btn btn-danger\">";
                // line 69
                echo ($context["button_delete"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t";
            } elseif ((            // line 70
($context["menu_active"] ?? null) == "template")) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#form').submit();\" class=\"btn btn-success\">";
                echo ($context["button_save"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 72
                echo ($context["cancel"] ?? null);
                echo "\" class=\"btn btn-danger\">";
                echo ($context["button_cancel"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t";
            } elseif ((            // line 73
($context["menu_active"] ?? null) == "create_newsletter")) {
                // line 74
                echo "\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#action').val('save_draft');\$('#form').submit();\" class=\"btn btn-primary\">";
                echo ($context["button_save_draft"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#action').val('send');\$('#form').submit();\" class=\"btn btn-success\">";
                // line 75
                echo ($context["button_send"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#action').val('check_spam');\$('#form').submit();\" class=\"btn btn-warning\">";
                // line 76
                echo ($context["button_check"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t";
            } elseif ((            // line 77
($context["menu_active"] ?? null) == "draft")) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#action').val('delete');\$('#form').submit();\" class=\"btn btn-danger\">";
                echo ($context["button_delete"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } elseif ((            // line 79
($context["menu_active"] ?? null) == "config")) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#form').submit();\" class=\"btn btn-primary\">";
                echo ($context["button_save"] ?? null);
                echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 81
                echo ($context["cancel"] ?? null);
                echo "\" class=\"btn btn-danger\">";
                echo ($context["button_cancel"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t";
            } elseif ((            // line 82
($context["menu_active"] ?? null) == "contact")) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t<button id=\"button-send\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_send"] ?? null);
                echo "\" class=\"btn btn-primary\" onclick=\"send('";
                echo ($context["url_send"] ?? null);
                echo "');\"><i class=\"fa fa-envelope\"></i> ";
                echo ($context["button_send"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t<button id=\"button-draft\" data-toggle=\"tooltip\" title=\"";
                // line 84
                echo ($context["button_draft"] ?? null);
                echo "\" class=\"btn btn-success\" onclick=\"draft('";
                echo ($context["url_draft"] ?? null);
                echo "');\"><i class=\"fa fa-save\"></i> ";
                echo ($context["button_draft"] ?? null);
                echo "</button>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t";
            } elseif ((            // line 85
($context["menu_active"] ?? null) == "draft_contact")) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["add"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> <a href=\"";
                echo ($context["repair"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_rebuild"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 87
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
                echo ($context["text_confirm"] ?? null);
                echo "') ? \$('#form-draft').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t\t\t\t\t";
            }
            // line 89
            echo "
\t\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br/>
\t\t\t\t\t<!-- ###################################### -->
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<form action=\"";
        // line 96
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t\t\t  <input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t  <table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t<td class=\"left\"><input class=\"form-control\" type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').attr('checked', this.checked);\"></td>
\t\t\t\t\t\t\t\t<td class=\"left\">
\t\t\t\t\t\t\t\t\t";
        // line 103
        if ((($context["sort"] ?? null) == "name")) {
            // line 104
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        } else {
            // line 106
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        }
        // line 108
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"left\">
\t\t\t\t\t\t\t\t\t";
        // line 110
        if ((($context["sort"] ?? null) == "email")) {
            // line 111
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        } else {
            // line 113
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        }
        // line 115
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"right\">
\t\t\t\t\t\t\t\t\t";
        // line 117
        if ((($context["sort"] ?? null) == "customer_group_id")) {
            // line 118
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_customer_group_id"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        } else {
            // line 120
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_customer_group_id"] ?? null);
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        }
        // line 122
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"right\">
\t\t\t\t\t\t\t\t\t";
        // line 124
        if ((($context["sort"] ?? null) == "s.action")) {
            // line 125
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_subscribe"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_subscribe"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        } else {
            // line 127
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_subscribe"] ?? null);
            echo "\">";
            echo ($context["column_subscribe"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        }
        // line 129
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"right\">
\t\t\t\t\t\t\t\t\t";
        // line 131
        if ((($context["sort"] ?? null) == "s.store_id")) {
            // line 132
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_store_id"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t \t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t\t\t  \t<a href=\"";
            echo ($context["sort_store_id"] ?? null);
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t  \t";
        }
        // line 136
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"right\">";
        // line 137
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t  <tr class=\"filter\">
\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t<td><input class=\"form-control\" type=\"text\" name=\"filter_name\" value=\"";
        // line 143
        echo ($context["filter_name"] ?? null);
        echo "\" /></td>
\t\t\t\t\t\t\t\t<td><input class=\"form-control\" type=\"text\" name=\"filter_email\" value=\"";
        // line 144
        echo ($context["filter_email"] ?? null);
        echo "\" /></td>
\t\t\t\t\t\t\t\t<td align=\"right\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_customer_group_id\">
\t\t\t\t\t\t\t\t\t<option =\"\"></option>
\t\t\t\t\t\t\t\t\t";
        // line 148
        if (array_key_exists("customer_groups", $context)) {
            // line 149
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 150
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($context["key"] == ($context["filter_customer_group_id"] ?? null))) {
                    echo " ";
                    $context["selected"] = "selected=\"selected\"";
                    echo " ";
                }
                // line 151
                echo "\t\t\t\t\t\t\t\t\t  \t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ($context["selected"] ?? null);
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t\t\t\t  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t\t\t\t\t\t\t  \t";
        }
        // line 154
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td align=\"right\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_action\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 159
        if ((($context["filter_action"] ?? null) == "1")) {
            // line 160
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 162
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((($context["filter_action"] ?? null) == "0")) {
            // line 165
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 167
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 169
        echo "\t\t\t\t\t\t\t\t  \t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td align=\"right\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_store_id\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 174
        if (array_key_exists("stores", $context)) {
            // line 175
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($context["filter_store_id"] ?? null) != "") && ($context["key"] == ($context["filter_store_id"] ?? null)))) {
                    echo " ";
                    $context["selected"] = "selected=\"selected\"";
                    echo " ";
                }
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ($context["selected"] ?? null);
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t\t\t\t\t\t\t\t\t  \t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t\t  \t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td align=\"right\"><a onclick=\"filter();\" class=\"btn btn-warning\">";
        // line 182
        echo ($context["button_filter"] ?? null);
        echo "</a></td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  \t";
        // line 184
        if (array_key_exists("subscribes", $context)) {
            // line 185
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscribes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subsribe"]) {
                // line 186
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" value=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["subsribe"], "subscribe_id", [], "any", false, false, false, 187);
                echo "\" name=\"selected[]\"></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"left\">";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["subsribe"], "name", [], "any", false, false, false, 188);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"left\">";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["subsribe"], "email", [], "any", false, false, false, 189);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"left\">";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["subsribe"], "customer_group", [], "any", false, false, false, 190);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"right\">";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["subsribe"], "subscribe", [], "any", false, false, false, 191);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"right\">";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["subsribe"], "store", [], "any", false, false, false, 192);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"right\">
\t\t\t\t\t\t\t\t\t\t";
                // line 194
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subsribe"], "action", [], "any", false, false, false, 194));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t  \t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "href", [], "any", false, false, false, 195);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "text", [], "any", false, false, false, 195);
                    echo "</a>
\t\t\t\t\t\t\t\t\t  \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subsribe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "\t\t\t\t\t\t\t  \t";
        } else {
            // line 201
            echo "\t\t\t\t\t\t\t\t  \t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"center\" colspan=\"7\">";
            // line 202
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t  \t</tr>
\t\t\t\t\t\t\t  \t";
        }
        // line 205
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t  </table>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div class=\"pagination\">";
        // line 208
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ###################################### -->
\t\t\t\t</div><!-- end div .col-sm-9 -->
\t\t\t</div><!-- end div .panel-body -->
\t\t</div><!-- end div .panel-default -->
\t</div><!-- end div #page-content -->
</div><!-- end div #content -->

";
        // line 217
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/webinewsletter/subscribes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 217,  650 => 208,  645 => 205,  639 => 202,  636 => 201,  633 => 200,  625 => 197,  614 => 195,  610 => 194,  605 => 192,  601 => 191,  597 => 190,  593 => 189,  589 => 188,  585 => 187,  582 => 186,  577 => 185,  575 => 184,  570 => 182,  566 => 180,  563 => 179,  550 => 177,  543 => 176,  538 => 175,  536 => 174,  529 => 169,  523 => 167,  517 => 165,  514 => 164,  508 => 162,  502 => 160,  500 => 159,  493 => 154,  490 => 153,  477 => 151,  470 => 150,  465 => 149,  463 => 148,  456 => 144,  452 => 143,  443 => 137,  440 => 136,  432 => 134,  422 => 132,  420 => 131,  416 => 129,  408 => 127,  398 => 125,  396 => 124,  392 => 122,  384 => 120,  374 => 118,  372 => 117,  368 => 115,  360 => 113,  350 => 111,  348 => 110,  344 => 108,  336 => 106,  326 => 104,  324 => 103,  314 => 96,  307 => 91,  303 => 89,  296 => 87,  285 => 86,  283 => 85,  275 => 84,  266 => 83,  264 => 82,  258 => 81,  253 => 80,  251 => 79,  246 => 78,  244 => 77,  240 => 76,  236 => 75,  231 => 74,  229 => 73,  223 => 72,  218 => 71,  216 => 70,  212 => 69,  206 => 68,  202 => 67,  197 => 66,  195 => 65,  189 => 64,  184 => 63,  182 => 62,  177 => 61,  175 => 60,  172 => 59,  170 => 58,  167 => 57,  162 => 54,  153 => 47,  150 => 46,  137 => 44,  130 => 43,  127 => 42,  122 => 41,  120 => 40,  116 => 38,  111 => 35,  103 => 30,  98 => 27,  90 => 23,  88 => 22,  85 => 21,  77 => 17,  75 => 16,  69 => 12,  58 => 10,  54 => 9,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/webinewsletter/subscribes.twig", "");
    }
}
