<?php

/* node_modules/lodash/_baseFunctions.js */
class __TwigTemplate_c94c8d4d20ebdcea8381fba75f700966d4c156112e2c1a861682624712882b20 extends Twig_Template
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
        $__internal_222c3fc6778045a6d7f9a708e6abfecc9d547ba9c86aab3bebc25fe243454e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222c3fc6778045a6d7f9a708e6abfecc9d547ba9c86aab3bebc25fe243454e9b->enter($__internal_222c3fc6778045a6d7f9a708e6abfecc9d547ba9c86aab3bebc25fe243454e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseFunctions.js"));

        // line 1
        echo "var arrayFilter = require('./_arrayFilter'),
    isFunction = require('./isFunction');

/**
 * The base implementation of `_.functions` which creates an array of
 * `object` function property names filtered from `props`.
 *
 * @private
 * @param {Object} object The object to inspect.
 * @param {Array} props The property names to filter.
 * @returns {Array} Returns the function names.
 */
function baseFunctions(object, props) {
  return arrayFilter(props, function(key) {
    return isFunction(object[key]);
  });
}

module.exports = baseFunctions;
";
        
        $__internal_222c3fc6778045a6d7f9a708e6abfecc9d547ba9c86aab3bebc25fe243454e9b->leave($__internal_222c3fc6778045a6d7f9a708e6abfecc9d547ba9c86aab3bebc25fe243454e9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseFunctions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayFilter = require('./_arrayFilter'),
    isFunction = require('./isFunction');

/**
 * The base implementation of `_.functions` which creates an array of
 * `object` function property names filtered from `props`.
 *
 * @private
 * @param {Object} object The object to inspect.
 * @param {Array} props The property names to filter.
 * @returns {Array} Returns the function names.
 */
function baseFunctions(object, props) {
  return arrayFilter(props, function(key) {
    return isFunction(object[key]);
  });
}

module.exports = baseFunctions;
", "node_modules/lodash/_baseFunctions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseFunctions.js");
    }
}
