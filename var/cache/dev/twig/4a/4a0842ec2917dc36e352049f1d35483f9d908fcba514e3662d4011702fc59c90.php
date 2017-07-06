<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c1b856958faa9e60bd49805d3296a628e967eb4b2b091da9a5b3f3eca80f9662 extends Twig_Template
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
        $__internal_20df45dfcf2f95b76a82a2d32cca98fac258b4c994f8b4aa5f1afb75a00f7613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20df45dfcf2f95b76a82a2d32cca98fac258b4c994f8b4aa5f1afb75a00f7613->enter($__internal_20df45dfcf2f95b76a82a2d32cca98fac258b4c994f8b4aa5f1afb75a00f7613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0cdf3b0cfd72e3dd7830f280e550e29ff74ff8bf2459c126007deca7fba9dac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdf3b0cfd72e3dd7830f280e550e29ff74ff8bf2459c126007deca7fba9dac2->enter($__internal_0cdf3b0cfd72e3dd7830f280e550e29ff74ff8bf2459c126007deca7fba9dac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20df45dfcf2f95b76a82a2d32cca98fac258b4c994f8b4aa5f1afb75a00f7613->leave($__internal_20df45dfcf2f95b76a82a2d32cca98fac258b4c994f8b4aa5f1afb75a00f7613_prof);

        
        $__internal_0cdf3b0cfd72e3dd7830f280e550e29ff74ff8bf2459c126007deca7fba9dac2->leave($__internal_0cdf3b0cfd72e3dd7830f280e550e29ff74ff8bf2459c126007deca7fba9dac2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d435ca7a6569d8fb6bdea8e2f6329049ce7484e40a3c84c690bd3e306ca1f1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d435ca7a6569d8fb6bdea8e2f6329049ce7484e40a3c84c690bd3e306ca1f1e0->enter($__internal_d435ca7a6569d8fb6bdea8e2f6329049ce7484e40a3c84c690bd3e306ca1f1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9ddf78cc10c77cbdfcaeaa33e5729d44bafdeb347bb61a3fc02687ad36a34f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddf78cc10c77cbdfcaeaa33e5729d44bafdeb347bb61a3fc02687ad36a34f2d->enter($__internal_9ddf78cc10c77cbdfcaeaa33e5729d44bafdeb347bb61a3fc02687ad36a34f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ddf78cc10c77cbdfcaeaa33e5729d44bafdeb347bb61a3fc02687ad36a34f2d->leave($__internal_9ddf78cc10c77cbdfcaeaa33e5729d44bafdeb347bb61a3fc02687ad36a34f2d_prof);

        
        $__internal_d435ca7a6569d8fb6bdea8e2f6329049ce7484e40a3c84c690bd3e306ca1f1e0->leave($__internal_d435ca7a6569d8fb6bdea8e2f6329049ce7484e40a3c84c690bd3e306ca1f1e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0c40560fc4c90da601539e75346743cf08adc38371c46955ca3cef80fadeac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c40560fc4c90da601539e75346743cf08adc38371c46955ca3cef80fadeac7->enter($__internal_f0c40560fc4c90da601539e75346743cf08adc38371c46955ca3cef80fadeac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f8d30d1dbeb95fad9fa21b586efd215ce2c956ec5e1b9f297bdaf523fe63bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8d30d1dbeb95fad9fa21b586efd215ce2c956ec5e1b9f297bdaf523fe63bf4->enter($__internal_5f8d30d1dbeb95fad9fa21b586efd215ce2c956ec5e1b9f297bdaf523fe63bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f8d30d1dbeb95fad9fa21b586efd215ce2c956ec5e1b9f297bdaf523fe63bf4->leave($__internal_5f8d30d1dbeb95fad9fa21b586efd215ce2c956ec5e1b9f297bdaf523fe63bf4_prof);

        
        $__internal_f0c40560fc4c90da601539e75346743cf08adc38371c46955ca3cef80fadeac7->leave($__internal_f0c40560fc4c90da601539e75346743cf08adc38371c46955ca3cef80fadeac7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a105972ee1635b77a201e1956ad2b60c714ab0b2179af66c8daea345946a6443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a105972ee1635b77a201e1956ad2b60c714ab0b2179af66c8daea345946a6443->enter($__internal_a105972ee1635b77a201e1956ad2b60c714ab0b2179af66c8daea345946a6443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6c9235c9d659aa3998312c1bfe1c29d0a96857bcfd7f4062f3cc2bd72a200d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c9235c9d659aa3998312c1bfe1c29d0a96857bcfd7f4062f3cc2bd72a200d3->enter($__internal_a6c9235c9d659aa3998312c1bfe1c29d0a96857bcfd7f4062f3cc2bd72a200d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6c9235c9d659aa3998312c1bfe1c29d0a96857bcfd7f4062f3cc2bd72a200d3->leave($__internal_a6c9235c9d659aa3998312c1bfe1c29d0a96857bcfd7f4062f3cc2bd72a200d3_prof);

        
        $__internal_a105972ee1635b77a201e1956ad2b60c714ab0b2179af66c8daea345946a6443->leave($__internal_a105972ee1635b77a201e1956ad2b60c714ab0b2179af66c8daea345946a6443_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\symfonytest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
