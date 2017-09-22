<?php

/* node_modules/core-js/modules/_enum-keys.js */
class __TwigTemplate_5bc82df8ffec226cf42ce245948985b2d32f166144a9f9c562b33c2c19051c31 extends Twig_Template
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
        $__internal_45c88e239e521f8a3309fe35357b54844de82eb115a5f08f512cc239f8537c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c88e239e521f8a3309fe35357b54844de82eb115a5f08f512cc239f8537c11->enter($__internal_45c88e239e521f8a3309fe35357b54844de82eb115a5f08f512cc239f8537c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_enum-keys.js"));

        // line 1
        echo "// all enumerable object keys, includes symbols
var getKeys = require('./_object-keys');
var gOPS = require('./_object-gops');
var pIE = require('./_object-pie');
module.exports = function (it) {
  var result = getKeys(it);
  var getSymbols = gOPS.f;
  if (getSymbols) {
    var symbols = getSymbols(it);
    var isEnum = pIE.f;
    var i = 0;
    var key;
    while (symbols.length > i) if (isEnum.call(it, key = symbols[i++])) result.push(key);
  } return result;
};
";
        
        $__internal_45c88e239e521f8a3309fe35357b54844de82eb115a5f08f512cc239f8537c11->leave($__internal_45c88e239e521f8a3309fe35357b54844de82eb115a5f08f512cc239f8537c11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_enum-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// all enumerable object keys, includes symbols
var getKeys = require('./_object-keys');
var gOPS = require('./_object-gops');
var pIE = require('./_object-pie');
module.exports = function (it) {
  var result = getKeys(it);
  var getSymbols = gOPS.f;
  if (getSymbols) {
    var symbols = getSymbols(it);
    var isEnum = pIE.f;
    var i = 0;
    var key;
    while (symbols.length > i) if (isEnum.call(it, key = symbols[i++])) result.push(key);
  } return result;
};
", "node_modules/core-js/modules/_enum-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_enum-keys.js");
    }
}
