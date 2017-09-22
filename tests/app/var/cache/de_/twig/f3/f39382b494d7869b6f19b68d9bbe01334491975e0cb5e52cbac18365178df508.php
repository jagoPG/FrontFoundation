<?php

/* node_modules/lodash/get.js */
class __TwigTemplate_4966ebc1d70424bd69a37df45d25300efa7439328861529281c3bae77f63ba4a extends Twig_Template
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
        $__internal_28c3129a83eec8c514689a99e2dc4d28df664cdd82a02d7fde13ee8b4379d34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c3129a83eec8c514689a99e2dc4d28df664cdd82a02d7fde13ee8b4379d34e->enter($__internal_28c3129a83eec8c514689a99e2dc4d28df664cdd82a02d7fde13ee8b4379d34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/get.js"));

        // line 1
        echo "var baseGet = require('./_baseGet');

/**
 * Gets the value at `path` of `object`. If the resolved value is
 * `undefined`, the `defaultValue` is returned in its place.
 *
 * @static
 * @memberOf _
 * @since 3.7.0
 * @category Object
 * @param {Object} object The object to query.
 * @param {Array|string} path The path of the property to get.
 * @param {*} [defaultValue] The value returned for `undefined` resolved values.
 * @returns {*} Returns the resolved value.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': 3 } }] };
 *
 * _.get(object, 'a[0].b.c');
 * // => 3
 *
 * _.get(object, ['a', '0', 'b', 'c']);
 * // => 3
 *
 * _.get(object, 'a.b.c', 'default');
 * // => 'default'
 */
function get(object, path, defaultValue) {
  var result = object == null ? undefined : baseGet(object, path);
  return result === undefined ? defaultValue : result;
}

module.exports = get;
";
        
        $__internal_28c3129a83eec8c514689a99e2dc4d28df664cdd82a02d7fde13ee8b4379d34e->leave($__internal_28c3129a83eec8c514689a99e2dc4d28df664cdd82a02d7fde13ee8b4379d34e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/get.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGet = require('./_baseGet');

/**
 * Gets the value at `path` of `object`. If the resolved value is
 * `undefined`, the `defaultValue` is returned in its place.
 *
 * @static
 * @memberOf _
 * @since 3.7.0
 * @category Object
 * @param {Object} object The object to query.
 * @param {Array|string} path The path of the property to get.
 * @param {*} [defaultValue] The value returned for `undefined` resolved values.
 * @returns {*} Returns the resolved value.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': 3 } }] };
 *
 * _.get(object, 'a[0].b.c');
 * // => 3
 *
 * _.get(object, ['a', '0', 'b', 'c']);
 * // => 3
 *
 * _.get(object, 'a.b.c', 'default');
 * // => 'default'
 */
function get(object, path, defaultValue) {
  var result = object == null ? undefined : baseGet(object, path);
  return result === undefined ? defaultValue : result;
}

module.exports = get;
", "node_modules/lodash/get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/get.js");
    }
}
