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

/* paybox/template/extension/module/wbcategorynew.twig */
class __TwigTemplate_26340e80ed2e48e88165fcdf08acfaac4878ee6e4b6b2a4e25d4e6cb8d15b228 extends \Twig\Template
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
        echo "<div class=\"container martb\">
    <div class=\"homecategory\">
    <h1 class=\"heading text-left\"><span>";
        // line 3
        echo ($context["cheading_title"] ?? null);
        echo "</span></h1>
    <div class=\"row rless\">
        <div id=\"cat-img\" class=\"owl-carousel owl-theme\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 7) == ($context["category_id"] ?? null))) {
                // line 8
                echo "                    <div class=\"block-cat-wr col-xs-12 cless\">
                        <div class=\"categorybr\">
                        <a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                echo "\">
                            <div class=\"\">
                                ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 13);
                    echo "\" class=\"img-responsive\" alt=\"\">
                                ";
                } else {
                    // line 15
                    echo "                                    <img src=\"image/no_image.png\" class=\"img-responsive\" alt=\"\">
                                ";
                }
                // line 17
                echo "                            </div>
                            <div class=\"catcontent text-center\">
                                <h2><span>";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
                echo "</span></h2>
                                <!-- <h6 class=\"catepro\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["category"], "totalp", [], "any", false, false, false, 20);
                echo " ";
                echo ($context["catepro"] ?? null);
                echo "</h6>
                                <h4>view all <i class=\"fa fa-arrow-right\"></i></h4> -->
                            </div>
                        </a>
                        </div>
                    </div>
                ";
            } else {
                // line 27
                echo "                    <div class=\"block-cat-wr col-xs-12 cless\">
                        <div class=\"categorybr\">
                        <a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 29);
                echo "\">
                            <div class=\"cateimg\">
                                ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "                                   <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 32);
                    echo "\" class=\"img-responsive center-block\" alt=\"\">
                                ";
                } else {
                    // line 34
                    echo "                                    <img src=\"image/no_image.png\" class=\"img-responsive center-block\" alt=\"\">
                                ";
                }
                // line 36
                echo "                            </div>

                            <div class=\"catcontent text-center\">
                                <h2><span>";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39);
                echo "</span></h2>
                                <!-- <h6 class=\"catepro\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["category"], "totalp", [], "any", false, false, false, 40);
                echo " ";
                echo ($context["catepro"] ?? null);
                echo "</h6>
                                <h4>view all <svg width=\"12px\" height=\"12px\"><use xlink:href=\"#rarrow\"></use></svg></h4> -->
                            </div>
                        </a>
                        </div>
                    </div>
                ";
            }
            // line 47
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>  
    </div>   
    </div>
</div>

<script type=\"text/javascript\">
 \$(document).ready(function() {
    \$(\"#cat-img\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320, 2],
    [400, 3],
    [600, 4],
    [768, 5],
    [992, 6],
    [1200, 7],
    [1410, 8]
    ],
      // autoPlay: 6000,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : true,
      pagination:false
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/wbcategorynew.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 48,  137 => 47,  125 => 40,  121 => 39,  116 => 36,  112 => 34,  106 => 32,  104 => 31,  99 => 29,  95 => 27,  83 => 20,  79 => 19,  75 => 17,  71 => 15,  65 => 13,  63 => 12,  58 => 10,  54 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/wbcategorynew.twig", "");
    }
}
