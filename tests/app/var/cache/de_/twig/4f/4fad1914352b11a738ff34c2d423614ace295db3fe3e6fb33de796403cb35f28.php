<?php

/* node_modules/minimist/test/all_bool.js */
class __TwigTemplate_3e273821949f39f791e49bedbfb26585d5d15034d21e52693f71c661ce433aa5 extends Twig_Template
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
        $__internal_b691a8292cbbaa8a909b96949dcbaf58f55b2008f66fdf13dd1911fd17c9cc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b691a8292cbbaa8a909b96949dcbaf58f55b2008f66fdf13dd1911fd17c9cc25->enter($__internal_b691a8292cbbaa8a909b96949dcbaf58f55b2008f66fdf13dd1911fd17c9cc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/all_bool.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('flag boolean true (default all --args to boolean)', function (t) {
    var argv = parse(['moo', '--honk', 'cow'], {
        boolean: true
    });
    
    t.deepEqual(argv, {
        honk: true,
        _: ['moo', 'cow']
    });
    
    t.deepEqual(typeof argv.honk, 'boolean');
    t.end();
});

test('flag boolean true only affects double hyphen arguments without equals signs', function (t) {
    var argv = parse(['moo', '--honk', 'cow', '-p', '55', '--tacos=good'], {
        boolean: true
    });
    
    t.deepEqual(argv, {
        honk: true,
        tacos: 'good',
        p: 55,
        _: ['moo', 'cow']
    });
    
    t.deepEqual(typeof argv.honk, 'boolean');
    t.end();
});
";
        
        $__internal_b691a8292cbbaa8a909b96949dcbaf58f55b2008f66fdf13dd1911fd17c9cc25->leave($__internal_b691a8292cbbaa8a909b96949dcbaf58f55b2008f66fdf13dd1911fd17c9cc25_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/all_bool.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('flag boolean true (default all --args to boolean)', function (t) {
    var argv = parse(['moo', '--honk', 'cow'], {
        boolean: true
    });
    
    t.deepEqual(argv, {
        honk: true,
        _: ['moo', 'cow']
    });
    
    t.deepEqual(typeof argv.honk, 'boolean');
    t.end();
});

test('flag boolean true only affects double hyphen arguments without equals signs', function (t) {
    var argv = parse(['moo', '--honk', 'cow', '-p', '55', '--tacos=good'], {
        boolean: true
    });
    
    t.deepEqual(argv, {
        honk: true,
        tacos: 'good',
        p: 55,
        _: ['moo', 'cow']
    });
    
    t.deepEqual(typeof argv.honk, 'boolean');
    t.end();
});
", "node_modules/minimist/test/all_bool.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/all_bool.js");
    }
}
