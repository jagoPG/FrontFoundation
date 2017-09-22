<?php

/* node_modules/fsevents/node_modules/concat-map/index.js */
class __TwigTemplate_51cfebc774077a903c73a1804c410bf46d6802dfa247e31b42273d4dd7cb1f17 extends Twig_Template
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
        $__internal_218595e2f29c4d65bd4612e9654ccb6d0f12948de416cca048f6ced49f5e2f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218595e2f29c4d65bd4612e9654ccb6d0f12948de416cca048f6ced49f5e2f64->enter($__internal_218595e2f29c4d65bd4612e9654ccb6d0f12948de416cca048f6ced49f5e2f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/concat-map/index.js"));

        // line 1
        echo "module.exports = function (xs, fn) {
    var res = [];
    for (var i = 0; i < xs.length; i++) {
        var x = fn(xs[i], i);
        if (isArray(x)) res.push.apply(res, x);
        else res.push(x);
    }
    return res;
};

var isArray = Array.isArray || function (xs) {
    return Object.prototype.toString.call(xs) === '[object Array]';
};
";
        
        $__internal_218595e2f29c4d65bd4612e9654ccb6d0f12948de416cca048f6ced49f5e2f64->leave($__internal_218595e2f29c4d65bd4612e9654ccb6d0f12948de416cca048f6ced49f5e2f64_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/concat-map/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (xs, fn) {
    var res = [];
    for (var i = 0; i < xs.length; i++) {
        var x = fn(xs[i], i);
        if (isArray(x)) res.push.apply(res, x);
        else res.push(x);
    }
    return res;
};

var isArray = Array.isArray || function (xs) {
    return Object.prototype.toString.call(xs) === '[object Array]';
};
", "node_modules/fsevents/node_modules/concat-map/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/concat-map/index.js");
    }
}
