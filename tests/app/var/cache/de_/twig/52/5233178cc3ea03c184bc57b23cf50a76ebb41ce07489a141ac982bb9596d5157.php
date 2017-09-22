<?php

/* node_modules/core-js/modules/es6.object.freeze.js */
class __TwigTemplate_696294823432a4036917a58f999ffdec44a0c5ed7924d096f32f2a14395440d0 extends Twig_Template
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
        $__internal_f90044f262887fb627ef9fe3779d73ac819fac9d97049123868e36fe83283acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90044f262887fb627ef9fe3779d73ac819fac9d97049123868e36fe83283acc->enter($__internal_f90044f262887fb627ef9fe3779d73ac819fac9d97049123868e36fe83283acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.freeze.js"));

        // line 1
        echo "// 19.1.2.5 Object.freeze(O)
var isObject = require('./_is-object');
var meta = require('./_meta').onFreeze;

require('./_object-sap')('freeze', function (\$freeze) {
  return function freeze(it) {
    return \$freeze && isObject(it) ? \$freeze(meta(it)) : it;
  };
});
";
        
        $__internal_f90044f262887fb627ef9fe3779d73ac819fac9d97049123868e36fe83283acc->leave($__internal_f90044f262887fb627ef9fe3779d73ac819fac9d97049123868e36fe83283acc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.freeze.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.5 Object.freeze(O)
var isObject = require('./_is-object');
var meta = require('./_meta').onFreeze;

require('./_object-sap')('freeze', function (\$freeze) {
  return function freeze(it) {
    return \$freeze && isObject(it) ? \$freeze(meta(it)) : it;
  };
});
", "node_modules/core-js/modules/es6.object.freeze.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.freeze.js");
    }
}
