<?php

/* node_modules/lodash/_charsEndIndex.js */
class __TwigTemplate_aa27383258ba3f0b26ca078606c7c6b293a99acd5aff48a253d7a7dc16a10832 extends Twig_Template
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
        $__internal_b70ec8b390078208ee56a098853a2dedde1886c8a293a05ca68b85a00ff2db91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70ec8b390078208ee56a098853a2dedde1886c8a293a05ca68b85a00ff2db91->enter($__internal_b70ec8b390078208ee56a098853a2dedde1886c8a293a05ca68b85a00ff2db91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_charsEndIndex.js"));

        // line 1
        echo "var baseIndexOf = require('./_baseIndexOf');

/**
 * Used by `_.trim` and `_.trimEnd` to get the index of the last string symbol
 * that is not found in the character symbols.
 *
 * @private
 * @param {Array} strSymbols The string symbols to inspect.
 * @param {Array} chrSymbols The character symbols to find.
 * @returns {number} Returns the index of the last unmatched string symbol.
 */
function charsEndIndex(strSymbols, chrSymbols) {
  var index = strSymbols.length;

  while (index-- && baseIndexOf(chrSymbols, strSymbols[index], 0) > -1) {}
  return index;
}

module.exports = charsEndIndex;
";
        
        $__internal_b70ec8b390078208ee56a098853a2dedde1886c8a293a05ca68b85a00ff2db91->leave($__internal_b70ec8b390078208ee56a098853a2dedde1886c8a293a05ca68b85a00ff2db91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_charsEndIndex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIndexOf = require('./_baseIndexOf');

/**
 * Used by `_.trim` and `_.trimEnd` to get the index of the last string symbol
 * that is not found in the character symbols.
 *
 * @private
 * @param {Array} strSymbols The string symbols to inspect.
 * @param {Array} chrSymbols The character symbols to find.
 * @returns {number} Returns the index of the last unmatched string symbol.
 */
function charsEndIndex(strSymbols, chrSymbols) {
  var index = strSymbols.length;

  while (index-- && baseIndexOf(chrSymbols, strSymbols[index], 0) > -1) {}
  return index;
}

module.exports = charsEndIndex;
", "node_modules/lodash/_charsEndIndex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_charsEndIndex.js");
    }
}
