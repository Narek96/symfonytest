<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3e3cfde8de49156e5da864321870c2f3807c1de69a232b115cad79de3a9ee5a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20ecbf460faf94da16a0ed38eb3c7e1cd2d51b747b53544f3d51fd21b51f3e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ecbf460faf94da16a0ed38eb3c7e1cd2d51b747b53544f3d51fd21b51f3e6b->enter($__internal_20ecbf460faf94da16a0ed38eb3c7e1cd2d51b747b53544f3d51fd21b51f3e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0771c41416370b6aaa373d6bcf84b5825a597bc73809ec84191bd07dbeba9e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0771c41416370b6aaa373d6bcf84b5825a597bc73809ec84191bd07dbeba9e85->enter($__internal_0771c41416370b6aaa373d6bcf84b5825a597bc73809ec84191bd07dbeba9e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_20ecbf460faf94da16a0ed38eb3c7e1cd2d51b747b53544f3d51fd21b51f3e6b->leave($__internal_20ecbf460faf94da16a0ed38eb3c7e1cd2d51b747b53544f3d51fd21b51f3e6b_prof);

        
        $__internal_0771c41416370b6aaa373d6bcf84b5825a597bc73809ec84191bd07dbeba9e85->leave($__internal_0771c41416370b6aaa373d6bcf84b5825a597bc73809ec84191bd07dbeba9e85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07742ffe9c50d251d24448de98e28de72c5f4c521e465db64d0580b4b2fc6344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07742ffe9c50d251d24448de98e28de72c5f4c521e465db64d0580b4b2fc6344->enter($__internal_07742ffe9c50d251d24448de98e28de72c5f4c521e465db64d0580b4b2fc6344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1cb8f215fbed8dcc73e6906e20833354839c94745faddfca0d66a24d081dc401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb8f215fbed8dcc73e6906e20833354839c94745faddfca0d66a24d081dc401->enter($__internal_1cb8f215fbed8dcc73e6906e20833354839c94745faddfca0d66a24d081dc401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1cb8f215fbed8dcc73e6906e20833354839c94745faddfca0d66a24d081dc401->leave($__internal_1cb8f215fbed8dcc73e6906e20833354839c94745faddfca0d66a24d081dc401_prof);

        
        $__internal_07742ffe9c50d251d24448de98e28de72c5f4c521e465db64d0580b4b2fc6344->leave($__internal_07742ffe9c50d251d24448de98e28de72c5f4c521e465db64d0580b4b2fc6344_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca74cfdaa3390473dd206647440001ebc4a3dd8270b971ca63a5c1f61bac9d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca74cfdaa3390473dd206647440001ebc4a3dd8270b971ca63a5c1f61bac9d91->enter($__internal_ca74cfdaa3390473dd206647440001ebc4a3dd8270b971ca63a5c1f61bac9d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ef6ad1ecfdfde126f164ec44d870c92e6041bccc83ed618dd7e4dde516fcd010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6ad1ecfdfde126f164ec44d870c92e6041bccc83ed618dd7e4dde516fcd010->enter($__internal_ef6ad1ecfdfde126f164ec44d870c92e6041bccc83ed618dd7e4dde516fcd010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ef6ad1ecfdfde126f164ec44d870c92e6041bccc83ed618dd7e4dde516fcd010->leave($__internal_ef6ad1ecfdfde126f164ec44d870c92e6041bccc83ed618dd7e4dde516fcd010_prof);

        
        $__internal_ca74cfdaa3390473dd206647440001ebc4a3dd8270b971ca63a5c1f61bac9d91->leave($__internal_ca74cfdaa3390473dd206647440001ebc4a3dd8270b971ca63a5c1f61bac9d91_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfdecf8822c895c627d8b0adb7f38f1207209f34a03e7c1bb8c298fbc4128987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdecf8822c895c627d8b0adb7f38f1207209f34a03e7c1bb8c298fbc4128987->enter($__internal_bfdecf8822c895c627d8b0adb7f38f1207209f34a03e7c1bb8c298fbc4128987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1beefa77e7c13a270efc321e84632a95425c0a80f387ae463a96e6d0af9612c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1beefa77e7c13a270efc321e84632a95425c0a80f387ae463a96e6d0af9612c->enter($__internal_e1beefa77e7c13a270efc321e84632a95425c0a80f387ae463a96e6d0af9612c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e1beefa77e7c13a270efc321e84632a95425c0a80f387ae463a96e6d0af9612c->leave($__internal_e1beefa77e7c13a270efc321e84632a95425c0a80f387ae463a96e6d0af9612c_prof);

        
        $__internal_bfdecf8822c895c627d8b0adb7f38f1207209f34a03e7c1bb8c298fbc4128987->leave($__internal_bfdecf8822c895c627d8b0adb7f38f1207209f34a03e7c1bb8c298fbc4128987_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\symfonytest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
