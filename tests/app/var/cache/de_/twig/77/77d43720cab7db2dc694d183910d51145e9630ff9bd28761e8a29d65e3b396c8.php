<?php

/* node_modules/lodash/toPairsIn.js */
class __TwigTemplate_ed65b9b546beca6bb0df4627efdd381d978cb905c04e015b69ef2e12b301b853 extends Twig_Template
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
        $__internal_a6438fa677c5bb2e01a6331bf12a4310664a8463160066859f0267e8b3567707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6438fa677c5bb2e01a6331bf12a4310664a8463160066859f0267e8b3567707->enter($__internal_a6438fa677c5bb2e01a6331bf12a4310664a8463160066859f0267e8b3567707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toPairsIn.js"));

        // line 1
        echo "var createToPairs = require('./_createToPairs'),
    keysIn = require('./keysIn');

/**
 * Creates an array of own and inherited enumerable string keyed-value pairs
 * for `object` which can be consumed by `_.fromPairs`. If `object` is a map
 * or set, its entries are returned.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @alias entriesIn
 * @category Object
 * @param {Object} object The object to query.
 * @returns {Array} Returns the key-value pairs.
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.toPairsIn(new Foo);
 * // => [['a', 1], ['b', 2], ['c', 3]] (iteration order is not guaranteed)
 */
var toPairsIn = createToPairs(keysIn);

module.exports = toPairsIn;
";
        
        $__internal_a6438fa677c5bb2e01a6331bf12a4310664a8463160066859f0267e8b3567707->leave($__internal_a6438fa677c5bb2e01a6331bf12a4310664a8463160066859f0267e8b3567707_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toPairsIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createToPairs = require('./_createToPairs'),
    keysIn = require('./keysIn');

/**
 * Creates an array of own and inherited enumerable string keyed-value pairs
 * for `object` which can be consumed by `_.fromPairs`. If `object` is a map
 * or set, its entries are returned.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @alias entriesIn
 * @category Object
 * @param {Object} object The object to query.
 * @returns {Array} Returns the key-value pairs.
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.toPairsIn(new Foo);
 * // => [['a', 1], ['b', 2], ['c', 3]] (iteration order is not guaranteed)
 */
var toPairsIn = createToPairs(keysIn);

module.exports = toPairsIn;
", "node_modules/lodash/toPairsIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toPairsIn.js");
    }
}
