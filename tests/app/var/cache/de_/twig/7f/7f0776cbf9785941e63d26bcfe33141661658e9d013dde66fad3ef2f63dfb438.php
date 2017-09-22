<?php

/* node_modules/core-js/library/fn/object/seal.js */
class __TwigTemplate_39c869f28fbccdc95187c3668501a261b069559193eb39c180d523fabbb58ff0 extends Twig_Template
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
        $__internal_883874c050d0ff30019dc241f2bb0adf8117b0649af672625120e2b19de72919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883874c050d0ff30019dc241f2bb0adf8117b0649af672625120e2b19de72919->enter($__internal_883874c050d0ff30019dc241f2bb0adf8117b0649af672625120e2b19de72919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/seal.js"));

        // line 1
        echo "require('../../modules/es6.object.seal');
module.exports = require('../../modules/_core').Object.seal;
";
        
        $__internal_883874c050d0ff30019dc241f2bb0adf8117b0649af672625120e2b19de72919->leave($__internal_883874c050d0ff30019dc241f2bb0adf8117b0649af672625120e2b19de72919_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/seal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.seal');
module.exports = require('../../modules/_core').Object.seal;
", "node_modules/core-js/library/fn/object/seal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/seal.js");
    }
}
