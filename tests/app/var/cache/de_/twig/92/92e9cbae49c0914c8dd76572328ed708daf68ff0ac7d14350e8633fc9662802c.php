<?php

/* node_modules/core-js/fn/math/log2.js */
class __TwigTemplate_62d47d00aa1a67c12a704591bab6018a9e8e090fd7cb9dab846f21e223df39a9 extends Twig_Template
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
        $__internal_464dbf9f39840632bec7b6517a221b6ffbb2a5dd54adede4138b2283aa3ca1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464dbf9f39840632bec7b6517a221b6ffbb2a5dd54adede4138b2283aa3ca1d0->enter($__internal_464dbf9f39840632bec7b6517a221b6ffbb2a5dd54adede4138b2283aa3ca1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/log2.js"));

        // line 1
        echo "require('../../modules/es6.math.log2');
module.exports = require('../../modules/_core').Math.log2;
";
        
        $__internal_464dbf9f39840632bec7b6517a221b6ffbb2a5dd54adede4138b2283aa3ca1d0->leave($__internal_464dbf9f39840632bec7b6517a221b6ffbb2a5dd54adede4138b2283aa3ca1d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/log2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.math.log2');
module.exports = require('../../modules/_core').Math.log2;
", "node_modules/core-js/fn/math/log2.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/log2.js");
    }
}
