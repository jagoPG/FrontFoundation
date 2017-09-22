<?php

/* node_modules/core-js/modules/es7.reflect.has-metadata.js */
class __TwigTemplate_dc6c908db33c4f80b263595ddf86b5326dc1e2ffd0a9b1e9dab3fc4efb7ad513 extends Twig_Template
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
        $__internal_0e58c2c4fc8390e52841d6c7fddbeb56bd0b1759eb4e64254e05e78b87cc359f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e58c2c4fc8390e52841d6c7fddbeb56bd0b1759eb4e64254e05e78b87cc359f->enter($__internal_0e58c2c4fc8390e52841d6c7fddbeb56bd0b1759eb4e64254e05e78b87cc359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.reflect.has-metadata.js"));

        // line 1
        echo "var metadata = require('./_metadata');
var anObject = require('./_an-object');
var getPrototypeOf = require('./_object-gpo');
var ordinaryHasOwnMetadata = metadata.has;
var toMetaKey = metadata.key;

var ordinaryHasMetadata = function (MetadataKey, O, P) {
  var hasOwn = ordinaryHasOwnMetadata(MetadataKey, O, P);
  if (hasOwn) return true;
  var parent = getPrototypeOf(O);
  return parent !== null ? ordinaryHasMetadata(MetadataKey, parent, P) : false;
};

metadata.exp({ hasMetadata: function hasMetadata(metadataKey, target /* , targetKey */) {
  return ordinaryHasMetadata(metadataKey, anObject(target), arguments.length < 3 ? undefined : toMetaKey(arguments[2]));
} });
";
        
        $__internal_0e58c2c4fc8390e52841d6c7fddbeb56bd0b1759eb4e64254e05e78b87cc359f->leave($__internal_0e58c2c4fc8390e52841d6c7fddbeb56bd0b1759eb4e64254e05e78b87cc359f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.reflect.has-metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var metadata = require('./_metadata');
var anObject = require('./_an-object');
var getPrototypeOf = require('./_object-gpo');
var ordinaryHasOwnMetadata = metadata.has;
var toMetaKey = metadata.key;

var ordinaryHasMetadata = function (MetadataKey, O, P) {
  var hasOwn = ordinaryHasOwnMetadata(MetadataKey, O, P);
  if (hasOwn) return true;
  var parent = getPrototypeOf(O);
  return parent !== null ? ordinaryHasMetadata(MetadataKey, parent, P) : false;
};

metadata.exp({ hasMetadata: function hasMetadata(metadataKey, target /* , targetKey */) {
  return ordinaryHasMetadata(metadataKey, anObject(target), arguments.length < 3 ? undefined : toMetaKey(arguments[2]));
} });
", "node_modules/core-js/modules/es7.reflect.has-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.reflect.has-metadata.js");
    }
}
