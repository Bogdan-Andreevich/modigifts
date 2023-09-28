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
class __TwigTemplate_171f78d501116a0f1f6c97087ea37126ce03e8d2de0678da900d745b60d49afa extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 4
        echo ($context["text_edit"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "                <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error"] ?? null);
            echo "</div>
            ";
        }
        // line 10
        echo "
            <!-- Добавляем кнопку \"Включить модуль\" -->
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 13
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                        <input type=\"radio\" name=\"module_status\" value=\"1\" ";
        // line 16
        if ((($context["module_status"] ?? null) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_enabled"] ?? null);
        echo "
                    </label>
                    <label class=\"radio-inline\">
                        <input type=\"radio\" name=\"module_status\" value=\"0\" ";
        // line 19
        if ((($context["module_status"] ?? null) == 0)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo ($context["text_disabled"] ?? null);
        echo "
                    </label>
                </div>
            </div>

            <form action=\"";
        // line 24
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 26
        echo ($context["entry_text"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\">";
        // line 28
        echo ($context["text"] ?? null);
        echo "</textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        // line 33
        echo ($context["button_save"] ?? null);
        echo "</button>
                        <a href=\"";
        // line 34
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo ($context["button_cancel"] ?? null);
        echo "</a>
                    </div>
                </div>
            </form>
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
        return array (  111 => 34,  107 => 33,  99 => 28,  94 => 26,  89 => 24,  77 => 19,  67 => 16,  61 => 13,  56 => 10,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/running_text.twig", "");
    }
}
