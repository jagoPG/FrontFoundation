<?php

/* node_modules/core-js/library/fn/regexp/match.js */
class __TwigTemplate_2d7912a73f745b780a2a140edbdd9304178753668d00bec61f3c437ff6b0bbdd extends Twig_Template
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
        $__internal_6486b166fbe0c1aa55f106003f5b355af451832405272f4eae80d49ed38adcea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6486b166fbe0c1aa55f106003f5b355af451832405272f4eae80d49ed38adcea->enter($__internal_6486b166fbe0c1aa55f106003f5b355af451832405272f4eae80d49ed38adcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/regexp/match.js"));

        // line 1
        echo "require('../../modules/es6.regexp.match');
var MATCH = require('../../modules/_wks')('match');
module.exports = function (it, str) {
  return RegExp.prototype[MATCH].call(it, str);
};
";
        
        $__internal_6486b166fbe0c1aa55f106003f5b355af451832405272f4eae80d49ed38adcea->leave($__internal_6486b166fbe0c1aa55f106003f5b355af451832405272f4eae80d49ed38adcea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/regexp/match.js";
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
", "node_modules/core-js/library/fn/regexp/match.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/regexp/match.js");
    }
}
