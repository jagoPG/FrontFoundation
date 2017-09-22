<?php

/* node_modules/lodash/extend.js */
class __TwigTemplate_3d763e08b5cb9e0ddc29916bb03f4c84865f50869ebbb41b4011a80f5ca8c1aa extends Twig_Template
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
        $__internal_f4dddf05532bb26c0c525a2bdcac2165d392ba2594692577e88e7389e5979ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4dddf05532bb26c0c525a2bdcac2165d392ba2594692577e88e7389e5979ff2->enter($__internal_f4dddf05532bb26c0c525a2bdcac2165d392ba2594692577e88e7389e5979ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/extend.js"));

        // line 1
        echo "module.exports = require('./assignIn');
";
        
        $__internal_f4dddf05532bb26c0c525a2bdcac2165d392ba2594692577e88e7389e5979ff2->leave($__internal_f4dddf05532bb26c0c525a2bdcac2165d392ba2594692577e88e7389e5979ff2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/extend.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./assignIn');
", "node_modules/lodash/extend.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/extend.js");
    }
}
