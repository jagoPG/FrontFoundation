<?php

/* node_modules/lodash/trimStart.js */
class __TwigTemplate_130e538f2c92cf64397cbd54682f99d5922499c982211453128867e7a1508c93 extends Twig_Template
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
        $__internal_ebb58bd78bfdb112aa8a047e3a3d805fa043aeb81460cb6698b48a1d6b56a277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb58bd78bfdb112aa8a047e3a3d805fa043aeb81460cb6698b48a1d6b56a277->enter($__internal_ebb58bd78bfdb112aa8a047e3a3d805fa043aeb81460cb6698b48a1d6b56a277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/trimStart.js"));

        // line 1
        echo "var baseToString = require('./_baseToString'),
    castSlice = require('./_castSlice'),
    charsStartIndex = require('./_charsStartIndex'),
    stringToArray = require('./_stringToArray'),
    toString = require('./toString');

/** Used to match leading and trailing whitespace. */
var reTrimStart = /^\\s+/;

/**
 * Removes leading whitespace or specified characters from `string`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to trim.
 * @param {string} [chars=whitespace] The characters to trim.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {string} Returns the trimmed string.
 * @example
 *
 * _.trimStart('  abc  ');
 * // => 'abc  '
 *
 * _.trimStart('-_-abc-_-', '_-');
 * // => 'abc-_-'
 */
function trimStart(string, chars, guard) {
  string = toString(string);
  if (string && (guard || chars === undefined)) {
    return string.replace(reTrimStart, '');
  }
  if (!string || !(chars = baseToString(chars))) {
    return string;
  }
  var strSymbols = stringToArray(string),
      start = charsStartIndex(strSymbols, stringToArray(chars));

  return castSlice(strSymbols, start).join('');
}

module.exports = trimStart;
";
        
        $__internal_ebb58bd78bfdb112aa8a047e3a3d805fa043aeb81460cb6698b48a1d6b56a277->leave($__internal_ebb58bd78bfdb112aa8a047e3a3d805fa043aeb81460cb6698b48a1d6b56a277_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/trimStart.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseToString = require('./_baseToString'),
    castSlice = require('./_castSlice'),
    charsStartIndex = require('./_charsStartIndex'),
    stringToArray = require('./_stringToArray'),
    toString = require('./toString');

/** Used to match leading and trailing whitespace. */
var reTrimStart = /^\\s+/;

/**
 * Removes leading whitespace or specified characters from `string`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to trim.
 * @param {string} [chars=whitespace] The characters to trim.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {string} Returns the trimmed string.
 * @example
 *
 * _.trimStart('  abc  ');
 * // => 'abc  '
 *
 * _.trimStart('-_-abc-_-', '_-');
 * // => 'abc-_-'
 */
function trimStart(string, chars, guard) {
  string = toString(string);
  if (string && (guard || chars === undefined)) {
    return string.replace(reTrimStart, '');
  }
  if (!string || !(chars = baseToString(chars))) {
    return string;
  }
  var strSymbols = stringToArray(string),
      start = charsStartIndex(strSymbols, stringToArray(chars));

  return castSlice(strSymbols, start).join('');
}

module.exports = trimStart;
", "node_modules/lodash/trimStart.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/trimStart.js");
    }
}
