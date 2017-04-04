<?php

/* default/homepage.html.twig */
class __TwigTemplate_ec10df03a66561b0cefe136274279c7c94a78f4cbe647e0d4ee90d760c6ff377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1e197e9751d137669f3b4aa0c41a2491657659ec146c05b93770d82fcc1cd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e197e9751d137669f3b4aa0c41a2491657659ec146c05b93770d82fcc1cd0a->enter($__internal_d1e197e9751d137669f3b4aa0c41a2491657659ec146c05b93770d82fcc1cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e197e9751d137669f3b4aa0c41a2491657659ec146c05b93770d82fcc1cd0a->leave($__internal_d1e197e9751d137669f3b4aa0c41a2491657659ec146c05b93770d82fcc1cd0a_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_bd94c1a66edbbd9ec30c4a29b05b7cf728ced6cf44f9700afc210fefe47a88a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd94c1a66edbbd9ec30c4a29b05b7cf728ced6cf44f9700afc210fefe47a88a0->enter($__internal_bd94c1a66edbbd9ec30c4a29b05b7cf728ced6cf44f9700afc210fefe47a88a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_bd94c1a66edbbd9ec30c4a29b05b7cf728ced6cf44f9700afc210fefe47a88a0->leave($__internal_bd94c1a66edbbd9ec30c4a29b05b7cf728ced6cf44f9700afc210fefe47a88a0_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_d06c0d2178adcbd679d38cb3c32a68414495ac4e55f6052e4c0d4501f9c0ec9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06c0d2178adcbd679d38cb3c32a68414495ac4e55f6052e4c0d4501f9c0ec9b->enter($__internal_d06c0d2178adcbd679d38cb3c32a68414495ac4e55f6052e4c0d4501f9c0ec9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_d06c0d2178adcbd679d38cb3c32a68414495ac4e55f6052e4c0d4501f9c0ec9b->leave($__internal_d06c0d2178adcbd679d38cb3c32a68414495ac4e55f6052e4c0d4501f9c0ec9b_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7771ed250f4fd5853e8ff2db9f01dc61ee0da4c1f2494adbbedd6c105af2ff86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7771ed250f4fd5853e8ff2db9f01dc61ee0da4c1f2494adbbedd6c105af2ff86->enter($__internal_7771ed250f4fd5853e8ff2db9f01dc61ee0da4c1f2494adbbedd6c105af2ff86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7771ed250f4fd5853e8ff2db9f01dc61ee0da4c1f2494adbbedd6c105af2ff86->leave($__internal_7771ed250f4fd5853e8ff2db9f01dc61ee0da4c1f2494adbbedd6c105af2ff86_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_40a435de220432d0fdd81a3a88916e7907b62accccc51873a5f5ebe3101f0d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a435de220432d0fdd81a3a88916e7907b62accccc51873a5f5ebe3101f0d3a->enter($__internal_40a435de220432d0fdd81a3a88916e7907b62accccc51873a5f5ebe3101f0d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_40a435de220432d0fdd81a3a88916e7907b62accccc51873a5f5ebe3101f0d3a->leave($__internal_40a435de220432d0fdd81a3a88916e7907b62accccc51873a5f5ebe3101f0d3a_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'homepage' %}

{#
    the homepage is a special page which displays neither a header nor a footer.
    this is done with the 'trick' of defining empty Twig blocks without any content
#}
{% block header %}{% endblock %}
{% block footer %}{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <h1>{{ 'title.homepage'|trans|raw }}</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_app'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('blog_index') }}\">
                        <i class=\"fa fa-users\"></i> {{ 'action.browse_app'|trans }}
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_admin'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('admin_index') }}\">
                        <i class=\"fa fa-lock\"></i> {{ 'action.browse_admin'|trans }}
                    </a>
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "default/homepage.html.twig", "/var/www/html/symfony_demo/app/Resources/views/default/homepage.html.twig");
    }
}
