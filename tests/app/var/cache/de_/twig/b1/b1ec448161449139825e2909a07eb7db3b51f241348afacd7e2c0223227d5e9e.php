<?php

/* node_modules/core-js/library/fn/string/fixed.js */
class __TwigTemplate_37dbaaf9d835cb5f7484ba57b4b478bc7c23e2e52b79c86a7b2c6ca64576f39d extends Twig_Template
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
        $__internal_f4688bc43c4919a8924ab52664b8d4ac6732c41729b73b3e9ba0880520d14f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4688bc43c4919a8924ab52664b8d4ac6732c41729b73b3e9ba0880520d14f81->enter($__internal_f4688bc43c4919a8924ab52664b8d4ac6732c41729b73b3e9ba0880520d14f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/fixed.js"));

        // line 1
        echo "require('../../modules/es6.string.fixed');
module.exports = require('../../modules/_core').String.fixed;
";
        
        $__internal_f4688bc43c4919a8924ab52664b8d4ac6732c41729b73b3e9ba0880520d14f81->leave($__internal_f4688bc43c4919a8924ab52664b8d4ac6732c41729b73b3e9ba0880520d14f81_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/fixed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.fixed');
module.exports = require('../../modules/_core').String.fixed;
", "node_modules/core-js/library/fn/string/fixed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/fixed.js");
    }
}
