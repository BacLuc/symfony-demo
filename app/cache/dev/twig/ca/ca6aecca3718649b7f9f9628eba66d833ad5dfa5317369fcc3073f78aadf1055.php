<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_97ecf16ac82d78cfd8864e91a3dd38291ea0eca96891f24483dfcf839d9f78de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_00e136248589f651bf38946f82317a6cf8b24454fd6d4346bc60823a341bb465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e136248589f651bf38946f82317a6cf8b24454fd6d4346bc60823a341bb465->enter($__internal_00e136248589f651bf38946f82317a6cf8b24454fd6d4346bc60823a341bb465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e136248589f651bf38946f82317a6cf8b24454fd6d4346bc60823a341bb465->leave($__internal_00e136248589f651bf38946f82317a6cf8b24454fd6d4346bc60823a341bb465_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca34ac17a3e7805b2b1afb83d67911eb348c45b4951e2fc3c0a3d24568becce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca34ac17a3e7805b2b1afb83d67911eb348c45b4951e2fc3c0a3d24568becce1->enter($__internal_ca34ac17a3e7805b2b1afb83d67911eb348c45b4951e2fc3c0a3d24568becce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ca34ac17a3e7805b2b1afb83d67911eb348c45b4951e2fc3c0a3d24568becce1->leave($__internal_ca34ac17a3e7805b2b1afb83d67911eb348c45b4951e2fc3c0a3d24568becce1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/symfony_demo/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
