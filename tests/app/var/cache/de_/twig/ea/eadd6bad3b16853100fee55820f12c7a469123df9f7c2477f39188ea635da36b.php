<?php

/* node_modules/webpack/lib/Compiler.js */
class __TwigTemplate_78449c54d79fdc90ae215e3a325a8253e8cccf997418ae60a57c159052b84759 extends Twig_Template
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
        $__internal_6282ca6eb5fb6f88bb8e1c5f1ef34ff89a491b566748982c08d183a28667e22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6282ca6eb5fb6f88bb8e1c5f1ef34ff89a491b566748982c08d183a28667e22a->enter($__internal_6282ca6eb5fb6f88bb8e1c5f1ef34ff89a491b566748982c08d183a28667e22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/Compiler.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const path = require(\"path\");
const Tapable = require(\"tapable\");

const Compilation = require(\"./Compilation\");
const Stats = require(\"./Stats\");
const NormalModuleFactory = require(\"./NormalModuleFactory\");
const ContextModuleFactory = require(\"./ContextModuleFactory\");

const makePathsRelative = require(\"./util/identifier\").makePathsRelative;

class Watching {
\tconstructor(compiler, watchOptions, handler) {
\t\tthis.startTime = null;
\t\tthis.invalid = false;
\t\tthis.handler = handler;
\t\tthis.callbacks = [];
\t\tthis.closed = false;
\t\tif(typeof watchOptions === \"number\") {
\t\t\tthis.watchOptions = {
\t\t\t\taggregateTimeout: watchOptions
\t\t\t};
\t\t} else if(watchOptions && typeof watchOptions === \"object\") {
\t\t\tthis.watchOptions = Object.assign({}, watchOptions);
\t\t} else {
\t\t\tthis.watchOptions = {};
\t\t}
\t\tthis.watchOptions.aggregateTimeout = this.watchOptions.aggregateTimeout || 200;
\t\tthis.compiler = compiler;
\t\tthis.running = true;
\t\tthis.compiler.readRecords(err => {
\t\t\tif(err) return this._done(err);

\t\t\tthis._go();
\t\t});
\t}

\t_go() {
\t\tthis.startTime = Date.now();
\t\tthis.running = true;
\t\tthis.invalid = false;
\t\tthis.compiler.applyPluginsAsync(\"watch-run\", this, err => {
\t\t\tif(err) return this._done(err);
\t\t\tconst onCompiled = (err, compilation) => {
\t\t\t\tif(err) return this._done(err);
\t\t\t\tif(this.invalid) return this._done();

\t\t\t\tif(this.compiler.applyPluginsBailResult(\"should-emit\", compilation) === false) {
\t\t\t\t\treturn this._done(null, compilation);
\t\t\t\t}

\t\t\t\tthis.compiler.emitAssets(compilation, err => {
\t\t\t\t\tif(err) return this._done(err);
\t\t\t\t\tif(this.invalid) return this._done();

\t\t\t\t\tthis.compiler.emitRecords(err => {
\t\t\t\t\t\tif(err) return this._done(err);

\t\t\t\t\t\tif(compilation.applyPluginsBailResult(\"need-additional-pass\")) {
\t\t\t\t\t\t\tcompilation.needAdditionalPass = true;

\t\t\t\t\t\t\tconst stats = new Stats(compilation);
\t\t\t\t\t\t\tstats.startTime = this.startTime;
\t\t\t\t\t\t\tstats.endTime = Date.now();
\t\t\t\t\t\t\tthis.compiler.applyPlugins(\"done\", stats);

\t\t\t\t\t\t\tthis.compiler.applyPluginsAsync(\"additional-pass\", err => {
\t\t\t\t\t\t\t\tif(err) return this._done(err);
\t\t\t\t\t\t\t\tthis.compiler.compile(onCompiled);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\treturn this._done(null, compilation);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t};
\t\t\tthis.compiler.compile(onCompiled);
\t\t});
\t}

\t_getStats(compilation) {
\t\tconst stats = new Stats(compilation);
\t\tstats.startTime = this.startTime;
\t\tstats.endTime = Date.now();
\t\treturn stats;
\t}

\t_done(err, compilation) {
\t\tthis.running = false;
\t\tif(this.invalid) return this._go();

\t\tconst stats = compilation ? this._getStats(compilation) : null;
\t\tif(err) {
\t\t\tthis.compiler.applyPlugins(\"failed\", err);
\t\t\tthis.handler(err, stats);
\t\t\treturn;
\t\t}

\t\tthis.compiler.applyPlugins(\"done\", stats);
\t\tthis.handler(null, stats);
\t\tif(!this.closed) {
\t\t\tthis.watch(compilation.fileDependencies, compilation.contextDependencies, compilation.missingDependencies);
\t\t}
\t\tthis.callbacks.forEach(cb => cb());
\t\tthis.callbacks.length = 0;
\t}

\twatch(files, dirs, missing) {
\t\tthis.pausedWatcher = null;
\t\tthis.watcher = this.compiler.watchFileSystem.watch(files, dirs, missing, this.startTime, this.watchOptions, (err, filesModified, contextModified, missingModified, fileTimestamps, contextTimestamps) => {
\t\t\tthis.pausedWatcher = this.watcher;
\t\t\tthis.watcher = null;
\t\t\tif(err) return this.handler(err);

\t\t\tthis.compiler.fileTimestamps = fileTimestamps;
\t\t\tthis.compiler.contextTimestamps = contextTimestamps;
\t\t\tthis.invalidate();
\t\t}, (fileName, changeTime) => {
\t\t\tthis.compiler.applyPlugins(\"invalid\", fileName, changeTime);
\t\t});
\t}

\tinvalidate(callback) {
\t\tif(callback) {
\t\t\tthis.callbacks.push(callback);
\t\t}
\t\tif(this.watcher) {
\t\t\tthis.pausedWatcher = this.watcher;
\t\t\tthis.watcher.pause();
\t\t\tthis.watcher = null;
\t\t}
\t\tif(this.running) {
\t\t\tthis.invalid = true;
\t\t\treturn false;
\t\t} else {
\t\t\tthis._go();
\t\t}
\t}

\tclose(callback) {
\t\tif(callback === undefined) callback = function() {};

\t\tthis.closed = true;
\t\tif(this.watcher) {
\t\t\tthis.watcher.close();
\t\t\tthis.watcher = null;
\t\t}
\t\tif(this.pausedWatcher) {
\t\t\tthis.pausedWatcher.close();
\t\t\tthis.pausedWatcher = null;
\t\t}
\t\tif(this.running) {
\t\t\tthis.invalid = true;
\t\t\tthis._done = () => {
\t\t\t\tthis.compiler.applyPlugins(\"watch-close\");
\t\t\t\tcallback();
\t\t\t};
\t\t} else {
\t\t\tthis.compiler.applyPlugins(\"watch-close\");
\t\t\tcallback();
\t\t}
\t}
}

class Compiler extends Tapable {
\tconstructor() {
\t\tsuper();
\t\tthis.outputPath = \"\";
\t\tthis.outputFileSystem = null;
\t\tthis.inputFileSystem = null;

\t\tthis.recordsInputPath = null;
\t\tthis.recordsOutputPath = null;
\t\tthis.records = {};

\t\tthis.fileTimestamps = {};
\t\tthis.contextTimestamps = {};

\t\tthis.resolvers = {
\t\t\tnormal: null,
\t\t\tloader: null,
\t\t\tcontext: null
\t\t};
\t\tlet deprecationReported = false;
\t\tthis.parser = {
\t\t\tplugin: (hook, fn) => {
\t\t\t\tif(!deprecationReported) {
\t\t\t\t\tconsole.warn(\"webpack: Using compiler.parser is deprecated.\\n\" +
\t\t\t\t\t\t\"Use compiler.plugin(\\\"compilation\\\", function(compilation, data) {\\n  data.normalModuleFactory.plugin(\\\"parser\\\", function(parser, options) { parser.plugin(/* ... */); });\\n}); instead. \" +
\t\t\t\t\t\t\"It was called \" + new Error().stack.split(\"\\n\")[2].trim() + \".\");
\t\t\t\t\tdeprecationReported = true;
\t\t\t\t}
\t\t\t\tthis.plugin(\"compilation\", (compilation, data) => {
\t\t\t\t\tdata.normalModuleFactory.plugin(\"parser\", parser => {
\t\t\t\t\t\tparser.plugin(hook, fn);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t},
\t\t\tapply: () => {
\t\t\t\tconst args = arguments;
\t\t\t\tif(!deprecationReported) {
\t\t\t\t\tconsole.warn(\"webpack: Using compiler.parser is deprecated.\\n\" +
\t\t\t\t\t\t\"Use compiler.plugin(\\\"compilation\\\", function(compilation, data) {\\n  data.normalModuleFactory.plugin(\\\"parser\\\", function(parser, options) { parser.apply(/* ... */); });\\n}); instead. \" +
\t\t\t\t\t\t\"It was called \" + new Error().stack.split(\"\\n\")[2].trim() + \".\");
\t\t\t\t\tdeprecationReported = true;
\t\t\t\t}
\t\t\t\tthis.plugin(\"compilation\", (compilation, data) => {
\t\t\t\t\tdata.normalModuleFactory.plugin(\"parser\", parser => {
\t\t\t\t\t\tparser.apply.apply(parser, args);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t};

\t\tthis.options = {};
\t}

\twatch(watchOptions, handler) {
\t\tthis.fileTimestamps = {};
\t\tthis.contextTimestamps = {};
\t\tconst watching = new Watching(this, watchOptions, handler);
\t\treturn watching;
\t}

\trun(callback) {
\t\tconst startTime = Date.now();

\t\tconst onCompiled = (err, compilation) => {
\t\t\tif(err) return callback(err);

\t\t\tif(this.applyPluginsBailResult(\"should-emit\", compilation) === false) {
\t\t\t\tconst stats = new Stats(compilation);
\t\t\t\tstats.startTime = startTime;
\t\t\t\tstats.endTime = Date.now();
\t\t\t\tthis.applyPlugins(\"done\", stats);
\t\t\t\treturn callback(null, stats);
\t\t\t}

\t\t\tthis.emitAssets(compilation, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tif(compilation.applyPluginsBailResult(\"need-additional-pass\")) {
\t\t\t\t\tcompilation.needAdditionalPass = true;

\t\t\t\t\tconst stats = new Stats(compilation);
\t\t\t\t\tstats.startTime = startTime;
\t\t\t\t\tstats.endTime = Date.now();
\t\t\t\t\tthis.applyPlugins(\"done\", stats);

\t\t\t\t\tthis.applyPluginsAsync(\"additional-pass\", err => {
\t\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\t\tthis.compile(onCompiled);
\t\t\t\t\t});
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tthis.emitRecords(err => {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\tconst stats = new Stats(compilation);
\t\t\t\t\tstats.startTime = startTime;
\t\t\t\t\tstats.endTime = Date.now();
\t\t\t\t\tthis.applyPlugins(\"done\", stats);
\t\t\t\t\treturn callback(null, stats);
\t\t\t\t});
\t\t\t});
\t\t};

\t\tthis.applyPluginsAsync(\"before-run\", this, err => {
\t\t\tif(err) return callback(err);

\t\t\tthis.applyPluginsAsync(\"run\", this, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tthis.readRecords(err => {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\tthis.compile(onCompiled);
\t\t\t\t});
\t\t\t});
\t\t});
\t}

\trunAsChild(callback) {
\t\tthis.compile((err, compilation) => {
\t\t\tif(err) return callback(err);

\t\t\tthis.parentCompilation.children.push(compilation);
\t\t\tObject.keys(compilation.assets).forEach(name => {
\t\t\t\tthis.parentCompilation.assets[name] = compilation.assets[name];
\t\t\t});

\t\t\tconst entries = Object.keys(compilation.entrypoints).map(name => {
\t\t\t\treturn compilation.entrypoints[name].chunks;
\t\t\t}).reduce((array, chunks) => {
\t\t\t\treturn array.concat(chunks);
\t\t\t}, []);

\t\t\treturn callback(null, entries, compilation);
\t\t});
\t}

\tpurgeInputFileSystem() {
\t\tif(this.inputFileSystem && this.inputFileSystem.purge)
\t\t\tthis.inputFileSystem.purge();
\t}

\temitAssets(compilation, callback) {
\t\tlet outputPath;

\t\tconst emitFiles = (err) => {
\t\t\tif(err) return callback(err);

\t\t\trequire(\"async\").forEach(Object.keys(compilation.assets), (file, callback) => {

\t\t\t\tlet targetFile = file;
\t\t\t\tconst queryStringIdx = targetFile.indexOf(\"?\");
\t\t\t\tif(queryStringIdx >= 0) {
\t\t\t\t\ttargetFile = targetFile.substr(0, queryStringIdx);
\t\t\t\t}

\t\t\t\tconst writeOut = (err) => {
\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\tconst targetPath = this.outputFileSystem.join(outputPath, targetFile);
\t\t\t\t\tconst source = compilation.assets[file];
\t\t\t\t\tif(source.existsAt === targetPath) {
\t\t\t\t\t\tsource.emitted = false;
\t\t\t\t\t\treturn callback();
\t\t\t\t\t}
\t\t\t\t\tlet content = source.source();

\t\t\t\t\tif(!Buffer.isBuffer(content)) {
\t\t\t\t\t\tcontent = new Buffer(content, \"utf8\"); // eslint-disable-line
\t\t\t\t\t}

\t\t\t\t\tsource.existsAt = targetPath;
\t\t\t\t\tsource.emitted = true;
\t\t\t\t\tthis.outputFileSystem.writeFile(targetPath, content, callback);
\t\t\t\t};

\t\t\t\tif(targetFile.match(/\\/|\\\\/)) {
\t\t\t\t\tconst dir = path.dirname(targetFile);
\t\t\t\t\tthis.outputFileSystem.mkdirp(this.outputFileSystem.join(outputPath, dir), writeOut);
\t\t\t\t} else writeOut();

\t\t\t}, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tafterEmit.call(this);
\t\t\t});
\t\t};

\t\tthis.applyPluginsAsync(\"emit\", compilation, err => {
\t\t\tif(err) return callback(err);
\t\t\toutputPath = compilation.getPath(this.outputPath);
\t\t\tthis.outputFileSystem.mkdirp(outputPath, emitFiles);
\t\t});

\t\tfunction afterEmit() {
\t\t\tthis.applyPluginsAsyncSeries1(\"after-emit\", compilation, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\treturn callback();
\t\t\t});
\t\t}

\t}

\temitRecords(callback) {
\t\tif(!this.recordsOutputPath) return callback();
\t\tconst idx1 = this.recordsOutputPath.lastIndexOf(\"/\");
\t\tconst idx2 = this.recordsOutputPath.lastIndexOf(\"\\\\\");
\t\tlet recordsOutputPathDirectory = null;
\t\tif(idx1 > idx2) recordsOutputPathDirectory = this.recordsOutputPath.substr(0, idx1);
\t\tif(idx1 < idx2) recordsOutputPathDirectory = this.recordsOutputPath.substr(0, idx2);
\t\tif(!recordsOutputPathDirectory) return writeFile.call(this);
\t\tthis.outputFileSystem.mkdirp(recordsOutputPathDirectory, err => {
\t\t\tif(err) return callback(err);
\t\t\twriteFile.call(this);
\t\t});

\t\tfunction writeFile() {
\t\t\tthis.outputFileSystem.writeFile(this.recordsOutputPath, JSON.stringify(this.records, undefined, 2), callback);
\t\t}
\t}

\treadRecords(callback) {
\t\tif(!this.recordsInputPath) {
\t\t\tthis.records = {};
\t\t\treturn callback();
\t\t}
\t\tthis.inputFileSystem.stat(this.recordsInputPath, err => {
\t\t\t// It doesn't exist
\t\t\t// We can ignore this.
\t\t\tif(err) return callback();

\t\t\tthis.inputFileSystem.readFile(this.recordsInputPath, (err, content) => {
\t\t\t\tif(err) return callback(err);

\t\t\t\ttry {
\t\t\t\t\tthis.records = JSON.parse(content.toString(\"utf-8\"));
\t\t\t\t} catch(e) {
\t\t\t\t\te.message = \"Cannot parse records: \" + e.message;
\t\t\t\t\treturn callback(e);
\t\t\t\t}

\t\t\t\treturn callback();
\t\t\t});
\t\t});
\t}

\tcreateChildCompiler(compilation, compilerName, compilerIndex, outputOptions, plugins) {
\t\tconst childCompiler = new Compiler();
\t\tif(Array.isArray(plugins)) {
\t\t\tplugins.forEach(plugin => childCompiler.apply(plugin));
\t\t}
\t\tfor(const name in this._plugins) {
\t\t\tif([\"make\", \"compile\", \"emit\", \"after-emit\", \"invalid\", \"done\", \"this-compilation\"].indexOf(name) < 0)
\t\t\t\tchildCompiler._plugins[name] = this._plugins[name].slice();
\t\t}
\t\tchildCompiler.name = compilerName;
\t\tchildCompiler.outputPath = this.outputPath;
\t\tchildCompiler.inputFileSystem = this.inputFileSystem;
\t\tchildCompiler.outputFileSystem = null;
\t\tchildCompiler.resolvers = this.resolvers;
\t\tchildCompiler.fileTimestamps = this.fileTimestamps;
\t\tchildCompiler.contextTimestamps = this.contextTimestamps;

\t\tconst relativeCompilerName = makePathsRelative(this.context, compilerName);
\t\tif(!this.records[relativeCompilerName]) this.records[relativeCompilerName] = [];
\t\tif(this.records[relativeCompilerName][compilerIndex])
\t\t\tchildCompiler.records = this.records[relativeCompilerName][compilerIndex];
\t\telse
\t\t\tthis.records[relativeCompilerName].push(childCompiler.records = {});

\t\tif(this.cache) {
\t\t\tif(!this.cache.children) this.cache.children = {};
\t\t\tif(!this.cache.children[compilerName]) this.cache.children[compilerName] = [];
\t\t\tif(this.cache.children[compilerName][compilerIndex])
\t\t\t\tchildCompiler.cache = this.cache.children[compilerName][compilerIndex];
\t\t\telse
\t\t\t\tthis.cache.children[compilerName].push(childCompiler.cache = {});
\t\t}

\t\tchildCompiler.options = Object.create(this.options);
\t\tchildCompiler.options.output = Object.create(childCompiler.options.output);
\t\tfor(const name in outputOptions) {
\t\t\tchildCompiler.options.output[name] = outputOptions[name];
\t\t}
\t\tchildCompiler.parentCompilation = compilation;
\t\treturn childCompiler;
\t}

\tisChild() {
\t\treturn !!this.parentCompilation;
\t}

\tcreateCompilation() {
\t\treturn new Compilation(this);
\t}

\tnewCompilation(params) {
\t\tconst compilation = this.createCompilation();
\t\tcompilation.fileTimestamps = this.fileTimestamps;
\t\tcompilation.contextTimestamps = this.contextTimestamps;
\t\tcompilation.name = this.name;
\t\tcompilation.records = this.records;
\t\tcompilation.compilationDependencies = params.compilationDependencies;
\t\tthis.applyPlugins(\"this-compilation\", compilation, params);
\t\tthis.applyPlugins(\"compilation\", compilation, params);
\t\treturn compilation;
\t}

\tcreateNormalModuleFactory() {
\t\tconst normalModuleFactory = new NormalModuleFactory(this.options.context, this.resolvers, this.options.module || {});
\t\tthis.applyPlugins(\"normal-module-factory\", normalModuleFactory);
\t\treturn normalModuleFactory;
\t}

\tcreateContextModuleFactory() {
\t\tconst contextModuleFactory = new ContextModuleFactory(this.resolvers, this.inputFileSystem);
\t\tthis.applyPlugins(\"context-module-factory\", contextModuleFactory);
\t\treturn contextModuleFactory;
\t}

\tnewCompilationParams() {
\t\tconst params = {
\t\t\tnormalModuleFactory: this.createNormalModuleFactory(),
\t\t\tcontextModuleFactory: this.createContextModuleFactory(),
\t\t\tcompilationDependencies: []
\t\t};
\t\treturn params;
\t}

\tcompile(callback) {
\t\tconst params = this.newCompilationParams();
\t\tthis.applyPluginsAsync(\"before-compile\", params, err => {
\t\t\tif(err) return callback(err);

\t\t\tthis.applyPlugins(\"compile\", params);

\t\t\tconst compilation = this.newCompilation(params);

\t\t\tthis.applyPluginsParallel(\"make\", compilation, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tcompilation.finish();

\t\t\t\tcompilation.seal(err => {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\tthis.applyPluginsAsync(\"after-compile\", compilation, err => {
\t\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\t\treturn callback(null, compilation);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});
\t}
}

Compiler.Watching = Watching;
module.exports = Compiler;
";
        
        $__internal_6282ca6eb5fb6f88bb8e1c5f1ef34ff89a491b566748982c08d183a28667e22a->leave($__internal_6282ca6eb5fb6f88bb8e1c5f1ef34ff89a491b566748982c08d183a28667e22a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/Compiler.js";
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
const Tapable = require(\"tapable\");

const Compilation = require(\"./Compilation\");
const Stats = require(\"./Stats\");
const NormalModuleFactory = require(\"./NormalModuleFactory\");
const ContextModuleFactory = require(\"./ContextModuleFactory\");

const makePathsRelative = require(\"./util/identifier\").makePathsRelative;

class Watching {
\tconstructor(compiler, watchOptions, handler) {
\t\tthis.startTime = null;
\t\tthis.invalid = false;
\t\tthis.handler = handler;
\t\tthis.callbacks = [];
\t\tthis.closed = false;
\t\tif(typeof watchOptions === \"number\") {
\t\t\tthis.watchOptions = {
\t\t\t\taggregateTimeout: watchOptions
\t\t\t};
\t\t} else if(watchOptions && typeof watchOptions === \"object\") {
\t\t\tthis.watchOptions = Object.assign({}, watchOptions);
\t\t} else {
\t\t\tthis.watchOptions = {};
\t\t}
\t\tthis.watchOptions.aggregateTimeout = this.watchOptions.aggregateTimeout || 200;
\t\tthis.compiler = compiler;
\t\tthis.running = true;
\t\tthis.compiler.readRecords(err => {
\t\t\tif(err) return this._done(err);

\t\t\tthis._go();
\t\t});
\t}

\t_go() {
\t\tthis.startTime = Date.now();
\t\tthis.running = true;
\t\tthis.invalid = false;
\t\tthis.compiler.applyPluginsAsync(\"watch-run\", this, err => {
\t\t\tif(err) return this._done(err);
\t\t\tconst onCompiled = (err, compilation) => {
\t\t\t\tif(err) return this._done(err);
\t\t\t\tif(this.invalid) return this._done();

\t\t\t\tif(this.compiler.applyPluginsBailResult(\"should-emit\", compilation) === false) {
\t\t\t\t\treturn this._done(null, compilation);
\t\t\t\t}

\t\t\t\tthis.compiler.emitAssets(compilation, err => {
\t\t\t\t\tif(err) return this._done(err);
\t\t\t\t\tif(this.invalid) return this._done();

\t\t\t\t\tthis.compiler.emitRecords(err => {
\t\t\t\t\t\tif(err) return this._done(err);

\t\t\t\t\t\tif(compilation.applyPluginsBailResult(\"need-additional-pass\")) {
\t\t\t\t\t\t\tcompilation.needAdditionalPass = true;

\t\t\t\t\t\t\tconst stats = new Stats(compilation);
\t\t\t\t\t\t\tstats.startTime = this.startTime;
\t\t\t\t\t\t\tstats.endTime = Date.now();
\t\t\t\t\t\t\tthis.compiler.applyPlugins(\"done\", stats);

\t\t\t\t\t\t\tthis.compiler.applyPluginsAsync(\"additional-pass\", err => {
\t\t\t\t\t\t\t\tif(err) return this._done(err);
\t\t\t\t\t\t\t\tthis.compiler.compile(onCompiled);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\treturn this._done(null, compilation);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t};
\t\t\tthis.compiler.compile(onCompiled);
\t\t});
\t}

\t_getStats(compilation) {
\t\tconst stats = new Stats(compilation);
\t\tstats.startTime = this.startTime;
\t\tstats.endTime = Date.now();
\t\treturn stats;
\t}

\t_done(err, compilation) {
\t\tthis.running = false;
\t\tif(this.invalid) return this._go();

\t\tconst stats = compilation ? this._getStats(compilation) : null;
\t\tif(err) {
\t\t\tthis.compiler.applyPlugins(\"failed\", err);
\t\t\tthis.handler(err, stats);
\t\t\treturn;
\t\t}

\t\tthis.compiler.applyPlugins(\"done\", stats);
\t\tthis.handler(null, stats);
\t\tif(!this.closed) {
\t\t\tthis.watch(compilation.fileDependencies, compilation.contextDependencies, compilation.missingDependencies);
\t\t}
\t\tthis.callbacks.forEach(cb => cb());
\t\tthis.callbacks.length = 0;
\t}

\twatch(files, dirs, missing) {
\t\tthis.pausedWatcher = null;
\t\tthis.watcher = this.compiler.watchFileSystem.watch(files, dirs, missing, this.startTime, this.watchOptions, (err, filesModified, contextModified, missingModified, fileTimestamps, contextTimestamps) => {
\t\t\tthis.pausedWatcher = this.watcher;
\t\t\tthis.watcher = null;
\t\t\tif(err) return this.handler(err);

\t\t\tthis.compiler.fileTimestamps = fileTimestamps;
\t\t\tthis.compiler.contextTimestamps = contextTimestamps;
\t\t\tthis.invalidate();
\t\t}, (fileName, changeTime) => {
\t\t\tthis.compiler.applyPlugins(\"invalid\", fileName, changeTime);
\t\t});
\t}

\tinvalidate(callback) {
\t\tif(callback) {
\t\t\tthis.callbacks.push(callback);
\t\t}
\t\tif(this.watcher) {
\t\t\tthis.pausedWatcher = this.watcher;
\t\t\tthis.watcher.pause();
\t\t\tthis.watcher = null;
\t\t}
\t\tif(this.running) {
\t\t\tthis.invalid = true;
\t\t\treturn false;
\t\t} else {
\t\t\tthis._go();
\t\t}
\t}

\tclose(callback) {
\t\tif(callback === undefined) callback = function() {};

\t\tthis.closed = true;
\t\tif(this.watcher) {
\t\t\tthis.watcher.close();
\t\t\tthis.watcher = null;
\t\t}
\t\tif(this.pausedWatcher) {
\t\t\tthis.pausedWatcher.close();
\t\t\tthis.pausedWatcher = null;
\t\t}
\t\tif(this.running) {
\t\t\tthis.invalid = true;
\t\t\tthis._done = () => {
\t\t\t\tthis.compiler.applyPlugins(\"watch-close\");
\t\t\t\tcallback();
\t\t\t};
\t\t} else {
\t\t\tthis.compiler.applyPlugins(\"watch-close\");
\t\t\tcallback();
\t\t}
\t}
}

class Compiler extends Tapable {
\tconstructor() {
\t\tsuper();
\t\tthis.outputPath = \"\";
\t\tthis.outputFileSystem = null;
\t\tthis.inputFileSystem = null;

\t\tthis.recordsInputPath = null;
\t\tthis.recordsOutputPath = null;
\t\tthis.records = {};

\t\tthis.fileTimestamps = {};
\t\tthis.contextTimestamps = {};

\t\tthis.resolvers = {
\t\t\tnormal: null,
\t\t\tloader: null,
\t\t\tcontext: null
\t\t};
\t\tlet deprecationReported = false;
\t\tthis.parser = {
\t\t\tplugin: (hook, fn) => {
\t\t\t\tif(!deprecationReported) {
\t\t\t\t\tconsole.warn(\"webpack: Using compiler.parser is deprecated.\\n\" +
\t\t\t\t\t\t\"Use compiler.plugin(\\\"compilation\\\", function(compilation, data) {\\n  data.normalModuleFactory.plugin(\\\"parser\\\", function(parser, options) { parser.plugin(/* ... */); });\\n}); instead. \" +
\t\t\t\t\t\t\"It was called \" + new Error().stack.split(\"\\n\")[2].trim() + \".\");
\t\t\t\t\tdeprecationReported = true;
\t\t\t\t}
\t\t\t\tthis.plugin(\"compilation\", (compilation, data) => {
\t\t\t\t\tdata.normalModuleFactory.plugin(\"parser\", parser => {
\t\t\t\t\t\tparser.plugin(hook, fn);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t},
\t\t\tapply: () => {
\t\t\t\tconst args = arguments;
\t\t\t\tif(!deprecationReported) {
\t\t\t\t\tconsole.warn(\"webpack: Using compiler.parser is deprecated.\\n\" +
\t\t\t\t\t\t\"Use compiler.plugin(\\\"compilation\\\", function(compilation, data) {\\n  data.normalModuleFactory.plugin(\\\"parser\\\", function(parser, options) { parser.apply(/* ... */); });\\n}); instead. \" +
\t\t\t\t\t\t\"It was called \" + new Error().stack.split(\"\\n\")[2].trim() + \".\");
\t\t\t\t\tdeprecationReported = true;
\t\t\t\t}
\t\t\t\tthis.plugin(\"compilation\", (compilation, data) => {
\t\t\t\t\tdata.normalModuleFactory.plugin(\"parser\", parser => {
\t\t\t\t\t\tparser.apply.apply(parser, args);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t};

\t\tthis.options = {};
\t}

\twatch(watchOptions, handler) {
\t\tthis.fileTimestamps = {};
\t\tthis.contextTimestamps = {};
\t\tconst watching = new Watching(this, watchOptions, handler);
\t\treturn watching;
\t}

\trun(callback) {
\t\tconst startTime = Date.now();

\t\tconst onCompiled = (err, compilation) => {
\t\t\tif(err) return callback(err);

\t\t\tif(this.applyPluginsBailResult(\"should-emit\", compilation) === false) {
\t\t\t\tconst stats = new Stats(compilation);
\t\t\t\tstats.startTime = startTime;
\t\t\t\tstats.endTime = Date.now();
\t\t\t\tthis.applyPlugins(\"done\", stats);
\t\t\t\treturn callback(null, stats);
\t\t\t}

\t\t\tthis.emitAssets(compilation, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tif(compilation.applyPluginsBailResult(\"need-additional-pass\")) {
\t\t\t\t\tcompilation.needAdditionalPass = true;

\t\t\t\t\tconst stats = new Stats(compilation);
\t\t\t\t\tstats.startTime = startTime;
\t\t\t\t\tstats.endTime = Date.now();
\t\t\t\t\tthis.applyPlugins(\"done\", stats);

\t\t\t\t\tthis.applyPluginsAsync(\"additional-pass\", err => {
\t\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\t\tthis.compile(onCompiled);
\t\t\t\t\t});
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tthis.emitRecords(err => {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\tconst stats = new Stats(compilation);
\t\t\t\t\tstats.startTime = startTime;
\t\t\t\t\tstats.endTime = Date.now();
\t\t\t\t\tthis.applyPlugins(\"done\", stats);
\t\t\t\t\treturn callback(null, stats);
\t\t\t\t});
\t\t\t});
\t\t};

\t\tthis.applyPluginsAsync(\"before-run\", this, err => {
\t\t\tif(err) return callback(err);

\t\t\tthis.applyPluginsAsync(\"run\", this, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tthis.readRecords(err => {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\tthis.compile(onCompiled);
\t\t\t\t});
\t\t\t});
\t\t});
\t}

\trunAsChild(callback) {
\t\tthis.compile((err, compilation) => {
\t\t\tif(err) return callback(err);

\t\t\tthis.parentCompilation.children.push(compilation);
\t\t\tObject.keys(compilation.assets).forEach(name => {
\t\t\t\tthis.parentCompilation.assets[name] = compilation.assets[name];
\t\t\t});

\t\t\tconst entries = Object.keys(compilation.entrypoints).map(name => {
\t\t\t\treturn compilation.entrypoints[name].chunks;
\t\t\t}).reduce((array, chunks) => {
\t\t\t\treturn array.concat(chunks);
\t\t\t}, []);

\t\t\treturn callback(null, entries, compilation);
\t\t});
\t}

\tpurgeInputFileSystem() {
\t\tif(this.inputFileSystem && this.inputFileSystem.purge)
\t\t\tthis.inputFileSystem.purge();
\t}

\temitAssets(compilation, callback) {
\t\tlet outputPath;

\t\tconst emitFiles = (err) => {
\t\t\tif(err) return callback(err);

\t\t\trequire(\"async\").forEach(Object.keys(compilation.assets), (file, callback) => {

\t\t\t\tlet targetFile = file;
\t\t\t\tconst queryStringIdx = targetFile.indexOf(\"?\");
\t\t\t\tif(queryStringIdx >= 0) {
\t\t\t\t\ttargetFile = targetFile.substr(0, queryStringIdx);
\t\t\t\t}

\t\t\t\tconst writeOut = (err) => {
\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\tconst targetPath = this.outputFileSystem.join(outputPath, targetFile);
\t\t\t\t\tconst source = compilation.assets[file];
\t\t\t\t\tif(source.existsAt === targetPath) {
\t\t\t\t\t\tsource.emitted = false;
\t\t\t\t\t\treturn callback();
\t\t\t\t\t}
\t\t\t\t\tlet content = source.source();

\t\t\t\t\tif(!Buffer.isBuffer(content)) {
\t\t\t\t\t\tcontent = new Buffer(content, \"utf8\"); // eslint-disable-line
\t\t\t\t\t}

\t\t\t\t\tsource.existsAt = targetPath;
\t\t\t\t\tsource.emitted = true;
\t\t\t\t\tthis.outputFileSystem.writeFile(targetPath, content, callback);
\t\t\t\t};

\t\t\t\tif(targetFile.match(/\\/|\\\\/)) {
\t\t\t\t\tconst dir = path.dirname(targetFile);
\t\t\t\t\tthis.outputFileSystem.mkdirp(this.outputFileSystem.join(outputPath, dir), writeOut);
\t\t\t\t} else writeOut();

\t\t\t}, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tafterEmit.call(this);
\t\t\t});
\t\t};

\t\tthis.applyPluginsAsync(\"emit\", compilation, err => {
\t\t\tif(err) return callback(err);
\t\t\toutputPath = compilation.getPath(this.outputPath);
\t\t\tthis.outputFileSystem.mkdirp(outputPath, emitFiles);
\t\t});

\t\tfunction afterEmit() {
\t\t\tthis.applyPluginsAsyncSeries1(\"after-emit\", compilation, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\treturn callback();
\t\t\t});
\t\t}

\t}

\temitRecords(callback) {
\t\tif(!this.recordsOutputPath) return callback();
\t\tconst idx1 = this.recordsOutputPath.lastIndexOf(\"/\");
\t\tconst idx2 = this.recordsOutputPath.lastIndexOf(\"\\\\\");
\t\tlet recordsOutputPathDirectory = null;
\t\tif(idx1 > idx2) recordsOutputPathDirectory = this.recordsOutputPath.substr(0, idx1);
\t\tif(idx1 < idx2) recordsOutputPathDirectory = this.recordsOutputPath.substr(0, idx2);
\t\tif(!recordsOutputPathDirectory) return writeFile.call(this);
\t\tthis.outputFileSystem.mkdirp(recordsOutputPathDirectory, err => {
\t\t\tif(err) return callback(err);
\t\t\twriteFile.call(this);
\t\t});

\t\tfunction writeFile() {
\t\t\tthis.outputFileSystem.writeFile(this.recordsOutputPath, JSON.stringify(this.records, undefined, 2), callback);
\t\t}
\t}

\treadRecords(callback) {
\t\tif(!this.recordsInputPath) {
\t\t\tthis.records = {};
\t\t\treturn callback();
\t\t}
\t\tthis.inputFileSystem.stat(this.recordsInputPath, err => {
\t\t\t// It doesn't exist
\t\t\t// We can ignore this.
\t\t\tif(err) return callback();

\t\t\tthis.inputFileSystem.readFile(this.recordsInputPath, (err, content) => {
\t\t\t\tif(err) return callback(err);

\t\t\t\ttry {
\t\t\t\t\tthis.records = JSON.parse(content.toString(\"utf-8\"));
\t\t\t\t} catch(e) {
\t\t\t\t\te.message = \"Cannot parse records: \" + e.message;
\t\t\t\t\treturn callback(e);
\t\t\t\t}

\t\t\t\treturn callback();
\t\t\t});
\t\t});
\t}

\tcreateChildCompiler(compilation, compilerName, compilerIndex, outputOptions, plugins) {
\t\tconst childCompiler = new Compiler();
\t\tif(Array.isArray(plugins)) {
\t\t\tplugins.forEach(plugin => childCompiler.apply(plugin));
\t\t}
\t\tfor(const name in this._plugins) {
\t\t\tif([\"make\", \"compile\", \"emit\", \"after-emit\", \"invalid\", \"done\", \"this-compilation\"].indexOf(name) < 0)
\t\t\t\tchildCompiler._plugins[name] = this._plugins[name].slice();
\t\t}
\t\tchildCompiler.name = compilerName;
\t\tchildCompiler.outputPath = this.outputPath;
\t\tchildCompiler.inputFileSystem = this.inputFileSystem;
\t\tchildCompiler.outputFileSystem = null;
\t\tchildCompiler.resolvers = this.resolvers;
\t\tchildCompiler.fileTimestamps = this.fileTimestamps;
\t\tchildCompiler.contextTimestamps = this.contextTimestamps;

\t\tconst relativeCompilerName = makePathsRelative(this.context, compilerName);
\t\tif(!this.records[relativeCompilerName]) this.records[relativeCompilerName] = [];
\t\tif(this.records[relativeCompilerName][compilerIndex])
\t\t\tchildCompiler.records = this.records[relativeCompilerName][compilerIndex];
\t\telse
\t\t\tthis.records[relativeCompilerName].push(childCompiler.records = {});

\t\tif(this.cache) {
\t\t\tif(!this.cache.children) this.cache.children = {};
\t\t\tif(!this.cache.children[compilerName]) this.cache.children[compilerName] = [];
\t\t\tif(this.cache.children[compilerName][compilerIndex])
\t\t\t\tchildCompiler.cache = this.cache.children[compilerName][compilerIndex];
\t\t\telse
\t\t\t\tthis.cache.children[compilerName].push(childCompiler.cache = {});
\t\t}

\t\tchildCompiler.options = Object.create(this.options);
\t\tchildCompiler.options.output = Object.create(childCompiler.options.output);
\t\tfor(const name in outputOptions) {
\t\t\tchildCompiler.options.output[name] = outputOptions[name];
\t\t}
\t\tchildCompiler.parentCompilation = compilation;
\t\treturn childCompiler;
\t}

\tisChild() {
\t\treturn !!this.parentCompilation;
\t}

\tcreateCompilation() {
\t\treturn new Compilation(this);
\t}

\tnewCompilation(params) {
\t\tconst compilation = this.createCompilation();
\t\tcompilation.fileTimestamps = this.fileTimestamps;
\t\tcompilation.contextTimestamps = this.contextTimestamps;
\t\tcompilation.name = this.name;
\t\tcompilation.records = this.records;
\t\tcompilation.compilationDependencies = params.compilationDependencies;
\t\tthis.applyPlugins(\"this-compilation\", compilation, params);
\t\tthis.applyPlugins(\"compilation\", compilation, params);
\t\treturn compilation;
\t}

\tcreateNormalModuleFactory() {
\t\tconst normalModuleFactory = new NormalModuleFactory(this.options.context, this.resolvers, this.options.module || {});
\t\tthis.applyPlugins(\"normal-module-factory\", normalModuleFactory);
\t\treturn normalModuleFactory;
\t}

\tcreateContextModuleFactory() {
\t\tconst contextModuleFactory = new ContextModuleFactory(this.resolvers, this.inputFileSystem);
\t\tthis.applyPlugins(\"context-module-factory\", contextModuleFactory);
\t\treturn contextModuleFactory;
\t}

\tnewCompilationParams() {
\t\tconst params = {
\t\t\tnormalModuleFactory: this.createNormalModuleFactory(),
\t\t\tcontextModuleFactory: this.createContextModuleFactory(),
\t\t\tcompilationDependencies: []
\t\t};
\t\treturn params;
\t}

\tcompile(callback) {
\t\tconst params = this.newCompilationParams();
\t\tthis.applyPluginsAsync(\"before-compile\", params, err => {
\t\t\tif(err) return callback(err);

\t\t\tthis.applyPlugins(\"compile\", params);

\t\t\tconst compilation = this.newCompilation(params);

\t\t\tthis.applyPluginsParallel(\"make\", compilation, err => {
\t\t\t\tif(err) return callback(err);

\t\t\t\tcompilation.finish();

\t\t\t\tcompilation.seal(err => {
\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\tthis.applyPluginsAsync(\"after-compile\", compilation, err => {
\t\t\t\t\t\tif(err) return callback(err);

\t\t\t\t\t\treturn callback(null, compilation);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});
\t}
}

Compiler.Watching = Watching;
module.exports = Compiler;
", "node_modules/webpack/lib/Compiler.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/Compiler.js");
    }
}
