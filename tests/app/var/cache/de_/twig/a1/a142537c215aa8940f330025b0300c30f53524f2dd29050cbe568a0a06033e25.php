<?php

/* node_modules/lodash/fp/isElement.js */
class __TwigTemplate_782ab06fcdaea60f780019bb6f0bf2be4bbf0a4b89127569980121a75898a1de extends Twig_Template
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
        $__internal_99d04ec3204b65067ae1c210fe65fa408b0c3b03a0d15c65e6ee48ea4e13c8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d04ec3204b65067ae1c210fe65fa408b0c3b03a0d15c65e6ee48ea4e13c8b4->enter($__internal_99d04ec3204b65067ae1c210fe65fa408b0c3b03a0d15c65e6ee48ea4e13c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isElement.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isElement', require('../isElement'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_99d04ec3204b65067ae1c210fe65fa408b0c3b03a0d15c65e6ee48ea4e13c8b4->leave($__internal_99d04ec3204b65067ae1c210fe65fa408b0c3b03a0d15c65e6ee48ea4e13c8b4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isElement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isElement', require('../isElement'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isElement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isElement.js");
    }
}
