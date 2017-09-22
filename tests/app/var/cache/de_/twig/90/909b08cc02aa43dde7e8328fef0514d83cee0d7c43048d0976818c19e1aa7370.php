<?php

/* node_modules/lodash/_isMaskable.js */
class __TwigTemplate_c10cd2a7fc7f8ab4a9102565a778b487d59329537ae3840c16edc95f243d05b2 extends Twig_Template
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
        $__internal_ff3e7b9f5b6713be94811ab894e0366ee1c7161f60542146ef622d931596efd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3e7b9f5b6713be94811ab894e0366ee1c7161f60542146ef622d931596efd9->enter($__internal_ff3e7b9f5b6713be94811ab894e0366ee1c7161f60542146ef622d931596efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isMaskable.js"));

        // line 1
        echo "var coreJsData = require('./_coreJsData'),
    isFunction = require('./isFunction'),
    stubFalse = require('./stubFalse');

/**
 * Checks if `func` is capable of being masked.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `func` is maskable, else `false`.
 */
var isMaskable = coreJsData ? isFunction : stubFalse;

module.exports = isMaskable;
";
        
        $__internal_ff3e7b9f5b6713be94811ab894e0366ee1c7161f60542146ef622d931596efd9->leave($__internal_ff3e7b9f5b6713be94811ab894e0366ee1c7161f60542146ef622d931596efd9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isMaskable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var coreJsData = require('./_coreJsData'),
    isFunction = require('./isFunction'),
    stubFalse = require('./stubFalse');

/**
 * Checks if `func` is capable of being masked.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `func` is maskable, else `false`.
 */
var isMaskable = coreJsData ? isFunction : stubFalse;

module.exports = isMaskable;
", "node_modules/lodash/_isMaskable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isMaskable.js");
    }
}
