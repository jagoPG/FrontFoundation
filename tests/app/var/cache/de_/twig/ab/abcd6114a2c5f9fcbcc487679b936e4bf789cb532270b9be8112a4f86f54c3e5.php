<?php

/* node_modules/core-js/modules/es7.reflect.has-own-metadata.js */
class __TwigTemplate_e9e2ee8525aa5a412066f20c443b6aa5e5eb71b90191c760e0a8eafd2c7535df extends Twig_Template
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
        $__internal_dc023a00fc25989259f43d1d0327093e32d91cb4f326d968e076cdf0e4c2c360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc023a00fc25989259f43d1d0327093e32d91cb4f326d968e076cdf0e4c2c360->enter($__internal_dc023a00fc25989259f43d1d0327093e32d91cb4f326d968e076cdf0e4c2c360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.reflect.has-own-metadata.js"));

        // line 1
        echo "var metadata = require('./_metadata');
var anObject = require('./_an-object');
var ordinaryHasOwnMetadata = metadata.has;
var toMetaKey = metadata.key;

metadata.exp({ hasOwnMetadata: function hasOwnMetadata(metadataKey, target /* , targetKey */) {
  return ordinaryHasOwnMetadata(metadataKey, anObject(target)
    , arguments.length < 3 ? undefined : toMetaKey(arguments[2]));
} });
";
        
        $__internal_dc023a00fc25989259f43d1d0327093e32d91cb4f326d968e076cdf0e4c2c360->leave($__internal_dc023a00fc25989259f43d1d0327093e32d91cb4f326d968e076cdf0e4c2c360_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.reflect.has-own-metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var metadata = require('./_metadata');
var anObject = require('./_an-object');
var ordinaryHasOwnMetadata = metadata.has;
var toMetaKey = metadata.key;

metadata.exp({ hasOwnMetadata: function hasOwnMetadata(metadataKey, target /* , targetKey */) {
  return ordinaryHasOwnMetadata(metadataKey, anObject(target)
    , arguments.length < 3 ? undefined : toMetaKey(arguments[2]));
} });
", "node_modules/core-js/modules/es7.reflect.has-own-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.reflect.has-own-metadata.js");
    }
}
