<?php

/* node_modules/date-now/test/index.js */
class __TwigTemplate_c2f1655fd9310c3f5706e0ab1e352839f023840fe04ce4108c65cee404298da8 extends Twig_Template
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
        $__internal_2a72965573bb5f68c8cb19205795438f87a532da8957b15682f001f4ad801052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a72965573bb5f68c8cb19205795438f87a532da8957b15682f001f4ad801052->enter($__internal_2a72965573bb5f68c8cb19205795438f87a532da8957b15682f001f4ad801052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/date-now/test/index.js"));

        // line 1
        echo "var test = require(\"tape\")
var setTimeout = require(\"timers\").setTimeout

var now = require(\"../index\")
var seeded = require(\"../seed\")

test(\"date\", function (assert) {
    var ts = now()
    var ts2 = Date.now()
    assert.equal(ts, ts2)
    assert.end()
})

test(\"seeded\", function (assert) {
    var time = seeded(40)
    var ts = time()

    within(assert, time(), 40, 5)
    setTimeout(function () {
        within(assert, time(), 90, 10)
        assert.end()
    }, 50)
})

function within(assert, a, b, offset) {
    assert.ok(a + offset > b)
    assert.ok(a - offset < b)
}
";
        
        $__internal_2a72965573bb5f68c8cb19205795438f87a532da8957b15682f001f4ad801052->leave($__internal_2a72965573bb5f68c8cb19205795438f87a532da8957b15682f001f4ad801052_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/date-now/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require(\"tape\")
var setTimeout = require(\"timers\").setTimeout

var now = require(\"../index\")
var seeded = require(\"../seed\")

test(\"date\", function (assert) {
    var ts = now()
    var ts2 = Date.now()
    assert.equal(ts, ts2)
    assert.end()
})

test(\"seeded\", function (assert) {
    var time = seeded(40)
    var ts = time()

    within(assert, time(), 40, 5)
    setTimeout(function () {
        within(assert, time(), 90, 10)
        assert.end()
    }, 50)
})

function within(assert, a, b, offset) {
    assert.ok(a + offset > b)
    assert.ok(a - offset < b)
}
", "node_modules/date-now/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/date-now/test/index.js");
    }
}
