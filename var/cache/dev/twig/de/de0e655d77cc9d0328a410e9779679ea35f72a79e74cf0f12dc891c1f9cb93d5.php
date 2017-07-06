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
        $__internal_2acc21658abc0a01c7cde1f3ac4744a319bfe4a8f9e21f7998449707384d483b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acc21658abc0a01c7cde1f3ac4744a319bfe4a8f9e21f7998449707384d483b->enter($__internal_2acc21658abc0a01c7cde1f3ac4744a319bfe4a8f9e21f7998449707384d483b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d89e5dc993ba5b83c365a8103c1955c64c4b2028299e3a7f2c7740e871d1c8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89e5dc993ba5b83c365a8103c1955c64c4b2028299e3a7f2c7740e871d1c8f1->enter($__internal_d89e5dc993ba5b83c365a8103c1955c64c4b2028299e3a7f2c7740e871d1c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acc21658abc0a01c7cde1f3ac4744a319bfe4a8f9e21f7998449707384d483b->leave($__internal_2acc21658abc0a01c7cde1f3ac4744a319bfe4a8f9e21f7998449707384d483b_prof);

        
        $__internal_d89e5dc993ba5b83c365a8103c1955c64c4b2028299e3a7f2c7740e871d1c8f1->leave($__internal_d89e5dc993ba5b83c365a8103c1955c64c4b2028299e3a7f2c7740e871d1c8f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3bc80055bac3ec853cc9ca2b300f6a2eb5d9222630b634981dda0a257ad8adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bc80055bac3ec853cc9ca2b300f6a2eb5d9222630b634981dda0a257ad8adf->enter($__internal_d3bc80055bac3ec853cc9ca2b300f6a2eb5d9222630b634981dda0a257ad8adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_784fc3dc345902ba27607cc35a01e1847a92c58d4d6454d3bb953d74f7838951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784fc3dc345902ba27607cc35a01e1847a92c58d4d6454d3bb953d74f7838951->enter($__internal_784fc3dc345902ba27607cc35a01e1847a92c58d4d6454d3bb953d74f7838951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_784fc3dc345902ba27607cc35a01e1847a92c58d4d6454d3bb953d74f7838951->leave($__internal_784fc3dc345902ba27607cc35a01e1847a92c58d4d6454d3bb953d74f7838951_prof);

        
        $__internal_d3bc80055bac3ec853cc9ca2b300f6a2eb5d9222630b634981dda0a257ad8adf->leave($__internal_d3bc80055bac3ec853cc9ca2b300f6a2eb5d9222630b634981dda0a257ad8adf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b08f1a4bbaff95650191982fdb33d563c53da415853a135357fd05bd52e39e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08f1a4bbaff95650191982fdb33d563c53da415853a135357fd05bd52e39e0a->enter($__internal_b08f1a4bbaff95650191982fdb33d563c53da415853a135357fd05bd52e39e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f84020ce927326421ff902de3ae05869dab44cd62faf304c118746e8329cc433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84020ce927326421ff902de3ae05869dab44cd62faf304c118746e8329cc433->enter($__internal_f84020ce927326421ff902de3ae05869dab44cd62faf304c118746e8329cc433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f84020ce927326421ff902de3ae05869dab44cd62faf304c118746e8329cc433->leave($__internal_f84020ce927326421ff902de3ae05869dab44cd62faf304c118746e8329cc433_prof);

        
        $__internal_b08f1a4bbaff95650191982fdb33d563c53da415853a135357fd05bd52e39e0a->leave($__internal_b08f1a4bbaff95650191982fdb33d563c53da415853a135357fd05bd52e39e0a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2eb687c871e4cf341a14420c8d5fb7f76640ca4205ec25610dfe45f65369acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2eb687c871e4cf341a14420c8d5fb7f76640ca4205ec25610dfe45f65369acd->enter($__internal_e2eb687c871e4cf341a14420c8d5fb7f76640ca4205ec25610dfe45f65369acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3fe0982b34a6098cf3b71e2c33580b18fb7501bb47c1275ab172170bddd6c688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe0982b34a6098cf3b71e2c33580b18fb7501bb47c1275ab172170bddd6c688->enter($__internal_3fe0982b34a6098cf3b71e2c33580b18fb7501bb47c1275ab172170bddd6c688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3fe0982b34a6098cf3b71e2c33580b18fb7501bb47c1275ab172170bddd6c688->leave($__internal_3fe0982b34a6098cf3b71e2c33580b18fb7501bb47c1275ab172170bddd6c688_prof);

        
        $__internal_e2eb687c871e4cf341a14420c8d5fb7f76640ca4205ec25610dfe45f65369acd->leave($__internal_e2eb687c871e4cf341a14420c8d5fb7f76640ca4205ec25610dfe45f65369acd_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\symfonytest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
