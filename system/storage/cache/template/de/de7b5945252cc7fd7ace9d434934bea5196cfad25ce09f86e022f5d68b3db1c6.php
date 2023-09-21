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

/* extension/module/webinewsletter/contact.twig */
class __TwigTemplate_1aefdd46273481d9dc398f68ba3bf9d8fdd62884b7311a918f3d340faf547d6e extends \Twig\Template
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
        if ((($context["success"] ?? null) &&  !twig_test_empty(($context["success"] ?? null)))) {
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

\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"heading\"><h3>";
        // line 54
        echo ($context["text_create_newsletter"] ?? null);
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
\t\t\t\t\t
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<!-- content -->
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"draft_id\" value=\"";
        // line 99
        echo ($context["draft_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-store\">";
        // line 101
        echo ($context["entry_store"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"store_id\" id=\"input-store\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 104
        echo ($context["text_default"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 106) == ($context["store_id"] ?? null))) {
                echo " ";
                $context["selected"] = "selected='selected'";
                echo " ";
            } else {
                echo " ";
                $context["selected"] = "";
                echo " ";
            }
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
            echo ($context["selected"] ?? null);
            echo " value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 107);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 107);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-to\">";
        // line 113
        echo ($context["entry_to"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"to\" id=\"input-to\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tos"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["key"] == ($context["to"] ?? null))) {
                echo " ";
                $context["selected"] = "selected='selected'";
                echo " ";
            } else {
                echo " ";
                $context["selected"] = "";
                echo " ";
            }
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            echo ($context["selected"] ?? null);
            echo " value=\"";
            echo $context["key"];
            echo "\">";
            echo $context["value"];
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group to\" id=\"to-customer-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 124
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 128);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 128);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group to\" id=\"to-customer\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 134
        echo ($context["help_customer"] ?? null);
        echo "\">";
        echo ($context["entry_customer"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"customers\" value=\"\" placeholder=\"";
        // line 136
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 138
        if ((($context["customers"] ?? null) != "")) {
            // line 139
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 140
                echo "\t\t\t\t\t\t\t\t\t\t\t<div id=\"customer";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "customer_id", [], "any", false, false, false, 140);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i> ";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 141);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"customer[]\" value=\"";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["item"], "customer_id", [], "any", false, false, false, 142);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group to\" id=\"to-affiliate\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 150
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"affiliates\" value=\"\" placeholder=\"";
        // line 152
        echo ($context["entry_affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 154
        if ((($context["affiliates"] ?? null) != "")) {
            // line 155
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["affiliates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 156
                echo "\t\t\t\t\t\t\t\t\t\t\t<div id=\"affiliate";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "affiliate_id", [], "any", false, false, false, 156);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i> ";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 157);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"affiliate[]\" value=\"";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["item"], "affiliate_id", [], "any", false, false, false, 158);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group to\" id=\"to-product\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 166
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"products\" value=\"\" placeholder=\"";
        // line 168
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 170
        if ((($context["products"] ?? null) != "")) {
            // line 171
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t\t<div id=\"product";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "product_id", [], "any", false, false, false, 172);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i> ";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 173);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[]\" value=\"";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["item"], "product_id", [], "any", false, false, false, 174);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 178
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-subject\">";
        // line 182
        echo ($context["entry_subject"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" value=\"";
        // line 184
        echo ($context["subject"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_subject"] ?? null);
        echo "\" id=\"input-subject\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 188
        echo ($context["entry_message"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"";
        // line 190
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control\" data-toggle=\"summernote\">";
        echo ($context["message"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end content form -->
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div><!-- end div .panel-body -->
\t\t</div><!-- end div .panel -->
\t</div><!-- end div #page-content -->

</div><!-- end div #content -->

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

<script type=\"text/javascript\"><!--
\$('#input-message').summernote({
\theight: 300
});
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'to\\']').on('change', function() {
\t\$('.to').hide();

\t\$('#to-' + this.value.replace('_', '-')).show();
});
\$('select[name=\\'to\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
// Customers
\$('input[name=\\'customers\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 228
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'customers\\']').val('');

\t\t\$('#input-customer' + item['value']).remove();

\t\t\$('#input-customer').parent().find('.well').append('<div id=\"customer' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"customer[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-customer').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Affiliates
\$('input[name=\\'affiliates\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=marketing/affiliate/autocomplete&user_token=";
        // line 257
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['affiliate_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'affiliates\\']').val('');

\t\t\$('#input-affiliate' + item['value']).remove();

\t\t\$('#input-affiliate').parent().find('.well').append('<div id=\"affiliate' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"affiliate[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-affiliate').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Products
\$('input[name=\\'products\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 286
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'products\\']').val('');

\t\t\$('#input-product' + item['value']).remove();

\t\t\$('#input-product').parent().find('.well').append('<div id=\"product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-product').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

function draft(url) {
\t\$('textarea[name=\\'message\\']').val(\$('#input-message').text());
\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('#content select, #content input, #content textarea'),
\t\tdataType: 'json',
\t\tcomplete: function() {
\t\t\t\$('#button-draft').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['subject']) {
\t\t\t\t\t\$('input[name=\\'subject\\']').after('<div class=\"text-danger\">' + json['error']['subject'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['message']) {
\t\t\t\t\t\$('textarea[name=\\'message\\']').parent().append('<div class=\"text-danger\">' + json['error']['message'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t}

\t\t}
\t});
}

function send(url) {
\t\$('textarea[name=\\'message\\']').val(\$('#input-message').text());

\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('#content select, #content input, #content textarea'),
\t\tdataType: 'json',
\t\tcomplete: function() {
\t\t\t\$('#button-send').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['subject']) {
\t\t\t\t\t\$('input[name=\\'subject\\']').after('<div class=\"text-danger\">' + json['error']['subject'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['message']) {
\t\t\t\t\t\$('textarea[name=\\'message\\']').parent().append('<div class=\"text-danger\">' + json['error']['message'] + '</div>');
\t\t\t\t}
\t\t\t}
\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t}
\t\t\t
\t\t}
\t});
}
//--></script>
";
        // line 381
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/webinewsletter/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  795 => 381,  697 => 286,  665 => 257,  633 => 228,  590 => 190,  585 => 188,  576 => 184,  571 => 182,  565 => 178,  562 => 177,  553 => 174,  549 => 173,  544 => 172,  539 => 171,  537 => 170,  532 => 168,  525 => 166,  519 => 162,  516 => 161,  507 => 158,  503 => 157,  498 => 156,  493 => 155,  491 => 154,  486 => 152,  479 => 150,  473 => 146,  470 => 145,  461 => 142,  457 => 141,  452 => 140,  447 => 139,  445 => 138,  440 => 136,  433 => 134,  427 => 130,  416 => 128,  412 => 127,  406 => 124,  400 => 120,  387 => 118,  376 => 117,  372 => 116,  366 => 113,  360 => 109,  347 => 107,  336 => 106,  332 => 105,  328 => 104,  322 => 101,  317 => 99,  307 => 91,  303 => 89,  296 => 87,  285 => 86,  283 => 85,  275 => 84,  266 => 83,  264 => 82,  258 => 81,  253 => 80,  251 => 79,  246 => 78,  244 => 77,  240 => 76,  236 => 75,  231 => 74,  229 => 73,  223 => 72,  218 => 71,  216 => 70,  212 => 69,  206 => 68,  202 => 67,  197 => 66,  195 => 65,  189 => 64,  184 => 63,  182 => 62,  177 => 61,  175 => 60,  172 => 59,  170 => 58,  167 => 57,  162 => 54,  153 => 47,  150 => 46,  137 => 44,  130 => 43,  127 => 42,  122 => 41,  120 => 40,  116 => 38,  111 => 35,  103 => 30,  98 => 27,  90 => 23,  88 => 22,  85 => 21,  77 => 17,  75 => 16,  69 => 12,  58 => 10,  54 => 9,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/webinewsletter/contact.twig", "");
    }
}
