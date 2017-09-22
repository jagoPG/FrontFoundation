<?php

/* node_modules/tape/example/timing.js */
class __TwigTemplate_3e15049e5d0fc259072dcd795f713ae796c90e6a626148adff3056be9daf8389 extends Twig_Template
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
        $__internal_99ff2e98a8a5cdfed9eb1d86a4a440965ecc000f5bdca1e8ff5dad288fd4dc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ff2e98a8a5cdfed9eb1d86a4a440965ecc000f5bdca1e8ff5dad288fd4dc61->enter($__internal_99ff2e98a8a5cdfed9eb1d86a4a440965ecc000f5bdca1e8ff5dad288fd4dc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/timing.js"));

        // line 1
        echo "var test = require('../');

test('timing test', function (t) {
    t.plan(2);
    
    t.equal(typeof Date.now, 'function');
    var start = new Date;
    
    setTimeout(function () {
        t.equal(new Date - start, 100);
    }, 100);
});
";
        
        $__internal_99ff2e98a8a5cdfed9eb1d86a4a440965ecc000f5bdca1e8ff5dad288fd4dc61->leave($__internal_99ff2e98a8a5cdfed9eb1d86a4a440965ecc000f5bdca1e8ff5dad288fd4dc61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/timing.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('timing test', function (t) {
    t.plan(2);
    
    t.equal(typeof Date.now, 'function');
    var start = new Date;
    
    setTimeout(function () {
        t.equal(new Date - start, 100);
    }, 100);
});
", "node_modules/tape/example/timing.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/timing.js");
    }
}
