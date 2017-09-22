<?php

/* node_modules/lodash/meanBy.js */
class __TwigTemplate_64f6d8fa5d80a2aa2d476239714a52c116ed6c6915eef9891f64dc1d2c644a02 extends Twig_Template
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
        $__internal_6ad584c58e8b148e0929d7c5976bc3233fd1bb7a9c30abdd58b5f8c4a551dfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad584c58e8b148e0929d7c5976bc3233fd1bb7a9c30abdd58b5f8c4a551dfcc->enter($__internal_6ad584c58e8b148e0929d7c5976bc3233fd1bb7a9c30abdd58b5f8c4a551dfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/meanBy.js"));

        // line 1
        echo "var baseIteratee = require('./_baseIteratee'),
    baseMean = require('./_baseMean');

/**
 * This method is like `_.mean` except that it accepts `iteratee` which is
 * invoked for each element in `array` to generate the value to be averaged.
 * The iteratee is invoked with one argument: (value).
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @param {Function} [iteratee=_.identity] The iteratee invoked per element.
 * @returns {number} Returns the mean.
 * @example
 *
 * var objects = [{ 'n': 4 }, { 'n': 2 }, { 'n': 8 }, { 'n': 6 }];
 *
 * _.meanBy(objects, function(o) { return o.n; });
 * // => 5
 *
 * // The `_.property` iteratee shorthand.
 * _.meanBy(objects, 'n');
 * // => 5
 */
function meanBy(array, iteratee) {
  return baseMean(array, baseIteratee(iteratee, 2));
}

module.exports = meanBy;
";
        
        $__internal_6ad584c58e8b148e0929d7c5976bc3233fd1bb7a9c30abdd58b5f8c4a551dfcc->leave($__internal_6ad584c58e8b148e0929d7c5976bc3233fd1bb7a9c30abdd58b5f8c4a551dfcc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/meanBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIteratee = require('./_baseIteratee'),
    baseMean = require('./_baseMean');

/**
 * This method is like `_.mean` except that it accepts `iteratee` which is
 * invoked for each element in `array` to generate the value to be averaged.
 * The iteratee is invoked with one argument: (value).
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @param {Function} [iteratee=_.identity] The iteratee invoked per element.
 * @returns {number} Returns the mean.
 * @example
 *
 * var objects = [{ 'n': 4 }, { 'n': 2 }, { 'n': 8 }, { 'n': 6 }];
 *
 * _.meanBy(objects, function(o) { return o.n; });
 * // => 5
 *
 * // The `_.property` iteratee shorthand.
 * _.meanBy(objects, 'n');
 * // => 5
 */
function meanBy(array, iteratee) {
  return baseMean(array, baseIteratee(iteratee, 2));
}

module.exports = meanBy;
", "node_modules/lodash/meanBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/meanBy.js");
    }
}
