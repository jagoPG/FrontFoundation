<?php

/* node_modules/core-js/library/fn/system/index.js */
class __TwigTemplate_f6eb19a3f0098098b4e5cc28c32098f8d4b770dc4864c40491db4e135f7da232 extends Twig_Template
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
        $__internal_e4e8b223fb1f20a3c64cc75f2b9f4f045dbb461369e453b70ff07cb502526120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e8b223fb1f20a3c64cc75f2b9f4f045dbb461369e453b70ff07cb502526120->enter($__internal_e4e8b223fb1f20a3c64cc75f2b9f4f045dbb461369e453b70ff07cb502526120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/system/index.js"));

        // line 1
        echo "require('../../modules/es7.system.global');
module.exports = require('../../modules/_core').System;
";
        
        $__internal_e4e8b223fb1f20a3c64cc75f2b9f4f045dbb461369e453b70ff07cb502526120->leave($__internal_e4e8b223fb1f20a3c64cc75f2b9f4f045dbb461369e453b70ff07cb502526120_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/system/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.system.global');
module.exports = require('../../modules/_core').System;
", "node_modules/core-js/library/fn/system/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/system/index.js");
    }
}
