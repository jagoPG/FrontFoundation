<?php

/* node_modules/enhanced-resolve/lib/AliasPlugin.js */
class __TwigTemplate_53a4f8ba7f0529953762d81ca58ba5798b71c6c054fdfdfb3a23f52fa3357cac extends Twig_Template
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
        $__internal_e8936f710ea55e88310c4c9d5ba05a91e425fecb31ea8b658244aea884a945f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8936f710ea55e88310c4c9d5ba05a91e425fecb31ea8b658244aea884a945f5->enter($__internal_e8936f710ea55e88310c4c9d5ba05a91e425fecb31ea8b658244aea884a945f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/AliasPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var createInnerCallback = require(\"./createInnerCallback\");

function startsWith(string, searchString) {
\tvar stringLength = string.length;
\tvar searchLength = searchString.length;

\t// early out if the search length is greater than the search string
\tif(searchLength > stringLength) {
\t\treturn false;
\t}
\tvar index = -1;
\twhile(++index < searchLength) {
\t\tif(string.charCodeAt(index) !== searchString.charCodeAt(index)) {
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function AliasPlugin(source, options, target) {
\tthis.source = source;
\tthis.name = options.name;
\tthis.alias = options.alias;
\tthis.onlyModule = options.onlyModule;
\tthis.target = target;
}
module.exports = AliasPlugin;

AliasPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar name = this.name;
\tvar alias = this.alias;
\tvar onlyModule = this.onlyModule;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar innerRequest = request.request;
\t\tif(!innerRequest) return callback();
\t\tif(innerRequest === name || (!onlyModule && startsWith(innerRequest, name + \"/\"))) {
\t\t\tif(innerRequest !== alias && !startsWith(innerRequest, alias + \"/\")) {
\t\t\t\tvar newRequestStr = alias + innerRequest.substr(name.length);
\t\t\t\tvar obj = Object.assign({}, request, {
\t\t\t\t\trequest: newRequestStr
\t\t\t\t});
\t\t\t\treturn resolver.doResolve(target, obj, \"aliased with mapping '\" + name + \"': '\" + alias + \"' to '\" + newRequestStr + \"'\", createInnerCallback(function(err, result) {
\t\t\t\t\tif(arguments.length > 0) return callback(err, result);

\t\t\t\t\t// don't allow other aliasing or raw request
\t\t\t\t\tcallback(null, null);
\t\t\t\t}, callback));
\t\t\t}
\t\t}
\t\treturn callback();
\t});
};
";
        
        $__internal_e8936f710ea55e88310c4c9d5ba05a91e425fecb31ea8b658244aea884a945f5->leave($__internal_e8936f710ea55e88310c4c9d5ba05a91e425fecb31ea8b658244aea884a945f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/AliasPlugin.js";
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

function startsWith(string, searchString) {
\tvar stringLength = string.length;
\tvar searchLength = searchString.length;

\t// early out if the search length is greater than the search string
\tif(searchLength > stringLength) {
\t\treturn false;
\t}
\tvar index = -1;
\twhile(++index < searchLength) {
\t\tif(string.charCodeAt(index) !== searchString.charCodeAt(index)) {
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function AliasPlugin(source, options, target) {
\tthis.source = source;
\tthis.name = options.name;
\tthis.alias = options.alias;
\tthis.onlyModule = options.onlyModule;
\tthis.target = target;
}
module.exports = AliasPlugin;

AliasPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tvar name = this.name;
\tvar alias = this.alias;
\tvar onlyModule = this.onlyModule;
\tresolver.plugin(this.source, function(request, callback) {
\t\tvar innerRequest = request.request;
\t\tif(!innerRequest) return callback();
\t\tif(innerRequest === name || (!onlyModule && startsWith(innerRequest, name + \"/\"))) {
\t\t\tif(innerRequest !== alias && !startsWith(innerRequest, alias + \"/\")) {
\t\t\t\tvar newRequestStr = alias + innerRequest.substr(name.length);
\t\t\t\tvar obj = Object.assign({}, request, {
\t\t\t\t\trequest: newRequestStr
\t\t\t\t});
\t\t\t\treturn resolver.doResolve(target, obj, \"aliased with mapping '\" + name + \"': '\" + alias + \"' to '\" + newRequestStr + \"'\", createInnerCallback(function(err, result) {
\t\t\t\t\tif(arguments.length > 0) return callback(err, result);

\t\t\t\t\t// don't allow other aliasing or raw request
\t\t\t\t\tcallback(null, null);
\t\t\t\t}, callback));
\t\t\t}
\t\t}
\t\treturn callback();
\t});
};
", "node_modules/enhanced-resolve/lib/AliasPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/AliasPlugin.js");
    }
}
