<?php

/* node_modules/core-js/fn/string/raw.js */
class __TwigTemplate_34727b5e713bb2730a9085c6fe6ddb8bcb2c9c9cd000a3fb510b614d86fac67b extends Twig_Template
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
        $__internal_80ba29e81593637d972ee6e0e270aab4241cb7cd1ef87183f6d5249977720669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ba29e81593637d972ee6e0e270aab4241cb7cd1ef87183f6d5249977720669->enter($__internal_80ba29e81593637d972ee6e0e270aab4241cb7cd1ef87183f6d5249977720669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/raw.js"));

        // line 1
        echo "require('../../modules/es6.string.raw');
module.exports = require('../../modules/_core').String.raw;
";
        
        $__internal_80ba29e81593637d972ee6e0e270aab4241cb7cd1ef87183f6d5249977720669->leave($__internal_80ba29e81593637d972ee6e0e270aab4241cb7cd1ef87183f6d5249977720669_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/raw.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.raw');
module.exports = require('../../modules/_core').String.raw;
", "node_modules/core-js/fn/string/raw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/raw.js");
    }
}
