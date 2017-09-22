<?php

/* node_modules/lodash/_hasUnicode.js */
class __TwigTemplate_95311f633210901fa044f5d71c0ebc62090d13d6f3227d3a9acb98c13ae4e2b9 extends Twig_Template
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
        $__internal_47533dd0289a1ad22373b66ceceab06aaf7066d0455ca127064587b95184dce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47533dd0289a1ad22373b66ceceab06aaf7066d0455ca127064587b95184dce3->enter($__internal_47533dd0289a1ad22373b66ceceab06aaf7066d0455ca127064587b95184dce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_hasUnicode.js"));

        // line 1
        echo "/** Used to compose unicode character classes. */
var rsAstralRange = '\\\\ud800-\\\\udfff',
    rsComboMarksRange = '\\\\u0300-\\\\u036f',
    reComboHalfMarksRange = '\\\\ufe20-\\\\ufe2f',
    rsComboSymbolsRange = '\\\\u20d0-\\\\u20ff',
    rsComboRange = rsComboMarksRange + reComboHalfMarksRange + rsComboSymbolsRange,
    rsVarRange = '\\\\ufe0e\\\\ufe0f';

/** Used to compose unicode capture groups. */
var rsZWJ = '\\\\u200d';

/** Used to detect strings with [zero-width joiners or code points from the astral planes](http://eev.ee/blog/2015/09/12/dark-corners-of-unicode/). */
var reHasUnicode = RegExp('[' + rsZWJ + rsAstralRange  + rsComboRange + rsVarRange + ']');

/**
 * Checks if `string` contains Unicode symbols.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {boolean} Returns `true` if a symbol is found, else `false`.
 */
function hasUnicode(string) {
  return reHasUnicode.test(string);
}

module.exports = hasUnicode;
";
        
        $__internal_47533dd0289a1ad22373b66ceceab06aaf7066d0455ca127064587b95184dce3->leave($__internal_47533dd0289a1ad22373b66ceceab06aaf7066d0455ca127064587b95184dce3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_hasUnicode.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to compose unicode character classes. */
var rsAstralRange = '\\\\ud800-\\\\udfff',
    rsComboMarksRange = '\\\\u0300-\\\\u036f',
    reComboHalfMarksRange = '\\\\ufe20-\\\\ufe2f',
    rsComboSymbolsRange = '\\\\u20d0-\\\\u20ff',
    rsComboRange = rsComboMarksRange + reComboHalfMarksRange + rsComboSymbolsRange,
    rsVarRange = '\\\\ufe0e\\\\ufe0f';

/** Used to compose unicode capture groups. */
var rsZWJ = '\\\\u200d';

/** Used to detect strings with [zero-width joiners or code points from the astral planes](http://eev.ee/blog/2015/09/12/dark-corners-of-unicode/). */
var reHasUnicode = RegExp('[' + rsZWJ + rsAstralRange  + rsComboRange + rsVarRange + ']');

/**
 * Checks if `string` contains Unicode symbols.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {boolean} Returns `true` if a symbol is found, else `false`.
 */
function hasUnicode(string) {
  return reHasUnicode.test(string);
}

module.exports = hasUnicode;
", "node_modules/lodash/_hasUnicode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_hasUnicode.js");
    }
}
