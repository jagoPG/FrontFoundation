<?php

/* node_modules/vm-browserify/test/vm.js */
class __TwigTemplate_6fd5a1c657e17a9002c34aee1a6fbd82faff4e67b2e95c39b03229aa2909c594 extends Twig_Template
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
        $__internal_f0fabd871f12e9d8adc51f5f8059fa44c8d1faa6582a0c1e77a454f43b6e6d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fabd871f12e9d8adc51f5f8059fa44c8d1faa6582a0c1e77a454f43b6e6d8c->enter($__internal_f0fabd871f12e9d8adc51f5f8059fa44c8d1faa6582a0c1e77a454f43b6e6d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/vm-browserify/test/vm.js"));

        // line 1
        echo "var test = require('tape');
var vm = require('../');

test('vmRunInNewContext', function (t) {
    t.plan(6);
    
    t.equal(vm.runInNewContext('a + 5', { a : 100 }), 105);
    
    (function () {
        var vars = { x : 10 };
        t.equal(vm.runInNewContext('x++', vars), 10);
        t.equal(vars.x, 11);
    })();
    
    (function () {
        var vars = { x : 10 };
        t.equal(vm.runInNewContext('var y = 3; y + x++', vars), 13);
        t.equal(vars.x, 11);
        t.equal(vars.y, 3);
    })();
    
    t.end();
});

test('vmRunInContext', function (t) {
    t.plan(2);

    var context = vm.createContext({ foo: 1 });

    vm.runInContext('var x = 1', context);
    t.deepEqual(context, { foo: 1, x: 1 });

    vm.runInContext('var y = 1', context);
    t.deepEqual(context, { foo: 1, x: 1, y: 1 });
});
";
        
        $__internal_f0fabd871f12e9d8adc51f5f8059fa44c8d1faa6582a0c1e77a454f43b6e6d8c->leave($__internal_f0fabd871f12e9d8adc51f5f8059fa44c8d1faa6582a0c1e77a454f43b6e6d8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/vm-browserify/test/vm.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var vm = require('../');

test('vmRunInNewContext', function (t) {
    t.plan(6);
    
    t.equal(vm.runInNewContext('a + 5', { a : 100 }), 105);
    
    (function () {
        var vars = { x : 10 };
        t.equal(vm.runInNewContext('x++', vars), 10);
        t.equal(vars.x, 11);
    })();
    
    (function () {
        var vars = { x : 10 };
        t.equal(vm.runInNewContext('var y = 3; y + x++', vars), 13);
        t.equal(vars.x, 11);
        t.equal(vars.y, 3);
    })();
    
    t.end();
});

test('vmRunInContext', function (t) {
    t.plan(2);

    var context = vm.createContext({ foo: 1 });

    vm.runInContext('var x = 1', context);
    t.deepEqual(context, { foo: 1, x: 1 });

    vm.runInContext('var y = 1', context);
    t.deepEqual(context, { foo: 1, x: 1, y: 1 });
});
", "node_modules/vm-browserify/test/vm.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/vm-browserify/test/vm.js");
    }
}
