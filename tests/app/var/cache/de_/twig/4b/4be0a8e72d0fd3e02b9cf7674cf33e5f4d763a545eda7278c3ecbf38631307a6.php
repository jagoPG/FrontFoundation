<?php

/* node_modules/browserify-sign/algos.js */
class __TwigTemplate_82f158d40fe8e94b6152290e8fcad421d2d9f6fd4a8971427b6d06723abf8638 extends Twig_Template
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
        $__internal_51b4fd9b06b4dcb8228da4b683a28269586d4dbfd2d5cd86a2fb42f92ae78ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b4fd9b06b4dcb8228da4b683a28269586d4dbfd2d5cd86a2fb42f92ae78ae0->enter($__internal_51b4fd9b06b4dcb8228da4b683a28269586d4dbfd2d5cd86a2fb42f92ae78ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-sign/algos.js"));

        // line 1
        echo "module.exports = require('./browser/algorithms.json')
";
        
        $__internal_51b4fd9b06b4dcb8228da4b683a28269586d4dbfd2d5cd86a2fb42f92ae78ae0->leave($__internal_51b4fd9b06b4dcb8228da4b683a28269586d4dbfd2d5cd86a2fb42f92ae78ae0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-sign/algos.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./browser/algorithms.json')
", "node_modules/browserify-sign/algos.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-sign/algos.js");
    }
}
