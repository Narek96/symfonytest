<?php

/* product/index.html.twig */
class __TwigTemplate_662959bb9eec49fbd1fb55d0a929ebc9296a586545ce755493bee6c81e48e79e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_d34005c820067a8b47ca315d3ccc1e68f3098ee6b910f679c7758d60a6a63827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34005c820067a8b47ca315d3ccc1e68f3098ee6b910f679c7758d60a6a63827->enter($__internal_d34005c820067a8b47ca315d3ccc1e68f3098ee6b910f679c7758d60a6a63827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_5ea49a013b763efc57610df258297063fcdb27c36856b2ad4446ffd4561a61b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea49a013b763efc57610df258297063fcdb27c36856b2ad4446ffd4561a61b5->enter($__internal_5ea49a013b763efc57610df258297063fcdb27c36856b2ad4446ffd4561a61b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d34005c820067a8b47ca315d3ccc1e68f3098ee6b910f679c7758d60a6a63827->leave($__internal_d34005c820067a8b47ca315d3ccc1e68f3098ee6b910f679c7758d60a6a63827_prof);

        
        $__internal_5ea49a013b763efc57610df258297063fcdb27c36856b2ad4446ffd4561a61b5->leave($__internal_5ea49a013b763efc57610df258297063fcdb27c36856b2ad4446ffd4561a61b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ca0a7307cd18b7619d634c97807da9344cd75b27b54337fb2dc493e25c2f982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca0a7307cd18b7619d634c97807da9344cd75b27b54337fb2dc493e25c2f982->enter($__internal_3ca0a7307cd18b7619d634c97807da9344cd75b27b54337fb2dc493e25c2f982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3182bc6e207ddb1675799739fbc79f670fb472858ae6192b79a44ed47ea19e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3182bc6e207ddb1675799739fbc79f670fb472858ae6192b79a44ed47ea19e0->enter($__internal_b3182bc6e207ddb1675799739fbc79f670fb472858ae6192b79a44ed47ea19e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 product-list\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"product-info\"> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo " </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editProduct", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"edit-make-button btn btn-info\" >Edit<i class=\"fa fa-pencil\"></i></a>
                        </div>
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteProduct", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"delete-make-button btn btn-danger\">Delete</a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                <div class=\"col-lg-12\">
                    <a type=\"button\" class=\"add btn btn-success\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createProduct");
        echo "\">Add Product</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b3182bc6e207ddb1675799739fbc79f670fb472858ae6192b79a44ed47ea19e0->leave($__internal_b3182bc6e207ddb1675799739fbc79f670fb472858ae6192b79a44ed47ea19e0_prof);

        
        $__internal_3ca0a7307cd18b7619d634c97807da9344cd75b27b54337fb2dc493e25c2f982->leave($__internal_3ca0a7307cd18b7619d634c97807da9344cd75b27b54337fb2dc493e25c2f982_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  84 => 18,  75 => 15,  70 => 13,  62 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 product-list\">
                {% for product in products %}
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"product-info\"> {{ product.name }} - {{ product.price }} </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <a href=\"{{ path('editProduct', {'id': product.id}) }}\" type=\"button\" class=\"edit-make-button btn btn-info\" >Edit<i class=\"fa fa-pencil\"></i></a>
                        </div>
                        <a href=\"{{ path('deleteProduct', {'id': product.id}) }}\" type=\"button\" class=\"delete-make-button btn btn-danger\">Delete</a>
                    </div>
                {% endfor %}
                <div class=\"col-lg-12\">
                    <a type=\"button\" class=\"add btn btn-success\" href=\"{{ path('createProduct') }}\">Add Product</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "product/index.html.twig", "D:\\xampp\\htdocs\\newProj\\app\\Resources\\views\\product\\index.html.twig");
    }
}
