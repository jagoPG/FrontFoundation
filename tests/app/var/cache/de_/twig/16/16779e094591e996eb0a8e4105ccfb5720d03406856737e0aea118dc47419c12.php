<?php

/* node_modules/webpack/hot/log.js */
class __TwigTemplate_3aae5209bbbb8e12d0af2f02772c6677a3a1a6ac5c171bc8401aed6a453fa44f extends Twig_Template
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
        $__internal_f6cb8bec1bc64643e7300818ab2b9fd1f5fc49a7bac77fe7db33239816b12bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cb8bec1bc64643e7300818ab2b9fd1f5fc49a7bac77fe7db33239816b12bc7->enter($__internal_f6cb8bec1bc64643e7300818ab2b9fd1f5fc49a7bac77fe7db33239816b12bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/hot/log.js"));

        // line 1
        echo "var logLevel = \"info\";

function dummy() {}

function shouldLog(level) {
\tvar shouldLog = (logLevel === \"info\" && level === \"info\") ||
\t\t([\"info\", \"warning\"].indexOf(logLevel) >= 0 && level === \"warning\") ||
\t\t([\"info\", \"warning\", \"error\"].indexOf(logLevel) >= 0 && level === \"error\");
\treturn shouldLog;
}

function logGroup(logFn) {
\treturn function(level, msg) {
\t\tif(shouldLog(level)) {
\t\t\tlogFn(msg);
\t\t}
\t};
}

module.exports = function(level, msg) {
\tif(shouldLog(level)) {
\t\tif(level === \"info\") {
\t\t\tconsole.log(msg);
\t\t} else if(level === \"warning\") {
\t\t\tconsole.warn(msg);
\t\t} else if(level === \"error\") {
\t\t\tconsole.error(msg);
\t\t}
\t}
};

var group = console.group || dummy;
var groupCollapsed = console.groupCollapsed || dummy;
var groupEnd = console.groupEnd || dummy;

module.exports.group = logGroup(group);

module.exports.groupCollapsed = logGroup(groupCollapsed);

module.exports.groupEnd = logGroup(groupEnd);

module.exports.setLogLevel = function(level) {
\tlogLevel = level;
};
";
        
        $__internal_f6cb8bec1bc64643e7300818ab2b9fd1f5fc49a7bac77fe7db33239816b12bc7->leave($__internal_f6cb8bec1bc64643e7300818ab2b9fd1f5fc49a7bac77fe7db33239816b12bc7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/hot/log.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var logLevel = \"info\";

function dummy() {}

function shouldLog(level) {
\tvar shouldLog = (logLevel === \"info\" && level === \"info\") ||
\t\t([\"info\", \"warning\"].indexOf(logLevel) >= 0 && level === \"warning\") ||
\t\t([\"info\", \"warning\", \"error\"].indexOf(logLevel) >= 0 && level === \"error\");
\treturn shouldLog;
}

function logGroup(logFn) {
\treturn function(level, msg) {
\t\tif(shouldLog(level)) {
\t\t\tlogFn(msg);
\t\t}
\t};
}

module.exports = function(level, msg) {
\tif(shouldLog(level)) {
\t\tif(level === \"info\") {
\t\t\tconsole.log(msg);
\t\t} else if(level === \"warning\") {
\t\t\tconsole.warn(msg);
\t\t} else if(level === \"error\") {
\t\t\tconsole.error(msg);
\t\t}
\t}
};

var group = console.group || dummy;
var groupCollapsed = console.groupCollapsed || dummy;
var groupEnd = console.groupEnd || dummy;

module.exports.group = logGroup(group);

module.exports.groupCollapsed = logGroup(groupCollapsed);

module.exports.groupEnd = logGroup(groupEnd);

module.exports.setLogLevel = function(level) {
\tlogLevel = level;
};
", "node_modules/webpack/hot/log.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/hot/log.js");
    }
}
