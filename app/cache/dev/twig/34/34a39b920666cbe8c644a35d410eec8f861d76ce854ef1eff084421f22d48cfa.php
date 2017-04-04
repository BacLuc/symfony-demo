<?php

/* form/fields.html.twig */
class __TwigTemplate_fe6d258453d2a594978419ac4553f98dbc59b7fc9ed1922457184aa5260e52fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'app_datetimepicker_widget' => array($this, 'block_app_datetimepicker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d5564af68473de06536564a7e6dae861881a4d1db8a0702ae183db7e03ed2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5564af68473de06536564a7e6dae861881a4d1db8a0702ae183db7e03ed2a3->enter($__internal_8d5564af68473de06536564a7e6dae861881a4d1db8a0702ae183db7e03ed2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 7
        echo "
";
        // line 8
        $this->displayBlock('app_datetimepicker_widget', $context, $blocks);
        
        $__internal_8d5564af68473de06536564a7e6dae861881a4d1db8a0702ae183db7e03ed2a3->leave($__internal_8d5564af68473de06536564a7e6dae861881a4d1db8a0702ae183db7e03ed2a3_prof);

    }

    public function block_app_datetimepicker_widget($context, array $blocks = array())
    {
        $__internal_596263b868d418e9dc6ec8677bdcf1cff28cc8718404e057e1228a6dd59b428f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596263b868d418e9dc6ec8677bdcf1cff28cc8718404e057e1228a6dd59b428f->enter($__internal_596263b868d418e9dc6ec8677bdcf1cff28cc8718404e057e1228a6dd59b428f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_datetimepicker_widget"));

        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 11
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_596263b868d418e9dc6ec8677bdcf1cff28cc8718404e057e1228a6dd59b428f->leave($__internal_596263b868d418e9dc6ec8677bdcf1cff28cc8718404e057e1228a6dd59b428f_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  41 => 10,  38 => 9,  26 => 8,  23 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   Each field type is rendered by a template fragment, which is determined
   by the value of your getName() method and the suffix _widget.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block app_datetimepicker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    {% endspaceless %}
{% endblock %}
", "form/fields.html.twig", "/var/www/html/symfony_demo/app/Resources/views/form/fields.html.twig");
    }
}
