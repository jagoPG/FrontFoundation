<?php

/* node_modules/core-js/modules/es7.reflect.metadata.js */
class __TwigTemplate_264f742787f5179e688929e1e8539f3b28f100a708489707d252582459ac0c4e extends Twig_Template
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
        $__internal_fb0495581e708d8963581dd81a91d35daf356ad80bfda486e41705e67d65846d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0495581e708d8963581dd81a91d35daf356ad80bfda486e41705e67d65846d->enter($__internal_fb0495581e708d8963581dd81a91d35daf356ad80bfda486e41705e67d65846d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.reflect.metadata.js"));

        // line 1
        echo "var \$metadata = require('./_metadata');
var anObject = require('./_an-object');
var aFunction = require('./_a-function');
var toMetaKey = \$metadata.key;
var ordinaryDefineOwnMetadata = \$metadata.set;

\$metadata.exp({ metadata: function metadata(metadataKey, metadataValue) {
  return function decorator(target, targetKey) {
    ordinaryDefineOwnMetadata(
      metadataKey, metadataValue,
      (targetKey !== undefined ? anObject : aFunction)(target),
      toMetaKey(targetKey)
    );
  };
} });
";
        
        $__internal_fb0495581e708d8963581dd81a91d35daf356ad80bfda486e41705e67d65846d->leave($__internal_fb0495581e708d8963581dd81a91d35daf356ad80bfda486e41705e67d65846d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.reflect.metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$metadata = require('./_metadata');
var anObject = require('./_an-object');
var aFunction = require('./_a-function');
var toMetaKey = \$metadata.key;
var ordinaryDefineOwnMetadata = \$metadata.set;

\$metadata.exp({ metadata: function metadata(metadataKey, metadataValue) {
  return function decorator(target, targetKey) {
    ordinaryDefineOwnMetadata(
      metadataKey, metadataValue,
      (targetKey !== undefined ? anObject : aFunction)(target),
      toMetaKey(targetKey)
    );
  };
} });
", "node_modules/core-js/modules/es7.reflect.metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.reflect.metadata.js");
    }
}
