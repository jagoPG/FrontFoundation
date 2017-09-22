<?php

/* node_modules/deep-equal/example/cmp.js */
class __TwigTemplate_aacc90717cbe77d837157fdacb34a30a86883f6402d793ffb6ec4c22d1776e50 extends Twig_Template
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
        $__internal_4edf802f9503ddabb24d33f0a285a186260f96aff64348e418d93ef14745a053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edf802f9503ddabb24d33f0a285a186260f96aff64348e418d93ef14745a053->enter($__internal_4edf802f9503ddabb24d33f0a285a186260f96aff64348e418d93ef14745a053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/deep-equal/example/cmp.js"));

        // line 1
        echo "var equal = require('../');
console.dir([
    equal(
        { a : [ 2, 3 ], b : [ 4 ] },
        { a : [ 2, 3 ], b : [ 4 ] }
    ),
    equal(
        { x : 5, y : [6] },
        { x : 5, y : 6 }
    )
]);
";
        
        $__internal_4edf802f9503ddabb24d33f0a285a186260f96aff64348e418d93ef14745a053->leave($__internal_4edf802f9503ddabb24d33f0a285a186260f96aff64348e418d93ef14745a053_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/deep-equal/example/cmp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var equal = require('../');
console.dir([
    equal(
        { a : [ 2, 3 ], b : [ 4 ] },
        { a : [ 2, 3 ], b : [ 4 ] }
    ),
    equal(
        { x : 5, y : [6] },
        { x : 5, y : 6 }
    )
]);
", "node_modules/deep-equal/example/cmp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/deep-equal/example/cmp.js");
    }
}
