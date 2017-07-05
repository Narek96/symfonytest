<?php

/* product/create.html.twig */
class __TwigTemplate_81859ce43c29b50b4d8d899f2e277a174754a51369ddde4b8ae7c44776ce2af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/create.html.twig", 1);
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
        <div class=\"col-lg-12\">
            <form method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("storeProduct");
        echo "\">
                <div class=\"row\">
                    <div class=\"form-group row\">
                        <label for=\"formGroupExampleInput\" class=\"col-lg-2\">Name</label>
                        <div class=\"col-lg-6\">
                            <input type=\"text\" name=\"productName\" value=\"\" class=\"input form-control\"  placeholder=\"Product's Name\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group row\">
                        <label for=\"formGroupExampleInput2\" class=\"col-lg-2\">Price</label>
                        <div class=\"col-lg-6\">
                            <input type=\"text\" name=\"productPrice\" value=\"\" class=\"input form-control\"  placeholder=\"Product's Price\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <ul>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 26
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </ul>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <button class=\"btn btn-primary\" type=\"submit\">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 28,  61 => 26,  57 => 25,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product/create.html.twig", "D:\\xampp\\htdocs\\newProj\\app\\Resources\\views\\product\\create.html.twig");
    }
}
