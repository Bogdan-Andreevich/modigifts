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
class __TwigTemplate_15a83e50b5a5399b072b77b73d3ece05bd07b3eb93821e4b5c53cd6d6dcfecc2 extends \Twig\Template
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
        echo "                <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 23
        echo ($context["entry_text"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\">";
        // line 25
        echo ($context["text"] ?? null);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        // line 30
        echo ($context["button_save"] ?? null);
        echo "</button>
                            <a href=\"";
        // line 31
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo ($context["button_cancel"] ?? null);
        echo "</a>

                            <!-- Добавьте следующий код для кнопки включения модуля -->
                            ";
        // line 34
        if (($context["module_enabled"] ?? null)) {
            // line 35
            echo "                                <a href=\"";
            echo ($context["disable_module"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-power-off\"></i> ";
            echo ($context["button_disable_module"] ?? null);
            echo "</a>
                            ";
        } else {
            // line 37
            echo "                                <a href=\"";
            echo ($context["enable_module"] ?? null);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-power-off\"></i> ";
            echo ($context["button_enable_module"] ?? null);
            echo "</a>
                            ";
        }
        // line 39
        echo "                            <!-- Конец кода кнопки включения модуля -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
        return array (  133 => 39,  125 => 37,  117 => 35,  115 => 34,  107 => 31,  103 => 30,  95 => 25,  90 => 23,  84 => 21,  78 => 19,  76 => 18,  70 => 15,  62 => 9,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/running_text.twig", "");
    }
}
