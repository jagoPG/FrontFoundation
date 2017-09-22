<?php

/* node_modules/lodash/conforms.js */
class __TwigTemplate_a8760804619a01b06169e8ddcba641dcbf64884cf3783e565c5ae8b27961050a extends Twig_Template
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
        $__internal_45f8a4722d75a6caf52dbe0e21eb1040414e13c05723ec3125eea9aed6b7d91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f8a4722d75a6caf52dbe0e21eb1040414e13c05723ec3125eea9aed6b7d91f->enter($__internal_45f8a4722d75a6caf52dbe0e21eb1040414e13c05723ec3125eea9aed6b7d91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/conforms.js"));

        // line 1
        echo "var baseClone = require('./_baseClone'),
    baseConforms = require('./_baseConforms');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a function that invokes the predicate properties of `source` with
 * the corresponding property values of a given object, returning `true` if
 * all predicates return truthy, else `false`.
 *
 * **Note:** The created function is equivalent to `_.conformsTo` with
 * `source` partially applied.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {Object} source The object of property predicates to conform to.
 * @returns {Function} Returns the new spec function.
 * @example
 *
 * var objects = [
 *   { 'a': 2, 'b': 1 },
 *   { 'a': 1, 'b': 2 }
 * ];
 *
 * _.filter(objects, _.conforms({ 'b': function(n) { return n > 1; } }));
 * // => [{ 'a': 1, 'b': 2 }]
 */
function conforms(source) {
  return baseConforms(baseClone(source, CLONE_DEEP_FLAG));
}

module.exports = conforms;
";
        
        $__internal_45f8a4722d75a6caf52dbe0e21eb1040414e13c05723ec3125eea9aed6b7d91f->leave($__internal_45f8a4722d75a6caf52dbe0e21eb1040414e13c05723ec3125eea9aed6b7d91f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/conforms.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClone = require('./_baseClone'),
    baseConforms = require('./_baseConforms');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a function that invokes the predicate properties of `source` with
 * the corresponding property values of a given object, returning `true` if
 * all predicates return truthy, else `false`.
 *
 * **Note:** The created function is equivalent to `_.conformsTo` with
 * `source` partially applied.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {Object} source The object of property predicates to conform to.
 * @returns {Function} Returns the new spec function.
 * @example
 *
 * var objects = [
 *   { 'a': 2, 'b': 1 },
 *   { 'a': 1, 'b': 2 }
 * ];
 *
 * _.filter(objects, _.conforms({ 'b': function(n) { return n > 1; } }));
 * // => [{ 'a': 1, 'b': 2 }]
 */
function conforms(source) {
  return baseConforms(baseClone(source, CLONE_DEEP_FLAG));
}

module.exports = conforms;
", "node_modules/lodash/conforms.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/conforms.js");
    }
}
