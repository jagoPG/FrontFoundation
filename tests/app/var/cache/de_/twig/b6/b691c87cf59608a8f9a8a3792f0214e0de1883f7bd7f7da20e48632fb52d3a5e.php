<?php

/* node_modules/lodash/_toKey.js */
class __TwigTemplate_dd780925dff3d73847e32360bb18f26b5f986d0b7798dff5bde8ba3b5709ac63 extends Twig_Template
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
        $__internal_de737b826c89cc141f269ff0fe9dd711a5cfc6ef41c65bc068e0458b76f822dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de737b826c89cc141f269ff0fe9dd711a5cfc6ef41c65bc068e0458b76f822dc->enter($__internal_de737b826c89cc141f269ff0fe9dd711a5cfc6ef41c65bc068e0458b76f822dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_toKey.js"));

        // line 1
        echo "var isSymbol = require('./isSymbol');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0;

/**
 * Converts `value` to a string key if it's not a string or symbol.
 *
 * @private
 * @param {*} value The value to inspect.
 * @returns {string|symbol} Returns the key.
 */
function toKey(value) {
  if (typeof value == 'string' || isSymbol(value)) {
    return value;
  }
  var result = (value + '');
  return (result == '0' && (1 / value) == -INFINITY) ? '-0' : result;
}

module.exports = toKey;
";
        
        $__internal_de737b826c89cc141f269ff0fe9dd711a5cfc6ef41c65bc068e0458b76f822dc->leave($__internal_de737b826c89cc141f269ff0fe9dd711a5cfc6ef41c65bc068e0458b76f822dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_toKey.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isSymbol = require('./isSymbol');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0;

/**
 * Converts `value` to a string key if it's not a string or symbol.
 *
 * @private
 * @param {*} value The value to inspect.
 * @returns {string|symbol} Returns the key.
 */
function toKey(value) {
  if (typeof value == 'string' || isSymbol(value)) {
    return value;
  }
  var result = (value + '');
  return (result == '0' && (1 / value) == -INFINITY) ? '-0' : result;
}

module.exports = toKey;
", "node_modules/lodash/_toKey.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_toKey.js");
    }
}
