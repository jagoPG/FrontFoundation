<?php

/* node_modules/lodash/fp/before.js */
class __TwigTemplate_0762002d0c1a686b0c2c1e9d2accdbc1b062c525acc05d1124f74b3a39de86a1 extends Twig_Template
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
        $__internal_e7bad39ed223b5e69365496d070e7d34684e23593a422f237f6726166d1f15e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bad39ed223b5e69365496d070e7d34684e23593a422f237f6726166d1f15e0->enter($__internal_e7bad39ed223b5e69365496d070e7d34684e23593a422f237f6726166d1f15e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/before.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('before', require('../before'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e7bad39ed223b5e69365496d070e7d34684e23593a422f237f6726166d1f15e0->leave($__internal_e7bad39ed223b5e69365496d070e7d34684e23593a422f237f6726166d1f15e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/before.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('before', require('../before'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/before.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/before.js");
    }
}
