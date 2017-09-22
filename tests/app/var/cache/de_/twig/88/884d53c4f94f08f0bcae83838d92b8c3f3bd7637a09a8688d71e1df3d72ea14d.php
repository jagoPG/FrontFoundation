<?php

/* node_modules/core-js/modules/es6.string.iterator.js */
class __TwigTemplate_4b2815fc3578f985f914f9a2a3a494d5dd163e99b26dbbf0f0249a920a16df0a extends Twig_Template
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
        $__internal_429335e4c94d28687eb23365b318cd05c21e33914efc64b48c69756950229954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429335e4c94d28687eb23365b318cd05c21e33914efc64b48c69756950229954->enter($__internal_429335e4c94d28687eb23365b318cd05c21e33914efc64b48c69756950229954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.iterator.js"));

        // line 1
        echo "'use strict';
var \$at = require('./_string-at')(true);

// 21.1.3.27 String.prototype[@@iterator]()
require('./_iter-define')(String, 'String', function (iterated) {
  this._t = String(iterated); // target
  this._i = 0;                // next index
// 21.1.5.2.1 %StringIteratorPrototype%.next()
}, function () {
  var O = this._t;
  var index = this._i;
  var point;
  if (index >= O.length) return { value: undefined, done: true };
  point = \$at(O, index);
  this._i += point.length;
  return { value: point, done: false };
});
";
        
        $__internal_429335e4c94d28687eb23365b318cd05c21e33914efc64b48c69756950229954->leave($__internal_429335e4c94d28687eb23365b318cd05c21e33914efc64b48c69756950229954_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$at = require('./_string-at')(true);

// 21.1.3.27 String.prototype[@@iterator]()
require('./_iter-define')(String, 'String', function (iterated) {
  this._t = String(iterated); // target
  this._i = 0;                // next index
// 21.1.5.2.1 %StringIteratorPrototype%.next()
}, function () {
  var O = this._t;
  var index = this._i;
  var point;
  if (index >= O.length) return { value: undefined, done: true };
  point = \$at(O, index);
  this._i += point.length;
  return { value: point, done: false };
});
", "node_modules/core-js/modules/es6.string.iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.iterator.js");
    }
}
