<?php

/* node_modules/lodash/_unicodeToArray.js */
class __TwigTemplate_8aa5d194c7a9f4076fcc9e7a6a19b5ae571ca801c4d937870506a240f5946aa9 extends Twig_Template
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
        $__internal_399718d6bd879ca7a8da900560a8bb2e40dfa8e75547b7c54c103fa3f25fe9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399718d6bd879ca7a8da900560a8bb2e40dfa8e75547b7c54c103fa3f25fe9c7->enter($__internal_399718d6bd879ca7a8da900560a8bb2e40dfa8e75547b7c54c103fa3f25fe9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_unicodeToArray.js"));

        // line 1
        echo "/** Used to compose unicode character classes. */
var rsAstralRange = '\\\\ud800-\\\\udfff',
    rsComboMarksRange = '\\\\u0300-\\\\u036f',
    reComboHalfMarksRange = '\\\\ufe20-\\\\ufe2f',
    rsComboSymbolsRange = '\\\\u20d0-\\\\u20ff',
    rsComboRange = rsComboMarksRange + reComboHalfMarksRange + rsComboSymbolsRange,
    rsVarRange = '\\\\ufe0e\\\\ufe0f';

/** Used to compose unicode capture groups. */
var rsAstral = '[' + rsAstralRange + ']',
    rsCombo = '[' + rsComboRange + ']',
    rsFitz = '\\\\ud83c[\\\\udffb-\\\\udfff]',
    rsModifier = '(?:' + rsCombo + '|' + rsFitz + ')',
    rsNonAstral = '[^' + rsAstralRange + ']',
    rsRegional = '(?:\\\\ud83c[\\\\udde6-\\\\uddff]){2}',
    rsSurrPair = '[\\\\ud800-\\\\udbff][\\\\udc00-\\\\udfff]',
    rsZWJ = '\\\\u200d';

/** Used to compose unicode regexes. */
var reOptMod = rsModifier + '?',
    rsOptVar = '[' + rsVarRange + ']?',
    rsOptJoin = '(?:' + rsZWJ + '(?:' + [rsNonAstral, rsRegional, rsSurrPair].join('|') + ')' + rsOptVar + reOptMod + ')*',
    rsSeq = rsOptVar + reOptMod + rsOptJoin,
    rsSymbol = '(?:' + [rsNonAstral + rsCombo + '?', rsCombo, rsRegional, rsSurrPair, rsAstral].join('|') + ')';

/** Used to match [string symbols](https://mathiasbynens.be/notes/javascript-unicode). */
var reUnicode = RegExp(rsFitz + '(?=' + rsFitz + ')|' + rsSymbol + rsSeq, 'g');

/**
 * Converts a Unicode `string` to an array.
 *
 * @private
 * @param {string} string The string to convert.
 * @returns {Array} Returns the converted array.
 */
function unicodeToArray(string) {
  return string.match(reUnicode) || [];
}

module.exports = unicodeToArray;
";
        
        $__internal_399718d6bd879ca7a8da900560a8bb2e40dfa8e75547b7c54c103fa3f25fe9c7->leave($__internal_399718d6bd879ca7a8da900560a8bb2e40dfa8e75547b7c54c103fa3f25fe9c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_unicodeToArray.js";
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
var rsAstral = '[' + rsAstralRange + ']',
    rsCombo = '[' + rsComboRange + ']',
    rsFitz = '\\\\ud83c[\\\\udffb-\\\\udfff]',
    rsModifier = '(?:' + rsCombo + '|' + rsFitz + ')',
    rsNonAstral = '[^' + rsAstralRange + ']',
    rsRegional = '(?:\\\\ud83c[\\\\udde6-\\\\uddff]){2}',
    rsSurrPair = '[\\\\ud800-\\\\udbff][\\\\udc00-\\\\udfff]',
    rsZWJ = '\\\\u200d';

/** Used to compose unicode regexes. */
var reOptMod = rsModifier + '?',
    rsOptVar = '[' + rsVarRange + ']?',
    rsOptJoin = '(?:' + rsZWJ + '(?:' + [rsNonAstral, rsRegional, rsSurrPair].join('|') + ')' + rsOptVar + reOptMod + ')*',
    rsSeq = rsOptVar + reOptMod + rsOptJoin,
    rsSymbol = '(?:' + [rsNonAstral + rsCombo + '?', rsCombo, rsRegional, rsSurrPair, rsAstral].join('|') + ')';

/** Used to match [string symbols](https://mathiasbynens.be/notes/javascript-unicode). */
var reUnicode = RegExp(rsFitz + '(?=' + rsFitz + ')|' + rsSymbol + rsSeq, 'g');

/**
 * Converts a Unicode `string` to an array.
 *
 * @private
 * @param {string} string The string to convert.
 * @returns {Array} Returns the converted array.
 */
function unicodeToArray(string) {
  return string.match(reUnicode) || [];
}

module.exports = unicodeToArray;
", "node_modules/lodash/_unicodeToArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_unicodeToArray.js");
    }
}
