<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b53b68cb8b08a98784d848b6fcf772f6e1f7fd115081b1fe04bfdef911244846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_371ff6a91fcadc3c08f6b36fdcea21e56bb4f224d33d9e5d602cf6922124c520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371ff6a91fcadc3c08f6b36fdcea21e56bb4f224d33d9e5d602cf6922124c520->enter($__internal_371ff6a91fcadc3c08f6b36fdcea21e56bb4f224d33d9e5d602cf6922124c520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_82f727ba852056980613fbb35f8bdc59d7cc4823ff5934f9ea0b6fe496bdf213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f727ba852056980613fbb35f8bdc59d7cc4823ff5934f9ea0b6fe496bdf213->enter($__internal_82f727ba852056980613fbb35f8bdc59d7cc4823ff5934f9ea0b6fe496bdf213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371ff6a91fcadc3c08f6b36fdcea21e56bb4f224d33d9e5d602cf6922124c520->leave($__internal_371ff6a91fcadc3c08f6b36fdcea21e56bb4f224d33d9e5d602cf6922124c520_prof);

        
        $__internal_82f727ba852056980613fbb35f8bdc59d7cc4823ff5934f9ea0b6fe496bdf213->leave($__internal_82f727ba852056980613fbb35f8bdc59d7cc4823ff5934f9ea0b6fe496bdf213_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67bbbba89010f5303dafd11a3a5433c437a941a60da5449e84e240f422084cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bbbba89010f5303dafd11a3a5433c437a941a60da5449e84e240f422084cdd->enter($__internal_67bbbba89010f5303dafd11a3a5433c437a941a60da5449e84e240f422084cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c24e23b7a23211726d818a82ec5294c71a27ec74f25dbacc1449f770793ca532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24e23b7a23211726d818a82ec5294c71a27ec74f25dbacc1449f770793ca532->enter($__internal_c24e23b7a23211726d818a82ec5294c71a27ec74f25dbacc1449f770793ca532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c24e23b7a23211726d818a82ec5294c71a27ec74f25dbacc1449f770793ca532->leave($__internal_c24e23b7a23211726d818a82ec5294c71a27ec74f25dbacc1449f770793ca532_prof);

        
        $__internal_67bbbba89010f5303dafd11a3a5433c437a941a60da5449e84e240f422084cdd->leave($__internal_67bbbba89010f5303dafd11a3a5433c437a941a60da5449e84e240f422084cdd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\newProj\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
