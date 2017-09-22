<?php

/* node_modules/lodash/fp/isSafeInteger.js */
class __TwigTemplate_2e555597c4cd4a4e277edc67adc9aabbb8771b60d15dd3a6c4fe96f901750466 extends Twig_Template
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
        $__internal_7b7715c561cd41341ab2008b324320b08ec98c40357f282f007fdaa0aec7553e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7715c561cd41341ab2008b324320b08ec98c40357f282f007fdaa0aec7553e->enter($__internal_7b7715c561cd41341ab2008b324320b08ec98c40357f282f007fdaa0aec7553e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isSafeInteger.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isSafeInteger', require('../isSafeInteger'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7b7715c561cd41341ab2008b324320b08ec98c40357f282f007fdaa0aec7553e->leave($__internal_7b7715c561cd41341ab2008b324320b08ec98c40357f282f007fdaa0aec7553e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isSafeInteger.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isSafeInteger', require('../isSafeInteger'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isSafeInteger.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isSafeInteger.js");
    }
}
