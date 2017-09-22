<?php

/* node_modules/fsevents/node_modules/tar/test/zz-cleanup.js */
class __TwigTemplate_7ba2a338cf1bdaeca81a5197448c4357a26a70b10bd69a63e3a97d874f684336 extends Twig_Template
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
        $__internal_f8f5abbbecc97d31e9883e8674b7576d1472def3bd24a9bc9e1b2728775f1eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f5abbbecc97d31e9883e8674b7576d1472def3bd24a9bc9e1b2728775f1eaa->enter($__internal_f8f5abbbecc97d31e9883e8674b7576d1472def3bd24a9bc9e1b2728775f1eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/test/zz-cleanup.js"));

        // line 1
        echo "// clean up the fixtures

var tap = require(\"tap\")
, rimraf = require(\"rimraf\")
, test = tap.test
, path = require(\"path\")

test(\"clean fixtures\", function (t) {
  rimraf(path.resolve(__dirname, \"fixtures\"), function (er) {
    t.ifError(er, \"rimraf ./fixtures/\")
    t.end()
  })
})

test(\"clean tmp\", function (t) {
  rimraf(path.resolve(__dirname, \"tmp\"), function (er) {
    t.ifError(er, \"rimraf ./tmp/\")
    t.end()
  })
})
";
        
        $__internal_f8f5abbbecc97d31e9883e8674b7576d1472def3bd24a9bc9e1b2728775f1eaa->leave($__internal_f8f5abbbecc97d31e9883e8674b7576d1472def3bd24a9bc9e1b2728775f1eaa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/test/zz-cleanup.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// clean up the fixtures

var tap = require(\"tap\")
, rimraf = require(\"rimraf\")
, test = tap.test
, path = require(\"path\")

test(\"clean fixtures\", function (t) {
  rimraf(path.resolve(__dirname, \"fixtures\"), function (er) {
    t.ifError(er, \"rimraf ./fixtures/\")
    t.end()
  })
})

test(\"clean tmp\", function (t) {
  rimraf(path.resolve(__dirname, \"tmp\"), function (er) {
    t.ifError(er, \"rimraf ./tmp/\")
    t.end()
  })
})
", "node_modules/fsevents/node_modules/tar/test/zz-cleanup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/test/zz-cleanup.js");
    }
}
