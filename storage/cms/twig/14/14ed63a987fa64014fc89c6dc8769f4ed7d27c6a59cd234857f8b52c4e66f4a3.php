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

/* C:\xampp\htdocs\psy/plugins/rainlab/translate/components/localepicker/default.htm */
class __TwigTemplate_29af3e379351e208704fe49d92bdc14e3049a25d55d1ac94ae87ed33ceb614ef extends \Twig\Template
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
        $tags = array("for" => 3);
        $filters = array("escape" => 4);
        $functions = array("form_open" => 1, "form_close" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['form_open', 'form_close']
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
        echo "
    <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 4
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["code"], 4, $this->source), "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 4, $this->source), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </select>
";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\psy/plugins/rainlab/translate/components/localepicker/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 7,  84 => 6,  71 => 4,  67 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_open() }}
    <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
        {% for code, name in locales %}
            <option value=\"{{ code }}\" {{ code == activeLocale ? 'selected' }}>{{ name }}</option>
        {% endfor %}
    </select>
{{ form_close() }}", "C:\\xampp\\htdocs\\psy/plugins/rainlab/translate/components/localepicker/default.htm", "");
    }
}
