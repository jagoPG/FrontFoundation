<?php

/* node_modules/core-js/library/modules/es6.function.has-instance.js */
class __TwigTemplate_b251ed76464864ba785ee9f4db5d88c34daf1a2406fce60bce02b4e0a3b5a72b extends Twig_Template
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
        $__internal_7aead3b53e05b77bb4fbf96e8617152c8b529b2bf634407cb17103c8ed7c84cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aead3b53e05b77bb4fbf96e8617152c8b529b2bf634407cb17103c8ed7c84cf->enter($__internal_7aead3b53e05b77bb4fbf96e8617152c8b529b2bf634407cb17103c8ed7c84cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.function.has-instance.js"));

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
        
        $__internal_7aead3b53e05b77bb4fbf96e8617152c8b529b2bf634407cb17103c8ed7c84cf->leave($__internal_7aead3b53e05b77bb4fbf96e8617152c8b529b2bf634407cb17103c8ed7c84cf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.function.has-instance.js";
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
", "node_modules/core-js/library/modules/es6.function.has-instance.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.function.has-instance.js");
    }
}
