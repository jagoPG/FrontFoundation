<?php

/* node_modules/lodash/fp/mapValues.js */
class __TwigTemplate_809e5d9b9761809a3c0a7f40fee16b8ab814821eeed3360f910195e3b7e95bf7 extends Twig_Template
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
        $__internal_3c05f9f903189e8179551c13733fa27b06e4b6f06c456b2c8ad1c7845fca74aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c05f9f903189e8179551c13733fa27b06e4b6f06c456b2c8ad1c7845fca74aa->enter($__internal_3c05f9f903189e8179551c13733fa27b06e4b6f06c456b2c8ad1c7845fca74aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/mapValues.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('mapValues', require('../mapValues'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_3c05f9f903189e8179551c13733fa27b06e4b6f06c456b2c8ad1c7845fca74aa->leave($__internal_3c05f9f903189e8179551c13733fa27b06e4b6f06c456b2c8ad1c7845fca74aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/mapValues.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('mapValues', require('../mapValues'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/mapValues.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/mapValues.js");
    }
}
