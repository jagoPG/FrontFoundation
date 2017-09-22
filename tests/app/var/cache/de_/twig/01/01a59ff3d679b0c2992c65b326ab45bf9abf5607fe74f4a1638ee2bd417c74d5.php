<?php

/* node_modules/core-js/library/fn/string/big.js */
class __TwigTemplate_cff648896b9f946c35d1d1fa86d28d149092da5538e0a108b3fd45f9c6c97f00 extends Twig_Template
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
        $__internal_fcd026d7333c28cfb9a1db0137c4f53eb5be8e20fa5cd878e2fa567f67018336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd026d7333c28cfb9a1db0137c4f53eb5be8e20fa5cd878e2fa567f67018336->enter($__internal_fcd026d7333c28cfb9a1db0137c4f53eb5be8e20fa5cd878e2fa567f67018336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/big.js"));

        // line 1
        echo "require('../../modules/es6.string.big');
module.exports = require('../../modules/_core').String.big;
";
        
        $__internal_fcd026d7333c28cfb9a1db0137c4f53eb5be8e20fa5cd878e2fa567f67018336->leave($__internal_fcd026d7333c28cfb9a1db0137c4f53eb5be8e20fa5cd878e2fa567f67018336_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/big.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.big');
module.exports = require('../../modules/_core').String.big;
", "node_modules/core-js/library/fn/string/big.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/big.js");
    }
}
