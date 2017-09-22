<?php

/* node_modules/core-js/library/modules/es6.object.get-prototype-of.js */
class __TwigTemplate_a9dca5a4b59e837640d03fb5acb17414eb7637267a6976bf58f1a70eaefb5a52 extends Twig_Template
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
        $__internal_79f772580592802378a71adcebadad2c668527161fcb34f831d6554d920349e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f772580592802378a71adcebadad2c668527161fcb34f831d6554d920349e1->enter($__internal_79f772580592802378a71adcebadad2c668527161fcb34f831d6554d920349e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.get-prototype-of.js"));

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
        
        $__internal_79f772580592802378a71adcebadad2c668527161fcb34f831d6554d920349e1->leave($__internal_79f772580592802378a71adcebadad2c668527161fcb34f831d6554d920349e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.get-prototype-of.js";
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
", "node_modules/core-js/library/modules/es6.object.get-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.get-prototype-of.js");
    }
}
