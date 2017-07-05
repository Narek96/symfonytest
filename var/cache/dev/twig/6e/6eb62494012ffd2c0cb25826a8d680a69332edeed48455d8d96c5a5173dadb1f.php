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
        $__internal_433def1ed3b50ed646da860070afaae5255f0ea38ba4615eea28bd32a0d93724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433def1ed3b50ed646da860070afaae5255f0ea38ba4615eea28bd32a0d93724->enter($__internal_433def1ed3b50ed646da860070afaae5255f0ea38ba4615eea28bd32a0d93724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_463246aa60823653668378860080478d1a5399ef5a33e1da188eefc7c8cd4320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463246aa60823653668378860080478d1a5399ef5a33e1da188eefc7c8cd4320->enter($__internal_463246aa60823653668378860080478d1a5399ef5a33e1da188eefc7c8cd4320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_433def1ed3b50ed646da860070afaae5255f0ea38ba4615eea28bd32a0d93724->leave($__internal_433def1ed3b50ed646da860070afaae5255f0ea38ba4615eea28bd32a0d93724_prof);

        
        $__internal_463246aa60823653668378860080478d1a5399ef5a33e1da188eefc7c8cd4320->leave($__internal_463246aa60823653668378860080478d1a5399ef5a33e1da188eefc7c8cd4320_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_befb8f3d8e98458c7c9da2cd98cf0194e64add718bb7005661e45fb9160e4b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befb8f3d8e98458c7c9da2cd98cf0194e64add718bb7005661e45fb9160e4b3b->enter($__internal_befb8f3d8e98458c7c9da2cd98cf0194e64add718bb7005661e45fb9160e4b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d337dda7eb5e569bf06f619d55131c7a49d9ef87fba001f4b544d4840d94d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d337dda7eb5e569bf06f619d55131c7a49d9ef87fba001f4b544d4840d94d7e->enter($__internal_1d337dda7eb5e569bf06f619d55131c7a49d9ef87fba001f4b544d4840d94d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1d337dda7eb5e569bf06f619d55131c7a49d9ef87fba001f4b544d4840d94d7e->leave($__internal_1d337dda7eb5e569bf06f619d55131c7a49d9ef87fba001f4b544d4840d94d7e_prof);

        
        $__internal_befb8f3d8e98458c7c9da2cd98cf0194e64add718bb7005661e45fb9160e4b3b->leave($__internal_befb8f3d8e98458c7c9da2cd98cf0194e64add718bb7005661e45fb9160e4b3b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd48c7eddf0fb34a826c18708f62048a54bff17367b39dbd16505a2ea5aff3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd48c7eddf0fb34a826c18708f62048a54bff17367b39dbd16505a2ea5aff3e5->enter($__internal_bd48c7eddf0fb34a826c18708f62048a54bff17367b39dbd16505a2ea5aff3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff55325144a73d5f96c9ab4e3f95ace53f853ac3796e3df65180b1e4622bfb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff55325144a73d5f96c9ab4e3f95ace53f853ac3796e3df65180b1e4622bfb65->enter($__internal_ff55325144a73d5f96c9ab4e3f95ace53f853ac3796e3df65180b1e4622bfb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ff55325144a73d5f96c9ab4e3f95ace53f853ac3796e3df65180b1e4622bfb65->leave($__internal_ff55325144a73d5f96c9ab4e3f95ace53f853ac3796e3df65180b1e4622bfb65_prof);

        
        $__internal_bd48c7eddf0fb34a826c18708f62048a54bff17367b39dbd16505a2ea5aff3e5->leave($__internal_bd48c7eddf0fb34a826c18708f62048a54bff17367b39dbd16505a2ea5aff3e5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8709ad7eea5fdb8cb7d580c236f8e554cd4b889738c5baa56e46cf23953ee0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8709ad7eea5fdb8cb7d580c236f8e554cd4b889738c5baa56e46cf23953ee0e->enter($__internal_c8709ad7eea5fdb8cb7d580c236f8e554cd4b889738c5baa56e46cf23953ee0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89b839fc8cf0d085fd87c27fa2ca35c636ec2d367ac6a2234030663112a81461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b839fc8cf0d085fd87c27fa2ca35c636ec2d367ac6a2234030663112a81461->enter($__internal_89b839fc8cf0d085fd87c27fa2ca35c636ec2d367ac6a2234030663112a81461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89b839fc8cf0d085fd87c27fa2ca35c636ec2d367ac6a2234030663112a81461->leave($__internal_89b839fc8cf0d085fd87c27fa2ca35c636ec2d367ac6a2234030663112a81461_prof);

        
        $__internal_c8709ad7eea5fdb8cb7d580c236f8e554cd4b889738c5baa56e46cf23953ee0e->leave($__internal_c8709ad7eea5fdb8cb7d580c236f8e554cd4b889738c5baa56e46cf23953ee0e_prof);

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
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\newProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
