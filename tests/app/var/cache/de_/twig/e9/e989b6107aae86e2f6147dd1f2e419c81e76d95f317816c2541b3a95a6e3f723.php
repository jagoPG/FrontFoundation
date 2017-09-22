<?php

/* node_modules/core-js/library/fn/string/trim-left.js */
class __TwigTemplate_7645156e4b59d9ded40fac68188c01a8c4993ba26ef1bc7c40a66c7707a5ca2b extends Twig_Template
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
        $__internal_d3e485cea91e63db5d9ae4d01c67fcf6d247d66c86c6cfb047ed6a96ec8677a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e485cea91e63db5d9ae4d01c67fcf6d247d66c86c6cfb047ed6a96ec8677a2->enter($__internal_d3e485cea91e63db5d9ae4d01c67fcf6d247d66c86c6cfb047ed6a96ec8677a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/trim-left.js"));

        // line 1
        echo "require('../../modules/es7.string.trim-left');
module.exports = require('../../modules/_core').String.trimLeft;
";
        
        $__internal_d3e485cea91e63db5d9ae4d01c67fcf6d247d66c86c6cfb047ed6a96ec8677a2->leave($__internal_d3e485cea91e63db5d9ae4d01c67fcf6d247d66c86c6cfb047ed6a96ec8677a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/trim-left.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.string.trim-left');
module.exports = require('../../modules/_core').String.trimLeft;
", "node_modules/core-js/library/fn/string/trim-left.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/trim-left.js");
    }
}
