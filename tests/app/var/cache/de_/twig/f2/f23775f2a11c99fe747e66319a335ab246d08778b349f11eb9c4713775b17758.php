<?php

/* node_modules/core-js/fn/object/seal.js */
class __TwigTemplate_cb9ce34d5a87093d5ccae1d3509f3c177e175abbfebab24a639a877aafc32467 extends Twig_Template
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
        $__internal_f3dd311ece2a0e535080251c49904f7a97d4cf12576966427b945b16d1eacf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dd311ece2a0e535080251c49904f7a97d4cf12576966427b945b16d1eacf2a->enter($__internal_f3dd311ece2a0e535080251c49904f7a97d4cf12576966427b945b16d1eacf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/seal.js"));

        // line 1
        echo "require('../../modules/es6.object.seal');
module.exports = require('../../modules/_core').Object.seal;
";
        
        $__internal_f3dd311ece2a0e535080251c49904f7a97d4cf12576966427b945b16d1eacf2a->leave($__internal_f3dd311ece2a0e535080251c49904f7a97d4cf12576966427b945b16d1eacf2a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/seal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.seal');
module.exports = require('../../modules/_core').Object.seal;
", "node_modules/core-js/fn/object/seal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/seal.js");
    }
}
