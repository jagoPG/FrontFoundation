<?php

/* node_modules/lodash/method.js */
class __TwigTemplate_585eab4bf57788068cc63c5a3ddba45c1e8ef73bdf036e2537285083b1433681 extends Twig_Template
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
        $__internal_d57e28a53331e94fc1e69af772f8317aa9b9ec47a6c3a7947e640a94ebe8b73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57e28a53331e94fc1e69af772f8317aa9b9ec47a6c3a7947e640a94ebe8b73f->enter($__internal_d57e28a53331e94fc1e69af772f8317aa9b9ec47a6c3a7947e640a94ebe8b73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/method.js"));

        // line 1
        echo "var baseInvoke = require('./_baseInvoke'),
    baseRest = require('./_baseRest');

/**
 * Creates a function that invokes the method at `path` of a given object.
 * Any additional arguments are provided to the invoked method.
 *
 * @static
 * @memberOf _
 * @since 3.7.0
 * @category Util
 * @param {Array|string} path The path of the method to invoke.
 * @param {...*} [args] The arguments to invoke the method with.
 * @returns {Function} Returns the new invoker function.
 * @example
 *
 * var objects = [
 *   { 'a': { 'b': _.constant(2) } },
 *   { 'a': { 'b': _.constant(1) } }
 * ];
 *
 * _.map(objects, _.method('a.b'));
 * // => [2, 1]
 *
 * _.map(objects, _.method(['a', 'b']));
 * // => [2, 1]
 */
var method = baseRest(function(path, args) {
  return function(object) {
    return baseInvoke(object, path, args);
  };
});

module.exports = method;
";
        
        $__internal_d57e28a53331e94fc1e69af772f8317aa9b9ec47a6c3a7947e640a94ebe8b73f->leave($__internal_d57e28a53331e94fc1e69af772f8317aa9b9ec47a6c3a7947e640a94ebe8b73f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/method.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseInvoke = require('./_baseInvoke'),
    baseRest = require('./_baseRest');

/**
 * Creates a function that invokes the method at `path` of a given object.
 * Any additional arguments are provided to the invoked method.
 *
 * @static
 * @memberOf _
 * @since 3.7.0
 * @category Util
 * @param {Array|string} path The path of the method to invoke.
 * @param {...*} [args] The arguments to invoke the method with.
 * @returns {Function} Returns the new invoker function.
 * @example
 *
 * var objects = [
 *   { 'a': { 'b': _.constant(2) } },
 *   { 'a': { 'b': _.constant(1) } }
 * ];
 *
 * _.map(objects, _.method('a.b'));
 * // => [2, 1]
 *
 * _.map(objects, _.method(['a', 'b']));
 * // => [2, 1]
 */
var method = baseRest(function(path, args) {
  return function(object) {
    return baseInvoke(object, path, args);
  };
});

module.exports = method;
", "node_modules/lodash/method.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/method.js");
    }
}
