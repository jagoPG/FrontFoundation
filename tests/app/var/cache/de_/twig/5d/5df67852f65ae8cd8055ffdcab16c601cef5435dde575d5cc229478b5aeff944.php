<?php

/* node_modules/lodash/padEnd.js */
class __TwigTemplate_c1a454850baf912637e5148fc33f2c11d4caef12e5cae4a2c0127964a4c71903 extends Twig_Template
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
        $__internal_4a24139c8e4f5e27d7e1886c398932bd76afd24c3c75b0a229377e09b668e0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a24139c8e4f5e27d7e1886c398932bd76afd24c3c75b0a229377e09b668e0d3->enter($__internal_4a24139c8e4f5e27d7e1886c398932bd76afd24c3c75b0a229377e09b668e0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/padEnd.js"));

        // line 1
        echo "var createPadding = require('./_createPadding'),
    stringSize = require('./_stringSize'),
    toInteger = require('./toInteger'),
    toString = require('./toString');

/**
 * Pads `string` on the right side if it's shorter than `length`. Padding
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
 * _.padEnd('abc', 6);
 * // => 'abc   '
 *
 * _.padEnd('abc', 6, '_-');
 * // => 'abc_-_'
 *
 * _.padEnd('abc', 3);
 * // => 'abc'
 */
function padEnd(string, length, chars) {
  string = toString(string);
  length = toInteger(length);

  var strLength = length ? stringSize(string) : 0;
  return (length && strLength < length)
    ? (string + createPadding(length - strLength, chars))
    : string;
}

module.exports = padEnd;
";
        
        $__internal_4a24139c8e4f5e27d7e1886c398932bd76afd24c3c75b0a229377e09b668e0d3->leave($__internal_4a24139c8e4f5e27d7e1886c398932bd76afd24c3c75b0a229377e09b668e0d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/padEnd.js";
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
 * Pads `string` on the right side if it's shorter than `length`. Padding
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
 * _.padEnd('abc', 6);
 * // => 'abc   '
 *
 * _.padEnd('abc', 6, '_-');
 * // => 'abc_-_'
 *
 * _.padEnd('abc', 3);
 * // => 'abc'
 */
function padEnd(string, length, chars) {
  string = toString(string);
  length = toInteger(length);

  var strLength = length ? stringSize(string) : 0;
  return (length && strLength < length)
    ? (string + createPadding(length - strLength, chars))
    : string;
}

module.exports = padEnd;
", "node_modules/lodash/padEnd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/padEnd.js");
    }
}
