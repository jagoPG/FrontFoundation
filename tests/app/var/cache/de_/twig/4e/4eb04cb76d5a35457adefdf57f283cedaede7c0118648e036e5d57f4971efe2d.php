<?php

/* node_modules/lodash/fp/flattenDepth.js */
class __TwigTemplate_25c6ce05e93893b2bd3ba95a35ed247709cc79f688ddf08d11bcb22f2dfd9573 extends Twig_Template
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
        $__internal_a55a3d95a4d065ce06f4d164a2c58102f4e3d5ba59dbd2b437b758b6dab1d9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55a3d95a4d065ce06f4d164a2c58102f4e3d5ba59dbd2b437b758b6dab1d9f8->enter($__internal_a55a3d95a4d065ce06f4d164a2c58102f4e3d5ba59dbd2b437b758b6dab1d9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/flattenDepth.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('flattenDepth', require('../flattenDepth'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a55a3d95a4d065ce06f4d164a2c58102f4e3d5ba59dbd2b437b758b6dab1d9f8->leave($__internal_a55a3d95a4d065ce06f4d164a2c58102f4e3d5ba59dbd2b437b758b6dab1d9f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/flattenDepth.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('flattenDepth', require('../flattenDepth'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/flattenDepth.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/flattenDepth.js");
    }
}
