<?php

/* node_modules/core-js/modules/es7.reflect.define-metadata.js */
class __TwigTemplate_4b9b9d6faf65ac315b928e73eca625c26453111612789deea59a6f9a766f5be4 extends Twig_Template
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
        $__internal_f0466e364fd7100aa8563b0ad7adcd107d938d46f8b69746b03e9d82f48b32b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0466e364fd7100aa8563b0ad7adcd107d938d46f8b69746b03e9d82f48b32b2->enter($__internal_f0466e364fd7100aa8563b0ad7adcd107d938d46f8b69746b03e9d82f48b32b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.reflect.define-metadata.js"));

        // line 1
        echo "var metadata = require('./_metadata');
var anObject = require('./_an-object');
var toMetaKey = metadata.key;
var ordinaryDefineOwnMetadata = metadata.set;

metadata.exp({ defineMetadata: function defineMetadata(metadataKey, metadataValue, target, targetKey) {
  ordinaryDefineOwnMetadata(metadataKey, metadataValue, anObject(target), toMetaKey(targetKey));
} });
";
        
        $__internal_f0466e364fd7100aa8563b0ad7adcd107d938d46f8b69746b03e9d82f48b32b2->leave($__internal_f0466e364fd7100aa8563b0ad7adcd107d938d46f8b69746b03e9d82f48b32b2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.reflect.define-metadata.js";
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
", "node_modules/core-js/modules/es7.reflect.define-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.reflect.define-metadata.js");
    }
}
