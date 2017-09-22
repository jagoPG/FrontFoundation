<?php

/* node_modules/fsevents/node_modules/sntp/examples/offset.js */
class __TwigTemplate_585aabef0ba47c88d7f01aa8e6fb2841cc7f47dee0904e4d997994d0d0040f23 extends Twig_Template
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
        $__internal_34f439344251cea156b4637780767213ec1a1c13677697f09bc1b2ad4222a514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f439344251cea156b4637780767213ec1a1c13677697f09bc1b2ad4222a514->enter($__internal_34f439344251cea156b4637780767213ec1a1c13677697f09bc1b2ad4222a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sntp/examples/offset.js"));

        // line 1
        echo "var Sntp = require('../lib');

// Request offset once

Sntp.offset(function (err, offset) {

    console.log(offset);                    // New (served fresh)

    // Request offset again

    Sntp.offset(function (err, offset) {

        console.log(offset);                // Identical (served from cache)
    });
});

";
        
        $__internal_34f439344251cea156b4637780767213ec1a1c13677697f09bc1b2ad4222a514->leave($__internal_34f439344251cea156b4637780767213ec1a1c13677697f09bc1b2ad4222a514_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sntp/examples/offset.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Sntp = require('../lib');

// Request offset once

Sntp.offset(function (err, offset) {

    console.log(offset);                    // New (served fresh)

    // Request offset again

    Sntp.offset(function (err, offset) {

        console.log(offset);                // Identical (served from cache)
    });
});

", "node_modules/fsevents/node_modules/sntp/examples/offset.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sntp/examples/offset.js");
    }
}
