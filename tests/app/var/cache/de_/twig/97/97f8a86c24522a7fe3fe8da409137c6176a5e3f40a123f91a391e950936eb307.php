<?php

/* node_modules/duplexer/test/index.js */
class __TwigTemplate_9c350d25a5a021629befe74115c8f4ac7eb39379563b1df389adcea1e416d541 extends Twig_Template
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
        $__internal_729a49a545110daf9991d0789b40e1000cbab9b1a718734edeb8c9348ea6126b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729a49a545110daf9991d0789b40e1000cbab9b1a718734edeb8c9348ea6126b->enter($__internal_729a49a545110daf9991d0789b40e1000cbab9b1a718734edeb8c9348ea6126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/duplexer/test/index.js"));

        // line 1
        echo "var through = require(\"through\")
var test    = require(\"tape\")

var duplex  = require(\"../index\")

var readable = through()
var writable = through(write)
var written = 0
var data = 0

var stream = duplex(writable, readable)

function write() {
    written++
}

stream.on(\"data\", ondata)

function ondata() {
    data++
}

test(\"emit and write\", function(t) {
    t.plan(2)

    stream.write()
    readable.emit(\"data\")

    t.equal(written, 1, \"should have written once\")
    t.equal(data, 1, \"should have recived once\")
})
";
        
        $__internal_729a49a545110daf9991d0789b40e1000cbab9b1a718734edeb8c9348ea6126b->leave($__internal_729a49a545110daf9991d0789b40e1000cbab9b1a718734edeb8c9348ea6126b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/duplexer/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var through = require(\"through\")
var test    = require(\"tape\")

var duplex  = require(\"../index\")

var readable = through()
var writable = through(write)
var written = 0
var data = 0

var stream = duplex(writable, readable)

function write() {
    written++
}

stream.on(\"data\", ondata)

function ondata() {
    data++
}

test(\"emit and write\", function(t) {
    t.plan(2)

    stream.write()
    readable.emit(\"data\")

    t.equal(written, 1, \"should have written once\")
    t.equal(data, 1, \"should have recived once\")
})
", "node_modules/duplexer/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/duplexer/test/index.js");
    }
}
