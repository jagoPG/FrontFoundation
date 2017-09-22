<?php

/* node_modules/lodash/_isIndex.js */
class __TwigTemplate_db5a311cc756c18a6dd4d1dc61f9992d18b0af4cea5f4ef884f75a8d9cbafe6b extends Twig_Template
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
        $__internal_27b54958b92eeae6d44e6ada7d36cdca0e222792f114abd72e8d1d94833a6801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b54958b92eeae6d44e6ada7d36cdca0e222792f114abd72e8d1d94833a6801->enter($__internal_27b54958b92eeae6d44e6ada7d36cdca0e222792f114abd72e8d1d94833a6801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isIndex.js"));

        // line 1
        echo "/** Used as references for various `Number` constants. */
var MAX_SAFE_INTEGER = 9007199254740991;

/** Used to detect unsigned integer values. */
var reIsUint = /^(?:0|[1-9]\\d*)\$/;

/**
 * Checks if `value` is a valid array-like index.
 *
 * @private
 * @param {*} value The value to check.
 * @param {number} [length=MAX_SAFE_INTEGER] The upper bounds of a valid index.
 * @returns {boolean} Returns `true` if `value` is a valid index, else `false`.
 */
function isIndex(value, length) {
  length = length == null ? MAX_SAFE_INTEGER : length;
  return !!length &&
    (typeof value == 'number' || reIsUint.test(value)) &&
    (value > -1 && value % 1 == 0 && value < length);
}

module.exports = isIndex;
";
        
        $__internal_27b54958b92eeae6d44e6ada7d36cdca0e222792f114abd72e8d1d94833a6801->leave($__internal_27b54958b92eeae6d44e6ada7d36cdca0e222792f114abd72e8d1d94833a6801_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isIndex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used as references for various `Number` constants. */
var MAX_SAFE_INTEGER = 9007199254740991;

/** Used to detect unsigned integer values. */
var reIsUint = /^(?:0|[1-9]\\d*)\$/;

/**
 * Checks if `value` is a valid array-like index.
 *
 * @private
 * @param {*} value The value to check.
 * @param {number} [length=MAX_SAFE_INTEGER] The upper bounds of a valid index.
 * @returns {boolean} Returns `true` if `value` is a valid index, else `false`.
 */
function isIndex(value, length) {
  length = length == null ? MAX_SAFE_INTEGER : length;
  return !!length &&
    (typeof value == 'number' || reIsUint.test(value)) &&
    (value > -1 && value % 1 == 0 && value < length);
}

module.exports = isIndex;
", "node_modules/lodash/_isIndex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isIndex.js");
    }
}
