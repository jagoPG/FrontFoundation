<?php

/* node_modules/core-js/library/es7/system.js */
class __TwigTemplate_4c70e1717d36e72ceb8f571c2e087022d6f98238bc96a423496de42d3ac8483e extends Twig_Template
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
        $__internal_baa589ab72012c5491ca3d01747a4081cc8f7bfdec46ae991b2d45485fbb34d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa589ab72012c5491ca3d01747a4081cc8f7bfdec46ae991b2d45485fbb34d4->enter($__internal_baa589ab72012c5491ca3d01747a4081cc8f7bfdec46ae991b2d45485fbb34d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/system.js"));

        // line 1
        echo "require('../modules/es7.system.global');
module.exports = require('../modules/_core').System;
";
        
        $__internal_baa589ab72012c5491ca3d01747a4081cc8f7bfdec46ae991b2d45485fbb34d4->leave($__internal_baa589ab72012c5491ca3d01747a4081cc8f7bfdec46ae991b2d45485fbb34d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/system.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.system.global');
module.exports = require('../modules/_core').System;
", "node_modules/core-js/library/es7/system.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/system.js");
    }
}
