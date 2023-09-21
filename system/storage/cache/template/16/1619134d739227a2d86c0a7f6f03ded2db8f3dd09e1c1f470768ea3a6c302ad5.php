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

/* extension/module/webinewsletter/draft_contact.twig */
class __TwigTemplate_a8f3cc64a03f2fa79accc2d2f3b938969391f05f10118e2e26dd6847ae1f96ff extends \Twig\Template
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
\t\t\t\t\t\t\t<form action=\"";
        // line 98
        echo ($context["url_delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-draft\">

\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        if ((($context["sort"] ?? null) == "subject")) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_subject"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_subject"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_subject"] ?? null);
            echo "\">";
            echo ($context["column_subject"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo ($context["column_to"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 116
        echo ($context["column_date_added"] ?? null);
        echo "</td>

\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 118
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 122
        if (array_key_exists("drafts", $context)) {
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["drafts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 126
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["draft"], "draft_id", [], "any", false, false, false, 126), twig_get_array_keys_filter(($context["selected"] ?? null)))) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["draft"], "draft_id", [], "any", false, false, false, 127);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["draft"], "draft_id", [], "any", false, false, false, 129);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["draft"], "subject", [], "any", false, false, false, 132);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["draft"], "to", [], "any", false, false, false, 133);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["draft"], "date_added", [], "any", false, false, false, 134);
                echo "</td>

\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><a href=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["draft"], "edit", [], "any", false, false, false, 136);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"5\">";
            // line 141
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 150
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 151
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end content form -->
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div><!-- end div .panel-body -->
\t\t</div><!-- end div .panel -->
\t</div><!-- end div #page-content -->

</div><!-- end div #content -->
";
        // line 164
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/webinewsletter/draft_contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 164,  445 => 151,  441 => 150,  433 => 144,  427 => 141,  424 => 140,  421 => 139,  410 => 136,  405 => 134,  401 => 133,  397 => 132,  394 => 131,  388 => 129,  382 => 127,  380 => 126,  376 => 124,  371 => 123,  369 => 122,  362 => 118,  357 => 116,  352 => 114,  348 => 112,  340 => 110,  330 => 108,  328 => 107,  316 => 98,  307 => 91,  303 => 89,  296 => 87,  285 => 86,  283 => 85,  275 => 84,  266 => 83,  264 => 82,  258 => 81,  253 => 80,  251 => 79,  246 => 78,  244 => 77,  240 => 76,  236 => 75,  231 => 74,  229 => 73,  223 => 72,  218 => 71,  216 => 70,  212 => 69,  206 => 68,  202 => 67,  197 => 66,  195 => 65,  189 => 64,  184 => 63,  182 => 62,  177 => 61,  175 => 60,  172 => 59,  170 => 58,  167 => 57,  162 => 54,  153 => 47,  150 => 46,  137 => 44,  130 => 43,  127 => 42,  122 => 41,  120 => 40,  116 => 38,  111 => 35,  103 => 30,  98 => 27,  90 => 23,  88 => 22,  85 => 21,  77 => 17,  75 => 16,  69 => 12,  58 => 10,  54 => 9,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/webinewsletter/draft_contact.twig", "");
    }
}
