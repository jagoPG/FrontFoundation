<?php

/* node_modules/lodash/_reorder.js */
class __TwigTemplate_85088fd7f2d1499d25ca9c39f1f761fcf5bbeb762ed5975183480132a2a000ce extends Twig_Template
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
        $__internal_05019c1e27089e89e904eadab0758c21e5d3017b0a6b3c179664a6b2486774fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05019c1e27089e89e904eadab0758c21e5d3017b0a6b3c179664a6b2486774fb->enter($__internal_05019c1e27089e89e904eadab0758c21e5d3017b0a6b3c179664a6b2486774fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_reorder.js"));

        // line 1
        echo "var copyArray = require('./_copyArray'),
    isIndex = require('./_isIndex');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMin = Math.min;

/**
 * Reorder `array` according to the specified indexes where the element at
 * the first index is assigned as the first element, the element at
 * the second index is assigned as the second element, and so on.
 *
 * @private
 * @param {Array} array The array to reorder.
 * @param {Array} indexes The arranged array indexes.
 * @returns {Array} Returns `array`.
 */
function reorder(array, indexes) {
  var arrLength = array.length,
      length = nativeMin(indexes.length, arrLength),
      oldArray = copyArray(array);

  while (length--) {
    var index = indexes[length];
    array[length] = isIndex(index, arrLength) ? oldArray[index] : undefined;
  }
  return array;
}

module.exports = reorder;
";
        
        $__internal_05019c1e27089e89e904eadab0758c21e5d3017b0a6b3c179664a6b2486774fb->leave($__internal_05019c1e27089e89e904eadab0758c21e5d3017b0a6b3c179664a6b2486774fb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_reorder.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var copyArray = require('./_copyArray'),
    isIndex = require('./_isIndex');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMin = Math.min;

/**
 * Reorder `array` according to the specified indexes where the element at
 * the first index is assigned as the first element, the element at
 * the second index is assigned as the second element, and so on.
 *
 * @private
 * @param {Array} array The array to reorder.
 * @param {Array} indexes The arranged array indexes.
 * @returns {Array} Returns `array`.
 */
function reorder(array, indexes) {
  var arrLength = array.length,
      length = nativeMin(indexes.length, arrLength),
      oldArray = copyArray(array);

  while (length--) {
    var index = indexes[length];
    array[length] = isIndex(index, arrLength) ? oldArray[index] : undefined;
  }
  return array;
}

module.exports = reorder;
", "node_modules/lodash/_reorder.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_reorder.js");
    }
}
