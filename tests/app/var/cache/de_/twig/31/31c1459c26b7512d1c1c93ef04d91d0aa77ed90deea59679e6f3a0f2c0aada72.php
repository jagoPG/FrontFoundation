<?php

/* node_modules/lodash/fp/curryN.js */
class __TwigTemplate_9852e86e03b9b7bd1dfa43971ca08cc2d45ef7795f97c075bbd421ba9561ee93 extends Twig_Template
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
        $__internal_9033a48f89b2ef6f73c1a6fcbd862b446f0895753c922be68932282e21ac76b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9033a48f89b2ef6f73c1a6fcbd862b446f0895753c922be68932282e21ac76b0->enter($__internal_9033a48f89b2ef6f73c1a6fcbd862b446f0895753c922be68932282e21ac76b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/curryN.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('curryN', require('../curry'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9033a48f89b2ef6f73c1a6fcbd862b446f0895753c922be68932282e21ac76b0->leave($__internal_9033a48f89b2ef6f73c1a6fcbd862b446f0895753c922be68932282e21ac76b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/curryN.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('curryN', require('../curry'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/curryN.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/curryN.js");
    }
}
