<?php

/* node_modules/core-js/library/modules/es7.promise.try.js */
class __TwigTemplate_c537bf34acdd523fe0c5251f76f019e5cd59e7925bbf458690356ad9ef10dc2f extends Twig_Template
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
        $__internal_21d8ad6b996194176a6d2a41cad4d6ed4a3d2b016bbab0cf0c916e91a0aa911a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d8ad6b996194176a6d2a41cad4d6ed4a3d2b016bbab0cf0c916e91a0aa911a->enter($__internal_21d8ad6b996194176a6d2a41cad4d6ed4a3d2b016bbab0cf0c916e91a0aa911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.promise.try.js"));

        // line 1
        echo "'use strict';
// https://github.com/tc39/proposal-promise-try
var \$export = require('./_export');
var newPromiseCapability = require('./_new-promise-capability');
var perform = require('./_perform');

\$export(\$export.S, 'Promise', { 'try': function (callbackfn) {
  var promiseCapability = newPromiseCapability.f(this);
  var result = perform(callbackfn);
  (result.e ? promiseCapability.reject : promiseCapability.resolve)(result.v);
  return promiseCapability.promise;
} });
";
        
        $__internal_21d8ad6b996194176a6d2a41cad4d6ed4a3d2b016bbab0cf0c916e91a0aa911a->leave($__internal_21d8ad6b996194176a6d2a41cad4d6ed4a3d2b016bbab0cf0c916e91a0aa911a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.promise.try.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/tc39/proposal-promise-try
var \$export = require('./_export');
var newPromiseCapability = require('./_new-promise-capability');
var perform = require('./_perform');

\$export(\$export.S, 'Promise', { 'try': function (callbackfn) {
  var promiseCapability = newPromiseCapability.f(this);
  var result = perform(callbackfn);
  (result.e ? promiseCapability.reject : promiseCapability.resolve)(result.v);
  return promiseCapability.promise;
} });
", "node_modules/core-js/library/modules/es7.promise.try.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.promise.try.js");
    }
}
