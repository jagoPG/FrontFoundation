<?php

/* node_modules/core-js/library/modules/_partial.js */
class __TwigTemplate_541da7857fd3ca8d5d2bd9e353c3f1158a6c3bdec140b1d9a086e5bd45c1580c extends Twig_Template
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
        $__internal_85884b2dc795d9386b088c61de4c3c23510d71cc98d5245ca02f5ab84da9c924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85884b2dc795d9386b088c61de4c3c23510d71cc98d5245ca02f5ab84da9c924->enter($__internal_85884b2dc795d9386b088c61de4c3c23510d71cc98d5245ca02f5ab84da9c924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_partial.js"));

        // line 1
        echo "'use strict';
var path = require('./_path');
var invoke = require('./_invoke');
var aFunction = require('./_a-function');
module.exports = function (/* ...pargs */) {
  var fn = aFunction(this);
  var length = arguments.length;
  var pargs = Array(length);
  var i = 0;
  var _ = path._;
  var holder = false;
  while (length > i) if ((pargs[i] = arguments[i++]) === _) holder = true;
  return function (/* ...args */) {
    var that = this;
    var aLen = arguments.length;
    var j = 0;
    var k = 0;
    var args;
    if (!holder && !aLen) return invoke(fn, pargs, that);
    args = pargs.slice();
    if (holder) for (;length > j; j++) if (args[j] === _) args[j] = arguments[k++];
    while (aLen > k) args.push(arguments[k++]);
    return invoke(fn, args, that);
  };
};
";
        
        $__internal_85884b2dc795d9386b088c61de4c3c23510d71cc98d5245ca02f5ab84da9c924->leave($__internal_85884b2dc795d9386b088c61de4c3c23510d71cc98d5245ca02f5ab84da9c924_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_partial.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var path = require('./_path');
var invoke = require('./_invoke');
var aFunction = require('./_a-function');
module.exports = function (/* ...pargs */) {
  var fn = aFunction(this);
  var length = arguments.length;
  var pargs = Array(length);
  var i = 0;
  var _ = path._;
  var holder = false;
  while (length > i) if ((pargs[i] = arguments[i++]) === _) holder = true;
  return function (/* ...args */) {
    var that = this;
    var aLen = arguments.length;
    var j = 0;
    var k = 0;
    var args;
    if (!holder && !aLen) return invoke(fn, pargs, that);
    args = pargs.slice();
    if (holder) for (;length > j; j++) if (args[j] === _) args[j] = arguments[k++];
    while (aLen > k) args.push(arguments[k++]);
    return invoke(fn, args, that);
  };
};
", "node_modules/core-js/library/modules/_partial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_partial.js");
    }
}
