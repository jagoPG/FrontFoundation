<?php

/* node_modules/core-js/library/modules/es7.reflect.define-metadata.js */
class __TwigTemplate_b25b369dcc6205578f02eba6a051007e8042cc003acb9fd2ce130f572620601b extends Twig_Template
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
        $__internal_86078fba40f9a9d6d4b3bc8131a454e57e1e88c76a5e5000bfa801b2c7d144ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86078fba40f9a9d6d4b3bc8131a454e57e1e88c76a5e5000bfa801b2c7d144ca->enter($__internal_86078fba40f9a9d6d4b3bc8131a454e57e1e88c76a5e5000bfa801b2c7d144ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.reflect.define-metadata.js"));

        // line 1
        echo "var metadata = require('./_metadata');
var anObject = require('./_an-object');
var toMetaKey = metadata.key;
var ordinaryDefineOwnMetadata = metadata.set;

metadata.exp({ defineMetadata: function defineMetadata(metadataKey, metadataValue, target, targetKey) {
  ordinaryDefineOwnMetadata(metadataKey, metadataValue, anObject(target), toMetaKey(targetKey));
} });
";
        
        $__internal_86078fba40f9a9d6d4b3bc8131a454e57e1e88c76a5e5000bfa801b2c7d144ca->leave($__internal_86078fba40f9a9d6d4b3bc8131a454e57e1e88c76a5e5000bfa801b2c7d144ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.reflect.define-metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var metadata = require('./_metadata');
var anObject = require('./_an-object');
var toMetaKey = metadata.key;
var ordinaryDefineOwnMetadata = metadata.set;

metadata.exp({ defineMetadata: function defineMetadata(metadataKey, metadataValue, target, targetKey) {
  ordinaryDefineOwnMetadata(metadataKey, metadataValue, anObject(target), toMetaKey(targetKey));
} });
", "node_modules/core-js/library/modules/es7.reflect.define-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.reflect.define-metadata.js");
    }
}
