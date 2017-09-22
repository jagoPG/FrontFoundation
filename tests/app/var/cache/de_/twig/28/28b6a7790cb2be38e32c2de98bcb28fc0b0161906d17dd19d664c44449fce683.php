<?php

/* node_modules/lodash/over.js */
class __TwigTemplate_7b0e0e74d0337d3c427565aaac433767c5b4d9220a6d69b98b59573f677d67f3 extends Twig_Template
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
        $__internal_d2dcb3d6ed877766e72b9f3e7b69df61272a4da4a7ac3ef3d4f25f1de44ee27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dcb3d6ed877766e72b9f3e7b69df61272a4da4a7ac3ef3d4f25f1de44ee27d->enter($__internal_d2dcb3d6ed877766e72b9f3e7b69df61272a4da4a7ac3ef3d4f25f1de44ee27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/over.js"));

        // line 1
        echo "var arrayMap = require('./_arrayMap'),
    createOver = require('./_createOver');

/**
 * Creates a function that invokes `iteratees` with the arguments it receives
 * and returns their results.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {...(Function|Function[])} [iteratees=[_.identity]]
 *  The iteratees to invoke.
 * @returns {Function} Returns the new function.
 * @example
 *
 * var func = _.over([Math.max, Math.min]);
 *
 * func(1, 2, 3, 4);
 * // => [4, 1]
 */
var over = createOver(arrayMap);

module.exports = over;
";
        
        $__internal_d2dcb3d6ed877766e72b9f3e7b69df61272a4da4a7ac3ef3d4f25f1de44ee27d->leave($__internal_d2dcb3d6ed877766e72b9f3e7b69df61272a4da4a7ac3ef3d4f25f1de44ee27d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/over.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayMap = require('./_arrayMap'),
    createOver = require('./_createOver');

/**
 * Creates a function that invokes `iteratees` with the arguments it receives
 * and returns their results.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {...(Function|Function[])} [iteratees=[_.identity]]
 *  The iteratees to invoke.
 * @returns {Function} Returns the new function.
 * @example
 *
 * var func = _.over([Math.max, Math.min]);
 *
 * func(1, 2, 3, 4);
 * // => [4, 1]
 */
var over = createOver(arrayMap);

module.exports = over;
", "node_modules/lodash/over.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/over.js");
    }
}
