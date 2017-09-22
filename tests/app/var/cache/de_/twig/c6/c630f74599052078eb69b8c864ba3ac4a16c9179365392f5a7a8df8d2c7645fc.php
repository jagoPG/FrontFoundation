<?php

/* node_modules/lodash/_assocIndexOf.js */
class __TwigTemplate_3ee77d4fdb0d17dd7c889465fc8ff8cdb34598af51162065dcf6fe9fdbdee831 extends Twig_Template
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
        $__internal_c7e9bffb9f631531cda8cd90845239eb70f7a82e4dbea9c37c7aae7cd40a2637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e9bffb9f631531cda8cd90845239eb70f7a82e4dbea9c37c7aae7cd40a2637->enter($__internal_c7e9bffb9f631531cda8cd90845239eb70f7a82e4dbea9c37c7aae7cd40a2637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_assocIndexOf.js"));

        // line 1
        echo "var eq = require('./eq');

/**
 * Gets the index at which the `key` is found in `array` of key-value pairs.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} key The key to search for.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function assocIndexOf(array, key) {
  var length = array.length;
  while (length--) {
    if (eq(array[length][0], key)) {
      return length;
    }
  }
  return -1;
}

module.exports = assocIndexOf;
";
        
        $__internal_c7e9bffb9f631531cda8cd90845239eb70f7a82e4dbea9c37c7aae7cd40a2637->leave($__internal_c7e9bffb9f631531cda8cd90845239eb70f7a82e4dbea9c37c7aae7cd40a2637_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_assocIndexOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var eq = require('./eq');

/**
 * Gets the index at which the `key` is found in `array` of key-value pairs.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} key The key to search for.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function assocIndexOf(array, key) {
  var length = array.length;
  while (length--) {
    if (eq(array[length][0], key)) {
      return length;
    }
  }
  return -1;
}

module.exports = assocIndexOf;
", "node_modules/lodash/_assocIndexOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_assocIndexOf.js");
    }
}
