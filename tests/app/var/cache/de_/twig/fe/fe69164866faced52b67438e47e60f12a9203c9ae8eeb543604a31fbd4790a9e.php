<?php

/* node_modules/lodash/pullAllBy.js */
class __TwigTemplate_ac4f0b6f15a37a0a8cdfed400f30271af7b4a17fcd31d5faa94a9c10390038cc extends Twig_Template
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
        $__internal_c72d6d706eb63225ed45e00bf31b5d1f68ee25194155534639938a0a71c77ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72d6d706eb63225ed45e00bf31b5d1f68ee25194155534639938a0a71c77ff2->enter($__internal_c72d6d706eb63225ed45e00bf31b5d1f68ee25194155534639938a0a71c77ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/pullAllBy.js"));

        // line 1
        echo "var baseIteratee = require('./_baseIteratee'),
    basePullAll = require('./_basePullAll');

/**
 * This method is like `_.pullAll` except that it accepts `iteratee` which is
 * invoked for each element of `array` and `values` to generate the criterion
 * by which they're compared. The iteratee is invoked with one argument: (value).
 *
 * **Note:** Unlike `_.differenceBy`, this method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {Array} values The values to remove.
 * @param {Function} [iteratee=_.identity] The iteratee invoked per element.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = [{ 'x': 1 }, { 'x': 2 }, { 'x': 3 }, { 'x': 1 }];
 *
 * _.pullAllBy(array, [{ 'x': 1 }, { 'x': 3 }], 'x');
 * console.log(array);
 * // => [{ 'x': 2 }]
 */
function pullAllBy(array, values, iteratee) {
  return (array && array.length && values && values.length)
    ? basePullAll(array, values, baseIteratee(iteratee, 2))
    : array;
}

module.exports = pullAllBy;
";
        
        $__internal_c72d6d706eb63225ed45e00bf31b5d1f68ee25194155534639938a0a71c77ff2->leave($__internal_c72d6d706eb63225ed45e00bf31b5d1f68ee25194155534639938a0a71c77ff2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/pullAllBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIteratee = require('./_baseIteratee'),
    basePullAll = require('./_basePullAll');

/**
 * This method is like `_.pullAll` except that it accepts `iteratee` which is
 * invoked for each element of `array` and `values` to generate the criterion
 * by which they're compared. The iteratee is invoked with one argument: (value).
 *
 * **Note:** Unlike `_.differenceBy`, this method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {Array} values The values to remove.
 * @param {Function} [iteratee=_.identity] The iteratee invoked per element.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = [{ 'x': 1 }, { 'x': 2 }, { 'x': 3 }, { 'x': 1 }];
 *
 * _.pullAllBy(array, [{ 'x': 1 }, { 'x': 3 }], 'x');
 * console.log(array);
 * // => [{ 'x': 2 }]
 */
function pullAllBy(array, values, iteratee) {
  return (array && array.length && values && values.length)
    ? basePullAll(array, values, baseIteratee(iteratee, 2))
    : array;
}

module.exports = pullAllBy;
", "node_modules/lodash/pullAllBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/pullAllBy.js");
    }
}
