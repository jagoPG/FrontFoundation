<?php

/* node_modules/lodash/_isLaziable.js */
class __TwigTemplate_96a07e02ad16c2c0c27e54c62163944e5ccff117d99efcecca1ff94cdfe67bbd extends Twig_Template
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
        $__internal_bf6d47f48936e81a2af2efc4df96fa9eb5ff25b456c559781d3bd8f03f988381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6d47f48936e81a2af2efc4df96fa9eb5ff25b456c559781d3bd8f03f988381->enter($__internal_bf6d47f48936e81a2af2efc4df96fa9eb5ff25b456c559781d3bd8f03f988381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isLaziable.js"));

        // line 1
        echo "var LazyWrapper = require('./_LazyWrapper'),
    getData = require('./_getData'),
    getFuncName = require('./_getFuncName'),
    lodash = require('./wrapperLodash');

/**
 * Checks if `func` has a lazy counterpart.
 *
 * @private
 * @param {Function} func The function to check.
 * @returns {boolean} Returns `true` if `func` has a lazy counterpart,
 *  else `false`.
 */
function isLaziable(func) {
  var funcName = getFuncName(func),
      other = lodash[funcName];

  if (typeof other != 'function' || !(funcName in LazyWrapper.prototype)) {
    return false;
  }
  if (func === other) {
    return true;
  }
  var data = getData(other);
  return !!data && func === data[0];
}

module.exports = isLaziable;
";
        
        $__internal_bf6d47f48936e81a2af2efc4df96fa9eb5ff25b456c559781d3bd8f03f988381->leave($__internal_bf6d47f48936e81a2af2efc4df96fa9eb5ff25b456c559781d3bd8f03f988381_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isLaziable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var LazyWrapper = require('./_LazyWrapper'),
    getData = require('./_getData'),
    getFuncName = require('./_getFuncName'),
    lodash = require('./wrapperLodash');

/**
 * Checks if `func` has a lazy counterpart.
 *
 * @private
 * @param {Function} func The function to check.
 * @returns {boolean} Returns `true` if `func` has a lazy counterpart,
 *  else `false`.
 */
function isLaziable(func) {
  var funcName = getFuncName(func),
      other = lodash[funcName];

  if (typeof other != 'function' || !(funcName in LazyWrapper.prototype)) {
    return false;
  }
  if (func === other) {
    return true;
  }
  var data = getData(other);
  return !!data && func === data[0];
}

module.exports = isLaziable;
", "node_modules/lodash/_isLaziable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isLaziable.js");
    }
}
