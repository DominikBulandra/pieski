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

/* C:\xampp\htdocs\psy/themes/rainlab-bonjour/partials/site/meta.htm */
class __TwigTemplate_10ed197e501b896c802fe22a798ba946c0bf2d19fe5d46281654cb03c939d98b extends \Twig\Template
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
        $tags = array("if" => 2, "styles" => 15);
        $filters = array("_" => 3, "escape" => 6, "theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'styles'],
                ['_', 'escape', 'theme'],
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
        echo "<meta charset=\"utf-8\">
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "meta_title", [], "any", false, false, true, 2)) {
            // line 3
            echo "    <title>";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "meta_title", [], "any", false, false, true, 3), 3, $this->source)]);
            echo " - ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["site.name"]);
            echo "</title>
    <meta name=\"title\" content=\"";
            // line 4
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "meta_title", [], "any", false, false, true, 4), 4, $this->source)]);
            echo "\">
";
        } else {
            // line 6
            echo "    <title>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo " - ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["site.name"]);
            echo "</title>
";
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_description", [], "any", false, false, true, 8)) {
            // line 9
            echo "    <meta name=\"description\" content=\"";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_description", [], "any", false, false, true, 9), 9, $this->source)]);
            echo "\">
";
        }
        // line 11
        echo "<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />
";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css"]);
        // line 18
        echo "\" rel=\"stylesheet\">";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 18,  107 => 16,  104 => 15,  100 => 14,  95 => 11,  89 => 9,  87 => 8,  79 => 6,  74 => 4,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
{% if this.page.meta_title %}
    <title>{{ this.page.meta_title|_ }} - {{ 'site.name'|_ }}</title>
    <meta name=\"title\" content=\"{{ this.page.meta_title|_ }}\">
{% else %}
    <title>{{ this.page.title }} - {{ 'site.name'|_ }}</title>
{% endif %}
{% if this.page.meta_description %}
    <meta name=\"description\" content=\"{{ this.page.meta_description|_ }}\">
{% endif %}
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
{% styles %}
<link href=\"{{ [
    'assets/css/theme.css'
]|theme }}\" rel=\"stylesheet\">", "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/partials/site/meta.htm", "");
    }
}
