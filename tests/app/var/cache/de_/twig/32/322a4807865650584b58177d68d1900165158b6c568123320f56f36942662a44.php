<?php

/* node_modules/lodash/_baseReduce.js */
class __TwigTemplate_b51126470fef845c4f0968c0f0b93b58dd3de88c409ffe55b7156c46cf9533e4 extends Twig_Template
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
        $__internal_edd29e6206f6bd3d23020751120359ac758470803cd67916e1306d14d0ed9773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd29e6206f6bd3d23020751120359ac758470803cd67916e1306d14d0ed9773->enter($__internal_edd29e6206f6bd3d23020751120359ac758470803cd67916e1306d14d0ed9773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseReduce.js"));

        // line 1
        echo "/**
 * The base implementation of `_.reduce` and `_.reduceRight`, without support
 * for iteratee shorthands, which iterates over `collection` using `eachFunc`.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {*} accumulator The initial value.
 * @param {boolean} initAccum Specify using the first or last element of
 *  `collection` as the initial value.
 * @param {Function} eachFunc The function to iterate over `collection`.
 * @returns {*} Returns the accumulated value.
 */
function baseReduce(collection, iteratee, accumulator, initAccum, eachFunc) {
  eachFunc(collection, function(value, index, collection) {
    accumulator = initAccum
      ? (initAccum = false, value)
      : iteratee(accumulator, value, index, collection);
  });
  return accumulator;
}

module.exports = baseReduce;
";
        
        $__internal_edd29e6206f6bd3d23020751120359ac758470803cd67916e1306d14d0ed9773->leave($__internal_edd29e6206f6bd3d23020751120359ac758470803cd67916e1306d14d0ed9773_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseReduce.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.reduce` and `_.reduceRight`, without support
 * for iteratee shorthands, which iterates over `collection` using `eachFunc`.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {*} accumulator The initial value.
 * @param {boolean} initAccum Specify using the first or last element of
 *  `collection` as the initial value.
 * @param {Function} eachFunc The function to iterate over `collection`.
 * @returns {*} Returns the accumulated value.
 */
function baseReduce(collection, iteratee, accumulator, initAccum, eachFunc) {
  eachFunc(collection, function(value, index, collection) {
    accumulator = initAccum
      ? (initAccum = false, value)
      : iteratee(accumulator, value, index, collection);
  });
  return accumulator;
}

module.exports = baseReduce;
", "node_modules/lodash/_baseReduce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseReduce.js");
    }
}
