<?php

/* node_modules/lodash/_getMatchData.js */
class __TwigTemplate_52a493d6f36457757c920ffbe2ff8ef7cfdc18248a2dc1e1bcfb790cb5e3b32a extends Twig_Template
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
        $__internal_7eee1412bb8be07a2ad4dc61aa5b065adb5ab4680564f48f92d86878f0e495f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eee1412bb8be07a2ad4dc61aa5b065adb5ab4680564f48f92d86878f0e495f0->enter($__internal_7eee1412bb8be07a2ad4dc61aa5b065adb5ab4680564f48f92d86878f0e495f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getMatchData.js"));

        // line 1
        echo "var isStrictComparable = require('./_isStrictComparable'),
    keys = require('./keys');

/**
 * Gets the property names, values, and compare flags of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the match data of `object`.
 */
function getMatchData(object) {
  var result = keys(object),
      length = result.length;

  while (length--) {
    var key = result[length],
        value = object[key];

    result[length] = [key, value, isStrictComparable(value)];
  }
  return result;
}

module.exports = getMatchData;
";
        
        $__internal_7eee1412bb8be07a2ad4dc61aa5b065adb5ab4680564f48f92d86878f0e495f0->leave($__internal_7eee1412bb8be07a2ad4dc61aa5b065adb5ab4680564f48f92d86878f0e495f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getMatchData.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isStrictComparable = require('./_isStrictComparable'),
    keys = require('./keys');

/**
 * Gets the property names, values, and compare flags of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the match data of `object`.
 */
function getMatchData(object) {
  var result = keys(object),
      length = result.length;

  while (length--) {
    var key = result[length],
        value = object[key];

    result[length] = [key, value, isStrictComparable(value)];
  }
  return result;
}

module.exports = getMatchData;
", "node_modules/lodash/_getMatchData.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getMatchData.js");
    }
}
