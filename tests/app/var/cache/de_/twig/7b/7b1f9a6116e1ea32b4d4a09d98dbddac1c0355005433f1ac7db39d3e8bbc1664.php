<?php

/* node_modules/lodash/fp/rest.js */
class __TwigTemplate_d2f7e78e140a6a0585891a7cc34c8af5c2e26a2d8f61720c6e3f972c8f420037 extends Twig_Template
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
        $__internal_cf80e7952d82467d06660131f56326f50f0f5b374d14efd789b9cacb95454c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf80e7952d82467d06660131f56326f50f0f5b374d14efd789b9cacb95454c22->enter($__internal_cf80e7952d82467d06660131f56326f50f0f5b374d14efd789b9cacb95454c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/rest.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('rest', require('../rest'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_cf80e7952d82467d06660131f56326f50f0f5b374d14efd789b9cacb95454c22->leave($__internal_cf80e7952d82467d06660131f56326f50f0f5b374d14efd789b9cacb95454c22_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/rest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('rest', require('../rest'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/rest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/rest.js");
    }
}
