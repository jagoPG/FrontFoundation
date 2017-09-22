<?php

/* node_modules/lodash/_baseForOwnRight.js */
class __TwigTemplate_cc6a5d5059200236bd15ada5645d2027c8efb1c90cbead695f1dd258ad0c3a8b extends Twig_Template
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
        $__internal_03f6b293e94833935b4190ead216aa4f226e7aa9853acbb07659b4252bebb54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f6b293e94833935b4190ead216aa4f226e7aa9853acbb07659b4252bebb54c->enter($__internal_03f6b293e94833935b4190ead216aa4f226e7aa9853acbb07659b4252bebb54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseForOwnRight.js"));

        // line 1
        echo "var baseForRight = require('./_baseForRight'),
    keys = require('./keys');

/**
 * The base implementation of `_.forOwnRight` without support for iteratee shorthands.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Object} Returns `object`.
 */
function baseForOwnRight(object, iteratee) {
  return object && baseForRight(object, iteratee, keys);
}

module.exports = baseForOwnRight;
";
        
        $__internal_03f6b293e94833935b4190ead216aa4f226e7aa9853acbb07659b4252bebb54c->leave($__internal_03f6b293e94833935b4190ead216aa4f226e7aa9853acbb07659b4252bebb54c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseForOwnRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseForRight = require('./_baseForRight'),
    keys = require('./keys');

/**
 * The base implementation of `_.forOwnRight` without support for iteratee shorthands.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Object} Returns `object`.
 */
function baseForOwnRight(object, iteratee) {
  return object && baseForRight(object, iteratee, keys);
}

module.exports = baseForOwnRight;
", "node_modules/lodash/_baseForOwnRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseForOwnRight.js");
    }
}
