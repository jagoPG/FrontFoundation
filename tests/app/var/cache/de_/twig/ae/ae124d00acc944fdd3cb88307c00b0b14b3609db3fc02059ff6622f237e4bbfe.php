<?php

/* node_modules/lodash/isFunction.js */
class __TwigTemplate_cb93ec0b60fcec2911fa6a4483fb0dc7bde639f4a6139ec4ed081650a8c34c60 extends Twig_Template
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
        $__internal_81a1906210bd1eb1e600974ada70ceb67f87ea2891d37ff2c12118b9e6a8b81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a1906210bd1eb1e600974ada70ceb67f87ea2891d37ff2c12118b9e6a8b81e->enter($__internal_81a1906210bd1eb1e600974ada70ceb67f87ea2891d37ff2c12118b9e6a8b81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isFunction.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObject = require('./isObject');

/** `Object#toString` result references. */
var asyncTag = '[object AsyncFunction]',
    funcTag = '[object Function]',
    genTag = '[object GeneratorFunction]',
    proxyTag = '[object Proxy]';

/**
 * Checks if `value` is classified as a `Function` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a function, else `false`.
 * @example
 *
 * _.isFunction(_);
 * // => true
 *
 * _.isFunction(/abc/);
 * // => false
 */
function isFunction(value) {
  if (!isObject(value)) {
    return false;
  }
  // The use of `Object#toString` avoids issues with the `typeof` operator
  // in Safari 9 which returns 'object' for typed arrays and other constructors.
  var tag = baseGetTag(value);
  return tag == funcTag || tag == genTag || tag == asyncTag || tag == proxyTag;
}

module.exports = isFunction;
";
        
        $__internal_81a1906210bd1eb1e600974ada70ceb67f87ea2891d37ff2c12118b9e6a8b81e->leave($__internal_81a1906210bd1eb1e600974ada70ceb67f87ea2891d37ff2c12118b9e6a8b81e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isFunction.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGetTag = require('./_baseGetTag'),
    isObject = require('./isObject');

/** `Object#toString` result references. */
var asyncTag = '[object AsyncFunction]',
    funcTag = '[object Function]',
    genTag = '[object GeneratorFunction]',
    proxyTag = '[object Proxy]';

/**
 * Checks if `value` is classified as a `Function` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a function, else `false`.
 * @example
 *
 * _.isFunction(_);
 * // => true
 *
 * _.isFunction(/abc/);
 * // => false
 */
function isFunction(value) {
  if (!isObject(value)) {
    return false;
  }
  // The use of `Object#toString` avoids issues with the `typeof` operator
  // in Safari 9 which returns 'object' for typed arrays and other constructors.
  var tag = baseGetTag(value);
  return tag == funcTag || tag == genTag || tag == asyncTag || tag == proxyTag;
}

module.exports = isFunction;
", "node_modules/lodash/isFunction.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isFunction.js");
    }
}
