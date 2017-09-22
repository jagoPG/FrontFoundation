<?php

/* node_modules/mkdirp/node_modules/minimist/test/default_bool.js */
class __TwigTemplate_1d46be30edce1b8ea3bb2b58e9351ba7d6982f33db2c34cea918944fd2a67c7a extends Twig_Template
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
        $__internal_cf1371dd0c9ad8e2665e0166109a1451aa180fcf99f31ad28563c93f7276c618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1371dd0c9ad8e2665e0166109a1451aa180fcf99f31ad28563c93f7276c618->enter($__internal_cf1371dd0c9ad8e2665e0166109a1451aa180fcf99f31ad28563c93f7276c618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/node_modules/minimist/test/default_bool.js"));

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
        
        $__internal_cf1371dd0c9ad8e2665e0166109a1451aa180fcf99f31ad28563c93f7276c618->leave($__internal_cf1371dd0c9ad8e2665e0166109a1451aa180fcf99f31ad28563c93f7276c618_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/node_modules/minimist/test/default_bool.js";
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
", "node_modules/mkdirp/node_modules/minimist/test/default_bool.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/node_modules/minimist/test/default_bool.js");
    }
}
