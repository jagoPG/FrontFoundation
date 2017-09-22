<?php

/* node_modules/core-js/modules/es6.object.get-prototype-of.js */
class __TwigTemplate_7ea1bd5a2e9e0f20c503ddc96a1b350aa34bf5b52c06d08c6af14e14207bd97d extends Twig_Template
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
        $__internal_d677007cad608efa446d98a842c5c2a5f4ff4dbab167cf04a2e9eb75dff5177b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d677007cad608efa446d98a842c5c2a5f4ff4dbab167cf04a2e9eb75dff5177b->enter($__internal_d677007cad608efa446d98a842c5c2a5f4ff4dbab167cf04a2e9eb75dff5177b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.get-prototype-of.js"));

        // line 1
        echo "// 19.1.2.9 Object.getPrototypeOf(O)
var toObject = require('./_to-object');
var \$getPrototypeOf = require('./_object-gpo');

require('./_object-sap')('getPrototypeOf', function () {
  return function getPrototypeOf(it) {
    return \$getPrototypeOf(toObject(it));
  };
});
";
        
        $__internal_d677007cad608efa446d98a842c5c2a5f4ff4dbab167cf04a2e9eb75dff5177b->leave($__internal_d677007cad608efa446d98a842c5c2a5f4ff4dbab167cf04a2e9eb75dff5177b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.get-prototype-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.9 Object.getPrototypeOf(O)
var toObject = require('./_to-object');
var \$getPrototypeOf = require('./_object-gpo');

require('./_object-sap')('getPrototypeOf', function () {
  return function getPrototypeOf(it) {
    return \$getPrototypeOf(toObject(it));
  };
});
", "node_modules/core-js/modules/es6.object.get-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.get-prototype-of.js");
    }
}
