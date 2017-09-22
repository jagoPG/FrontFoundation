<?php

/* node_modules/enhanced-resolve/lib/ConcordExtensionsPlugin.js */
class __TwigTemplate_93f2afb7efc516726485b8959a58d54bef40d03f63b7d068be164c3aad9056af extends Twig_Template
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
        $__internal_655ed42881461ba6b6eb56b372f527786012bb75766db8aeacb035cac16413b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655ed42881461ba6b6eb56b372f527786012bb75766db8aeacb035cac16413b3->enter($__internal_655ed42881461ba6b6eb56b372f527786012bb75766db8aeacb035cac16413b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ConcordExtensionsPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var concord = require(\"./concord\");
var DescriptionFileUtils = require(\"./DescriptionFileUtils\");
var forEachBail = require(\"./forEachBail\");
var createInnerCallback = require(\"./createInnerCallback\");

function ConcordExtensionsPlugin(source, options, target) {
\tthis.source = source;
\tthis.options = options;
\tthis.target = target;
}
module.exports = ConcordExtensionsPlugin;

ConcordExtensionsPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar concordField = DescriptionFileUtils.getField(request.descriptionFileData, \"concord\");
\t\tif(!concordField) return callback();
\t\tvar extensions = concord.getExtensions(request.context, concordField);
\t\tif(!extensions) return callback();
\t\tvar topLevelCallback = callback;
\t\tforEachBail(extensions, function(appending, callback) {
\t\t\tvar obj = Object.assign({}, request, {
\t\t\t\tpath: request.path + appending,
\t\t\t\trelativePath: request.relativePath && (request.relativePath + appending)
\t\t\t});
\t\t\tresolver.doResolve(target, obj, \"concord extension: \" + appending, createInnerCallback(callback, topLevelCallback));
\t\t}, function(err, result) {
\t\t\tif(arguments.length > 0) return callback(err, result);

\t\t\tcallback(null, null);
\t\t});
\t});
};
";
        
        $__internal_655ed42881461ba6b6eb56b372f527786012bb75766db8aeacb035cac16413b3->leave($__internal_655ed42881461ba6b6eb56b372f527786012bb75766db8aeacb035cac16413b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ConcordExtensionsPlugin.js";
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
var concord = require(\"./concord\");
var DescriptionFileUtils = require(\"./DescriptionFileUtils\");
var forEachBail = require(\"./forEachBail\");
var createInnerCallback = require(\"./createInnerCallback\");

function ConcordExtensionsPlugin(source, options, target) {
\tthis.source = source;
\tthis.options = options;
\tthis.target = target;
}
module.exports = ConcordExtensionsPlugin;

ConcordExtensionsPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar concordField = DescriptionFileUtils.getField(request.descriptionFileData, \"concord\");
\t\tif(!concordField) return callback();
\t\tvar extensions = concord.getExtensions(request.context, concordField);
\t\tif(!extensions) return callback();
\t\tvar topLevelCallback = callback;
\t\tforEachBail(extensions, function(appending, callback) {
\t\t\tvar obj = Object.assign({}, request, {
\t\t\t\tpath: request.path + appending,
\t\t\t\trelativePath: request.relativePath && (request.relativePath + appending)
\t\t\t});
\t\t\tresolver.doResolve(target, obj, \"concord extension: \" + appending, createInnerCallback(callback, topLevelCallback));
\t\t}, function(err, result) {
\t\t\tif(arguments.length > 0) return callback(err, result);

\t\t\tcallback(null, null);
\t\t});
\t});
};
", "node_modules/enhanced-resolve/lib/ConcordExtensionsPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ConcordExtensionsPlugin.js");
    }
}
