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

/* cartsms/base.twig */
class __TwigTemplate_683cd87f56949f427e1ff9300da26b99b6823a617013d129d16982471db4c7c9 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div id=\"cart-sms\">
        <nav>
            <div class=\"container-fluid\">
                <div class=\"nav-wrapper\">
                    <div id=\"brand-logo\">
                        <a class=\"brand-logo hide-on-med-and-down\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["homepage"] ?? null), "html_attr");
        echo "\">
                            <img alt=\"cartsms\" width=\"120\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["logo"] ?? null), "html_attr");
        echo "\" />
                        </a>
                    </div>
                    <ul class=\"controls\">
                        <span id=\"react-app-panel-admin-buttons\"></span>
                        <span id=\"react-app-info\"></span>
                    </ul>
                    <div class=\"nav-h1\">
                        <span class=\"h1-divider\"></span>
                        <h1 class=\"truncate\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html");
        echo "<span id=\"react-app-h1-sub\"></span></h1>
                    </div>
                </div>
            </div>
        </nav>
        <div id=\"profile-tab\"></div>
        <div";
        // line 24
        if (($context["box"] ?? null)) {
            echo " class=\"module-box\"";
        }
        echo ">
            <div id=\"react-snack-root\"></div>
            <div id=\"react-app-root\">
                <div class=\"loader loading\">
                    <div class=\"spinner\"></div>
                    <p>Loading content</p>
                </div>
            </div>
            <div id=\"react-language-footer\"></div>
            <script type=\"application/javascript\">
                var _bg_client_config = {
                    url: {
                        authenticationService : ";
        // line 36
        echo json_encode(($context["authenticate"] ?? null));
        echo "
                    }
                };
            </script>

            <script src=\"";
        // line 41
        echo ($context["widget_api_url"] ?? null);
        echo "\"></script>
            <script type=\"application/javascript\">
                _bg_client.registerMiddleware(function (data)
                {
                    if(data.init._generic)
                    {
                        data.init.env.homepage.logo_link = ";
        // line 47
        echo json_encode(($context["logo"] ?? null));
        echo ";
                        data.init._generic.scope.module_info = ";
        // line 48
        echo json_encode(($context["info"] ?? null));
        echo ";
                    }
                });

                var input = _bg_client.parseQuery(location.search);

                _bg_client.require(";
        // line 54
        echo json_encode(($context["application_id"] ?? null));
        echo ", {
                    product: \"oc\",
                    language: ";
        // line 56
        echo json_encode(($context["language"] ?? null));
        echo ",
                    view: {
                        presenter: ";
        // line 58
        echo json_encode(($context["presenter"] ?? null));
        echo ",
                        action: ";
        // line 59
        echo json_encode(($context["action"] ?? null));
        echo ",
                    },
                    params: {
                        id: ";
        // line 62
        if (($context["id"] ?? null)) {
            echo json_encode(($context["id"] ?? null));
        } else {
            echo "input[\"id\"]";
        }
        echo ",
                        key: ";
        // line 63
        if (($context["key"] ?? null)) {
            echo json_encode(($context["key"] ?? null));
        } else {
            echo "input[\"key\"]";
        }
        echo ",
                        type: ";
        // line 64
        if (($context["type"] ?? null)) {
            echo json_encode(($context["type"] ?? null));
        } else {
            echo "input[\"type\"]";
        }
        echo ",
                    },
                    proxy: ";
        // line 66
        echo json_encode(($context["proxy"] ?? null));
        echo ",
                });
            </script>
        </div>
    </div>
</div>
";
        // line 72
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "cartsms/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  165 => 66,  156 => 64,  148 => 63,  140 => 62,  134 => 59,  130 => 58,  125 => 56,  120 => 54,  111 => 48,  107 => 47,  98 => 41,  90 => 36,  73 => 24,  64 => 18,  52 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cartsms/base.twig", "");
    }
}
