<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_18534a38ce1ca5893fa6073d62720f48a9181eb02912e6bca53fd41170214558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_262f785691d6eb7a11c02f6add06e952408fb71ba932061af34fce30f10861e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262f785691d6eb7a11c02f6add06e952408fb71ba932061af34fce30f10861e5->enter($__internal_262f785691d6eb7a11c02f6add06e952408fb71ba932061af34fce30f10861e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262f785691d6eb7a11c02f6add06e952408fb71ba932061af34fce30f10861e5->leave($__internal_262f785691d6eb7a11c02f6add06e952408fb71ba932061af34fce30f10861e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bf1cbf815c7b06b1fce80157a559d66defa37503a9d4b42af5b078124ff0edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf1cbf815c7b06b1fce80157a559d66defa37503a9d4b42af5b078124ff0edd->enter($__internal_4bf1cbf815c7b06b1fce80157a559d66defa37503a9d4b42af5b078124ff0edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4bf1cbf815c7b06b1fce80157a559d66defa37503a9d4b42af5b078124ff0edd->leave($__internal_4bf1cbf815c7b06b1fce80157a559d66defa37503a9d4b42af5b078124ff0edd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/var/www/html/symfony_demo/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
