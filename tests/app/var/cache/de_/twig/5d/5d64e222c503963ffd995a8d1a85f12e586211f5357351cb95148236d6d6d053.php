<?php

/* node_modules/core-js/modules/es7.reflect.get-own-metadata.js */
class __TwigTemplate_6f9291af2bb46f2638b10ab51983170128af73714cd297699aa1c4a5ddf7f2f8 extends Twig_Template
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
        $__internal_73f7733526bc4cdd7effeda6894849832c4ec2cca0e0b93ad93cf76ef5acec10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f7733526bc4cdd7effeda6894849832c4ec2cca0e0b93ad93cf76ef5acec10->enter($__internal_73f7733526bc4cdd7effeda6894849832c4ec2cca0e0b93ad93cf76ef5acec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.reflect.get-own-metadata.js"));

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
        
        $__internal_73f7733526bc4cdd7effeda6894849832c4ec2cca0e0b93ad93cf76ef5acec10->leave($__internal_73f7733526bc4cdd7effeda6894849832c4ec2cca0e0b93ad93cf76ef5acec10_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.reflect.get-own-metadata.js";
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
", "node_modules/core-js/modules/es7.reflect.get-own-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.reflect.get-own-metadata.js");
    }
}
