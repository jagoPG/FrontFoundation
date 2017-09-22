<?php

/* node_modules/minimist/test/stop_early.js */
class __TwigTemplate_022f91a7bd917c5ca1d3717f1c04b032cf3e7fc4d5f3d8f434653ae36a384ec7 extends Twig_Template
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
        $__internal_5687de4a7e081ed45739eb22323d803ec75548bca1c6e5940785d208bfecc2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5687de4a7e081ed45739eb22323d803ec75548bca1c6e5940785d208bfecc2b6->enter($__internal_5687de4a7e081ed45739eb22323d803ec75548bca1c6e5940785d208bfecc2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/stop_early.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('stops parsing on the first non-option when stopEarly is set', function (t) {
    var argv = parse(['--aaa', 'bbb', 'ccc', '--ddd'], {
        stopEarly: true
    });

    t.deepEqual(argv, {
        aaa: 'bbb',
        _: ['ccc', '--ddd']
    });

    t.end();
});
";
        
        $__internal_5687de4a7e081ed45739eb22323d803ec75548bca1c6e5940785d208bfecc2b6->leave($__internal_5687de4a7e081ed45739eb22323d803ec75548bca1c6e5940785d208bfecc2b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/stop_early.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('stops parsing on the first non-option when stopEarly is set', function (t) {
    var argv = parse(['--aaa', 'bbb', 'ccc', '--ddd'], {
        stopEarly: true
    });

    t.deepEqual(argv, {
        aaa: 'bbb',
        _: ['ccc', '--ddd']
    });

    t.end();
});
", "node_modules/minimist/test/stop_early.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/stop_early.js");
    }
}
