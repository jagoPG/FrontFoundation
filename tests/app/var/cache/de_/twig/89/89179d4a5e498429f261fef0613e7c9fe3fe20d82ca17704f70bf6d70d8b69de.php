<?php

/* node_modules/lodash/_getData.js */
class __TwigTemplate_ad4e0ffb411f2802201ec02c95bb1f04c0f7cfe926e7e0b9625ae22f80bad056 extends Twig_Template
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
        $__internal_a1e67e56bc245051f90bed5882124d5edff4794c4ecab71a5675a53a8a085f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e67e56bc245051f90bed5882124d5edff4794c4ecab71a5675a53a8a085f04->enter($__internal_a1e67e56bc245051f90bed5882124d5edff4794c4ecab71a5675a53a8a085f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getData.js"));

        // line 1
        echo "var metaMap = require('./_metaMap'),
    noop = require('./noop');

/**
 * Gets metadata for `func`.
 *
 * @private
 * @param {Function} func The function to query.
 * @returns {*} Returns the metadata for `func`.
 */
var getData = !metaMap ? noop : function(func) {
  return metaMap.get(func);
};

module.exports = getData;
";
        
        $__internal_a1e67e56bc245051f90bed5882124d5edff4794c4ecab71a5675a53a8a085f04->leave($__internal_a1e67e56bc245051f90bed5882124d5edff4794c4ecab71a5675a53a8a085f04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getData.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var metaMap = require('./_metaMap'),
    noop = require('./noop');

/**
 * Gets metadata for `func`.
 *
 * @private
 * @param {Function} func The function to query.
 * @returns {*} Returns the metadata for `func`.
 */
var getData = !metaMap ? noop : function(func) {
  return metaMap.get(func);
};

module.exports = getData;
", "node_modules/lodash/_getData.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getData.js");
    }
}
