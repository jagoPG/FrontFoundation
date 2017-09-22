<?php

/* node_modules/core-js/library/modules/_object-define.js */
class __TwigTemplate_5d6ee32c9b4d99672e7663e8d389590cf3cc2f713384fe1aca391b56e2bcc3ba extends Twig_Template
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
        $__internal_5e419a79621fa95ad569f5c750b83e47e2edc6fd514a56e306770ab5e079fa19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e419a79621fa95ad569f5c750b83e47e2edc6fd514a56e306770ab5e079fa19->enter($__internal_5e419a79621fa95ad569f5c750b83e47e2edc6fd514a56e306770ab5e079fa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-define.js"));

        // line 1
        echo "var dP = require('./_object-dp');
var gOPD = require('./_object-gopd');
var ownKeys = require('./_own-keys');
var toIObject = require('./_to-iobject');

module.exports = function define(target, mixin) {
  var keys = ownKeys(toIObject(mixin));
  var length = keys.length;
  var i = 0;
  var key;
  while (length > i) dP.f(target, key = keys[i++], gOPD.f(mixin, key));
  return target;
};
";
        
        $__internal_5e419a79621fa95ad569f5c750b83e47e2edc6fd514a56e306770ab5e079fa19->leave($__internal_5e419a79621fa95ad569f5c750b83e47e2edc6fd514a56e306770ab5e079fa19_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var dP = require('./_object-dp');
var gOPD = require('./_object-gopd');
var ownKeys = require('./_own-keys');
var toIObject = require('./_to-iobject');

module.exports = function define(target, mixin) {
  var keys = ownKeys(toIObject(mixin));
  var length = keys.length;
  var i = 0;
  var key;
  while (length > i) dP.f(target, key = keys[i++], gOPD.f(mixin, key));
  return target;
};
", "node_modules/core-js/library/modules/_object-define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-define.js");
    }
}
