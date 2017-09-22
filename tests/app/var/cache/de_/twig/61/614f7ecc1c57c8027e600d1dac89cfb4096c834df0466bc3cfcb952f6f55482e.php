<?php

/* node_modules/core-js/library/modules/es7.reflect.has-own-metadata.js */
class __TwigTemplate_dfae4a9ee21e1d03e8bda983088fb6b3c3e44d5c27b3e3b204ccf9e4773c9c99 extends Twig_Template
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
        $__internal_c1640b2d152bb8fd1125edacaebc9cf7551439fc2f1789b234b2bf8374bee1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1640b2d152bb8fd1125edacaebc9cf7551439fc2f1789b234b2bf8374bee1ee->enter($__internal_c1640b2d152bb8fd1125edacaebc9cf7551439fc2f1789b234b2bf8374bee1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.reflect.has-own-metadata.js"));

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
        
        $__internal_c1640b2d152bb8fd1125edacaebc9cf7551439fc2f1789b234b2bf8374bee1ee->leave($__internal_c1640b2d152bb8fd1125edacaebc9cf7551439fc2f1789b234b2bf8374bee1ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.reflect.has-own-metadata.js";
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
", "node_modules/core-js/library/modules/es7.reflect.has-own-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.reflect.has-own-metadata.js");
    }
}
