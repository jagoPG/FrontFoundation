<?php

/* node_modules/lodash/_createCaseFirst.js */
class __TwigTemplate_a7f63945f3430964ff85ca676ffff37468046b973a9fd7c8170a85d8d6c0b7ed extends Twig_Template
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
        $__internal_707b1e68c8acddc252df2c6c5b4e631f065615d96e29893f1267fc0e685d67a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707b1e68c8acddc252df2c6c5b4e631f065615d96e29893f1267fc0e685d67a4->enter($__internal_707b1e68c8acddc252df2c6c5b4e631f065615d96e29893f1267fc0e685d67a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createCaseFirst.js"));

        // line 1
        echo "var castSlice = require('./_castSlice'),
    hasUnicode = require('./_hasUnicode'),
    stringToArray = require('./_stringToArray'),
    toString = require('./toString');

/**
 * Creates a function like `_.lowerFirst`.
 *
 * @private
 * @param {string} methodName The name of the `String` case method to use.
 * @returns {Function} Returns the new case function.
 */
function createCaseFirst(methodName) {
  return function(string) {
    string = toString(string);

    var strSymbols = hasUnicode(string)
      ? stringToArray(string)
      : undefined;

    var chr = strSymbols
      ? strSymbols[0]
      : string.charAt(0);

    var trailing = strSymbols
      ? castSlice(strSymbols, 1).join('')
      : string.slice(1);

    return chr[methodName]() + trailing;
  };
}

module.exports = createCaseFirst;
";
        
        $__internal_707b1e68c8acddc252df2c6c5b4e631f065615d96e29893f1267fc0e685d67a4->leave($__internal_707b1e68c8acddc252df2c6c5b4e631f065615d96e29893f1267fc0e685d67a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createCaseFirst.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var castSlice = require('./_castSlice'),
    hasUnicode = require('./_hasUnicode'),
    stringToArray = require('./_stringToArray'),
    toString = require('./toString');

/**
 * Creates a function like `_.lowerFirst`.
 *
 * @private
 * @param {string} methodName The name of the `String` case method to use.
 * @returns {Function} Returns the new case function.
 */
function createCaseFirst(methodName) {
  return function(string) {
    string = toString(string);

    var strSymbols = hasUnicode(string)
      ? stringToArray(string)
      : undefined;

    var chr = strSymbols
      ? strSymbols[0]
      : string.charAt(0);

    var trailing = strSymbols
      ? castSlice(strSymbols, 1).join('')
      : string.slice(1);

    return chr[methodName]() + trailing;
  };
}

module.exports = createCaseFirst;
", "node_modules/lodash/_createCaseFirst.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createCaseFirst.js");
    }
}
