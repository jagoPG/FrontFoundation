<?php

/* node_modules/foreach/index.js */
class __TwigTemplate_19b9e95eb5844f574a1a77f35255bceb885e1e589282ad327c0b8c0ea313ed0c extends Twig_Template
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
        $__internal_f385270f7c8caf42f1ff8f2c11cdf349faae380380e36069b4d00200689756cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f385270f7c8caf42f1ff8f2c11cdf349faae380380e36069b4d00200689756cc->enter($__internal_f385270f7c8caf42f1ff8f2c11cdf349faae380380e36069b4d00200689756cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/foreach/index.js"));

        // line 1
        echo "
var hasOwn = Object.prototype.hasOwnProperty;
var toString = Object.prototype.toString;

module.exports = function forEach (obj, fn, ctx) {
    if (toString.call(fn) !== '[object Function]') {
        throw new TypeError('iterator must be a function');
    }
    var l = obj.length;
    if (l === +l) {
        for (var i = 0; i < l; i++) {
            fn.call(ctx, obj[i], i, obj);
        }
    } else {
        for (var k in obj) {
            if (hasOwn.call(obj, k)) {
                fn.call(ctx, obj[k], k, obj);
            }
        }
    }
};

";
        
        $__internal_f385270f7c8caf42f1ff8f2c11cdf349faae380380e36069b4d00200689756cc->leave($__internal_f385270f7c8caf42f1ff8f2c11cdf349faae380380e36069b4d00200689756cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/foreach/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
var hasOwn = Object.prototype.hasOwnProperty;
var toString = Object.prototype.toString;

module.exports = function forEach (obj, fn, ctx) {
    if (toString.call(fn) !== '[object Function]') {
        throw new TypeError('iterator must be a function');
    }
    var l = obj.length;
    if (l === +l) {
        for (var i = 0; i < l; i++) {
            fn.call(ctx, obj[i], i, obj);
        }
    } else {
        for (var k in obj) {
            if (hasOwn.call(obj, k)) {
                fn.call(ctx, obj[k], k, obj);
            }
        }
    }
};

", "node_modules/foreach/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/foreach/index.js");
    }
}
