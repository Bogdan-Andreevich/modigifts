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

/* default/template/extension/module/cookies.twig */
class __TwigTemplate_f89d81ba881ebd777421ef55bb46084111640288801c1676b59fc93fcc021905 extends \Twig\Template
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
        echo "<div id=\"privacy-pop-up\" style=\"display:none; position:fixed; z-index:9999; bottom:0; left:0; right:0; background:";
        echo ($context["bg_colour"] ?? null);
        echo "; color:";
        echo ($context["text_colour"] ?? null);
        echo "; margin:1em; padding:0.5em; text-align:center;  \">
";
        // line 2
        echo ($context["message"] ?? null);
        if ((($context["informations_number"] ?? null) > 0)) {
            echo " <a href=\"";
            echo ($context["config_cookies_informations"] ?? null);
            echo "\">";
            echo ($context["informations_text"] ?? null);
            echo "</a> ";
        }
        // line 3
        echo "  <a  id=\"exit-popup\" style=\"background:#fff; color:#000; padding:0.25em 0.5em; margin:0.5em; cursor:pointer; font-weight:bold; font-size:90%;  \">
  ";
        // line 4
        echo ($context["button_text"] ?? null);
        echo "</a>
</div>

<script>
    jQuery(document).ready(function() {
        if(localStorage.getItem('pc234978122321234') != '9238475'){
            jQuery(\"#privacy-pop-up\").delay(1).fadeIn(1000);
            ";
        // line 11
        if ((($context["show_type"] ?? null) == 0)) {
            echo " localStorage.setItem('pc234978122321234','9238475'); ";
        }
        // line 12
        echo "        } 
        jQuery('#exit-popup').click(function(e) // You are clicking the close button
        {
              ";
        // line 15
        if ((($context["show_type"] ?? null) == 1)) {
            echo " localStorage.setItem('pc234978122321234','9238475'); ";
        }
        // line 16
        echo "            jQuery('#privacy-pop-up').fadeOut(1000); // Now the pop up is hiden.
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/cookies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  75 => 15,  70 => 12,  66 => 11,  56 => 4,  53 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/cookies.twig", "");
    }
}
