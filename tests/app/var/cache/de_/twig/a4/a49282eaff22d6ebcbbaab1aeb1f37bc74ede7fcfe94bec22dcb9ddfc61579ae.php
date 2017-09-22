<?php

/* node_modules/core-js/fn/clear-immediate.js */
class __TwigTemplate_96a49261361d9ff6155e55feaf2e492a658a0d967ed26ad23b05f8f4e10bdd88 extends Twig_Template
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
        $__internal_8c2ca52a1c3acf9796d5bbac433f3548f4bb5115e5dcd4b43f2c43ce6499cc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2ca52a1c3acf9796d5bbac433f3548f4bb5115e5dcd4b43f2c43ce6499cc06->enter($__internal_8c2ca52a1c3acf9796d5bbac433f3548f4bb5115e5dcd4b43f2c43ce6499cc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/clear-immediate.js"));

        // line 1
        echo "require('../modules/web.immediate');
module.exports = require('../modules/_core').clearImmediate;
";
        
        $__internal_8c2ca52a1c3acf9796d5bbac433f3548f4bb5115e5dcd4b43f2c43ce6499cc06->leave($__internal_8c2ca52a1c3acf9796d5bbac433f3548f4bb5115e5dcd4b43f2c43ce6499cc06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/clear-immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.immediate');
module.exports = require('../modules/_core').clearImmediate;
", "node_modules/core-js/fn/clear-immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/clear-immediate.js");
    }
}
