<?php

/* node_modules/lodash/attempt.js */
class __TwigTemplate_1edea70b0f6186a44f9a80fd05dae91b0d77200ee34870e197433e57de88fec3 extends Twig_Template
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
        $__internal_c5c76dd55b29540cb8ad1ad48dca6713d405ed6d9c64be90e35b932c560cdb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c76dd55b29540cb8ad1ad48dca6713d405ed6d9c64be90e35b932c560cdb8b->enter($__internal_c5c76dd55b29540cb8ad1ad48dca6713d405ed6d9c64be90e35b932c560cdb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/attempt.js"));

        // line 1
        echo "var apply = require('./_apply'),
    baseRest = require('./_baseRest'),
    isError = require('./isError');

/**
 * Attempts to invoke `func`, returning either the result or the caught error
 * object. Any additional arguments are provided to `func` when it's invoked.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Util
 * @param {Function} func The function to attempt.
 * @param {...*} [args] The arguments to invoke `func` with.
 * @returns {*} Returns the `func` result or error object.
 * @example
 *
 * // Avoid throwing errors for invalid selectors.
 * var elements = _.attempt(function(selector) {
 *   return document.querySelectorAll(selector);
 * }, '>_>');
 *
 * if (_.isError(elements)) {
 *   elements = [];
 * }
 */
var attempt = baseRest(function(func, args) {
  try {
    return apply(func, undefined, args);
  } catch (e) {
    return isError(e) ? e : new Error(e);
  }
});

module.exports = attempt;
";
        
        $__internal_c5c76dd55b29540cb8ad1ad48dca6713d405ed6d9c64be90e35b932c560cdb8b->leave($__internal_c5c76dd55b29540cb8ad1ad48dca6713d405ed6d9c64be90e35b932c560cdb8b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/attempt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var apply = require('./_apply'),
    baseRest = require('./_baseRest'),
    isError = require('./isError');

/**
 * Attempts to invoke `func`, returning either the result or the caught error
 * object. Any additional arguments are provided to `func` when it's invoked.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Util
 * @param {Function} func The function to attempt.
 * @param {...*} [args] The arguments to invoke `func` with.
 * @returns {*} Returns the `func` result or error object.
 * @example
 *
 * // Avoid throwing errors for invalid selectors.
 * var elements = _.attempt(function(selector) {
 *   return document.querySelectorAll(selector);
 * }, '>_>');
 *
 * if (_.isError(elements)) {
 *   elements = [];
 * }
 */
var attempt = baseRest(function(func, args) {
  try {
    return apply(func, undefined, args);
  } catch (e) {
    return isError(e) ? e : new Error(e);
  }
});

module.exports = attempt;
", "node_modules/lodash/attempt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/attempt.js");
    }
}
