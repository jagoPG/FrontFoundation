<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/stop_early.js */
class __TwigTemplate_9b4b2b4f953606e4fcfcb08c20a80add3305c400c0ecbc2d7139b84ade59418b extends Twig_Template
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
        $__internal_0bea55c78aa07ad9d97e73e11413c904f836a466e52d2632c5e653d60594da47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bea55c78aa07ad9d97e73e11413c904f836a466e52d2632c5e653d60594da47->enter($__internal_0bea55c78aa07ad9d97e73e11413c904f836a466e52d2632c5e653d60594da47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/stop_early.js"));

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
        
        $__internal_0bea55c78aa07ad9d97e73e11413c904f836a466e52d2632c5e653d60594da47->leave($__internal_0bea55c78aa07ad9d97e73e11413c904f836a466e52d2632c5e653d60594da47_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/stop_early.js";
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
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/stop_early.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/stop_early.js");
    }
}
