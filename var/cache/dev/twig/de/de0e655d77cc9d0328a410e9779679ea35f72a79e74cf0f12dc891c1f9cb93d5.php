<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d2dec7121706fbab25b3f842a91a9945c251a502b81fce045925ef887666e26a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f163196d51d7e75e5c173dc3407f360f24a9636d2023071a01b70f0071d29453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f163196d51d7e75e5c173dc3407f360f24a9636d2023071a01b70f0071d29453->enter($__internal_f163196d51d7e75e5c173dc3407f360f24a9636d2023071a01b70f0071d29453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2b1b3982d77644fbf779e3a8cf11ff434a0131bb922ddc7afdbcd68c46eb93dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1b3982d77644fbf779e3a8cf11ff434a0131bb922ddc7afdbcd68c46eb93dd->enter($__internal_2b1b3982d77644fbf779e3a8cf11ff434a0131bb922ddc7afdbcd68c46eb93dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f163196d51d7e75e5c173dc3407f360f24a9636d2023071a01b70f0071d29453->leave($__internal_f163196d51d7e75e5c173dc3407f360f24a9636d2023071a01b70f0071d29453_prof);

        
        $__internal_2b1b3982d77644fbf779e3a8cf11ff434a0131bb922ddc7afdbcd68c46eb93dd->leave($__internal_2b1b3982d77644fbf779e3a8cf11ff434a0131bb922ddc7afdbcd68c46eb93dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0151a6158c19c14ac6cf5d9a658b180fe88f453734b5863cb035a52cc827173e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0151a6158c19c14ac6cf5d9a658b180fe88f453734b5863cb035a52cc827173e->enter($__internal_0151a6158c19c14ac6cf5d9a658b180fe88f453734b5863cb035a52cc827173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3b4e3494a701100c4d88713e0ea0654cccc89185195ef35ee6e766134c30ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b4e3494a701100c4d88713e0ea0654cccc89185195ef35ee6e766134c30ec5->enter($__internal_f3b4e3494a701100c4d88713e0ea0654cccc89185195ef35ee6e766134c30ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f3b4e3494a701100c4d88713e0ea0654cccc89185195ef35ee6e766134c30ec5->leave($__internal_f3b4e3494a701100c4d88713e0ea0654cccc89185195ef35ee6e766134c30ec5_prof);

        
        $__internal_0151a6158c19c14ac6cf5d9a658b180fe88f453734b5863cb035a52cc827173e->leave($__internal_0151a6158c19c14ac6cf5d9a658b180fe88f453734b5863cb035a52cc827173e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed89bea1451ac4d7a4ee1321d00f7fa64573f7582f2a71604c457f13653d06e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed89bea1451ac4d7a4ee1321d00f7fa64573f7582f2a71604c457f13653d06e5->enter($__internal_ed89bea1451ac4d7a4ee1321d00f7fa64573f7582f2a71604c457f13653d06e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a79d703cc7cf2018aae80f783682b94aeca6d085191a896d3a4dec94d3d0ec17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79d703cc7cf2018aae80f783682b94aeca6d085191a896d3a4dec94d3d0ec17->enter($__internal_a79d703cc7cf2018aae80f783682b94aeca6d085191a896d3a4dec94d3d0ec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a79d703cc7cf2018aae80f783682b94aeca6d085191a896d3a4dec94d3d0ec17->leave($__internal_a79d703cc7cf2018aae80f783682b94aeca6d085191a896d3a4dec94d3d0ec17_prof);

        
        $__internal_ed89bea1451ac4d7a4ee1321d00f7fa64573f7582f2a71604c457f13653d06e5->leave($__internal_ed89bea1451ac4d7a4ee1321d00f7fa64573f7582f2a71604c457f13653d06e5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85a562cbadd0247864604dc5496d21ecc60dfa37870cdefe8331688fa289768c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a562cbadd0247864604dc5496d21ecc60dfa37870cdefe8331688fa289768c->enter($__internal_85a562cbadd0247864604dc5496d21ecc60dfa37870cdefe8331688fa289768c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef28688e5fa56c5ef8b06f48d0accd0deaa3fa8aec4f636cd38cacc607aaa423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef28688e5fa56c5ef8b06f48d0accd0deaa3fa8aec4f636cd38cacc607aaa423->enter($__internal_ef28688e5fa56c5ef8b06f48d0accd0deaa3fa8aec4f636cd38cacc607aaa423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ef28688e5fa56c5ef8b06f48d0accd0deaa3fa8aec4f636cd38cacc607aaa423->leave($__internal_ef28688e5fa56c5ef8b06f48d0accd0deaa3fa8aec4f636cd38cacc607aaa423_prof);

        
        $__internal_85a562cbadd0247864604dc5496d21ecc60dfa37870cdefe8331688fa289768c->leave($__internal_85a562cbadd0247864604dc5496d21ecc60dfa37870cdefe8331688fa289768c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\newProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
