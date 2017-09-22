<?php

/* node_modules/es6-set/ext/copy.js */
class __TwigTemplate_a993efd1fe5671bf8baceebace4c880b6ce4adccda429b3d5755798ade1da319 extends Twig_Template
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
        $__internal_8d851afd8ae360ec79fa8bf35e3b0a44fda0ce56987b34d2e1ac9463c9bcfe7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d851afd8ae360ec79fa8bf35e3b0a44fda0ce56987b34d2e1ac9463c9bcfe7e->enter($__internal_8d851afd8ae360ec79fa8bf35e3b0a44fda0ce56987b34d2e1ac9463c9bcfe7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/ext/copy.js"));

        // line 1
        echo "'use strict';

var Set = require('../');

module.exports = function () { return new Set(this); };
";
        
        $__internal_8d851afd8ae360ec79fa8bf35e3b0a44fda0ce56987b34d2e1ac9463c9bcfe7e->leave($__internal_8d851afd8ae360ec79fa8bf35e3b0a44fda0ce56987b34d2e1ac9463c9bcfe7e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/ext/copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var Set = require('../');

module.exports = function () { return new Set(this); };
", "node_modules/es6-set/ext/copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/ext/copy.js");
    }
}
