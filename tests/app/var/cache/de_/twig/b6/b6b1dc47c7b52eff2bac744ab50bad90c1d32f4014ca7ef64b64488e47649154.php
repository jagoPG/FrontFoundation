<?php

/* node_modules/core-js/library/modules/_object-dps.js */
class __TwigTemplate_b970c5fb3db4b5593f63f73b01f7803e37b3a778a4601ab236b041dcf3abea30 extends Twig_Template
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
        $__internal_30180a95703d2e210ee4f30e95a7e32f24f3df474f99c0f96c55589b045fefa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30180a95703d2e210ee4f30e95a7e32f24f3df474f99c0f96c55589b045fefa6->enter($__internal_30180a95703d2e210ee4f30e95a7e32f24f3df474f99c0f96c55589b045fefa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-dps.js"));

        // line 1
        echo "var dP = require('./_object-dp');
var anObject = require('./_an-object');
var getKeys = require('./_object-keys');

module.exports = require('./_descriptors') ? Object.defineProperties : function defineProperties(O, Properties) {
  anObject(O);
  var keys = getKeys(Properties);
  var length = keys.length;
  var i = 0;
  var P;
  while (length > i) dP.f(O, P = keys[i++], Properties[P]);
  return O;
};
";
        
        $__internal_30180a95703d2e210ee4f30e95a7e32f24f3df474f99c0f96c55589b045fefa6->leave($__internal_30180a95703d2e210ee4f30e95a7e32f24f3df474f99c0f96c55589b045fefa6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-dps.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var dP = require('./_object-dp');
var anObject = require('./_an-object');
var getKeys = require('./_object-keys');

module.exports = require('./_descriptors') ? Object.defineProperties : function defineProperties(O, Properties) {
  anObject(O);
  var keys = getKeys(Properties);
  var length = keys.length;
  var i = 0;
  var P;
  while (length > i) dP.f(O, P = keys[i++], Properties[P]);
  return O;
};
", "node_modules/core-js/library/modules/_object-dps.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-dps.js");
    }
}
