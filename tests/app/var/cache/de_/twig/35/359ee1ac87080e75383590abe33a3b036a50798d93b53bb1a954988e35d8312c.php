<?php

/* node_modules/core-js/library/modules/es7.reflect.get-own-metadata.js */
class __TwigTemplate_a33a6ef54a01585ec60831368af826cf6b824d51ae12b114b9962b1506fa00db extends Twig_Template
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
        $__internal_b07f5136817a001cf6b9f949e667205e8acac53b3b90e7ade345010112449a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07f5136817a001cf6b9f949e667205e8acac53b3b90e7ade345010112449a8a->enter($__internal_b07f5136817a001cf6b9f949e667205e8acac53b3b90e7ade345010112449a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.reflect.get-own-metadata.js"));

        // line 1
        echo "var metadata = require('./_metadata');
var anObject = require('./_an-object');
var ordinaryGetOwnMetadata = metadata.get;
var toMetaKey = metadata.key;

metadata.exp({ getOwnMetadata: function getOwnMetadata(metadataKey, target /* , targetKey */) {
  return ordinaryGetOwnMetadata(metadataKey, anObject(target)
    , arguments.length < 3 ? undefined : toMetaKey(arguments[2]));
} });
";
        
        $__internal_b07f5136817a001cf6b9f949e667205e8acac53b3b90e7ade345010112449a8a->leave($__internal_b07f5136817a001cf6b9f949e667205e8acac53b3b90e7ade345010112449a8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.reflect.get-own-metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var metadata = require('./_metadata');
var anObject = require('./_an-object');
var ordinaryGetOwnMetadata = metadata.get;
var toMetaKey = metadata.key;

metadata.exp({ getOwnMetadata: function getOwnMetadata(metadataKey, target /* , targetKey */) {
  return ordinaryGetOwnMetadata(metadataKey, anObject(target)
    , arguments.length < 3 ? undefined : toMetaKey(arguments[2]));
} });
", "node_modules/core-js/library/modules/es7.reflect.get-own-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.reflect.get-own-metadata.js");
    }
}
