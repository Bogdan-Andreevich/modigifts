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

/* extension/payment/op_googlepay.twig */
class __TwigTemplate_1e1180daa0226fa882189628efee7b24022796d3cb9e9cff4556d8e3f04b61ba extends \Twig\Template
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
        <button type=\"submit\" form=\"form-op_googlepay\" data-toggle=\"tooltip\" title=\"";
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
            echo "\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
      ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t \t <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-op_googlepay\" class=\"form-horizontal\">
\t \t \t<div class=\"form-group required\">
\t            <label class=\"col-sm-2 control-label\" for=\"input-account\">";
        // line 29
        echo ($context["entry_account"] ?? null);
        echo "</label>
\t            <div class=\"col-sm-10\">
\t              <input type=\"text\" name=\"payment_op_googlepay_account\" value=\"";
        // line 31
        echo ($context["payment_op_googlepay_account"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_account"] ?? null);
        echo "\" id=\"input-account\" class=\"form-control\" />
\t\t\t\t\t";
        // line 32
        if (($context["error_account"] ?? null)) {
            // line 33
            echo "\t              <div class=\"text-danger\">";
            echo ($context["error_account"] ?? null);
            echo "</div>
                    ";
        }
        // line 35
        echo "\t            </div>
\t        </div>
\t        <div class=\"form-group required\">
\t            <label class=\"col-sm-2 control-label\" for=\"input-terminal\">";
        // line 38
        echo ($context["entry_terminal"] ?? null);
        echo "</label>
\t            <div class=\"col-sm-10\">
\t              <input type=\"text\" name=\"payment_op_googlepay_terminal\" value=\"";
        // line 40
        echo ($context["payment_op_googlepay_terminal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_terminal"] ?? null);
        echo "\" id=\"input-terminal\" class=\"form-control\" />
\t\t\t\t\t";
        // line 41
        if (($context["error_terminal"] ?? null)) {
            // line 42
            echo "\t              <div class=\"text-danger\">";
            echo ($context["error_terminal"] ?? null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 44
        echo "\t            </div>
\t        </div>
\t        <div class=\"form-group required\">
\t            <label class=\"col-sm-2 control-label\" for=\"input-securecode\">";
        // line 47
        echo ($context["entry_securecode"] ?? null);
        echo "</label>
\t            <div class=\"col-sm-10\">
\t              <input type=\"text\" name=\"payment_op_googlepay_securecode\" value=\"";
        // line 49
        echo ($context["payment_op_googlepay_securecode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_securecode"] ?? null);
        echo "\" id=\"input-securecode\" class=\"form-control\" />
\t\t\t\t  ";
        // line 50
        if (($context["error_securecode"] ?? null)) {
            // line 51
            echo "\t              <div class=\"text-danger\">";
            echo ($context["error_securecode"] ?? null);
            echo "</div>
\t              ";
        }
        // line 53
        echo "\t             
\t            </div>
\t        </div>
\t        
\t        
\t        <div class=\"form-group\">
\t            <label class=\"col-sm-2 control-label\" for=\"input-transaction\"><span data-toggle=\"tooltip\" title=\"";
        // line 59
        echo ($context["text_pay_sandbox"] ?? null);
        echo "\">";
        echo ($context["entry_transaction"] ?? null);
        echo "</span></label>
\t            <div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"payment_op_googlepay_transaction\" id=\"input-transaction\" class=\"form-control\">
                        ";
        // line 62
        if ((($context["payment_op_googlepay_transaction"] ?? null) == ($context["text_pay"] ?? null))) {
            // line 63
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo ($context["text_pay"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["text_pay"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 65
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo ($context["text_pay"] ?? null);
            echo "\">";
            echo ($context["text_pay"] ?? null);
            echo "</option>
                        ";
        }
        // line 67
        echo "
                        ";
        // line 68
        if ((($context["payment_op_googlepay_transaction"] ?? null) == ($context["text_test"] ?? null))) {
            // line 69
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo ($context["text_test"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["text_test"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo ($context["text_test"] ?? null);
            echo "\">";
            echo ($context["text_test"] ?? null);
            echo "</option>
                        ";
        }
        // line 73
        echo "\t\t\t\t\t</select>
\t            </div>
\t        </div>
\t        <div class=\"form-group\">
\t            <label class=\"col-sm-2 control-label\" for=\"input-pay-mode\">";
        // line 77
        echo ($context["entry_pay_mode"] ?? null);
        echo "</label>
\t            <div class=\"col-sm-10\">
\t              <select name=\"payment_op_googlepay_pay_mode\" id=\"input-pay-mode\" class=\"form-control\">
\t\t\t\t\t";
        // line 80
        if ((($context["payment_op_googlepay_pay_mode"] ?? null) == 1)) {
            // line 81
            echo "\t                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_pay_iframe"] ?? null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 83
            echo "\t                <option value=\"1\">";
            echo ($context["text_pay_iframe"] ?? null);
            echo "</option>
\t                ";
        }
        // line 85
        echo "
\t\t\t\t\t";
        // line 86
        if ((($context["payment_op_googlepay_pay_mode"] ?? null) == 0)) {
            // line 87
            echo "\t                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_pay_redirect"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 89
            echo "\t                <option value=\"0\">";
            echo ($context["text_pay_redirect"] ?? null);
            echo "</option>
                    ";
        }
        // line 91
        echo "\t              </select>
\t            </div>
\t        </div>
\t\t <div class=\"form-group\">
\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-logs\">";
        // line 95
        echo ($context["entry_logs"] ?? null);
        echo "</label>
\t\t\t <div class=\"col-sm-10\">
\t\t\t\t <select name=\"payment_op_googlepay_logs\" id=\"input-logs\" class=\"form-control\">
\t\t\t\t\t ";
        // line 98
        if ((($context["payment_op_googlepay_logs"] ?? null) == ($context["text_logs_true"] ?? null))) {
            // line 99
            echo "\t\t\t\t\t <option value=\"";
            echo ($context["text_logs_true"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["text_logs_true"] ?? null);
            echo "</option>
\t\t\t\t\t ";
        } else {
            // line 101
            echo "\t\t\t\t\t <option value=\"";
            echo ($context["text_logs_true"] ?? null);
            echo "\">";
            echo ($context["text_logs_true"] ?? null);
            echo "</option>
\t\t\t\t\t ";
        }
        // line 103
        echo "
\t\t\t\t\t ";
        // line 104
        if ((($context["payment_op_googlepay_logs"] ?? null) == ($context["text_logs_false"] ?? null))) {
            // line 105
            echo "\t\t\t\t\t <option value=\"";
            echo ($context["text_logs_false"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["text_logs_false"] ?? null);
            echo "</option>
\t\t\t\t\t ";
        } else {
            // line 107
            echo "\t\t\t\t\t <option value=\"";
            echo ($context["text_logs_false"] ?? null);
            echo "\">";
            echo ($context["text_logs_false"] ?? null);
            echo "</option>
\t\t\t\t\t ";
        }
        // line 109
        echo "\t\t\t\t </select>
\t\t\t </div>
\t\t</div>
\t\t
\t        <div class=\"form-group\">
\t            <label class=\"col-sm-2 control-label\" for=\"input-default-order-status\">";
        // line 114
        echo ($context["entry_default_order_status"] ?? null);
        echo "</label>
\t            <div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"payment_op_googlepay_default_order_status_id\" id=\"input-default-order-status\" class=\"form-control\">
                        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 118
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 118) == ($context["payment_op_googlepay_default_order_status_id"] ?? null))) {
                // line 119
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 119);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 119);
                echo "</option>
                            ";
            } else {
                // line 121
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 121);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 121);
                echo "</option>
                            ";
            }
            // line 123
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t</select>
\t            </div>
\t        </div>
\t\t\t <div class=\"form-group\">
\t\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-success-order-status\">";
        // line 128
        echo ($context["entry_success_order_status"] ?? null);
        echo "</label>
\t\t\t\t <div class=\"col-sm-10\">
\t\t\t\t\t <select name=\"payment_op_googlepay_success_order_status_id\" id=\"input-success-order-status\" class=\"form-control\">
                         ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 132
            echo "                             ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 132) == ($context["payment_op_googlepay_success_order_status_id"] ?? null))) {
                // line 133
                echo "\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 133);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 133);
                echo "</option>
                             ";
            } else {
                // line 135
                echo "\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 135);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 135);
                echo "</option>
                             ";
            }
            // line 137
            echo "                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t\t </select>
\t\t\t\t </div>
\t\t\t </div>
\t\t\t <div class=\"form-group\">
\t\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-failed-order-status\">";
        // line 142
        echo ($context["entry_failed_order_status"] ?? null);
        echo "</label>
\t\t\t\t <div class=\"col-sm-10\">
\t\t\t\t\t <select name=\"payment_op_googlepay_failed_order_status_id\" id=\"input-failed-order-status\" class=\"form-control\">
                         ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 146
            echo "                             ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 146) == ($context["payment_op_googlepay_failed_order_status_id"] ?? null))) {
                // line 147
                echo "\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 147);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 147);
                echo "</option>
                             ";
            } else {
                // line 149
                echo "\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 149);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 149);
                echo "</option>
                             ";
            }
            // line 151
            echo "                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "\t\t\t\t\t </select>
\t\t\t\t </div>
\t\t\t </div>
\t\t\t <div class=\"form-group\">
\t\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-pending-order-status\">";
        // line 156
        echo ($context["entry_pending_order_status"] ?? null);
        echo "</label>
\t\t\t\t <div class=\"col-sm-10\">
\t\t\t\t\t <select name=\"payment_op_googlepay_pending_order_status_id\" id=\"input-pending-order-status\" class=\"form-control\">
                         ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 160
            echo "                             ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 160) == ($context["payment_op_googlepay_pending_order_status_id"] ?? null))) {
                // line 161
                echo "\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 161);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 161);
                echo "</option>
                             ";
            } else {
                // line 163
                echo "\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 163);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 163);
                echo "</option>
                             ";
            }
            // line 165
            echo "                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t\t\t </select>
\t\t\t\t </div>
\t\t\t </div>
\t\t\t <div class=\"form-group\">
\t\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 170
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
\t\t\t\t <div class=\"col-sm-10\">
\t\t\t\t\t <select name=\"payment_op_googlepay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
\t\t\t\t\t\t <option value=\"0\">";
        // line 173
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                         ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 175
            echo "                             ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 175) == ($context["payment_op_googlepay_geo_zone_id"] ?? null))) {
                // line 176
                echo "\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 176);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 176);
                echo "</option>
                             ";
            } else {
                // line 178
                echo "\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 178);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 178);
                echo "</option>
                             ";
            }
            // line 180
            echo "                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t\t\t </select>
\t\t\t\t </div>
\t\t\t </div>
\t\t\t <div class=\"form-group\">
\t\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 185
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t <div class=\"col-sm-10\">
\t\t\t\t\t <select name=\"payment_op_googlepay_status\" id=\"input-status\" class=\"form-control\">
                         ";
        // line 188
        if (($context["payment_op_googlepay_status"] ?? null)) {
            // line 189
            echo "\t\t\t\t\t\t\t <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t <option value=\"0\">";
            // line 190
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                         ";
        } else {
            // line 192
            echo "\t\t\t\t\t\t\t <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t <option value=\"0\" selected=\"selected\">";
            // line 193
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                         ";
        }
        // line 195
        echo "\t\t\t\t\t </select>
\t\t\t\t </div>
\t\t\t </div>
\t\t\t <div class=\"form-group\">
\t\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 199
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t <div class=\"col-sm-10\">
\t\t\t\t\t <input type=\"text\" name=\"payment_op_googlepay_sort_order\" value=\"";
        // line 201
        echo ($context["payment_op_googlepay_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
\t\t\t\t </div>
\t\t\t </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 207
        echo ($context["entry_location"] ?? null);
        echo "</label>
\t\t\t <div class=\"col-sm-10\">
\t\t\t\t<select name=\"payment_op_googlepay_location\" id=\"input-location\" class=\"form-control\">
\t\t\t\t\t";
        // line 210
        if (($context["payment_op_googlepay_location"] ?? null)) {
            // line 211
            echo "\t\t\t\t   <option value=\"1\" selected=\"selected\">";
            echo ($context["text_show"] ?? null);
            echo "</option>
\t\t\t\t   <option value=\"0\">";
            // line 212
            echo ($context["text_hide"] ?? null);
            echo "</option>
\t\t\t\t   ";
        } else {
            // line 214
            echo "\t\t\t\t   <option value=\"1\">";
            echo ($context["text_show"] ?? null);
            echo "</option>
\t\t\t\t   <option value=\"0\" selected=\"selected\">";
            // line 215
            echo ($context["text_hide"] ?? null);
            echo "</option>
\t\t\t\t   ";
        }
        // line 217
        echo "\t\t\t\t</select>
\t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"form-group \">
\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-locations\">";
        // line 221
        echo ($context["entry_locations"] ?? null);
        echo "</label>
\t\t\t <div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"payment_op_googlepay_locations\" value=\"";
        // line 223
        echo ($context["payment_op_googlepay_locations"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_locations"] ?? null);
        echo "\" id=\"input-terminal\" class=\"form-control\" />
\t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-entity\">";
        // line 227
        echo ($context["entry_entity"] ?? null);
        echo "</label>
\t\t\t <div class=\"col-sm-10\">
\t\t\t\t<select name=\"payment_op_googlepay_entity\" id=\"input-location\" class=\"form-control\">
\t\t\t\t\t";
        // line 230
        if (($context["payment_op_googlepay_entity"] ?? null)) {
            // line 231
            echo "\t\t\t\t   <option value=\"1\" selected=\"selected\">";
            echo ($context["text_shows"] ?? null);
            echo "</option>
\t\t\t\t   <option value=\"0\">";
            // line 232
            echo ($context["text_hides"] ?? null);
            echo "</option>
\t\t\t\t   ";
        } else {
            // line 234
            echo "\t\t\t\t   <option value=\"1\">";
            echo ($context["text_shows"] ?? null);
            echo "</option>
\t\t\t\t   <option value=\"0\" selected=\"selected\">";
            // line 235
            echo ($context["text_hides"] ?? null);
            echo "</option>
\t\t\t\t   ";
        }
        // line 237
        echo "\t\t\t\t</select>
\t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"form-group \">
\t\t\t <label class=\"col-sm-2 control-label\" for=\"input-entitys\">";
        // line 241
        echo ($context["entry_entitys"] ?? null);
        echo "</label>
\t\t\t <div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"payment_op_googlepay_entitys\" value=\"";
        // line 243
        echo ($context["payment_op_googlepay_entitys"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_entitys"] ?? null);
        echo "\" id=\"input-terminal\" class=\"form-control\" />
\t\t\t </div>
\t\t\t</div>

\t \t </form>
      </div>
    </div>
  </div>
</div>
";
        // line 252
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/op_googlepay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 252,  676 => 243,  671 => 241,  665 => 237,  660 => 235,  655 => 234,  650 => 232,  645 => 231,  643 => 230,  637 => 227,  628 => 223,  623 => 221,  617 => 217,  612 => 215,  607 => 214,  602 => 212,  597 => 211,  595 => 210,  589 => 207,  578 => 201,  573 => 199,  567 => 195,  562 => 193,  557 => 192,  552 => 190,  547 => 189,  545 => 188,  539 => 185,  533 => 181,  527 => 180,  519 => 178,  511 => 176,  508 => 175,  504 => 174,  500 => 173,  494 => 170,  488 => 166,  482 => 165,  474 => 163,  466 => 161,  463 => 160,  459 => 159,  453 => 156,  447 => 152,  441 => 151,  433 => 149,  425 => 147,  422 => 146,  418 => 145,  412 => 142,  406 => 138,  400 => 137,  392 => 135,  384 => 133,  381 => 132,  377 => 131,  371 => 128,  365 => 124,  359 => 123,  351 => 121,  343 => 119,  340 => 118,  336 => 117,  330 => 114,  323 => 109,  315 => 107,  307 => 105,  305 => 104,  302 => 103,  294 => 101,  286 => 99,  284 => 98,  278 => 95,  272 => 91,  266 => 89,  260 => 87,  258 => 86,  255 => 85,  249 => 83,  243 => 81,  241 => 80,  235 => 77,  229 => 73,  221 => 71,  213 => 69,  211 => 68,  208 => 67,  200 => 65,  192 => 63,  190 => 62,  182 => 59,  174 => 53,  168 => 51,  166 => 50,  160 => 49,  155 => 47,  150 => 44,  144 => 42,  142 => 41,  136 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/op_googlepay.twig", "");
    }
}
