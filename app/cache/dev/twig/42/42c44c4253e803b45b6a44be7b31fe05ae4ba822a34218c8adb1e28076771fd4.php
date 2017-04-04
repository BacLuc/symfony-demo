<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bb750087c16ace5b2776272c7134858ca77ea7669ba06691bdb7e54cdf5fabe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2755b1c65b5b6d476965a6a2b16bc082475e20226162375dc50925a42d102d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2755b1c65b5b6d476965a6a2b16bc082475e20226162375dc50925a42d102d6->enter($__internal_d2755b1c65b5b6d476965a6a2b16bc082475e20226162375dc50925a42d102d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2755b1c65b5b6d476965a6a2b16bc082475e20226162375dc50925a42d102d6->leave($__internal_d2755b1c65b5b6d476965a6a2b16bc082475e20226162375dc50925a42d102d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ff74989f4b3975698ae9d336629cf41fe7736f12c357b8484e21ba4abd28f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff74989f4b3975698ae9d336629cf41fe7736f12c357b8484e21ba4abd28f8d->enter($__internal_1ff74989f4b3975698ae9d336629cf41fe7736f12c357b8484e21ba4abd28f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1ff74989f4b3975698ae9d336629cf41fe7736f12c357b8484e21ba4abd28f8d->leave($__internal_1ff74989f4b3975698ae9d336629cf41fe7736f12c357b8484e21ba4abd28f8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11470b623a5986ebd6741aa72be36f90f7478e0a4e37d1e3ee4cecad120a82a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11470b623a5986ebd6741aa72be36f90f7478e0a4e37d1e3ee4cecad120a82a8->enter($__internal_11470b623a5986ebd6741aa72be36f90f7478e0a4e37d1e3ee4cecad120a82a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_11470b623a5986ebd6741aa72be36f90f7478e0a4e37d1e3ee4cecad120a82a8->leave($__internal_11470b623a5986ebd6741aa72be36f90f7478e0a4e37d1e3ee4cecad120a82a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47667666b1d864d8d4ed680f0a5ba8f2a8c8e5d11bd1be980b862f5e5a44c159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47667666b1d864d8d4ed680f0a5ba8f2a8c8e5d11bd1be980b862f5e5a44c159->enter($__internal_47667666b1d864d8d4ed680f0a5ba8f2a8c8e5d11bd1be980b862f5e5a44c159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_47667666b1d864d8d4ed680f0a5ba8f2a8c8e5d11bd1be980b862f5e5a44c159->leave($__internal_47667666b1d864d8d4ed680f0a5ba8f2a8c8e5d11bd1be980b862f5e5a44c159_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
