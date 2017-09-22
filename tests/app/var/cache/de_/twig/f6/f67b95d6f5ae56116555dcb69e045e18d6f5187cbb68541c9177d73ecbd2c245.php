<?php

/* node_modules/lodash/_baseWrapperValue.js */
class __TwigTemplate_a6293fb3d18c1f77a00bebad2515ee060881c8ded83175401f55d3f803c8688f extends Twig_Template
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
        $__internal_b90e05064adbe4fd77833ffb466a734b2d4a49457e3a8135be7feae828afa2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90e05064adbe4fd77833ffb466a734b2d4a49457e3a8135be7feae828afa2e4->enter($__internal_b90e05064adbe4fd77833ffb466a734b2d4a49457e3a8135be7feae828afa2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseWrapperValue.js"));

        // line 1
        echo "var LazyWrapper = require('./_LazyWrapper'),
    arrayPush = require('./_arrayPush'),
    arrayReduce = require('./_arrayReduce');

/**
 * The base implementation of `wrapperValue` which returns the result of
 * performing a sequence of actions on the unwrapped `value`, where each
 * successive action is supplied the return value of the previous.
 *
 * @private
 * @param {*} value The unwrapped value.
 * @param {Array} actions Actions to perform to resolve the unwrapped value.
 * @returns {*} Returns the resolved value.
 */
function baseWrapperValue(value, actions) {
  var result = value;
  if (result instanceof LazyWrapper) {
    result = result.value();
  }
  return arrayReduce(actions, function(result, action) {
    return action.func.apply(action.thisArg, arrayPush([result], action.args));
  }, result);
}

module.exports = baseWrapperValue;
";
        
        $__internal_b90e05064adbe4fd77833ffb466a734b2d4a49457e3a8135be7feae828afa2e4->leave($__internal_b90e05064adbe4fd77833ffb466a734b2d4a49457e3a8135be7feae828afa2e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseWrapperValue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var LazyWrapper = require('./_LazyWrapper'),
    arrayPush = require('./_arrayPush'),
    arrayReduce = require('./_arrayReduce');

/**
 * The base implementation of `wrapperValue` which returns the result of
 * performing a sequence of actions on the unwrapped `value`, where each
 * successive action is supplied the return value of the previous.
 *
 * @private
 * @param {*} value The unwrapped value.
 * @param {Array} actions Actions to perform to resolve the unwrapped value.
 * @returns {*} Returns the resolved value.
 */
function baseWrapperValue(value, actions) {
  var result = value;
  if (result instanceof LazyWrapper) {
    result = result.value();
  }
  return arrayReduce(actions, function(result, action) {
    return action.func.apply(action.thisArg, arrayPush([result], action.args));
  }, result);
}

module.exports = baseWrapperValue;
", "node_modules/lodash/_baseWrapperValue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseWrapperValue.js");
    }
}
