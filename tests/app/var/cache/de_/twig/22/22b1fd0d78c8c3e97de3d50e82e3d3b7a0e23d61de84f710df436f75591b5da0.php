<?php

/* node_modules/core-js/library/modules/_promise-resolve.js */
class __TwigTemplate_9bb3cc619c2707bf6c284e27c0090ad7f51b35f6a60e227a384dd9a8e432a5b5 extends Twig_Template
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
        $__internal_ca1c9da8d54c2aac52a959bac234eb2d09719aef94762859ce38ea66c410a45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1c9da8d54c2aac52a959bac234eb2d09719aef94762859ce38ea66c410a45e->enter($__internal_ca1c9da8d54c2aac52a959bac234eb2d09719aef94762859ce38ea66c410a45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_promise-resolve.js"));

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
        
        $__internal_ca1c9da8d54c2aac52a959bac234eb2d09719aef94762859ce38ea66c410a45e->leave($__internal_ca1c9da8d54c2aac52a959bac234eb2d09719aef94762859ce38ea66c410a45e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_promise-resolve.js";
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
", "node_modules/core-js/library/modules/_promise-resolve.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_promise-resolve.js");
    }
}
