<?php

/* node_modules/json-stable-stringify/example/str.js */
class __TwigTemplate_b4cf538aba6e26d1dccaa4bfaa5728c63f78ca9d6328010515a58e843e3f2a47 extends Twig_Template
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
        $__internal_a56687d46465b23ff83b0aab0314afa57aac895b56ec6c1d99293911af9477ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56687d46465b23ff83b0aab0314afa57aac895b56ec6c1d99293911af9477ad->enter($__internal_a56687d46465b23ff83b0aab0314afa57aac895b56ec6c1d99293911af9477ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stable-stringify/example/str.js"));

        // line 1
        echo "var stringify = require('../');
var obj = { c: 6, b: [4,5], a: 3 };
console.log(stringify(obj));
";
        
        $__internal_a56687d46465b23ff83b0aab0314afa57aac895b56ec6c1d99293911af9477ad->leave($__internal_a56687d46465b23ff83b0aab0314afa57aac895b56ec6c1d99293911af9477ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stable-stringify/example/str.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var stringify = require('../');
var obj = { c: 6, b: [4,5], a: 3 };
console.log(stringify(obj));
", "node_modules/json-stable-stringify/example/str.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stable-stringify/example/str.js");
    }
}
