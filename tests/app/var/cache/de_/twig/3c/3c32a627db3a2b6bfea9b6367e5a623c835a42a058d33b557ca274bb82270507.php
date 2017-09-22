<?php

/* node_modules/lodash/_baseSlice.js */
class __TwigTemplate_642df42ce738f3db4031bfec05e8b15469a25f2a2974fc843f4bff799ddbefe6 extends Twig_Template
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
        $__internal_640d0f62a878f7b155b1ac3faf9c6dc99ab37ee3c79f62d13643271ae60ce93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640d0f62a878f7b155b1ac3faf9c6dc99ab37ee3c79f62d13643271ae60ce93c->enter($__internal_640d0f62a878f7b155b1ac3faf9c6dc99ab37ee3c79f62d13643271ae60ce93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSlice.js"));

        // line 1
        echo "/**
 * The base implementation of `_.slice` without an iteratee call guard.
 *
 * @private
 * @param {Array} array The array to slice.
 * @param {number} [start=0] The start position.
 * @param {number} [end=array.length] The end position.
 * @returns {Array} Returns the slice of `array`.
 */
function baseSlice(array, start, end) {
  var index = -1,
      length = array.length;

  if (start < 0) {
    start = -start > length ? 0 : (length + start);
  }
  end = end > length ? length : end;
  if (end < 0) {
    end += length;
  }
  length = start > end ? 0 : ((end - start) >>> 0);
  start >>>= 0;

  var result = Array(length);
  while (++index < length) {
    result[index] = array[index + start];
  }
  return result;
}

module.exports = baseSlice;
";
        
        $__internal_640d0f62a878f7b155b1ac3faf9c6dc99ab37ee3c79f62d13643271ae60ce93c->leave($__internal_640d0f62a878f7b155b1ac3faf9c6dc99ab37ee3c79f62d13643271ae60ce93c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSlice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.slice` without an iteratee call guard.
 *
 * @private
 * @param {Array} array The array to slice.
 * @param {number} [start=0] The start position.
 * @param {number} [end=array.length] The end position.
 * @returns {Array} Returns the slice of `array`.
 */
function baseSlice(array, start, end) {
  var index = -1,
      length = array.length;

  if (start < 0) {
    start = -start > length ? 0 : (length + start);
  }
  end = end > length ? length : end;
  if (end < 0) {
    end += length;
  }
  length = start > end ? 0 : ((end - start) >>> 0);
  start >>>= 0;

  var result = Array(length);
  while (++index < length) {
    result[index] = array[index + start];
  }
  return result;
}

module.exports = baseSlice;
", "node_modules/lodash/_baseSlice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSlice.js");
    }
}
