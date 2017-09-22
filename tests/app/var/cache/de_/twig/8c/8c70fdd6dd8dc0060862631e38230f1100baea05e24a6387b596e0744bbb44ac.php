<?php

/* node_modules/lodash/_memoizeCapped.js */
class __TwigTemplate_21d9cd2a6ed2c035bac9fa83bc915e411894565c2a70c6a4abfad436a18fd096 extends Twig_Template
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
        $__internal_1fd0ddf359d8ed417afd59bd65308b5359718d53d19579c3d6ec7e91b315cfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd0ddf359d8ed417afd59bd65308b5359718d53d19579c3d6ec7e91b315cfae->enter($__internal_1fd0ddf359d8ed417afd59bd65308b5359718d53d19579c3d6ec7e91b315cfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_memoizeCapped.js"));

        // line 1
        echo "var memoize = require('./memoize');

/** Used as the maximum memoize cache size. */
var MAX_MEMOIZE_SIZE = 500;

/**
 * A specialized version of `_.memoize` which clears the memoized function's
 * cache when it exceeds `MAX_MEMOIZE_SIZE`.
 *
 * @private
 * @param {Function} func The function to have its output memoized.
 * @returns {Function} Returns the new memoized function.
 */
function memoizeCapped(func) {
  var result = memoize(func, function(key) {
    if (cache.size === MAX_MEMOIZE_SIZE) {
      cache.clear();
    }
    return key;
  });

  var cache = result.cache;
  return result;
}

module.exports = memoizeCapped;
";
        
        $__internal_1fd0ddf359d8ed417afd59bd65308b5359718d53d19579c3d6ec7e91b315cfae->leave($__internal_1fd0ddf359d8ed417afd59bd65308b5359718d53d19579c3d6ec7e91b315cfae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_memoizeCapped.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var memoize = require('./memoize');

/** Used as the maximum memoize cache size. */
var MAX_MEMOIZE_SIZE = 500;

/**
 * A specialized version of `_.memoize` which clears the memoized function's
 * cache when it exceeds `MAX_MEMOIZE_SIZE`.
 *
 * @private
 * @param {Function} func The function to have its output memoized.
 * @returns {Function} Returns the new memoized function.
 */
function memoizeCapped(func) {
  var result = memoize(func, function(key) {
    if (cache.size === MAX_MEMOIZE_SIZE) {
      cache.clear();
    }
    return key;
  });

  var cache = result.cache;
  return result;
}

module.exports = memoizeCapped;
", "node_modules/lodash/_memoizeCapped.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_memoizeCapped.js");
    }
}
