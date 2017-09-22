<?php

/* node_modules/lodash/_baseAssign.js */
class __TwigTemplate_aa917d29f85f412d7e28f07d8c10499e366daaaad730c6dde5f6b1dc99507a0d extends Twig_Template
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
        $__internal_011fde1cd5856efe960f7ae5de528e8bca19d2f885dae7da4057ecd0accffea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011fde1cd5856efe960f7ae5de528e8bca19d2f885dae7da4057ecd0accffea5->enter($__internal_011fde1cd5856efe960f7ae5de528e8bca19d2f885dae7da4057ecd0accffea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseAssign.js"));

        // line 1
        echo "var copyObject = require('./_copyObject'),
    keys = require('./keys');

/**
 * The base implementation of `_.assign` without support for multiple sources
 * or `customizer` functions.
 *
 * @private
 * @param {Object} object The destination object.
 * @param {Object} source The source object.
 * @returns {Object} Returns `object`.
 */
function baseAssign(object, source) {
  return object && copyObject(source, keys(source), object);
}

module.exports = baseAssign;
";
        
        $__internal_011fde1cd5856efe960f7ae5de528e8bca19d2f885dae7da4057ecd0accffea5->leave($__internal_011fde1cd5856efe960f7ae5de528e8bca19d2f885dae7da4057ecd0accffea5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseAssign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var copyObject = require('./_copyObject'),
    keys = require('./keys');

/**
 * The base implementation of `_.assign` without support for multiple sources
 * or `customizer` functions.
 *
 * @private
 * @param {Object} object The destination object.
 * @param {Object} source The source object.
 * @returns {Object} Returns `object`.
 */
function baseAssign(object, source) {
  return object && copyObject(source, keys(source), object);
}

module.exports = baseAssign;
", "node_modules/lodash/_baseAssign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseAssign.js");
    }
}
