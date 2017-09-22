<?php

/* node_modules/lodash/_baseMatches.js */
class __TwigTemplate_9fc9138487af084416969b0378f69a49dbccea1d7abca23d3a1289cd776ee99c extends Twig_Template
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
        $__internal_f8599eac40ac0cb16ea25a70c4108f0e65fe44de3a4bbf0e32bd98b086069e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8599eac40ac0cb16ea25a70c4108f0e65fe44de3a4bbf0e32bd98b086069e91->enter($__internal_f8599eac40ac0cb16ea25a70c4108f0e65fe44de3a4bbf0e32bd98b086069e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseMatches.js"));

        // line 1
        echo "var baseIsMatch = require('./_baseIsMatch'),
    getMatchData = require('./_getMatchData'),
    matchesStrictComparable = require('./_matchesStrictComparable');

/**
 * The base implementation of `_.matches` which doesn't clone `source`.
 *
 * @private
 * @param {Object} source The object of property values to match.
 * @returns {Function} Returns the new spec function.
 */
function baseMatches(source) {
  var matchData = getMatchData(source);
  if (matchData.length == 1 && matchData[0][2]) {
    return matchesStrictComparable(matchData[0][0], matchData[0][1]);
  }
  return function(object) {
    return object === source || baseIsMatch(object, source, matchData);
  };
}

module.exports = baseMatches;
";
        
        $__internal_f8599eac40ac0cb16ea25a70c4108f0e65fe44de3a4bbf0e32bd98b086069e91->leave($__internal_f8599eac40ac0cb16ea25a70c4108f0e65fe44de3a4bbf0e32bd98b086069e91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseMatches.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsMatch = require('./_baseIsMatch'),
    getMatchData = require('./_getMatchData'),
    matchesStrictComparable = require('./_matchesStrictComparable');

/**
 * The base implementation of `_.matches` which doesn't clone `source`.
 *
 * @private
 * @param {Object} source The object of property values to match.
 * @returns {Function} Returns the new spec function.
 */
function baseMatches(source) {
  var matchData = getMatchData(source);
  if (matchData.length == 1 && matchData[0][2]) {
    return matchesStrictComparable(matchData[0][0], matchData[0][1]);
  }
  return function(object) {
    return object === source || baseIsMatch(object, source, matchData);
  };
}

module.exports = baseMatches;
", "node_modules/lodash/_baseMatches.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseMatches.js");
    }
}
