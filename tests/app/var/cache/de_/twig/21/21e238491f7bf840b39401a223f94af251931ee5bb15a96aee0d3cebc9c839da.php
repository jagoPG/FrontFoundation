<?php

/* node_modules/core-js/modules/es6.function.has-instance.js */
class __TwigTemplate_b3c6f0ec7bbe619fb87f8cb8c04db46547b594a7c97a7fc6724e6e656653f639 extends Twig_Template
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
        $__internal_81c5036580bc4db575e0bd403590d70ad020161c14f4901268d6694e686218cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c5036580bc4db575e0bd403590d70ad020161c14f4901268d6694e686218cc->enter($__internal_81c5036580bc4db575e0bd403590d70ad020161c14f4901268d6694e686218cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.function.has-instance.js"));

        // line 1
        echo "'use strict';
var isObject = require('./_is-object');
var getPrototypeOf = require('./_object-gpo');
var HAS_INSTANCE = require('./_wks')('hasInstance');
var FunctionProto = Function.prototype;
// 19.2.3.6 Function.prototype[@@hasInstance](V)
if (!(HAS_INSTANCE in FunctionProto)) require('./_object-dp').f(FunctionProto, HAS_INSTANCE, { value: function (O) {
  if (typeof this != 'function' || !isObject(O)) return false;
  if (!isObject(this.prototype)) return O instanceof this;
  // for environment w/o native `@@hasInstance` logic enough `instanceof`, but add this:
  while (O = getPrototypeOf(O)) if (this.prototype === O) return true;
  return false;
} });
";
        
        $__internal_81c5036580bc4db575e0bd403590d70ad020161c14f4901268d6694e686218cc->leave($__internal_81c5036580bc4db575e0bd403590d70ad020161c14f4901268d6694e686218cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.function.has-instance.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var isObject = require('./_is-object');
var getPrototypeOf = require('./_object-gpo');
var HAS_INSTANCE = require('./_wks')('hasInstance');
var FunctionProto = Function.prototype;
// 19.2.3.6 Function.prototype[@@hasInstance](V)
if (!(HAS_INSTANCE in FunctionProto)) require('./_object-dp').f(FunctionProto, HAS_INSTANCE, { value: function (O) {
  if (typeof this != 'function' || !isObject(O)) return false;
  if (!isObject(this.prototype)) return O instanceof this;
  // for environment w/o native `@@hasInstance` logic enough `instanceof`, but add this:
  while (O = getPrototypeOf(O)) if (this.prototype === O) return true;
  return false;
} });
", "node_modules/core-js/modules/es6.function.has-instance.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.function.has-instance.js");
    }
}
