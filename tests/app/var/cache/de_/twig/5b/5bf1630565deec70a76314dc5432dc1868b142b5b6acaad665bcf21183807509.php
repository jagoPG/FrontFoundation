<?php

/* node_modules/lodash/_unicodeSize.js */
class __TwigTemplate_3fb9eb66dc3df210fd15f903453d594b7fea7005ccf51bcf107951686252d6aa extends Twig_Template
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
        $__internal_1a3bff6c9a5c5bcabf3008df49496ee377a79189494ee92de980a4859117387c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3bff6c9a5c5bcabf3008df49496ee377a79189494ee92de980a4859117387c->enter($__internal_1a3bff6c9a5c5bcabf3008df49496ee377a79189494ee92de980a4859117387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_unicodeSize.js"));

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
 * Gets the size of a Unicode `string`.
 *
 * @private
 * @param {string} string The string inspect.
 * @returns {number} Returns the string size.
 */
function unicodeSize(string) {
  var result = reUnicode.lastIndex = 0;
  while (reUnicode.test(string)) {
    ++result;
  }
  return result;
}

module.exports = unicodeSize;
";
        
        $__internal_1a3bff6c9a5c5bcabf3008df49496ee377a79189494ee92de980a4859117387c->leave($__internal_1a3bff6c9a5c5bcabf3008df49496ee377a79189494ee92de980a4859117387c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_unicodeSize.js";
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
 * Gets the size of a Unicode `string`.
 *
 * @private
 * @param {string} string The string inspect.
 * @returns {number} Returns the string size.
 */
function unicodeSize(string) {
  var result = reUnicode.lastIndex = 0;
  while (reUnicode.test(string)) {
    ++result;
  }
  return result;
}

module.exports = unicodeSize;
", "node_modules/lodash/_unicodeSize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_unicodeSize.js");
    }
}
