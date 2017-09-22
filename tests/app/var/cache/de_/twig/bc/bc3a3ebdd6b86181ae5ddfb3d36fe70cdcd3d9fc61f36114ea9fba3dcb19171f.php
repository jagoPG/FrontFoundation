<?php

/* node_modules/enhanced-resolve/lib/node.js */
class __TwigTemplate_d94a35d72b2db38dd39648e9a91391f08dd12328a3b7c75977450e232db0c82a extends Twig_Template
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
        $__internal_5868d26620ed935707a34e589a68f50902c2989a05a2a6c90596163556c32ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5868d26620ed935707a34e589a68f50902c2989a05a2a6c90596163556c32ec7->enter($__internal_5868d26620ed935707a34e589a68f50902c2989a05a2a6c90596163556c32ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/node.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var ResolverFactory = require(\"./ResolverFactory\");

var NodeJsInputFileSystem = require(\"./NodeJsInputFileSystem\");
var CachedInputFileSystem = require(\"./CachedInputFileSystem\");

var nodeFileSystem = new CachedInputFileSystem(new NodeJsInputFileSystem(), 4000);

var nodeContext = {
\tenvironments: [
\t\t\"node+es3+es5+process+native\"
\t]
};

var asyncResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tfileSystem: nodeFileSystem
});
module.exports = function resolve(context, path, request, callback) {
\tif(typeof context === \"string\") {
\t\tcallback = request;
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\tasyncResolver.resolve(context, path, request, callback);
};

var syncResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tuseSyncFileSystemCalls: true,
\tfileSystem: nodeFileSystem
});
module.exports.sync = function resolveSync(context, path, request) {
\tif(typeof context === \"string\") {
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\treturn syncResolver.resolveSync(context, path, request);
};

var asyncContextResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tresolveToContext: true,
\tfileSystem: nodeFileSystem
});
module.exports.context = function resolveContext(context, path, request, callback) {
\tif(typeof context === \"string\") {
\t\tcallback = request;
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\tasyncContextResolver.resolve(context, path, request, callback);
};

var syncContextResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tresolveToContext: true,
\tuseSyncFileSystemCalls: true,
\tfileSystem: nodeFileSystem
});
module.exports.context.sync = function resolveContextSync(context, path, request) {
\tif(typeof context === \"string\") {
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\treturn syncContextResolver.resolveSync(context, path, request);
};

var asyncLoaderResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tmoduleExtensions: [\"-loader\"],
\tmainFields: [\"loader\", \"main\"],
\tfileSystem: nodeFileSystem
});
module.exports.loader = function resolveLoader(context, path, request, callback) {
\tif(typeof context === \"string\") {
\t\tcallback = request;
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\tasyncLoaderResolver.resolve(context, path, request, callback);
};

var syncLoaderResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tmoduleExtensions: [\"-loader\"],
\tmainFields: [\"loader\", \"main\"],
\tuseSyncFileSystemCalls: true,
\tfileSystem: nodeFileSystem
});
module.exports.loader.sync = function resolveLoaderSync(context, path, request) {
\tif(typeof context === \"string\") {
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\treturn syncLoaderResolver.resolveSync(context, path, request);
};

module.exports.create = function create(options) {
\toptions = Object.assign({
\t\tfileSystem: nodeFileSystem
\t}, options);
\tvar resolver = ResolverFactory.createResolver(options);
\treturn function(context, path, request, callback) {
\t\tif(typeof context === \"string\") {
\t\t\tcallback = request;
\t\t\trequest = path;
\t\t\tpath = context;
\t\t\tcontext = nodeContext;
\t\t}
\t\tresolver.resolve(context, path, request, callback);
\t};
};

module.exports.create.sync = function createSync(options) {
\toptions = Object.assign({
\t\tuseSyncFileSystemCalls: true,
\t\tfileSystem: nodeFileSystem
\t}, options);
\tvar resolver = ResolverFactory.createResolver(options);
\treturn function(context, path, request) {
\t\tif(typeof context === \"string\") {
\t\t\trequest = path;
\t\t\tpath = context;
\t\t\tcontext = nodeContext;
\t\t}
\t\treturn resolver.resolveSync(context, path, request);
\t};
};

// Export Resolver, FileSystems and Plugins
module.exports.ResolverFactory = ResolverFactory;

module.exports.NodeJsInputFileSystem = NodeJsInputFileSystem;
module.exports.CachedInputFileSystem = CachedInputFileSystem;
";
        
        $__internal_5868d26620ed935707a34e589a68f50902c2989a05a2a6c90596163556c32ec7->leave($__internal_5868d26620ed935707a34e589a68f50902c2989a05a2a6c90596163556c32ec7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/node.js";
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
var ResolverFactory = require(\"./ResolverFactory\");

var NodeJsInputFileSystem = require(\"./NodeJsInputFileSystem\");
var CachedInputFileSystem = require(\"./CachedInputFileSystem\");

var nodeFileSystem = new CachedInputFileSystem(new NodeJsInputFileSystem(), 4000);

var nodeContext = {
\tenvironments: [
\t\t\"node+es3+es5+process+native\"
\t]
};

var asyncResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tfileSystem: nodeFileSystem
});
module.exports = function resolve(context, path, request, callback) {
\tif(typeof context === \"string\") {
\t\tcallback = request;
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\tasyncResolver.resolve(context, path, request, callback);
};

var syncResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tuseSyncFileSystemCalls: true,
\tfileSystem: nodeFileSystem
});
module.exports.sync = function resolveSync(context, path, request) {
\tif(typeof context === \"string\") {
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\treturn syncResolver.resolveSync(context, path, request);
};

var asyncContextResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tresolveToContext: true,
\tfileSystem: nodeFileSystem
});
module.exports.context = function resolveContext(context, path, request, callback) {
\tif(typeof context === \"string\") {
\t\tcallback = request;
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\tasyncContextResolver.resolve(context, path, request, callback);
};

var syncContextResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tresolveToContext: true,
\tuseSyncFileSystemCalls: true,
\tfileSystem: nodeFileSystem
});
module.exports.context.sync = function resolveContextSync(context, path, request) {
\tif(typeof context === \"string\") {
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\treturn syncContextResolver.resolveSync(context, path, request);
};

var asyncLoaderResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tmoduleExtensions: [\"-loader\"],
\tmainFields: [\"loader\", \"main\"],
\tfileSystem: nodeFileSystem
});
module.exports.loader = function resolveLoader(context, path, request, callback) {
\tif(typeof context === \"string\") {
\t\tcallback = request;
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\tasyncLoaderResolver.resolve(context, path, request, callback);
};

var syncLoaderResolver = ResolverFactory.createResolver({
\textensions: [\".js\", \".json\", \".node\"],
\tmoduleExtensions: [\"-loader\"],
\tmainFields: [\"loader\", \"main\"],
\tuseSyncFileSystemCalls: true,
\tfileSystem: nodeFileSystem
});
module.exports.loader.sync = function resolveLoaderSync(context, path, request) {
\tif(typeof context === \"string\") {
\t\trequest = path;
\t\tpath = context;
\t\tcontext = nodeContext;
\t}
\treturn syncLoaderResolver.resolveSync(context, path, request);
};

module.exports.create = function create(options) {
\toptions = Object.assign({
\t\tfileSystem: nodeFileSystem
\t}, options);
\tvar resolver = ResolverFactory.createResolver(options);
\treturn function(context, path, request, callback) {
\t\tif(typeof context === \"string\") {
\t\t\tcallback = request;
\t\t\trequest = path;
\t\t\tpath = context;
\t\t\tcontext = nodeContext;
\t\t}
\t\tresolver.resolve(context, path, request, callback);
\t};
};

module.exports.create.sync = function createSync(options) {
\toptions = Object.assign({
\t\tuseSyncFileSystemCalls: true,
\t\tfileSystem: nodeFileSystem
\t}, options);
\tvar resolver = ResolverFactory.createResolver(options);
\treturn function(context, path, request) {
\t\tif(typeof context === \"string\") {
\t\t\trequest = path;
\t\t\tpath = context;
\t\t\tcontext = nodeContext;
\t\t}
\t\treturn resolver.resolveSync(context, path, request);
\t};
};

// Export Resolver, FileSystems and Plugins
module.exports.ResolverFactory = ResolverFactory;

module.exports.NodeJsInputFileSystem = NodeJsInputFileSystem;
module.exports.CachedInputFileSystem = CachedInputFileSystem;
", "node_modules/enhanced-resolve/lib/node.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/node.js");
    }
}
