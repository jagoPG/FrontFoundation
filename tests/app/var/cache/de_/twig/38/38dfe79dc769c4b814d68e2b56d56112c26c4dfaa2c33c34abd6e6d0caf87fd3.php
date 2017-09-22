<?php

/* node_modules/core-js/modules/_own-keys.js */
class __TwigTemplate_8fe994691f1cd1fb3b91a81d2276e7beae1d899d129f160d2f48cc336f1f30b3 extends Twig_Template
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
        $__internal_81c6d9f55f068a9fe4ecc14a3957cc2c5deaf2fefa2d7d4561d2f9b6aef604ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c6d9f55f068a9fe4ecc14a3957cc2c5deaf2fefa2d7d4561d2f9b6aef604ae->enter($__internal_81c6d9f55f068a9fe4ecc14a3957cc2c5deaf2fefa2d7d4561d2f9b6aef604ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_own-keys.js"));

        // line 1
        echo "// all object keys, includes non-enumerable and symbols
var gOPN = require('./_object-gopn');
var gOPS = require('./_object-gops');
var anObject = require('./_an-object');
var Reflect = require('./_global').Reflect;
module.exports = Reflect && Reflect.ownKeys || function ownKeys(it) {
  var keys = gOPN.f(anObject(it));
  var getSymbols = gOPS.f;
  return getSymbols ? keys.concat(getSymbols(it)) : keys;
};
";
        
        $__internal_81c6d9f55f068a9fe4ecc14a3957cc2c5deaf2fefa2d7d4561d2f9b6aef604ae->leave($__internal_81c6d9f55f068a9fe4ecc14a3957cc2c5deaf2fefa2d7d4561d2f9b6aef604ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_own-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// all object keys, includes non-enumerable and symbols
var gOPN = require('./_object-gopn');
var gOPS = require('./_object-gops');
var anObject = require('./_an-object');
var Reflect = require('./_global').Reflect;
module.exports = Reflect && Reflect.ownKeys || function ownKeys(it) {
  var keys = gOPN.f(anObject(it));
  var getSymbols = gOPS.f;
  return getSymbols ? keys.concat(getSymbols(it)) : keys;
};
", "node_modules/core-js/modules/_own-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_own-keys.js");
    }
}
