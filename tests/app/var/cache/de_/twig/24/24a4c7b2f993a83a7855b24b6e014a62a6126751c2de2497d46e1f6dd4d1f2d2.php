<?php

/* node_modules/core-js/stage/3.js */
class __TwigTemplate_bbf79cf54f8b656ec799e7be4fa2ba0754a60604b0ec4832b5f982f9e38094eb extends Twig_Template
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
        $__internal_15ef8ff4817bf8add52d0d7765fd6123743ffa8043f29bedafbe61434e791582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ef8ff4817bf8add52d0d7765fd6123743ffa8043f29bedafbe61434e791582->enter($__internal_15ef8ff4817bf8add52d0d7765fd6123743ffa8043f29bedafbe61434e791582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/stage/3.js"));

        // line 1
        echo "require('../modules/es7.global');
require('../modules/es7.system.global');
require('../modules/es7.promise.finally');
module.exports = require('./4');
";
        
        $__internal_15ef8ff4817bf8add52d0d7765fd6123743ffa8043f29bedafbe61434e791582->leave($__internal_15ef8ff4817bf8add52d0d7765fd6123743ffa8043f29bedafbe61434e791582_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/stage/3.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.global');
require('../modules/es7.system.global');
require('../modules/es7.promise.finally');
module.exports = require('./4');
", "node_modules/core-js/stage/3.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/stage/3.js");
    }
}
