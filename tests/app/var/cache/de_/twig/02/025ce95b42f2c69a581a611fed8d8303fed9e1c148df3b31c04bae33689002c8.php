<?php

/* node_modules/lodash/_basePullAt.js */
class __TwigTemplate_e8bf9420abe640d5826f4c81f90757aa46decd7b5a441b1d347dd75c37d3194d extends Twig_Template
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
        $__internal_9d2c25f35dce5d080110b1ff34df37984bd14a671ff2f176ff496172ae086775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2c25f35dce5d080110b1ff34df37984bd14a671ff2f176ff496172ae086775->enter($__internal_9d2c25f35dce5d080110b1ff34df37984bd14a671ff2f176ff496172ae086775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_basePullAt.js"));

        // line 1
        echo "var baseUnset = require('./_baseUnset'),
    isIndex = require('./_isIndex');

/** Used for built-in method references. */
var arrayProto = Array.prototype;

/** Built-in value references. */
var splice = arrayProto.splice;

/**
 * The base implementation of `_.pullAt` without support for individual
 * indexes or capturing the removed elements.
 *
 * @private
 * @param {Array} array The array to modify.
 * @param {number[]} indexes The indexes of elements to remove.
 * @returns {Array} Returns `array`.
 */
function basePullAt(array, indexes) {
  var length = array ? indexes.length : 0,
      lastIndex = length - 1;

  while (length--) {
    var index = indexes[length];
    if (length == lastIndex || index !== previous) {
      var previous = index;
      if (isIndex(index)) {
        splice.call(array, index, 1);
      } else {
        baseUnset(array, index);
      }
    }
  }
  return array;
}

module.exports = basePullAt;
";
        
        $__internal_9d2c25f35dce5d080110b1ff34df37984bd14a671ff2f176ff496172ae086775->leave($__internal_9d2c25f35dce5d080110b1ff34df37984bd14a671ff2f176ff496172ae086775_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_basePullAt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseUnset = require('./_baseUnset'),
    isIndex = require('./_isIndex');

/** Used for built-in method references. */
var arrayProto = Array.prototype;

/** Built-in value references. */
var splice = arrayProto.splice;

/**
 * The base implementation of `_.pullAt` without support for individual
 * indexes or capturing the removed elements.
 *
 * @private
 * @param {Array} array The array to modify.
 * @param {number[]} indexes The indexes of elements to remove.
 * @returns {Array} Returns `array`.
 */
function basePullAt(array, indexes) {
  var length = array ? indexes.length : 0,
      lastIndex = length - 1;

  while (length--) {
    var index = indexes[length];
    if (length == lastIndex || index !== previous) {
      var previous = index;
      if (isIndex(index)) {
        splice.call(array, index, 1);
      } else {
        baseUnset(array, index);
      }
    }
  }
  return array;
}

module.exports = basePullAt;
", "node_modules/lodash/_basePullAt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_basePullAt.js");
    }
}
