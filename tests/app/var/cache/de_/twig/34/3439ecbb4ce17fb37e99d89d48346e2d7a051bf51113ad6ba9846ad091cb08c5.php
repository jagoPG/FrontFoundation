<?php

/* node_modules/lodash/_charsStartIndex.js */
class __TwigTemplate_fd9170db4b5b8c7045c8b0d5bcfabdd288a5be089cda2f429543502c0b17d5c9 extends Twig_Template
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
        $__internal_1be940ebc2813d43fea7b117df3a407ed11a29c8e4c5b68f30926085d5a5c51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be940ebc2813d43fea7b117df3a407ed11a29c8e4c5b68f30926085d5a5c51e->enter($__internal_1be940ebc2813d43fea7b117df3a407ed11a29c8e4c5b68f30926085d5a5c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_charsStartIndex.js"));

        // line 1
        echo "var baseIndexOf = require('./_baseIndexOf');

/**
 * Used by `_.trim` and `_.trimStart` to get the index of the first string symbol
 * that is not found in the character symbols.
 *
 * @private
 * @param {Array} strSymbols The string symbols to inspect.
 * @param {Array} chrSymbols The character symbols to find.
 * @returns {number} Returns the index of the first unmatched string symbol.
 */
function charsStartIndex(strSymbols, chrSymbols) {
  var index = -1,
      length = strSymbols.length;

  while (++index < length && baseIndexOf(chrSymbols, strSymbols[index], 0) > -1) {}
  return index;
}

module.exports = charsStartIndex;
";
        
        $__internal_1be940ebc2813d43fea7b117df3a407ed11a29c8e4c5b68f30926085d5a5c51e->leave($__internal_1be940ebc2813d43fea7b117df3a407ed11a29c8e4c5b68f30926085d5a5c51e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_charsStartIndex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIndexOf = require('./_baseIndexOf');

/**
 * Used by `_.trim` and `_.trimStart` to get the index of the first string symbol
 * that is not found in the character symbols.
 *
 * @private
 * @param {Array} strSymbols The string symbols to inspect.
 * @param {Array} chrSymbols The character symbols to find.
 * @returns {number} Returns the index of the first unmatched string symbol.
 */
function charsStartIndex(strSymbols, chrSymbols) {
  var index = -1,
      length = strSymbols.length;

  while (++index < length && baseIndexOf(chrSymbols, strSymbols[index], 0) > -1) {}
  return index;
}

module.exports = charsStartIndex;
", "node_modules/lodash/_charsStartIndex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_charsStartIndex.js");
    }
}
