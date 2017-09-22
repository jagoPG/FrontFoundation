<?php

/* node_modules/fsevents/node_modules/readable-stream/readable-browser.js */
class __TwigTemplate_7a94cbe015abd2c2cb7b2023d0c01d448bae733992394c31f7c09fc5b6a4caf8 extends Twig_Template
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
        $__internal_478c417fdf567b0e36829fbcf2699adbb03373d92066c5dbcaacb638451c356c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478c417fdf567b0e36829fbcf2699adbb03373d92066c5dbcaacb638451c356c->enter($__internal_478c417fdf567b0e36829fbcf2699adbb03373d92066c5dbcaacb638451c356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/readable-stream/readable-browser.js"));

        // line 1
        echo "exports = module.exports = require('./lib/_stream_readable.js');
exports.Stream = exports;
exports.Readable = exports;
exports.Writable = require('./lib/_stream_writable.js');
exports.Duplex = require('./lib/_stream_duplex.js');
exports.Transform = require('./lib/_stream_transform.js');
exports.PassThrough = require('./lib/_stream_passthrough.js');
";
        
        $__internal_478c417fdf567b0e36829fbcf2699adbb03373d92066c5dbcaacb638451c356c->leave($__internal_478c417fdf567b0e36829fbcf2699adbb03373d92066c5dbcaacb638451c356c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/readable-stream/readable-browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports = module.exports = require('./lib/_stream_readable.js');
exports.Stream = exports;
exports.Readable = exports;
exports.Writable = require('./lib/_stream_writable.js');
exports.Duplex = require('./lib/_stream_duplex.js');
exports.Transform = require('./lib/_stream_transform.js');
exports.PassThrough = require('./lib/_stream_passthrough.js');
", "node_modules/fsevents/node_modules/readable-stream/readable-browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/readable-stream/readable-browser.js");
    }
}
