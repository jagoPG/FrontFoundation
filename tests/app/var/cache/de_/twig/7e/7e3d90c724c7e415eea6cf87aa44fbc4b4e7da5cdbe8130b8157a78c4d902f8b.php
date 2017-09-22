<?php

/* node_modules/lodash/wrap.js */
class __TwigTemplate_2876454e79dfd7c3a2044aa38a6321dfd2915aa05fe053c3fec67366b34a4fda extends Twig_Template
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
        $__internal_42f6261e6d70312f9d9009503f2ead2c7fe1afd5dfc5b05ed736cc4826cc0517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f6261e6d70312f9d9009503f2ead2c7fe1afd5dfc5b05ed736cc4826cc0517->enter($__internal_42f6261e6d70312f9d9009503f2ead2c7fe1afd5dfc5b05ed736cc4826cc0517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/wrap.js"));

        // line 1
        echo "var castFunction = require('./_castFunction'),
    partial = require('./partial');

/**
 * Creates a function that provides `value` to `wrapper` as its first
 * argument. Any additional arguments provided to the function are appended
 * to those provided to the `wrapper`. The wrapper is invoked with the `this`
 * binding of the created function.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {*} value The value to wrap.
 * @param {Function} [wrapper=identity] The wrapper function.
 * @returns {Function} Returns the new function.
 * @example
 *
 * var p = _.wrap(_.escape, function(func, text) {
 *   return '<p>' + func(text) + '</p>';
 * });
 *
 * p('fred, barney, & pebbles');
 * // => '<p>fred, barney, &amp; pebbles</p>'
 */
function wrap(value, wrapper) {
  return partial(castFunction(wrapper), value);
}

module.exports = wrap;
";
        
        $__internal_42f6261e6d70312f9d9009503f2ead2c7fe1afd5dfc5b05ed736cc4826cc0517->leave($__internal_42f6261e6d70312f9d9009503f2ead2c7fe1afd5dfc5b05ed736cc4826cc0517_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/wrap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var castFunction = require('./_castFunction'),
    partial = require('./partial');

/**
 * Creates a function that provides `value` to `wrapper` as its first
 * argument. Any additional arguments provided to the function are appended
 * to those provided to the `wrapper`. The wrapper is invoked with the `this`
 * binding of the created function.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {*} value The value to wrap.
 * @param {Function} [wrapper=identity] The wrapper function.
 * @returns {Function} Returns the new function.
 * @example
 *
 * var p = _.wrap(_.escape, function(func, text) {
 *   return '<p>' + func(text) + '</p>';
 * });
 *
 * p('fred, barney, & pebbles');
 * // => '<p>fred, barney, &amp; pebbles</p>'
 */
function wrap(value, wrapper) {
  return partial(castFunction(wrapper), value);
}

module.exports = wrap;
", "node_modules/lodash/wrap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/wrap.js");
    }
}
