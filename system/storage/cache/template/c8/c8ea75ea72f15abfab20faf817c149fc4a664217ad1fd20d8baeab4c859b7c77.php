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

/* paybox/template/common/currency.twig */
class __TwigTemplate_6a1ca8df6b5f8f963db3cb7dcba0ad0c220ef43b88c6d55a90ebfe63e463f1ce extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "  <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"btn-group\">
      <button class=\"btn-link dropdown-toggle test\" data-toggle=\"dropdown\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 5
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 5) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null)))) {
                    echo "  ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 5) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null)))) {
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 5);
                    echo "</strong> ";
                }
                // line 6
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <span>";
            echo ($context["text_currency"] ?? null);
            echo "</span>&nbsp;<i class=\"fa fa-angle-down\"></i></button>
      <ul class=\"dropdown-menu dropdown-menu-right langcdrop\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "        <li>
          <button class=\"currency-select btn btn-link\" type=\"button\" name=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 11);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 11);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 11);
                    echo "</button>
        </li>
        ";
                } else {
                    // line 14
                    echo "        <li>
          <button class=\"currency-select btn btn-link\" type=\"button\" name=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 15);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 15);
                    echo "</button>
        </li>
        ";
                }
                // line 18
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 22
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
";
        }
        // line 24
        echo " ";
    }

    public function getTemplateName()
    {
        return "paybox/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  113 => 22,  108 => 19,  102 => 18,  92 => 15,  89 => 14,  79 => 11,  76 => 10,  73 => 9,  69 => 8,  58 => 6,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/common/currency.twig", "");
    }
}
