<?php

/* node_modules/webpack/lib/ContextModuleFactory.js */
class __TwigTemplate_dd0af1320dab85ca85583b4e3e1ef34c54224d14b895b0a029cdf9884167cf70 extends Twig_Template
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
        $__internal_12ba9589aaced579def061ef1a3eb2e756c6f9b1f82846c63d9df16f1793277d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ba9589aaced579def061ef1a3eb2e756c6f9b1f82846c63d9df16f1793277d->enter($__internal_12ba9589aaced579def061ef1a3eb2e756c6f9b1f82846c63d9df16f1793277d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/ContextModuleFactory.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const asyncLib = require(\"async\");
const path = require(\"path\");

const Tapable = require(\"tapable\");
const ContextModule = require(\"./ContextModule\");
const ContextElementDependency = require(\"./dependencies/ContextElementDependency\");

module.exports = class ContextModuleFactory extends Tapable {
\tconstructor(resolvers) {
\t\tsuper();
\t\tthis.resolvers = resolvers;
\t}

\tcreate(data, callback) {
\t\tconst module = this;
\t\tconst context = data.context;
\t\tconst dependencies = data.dependencies;
\t\tconst dependency = dependencies[0];
\t\tthis.applyPluginsAsyncWaterfall(\"before-resolve\", {
\t\t\tcontext: context,
\t\t\trequest: dependency.request,
\t\t\trecursive: dependency.recursive,
\t\t\tregExp: dependency.regExp,
\t\t\tasync: dependency.async,
\t\t\tdependencies: dependencies
\t\t}, (err, result) => {
\t\t\tif(err) return callback(err);

\t\t\t// Ignored
\t\t\tif(!result) return callback();

\t\t\tconst context = result.context;
\t\t\tconst request = result.request;
\t\t\tconst recursive = result.recursive;
\t\t\tconst regExp = result.regExp;
\t\t\tconst asyncContext = result.async;
\t\t\tconst dependencies = result.dependencies;

\t\t\tlet loaders, resource, loadersPrefix = \"\";
\t\t\tconst idx = request.lastIndexOf(\"!\");
\t\t\tif(idx >= 0) {
\t\t\t\tloaders = request.substr(0, idx + 1);
\t\t\t\tlet i;
\t\t\t\tfor(i = 0; i < loaders.length && loaders[i] === \"!\"; i++) {
\t\t\t\t\tloadersPrefix += \"!\";
\t\t\t\t}
\t\t\t\tloaders = loaders.substr(i).replace(/!+\$/, \"\").replace(/!!+/g, \"!\");
\t\t\t\tif(loaders === \"\") loaders = [];
\t\t\t\telse loaders = loaders.split(\"!\");
\t\t\t\tresource = request.substr(idx + 1);
\t\t\t} else {
\t\t\t\tloaders = [];
\t\t\t\tresource = request;
\t\t\t}

\t\t\tconst resolvers = module.resolvers;

\t\t\tasyncLib.parallel([
\t\t\t\tfunction(callback) {
\t\t\t\t\tresolvers.context.resolve({}, context, resource, function(err, result) {
\t\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\t\tcallback(null, result);
\t\t\t\t\t});
\t\t\t\t},
\t\t\t\tfunction(callback) {
\t\t\t\t\tasyncLib.map(loaders, function(loader, callback) {
\t\t\t\t\t\tresolvers.loader.resolve({}, context, loader, function(err, result) {
\t\t\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\t\t\tcallback(null, result);
\t\t\t\t\t\t});
\t\t\t\t\t}, callback);
\t\t\t\t}
\t\t\t], (err, result) => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tmodule.applyPluginsAsyncWaterfall(\"after-resolve\", {
\t\t\t\t\tloaders: loadersPrefix + result[1].join(\"!\") + (result[1].length > 0 ? \"!\" : \"\"),
\t\t\t\t\tresource: result[0],
\t\t\t\t\trecursive: recursive,
\t\t\t\t\tregExp: regExp,
\t\t\t\t\tasync: asyncContext,
\t\t\t\t\tdependencies: dependencies,
\t\t\t\t\tresolveDependencies: module.resolveDependencies.bind(module)
\t\t\t\t}, function(err, result) {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\t// Ignored
\t\t\t\t\tif(!result) return callback();

\t\t\t\t\treturn callback(null, new ContextModule(result.resolveDependencies, result.resource, result.recursive, result.regExp, result.loaders, result.async, dependency.chunkName));
\t\t\t\t});
\t\t\t});
\t\t});
\t}

\tresolveDependencies(fs, resource, recursive, regExp, callback) {
\t\tif(!regExp || !resource)
\t\t\treturn callback(null, []);
\t\t(function addDirectory(directory, callback) {
\t\t\tfs.readdir(directory, (err, files) => {
\t\t\t\tif(err) return callback(err);
\t\t\t\tif(!files || files.length === 0) return callback(null, []);
\t\t\t\tasyncLib.map(files.filter(function(p) {
\t\t\t\t\treturn p.indexOf(\".\") !== 0;
\t\t\t\t}), (seqment, callback) => {

\t\t\t\t\tconst subResource = path.join(directory, seqment);

\t\t\t\t\tfs.stat(subResource, (err, stat) => {
\t\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\t\tif(stat.isDirectory()) {

\t\t\t\t\t\t\tif(!recursive) return callback();
\t\t\t\t\t\t\taddDirectory.call(this, subResource, callback);

\t\t\t\t\t\t} else if(stat.isFile()) {

\t\t\t\t\t\t\tconst obj = {
\t\t\t\t\t\t\t\tcontext: resource,
\t\t\t\t\t\t\t\trequest: \".\" + subResource.substr(resource.length).replace(/\\\\/g, \"/\")
\t\t\t\t\t\t\t};

\t\t\t\t\t\t\tthis.applyPluginsAsyncWaterfall(\"alternatives\", [obj], (err, alternatives) => {
\t\t\t\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\t\t\t\talternatives = alternatives.filter(function(obj) {
\t\t\t\t\t\t\t\t\treturn regExp.test(obj.request);
\t\t\t\t\t\t\t\t}).map(function(obj) {
\t\t\t\t\t\t\t\t\tconst dep = new ContextElementDependency(obj.request);
\t\t\t\t\t\t\t\t\tdep.optional = true;
\t\t\t\t\t\t\t\t\treturn dep;
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tcallback(null, alternatives);
\t\t\t\t\t\t\t});

\t\t\t\t\t\t} else callback();

\t\t\t\t\t});

\t\t\t\t}, (err, result) => {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\tif(!result) return callback(null, []);

\t\t\t\t\tcallback(null, result.filter(function(i) {
\t\t\t\t\t\treturn !!i;
\t\t\t\t\t}).reduce(function(a, i) {
\t\t\t\t\t\treturn a.concat(i);
\t\t\t\t\t}, []));
\t\t\t\t});
\t\t\t});
\t\t}.call(this, resource, callback));
\t}
};
";
        
        $__internal_12ba9589aaced579def061ef1a3eb2e756c6f9b1f82846c63d9df16f1793277d->leave($__internal_12ba9589aaced579def061ef1a3eb2e756c6f9b1f82846c63d9df16f1793277d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/ContextModuleFactory.js";
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
\"use strict\";

const asyncLib = require(\"async\");
const path = require(\"path\");

const Tapable = require(\"tapable\");
const ContextModule = require(\"./ContextModule\");
const ContextElementDependency = require(\"./dependencies/ContextElementDependency\");

module.exports = class ContextModuleFactory extends Tapable {
\tconstructor(resolvers) {
\t\tsuper();
\t\tthis.resolvers = resolvers;
\t}

\tcreate(data, callback) {
\t\tconst module = this;
\t\tconst context = data.context;
\t\tconst dependencies = data.dependencies;
\t\tconst dependency = dependencies[0];
\t\tthis.applyPluginsAsyncWaterfall(\"before-resolve\", {
\t\t\tcontext: context,
\t\t\trequest: dependency.request,
\t\t\trecursive: dependency.recursive,
\t\t\tregExp: dependency.regExp,
\t\t\tasync: dependency.async,
\t\t\tdependencies: dependencies
\t\t}, (err, result) => {
\t\t\tif(err) return callback(err);

\t\t\t// Ignored
\t\t\tif(!result) return callback();

\t\t\tconst context = result.context;
\t\t\tconst request = result.request;
\t\t\tconst recursive = result.recursive;
\t\t\tconst regExp = result.regExp;
\t\t\tconst asyncContext = result.async;
\t\t\tconst dependencies = result.dependencies;

\t\t\tlet loaders, resource, loadersPrefix = \"\";
\t\t\tconst idx = request.lastIndexOf(\"!\");
\t\t\tif(idx >= 0) {
\t\t\t\tloaders = request.substr(0, idx + 1);
\t\t\t\tlet i;
\t\t\t\tfor(i = 0; i < loaders.length && loaders[i] === \"!\"; i++) {
\t\t\t\t\tloadersPrefix += \"!\";
\t\t\t\t}
\t\t\t\tloaders = loaders.substr(i).replace(/!+\$/, \"\").replace(/!!+/g, \"!\");
\t\t\t\tif(loaders === \"\") loaders = [];
\t\t\t\telse loaders = loaders.split(\"!\");
\t\t\t\tresource = request.substr(idx + 1);
\t\t\t} else {
\t\t\t\tloaders = [];
\t\t\t\tresource = request;
\t\t\t}

\t\t\tconst resolvers = module.resolvers;

\t\t\tasyncLib.parallel([
\t\t\t\tfunction(callback) {
\t\t\t\t\tresolvers.context.resolve({}, context, resource, function(err, result) {
\t\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\t\tcallback(null, result);
\t\t\t\t\t});
\t\t\t\t},
\t\t\t\tfunction(callback) {
\t\t\t\t\tasyncLib.map(loaders, function(loader, callback) {
\t\t\t\t\t\tresolvers.loader.resolve({}, context, loader, function(err, result) {
\t\t\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\t\t\tcallback(null, result);
\t\t\t\t\t\t});
\t\t\t\t\t}, callback);
\t\t\t\t}
\t\t\t], (err, result) => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tmodule.applyPluginsAsyncWaterfall(\"after-resolve\", {
\t\t\t\t\tloaders: loadersPrefix + result[1].join(\"!\") + (result[1].length > 0 ? \"!\" : \"\"),
\t\t\t\t\tresource: result[0],
\t\t\t\t\trecursive: recursive,
\t\t\t\t\tregExp: regExp,
\t\t\t\t\tasync: asyncContext,
\t\t\t\t\tdependencies: dependencies,
\t\t\t\t\tresolveDependencies: module.resolveDependencies.bind(module)
\t\t\t\t}, function(err, result) {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\t// Ignored
\t\t\t\t\tif(!result) return callback();

\t\t\t\t\treturn callback(null, new ContextModule(result.resolveDependencies, result.resource, result.recursive, result.regExp, result.loaders, result.async, dependency.chunkName));
\t\t\t\t});
\t\t\t});
\t\t});
\t}

\tresolveDependencies(fs, resource, recursive, regExp, callback) {
\t\tif(!regExp || !resource)
\t\t\treturn callback(null, []);
\t\t(function addDirectory(directory, callback) {
\t\t\tfs.readdir(directory, (err, files) => {
\t\t\t\tif(err) return callback(err);
\t\t\t\tif(!files || files.length === 0) return callback(null, []);
\t\t\t\tasyncLib.map(files.filter(function(p) {
\t\t\t\t\treturn p.indexOf(\".\") !== 0;
\t\t\t\t}), (seqment, callback) => {

\t\t\t\t\tconst subResource = path.join(directory, seqment);

\t\t\t\t\tfs.stat(subResource, (err, stat) => {
\t\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\t\tif(stat.isDirectory()) {

\t\t\t\t\t\t\tif(!recursive) return callback();
\t\t\t\t\t\t\taddDirectory.call(this, subResource, callback);

\t\t\t\t\t\t} else if(stat.isFile()) {

\t\t\t\t\t\t\tconst obj = {
\t\t\t\t\t\t\t\tcontext: resource,
\t\t\t\t\t\t\t\trequest: \".\" + subResource.substr(resource.length).replace(/\\\\/g, \"/\")
\t\t\t\t\t\t\t};

\t\t\t\t\t\t\tthis.applyPluginsAsyncWaterfall(\"alternatives\", [obj], (err, alternatives) => {
\t\t\t\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\t\t\t\talternatives = alternatives.filter(function(obj) {
\t\t\t\t\t\t\t\t\treturn regExp.test(obj.request);
\t\t\t\t\t\t\t\t}).map(function(obj) {
\t\t\t\t\t\t\t\t\tconst dep = new ContextElementDependency(obj.request);
\t\t\t\t\t\t\t\t\tdep.optional = true;
\t\t\t\t\t\t\t\t\treturn dep;
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tcallback(null, alternatives);
\t\t\t\t\t\t\t});

\t\t\t\t\t\t} else callback();

\t\t\t\t\t});

\t\t\t\t}, (err, result) => {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\tif(!result) return callback(null, []);

\t\t\t\t\tcallback(null, result.filter(function(i) {
\t\t\t\t\t\treturn !!i;
\t\t\t\t\t}).reduce(function(a, i) {
\t\t\t\t\t\treturn a.concat(i);
\t\t\t\t\t}, []));
\t\t\t\t});
\t\t\t});
\t\t}.call(this, resource, callback));
\t}
};
", "node_modules/webpack/lib/ContextModuleFactory.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/ContextModuleFactory.js");
    }
}
