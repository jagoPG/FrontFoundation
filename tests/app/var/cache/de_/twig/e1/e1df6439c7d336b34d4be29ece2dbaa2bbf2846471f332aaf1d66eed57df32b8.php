<?php

/* node_modules/lodash/_baseIndexOfWith.js */
class __TwigTemplate_1acbf9c99f9af7e8a454e97c7a20fc3b0174058de88515231127c7149663b75b extends Twig_Template
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
        $__internal_fe724aec33dd2c265c00b3f275fb7b5a35285ce32fcb2fc8c7fa6ed36c30296e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe724aec33dd2c265c00b3f275fb7b5a35285ce32fcb2fc8c7fa6ed36c30296e->enter($__internal_fe724aec33dd2c265c00b3f275fb7b5a35285ce32fcb2fc8c7fa6ed36c30296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIndexOfWith.js"));

        // line 1
        echo "/**
 * This function is like `baseIndexOf` except that it accepts a comparator.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @param {number} fromIndex The index to search from.
 * @param {Function} comparator The comparator invoked per element.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function baseIndexOfWith(array, value, fromIndex, comparator) {
  var index = fromIndex - 1,
      length = array.length;

  while (++index < length) {
    if (comparator(array[index], value)) {
      return index;
    }
  }
  return -1;
}

module.exports = baseIndexOfWith;
";
        
        $__internal_fe724aec33dd2c265c00b3f275fb7b5a35285ce32fcb2fc8c7fa6ed36c30296e->leave($__internal_fe724aec33dd2c265c00b3f275fb7b5a35285ce32fcb2fc8c7fa6ed36c30296e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIndexOfWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * This function is like `baseIndexOf` except that it accepts a comparator.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @param {number} fromIndex The index to search from.
 * @param {Function} comparator The comparator invoked per element.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function baseIndexOfWith(array, value, fromIndex, comparator) {
  var index = fromIndex - 1,
      length = array.length;

  while (++index < length) {
    if (comparator(array[index], value)) {
      return index;
    }
  }
  return -1;
}

module.exports = baseIndexOfWith;
", "node_modules/lodash/_baseIndexOfWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIndexOfWith.js");
    }
}
