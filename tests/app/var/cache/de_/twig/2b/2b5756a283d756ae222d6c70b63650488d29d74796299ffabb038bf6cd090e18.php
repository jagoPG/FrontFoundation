<?php

/* node_modules/enhanced-resolve/lib/ConcordModulesPlugin.js */
class __TwigTemplate_c79d8c2083bf98b9f30515030e1a87ce1f367131b6e8dffd6f48a0c55ce7120f extends Twig_Template
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
        $__internal_ed209a037cf37bae99321fd3bb15687a6b7a3b4a3da6a1de92def872476f8d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed209a037cf37bae99321fd3bb15687a6b7a3b4a3da6a1de92def872476f8d0c->enter($__internal_ed209a037cf37bae99321fd3bb15687a6b7a3b4a3da6a1de92def872476f8d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ConcordModulesPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var concord = require(\"./concord\");
var DescriptionFileUtils = require(\"./DescriptionFileUtils\");
var createInnerCallback = require(\"./createInnerCallback\");
var getInnerRequest = require(\"./getInnerRequest\");

function ConcordModulesPlugin(source, options, target) {
\tthis.source = source;
\tthis.options = options;
\tthis.target = target;
}
module.exports = ConcordModulesPlugin;

ConcordModulesPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar innerRequest = getInnerRequest(resolver, request);
\t\tif(!innerRequest) return callback();
\t\tvar concordField = DescriptionFileUtils.getField(request.descriptionFileData, \"concord\");
\t\tif(!concordField) return callback();
\t\tvar data = concord.matchModule(request.context, concordField, innerRequest);
\t\tif(data === innerRequest) return callback();
\t\tif(data === undefined) return callback();
\t\tif(data === false) {
\t\t\tvar ignoreObj = Object.assign({}, request, {
\t\t\t\tpath: false
\t\t\t});
\t\t\treturn callback(null, ignoreObj);
\t\t}
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: request.descriptionFileRoot,
\t\t\trequest: data
\t\t});
\t\tresolver.doResolve(target, obj, \"aliased from description file \" + request.descriptionFilePath + \" with mapping '\" + innerRequest + \"' to '\" + data + \"'\", createInnerCallback(function(err, result) {
\t\t\tif(arguments.length > 0) return callback(err, result);

\t\t\t// Don't allow other aliasing or raw request
\t\t\tcallback(null, null);
\t\t}, callback));
\t});
};
";
        
        $__internal_ed209a037cf37bae99321fd3bb15687a6b7a3b4a3da6a1de92def872476f8d0c->leave($__internal_ed209a037cf37bae99321fd3bb15687a6b7a3b4a3da6a1de92def872476f8d0c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ConcordModulesPlugin.js";
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
var createInnerCallback = require(\"./createInnerCallback\");
var getInnerRequest = require(\"./getInnerRequest\");

function ConcordModulesPlugin(source, options, target) {
\tthis.source = source;
\tthis.options = options;
\tthis.target = target;
}
module.exports = ConcordModulesPlugin;

ConcordModulesPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar innerRequest = getInnerRequest(resolver, request);
\t\tif(!innerRequest) return callback();
\t\tvar concordField = DescriptionFileUtils.getField(request.descriptionFileData, \"concord\");
\t\tif(!concordField) return callback();
\t\tvar data = concord.matchModule(request.context, concordField, innerRequest);
\t\tif(data === innerRequest) return callback();
\t\tif(data === undefined) return callback();
\t\tif(data === false) {
\t\t\tvar ignoreObj = Object.assign({}, request, {
\t\t\t\tpath: false
\t\t\t});
\t\t\treturn callback(null, ignoreObj);
\t\t}
\t\tvar obj = Object.assign({}, request, {
\t\t\tpath: request.descriptionFileRoot,
\t\t\trequest: data
\t\t});
\t\tresolver.doResolve(target, obj, \"aliased from description file \" + request.descriptionFilePath + \" with mapping '\" + innerRequest + \"' to '\" + data + \"'\", createInnerCallback(function(err, result) {
\t\t\tif(arguments.length > 0) return callback(err, result);

\t\t\t// Don't allow other aliasing or raw request
\t\t\tcallback(null, null);
\t\t}, callback));
\t});
};
", "node_modules/enhanced-resolve/lib/ConcordModulesPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ConcordModulesPlugin.js");
    }
}
