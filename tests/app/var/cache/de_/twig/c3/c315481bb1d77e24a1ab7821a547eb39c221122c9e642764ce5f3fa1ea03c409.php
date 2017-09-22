<?php

/* node_modules/lodash/toPairs.js */
class __TwigTemplate_6f23dec4769b31a587b780aa8b25c90d78a6614262598dfb245cd4e89dfd6c82 extends Twig_Template
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
        $__internal_fa96573383a3dd42a36de6f5a2bb5498dcccc042d25c27c89c86d0dc598ce53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa96573383a3dd42a36de6f5a2bb5498dcccc042d25c27c89c86d0dc598ce53c->enter($__internal_fa96573383a3dd42a36de6f5a2bb5498dcccc042d25c27c89c86d0dc598ce53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toPairs.js"));

        // line 1
        echo "var createToPairs = require('./_createToPairs'),
    keys = require('./keys');

/**
 * Creates an array of own enumerable string keyed-value pairs for `object`
 * which can be consumed by `_.fromPairs`. If `object` is a map or set, its
 * entries are returned.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @alias entries
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
 * _.toPairs(new Foo);
 * // => [['a', 1], ['b', 2]] (iteration order is not guaranteed)
 */
var toPairs = createToPairs(keys);

module.exports = toPairs;
";
        
        $__internal_fa96573383a3dd42a36de6f5a2bb5498dcccc042d25c27c89c86d0dc598ce53c->leave($__internal_fa96573383a3dd42a36de6f5a2bb5498dcccc042d25c27c89c86d0dc598ce53c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toPairs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createToPairs = require('./_createToPairs'),
    keys = require('./keys');

/**
 * Creates an array of own enumerable string keyed-value pairs for `object`
 * which can be consumed by `_.fromPairs`. If `object` is a map or set, its
 * entries are returned.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @alias entries
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
 * _.toPairs(new Foo);
 * // => [['a', 1], ['b', 2]] (iteration order is not guaranteed)
 */
var toPairs = createToPairs(keys);

module.exports = toPairs;
", "node_modules/lodash/toPairs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toPairs.js");
    }
}
