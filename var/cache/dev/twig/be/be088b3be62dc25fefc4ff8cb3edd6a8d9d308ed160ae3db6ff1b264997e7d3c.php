<?php

/* product/update.html.twig */
class __TwigTemplate_7945f67c4ef88c1bdae06a0622318967473b105cd73f6103ba0879ba0aae2a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/update.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb1c3daec4e1c145a8cbe2a6b632b0e11a37c4ae75552bbbf74ed5955f4bb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb1c3daec4e1c145a8cbe2a6b632b0e11a37c4ae75552bbbf74ed5955f4bb31->enter($__internal_3bb1c3daec4e1c145a8cbe2a6b632b0e11a37c4ae75552bbbf74ed5955f4bb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/update.html.twig"));

        $__internal_a147a94a691759b972d6779240a0605e18ffb86ee0dbc61cbaa6699de173dbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a147a94a691759b972d6779240a0605e18ffb86ee0dbc61cbaa6699de173dbbc->enter($__internal_a147a94a691759b972d6779240a0605e18ffb86ee0dbc61cbaa6699de173dbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb1c3daec4e1c145a8cbe2a6b632b0e11a37c4ae75552bbbf74ed5955f4bb31->leave($__internal_3bb1c3daec4e1c145a8cbe2a6b632b0e11a37c4ae75552bbbf74ed5955f4bb31_prof);

        
        $__internal_a147a94a691759b972d6779240a0605e18ffb86ee0dbc61cbaa6699de173dbbc->leave($__internal_a147a94a691759b972d6779240a0605e18ffb86ee0dbc61cbaa6699de173dbbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20dae704d945ab954c6e49573ab23c1db3d1148ec90807212bbae61bd6294419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20dae704d945ab954c6e49573ab23c1db3d1148ec90807212bbae61bd6294419->enter($__internal_20dae704d945ab954c6e49573ab23c1db3d1148ec90807212bbae61bd6294419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_439cbaac330086e4bb0253e12b0ec694ab7040457a867820ca18ae2fda66c4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439cbaac330086e4bb0253e12b0ec694ab7040457a867820ca18ae2fda66c4ab->enter($__internal_439cbaac330086e4bb0253e12b0ec694ab7040457a867820ca18ae2fda66c4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"col-lg-12\">
        <form method=\"POST\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateProduct", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">
            <div class=\"row\">
               <div class=\"form-group row\">
                   <label for=\"formGroupExampleInput\" class=\"col-lg-2\">Name</label>
                   <div class=\"col-lg-6\">
                       <input type=\"text\" name=\"productName\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "\" class=\"input form-control\"  placeholder=\"Product's Name\">
                   </div>
               </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group row\">
                    <label for=\"formGroupExampleInput2\" class=\"col-lg-2\">Price</label>
                    <div class=\"col-lg-6\">
                        <input type=\"text\" name=\"productPrice\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "\" class=\"input form-control\"  placeholder=\"Product's Price\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <button class=\"btn btn-primary\" type=\"submit\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_439cbaac330086e4bb0253e12b0ec694ab7040457a867820ca18ae2fda66c4ab->leave($__internal_439cbaac330086e4bb0253e12b0ec694ab7040457a867820ca18ae2fda66c4ab_prof);

        
        $__internal_20dae704d945ab954c6e49573ab23c1db3d1148ec90807212bbae61bd6294419->leave($__internal_20dae704d945ab954c6e49573ab23c1db3d1148ec90807212bbae61bd6294419_prof);

    }

    public function getTemplateName()
    {
        return "product/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body  %}
<div class=\"container\">
    <div class=\"col-lg-12\">
        <form method=\"POST\" action=\"{{ path('updateProduct', {'id': product.id}) }}\">
            <div class=\"row\">
               <div class=\"form-group row\">
                   <label for=\"formGroupExampleInput\" class=\"col-lg-2\">Name</label>
                   <div class=\"col-lg-6\">
                       <input type=\"text\" name=\"productName\" value=\"{{ product.name }}\" class=\"input form-control\"  placeholder=\"Product's Name\">
                   </div>
               </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group row\">
                    <label for=\"formGroupExampleInput2\" class=\"col-lg-2\">Price</label>
                    <div class=\"col-lg-6\">
                        <input type=\"text\" name=\"productPrice\" value=\"{{ product.price }}\" class=\"input form-control\"  placeholder=\"Product's Price\">
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <button class=\"btn btn-primary\" type=\"submit\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
{% endblock %}", "product/update.html.twig", "D:\\xampp\\htdocs\\newProj\\app\\Resources\\views\\product\\update.html.twig");
    }
}
