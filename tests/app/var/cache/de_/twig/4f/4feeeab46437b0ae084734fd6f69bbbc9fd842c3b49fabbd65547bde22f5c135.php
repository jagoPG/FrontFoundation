<?php

/* node_modules/core-js/library/modules/es7.object.get-own-property-descriptors.js */
class __TwigTemplate_3081eeaa93deb605d39a500e4f571c3ac7d8aa309c2a2724434e10dba3e201e7 extends Twig_Template
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
        $__internal_ff1377084cb9957e545f8cd1fca48e931ebfaa2142626be0007bf72242bc154c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1377084cb9957e545f8cd1fca48e931ebfaa2142626be0007bf72242bc154c->enter($__internal_ff1377084cb9957e545f8cd1fca48e931ebfaa2142626be0007bf72242bc154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.object.get-own-property-descriptors.js"));

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
        
        $__internal_ff1377084cb9957e545f8cd1fca48e931ebfaa2142626be0007bf72242bc154c->leave($__internal_ff1377084cb9957e545f8cd1fca48e931ebfaa2142626be0007bf72242bc154c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.object.get-own-property-descriptors.js";
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
", "node_modules/core-js/library/modules/es7.object.get-own-property-descriptors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.object.get-own-property-descriptors.js");
    }
}
