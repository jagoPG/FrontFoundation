<?php

/* node_modules/lodash/_arrayIncludes.js */
class __TwigTemplate_7c5ead327db018dfa7d0f52a98a87d1452a2e978f195af7d9edb9a385fbab033 extends Twig_Template
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
        $__internal_66c1371f34e813d5a5fc88524c41c286da68ace792eefd518d9bf1d70e63efaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c1371f34e813d5a5fc88524c41c286da68ace792eefd518d9bf1d70e63efaf->enter($__internal_66c1371f34e813d5a5fc88524c41c286da68ace792eefd518d9bf1d70e63efaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayIncludes.js"));

        // line 1
        echo "var baseIndexOf = require('./_baseIndexOf');

/**
 * A specialized version of `_.includes` for arrays without support for
 * specifying an index to search from.
 *
 * @private
 * @param {Array} [array] The array to inspect.
 * @param {*} target The value to search for.
 * @returns {boolean} Returns `true` if `target` is found, else `false`.
 */
function arrayIncludes(array, value) {
  var length = array == null ? 0 : array.length;
  return !!length && baseIndexOf(array, value, 0) > -1;
}

module.exports = arrayIncludes;
";
        
        $__internal_66c1371f34e813d5a5fc88524c41c286da68ace792eefd518d9bf1d70e63efaf->leave($__internal_66c1371f34e813d5a5fc88524c41c286da68ace792eefd518d9bf1d70e63efaf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayIncludes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIndexOf = require('./_baseIndexOf');

/**
 * A specialized version of `_.includes` for arrays without support for
 * specifying an index to search from.
 *
 * @private
 * @param {Array} [array] The array to inspect.
 * @param {*} target The value to search for.
 * @returns {boolean} Returns `true` if `target` is found, else `false`.
 */
function arrayIncludes(array, value) {
  var length = array == null ? 0 : array.length;
  return !!length && baseIndexOf(array, value, 0) > -1;
}

module.exports = arrayIncludes;
", "node_modules/lodash/_arrayIncludes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayIncludes.js");
    }
}
