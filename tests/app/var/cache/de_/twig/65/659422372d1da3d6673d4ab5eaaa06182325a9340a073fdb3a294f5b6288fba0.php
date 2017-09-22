<?php

/* node_modules/lodash/_arrayReduce.js */
class __TwigTemplate_14499564791c795a89e1bec4e47544a421b16d8da8250d30c198e6dd4c9ea716 extends Twig_Template
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
        $__internal_0da0f4f1cee8b0e03fa2098ad71360a0093403b492b501e4fd8a2eafa96dc0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da0f4f1cee8b0e03fa2098ad71360a0093403b492b501e4fd8a2eafa96dc0d1->enter($__internal_0da0f4f1cee8b0e03fa2098ad71360a0093403b492b501e4fd8a2eafa96dc0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayReduce.js"));

        // line 1
        echo "/**
 * A specialized version of `_.reduce` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {*} [accumulator] The initial value.
 * @param {boolean} [initAccum] Specify using the first element of `array` as
 *  the initial value.
 * @returns {*} Returns the accumulated value.
 */
function arrayReduce(array, iteratee, accumulator, initAccum) {
  var index = -1,
      length = array == null ? 0 : array.length;

  if (initAccum && length) {
    accumulator = array[++index];
  }
  while (++index < length) {
    accumulator = iteratee(accumulator, array[index], index, array);
  }
  return accumulator;
}

module.exports = arrayReduce;
";
        
        $__internal_0da0f4f1cee8b0e03fa2098ad71360a0093403b492b501e4fd8a2eafa96dc0d1->leave($__internal_0da0f4f1cee8b0e03fa2098ad71360a0093403b492b501e4fd8a2eafa96dc0d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayReduce.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.reduce` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {*} [accumulator] The initial value.
 * @param {boolean} [initAccum] Specify using the first element of `array` as
 *  the initial value.
 * @returns {*} Returns the accumulated value.
 */
function arrayReduce(array, iteratee, accumulator, initAccum) {
  var index = -1,
      length = array == null ? 0 : array.length;

  if (initAccum && length) {
    accumulator = array[++index];
  }
  while (++index < length) {
    accumulator = iteratee(accumulator, array[index], index, array);
  }
  return accumulator;
}

module.exports = arrayReduce;
", "node_modules/lodash/_arrayReduce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayReduce.js");
    }
}
