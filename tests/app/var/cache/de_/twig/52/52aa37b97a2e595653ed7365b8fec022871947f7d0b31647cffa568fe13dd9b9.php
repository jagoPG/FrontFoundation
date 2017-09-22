<?php

/* node_modules/core-js/library/modules/_is-regexp.js */
class __TwigTemplate_481406109fbe86778e2d49991bf22b3305db308435f6ab1aeb33feb1330af4f6 extends Twig_Template
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
        $__internal_d72f8a693e380272167892fee728ddfe69c74726ed38ab25ddbf8dff15f1c2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72f8a693e380272167892fee728ddfe69c74726ed38ab25ddbf8dff15f1c2a6->enter($__internal_d72f8a693e380272167892fee728ddfe69c74726ed38ab25ddbf8dff15f1c2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_is-regexp.js"));

        // line 1
        echo "// 7.2.8 IsRegExp(argument)
var isObject = require('./_is-object');
var cof = require('./_cof');
var MATCH = require('./_wks')('match');
module.exports = function (it) {
  var isRegExp;
  return isObject(it) && ((isRegExp = it[MATCH]) !== undefined ? !!isRegExp : cof(it) == 'RegExp');
};
";
        
        $__internal_d72f8a693e380272167892fee728ddfe69c74726ed38ab25ddbf8dff15f1c2a6->leave($__internal_d72f8a693e380272167892fee728ddfe69c74726ed38ab25ddbf8dff15f1c2a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_is-regexp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.2.8 IsRegExp(argument)
var isObject = require('./_is-object');
var cof = require('./_cof');
var MATCH = require('./_wks')('match');
module.exports = function (it) {
  var isRegExp;
  return isObject(it) && ((isRegExp = it[MATCH]) !== undefined ? !!isRegExp : cof(it) == 'RegExp');
};
", "node_modules/core-js/library/modules/_is-regexp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_is-regexp.js");
    }
}
