<?php

/* node_modules/fsevents/node_modules/minimist/test/default_bool.js */
class __TwigTemplate_7d0436cc5af7d69244e956b40d6af51433f82626e5849db1f66c6875e157ca67 extends Twig_Template
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
        $__internal_1d9aaef787f3d57689f6cd451290ea1ccea9e1d252ce308ffb67f294df67584f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9aaef787f3d57689f6cd451290ea1ccea9e1d252ce308ffb67f294df67584f->enter($__internal_1d9aaef787f3d57689f6cd451290ea1ccea9e1d252ce308ffb67f294df67584f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/minimist/test/default_bool.js"));

        // line 1
        echo "var test = require('tape');
var parse = require('../');

test('boolean default true', function (t) {
    var argv = parse([], {
        boolean: 'sometrue',
        default: { sometrue: true }
    });
    t.equal(argv.sometrue, true);
    t.end();
});

test('boolean default false', function (t) {
    var argv = parse([], {
        boolean: 'somefalse',
        default: { somefalse: false }
    });
    t.equal(argv.somefalse, false);
    t.end();
});
";
        
        $__internal_1d9aaef787f3d57689f6cd451290ea1ccea9e1d252ce308ffb67f294df67584f->leave($__internal_1d9aaef787f3d57689f6cd451290ea1ccea9e1d252ce308ffb67f294df67584f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/minimist/test/default_bool.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var parse = require('../');

test('boolean default true', function (t) {
    var argv = parse([], {
        boolean: 'sometrue',
        default: { sometrue: true }
    });
    t.equal(argv.sometrue, true);
    t.end();
});

test('boolean default false', function (t) {
    var argv = parse([], {
        boolean: 'somefalse',
        default: { somefalse: false }
    });
    t.equal(argv.somefalse, false);
    t.end();
});
", "node_modules/fsevents/node_modules/minimist/test/default_bool.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/minimist/test/default_bool.js");
    }
}
