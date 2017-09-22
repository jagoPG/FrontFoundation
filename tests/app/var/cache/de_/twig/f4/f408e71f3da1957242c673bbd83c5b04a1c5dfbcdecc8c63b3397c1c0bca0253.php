<?php

/* node_modules/lodash/unset.js */
class __TwigTemplate_e600c6008e64c5abbf9ba0eb0fc4aab66bfec4e639bbc96e36622d6a9ca9877e extends Twig_Template
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
        $__internal_55a5bb4dfdb5f5b766914fd4031a159ff4c0e79875909a4558d9e7e0c8c5c5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a5bb4dfdb5f5b766914fd4031a159ff4c0e79875909a4558d9e7e0c8c5c5e7->enter($__internal_55a5bb4dfdb5f5b766914fd4031a159ff4c0e79875909a4558d9e7e0c8c5c5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/unset.js"));

        // line 1
        echo "var baseUnset = require('./_baseUnset');

/**
 * Removes the property at `path` of `object`.
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to modify.
 * @param {Array|string} path The path of the property to unset.
 * @returns {boolean} Returns `true` if the property is deleted, else `false`.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': 7 } }] };
 * _.unset(object, 'a[0].b.c');
 * // => true
 *
 * console.log(object);
 * // => { 'a': [{ 'b': {} }] };
 *
 * _.unset(object, ['a', '0', 'b', 'c']);
 * // => true
 *
 * console.log(object);
 * // => { 'a': [{ 'b': {} }] };
 */
function unset(object, path) {
  return object == null ? true : baseUnset(object, path);
}

module.exports = unset;
";
        
        $__internal_55a5bb4dfdb5f5b766914fd4031a159ff4c0e79875909a4558d9e7e0c8c5c5e7->leave($__internal_55a5bb4dfdb5f5b766914fd4031a159ff4c0e79875909a4558d9e7e0c8c5c5e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/unset.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseUnset = require('./_baseUnset');

/**
 * Removes the property at `path` of `object`.
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to modify.
 * @param {Array|string} path The path of the property to unset.
 * @returns {boolean} Returns `true` if the property is deleted, else `false`.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': 7 } }] };
 * _.unset(object, 'a[0].b.c');
 * // => true
 *
 * console.log(object);
 * // => { 'a': [{ 'b': {} }] };
 *
 * _.unset(object, ['a', '0', 'b', 'c']);
 * // => true
 *
 * console.log(object);
 * // => { 'a': [{ 'b': {} }] };
 */
function unset(object, path) {
  return object == null ? true : baseUnset(object, path);
}

module.exports = unset;
", "node_modules/lodash/unset.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/unset.js");
    }
}
