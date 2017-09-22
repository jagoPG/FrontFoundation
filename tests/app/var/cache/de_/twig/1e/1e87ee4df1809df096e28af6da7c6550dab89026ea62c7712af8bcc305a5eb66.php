<?php

/* node_modules/core-js/library/fn/object/is-sealed.js */
class __TwigTemplate_269570cd2e5f5390f6fc1ea81e181e0fcad8b240a8a2227e6441208b686a7d7f extends Twig_Template
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
        $__internal_b1434af2d4dfeb558a827063b9e3c08c729d33641650c2fe1401ad21c9f541aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1434af2d4dfeb558a827063b9e3c08c729d33641650c2fe1401ad21c9f541aa->enter($__internal_b1434af2d4dfeb558a827063b9e3c08c729d33641650c2fe1401ad21c9f541aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/is-sealed.js"));

        // line 1
        echo "require('../../modules/es6.object.is-sealed');
module.exports = require('../../modules/_core').Object.isSealed;
";
        
        $__internal_b1434af2d4dfeb558a827063b9e3c08c729d33641650c2fe1401ad21c9f541aa->leave($__internal_b1434af2d4dfeb558a827063b9e3c08c729d33641650c2fe1401ad21c9f541aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/is-sealed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.is-sealed');
module.exports = require('../../modules/_core').Object.isSealed;
", "node_modules/core-js/library/fn/object/is-sealed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/is-sealed.js");
    }
}
