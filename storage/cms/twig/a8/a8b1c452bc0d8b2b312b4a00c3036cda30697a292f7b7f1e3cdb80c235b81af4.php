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

/* C:\xampp\htdocs\psy/themes/rainlab-bonjour/partials/site/nav.htm */
class __TwigTemplate_98ae091c529a1140370084ca4c45be6368dd5f8bfaf9c9d0d2bc065ef449f339 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("import" => 1, "if" => 35, "component" => 49, "put" => 55, "content" => 60, "macro" => 3, "for" => 6);
        $filters = array("page" => 32, "_" => 44, "escape" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'component', 'put', 'content', 'macro', 'for'],
                ['page', '_', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 2
        echo "
";
        // line 23
        echo "
<nav id=\"layout-nav\" class=\"navbar\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, true, 35)) {
            // line 36
            echo "                <ul class=\"nav navbar-nav\">
                    ";
            // line 37
            echo twig_call_macro($macros["nav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, true, 37)], 37, $context, $this->getSourceContext());
            echo "
                </ul>
            ";
        }
        // line 40
        echo "            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                   <!-- <a href=\"javascript:toggleHelp('#localeHelp')\">
                        <i class=\"icon-question-sign hidden-xs\"></i>
                        <span class=\"visible-xs\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Help"]);
        echo "</span>
                    </a>-->
                </li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                <!--";
        // line 49
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "-->
            </form>
        </div>
    </div>
</nav>

";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('help'        );
        // line 56
        echo "    <!-- Locale Help -->
    <div id=\"localeHelp\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#localeHelp')\">&times;</button>
        <div class=\"setup-content\">
            ";
        // line 60
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("locale-help.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 61
        echo "        </div>
    </div>
";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    // line 3
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "    ";
            $macros["nav"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 7)) {
                    // line 8
                    echo "            <li role=\"presentation\" class=\"dropdown ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 8)) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 8)) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
                    // line 10
                    ((twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, true, 10)) ? (print (call_user_func_array($this->env->getFilter('_')->getCallable(), [("nav." . twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, true, 10))]))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 10), "html", null, true))));
                    echo " <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 13
                    echo twig_call_macro($macros["nav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 13)], 13, $context, $this->getSourceContext());
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li role=\"presentation\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 17)) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 17)) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    echo "\">";
                    ((twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, true, 18)) ? (print (call_user_func_array($this->env->getFilter('_')->getCallable(), [("nav." . twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, true, 18))]))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 18), "html", null, true))));
                    echo "</a>
            </li>
        ";
                }
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 21,  197 => 18,  190 => 17,  183 => 13,  177 => 10,  173 => 9,  166 => 8,  163 => 7,  159 => 6,  156 => 5,  153 => 4,  140 => 3,  136 => 55,  132 => 61,  128 => 60,  122 => 56,  120 => 55,  109 => 49,  101 => 44,  95 => 40,  89 => 37,  86 => 36,  84 => 35,  78 => 32,  67 => 23,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        {% if item.items %}
            <li role=\"presentation\" class=\"dropdown {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    {{ item.code ? ('nav.'~item.code)|_ : item.title }} <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    {{ nav.render_menu(item.items) }}
                </ul>
            </li>
        {% else %}
            <li role=\"presentation\" class=\"{{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\">{{ item.code ? ('nav.'~item.code)|_ : item.title }}</a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<nav id=\"layout-nav\" class=\"navbar\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            {% if mainMenu.menuItems %}
                <ul class=\"nav navbar-nav\">
                    {{ nav.render_menu(mainMenu.menuItems) }}
                </ul>
            {% endif %}
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                   <!-- <a href=\"javascript:toggleHelp('#localeHelp')\">
                        <i class=\"icon-question-sign hidden-xs\"></i>
                        <span class=\"visible-xs\">{{ 'Help'|_ }}</span>
                    </a>-->
                </li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                <!--{% component 'localePicker' %}-->
            </form>
        </div>
    </div>
</nav>

{% put help %}
    <!-- Locale Help -->
    <div id=\"localeHelp\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#localeHelp')\">&times;</button>
        <div class=\"setup-content\">
            {% content 'locale-help.htm' %}
        </div>
    </div>
{% endput %}", "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/partials/site/nav.htm", "");
    }
}
