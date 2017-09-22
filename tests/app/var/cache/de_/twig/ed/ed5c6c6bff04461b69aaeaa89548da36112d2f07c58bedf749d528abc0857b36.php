<?php

/* node_modules/enhanced-resolve/lib/ModulesInHierachicDirectoriesPlugin.js */
class __TwigTemplate_50aa2c7784759962e043d7ec0b99a180bc4db9d1d7f27b276112a103ea79b27e extends Twig_Template
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
        $__internal_407a02201cbabec5169013ac3790f0735cfb53c8b961464fc23eb2b23582ddc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407a02201cbabec5169013ac3790f0735cfb53c8b961464fc23eb2b23582ddc9->enter($__internal_407a02201cbabec5169013ac3790f0735cfb53c8b961464fc23eb2b23582ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ModulesInHierachicDirectoriesPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var createInnerCallback = require(\"./createInnerCallback\");
var forEachBail = require(\"./forEachBail\");
var getPaths = require(\"./getPaths\");

function ModulesInHierachicDirectoriesPlugin(source, directories, target) {
\tthis.source = source;
\tthis.directories = [].concat(directories);
\tthis.target = target;
}
module.exports = ModulesInHierachicDirectoriesPlugin;

ModulesInHierachicDirectoriesPlugin.prototype.apply = function(resolver) {
\tvar directories = this.directories;
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar fs = this.fileSystem;
\t\tvar topLevelCallback = callback;
\t\tvar addrs = getPaths(request.path).paths.map(function(p) {
\t\t\treturn directories.map(function(d) {
\t\t\t\treturn this.join(p, d);
\t\t\t}, this);
\t\t}, this).reduce(function(array, p) {
\t\t\tarray.push.apply(array, p);
\t\t\treturn array;
\t\t}, []);
\t\tforEachBail(addrs, function(addr, callback) {
\t\t\tfs.stat(addr, function(err, stat) {
\t\t\t\tif(!err && stat && stat.isDirectory()) {
\t\t\t\t\tvar obj = Object.assign({}, request, {
\t\t\t\t\t\tpath: addr,
\t\t\t\t\t\trequest: \"./\" + request.request
\t\t\t\t\t});
\t\t\t\t\tvar message = \"looking for modules in \" + addr;
\t\t\t\t\treturn resolver.doResolve(target, obj, message, createInnerCallback(callback, topLevelCallback));
\t\t\t\t}
\t\t\t\tif(topLevelCallback.log) topLevelCallback.log(addr + \" doesn't exist or is not a directory\");
\t\t\t\tif(topLevelCallback.missing) topLevelCallback.missing.push(addr);
\t\t\t\treturn callback();
\t\t\t});
\t\t}, callback);
\t});
};
";
        
        $__internal_407a02201cbabec5169013ac3790f0735cfb53c8b961464fc23eb2b23582ddc9->leave($__internal_407a02201cbabec5169013ac3790f0735cfb53c8b961464fc23eb2b23582ddc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ModulesInHierachicDirectoriesPlugin.js";
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
var createInnerCallback = require(\"./createInnerCallback\");
var forEachBail = require(\"./forEachBail\");
var getPaths = require(\"./getPaths\");

function ModulesInHierachicDirectoriesPlugin(source, directories, target) {
\tthis.source = source;
\tthis.directories = [].concat(directories);
\tthis.target = target;
}
module.exports = ModulesInHierachicDirectoriesPlugin;

ModulesInHierachicDirectoriesPlugin.prototype.apply = function(resolver) {
\tvar directories = this.directories;
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar fs = this.fileSystem;
\t\tvar topLevelCallback = callback;
\t\tvar addrs = getPaths(request.path).paths.map(function(p) {
\t\t\treturn directories.map(function(d) {
\t\t\t\treturn this.join(p, d);
\t\t\t}, this);
\t\t}, this).reduce(function(array, p) {
\t\t\tarray.push.apply(array, p);
\t\t\treturn array;
\t\t}, []);
\t\tforEachBail(addrs, function(addr, callback) {
\t\t\tfs.stat(addr, function(err, stat) {
\t\t\t\tif(!err && stat && stat.isDirectory()) {
\t\t\t\t\tvar obj = Object.assign({}, request, {
\t\t\t\t\t\tpath: addr,
\t\t\t\t\t\trequest: \"./\" + request.request
\t\t\t\t\t});
\t\t\t\t\tvar message = \"looking for modules in \" + addr;
\t\t\t\t\treturn resolver.doResolve(target, obj, message, createInnerCallback(callback, topLevelCallback));
\t\t\t\t}
\t\t\t\tif(topLevelCallback.log) topLevelCallback.log(addr + \" doesn't exist or is not a directory\");
\t\t\t\tif(topLevelCallback.missing) topLevelCallback.missing.push(addr);
\t\t\t\treturn callback();
\t\t\t});
\t\t}, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/ModulesInHierachicDirectoriesPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ModulesInHierachicDirectoriesPlugin.js");
    }
}
