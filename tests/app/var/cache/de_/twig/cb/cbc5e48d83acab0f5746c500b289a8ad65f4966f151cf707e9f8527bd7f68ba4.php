<?php

/* node_modules/readable-stream/readable-browser.js */
class __TwigTemplate_901aaf5a8b01ce733de2303cc3d48234c1222ae5745c5683c7403d443356efcf extends Twig_Template
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
        $__internal_04e776319f1c367e33461522d5ac1b893b029a8212cd89e4b0daee368ad7d6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e776319f1c367e33461522d5ac1b893b029a8212cd89e4b0daee368ad7d6f6->enter($__internal_04e776319f1c367e33461522d5ac1b893b029a8212cd89e4b0daee368ad7d6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readable-stream/readable-browser.js"));

        // line 1
        echo "exports = module.exports = require('./lib/_stream_readable.js');
exports.Stream = exports;
exports.Readable = exports;
exports.Writable = require('./lib/_stream_writable.js');
exports.Duplex = require('./lib/_stream_duplex.js');
exports.Transform = require('./lib/_stream_transform.js');
exports.PassThrough = require('./lib/_stream_passthrough.js');
";
        
        $__internal_04e776319f1c367e33461522d5ac1b893b029a8212cd89e4b0daee368ad7d6f6->leave($__internal_04e776319f1c367e33461522d5ac1b893b029a8212cd89e4b0daee368ad7d6f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readable-stream/readable-browser.js";
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
", "node_modules/readable-stream/readable-browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readable-stream/readable-browser.js");
    }
}