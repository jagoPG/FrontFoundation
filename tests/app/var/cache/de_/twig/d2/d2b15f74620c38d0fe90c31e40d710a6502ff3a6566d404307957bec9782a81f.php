<?php

/* node_modules/object-inspect/test/undef.js */
class __TwigTemplate_5bf5603dd5f0bdbd89f706ecaead5d98eb7ec17b3d92b15934ec4efbcd4ca0b9 extends Twig_Template
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
        $__internal_267c7f0feec73c7b8c447a71d784f17ed841f3387aa8fb9931b42dd8770b79e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267c7f0feec73c7b8c447a71d784f17ed841f3387aa8fb9931b42dd8770b79e1->enter($__internal_267c7f0feec73c7b8c447a71d784f17ed841f3387aa8fb9931b42dd8770b79e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/undef.js"));

        // line 1
        echo "var test = require('tape');
var inspect = require('../');

var obj = { a: 1, b: [ 3, 4, undefined, null ], c: undefined, d: null };

test('undef and null', function (t) {
    t.plan(1);
    t.equal(
        inspect(obj),
        '{ a: 1, b: [ 3, 4, undefined, null ], c: undefined, d: null }'
    );
});
";
        
        $__internal_267c7f0feec73c7b8c447a71d784f17ed841f3387aa8fb9931b42dd8770b79e1->leave($__internal_267c7f0feec73c7b8c447a71d784f17ed841f3387aa8fb9931b42dd8770b79e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/undef.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var inspect = require('../');

var obj = { a: 1, b: [ 3, 4, undefined, null ], c: undefined, d: null };

test('undef and null', function (t) {
    t.plan(1);
    t.equal(
        inspect(obj),
        '{ a: 1, b: [ 3, 4, undefined, null ], c: undefined, d: null }'
    );
});
", "node_modules/object-inspect/test/undef.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/undef.js");
    }
}
