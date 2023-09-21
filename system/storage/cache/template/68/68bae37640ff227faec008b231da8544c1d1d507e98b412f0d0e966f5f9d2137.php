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

/* paybox/template/extension/module/slideshow.twig */
class __TwigTemplate_486f6cc4ed2f251d2a0221b28866caa74a5a5f60969a304745bb034edf8a42bd extends \Twig\Template
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
  <div class=\"s-panel row rless\">
  <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12 cless silder_rightwidth\">
    <div class=\"loader wrloader\"></div>
    <div id=\"slideshow";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"slideshow\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "          <div class=\"slider-banner\">
            ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8)) {
                // line 9
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 9);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive center-block\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive center-block\" />
            ";
            }
            // line 11
            echo "            <div class=\"\">
              <div class=\"slidertext\">
              <div class=\"slideff\">
                ";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 14);
            echo "
                <a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 15);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["shop_now"] ?? null);
            echo "</a>
              </div>
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </div>
    </div>
";
        // line 25
        echo "
<script type=\"text/javascript\">
  \$('.slideshow').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  dots: true,
  autoplaySpeed: 5000,
});
</script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  95 => 21,  81 => 15,  77 => 14,  72 => 11,  56 => 9,  54 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/slideshow.twig", "");
    }
}
