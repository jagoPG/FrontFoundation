<?php

/* node_modules/lodash/_stringToArray.js */
class __TwigTemplate_4c5b823a431fee2f450f912769ba343d1a908cd120b50ad961a7a50128076bcc extends Twig_Template
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
        $__internal_aff76b447d21799033d3a891c442572fece26b06c6c9b84e5b2093f9386e4365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff76b447d21799033d3a891c442572fece26b06c6c9b84e5b2093f9386e4365->enter($__internal_aff76b447d21799033d3a891c442572fece26b06c6c9b84e5b2093f9386e4365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_stringToArray.js"));

        // line 1
        echo "var asciiToArray = require('./_asciiToArray'),
    hasUnicode = require('./_hasUnicode'),
    unicodeToArray = require('./_unicodeToArray');

/**
 * Converts `string` to an array.
 *
 * @private
 * @param {string} string The string to convert.
 * @returns {Array} Returns the converted array.
 */
function stringToArray(string) {
  return hasUnicode(string)
    ? unicodeToArray(string)
    : asciiToArray(string);
}

module.exports = stringToArray;
";
        
        $__internal_aff76b447d21799033d3a891c442572fece26b06c6c9b84e5b2093f9386e4365->leave($__internal_aff76b447d21799033d3a891c442572fece26b06c6c9b84e5b2093f9386e4365_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_stringToArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var asciiToArray = require('./_asciiToArray'),
    hasUnicode = require('./_hasUnicode'),
    unicodeToArray = require('./_unicodeToArray');

/**
 * Converts `string` to an array.
 *
 * @private
 * @param {string} string The string to convert.
 * @returns {Array} Returns the converted array.
 */
function stringToArray(string) {
  return hasUnicode(string)
    ? unicodeToArray(string)
    : asciiToArray(string);
}

module.exports = stringToArray;
", "node_modules/lodash/_stringToArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_stringToArray.js");
    }
}
