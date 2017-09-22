<?php

/* node_modules/lodash/intersection.js */
class __TwigTemplate_c5779157598710bce7dbc918d146ed038ae376f5b3e56f977999e9f917bd552e extends Twig_Template
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
        $__internal_bc43fe6c345edf3195404bb2267af435f229e795a012f26f3cba740229bd5bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc43fe6c345edf3195404bb2267af435f229e795a012f26f3cba740229bd5bfa->enter($__internal_bc43fe6c345edf3195404bb2267af435f229e795a012f26f3cba740229bd5bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/intersection.js"));

        // line 1
        echo "var arrayMap = require('./_arrayMap'),
    baseIntersection = require('./_baseIntersection'),
    baseRest = require('./_baseRest'),
    castArrayLikeObject = require('./_castArrayLikeObject');

/**
 * Creates an array of unique values that are included in all given arrays
 * using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons. The order and references of result values are
 * determined by the first array.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {...Array} [arrays] The arrays to inspect.
 * @returns {Array} Returns the new array of intersecting values.
 * @example
 *
 * _.intersection([2, 1], [2, 3]);
 * // => [2]
 */
var intersection = baseRest(function(arrays) {
  var mapped = arrayMap(arrays, castArrayLikeObject);
  return (mapped.length && mapped[0] === arrays[0])
    ? baseIntersection(mapped)
    : [];
});

module.exports = intersection;
";
        
        $__internal_bc43fe6c345edf3195404bb2267af435f229e795a012f26f3cba740229bd5bfa->leave($__internal_bc43fe6c345edf3195404bb2267af435f229e795a012f26f3cba740229bd5bfa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/intersection.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayMap = require('./_arrayMap'),
    baseIntersection = require('./_baseIntersection'),
    baseRest = require('./_baseRest'),
    castArrayLikeObject = require('./_castArrayLikeObject');

/**
 * Creates an array of unique values that are included in all given arrays
 * using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons. The order and references of result values are
 * determined by the first array.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {...Array} [arrays] The arrays to inspect.
 * @returns {Array} Returns the new array of intersecting values.
 * @example
 *
 * _.intersection([2, 1], [2, 3]);
 * // => [2]
 */
var intersection = baseRest(function(arrays) {
  var mapped = arrayMap(arrays, castArrayLikeObject);
  return (mapped.length && mapped[0] === arrays[0])
    ? baseIntersection(mapped)
    : [];
});

module.exports = intersection;
", "node_modules/lodash/intersection.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/intersection.js");
    }
}
