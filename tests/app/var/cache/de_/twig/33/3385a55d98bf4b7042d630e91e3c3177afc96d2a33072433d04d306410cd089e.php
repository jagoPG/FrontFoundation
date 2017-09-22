<?php

/* node_modules/core-js/fn/typed/int16-array.js */
class __TwigTemplate_8dcbaa0f5858230eb217a4fbb58c96cd178d1c8717e7b341cf8ff8a0033cdbb4 extends Twig_Template
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
        $__internal_866d9653f12370a850390134de7225c95696f731db821287e75cb001b64ee4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866d9653f12370a850390134de7225c95696f731db821287e75cb001b64ee4bd->enter($__internal_866d9653f12370a850390134de7225c95696f731db821287e75cb001b64ee4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/typed/int16-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.int16-array');
module.exports = require('../../modules/_core').Int16Array;
";
        
        $__internal_866d9653f12370a850390134de7225c95696f731db821287e75cb001b64ee4bd->leave($__internal_866d9653f12370a850390134de7225c95696f731db821287e75cb001b64ee4bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/typed/int16-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.int16-array');
module.exports = require('../../modules/_core').Int16Array;
", "node_modules/core-js/fn/typed/int16-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/typed/int16-array.js");
    }
}
