<?php

/* node_modules/tape/example/throw.js */
class __TwigTemplate_8888d52665243c27e683c336210bee7d1a548f1f3cb3ea8320582a5cc8541e99 extends Twig_Template
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
        $__internal_956d9a376331a9223b2f445b771aa7054c42641dee777db146f9c634d2135a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956d9a376331a9223b2f445b771aa7054c42641dee777db146f9c634d2135a5a->enter($__internal_956d9a376331a9223b2f445b771aa7054c42641dee777db146f9c634d2135a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/throw.js"));

        // line 1
        echo "var falafel = require('falafel');
var test = require('../');

test('throw', function (t) {
    t.plan(2);
    
    setTimeout(function () {
        throw new Error('doom');
    }, 100);
});
";
        
        $__internal_956d9a376331a9223b2f445b771aa7054c42641dee777db146f9c634d2135a5a->leave($__internal_956d9a376331a9223b2f445b771aa7054c42641dee777db146f9c634d2135a5a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/throw.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var falafel = require('falafel');
var test = require('../');

test('throw', function (t) {
    t.plan(2);
    
    setTimeout(function () {
        throw new Error('doom');
    }, 100);
});
", "node_modules/tape/example/throw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/throw.js");
    }
}
