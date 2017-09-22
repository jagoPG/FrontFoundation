<?php

/* node_modules/lodash/has.js */
class __TwigTemplate_2637c198c75f5942cf9cf471eab23d33d02459c3f3e036a9f10b43892239dea5 extends Twig_Template
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
        $__internal_8728a42fb7a1ead05b62deb0a1758462007f9f9bcb8885d6b1df404d0c6c44b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8728a42fb7a1ead05b62deb0a1758462007f9f9bcb8885d6b1df404d0c6c44b1->enter($__internal_8728a42fb7a1ead05b62deb0a1758462007f9f9bcb8885d6b1df404d0c6c44b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/has.js"));

        // line 1
        echo "var baseHas = require('./_baseHas'),
    hasPath = require('./_hasPath');

/**
 * Checks if `path` is a direct property of `object`.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Object
 * @param {Object} object The object to query.
 * @param {Array|string} path The path to check.
 * @returns {boolean} Returns `true` if `path` exists, else `false`.
 * @example
 *
 * var object = { 'a': { 'b': 2 } };
 * var other = _.create({ 'a': _.create({ 'b': 2 }) });
 *
 * _.has(object, 'a');
 * // => true
 *
 * _.has(object, 'a.b');
 * // => true
 *
 * _.has(object, ['a', 'b']);
 * // => true
 *
 * _.has(other, 'a');
 * // => false
 */
function has(object, path) {
  return object != null && hasPath(object, path, baseHas);
}

module.exports = has;
";
        
        $__internal_8728a42fb7a1ead05b62deb0a1758462007f9f9bcb8885d6b1df404d0c6c44b1->leave($__internal_8728a42fb7a1ead05b62deb0a1758462007f9f9bcb8885d6b1df404d0c6c44b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/has.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseHas = require('./_baseHas'),
    hasPath = require('./_hasPath');

/**
 * Checks if `path` is a direct property of `object`.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Object
 * @param {Object} object The object to query.
 * @param {Array|string} path The path to check.
 * @returns {boolean} Returns `true` if `path` exists, else `false`.
 * @example
 *
 * var object = { 'a': { 'b': 2 } };
 * var other = _.create({ 'a': _.create({ 'b': 2 }) });
 *
 * _.has(object, 'a');
 * // => true
 *
 * _.has(object, 'a.b');
 * // => true
 *
 * _.has(object, ['a', 'b']);
 * // => true
 *
 * _.has(other, 'a');
 * // => false
 */
function has(object, path) {
  return object != null && hasPath(object, path, baseHas);
}

module.exports = has;
", "node_modules/lodash/has.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/has.js");
    }
}
