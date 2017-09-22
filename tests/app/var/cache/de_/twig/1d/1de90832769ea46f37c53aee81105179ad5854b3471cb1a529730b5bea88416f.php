<?php

/* node_modules/node-libs-browser/mock/process.js */
class __TwigTemplate_85a38588d486f3e52298e39f171af25e9ed3626a3063a7291da0b82a3520a0da extends Twig_Template
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
        $__internal_ad2e245da72efa31aecbcc9a0303d8395dfe8132556611abb61201e6bd9a8707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2e245da72efa31aecbcc9a0303d8395dfe8132556611abb61201e6bd9a8707->enter($__internal_ad2e245da72efa31aecbcc9a0303d8395dfe8132556611abb61201e6bd9a8707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-libs-browser/mock/process.js"));

        // line 1
        echo "exports.nextTick = function nextTick(fn) {
\tsetTimeout(fn, 0);
};

exports.platform = exports.arch = 
exports.execPath = exports.title = 'browser';
exports.pid = 1;
exports.browser = true;
exports.env = {};
exports.argv = [];

exports.binding = function (name) {
\tthrow new Error('No such module. (Possibly not yet loaded)')
};

(function () {
    var cwd = '/';
    var path;
    exports.cwd = function () { return cwd };
    exports.chdir = function (dir) {
        if (!path) path = require('path');
        cwd = path.resolve(dir, cwd);
    };
})();

exports.exit = exports.kill = 
exports.umask = exports.dlopen = 
exports.uptime = exports.memoryUsage = 
exports.uvCounters = function() {};
exports.features = {};
";
        
        $__internal_ad2e245da72efa31aecbcc9a0303d8395dfe8132556611abb61201e6bd9a8707->leave($__internal_ad2e245da72efa31aecbcc9a0303d8395dfe8132556611abb61201e6bd9a8707_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-libs-browser/mock/process.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.nextTick = function nextTick(fn) {
\tsetTimeout(fn, 0);
};

exports.platform = exports.arch = 
exports.execPath = exports.title = 'browser';
exports.pid = 1;
exports.browser = true;
exports.env = {};
exports.argv = [];

exports.binding = function (name) {
\tthrow new Error('No such module. (Possibly not yet loaded)')
};

(function () {
    var cwd = '/';
    var path;
    exports.cwd = function () { return cwd };
    exports.chdir = function (dir) {
        if (!path) path = require('path');
        cwd = path.resolve(dir, cwd);
    };
})();

exports.exit = exports.kill = 
exports.umask = exports.dlopen = 
exports.uptime = exports.memoryUsage = 
exports.uvCounters = function() {};
exports.features = {};
", "node_modules/node-libs-browser/mock/process.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-libs-browser/mock/process.js");
    }
}
