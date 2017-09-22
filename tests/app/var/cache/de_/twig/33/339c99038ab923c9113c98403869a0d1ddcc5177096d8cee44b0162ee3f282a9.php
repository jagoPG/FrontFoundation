<?php

/* node_modules/resolve/test/dotdot/index.js */
class __TwigTemplate_a9df6c756339cda1759e7ea9f7b2643bfc56383a543d233e8933b57299b94989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_200d86e92c91b389286fe2d9f0d5b4f4df0bb7cf89df06303b500147b4e9869b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200d86e92c91b389286fe2d9f0d5b4f4df0bb7cf89df06303b500147b4e9869b->enter($__internal_200d86e92c91b389286fe2d9f0d5b4f4df0bb7cf89df06303b500147b4e9869b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/dotdot/index.js"));

        // line 1
        echo "module.exports = 'whatever';
";
        
        $__internal_200d86e92c91b389286fe2d9f0d5b4f4df0bb7cf89df06303b500147b4e9869b->leave($__internal_200d86e92c91b389286fe2d9f0d5b4f4df0bb7cf89df06303b500147b4e9869b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/dotdot/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 'whatever';
", "node_modules/resolve/test/dotdot/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/dotdot/index.js");
    }
}
