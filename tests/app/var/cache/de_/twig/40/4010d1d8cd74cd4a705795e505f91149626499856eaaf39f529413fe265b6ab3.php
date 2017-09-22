<?php

/* node_modules/lodash/fp/get.js */
class __TwigTemplate_c5ea1fd6d8e742cd547d2fb2ce05278aa53aa858e7d5720dd5dd2e2e4032f3f0 extends Twig_Template
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
        $__internal_447e216a5b7500cd549bf988c00e23a15f870ffae2d20e798eebea4c4b92cec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447e216a5b7500cd549bf988c00e23a15f870ffae2d20e798eebea4c4b92cec9->enter($__internal_447e216a5b7500cd549bf988c00e23a15f870ffae2d20e798eebea4c4b92cec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/get.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('get', require('../get'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_447e216a5b7500cd549bf988c00e23a15f870ffae2d20e798eebea4c4b92cec9->leave($__internal_447e216a5b7500cd549bf988c00e23a15f870ffae2d20e798eebea4c4b92cec9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/get.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('get', require('../get'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/get.js");
    }
}
