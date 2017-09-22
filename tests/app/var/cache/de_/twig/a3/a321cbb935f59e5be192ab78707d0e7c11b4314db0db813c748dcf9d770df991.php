<?php

/* node_modules/lodash/fp/toPairsIn.js */
class __TwigTemplate_f97e8c0e5f3dc9bbd33c82d3f0975708a4f6a96970c7b0030548387d34dc8aee extends Twig_Template
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
        $__internal_8efd80469080a9863d5b77be78e7364a8040d9803b0bfcf5e4cf54170e29508b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efd80469080a9863d5b77be78e7364a8040d9803b0bfcf5e4cf54170e29508b->enter($__internal_8efd80469080a9863d5b77be78e7364a8040d9803b0bfcf5e4cf54170e29508b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toPairsIn.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toPairsIn', require('../toPairsIn'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_8efd80469080a9863d5b77be78e7364a8040d9803b0bfcf5e4cf54170e29508b->leave($__internal_8efd80469080a9863d5b77be78e7364a8040d9803b0bfcf5e4cf54170e29508b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toPairsIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toPairsIn', require('../toPairsIn'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toPairsIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toPairsIn.js");
    }
}
