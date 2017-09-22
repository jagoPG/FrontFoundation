<?php

/* node_modules/core-js/modules/es7.reflect.get-metadata-keys.js */
class __TwigTemplate_2e0fc420019ae3988c2ddf4180e48f90bf18a5e680759389e99000042f774a45 extends Twig_Template
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
        $__internal_529aeb302e7e07c1f66b475db0b75363b2099e3ee307d6f5a1ff550f53e4f62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529aeb302e7e07c1f66b475db0b75363b2099e3ee307d6f5a1ff550f53e4f62c->enter($__internal_529aeb302e7e07c1f66b475db0b75363b2099e3ee307d6f5a1ff550f53e4f62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.reflect.get-metadata-keys.js"));

        // line 1
        echo "var Set = require('./es6.set');
var from = require('./_array-from-iterable');
var metadata = require('./_metadata');
var anObject = require('./_an-object');
var getPrototypeOf = require('./_object-gpo');
var ordinaryOwnMetadataKeys = metadata.keys;
var toMetaKey = metadata.key;

var ordinaryMetadataKeys = function (O, P) {
  var oKeys = ordinaryOwnMetadataKeys(O, P);
  var parent = getPrototypeOf(O);
  if (parent === null) return oKeys;
  var pKeys = ordinaryMetadataKeys(parent, P);
  return pKeys.length ? oKeys.length ? from(new Set(oKeys.concat(pKeys))) : pKeys : oKeys;
};

metadata.exp({ getMetadataKeys: function getMetadataKeys(target /* , targetKey */) {
  return ordinaryMetadataKeys(anObject(target), arguments.length < 2 ? undefined : toMetaKey(arguments[1]));
} });
";
        
        $__internal_529aeb302e7e07c1f66b475db0b75363b2099e3ee307d6f5a1ff550f53e4f62c->leave($__internal_529aeb302e7e07c1f66b475db0b75363b2099e3ee307d6f5a1ff550f53e4f62c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.reflect.get-metadata-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Set = require('./es6.set');
var from = require('./_array-from-iterable');
var metadata = require('./_metadata');
var anObject = require('./_an-object');
var getPrototypeOf = require('./_object-gpo');
var ordinaryOwnMetadataKeys = metadata.keys;
var toMetaKey = metadata.key;

var ordinaryMetadataKeys = function (O, P) {
  var oKeys = ordinaryOwnMetadataKeys(O, P);
  var parent = getPrototypeOf(O);
  if (parent === null) return oKeys;
  var pKeys = ordinaryMetadataKeys(parent, P);
  return pKeys.length ? oKeys.length ? from(new Set(oKeys.concat(pKeys))) : pKeys : oKeys;
};

metadata.exp({ getMetadataKeys: function getMetadataKeys(target /* , targetKey */) {
  return ordinaryMetadataKeys(anObject(target), arguments.length < 2 ? undefined : toMetaKey(arguments[1]));
} });
", "node_modules/core-js/modules/es7.reflect.get-metadata-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.reflect.get-metadata-keys.js");
    }
}
