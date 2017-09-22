<?php

/* node_modules/lodash/findLast.js */
class __TwigTemplate_33d7aab63e681bf5889ebc1a5a8fec320deabd68f81287091d4b300a316e11e7 extends Twig_Template
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
        $__internal_fa9ded060002902795a7c15a08cda28311cac2b158fa01c8a0e43cab4274d4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9ded060002902795a7c15a08cda28311cac2b158fa01c8a0e43cab4274d4d5->enter($__internal_fa9ded060002902795a7c15a08cda28311cac2b158fa01c8a0e43cab4274d4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/findLast.js"));

        // line 1
        echo "var createFind = require('./_createFind'),
    findLastIndex = require('./findLastIndex');

/**
 * This method is like `_.find` except that it iterates over elements of
 * `collection` from right to left.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Collection
 * @param {Array|Object} collection The collection to inspect.
 * @param {Function} [predicate=_.identity] The function invoked per iteration.
 * @param {number} [fromIndex=collection.length-1] The index to search from.
 * @returns {*} Returns the matched element, else `undefined`.
 * @example
 *
 * _.findLast([1, 2, 3, 4], function(n) {
 *   return n % 2 == 1;
 * });
 * // => 3
 */
var findLast = createFind(findLastIndex);

module.exports = findLast;
";
        
        $__internal_fa9ded060002902795a7c15a08cda28311cac2b158fa01c8a0e43cab4274d4d5->leave($__internal_fa9ded060002902795a7c15a08cda28311cac2b158fa01c8a0e43cab4274d4d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/findLast.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createFind = require('./_createFind'),
    findLastIndex = require('./findLastIndex');

/**
 * This method is like `_.find` except that it iterates over elements of
 * `collection` from right to left.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Collection
 * @param {Array|Object} collection The collection to inspect.
 * @param {Function} [predicate=_.identity] The function invoked per iteration.
 * @param {number} [fromIndex=collection.length-1] The index to search from.
 * @returns {*} Returns the matched element, else `undefined`.
 * @example
 *
 * _.findLast([1, 2, 3, 4], function(n) {
 *   return n % 2 == 1;
 * });
 * // => 3
 */
var findLast = createFind(findLastIndex);

module.exports = findLast;
", "node_modules/lodash/findLast.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/findLast.js");
    }
}
