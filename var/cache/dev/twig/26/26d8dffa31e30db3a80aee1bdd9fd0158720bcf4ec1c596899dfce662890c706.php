<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da0c29eebd3c560da2cbfd96d4c2a29155949d63aaabb90006ff059da02f841b extends Twig_Template
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
        $__internal_2f89c87fa258560ad43a738e0e1073e8de18f6cb1eecbd82e61787d1c93ca2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f89c87fa258560ad43a738e0e1073e8de18f6cb1eecbd82e61787d1c93ca2eb->enter($__internal_2f89c87fa258560ad43a738e0e1073e8de18f6cb1eecbd82e61787d1c93ca2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ab2562e66fd0a5e0885dd8feb1d1a78706b7d969d355ff2e6fb2f6c9720afdd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2562e66fd0a5e0885dd8feb1d1a78706b7d969d355ff2e6fb2f6c9720afdd9->enter($__internal_ab2562e66fd0a5e0885dd8feb1d1a78706b7d969d355ff2e6fb2f6c9720afdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f89c87fa258560ad43a738e0e1073e8de18f6cb1eecbd82e61787d1c93ca2eb->leave($__internal_2f89c87fa258560ad43a738e0e1073e8de18f6cb1eecbd82e61787d1c93ca2eb_prof);

        
        $__internal_ab2562e66fd0a5e0885dd8feb1d1a78706b7d969d355ff2e6fb2f6c9720afdd9->leave($__internal_ab2562e66fd0a5e0885dd8feb1d1a78706b7d969d355ff2e6fb2f6c9720afdd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_931f1bf4c4596a267101e521e6409fc3be8321a80ab7a0fa03b9132ad3aa7b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931f1bf4c4596a267101e521e6409fc3be8321a80ab7a0fa03b9132ad3aa7b27->enter($__internal_931f1bf4c4596a267101e521e6409fc3be8321a80ab7a0fa03b9132ad3aa7b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4cec13bf0a9e8506c7a49221cc70fcf55065ecb0d77fe9e8b0176dcef89a0474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cec13bf0a9e8506c7a49221cc70fcf55065ecb0d77fe9e8b0176dcef89a0474->enter($__internal_4cec13bf0a9e8506c7a49221cc70fcf55065ecb0d77fe9e8b0176dcef89a0474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4cec13bf0a9e8506c7a49221cc70fcf55065ecb0d77fe9e8b0176dcef89a0474->leave($__internal_4cec13bf0a9e8506c7a49221cc70fcf55065ecb0d77fe9e8b0176dcef89a0474_prof);

        
        $__internal_931f1bf4c4596a267101e521e6409fc3be8321a80ab7a0fa03b9132ad3aa7b27->leave($__internal_931f1bf4c4596a267101e521e6409fc3be8321a80ab7a0fa03b9132ad3aa7b27_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1ee2ac973ad416832ea401cf1f8db075a5be476d54829e52eda93d4ecf03c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ee2ac973ad416832ea401cf1f8db075a5be476d54829e52eda93d4ecf03c1b->enter($__internal_d1ee2ac973ad416832ea401cf1f8db075a5be476d54829e52eda93d4ecf03c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84679322881084fb8e1a54d9c1ee2c2b7d9dcb1d4ef47c6d34c5117c4ef38a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84679322881084fb8e1a54d9c1ee2c2b7d9dcb1d4ef47c6d34c5117c4ef38a13->enter($__internal_84679322881084fb8e1a54d9c1ee2c2b7d9dcb1d4ef47c6d34c5117c4ef38a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_84679322881084fb8e1a54d9c1ee2c2b7d9dcb1d4ef47c6d34c5117c4ef38a13->leave($__internal_84679322881084fb8e1a54d9c1ee2c2b7d9dcb1d4ef47c6d34c5117c4ef38a13_prof);

        
        $__internal_d1ee2ac973ad416832ea401cf1f8db075a5be476d54829e52eda93d4ecf03c1b->leave($__internal_d1ee2ac973ad416832ea401cf1f8db075a5be476d54829e52eda93d4ecf03c1b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e447091d2ee05b07b911475c9e449164666732f7fc06c1b59aa1379dea83d731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e447091d2ee05b07b911475c9e449164666732f7fc06c1b59aa1379dea83d731->enter($__internal_e447091d2ee05b07b911475c9e449164666732f7fc06c1b59aa1379dea83d731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2096fd125aa27303caf96f52bda845a51a6af56ff55d83dd158831859ac18792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2096fd125aa27303caf96f52bda845a51a6af56ff55d83dd158831859ac18792->enter($__internal_2096fd125aa27303caf96f52bda845a51a6af56ff55d83dd158831859ac18792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2096fd125aa27303caf96f52bda845a51a6af56ff55d83dd158831859ac18792->leave($__internal_2096fd125aa27303caf96f52bda845a51a6af56ff55d83dd158831859ac18792_prof);

        
        $__internal_e447091d2ee05b07b911475c9e449164666732f7fc06c1b59aa1379dea83d731->leave($__internal_e447091d2ee05b07b911475c9e449164666732f7fc06c1b59aa1379dea83d731_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\newProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
