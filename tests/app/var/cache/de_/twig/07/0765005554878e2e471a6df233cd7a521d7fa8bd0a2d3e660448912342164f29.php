<?php

/* node_modules/lodash/_baseNth.js */
class __TwigTemplate_328596688aec9bee343197fb91a04570a454db4bd244c8da242f395d6f8f1bdd extends Twig_Template
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
        $__internal_12973f7eec4cd9376541e4091087423b54a7aaa223b63b43a9efcc49ff30c03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12973f7eec4cd9376541e4091087423b54a7aaa223b63b43a9efcc49ff30c03b->enter($__internal_12973f7eec4cd9376541e4091087423b54a7aaa223b63b43a9efcc49ff30c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseNth.js"));

        // line 1
        echo "var isIndex = require('./_isIndex');

/**
 * The base implementation of `_.nth` which doesn't coerce arguments.
 *
 * @private
 * @param {Array} array The array to query.
 * @param {number} n The index of the element to return.
 * @returns {*} Returns the nth element of `array`.
 */
function baseNth(array, n) {
  var length = array.length;
  if (!length) {
    return;
  }
  n += n < 0 ? length : 0;
  return isIndex(n, length) ? array[n] : undefined;
}

module.exports = baseNth;
";
        
        $__internal_12973f7eec4cd9376541e4091087423b54a7aaa223b63b43a9efcc49ff30c03b->leave($__internal_12973f7eec4cd9376541e4091087423b54a7aaa223b63b43a9efcc49ff30c03b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseNth.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isIndex = require('./_isIndex');

/**
 * The base implementation of `_.nth` which doesn't coerce arguments.
 *
 * @private
 * @param {Array} array The array to query.
 * @param {number} n The index of the element to return.
 * @returns {*} Returns the nth element of `array`.
 */
function baseNth(array, n) {
  var length = array.length;
  if (!length) {
    return;
  }
  n += n < 0 ? length : 0;
  return isIndex(n, length) ? array[n] : undefined;
}

module.exports = baseNth;
", "node_modules/lodash/_baseNth.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseNth.js");
    }
}
