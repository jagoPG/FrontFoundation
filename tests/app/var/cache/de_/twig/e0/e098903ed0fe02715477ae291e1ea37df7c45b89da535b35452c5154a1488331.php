<?php

/* node_modules/core-js/fn/typed/array-buffer.js */
class __TwigTemplate_a4fbf4549d3476fa2f7e01467b65d24d9237bab772fc229d315b1eacce7d69fc extends Twig_Template
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
        $__internal_4620b76606343d71b4d4a1414c5c88756624aaad894adf6fa13dea4b8fbf2bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4620b76606343d71b4d4a1414c5c88756624aaad894adf6fa13dea4b8fbf2bb2->enter($__internal_4620b76606343d71b4d4a1414c5c88756624aaad894adf6fa13dea4b8fbf2bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/typed/array-buffer.js"));

        // line 1
        echo "require('../../modules/es6.typed.array-buffer');
require('../../modules/es6.object.to-string');
module.exports = require('../../modules/_core').ArrayBuffer;
";
        
        $__internal_4620b76606343d71b4d4a1414c5c88756624aaad894adf6fa13dea4b8fbf2bb2->leave($__internal_4620b76606343d71b4d4a1414c5c88756624aaad894adf6fa13dea4b8fbf2bb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/typed/array-buffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.array-buffer');
require('../../modules/es6.object.to-string');
module.exports = require('../../modules/_core').ArrayBuffer;
", "node_modules/core-js/fn/typed/array-buffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/typed/array-buffer.js");
    }
}
