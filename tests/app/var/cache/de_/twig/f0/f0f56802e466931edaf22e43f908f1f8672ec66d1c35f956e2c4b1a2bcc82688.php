<?php

/* node_modules/minimist/test/default_bool.js */
class __TwigTemplate_940cf5797fffb0676f7a581215b7876f2779449aa6d3b91f08d113bc4c39ad12 extends Twig_Template
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
        $__internal_17edd43b801f06679122c80fc9faaf2b457a185ceaf2eaad4ac58aec7e3a2ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17edd43b801f06679122c80fc9faaf2b457a185ceaf2eaad4ac58aec7e3a2ba4->enter($__internal_17edd43b801f06679122c80fc9faaf2b457a185ceaf2eaad4ac58aec7e3a2ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/default_bool.js"));

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
        
        $__internal_17edd43b801f06679122c80fc9faaf2b457a185ceaf2eaad4ac58aec7e3a2ba4->leave($__internal_17edd43b801f06679122c80fc9faaf2b457a185ceaf2eaad4ac58aec7e3a2ba4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/default_bool.js";
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
", "node_modules/minimist/test/default_bool.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/default_bool.js");
    }
}
