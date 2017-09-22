<?php

/* node_modules/object-inspect/test/deep.js */
class __TwigTemplate_04dbdfb1f4c700c7eb7570125845557f31675c1e3b45869f478fc4cbcd040f85 extends Twig_Template
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
        $__internal_c0ce5d77ef6cdb12e53e1a5c93d63b86687cc02ed576a00d8ab5321e1ca724e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ce5d77ef6cdb12e53e1a5c93d63b86687cc02ed576a00d8ab5321e1ca724e2->enter($__internal_c0ce5d77ef6cdb12e53e1a5c93d63b86687cc02ed576a00d8ab5321e1ca724e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/deep.js"));

        // line 1
        echo "var inspect = require('../');
var test = require('tape');

test('deep', function (t) {
    t.plan(2);
    var obj = [ [ [ [ [ [ 500 ] ] ] ] ] ];
    t.equal(inspect(obj), '[ [ [ [ [ [Object] ] ] ] ] ]');
    t.equal(inspect(obj, { depth: 2 }), '[ [ [Object] ] ]');
});
";
        
        $__internal_c0ce5d77ef6cdb12e53e1a5c93d63b86687cc02ed576a00d8ab5321e1ca724e2->leave($__internal_c0ce5d77ef6cdb12e53e1a5c93d63b86687cc02ed576a00d8ab5321e1ca724e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/deep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var test = require('tape');

test('deep', function (t) {
    t.plan(2);
    var obj = [ [ [ [ [ [ 500 ] ] ] ] ] ];
    t.equal(inspect(obj), '[ [ [ [ [ [Object] ] ] ] ] ]');
    t.equal(inspect(obj, { depth: 2 }), '[ [ [Object] ] ]');
});
", "node_modules/object-inspect/test/deep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/deep.js");
    }
}
