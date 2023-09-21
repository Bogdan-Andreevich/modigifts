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

/* paybox/template/common/footer.twig */
class __TwigTemplate_c7683898adb30cfa2a7c738182d7df377d178a7b12dc28ca5162a914b237a5d6 extends \Twig\Template
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
        echo "<footer>

<div class=\"footer-top\">
  <div class=\"container\">
  <!-- <div class=\"row\"> -->
  ";
        // line 6
        echo ($context["ftop_full"] ?? null);
        echo "
  <!-- </div> -->
</div>
</div>


    <div class=\"middle-footer\">
      <div class=\"container\">
        <div class=\"row\">
    ";
        // line 15
        echo ($context["footer_left"] ?? null);
        echo "
    

    ";
        // line 18
        if ((($context["footer_left"] ?? null) && ($context["footer_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-8";
            // line 20
            echo "    ";
        } elseif ((($context["footer_left"] ?? null) || ($context["footer_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "
      ";
        // line 26
        if (($context["informations"] ?? null)) {
            // line 27
            echo "      <div class=\"col-md-3 col-sm-3 col-xs-12 fborder\">
        <h5>";
            // line 28
            echo ($context["text_information"] ?? null);
            echo "
          <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#info\"></button>
        </h5>
        <div id=\"info\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled\">
         ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 34
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 34);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "           <li><a href=\"";
            echo ($context["manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</a></li>
        </ul>
        </div>
      </div>
      ";
        }
        // line 41
        echo "      <div class=\"col-md-3 col-sm-3 col-xs-12 fborder\">
        <h5>";
        // line 42
        echo ($context["text_account"] ?? null);
        echo "
          <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#account\"></button>
        </h5>
        <div id=\"account\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled lastb\">
          <li><a href=\"";
        // line 47
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 48
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 49
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 50
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 51
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        </ul>
        </div>
      </div>

      <div class=\"col-md-3 col-sm-3 col-xs-12 fborder\">
        <h5>";
        // line 57
        echo ($context["text_service"] ?? null);
        echo "
          <button type=\"button\" class=\"btn  toggle collapsed\" data-toggle=\"collapse\" data-target=\"#service\"></button>
        </h5>
        <div id=\"service\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled lastb\">
          <li><a href=\"";
        // line 62
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 63
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 64
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 65
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 66
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
        </ul>
        </div>
      </div>

</div>
</div>
</div>


<div class=\"container hidden-xs\">
  <div class=\"row footblink text-center\">
      ";
        // line 78
        echo ($context["fbottom_full"] ?? null);
        echo "
  </div>
</div>

<div class=\"copy text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div>";
        // line 85
        echo ($context["powered"] ?? null);
        echo "</div>
      ";
        // line 87
        echo "    </div>
  </div>
</div>
</footer>
<a href=\"\" id=\"scroll\" title=\"Scroll to Top\" style=\"display: none;\">
<i class=\"fa fa-angle-double-up\"></i>
</a>

";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 96
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>
";
    }

    public function getTemplateName()
    {
        return "paybox/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 98,  247 => 96,  243 => 95,  233 => 87,  229 => 85,  219 => 78,  202 => 66,  196 => 65,  190 => 64,  184 => 63,  178 => 62,  170 => 57,  159 => 51,  153 => 50,  147 => 49,  141 => 48,  135 => 47,  127 => 42,  124 => 41,  113 => 36,  102 => 34,  98 => 33,  90 => 28,  87 => 27,  85 => 26,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  62 => 18,  56 => 15,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/common/footer.twig", "");
    }
}
