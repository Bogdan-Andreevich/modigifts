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

/* extension/module/running_text.twig */
class __TwigTemplate_2f9ee4f68db6123a6876590e2bcd09d3b62ea546792e6c942c5339b3e22ee609 extends \Twig\Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"page-header\">
        <div class=\"container\">
            <h1>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </ul>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 15
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 18
        if (($context["error"] ?? null)) {
            // line 19
            echo "                    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error"] ?? null);
            echo "</div>
                ";
        }
        // line 21
        echo "
                <div class=\"text-center\">
                    <button type=\"button\" id=\"button-enable\" class=\"btn btn-success";
        // line 23
        if ((($context["status"] ?? null) == 1)) {
            echo " disabled";
        }
        echo "\"><i class=\"fa fa-play\"></i> Enable</button>
                    <button type=\"button\" id=\"button-disable\" class=\"btn btn-danger";
        // line 24
        if ((($context["status"] ?? null) == 0)) {
            echo " disabled";
        }
        echo "\"><i class=\"fa fa-stop\"></i> Disable</button>
                </div>
                <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 28
        echo ($context["entry_text"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\">";
        // line 30
        echo ($context["text"] ?? null);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        // line 35
        echo ($context["button_save"] ?? null);
        echo "</button>
                            <a href=\"";
        // line 36
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo ($context["button_cancel"] ?? null);
        echo "</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$('#button-enable').on('click', function() {
            if (!\$(this).hasClass('disabled')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/running_text/enable&user_token=";
        // line 49
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    success: function(json) {
                        if (json['status'] == 'success') {
                            location.reload();
                        }
                    }
                });
            }
        });

        \$('#button-disable').on('click', function() {
            if (!\$(this).hasClass('disabled')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/running_text/disable&user_token=";
        // line 64
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    success: function(json) {
                        if (json['status'] == 'success') {
                            location.reload();
                        }
                    }
                });
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/running_text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 64,  141 => 49,  123 => 36,  119 => 35,  111 => 30,  106 => 28,  101 => 26,  94 => 24,  88 => 23,  84 => 21,  78 => 19,  76 => 18,  70 => 15,  62 => 9,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/running_text.twig", "");
    }
}
