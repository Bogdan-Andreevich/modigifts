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

/* paybox/template/extension/payment/cheque.twig */
class __TwigTemplate_c7274045a35bd4017d9d02e6f7b23b36c9ab39341e38e6b63abdadff1913c2f6 extends \Twig\Template
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
        echo "<h2>";
        echo ($context["text_instruction"] ?? null);
        echo "</h2>
<div class=\"well well-sm\">
  <p><b>";
        // line 3
        echo ($context["text_payable"] ?? null);
        echo "</b></p>
  <p>";
        // line 4
        echo ($context["payable"] ?? null);
        echo "</p>
  <b>";
        // line 5
        echo ($context["text_address"] ?? null);
        echo "</b><br />
  <p>";
        // line 6
        echo ($context["address"] ?? null);
        echo "</p>
  <p>";
        // line 7
        echo ($context["text_payment"] ?? null);
        echo "</p>
</div>
<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 11
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/payment/cheque/confirm',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];\t
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});

});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "paybox/template/extension/payment/cheque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  59 => 7,  55 => 6,  51 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/extension/payment/cheque.twig", "");
    }
}
