<?php

/* node_modules/lodash/_baseShuffle.js */
class __TwigTemplate_994377365c46dd58aaa6929d4039255453aa35df75d9adbbaa7eb4ddb3318f5e extends Twig_Template
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
        $__internal_2afa6c9a1370f6143e44808cafee69efdefa2e22d7234c694375029ed2e422a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afa6c9a1370f6143e44808cafee69efdefa2e22d7234c694375029ed2e422a1->enter($__internal_2afa6c9a1370f6143e44808cafee69efdefa2e22d7234c694375029ed2e422a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseShuffle.js"));

        // line 1
        echo "var shuffleSelf = require('./_shuffleSelf'),
    values = require('./values');

/**
 * The base implementation of `_.shuffle`.
 *
 * @private
 * @param {Array|Object} collection The collection to shuffle.
 * @returns {Array} Returns the new shuffled array.
 */
function baseShuffle(collection) {
  return shuffleSelf(values(collection));
}

module.exports = baseShuffle;
";
        
        $__internal_2afa6c9a1370f6143e44808cafee69efdefa2e22d7234c694375029ed2e422a1->leave($__internal_2afa6c9a1370f6143e44808cafee69efdefa2e22d7234c694375029ed2e422a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseShuffle.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var shuffleSelf = require('./_shuffleSelf'),
    values = require('./values');

/**
 * The base implementation of `_.shuffle`.
 *
 * @private
 * @param {Array|Object} collection The collection to shuffle.
 * @returns {Array} Returns the new shuffled array.
 */
function baseShuffle(collection) {
  return shuffleSelf(values(collection));
}

module.exports = baseShuffle;
", "node_modules/lodash/_baseShuffle.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseShuffle.js");
    }
}
