<?php

/* node_modules/lodash/parseInt.js */
class __TwigTemplate_67c2f87cb86a4357ad824d8cfe8545d122a1385f491a3c87fd96adbb0e01f14b extends Twig_Template
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
        $__internal_e5c3fa7a8b6e03fbf5b2aa353c81ebfc9ac83370a89c1cb8ac0ddbcdb03813c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c3fa7a8b6e03fbf5b2aa353c81ebfc9ac83370a89c1cb8ac0ddbcdb03813c5->enter($__internal_e5c3fa7a8b6e03fbf5b2aa353c81ebfc9ac83370a89c1cb8ac0ddbcdb03813c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/parseInt.js"));

        // line 1
        echo "var root = require('./_root'),
    toString = require('./toString');

/** Used to match leading and trailing whitespace. */
var reTrimStart = /^\\s+/;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeParseInt = root.parseInt;

/**
 * Converts `string` to an integer of the specified radix. If `radix` is
 * `undefined` or `0`, a `radix` of `10` is used unless `value` is a
 * hexadecimal, in which case a `radix` of `16` is used.
 *
 * **Note:** This method aligns with the
 * [ES5 implementation](https://es5.github.io/#x15.1.2.2) of `parseInt`.
 *
 * @static
 * @memberOf _
 * @since 1.1.0
 * @category String
 * @param {string} string The string to convert.
 * @param {number} [radix=10] The radix to interpret `value` by.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {number} Returns the converted integer.
 * @example
 *
 * _.parseInt('08');
 * // => 8
 *
 * _.map(['6', '08', '10'], _.parseInt);
 * // => [6, 8, 10]
 */
function parseInt(string, radix, guard) {
  if (guard || radix == null) {
    radix = 0;
  } else if (radix) {
    radix = +radix;
  }
  return nativeParseInt(toString(string).replace(reTrimStart, ''), radix || 0);
}

module.exports = parseInt;
";
        
        $__internal_e5c3fa7a8b6e03fbf5b2aa353c81ebfc9ac83370a89c1cb8ac0ddbcdb03813c5->leave($__internal_e5c3fa7a8b6e03fbf5b2aa353c81ebfc9ac83370a89c1cb8ac0ddbcdb03813c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/parseInt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var root = require('./_root'),
    toString = require('./toString');

/** Used to match leading and trailing whitespace. */
var reTrimStart = /^\\s+/;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeParseInt = root.parseInt;

/**
 * Converts `string` to an integer of the specified radix. If `radix` is
 * `undefined` or `0`, a `radix` of `10` is used unless `value` is a
 * hexadecimal, in which case a `radix` of `16` is used.
 *
 * **Note:** This method aligns with the
 * [ES5 implementation](https://es5.github.io/#x15.1.2.2) of `parseInt`.
 *
 * @static
 * @memberOf _
 * @since 1.1.0
 * @category String
 * @param {string} string The string to convert.
 * @param {number} [radix=10] The radix to interpret `value` by.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {number} Returns the converted integer.
 * @example
 *
 * _.parseInt('08');
 * // => 8
 *
 * _.map(['6', '08', '10'], _.parseInt);
 * // => [6, 8, 10]
 */
function parseInt(string, radix, guard) {
  if (guard || radix == null) {
    radix = 0;
  } else if (radix) {
    radix = +radix;
  }
  return nativeParseInt(toString(string).replace(reTrimStart, ''), radix || 0);
}

module.exports = parseInt;
", "node_modules/lodash/parseInt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/parseInt.js");
    }
}
