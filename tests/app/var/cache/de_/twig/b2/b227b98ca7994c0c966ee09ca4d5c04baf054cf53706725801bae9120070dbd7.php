<?php

/* node_modules/core-js/library/fn/typed/int16-array.js */
class __TwigTemplate_8f8d15d29741c97f96893fc6eb833263fd3690591f4f841883d9766e3a028efa extends Twig_Template
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
        $__internal_78be1f36ab13870f02d774b324110715a20e121ca27d725869535cf7b7c1c21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78be1f36ab13870f02d774b324110715a20e121ca27d725869535cf7b7c1c21d->enter($__internal_78be1f36ab13870f02d774b324110715a20e121ca27d725869535cf7b7c1c21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/typed/int16-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.int16-array');
module.exports = require('../../modules/_core').Int16Array;
";
        
        $__internal_78be1f36ab13870f02d774b324110715a20e121ca27d725869535cf7b7c1c21d->leave($__internal_78be1f36ab13870f02d774b324110715a20e121ca27d725869535cf7b7c1c21d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/typed/int16-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.int16-array');
module.exports = require('../../modules/_core').Int16Array;
", "node_modules/core-js/library/fn/typed/int16-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/typed/int16-array.js");
    }
}
