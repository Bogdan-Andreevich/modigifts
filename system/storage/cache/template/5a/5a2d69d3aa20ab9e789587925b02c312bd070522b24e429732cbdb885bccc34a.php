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

/* paybox/template/extension/module/wbrightbanner.twig */
class __TwigTemplate_837318c24041869131169dcc9beb540bdff73f710df9a2e85e77154193d8fe5d extends \Twig\Template
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
        // line 3
        echo "\t<div class=\"imgright\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "    
    \t<div class=\"beffect\">
\t        ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                echo "\">
\t\t\t    <img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive center-block\" />
\t\t\t    </a>
\t\t\t    ";
            } else {
                // line 12
                echo "\t\t\t    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                echo "\" class=\"img-responsive center-block\" />
\t\t    ";
            }
            // line 14
            echo "\t\t</div>
\t
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/wbrightbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  71 => 14,  63 => 12,  55 => 9,  50 => 8,  48 => 7,  44 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/wbrightbanner.twig", "");
    }
}
