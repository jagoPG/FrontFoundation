<?php

/* node_modules/core-js/fn/reflect/enumerate.js */
class __TwigTemplate_6cbda08d684ded63739044bbe4be881819f9093f1d51999028b32bf4625fcc38 extends Twig_Template
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
        $__internal_5140eda22f93f2f25b1e72881573544e7414debdf8495fb59416a773b974ca5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140eda22f93f2f25b1e72881573544e7414debdf8495fb59416a773b974ca5a->enter($__internal_5140eda22f93f2f25b1e72881573544e7414debdf8495fb59416a773b974ca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/enumerate.js"));

        // line 1
        echo "require('../../modules/es6.reflect.enumerate');
module.exports = require('../../modules/_core').Reflect.enumerate;
";
        
        $__internal_5140eda22f93f2f25b1e72881573544e7414debdf8495fb59416a773b974ca5a->leave($__internal_5140eda22f93f2f25b1e72881573544e7414debdf8495fb59416a773b974ca5a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/enumerate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.enumerate');
module.exports = require('../../modules/_core').Reflect.enumerate;
", "node_modules/core-js/fn/reflect/enumerate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/enumerate.js");
    }
}
