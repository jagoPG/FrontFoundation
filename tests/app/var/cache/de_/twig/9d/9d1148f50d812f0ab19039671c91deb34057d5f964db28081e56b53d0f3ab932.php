<?php

/* node_modules/lodash/fp/xor.js */
class __TwigTemplate_50eaacaeb00e18afa066302baa15cd7d6611cd14797a8d3f57ac22934a72a361 extends Twig_Template
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
        $__internal_b54a6601c35c71e1a7d78324a7adc6452f6788cd5529f5d666bee5e8746d7df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54a6601c35c71e1a7d78324a7adc6452f6788cd5529f5d666bee5e8746d7df4->enter($__internal_b54a6601c35c71e1a7d78324a7adc6452f6788cd5529f5d666bee5e8746d7df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/xor.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('xor', require('../xor'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b54a6601c35c71e1a7d78324a7adc6452f6788cd5529f5d666bee5e8746d7df4->leave($__internal_b54a6601c35c71e1a7d78324a7adc6452f6788cd5529f5d666bee5e8746d7df4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/xor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('xor', require('../xor'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/xor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/xor.js");
    }
}
