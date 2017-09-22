<?php

/* node_modules/fsevents/node_modules/sntp/examples/time.js */
class __TwigTemplate_e40c81adda0ac56b9bb7205e1b228fc4197e1d07aa622250c44573b31770c217 extends Twig_Template
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
        $__internal_471761a78023c4c4d4ebfa3f3c6edd2df9a907ece8283a3517f55e774bd5dba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471761a78023c4c4d4ebfa3f3c6edd2df9a907ece8283a3517f55e774bd5dba9->enter($__internal_471761a78023c4c4d4ebfa3f3c6edd2df9a907ece8283a3517f55e774bd5dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sntp/examples/time.js"));

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
        
        $__internal_471761a78023c4c4d4ebfa3f3c6edd2df9a907ece8283a3517f55e774bd5dba9->leave($__internal_471761a78023c4c4d4ebfa3f3c6edd2df9a907ece8283a3517f55e774bd5dba9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sntp/examples/time.js";
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

", "node_modules/fsevents/node_modules/sntp/examples/time.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sntp/examples/time.js");
    }
}
