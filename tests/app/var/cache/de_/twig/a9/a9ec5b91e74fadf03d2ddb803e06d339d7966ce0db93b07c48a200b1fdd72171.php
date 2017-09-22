<?php

/* node_modules/concat-map/index.js */
class __TwigTemplate_a2ec2f37e48c13fe47918415a006d4de671cf5ddb440aad7a3bbe1f257e080e7 extends Twig_Template
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
        $__internal_8634ecb5a7ef002da4ea369deeca13e6b0dfe5b9cc7e96f6a1d639881454590b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8634ecb5a7ef002da4ea369deeca13e6b0dfe5b9cc7e96f6a1d639881454590b->enter($__internal_8634ecb5a7ef002da4ea369deeca13e6b0dfe5b9cc7e96f6a1d639881454590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/concat-map/index.js"));

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
        
        $__internal_8634ecb5a7ef002da4ea369deeca13e6b0dfe5b9cc7e96f6a1d639881454590b->leave($__internal_8634ecb5a7ef002da4ea369deeca13e6b0dfe5b9cc7e96f6a1d639881454590b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/concat-map/index.js";
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
", "node_modules/concat-map/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/concat-map/index.js");
    }
}
