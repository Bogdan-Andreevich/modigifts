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

/* paybox/template/information/sitemap.twig */
class __TwigTemplate_0ead42a49d760a46791ed6c564b5f9d03ee91e18a77ee290227386e1e4bfb7bc extends \Twig\Template
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
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"row infobg\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-xs-12 col-sm-4 col-md-6 col-lg-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-8 col-lg-10 col-md-9 col-xs-12";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " sitem\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"borbutt\">
        <h1 class=\"heading text-left\"><span>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</span></h1>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 col-xs-12\">
          <ul class=\"text-capitalize\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 30
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
            echo "</a>
              ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 31)) {
                // line 32
                echo "              <ul>
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 34
                    echo "                <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 34);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 34);
                    echo "</a>
                  ";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "                  <ul>
                    ";
                        // line 37
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 37));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 38
                            echo "                    <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 38);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 38);
                            echo "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                  </ul>
                  ";
                    }
                    // line 42
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "              </ul>
              ";
            }
            // line 46
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "          </ul>
        </div>
        <div class=\"col-sm-6 col-xs-12\">
          <ul>
            <li><a href=\"";
        // line 52
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 53
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
              <ul>
                <li><a href=\"";
        // line 55
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 56
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 57
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 58
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_history"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 59
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 62
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_cart"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 63
        echo ($context["checkout"] ?? null);
        echo "\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 64
        echo ($context["search"] ?? null);
        echo "\">";
        echo ($context["text_search"] ?? null);
        echo "</a></li>
            <li>";
        // line 65
        echo ($context["text_information"] ?? null);
        echo "
              <ul>
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 68
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 68);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 68);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                <li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      </div>
    ";
        // line 77
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 79
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 80
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "paybox/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 80,  283 => 79,  278 => 77,  265 => 70,  254 => 68,  250 => 67,  245 => 65,  239 => 64,  233 => 63,  227 => 62,  219 => 59,  213 => 58,  207 => 57,  201 => 56,  195 => 55,  188 => 53,  182 => 52,  176 => 48,  169 => 46,  165 => 44,  158 => 42,  154 => 40,  143 => 38,  139 => 37,  136 => 36,  134 => 35,  127 => 34,  123 => 33,  120 => 32,  118 => 31,  111 => 30,  107 => 29,  99 => 24,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  67 => 14,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/information/sitemap.twig", "");
    }
}
