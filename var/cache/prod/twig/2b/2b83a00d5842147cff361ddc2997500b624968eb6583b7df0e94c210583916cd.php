<?php

/* product/update.html.twig */
class __TwigTemplate_60e5774cf6e6139672a10ac394e86484834c173c337f3053af049959a92575ca extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"col-lg-12\">
        <form method=\"POST\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateProduct", array("id" => $this->getAttribute(($context["product"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            <div class=\"row\">
               <div class=\"form-group row\">
                   <label for=\"formGroupExampleInput\" class=\"col-lg-2\">Name</label>
                   <div class=\"col-lg-6\">
                       <input type=\"text\" name=\"productName\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "price", array()), "html", null, true);
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
        return array (  54 => 19,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product/update.html.twig", "D:\\xampp\\htdocs\\newProj\\app\\Resources\\views\\product\\update.html.twig");
    }
}
