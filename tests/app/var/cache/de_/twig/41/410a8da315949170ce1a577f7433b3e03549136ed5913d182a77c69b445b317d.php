<?php

/* node_modules/lodash/fp/number.js */
class __TwigTemplate_b23245129091f517d8f691a34df40d1ccb99e78dd1b74e4fffac0dcd2bd49e38 extends Twig_Template
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
        $__internal_96f165662b926b032e3c8bee2c8c575fcb046dfd6bc4ab549498dda616029e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f165662b926b032e3c8bee2c8c575fcb046dfd6bc4ab549498dda616029e18->enter($__internal_96f165662b926b032e3c8bee2c8c575fcb046dfd6bc4ab549498dda616029e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/number.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../number'));
";
        
        $__internal_96f165662b926b032e3c8bee2c8c575fcb046dfd6bc4ab549498dda616029e18->leave($__internal_96f165662b926b032e3c8bee2c8c575fcb046dfd6bc4ab549498dda616029e18_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../number'));
", "node_modules/lodash/fp/number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/number.js");
    }
}
