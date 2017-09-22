<?php

/* node_modules/enhanced-resolve/lib/Resolver.js */
class __TwigTemplate_69db1557b99bd505792a12869a1720e0ac875ff51ddc78c8a5518366ebf9e8c0 extends Twig_Template
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
        $__internal_6e9a50240127d05aafcff0f74ba0af468af62c67bdf1b5560397b244df6138e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9a50240127d05aafcff0f74ba0af468af62c67bdf1b5560397b244df6138e0->enter($__internal_6e9a50240127d05aafcff0f74ba0af468af62c67bdf1b5560397b244df6138e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/Resolver.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var Tapable = require(\"tapable\");
var createInnerCallback = require(\"./createInnerCallback\");

function Resolver(fileSystem) {
\tTapable.call(this);
\tthis.fileSystem = fileSystem;
}
module.exports = Resolver;

Resolver.prototype = Object.create(Tapable.prototype);

Resolver.prototype.constructor = Resolver;

Resolver.prototype.resolveSync = function resolveSync(context, path, request) {
\tvar err, result, sync = false;
\tthis.resolve(context, path, request, function(e, r) {
\t\terr = e;
\t\tresult = r;
\t\tsync = true;
\t});
\tif(!sync) throw new Error(\"Cannot 'resolveSync' because the fileSystem is not sync. Use 'resolve'!\");
\tif(err) throw err;
\treturn result;
};

Resolver.prototype.resolve = function resolve(context, path, request, callback) {
\tif(arguments.length === 3) {
\t\tthrow new Error(\"Signature changed: context parameter added\");
\t}
\tvar resolver = this;
\tvar obj = {
\t\tcontext: context,
\t\tpath: path,
\t\trequest: request
\t};

\tvar localMissing;
\tvar log;
\tvar message = \"resolve '\" + request + \"' in '\" + path + \"'\";

\tfunction writeLog(msg) {
\t\tlog.push(msg);
\t}

\tfunction logAsString() {
\t\treturn log.join(\"\\n\");
\t}

\tfunction onError(err, result) {
\t\tif(callback.log) {
\t\t\tfor(var i = 0; i < log.length; i++)
\t\t\t\tcallback.log(log[i]);
\t\t}

\t\tif(err) return callback(err);

\t\tvar error = new Error(\"Can't \" + message);
\t\terror.details = logAsString();
\t\terror.missing = localMissing;
\t\tresolver.applyPlugins(\"no-resolve\", obj, error);
\t\treturn callback(error);
\t}

\tfunction onResolve(err, result) {
\t\tif(!err && result) {
\t\t\treturn callback(null, result.path === false ? false : result.path + (result.query || \"\"), result);
\t\t}

\t\tlocalMissing = [];
\t\tlog = [];

\t\treturn resolver.doResolve(\"resolve\", obj, message, createInnerCallback(onError, {
\t\t\tlog: writeLog,
\t\t\tmissing: localMissing,
\t\t\tstack: callback.stack
\t\t}));
\t}

\tonResolve.missing = callback.missing;
\tonResolve.stack = callback.stack;

\treturn this.doResolve(\"resolve\", obj, message, onResolve);
};

Resolver.prototype.doResolve = function doResolve(type, request, message, callback) {
\tvar resolver = this;
\tvar stackLine = type + \": (\" + request.path + \") \" +
\t\t(request.request || \"\") + (request.query || \"\") +
\t\t(request.directory ? \" directory\" : \"\") +
\t\t(request.module ? \" module\" : \"\");
\tvar newStack = [stackLine];
\tif(callback.stack) {
\t\tnewStack = callback.stack.concat(newStack);
\t\tif(callback.stack.indexOf(stackLine) >= 0) {
\t\t\t// Prevent recursion
\t\t\tvar recursionError = new Error(\"Recursion in resolving\\nStack:\\n  \" + newStack.join(\"\\n  \"));
\t\t\trecursionError.recursion = true;
\t\t\tif(callback.log) callback.log(\"abort resolving because of recursion\");
\t\t\treturn callback(recursionError);
\t\t}
\t}
\tresolver.applyPlugins(\"resolve-step\", type, request);

\tvar beforePluginName = \"before-\" + type;
\tif(resolver.hasPlugins(beforePluginName)) {
\t\tresolver.applyPluginsAsyncSeriesBailResult1(beforePluginName, request, createInnerCallback(beforeInnerCallback, {
\t\t\tlog: callback.log,
\t\t\tmissing: callback.missing,
\t\t\tstack: newStack
\t\t}, message && (\"before \" + message), true));
\t} else {
\t\trunNormal();
\t}

\tfunction beforeInnerCallback(err, result) {
\t\tif(arguments.length > 0) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) return callback(null, result);
\t\t\treturn callback();
\t\t}
\t\trunNormal();
\t}

\tfunction runNormal() {
\t\tif(resolver.hasPlugins(type)) {
\t\t\treturn resolver.applyPluginsAsyncSeriesBailResult1(type, request, createInnerCallback(innerCallback, {
\t\t\t\tlog: callback.log,
\t\t\t\tmissing: callback.missing,
\t\t\t\tstack: newStack
\t\t\t}, message));
\t\t} else {
\t\t\trunAfter();
\t\t}
\t}

\tfunction innerCallback(err, result) {
\t\tif(arguments.length > 0) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) return callback(null, result);
\t\t\treturn callback();
\t\t}
\t\trunAfter();
\t}

\tfunction runAfter() {
\t\tvar afterPluginName = \"after-\" + type;
\t\tif(resolver.hasPlugins(afterPluginName)) {
\t\t\treturn resolver.applyPluginsAsyncSeriesBailResult1(afterPluginName, request, createInnerCallback(afterInnerCallback, {
\t\t\t\tlog: callback.log,
\t\t\t\tmissing: callback.missing,
\t\t\t\tstack: newStack
\t\t\t}, message && (\"after \" + message), true));
\t\t} else {
\t\t\tcallback();
\t\t}
\t}

\tfunction afterInnerCallback(err, result) {
\t\tif(arguments.length > 0) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) return callback(null, result);
\t\t\treturn callback();
\t\t}
\t\treturn callback();
\t}
};

Resolver.prototype.parse = function parse(identifier) {
\tif(identifier === \"\") return null;
\tvar part = {
\t\trequest: \"\",
\t\tquery: \"\",
\t\tmodule: false,
\t\tdirectory: false,
\t\tfile: false
\t};
\tvar idxQuery = identifier.indexOf(\"?\");
\tif(idxQuery === 0) {
\t\tpart.query = identifier;
\t} else if(idxQuery > 0) {
\t\tpart.request = identifier.slice(0, idxQuery);
\t\tpart.query = identifier.slice(idxQuery);
\t} else {
\t\tpart.request = identifier;
\t}
\tif(part.request) {
\t\tpart.module = this.isModule(part.request);
\t\tpart.directory = this.isDirectory(part.request);
\t\tif(part.directory) {
\t\t\tpart.request = part.request.substr(0, part.request.length - 1);
\t\t}
\t}
\treturn part;
};

var notModuleRegExp = /^\\.\$|^\\.[\\\\\\/]|^\\.\\.\$|^\\.\\.[\\/\\\\]|^\\/|^[A-Z]:[\\\\\\/]/i;
Resolver.prototype.isModule = function isModule(path) {
\treturn !notModuleRegExp.test(path);
};

var directoryRegExp = /[\\/\\\\]\$/i;
Resolver.prototype.isDirectory = function isDirectory(path) {
\treturn directoryRegExp.test(path);
};

var memoryFsJoin = require(\"memory-fs/lib/join\");
var memoizedJoin = new Map();
Resolver.prototype.join = function(path, request) {
\tvar cacheEntry;
\tvar pathCache = memoizedJoin.get(path);
\tif(typeof pathCache === \"undefined\") {
\t\tmemoizedJoin.set(path, pathCache = new Map());
\t} else {
\t\tcacheEntry = pathCache.get(request);
\t\tif(typeof cacheEntry !== \"undefined\")
\t\t\treturn cacheEntry;
\t}
\tcacheEntry = memoryFsJoin(path, request);
\tpathCache.set(request, cacheEntry);
\treturn cacheEntry;
};

Resolver.prototype.normalize = require(\"memory-fs/lib/normalize\");
";
        
        $__internal_6e9a50240127d05aafcff0f74ba0af468af62c67bdf1b5560397b244df6138e0->leave($__internal_6e9a50240127d05aafcff0f74ba0af468af62c67bdf1b5560397b244df6138e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/Resolver.js";
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
var Tapable = require(\"tapable\");
var createInnerCallback = require(\"./createInnerCallback\");

function Resolver(fileSystem) {
\tTapable.call(this);
\tthis.fileSystem = fileSystem;
}
module.exports = Resolver;

Resolver.prototype = Object.create(Tapable.prototype);

Resolver.prototype.constructor = Resolver;

Resolver.prototype.resolveSync = function resolveSync(context, path, request) {
\tvar err, result, sync = false;
\tthis.resolve(context, path, request, function(e, r) {
\t\terr = e;
\t\tresult = r;
\t\tsync = true;
\t});
\tif(!sync) throw new Error(\"Cannot 'resolveSync' because the fileSystem is not sync. Use 'resolve'!\");
\tif(err) throw err;
\treturn result;
};

Resolver.prototype.resolve = function resolve(context, path, request, callback) {
\tif(arguments.length === 3) {
\t\tthrow new Error(\"Signature changed: context parameter added\");
\t}
\tvar resolver = this;
\tvar obj = {
\t\tcontext: context,
\t\tpath: path,
\t\trequest: request
\t};

\tvar localMissing;
\tvar log;
\tvar message = \"resolve '\" + request + \"' in '\" + path + \"'\";

\tfunction writeLog(msg) {
\t\tlog.push(msg);
\t}

\tfunction logAsString() {
\t\treturn log.join(\"\\n\");
\t}

\tfunction onError(err, result) {
\t\tif(callback.log) {
\t\t\tfor(var i = 0; i < log.length; i++)
\t\t\t\tcallback.log(log[i]);
\t\t}

\t\tif(err) return callback(err);

\t\tvar error = new Error(\"Can't \" + message);
\t\terror.details = logAsString();
\t\terror.missing = localMissing;
\t\tresolver.applyPlugins(\"no-resolve\", obj, error);
\t\treturn callback(error);
\t}

\tfunction onResolve(err, result) {
\t\tif(!err && result) {
\t\t\treturn callback(null, result.path === false ? false : result.path + (result.query || \"\"), result);
\t\t}

\t\tlocalMissing = [];
\t\tlog = [];

\t\treturn resolver.doResolve(\"resolve\", obj, message, createInnerCallback(onError, {
\t\t\tlog: writeLog,
\t\t\tmissing: localMissing,
\t\t\tstack: callback.stack
\t\t}));
\t}

\tonResolve.missing = callback.missing;
\tonResolve.stack = callback.stack;

\treturn this.doResolve(\"resolve\", obj, message, onResolve);
};

Resolver.prototype.doResolve = function doResolve(type, request, message, callback) {
\tvar resolver = this;
\tvar stackLine = type + \": (\" + request.path + \") \" +
\t\t(request.request || \"\") + (request.query || \"\") +
\t\t(request.directory ? \" directory\" : \"\") +
\t\t(request.module ? \" module\" : \"\");
\tvar newStack = [stackLine];
\tif(callback.stack) {
\t\tnewStack = callback.stack.concat(newStack);
\t\tif(callback.stack.indexOf(stackLine) >= 0) {
\t\t\t// Prevent recursion
\t\t\tvar recursionError = new Error(\"Recursion in resolving\\nStack:\\n  \" + newStack.join(\"\\n  \"));
\t\t\trecursionError.recursion = true;
\t\t\tif(callback.log) callback.log(\"abort resolving because of recursion\");
\t\t\treturn callback(recursionError);
\t\t}
\t}
\tresolver.applyPlugins(\"resolve-step\", type, request);

\tvar beforePluginName = \"before-\" + type;
\tif(resolver.hasPlugins(beforePluginName)) {
\t\tresolver.applyPluginsAsyncSeriesBailResult1(beforePluginName, request, createInnerCallback(beforeInnerCallback, {
\t\t\tlog: callback.log,
\t\t\tmissing: callback.missing,
\t\t\tstack: newStack
\t\t}, message && (\"before \" + message), true));
\t} else {
\t\trunNormal();
\t}

\tfunction beforeInnerCallback(err, result) {
\t\tif(arguments.length > 0) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) return callback(null, result);
\t\t\treturn callback();
\t\t}
\t\trunNormal();
\t}

\tfunction runNormal() {
\t\tif(resolver.hasPlugins(type)) {
\t\t\treturn resolver.applyPluginsAsyncSeriesBailResult1(type, request, createInnerCallback(innerCallback, {
\t\t\t\tlog: callback.log,
\t\t\t\tmissing: callback.missing,
\t\t\t\tstack: newStack
\t\t\t}, message));
\t\t} else {
\t\t\trunAfter();
\t\t}
\t}

\tfunction innerCallback(err, result) {
\t\tif(arguments.length > 0) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) return callback(null, result);
\t\t\treturn callback();
\t\t}
\t\trunAfter();
\t}

\tfunction runAfter() {
\t\tvar afterPluginName = \"after-\" + type;
\t\tif(resolver.hasPlugins(afterPluginName)) {
\t\t\treturn resolver.applyPluginsAsyncSeriesBailResult1(afterPluginName, request, createInnerCallback(afterInnerCallback, {
\t\t\t\tlog: callback.log,
\t\t\t\tmissing: callback.missing,
\t\t\t\tstack: newStack
\t\t\t}, message && (\"after \" + message), true));
\t\t} else {
\t\t\tcallback();
\t\t}
\t}

\tfunction afterInnerCallback(err, result) {
\t\tif(arguments.length > 0) {
\t\t\tif(err) return callback(err);
\t\t\tif(result) return callback(null, result);
\t\t\treturn callback();
\t\t}
\t\treturn callback();
\t}
};

Resolver.prototype.parse = function parse(identifier) {
\tif(identifier === \"\") return null;
\tvar part = {
\t\trequest: \"\",
\t\tquery: \"\",
\t\tmodule: false,
\t\tdirectory: false,
\t\tfile: false
\t};
\tvar idxQuery = identifier.indexOf(\"?\");
\tif(idxQuery === 0) {
\t\tpart.query = identifier;
\t} else if(idxQuery > 0) {
\t\tpart.request = identifier.slice(0, idxQuery);
\t\tpart.query = identifier.slice(idxQuery);
\t} else {
\t\tpart.request = identifier;
\t}
\tif(part.request) {
\t\tpart.module = this.isModule(part.request);
\t\tpart.directory = this.isDirectory(part.request);
\t\tif(part.directory) {
\t\t\tpart.request = part.request.substr(0, part.request.length - 1);
\t\t}
\t}
\treturn part;
};

var notModuleRegExp = /^\\.\$|^\\.[\\\\\\/]|^\\.\\.\$|^\\.\\.[\\/\\\\]|^\\/|^[A-Z]:[\\\\\\/]/i;
Resolver.prototype.isModule = function isModule(path) {
\treturn !notModuleRegExp.test(path);
};

var directoryRegExp = /[\\/\\\\]\$/i;
Resolver.prototype.isDirectory = function isDirectory(path) {
\treturn directoryRegExp.test(path);
};

var memoryFsJoin = require(\"memory-fs/lib/join\");
var memoizedJoin = new Map();
Resolver.prototype.join = function(path, request) {
\tvar cacheEntry;
\tvar pathCache = memoizedJoin.get(path);
\tif(typeof pathCache === \"undefined\") {
\t\tmemoizedJoin.set(path, pathCache = new Map());
\t} else {
\t\tcacheEntry = pathCache.get(request);
\t\tif(typeof cacheEntry !== \"undefined\")
\t\t\treturn cacheEntry;
\t}
\tcacheEntry = memoryFsJoin(path, request);
\tpathCache.set(request, cacheEntry);
\treturn cacheEntry;
};

Resolver.prototype.normalize = require(\"memory-fs/lib/normalize\");
", "node_modules/enhanced-resolve/lib/Resolver.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/Resolver.js");
    }
}
