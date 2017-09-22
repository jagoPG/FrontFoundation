<?php

/* node_modules/lodash/_getNative.js */
class __TwigTemplate_bce8176ff801033d51e8384fb266b47a87193ad385ccb1a38c536a1bbea6923d extends Twig_Template
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
        $__internal_cdfec0579de753598dda103d9a36713cb3c750ede24904a18c5b3ab7b2cf7923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfec0579de753598dda103d9a36713cb3c750ede24904a18c5b3ab7b2cf7923->enter($__internal_cdfec0579de753598dda103d9a36713cb3c750ede24904a18c5b3ab7b2cf7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getNative.js"));

        // line 1
        echo "var baseIsNative = require('./_baseIsNative'),
    getValue = require('./_getValue');

/**
 * Gets the native function at `key` of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {string} key The key of the method to get.
 * @returns {*} Returns the function if it's native, else `undefined`.
 */
function getNative(object, key) {
  var value = getValue(object, key);
  return baseIsNative(value) ? value : undefined;
}

module.exports = getNative;
";
        
        $__internal_cdfec0579de753598dda103d9a36713cb3c750ede24904a18c5b3ab7b2cf7923->leave($__internal_cdfec0579de753598dda103d9a36713cb3c750ede24904a18c5b3ab7b2cf7923_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getNative.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsNative = require('./_baseIsNative'),
    getValue = require('./_getValue');

/**
 * Gets the native function at `key` of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {string} key The key of the method to get.
 * @returns {*} Returns the function if it's native, else `undefined`.
 */
function getNative(object, key) {
  var value = getValue(object, key);
  return baseIsNative(value) ? value : undefined;
}

module.exports = getNative;
", "node_modules/lodash/_getNative.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getNative.js");
    }
}
