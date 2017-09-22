<?php

/* node_modules/lodash/_castFunction.js */
class __TwigTemplate_58c1e1c45ba4eecf02238f531dda252b2cbdbc43fe331f46f7652af5ff49c7d1 extends Twig_Template
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
        $__internal_719d482f695c1d6af1b0acf517c62bf2514d70d567e3de8daf49e82b61456c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719d482f695c1d6af1b0acf517c62bf2514d70d567e3de8daf49e82b61456c4b->enter($__internal_719d482f695c1d6af1b0acf517c62bf2514d70d567e3de8daf49e82b61456c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_castFunction.js"));

        // line 1
        echo "var identity = require('./identity');

/**
 * Casts `value` to `identity` if it's not a function.
 *
 * @private
 * @param {*} value The value to inspect.
 * @returns {Function} Returns cast function.
 */
function castFunction(value) {
  return typeof value == 'function' ? value : identity;
}

module.exports = castFunction;
";
        
        $__internal_719d482f695c1d6af1b0acf517c62bf2514d70d567e3de8daf49e82b61456c4b->leave($__internal_719d482f695c1d6af1b0acf517c62bf2514d70d567e3de8daf49e82b61456c4b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_castFunction.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var identity = require('./identity');

/**
 * Casts `value` to `identity` if it's not a function.
 *
 * @private
 * @param {*} value The value to inspect.
 * @returns {Function} Returns cast function.
 */
function castFunction(value) {
  return typeof value == 'function' ? value : identity;
}

module.exports = castFunction;
", "node_modules/lodash/_castFunction.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_castFunction.js");
    }
}
