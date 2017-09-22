<?php

/* node_modules/core-js/fn/string/trim-end.js */
class __TwigTemplate_b8beff63d70a74e63bc657b4b8a95538c4fcc7b2638125fc47b7ab29d3933492 extends Twig_Template
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
        $__internal_a0034e3f087333fb3f50cacf8b9b7da548e00ff941a13c4baea82d7ee09fb483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0034e3f087333fb3f50cacf8b9b7da548e00ff941a13c4baea82d7ee09fb483->enter($__internal_a0034e3f087333fb3f50cacf8b9b7da548e00ff941a13c4baea82d7ee09fb483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/trim-end.js"));

        // line 1
        echo "require('../../modules/es7.string.trim-right');
module.exports = require('../../modules/_core').String.trimRight;
";
        
        $__internal_a0034e3f087333fb3f50cacf8b9b7da548e00ff941a13c4baea82d7ee09fb483->leave($__internal_a0034e3f087333fb3f50cacf8b9b7da548e00ff941a13c4baea82d7ee09fb483_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/trim-end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.string.trim-right');
module.exports = require('../../modules/_core').String.trimRight;
", "node_modules/core-js/fn/string/trim-end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/trim-end.js");
    }
}
