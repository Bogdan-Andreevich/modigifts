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

/* default/template/extension/payment/op_googlepay_form.twig */
class __TwigTemplate_a23d9840cdeab245756125b3530c3cd0be45f349f041c4c20bfceb9f787ac636 extends \Twig\Template
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
        echo "<div id=\"loading\" style=\"position: relative;\">
    <div style=\"position:absolute; top:100px; left:45%; z-index:3;\" >
        <img src=\"catalog/view/theme/default/image/loading.gif\"  />
    </div>
</div>
<form action=\"";
        // line 6
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" id=\"checkout_googlepay\" name=\"checkout_googlepay\">
  <input type=\"hidden\" name=\"account\" value=\"";
        // line 7
        echo ($context["account"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"terminal\" value=\"";
        // line 8
        echo ($context["terminal"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"order_number\" value=\"";
        // line 9
        echo ($context["order_number"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"order_currency\" value=\"";
        // line 10
        echo ($context["order_currency"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"order_amount\" value=\"";
        // line 11
        echo ($context["order_amount"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"backUrl\" value=\"";
        // line 12
        echo ($context["backUrl"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"noticeUrl\" value=\"";
        // line 13
        echo ($context["noticeUrl"] ?? null);
        echo "\"/>
  <input type=\"hidden\" name=\"signValue\" value=\"";
        // line 14
        echo ($context["signValue"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"methods\" value=\"";
        // line 15
        echo ($context["methods"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"order_notes\" value=\"";
        // line 16
        echo ($context["order_notes"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_firstName\" value=\"";
        // line 17
        echo ($context["billing_firstName"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_lastName\" value=\"";
        // line 18
        echo ($context["billing_lastName"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_email\" value=\"";
        // line 19
        echo ($context["billing_email"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_phone\" value=\"";
        // line 20
        echo ($context["billing_phone"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_zip\" value=\"";
        // line 21
        echo ($context["billing_zip"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_city\" value=\"";
        // line 22
        echo ($context["billing_city"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_state\" value=\"";
        // line 23
        echo ($context["billing_state"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_country\" value=\"";
        // line 24
        echo ($context["billing_country"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"billing_address\" value=\"";
        // line 25
        echo ($context["billing_address"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ship_firstName\" value=\"";
        // line 26
        echo ($context["ship_firstName"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ship_lastName\" value=\"";
        // line 27
        echo ($context["ship_lastName"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ship_phone\" value=\"";
        // line 28
        echo ($context["ship_phone"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ship_zip\" value=\"";
        // line 29
        echo ($context["ship_zip"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ship_city\" value=\"";
        // line 30
        echo ($context["ship_city"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ship_state\" value=\"";
        // line 31
        echo ($context["ship_state"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ship_country\" value=\"";
        // line 32
        echo ($context["ship_country"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ship_addr\" value=\"";
        // line 33
        echo ($context["ship_addr"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"productName\" value=\"";
        // line 34
        echo ($context["productName"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"productSku\" value=\"";
        // line 35
        echo ($context["productSku"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"productNum\" value=\"";
        // line 36
        echo ($context["productNum"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"cart_info\" value=\"";
        // line 37
        echo ($context["cart_info"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"cart_api\" value=\"";
        // line 38
        echo ($context["cart_api"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"pages\" value=\"";
        // line 39
        echo ($context["pages"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ET_REGISTERDATE\" value=\"";
        // line 40
        echo ($context["ET_REGISTERDATE"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"ET_COUPONS\" value=\"";
        // line 41
        echo ($context["ET_COUPONS"] ?? null);
        echo "\" />
</form>

<script type=\"text/javascript\">
\tdocument.getElementById('checkout_googlepay').submit();
</script>

";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/op_googlepay_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 41,  180 => 40,  176 => 39,  172 => 38,  168 => 37,  164 => 36,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/op_googlepay_form.twig", "");
    }
}
