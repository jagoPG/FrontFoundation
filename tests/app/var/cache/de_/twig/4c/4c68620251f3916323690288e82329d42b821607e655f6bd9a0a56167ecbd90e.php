<?php

/* node_modules/lcid/index.js */
class __TwigTemplate_46ed26994e8e568cf06fc63e2b568cf24952fc10700c1aed63e40224956976af extends Twig_Template
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
        $__internal_35c4db5ecec0e9a853ef68af8467372ba601f7e66bf6c49bfb60cc586d57fbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c4db5ecec0e9a853ef68af8467372ba601f7e66bf6c49bfb60cc586d57fbb3->enter($__internal_35c4db5ecec0e9a853ef68af8467372ba601f7e66bf6c49bfb60cc586d57fbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lcid/index.js"));

        // line 1
        echo "'use strict';
var invertKv = require('invert-kv');
var all = require('./lcid.json');
var inverted = invertKv(all);

exports.from = function (lcidCode) {
\tif (typeof lcidCode !== 'number') {
\t\tthrow new TypeError('Expected a number');
\t}

\treturn inverted[lcidCode];
};

exports.to = function (localeId) {
\tif (typeof localeId !== 'string') {
\t\tthrow new TypeError('Expected a string');
\t}

\treturn all[localeId];
};

exports.all = all;
";
        
        $__internal_35c4db5ecec0e9a853ef68af8467372ba601f7e66bf6c49bfb60cc586d57fbb3->leave($__internal_35c4db5ecec0e9a853ef68af8467372ba601f7e66bf6c49bfb60cc586d57fbb3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lcid/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var invertKv = require('invert-kv');
var all = require('./lcid.json');
var inverted = invertKv(all);

exports.from = function (lcidCode) {
\tif (typeof lcidCode !== 'number') {
\t\tthrow new TypeError('Expected a number');
\t}

\treturn inverted[lcidCode];
};

exports.to = function (localeId) {
\tif (typeof localeId !== 'string') {
\t\tthrow new TypeError('Expected a string');
\t}

\treturn all[localeId];
};

exports.all = all;
", "node_modules/lcid/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lcid/index.js");
    }
}
