<?php

/* node_modules/enhanced-resolve/lib/AliasFieldPlugin.js */
class __TwigTemplate_af8d58ddff423eea9bff960e2beecf6d27526898f076eab3d818924351010ff4 extends Twig_Template
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
        $__internal_3523f63e1ef39e85fc9d6c9fbac312164981771a6aa612f944cae9b112df2985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3523f63e1ef39e85fc9d6c9fbac312164981771a6aa612f944cae9b112df2985->enter($__internal_3523f63e1ef39e85fc9d6c9fbac312164981771a6aa612f944cae9b112df2985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/AliasFieldPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/

var DescriptionFileUtils = require(\"./DescriptionFileUtils\");
var createInnerCallback = require(\"./createInnerCallback\");
var getInnerRequest = require(\"./getInnerRequest\");

function AliasFieldPlugin(source, field, target) {
\tthis.source = source;
\tthis.field = field;
\tthis.target = target;
}
module.exports = AliasFieldPlugin;

AliasFieldPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar field = this.field;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(!request.descriptionFileData) return callback();
\t\tvar innerRequest = getInnerRequest(resolver, request);
\t\tif(!innerRequest) return callback();
\t\tvar fieldData = DescriptionFileUtils.getField(request.descriptionFileData, field);
\t\tif(typeof fieldData !== \"object\") {
\t\t\tif(callback.log) callback.log(\"Field '\" + field + \"' doesn't contain a valid alias configuration\");
\t\t\treturn callback();
\t\t}
\t\tvar data1 = fieldData[innerRequest];
\t\tvar data2 = fieldData[innerRequest.replace(/^\\.\\//, \"\")];
\t\tvar data = typeof data1 !== \"undefined\" ? data1 : data2;
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
        
        $__internal_3523f63e1ef39e85fc9d6c9fbac312164981771a6aa612f944cae9b112df2985->leave($__internal_3523f63e1ef39e85fc9d6c9fbac312164981771a6aa612f944cae9b112df2985_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/AliasFieldPlugin.js";
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

var DescriptionFileUtils = require(\"./DescriptionFileUtils\");
var createInnerCallback = require(\"./createInnerCallback\");
var getInnerRequest = require(\"./getInnerRequest\");

function AliasFieldPlugin(source, field, target) {
\tthis.source = source;
\tthis.field = field;
\tthis.target = target;
}
module.exports = AliasFieldPlugin;

AliasFieldPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar field = this.field;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(!request.descriptionFileData) return callback();
\t\tvar innerRequest = getInnerRequest(resolver, request);
\t\tif(!innerRequest) return callback();
\t\tvar fieldData = DescriptionFileUtils.getField(request.descriptionFileData, field);
\t\tif(typeof fieldData !== \"object\") {
\t\t\tif(callback.log) callback.log(\"Field '\" + field + \"' doesn't contain a valid alias configuration\");
\t\t\treturn callback();
\t\t}
\t\tvar data1 = fieldData[innerRequest];
\t\tvar data2 = fieldData[innerRequest.replace(/^\\.\\//, \"\")];
\t\tvar data = typeof data1 !== \"undefined\" ? data1 : data2;
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
", "node_modules/enhanced-resolve/lib/AliasFieldPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/AliasFieldPlugin.js");
    }
}
