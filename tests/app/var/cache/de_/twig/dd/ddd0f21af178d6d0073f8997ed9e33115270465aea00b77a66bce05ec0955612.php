<?php

/* node_modules/lodash/fp/ary.js */
class __TwigTemplate_d985385f05d4b42973804320e5dc947c9d8bcb3f97cb907d537b35ee1b608343 extends Twig_Template
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
        $__internal_95dd325092ce223cd0663d0d7f4d2543994af133c2a74c3c5846ece5e9919591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dd325092ce223cd0663d0d7f4d2543994af133c2a74c3c5846ece5e9919591->enter($__internal_95dd325092ce223cd0663d0d7f4d2543994af133c2a74c3c5846ece5e9919591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/ary.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('ary', require('../ary'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_95dd325092ce223cd0663d0d7f4d2543994af133c2a74c3c5846ece5e9919591->leave($__internal_95dd325092ce223cd0663d0d7f4d2543994af133c2a74c3c5846ece5e9919591_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/ary.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('ary', require('../ary'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/ary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/ary.js");
    }
}
