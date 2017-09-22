<?php

/* node_modules/core-js/modules/_partial.js */
class __TwigTemplate_62c2282787affc071aff4b2f5efb5371676f5395a8290e4fa0bc344acb338fd7 extends Twig_Template
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
        $__internal_7e859afd1dc191462077d539edb2e7ad878ee2cc8c26e0d08e1c71c57e4f4431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e859afd1dc191462077d539edb2e7ad878ee2cc8c26e0d08e1c71c57e4f4431->enter($__internal_7e859afd1dc191462077d539edb2e7ad878ee2cc8c26e0d08e1c71c57e4f4431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_partial.js"));

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
        
        $__internal_7e859afd1dc191462077d539edb2e7ad878ee2cc8c26e0d08e1c71c57e4f4431->leave($__internal_7e859afd1dc191462077d539edb2e7ad878ee2cc8c26e0d08e1c71c57e4f4431_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_partial.js";
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
", "node_modules/core-js/modules/_partial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_partial.js");
    }
}
