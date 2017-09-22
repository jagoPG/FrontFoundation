<?php

/* node_modules/lodash/_createPadding.js */
class __TwigTemplate_d27a77dad026b7686e6ccb96ad681c9b6e8fb908b1d395aa42f27d7fa33e5489 extends Twig_Template
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
        $__internal_91040d0de6f9a93a678c220f15fa61025ccac6461f2dafb0ce387538cdbbf80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91040d0de6f9a93a678c220f15fa61025ccac6461f2dafb0ce387538cdbbf80c->enter($__internal_91040d0de6f9a93a678c220f15fa61025ccac6461f2dafb0ce387538cdbbf80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createPadding.js"));

        // line 1
        echo "var baseRepeat = require('./_baseRepeat'),
    baseToString = require('./_baseToString'),
    castSlice = require('./_castSlice'),
    hasUnicode = require('./_hasUnicode'),
    stringSize = require('./_stringSize'),
    stringToArray = require('./_stringToArray');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeCeil = Math.ceil;

/**
 * Creates the padding for `string` based on `length`. The `chars` string
 * is truncated if the number of characters exceeds `length`.
 *
 * @private
 * @param {number} length The padding length.
 * @param {string} [chars=' '] The string used as padding.
 * @returns {string} Returns the padding for `string`.
 */
function createPadding(length, chars) {
  chars = chars === undefined ? ' ' : baseToString(chars);

  var charsLength = chars.length;
  if (charsLength < 2) {
    return charsLength ? baseRepeat(chars, length) : chars;
  }
  var result = baseRepeat(chars, nativeCeil(length / stringSize(chars)));
  return hasUnicode(chars)
    ? castSlice(stringToArray(result), 0, length).join('')
    : result.slice(0, length);
}

module.exports = createPadding;
";
        
        $__internal_91040d0de6f9a93a678c220f15fa61025ccac6461f2dafb0ce387538cdbbf80c->leave($__internal_91040d0de6f9a93a678c220f15fa61025ccac6461f2dafb0ce387538cdbbf80c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createPadding.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRepeat = require('./_baseRepeat'),
    baseToString = require('./_baseToString'),
    castSlice = require('./_castSlice'),
    hasUnicode = require('./_hasUnicode'),
    stringSize = require('./_stringSize'),
    stringToArray = require('./_stringToArray');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeCeil = Math.ceil;

/**
 * Creates the padding for `string` based on `length`. The `chars` string
 * is truncated if the number of characters exceeds `length`.
 *
 * @private
 * @param {number} length The padding length.
 * @param {string} [chars=' '] The string used as padding.
 * @returns {string} Returns the padding for `string`.
 */
function createPadding(length, chars) {
  chars = chars === undefined ? ' ' : baseToString(chars);

  var charsLength = chars.length;
  if (charsLength < 2) {
    return charsLength ? baseRepeat(chars, length) : chars;
  }
  var result = baseRepeat(chars, nativeCeil(length / stringSize(chars)));
  return hasUnicode(chars)
    ? castSlice(stringToArray(result), 0, length).join('')
    : result.slice(0, length);
}

module.exports = createPadding;
", "node_modules/lodash/_createPadding.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createPadding.js");
    }
}
