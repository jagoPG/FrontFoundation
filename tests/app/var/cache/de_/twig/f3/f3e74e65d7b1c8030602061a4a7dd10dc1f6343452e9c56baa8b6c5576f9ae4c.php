<?php

/* node_modules/lodash/_baseRange.js */
class __TwigTemplate_f322eb222d5458e71bd3ba0e084ad5eb247e57e403b2529d92bc52e9e99b3d25 extends Twig_Template
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
        $__internal_a709f736794a7de79af58a7659a0b0d01064be484b6de4b70f8f2f66ed8a8988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a709f736794a7de79af58a7659a0b0d01064be484b6de4b70f8f2f66ed8a8988->enter($__internal_a709f736794a7de79af58a7659a0b0d01064be484b6de4b70f8f2f66ed8a8988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseRange.js"));

        // line 1
        echo "/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeCeil = Math.ceil,
    nativeMax = Math.max;

/**
 * The base implementation of `_.range` and `_.rangeRight` which doesn't
 * coerce arguments.
 *
 * @private
 * @param {number} start The start of the range.
 * @param {number} end The end of the range.
 * @param {number} step The value to increment or decrement by.
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Array} Returns the range of numbers.
 */
function baseRange(start, end, step, fromRight) {
  var index = -1,
      length = nativeMax(nativeCeil((end - start) / (step || 1)), 0),
      result = Array(length);

  while (length--) {
    result[fromRight ? length : ++index] = start;
    start += step;
  }
  return result;
}

module.exports = baseRange;
";
        
        $__internal_a709f736794a7de79af58a7659a0b0d01064be484b6de4b70f8f2f66ed8a8988->leave($__internal_a709f736794a7de79af58a7659a0b0d01064be484b6de4b70f8f2f66ed8a8988_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseRange.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeCeil = Math.ceil,
    nativeMax = Math.max;

/**
 * The base implementation of `_.range` and `_.rangeRight` which doesn't
 * coerce arguments.
 *
 * @private
 * @param {number} start The start of the range.
 * @param {number} end The end of the range.
 * @param {number} step The value to increment or decrement by.
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Array} Returns the range of numbers.
 */
function baseRange(start, end, step, fromRight) {
  var index = -1,
      length = nativeMax(nativeCeil((end - start) / (step || 1)), 0),
      result = Array(length);

  while (length--) {
    result[fromRight ? length : ++index] = start;
    start += step;
  }
  return result;
}

module.exports = baseRange;
", "node_modules/lodash/_baseRange.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseRange.js");
    }
}
