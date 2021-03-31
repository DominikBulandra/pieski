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

/* C:\xampp\htdocs\psy/themes/rainlab-bonjour/pages/messages.htm */
class __TwigTemplate_0040646ee93af2191f55e3c55d213a60fb310010188abf5d1e132c1c8c33c15f extends \Twig\Template
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
        $tags = array("for" => 13, "if" => 17, "put" => 36, "content" => 40);
        $filters = array("_" => 4, "escape" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'put', 'content'],
                ['_', 'escape'],
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
        echo "<div class=\"container\">

    <div class=\"title-area\">
        <h3>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "meta_title", [], "any", false, false, true, 4), 4, $this->source)]);
        echo "</h3>
    </div>

    <div class=\"messages-list\">
        <div class=\"header\">
            <span class=\"code\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Code"]);
        echo "</span>
            <span class=\"value\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["activeLocaleName"] ?? null), 10, $this->source), "html", null, true);
        echo "</span>
        </div>
        <div class=\"messages\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "                <div class=\"message\">
                    <span class=\"code\">";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "code", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</span>
                    <span class=\"value\">
                        ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, true, 17)) {
                // line 18
                echo "                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "
                        ";
            } else {
                // line 20
                echo "                            <em>";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Undefined"]);
                echo "</em>
                        ";
            }
            // line 22
            echo "                    </span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>

        <div class=\"more-info\">
            <a href=\"javascript:toggleHelp('#messagesHelp')\">
                ";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Instructions for translating these messages"]);
        echo "
            </a>
        </div>
    </div>

</div>

";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('help'        );
        // line 37
        echo "    <div id=\"messagesHelp\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#messagesHelp')\">&times;</button>
        <div class=\"setup-content\">
            ";
        // line 40
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("messages-help.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 41
        echo "        </div>
    </div>
";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/pages/messages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  146 => 41,  142 => 40,  137 => 37,  135 => 36,  125 => 29,  119 => 25,  111 => 22,  105 => 20,  99 => 18,  97 => 17,  92 => 15,  89 => 14,  85 => 13,  79 => 10,  75 => 9,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

    <div class=\"title-area\">
        <h3>{{ this.page.meta_title|_ }}</h3>
    </div>

    <div class=\"messages-list\">
        <div class=\"header\">
            <span class=\"code\">{{ 'Code'|_ }}</span>
            <span class=\"value\">{{ activeLocaleName }}</span>
        </div>
        <div class=\"messages\">
            {% for message in messages %}
                <div class=\"message\">
                    <span class=\"code\">{{ message.code }}</span>
                    <span class=\"value\">
                        {% if message.content %}
                            {{ message.content }}
                        {% else %}
                            <em>{{ 'Undefined'|_ }}</em>
                        {% endif %}
                    </span>
                </div>
            {% endfor %}
        </div>

        <div class=\"more-info\">
            <a href=\"javascript:toggleHelp('#messagesHelp')\">
                {{ 'Instructions for translating these messages'|_ }}
            </a>
        </div>
    </div>

</div>

{% put help %}
    <div id=\"messagesHelp\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#messagesHelp')\">&times;</button>
        <div class=\"setup-content\">
            {% content 'messages-help.htm' %}
        </div>
    </div>
{% endput %}", "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/pages/messages.htm", "");
    }
}
