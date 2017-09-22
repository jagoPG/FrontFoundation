<?php

/* node_modules/core-js/fn/reflect/define-metadata.js */
class __TwigTemplate_ea650f69c201af4a5900d94c1420bbb6b4b8acc959c8d407769f86e56f7cf4cf extends Twig_Template
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
        $__internal_9149d6cd5399a9400d3e393c1de53240657a2521889b889efc1d68ea5cb7ef13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9149d6cd5399a9400d3e393c1de53240657a2521889b889efc1d68ea5cb7ef13->enter($__internal_9149d6cd5399a9400d3e393c1de53240657a2521889b889efc1d68ea5cb7ef13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/define-metadata.js"));

        // line 1
        echo "require('../../modules/es7.reflect.define-metadata');
module.exports = require('../../modules/_core').Reflect.defineMetadata;
";
        
        $__internal_9149d6cd5399a9400d3e393c1de53240657a2521889b889efc1d68ea5cb7ef13->leave($__internal_9149d6cd5399a9400d3e393c1de53240657a2521889b889efc1d68ea5cb7ef13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/define-metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.reflect.define-metadata');
module.exports = require('../../modules/_core').Reflect.defineMetadata;
", "node_modules/core-js/fn/reflect/define-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/define-metadata.js");
    }
}
