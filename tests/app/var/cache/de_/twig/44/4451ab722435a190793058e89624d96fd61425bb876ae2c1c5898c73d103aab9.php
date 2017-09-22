<?php

/* node_modules/core-js/library/modules/es7.promise.finally.js */
class __TwigTemplate_f1345715c26e1b783f190288c025b7f280af3c48bd9e83864044ecb52870c05d extends Twig_Template
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
        $__internal_fd4774a0e992bec340e1ffd16d248e0f134c12109b1b4bc193cd31b160ed3a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4774a0e992bec340e1ffd16d248e0f134c12109b1b4bc193cd31b160ed3a02->enter($__internal_fd4774a0e992bec340e1ffd16d248e0f134c12109b1b4bc193cd31b160ed3a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.promise.finally.js"));

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
        
        $__internal_fd4774a0e992bec340e1ffd16d248e0f134c12109b1b4bc193cd31b160ed3a02->leave($__internal_fd4774a0e992bec340e1ffd16d248e0f134c12109b1b4bc193cd31b160ed3a02_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.promise.finally.js";
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
", "node_modules/core-js/library/modules/es7.promise.finally.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.promise.finally.js");
    }
}
