<?php

/* node_modules/lodash/_baseToPairs.js */
class __TwigTemplate_935c56e04f556d0cdf253991cd4e8c7797308973567138c88d0ed0da5fdc69ae extends Twig_Template
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
        $__internal_f5f5e52e8a145eaaa114d284c1c296d0e0eb98f98268b7eaa1cfdb6612cc7579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f5e52e8a145eaaa114d284c1c296d0e0eb98f98268b7eaa1cfdb6612cc7579->enter($__internal_f5f5e52e8a145eaaa114d284c1c296d0e0eb98f98268b7eaa1cfdb6612cc7579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseToPairs.js"));

        // line 1
        echo "var arrayMap = require('./_arrayMap');

/**
 * The base implementation of `_.toPairs` and `_.toPairsIn` which creates an array
 * of key-value pairs for `object` corresponding to the property names of `props`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array} props The property names to get values for.
 * @returns {Object} Returns the key-value pairs.
 */
function baseToPairs(object, props) {
  return arrayMap(props, function(key) {
    return [key, object[key]];
  });
}

module.exports = baseToPairs;
";
        
        $__internal_f5f5e52e8a145eaaa114d284c1c296d0e0eb98f98268b7eaa1cfdb6612cc7579->leave($__internal_f5f5e52e8a145eaaa114d284c1c296d0e0eb98f98268b7eaa1cfdb6612cc7579_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseToPairs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayMap = require('./_arrayMap');

/**
 * The base implementation of `_.toPairs` and `_.toPairsIn` which creates an array
 * of key-value pairs for `object` corresponding to the property names of `props`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array} props The property names to get values for.
 * @returns {Object} Returns the key-value pairs.
 */
function baseToPairs(object, props) {
  return arrayMap(props, function(key) {
    return [key, object[key]];
  });
}

module.exports = baseToPairs;
", "node_modules/lodash/_baseToPairs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseToPairs.js");
    }
}
