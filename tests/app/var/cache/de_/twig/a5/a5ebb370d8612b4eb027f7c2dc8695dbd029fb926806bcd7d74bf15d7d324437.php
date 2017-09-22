<?php

/* node_modules/core-js/fn/system/global.js */
class __TwigTemplate_1d56d97dec5348dc6be076504d997b87592d4c60ce33d61419f0d3d2fecd5815 extends Twig_Template
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
        $__internal_192a38964ee0c572841a574249c683c400b3c6e9a68d0a1755e433da3516a567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192a38964ee0c572841a574249c683c400b3c6e9a68d0a1755e433da3516a567->enter($__internal_192a38964ee0c572841a574249c683c400b3c6e9a68d0a1755e433da3516a567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/system/global.js"));

        // line 1
        echo "require('../../modules/es7.system.global');
module.exports = require('../../modules/_core').System.global;
";
        
        $__internal_192a38964ee0c572841a574249c683c400b3c6e9a68d0a1755e433da3516a567->leave($__internal_192a38964ee0c572841a574249c683c400b3c6e9a68d0a1755e433da3516a567_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/system/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.system.global');
module.exports = require('../../modules/_core').System.global;
", "node_modules/core-js/fn/system/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/system/global.js");
    }
}
