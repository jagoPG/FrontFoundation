<?php

/* node_modules/core-js/core/delay.js */
class __TwigTemplate_79183441d489e5be3c354d4ce65e33b43244b27727213bd8f64f6a17a3520754 extends Twig_Template
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
        $__internal_2015f095b66b065152970f5cfc2f3f93fd8462a6fcbf97dd2c04e7a6b43e8cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2015f095b66b065152970f5cfc2f3f93fd8462a6fcbf97dd2c04e7a6b43e8cd0->enter($__internal_2015f095b66b065152970f5cfc2f3f93fd8462a6fcbf97dd2c04e7a6b43e8cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/core/delay.js"));

        // line 1
        echo "require('../modules/core.delay');
module.exports = require('../modules/_core').delay;
";
        
        $__internal_2015f095b66b065152970f5cfc2f3f93fd8462a6fcbf97dd2c04e7a6b43e8cd0->leave($__internal_2015f095b66b065152970f5cfc2f3f93fd8462a6fcbf97dd2c04e7a6b43e8cd0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/core/delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.delay');
module.exports = require('../modules/_core').delay;
", "node_modules/core-js/core/delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/core/delay.js");
    }
}
