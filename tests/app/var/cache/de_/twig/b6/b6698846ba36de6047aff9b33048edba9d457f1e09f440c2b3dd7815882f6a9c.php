<?php

/* node_modules/os-browserify/browser.js */
class __TwigTemplate_23de5d026327b55d2ebd4b60994c2e2509e6508f98795efeec13a34a7db5e320 extends Twig_Template
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
        $__internal_39df776a12b2ba333f8f06d5c8cdfd905ae71595df2994f00d5298302a6e037c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39df776a12b2ba333f8f06d5c8cdfd905ae71595df2994f00d5298302a6e037c->enter($__internal_39df776a12b2ba333f8f06d5c8cdfd905ae71595df2994f00d5298302a6e037c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/os-browserify/browser.js"));

        // line 1
        echo "exports.endianness = function () { return 'LE' };

exports.hostname = function () {
    if (typeof location !== 'undefined') {
        return location.hostname
    }
    else return '';
};

exports.loadavg = function () { return [] };

exports.uptime = function () { return 0 };

exports.freemem = function () {
    return Number.MAX_VALUE;
};

exports.totalmem = function () {
    return Number.MAX_VALUE;
};

exports.cpus = function () { return [] };

exports.type = function () { return 'Browser' };

exports.release = function () {
    if (typeof navigator !== 'undefined') {
        return navigator.appVersion;
    }
    return '';
};

exports.networkInterfaces
= exports.getNetworkInterfaces
= function () { return {} };

exports.arch = function () { return 'javascript' };

exports.platform = function () { return 'browser' };

exports.tmpdir = exports.tmpDir = function () {
    return '/tmp';
};

exports.EOL = '\\n';
";
        
        $__internal_39df776a12b2ba333f8f06d5c8cdfd905ae71595df2994f00d5298302a6e037c->leave($__internal_39df776a12b2ba333f8f06d5c8cdfd905ae71595df2994f00d5298302a6e037c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/os-browserify/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.endianness = function () { return 'LE' };

exports.hostname = function () {
    if (typeof location !== 'undefined') {
        return location.hostname
    }
    else return '';
};

exports.loadavg = function () { return [] };

exports.uptime = function () { return 0 };

exports.freemem = function () {
    return Number.MAX_VALUE;
};

exports.totalmem = function () {
    return Number.MAX_VALUE;
};

exports.cpus = function () { return [] };

exports.type = function () { return 'Browser' };

exports.release = function () {
    if (typeof navigator !== 'undefined') {
        return navigator.appVersion;
    }
    return '';
};

exports.networkInterfaces
= exports.getNetworkInterfaces
= function () { return {} };

exports.arch = function () { return 'javascript' };

exports.platform = function () { return 'browser' };

exports.tmpdir = exports.tmpDir = function () {
    return '/tmp';
};

exports.EOL = '\\n';
", "node_modules/os-browserify/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/os-browserify/browser.js");
    }
}
