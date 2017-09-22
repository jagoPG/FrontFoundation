<?php

/* node_modules/lodash/_baseUpdate.js */
class __TwigTemplate_67edccd8a8595b2aa3c7d6c20d440463c09d8f03e02ae9e8f8cd4385a771803f extends Twig_Template
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
        $__internal_3b7896786e346cefb013c665fb50a9fbef24dc38fa858e1085f72dec69e8e900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7896786e346cefb013c665fb50a9fbef24dc38fa858e1085f72dec69e8e900->enter($__internal_3b7896786e346cefb013c665fb50a9fbef24dc38fa858e1085f72dec69e8e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseUpdate.js"));

        // line 1
        echo "var baseGet = require('./_baseGet'),
    baseSet = require('./_baseSet');

/**
 * The base implementation of `_.update`.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {Array|string} path The path of the property to update.
 * @param {Function} updater The function to produce the updated value.
 * @param {Function} [customizer] The function to customize path creation.
 * @returns {Object} Returns `object`.
 */
function baseUpdate(object, path, updater, customizer) {
  return baseSet(object, path, updater(baseGet(object, path)), customizer);
}

module.exports = baseUpdate;
";
        
        $__internal_3b7896786e346cefb013c665fb50a9fbef24dc38fa858e1085f72dec69e8e900->leave($__internal_3b7896786e346cefb013c665fb50a9fbef24dc38fa858e1085f72dec69e8e900_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseUpdate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGet = require('./_baseGet'),
    baseSet = require('./_baseSet');

/**
 * The base implementation of `_.update`.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {Array|string} path The path of the property to update.
 * @param {Function} updater The function to produce the updated value.
 * @param {Function} [customizer] The function to customize path creation.
 * @returns {Object} Returns `object`.
 */
function baseUpdate(object, path, updater, customizer) {
  return baseSet(object, path, updater(baseGet(object, path)), customizer);
}

module.exports = baseUpdate;
", "node_modules/lodash/_baseUpdate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseUpdate.js");
    }
}
