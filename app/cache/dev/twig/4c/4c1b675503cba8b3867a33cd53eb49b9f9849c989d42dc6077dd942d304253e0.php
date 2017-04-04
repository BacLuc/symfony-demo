<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5eaae9639a62e26a5dd28373c6d5f68f85a9fd83a03120dc14429aad4fb65247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6c3d8004ab64b5bfcd80eadd1e000b4d8fdad875bfd8e03597626ecea86bb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c3d8004ab64b5bfcd80eadd1e000b4d8fdad875bfd8e03597626ecea86bb8a->enter($__internal_a6c3d8004ab64b5bfcd80eadd1e000b4d8fdad875bfd8e03597626ecea86bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6c3d8004ab64b5bfcd80eadd1e000b4d8fdad875bfd8e03597626ecea86bb8a->leave($__internal_a6c3d8004ab64b5bfcd80eadd1e000b4d8fdad875bfd8e03597626ecea86bb8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bf258bccced2b83ab028c58605cd1c934b5dabb2ddd5b7966298fe6eced0456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf258bccced2b83ab028c58605cd1c934b5dabb2ddd5b7966298fe6eced0456->enter($__internal_0bf258bccced2b83ab028c58605cd1c934b5dabb2ddd5b7966298fe6eced0456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0bf258bccced2b83ab028c58605cd1c934b5dabb2ddd5b7966298fe6eced0456->leave($__internal_0bf258bccced2b83ab028c58605cd1c934b5dabb2ddd5b7966298fe6eced0456_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/var/www/html/symfony_demo/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
