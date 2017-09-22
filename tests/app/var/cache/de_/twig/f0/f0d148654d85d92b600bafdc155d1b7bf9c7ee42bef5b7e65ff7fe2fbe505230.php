<?php

/* node_modules/loader-runner/lib/LoaderRunner.js */
class __TwigTemplate_e7dc19a1eecd0d35de16cb47a17afe69fd4b4bc68897a745f9ed533b40bc478c extends Twig_Template
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
        $__internal_ae700111f1b70eedc0f03b7e33a0f28211cac6c435d1f6fef807059fbc6651f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae700111f1b70eedc0f03b7e33a0f28211cac6c435d1f6fef807059fbc6651f5->enter($__internal_ae700111f1b70eedc0f03b7e33a0f28211cac6c435d1f6fef807059fbc6651f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-runner/lib/LoaderRunner.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var fs = require(\"fs\");
var readFile = fs.readFile.bind(fs);
var loadLoader = require(\"./loadLoader\");

function utf8BufferToString(buf) {
\tvar str = buf.toString(\"utf-8\");
\tif(str.charCodeAt(0) === 0xFEFF) {
\t\treturn str.substr(1);
\t} else {
\t\treturn str;
\t}
}

function splitQuery(req) {
\tvar i = req.indexOf(\"?\");
\tif(i < 0) return [req, \"\"];
\treturn [req.substr(0, i), req.substr(i)];
}

function dirname(path) {
\tif(path === \"/\") return \"/\";
\tvar i = path.lastIndexOf(\"/\");
\tvar j = path.lastIndexOf(\"\\\\\");
\tvar i2 = path.indexOf(\"/\");
\tvar j2 = path.indexOf(\"\\\\\");
\tvar idx = i > j ? i : j;
\tvar idx2 = i > j ? i2 : j2;
\tif(idx < 0) return path;
\tif(idx === idx2) return path.substr(0, idx + 1);
\treturn path.substr(0, idx);
}

function createLoaderObject(loader) {
\tvar obj = {
\t\tpath: null,
\t\tquery: null,
\t\toptions: null,
\t\tident: null,
\t\tnormal: null,
\t\tpitch: null,
\t\traw: null,
\t\tdata: null,
\t\tpitchExecuted: false,
\t\tnormalExecuted: false
\t};
\tObject.defineProperty(obj, \"request\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn obj.path + obj.query;
\t\t},
\t\tset: function(value) {
\t\t\tif(typeof value === \"string\") {
\t\t\t\tvar splittedRequest = splitQuery(value);
\t\t\t\tobj.path = splittedRequest[0];
\t\t\t\tobj.query = splittedRequest[1];
\t\t\t\tobj.options = undefined;
\t\t\t\tobj.ident = undefined;
\t\t\t} else {
\t\t\t\tif(!value.loader)
\t\t\t\t\tthrow new Error(\"request should be a string or object with loader and object (\" + JSON.stringify(value) + \")\");
\t\t\t\tobj.path = value.loader;
\t\t\t\tobj.options = value.options;
\t\t\t\tobj.ident = value.ident;
\t\t\t\tif(obj.options === null)
\t\t\t\t\tobj.query = \"\";
\t\t\t\telse if(obj.options === undefined)
\t\t\t\t\tobj.query = \"\";
\t\t\t\telse if(typeof obj.options === \"string\")
\t\t\t\t\tobj.query = \"?\" + obj.options;
\t\t\t\telse if(obj.ident)
\t\t\t\t\tobj.query = \"??\" + obj.ident;
\t\t\t\telse if(typeof obj.options === \"object\" && obj.options.ident)
\t\t\t\t\tobj.query = \"??\" + obj.options.ident;
\t\t\t\telse
\t\t\t\t\tobj.query = \"?\" + JSON.stringify(obj.options);
\t\t\t}
\t\t}
\t});
\tobj.request = loader;
\tif(Object.preventExtensions) {
\t\tObject.preventExtensions(obj);
\t}
\treturn obj;
}

function runSyncOrAsync(fn, context, args, callback) {
\tvar isSync = true;
\tvar isDone = false;
\tvar isError = false; // internal error
\tvar reportedError = false;
\tcontext.async = function async() {
\t\tif(isDone) {
\t\t\tif(reportedError) return; // ignore
\t\t\tthrow new Error(\"async(): The callback was already called.\");
\t\t}
\t\tisSync = false;
\t\treturn innerCallback;
\t};
\tvar innerCallback = context.callback = function() {
\t\tif(isDone) {
\t\t\tif(reportedError) return; // ignore
\t\t\tthrow new Error(\"callback(): The callback was already called.\");
\t\t}
\t\tisDone = true;
\t\tisSync = false;
\t\ttry {
\t\t\tcallback.apply(null, arguments);
\t\t} catch(e) {
\t\t\tisError = true;
\t\t\tthrow e;
\t\t}
\t};
\ttry {
\t\tvar result = (function LOADER_EXECUTION() {
\t\t\treturn fn.apply(context, args);
\t\t}());
\t\tif(isSync) {
\t\t\tisDone = true;
\t\t\tif(result === undefined)
\t\t\t\treturn callback();
\t\t\tif(result && typeof result === \"object\" && typeof result.then === \"function\") {
\t\t\t\treturn result.catch(callback).then(function(r) {
\t\t\t\t\tcallback(null, r);
\t\t\t\t});
\t\t\t}
\t\t\treturn callback(null, result);
\t\t}
\t} catch(e) {
\t\tif(isError) throw e;
\t\tif(isDone) {
\t\t\t// loader is already \"done\", so we cannot use the callback function
\t\t\t// for better debugging we print the error on the console
\t\t\tif(typeof e === \"object\" && e.stack) console.error(e.stack);
\t\t\telse console.error(e);
\t\t\treturn;
\t\t}
\t\tisDone = true;
\t\treportedError = true;
\t\tcallback(e);
\t}

}

function convertArgs(args, raw) {
\tif(!raw && Buffer.isBuffer(args[0]))
\t\targs[0] = utf8BufferToString(args[0]);
\telse if(raw && typeof args[0] === \"string\")
\t\targs[0] = new Buffer(args[0], \"utf-8\"); // eslint-disable-line
}

function iteratePitchingLoaders(options, loaderContext, callback) {
\t// abort after last loader
\tif(loaderContext.loaderIndex >= loaderContext.loaders.length)
\t\treturn processResource(options, loaderContext, callback);

\tvar currentLoaderObject = loaderContext.loaders[loaderContext.loaderIndex];

\t// iterate
\tif(currentLoaderObject.pitchExecuted) {
\t\tloaderContext.loaderIndex++;
\t\treturn iteratePitchingLoaders(options, loaderContext, callback);
\t}

\t// load loader module
\tloadLoader(currentLoaderObject, function(err) {
\t\tif(err) return callback(err);
\t\tvar fn = currentLoaderObject.pitch;
\t\tcurrentLoaderObject.pitchExecuted = true;
\t\tif(!fn) return iteratePitchingLoaders(options, loaderContext, callback);

\t\trunSyncOrAsync(
\t\t\tfn,
\t\t\tloaderContext, [loaderContext.remainingRequest, loaderContext.previousRequest, currentLoaderObject.data = {}],
\t\t\tfunction(err) {
\t\t\t\tif(err) return callback(err);
\t\t\t\tvar args = Array.prototype.slice.call(arguments, 1);
\t\t\t\tif(args.length > 0) {
\t\t\t\t\tloaderContext.loaderIndex--;
\t\t\t\t\titerateNormalLoaders(options, loaderContext, args, callback);
\t\t\t\t} else {
\t\t\t\t\titeratePitchingLoaders(options, loaderContext, callback);
\t\t\t\t}
\t\t\t}
\t\t);
\t});
}

function processResource(options, loaderContext, callback) {
\t// set loader index to last loader
\tloaderContext.loaderIndex = loaderContext.loaders.length - 1;

\tvar resourcePath = loaderContext.resourcePath;
\tif(resourcePath) {
\t\tloaderContext.addDependency(resourcePath);
\t\toptions.readResource(resourcePath, function(err, buffer) {
\t\t\tif(err) return callback(err);
\t\t\toptions.resourceBuffer = buffer;
\t\t\titerateNormalLoaders(options, loaderContext, [buffer], callback);
\t\t});
\t} else {
\t\titerateNormalLoaders(options, loaderContext, [null], callback);
\t}
}

function iterateNormalLoaders(options, loaderContext, args, callback) {
\tif(loaderContext.loaderIndex < 0)
\t\treturn callback(null, args);

\tvar currentLoaderObject = loaderContext.loaders[loaderContext.loaderIndex];

\t// iterate
\tif(currentLoaderObject.normalExecuted) {
\t\tloaderContext.loaderIndex--;
\t\treturn iterateNormalLoaders(options, loaderContext, args, callback);
\t}

\tvar fn = currentLoaderObject.normal;
\tcurrentLoaderObject.normalExecuted = true;
\tif(!fn) {
\t\treturn iterateNormalLoaders(options, loaderContext, args, callback);
\t}

\tconvertArgs(args, currentLoaderObject.raw);

\trunSyncOrAsync(fn, loaderContext, args, function(err) {
\t\tif(err) return callback(err);

\t\tvar args = Array.prototype.slice.call(arguments, 1);
\t\titerateNormalLoaders(options, loaderContext, args, callback);
\t});
}

exports.getContext = function getContext(resource) {
\tvar splitted = splitQuery(resource);
\treturn dirname(splitted[0]);
};

exports.runLoaders = function runLoaders(options, callback) {
\t// read options
\tvar resource = options.resource || \"\";
\tvar loaders = options.loaders || [];
\tvar loaderContext = options.context || {};
\tvar readResource = options.readResource || readFile;

\t//
\tvar splittedResource = resource && splitQuery(resource);
\tvar resourcePath = splittedResource ? splittedResource[0] : undefined;
\tvar resourceQuery = splittedResource ? splittedResource[1] : undefined;
\tvar contextDirectory = resourcePath ? dirname(resourcePath) : null;

\t// execution state
\tvar requestCacheable = true;
\tvar fileDependencies = [];
\tvar contextDependencies = [];

\t// prepare loader objects
\tloaders = loaders.map(createLoaderObject);

\tloaderContext.context = contextDirectory;
\tloaderContext.loaderIndex = 0;
\tloaderContext.loaders = loaders;
\tloaderContext.resourcePath = resourcePath;
\tloaderContext.resourceQuery = resourceQuery;
\tloaderContext.async = null;
\tloaderContext.callback = null;
\tloaderContext.cacheable = function cacheable(flag) {
\t\tif(flag === false) {
\t\t\trequestCacheable = false;
\t\t}
\t};
\tloaderContext.dependency = loaderContext.addDependency = function addDependency(file) {
\t\tfileDependencies.push(file);
\t};
\tloaderContext.addContextDependency = function addContextDependency(context) {
\t\tcontextDependencies.push(context);
\t};
\tloaderContext.getDependencies = function getDependencies() {
\t\treturn fileDependencies.slice();
\t};
\tloaderContext.getContextDependencies = function getContextDependencies() {
\t\treturn contextDependencies.slice();
\t};
\tloaderContext.clearDependencies = function clearDependencies() {
\t\tfileDependencies.length = 0;
\t\tcontextDependencies.length = 0;
\t\trequestCacheable = true;
\t};
\tObject.defineProperty(loaderContext, \"resource\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\tif(loaderContext.resourcePath === undefined)
\t\t\t\treturn undefined;
\t\t\treturn loaderContext.resourcePath + loaderContext.resourceQuery;
\t\t},
\t\tset: function(value) {
\t\t\tvar splittedResource = value && splitQuery(value);
\t\t\tloaderContext.resourcePath = splittedResource ? splittedResource[0] : undefined;
\t\t\tloaderContext.resourceQuery = splittedResource ? splittedResource[1] : undefined;
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"request\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn loaderContext.loaders.map(function(o) {
\t\t\t\treturn o.request;
\t\t\t}).concat(loaderContext.resource || \"\").join(\"!\");
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"remainingRequest\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\tif(loaderContext.loaderIndex >= loaderContext.loaders.length - 1 && !loaderContext.resource)
\t\t\t\treturn \"\";
\t\t\treturn loaderContext.loaders.slice(loaderContext.loaderIndex + 1).map(function(o) {
\t\t\t\treturn o.request;
\t\t\t}).concat(loaderContext.resource || \"\").join(\"!\");
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"currentRequest\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn loaderContext.loaders.slice(loaderContext.loaderIndex).map(function(o) {
\t\t\t\treturn o.request;
\t\t\t}).concat(loaderContext.resource || \"\").join(\"!\");
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"previousRequest\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn loaderContext.loaders.slice(0, loaderContext.loaderIndex).map(function(o) {
\t\t\t\treturn o.request;
\t\t\t}).join(\"!\");
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"query\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\tvar entry = loaderContext.loaders[loaderContext.loaderIndex];
\t\t\treturn entry.options && typeof entry.options === \"object\" ? entry.options : entry.query;
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"data\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn loaderContext.loaders[loaderContext.loaderIndex].data;
\t\t}
\t});

\t// finish loader context
\tif(Object.preventExtensions) {
\t\tObject.preventExtensions(loaderContext);
\t}

\tvar processOptions = {
\t\tresourceBuffer: null,
\t\treadResource: readResource
\t};
\titeratePitchingLoaders(processOptions, loaderContext, function(err, result) {
\t\tif(err) {
\t\t\treturn callback(err, {
\t\t\t\tcacheable: requestCacheable,
\t\t\t\tfileDependencies: fileDependencies,
\t\t\t\tcontextDependencies: contextDependencies
\t\t\t});
\t\t}
\t\tcallback(null, {
\t\t\tresult: result,
\t\t\tresourceBuffer: processOptions.resourceBuffer,
\t\t\tcacheable: requestCacheable,
\t\t\tfileDependencies: fileDependencies,
\t\t\tcontextDependencies: contextDependencies
\t\t});
\t});
};
";
        
        $__internal_ae700111f1b70eedc0f03b7e33a0f28211cac6c435d1f6fef807059fbc6651f5->leave($__internal_ae700111f1b70eedc0f03b7e33a0f28211cac6c435d1f6fef807059fbc6651f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-runner/lib/LoaderRunner.js";
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
var fs = require(\"fs\");
var readFile = fs.readFile.bind(fs);
var loadLoader = require(\"./loadLoader\");

function utf8BufferToString(buf) {
\tvar str = buf.toString(\"utf-8\");
\tif(str.charCodeAt(0) === 0xFEFF) {
\t\treturn str.substr(1);
\t} else {
\t\treturn str;
\t}
}

function splitQuery(req) {
\tvar i = req.indexOf(\"?\");
\tif(i < 0) return [req, \"\"];
\treturn [req.substr(0, i), req.substr(i)];
}

function dirname(path) {
\tif(path === \"/\") return \"/\";
\tvar i = path.lastIndexOf(\"/\");
\tvar j = path.lastIndexOf(\"\\\\\");
\tvar i2 = path.indexOf(\"/\");
\tvar j2 = path.indexOf(\"\\\\\");
\tvar idx = i > j ? i : j;
\tvar idx2 = i > j ? i2 : j2;
\tif(idx < 0) return path;
\tif(idx === idx2) return path.substr(0, idx + 1);
\treturn path.substr(0, idx);
}

function createLoaderObject(loader) {
\tvar obj = {
\t\tpath: null,
\t\tquery: null,
\t\toptions: null,
\t\tident: null,
\t\tnormal: null,
\t\tpitch: null,
\t\traw: null,
\t\tdata: null,
\t\tpitchExecuted: false,
\t\tnormalExecuted: false
\t};
\tObject.defineProperty(obj, \"request\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn obj.path + obj.query;
\t\t},
\t\tset: function(value) {
\t\t\tif(typeof value === \"string\") {
\t\t\t\tvar splittedRequest = splitQuery(value);
\t\t\t\tobj.path = splittedRequest[0];
\t\t\t\tobj.query = splittedRequest[1];
\t\t\t\tobj.options = undefined;
\t\t\t\tobj.ident = undefined;
\t\t\t} else {
\t\t\t\tif(!value.loader)
\t\t\t\t\tthrow new Error(\"request should be a string or object with loader and object (\" + JSON.stringify(value) + \")\");
\t\t\t\tobj.path = value.loader;
\t\t\t\tobj.options = value.options;
\t\t\t\tobj.ident = value.ident;
\t\t\t\tif(obj.options === null)
\t\t\t\t\tobj.query = \"\";
\t\t\t\telse if(obj.options === undefined)
\t\t\t\t\tobj.query = \"\";
\t\t\t\telse if(typeof obj.options === \"string\")
\t\t\t\t\tobj.query = \"?\" + obj.options;
\t\t\t\telse if(obj.ident)
\t\t\t\t\tobj.query = \"??\" + obj.ident;
\t\t\t\telse if(typeof obj.options === \"object\" && obj.options.ident)
\t\t\t\t\tobj.query = \"??\" + obj.options.ident;
\t\t\t\telse
\t\t\t\t\tobj.query = \"?\" + JSON.stringify(obj.options);
\t\t\t}
\t\t}
\t});
\tobj.request = loader;
\tif(Object.preventExtensions) {
\t\tObject.preventExtensions(obj);
\t}
\treturn obj;
}

function runSyncOrAsync(fn, context, args, callback) {
\tvar isSync = true;
\tvar isDone = false;
\tvar isError = false; // internal error
\tvar reportedError = false;
\tcontext.async = function async() {
\t\tif(isDone) {
\t\t\tif(reportedError) return; // ignore
\t\t\tthrow new Error(\"async(): The callback was already called.\");
\t\t}
\t\tisSync = false;
\t\treturn innerCallback;
\t};
\tvar innerCallback = context.callback = function() {
\t\tif(isDone) {
\t\t\tif(reportedError) return; // ignore
\t\t\tthrow new Error(\"callback(): The callback was already called.\");
\t\t}
\t\tisDone = true;
\t\tisSync = false;
\t\ttry {
\t\t\tcallback.apply(null, arguments);
\t\t} catch(e) {
\t\t\tisError = true;
\t\t\tthrow e;
\t\t}
\t};
\ttry {
\t\tvar result = (function LOADER_EXECUTION() {
\t\t\treturn fn.apply(context, args);
\t\t}());
\t\tif(isSync) {
\t\t\tisDone = true;
\t\t\tif(result === undefined)
\t\t\t\treturn callback();
\t\t\tif(result && typeof result === \"object\" && typeof result.then === \"function\") {
\t\t\t\treturn result.catch(callback).then(function(r) {
\t\t\t\t\tcallback(null, r);
\t\t\t\t});
\t\t\t}
\t\t\treturn callback(null, result);
\t\t}
\t} catch(e) {
\t\tif(isError) throw e;
\t\tif(isDone) {
\t\t\t// loader is already \"done\", so we cannot use the callback function
\t\t\t// for better debugging we print the error on the console
\t\t\tif(typeof e === \"object\" && e.stack) console.error(e.stack);
\t\t\telse console.error(e);
\t\t\treturn;
\t\t}
\t\tisDone = true;
\t\treportedError = true;
\t\tcallback(e);
\t}

}

function convertArgs(args, raw) {
\tif(!raw && Buffer.isBuffer(args[0]))
\t\targs[0] = utf8BufferToString(args[0]);
\telse if(raw && typeof args[0] === \"string\")
\t\targs[0] = new Buffer(args[0], \"utf-8\"); // eslint-disable-line
}

function iteratePitchingLoaders(options, loaderContext, callback) {
\t// abort after last loader
\tif(loaderContext.loaderIndex >= loaderContext.loaders.length)
\t\treturn processResource(options, loaderContext, callback);

\tvar currentLoaderObject = loaderContext.loaders[loaderContext.loaderIndex];

\t// iterate
\tif(currentLoaderObject.pitchExecuted) {
\t\tloaderContext.loaderIndex++;
\t\treturn iteratePitchingLoaders(options, loaderContext, callback);
\t}

\t// load loader module
\tloadLoader(currentLoaderObject, function(err) {
\t\tif(err) return callback(err);
\t\tvar fn = currentLoaderObject.pitch;
\t\tcurrentLoaderObject.pitchExecuted = true;
\t\tif(!fn) return iteratePitchingLoaders(options, loaderContext, callback);

\t\trunSyncOrAsync(
\t\t\tfn,
\t\t\tloaderContext, [loaderContext.remainingRequest, loaderContext.previousRequest, currentLoaderObject.data = {}],
\t\t\tfunction(err) {
\t\t\t\tif(err) return callback(err);
\t\t\t\tvar args = Array.prototype.slice.call(arguments, 1);
\t\t\t\tif(args.length > 0) {
\t\t\t\t\tloaderContext.loaderIndex--;
\t\t\t\t\titerateNormalLoaders(options, loaderContext, args, callback);
\t\t\t\t} else {
\t\t\t\t\titeratePitchingLoaders(options, loaderContext, callback);
\t\t\t\t}
\t\t\t}
\t\t);
\t});
}

function processResource(options, loaderContext, callback) {
\t// set loader index to last loader
\tloaderContext.loaderIndex = loaderContext.loaders.length - 1;

\tvar resourcePath = loaderContext.resourcePath;
\tif(resourcePath) {
\t\tloaderContext.addDependency(resourcePath);
\t\toptions.readResource(resourcePath, function(err, buffer) {
\t\t\tif(err) return callback(err);
\t\t\toptions.resourceBuffer = buffer;
\t\t\titerateNormalLoaders(options, loaderContext, [buffer], callback);
\t\t});
\t} else {
\t\titerateNormalLoaders(options, loaderContext, [null], callback);
\t}
}

function iterateNormalLoaders(options, loaderContext, args, callback) {
\tif(loaderContext.loaderIndex < 0)
\t\treturn callback(null, args);

\tvar currentLoaderObject = loaderContext.loaders[loaderContext.loaderIndex];

\t// iterate
\tif(currentLoaderObject.normalExecuted) {
\t\tloaderContext.loaderIndex--;
\t\treturn iterateNormalLoaders(options, loaderContext, args, callback);
\t}

\tvar fn = currentLoaderObject.normal;
\tcurrentLoaderObject.normalExecuted = true;
\tif(!fn) {
\t\treturn iterateNormalLoaders(options, loaderContext, args, callback);
\t}

\tconvertArgs(args, currentLoaderObject.raw);

\trunSyncOrAsync(fn, loaderContext, args, function(err) {
\t\tif(err) return callback(err);

\t\tvar args = Array.prototype.slice.call(arguments, 1);
\t\titerateNormalLoaders(options, loaderContext, args, callback);
\t});
}

exports.getContext = function getContext(resource) {
\tvar splitted = splitQuery(resource);
\treturn dirname(splitted[0]);
};

exports.runLoaders = function runLoaders(options, callback) {
\t// read options
\tvar resource = options.resource || \"\";
\tvar loaders = options.loaders || [];
\tvar loaderContext = options.context || {};
\tvar readResource = options.readResource || readFile;

\t//
\tvar splittedResource = resource && splitQuery(resource);
\tvar resourcePath = splittedResource ? splittedResource[0] : undefined;
\tvar resourceQuery = splittedResource ? splittedResource[1] : undefined;
\tvar contextDirectory = resourcePath ? dirname(resourcePath) : null;

\t// execution state
\tvar requestCacheable = true;
\tvar fileDependencies = [];
\tvar contextDependencies = [];

\t// prepare loader objects
\tloaders = loaders.map(createLoaderObject);

\tloaderContext.context = contextDirectory;
\tloaderContext.loaderIndex = 0;
\tloaderContext.loaders = loaders;
\tloaderContext.resourcePath = resourcePath;
\tloaderContext.resourceQuery = resourceQuery;
\tloaderContext.async = null;
\tloaderContext.callback = null;
\tloaderContext.cacheable = function cacheable(flag) {
\t\tif(flag === false) {
\t\t\trequestCacheable = false;
\t\t}
\t};
\tloaderContext.dependency = loaderContext.addDependency = function addDependency(file) {
\t\tfileDependencies.push(file);
\t};
\tloaderContext.addContextDependency = function addContextDependency(context) {
\t\tcontextDependencies.push(context);
\t};
\tloaderContext.getDependencies = function getDependencies() {
\t\treturn fileDependencies.slice();
\t};
\tloaderContext.getContextDependencies = function getContextDependencies() {
\t\treturn contextDependencies.slice();
\t};
\tloaderContext.clearDependencies = function clearDependencies() {
\t\tfileDependencies.length = 0;
\t\tcontextDependencies.length = 0;
\t\trequestCacheable = true;
\t};
\tObject.defineProperty(loaderContext, \"resource\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\tif(loaderContext.resourcePath === undefined)
\t\t\t\treturn undefined;
\t\t\treturn loaderContext.resourcePath + loaderContext.resourceQuery;
\t\t},
\t\tset: function(value) {
\t\t\tvar splittedResource = value && splitQuery(value);
\t\t\tloaderContext.resourcePath = splittedResource ? splittedResource[0] : undefined;
\t\t\tloaderContext.resourceQuery = splittedResource ? splittedResource[1] : undefined;
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"request\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn loaderContext.loaders.map(function(o) {
\t\t\t\treturn o.request;
\t\t\t}).concat(loaderContext.resource || \"\").join(\"!\");
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"remainingRequest\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\tif(loaderContext.loaderIndex >= loaderContext.loaders.length - 1 && !loaderContext.resource)
\t\t\t\treturn \"\";
\t\t\treturn loaderContext.loaders.slice(loaderContext.loaderIndex + 1).map(function(o) {
\t\t\t\treturn o.request;
\t\t\t}).concat(loaderContext.resource || \"\").join(\"!\");
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"currentRequest\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn loaderContext.loaders.slice(loaderContext.loaderIndex).map(function(o) {
\t\t\t\treturn o.request;
\t\t\t}).concat(loaderContext.resource || \"\").join(\"!\");
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"previousRequest\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn loaderContext.loaders.slice(0, loaderContext.loaderIndex).map(function(o) {
\t\t\t\treturn o.request;
\t\t\t}).join(\"!\");
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"query\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\tvar entry = loaderContext.loaders[loaderContext.loaderIndex];
\t\t\treturn entry.options && typeof entry.options === \"object\" ? entry.options : entry.query;
\t\t}
\t});
\tObject.defineProperty(loaderContext, \"data\", {
\t\tenumerable: true,
\t\tget: function() {
\t\t\treturn loaderContext.loaders[loaderContext.loaderIndex].data;
\t\t}
\t});

\t// finish loader context
\tif(Object.preventExtensions) {
\t\tObject.preventExtensions(loaderContext);
\t}

\tvar processOptions = {
\t\tresourceBuffer: null,
\t\treadResource: readResource
\t};
\titeratePitchingLoaders(processOptions, loaderContext, function(err, result) {
\t\tif(err) {
\t\t\treturn callback(err, {
\t\t\t\tcacheable: requestCacheable,
\t\t\t\tfileDependencies: fileDependencies,
\t\t\t\tcontextDependencies: contextDependencies
\t\t\t});
\t\t}
\t\tcallback(null, {
\t\t\tresult: result,
\t\t\tresourceBuffer: processOptions.resourceBuffer,
\t\t\tcacheable: requestCacheable,
\t\t\tfileDependencies: fileDependencies,
\t\t\tcontextDependencies: contextDependencies
\t\t});
\t});
};
", "node_modules/loader-runner/lib/LoaderRunner.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-runner/lib/LoaderRunner.js");
    }
}
