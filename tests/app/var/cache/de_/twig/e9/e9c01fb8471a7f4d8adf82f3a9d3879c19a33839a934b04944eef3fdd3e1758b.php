<?php

/* node_modules/tar/test/zz-cleanup.js */
class __TwigTemplate_526114c6a2fd1a66407bb7f9885383d0e52da71fa79b3bb6b32b0e174164a4ee extends Twig_Template
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
        $__internal_00facc8e91ebfe4ddc66b1aa0a5b9473672e1b265a487b0084718a3e8371fc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00facc8e91ebfe4ddc66b1aa0a5b9473672e1b265a487b0084718a3e8371fc57->enter($__internal_00facc8e91ebfe4ddc66b1aa0a5b9473672e1b265a487b0084718a3e8371fc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/test/zz-cleanup.js"));

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
        
        $__internal_00facc8e91ebfe4ddc66b1aa0a5b9473672e1b265a487b0084718a3e8371fc57->leave($__internal_00facc8e91ebfe4ddc66b1aa0a5b9473672e1b265a487b0084718a3e8371fc57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/test/zz-cleanup.js";
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
", "node_modules/tar/test/zz-cleanup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/test/zz-cleanup.js");
    }
}
