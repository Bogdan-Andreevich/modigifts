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

/* extension/module/pushconnect.twig */
class __TwigTemplate_baf7f307655b9d5bb6cd2b0edf61ae0e76a1ef7ade9bcc2ccb06ca725d484181 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-settings\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>

            <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 29
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 31
        echo ($context["text_settings"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">

                <form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-settings\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 37
        echo ($context["text_settings"] ?? null);
        echo "</a></li>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 39
            echo "                            <li><a href=\"#tab-";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["store"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["store_id"] ?? null) : null);
            echo "\" data-toggle=\"tab\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["store"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-settings\">
                            <fieldset>
                                <legend>";
        // line 45
        echo ($context["text_module_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 47
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_pushconnect_status\" class=\"form-control\">
                                            <option value=\"0\" ";
        // line 50
        if ((($context["module_pushconnect_status"] ?? null) == 0)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                            <option value=\"1\" ";
        // line 51
        if ((($context["module_pushconnect_status"] ?? null) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                                        </select>
                                    </div>
                                </div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 56
        echo ($context["entry_install"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" id=\"install-sw\" class=\"btn btn-success\">";
        // line 58
        echo ($context["entry_install_sw"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        if (($context["sw_installed"] ?? null)) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            echo ($context["text_install_warning"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>   
                            </fieldset>
                        </div>
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "                  
                            <div class=\"tab-pane\" id=\"tab-";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 67);
            echo "\">
                                <fieldset>
                                    <legend>";
            // line 69
            echo ($context["text_api_settings"] ?? null);
            echo "</legend>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 71
            echo ($context["entry_status"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"settings[";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 73);
            echo "][pushconnect_status]\" class=\"form-control\">
                                                <option value=\"0\" ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_status", [], "any", false, false, false, 74) == 0)) {
                echo " selected ";
            }
            echo ">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                                <option value=\"1\" ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_status", [], "any", false, false, false, 75) == 1)) {
                echo " selected ";
            }
            echo ">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 80
            echo ($context["entry_logging"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"settings[";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 82);
            echo "][pushconnect_logging]\" class=\"form-control\">
                                                <option value=\"0\" ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_logging", [], "any", false, false, false, 83) == 0)) {
                echo " selected ";
            }
            echo ">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                                <option value=\"1\" ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_logging", [], "any", false, false, false, 84) == 1)) {
                echo " selected ";
            }
            echo ">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                            <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 89
            echo ($context["entry_script"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"settings[";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 91);
            echo "][pushconnect_script]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_script", [], "any", false, false, false, 91);
            echo "\" placeholder=\"";
            echo ($context["entry_script"] ?? null);
            echo "\" class=\"form-control\" />\t\t\t\t\t\t\t\t\t
                                            ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["errors"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 92)] ?? null) : null), "pushconnect_script", [], "any", false, false, false, 92)) {
                // line 93
                echo "                                                <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["errors"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 93)] ?? null) : null), "pushconnect_script", [], "any", false, false, false, 93);
                echo "</div>
                                            ";
            }
            // line 95
            echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 98
            echo ($context["entry_api_key"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"settings[";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 100);
            echo "][pushconnect_api_key]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_api_key", [], "any", false, false, false, 100);
            echo "\" placeholder=\"";
            echo ($context["entry_api_key"] ?? null);
            echo "\" class=\"form-control\" />\t\t\t\t\t\t\t\t\t
                                            ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["errors"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 101)] ?? null) : null), "pushconnect_api_key", [], "any", false, false, false, 101)) {
                // line 102
                echo "                                                <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["errors"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 102)] ?? null) : null), "pushconnect_api_key", [], "any", false, false, false, 102);
                echo "</div>
                                            ";
            }
            // line 104
            echo "                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>";
            // line 108
            echo ($context["text_notification_settings"] ?? null);
            echo "</legend>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 110
            echo ($context["entry_order_updates"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"settings[";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 112);
            echo "][pushconnect_order_updates]\" class=\"form-control\">
                                                <option value=\"0\" ";
            // line 113
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_order_updates", [], "any", false, false, false, 113) == 0)) {
                echo " selected ";
            }
            echo ">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                                <option value=\"1\" ";
            // line 114
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_order_updates", [], "any", false, false, false, 114) == 1)) {
                echo " selected ";
            }
            echo ">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>";
            // line 120
            echo ($context["text_discount_module"] ?? null);
            echo "</legend>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 122
            echo ($context["entry_ot_module_status"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"settings[";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 124);
            echo "][pushconnect_ot_module_status]\" class=\"form-control\">
                                                <option value=\"0\" ";
            // line 125
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_ot_module_status", [], "any", false, false, false, 125) == 0)) {
                echo " selected ";
            }
            echo ">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                                <option value=\"1\" ";
            // line 126
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_ot_module_status", [], "any", false, false, false, 126) == 1)) {
                echo " selected ";
            }
            echo ">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 131
            echo ($context["entry_ot_module_discount_value"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"settings[";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 133);
            echo "][pushconnect_ot_module_discount_value]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_ot_module_discount_value", [], "any", false, false, false, 133);
            echo "\" placeholder=\"";
            echo ($context["entry_ot_module_discount_value"] ?? null);
            echo "\" class=\"form-control\" />
                                            ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["errors"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 134)] ?? null) : null), "pushconnect_ot_module_discount_value", [], "any", false, false, false, 134)) {
                // line 135
                echo "                                                <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["errors"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 135)] ?? null) : null), "pushconnect_ot_module_discount_value", [], "any", false, false, false, 135);
                echo "</div>
                                            ";
            }
            // line 137
            echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 140
            echo ($context["entry_ot_module_discount_type"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"settings[";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 142);
            echo "][pushconnect_ot_module_discount_type]\" class=\"form-control\">
                                                <option value=\"F\" ";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_ot_module_discount_type", [], "any", false, false, false, 143) == "F")) {
                echo " selected ";
            }
            echo ">";
            echo ($context["entry_ot_module_discount_type_fixed"] ?? null);
            echo "</option>
                                                <option value=\"P\" ";
            // line 144
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_ot_module_discount_type", [], "any", false, false, false, 144) == "P")) {
                echo " selected ";
            }
            echo ">";
            echo ($context["entry_ot_module_discount_type_percent"] ?? null);
            echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">
                                            <span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
            // line 150
            echo ($context["text_discount_times_hint"] ?? null);
            echo "\">";
            echo ($context["entry_ot_module_discount_times"] ?? null);
            echo "</span>
                                        </label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"settings[";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 153);
            echo "][pushconnect_ot_module_discount_times]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "pushconnect_ot_module_discount_times", [], "any", false, false, false, 153);
            echo "\" placeholder=\"";
            echo ($context["entry_ot_module_discount_times"] ?? null);
            echo "\" class=\"form-control\" />
                                            ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["errors"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 154)] ?? null) : null), "pushconnect_ot_module_discount_times", [], "any", false, false, false, 154)) {
                // line 155
                echo "                                                <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["errors"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 155)] ?? null) : null), "pushconnect_ot_module_discount_times", [], "any", false, false, false, 155);
                echo "</div>
                                            ";
            }
            // line 157
            echo "                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
\t\$(function(){
\t\t\$('#install-sw').click(function(e) {
\t\t\te.preventDefault();
\t\t\t\$.getJSON('";
        // line 172
        echo twig_replace_filter(($context["install_link"] ?? null), ["&amp;" => "&"]);
        echo "', function(response){
\t\t\t\tif(response.success) {
\t\t\t\t\talert('";
        // line 174
        echo ($context["text_install_success"] ?? null);
        echo "');
\t\t\t\t} else {
\t\t\t\t\talert('";
        // line 176
        echo ($context["text_install_fail"] ?? null);
        echo "');
\t\t\t\t}
\t\t\t});
\t\t});
\t});
</script>
";
        // line 182
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/pushconnect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 182,  508 => 176,  503 => 174,  498 => 172,  486 => 162,  476 => 157,  470 => 155,  468 => 154,  460 => 153,  452 => 150,  439 => 144,  431 => 143,  427 => 142,  422 => 140,  417 => 137,  411 => 135,  409 => 134,  401 => 133,  396 => 131,  384 => 126,  376 => 125,  372 => 124,  367 => 122,  362 => 120,  349 => 114,  341 => 113,  337 => 112,  332 => 110,  327 => 108,  321 => 104,  315 => 102,  313 => 101,  305 => 100,  300 => 98,  295 => 95,  289 => 93,  287 => 92,  279 => 91,  274 => 89,  262 => 84,  254 => 83,  250 => 82,  245 => 80,  233 => 75,  225 => 74,  221 => 73,  216 => 71,  211 => 69,  206 => 67,  200 => 66,  194 => 62,  188 => 60,  186 => 59,  182 => 58,  177 => 56,  165 => 51,  157 => 50,  151 => 47,  146 => 45,  140 => 41,  129 => 39,  125 => 38,  121 => 37,  116 => 35,  109 => 31,  105 => 29,  97 => 25,  94 => 24,  86 => 20,  84 => 19,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/pushconnect.twig", "");
    }
}
