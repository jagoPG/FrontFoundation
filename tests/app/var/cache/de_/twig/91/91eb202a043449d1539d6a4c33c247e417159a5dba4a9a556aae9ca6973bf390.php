<?php

/* node_modules/core-js/library/modules/es7.reflect.metadata.js */
class __TwigTemplate_d99e60260c73beed3b8096288c0ce9fe278fa8b93d446bf587140ca49fb3a205 extends Twig_Template
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
        $__internal_34390035dccf9b28a86c0af431c3ff4e83905c8bd3ebb67bd56bfae798ee29ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34390035dccf9b28a86c0af431c3ff4e83905c8bd3ebb67bd56bfae798ee29ec->enter($__internal_34390035dccf9b28a86c0af431c3ff4e83905c8bd3ebb67bd56bfae798ee29ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.reflect.metadata.js"));

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
        
        $__internal_34390035dccf9b28a86c0af431c3ff4e83905c8bd3ebb67bd56bfae798ee29ec->leave($__internal_34390035dccf9b28a86c0af431c3ff4e83905c8bd3ebb67bd56bfae798ee29ec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.reflect.metadata.js";
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
", "node_modules/core-js/library/modules/es7.reflect.metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.reflect.metadata.js");
    }
}
