<?php

/* node_modules/fsevents/node_modules/qs/lib/index.js */
class __TwigTemplate_28de88ac77ba85ffed16e5c9be2b69e297559c1401051f32a34b191042268ca3 extends Twig_Template
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
        $__internal_1beda9976469dc8886aeb3aaebc14192fc59ab40b65dc5b212bbb24b39440f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beda9976469dc8886aeb3aaebc14192fc59ab40b65dc5b212bbb24b39440f41->enter($__internal_1beda9976469dc8886aeb3aaebc14192fc59ab40b65dc5b212bbb24b39440f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/qs/lib/index.js"));

        // line 1
        echo "'use strict';

var stringify = require('./stringify');
var parse = require('./parse');
var formats = require('./formats');

module.exports = {
    formats: formats,
    parse: parse,
    stringify: stringify
};
";
        
        $__internal_1beda9976469dc8886aeb3aaebc14192fc59ab40b65dc5b212bbb24b39440f41->leave($__internal_1beda9976469dc8886aeb3aaebc14192fc59ab40b65dc5b212bbb24b39440f41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/qs/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var stringify = require('./stringify');
var parse = require('./parse');
var formats = require('./formats');

module.exports = {
    formats: formats,
    parse: parse,
    stringify: stringify
};
", "node_modules/fsevents/node_modules/qs/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/qs/lib/index.js");
    }
}
