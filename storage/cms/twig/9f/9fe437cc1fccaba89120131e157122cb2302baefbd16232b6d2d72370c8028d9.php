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

/* C:\xampp\htdocs\psy/themes/rainlab-bonjour/layouts/content.htm */
class __TwigTemplate_e427ed1b6be852a71e9aa9b72f4fccfed4d4fa2b4f5676a281c949019a036091 extends \Twig\Template
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
        $tags = array("partial" => 4, "set" => 7, "if" => 18, "page" => 32, "placeholder" => 36);
        $filters = array("escape" => 29);
        $functions = array("placeholder" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'if', 'page', 'placeholder'],
                ['escape'],
                ['placeholder']
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>
        ";
        // line 7
        $context["hasChildren"] = twig_get_attribute($this->env, $this->source, ((twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "parent", [], "any", false, false, true, 7)) ? (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "parent", [], "any", false, false, true, 7)) : (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", [], "any", false, false, true, 7))), "children", [], "any", false, false, true, 7);
        // line 8
        echo "
        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 18
        if (($context["hasChildren"] ?? null)) {
            // line 19
            echo "                <div id=\"layout-subnav\">
                    <div class=\"container\">
                        ";
            // line 21
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['page'] = twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", [], "any", false, false, true, 21)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/subnav"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "                    </div>
                </div>
            ";
        }
        // line 25
        echo "            <div class=\"container\">

                <div class=\"static-content-page\">
                    <div class=\"title-area\">
                        <h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 29), "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</h2>
                    </div>

                    ";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 33
        echo "                </div>
                ";
        // line 34
        if ($this->extensions['Cms\Twig\Extension']->placeholderFunction("extraContent")) {
            // line 35
            echo "                    <div class=\"static-content-extra\">
                        ";
            // line 36
            $context['__placeholder_extraContent_default_contents'] = null;            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('extraContent', $context['__placeholder_extraContent_default_contents']);
            unset($context['__placeholder_extraContent_default_contents']);            // line 37
            echo "                    </div>
                ";
        }
        // line 39
        echo "            </div>
        </section>

        <!-- Help Popups -->
        ";
        // line 43
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 44
        echo "
        <!-- Scripts -->
        ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/layouts/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 47,  150 => 46,  146 => 44,  144 => 43,  138 => 39,  134 => 37,  132 => 36,  129 => 35,  127 => 34,  124 => 33,  122 => 32,  116 => 29,  110 => 25,  105 => 22,  100 => 21,  96 => 19,  94 => 18,  89 => 15,  85 => 14,  77 => 8,  75 => 7,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>
        {% set hasChildren = (staticPage.parent ?: staticPage.page).children %}

        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        {% partial 'site/nav' %}

        <!-- Content -->
        <section id=\"layout-content\">
            {% if hasChildren %}
                <div id=\"layout-subnav\">
                    <div class=\"container\">
                        {% partial 'site/subnav' page=staticPage.page %}
                    </div>
                </div>
            {% endif %}
            <div class=\"container\">

                <div class=\"static-content-page\">
                    <div class=\"title-area\">
                        <h2>{{ this.page.title }}</h2>
                    </div>

                    {% page %}
                </div>
                {% if placeholder('extraContent') %}
                    <div class=\"static-content-extra\">
                        {% placeholder extraContent title=\"Extra content\" %}
                    </div>
                {% endif %}
            </div>
        </section>

        <!-- Help Popups -->
        {% placeholder help ignore=true %}

        <!-- Scripts -->
        {% partial 'site/scripts' %}

    </body>
</html>", "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/layouts/content.htm", "");
    }
}
