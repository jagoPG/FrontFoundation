<?php

/* node_modules/lodash/_createBaseEach.js */
class __TwigTemplate_d82333191d0dd357cd0ed9a8388506d5206fb6b43b297054e944619b17859211 extends Twig_Template
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
        $__internal_6b49335c7aa9f2a6aef70f97eea678e65c1fc5b7e2d93e0f298d0c91d8dcb244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b49335c7aa9f2a6aef70f97eea678e65c1fc5b7e2d93e0f298d0c91d8dcb244->enter($__internal_6b49335c7aa9f2a6aef70f97eea678e65c1fc5b7e2d93e0f298d0c91d8dcb244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createBaseEach.js"));

        // line 1
        echo "var isArrayLike = require('./isArrayLike');

/**
 * Creates a `baseEach` or `baseEachRight` function.
 *
 * @private
 * @param {Function} eachFunc The function to iterate over a collection.
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Function} Returns the new base function.
 */
function createBaseEach(eachFunc, fromRight) {
  return function(collection, iteratee) {
    if (collection == null) {
      return collection;
    }
    if (!isArrayLike(collection)) {
      return eachFunc(collection, iteratee);
    }
    var length = collection.length,
        index = fromRight ? length : -1,
        iterable = Object(collection);

    while ((fromRight ? index-- : ++index < length)) {
      if (iteratee(iterable[index], index, iterable) === false) {
        break;
      }
    }
    return collection;
  };
}

module.exports = createBaseEach;
";
        
        $__internal_6b49335c7aa9f2a6aef70f97eea678e65c1fc5b7e2d93e0f298d0c91d8dcb244->leave($__internal_6b49335c7aa9f2a6aef70f97eea678e65c1fc5b7e2d93e0f298d0c91d8dcb244_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createBaseEach.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isArrayLike = require('./isArrayLike');

/**
 * Creates a `baseEach` or `baseEachRight` function.
 *
 * @private
 * @param {Function} eachFunc The function to iterate over a collection.
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {Function} Returns the new base function.
 */
function createBaseEach(eachFunc, fromRight) {
  return function(collection, iteratee) {
    if (collection == null) {
      return collection;
    }
    if (!isArrayLike(collection)) {
      return eachFunc(collection, iteratee);
    }
    var length = collection.length,
        index = fromRight ? length : -1,
        iterable = Object(collection);

    while ((fromRight ? index-- : ++index < length)) {
      if (iteratee(iterable[index], index, iterable) === false) {
        break;
      }
    }
    return collection;
  };
}

module.exports = createBaseEach;
", "node_modules/lodash/_createBaseEach.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createBaseEach.js");
    }
}
