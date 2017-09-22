<?php

/* node_modules/lodash/omitBy.js */
class __TwigTemplate_a18d27d2121c08e045cd2f8e3b8e5949f3bc44a9b2304db028941a5c27f39c05 extends Twig_Template
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
        $__internal_d5e7b31f91f5c1785bc44b155d6f8a3a77f0303041b124bac921bdb067aebc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e7b31f91f5c1785bc44b155d6f8a3a77f0303041b124bac921bdb067aebc2e->enter($__internal_d5e7b31f91f5c1785bc44b155d6f8a3a77f0303041b124bac921bdb067aebc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/omitBy.js"));

        // line 1
        echo "var baseIteratee = require('./_baseIteratee'),
    negate = require('./negate'),
    pickBy = require('./pickBy');

/**
 * The opposite of `_.pickBy`; this method creates an object composed of
 * the own and inherited enumerable string keyed properties of `object` that
 * `predicate` doesn't return truthy for. The predicate is invoked with two
 * arguments: (value, key).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The source object.
 * @param {Function} [predicate=_.identity] The function invoked per property.
 * @returns {Object} Returns the new object.
 * @example
 *
 * var object = { 'a': 1, 'b': '2', 'c': 3 };
 *
 * _.omitBy(object, _.isNumber);
 * // => { 'b': '2' }
 */
function omitBy(object, predicate) {
  return pickBy(object, negate(baseIteratee(predicate)));
}

module.exports = omitBy;
";
        
        $__internal_d5e7b31f91f5c1785bc44b155d6f8a3a77f0303041b124bac921bdb067aebc2e->leave($__internal_d5e7b31f91f5c1785bc44b155d6f8a3a77f0303041b124bac921bdb067aebc2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/omitBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIteratee = require('./_baseIteratee'),
    negate = require('./negate'),
    pickBy = require('./pickBy');

/**
 * The opposite of `_.pickBy`; this method creates an object composed of
 * the own and inherited enumerable string keyed properties of `object` that
 * `predicate` doesn't return truthy for. The predicate is invoked with two
 * arguments: (value, key).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The source object.
 * @param {Function} [predicate=_.identity] The function invoked per property.
 * @returns {Object} Returns the new object.
 * @example
 *
 * var object = { 'a': 1, 'b': '2', 'c': 3 };
 *
 * _.omitBy(object, _.isNumber);
 * // => { 'b': '2' }
 */
function omitBy(object, predicate) {
  return pickBy(object, negate(baseIteratee(predicate)));
}

module.exports = omitBy;
", "node_modules/lodash/omitBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/omitBy.js");
    }
}
