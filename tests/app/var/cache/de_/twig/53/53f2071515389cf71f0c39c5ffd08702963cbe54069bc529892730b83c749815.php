<?php

/* node_modules/jsonify/index.js */
class __TwigTemplate_ae3eb586a637a7d170b6dd775d1b30b0512f252feea06ccd6dee9102dea2abc8 extends Twig_Template
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
        $__internal_5ba153e189917cf6e08062f779140056b6ecefe050c970f4e35255a0cec828da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba153e189917cf6e08062f779140056b6ecefe050c970f4e35255a0cec828da->enter($__internal_5ba153e189917cf6e08062f779140056b6ecefe050c970f4e35255a0cec828da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsonify/index.js"));

        // line 1
        echo "exports.parse = require('./lib/parse');
exports.stringify = require('./lib/stringify');
";
        
        $__internal_5ba153e189917cf6e08062f779140056b6ecefe050c970f4e35255a0cec828da->leave($__internal_5ba153e189917cf6e08062f779140056b6ecefe050c970f4e35255a0cec828da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsonify/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.parse = require('./lib/parse');
exports.stringify = require('./lib/stringify');
", "node_modules/jsonify/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsonify/index.js");
    }
}
