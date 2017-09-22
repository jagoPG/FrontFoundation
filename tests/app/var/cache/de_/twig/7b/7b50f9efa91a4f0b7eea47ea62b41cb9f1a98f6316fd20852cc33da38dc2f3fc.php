<?php

/* node_modules/es-abstract/helpers/isNaN.js */
class __TwigTemplate_2b32aa10046827da6cbd0e9fb0e87661f334c38c903c937682747444bd23c969 extends Twig_Template
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
        $__internal_e073e0f0443056c8d8d396fc5f271e2fc985c325b84d941c9ff6a1a76864ba80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e073e0f0443056c8d8d396fc5f271e2fc985c325b84d941c9ff6a1a76864ba80->enter($__internal_e073e0f0443056c8d8d396fc5f271e2fc985c325b84d941c9ff6a1a76864ba80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/helpers/isNaN.js"));

        // line 1
        echo "module.exports = Number.isNaN || function isNaN(a) {
\treturn a !== a;
};
";
        
        $__internal_e073e0f0443056c8d8d396fc5f271e2fc985c325b84d941c9ff6a1a76864ba80->leave($__internal_e073e0f0443056c8d8d396fc5f271e2fc985c325b84d941c9ff6a1a76864ba80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/helpers/isNaN.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = Number.isNaN || function isNaN(a) {
\treturn a !== a;
};
", "node_modules/es-abstract/helpers/isNaN.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/helpers/isNaN.js");
    }
}
