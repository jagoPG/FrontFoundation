<?php

/* node_modules/lodash/fp/sample.js */
class __TwigTemplate_f02f2cd44d8401bd48021d6cde7d5f8d006876570877e423e116a50b50584d0a extends Twig_Template
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
        $__internal_d5a24f765f627a7f022a2bdff13e8758fa6a77c32efa6c13e1dda030872881fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a24f765f627a7f022a2bdff13e8758fa6a77c32efa6c13e1dda030872881fa->enter($__internal_d5a24f765f627a7f022a2bdff13e8758fa6a77c32efa6c13e1dda030872881fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sample.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sample', require('../sample'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d5a24f765f627a7f022a2bdff13e8758fa6a77c32efa6c13e1dda030872881fa->leave($__internal_d5a24f765f627a7f022a2bdff13e8758fa6a77c32efa6c13e1dda030872881fa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sample.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sample', require('../sample'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sample.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sample.js");
    }
}
