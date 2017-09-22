<?php

/* node_modules/lodash/toPath.js */
class __TwigTemplate_b79849721f6e66f700df586eb472c82a53156859036d26ff4f48440f85d05947 extends Twig_Template
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
        $__internal_7d4bbb8d7b5bc750688d2c80289619eb4236faedf2ab451108818494aba1f024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4bbb8d7b5bc750688d2c80289619eb4236faedf2ab451108818494aba1f024->enter($__internal_7d4bbb8d7b5bc750688d2c80289619eb4236faedf2ab451108818494aba1f024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toPath.js"));

        // line 1
        echo "var arrayMap = require('./_arrayMap'),
    copyArray = require('./_copyArray'),
    isArray = require('./isArray'),
    isSymbol = require('./isSymbol'),
    stringToPath = require('./_stringToPath'),
    toKey = require('./_toKey'),
    toString = require('./toString');

/**
 * Converts `value` to a property path array.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {*} value The value to convert.
 * @returns {Array} Returns the new property path array.
 * @example
 *
 * _.toPath('a.b.c');
 * // => ['a', 'b', 'c']
 *
 * _.toPath('a[0].b.c');
 * // => ['a', '0', 'b', 'c']
 */
function toPath(value) {
  if (isArray(value)) {
    return arrayMap(value, toKey);
  }
  return isSymbol(value) ? [value] : copyArray(stringToPath(toString(value)));
}

module.exports = toPath;
";
        
        $__internal_7d4bbb8d7b5bc750688d2c80289619eb4236faedf2ab451108818494aba1f024->leave($__internal_7d4bbb8d7b5bc750688d2c80289619eb4236faedf2ab451108818494aba1f024_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toPath.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayMap = require('./_arrayMap'),
    copyArray = require('./_copyArray'),
    isArray = require('./isArray'),
    isSymbol = require('./isSymbol'),
    stringToPath = require('./_stringToPath'),
    toKey = require('./_toKey'),
    toString = require('./toString');

/**
 * Converts `value` to a property path array.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Util
 * @param {*} value The value to convert.
 * @returns {Array} Returns the new property path array.
 * @example
 *
 * _.toPath('a.b.c');
 * // => ['a', 'b', 'c']
 *
 * _.toPath('a[0].b.c');
 * // => ['a', '0', 'b', 'c']
 */
function toPath(value) {
  if (isArray(value)) {
    return arrayMap(value, toKey);
  }
  return isSymbol(value) ? [value] : copyArray(stringToPath(toString(value)));
}

module.exports = toPath;
", "node_modules/lodash/toPath.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toPath.js");
    }
}
