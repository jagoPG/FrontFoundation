<?php

/* node_modules/core-js/fn/error/index.js */
class __TwigTemplate_7b26ab3076468b5fe19fbb11620143d2694ae35d572586ff3dd57f94aca4b200 extends Twig_Template
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
        $__internal_28c09635b2e9e2a93715c52e052b2ba7e6635bcd6eb004541b0210ddafd3ae14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c09635b2e9e2a93715c52e052b2ba7e6635bcd6eb004541b0210ddafd3ae14->enter($__internal_28c09635b2e9e2a93715c52e052b2ba7e6635bcd6eb004541b0210ddafd3ae14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/error/index.js"));

        // line 1
        echo "require('../../modules/es7.error.is-error');
module.exports = require('../../modules/_core').Error;
";
        
        $__internal_28c09635b2e9e2a93715c52e052b2ba7e6635bcd6eb004541b0210ddafd3ae14->leave($__internal_28c09635b2e9e2a93715c52e052b2ba7e6635bcd6eb004541b0210ddafd3ae14_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/error/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.error.is-error');
module.exports = require('../../modules/_core').Error;
", "node_modules/core-js/fn/error/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/error/index.js");
    }
}
