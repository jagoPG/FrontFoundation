<?php

/* node_modules/sntp/examples/offset.js */
class __TwigTemplate_3a242639db37724a3bbdb6d40b2646cb29ece5969ceb187c0655eec224b77f3a extends Twig_Template
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
        $__internal_01127cb50e902b9d0fed195a22b16a144534ba70b2059a6194c885e7f5f43c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01127cb50e902b9d0fed195a22b16a144534ba70b2059a6194c885e7f5f43c19->enter($__internal_01127cb50e902b9d0fed195a22b16a144534ba70b2059a6194c885e7f5f43c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sntp/examples/offset.js"));

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
        
        $__internal_01127cb50e902b9d0fed195a22b16a144534ba70b2059a6194c885e7f5f43c19->leave($__internal_01127cb50e902b9d0fed195a22b16a144534ba70b2059a6194c885e7f5f43c19_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sntp/examples/offset.js";
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

", "node_modules/sntp/examples/offset.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sntp/examples/offset.js");
    }
}
