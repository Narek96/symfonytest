<?php

/* base.html.twig */
class __TwigTemplate_889223a0888fa3b967752936b39a4c34ab655b42706f9f6e1103f574aff000cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53cc39dfece04bad6086d954b08f9b36fdb379fed25077fe308ab6cea4cfa5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cc39dfece04bad6086d954b08f9b36fdb379fed25077fe308ab6cea4cfa5ba->enter($__internal_53cc39dfece04bad6086d954b08f9b36fdb379fed25077fe308ab6cea4cfa5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a6c64e61bf132f1391c41b69a17150baba07031b3d81d7003c5a391277583fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c64e61bf132f1391c41b69a17150baba07031b3d81d7003c5a391277583fef->enter($__internal_a6c64e61bf132f1391c41b69a17150baba07031b3d81d7003c5a391277583fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_53cc39dfece04bad6086d954b08f9b36fdb379fed25077fe308ab6cea4cfa5ba->leave($__internal_53cc39dfece04bad6086d954b08f9b36fdb379fed25077fe308ab6cea4cfa5ba_prof);

        
        $__internal_a6c64e61bf132f1391c41b69a17150baba07031b3d81d7003c5a391277583fef->leave($__internal_a6c64e61bf132f1391c41b69a17150baba07031b3d81d7003c5a391277583fef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a98e820053a0e147ec8cb0c8335a671f80231f7ee117cb63373d2041651fbc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98e820053a0e147ec8cb0c8335a671f80231f7ee117cb63373d2041651fbc4f->enter($__internal_a98e820053a0e147ec8cb0c8335a671f80231f7ee117cb63373d2041651fbc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_719b6d905714bacc29d1806d63ecd90673f5ba635e79047b9bc76fba7fe38f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719b6d905714bacc29d1806d63ecd90673f5ba635e79047b9bc76fba7fe38f69->enter($__internal_719b6d905714bacc29d1806d63ecd90673f5ba635e79047b9bc76fba7fe38f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_719b6d905714bacc29d1806d63ecd90673f5ba635e79047b9bc76fba7fe38f69->leave($__internal_719b6d905714bacc29d1806d63ecd90673f5ba635e79047b9bc76fba7fe38f69_prof);

        
        $__internal_a98e820053a0e147ec8cb0c8335a671f80231f7ee117cb63373d2041651fbc4f->leave($__internal_a98e820053a0e147ec8cb0c8335a671f80231f7ee117cb63373d2041651fbc4f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55c8c471d5d57a04b706812560297f9a940963a557196eb2c763b7f83b1a031e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c8c471d5d57a04b706812560297f9a940963a557196eb2c763b7f83b1a031e->enter($__internal_55c8c471d5d57a04b706812560297f9a940963a557196eb2c763b7f83b1a031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2928cdba222af6f933f27ace1e85c9f9726c75a886a23ac6a59dd73718e64e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2928cdba222af6f933f27ace1e85c9f9726c75a886a23ac6a59dd73718e64e7e->enter($__internal_2928cdba222af6f933f27ace1e85c9f9726c75a886a23ac6a59dd73718e64e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bootstrap/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_2928cdba222af6f933f27ace1e85c9f9726c75a886a23ac6a59dd73718e64e7e->leave($__internal_2928cdba222af6f933f27ace1e85c9f9726c75a886a23ac6a59dd73718e64e7e_prof);

        
        $__internal_55c8c471d5d57a04b706812560297f9a940963a557196eb2c763b7f83b1a031e->leave($__internal_55c8c471d5d57a04b706812560297f9a940963a557196eb2c763b7f83b1a031e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e1492029d9422bb689c290cd0db6f933e861c14fe9f59049de3eedb8c3fbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e1492029d9422bb689c290cd0db6f933e861c14fe9f59049de3eedb8c3fbb1->enter($__internal_d2e1492029d9422bb689c290cd0db6f933e861c14fe9f59049de3eedb8c3fbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cab6ca7927a0cbc9462de2538e58eaa0ad6cbc97a71111e4efb8979d86c5e18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab6ca7927a0cbc9462de2538e58eaa0ad6cbc97a71111e4efb8979d86c5e18e->enter($__internal_cab6ca7927a0cbc9462de2538e58eaa0ad6cbc97a71111e4efb8979d86c5e18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        
        $__internal_cab6ca7927a0cbc9462de2538e58eaa0ad6cbc97a71111e4efb8979d86c5e18e->leave($__internal_cab6ca7927a0cbc9462de2538e58eaa0ad6cbc97a71111e4efb8979d86c5e18e_prof);

        
        $__internal_d2e1492029d9422bb689c290cd0db6f933e861c14fe9f59049de3eedb8c3fbb1->leave($__internal_d2e1492029d9422bb689c290cd0db6f933e861c14fe9f59049de3eedb8c3fbb1_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b478e5f4b2621e65ace419048b18e2a92b7d71e973e137df9e571939836b134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b478e5f4b2621e65ace419048b18e2a92b7d71e973e137df9e571939836b134->enter($__internal_8b478e5f4b2621e65ace419048b18e2a92b7d71e973e137df9e571939836b134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e78dd60f0d59d479a150457c8b1de7da96a9dd0a985612c9d49f2ad899edf74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78dd60f0d59d479a150457c8b1de7da96a9dd0a985612c9d49f2ad899edf74f->enter($__internal_e78dd60f0d59d479a150457c8b1de7da96a9dd0a985612c9d49f2ad899edf74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e78dd60f0d59d479a150457c8b1de7da96a9dd0a985612c9d49f2ad899edf74f->leave($__internal_e78dd60f0d59d479a150457c8b1de7da96a9dd0a985612c9d49f2ad899edf74f_prof);

        
        $__internal_8b478e5f4b2621e65ace419048b18e2a92b7d71e973e137df9e571939836b134->leave($__internal_8b478e5f4b2621e65ace419048b18e2a92b7d71e973e137df9e571939836b134_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 15,  119 => 14,  110 => 13,  98 => 9,  94 => 8,  89 => 7,  80 => 6,  62 => 5,  50 => 16,  47 => 15,  45 => 13,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bootstrap/css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bootstrap/css/style.css') }}\">
        {% endblock %}
    </head>
    <body>
        {% block body %}
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\xampp\\htdocs\\newProj\\app\\Resources\\views\\base.html.twig");
    }
}
