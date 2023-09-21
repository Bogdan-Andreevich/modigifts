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

/* paybox/template/common/menu.twig */
class __TwigTemplate_c765fe20777903a78445c81212b8b951f17df4bf7687f8d3375aace167d8735b extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "    
  <div class=\"menurel\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" onclick=\"openNav()\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>

           <div id=\"pt_vegamenu\" class=\"title-menu wr-left-menu hidden-xs\">
            <div id=\"wr-menu-icon\">
                  <div class=\"wr-menu\" data-toggle=\"collapse\" data-target=\"#under-menu\">
                      <button class=\"btn-navbar navbar-toggle\" type=\"button\" data-toggle=\"collapse\">
                        <div class=\"ico-menu\">
                          <div class=\"bar\"></div>
                          <div class=\"bar\"></div>
                          <div class=\"bar\"></div>
                        </div>
                      </button>
                      <span class=\"cate\">All Categories</span>
                      ";
            // line 21
            echo "                  </div>
              </div>
            </div>


    <div id=\"mySidenav\" class=\"sidenav\">
      <div id=\"under-menu\" class=\"collapse\">
      <div class=\"close-nav hidden-sm hidden-md hidden-lg hidden-xl\">
                <span class=\"categories\">Category</span>
                <a href=\"javascript:void(0)\" class=\"closebtn pull-right\" onclick=\"closeNav()\"><i class=\"fa fa-close\"></i></a>
            </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav site-nav\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 35
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "        <li class=\"dropdown moremenu\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
                    echo "\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">
          ";
                    // line 40
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 40);
                    echo "
          <i class=\"fa fa-angle-down pull-right enangle\"></i></a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 43), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 43)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 43), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 44
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 45
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 46
                            echo "                <!--3rd level-->
                    <li class=\"dropdown-submenu\"> <a href=\"";
                            // line 47
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 47);
                            echo "\" class=\"submenu-title\"> ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 47);
                            echo " </a>
                      ";
                            // line 48
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 48)) {
                                // line 49
                                echo "                      <ul class=\"list-unstyled grand-child\">
                        ";
                                // line 50
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 50));
                                foreach ($context['_seq'] as $context["_key"] => $context["grand_child"]) {
                                    // line 51
                                    echo "                        <li> <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "href", [], "any", false, false, false, 51);
                                    echo "\"> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 51);
                                    echo " </a> </li>
                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grand_child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 53
                                echo "                      </ul>
                      ";
                            }
                            // line 55
                            echo "                    </li>
                    <!--3rd level over-->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 58
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 60);
                    echo "\" class=\"see-all visible-xs\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60);
                    echo "</a> 
            </div>
            </div>
        </li>
        ";
                } else {
                    // line 65
                    echo "        <li class=\"moremenu\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 65);
                    echo "\" class=\"bmenu\">
          ";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 68);
                    echo "</a></li>
        ";
                }
                // line 70
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "      </ul>
    </div>
    </div>
  </div>
  
  </nav>
</div>
";
        }
        // line 78
        echo " 


<script type=\"text/javascript\">
 function headermenu() {
     if (jQuery(window).width() < 768)
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"dropdown\");        
     }
     else
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"\"); 
     }
}
\$(document).ready(function(){headermenu();});
jQuery(window).resize(function() {headermenu();});
jQuery(window).scroll(function() {headermenu();});
</script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 78,  181 => 71,  175 => 70,  170 => 68,  165 => 65,  152 => 60,  145 => 58,  137 => 55,  133 => 53,  122 => 51,  118 => 50,  115 => 49,  113 => 48,  107 => 47,  104 => 46,  100 => 45,  97 => 44,  93 => 43,  86 => 40,  81 => 36,  78 => 35,  74 => 34,  59 => 21,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/common/menu.twig", "");
    }
}
