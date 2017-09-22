<?php

/* node_modules/core-js/modules/es7.reflect.get-own-metadata-keys.js */
class __TwigTemplate_7e743c7cda537dff88a001fcc33f30e68bb3d5e302da43b754e6cbf07139ade3 extends Twig_Template
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
        $__internal_7b40c8cac1060a3e4a1d1f0e3e1bbab048009a5e8fba0d00b367864203b33db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b40c8cac1060a3e4a1d1f0e3e1bbab048009a5e8fba0d00b367864203b33db0->enter($__internal_7b40c8cac1060a3e4a1d1f0e3e1bbab048009a5e8fba0d00b367864203b33db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.reflect.get-own-metadata-keys.js"));

        // line 1
        echo "var metadata = require('./_metadata');
var anObject = require('./_an-object');
var ordinaryOwnMetadataKeys = metadata.keys;
var toMetaKey = metadata.key;

metadata.exp({ getOwnMetadataKeys: function getOwnMetadataKeys(target /* , targetKey */) {
  return ordinaryOwnMetadataKeys(anObject(target), arguments.length < 2 ? undefined : toMetaKey(arguments[1]));
} });
";
        
        $__internal_7b40c8cac1060a3e4a1d1f0e3e1bbab048009a5e8fba0d00b367864203b33db0->leave($__internal_7b40c8cac1060a3e4a1d1f0e3e1bbab048009a5e8fba0d00b367864203b33db0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.reflect.get-own-metadata-keys.js";
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
", "node_modules/core-js/modules/es7.reflect.get-own-metadata-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.reflect.get-own-metadata-keys.js");
    }
}
