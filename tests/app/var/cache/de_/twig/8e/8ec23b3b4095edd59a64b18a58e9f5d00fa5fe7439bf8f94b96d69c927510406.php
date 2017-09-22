<?php

/* node_modules/core-js/fn/is-iterable.js */
class __TwigTemplate_12e2b8d5d6088f6cf1e2a80c6ff9e2a67455088f232c351f1037d49e5a1c712c extends Twig_Template
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
        $__internal_d7fbe33a289ca1ff74021f909861d7bccc09269fc81b7756d86cd9e8febad7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fbe33a289ca1ff74021f909861d7bccc09269fc81b7756d86cd9e8febad7e1->enter($__internal_d7fbe33a289ca1ff74021f909861d7bccc09269fc81b7756d86cd9e8febad7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/is-iterable.js"));

        // line 1
        echo "require('../modules/web.dom.iterable');
require('../modules/es6.string.iterator');
module.exports = require('../modules/core.is-iterable');
";
        
        $__internal_d7fbe33a289ca1ff74021f909861d7bccc09269fc81b7756d86cd9e8febad7e1->leave($__internal_d7fbe33a289ca1ff74021f909861d7bccc09269fc81b7756d86cd9e8febad7e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/is-iterable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.dom.iterable');
require('../modules/es6.string.iterator');
module.exports = require('../modules/core.is-iterable');
", "node_modules/core-js/fn/is-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/is-iterable.js");
    }
}
