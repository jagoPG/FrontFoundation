<?php

/* node_modules/lodash/wrapperReverse.js */
class __TwigTemplate_99a116ca9ea3445d46220d1bc103d63d95a3564678187e5909cd26027dc4c0dc extends Twig_Template
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
        $__internal_9600e459cb91b48f4361e9d7abdcad7a839abcba4c54b5df6a94868d03010453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9600e459cb91b48f4361e9d7abdcad7a839abcba4c54b5df6a94868d03010453->enter($__internal_9600e459cb91b48f4361e9d7abdcad7a839abcba4c54b5df6a94868d03010453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/wrapperReverse.js"));

        // line 1
        echo "var LazyWrapper = require('./_LazyWrapper'),
    LodashWrapper = require('./_LodashWrapper'),
    reverse = require('./reverse'),
    thru = require('./thru');

/**
 * This method is the wrapper version of `_.reverse`.
 *
 * **Note:** This method mutates the wrapped array.
 *
 * @name reverse
 * @memberOf _
 * @since 0.1.0
 * @category Seq
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var array = [1, 2, 3];
 *
 * _(array).reverse().value()
 * // => [3, 2, 1]
 *
 * console.log(array);
 * // => [3, 2, 1]
 */
function wrapperReverse() {
  var value = this.__wrapped__;
  if (value instanceof LazyWrapper) {
    var wrapped = value;
    if (this.__actions__.length) {
      wrapped = new LazyWrapper(this);
    }
    wrapped = wrapped.reverse();
    wrapped.__actions__.push({
      'func': thru,
      'args': [reverse],
      'thisArg': undefined
    });
    return new LodashWrapper(wrapped, this.__chain__);
  }
  return this.thru(reverse);
}

module.exports = wrapperReverse;
";
        
        $__internal_9600e459cb91b48f4361e9d7abdcad7a839abcba4c54b5df6a94868d03010453->leave($__internal_9600e459cb91b48f4361e9d7abdcad7a839abcba4c54b5df6a94868d03010453_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/wrapperReverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var LazyWrapper = require('./_LazyWrapper'),
    LodashWrapper = require('./_LodashWrapper'),
    reverse = require('./reverse'),
    thru = require('./thru');

/**
 * This method is the wrapper version of `_.reverse`.
 *
 * **Note:** This method mutates the wrapped array.
 *
 * @name reverse
 * @memberOf _
 * @since 0.1.0
 * @category Seq
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * var array = [1, 2, 3];
 *
 * _(array).reverse().value()
 * // => [3, 2, 1]
 *
 * console.log(array);
 * // => [3, 2, 1]
 */
function wrapperReverse() {
  var value = this.__wrapped__;
  if (value instanceof LazyWrapper) {
    var wrapped = value;
    if (this.__actions__.length) {
      wrapped = new LazyWrapper(this);
    }
    wrapped = wrapped.reverse();
    wrapped.__actions__.push({
      'func': thru,
      'args': [reverse],
      'thisArg': undefined
    });
    return new LodashWrapper(wrapped, this.__chain__);
  }
  return this.thru(reverse);
}

module.exports = wrapperReverse;
", "node_modules/lodash/wrapperReverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/wrapperReverse.js");
    }
}
