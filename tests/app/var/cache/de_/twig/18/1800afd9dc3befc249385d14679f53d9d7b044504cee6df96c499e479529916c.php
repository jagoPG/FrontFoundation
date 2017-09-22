<?php

/* node_modules/babel-runtime/helpers/selfGlobal.js */
class __TwigTemplate_760f0431420069ffe47809404d139daa751c723afdc905eb1685636a4bb0858d extends Twig_Template
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
        $__internal_5058b055b1a84a2ad52812060a46d3f0b279f668026a9cbc0eccd5452fb147ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5058b055b1a84a2ad52812060a46d3f0b279f668026a9cbc0eccd5452fb147ee->enter($__internal_5058b055b1a84a2ad52812060a46d3f0b279f668026a9cbc0eccd5452fb147ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/selfGlobal.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;
exports.default = typeof global === \"undefined\" ? self : global;";
        
        $__internal_5058b055b1a84a2ad52812060a46d3f0b279f668026a9cbc0eccd5452fb147ee->leave($__internal_5058b055b1a84a2ad52812060a46d3f0b279f668026a9cbc0eccd5452fb147ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/selfGlobal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;
exports.default = typeof global === \"undefined\" ? self : global;", "node_modules/babel-runtime/helpers/selfGlobal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/selfGlobal.js");
    }
}
