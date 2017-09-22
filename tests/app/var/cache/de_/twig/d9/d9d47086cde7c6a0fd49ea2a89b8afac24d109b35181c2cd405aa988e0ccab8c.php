<?php

/* node_modules/resumer/example/resume.js */
class __TwigTemplate_63cf65a88f27a6bf1ec9e322bd343e7397df0dbc6ad724aea5ea857b50dcf2c9 extends Twig_Template
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
        $__internal_0fa76a18d1991b2a542a589b02c9ec6e15a133c7ac1bc62cfe5b4ece681074bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa76a18d1991b2a542a589b02c9ec6e15a133c7ac1bc62cfe5b4ece681074bb->enter($__internal_0fa76a18d1991b2a542a589b02c9ec6e15a133c7ac1bc62cfe5b4ece681074bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resumer/example/resume.js"));

        // line 1
        echo "var resumer = require('../');
createStream().pipe(process.stdout);

function createStream () {
    var stream = resumer();
    stream.queue('beep boop\\n');
    return stream;
}
";
        
        $__internal_0fa76a18d1991b2a542a589b02c9ec6e15a133c7ac1bc62cfe5b4ece681074bb->leave($__internal_0fa76a18d1991b2a542a589b02c9ec6e15a133c7ac1bc62cfe5b4ece681074bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resumer/example/resume.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var resumer = require('../');
createStream().pipe(process.stdout);

function createStream () {
    var stream = resumer();
    stream.queue('beep boop\\n');
    return stream;
}
", "node_modules/resumer/example/resume.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resumer/example/resume.js");
    }
}
