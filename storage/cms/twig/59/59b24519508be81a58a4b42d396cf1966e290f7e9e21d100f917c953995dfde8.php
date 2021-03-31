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

/* C:\xampp\htdocs\psy/themes/rainlab-bonjour/pages/home.htm */
class __TwigTemplate_3af0b5990b2b16f120d37dc8e0d9cc7826e12a9c0276397d8c96100667defc54 extends \Twig\Template
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
        $tags = array("put" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
                [],
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
    <div id=\"homeGreetings\" class=\"home-greetings\">
        <h1>Hello</h1>
        <h1>Bonjour</h1>
        <h1>Hola</h1>
        <h1>Привет</h1>
        <h1>Hallo</h1>
        <h1>Ahoj</h1>
        <h1>Χαίρετε</h1>
        <h1>Olá</h1>
        <h1>Ciao</h1>
        <h1>Salut</h1>
        <h1>こんにちは</h1>
        <h1>Sveiki</h1>
        <h1>Cześć</h1>
        <h1>Buna</h1>
        <h1>你好</h1>
        <h1>Hallå</h1>
        <h1>Merhaba</h1>
    </div>
</div>

";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 24
        echo "    <script>
        function swap() {
            \$('#homeGreetings h1:visible').each(function(){
                \$(this).fadeOut(500);
                if (\$(this).next().length > 0) \$(this).next().fadeIn(1000);
                else \$('#homeGreetings h1:first').fadeIn(1000)
            });
        }

        \$('#homeGreetings')
            .find('h1:not(:first)')
            .hide()
            .end()
            .addClass('is-loaded');

        setTimeout(function() {
            setInterval(swap, 2000);
        }, 1000)

    </script>
";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  88 => 24,  86 => 23,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div id=\"homeGreetings\" class=\"home-greetings\">
        <h1>Hello</h1>
        <h1>Bonjour</h1>
        <h1>Hola</h1>
        <h1>Привет</h1>
        <h1>Hallo</h1>
        <h1>Ahoj</h1>
        <h1>Χαίρετε</h1>
        <h1>Olá</h1>
        <h1>Ciao</h1>
        <h1>Salut</h1>
        <h1>こんにちは</h1>
        <h1>Sveiki</h1>
        <h1>Cześć</h1>
        <h1>Buna</h1>
        <h1>你好</h1>
        <h1>Hallå</h1>
        <h1>Merhaba</h1>
    </div>
</div>

{% put scripts %}
    <script>
        function swap() {
            \$('#homeGreetings h1:visible').each(function(){
                \$(this).fadeOut(500);
                if (\$(this).next().length > 0) \$(this).next().fadeIn(1000);
                else \$('#homeGreetings h1:first').fadeIn(1000)
            });
        }

        \$('#homeGreetings')
            .find('h1:not(:first)')
            .hide()
            .end()
            .addClass('is-loaded');

        setTimeout(function() {
            setInterval(swap, 2000);
        }, 1000)

    </script>
{% endput %}", "C:\\xampp\\htdocs\\psy/themes/rainlab-bonjour/pages/home.htm", "");
    }
}
