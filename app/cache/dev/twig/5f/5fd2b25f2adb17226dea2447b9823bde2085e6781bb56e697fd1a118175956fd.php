<?php

/* base.html.twig */
class __TwigTemplate_337db11c7917c83e475527c10aa60f40ae63eae2be4bcc5fd7c34f965dadb8dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93d9a6375bd079f8c94063b35c04c1b918e14d887ae12c8b674cb281e691aa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d9a6375bd079f8c94063b35c04c1b918e14d887ae12c8b674cb281e691aa3c->enter($__internal_93d9a6375bd079f8c94063b35c04c1b918e14d887ae12c8b674cb281e691aa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 30
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 91
        echo "
        <div class=\"container body-container\">
            ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "        </div>

        ";
        // line 114
        $this->displayBlock('footer', $context, $blocks);
        // line 133
        echo "
        ";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "
        <!-- Page rendered on ";
        // line 150
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_93d9a6375bd079f8c94063b35c04c1b918e14d887ae12c8b674cb281e691aa3c->leave($__internal_93d9a6375bd079f8c94063b35c04c1b918e14d887ae12c8b674cb281e691aa3c_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_417369b2c1795f04eb06298096971877e8aff5dd80448ce349f8146e17b9cbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417369b2c1795f04eb06298096971877e8aff5dd80448ce349f8146e17b9cbc7->enter($__internal_417369b2c1795f04eb06298096971877e8aff5dd80448ce349f8146e17b9cbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_417369b2c1795f04eb06298096971877e8aff5dd80448ce349f8146e17b9cbc7->leave($__internal_417369b2c1795f04eb06298096971877e8aff5dd80448ce349f8146e17b9cbc7_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b626f7415abc7df131fed7b684f19e9133040b3358136505fafa8571039bbcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b626f7415abc7df131fed7b684f19e9133040b3358136505fafa8571039bbcf9->enter($__internal_b626f7415abc7df131fed7b684f19e9133040b3358136505fafa8571039bbcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_b626f7415abc7df131fed7b684f19e9133040b3358136505fafa8571039bbcf9->leave($__internal_b626f7415abc7df131fed7b684f19e9133040b3358136505fafa8571039bbcf9_prof);

    }

    // line 30
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0ef86f19d2e514a89d364bdded9fa1ed73bb00a136431913681b3c12b3941800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef86f19d2e514a89d364bdded9fa1ed73bb00a136431913681b3c12b3941800->enter($__internal_0ef86f19d2e514a89d364bdded9fa1ed73bb00a136431913681b3c12b3941800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_0ef86f19d2e514a89d364bdded9fa1ed73bb00a136431913681b3c12b3941800->leave($__internal_0ef86f19d2e514a89d364bdded9fa1ed73bb00a136431913681b3c12b3941800_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_f26b54ca2a3be8be30baaeb38444fc175c3f373c2578676e31670c7a333e3dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26b54ca2a3be8be30baaeb38444fc175c3f373c2578676e31670c7a333e3dbc->enter($__internal_f26b54ca2a3be8be30baaeb38444fc175c3f373c2578676e31670c7a333e3dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 53
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 68
        echo "
                                ";
        // line 69
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 69, $this->getSourceContext()); })()), "user", array())) {
            // line 70
            echo "                                    <li>
                                        <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 76
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 81
            echo "                                            <li ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 81, $this->getSourceContext()); })()), "request", array()), "locale", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "code", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 81, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 81, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_f26b54ca2a3be8be30baaeb38444fc175c3f373c2578676e31670c7a333e3dbc->leave($__internal_f26b54ca2a3be8be30baaeb38444fc175c3f373c2578676e31670c7a333e3dbc_prof);

    }

    // line 53
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_cb12760908748cfe45502218c80790c75c9bd5cda72db6818e3363d28f9d4007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb12760908748cfe45502218c80790c75c9bd5cda72db6818e3363d28f9d4007->enter($__internal_cb12760908748cfe45502218c80790c75c9bd5cda72db6818e3363d28f9d4007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 54
        echo "                                    <li>
                                        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "                                        <li>
                                            <a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 67
        echo "                                ";
        
        $__internal_cb12760908748cfe45502218c80790c75c9bd5cda72db6818e3363d28f9d4007->leave($__internal_cb12760908748cfe45502218c80790c75c9bd5cda72db6818e3363d28f9d4007_prof);

    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        $__internal_97a9a425b9828a345734080cead41f734758f98d3e7c9109b8b08c6a5ef2d54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a9a425b9828a345734080cead41f734758f98d3e7c9109b8b08c6a5ef2d54f->enter($__internal_97a9a425b9828a345734080cead41f734758f98d3e7c9109b8b08c6a5ef2d54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 96
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 98
        $this->displayBlock('main', $context, $blocks);
        // line 99
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 102
        $this->displayBlock('sidebar', $context, $blocks);
        // line 109
        echo "                    </div>
                </div>
            ";
        
        $__internal_97a9a425b9828a345734080cead41f734758f98d3e7c9109b8b08c6a5ef2d54f->leave($__internal_97a9a425b9828a345734080cead41f734758f98d3e7c9109b8b08c6a5ef2d54f_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_7e89d775c83fa0a556b92debac2ff1e758bf6c7cbdcce7fdded4c2fa94ecd538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e89d775c83fa0a556b92debac2ff1e758bf6c7cbdcce7fdded4c2fa94ecd538->enter($__internal_7e89d775c83fa0a556b92debac2ff1e758bf6c7cbdcce7fdded4c2fa94ecd538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_7e89d775c83fa0a556b92debac2ff1e758bf6c7cbdcce7fdded4c2fa94ecd538->leave($__internal_7e89d775c83fa0a556b92debac2ff1e758bf6c7cbdcce7fdded4c2fa94ecd538_prof);

    }

    // line 102
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e413cdadefa762e9907af71bb6462064c76bd6a20843a6ee86868cad3d586c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e413cdadefa762e9907af71bb6462064c76bd6a20843a6ee86868cad3d586c74->enter($__internal_e413cdadefa762e9907af71bb6462064c76bd6a20843a6ee86868cad3d586c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 103
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragmentStrategy("esi", $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 106
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 106, $this->getSourceContext()); })()), "request", array()), "locale", array()))));
        // line 107
        echo "
                        ";
        
        $__internal_e413cdadefa762e9907af71bb6462064c76bd6a20843a6ee86868cad3d586c74->leave($__internal_e413cdadefa762e9907af71bb6462064c76bd6a20843a6ee86868cad3d586c74_prof);

    }

    // line 114
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8f4eddc89c7654c8c5a9e226943e00ce094ca44eee665505c5a996f12d4accaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4eddc89c7654c8c5a9e226943e00ce094ca44eee665505c5a996f12d4accaa->enter($__internal_8f4eddc89c7654c8c5a9e226943e00ce094ca44eee665505c5a996f12d4accaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 115
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 119
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_8f4eddc89c7654c8c5a9e226943e00ce094ca44eee665505c5a996f12d4accaa->leave($__internal_8f4eddc89c7654c8c5a9e226943e00ce094ca44eee665505c5a996f12d4accaa_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b454e9cf7ec5369c263146bc177e6f71e3a2665ec829f9bea6a7a3f451630d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b454e9cf7ec5369c263146bc177e6f71e3a2665ec829f9bea6a7a3f451630d9->enter($__internal_8b454e9cf7ec5369c263146bc177e6f71e3a2665ec829f9bea6a7a3f451630d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "        ";
        // line 146
        echo "
            <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8b454e9cf7ec5369c263146bc177e6f71e3a2665ec829f9bea6a7a3f451630d9->leave($__internal_8b454e9cf7ec5369c263146bc177e6f71e3a2665ec829f9bea6a7a3f451630d9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 147,  373 => 146,  371 => 135,  365 => 134,  345 => 120,  341 => 119,  335 => 115,  329 => 114,  321 => 107,  319 => 106,  317 => 103,  311 => 102,  300 => 98,  291 => 109,  289 => 102,  284 => 99,  282 => 98,  277 => 96,  273 => 94,  267 => 93,  260 => 67,  253 => 63,  249 => 62,  246 => 61,  244 => 60,  237 => 56,  233 => 55,  230 => 54,  224 => 53,  210 => 83,  195 => 81,  191 => 80,  185 => 76,  178 => 72,  174 => 71,  171 => 70,  169 => 69,  166 => 68,  164 => 53,  145 => 37,  139 => 33,  133 => 32,  122 => 30,  113 => 25,  110 => 24,  108 => 13,  102 => 12,  90 => 10,  79 => 150,  76 => 149,  74 => 134,  71 => 133,  69 => 114,  65 => 112,  63 => 93,  59 => 91,  57 => 32,  52 => 30,  45 => 27,  43 => 12,  38 => 10,  32 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Symfony Demo application{% endblock %}</title>

        {% block stylesheets %}
        {# uncomment the following lines to compile SCSS assets with Assetic

            {% stylesheets filter=\"scssphp\" output=\"css/app.css\"
                \"%kernel.root_dir%/Resources/assets/scss/bootstrap-flatly.scss\"
                \"%kernel.root_dir%/Resources/assets/scss/font-awesome.scss\"
                \"%kernel.root_dir%/Resources/assets/css/*.css\"
                \"%kernel.root_dir%/Resources/assets/scss/main.scss\"
            %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}
        #}

            <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                {% block header_navigation_links %}
                                    <li>
                                        <a href=\"{{ path('blog_index') }}\">
                                            <i class=\"fa fa-home\"></i> {{ 'menu.homepage'|trans }}
                                        </a>
                                    </li>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a href=\"{{ path('admin_post_index') }}\">
                                                <i class=\"fa fa-lock\"></i> {{ 'menu.admin'|trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endblock %}

                                {% if app.user %}
                                    <li>
                                        <a href=\"{{ path('security_logout') }}\">
                                            <i class=\"fa fa-sign-out\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </li>
                                {% endif %}

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        {% for locale in locales() %}
                                            <li {% if app.request.locale == locale.code %}class=\"active\"{% endif %}><a href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}\">{{ locale.name|capitalize }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        {{ include('default/_flash_messages.html.twig') }}

                        {% block main %}{% endblock %}
                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        {% block sidebar %}
                            {{ render_esi(controller('FrameworkBundle:Template:template', {
                                'template': 'blog/about.html.twig',
                                'sharedAge': 600,
                                '_locale': app.request.locale
                            })) }}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p>{{ 'mit_license'|trans }}</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
        {# uncomment the following lines to combine and minimize JavaScript assets with Assetic
            {% javascripts filter=\"?jsqueeze\" output=\"js/app.js\"
                \"%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js\"
                \"%kernel.root_dir%/Resources/assets/js/moment.min.js\"
                \"%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js\"
                \"%kernel.root_dir%/Resources/assets/js/highlight.pack.js\"
                \"%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js\"
                \"%kernel.root_dir%/Resources/assets/js/main.js\" %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
        #}

            <script src=\"{{ asset('js/app.js') }}\"></script>
        {% endblock %}

        <!-- Page rendered on {{ 'now'|localizeddate('long', 'long') }} -->
    </body>
</html>
", "base.html.twig", "/var/www/html/symfony_demo/app/Resources/views/base.html.twig");
    }
}
