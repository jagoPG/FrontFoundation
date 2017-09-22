<?php

/* node_modules/core-js/library/modules/_own-keys.js */
class __TwigTemplate_8f00b8fd4e4cd1761d8112baa6b0afb8ac5a936511fea8b2da480ff3a8342ac8 extends Twig_Template
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
        $__internal_14c49f3ed3464f5117ba86f67760af4fb20a36cb709d1f47edcbe0759c84bf42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c49f3ed3464f5117ba86f67760af4fb20a36cb709d1f47edcbe0759c84bf42->enter($__internal_14c49f3ed3464f5117ba86f67760af4fb20a36cb709d1f47edcbe0759c84bf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_own-keys.js"));

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
        
        $__internal_14c49f3ed3464f5117ba86f67760af4fb20a36cb709d1f47edcbe0759c84bf42->leave($__internal_14c49f3ed3464f5117ba86f67760af4fb20a36cb709d1f47edcbe0759c84bf42_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_own-keys.js";
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
", "node_modules/core-js/library/modules/_own-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_own-keys.js");
    }
}
