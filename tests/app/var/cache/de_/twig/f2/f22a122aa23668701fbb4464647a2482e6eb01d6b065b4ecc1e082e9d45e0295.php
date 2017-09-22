<?php

/* node_modules/lodash/_overArg.js */
class __TwigTemplate_e56b95d6168763b4812684947d60cca4427eec6f181518429fb451c2b1b0db23 extends Twig_Template
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
        $__internal_15e91e439277426e0c261bf181102ab27390ca146af465ad074929d2a016de9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e91e439277426e0c261bf181102ab27390ca146af465ad074929d2a016de9f->enter($__internal_15e91e439277426e0c261bf181102ab27390ca146af465ad074929d2a016de9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_overArg.js"));

        // line 1
        echo "/**
 * Creates a unary function that invokes `func` with its argument transformed.
 *
 * @private
 * @param {Function} func The function to wrap.
 * @param {Function} transform The argument transform.
 * @returns {Function} Returns the new function.
 */
function overArg(func, transform) {
  return function(arg) {
    return func(transform(arg));
  };
}

module.exports = overArg;
";
        
        $__internal_15e91e439277426e0c261bf181102ab27390ca146af465ad074929d2a016de9f->leave($__internal_15e91e439277426e0c261bf181102ab27390ca146af465ad074929d2a016de9f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_overArg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Creates a unary function that invokes `func` with its argument transformed.
 *
 * @private
 * @param {Function} func The function to wrap.
 * @param {Function} transform The argument transform.
 * @returns {Function} Returns the new function.
 */
function overArg(func, transform) {
  return function(arg) {
    return func(transform(arg));
  };
}

module.exports = overArg;
", "node_modules/lodash/_overArg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_overArg.js");
    }
}
