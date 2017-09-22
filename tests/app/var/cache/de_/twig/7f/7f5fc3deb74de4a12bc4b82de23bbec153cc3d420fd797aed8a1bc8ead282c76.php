<?php

/* node_modules/lodash/invoke.js */
class __TwigTemplate_7e417812ee59ece81fe8c74965400031b5d8c73f5035336fb78e5fffd9c05beb extends Twig_Template
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
        $__internal_5e7e26738745f7bc45f5c34b9da4d1278b670cad65ef9823b1c111f3569dbfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7e26738745f7bc45f5c34b9da4d1278b670cad65ef9823b1c111f3569dbfb9->enter($__internal_5e7e26738745f7bc45f5c34b9da4d1278b670cad65ef9823b1c111f3569dbfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/invoke.js"));

        // line 1
        echo "var baseInvoke = require('./_baseInvoke'),
    baseRest = require('./_baseRest');

/**
 * Invokes the method at `path` of `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to query.
 * @param {Array|string} path The path of the method to invoke.
 * @param {...*} [args] The arguments to invoke the method with.
 * @returns {*} Returns the result of the invoked method.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': [1, 2, 3, 4] } }] };
 *
 * _.invoke(object, 'a[0].b.c.slice', 1, 3);
 * // => [2, 3]
 */
var invoke = baseRest(baseInvoke);

module.exports = invoke;
";
        
        $__internal_5e7e26738745f7bc45f5c34b9da4d1278b670cad65ef9823b1c111f3569dbfb9->leave($__internal_5e7e26738745f7bc45f5c34b9da4d1278b670cad65ef9823b1c111f3569dbfb9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/invoke.js";
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
 * Invokes the method at `path` of `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to query.
 * @param {Array|string} path The path of the method to invoke.
 * @param {...*} [args] The arguments to invoke the method with.
 * @returns {*} Returns the result of the invoked method.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': [1, 2, 3, 4] } }] };
 *
 * _.invoke(object, 'a[0].b.c.slice', 1, 3);
 * // => [2, 3]
 */
var invoke = baseRest(baseInvoke);

module.exports = invoke;
", "node_modules/lodash/invoke.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/invoke.js");
    }
}
