<?php

/* node_modules/core-js/es7/system.js */
class __TwigTemplate_2545c8134e781bfd51b5b637143aa27dce9c622185ce7c0d1ccfe520bc550f02 extends Twig_Template
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
        $__internal_f0a5ef16242f3b334d86d61648641ae7fc6a30d1cf96364e48fd681b969d2c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a5ef16242f3b334d86d61648641ae7fc6a30d1cf96364e48fd681b969d2c89->enter($__internal_f0a5ef16242f3b334d86d61648641ae7fc6a30d1cf96364e48fd681b969d2c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/system.js"));

        // line 1
        echo "require('../modules/es7.system.global');
module.exports = require('../modules/_core').System;
";
        
        $__internal_f0a5ef16242f3b334d86d61648641ae7fc6a30d1cf96364e48fd681b969d2c89->leave($__internal_f0a5ef16242f3b334d86d61648641ae7fc6a30d1cf96364e48fd681b969d2c89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/system.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.system.global');
module.exports = require('../modules/_core').System;
", "node_modules/core-js/es7/system.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/system.js");
    }
}
