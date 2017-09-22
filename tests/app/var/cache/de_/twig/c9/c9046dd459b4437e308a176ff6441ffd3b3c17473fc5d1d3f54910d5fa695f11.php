<?php

/* node_modules/lodash/ary.js */
class __TwigTemplate_e32f704e33ecffa73c0b830279865aaa6379b2108dbf91438816857e4f881648 extends Twig_Template
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
        $__internal_a26019e7f9b31707bcfb2383d760cb2b92237e448f378e0ba6e416dcba47cf6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26019e7f9b31707bcfb2383d760cb2b92237e448f378e0ba6e416dcba47cf6d->enter($__internal_a26019e7f9b31707bcfb2383d760cb2b92237e448f378e0ba6e416dcba47cf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/ary.js"));

        // line 1
        echo "var createWrap = require('./_createWrap');

/** Used to compose bitmasks for function metadata. */
var WRAP_ARY_FLAG = 128;

/**
 * Creates a function that invokes `func`, with up to `n` arguments,
 * ignoring any additional arguments.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Function
 * @param {Function} func The function to cap arguments for.
 * @param {number} [n=func.length] The arity cap.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {Function} Returns the new capped function.
 * @example
 *
 * _.map(['6', '8', '10'], _.ary(parseInt, 1));
 * // => [6, 8, 10]
 */
function ary(func, n, guard) {
  n = guard ? undefined : n;
  n = (func && n == null) ? func.length : n;
  return createWrap(func, WRAP_ARY_FLAG, undefined, undefined, undefined, undefined, n);
}

module.exports = ary;
";
        
        $__internal_a26019e7f9b31707bcfb2383d760cb2b92237e448f378e0ba6e416dcba47cf6d->leave($__internal_a26019e7f9b31707bcfb2383d760cb2b92237e448f378e0ba6e416dcba47cf6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/ary.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createWrap = require('./_createWrap');

/** Used to compose bitmasks for function metadata. */
var WRAP_ARY_FLAG = 128;

/**
 * Creates a function that invokes `func`, with up to `n` arguments,
 * ignoring any additional arguments.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Function
 * @param {Function} func The function to cap arguments for.
 * @param {number} [n=func.length] The arity cap.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {Function} Returns the new capped function.
 * @example
 *
 * _.map(['6', '8', '10'], _.ary(parseInt, 1));
 * // => [6, 8, 10]
 */
function ary(func, n, guard) {
  n = guard ? undefined : n;
  n = (func && n == null) ? func.length : n;
  return createWrap(func, WRAP_ARY_FLAG, undefined, undefined, undefined, undefined, n);
}

module.exports = ary;
", "node_modules/lodash/ary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/ary.js");
    }
}
