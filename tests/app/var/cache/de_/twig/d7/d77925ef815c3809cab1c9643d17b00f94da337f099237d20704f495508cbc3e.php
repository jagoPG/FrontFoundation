<?php

/* node_modules/lodash/methodOf.js */
class __TwigTemplate_3aa2af2832220b0e7727dd88d4a15f10465a332c12012769b1b71583f00e0634 extends Twig_Template
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
        $__internal_6625024065f739b6a79cc2b255a8cc1fc63a4d67e7a2dfcd93d3cad4c11b8b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6625024065f739b6a79cc2b255a8cc1fc63a4d67e7a2dfcd93d3cad4c11b8b6e->enter($__internal_6625024065f739b6a79cc2b255a8cc1fc63a4d67e7a2dfcd93d3cad4c11b8b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/methodOf.js"));

        // line 1
        echo "var baseInvoke = require('./_baseInvoke'),
    baseRest = require('./_baseRest');

/**
 * The opposite of `_.method`; this method creates a function that invokes
 * the method at a given path of `object`. Any additional arguments are
 * provided to the invoked method.
 *
 * @static
 * @memberOf _
 * @since 3.7.0
 * @category Util
 * @param {Object} object The object to query.
 * @param {...*} [args] The arguments to invoke the method with.
 * @returns {Function} Returns the new invoker function.
 * @example
 *
 * var array = _.times(3, _.constant),
 *     object = { 'a': array, 'b': array, 'c': array };
 *
 * _.map(['a[2]', 'c[0]'], _.methodOf(object));
 * // => [2, 0]
 *
 * _.map([['a', '2'], ['c', '0']], _.methodOf(object));
 * // => [2, 0]
 */
var methodOf = baseRest(function(object, args) {
  return function(path) {
    return baseInvoke(object, path, args);
  };
});

module.exports = methodOf;
";
        
        $__internal_6625024065f739b6a79cc2b255a8cc1fc63a4d67e7a2dfcd93d3cad4c11b8b6e->leave($__internal_6625024065f739b6a79cc2b255a8cc1fc63a4d67e7a2dfcd93d3cad4c11b8b6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/methodOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseInvoke = require('./_baseInvoke'),
    baseRest = require('./_baseRest');

/**
 * The opposite of `_.method`; this method creates a function that invokes
 * the method at a given path of `object`. Any additional arguments are
 * provided to the invoked method.
 *
 * @static
 * @memberOf _
 * @since 3.7.0
 * @category Util
 * @param {Object} object The object to query.
 * @param {...*} [args] The arguments to invoke the method with.
 * @returns {Function} Returns the new invoker function.
 * @example
 *
 * var array = _.times(3, _.constant),
 *     object = { 'a': array, 'b': array, 'c': array };
 *
 * _.map(['a[2]', 'c[0]'], _.methodOf(object));
 * // => [2, 0]
 *
 * _.map([['a', '2'], ['c', '0']], _.methodOf(object));
 * // => [2, 0]
 */
var methodOf = baseRest(function(object, args) {
  return function(path) {
    return baseInvoke(object, path, args);
  };
});

module.exports = methodOf;
", "node_modules/lodash/methodOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/methodOf.js");
    }
}
