<?php

/* node_modules/core-js/library/fn/regexp/to-string.js */
class __TwigTemplate_cacd76a2649d6cdfdaf798edadf8db16480338a8bb3c2c6b2b44a3fa816bd850 extends Twig_Template
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
        $__internal_e112afb942f885bbd163457ae64d460ff53986e9fb3cafda81924749dac69e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e112afb942f885bbd163457ae64d460ff53986e9fb3cafda81924749dac69e94->enter($__internal_e112afb942f885bbd163457ae64d460ff53986e9fb3cafda81924749dac69e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/regexp/to-string.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.regexp.to-string');
module.exports = function toString(it) {
  return RegExp.prototype.toString.call(it);
};
";
        
        $__internal_e112afb942f885bbd163457ae64d460ff53986e9fb3cafda81924749dac69e94->leave($__internal_e112afb942f885bbd163457ae64d460ff53986e9fb3cafda81924749dac69e94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/regexp/to-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.regexp.to-string');
module.exports = function toString(it) {
  return RegExp.prototype.toString.call(it);
};
", "node_modules/core-js/library/fn/regexp/to-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/regexp/to-string.js");
    }
}
