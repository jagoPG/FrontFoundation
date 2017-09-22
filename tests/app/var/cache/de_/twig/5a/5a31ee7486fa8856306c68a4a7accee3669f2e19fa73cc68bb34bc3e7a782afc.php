<?php

/* node_modules/lodash/_baseValues.js */
class __TwigTemplate_a15d1c9667da1dd389850d2f3eee99c61bdc05462a652833d1b7360453398d50 extends Twig_Template
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
        $__internal_c958d61b9bea0da4da99d9b4e29de54e8c9304fb08e5fd5a6bc1f9c4065b5b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c958d61b9bea0da4da99d9b4e29de54e8c9304fb08e5fd5a6bc1f9c4065b5b5c->enter($__internal_c958d61b9bea0da4da99d9b4e29de54e8c9304fb08e5fd5a6bc1f9c4065b5b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseValues.js"));

        // line 1
        echo "var arrayMap = require('./_arrayMap');

/**
 * The base implementation of `_.values` and `_.valuesIn` which creates an
 * array of `object` property values corresponding to the property names
 * of `props`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array} props The property names to get values for.
 * @returns {Object} Returns the array of property values.
 */
function baseValues(object, props) {
  return arrayMap(props, function(key) {
    return object[key];
  });
}

module.exports = baseValues;
";
        
        $__internal_c958d61b9bea0da4da99d9b4e29de54e8c9304fb08e5fd5a6bc1f9c4065b5b5c->leave($__internal_c958d61b9bea0da4da99d9b4e29de54e8c9304fb08e5fd5a6bc1f9c4065b5b5c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseValues.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayMap = require('./_arrayMap');

/**
 * The base implementation of `_.values` and `_.valuesIn` which creates an
 * array of `object` property values corresponding to the property names
 * of `props`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array} props The property names to get values for.
 * @returns {Object} Returns the array of property values.
 */
function baseValues(object, props) {
  return arrayMap(props, function(key) {
    return object[key];
  });
}

module.exports = baseValues;
", "node_modules/lodash/_baseValues.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseValues.js");
    }
}
