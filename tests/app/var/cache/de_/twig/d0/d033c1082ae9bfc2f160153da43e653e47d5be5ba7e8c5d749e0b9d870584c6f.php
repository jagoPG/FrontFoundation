<?php

/* node_modules/core-js/modules/_object-forced-pam.js */
class __TwigTemplate_f2e28dbb4f9ca764994ff0134468116329b8eb69161b59934a7ba3863a6b8eb0 extends Twig_Template
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
        $__internal_a6328cd330cd1796ee3397dfda7ac80ed60d3444ccf4d7b02e41a83753313c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6328cd330cd1796ee3397dfda7ac80ed60d3444ccf4d7b02e41a83753313c00->enter($__internal_a6328cd330cd1796ee3397dfda7ac80ed60d3444ccf4d7b02e41a83753313c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-forced-pam.js"));

        // line 1
        echo "'use strict';
// Forced replacement prototype accessors methods
module.exports = require('./_library') || !require('./_fails')(function () {
  var K = Math.random();
  // In FF throws only define methods
  // eslint-disable-next-line no-undef, no-useless-call
  __defineSetter__.call(null, K, function () { /* empty */ });
  delete require('./_global')[K];
});
";
        
        $__internal_a6328cd330cd1796ee3397dfda7ac80ed60d3444ccf4d7b02e41a83753313c00->leave($__internal_a6328cd330cd1796ee3397dfda7ac80ed60d3444ccf4d7b02e41a83753313c00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-forced-pam.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// Forced replacement prototype accessors methods
module.exports = require('./_library') || !require('./_fails')(function () {
  var K = Math.random();
  // In FF throws only define methods
  // eslint-disable-next-line no-undef, no-useless-call
  __defineSetter__.call(null, K, function () { /* empty */ });
  delete require('./_global')[K];
});
", "node_modules/core-js/modules/_object-forced-pam.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-forced-pam.js");
    }
}
