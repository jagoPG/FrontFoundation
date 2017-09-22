<?php

/* node_modules/lodash/delay.js */
class __TwigTemplate_9d90a7176825569a8a7665393c832899f230a843073a08dca9b439bccf2983b8 extends Twig_Template
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
        $__internal_98dc9f92109fc3005e0403f55caf2600beb1d65abbc5978b61984229b3f050aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dc9f92109fc3005e0403f55caf2600beb1d65abbc5978b61984229b3f050aa->enter($__internal_98dc9f92109fc3005e0403f55caf2600beb1d65abbc5978b61984229b3f050aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/delay.js"));

        // line 1
        echo "var baseDelay = require('./_baseDelay'),
    baseRest = require('./_baseRest'),
    toNumber = require('./toNumber');

/**
 * Invokes `func` after `wait` milliseconds. Any additional arguments are
 * provided to `func` when it's invoked.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to delay.
 * @param {number} wait The number of milliseconds to delay invocation.
 * @param {...*} [args] The arguments to invoke `func` with.
 * @returns {number} Returns the timer id.
 * @example
 *
 * _.delay(function(text) {
 *   console.log(text);
 * }, 1000, 'later');
 * // => Logs 'later' after one second.
 */
var delay = baseRest(function(func, wait, args) {
  return baseDelay(func, toNumber(wait) || 0, args);
});

module.exports = delay;
";
        
        $__internal_98dc9f92109fc3005e0403f55caf2600beb1d65abbc5978b61984229b3f050aa->leave($__internal_98dc9f92109fc3005e0403f55caf2600beb1d65abbc5978b61984229b3f050aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseDelay = require('./_baseDelay'),
    baseRest = require('./_baseRest'),
    toNumber = require('./toNumber');

/**
 * Invokes `func` after `wait` milliseconds. Any additional arguments are
 * provided to `func` when it's invoked.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to delay.
 * @param {number} wait The number of milliseconds to delay invocation.
 * @param {...*} [args] The arguments to invoke `func` with.
 * @returns {number} Returns the timer id.
 * @example
 *
 * _.delay(function(text) {
 *   console.log(text);
 * }, 1000, 'later');
 * // => Logs 'later' after one second.
 */
var delay = baseRest(function(func, wait, args) {
  return baseDelay(func, toNumber(wait) || 0, args);
});

module.exports = delay;
", "node_modules/lodash/delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/delay.js");
    }
}
