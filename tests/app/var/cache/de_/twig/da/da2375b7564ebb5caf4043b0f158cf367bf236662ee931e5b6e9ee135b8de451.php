<?php

/* node_modules/lodash/property.js */
class __TwigTemplate_cdd8e5ecc052a65393c96d5d529db9ccdc73652144f91753d6e4946f360222c4 extends Twig_Template
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
        $__internal_9365380f5b2b77ae830640ed34fa96ac541c940548e400b4c38e9056c1084f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9365380f5b2b77ae830640ed34fa96ac541c940548e400b4c38e9056c1084f71->enter($__internal_9365380f5b2b77ae830640ed34fa96ac541c940548e400b4c38e9056c1084f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/property.js"));

        // line 1
        echo "var baseProperty = require('./_baseProperty'),
    basePropertyDeep = require('./_basePropertyDeep'),
    isKey = require('./_isKey'),
    toKey = require('./_toKey');

/**
 * Creates a function that returns the value at `path` of a given object.
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Util
 * @param {Array|string} path The path of the property to get.
 * @returns {Function} Returns the new accessor function.
 * @example
 *
 * var objects = [
 *   { 'a': { 'b': 2 } },
 *   { 'a': { 'b': 1 } }
 * ];
 *
 * _.map(objects, _.property('a.b'));
 * // => [2, 1]
 *
 * _.map(_.sortBy(objects, _.property(['a', 'b'])), 'a.b');
 * // => [1, 2]
 */
function property(path) {
  return isKey(path) ? baseProperty(toKey(path)) : basePropertyDeep(path);
}

module.exports = property;
";
        
        $__internal_9365380f5b2b77ae830640ed34fa96ac541c940548e400b4c38e9056c1084f71->leave($__internal_9365380f5b2b77ae830640ed34fa96ac541c940548e400b4c38e9056c1084f71_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/property.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseProperty = require('./_baseProperty'),
    basePropertyDeep = require('./_basePropertyDeep'),
    isKey = require('./_isKey'),
    toKey = require('./_toKey');

/**
 * Creates a function that returns the value at `path` of a given object.
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Util
 * @param {Array|string} path The path of the property to get.
 * @returns {Function} Returns the new accessor function.
 * @example
 *
 * var objects = [
 *   { 'a': { 'b': 2 } },
 *   { 'a': { 'b': 1 } }
 * ];
 *
 * _.map(objects, _.property('a.b'));
 * // => [2, 1]
 *
 * _.map(_.sortBy(objects, _.property(['a', 'b'])), 'a.b');
 * // => [1, 2]
 */
function property(path) {
  return isKey(path) ? baseProperty(toKey(path)) : basePropertyDeep(path);
}

module.exports = property;
", "node_modules/lodash/property.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/property.js");
    }
}
