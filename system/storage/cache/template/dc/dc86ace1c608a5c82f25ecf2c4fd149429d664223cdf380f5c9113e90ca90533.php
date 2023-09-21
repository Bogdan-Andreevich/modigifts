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

/* extension/module/webinewsletter/panel.twig */
class __TwigTemplate_3b05b60bd926534fde82b30a49ee307f90a33dfe9b200a0692c05acc6134d14f extends \Twig\Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "\t\t        \t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t      \t</ul>
\t\t</div>
\t</div><!-- end div .page-header -->

\t<div id=\"page-content\" class=\"container-fluid\">
\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t    </div>
\t    ";
        }
        // line 22
        echo "
\t\t";
        // line 23
        if (($context["success"] ?? null)) {
            // line 24
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 28
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 33
        echo ($context["text_quickicons"] ?? null);
        echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t
\t\t 
\t\t\t\t\t\t\t<div class=\"tool-icons clearfix\" style=\"width:100%\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["menus"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["contact"] ?? null) : null), "link", [], "any", false, false, false, 41);
        echo "\"><span class=\"icon-blogs icon\"></span><span>";
        echo ($context["menu_create_newsletter"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["menus"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["draft_contact"] ?? null) : null), "link", [], "any", false, false, false, 42);
        echo "\"><span class=\"icon-addcategory icon\"></span><span>";
        echo ($context["menu_manage_draft_newsletters"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["menus"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["subscribes"] ?? null) : null), "link", [], "any", false, false, false, 43);
        echo "\"><span class=\"icon-category icon\"></span><span>";
        echo ($context["menu_manage_subscribes"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["menus"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["modules"] ?? null) : null), "link", [], "any", false, false, false, 44);
        echo "\"><span class=\"icon-comment icon\"></span><span>";
        echo ($context["menu_manage_modules"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- end div .panel-body -->
\t\t\t</div><!-- end div .panel -->
\t 
\t\t\t<div class=\"col-md-6\">\t
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> Information </h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\" >
\t\t\t\t\t\t
\t\t 
\t\t\t\t\t\t\t<div class=\"tool-icons clearfix\" style=\"width:100%\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3>Thanks you for using Webi NewsLetter</h3>

\t\t\t\t\t\t\t\t<p class=\"\">Newsletter Subscribe Module Will allow to you place a Newsletter subscriber module around your website. Your customers will be able to subscribe to your newsletter without the need of creating an account with this module.and You can easily prompt your products for sale and long-term relationship with the customer and online store with this extension.</p>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- end div .panel-body -->

\t\t\t\t\t\t

\t\t\t</div>
\t\t</div>\t

\t</div><!-- end div #page-content -->

</div><!-- end div #content -->
";
        // line 79
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/webinewsletter/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 79,  135 => 44,  129 => 43,  123 => 42,  117 => 41,  106 => 33,  99 => 28,  91 => 24,  89 => 23,  86 => 22,  78 => 18,  76 => 17,  69 => 12,  58 => 10,  54 => 9,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/webinewsletter/panel.twig", "");
    }
}
