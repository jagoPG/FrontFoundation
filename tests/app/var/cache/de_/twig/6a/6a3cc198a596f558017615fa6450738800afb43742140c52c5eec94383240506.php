<?php

/* node_modules/tape/test/exposed-harness.js */
class __TwigTemplate_947afe10a8d8e10edf2f1144b7dad62eaf96614191704c871a5ce24d92c720e0 extends Twig_Template
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
        $__internal_0384a3cc25fd50a8ddbc46a726a4c5398b44a7c3f502adb0d3736e30498b84a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0384a3cc25fd50a8ddbc46a726a4c5398b44a7c3f502adb0d3736e30498b84a3->enter($__internal_0384a3cc25fd50a8ddbc46a726a4c5398b44a7c3f502adb0d3736e30498b84a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/exposed-harness.js"));

        // line 1
        echo "var tape = require('../');
var tap = require('tap');

tap.test('main harness object is exposed', function (assert) {

   assert.equal(typeof tape.getHarness, 'function', 'tape.getHarness is a function')

   assert.equal(tape.getHarness()._results.pass, 0)

   assert.end()

})

";
        
        $__internal_0384a3cc25fd50a8ddbc46a726a4c5398b44a7c3f502adb0d3736e30498b84a3->leave($__internal_0384a3cc25fd50a8ddbc46a726a4c5398b44a7c3f502adb0d3736e30498b84a3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/exposed-harness.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('../');
var tap = require('tap');

tap.test('main harness object is exposed', function (assert) {

   assert.equal(typeof tape.getHarness, 'function', 'tape.getHarness is a function')

   assert.equal(tape.getHarness()._results.pass, 0)

   assert.end()

})

", "node_modules/tape/test/exposed-harness.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/exposed-harness.js");
    }
}
