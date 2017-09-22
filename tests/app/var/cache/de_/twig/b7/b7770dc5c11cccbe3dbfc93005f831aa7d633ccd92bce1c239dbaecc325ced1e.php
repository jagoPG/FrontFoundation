<?php

/* node_modules/core-js/library/fn/reflect/enumerate.js */
class __TwigTemplate_cc38a813f9bb18b304c30f348e52382f799fd511ea97e440f8431a961071b093 extends Twig_Template
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
        $__internal_772e26e47351fd17be245713f2ca40889e376821b3baa92e3adbffd93707281c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772e26e47351fd17be245713f2ca40889e376821b3baa92e3adbffd93707281c->enter($__internal_772e26e47351fd17be245713f2ca40889e376821b3baa92e3adbffd93707281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/enumerate.js"));

        // line 1
        echo "require('../../modules/es6.reflect.enumerate');
module.exports = require('../../modules/_core').Reflect.enumerate;
";
        
        $__internal_772e26e47351fd17be245713f2ca40889e376821b3baa92e3adbffd93707281c->leave($__internal_772e26e47351fd17be245713f2ca40889e376821b3baa92e3adbffd93707281c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/enumerate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.enumerate');
module.exports = require('../../modules/_core').Reflect.enumerate;
", "node_modules/core-js/library/fn/reflect/enumerate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/enumerate.js");
    }
}
