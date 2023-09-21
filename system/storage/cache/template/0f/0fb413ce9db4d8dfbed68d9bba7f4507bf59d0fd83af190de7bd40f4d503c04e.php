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

/* paybox/template/extension/module/html.twig */
class __TwigTemplate_88edc7552c3b95616960223aaa3dd304fbb06c343ddfc465c691b0f36f8de239 extends \Twig\Template
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
        echo "<div>";
        if (($context["heading_title"] ?? null)) {
            // line 2
            echo "  <h2>";
            echo ($context["heading_title"] ?? null);
            echo "</h2>
  ";
        }
        // line 4
        echo "  ";
        echo ($context["html"] ?? null);
        echo "</div>

<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#testi\").owlCarousel({
    itemsCustom : [
    [0, 1]
    ],
      autoPlay: 1000000,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      loop: false,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : false,
      pagination:false
    });
    });
    
// (function(\$){
// \$('#testi').slick({
//    slidesToShow: 3,
//    dots: true,
//    centerMode: true,
//    centerPadding: '0px',
//    arrows:false,
//    focusOnSelect: true,
//    responsive: [
//     {
//       breakpoint: 1200,
//       settings: {
//         slidesToShow: 3,
//         infinite: true,
//       }
//     },
//     {
//       breakpoint: 992,
//       settings: {
//         slidesToShow: 3,
//       }
//     },
//     {
//       breakpoint: 767,
//       settings: {
//         slidesToShow: 1,
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//       }
//     },
//     {
//       breakpoint: 576,
//       settings: {
//         slidesToShow: 1,
//       }
//     },
//     {
//       breakpoint: 500,
//       settings: {
//         slidesToShow: 1,
//       }
//     },
//     {
//       breakpoint: 361,
//       settings: {
//         slidesToShow: 1,
//       }
//     }
//   ]
//  });
//     }(jQuery));

  
</script>";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/module/html.twig", "");
    }
}
