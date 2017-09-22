<?php

/* node_modules/core-js/fn/promise/try.js */
class __TwigTemplate_dcabe3772ad7ae9366f063dc24cd37b4c8dbdf266af7f9866a7549abc5f5ff9f extends Twig_Template
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
        $__internal_90fb72c933e5a011b3c9b20e1b6e0c65e3f55a7c7a2bc10e830fcdaa3c01bb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fb72c933e5a011b3c9b20e1b6e0c65e3f55a7c7a2bc10e830fcdaa3c01bb6c->enter($__internal_90fb72c933e5a011b3c9b20e1b6e0c65e3f55a7c7a2bc10e830fcdaa3c01bb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/promise/try.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.promise');
require('../../modules/es7.promise.try');
var \$Promise = require('../../modules/_core').Promise;
var \$try = \$Promise['try'];
module.exports = { 'try': function (callbackfn) {
  return \$try.call(typeof this === 'function' ? this : \$Promise, callbackfn);
} }['try'];
";
        
        $__internal_90fb72c933e5a011b3c9b20e1b6e0c65e3f55a7c7a2bc10e830fcdaa3c01bb6c->leave($__internal_90fb72c933e5a011b3c9b20e1b6e0c65e3f55a7c7a2bc10e830fcdaa3c01bb6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/promise/try.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.promise');
require('../../modules/es7.promise.try');
var \$Promise = require('../../modules/_core').Promise;
var \$try = \$Promise['try'];
module.exports = { 'try': function (callbackfn) {
  return \$try.call(typeof this === 'function' ? this : \$Promise, callbackfn);
} }['try'];
", "node_modules/core-js/fn/promise/try.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/promise/try.js");
    }
}
