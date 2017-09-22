<?php

/* node_modules/lodash/_stringToPath.js */
class __TwigTemplate_3197ce7240ac932d4b67ffb89473399bc0a1fa0bb6bc15e97edf56b0a82261bf extends Twig_Template
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
        $__internal_57592083dd82be77fe549a61b3707bd51b21601383f01e282048892c6886da67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57592083dd82be77fe549a61b3707bd51b21601383f01e282048892c6886da67->enter($__internal_57592083dd82be77fe549a61b3707bd51b21601383f01e282048892c6886da67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_stringToPath.js"));

        // line 1
        echo "var memoizeCapped = require('./_memoizeCapped');

/** Used to match property names within property paths. */
var reLeadingDot = /^\\./,
    rePropName = /[^.[\\]]+|\\[(?:(-?\\d+(?:\\.\\d+)?)|([\"'])((?:(?!\\2)[^\\\\]|\\\\.)*?)\\2)\\]|(?=(?:\\.|\\[\\])(?:\\.|\\[\\]|\$))/g;

/** Used to match backslashes in property paths. */
var reEscapeChar = /\\\\(\\\\)?/g;

/**
 * Converts `string` to a property path array.
 *
 * @private
 * @param {string} string The string to convert.
 * @returns {Array} Returns the property path array.
 */
var stringToPath = memoizeCapped(function(string) {
  var result = [];
  if (reLeadingDot.test(string)) {
    result.push('');
  }
  string.replace(rePropName, function(match, number, quote, string) {
    result.push(quote ? string.replace(reEscapeChar, '\$1') : (number || match));
  });
  return result;
});

module.exports = stringToPath;
";
        
        $__internal_57592083dd82be77fe549a61b3707bd51b21601383f01e282048892c6886da67->leave($__internal_57592083dd82be77fe549a61b3707bd51b21601383f01e282048892c6886da67_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_stringToPath.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var memoizeCapped = require('./_memoizeCapped');

/** Used to match property names within property paths. */
var reLeadingDot = /^\\./,
    rePropName = /[^.[\\]]+|\\[(?:(-?\\d+(?:\\.\\d+)?)|([\"'])((?:(?!\\2)[^\\\\]|\\\\.)*?)\\2)\\]|(?=(?:\\.|\\[\\])(?:\\.|\\[\\]|\$))/g;

/** Used to match backslashes in property paths. */
var reEscapeChar = /\\\\(\\\\)?/g;

/**
 * Converts `string` to a property path array.
 *
 * @private
 * @param {string} string The string to convert.
 * @returns {Array} Returns the property path array.
 */
var stringToPath = memoizeCapped(function(string) {
  var result = [];
  if (reLeadingDot.test(string)) {
    result.push('');
  }
  string.replace(rePropName, function(match, number, quote, string) {
    result.push(quote ? string.replace(reEscapeChar, '\$1') : (number || match));
  });
  return result;
});

module.exports = stringToPath;
", "node_modules/lodash/_stringToPath.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_stringToPath.js");
    }
}
