<?php

/* node_modules/json-stable-stringify/test/to-json.js */
class __TwigTemplate_009fd0704dbed4ce3cb5b646da5585db185e441c360ac973fe5f7838ad3ba325 extends Twig_Template
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
        $__internal_e8e8b4dc0e11edaf2ee4d005861d9a4204ffc7d30aa755fe57225cc1d5156e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e8b4dc0e11edaf2ee4d005861d9a4204ffc7d30aa755fe57225cc1d5156e68->enter($__internal_e8e8b4dc0e11edaf2ee4d005861d9a4204ffc7d30aa755fe57225cc1d5156e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stable-stringify/test/to-json.js"));

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
        
        $__internal_e8e8b4dc0e11edaf2ee4d005861d9a4204ffc7d30aa755fe57225cc1d5156e68->leave($__internal_e8e8b4dc0e11edaf2ee4d005861d9a4204ffc7d30aa755fe57225cc1d5156e68_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stable-stringify/test/to-json.js";
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
", "node_modules/json-stable-stringify/test/to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stable-stringify/test/to-json.js");
    }
}
