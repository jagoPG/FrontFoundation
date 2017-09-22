<?php

/* node_modules/core-js/library/modules/_enum-keys.js */
class __TwigTemplate_edf7fbeab611260ccdadaff8900a252c1fab9db5b86ad1f2913e0a35ed4ef6ee extends Twig_Template
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
        $__internal_f6d60e908b7b8da732ca6200200da3c639cdd32998555748940a885c226dad20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d60e908b7b8da732ca6200200da3c639cdd32998555748940a885c226dad20->enter($__internal_f6d60e908b7b8da732ca6200200da3c639cdd32998555748940a885c226dad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_enum-keys.js"));

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
        
        $__internal_f6d60e908b7b8da732ca6200200da3c639cdd32998555748940a885c226dad20->leave($__internal_f6d60e908b7b8da732ca6200200da3c639cdd32998555748940a885c226dad20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_enum-keys.js";
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
", "node_modules/core-js/library/modules/_enum-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_enum-keys.js");
    }
}
