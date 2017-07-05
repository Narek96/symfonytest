<?php

/* product/index.html.twig */
class __TwigTemplate_15df68869f9d76874164578b2c0bcc279df7295a9293c96aca38d4f09976fd7d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 product-list\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
        return array (  69 => 19,  66 => 18,  57 => 15,  52 => 13,  44 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product/index.html.twig", "D:\\xampp\\htdocs\\newProj\\app\\Resources\\views\\product\\index.html.twig");
    }
}
