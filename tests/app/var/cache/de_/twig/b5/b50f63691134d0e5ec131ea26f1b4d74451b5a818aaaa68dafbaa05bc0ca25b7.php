<?php

/* node_modules/lodash/_arrayReduceRight.js */
class __TwigTemplate_c27dea9d4b06b2a1a538207ea736528291fb94b8ac478b989dcaef41ea843993 extends Twig_Template
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
        $__internal_e7a3536d2299ac9371edf96244eac3ebac60231b19e41b3046baf69c51d7e3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a3536d2299ac9371edf96244eac3ebac60231b19e41b3046baf69c51d7e3f2->enter($__internal_e7a3536d2299ac9371edf96244eac3ebac60231b19e41b3046baf69c51d7e3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayReduceRight.js"));

        // line 1
        echo "/**
 * A specialized version of `_.reduceRight` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {*} [accumulator] The initial value.
 * @param {boolean} [initAccum] Specify using the last element of `array` as
 *  the initial value.
 * @returns {*} Returns the accumulated value.
 */
function arrayReduceRight(array, iteratee, accumulator, initAccum) {
  var length = array == null ? 0 : array.length;
  if (initAccum && length) {
    accumulator = array[--length];
  }
  while (length--) {
    accumulator = iteratee(accumulator, array[length], length, array);
  }
  return accumulator;
}

module.exports = arrayReduceRight;
";
        
        $__internal_e7a3536d2299ac9371edf96244eac3ebac60231b19e41b3046baf69c51d7e3f2->leave($__internal_e7a3536d2299ac9371edf96244eac3ebac60231b19e41b3046baf69c51d7e3f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayReduceRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.reduceRight` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {*} [accumulator] The initial value.
 * @param {boolean} [initAccum] Specify using the last element of `array` as
 *  the initial value.
 * @returns {*} Returns the accumulated value.
 */
function arrayReduceRight(array, iteratee, accumulator, initAccum) {
  var length = array == null ? 0 : array.length;
  if (initAccum && length) {
    accumulator = array[--length];
  }
  while (length--) {
    accumulator = iteratee(accumulator, array[length], length, array);
  }
  return accumulator;
}

module.exports = arrayReduceRight;
", "node_modules/lodash/_arrayReduceRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayReduceRight.js");
    }
}
