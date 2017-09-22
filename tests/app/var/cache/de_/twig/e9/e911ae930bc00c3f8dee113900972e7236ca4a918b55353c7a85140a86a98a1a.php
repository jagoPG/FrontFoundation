<?php

/* node_modules/sntp/examples/time.js */
class __TwigTemplate_25faf7533e0ff2223b5c8363efa1d89eb3a835a78b59a570069fa6fb0e9b5846 extends Twig_Template
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
        $__internal_bf2d73f87fab03a6b999e00b3ec879023c6b03e7dea61c2a0af6c868de4e9c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2d73f87fab03a6b999e00b3ec879023c6b03e7dea61c2a0af6c868de4e9c7d->enter($__internal_bf2d73f87fab03a6b999e00b3ec879023c6b03e7dea61c2a0af6c868de4e9c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sntp/examples/time.js"));

        // line 1
        echo "var Sntp = require('../lib');

// All options are optional

var options = {
    host: 'nist1-sj.ustiming.org',  // Defaults to pool.ntp.org
    port: 123,                      // Defaults to 123 (NTP)
    resolveReference: true,         // Default to false (not resolving)
    timeout: 1000                   // Defaults to zero (no timeout)
};

// Request server time

Sntp.time(options, function (err, time) {

    if (err) {
        console.log('Failed: ' + err.message);
        process.exit(1);
    }

    console.log(time);
    console.log('Local clock is off by: ' + time.t + ' milliseconds');
    process.exit(0);
});

";
        
        $__internal_bf2d73f87fab03a6b999e00b3ec879023c6b03e7dea61c2a0af6c868de4e9c7d->leave($__internal_bf2d73f87fab03a6b999e00b3ec879023c6b03e7dea61c2a0af6c868de4e9c7d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sntp/examples/time.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Sntp = require('../lib');

// All options are optional

var options = {
    host: 'nist1-sj.ustiming.org',  // Defaults to pool.ntp.org
    port: 123,                      // Defaults to 123 (NTP)
    resolveReference: true,         // Default to false (not resolving)
    timeout: 1000                   // Defaults to zero (no timeout)
};

// Request server time

Sntp.time(options, function (err, time) {

    if (err) {
        console.log('Failed: ' + err.message);
        process.exit(1);
    }

    console.log(time);
    console.log('Local clock is off by: ' + time.t + ' milliseconds');
    process.exit(0);
});

", "node_modules/sntp/examples/time.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sntp/examples/time.js");
    }
}
