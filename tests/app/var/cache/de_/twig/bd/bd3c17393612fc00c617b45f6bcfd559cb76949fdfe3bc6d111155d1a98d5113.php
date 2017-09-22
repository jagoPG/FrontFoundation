<?php

/* node_modules/lodash/_baseGetAllKeys.js */
class __TwigTemplate_7d352e6d8436b26c1e73ceee3c0f68ec4cd6cbdb63e94fdf7faf2d3295c98a66 extends Twig_Template
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
        $__internal_17ad0829d9cad6140ce8db49d668d9019d705d8b823a7e7ef9a2e8db1a9d6377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ad0829d9cad6140ce8db49d668d9019d705d8b823a7e7ef9a2e8db1a9d6377->enter($__internal_17ad0829d9cad6140ce8db49d668d9019d705d8b823a7e7ef9a2e8db1a9d6377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseGetAllKeys.js"));

        // line 1
        echo "var arrayPush = require('./_arrayPush'),
    isArray = require('./isArray');

/**
 * The base implementation of `getAllKeys` and `getAllKeysIn` which uses
 * `keysFunc` and `symbolsFunc` to get the enumerable property names and
 * symbols of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Function} keysFunc The function to get the keys of `object`.
 * @param {Function} symbolsFunc The function to get the symbols of `object`.
 * @returns {Array} Returns the array of property names and symbols.
 */
function baseGetAllKeys(object, keysFunc, symbolsFunc) {
  var result = keysFunc(object);
  return isArray(object) ? result : arrayPush(result, symbolsFunc(object));
}

module.exports = baseGetAllKeys;
";
        
        $__internal_17ad0829d9cad6140ce8db49d668d9019d705d8b823a7e7ef9a2e8db1a9d6377->leave($__internal_17ad0829d9cad6140ce8db49d668d9019d705d8b823a7e7ef9a2e8db1a9d6377_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseGetAllKeys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayPush = require('./_arrayPush'),
    isArray = require('./isArray');

/**
 * The base implementation of `getAllKeys` and `getAllKeysIn` which uses
 * `keysFunc` and `symbolsFunc` to get the enumerable property names and
 * symbols of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Function} keysFunc The function to get the keys of `object`.
 * @param {Function} symbolsFunc The function to get the symbols of `object`.
 * @returns {Array} Returns the array of property names and symbols.
 */
function baseGetAllKeys(object, keysFunc, symbolsFunc) {
  var result = keysFunc(object);
  return isArray(object) ? result : arrayPush(result, symbolsFunc(object));
}

module.exports = baseGetAllKeys;
", "node_modules/lodash/_baseGetAllKeys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseGetAllKeys.js");
    }
}
