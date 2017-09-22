<?php

/* node_modules/mkdirp/node_modules/minimist/test/dash.js */
class __TwigTemplate_eda7cf629937fc73847bc8c36d482ee90bd21a166bdc8786d3bf33616d6eb7e5 extends Twig_Template
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
        $__internal_fa700e0ff6ab58cbcc533fbaab784292dc55f4563219e76974a4c2c601208fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa700e0ff6ab58cbcc533fbaab784292dc55f4563219e76974a4c2c601208fae->enter($__internal_fa700e0ff6ab58cbcc533fbaab784292dc55f4563219e76974a4c2c601208fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/node_modules/minimist/test/dash.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('-', function (t) {
    t.plan(5);
    t.deepEqual(parse([ '-n', '-' ]), { n: '-', _: [] });
    t.deepEqual(parse([ '-' ]), { _: [ '-' ] });
    t.deepEqual(parse([ '-f-' ]), { f: '-', _: [] });
    t.deepEqual(
        parse([ '-b', '-' ], { boolean: 'b' }),
        { b: true, _: [ '-' ] }
    );
    t.deepEqual(
        parse([ '-s', '-' ], { string: 's' }),
        { s: '-', _: [] }
    );
});

test('-a -- b', function (t) {
    t.plan(3);
    t.deepEqual(parse([ '-a', '--', 'b' ]), { a: true, _: [ 'b' ] });
    t.deepEqual(parse([ '--a', '--', 'b' ]), { a: true, _: [ 'b' ] });
    t.deepEqual(parse([ '--a', '--', 'b' ]), { a: true, _: [ 'b' ] });
});
";
        
        $__internal_fa700e0ff6ab58cbcc533fbaab784292dc55f4563219e76974a4c2c601208fae->leave($__internal_fa700e0ff6ab58cbcc533fbaab784292dc55f4563219e76974a4c2c601208fae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/node_modules/minimist/test/dash.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('-', function (t) {
    t.plan(5);
    t.deepEqual(parse([ '-n', '-' ]), { n: '-', _: [] });
    t.deepEqual(parse([ '-' ]), { _: [ '-' ] });
    t.deepEqual(parse([ '-f-' ]), { f: '-', _: [] });
    t.deepEqual(
        parse([ '-b', '-' ], { boolean: 'b' }),
        { b: true, _: [ '-' ] }
    );
    t.deepEqual(
        parse([ '-s', '-' ], { string: 's' }),
        { s: '-', _: [] }
    );
});

test('-a -- b', function (t) {
    t.plan(3);
    t.deepEqual(parse([ '-a', '--', 'b' ]), { a: true, _: [ 'b' ] });
    t.deepEqual(parse([ '--a', '--', 'b' ]), { a: true, _: [ 'b' ] });
    t.deepEqual(parse([ '--a', '--', 'b' ]), { a: true, _: [ 'b' ] });
});
", "node_modules/mkdirp/node_modules/minimist/test/dash.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/node_modules/minimist/test/dash.js");
    }
}
