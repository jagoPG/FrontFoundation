<?php

/* node_modules/es5-ext/function/index.js */
class __TwigTemplate_7c1e27ec8d2d2c62153b8ee052080c2ba594314fe1e8a048b1b0ed921395f917 extends Twig_Template
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
        $__internal_a6bda6c41d6547dc969379d7cfba488df05800d3d0816729be724582656c139f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bda6c41d6547dc969379d7cfba488df05800d3d0816729be724582656c139f->enter($__internal_a6bda6c41d6547dc969379d7cfba488df05800d3d0816729be724582656c139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/index.js"));

        // line 1
        echo "// Export all modules.

\"use strict\";

module.exports = {
\t\"#\": require(\"./#\"),
\t\"constant\": require(\"./constant\"),
\t\"identity\": require(\"./identity\"),
\t\"invoke\": require(\"./invoke\"),
\t\"isArguments\": require(\"./is-arguments\"),
\t\"isFunction\": require(\"./is-function\"),
\t\"noop\": require(\"./noop\"),
\t\"pluck\": require(\"./pluck\"),
\t\"validFunction\": require(\"./valid-function\")
};
";
        
        $__internal_a6bda6c41d6547dc969379d7cfba488df05800d3d0816729be724582656c139f->leave($__internal_a6bda6c41d6547dc969379d7cfba488df05800d3d0816729be724582656c139f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Export all modules.

\"use strict\";

module.exports = {
\t\"#\": require(\"./#\"),
\t\"constant\": require(\"./constant\"),
\t\"identity\": require(\"./identity\"),
\t\"invoke\": require(\"./invoke\"),
\t\"isArguments\": require(\"./is-arguments\"),
\t\"isFunction\": require(\"./is-function\"),
\t\"noop\": require(\"./noop\"),
\t\"pluck\": require(\"./pluck\"),
\t\"validFunction\": require(\"./valid-function\")
};
", "node_modules/es5-ext/function/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/index.js");
    }
}
