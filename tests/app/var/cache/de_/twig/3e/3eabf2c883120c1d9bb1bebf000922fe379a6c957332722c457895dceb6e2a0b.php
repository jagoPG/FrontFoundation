<?php

/* node_modules/core-js/modules/es7.object.get-own-property-descriptors.js */
class __TwigTemplate_d9b816342ef5e0ab73a29217bcd25754491ec6d2785932b20ef2d226caf880ec extends Twig_Template
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
        $__internal_723a668f286088da23da8e258c1ae85d8d9ae741e299bb1d493030eb424927c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723a668f286088da23da8e258c1ae85d8d9ae741e299bb1d493030eb424927c9->enter($__internal_723a668f286088da23da8e258c1ae85d8d9ae741e299bb1d493030eb424927c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.object.get-own-property-descriptors.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-object-getownpropertydescriptors
var \$export = require('./_export');
var ownKeys = require('./_own-keys');
var toIObject = require('./_to-iobject');
var gOPD = require('./_object-gopd');
var createProperty = require('./_create-property');

\$export(\$export.S, 'Object', {
  getOwnPropertyDescriptors: function getOwnPropertyDescriptors(object) {
    var O = toIObject(object);
    var getDesc = gOPD.f;
    var keys = ownKeys(O);
    var result = {};
    var i = 0;
    var key, desc;
    while (keys.length > i) {
      desc = getDesc(O, key = keys[i++]);
      if (desc !== undefined) createProperty(result, key, desc);
    }
    return result;
  }
});
";
        
        $__internal_723a668f286088da23da8e258c1ae85d8d9ae741e299bb1d493030eb424927c9->leave($__internal_723a668f286088da23da8e258c1ae85d8d9ae741e299bb1d493030eb424927c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.object.get-own-property-descriptors.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-object-getownpropertydescriptors
var \$export = require('./_export');
var ownKeys = require('./_own-keys');
var toIObject = require('./_to-iobject');
var gOPD = require('./_object-gopd');
var createProperty = require('./_create-property');

\$export(\$export.S, 'Object', {
  getOwnPropertyDescriptors: function getOwnPropertyDescriptors(object) {
    var O = toIObject(object);
    var getDesc = gOPD.f;
    var keys = ownKeys(O);
    var result = {};
    var i = 0;
    var key, desc;
    while (keys.length > i) {
      desc = getDesc(O, key = keys[i++]);
      if (desc !== undefined) createProperty(result, key, desc);
    }
    return result;
  }
});
", "node_modules/core-js/modules/es7.object.get-own-property-descriptors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.object.get-own-property-descriptors.js");
    }
}
