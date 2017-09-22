<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/all_bool.js */
class __TwigTemplate_84a209b49fe515ea01ab68db85769131ac91175c98c4a92ea6d946a88e23ffa5 extends Twig_Template
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
        $__internal_c669cdd734197ebac71246274b53ad5849ebc49a31baef531b171b5a57888bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c669cdd734197ebac71246274b53ad5849ebc49a31baef531b171b5a57888bc0->enter($__internal_c669cdd734197ebac71246274b53ad5849ebc49a31baef531b171b5a57888bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/all_bool.js"));

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
        
        $__internal_c669cdd734197ebac71246274b53ad5849ebc49a31baef531b171b5a57888bc0->leave($__internal_c669cdd734197ebac71246274b53ad5849ebc49a31baef531b171b5a57888bc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/all_bool.js";
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
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/all_bool.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/all_bool.js");
    }
}
