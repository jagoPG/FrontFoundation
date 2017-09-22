<?php

/* node_modules/core-js/fn/regexp/match.js */
class __TwigTemplate_70a36fac77c2ae0b9c9c30d0646a4202064142c9a9a78ecefd35d7a726f3e315 extends Twig_Template
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
        $__internal_f23af42c11cb2e6c7457fff2fd466582efa31779527ff0f07ed7de060e865d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23af42c11cb2e6c7457fff2fd466582efa31779527ff0f07ed7de060e865d17->enter($__internal_f23af42c11cb2e6c7457fff2fd466582efa31779527ff0f07ed7de060e865d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/match.js"));

        // line 1
        echo "require('../../modules/es6.regexp.match');
var MATCH = require('../../modules/_wks')('match');
module.exports = function (it, str) {
  return RegExp.prototype[MATCH].call(it, str);
};
";
        
        $__internal_f23af42c11cb2e6c7457fff2fd466582efa31779527ff0f07ed7de060e865d17->leave($__internal_f23af42c11cb2e6c7457fff2fd466582efa31779527ff0f07ed7de060e865d17_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/match.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.match');
var MATCH = require('../../modules/_wks')('match');
module.exports = function (it, str) {
  return RegExp.prototype[MATCH].call(it, str);
};
", "node_modules/core-js/fn/regexp/match.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/match.js");
    }
}
