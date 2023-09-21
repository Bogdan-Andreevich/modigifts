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

/* paybox/template/checkout/checkout.twig */
class __TwigTemplate_fb4aab3b37e42f3ef6707001f26d6e906439b0ba692f6caf3a255ff5a63c11f2 extends \Twig\Template
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
<div id=\"checkout-checkout\" class=\"container\">
  ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 19
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-lg-8 col-sm-5 col-md-6 col-xs-12";
            // line 22
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-8 col-lg-10 col-md-9 col-xs-12";
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "    ";
            $context["class"] = "col-xs-12 acpage";
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
          <div class=\"infobg\">
            <div class=\"borbutt\">
                <h1 class=\"text-center\">";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 35
        echo ($context["text_checkout_option"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        // line 41
        if (( !($context["logged"] ?? null) && (($context["account"] ?? null) != "guest"))) {
            // line 42
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 44
            echo ($context["text_checkout_account"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        } else {
            // line 51
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 53
            echo ($context["text_checkout_payment_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 60
        echo "        ";
        if (($context["shipping_required"] ?? null)) {
            // line 61
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 63
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 71
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 78
        echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 80
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 88
        echo ($context["text_checkout_confirm"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
      </div>
      </div></div>
    ";
        // line 96
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$(document).on('change', 'input[name=\\'account\\']', function() {
    if (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
        if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 102
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
        } else {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 104
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
        }
    } else {
        if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 108
        echo ($context["text_checkout_account"] ?? null);
        echo "');
        } else {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 110
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
        }
    }
});

";
        // line 115
        if ( !($context["logged"] ?? null)) {
            // line 116
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

            \$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 123
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

            \$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        } else {
            // line 133
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address .panel-body').html(html);

            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 140
            echo ($context["text_checkout_payment_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

            \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 150
        echo "
// Checkout
\$(document).delegate('#button-account', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
        dataType: 'html',
        beforeSend: function() {
            \$('#button-account').button('loading');
        },
        complete: function() {
            \$('#button-account').button('reset');
        },
        success: function(html) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            \$('#collapse-payment-address .panel-body').html(html);

            if (\$('input[name=\\'account\\']:checked').val() == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 169
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 171
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            }

            \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Login
\$(document).delegate('#button-login', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-login').button('loading');
        },
        complete: function() {
            \$('#button-login').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                // Highlight any found errors
                \$('input[name=\\'email\\']').parent().addClass('has-error');
                \$('input[name=\\'password\\']').parent().addClass('has-error');
           }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Register
\$(document).delegate('#button-register', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-register').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-register').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                for (i in json['error']) {
                    var element = \$('#input-payment-' + i.replace('_', '-'));

                    if (\$(element).parent().hasClass('input-group')) {
                        \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    } else {
                        \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    }
                }

                // Highlight any found errors
                \$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 251
        if (($context["shipping_required"] ?? null)) {
            // line 252
            echo "                var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
                            // Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

                                    \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 266
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 275
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 279
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 280
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 281
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 294
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 298
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 299
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 300
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 308
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 314
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 318
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 325
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);

                        \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 335
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$(document).delegate('#button-payment-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                for (i in json['error']) {
                    var element = \$('#input-payment-' + i.replace('_', '-'));

                    if (\$(element).parent().hasClass('input-group')) {
                        \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    } else {
                        \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    }
                }

                // Highlight any found errors
                \$('.text-danger').parent().parent().addClass('has-error');
            } else {
                ";
        // line 386
        if (($context["shipping_required"] ?? null)) {
            // line 387
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-shipping-address .panel-body').html(html);

                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 393
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 397
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 398
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 399
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });
                ";
        } else {
            // line 417
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 423
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 427
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });             
                });
                ";
        }
        // line 445
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                for (i in json['error']) {
                    var element = \$('#input-shipping-' + i.replace('_', '-'));

                    if (\$(element).parent().hasClass('input-group')) {
                        \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    } else {
                        \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    }
                }

                // Highlight any found errors
                \$('.text-danger').parent().parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 498
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 502
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 503
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                        
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-guest').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                for (i in json['error']) {
                    var element = \$('#input-payment-' + i.replace('_', '-'));

                    if (\$(element).parent().hasClass('input-group')) {
                        \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    } else {
                        \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    }
                }

                // Highlight any found errors
                \$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 575
        if (($context["shipping_required"] ?? null)) {
            // line 576
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            // Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

                                    \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 593
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 602
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 606
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 607
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 623
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 627
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 628
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 629
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 637
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 646
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 650
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 657
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-guest-shipping').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                for (i in json['error']) {
                    var element = \$('#input-shipping-' + i.replace('_', '-'));

                    if (\$(element).parent().hasClass('input-group')) {
                        \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    } else {
                        \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    }
                }

                // Highlight any found errors
                \$('.text-danger').parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 710
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i>');

                        \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 714
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 715
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

";
        // line 740
        echo "
";
        // line 745
        echo "
";
        // line 758
        echo "
";
        // line 760
        echo "
";
        // line 762
        echo "
";
        // line 776
        echo "
";
        // line 788
        echo "
";
        // line 806
        echo "
";
        // line 808
        echo "
";
        // line 822
        echo "//--></script>
";
        // line 823
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 824
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "paybox/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1036 => 824,  1032 => 823,  1029 => 822,  1026 => 808,  1023 => 806,  1020 => 788,  1017 => 776,  1014 => 762,  1011 => 760,  1008 => 758,  1005 => 745,  1002 => 740,  985 => 715,  981 => 714,  974 => 710,  919 => 657,  909 => 650,  902 => 646,  891 => 637,  880 => 629,  876 => 628,  872 => 627,  865 => 623,  846 => 607,  842 => 606,  835 => 602,  823 => 593,  804 => 576,  802 => 575,  727 => 503,  723 => 502,  716 => 498,  661 => 445,  640 => 427,  633 => 423,  625 => 417,  604 => 399,  600 => 398,  596 => 397,  589 => 393,  581 => 387,  579 => 386,  525 => 335,  513 => 325,  503 => 318,  496 => 314,  488 => 308,  477 => 300,  473 => 299,  469 => 298,  462 => 294,  446 => 281,  442 => 280,  438 => 279,  431 => 275,  419 => 266,  403 => 252,  401 => 251,  318 => 171,  313 => 169,  292 => 150,  279 => 140,  270 => 133,  257 => 123,  248 => 116,  246 => 115,  238 => 110,  233 => 108,  226 => 104,  221 => 102,  212 => 96,  201 => 88,  190 => 80,  186 => 78,  176 => 71,  165 => 63,  161 => 61,  158 => 60,  148 => 53,  144 => 51,  134 => 44,  130 => 42,  128 => 41,  119 => 35,  111 => 30,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  82 => 20,  77 => 19,  69 => 15,  67 => 14,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "paybox/template/checkout/checkout.twig", "");
    }
}
