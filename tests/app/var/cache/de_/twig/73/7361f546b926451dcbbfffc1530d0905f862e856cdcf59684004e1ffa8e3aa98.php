<?php

/* node_modules/lodash/padStart.js */
class __TwigTemplate_32d047e575a41a0d86dbb8cd7fa8558ef49c3b17f1d31d85d26be8886d6d7099 extends Twig_Template
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
        $__internal_ac9eeb2335ca6f3c4b65c2801fb34b1a6da323948f12dc6da36026fc5d616f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9eeb2335ca6f3c4b65c2801fb34b1a6da323948f12dc6da36026fc5d616f92->enter($__internal_ac9eeb2335ca6f3c4b65c2801fb34b1a6da323948f12dc6da36026fc5d616f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/padStart.js"));

        // line 1
        echo "var createPadding = require('./_createPadding'),
    stringSize = require('./_stringSize'),
    toInteger = require('./toInteger'),
    toString = require('./toString');

/**
 * Pads `string` on the left side if it's shorter than `length`. Padding
 * characters are truncated if they exceed `length`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to pad.
 * @param {number} [length=0] The padding length.
 * @param {string} [chars=' '] The string used as padding.
 * @returns {string} Returns the padded string.
 * @example
 *
 * _.padStart('abc', 6);
 * // => '   abc'
 *
 * _.padStart('abc', 6, '_-');
 * // => '_-_abc'
 *
 * _.padStart('abc', 3);
 * // => 'abc'
 */
function padStart(string, length, chars) {
  string = toString(string);
  length = toInteger(length);

  var strLength = length ? stringSize(string) : 0;
  return (length && strLength < length)
    ? (createPadding(length - strLength, chars) + string)
    : string;
}

module.exports = padStart;
";
        
        $__internal_ac9eeb2335ca6f3c4b65c2801fb34b1a6da323948f12dc6da36026fc5d616f92->leave($__internal_ac9eeb2335ca6f3c4b65c2801fb34b1a6da323948f12dc6da36026fc5d616f92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/padStart.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createPadding = require('./_createPadding'),
    stringSize = require('./_stringSize'),
    toInteger = require('./toInteger'),
    toString = require('./toString');

/**
 * Pads `string` on the left side if it's shorter than `length`. Padding
 * characters are truncated if they exceed `length`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to pad.
 * @param {number} [length=0] The padding length.
 * @param {string} [chars=' '] The string used as padding.
 * @returns {string} Returns the padded string.
 * @example
 *
 * _.padStart('abc', 6);
 * // => '   abc'
 *
 * _.padStart('abc', 6, '_-');
 * // => '_-_abc'
 *
 * _.padStart('abc', 3);
 * // => 'abc'
 */
function padStart(string, length, chars) {
  string = toString(string);
  length = toInteger(length);

  var strLength = length ? stringSize(string) : 0;
  return (length && strLength < length)
    ? (createPadding(length - strLength, chars) + string)
    : string;
}

module.exports = padStart;
", "node_modules/lodash/padStart.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/padStart.js");
    }
}
