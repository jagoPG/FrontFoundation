<?php

/* node_modules/minimist/test/unknown.js */
class __TwigTemplate_b4716a88cfa42d7e90879f4a7c4699ab30394de371fb3c0ba3bc21c17f990c92 extends Twig_Template
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
        $__internal_a26b608b16ac25a433111ea86fabf994b5e7c4610a88e3e9e54936390a53f60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26b608b16ac25a433111ea86fabf994b5e7c4610a88e3e9e54936390a53f60c->enter($__internal_a26b608b16ac25a433111ea86fabf994b5e7c4610a88e3e9e54936390a53f60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/unknown.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('boolean and alias is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var aliased = [ '-h', 'true', '--derp', 'true' ];
    var regular = [ '--herp',  'true', '-d', 'true' ];
    var opts = {
        alias: { h: 'herp' },
        boolean: 'h',
        unknown: unknownFn
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);

    t.same(unknown, ['--derp', '-d']);
    t.end();
});

test('flag boolean true any double hyphen argument is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var argv = parse(['--honk', '--tacos=good', 'cow', '-p', '55'], {
        boolean: true,
        unknown: unknownFn
    });
    t.same(unknown, ['--tacos=good', 'cow', '-p']);
    t.same(argv, {
        honk: true,
        _: []
    });
    t.end();
});

test('string and alias is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var aliased = [ '-h', 'hello', '--derp', 'goodbye' ];
    var regular = [ '--herp',  'hello', '-d', 'moon' ];
    var opts = {
        alias: { h: 'herp' },
        string: 'h',
        unknown: unknownFn
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);

    t.same(unknown, ['--derp', '-d']);
    t.end();
});

test('default and alias is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var aliased = [ '-h', 'hello' ];
    var regular = [ '--herp',  'hello' ];
    var opts = {
        default: { 'h': 'bar' },
        alias: { 'h': 'herp' },
        unknown: unknownFn
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);

    t.same(unknown, []);
    t.end();
    unknownFn(); // exercise fn for 100% coverage
});

test('value following -- is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var aliased = [ '--bad', '--', 'good', 'arg' ];
    var opts = {
        '--': true,
        unknown: unknownFn
    };
    var argv = parse(aliased, opts);

    t.same(unknown, ['--bad']);
    t.same(argv, {
        '--': ['good', 'arg'],
        '_': []
    })
    t.end();
});
";
        
        $__internal_a26b608b16ac25a433111ea86fabf994b5e7c4610a88e3e9e54936390a53f60c->leave($__internal_a26b608b16ac25a433111ea86fabf994b5e7c4610a88e3e9e54936390a53f60c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/unknown.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('boolean and alias is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var aliased = [ '-h', 'true', '--derp', 'true' ];
    var regular = [ '--herp',  'true', '-d', 'true' ];
    var opts = {
        alias: { h: 'herp' },
        boolean: 'h',
        unknown: unknownFn
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);

    t.same(unknown, ['--derp', '-d']);
    t.end();
});

test('flag boolean true any double hyphen argument is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var argv = parse(['--honk', '--tacos=good', 'cow', '-p', '55'], {
        boolean: true,
        unknown: unknownFn
    });
    t.same(unknown, ['--tacos=good', 'cow', '-p']);
    t.same(argv, {
        honk: true,
        _: []
    });
    t.end();
});

test('string and alias is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var aliased = [ '-h', 'hello', '--derp', 'goodbye' ];
    var regular = [ '--herp',  'hello', '-d', 'moon' ];
    var opts = {
        alias: { h: 'herp' },
        string: 'h',
        unknown: unknownFn
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);

    t.same(unknown, ['--derp', '-d']);
    t.end();
});

test('default and alias is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var aliased = [ '-h', 'hello' ];
    var regular = [ '--herp',  'hello' ];
    var opts = {
        default: { 'h': 'bar' },
        alias: { 'h': 'herp' },
        unknown: unknownFn
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);

    t.same(unknown, []);
    t.end();
    unknownFn(); // exercise fn for 100% coverage
});

test('value following -- is not unknown', function (t) {
    var unknown = [];
    function unknownFn(arg) {
        unknown.push(arg);
        return false;
    }
    var aliased = [ '--bad', '--', 'good', 'arg' ];
    var opts = {
        '--': true,
        unknown: unknownFn
    };
    var argv = parse(aliased, opts);

    t.same(unknown, ['--bad']);
    t.same(argv, {
        '--': ['good', 'arg'],
        '_': []
    })
    t.end();
});
", "node_modules/minimist/test/unknown.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/unknown.js");
    }
}
