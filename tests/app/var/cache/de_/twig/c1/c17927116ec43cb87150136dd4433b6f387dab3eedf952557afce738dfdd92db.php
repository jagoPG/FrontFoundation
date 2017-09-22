<?php

/* node_modules/webpack/lib/ContextModule.js */
class __TwigTemplate_10d5c37fc68cbe51bb7a6fa21c3082f2d1f3591f6a5c980df6f332d197d20702 extends Twig_Template
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
        $__internal_e4dec0946c4d5b60517d6e8f8c3550dd8e8425523eb736af251044da8f440181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4dec0946c4d5b60517d6e8f8c3550dd8e8425523eb736af251044da8f440181->enter($__internal_e4dec0946c4d5b60517d6e8f8c3550dd8e8425523eb736af251044da8f440181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/ContextModule.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const path = require(\"path\");
const Module = require(\"./Module\");
const OriginalSource = require(\"webpack-sources\").OriginalSource;
const RawSource = require(\"webpack-sources\").RawSource;
const AsyncDependenciesBlock = require(\"./AsyncDependenciesBlock\");
const DepBlockHelpers = require(\"./dependencies/DepBlockHelpers\");
const Template = require(\"./Template\");

class ContextModule extends Module {
\tconstructor(resolveDependencies, context, recursive, regExp, addon, asyncMode, chunkName) {
\t\tsuper();
\t\tthis.resolveDependencies = resolveDependencies;
\t\tthis.context = context;
\t\tthis.recursive = recursive;
\t\tthis.regExp = regExp;
\t\tthis.addon = addon;
\t\tthis.async = asyncMode;
\t\tthis.cacheable = true;
\t\tthis.contextDependencies = [context];
\t\tthis.built = false;
\t\tthis.chunkName = chunkName;
\t}

\tprettyRegExp(regexString) {
\t\t// remove the \"/\" at the front and the beginning
\t\t// \"/foo/\" -> \"foo\"
\t\treturn regexString.substring(1, regexString.length - 1);
\t}

\tcontextify(context, request) {
\t\treturn request.split(\"!\").map(subrequest => {
\t\t\tlet rp = path.relative(context, subrequest);
\t\t\tif(path.sep === \"\\\\\")
\t\t\t\trp = rp.replace(/\\\\/g, \"/\");
\t\t\tif(rp.indexOf(\"../\") !== 0)
\t\t\t\trp = \"./\" + rp;
\t\t\treturn rp;
\t\t}).join(\"!\");
\t}

\tidentifier() {
\t\tlet identifier = this.context;
\t\tif(this.async)
\t\t\tidentifier += ` \${this.async}`;
\t\tif(!this.recursive)
\t\t\tidentifier += \" nonrecursive\";
\t\tif(this.addon)
\t\t\tidentifier += ` \${this.addon}`;
\t\tif(this.regExp)
\t\t\tidentifier += ` \${this.regExp}`;

\t\treturn identifier;
\t}

\treadableIdentifier(requestShortener) {
\t\tlet identifier = requestShortener.shorten(this.context);
\t\tif(this.async)
\t\t\tidentifier += ` \${this.async}`;
\t\tif(!this.recursive)
\t\t\tidentifier += \" nonrecursive\";
\t\tif(this.addon)
\t\t\tidentifier += ` \${requestShortener.shorten(this.addon)}`;
\t\tif(this.regExp)
\t\t\tidentifier += ` \${this.prettyRegExp(this.regExp + \"\")}`;

\t\treturn identifier;
\t}

\tlibIdent(options) {
\t\tlet identifier = this.contextify(options.context, this.context);
\t\tif(this.async)
\t\t\tidentifier += ` \${this.async}`;
\t\tif(this.recursive)
\t\t\tidentifier += \" recursive\";
\t\tif(this.addon)
\t\t\tidentifier += ` \${this.contextify(options.context, this.addon)}`;
\t\tif(this.regExp)
\t\t\tidentifier += ` \${this.prettyRegExp(this.regExp + \"\")}`;

\t\treturn identifier;
\t}

\tneedRebuild(fileTimestamps, contextTimestamps) {
\t\tconst ts = contextTimestamps[this.context];
\t\tif(!ts) {
\t\t\treturn true;
\t\t}

\t\treturn ts >= this.builtTime;
\t}

\tunbuild() {
\t\tthis.built = false;
\t\tsuper.unbuild();
\t}

\tbuild(options, compilation, resolver, fs, callback) {
\t\tthis.built = true;
\t\tthis.builtTime = Date.now();
\t\tthis.resolveDependencies(fs, this.context, this.recursive, this.regExp, (err, dependencies) => {
\t\t\tif(err) return callback(err);

\t\t\t// Reset children
\t\t\tthis.dependencies = [];
\t\t\tthis.blocks = [];

\t\t\t// abort if something failed
\t\t\t// this will create an empty context
\t\t\tif(!dependencies) {
\t\t\t\tcallback();
\t\t\t\treturn;
\t\t\t}

\t\t\t// enhance dependencies with meta info
\t\t\tdependencies.forEach(dep => {
\t\t\t\tdep.loc = dep.userRequest;
\t\t\t\tdep.request = this.addon + dep.request;
\t\t\t});

\t\t\tif(!this.async || this.async === \"eager\") {

\t\t\t\t// if we have an sync or eager context
\t\t\t\t// just add all dependencies and continue
\t\t\t\tthis.dependencies = dependencies;

\t\t\t} else if(this.async === \"lazy-once\") {

\t\t\t\t// for the lazy-once mode create a new async dependency block
\t\t\t\t// and add that block to this context
\t\t\t\tif(dependencies.length > 0) {
\t\t\t\t\tconst block = new AsyncDependenciesBlock(this.chunkName, this);
\t\t\t\t\tdependencies.forEach(dep => {
\t\t\t\t\t\tblock.addDependency(dep);
\t\t\t\t\t});
\t\t\t\t\tthis.addBlock(block);
\t\t\t\t}

\t\t\t} else if(this.async === \"weak\" || this.async === \"async-weak\") {

\t\t\t\t// we mark all dependencies as weak
\t\t\t\tdependencies.forEach(dep => dep.weak = true);
\t\t\t\tthis.dependencies = dependencies;

\t\t\t} else {
\t\t\t\t// if we are lazy create a new async dependency block per dependency
\t\t\t\t// and add all blocks to this context
\t\t\t\tdependencies.forEach((dep, idx) => {
\t\t\t\t\tlet chunkName = this.chunkName;
\t\t\t\t\tif(chunkName) {
\t\t\t\t\t\tif(!/\\[(index|request)\\]/.test(chunkName))
\t\t\t\t\t\t\tchunkName += \"[index]\";
\t\t\t\t\t\tchunkName = chunkName.replace(/\\[index\\]/g, idx);
\t\t\t\t\t\tchunkName = chunkName.replace(/\\[request\\]/g, Template.toPath(dep.userRequest));
\t\t\t\t\t}
\t\t\t\t\tconst block = new AsyncDependenciesBlock(chunkName, dep.module, dep.loc);
\t\t\t\t\tblock.addDependency(dep);
\t\t\t\t\tthis.addBlock(block);
\t\t\t\t});
\t\t\t}
\t\t\tcallback();
\t\t});
\t}

\tgetUserRequestMap(dependencies) {
\t\t// if we filter first we get a new array
\t\t// therefor we dont need to create a clone of dependencies explicitly
\t\t// therefore the order of this is !important!
\t\treturn dependencies
\t\t\t.filter(dependency => dependency.module)
\t\t\t.sort((a, b) => {
\t\t\t\tif(a.userRequest === b.userRequest) {
\t\t\t\t\treturn 0;
\t\t\t\t}
\t\t\t\treturn a.userRequest < b.userRequest ? -1 : 1;
\t\t\t}).reduce(function(map, dep) {
\t\t\t\tmap[dep.userRequest] = dep.module.id;
\t\t\t\treturn map;
\t\t\t}, Object.create(null));
\t}

\tgetSyncSource(dependencies, id) {
\t\tconst map = this.getUserRequestMap(dependencies);
\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackContext(req) {
\treturn __webpack_require__(webpackContextResolve(req));
};
function webpackContextResolve(req) {
\tvar id = map[req];
\tif(!(id + 1)) // check for number or string
\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\treturn id;
};
webpackContext.keys = function webpackContextKeys() {
\treturn Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = \${JSON.stringify(id)};`;
\t}

\tgetWeakSyncSource(dependencies, id) {
\t\tconst map = this.getUserRequestMap(dependencies);
\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackContext(req) {
\tvar id = webpackContextResolve(req);
\tif(!__webpack_require__.m[id])
\t\tthrow new Error(\"Module '\" + req + \"' ('\" + id + \"') is not available (weak dependency)\");
\treturn __webpack_require__(id);
};
function webpackContextResolve(req) {
\tvar id = map[req];
\tif(!(id + 1)) // check for number or string
\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\treturn id;
};
webpackContext.keys = function webpackContextKeys() {
\treturn Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
webpackContext.id = \${JSON.stringify(id)};
module.exports = webpackContext;`;
\t}

\tgetAsyncWeakSource(dependencies, id) {
\t\tconst map = this.getUserRequestMap(dependencies);

\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackAsyncContext(req) {
\treturn webpackAsyncContextResolve(req).then(function(id) {
\t\tif(!__webpack_require__.m[id])
\t\t\tthrow new Error(\"Module '\" + req + \"' ('\" + id + \"') is not available (weak dependency)\");
\t\treturn __webpack_require__(id);
\t});
};
function webpackAsyncContextResolve(req) {
\t// Here Promise.resolve().then() is used instead of new Promise() to prevent
\t// uncatched exception popping up in devtools
\treturn Promise.resolve().then(function() {
\t\tvar id = map[req];
\t\tif(!(id + 1)) // check for number or string
\t\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\t\treturn id;
\t});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
\treturn Object.keys(map);
};
webpackAsyncContext.resolve = webpackAsyncContextResolve;
webpackAsyncContext.id = \${JSON.stringify(id)};
module.exports = webpackAsyncContext;`;
\t}

\tgetEagerSource(dependencies, id) {
\t\tconst map = this.getUserRequestMap(dependencies);
\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackAsyncContext(req) {
\treturn webpackAsyncContextResolve(req).then(__webpack_require__);
};
function webpackAsyncContextResolve(req) {
\t// Here Promise.resolve().then() is used instead of new Promise() to prevent
\t// uncatched exception popping up in devtools
\treturn Promise.resolve().then(function() {
\t\tvar id = map[req];
\t\tif(!(id + 1)) // check for number or string
\t\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\t\treturn id;
\t});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
\treturn Object.keys(map);
};
webpackAsyncContext.resolve = webpackAsyncContextResolve;
webpackAsyncContext.id = \${JSON.stringify(id)};
module.exports = webpackAsyncContext;`;
\t}

\tgetLazyOnceSource(block, dependencies, id, outputOptions, requestShortener) {
\t\tconst promise = DepBlockHelpers.getDepBlockPromise(block, outputOptions, requestShortener, \"lazy-once context\");
\t\tconst map = this.getUserRequestMap(dependencies);
\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackAsyncContext(req) {
\treturn webpackAsyncContextResolve(req).then(__webpack_require__);
};
function webpackAsyncContextResolve(req) {
\treturn \${promise}.then(function() {
\t\tvar id = map[req];
\t\tif(!(id + 1)) // check for number or string
\t\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\t\treturn id;
\t});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
\treturn Object.keys(map);
};
webpackAsyncContext.resolve = webpackAsyncContextResolve;
webpackAsyncContext.id = \${JSON.stringify(id)};
module.exports = webpackAsyncContext;`;
\t}

\tgetLazySource(blocks, id) {
\t\tlet hasMultipleOrNoChunks = false;
\t\tconst map = blocks
\t\t\t.filter(block => block.dependencies[0].module)
\t\t\t.map((block) => ({
\t\t\t\tdependency: block.dependencies[0],
\t\t\t\tblock: block,
\t\t\t\tuserRequest: block.dependencies[0].userRequest
\t\t\t})).sort((a, b) => {
\t\t\t\tif(a.userRequest === b.userRequest) return 0;
\t\t\t\treturn a.userRequest < b.userRequest ? -1 : 1;
\t\t\t}).reduce((map, item) => {
\t\t\t\tconst chunks = item.block.chunks || [];
\t\t\t\tif(chunks.length !== 1) {
\t\t\t\t\thasMultipleOrNoChunks = true;
\t\t\t\t}
\t\t\t\tmap[item.userRequest] = [item.dependency.module.id]
\t\t\t\t\t.concat(chunks.map(chunk => chunk.id));

\t\t\t\treturn map;
\t\t\t}, Object.create(null));

\t\tconst requestPrefix = hasMultipleOrNoChunks ?
\t\t\t\"Promise.all(ids.slice(1).map(__webpack_require__.e))\" :
\t\t\t\"__webpack_require__.e(ids[1])\";

\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackAsyncContext(req) {
\tvar ids = map[req];
\tif(!ids)
\t\treturn Promise.reject(new Error(\"Cannot find module '\" + req + \"'.\"));
\treturn \${requestPrefix}.then(function() {
\t\treturn __webpack_require__(ids[0]);
\t});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
\treturn Object.keys(map);
};
webpackAsyncContext.id = \${JSON.stringify(id)};
module.exports = webpackAsyncContext;`;
\t}

\tgetSourceForEmptyContext(id) {
\t\treturn `function webpackEmptyContext(req) {
\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
}
webpackEmptyContext.keys = function() { return []; };
webpackEmptyContext.resolve = webpackEmptyContext;
module.exports = webpackEmptyContext;
webpackEmptyContext.id = \${JSON.stringify(id)};`;
\t}

\tgetSourceForEmptyAsyncContext(id) {
\t\treturn `function webpackEmptyAsyncContext(req) {
\t// Here Promise.resolve().then() is used instead of new Promise() to prevent
\t// uncatched exception popping up in devtools
\treturn Promise.resolve().then(function() {
\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\t});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = \${JSON.stringify(id)};`;
\t}

\tgetSourceString(asyncMode, outputOptions, requestShortener) {
\t\tif(asyncMode === \"lazy\") {
\t\t\tif(this.blocks && this.blocks.length > 0) {
\t\t\t\treturn this.getLazySource(this.blocks, this.id);
\t\t\t}
\t\t\treturn this.getSourceForEmptyAsyncContext(this.id);
\t\t}
\t\tif(asyncMode === \"eager\") {
\t\t\tif(this.dependencies && this.dependencies.length > 0) {
\t\t\t\treturn this.getEagerSource(this.dependencies, this.id);
\t\t\t}
\t\t\treturn this.getSourceForEmptyAsyncContext(this.id);
\t\t}
\t\tif(asyncMode === \"lazy-once\") {
\t\t\tconst block = this.blocks[0];
\t\t\tif(block) {
\t\t\t\treturn this.getLazyOnceSource(block, block.dependencies, this.id, outputOptions, requestShortener);
\t\t\t}
\t\t\treturn this.getSourceForEmptyAsyncContext(this.id);
\t\t}
\t\tif(asyncMode === \"async-weak\") {
\t\t\tif(this.dependencies && this.dependencies.length > 0) {
\t\t\t\treturn this.getAsyncWeakSource(this.dependencies, this.id);
\t\t\t}
\t\t\treturn this.getSourceForEmptyAsyncContext(this.id);
\t\t}
\t\tif(asyncMode === \"weak\") {
\t\t\tif(this.dependencies && this.dependencies.length > 0) {
\t\t\t\treturn this.getWeakSyncSource(this.dependencies, this.id);
\t\t\t}
\t\t}
\t\tif(this.dependencies && this.dependencies.length > 0) {
\t\t\treturn this.getSyncSource(this.dependencies, this.id);
\t\t}
\t\treturn this.getSourceForEmptyContext(this.id);
\t}

\tgetSource(sourceString) {
\t\tif(this.useSourceMap) {
\t\t\treturn new OriginalSource(sourceString, this.identifier());
\t\t}
\t\treturn new RawSource(sourceString);
\t}

\tsource(dependencyTemplates, outputOptions, requestShortener) {
\t\treturn this.getSource(
\t\t\tthis.getSourceString(this.async, outputOptions, requestShortener)
\t\t);
\t}

\tsize() {
\t\t// base penalty
\t\tconst initialSize = 160;

\t\t// if we dont have dependencies we stop here.
\t\treturn this.dependencies
\t\t\t.reduce((size, dependency) => size + 5 + dependency.userRequest.length, initialSize);
\t}
}

module.exports = ContextModule;
";
        
        $__internal_e4dec0946c4d5b60517d6e8f8c3550dd8e8425523eb736af251044da8f440181->leave($__internal_e4dec0946c4d5b60517d6e8f8c3550dd8e8425523eb736af251044da8f440181_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/ContextModule.js";
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
const path = require(\"path\");
const Module = require(\"./Module\");
const OriginalSource = require(\"webpack-sources\").OriginalSource;
const RawSource = require(\"webpack-sources\").RawSource;
const AsyncDependenciesBlock = require(\"./AsyncDependenciesBlock\");
const DepBlockHelpers = require(\"./dependencies/DepBlockHelpers\");
const Template = require(\"./Template\");

class ContextModule extends Module {
\tconstructor(resolveDependencies, context, recursive, regExp, addon, asyncMode, chunkName) {
\t\tsuper();
\t\tthis.resolveDependencies = resolveDependencies;
\t\tthis.context = context;
\t\tthis.recursive = recursive;
\t\tthis.regExp = regExp;
\t\tthis.addon = addon;
\t\tthis.async = asyncMode;
\t\tthis.cacheable = true;
\t\tthis.contextDependencies = [context];
\t\tthis.built = false;
\t\tthis.chunkName = chunkName;
\t}

\tprettyRegExp(regexString) {
\t\t// remove the \"/\" at the front and the beginning
\t\t// \"/foo/\" -> \"foo\"
\t\treturn regexString.substring(1, regexString.length - 1);
\t}

\tcontextify(context, request) {
\t\treturn request.split(\"!\").map(subrequest => {
\t\t\tlet rp = path.relative(context, subrequest);
\t\t\tif(path.sep === \"\\\\\")
\t\t\t\trp = rp.replace(/\\\\/g, \"/\");
\t\t\tif(rp.indexOf(\"../\") !== 0)
\t\t\t\trp = \"./\" + rp;
\t\t\treturn rp;
\t\t}).join(\"!\");
\t}

\tidentifier() {
\t\tlet identifier = this.context;
\t\tif(this.async)
\t\t\tidentifier += ` \${this.async}`;
\t\tif(!this.recursive)
\t\t\tidentifier += \" nonrecursive\";
\t\tif(this.addon)
\t\t\tidentifier += ` \${this.addon}`;
\t\tif(this.regExp)
\t\t\tidentifier += ` \${this.regExp}`;

\t\treturn identifier;
\t}

\treadableIdentifier(requestShortener) {
\t\tlet identifier = requestShortener.shorten(this.context);
\t\tif(this.async)
\t\t\tidentifier += ` \${this.async}`;
\t\tif(!this.recursive)
\t\t\tidentifier += \" nonrecursive\";
\t\tif(this.addon)
\t\t\tidentifier += ` \${requestShortener.shorten(this.addon)}`;
\t\tif(this.regExp)
\t\t\tidentifier += ` \${this.prettyRegExp(this.regExp + \"\")}`;

\t\treturn identifier;
\t}

\tlibIdent(options) {
\t\tlet identifier = this.contextify(options.context, this.context);
\t\tif(this.async)
\t\t\tidentifier += ` \${this.async}`;
\t\tif(this.recursive)
\t\t\tidentifier += \" recursive\";
\t\tif(this.addon)
\t\t\tidentifier += ` \${this.contextify(options.context, this.addon)}`;
\t\tif(this.regExp)
\t\t\tidentifier += ` \${this.prettyRegExp(this.regExp + \"\")}`;

\t\treturn identifier;
\t}

\tneedRebuild(fileTimestamps, contextTimestamps) {
\t\tconst ts = contextTimestamps[this.context];
\t\tif(!ts) {
\t\t\treturn true;
\t\t}

\t\treturn ts >= this.builtTime;
\t}

\tunbuild() {
\t\tthis.built = false;
\t\tsuper.unbuild();
\t}

\tbuild(options, compilation, resolver, fs, callback) {
\t\tthis.built = true;
\t\tthis.builtTime = Date.now();
\t\tthis.resolveDependencies(fs, this.context, this.recursive, this.regExp, (err, dependencies) => {
\t\t\tif(err) return callback(err);

\t\t\t// Reset children
\t\t\tthis.dependencies = [];
\t\t\tthis.blocks = [];

\t\t\t// abort if something failed
\t\t\t// this will create an empty context
\t\t\tif(!dependencies) {
\t\t\t\tcallback();
\t\t\t\treturn;
\t\t\t}

\t\t\t// enhance dependencies with meta info
\t\t\tdependencies.forEach(dep => {
\t\t\t\tdep.loc = dep.userRequest;
\t\t\t\tdep.request = this.addon + dep.request;
\t\t\t});

\t\t\tif(!this.async || this.async === \"eager\") {

\t\t\t\t// if we have an sync or eager context
\t\t\t\t// just add all dependencies and continue
\t\t\t\tthis.dependencies = dependencies;

\t\t\t} else if(this.async === \"lazy-once\") {

\t\t\t\t// for the lazy-once mode create a new async dependency block
\t\t\t\t// and add that block to this context
\t\t\t\tif(dependencies.length > 0) {
\t\t\t\t\tconst block = new AsyncDependenciesBlock(this.chunkName, this);
\t\t\t\t\tdependencies.forEach(dep => {
\t\t\t\t\t\tblock.addDependency(dep);
\t\t\t\t\t});
\t\t\t\t\tthis.addBlock(block);
\t\t\t\t}

\t\t\t} else if(this.async === \"weak\" || this.async === \"async-weak\") {

\t\t\t\t// we mark all dependencies as weak
\t\t\t\tdependencies.forEach(dep => dep.weak = true);
\t\t\t\tthis.dependencies = dependencies;

\t\t\t} else {
\t\t\t\t// if we are lazy create a new async dependency block per dependency
\t\t\t\t// and add all blocks to this context
\t\t\t\tdependencies.forEach((dep, idx) => {
\t\t\t\t\tlet chunkName = this.chunkName;
\t\t\t\t\tif(chunkName) {
\t\t\t\t\t\tif(!/\\[(index|request)\\]/.test(chunkName))
\t\t\t\t\t\t\tchunkName += \"[index]\";
\t\t\t\t\t\tchunkName = chunkName.replace(/\\[index\\]/g, idx);
\t\t\t\t\t\tchunkName = chunkName.replace(/\\[request\\]/g, Template.toPath(dep.userRequest));
\t\t\t\t\t}
\t\t\t\t\tconst block = new AsyncDependenciesBlock(chunkName, dep.module, dep.loc);
\t\t\t\t\tblock.addDependency(dep);
\t\t\t\t\tthis.addBlock(block);
\t\t\t\t});
\t\t\t}
\t\t\tcallback();
\t\t});
\t}

\tgetUserRequestMap(dependencies) {
\t\t// if we filter first we get a new array
\t\t// therefor we dont need to create a clone of dependencies explicitly
\t\t// therefore the order of this is !important!
\t\treturn dependencies
\t\t\t.filter(dependency => dependency.module)
\t\t\t.sort((a, b) => {
\t\t\t\tif(a.userRequest === b.userRequest) {
\t\t\t\t\treturn 0;
\t\t\t\t}
\t\t\t\treturn a.userRequest < b.userRequest ? -1 : 1;
\t\t\t}).reduce(function(map, dep) {
\t\t\t\tmap[dep.userRequest] = dep.module.id;
\t\t\t\treturn map;
\t\t\t}, Object.create(null));
\t}

\tgetSyncSource(dependencies, id) {
\t\tconst map = this.getUserRequestMap(dependencies);
\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackContext(req) {
\treturn __webpack_require__(webpackContextResolve(req));
};
function webpackContextResolve(req) {
\tvar id = map[req];
\tif(!(id + 1)) // check for number or string
\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\treturn id;
};
webpackContext.keys = function webpackContextKeys() {
\treturn Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = \${JSON.stringify(id)};`;
\t}

\tgetWeakSyncSource(dependencies, id) {
\t\tconst map = this.getUserRequestMap(dependencies);
\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackContext(req) {
\tvar id = webpackContextResolve(req);
\tif(!__webpack_require__.m[id])
\t\tthrow new Error(\"Module '\" + req + \"' ('\" + id + \"') is not available (weak dependency)\");
\treturn __webpack_require__(id);
};
function webpackContextResolve(req) {
\tvar id = map[req];
\tif(!(id + 1)) // check for number or string
\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\treturn id;
};
webpackContext.keys = function webpackContextKeys() {
\treturn Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
webpackContext.id = \${JSON.stringify(id)};
module.exports = webpackContext;`;
\t}

\tgetAsyncWeakSource(dependencies, id) {
\t\tconst map = this.getUserRequestMap(dependencies);

\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackAsyncContext(req) {
\treturn webpackAsyncContextResolve(req).then(function(id) {
\t\tif(!__webpack_require__.m[id])
\t\t\tthrow new Error(\"Module '\" + req + \"' ('\" + id + \"') is not available (weak dependency)\");
\t\treturn __webpack_require__(id);
\t});
};
function webpackAsyncContextResolve(req) {
\t// Here Promise.resolve().then() is used instead of new Promise() to prevent
\t// uncatched exception popping up in devtools
\treturn Promise.resolve().then(function() {
\t\tvar id = map[req];
\t\tif(!(id + 1)) // check for number or string
\t\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\t\treturn id;
\t});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
\treturn Object.keys(map);
};
webpackAsyncContext.resolve = webpackAsyncContextResolve;
webpackAsyncContext.id = \${JSON.stringify(id)};
module.exports = webpackAsyncContext;`;
\t}

\tgetEagerSource(dependencies, id) {
\t\tconst map = this.getUserRequestMap(dependencies);
\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackAsyncContext(req) {
\treturn webpackAsyncContextResolve(req).then(__webpack_require__);
};
function webpackAsyncContextResolve(req) {
\t// Here Promise.resolve().then() is used instead of new Promise() to prevent
\t// uncatched exception popping up in devtools
\treturn Promise.resolve().then(function() {
\t\tvar id = map[req];
\t\tif(!(id + 1)) // check for number or string
\t\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\t\treturn id;
\t});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
\treturn Object.keys(map);
};
webpackAsyncContext.resolve = webpackAsyncContextResolve;
webpackAsyncContext.id = \${JSON.stringify(id)};
module.exports = webpackAsyncContext;`;
\t}

\tgetLazyOnceSource(block, dependencies, id, outputOptions, requestShortener) {
\t\tconst promise = DepBlockHelpers.getDepBlockPromise(block, outputOptions, requestShortener, \"lazy-once context\");
\t\tconst map = this.getUserRequestMap(dependencies);
\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackAsyncContext(req) {
\treturn webpackAsyncContextResolve(req).then(__webpack_require__);
};
function webpackAsyncContextResolve(req) {
\treturn \${promise}.then(function() {
\t\tvar id = map[req];
\t\tif(!(id + 1)) // check for number or string
\t\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\t\treturn id;
\t});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
\treturn Object.keys(map);
};
webpackAsyncContext.resolve = webpackAsyncContextResolve;
webpackAsyncContext.id = \${JSON.stringify(id)};
module.exports = webpackAsyncContext;`;
\t}

\tgetLazySource(blocks, id) {
\t\tlet hasMultipleOrNoChunks = false;
\t\tconst map = blocks
\t\t\t.filter(block => block.dependencies[0].module)
\t\t\t.map((block) => ({
\t\t\t\tdependency: block.dependencies[0],
\t\t\t\tblock: block,
\t\t\t\tuserRequest: block.dependencies[0].userRequest
\t\t\t})).sort((a, b) => {
\t\t\t\tif(a.userRequest === b.userRequest) return 0;
\t\t\t\treturn a.userRequest < b.userRequest ? -1 : 1;
\t\t\t}).reduce((map, item) => {
\t\t\t\tconst chunks = item.block.chunks || [];
\t\t\t\tif(chunks.length !== 1) {
\t\t\t\t\thasMultipleOrNoChunks = true;
\t\t\t\t}
\t\t\t\tmap[item.userRequest] = [item.dependency.module.id]
\t\t\t\t\t.concat(chunks.map(chunk => chunk.id));

\t\t\t\treturn map;
\t\t\t}, Object.create(null));

\t\tconst requestPrefix = hasMultipleOrNoChunks ?
\t\t\t\"Promise.all(ids.slice(1).map(__webpack_require__.e))\" :
\t\t\t\"__webpack_require__.e(ids[1])\";

\t\treturn `var map = \${JSON.stringify(map, null, \"\\t\")};
function webpackAsyncContext(req) {
\tvar ids = map[req];
\tif(!ids)
\t\treturn Promise.reject(new Error(\"Cannot find module '\" + req + \"'.\"));
\treturn \${requestPrefix}.then(function() {
\t\treturn __webpack_require__(ids[0]);
\t});
};
webpackAsyncContext.keys = function webpackAsyncContextKeys() {
\treturn Object.keys(map);
};
webpackAsyncContext.id = \${JSON.stringify(id)};
module.exports = webpackAsyncContext;`;
\t}

\tgetSourceForEmptyContext(id) {
\t\treturn `function webpackEmptyContext(req) {
\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
}
webpackEmptyContext.keys = function() { return []; };
webpackEmptyContext.resolve = webpackEmptyContext;
module.exports = webpackEmptyContext;
webpackEmptyContext.id = \${JSON.stringify(id)};`;
\t}

\tgetSourceForEmptyAsyncContext(id) {
\t\treturn `function webpackEmptyAsyncContext(req) {
\t// Here Promise.resolve().then() is used instead of new Promise() to prevent
\t// uncatched exception popping up in devtools
\treturn Promise.resolve().then(function() {
\t\tthrow new Error(\"Cannot find module '\" + req + \"'.\");
\t});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = \${JSON.stringify(id)};`;
\t}

\tgetSourceString(asyncMode, outputOptions, requestShortener) {
\t\tif(asyncMode === \"lazy\") {
\t\t\tif(this.blocks && this.blocks.length > 0) {
\t\t\t\treturn this.getLazySource(this.blocks, this.id);
\t\t\t}
\t\t\treturn this.getSourceForEmptyAsyncContext(this.id);
\t\t}
\t\tif(asyncMode === \"eager\") {
\t\t\tif(this.dependencies && this.dependencies.length > 0) {
\t\t\t\treturn this.getEagerSource(this.dependencies, this.id);
\t\t\t}
\t\t\treturn this.getSourceForEmptyAsyncContext(this.id);
\t\t}
\t\tif(asyncMode === \"lazy-once\") {
\t\t\tconst block = this.blocks[0];
\t\t\tif(block) {
\t\t\t\treturn this.getLazyOnceSource(block, block.dependencies, this.id, outputOptions, requestShortener);
\t\t\t}
\t\t\treturn this.getSourceForEmptyAsyncContext(this.id);
\t\t}
\t\tif(asyncMode === \"async-weak\") {
\t\t\tif(this.dependencies && this.dependencies.length > 0) {
\t\t\t\treturn this.getAsyncWeakSource(this.dependencies, this.id);
\t\t\t}
\t\t\treturn this.getSourceForEmptyAsyncContext(this.id);
\t\t}
\t\tif(asyncMode === \"weak\") {
\t\t\tif(this.dependencies && this.dependencies.length > 0) {
\t\t\t\treturn this.getWeakSyncSource(this.dependencies, this.id);
\t\t\t}
\t\t}
\t\tif(this.dependencies && this.dependencies.length > 0) {
\t\t\treturn this.getSyncSource(this.dependencies, this.id);
\t\t}
\t\treturn this.getSourceForEmptyContext(this.id);
\t}

\tgetSource(sourceString) {
\t\tif(this.useSourceMap) {
\t\t\treturn new OriginalSource(sourceString, this.identifier());
\t\t}
\t\treturn new RawSource(sourceString);
\t}

\tsource(dependencyTemplates, outputOptions, requestShortener) {
\t\treturn this.getSource(
\t\t\tthis.getSourceString(this.async, outputOptions, requestShortener)
\t\t);
\t}

\tsize() {
\t\t// base penalty
\t\tconst initialSize = 160;

\t\t// if we dont have dependencies we stop here.
\t\treturn this.dependencies
\t\t\t.reduce((size, dependency) => size + 5 + dependency.userRequest.length, initialSize);
\t}
}

module.exports = ContextModule;
", "node_modules/webpack/lib/ContextModule.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/ContextModule.js");
    }
}
