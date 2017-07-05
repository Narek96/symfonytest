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
        $__internal_8b66119c7ed0adb2f7fb12190f336298490fb29c6e371fbcd048ba9c0044001f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b66119c7ed0adb2f7fb12190f336298490fb29c6e371fbcd048ba9c0044001f->enter($__internal_8b66119c7ed0adb2f7fb12190f336298490fb29c6e371fbcd048ba9c0044001f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_389658cc8ca0b5e613e40d3d676e959a0fdb6c1438b642edd6a742d9a943ab6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389658cc8ca0b5e613e40d3d676e959a0fdb6c1438b642edd6a742d9a943ab6f->enter($__internal_389658cc8ca0b5e613e40d3d676e959a0fdb6c1438b642edd6a742d9a943ab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b66119c7ed0adb2f7fb12190f336298490fb29c6e371fbcd048ba9c0044001f->leave($__internal_8b66119c7ed0adb2f7fb12190f336298490fb29c6e371fbcd048ba9c0044001f_prof);

        
        $__internal_389658cc8ca0b5e613e40d3d676e959a0fdb6c1438b642edd6a742d9a943ab6f->leave($__internal_389658cc8ca0b5e613e40d3d676e959a0fdb6c1438b642edd6a742d9a943ab6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d782cf44fa1cf3a825d09042543018190c4b0820bebfe3f0d6983ff1bcfafd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d782cf44fa1cf3a825d09042543018190c4b0820bebfe3f0d6983ff1bcfafd3->enter($__internal_1d782cf44fa1cf3a825d09042543018190c4b0820bebfe3f0d6983ff1bcfafd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_16de1943231f040472030bca4f0017393f7ffce7be3c3f379f73c09c9bde20d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16de1943231f040472030bca4f0017393f7ffce7be3c3f379f73c09c9bde20d7->enter($__internal_16de1943231f040472030bca4f0017393f7ffce7be3c3f379f73c09c9bde20d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16de1943231f040472030bca4f0017393f7ffce7be3c3f379f73c09c9bde20d7->leave($__internal_16de1943231f040472030bca4f0017393f7ffce7be3c3f379f73c09c9bde20d7_prof);

        
        $__internal_1d782cf44fa1cf3a825d09042543018190c4b0820bebfe3f0d6983ff1bcfafd3->leave($__internal_1d782cf44fa1cf3a825d09042543018190c4b0820bebfe3f0d6983ff1bcfafd3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aae8c5955978eb3c17a53cf2ad6bfc2a264b79ffd73be20252a8ebf943008d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae8c5955978eb3c17a53cf2ad6bfc2a264b79ffd73be20252a8ebf943008d65->enter($__internal_aae8c5955978eb3c17a53cf2ad6bfc2a264b79ffd73be20252a8ebf943008d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_041272d010f2911e5a1fb3e35795cbe531295949e8901f0609b4a064fe2bd252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041272d010f2911e5a1fb3e35795cbe531295949e8901f0609b4a064fe2bd252->enter($__internal_041272d010f2911e5a1fb3e35795cbe531295949e8901f0609b4a064fe2bd252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_041272d010f2911e5a1fb3e35795cbe531295949e8901f0609b4a064fe2bd252->leave($__internal_041272d010f2911e5a1fb3e35795cbe531295949e8901f0609b4a064fe2bd252_prof);

        
        $__internal_aae8c5955978eb3c17a53cf2ad6bfc2a264b79ffd73be20252a8ebf943008d65->leave($__internal_aae8c5955978eb3c17a53cf2ad6bfc2a264b79ffd73be20252a8ebf943008d65_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed65d10ccf4f5e428b5ef30d1404d905b0c290b17d51d20c0c6ce0153900f304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed65d10ccf4f5e428b5ef30d1404d905b0c290b17d51d20c0c6ce0153900f304->enter($__internal_ed65d10ccf4f5e428b5ef30d1404d905b0c290b17d51d20c0c6ce0153900f304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aab623cdc57a74e39fb280cf379af63f292ab53809f8fb4617b17d420175c915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab623cdc57a74e39fb280cf379af63f292ab53809f8fb4617b17d420175c915->enter($__internal_aab623cdc57a74e39fb280cf379af63f292ab53809f8fb4617b17d420175c915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aab623cdc57a74e39fb280cf379af63f292ab53809f8fb4617b17d420175c915->leave($__internal_aab623cdc57a74e39fb280cf379af63f292ab53809f8fb4617b17d420175c915_prof);

        
        $__internal_ed65d10ccf4f5e428b5ef30d1404d905b0c290b17d51d20c0c6ce0153900f304->leave($__internal_ed65d10ccf4f5e428b5ef30d1404d905b0c290b17d51d20c0c6ce0153900f304_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\newProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
