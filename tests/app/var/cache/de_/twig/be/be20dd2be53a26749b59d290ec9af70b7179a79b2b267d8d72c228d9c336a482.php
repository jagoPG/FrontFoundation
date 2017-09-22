<?php

/* node_modules/fsevents/node_modules/minimist/test/long.js */
class __TwigTemplate_1cde0b994a013144690ae47f187f2d494f5b3bc57b7dae8da96f418eb1600f49 extends Twig_Template
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
        $__internal_569c5a479d69bddd80788a34cb10568a59d88bc3b2f3c352202c752368ccc83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569c5a479d69bddd80788a34cb10568a59d88bc3b2f3c352202c752368ccc83f->enter($__internal_569c5a479d69bddd80788a34cb10568a59d88bc3b2f3c352202c752368ccc83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/minimist/test/long.js"));

        // line 1
        echo "var test = require('tape');
var parse = require('../');

test('long opts', function (t) {
    t.deepEqual(
        parse([ '--bool' ]),
        { bool : true, _ : [] },
        'long boolean'
    );
    t.deepEqual(
        parse([ '--pow', 'xixxle' ]),
        { pow : 'xixxle', _ : [] },
        'long capture sp'
    );
    t.deepEqual(
        parse([ '--pow=xixxle' ]),
        { pow : 'xixxle', _ : [] },
        'long capture eq'
    );
    t.deepEqual(
        parse([ '--host', 'localhost', '--port', '555' ]),
        { host : 'localhost', port : 555, _ : [] },
        'long captures sp'
    );
    t.deepEqual(
        parse([ '--host=localhost', '--port=555' ]),
        { host : 'localhost', port : 555, _ : [] },
        'long captures eq'
    );
    t.end();
});
";
        
        $__internal_569c5a479d69bddd80788a34cb10568a59d88bc3b2f3c352202c752368ccc83f->leave($__internal_569c5a479d69bddd80788a34cb10568a59d88bc3b2f3c352202c752368ccc83f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/minimist/test/long.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var parse = require('../');

test('long opts', function (t) {
    t.deepEqual(
        parse([ '--bool' ]),
        { bool : true, _ : [] },
        'long boolean'
    );
    t.deepEqual(
        parse([ '--pow', 'xixxle' ]),
        { pow : 'xixxle', _ : [] },
        'long capture sp'
    );
    t.deepEqual(
        parse([ '--pow=xixxle' ]),
        { pow : 'xixxle', _ : [] },
        'long capture eq'
    );
    t.deepEqual(
        parse([ '--host', 'localhost', '--port', '555' ]),
        { host : 'localhost', port : 555, _ : [] },
        'long captures sp'
    );
    t.deepEqual(
        parse([ '--host=localhost', '--port=555' ]),
        { host : 'localhost', port : 555, _ : [] },
        'long captures eq'
    );
    t.end();
});
", "node_modules/fsevents/node_modules/minimist/test/long.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/minimist/test/long.js");
    }
}
