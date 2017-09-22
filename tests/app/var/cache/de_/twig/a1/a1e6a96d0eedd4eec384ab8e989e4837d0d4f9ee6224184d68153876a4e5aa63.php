<?php

/* node_modules/lodash/sortedLastIndexOf.js */
class __TwigTemplate_09990bcb82d0113c6d1f19a49b359f91cf91baa9274afd383bc7a059b1726728 extends Twig_Template
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
        $__internal_bbcbda5d355611d111ee70a6b7b48f107f7a6142d30574657e13c92b22150c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcbda5d355611d111ee70a6b7b48f107f7a6142d30574657e13c92b22150c4c->enter($__internal_bbcbda5d355611d111ee70a6b7b48f107f7a6142d30574657e13c92b22150c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sortedLastIndexOf.js"));

        // line 1
        echo "var baseSortedIndex = require('./_baseSortedIndex'),
    eq = require('./eq');

/**
 * This method is like `_.lastIndexOf` except that it performs a binary
 * search on a sorted `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @returns {number} Returns the index of the matched value, else `-1`.
 * @example
 *
 * _.sortedLastIndexOf([4, 5, 5, 5, 6], 5);
 * // => 3
 */
function sortedLastIndexOf(array, value) {
  var length = array == null ? 0 : array.length;
  if (length) {
    var index = baseSortedIndex(array, value, true) - 1;
    if (eq(array[index], value)) {
      return index;
    }
  }
  return -1;
}

module.exports = sortedLastIndexOf;
";
        
        $__internal_bbcbda5d355611d111ee70a6b7b48f107f7a6142d30574657e13c92b22150c4c->leave($__internal_bbcbda5d355611d111ee70a6b7b48f107f7a6142d30574657e13c92b22150c4c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sortedLastIndexOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSortedIndex = require('./_baseSortedIndex'),
    eq = require('./eq');

/**
 * This method is like `_.lastIndexOf` except that it performs a binary
 * search on a sorted `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @returns {number} Returns the index of the matched value, else `-1`.
 * @example
 *
 * _.sortedLastIndexOf([4, 5, 5, 5, 6], 5);
 * // => 3
 */
function sortedLastIndexOf(array, value) {
  var length = array == null ? 0 : array.length;
  if (length) {
    var index = baseSortedIndex(array, value, true) - 1;
    if (eq(array[index], value)) {
      return index;
    }
  }
  return -1;
}

module.exports = sortedLastIndexOf;
", "node_modules/lodash/sortedLastIndexOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sortedLastIndexOf.js");
    }
}
