<?php

/* node_modules/core-js/modules/_species-constructor.js */
class __TwigTemplate_ffb0b148a7963719a70280bb68f0b15c88d0af0cb3ee10454afc3b73361063c5 extends Twig_Template
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
        $__internal_e1dd4d18b269d7e43094dfc8a2fad5198aa96896bdb6015ece5678c83a15129a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1dd4d18b269d7e43094dfc8a2fad5198aa96896bdb6015ece5678c83a15129a->enter($__internal_e1dd4d18b269d7e43094dfc8a2fad5198aa96896bdb6015ece5678c83a15129a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_species-constructor.js"));

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
        
        $__internal_e1dd4d18b269d7e43094dfc8a2fad5198aa96896bdb6015ece5678c83a15129a->leave($__internal_e1dd4d18b269d7e43094dfc8a2fad5198aa96896bdb6015ece5678c83a15129a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_species-constructor.js";
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
", "node_modules/core-js/modules/_species-constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_species-constructor.js");
    }
}
