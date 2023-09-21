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

/* paybox/template/information/blogger_blogs.twig */
class __TwigTemplate_efabefcf4ee827ee0fb1892b6836cc54823eb70afb6d75ca4ac45e045fa6e651 extends \Twig\Template
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
        echo "
<div class=\"breadbg\">
  <div class=\"container\">
    <div class=\"row\">
      <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
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
        echo "    </ul>
  </div>
</div>
</div>
<div class=\"container\">
   
    <div class=\"row\">
        ";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "            ";
            $context["class"] = "col-sm-8 col-lg-9 col-md-9 col-xs-12";
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "        ";
        }
        // line 24
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 25
        echo ($context["content_top"] ?? null);
        echo "
     
        <!-- <h4 class=\"headingpage\">
            ";
        // line 28
        echo ($context["text_blogs"] ?? null);
        echo "
        </h4> -->
        ";
        // line 30
        if (($context["blogs"] ?? null)) {
            // line 31
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 32
                echo "                <div class=\"panel-default webi_blog_page\">
                <div class=\"row\">
                    ";
                // line 35
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 36));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                        // line 37
                        echo "                            <div class=\"allmb col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"\">
                                    <div class=\"\">
                                        ";
                        // line 40
                        if (twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 40)) {
                            // line 41
                            echo "                                            <div class=\"webi-blog-image\">
                                                <div class=\"blog-post-image-hover\"> </div>
                                                <img src=\"";
                            // line 43
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 43);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" class=\"img-responsive\" />
                                            </div>
                                        ";
                        }
                        // line 46
                        echo "                                    </div>
                                    <div class=\"allcomment\">
                                        <h5>
                                            <a href=\"";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 49);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 49);
                        echo "</a>
                                        </h5>
                                        <div class=\"blog_links\">
                                                <span class=\"blog-date\">
                                                    ";
                        // line 53
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "date_added", [], "any", false, false, false, 53);
                        echo "
                                                </span>
                                                <span class=\"blog_comment\">
                                                   ";
                        // line 56
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_comments", [], "any", false, false, false, 56);
                        echo " ";
                        echo ($context["entry_comment"] ?? null);
                        echo "
                                                </span>
                                                <span class=\"wcomm\">
                                                    <a href=\"";
                        // line 59
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 59);
                        echo "\">
                                                        ";
                        // line 60
                        echo ($context["text_comment"] ?? null);
                        echo "
                                                    </a>
                                                </span>
                                        </div>

                                        <div class=\"blog-desc\">";
                        // line 65
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 65);
                        echo "</div>
                                        <div class=\"read-more\"> <a href=\"";
                        // line 66
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 66);
                        echo "\" class=\"btn btn-primary\">";
                        echo ($context["text_read_more"] ?? null);
                        echo "</a> </div>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                    ";
                } else {
                    // line 72
                    echo "                        <div class=\"panel-body text-center\">";
                    echo ($context["text_no_blogs"] ?? null);
                    echo "</div>
                    ";
                }
                // line 74
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "            ";
        } else {
            // line 77
            echo "                <div class=\"panel-body text-center\">";
            echo ($context["text_no_blogs"] ?? null);
            echo "</div>
            ";
        }
        // line 79
        echo "            </div>
        </div>
        ";
        // line 81
        echo ($context["column_right"] ?? null);
        echo "
    </div>
</div>
";
        // line 84
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 85
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "paybox/template/information/blogger_blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 85,  241 => 84,  235 => 81,  231 => 79,  225 => 77,  222 => 76,  215 => 74,  209 => 72,  206 => 71,  193 => 66,  189 => 65,  181 => 60,  177 => 59,  169 => 56,  163 => 53,  154 => 49,  149 => 46,  139 => 43,  135 => 41,  133 => 40,  128 => 37,  123 => 36,  120 => 35,  116 => 32,  111 => 31,  109 => 30,  104 => 28,  98 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  73 => 17,  69 => 16,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/information/blogger_blogs.twig", "");
    }
}
