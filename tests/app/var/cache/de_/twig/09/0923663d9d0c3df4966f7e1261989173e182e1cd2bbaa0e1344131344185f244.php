<?php

/* node_modules/lodash/_root.js */
class __TwigTemplate_efd08c3f6716965d4f7c887046a2c38387e3ad8b4c15c11bc0826a19747ebbf6 extends Twig_Template
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
        $__internal_4dc5946effea298e4f5ecc8616e940b8957114569b91b0acffec4190109b0dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc5946effea298e4f5ecc8616e940b8957114569b91b0acffec4190109b0dff->enter($__internal_4dc5946effea298e4f5ecc8616e940b8957114569b91b0acffec4190109b0dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_root.js"));

        // line 1
        echo "var freeGlobal = require('./_freeGlobal');

/** Detect free variable `self`. */
var freeSelf = typeof self == 'object' && self && self.Object === Object && self;

/** Used as a reference to the global object. */
var root = freeGlobal || freeSelf || Function('return this')();

module.exports = root;
";
        
        $__internal_4dc5946effea298e4f5ecc8616e940b8957114569b91b0acffec4190109b0dff->leave($__internal_4dc5946effea298e4f5ecc8616e940b8957114569b91b0acffec4190109b0dff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_root.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var freeGlobal = require('./_freeGlobal');

/** Detect free variable `self`. */
var freeSelf = typeof self == 'object' && self && self.Object === Object && self;

/** Used as a reference to the global object. */
var root = freeGlobal || freeSelf || Function('return this')();

module.exports = root;
", "node_modules/lodash/_root.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_root.js");
    }
}
