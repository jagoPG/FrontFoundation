<?php

/* node_modules/lodash/plant.js */
class __TwigTemplate_988d78e8908ab8e1eb3c4344a53bb2cab1381c0109df762082d7afdb11965ceb extends Twig_Template
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
        $__internal_c3af76b96ffb5a76a4f34f84ad8daf8ce99854e0437caa66578f083ecea6d93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3af76b96ffb5a76a4f34f84ad8daf8ce99854e0437caa66578f083ecea6d93f->enter($__internal_c3af76b96ffb5a76a4f34f84ad8daf8ce99854e0437caa66578f083ecea6d93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/plant.js"));

        // line 1
        echo "var baseLodash = require('./_baseLodash'),
    wrapperClone = require('./_wrapperClone');

/**
 * Creates a clone of the chain sequence planting `value` as the wrapped value.
 *
 * @name plant
 * @memberOf _
 * @since 3.2.0
 * @category Seq
 * @param {*} value The value to plant.
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * function square(n) {
 *   return n * n;
 * }
 *
 * var wrapped = _([1, 2]).map(square);
 * var other = wrapped.plant([3, 4]);
 *
 * other.value();
 * // => [9, 16]
 *
 * wrapped.value();
 * // => [1, 4]
 */
function wrapperPlant(value) {
  var result,
      parent = this;

  while (parent instanceof baseLodash) {
    var clone = wrapperClone(parent);
    clone.__index__ = 0;
    clone.__values__ = undefined;
    if (result) {
      previous.__wrapped__ = clone;
    } else {
      result = clone;
    }
    var previous = clone;
    parent = parent.__wrapped__;
  }
  previous.__wrapped__ = value;
  return result;
}

module.exports = wrapperPlant;
";
        
        $__internal_c3af76b96ffb5a76a4f34f84ad8daf8ce99854e0437caa66578f083ecea6d93f->leave($__internal_c3af76b96ffb5a76a4f34f84ad8daf8ce99854e0437caa66578f083ecea6d93f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/plant.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseLodash = require('./_baseLodash'),
    wrapperClone = require('./_wrapperClone');

/**
 * Creates a clone of the chain sequence planting `value` as the wrapped value.
 *
 * @name plant
 * @memberOf _
 * @since 3.2.0
 * @category Seq
 * @param {*} value The value to plant.
 * @returns {Object} Returns the new `lodash` wrapper instance.
 * @example
 *
 * function square(n) {
 *   return n * n;
 * }
 *
 * var wrapped = _([1, 2]).map(square);
 * var other = wrapped.plant([3, 4]);
 *
 * other.value();
 * // => [9, 16]
 *
 * wrapped.value();
 * // => [1, 4]
 */
function wrapperPlant(value) {
  var result,
      parent = this;

  while (parent instanceof baseLodash) {
    var clone = wrapperClone(parent);
    clone.__index__ = 0;
    clone.__values__ = undefined;
    if (result) {
      previous.__wrapped__ = clone;
    } else {
      result = clone;
    }
    var previous = clone;
    parent = parent.__wrapped__;
  }
  previous.__wrapped__ = value;
  return result;
}

module.exports = wrapperPlant;
", "node_modules/lodash/plant.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/plant.js");
    }
}
