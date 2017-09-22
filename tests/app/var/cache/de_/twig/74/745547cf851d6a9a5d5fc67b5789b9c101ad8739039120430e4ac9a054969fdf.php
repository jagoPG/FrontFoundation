<?php

/* node_modules/lodash/assignWith.js */
class __TwigTemplate_d54bda0e6421056d0c1824d86e3cc42db2674c0d80885b0012624d6d237ed013 extends Twig_Template
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
        $__internal_22a67ce3d2c76211c402d39e0b21c83af5a9a89168d9f88d235171213aa1ae57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a67ce3d2c76211c402d39e0b21c83af5a9a89168d9f88d235171213aa1ae57->enter($__internal_22a67ce3d2c76211c402d39e0b21c83af5a9a89168d9f88d235171213aa1ae57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/assignWith.js"));

        // line 1
        echo "var copyObject = require('./_copyObject'),
    createAssigner = require('./_createAssigner'),
    keys = require('./keys');

/**
 * This method is like `_.assign` except that it accepts `customizer`
 * which is invoked to produce the assigned values. If `customizer` returns
 * `undefined`, assignment is handled by the method instead. The `customizer`
 * is invoked with five arguments: (objValue, srcValue, key, object, source).
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The destination object.
 * @param {...Object} sources The source objects.
 * @param {Function} [customizer] The function to customize assigned values.
 * @returns {Object} Returns `object`.
 * @see _.assignInWith
 * @example
 *
 * function customizer(objValue, srcValue) {
 *   return _.isUndefined(objValue) ? srcValue : objValue;
 * }
 *
 * var defaults = _.partialRight(_.assignWith, customizer);
 *
 * defaults({ 'a': 1 }, { 'b': 2 }, { 'a': 3 });
 * // => { 'a': 1, 'b': 2 }
 */
var assignWith = createAssigner(function(object, source, srcIndex, customizer) {
  copyObject(source, keys(source), object, customizer);
});

module.exports = assignWith;
";
        
        $__internal_22a67ce3d2c76211c402d39e0b21c83af5a9a89168d9f88d235171213aa1ae57->leave($__internal_22a67ce3d2c76211c402d39e0b21c83af5a9a89168d9f88d235171213aa1ae57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/assignWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var copyObject = require('./_copyObject'),
    createAssigner = require('./_createAssigner'),
    keys = require('./keys');

/**
 * This method is like `_.assign` except that it accepts `customizer`
 * which is invoked to produce the assigned values. If `customizer` returns
 * `undefined`, assignment is handled by the method instead. The `customizer`
 * is invoked with five arguments: (objValue, srcValue, key, object, source).
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The destination object.
 * @param {...Object} sources The source objects.
 * @param {Function} [customizer] The function to customize assigned values.
 * @returns {Object} Returns `object`.
 * @see _.assignInWith
 * @example
 *
 * function customizer(objValue, srcValue) {
 *   return _.isUndefined(objValue) ? srcValue : objValue;
 * }
 *
 * var defaults = _.partialRight(_.assignWith, customizer);
 *
 * defaults({ 'a': 1 }, { 'b': 2 }, { 'a': 3 });
 * // => { 'a': 1, 'b': 2 }
 */
var assignWith = createAssigner(function(object, source, srcIndex, customizer) {
  copyObject(source, keys(source), object, customizer);
});

module.exports = assignWith;
", "node_modules/lodash/assignWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/assignWith.js");
    }
}
