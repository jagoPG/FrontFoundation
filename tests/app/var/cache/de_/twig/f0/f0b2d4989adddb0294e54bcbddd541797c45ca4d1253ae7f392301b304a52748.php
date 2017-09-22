<?php

/* node_modules/core-js/modules/_object-dps.js */
class __TwigTemplate_e8be5a03d7d5e75023da9868aac05531a89612c12f87b81507e6d578c99bb657 extends Twig_Template
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
        $__internal_c76c8a953c03327531c83d18998fa58a070ad49a9e18c277669b38a6057e4d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76c8a953c03327531c83d18998fa58a070ad49a9e18c277669b38a6057e4d6e->enter($__internal_c76c8a953c03327531c83d18998fa58a070ad49a9e18c277669b38a6057e4d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-dps.js"));

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
        
        $__internal_c76c8a953c03327531c83d18998fa58a070ad49a9e18c277669b38a6057e4d6e->leave($__internal_c76c8a953c03327531c83d18998fa58a070ad49a9e18c277669b38a6057e4d6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-dps.js";
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
", "node_modules/core-js/modules/_object-dps.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-dps.js");
    }
}
