<?php

/* node_modules/core-js/modules/es7.reflect.delete-metadata.js */
class __TwigTemplate_f4a7e6f093e5db60f0a3c303ef3814cc5e9d353e40ab00cea7811b7eff00d057 extends Twig_Template
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
        $__internal_37212d2d45643de1e6ff41a58251de5fb0fe9fd57c3bb1e05b56b459fb04b797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37212d2d45643de1e6ff41a58251de5fb0fe9fd57c3bb1e05b56b459fb04b797->enter($__internal_37212d2d45643de1e6ff41a58251de5fb0fe9fd57c3bb1e05b56b459fb04b797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.reflect.delete-metadata.js"));

        // line 1
        echo "var metadata = require('./_metadata');
var anObject = require('./_an-object');
var toMetaKey = metadata.key;
var getOrCreateMetadataMap = metadata.map;
var store = metadata.store;

metadata.exp({ deleteMetadata: function deleteMetadata(metadataKey, target /* , targetKey */) {
  var targetKey = arguments.length < 3 ? undefined : toMetaKey(arguments[2]);
  var metadataMap = getOrCreateMetadataMap(anObject(target), targetKey, false);
  if (metadataMap === undefined || !metadataMap['delete'](metadataKey)) return false;
  if (metadataMap.size) return true;
  var targetMetadata = store.get(target);
  targetMetadata['delete'](targetKey);
  return !!targetMetadata.size || store['delete'](target);
} });
";
        
        $__internal_37212d2d45643de1e6ff41a58251de5fb0fe9fd57c3bb1e05b56b459fb04b797->leave($__internal_37212d2d45643de1e6ff41a58251de5fb0fe9fd57c3bb1e05b56b459fb04b797_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.reflect.delete-metadata.js";
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
var getOrCreateMetadataMap = metadata.map;
var store = metadata.store;

metadata.exp({ deleteMetadata: function deleteMetadata(metadataKey, target /* , targetKey */) {
  var targetKey = arguments.length < 3 ? undefined : toMetaKey(arguments[2]);
  var metadataMap = getOrCreateMetadataMap(anObject(target), targetKey, false);
  if (metadataMap === undefined || !metadataMap['delete'](metadataKey)) return false;
  if (metadataMap.size) return true;
  var targetMetadata = store.get(target);
  targetMetadata['delete'](targetKey);
  return !!targetMetadata.size || store['delete'](target);
} });
", "node_modules/core-js/modules/es7.reflect.delete-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.reflect.delete-metadata.js");
    }
}
