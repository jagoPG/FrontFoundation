<?php

/* node_modules/core-js/fn/object/freeze.js */
class __TwigTemplate_62a43ccdbd6b827fbc17e820e5b56242b8296cbb8286663455f9d73aed144899 extends Twig_Template
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
        $__internal_b5c8f7060b4984c461afa55274cc14ee2c62a86c2534a8838d833e8d14eb28b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c8f7060b4984c461afa55274cc14ee2c62a86c2534a8838d833e8d14eb28b9->enter($__internal_b5c8f7060b4984c461afa55274cc14ee2c62a86c2534a8838d833e8d14eb28b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/freeze.js"));

        // line 1
        echo "require('../../modules/es6.object.freeze');
module.exports = require('../../modules/_core').Object.freeze;
";
        
        $__internal_b5c8f7060b4984c461afa55274cc14ee2c62a86c2534a8838d833e8d14eb28b9->leave($__internal_b5c8f7060b4984c461afa55274cc14ee2c62a86c2534a8838d833e8d14eb28b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/freeze.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.freeze');
module.exports = require('../../modules/_core').Object.freeze;
", "node_modules/core-js/fn/object/freeze.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/freeze.js");
    }
}
