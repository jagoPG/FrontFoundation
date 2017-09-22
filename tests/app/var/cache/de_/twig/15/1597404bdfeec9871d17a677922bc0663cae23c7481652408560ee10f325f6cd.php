<?php

/* node_modules/lodash/uniq.js */
class __TwigTemplate_812cf6418a7d61e4b5ba36cb3ef62a398a395b02e05a1c23ca46a9e933e683f0 extends Twig_Template
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
        $__internal_2046150343236be6e66a11163e6f5504f85b3133f92c40e872cb22c443ee3b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2046150343236be6e66a11163e6f5504f85b3133f92c40e872cb22c443ee3b77->enter($__internal_2046150343236be6e66a11163e6f5504f85b3133f92c40e872cb22c443ee3b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/uniq.js"));

        // line 1
        echo "var baseUniq = require('./_baseUniq');

/**
 * Creates a duplicate-free version of an array, using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons, in which only the first occurrence of each element
 * is kept. The order of result values is determined by the order they occur
 * in the array.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @returns {Array} Returns the new duplicate free array.
 * @example
 *
 * _.uniq([2, 1, 2]);
 * // => [2, 1]
 */
function uniq(array) {
  return (array && array.length) ? baseUniq(array) : [];
}

module.exports = uniq;
";
        
        $__internal_2046150343236be6e66a11163e6f5504f85b3133f92c40e872cb22c443ee3b77->leave($__internal_2046150343236be6e66a11163e6f5504f85b3133f92c40e872cb22c443ee3b77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/uniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseUniq = require('./_baseUniq');

/**
 * Creates a duplicate-free version of an array, using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons, in which only the first occurrence of each element
 * is kept. The order of result values is determined by the order they occur
 * in the array.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @returns {Array} Returns the new duplicate free array.
 * @example
 *
 * _.uniq([2, 1, 2]);
 * // => [2, 1]
 */
function uniq(array) {
  return (array && array.length) ? baseUniq(array) : [];
}

module.exports = uniq;
", "node_modules/lodash/uniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/uniq.js");
    }
}
