<?php

/* node_modules/lodash/tap.js */
class __TwigTemplate_9e742938aff9247a6bbfe106548dbc2fbe06fa699b741a7da7eb9058ea8ac4a7 extends Twig_Template
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
        $__internal_af04e9a9ee594122a9a3ef6d2891d11f28b490ca1d977f725ac8f5d2e456cb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af04e9a9ee594122a9a3ef6d2891d11f28b490ca1d977f725ac8f5d2e456cb79->enter($__internal_af04e9a9ee594122a9a3ef6d2891d11f28b490ca1d977f725ac8f5d2e456cb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/tap.js"));

        // line 1
        echo "/**
 * This method invokes `interceptor` and returns `value`. The interceptor
 * is invoked with one argument; (value). The purpose of this method is to
 * \"tap into\" a method chain sequence in order to modify intermediate results.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Seq
 * @param {*} value The value to provide to `interceptor`.
 * @param {Function} interceptor The function to invoke.
 * @returns {*} Returns `value`.
 * @example
 *
 * _([1, 2, 3])
 *  .tap(function(array) {
 *    // Mutate input array.
 *    array.pop();
 *  })
 *  .reverse()
 *  .value();
 * // => [2, 1]
 */
function tap(value, interceptor) {
  interceptor(value);
  return value;
}

module.exports = tap;
";
        
        $__internal_af04e9a9ee594122a9a3ef6d2891d11f28b490ca1d977f725ac8f5d2e456cb79->leave($__internal_af04e9a9ee594122a9a3ef6d2891d11f28b490ca1d977f725ac8f5d2e456cb79_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/tap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This method invokes `interceptor` and returns `value`. The interceptor
 * is invoked with one argument; (value). The purpose of this method is to
 * \"tap into\" a method chain sequence in order to modify intermediate results.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Seq
 * @param {*} value The value to provide to `interceptor`.
 * @param {Function} interceptor The function to invoke.
 * @returns {*} Returns `value`.
 * @example
 *
 * _([1, 2, 3])
 *  .tap(function(array) {
 *    // Mutate input array.
 *    array.pop();
 *  })
 *  .reverse()
 *  .value();
 * // => [2, 1]
 */
function tap(value, interceptor) {
  interceptor(value);
  return value;
}

module.exports = tap;
", "node_modules/lodash/tap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/tap.js");
    }
}
