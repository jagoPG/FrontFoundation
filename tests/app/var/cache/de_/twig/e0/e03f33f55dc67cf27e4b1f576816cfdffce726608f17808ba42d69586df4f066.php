<?php

/* node_modules/core-js/library/modules/es7.reflect.get-own-metadata-keys.js */
class __TwigTemplate_bf95091786ffec1175d6abef81d795ca09f724a84166ddeb155b5ece8f7f1f32 extends Twig_Template
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
        $__internal_7103325090ba3e2c428cc39046b045ece5f5367d085099688bb5c9639ff4278f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7103325090ba3e2c428cc39046b045ece5f5367d085099688bb5c9639ff4278f->enter($__internal_7103325090ba3e2c428cc39046b045ece5f5367d085099688bb5c9639ff4278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.reflect.get-own-metadata-keys.js"));

        // line 1
        echo "var metadata = require('./_metadata');
var anObject = require('./_an-object');
var ordinaryOwnMetadataKeys = metadata.keys;
var toMetaKey = metadata.key;

metadata.exp({ getOwnMetadataKeys: function getOwnMetadataKeys(target /* , targetKey */) {
  return ordinaryOwnMetadataKeys(anObject(target), arguments.length < 2 ? undefined : toMetaKey(arguments[1]));
} });
";
        
        $__internal_7103325090ba3e2c428cc39046b045ece5f5367d085099688bb5c9639ff4278f->leave($__internal_7103325090ba3e2c428cc39046b045ece5f5367d085099688bb5c9639ff4278f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.reflect.get-own-metadata-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var metadata = require('./_metadata');
var anObject = require('./_an-object');
var ordinaryOwnMetadataKeys = metadata.keys;
var toMetaKey = metadata.key;

metadata.exp({ getOwnMetadataKeys: function getOwnMetadataKeys(target /* , targetKey */) {
  return ordinaryOwnMetadataKeys(anObject(target), arguments.length < 2 ? undefined : toMetaKey(arguments[1]));
} });
", "node_modules/core-js/library/modules/es7.reflect.get-own-metadata-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.reflect.get-own-metadata-keys.js");
    }
}
