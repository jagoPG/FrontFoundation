<?php

/* node_modules/lodash/split.js */
class __TwigTemplate_d3ad86e5ce5056085dc3267742fec10901eab58174550aabada4fac0b432812f extends Twig_Template
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
        $__internal_e8fd87a14fe57ff38cfbddcbf3a63e49fd0a5a1374b83ca19610946e513d2991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fd87a14fe57ff38cfbddcbf3a63e49fd0a5a1374b83ca19610946e513d2991->enter($__internal_e8fd87a14fe57ff38cfbddcbf3a63e49fd0a5a1374b83ca19610946e513d2991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/split.js"));

        // line 1
        echo "var baseToString = require('./_baseToString'),
    castSlice = require('./_castSlice'),
    hasUnicode = require('./_hasUnicode'),
    isIterateeCall = require('./_isIterateeCall'),
    isRegExp = require('./isRegExp'),
    stringToArray = require('./_stringToArray'),
    toString = require('./toString');

/** Used as references for the maximum length and index of an array. */
var MAX_ARRAY_LENGTH = 4294967295;

/**
 * Splits `string` by `separator`.
 *
 * **Note:** This method is based on
 * [`String#split`](https://mdn.io/String/split).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to split.
 * @param {RegExp|string} separator The separator pattern to split by.
 * @param {number} [limit] The length to truncate results to.
 * @returns {Array} Returns the string segments.
 * @example
 *
 * _.split('a-b-c', '-', 2);
 * // => ['a', 'b']
 */
function split(string, separator, limit) {
  if (limit && typeof limit != 'number' && isIterateeCall(string, separator, limit)) {
    separator = limit = undefined;
  }
  limit = limit === undefined ? MAX_ARRAY_LENGTH : limit >>> 0;
  if (!limit) {
    return [];
  }
  string = toString(string);
  if (string && (
        typeof separator == 'string' ||
        (separator != null && !isRegExp(separator))
      )) {
    separator = baseToString(separator);
    if (!separator && hasUnicode(string)) {
      return castSlice(stringToArray(string), 0, limit);
    }
  }
  return string.split(separator, limit);
}

module.exports = split;
";
        
        $__internal_e8fd87a14fe57ff38cfbddcbf3a63e49fd0a5a1374b83ca19610946e513d2991->leave($__internal_e8fd87a14fe57ff38cfbddcbf3a63e49fd0a5a1374b83ca19610946e513d2991_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/split.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseToString = require('./_baseToString'),
    castSlice = require('./_castSlice'),
    hasUnicode = require('./_hasUnicode'),
    isIterateeCall = require('./_isIterateeCall'),
    isRegExp = require('./isRegExp'),
    stringToArray = require('./_stringToArray'),
    toString = require('./toString');

/** Used as references for the maximum length and index of an array. */
var MAX_ARRAY_LENGTH = 4294967295;

/**
 * Splits `string` by `separator`.
 *
 * **Note:** This method is based on
 * [`String#split`](https://mdn.io/String/split).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to split.
 * @param {RegExp|string} separator The separator pattern to split by.
 * @param {number} [limit] The length to truncate results to.
 * @returns {Array} Returns the string segments.
 * @example
 *
 * _.split('a-b-c', '-', 2);
 * // => ['a', 'b']
 */
function split(string, separator, limit) {
  if (limit && typeof limit != 'number' && isIterateeCall(string, separator, limit)) {
    separator = limit = undefined;
  }
  limit = limit === undefined ? MAX_ARRAY_LENGTH : limit >>> 0;
  if (!limit) {
    return [];
  }
  string = toString(string);
  if (string && (
        typeof separator == 'string' ||
        (separator != null && !isRegExp(separator))
      )) {
    separator = baseToString(separator);
    if (!separator && hasUnicode(string)) {
      return castSlice(stringToArray(string), 0, limit);
    }
  }
  return string.split(separator, limit);
}

module.exports = split;
", "node_modules/lodash/split.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/split.js");
    }
}
