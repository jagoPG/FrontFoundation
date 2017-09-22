<?php

/* node_modules/object-inspect/test/lowbyte.js */
class __TwigTemplate_28dc09642864f1150c1b1318df0b2c5c3175d37a0cb61884fe36683917d971d4 extends Twig_Template
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
        $__internal_1b34e43f252d012cb4f7a8187ba678ab412c3e2b576c47599c6f64ee29337d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b34e43f252d012cb4f7a8187ba678ab412c3e2b576c47599c6f64ee29337d8d->enter($__internal_1b34e43f252d012cb4f7a8187ba678ab412c3e2b576c47599c6f64ee29337d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/lowbyte.js"));

        // line 1
        echo "var test = require('tape');
var inspect = require('../');

var obj = { x: 'a\\r\\nb', y: '\\5! \\x1f \\022' };

test('interpolate low bytes', function (t) {
    t.plan(1);
    t.equal(
        inspect(obj),
        \"{ x: 'a\\\\r\\\\nb', y: '\\\\x05! \\\\x1f \\\\x12' }\"
    );
});
";
        
        $__internal_1b34e43f252d012cb4f7a8187ba678ab412c3e2b576c47599c6f64ee29337d8d->leave($__internal_1b34e43f252d012cb4f7a8187ba678ab412c3e2b576c47599c6f64ee29337d8d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/lowbyte.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var inspect = require('../');

var obj = { x: 'a\\r\\nb', y: '\\5! \\x1f \\022' };

test('interpolate low bytes', function (t) {
    t.plan(1);
    t.equal(
        inspect(obj),
        \"{ x: 'a\\\\r\\\\nb', y: '\\\\x05! \\\\x1f \\\\x12' }\"
    );
});
", "node_modules/object-inspect/test/lowbyte.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/lowbyte.js");
    }
}
