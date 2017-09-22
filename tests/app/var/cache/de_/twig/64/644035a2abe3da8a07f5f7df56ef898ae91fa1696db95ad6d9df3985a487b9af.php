<?php

/* node_modules/lodash/_baseSortBy.js */
class __TwigTemplate_bdf7cee17aaa1e9edfb9af0148e66f02a9ca14cd841f726f188f16a5fdb08911 extends Twig_Template
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
        $__internal_80f11aae9fde9189a9f8069e539a507bab378cf85837436ebb9fa8641aa37b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f11aae9fde9189a9f8069e539a507bab378cf85837436ebb9fa8641aa37b05->enter($__internal_80f11aae9fde9189a9f8069e539a507bab378cf85837436ebb9fa8641aa37b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSortBy.js"));

        // line 1
        echo "/**
 * The base implementation of `_.sortBy` which uses `comparer` to define the
 * sort order of `array` and replaces criteria objects with their corresponding
 * values.
 *
 * @private
 * @param {Array} array The array to sort.
 * @param {Function} comparer The function to define sort order.
 * @returns {Array} Returns `array`.
 */
function baseSortBy(array, comparer) {
  var length = array.length;

  array.sort(comparer);
  while (length--) {
    array[length] = array[length].value;
  }
  return array;
}

module.exports = baseSortBy;
";
        
        $__internal_80f11aae9fde9189a9f8069e539a507bab378cf85837436ebb9fa8641aa37b05->leave($__internal_80f11aae9fde9189a9f8069e539a507bab378cf85837436ebb9fa8641aa37b05_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSortBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.sortBy` which uses `comparer` to define the
 * sort order of `array` and replaces criteria objects with their corresponding
 * values.
 *
 * @private
 * @param {Array} array The array to sort.
 * @param {Function} comparer The function to define sort order.
 * @returns {Array} Returns `array`.
 */
function baseSortBy(array, comparer) {
  var length = array.length;

  array.sort(comparer);
  while (length--) {
    array[length] = array[length].value;
  }
  return array;
}

module.exports = baseSortBy;
", "node_modules/lodash/_baseSortBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSortBy.js");
    }
}
