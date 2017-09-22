<?php

/* node_modules/https-browserify/index.js */
class __TwigTemplate_e414203191cad8e70773cb9e03c9285e7cd496d8f5f4552b09b0ccd81d00071d extends Twig_Template
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
        $__internal_f9de8d09471e86e3c3a31f32e68e3e3f84ca87e05b6a599541c702c3a9213f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9de8d09471e86e3c3a31f32e68e3e3f84ca87e05b6a599541c702c3a9213f91->enter($__internal_f9de8d09471e86e3c3a31f32e68e3e3f84ca87e05b6a599541c702c3a9213f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/https-browserify/index.js"));

        // line 1
        echo "var http = require('http');

var https = module.exports;

for (var key in http) {
    if (http.hasOwnProperty(key)) https[key] = http[key];
};

https.request = function (params, cb) {
    if (!params) params = {};
    params.scheme = 'https';
    params.protocol = 'https:';
    return http.request.call(this, params, cb);
}
";
        
        $__internal_f9de8d09471e86e3c3a31f32e68e3e3f84ca87e05b6a599541c702c3a9213f91->leave($__internal_f9de8d09471e86e3c3a31f32e68e3e3f84ca87e05b6a599541c702c3a9213f91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/https-browserify/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var http = require('http');

var https = module.exports;

for (var key in http) {
    if (http.hasOwnProperty(key)) https[key] = http[key];
};

https.request = function (params, cb) {
    if (!params) params = {};
    params.scheme = 'https';
    params.protocol = 'https:';
    return http.request.call(this, params, cb);
}
", "node_modules/https-browserify/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/https-browserify/index.js");
    }
}
