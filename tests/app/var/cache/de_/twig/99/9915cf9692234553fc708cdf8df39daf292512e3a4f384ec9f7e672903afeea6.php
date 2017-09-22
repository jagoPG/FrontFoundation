<?php

/* node_modules/console-browserify/test/index.js */
class __TwigTemplate_3f82d51e201004cefe7ee134947b92897893b9b55c4016382da8cd674fc47bf5 extends Twig_Template
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
        $__internal_665cdf347e99b33b016e37f3bdc0660d7e21194a330b09b4db32650a3f176656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665cdf347e99b33b016e37f3bdc0660d7e21194a330b09b4db32650a3f176656->enter($__internal_665cdf347e99b33b016e37f3bdc0660d7e21194a330b09b4db32650a3f176656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/console-browserify/test/index.js"));

        // line 1
        echo "var console = require(\"../index\")
var test = require(\"tape\")

if (typeof window !== \"undefined\" && !window.JSON) {
    window.JSON = require(\"jsonify\")
}

test(\"console has expected methods\", function (assert) {
    assert.ok(console.log)
    assert.ok(console.info)
    assert.ok(console.warn)
    assert.ok(console.dir)
    assert.ok(console.time, \"time\")
    assert.ok(console.timeEnd, \"timeEnd\")
    assert.ok(console.trace, \"trace\")
    assert.ok(console.assert)

    assert.end()
})

test(\"invoke console.log\", function (assert) {
    console.log(\"test-log\")

    assert.end()
})

test(\"invoke console.info\", function (assert) {
    console.info(\"test-info\")

    assert.end()
})

test(\"invoke console.warn\", function (assert) {
    console.warn(\"test-warn\")
    
    assert.end()
})

test(\"invoke console.time\", function (assert) {
    console.time(\"label\")

    assert.end()
})

test(\"invoke console.trace\", function (assert) {
    console.trace(\"test-trace\")

    assert.end()
})

test(\"invoke console.assert\", function (assert) {
    console.assert(true)

    assert.end()
})

test(\"invoke console.dir\", function (assert) {
    console.dir(\"test-dir\")

    assert.end()
})

test(\"invoke console.timeEnd\", function (assert) {
    console.timeEnd(\"label\")

    assert.end()
})
";
        
        $__internal_665cdf347e99b33b016e37f3bdc0660d7e21194a330b09b4db32650a3f176656->leave($__internal_665cdf347e99b33b016e37f3bdc0660d7e21194a330b09b4db32650a3f176656_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/console-browserify/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var console = require(\"../index\")
var test = require(\"tape\")

if (typeof window !== \"undefined\" && !window.JSON) {
    window.JSON = require(\"jsonify\")
}

test(\"console has expected methods\", function (assert) {
    assert.ok(console.log)
    assert.ok(console.info)
    assert.ok(console.warn)
    assert.ok(console.dir)
    assert.ok(console.time, \"time\")
    assert.ok(console.timeEnd, \"timeEnd\")
    assert.ok(console.trace, \"trace\")
    assert.ok(console.assert)

    assert.end()
})

test(\"invoke console.log\", function (assert) {
    console.log(\"test-log\")

    assert.end()
})

test(\"invoke console.info\", function (assert) {
    console.info(\"test-info\")

    assert.end()
})

test(\"invoke console.warn\", function (assert) {
    console.warn(\"test-warn\")
    
    assert.end()
})

test(\"invoke console.time\", function (assert) {
    console.time(\"label\")

    assert.end()
})

test(\"invoke console.trace\", function (assert) {
    console.trace(\"test-trace\")

    assert.end()
})

test(\"invoke console.assert\", function (assert) {
    console.assert(true)

    assert.end()
})

test(\"invoke console.dir\", function (assert) {
    console.dir(\"test-dir\")

    assert.end()
})

test(\"invoke console.timeEnd\", function (assert) {
    console.timeEnd(\"label\")

    assert.end()
})
", "node_modules/console-browserify/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/console-browserify/test/index.js");
    }
}
