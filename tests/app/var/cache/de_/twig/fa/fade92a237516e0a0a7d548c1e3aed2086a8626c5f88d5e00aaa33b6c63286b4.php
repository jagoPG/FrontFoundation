<?php

/* node_modules/lodash/fp/concat.js */
class __TwigTemplate_4d719b403b9e6a9279c5fc2ed6700363eab0dbd675ab7bfe87979139b8adedbc extends Twig_Template
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
        $__internal_1752798abf521f5cb13f9b47745916d364553171e248dccaee0ec02fe6603ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1752798abf521f5cb13f9b47745916d364553171e248dccaee0ec02fe6603ef0->enter($__internal_1752798abf521f5cb13f9b47745916d364553171e248dccaee0ec02fe6603ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/concat.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('concat', require('../concat'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_1752798abf521f5cb13f9b47745916d364553171e248dccaee0ec02fe6603ef0->leave($__internal_1752798abf521f5cb13f9b47745916d364553171e248dccaee0ec02fe6603ef0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/concat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('concat', require('../concat'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/concat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/concat.js");
    }
}
