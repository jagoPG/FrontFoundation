<?php

/* node_modules/lodash/defer.js */
class __TwigTemplate_b37f735f7adf9925fd4bfb12167a69d4b4b1a0a620ff53c7b1a01422e1b99dee extends Twig_Template
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
        $__internal_4373a77989d63e2bc678d4616abf78ddb9f7292af8c6b5bb73584c5f2c1e1f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4373a77989d63e2bc678d4616abf78ddb9f7292af8c6b5bb73584c5f2c1e1f2a->enter($__internal_4373a77989d63e2bc678d4616abf78ddb9f7292af8c6b5bb73584c5f2c1e1f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/defer.js"));

        // line 1
        echo "var baseDelay = require('./_baseDelay'),
    baseRest = require('./_baseRest');

/**
 * Defers invoking the `func` until the current call stack has cleared. Any
 * additional arguments are provided to `func` when it's invoked.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to defer.
 * @param {...*} [args] The arguments to invoke `func` with.
 * @returns {number} Returns the timer id.
 * @example
 *
 * _.defer(function(text) {
 *   console.log(text);
 * }, 'deferred');
 * // => Logs 'deferred' after one millisecond.
 */
var defer = baseRest(function(func, args) {
  return baseDelay(func, 1, args);
});

module.exports = defer;
";
        
        $__internal_4373a77989d63e2bc678d4616abf78ddb9f7292af8c6b5bb73584c5f2c1e1f2a->leave($__internal_4373a77989d63e2bc678d4616abf78ddb9f7292af8c6b5bb73584c5f2c1e1f2a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/defer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseDelay = require('./_baseDelay'),
    baseRest = require('./_baseRest');

/**
 * Defers invoking the `func` until the current call stack has cleared. Any
 * additional arguments are provided to `func` when it's invoked.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to defer.
 * @param {...*} [args] The arguments to invoke `func` with.
 * @returns {number} Returns the timer id.
 * @example
 *
 * _.defer(function(text) {
 *   console.log(text);
 * }, 'deferred');
 * // => Logs 'deferred' after one millisecond.
 */
var defer = baseRest(function(func, args) {
  return baseDelay(func, 1, args);
});

module.exports = defer;
", "node_modules/lodash/defer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/defer.js");
    }
}
