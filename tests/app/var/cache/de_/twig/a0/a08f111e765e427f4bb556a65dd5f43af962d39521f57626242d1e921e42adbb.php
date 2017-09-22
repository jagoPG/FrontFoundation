<?php

/* node_modules/lodash/fp/plant.js */
class __TwigTemplate_1c7604bef7720b9893cc18a44f6fa711398d92fe2405bbd8fa5ecc1e6769f9dc extends Twig_Template
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
        $__internal_9e4e68ba7a95c245bd16cf1c9b9444dd1003b6e68e8ab9904f374620b25722d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4e68ba7a95c245bd16cf1c9b9444dd1003b6e68e8ab9904f374620b25722d8->enter($__internal_9e4e68ba7a95c245bd16cf1c9b9444dd1003b6e68e8ab9904f374620b25722d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/plant.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('plant', require('../plant'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9e4e68ba7a95c245bd16cf1c9b9444dd1003b6e68e8ab9904f374620b25722d8->leave($__internal_9e4e68ba7a95c245bd16cf1c9b9444dd1003b6e68e8ab9904f374620b25722d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/plant.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('plant', require('../plant'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/plant.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/plant.js");
    }
}
