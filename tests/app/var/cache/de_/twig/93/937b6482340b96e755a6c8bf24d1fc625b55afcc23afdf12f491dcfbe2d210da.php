<?php

/* node_modules/concat-map/example/map.js */
class __TwigTemplate_1f527c95162b2ad2d4a0bf2f0d784a8ee8a80a27cd627282301d9371f81c543b extends Twig_Template
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
        $__internal_7992b5e22c39ef77c7a708114f0b7100c6f8d5171e1070ba6ad56c1e6e936e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7992b5e22c39ef77c7a708114f0b7100c6f8d5171e1070ba6ad56c1e6e936e57->enter($__internal_7992b5e22c39ef77c7a708114f0b7100c6f8d5171e1070ba6ad56c1e6e936e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/concat-map/example/map.js"));

        // line 1
        echo "var concatMap = require('../');
var xs = [ 1, 2, 3, 4, 5, 6 ];
var ys = concatMap(xs, function (x) {
    return x % 2 ? [ x - 0.1, x, x + 0.1 ] : [];
});
console.dir(ys);
";
        
        $__internal_7992b5e22c39ef77c7a708114f0b7100c6f8d5171e1070ba6ad56c1e6e936e57->leave($__internal_7992b5e22c39ef77c7a708114f0b7100c6f8d5171e1070ba6ad56c1e6e936e57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/concat-map/example/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var concatMap = require('../');
var xs = [ 1, 2, 3, 4, 5, 6 ];
var ys = concatMap(xs, function (x) {
    return x % 2 ? [ x - 0.1, x, x + 0.1 ] : [];
});
console.dir(ys);
", "node_modules/concat-map/example/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/concat-map/example/map.js");
    }
}
