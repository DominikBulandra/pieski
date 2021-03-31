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

/* C:\xampp\htdocs\psy/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_6e08de53c2d70a433cc2dc409559f27fa0625c371fb8b5851534280d82bc79ff extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 13);
        $filters = array("escape" => 9, "join" => 14, "map" => 14, "trans" => 16, "date" => 17, "raw" => 27, "page" => 41);
        $functions = array("range" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'join', 'map', 'trans', 'date', 'raw', 'page'],
                ['range']
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo " 
            <div class=\"jumbotron p-3 p-md-5 text-white rounded bg\">
<div class=\"row\">
        <div class=\"col-md-6 px-0\">
          <h1 class=\"display-4 font-italic\">";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h1>
          <p class=\"lead my-3\">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class=\"lead mb-0\"><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" class=\"text-white font-weight-bold\">Czytaj dalej...</a></p>
           <p class=\"info\">
                ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 13), "count", [], "any", false, false, true, 13)) {
                // line 14
                echo "                    ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 14), 14, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 14), 14, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 14), 14, $this->source)) . "</a>"); }), ", ");
                // line 15
                echo "
                    ";
                // line 16
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 17
$context["post"], "published_at", [], "any", false, false, true, 17), 17, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>                 // line 18
($context["categoryLinks"] ?? null)]]);
                // line 19
                echo "
                ";
            } else {
                // line 21
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 22
$context["post"], "published_at", [], "any", false, false, true, 22), 22, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
                // line 23
                echo "
                ";
            }
            // line 25
            echo "
            </p>
          ";
            // line 27
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 27), 27, $this->source);
            echo "
        </div>
      
  </div>
</div>
      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "       ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noPostsMessage", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 38) > 1)) {
            // line 39
            echo "    <ul class=\"pagination\">
        ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 40) > 1)) {
                // line 41
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 41), "baseFileName", [], "any", false, false, true, 41), 41, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 41) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 41) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 43
            echo "
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 44)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 45) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 46
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "baseFileName", [], "any", false, false, true, 46), 46, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 46) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 46, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
        ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 50) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 50))) {
                // line 51
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 51), "baseFileName", [], "any", false, false, true, 51), 51, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 51) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 51) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 53
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\psy/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 53,  183 => 51,  181 => 50,  178 => 49,  167 => 46,  162 => 45,  158 => 44,  155 => 43,  149 => 41,  147 => 40,  144 => 39,  142 => 38,  138 => 36,  129 => 34,  117 => 27,  113 => 25,  109 => 23,  107 => 22,  105 => 21,  101 => 19,  99 => 18,  98 => 17,  97 => 16,  94 => 15,  91 => 14,  89 => 13,  84 => 11,  79 => 9,  73 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.posts %}


    {% for post in posts %}
 
            <div class=\"jumbotron p-3 p-md-5 text-white rounded bg\">
<div class=\"row\">
        <div class=\"col-md-6 px-0\">
          <h1 class=\"display-4 font-italic\">{{ post.title }}</h1>
          <p class=\"lead my-3\">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class=\"lead mb-0\"><a href=\"{{ post.url }}\" class=\"text-white font-weight-bold\">Czytaj dalej...</a></p>
           <p class=\"info\">
                {% if post.categories.count %}
                    {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

                    {{ 'rainlab.blog::lang.post.posted_byline' | trans({
                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
                        categories: categoryLinks
                    }) }}
                {% else %}
                    {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans)
                    }) }}
                {% endif %}

            </p>
          {{ post.summary | raw }}
        </div>
      
  </div>
</div>
      
    {% else %}
       {{ __SELF__.noPostsMessage }}
    {% endfor %}


{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
", "C:\\xampp\\htdocs\\psy/plugins/rainlab/blog/components/posts/default.htm", "");
    }
}
