<?php

/* node_modules/core-js/fn/system/index.js */
class __TwigTemplate_4a5d92b3db4a0c7e3cead94b64203c87cc9b5ee2774051866cb23228dec3783a extends Twig_Template
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
        $__internal_49d01920006bc507ff3d4fa68f6012a1961493c08ec47bb5ebca894986583a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d01920006bc507ff3d4fa68f6012a1961493c08ec47bb5ebca894986583a09->enter($__internal_49d01920006bc507ff3d4fa68f6012a1961493c08ec47bb5ebca894986583a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/system/index.js"));

        // line 1
        echo "require('../../modules/es7.system.global');
module.exports = require('../../modules/_core').System;
";
        
        $__internal_49d01920006bc507ff3d4fa68f6012a1961493c08ec47bb5ebca894986583a09->leave($__internal_49d01920006bc507ff3d4fa68f6012a1961493c08ec47bb5ebca894986583a09_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/system/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.system.global');
module.exports = require('../../modules/_core').System;
", "node_modules/core-js/fn/system/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/system/index.js");
    }
}
