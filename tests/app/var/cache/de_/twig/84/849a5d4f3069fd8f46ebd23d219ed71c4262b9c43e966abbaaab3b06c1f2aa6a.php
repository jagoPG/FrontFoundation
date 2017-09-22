<?php

/* node_modules/core-js/library/fn/typed/float64-array.js */
class __TwigTemplate_d26168f70d2887f289dd363c54f6ee193c1a83cfa90e153ce6c6cc0fac29217a extends Twig_Template
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
        $__internal_76f1d67410015e7a971193f7a74f5a8f94e8d38bfa55eb333c6480df4e2c52c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f1d67410015e7a971193f7a74f5a8f94e8d38bfa55eb333c6480df4e2c52c2->enter($__internal_76f1d67410015e7a971193f7a74f5a8f94e8d38bfa55eb333c6480df4e2c52c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/typed/float64-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.float64-array');
module.exports = require('../../modules/_core').Float64Array;
";
        
        $__internal_76f1d67410015e7a971193f7a74f5a8f94e8d38bfa55eb333c6480df4e2c52c2->leave($__internal_76f1d67410015e7a971193f7a74f5a8f94e8d38bfa55eb333c6480df4e2c52c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/typed/float64-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.float64-array');
module.exports = require('../../modules/_core').Float64Array;
", "node_modules/core-js/library/fn/typed/float64-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/typed/float64-array.js");
    }
}
