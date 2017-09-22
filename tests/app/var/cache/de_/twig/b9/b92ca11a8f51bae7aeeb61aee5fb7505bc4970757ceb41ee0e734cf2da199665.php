<?php

/* node_modules/lodash/now.js */
class __TwigTemplate_5efb9c0c3e1c5da2b4502fa387444d087e6ea5417c640c5bff4394e7e6415333 extends Twig_Template
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
        $__internal_490b23e2b9c54af1b711c1093b816012a97779b838db570cf9480f9f3be09e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490b23e2b9c54af1b711c1093b816012a97779b838db570cf9480f9f3be09e7f->enter($__internal_490b23e2b9c54af1b711c1093b816012a97779b838db570cf9480f9f3be09e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/now.js"));

        // line 1
        echo "var root = require('./_root');

/**
 * Gets the timestamp of the number of milliseconds that have elapsed since
 * the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Date
 * @returns {number} Returns the timestamp.
 * @example
 *
 * _.defer(function(stamp) {
 *   console.log(_.now() - stamp);
 * }, _.now());
 * // => Logs the number of milliseconds it took for the deferred invocation.
 */
var now = function() {
  return root.Date.now();
};

module.exports = now;
";
        
        $__internal_490b23e2b9c54af1b711c1093b816012a97779b838db570cf9480f9f3be09e7f->leave($__internal_490b23e2b9c54af1b711c1093b816012a97779b838db570cf9480f9f3be09e7f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/now.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var root = require('./_root');

/**
 * Gets the timestamp of the number of milliseconds that have elapsed since
 * the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Date
 * @returns {number} Returns the timestamp.
 * @example
 *
 * _.defer(function(stamp) {
 *   console.log(_.now() - stamp);
 * }, _.now());
 * // => Logs the number of milliseconds it took for the deferred invocation.
 */
var now = function() {
  return root.Date.now();
};

module.exports = now;
", "node_modules/lodash/now.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/now.js");
    }
}
