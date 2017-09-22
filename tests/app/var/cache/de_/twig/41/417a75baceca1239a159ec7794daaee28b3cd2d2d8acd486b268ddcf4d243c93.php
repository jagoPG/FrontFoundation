<?php

/* node_modules/core-js/modules/_promise-resolve.js */
class __TwigTemplate_662431662a84c1daa82f65d0629250b0c31e18878e9c5ad5bcf54ed3eb5739cb extends Twig_Template
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
        $__internal_823b6a41942bc9082d61272f4634d3b0bc838aa849e7b67374db773fad8c08c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823b6a41942bc9082d61272f4634d3b0bc838aa849e7b67374db773fad8c08c3->enter($__internal_823b6a41942bc9082d61272f4634d3b0bc838aa849e7b67374db773fad8c08c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_promise-resolve.js"));

        // line 1
        echo "var anObject = require('./_an-object');
var isObject = require('./_is-object');
var newPromiseCapability = require('./_new-promise-capability');

module.exports = function (C, x) {
  anObject(C);
  if (isObject(x) && x.constructor === C) return x;
  var promiseCapability = newPromiseCapability.f(C);
  var resolve = promiseCapability.resolve;
  resolve(x);
  return promiseCapability.promise;
};
";
        
        $__internal_823b6a41942bc9082d61272f4634d3b0bc838aa849e7b67374db773fad8c08c3->leave($__internal_823b6a41942bc9082d61272f4634d3b0bc838aa849e7b67374db773fad8c08c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_promise-resolve.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var anObject = require('./_an-object');
var isObject = require('./_is-object');
var newPromiseCapability = require('./_new-promise-capability');

module.exports = function (C, x) {
  anObject(C);
  if (isObject(x) && x.constructor === C) return x;
  var promiseCapability = newPromiseCapability.f(C);
  var resolve = promiseCapability.resolve;
  resolve(x);
  return promiseCapability.promise;
};
", "node_modules/core-js/modules/_promise-resolve.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_promise-resolve.js");
    }
}
