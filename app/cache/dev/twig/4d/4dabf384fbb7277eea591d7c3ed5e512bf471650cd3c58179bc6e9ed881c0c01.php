<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8d3d56c64ae997a6e05d3bab58f2f1907370345a0d14e39e8e0bb72560ffa5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aa480e8271063f6a6705fc5787887a28323084cf366de0453c1f19ca4e0ae3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa480e8271063f6a6705fc5787887a28323084cf366de0453c1f19ca4e0ae3b->enter($__internal_6aa480e8271063f6a6705fc5787887a28323084cf366de0453c1f19ca4e0ae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa480e8271063f6a6705fc5787887a28323084cf366de0453c1f19ca4e0ae3b->leave($__internal_6aa480e8271063f6a6705fc5787887a28323084cf366de0453c1f19ca4e0ae3b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58ccdac55aaef694223171eb1c63b106e817bd650f01cabfd5d1199097cfbb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ccdac55aaef694223171eb1c63b106e817bd650f01cabfd5d1199097cfbb65->enter($__internal_58ccdac55aaef694223171eb1c63b106e817bd650f01cabfd5d1199097cfbb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58ccdac55aaef694223171eb1c63b106e817bd650f01cabfd5d1199097cfbb65->leave($__internal_58ccdac55aaef694223171eb1c63b106e817bd650f01cabfd5d1199097cfbb65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efa96c44199b353b5f9aee548f5090c097e7209ca9ad1150cbfc9259f942f9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa96c44199b353b5f9aee548f5090c097e7209ca9ad1150cbfc9259f942f9f1->enter($__internal_efa96c44199b353b5f9aee548f5090c097e7209ca9ad1150cbfc9259f942f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_efa96c44199b353b5f9aee548f5090c097e7209ca9ad1150cbfc9259f942f9f1->leave($__internal_efa96c44199b353b5f9aee548f5090c097e7209ca9ad1150cbfc9259f942f9f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f02dd125d6cb8b13d711ad470b18effe7b513a5c4d5593be69a89966e7feee12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02dd125d6cb8b13d711ad470b18effe7b513a5c4d5593be69a89966e7feee12->enter($__internal_f02dd125d6cb8b13d711ad470b18effe7b513a5c4d5593be69a89966e7feee12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f02dd125d6cb8b13d711ad470b18effe7b513a5c4d5593be69a89966e7feee12->leave($__internal_f02dd125d6cb8b13d711ad470b18effe7b513a5c4d5593be69a89966e7feee12_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
