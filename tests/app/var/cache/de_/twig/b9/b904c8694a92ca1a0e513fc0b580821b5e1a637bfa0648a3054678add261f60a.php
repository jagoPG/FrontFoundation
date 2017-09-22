<?php

/* node_modules/lodash/fp/flattenDeep.js */
class __TwigTemplate_26b6402237a1413a93083d05f8bea08d846358b7b412640e164c7591f0862b77 extends Twig_Template
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
        $__internal_656ffd4f8e7f097a71f79e5082853ed396b3424ea5ec67b54f196b1850c1ad8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656ffd4f8e7f097a71f79e5082853ed396b3424ea5ec67b54f196b1850c1ad8b->enter($__internal_656ffd4f8e7f097a71f79e5082853ed396b3424ea5ec67b54f196b1850c1ad8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/flattenDeep.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('flattenDeep', require('../flattenDeep'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_656ffd4f8e7f097a71f79e5082853ed396b3424ea5ec67b54f196b1850c1ad8b->leave($__internal_656ffd4f8e7f097a71f79e5082853ed396b3424ea5ec67b54f196b1850c1ad8b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/flattenDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('flattenDeep', require('../flattenDeep'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/flattenDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/flattenDeep.js");
    }
}
