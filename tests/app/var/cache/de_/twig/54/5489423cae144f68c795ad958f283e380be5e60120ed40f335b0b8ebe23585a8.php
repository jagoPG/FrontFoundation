<?php

/* node_modules/lodash/_isFlattenable.js */
class __TwigTemplate_637dff0b29786c3a26feec83492222fa211a749d31870aebfed2c0708e56374c extends Twig_Template
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
        $__internal_e462a81d2a4ab98726b9bfcb77bad0a8430f0dc545881c7ff1db685a9fe0f33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e462a81d2a4ab98726b9bfcb77bad0a8430f0dc545881c7ff1db685a9fe0f33a->enter($__internal_e462a81d2a4ab98726b9bfcb77bad0a8430f0dc545881c7ff1db685a9fe0f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isFlattenable.js"));

        // line 1
        echo "var Symbol = require('./_Symbol'),
    isArguments = require('./isArguments'),
    isArray = require('./isArray');

/** Built-in value references. */
var spreadableSymbol = Symbol ? Symbol.isConcatSpreadable : undefined;

/**
 * Checks if `value` is a flattenable `arguments` object or array.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is flattenable, else `false`.
 */
function isFlattenable(value) {
  return isArray(value) || isArguments(value) ||
    !!(spreadableSymbol && value && value[spreadableSymbol]);
}

module.exports = isFlattenable;
";
        
        $__internal_e462a81d2a4ab98726b9bfcb77bad0a8430f0dc545881c7ff1db685a9fe0f33a->leave($__internal_e462a81d2a4ab98726b9bfcb77bad0a8430f0dc545881c7ff1db685a9fe0f33a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isFlattenable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Symbol = require('./_Symbol'),
    isArguments = require('./isArguments'),
    isArray = require('./isArray');

/** Built-in value references. */
var spreadableSymbol = Symbol ? Symbol.isConcatSpreadable : undefined;

/**
 * Checks if `value` is a flattenable `arguments` object or array.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is flattenable, else `false`.
 */
function isFlattenable(value) {
  return isArray(value) || isArguments(value) ||
    !!(spreadableSymbol && value && value[spreadableSymbol]);
}

module.exports = isFlattenable;
", "node_modules/lodash/_isFlattenable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isFlattenable.js");
    }
}
