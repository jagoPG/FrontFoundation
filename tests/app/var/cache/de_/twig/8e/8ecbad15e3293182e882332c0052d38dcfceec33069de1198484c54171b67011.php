<?php

/* node_modules/core-js/modules/es7.promise.finally.js */
class __TwigTemplate_4553a454a468c48da36912ae5fd7ca165e9d0d654cb201e70a8446da6a7bdef2 extends Twig_Template
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
        $__internal_2bfe729a3928fc9576ee760434dabe7451fe4dee4743a0da4485162d352e0cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfe729a3928fc9576ee760434dabe7451fe4dee4743a0da4485162d352e0cf7->enter($__internal_2bfe729a3928fc9576ee760434dabe7451fe4dee4743a0da4485162d352e0cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.promise.finally.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-promise-finally
'use strict';
var \$export = require('./_export');
var core = require('./_core');
var global = require('./_global');
var speciesConstructor = require('./_species-constructor');
var promiseResolve = require('./_promise-resolve');

\$export(\$export.P + \$export.R, 'Promise', { 'finally': function (onFinally) {
  var C = speciesConstructor(this, core.Promise || global.Promise);
  var isFunction = typeof onFinally == 'function';
  return this.then(
    isFunction ? function (x) {
      return promiseResolve(C, onFinally()).then(function () { return x; });
    } : onFinally,
    isFunction ? function (e) {
      return promiseResolve(C, onFinally()).then(function () { throw e; });
    } : onFinally
  );
} });
";
        
        $__internal_2bfe729a3928fc9576ee760434dabe7451fe4dee4743a0da4485162d352e0cf7->leave($__internal_2bfe729a3928fc9576ee760434dabe7451fe4dee4743a0da4485162d352e0cf7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.promise.finally.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-promise-finally
'use strict';
var \$export = require('./_export');
var core = require('./_core');
var global = require('./_global');
var speciesConstructor = require('./_species-constructor');
var promiseResolve = require('./_promise-resolve');

\$export(\$export.P + \$export.R, 'Promise', { 'finally': function (onFinally) {
  var C = speciesConstructor(this, core.Promise || global.Promise);
  var isFunction = typeof onFinally == 'function';
  return this.then(
    isFunction ? function (x) {
      return promiseResolve(C, onFinally()).then(function () { return x; });
    } : onFinally,
    isFunction ? function (e) {
      return promiseResolve(C, onFinally()).then(function () { throw e; });
    } : onFinally
  );
} });
", "node_modules/core-js/modules/es7.promise.finally.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.promise.finally.js");
    }
}
