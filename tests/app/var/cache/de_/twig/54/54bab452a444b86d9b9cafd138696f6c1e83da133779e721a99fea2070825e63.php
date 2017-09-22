<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/test/to-json.js */
class __TwigTemplate_2d1beec6810ecbb4fffae415eb566884c42192ada27c6c7d1a3a151e991ceeb6 extends Twig_Template
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
        $__internal_de1e46548bd8f2716eb06b639ca2354e0e1f6895fc0a28300797d7ff4ead7eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1e46548bd8f2716eb06b639ca2354e0e1f6895fc0a28300797d7ff4ead7eb4->enter($__internal_de1e46548bd8f2716eb06b639ca2354e0e1f6895fc0a28300797d7ff4ead7eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/test/to-json.js"));

        // line 1
        echo "var test = require('tape');
var stringify = require('../');

test('toJSON function', function (t) {
    t.plan(1);
    var obj = { one: 1, two: 2, toJSON: function() { return { one: 1 }; } };
    t.equal(stringify(obj), '{\"one\":1}' );
});

test('toJSON returns string', function (t) {
\tt.plan(1);
\tvar obj = { one: 1, two: 2, toJSON: function() { return 'one'; } };
\tt.equal(stringify(obj), '\"one\"');
});

test('toJSON returns array', function (t) {
\tt.plan(1);
\tvar obj = { one: 1, two: 2, toJSON: function() { return ['one']; } };
\tt.equal(stringify(obj), '[\"one\"]');
});
";
        
        $__internal_de1e46548bd8f2716eb06b639ca2354e0e1f6895fc0a28300797d7ff4ead7eb4->leave($__internal_de1e46548bd8f2716eb06b639ca2354e0e1f6895fc0a28300797d7ff4ead7eb4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/test/to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var stringify = require('../');

test('toJSON function', function (t) {
    t.plan(1);
    var obj = { one: 1, two: 2, toJSON: function() { return { one: 1 }; } };
    t.equal(stringify(obj), '{\"one\":1}' );
});

test('toJSON returns string', function (t) {
\tt.plan(1);
\tvar obj = { one: 1, two: 2, toJSON: function() { return 'one'; } };
\tt.equal(stringify(obj), '\"one\"');
});

test('toJSON returns array', function (t) {
\tt.plan(1);
\tvar obj = { one: 1, two: 2, toJSON: function() { return ['one']; } };
\tt.equal(stringify(obj), '[\"one\"]');
});
", "node_modules/fsevents/node_modules/json-stable-stringify/test/to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/test/to-json.js");
    }
}
