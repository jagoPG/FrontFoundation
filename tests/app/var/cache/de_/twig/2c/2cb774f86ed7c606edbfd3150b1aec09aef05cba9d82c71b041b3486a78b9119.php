<?php

/* node_modules/lodash/maxBy.js */
class __TwigTemplate_c638399260311691755fea709d0a9bad1b1b0c94ff8e9edef08d9c8651674515 extends Twig_Template
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
        $__internal_f991e49a20938a246f4128922e7a5109da1f1782dae85685b3bfb1f72e9da698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f991e49a20938a246f4128922e7a5109da1f1782dae85685b3bfb1f72e9da698->enter($__internal_f991e49a20938a246f4128922e7a5109da1f1782dae85685b3bfb1f72e9da698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/maxBy.js"));

        // line 1
        echo "var baseExtremum = require('./_baseExtremum'),
    baseGt = require('./_baseGt'),
    baseIteratee = require('./_baseIteratee');

/**
 * This method is like `_.max` except that it accepts `iteratee` which is
 * invoked for each element in `array` to generate the criterion by which
 * the value is ranked. The iteratee is invoked with one argument: (value).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @param {Function} [iteratee=_.identity] The iteratee invoked per element.
 * @returns {*} Returns the maximum value.
 * @example
 *
 * var objects = [{ 'n': 1 }, { 'n': 2 }];
 *
 * _.maxBy(objects, function(o) { return o.n; });
 * // => { 'n': 2 }
 *
 * // The `_.property` iteratee shorthand.
 * _.maxBy(objects, 'n');
 * // => { 'n': 2 }
 */
function maxBy(array, iteratee) {
  return (array && array.length)
    ? baseExtremum(array, baseIteratee(iteratee, 2), baseGt)
    : undefined;
}

module.exports = maxBy;
";
        
        $__internal_f991e49a20938a246f4128922e7a5109da1f1782dae85685b3bfb1f72e9da698->leave($__internal_f991e49a20938a246f4128922e7a5109da1f1782dae85685b3bfb1f72e9da698_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/maxBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseExtremum = require('./_baseExtremum'),
    baseGt = require('./_baseGt'),
    baseIteratee = require('./_baseIteratee');

/**
 * This method is like `_.max` except that it accepts `iteratee` which is
 * invoked for each element in `array` to generate the criterion by which
 * the value is ranked. The iteratee is invoked with one argument: (value).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @param {Function} [iteratee=_.identity] The iteratee invoked per element.
 * @returns {*} Returns the maximum value.
 * @example
 *
 * var objects = [{ 'n': 1 }, { 'n': 2 }];
 *
 * _.maxBy(objects, function(o) { return o.n; });
 * // => { 'n': 2 }
 *
 * // The `_.property` iteratee shorthand.
 * _.maxBy(objects, 'n');
 * // => { 'n': 2 }
 */
function maxBy(array, iteratee) {
  return (array && array.length)
    ? baseExtremum(array, baseIteratee(iteratee, 2), baseGt)
    : undefined;
}

module.exports = maxBy;
", "node_modules/lodash/maxBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/maxBy.js");
    }
}
