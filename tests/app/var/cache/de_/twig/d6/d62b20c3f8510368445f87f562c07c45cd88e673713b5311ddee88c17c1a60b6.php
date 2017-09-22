<?php

/* node_modules/core-js/modules/_object-define.js */
class __TwigTemplate_1b30d5f8d7f576ef98f9d1cc165fbcdeb48721a3a30592e98e085d10eba3f49d extends Twig_Template
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
        $__internal_456e8a3dd82a36931f0ca9a404f4b754ff8272c7d5ac97c2baa4115667a07022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456e8a3dd82a36931f0ca9a404f4b754ff8272c7d5ac97c2baa4115667a07022->enter($__internal_456e8a3dd82a36931f0ca9a404f4b754ff8272c7d5ac97c2baa4115667a07022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-define.js"));

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
        
        $__internal_456e8a3dd82a36931f0ca9a404f4b754ff8272c7d5ac97c2baa4115667a07022->leave($__internal_456e8a3dd82a36931f0ca9a404f4b754ff8272c7d5ac97c2baa4115667a07022_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-define.js";
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
", "node_modules/core-js/modules/_object-define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-define.js");
    }
}
