<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_af92bb8ce2e14057d37b7ae506c390acafffeac67545e9f42e50316ef0433332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00a5c33bea7fbc5e74d86a2cce0c1c52b9df6c54a91ca8073d8014fd4c9ee39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a5c33bea7fbc5e74d86a2cce0c1c52b9df6c54a91ca8073d8014fd4c9ee39b->enter($__internal_00a5c33bea7fbc5e74d86a2cce0c1c52b9df6c54a91ca8073d8014fd4c9ee39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00a5c33bea7fbc5e74d86a2cce0c1c52b9df6c54a91ca8073d8014fd4c9ee39b->leave($__internal_00a5c33bea7fbc5e74d86a2cce0c1c52b9df6c54a91ca8073d8014fd4c9ee39b_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9a4f0320006952546c87edf9c6daca628c0f54caae6bd5e7e63639b83efeee79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4f0320006952546c87edf9c6daca628c0f54caae6bd5e7e63639b83efeee79->enter($__internal_9a4f0320006952546c87edf9c6daca628c0f54caae6bd5e7e63639b83efeee79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_9a4f0320006952546c87edf9c6daca628c0f54caae6bd5e7e63639b83efeee79->leave($__internal_9a4f0320006952546c87edf9c6daca628c0f54caae6bd5e7e63639b83efeee79_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_9f4c59c1391b50d20b86e127efc936f77f217692524419cc98e92aa28d4a6989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4c59c1391b50d20b86e127efc936f77f217692524419cc98e92aa28d4a6989->enter($__internal_9f4c59c1391b50d20b86e127efc936f77f217692524419cc98e92aa28d4a6989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-user\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.author"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-calendar\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-cogs\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 18, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "authorEmail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "publishedAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "publishedAt", array()), "short", "short"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        ";
            // line 29
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "isAuthor", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "user", array())), "method")) {
                // line 30
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-edit\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit"), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 34
            echo "                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
";
        
        $__internal_9f4c59c1391b50d20b86e127efc936f77f217692524419cc98e92aa28d4a6989->leave($__internal_9f4c59c1391b50d20b86e127efc936f77f217692524419cc98e92aa28d4a6989_prof);

    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0b2adebbdacc95d099067167dc52fab79f696823fa1295b65bf16f27c00e9278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2adebbdacc95d099067167dc52fab79f696823fa1295b65bf16f27c00e9278->enter($__internal_0b2adebbdacc95d099067167dc52fab79f696823fa1295b65bf16f27c00e9278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 47
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 53
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 55
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_0b2adebbdacc95d099067167dc52fab79f696823fa1295b65bf16f27c00e9278->leave($__internal_0b2adebbdacc95d099067167dc52fab79f696823fa1295b65bf16f27c00e9278_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 55,  178 => 53,  171 => 49,  167 => 48,  164 => 47,  158 => 46,  149 => 42,  140 => 39,  137 => 38,  129 => 34,  123 => 31,  118 => 30,  116 => 29,  110 => 26,  106 => 25,  98 => 22,  94 => 21,  90 => 20,  87 => 19,  82 => 18,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_post_index' %}

{% block main %}
    <h1>{{ 'title.post_list'|trans }}</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>{{ 'label.title'|trans }}</th>
                <th><i class=\"fa fa-user\"></i> {{ 'label.author'|trans }}</th>
                <th><i class=\"fa fa-calendar\"></i> {{ 'label.published_at'|trans }}</th>
                <th><i class=\"fa fa-cogs\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td>{{ post.title }}</td>
                <td>{{ post.authorEmail }}</td>
                <td>{% if post.publishedAt %}{{ post.publishedAt|localizeddate('short', 'short') }}{% endif %}</td>
                <td>
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_post_show', { id: post.id }) }}\" class=\"btn btn-sm btn-default\">
                            {{ 'action.show'|trans }}
                        </a>

                        {% if post.isAuthor(app.user) %}
                            <a href=\"{{ path('admin_post_edit', { id: post.id }) }}\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-edit\"></i> {{ 'action.edit'|trans }}
                            </a>
                        {% endif %}
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\" align=\"center\">{{ 'post.no_posts_found'|trans }}</td>
           </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block sidebar %}
    <div class=\"section actions\">
        <a href=\"{{ path('admin_post_new') }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\"></i> {{ 'action.create_post'|trans }}
        </a>
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/index.html.twig", "/var/www/html/symfony_demo/app/Resources/views/admin/blog/index.html.twig");
    }
}
