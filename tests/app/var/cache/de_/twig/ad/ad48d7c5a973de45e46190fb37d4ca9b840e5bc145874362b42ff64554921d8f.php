<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/long.js */
class __TwigTemplate_d327b28eef122333f501a2973ce649d3f9eba84d98ea670e73cd8156125fca9e extends Twig_Template
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
        $__internal_3b94c11f2b921f95c7d70b1c2795c29b0bd3166b6253b90e051cf03df0684519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b94c11f2b921f95c7d70b1c2795c29b0bd3166b6253b90e051cf03df0684519->enter($__internal_3b94c11f2b921f95c7d70b1c2795c29b0bd3166b6253b90e051cf03df0684519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/long.js"));

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
        
        $__internal_3b94c11f2b921f95c7d70b1c2795c29b0bd3166b6253b90e051cf03df0684519->leave($__internal_3b94c11f2b921f95c7d70b1c2795c29b0bd3166b6253b90e051cf03df0684519_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/long.js";
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
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/long.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/long.js");
    }
}
