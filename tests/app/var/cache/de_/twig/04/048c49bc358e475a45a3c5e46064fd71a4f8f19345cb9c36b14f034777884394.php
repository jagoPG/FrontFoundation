<?php

/* node_modules/core-js/library/fn/string/virtual/trim-end.js */
class __TwigTemplate_947d1c7c87c8b84c2f585c0fcb540d260d3a52b00f9fec98248598a38fe2c570 extends Twig_Template
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
        $__internal_2b3f61f339463246736d8e05dd64f353526bd33cb14392acdada549ac08d4a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3f61f339463246736d8e05dd64f353526bd33cb14392acdada549ac08d4a13->enter($__internal_2b3f61f339463246736d8e05dd64f353526bd33cb14392acdada549ac08d4a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/trim-end.js"));

        // line 1
        echo "require('../../../modules/es7.string.trim-right');
module.exports = require('../../../modules/_entry-virtual')('String').trimRight;
";
        
        $__internal_2b3f61f339463246736d8e05dd64f353526bd33cb14392acdada549ac08d4a13->leave($__internal_2b3f61f339463246736d8e05dd64f353526bd33cb14392acdada549ac08d4a13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/trim-end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.trim-right');
module.exports = require('../../../modules/_entry-virtual')('String').trimRight;
", "node_modules/core-js/library/fn/string/virtual/trim-end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/trim-end.js");
    }
}
