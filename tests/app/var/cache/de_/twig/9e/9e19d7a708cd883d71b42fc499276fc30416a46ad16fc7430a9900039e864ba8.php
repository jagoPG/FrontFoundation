<?php

/* node_modules/lodash/pick.js */
class __TwigTemplate_26689a878b8ebf5168b26f892d8fb3ba2f4bb2511c9a4e5a136765fc6982edf7 extends Twig_Template
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
        $__internal_6c0a03bef6892b4cc8481577e9682ee1d60f6fe5accfe64b2a18b9660d3b41e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0a03bef6892b4cc8481577e9682ee1d60f6fe5accfe64b2a18b9660d3b41e2->enter($__internal_6c0a03bef6892b4cc8481577e9682ee1d60f6fe5accfe64b2a18b9660d3b41e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/pick.js"));

        // line 1
        echo "var basePick = require('./_basePick'),
    flatRest = require('./_flatRest');

/**
 * Creates an object composed of the picked `object` properties.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Object
 * @param {Object} object The source object.
 * @param {...(string|string[])} [paths] The property paths to pick.
 * @returns {Object} Returns the new object.
 * @example
 *
 * var object = { 'a': 1, 'b': '2', 'c': 3 };
 *
 * _.pick(object, ['a', 'c']);
 * // => { 'a': 1, 'c': 3 }
 */
var pick = flatRest(function(object, paths) {
  return object == null ? {} : basePick(object, paths);
});

module.exports = pick;
";
        
        $__internal_6c0a03bef6892b4cc8481577e9682ee1d60f6fe5accfe64b2a18b9660d3b41e2->leave($__internal_6c0a03bef6892b4cc8481577e9682ee1d60f6fe5accfe64b2a18b9660d3b41e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/pick.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var basePick = require('./_basePick'),
    flatRest = require('./_flatRest');

/**
 * Creates an object composed of the picked `object` properties.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Object
 * @param {Object} object The source object.
 * @param {...(string|string[])} [paths] The property paths to pick.
 * @returns {Object} Returns the new object.
 * @example
 *
 * var object = { 'a': 1, 'b': '2', 'c': 3 };
 *
 * _.pick(object, ['a', 'c']);
 * // => { 'a': 1, 'c': 3 }
 */
var pick = flatRest(function(object, paths) {
  return object == null ? {} : basePick(object, paths);
});

module.exports = pick;
", "node_modules/lodash/pick.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/pick.js");
    }
}
