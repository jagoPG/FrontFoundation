<?php

/* node_modules/lodash/fp/memoize.js */
class __TwigTemplate_d27234bad1f4410be1b7b3475899cc665ced5d78b8d3b98fa2b54f78cb400f07 extends Twig_Template
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
        $__internal_54e97e0c2dc3c3f0e7ba39a4c5aa98caa17874e5830e54810255437eecbfa9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e97e0c2dc3c3f0e7ba39a4c5aa98caa17874e5830e54810255437eecbfa9ab->enter($__internal_54e97e0c2dc3c3f0e7ba39a4c5aa98caa17874e5830e54810255437eecbfa9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/memoize.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('memoize', require('../memoize'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_54e97e0c2dc3c3f0e7ba39a4c5aa98caa17874e5830e54810255437eecbfa9ab->leave($__internal_54e97e0c2dc3c3f0e7ba39a4c5aa98caa17874e5830e54810255437eecbfa9ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/memoize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('memoize', require('../memoize'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/memoize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/memoize.js");
    }
}
