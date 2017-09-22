<?php

/* node_modules/lodash/flow.js */
class __TwigTemplate_8a2be7ee7f8aca1c0883638d4ec7de56a20aae990b00492fdd307d71257e683e extends Twig_Template
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
        $__internal_6978fe4a27ecb52eda0f3a9980190692da6548d42d0df32790be0f25117c01ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6978fe4a27ecb52eda0f3a9980190692da6548d42d0df32790be0f25117c01ae->enter($__internal_6978fe4a27ecb52eda0f3a9980190692da6548d42d0df32790be0f25117c01ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/flow.js"));

        // line 1
        echo "var createFlow = require('./_createFlow');

/**
 * Creates a function that returns the result of invoking the given functions
 * with the `this` binding of the created function, where each successive
 * invocation is supplied the return value of the previous.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Util
 * @param {...(Function|Function[])} [funcs] The functions to invoke.
 * @returns {Function} Returns the new composite function.
 * @see _.flowRight
 * @example
 *
 * function square(n) {
 *   return n * n;
 * }
 *
 * var addSquare = _.flow([_.add, square]);
 * addSquare(1, 2);
 * // => 9
 */
var flow = createFlow();

module.exports = flow;
";
        
        $__internal_6978fe4a27ecb52eda0f3a9980190692da6548d42d0df32790be0f25117c01ae->leave($__internal_6978fe4a27ecb52eda0f3a9980190692da6548d42d0df32790be0f25117c01ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/flow.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createFlow = require('./_createFlow');

/**
 * Creates a function that returns the result of invoking the given functions
 * with the `this` binding of the created function, where each successive
 * invocation is supplied the return value of the previous.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Util
 * @param {...(Function|Function[])} [funcs] The functions to invoke.
 * @returns {Function} Returns the new composite function.
 * @see _.flowRight
 * @example
 *
 * function square(n) {
 *   return n * n;
 * }
 *
 * var addSquare = _.flow([_.add, square]);
 * addSquare(1, 2);
 * // => 9
 */
var flow = createFlow();

module.exports = flow;
", "node_modules/lodash/flow.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/flow.js");
    }
}
