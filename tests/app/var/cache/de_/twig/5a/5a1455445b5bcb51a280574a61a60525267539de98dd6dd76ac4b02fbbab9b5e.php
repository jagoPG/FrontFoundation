<?php

/* node_modules/minimist/test/long.js */
class __TwigTemplate_7b8221e54915edfe7330312ba8732afd9c4408102e0ebb7089c40005c3efa0b0 extends Twig_Template
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
        $__internal_6567d3dded7bc75ef72e4db933e02097879a897abff80963506c260075a0e3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6567d3dded7bc75ef72e4db933e02097879a897abff80963506c260075a0e3b7->enter($__internal_6567d3dded7bc75ef72e4db933e02097879a897abff80963506c260075a0e3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/long.js"));

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
        
        $__internal_6567d3dded7bc75ef72e4db933e02097879a897abff80963506c260075a0e3b7->leave($__internal_6567d3dded7bc75ef72e4db933e02097879a897abff80963506c260075a0e3b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/long.js";
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
", "node_modules/minimist/test/long.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/long.js");
    }
}
