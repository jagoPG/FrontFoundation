<?php

/* node_modules/core-js/fn/object/is-sealed.js */
class __TwigTemplate_ba8c97c990c2827e063e86b6b65d72555a6d40074190964d47cca1e82edb67b0 extends Twig_Template
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
        $__internal_3ba91e5b13de36a08fc8d9ed1fa16d0dc605bbeed60f901df203e871e93d2d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba91e5b13de36a08fc8d9ed1fa16d0dc605bbeed60f901df203e871e93d2d44->enter($__internal_3ba91e5b13de36a08fc8d9ed1fa16d0dc605bbeed60f901df203e871e93d2d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/is-sealed.js"));

        // line 1
        echo "require('../../modules/es6.object.is-sealed');
module.exports = require('../../modules/_core').Object.isSealed;
";
        
        $__internal_3ba91e5b13de36a08fc8d9ed1fa16d0dc605bbeed60f901df203e871e93d2d44->leave($__internal_3ba91e5b13de36a08fc8d9ed1fa16d0dc605bbeed60f901df203e871e93d2d44_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/is-sealed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.is-sealed');
module.exports = require('../../modules/_core').Object.isSealed;
", "node_modules/core-js/fn/object/is-sealed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/is-sealed.js");
    }
}
