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

/* paybox/template/extension/module/blogger.twig */
class __TwigTemplate_a1fa0d985263d9260fd2073c337c1ff2debf6a21aea904c0f9894287ef091224 extends \Twig\Template
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
        echo "<div class=\"blog_webi martb container\">
        <div class=\"borbutt\">
            <h1 class=\"heading text-left\"><span>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</span></h1>
        </div>
        <div class=\"box-content\">
            <div class=\"box-product row rless\">
                <div id=\"blog\" class=\"owl-carousel owl-theme\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 9
            echo "                    <div class=\"product-block col-xs-12 cless\">
                       <div class=\"blogshadow row rless\">
                        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 11)) {
                // line 12
                echo "                            <div class=\"blog-left col-md-8 col-xs-12 cless\">
                                <div class=\"webi-blog-image\">
                                    <img src=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 14);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
                                    <div class=\"blog-post-image-hover\"> </div>
                                    <div class=\"webi_post_hover\">
                                        <div class=\"blog-ic\">
                                        <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 18);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search\"></i></a>
                                        <a class=\"icon readmore_link\" title=\"all blog\" href=\"";
                // line 19
                echo ($context["all_blogs"] ?? null);
                echo "\"><i class=\"fa fa-link\"></i></a>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                        ";
            }
            // line 26
            echo "                            <div class=\"blog-right col-md-4 col-xs-12 text-left cless\">
                                <div class=\"bs\">
                                    <div class=\"date-time blogdt\">";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 28);
            echo "</div>
                                    <h4><a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 29);
            echo "</a></h4>
                                    <p>";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 30);
            echo "</p>
                                    ";
            // line 32
            echo "                                    ";
            // line 35
            echo "                                        <div class=\"view-blog\">
                                            <div class=\"read-more\">
                                                <a href=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 37);
            echo "\">";
            echo ($context["text_read_more"] ?? null);
            echo "</a>
                                            </div>
                                        </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </div>
            </div>
        </div>
        <!--  <div class=\"buttons-see-all text-center\">
            <button type=\"button\" onclick=\"location='";
        // line 49
        echo ($context["all_blogs"] ?? null);
        echo "';\" class=\"btn btn-primary\">";
        echo ($context["button_all_blogs"] ?? null);
        echo "</button>
        </div> -->
    </div>


<script type=\"text/javascript\">
    (function(\$){
    \$(\"#blog\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [600, 2],
    [768, 2],
    [992, 2],
    [1200, 2],
    [1410, 2]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation: true,
      pagination:false
    });
  }(jQuery));
</script>
";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  128 => 45,  112 => 37,  108 => 35,  106 => 32,  102 => 30,  96 => 29,  92 => 28,  88 => 26,  78 => 19,  74 => 18,  63 => 14,  59 => 12,  57 => 11,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/blogger.twig", "");
    }
}
