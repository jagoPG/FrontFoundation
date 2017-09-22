<?php

/* node_modules/core-js/library/modules/_species-constructor.js */
class __TwigTemplate_610035d85ea46a62cbf452f221f06d384ba2e0da0c63bb98e4378bc5b2f9d60f extends Twig_Template
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
        $__internal_f2f7007ec357ee5a9d792b526824eb3ec2245e17c65c2285b9491e56db520282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f7007ec357ee5a9d792b526824eb3ec2245e17c65c2285b9491e56db520282->enter($__internal_f2f7007ec357ee5a9d792b526824eb3ec2245e17c65c2285b9491e56db520282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_species-constructor.js"));

        // line 1
        echo "// 7.3.20 SpeciesConstructor(O, defaultConstructor)
var anObject = require('./_an-object');
var aFunction = require('./_a-function');
var SPECIES = require('./_wks')('species');
module.exports = function (O, D) {
  var C = anObject(O).constructor;
  var S;
  return C === undefined || (S = anObject(C)[SPECIES]) == undefined ? D : aFunction(S);
};
";
        
        $__internal_f2f7007ec357ee5a9d792b526824eb3ec2245e17c65c2285b9491e56db520282->leave($__internal_f2f7007ec357ee5a9d792b526824eb3ec2245e17c65c2285b9491e56db520282_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_species-constructor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.3.20 SpeciesConstructor(O, defaultConstructor)
var anObject = require('./_an-object');
var aFunction = require('./_a-function');
var SPECIES = require('./_wks')('species');
module.exports = function (O, D) {
  var C = anObject(O).constructor;
  var S;
  return C === undefined || (S = anObject(C)[SPECIES]) == undefined ? D : aFunction(S);
};
", "node_modules/core-js/library/modules/_species-constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_species-constructor.js");
    }
}
