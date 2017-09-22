<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/example/key_cmp.js */
class __TwigTemplate_de5e4749e4f537b4552c0d27f901c41d82bc171c50dbab5311907fa3c781ad88 extends Twig_Template
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
        $__internal_a0295bd8f7f502224c4b7ca0b0dd80565834ab4dfaa0e232ea3ab5dee41d1eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0295bd8f7f502224c4b7ca0b0dd80565834ab4dfaa0e232ea3ab5dee41d1eb6->enter($__internal_a0295bd8f7f502224c4b7ca0b0dd80565834ab4dfaa0e232ea3ab5dee41d1eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/example/key_cmp.js"));

        // line 1
        echo "var stringify = require('../');

var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
var s = stringify(obj, function (a, b) {
    return a.key < b.key ? 1 : -1;
});
console.log(s);
";
        
        $__internal_a0295bd8f7f502224c4b7ca0b0dd80565834ab4dfaa0e232ea3ab5dee41d1eb6->leave($__internal_a0295bd8f7f502224c4b7ca0b0dd80565834ab4dfaa0e232ea3ab5dee41d1eb6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/example/key_cmp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var stringify = require('../');

var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
var s = stringify(obj, function (a, b) {
    return a.key < b.key ? 1 : -1;
});
console.log(s);
", "node_modules/fsevents/node_modules/json-stable-stringify/example/key_cmp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/example/key_cmp.js");
    }
}
