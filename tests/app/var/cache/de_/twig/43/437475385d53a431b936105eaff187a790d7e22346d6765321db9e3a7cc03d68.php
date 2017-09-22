<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/default_bool.js */
class __TwigTemplate_50a9fe88b23b3e27e65ad994c99e8a568dd0b265cf049c170d4fe7c131607d2a extends Twig_Template
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
        $__internal_47a4ad3f3f3b06b8c19b0eb17122c8b88634f574e508f849bb5978be68b6b76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a4ad3f3f3b06b8c19b0eb17122c8b88634f574e508f849bb5978be68b6b76e->enter($__internal_47a4ad3f3f3b06b8c19b0eb17122c8b88634f574e508f849bb5978be68b6b76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/default_bool.js"));

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

test('boolean default to null', function (t) {
    var argv = parse([], {
        boolean: 'maybe',
        default: { maybe: null }
    });
    t.equal(argv.maybe, null);
    var argv = parse(['--maybe'], {
        boolean: 'maybe',
        default: { maybe: null }
    });
    t.equal(argv.maybe, true);
    t.end();

})
";
        
        $__internal_47a4ad3f3f3b06b8c19b0eb17122c8b88634f574e508f849bb5978be68b6b76e->leave($__internal_47a4ad3f3f3b06b8c19b0eb17122c8b88634f574e508f849bb5978be68b6b76e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/default_bool.js";
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

test('boolean default to null', function (t) {
    var argv = parse([], {
        boolean: 'maybe',
        default: { maybe: null }
    });
    t.equal(argv.maybe, null);
    var argv = parse(['--maybe'], {
        boolean: 'maybe',
        default: { maybe: null }
    });
    t.equal(argv.maybe, true);
    t.end();

})
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/default_bool.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/default_bool.js");
    }
}
