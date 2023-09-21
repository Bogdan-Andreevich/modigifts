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

/* default/template/extension/payment/op_googlepay.twig */
class __TwigTemplate_9590f0361c6d4d0b9e129de3060aed2a5e28add89c785377082a7063fdd96610 extends \Twig\Template
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
        echo "<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
  <div class=\"buttons\">
    <div class=\"pull-right\">
      <input type=\"submit\" value=\"";
        // line 4
        echo ($context["button_confirm"] ?? null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/op_googlepay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/op_googlepay.twig", "");
    }
}
