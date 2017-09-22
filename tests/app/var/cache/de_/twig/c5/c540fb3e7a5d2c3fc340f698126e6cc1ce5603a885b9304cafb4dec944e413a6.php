<?php

/* node_modules/lodash/propertyOf.js */
class __TwigTemplate_0f6a7f62d47a40c04b4a4e7f771466f08986e48159e83b07ce50dde2c78fced7 extends Twig_Template
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
        $__internal_80d1e132b1eabed739392bc4e7ea7a49aa577fa96f62afee1ce466bb55abaa40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d1e132b1eabed739392bc4e7ea7a49aa577fa96f62afee1ce466bb55abaa40->enter($__internal_80d1e132b1eabed739392bc4e7ea7a49aa577fa96f62afee1ce466bb55abaa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/propertyOf.js"));

        // line 1
        echo "var baseGet = require('./_baseGet');

/**
 * The opposite of `_.property`; this method creates a function that returns
 * the value at a given path of `object`.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Util
 * @param {Object} object The object to query.
 * @returns {Function} Returns the new accessor function.
 * @example
 *
 * var array = [0, 1, 2],
 *     object = { 'a': array, 'b': array, 'c': array };
 *
 * _.map(['a[2]', 'c[0]'], _.propertyOf(object));
 * // => [2, 0]
 *
 * _.map([['a', '2'], ['c', '0']], _.propertyOf(object));
 * // => [2, 0]
 */
function propertyOf(object) {
  return function(path) {
    return object == null ? undefined : baseGet(object, path);
  };
}

module.exports = propertyOf;
";
        
        $__internal_80d1e132b1eabed739392bc4e7ea7a49aa577fa96f62afee1ce466bb55abaa40->leave($__internal_80d1e132b1eabed739392bc4e7ea7a49aa577fa96f62afee1ce466bb55abaa40_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/propertyOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGet = require('./_baseGet');

/**
 * The opposite of `_.property`; this method creates a function that returns
 * the value at a given path of `object`.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Util
 * @param {Object} object The object to query.
 * @returns {Function} Returns the new accessor function.
 * @example
 *
 * var array = [0, 1, 2],
 *     object = { 'a': array, 'b': array, 'c': array };
 *
 * _.map(['a[2]', 'c[0]'], _.propertyOf(object));
 * // => [2, 0]
 *
 * _.map([['a', '2'], ['c', '0']], _.propertyOf(object));
 * // => [2, 0]
 */
function propertyOf(object) {
  return function(path) {
    return object == null ? undefined : baseGet(object, path);
  };
}

module.exports = propertyOf;
", "node_modules/lodash/propertyOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/propertyOf.js");
    }
}
