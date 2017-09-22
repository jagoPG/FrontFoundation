<?php

/* node_modules/fsevents/node_modules/concat-map/example/map.js */
class __TwigTemplate_5bedf31b1a2d1b85a14966f95de8f2faee9ac9b406f1369109953c808502418b extends Twig_Template
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
        $__internal_ee85152e9eeddf54e34f7c1ed5927f4cc9bf98b22025305dca86879bfb066198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee85152e9eeddf54e34f7c1ed5927f4cc9bf98b22025305dca86879bfb066198->enter($__internal_ee85152e9eeddf54e34f7c1ed5927f4cc9bf98b22025305dca86879bfb066198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/concat-map/example/map.js"));

        // line 1
        echo "var concatMap = require('../');
var xs = [ 1, 2, 3, 4, 5, 6 ];
var ys = concatMap(xs, function (x) {
    return x % 2 ? [ x - 0.1, x, x + 0.1 ] : [];
});
console.dir(ys);
";
        
        $__internal_ee85152e9eeddf54e34f7c1ed5927f4cc9bf98b22025305dca86879bfb066198->leave($__internal_ee85152e9eeddf54e34f7c1ed5927f4cc9bf98b22025305dca86879bfb066198_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/concat-map/example/map.js";
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
", "node_modules/fsevents/node_modules/concat-map/example/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/concat-map/example/map.js");
    }
}
