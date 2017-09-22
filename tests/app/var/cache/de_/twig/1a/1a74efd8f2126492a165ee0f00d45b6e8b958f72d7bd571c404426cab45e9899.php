<?php

/* node_modules/core-js/library/modules/es6.string.big.js */
class __TwigTemplate_6d0a24f442e44d0209da9e32581716434331727f4d679635fa9aaac048723d7f extends Twig_Template
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
        $__internal_8c23df24964740775b1f8f02bdda19547b556bcadae7791aea4cfa2fa0216264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c23df24964740775b1f8f02bdda19547b556bcadae7791aea4cfa2fa0216264->enter($__internal_8c23df24964740775b1f8f02bdda19547b556bcadae7791aea4cfa2fa0216264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.big.js"));

        // line 1
        echo "'use strict';
// B.2.3.3 String.prototype.big()
require('./_string-html')('big', function (createHTML) {
  return function big() {
    return createHTML(this, 'big', '', '');
  };
});
";
        
        $__internal_8c23df24964740775b1f8f02bdda19547b556bcadae7791aea4cfa2fa0216264->leave($__internal_8c23df24964740775b1f8f02bdda19547b556bcadae7791aea4cfa2fa0216264_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.big.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.3 String.prototype.big()
require('./_string-html')('big', function (createHTML) {
  return function big() {
    return createHTML(this, 'big', '', '');
  };
});
", "node_modules/core-js/library/modules/es6.string.big.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.big.js");
    }
}
