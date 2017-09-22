<?php

/* node_modules/enhanced-resolve/lib/SymlinkPlugin.js */
class __TwigTemplate_79403120396d96f9dc1659e52b308e41f46c7e303ebf7323ff1fd4ae000e0da4 extends Twig_Template
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
        $__internal_d1329afd7c066786cd2a3ba421bc5f2ac53e2692e0e2195b2c8e8784b7601e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1329afd7c066786cd2a3ba421bc5f2ac53e2692e0e2195b2c8e8784b7601e18->enter($__internal_d1329afd7c066786cd2a3ba421bc5f2ac53e2692e0e2195b2c8e8784b7601e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/SymlinkPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var getPaths = require(\"./getPaths\");
var forEachBail = require(\"./forEachBail\");

function SymlinkPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = SymlinkPlugin;

SymlinkPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar _this = this;
\t\tvar fs = _this.fileSystem;
\t\tvar pathsResult = getPaths(request.path);
\t\tvar pathSeqments = pathsResult.seqments;
\t\tvar paths = pathsResult.paths;

\t\tvar containsSymlink = false;
\t\tforEachBail.withIndex(paths, function(path, idx, callback) {
\t\t\tfs.readlink(path, function(err, result) {
\t\t\t\tif(!err && result) {
\t\t\t\t\tpathSeqments[idx] = result;
\t\t\t\t\tcontainsSymlink = true;
\t\t\t\t\t// Shortcut when absolute symlink found
\t\t\t\t\tif(/^(\\/|[a-zA-z]:(\$|\\\\))/.test(result))
\t\t\t\t\t\treturn callback(null, idx);
\t\t\t\t}
\t\t\t\tcallback();
\t\t\t});
\t\t}, function(err, idx) {
\t\t\tif(!containsSymlink) return callback();
\t\t\tvar resultSeqments = typeof idx === \"number\" ? pathSeqments.slice(0, idx + 1) : pathSeqments.slice();
\t\t\tvar result = resultSeqments.reverse().reduce(function(a, b) {
\t\t\t\treturn _this.join(a, b);
\t\t\t});
\t\t\tvar obj = Object.assign({}, request, {
\t\t\t\tpath: result
\t\t\t});
\t\t\tresolver.doResolve(target, obj, \"resolved symlink to \" + result, callback);
\t\t});
\t});
};
";
        
        $__internal_d1329afd7c066786cd2a3ba421bc5f2ac53e2692e0e2195b2c8e8784b7601e18->leave($__internal_d1329afd7c066786cd2a3ba421bc5f2ac53e2692e0e2195b2c8e8784b7601e18_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/SymlinkPlugin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var getPaths = require(\"./getPaths\");
var forEachBail = require(\"./forEachBail\");

function SymlinkPlugin(source, target) {
\tthis.source = source;
\tthis.target = target;
}
module.exports = SymlinkPlugin;

SymlinkPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar _this = this;
\t\tvar fs = _this.fileSystem;
\t\tvar pathsResult = getPaths(request.path);
\t\tvar pathSeqments = pathsResult.seqments;
\t\tvar paths = pathsResult.paths;

\t\tvar containsSymlink = false;
\t\tforEachBail.withIndex(paths, function(path, idx, callback) {
\t\t\tfs.readlink(path, function(err, result) {
\t\t\t\tif(!err && result) {
\t\t\t\t\tpathSeqments[idx] = result;
\t\t\t\t\tcontainsSymlink = true;
\t\t\t\t\t// Shortcut when absolute symlink found
\t\t\t\t\tif(/^(\\/|[a-zA-z]:(\$|\\\\))/.test(result))
\t\t\t\t\t\treturn callback(null, idx);
\t\t\t\t}
\t\t\t\tcallback();
\t\t\t});
\t\t}, function(err, idx) {
\t\t\tif(!containsSymlink) return callback();
\t\t\tvar resultSeqments = typeof idx === \"number\" ? pathSeqments.slice(0, idx + 1) : pathSeqments.slice();
\t\t\tvar result = resultSeqments.reverse().reduce(function(a, b) {
\t\t\t\treturn _this.join(a, b);
\t\t\t});
\t\t\tvar obj = Object.assign({}, request, {
\t\t\t\tpath: result
\t\t\t});
\t\t\tresolver.doResolve(target, obj, \"resolved symlink to \" + result, callback);
\t\t});
\t});
};
", "node_modules/enhanced-resolve/lib/SymlinkPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/SymlinkPlugin.js");
    }
}
