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

/* C:\xampp\htdocs\psy/themes/rainlab-bonjour/partials/site/subnav.htm */
class __TwigTemplate_1ff633e1e28e7096205fc5bf92e5cb5d2352ab7de43f2b755730fda32252f93c extends \Twig\Template
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
        $tags = array("set" => 3, "for" => 14);
        $filters = array("escape" => 9, "app" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'app'],
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
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, true, 3)) ? (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, true, 3)) : (($context["page"] ?? null)));
        // line 4
        $context["childPages"] = twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "children", [], "any", false, false, true, 4);
        // line 5
        echo "
<div class=\"row\">
    <div class=\"col-sm-4\">
        <h3 class=\"head-link ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, true, 8) == twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "url", [], "any", false, false, true, 8))) ? ("active") : (""));
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"col-sm-8\">
        <ul class=\"nav nav-pills pull-right\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["childPage"], "navigation_hidden", [], "any", false, false, true, 14)) {
                // line 15
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, true, 15) == twig_get_attribute($this->env, $this->source, $context["childPage"], "url", [], "any", false, false, true, 15))) ? ("active") : (""));
                echo "\">
                    <a href=\"";
                // line 16
                echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["childPage"], "url", [], "any", false, false, true, 16), 16, $this->source));
                echo "\">
                        ";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["childPage"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/partials/site/subnav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 21,  100 => 17,  96 => 16,  91 => 15,  86 => 14,  78 => 9,  74 => 8,  69 => 5,  67 => 4,  65 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Renders a menu with any child static pages #}

{% set parentOrSelf = page.parent ?: page %}
{% set childPages = parentOrSelf.children %}

<div class=\"row\">
    <div class=\"col-sm-4\">
        <h3 class=\"head-link {{ page.url == parentOrSelf.url ? 'active' }}\">
            {{ parentOrSelf.title }}
        </h3>
    </div>
    <div class=\"col-sm-8\">
        <ul class=\"nav nav-pills pull-right\">
            {% for childPage in childPages if not childPage.navigation_hidden %}
                <li class=\"{{ page.url == childPage.url ? 'active' }}\">
                    <a href=\"{{ childPage.url|app }}\">
                        {{ childPage.title }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
</div>", "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/partials/site/subnav.htm", "");
    }
}
