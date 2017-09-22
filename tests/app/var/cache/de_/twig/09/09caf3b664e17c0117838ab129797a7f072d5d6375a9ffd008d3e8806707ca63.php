<?php

/* node_modules/core-js/modules/es7.promise.try.js */
class __TwigTemplate_f7e0b24176ead4de00fe21e525ec55a26a3ee2cd09a62c261bdd0e384f64deb0 extends Twig_Template
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
        $__internal_6db4e22a41337d3ac9b3a53c383b910220c54d4248c2d1587ce8aa2fd4f157d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db4e22a41337d3ac9b3a53c383b910220c54d4248c2d1587ce8aa2fd4f157d8->enter($__internal_6db4e22a41337d3ac9b3a53c383b910220c54d4248c2d1587ce8aa2fd4f157d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.promise.try.js"));

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
        
        $__internal_6db4e22a41337d3ac9b3a53c383b910220c54d4248c2d1587ce8aa2fd4f157d8->leave($__internal_6db4e22a41337d3ac9b3a53c383b910220c54d4248c2d1587ce8aa2fd4f157d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.promise.try.js";
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
", "node_modules/core-js/modules/es7.promise.try.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.promise.try.js");
    }
}
