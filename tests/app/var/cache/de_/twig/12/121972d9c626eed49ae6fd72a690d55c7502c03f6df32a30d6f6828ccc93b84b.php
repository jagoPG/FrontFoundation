<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/example/value_cmp.js */
class __TwigTemplate_7cf7b7a0fe3cbf884ae732d3b69bf18fb7f832af8814f85745e26055bbb85ce5 extends Twig_Template
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
        $__internal_ba000a90785c05a8b120bbb2192691fc6c848a8a40e7a5c079a8b75cacf3cb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba000a90785c05a8b120bbb2192691fc6c848a8a40e7a5c079a8b75cacf3cb94->enter($__internal_ba000a90785c05a8b120bbb2192691fc6c848a8a40e7a5c079a8b75cacf3cb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/example/value_cmp.js"));

        // line 1
        echo "var stringify = require('../');

var obj = { d: 6, c: 5, b: [{z:3,y:2,x:1},9], a: 10 };
var s = stringify(obj, function (a, b) {
    return a.value < b.value ? 1 : -1;
});
console.log(s);
";
        
        $__internal_ba000a90785c05a8b120bbb2192691fc6c848a8a40e7a5c079a8b75cacf3cb94->leave($__internal_ba000a90785c05a8b120bbb2192691fc6c848a8a40e7a5c079a8b75cacf3cb94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/example/value_cmp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var stringify = require('../');

var obj = { d: 6, c: 5, b: [{z:3,y:2,x:1},9], a: 10 };
var s = stringify(obj, function (a, b) {
    return a.value < b.value ? 1 : -1;
});
console.log(s);
", "node_modules/fsevents/node_modules/json-stable-stringify/example/value_cmp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/example/value_cmp.js");
    }
}
