<?php

/* blog/about.html.twig */
class __TwigTemplate_31c20283aebf9eef058b228153c4d956babbb8360de582bad631bcac3560f072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93f7b389259bffd1cd56458ab86c645a4e614f31fffcc0767db2d67a02bd0a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f7b389259bffd1cd56458ab86c645a4e614f31fffcc0767db2d67a02bd0a67->enter($__internal_93f7b389259bffd1cd56458ab86c645a4e614f31fffcc0767db2d67a02bd0a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>
<!-- Fragment rendered on ";
        // line 11
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long"), "html", null, true);
        echo " -->
";
        
        $__internal_93f7b389259bffd1cd56458ab86c645a4e614f31fffcc0767db2d67a02bd0a67->leave($__internal_93f7b389259bffd1cd56458ab86c645a4e614f31fffcc0767db2d67a02bd0a67_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  33 => 7,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            {{ 'help.app_description'|trans|raw }}
        </p>
        <p>
            {{ 'help.more_information'|trans|raw }}
        </p>
    </div>
</div>
<!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long') }} -->
", "blog/about.html.twig", "/var/www/html/symfony_demo/app/Resources/views/blog/about.html.twig");
    }
}
