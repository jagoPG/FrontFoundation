<?php

/* node_modules/webpack/lib/Compilation.js */
class __TwigTemplate_1f407112858161ef90912c5fd6f836224d304ebb9040c0b06a588dc3ee5b3707 extends Twig_Template
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
        $__internal_cccbe8914a514d71b2c4f360fe4995bffe2f44493e738c08bfa504a2efad476f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccbe8914a514d71b2c4f360fe4995bffe2f44493e738c08bfa504a2efad476f->enter($__internal_cccbe8914a514d71b2c4f360fe4995bffe2f44493e738c08bfa504a2efad476f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/Compilation.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
\t*/
\"use strict\";

const asyncLib = require(\"async\");
const crypto = require(\"crypto\");
const Tapable = require(\"tapable\");
const EntryModuleNotFoundError = require(\"./EntryModuleNotFoundError\");
const ModuleNotFoundError = require(\"./ModuleNotFoundError\");
const ModuleDependencyWarning = require(\"./ModuleDependencyWarning\");
const ModuleDependencyError = require(\"./ModuleDependencyError\");
const Module = require(\"./Module\");
const Chunk = require(\"./Chunk\");
const Entrypoint = require(\"./Entrypoint\");
const MainTemplate = require(\"./MainTemplate\");
const ChunkTemplate = require(\"./ChunkTemplate\");
const HotUpdateChunkTemplate = require(\"./HotUpdateChunkTemplate\");
const ModuleTemplate = require(\"./ModuleTemplate\");
const Dependency = require(\"./Dependency\");
const ChunkRenderError = require(\"./ChunkRenderError\");
const CachedSource = require(\"webpack-sources\").CachedSource;
const Stats = require(\"./Stats\");
const Semaphore = require(\"./util/Semaphore\");

function byId(a, b) {
\tif(a.id < b.id) return -1;
\tif(a.id > b.id) return 1;
\treturn 0;
}

function iterationBlockVariable(variables, fn) {
\tfor(let indexVariable = 0; indexVariable < variables.length; indexVariable++) {
\t\tlet varDep = variables[indexVariable].dependencies;
\t\tfor(let indexVDep = 0; indexVDep < varDep.length; indexVDep++) {
\t\t\tfn(varDep[indexVDep]);
\t\t}
\t}
}

function iterationOfArrayCallback(arr, fn) {
\tfor(let index = 0; index < arr.length; index++) {
\t\tfn(arr[index]);
\t}
}

class Compilation extends Tapable {
\tconstructor(compiler) {
\t\tsuper();
\t\tthis.compiler = compiler;
\t\tthis.resolvers = compiler.resolvers;
\t\tthis.inputFileSystem = compiler.inputFileSystem;

\t\tconst options = this.options = compiler.options;
\t\tthis.outputOptions = options && options.output;
\t\tthis.bail = options && options.bail;
\t\tthis.profile = options && options.profile;
\t\tthis.performance = options && options.performance;

\t\tthis.mainTemplate = new MainTemplate(this.outputOptions);
\t\tthis.chunkTemplate = new ChunkTemplate(this.outputOptions);
\t\tthis.hotUpdateChunkTemplate = new HotUpdateChunkTemplate(this.outputOptions);
\t\tthis.moduleTemplate = new ModuleTemplate(this.outputOptions);

\t\tthis.semaphore = new Semaphore(options.parallelism || 100);

\t\tthis.entries = [];
\t\tthis.preparedChunks = [];
\t\tthis.entrypoints = {};
\t\tthis.chunks = [];
\t\tthis.namedChunks = {};
\t\tthis.modules = [];
\t\tthis._modules = {};
\t\tthis.cache = null;
\t\tthis.records = null;
\t\tthis.nextFreeModuleIndex = undefined;
\t\tthis.nextFreeModuleIndex2 = undefined;
\t\tthis.additionalChunkAssets = [];
\t\tthis.assets = {};
\t\tthis.errors = [];
\t\tthis.warnings = [];
\t\tthis.children = [];
\t\tthis.dependencyFactories = new Map();
\t\tthis.dependencyTemplates = new Map();
\t\tthis.dependencyTemplates.set(\"hash\", \"\");
\t\tthis.childrenCounters = {};
\t}

\tgetStats() {
\t\treturn new Stats(this);
\t}

\ttemplatesPlugin(name, fn) {
\t\tthis.mainTemplate.plugin(name, fn);
\t\tthis.chunkTemplate.plugin(name, fn);
\t}

\taddModule(module, cacheGroup) {
\t\tconst identifier = module.identifier();
\t\tif(this._modules[identifier]) {
\t\t\treturn false;
\t\t}
\t\tconst cacheName = (cacheGroup || \"m\") + identifier;
\t\tif(this.cache && this.cache[cacheName]) {
\t\t\tconst cacheModule = this.cache[cacheName];

\t\t\tlet rebuild = true;
\t\t\tif(!cacheModule.error && cacheModule.cacheable && this.fileTimestamps && this.contextTimestamps) {
\t\t\t\trebuild = cacheModule.needRebuild(this.fileTimestamps, this.contextTimestamps);
\t\t\t}

\t\t\tif(!rebuild) {
\t\t\t\tcacheModule.disconnect();
\t\t\t\tthis._modules[identifier] = cacheModule;
\t\t\t\tthis.modules.push(cacheModule);
\t\t\t\tcacheModule.errors.forEach(err => this.errors.push(err), this);
\t\t\t\tcacheModule.warnings.forEach(err => this.warnings.push(err), this);
\t\t\t\treturn cacheModule;
\t\t\t}
\t\t}
\t\tmodule.unbuild();
\t\tthis._modules[identifier] = module;
\t\tif(this.cache) {
\t\t\tthis.cache[cacheName] = module;
\t\t}
\t\tthis.modules.push(module);
\t\treturn true;
\t}

\tgetModule(module) {
\t\tconst identifier = module.identifier();
\t\treturn this._modules[identifier];
\t}

\tfindModule(identifier) {
\t\treturn this._modules[identifier];
\t}

\tbuildModule(module, optional, origin, dependencies, thisCallback) {
\t\tthis.applyPlugins1(\"build-module\", module);
\t\tif(module.building) return module.building.push(thisCallback);
\t\tconst building = module.building = [thisCallback];

\t\tfunction callback(err) {
\t\t\tmodule.building = undefined;
\t\t\tbuilding.forEach(cb => cb(err));
\t\t}
\t\tmodule.build(this.options, this, this.resolvers.normal, this.inputFileSystem, (error) => {
\t\t\tconst errors = module.errors;
\t\t\tfor(let indexError = 0; indexError < errors.length; indexError++) {
\t\t\t\tconst err = errors[indexError];
\t\t\t\terr.origin = origin;
\t\t\t\terr.dependencies = dependencies;
\t\t\t\tif(optional)
\t\t\t\t\tthis.warnings.push(err);
\t\t\t\telse
\t\t\t\t\tthis.errors.push(err);
\t\t\t}

\t\t\tconst warnings = module.warnings;
\t\t\tfor(let indexWarning = 0; indexWarning < warnings.length; indexWarning++) {
\t\t\t\tconst war = warnings[indexWarning];
\t\t\t\twar.origin = origin;
\t\t\t\twar.dependencies = dependencies;
\t\t\t\tthis.warnings.push(war);
\t\t\t}
\t\t\tmodule.dependencies.sort(Dependency.compare);
\t\t\tif(error) {
\t\t\t\tthis.applyPlugins2(\"failed-module\", module, error);
\t\t\t\treturn callback(error);
\t\t\t}
\t\t\tthis.applyPlugins1(\"succeed-module\", module);
\t\t\treturn callback();
\t\t});
\t}

\tprocessModuleDependencies(module, callback) {
\t\tconst dependencies = [];

\t\tfunction addDependency(dep) {
\t\t\tfor(let i = 0; i < dependencies.length; i++) {
\t\t\t\tif(dep.isEqualResource(dependencies[i][0])) {
\t\t\t\t\treturn dependencies[i].push(dep);
\t\t\t\t}
\t\t\t}
\t\t\tdependencies.push([dep]);
\t\t}

\t\tfunction addDependenciesBlock(block) {
\t\t\tif(block.dependencies) {
\t\t\t\titerationOfArrayCallback(block.dependencies, addDependency);
\t\t\t}
\t\t\tif(block.blocks) {
\t\t\t\titerationOfArrayCallback(block.blocks, addDependenciesBlock);
\t\t\t}
\t\t\tif(block.variables) {
\t\t\t\titerationBlockVariable(block.variables, addDependency);
\t\t\t}
\t\t}
\t\taddDependenciesBlock(module);
\t\tthis.addModuleDependencies(module, dependencies, this.bail, null, true, callback);
\t}

\taddModuleDependencies(module, dependencies, bail, cacheGroup, recursive, callback) {
\t\tlet _this = this;
\t\tconst start = _this.profile && Date.now();

\t\tconst factories = [];
\t\tfor(let i = 0; i < dependencies.length; i++) {
\t\t\tconst factory = _this.dependencyFactories.get(dependencies[i][0].constructor);
\t\t\tif(!factory) {
\t\t\t\treturn callback(new Error(`No module factory available for dependency type: \${dependencies[i][0].constructor.name}`));
\t\t\t}
\t\t\tfactories[i] = [factory, dependencies[i]];
\t\t}
\t\tasyncLib.forEach(factories, function iteratorFactory(item, callback) {
\t\t\tconst dependencies = item[1];

\t\t\tconst errorAndCallback = function errorAndCallback(err) {
\t\t\t\terr.origin = module;
\t\t\t\t_this.errors.push(err);
\t\t\t\tif(bail) {
\t\t\t\t\tcallback(err);
\t\t\t\t} else {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t};
\t\t\tconst warningAndCallback = function warningAndCallback(err) {
\t\t\t\terr.origin = module;
\t\t\t\t_this.warnings.push(err);
\t\t\t\tcallback();
\t\t\t};

\t\t\t_this.semaphore.acquire(() => {
\t\t\t\tconst factory = item[0];
\t\t\t\tfactory.create({
\t\t\t\t\tcontextInfo: {
\t\t\t\t\t\tissuer: module.nameForCondition && module.nameForCondition(),
\t\t\t\t\t\tcompiler: _this.compiler.name
\t\t\t\t\t},
\t\t\t\t\tcontext: module.context,
\t\t\t\t\tdependencies: dependencies
\t\t\t\t}, function factoryCallback(err, dependentModule) {
\t\t\t\t\tlet afterFactory;

\t\t\t\t\tfunction isOptional() {
\t\t\t\t\t\treturn dependencies.filter(d => !d.optional).length === 0;
\t\t\t\t\t}

\t\t\t\t\tfunction errorOrWarningAndCallback(err) {
\t\t\t\t\t\tif(isOptional()) {
\t\t\t\t\t\t\treturn warningAndCallback(err);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn errorAndCallback(err);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tfunction iterationDependencies(depend) {
\t\t\t\t\t\tfor(let index = 0; index < depend.length; index++) {
\t\t\t\t\t\t\tconst dep = depend[index];
\t\t\t\t\t\t\tdep.module = dependentModule;
\t\t\t\t\t\t\tdependentModule.addReason(module, dep);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif(err) {
\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\treturn errorOrWarningAndCallback(new ModuleNotFoundError(module, err, dependencies));
\t\t\t\t\t}
\t\t\t\t\tif(!dependentModule) {
\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\treturn process.nextTick(callback);
\t\t\t\t\t}
\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\tif(!dependentModule.profile) {
\t\t\t\t\t\t\tdependentModule.profile = {};
\t\t\t\t\t\t}
\t\t\t\t\t\tafterFactory = Date.now();
\t\t\t\t\t\tdependentModule.profile.factory = afterFactory - start;
\t\t\t\t\t}

\t\t\t\t\tdependentModule.issuer = module;
\t\t\t\t\tconst newModule = _this.addModule(dependentModule, cacheGroup);

\t\t\t\t\tif(!newModule) { // from cache
\t\t\t\t\t\tdependentModule = _this.getModule(dependentModule);

\t\t\t\t\t\tif(dependentModule.optional) {
\t\t\t\t\t\t\tdependentModule.optional = isOptional();
\t\t\t\t\t\t}

\t\t\t\t\t\titerationDependencies(dependencies);

\t\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\t\tif(!module.profile) {
\t\t\t\t\t\t\t\tmodule.profile = {};
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tconst time = Date.now() - start;
\t\t\t\t\t\t\tif(!module.profile.dependencies || time > module.profile.dependencies) {
\t\t\t\t\t\t\t\tmodule.profile.dependencies = time;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\treturn process.nextTick(callback);
\t\t\t\t\t}

\t\t\t\t\tif(newModule instanceof Module) {
\t\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\t\tnewModule.profile = dependentModule.profile;
\t\t\t\t\t\t}

\t\t\t\t\t\tnewModule.optional = isOptional();
\t\t\t\t\t\tnewModule.issuer = dependentModule.issuer;
\t\t\t\t\t\tdependentModule = newModule;

\t\t\t\t\t\titerationDependencies(dependencies);

\t\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\t\tconst afterBuilding = Date.now();
\t\t\t\t\t\t\tmodule.profile.building = afterBuilding - afterFactory;
\t\t\t\t\t\t}

\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\tif(recursive) {
\t\t\t\t\t\t\treturn process.nextTick(_this.processModuleDependencies.bind(_this, dependentModule, callback));
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn process.nextTick(callback);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tdependentModule.optional = isOptional();

\t\t\t\t\titerationDependencies(dependencies);

\t\t\t\t\t_this.buildModule(dependentModule, isOptional(), module, dependencies, err => {
\t\t\t\t\t\tif(err) {
\t\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\t\treturn errorOrWarningAndCallback(err);
\t\t\t\t\t\t}

\t\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\t\tconst afterBuilding = Date.now();
\t\t\t\t\t\t\tdependentModule.profile.building = afterBuilding - afterFactory;
\t\t\t\t\t\t}

\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\tif(recursive) {
\t\t\t\t\t\t\t_this.processModuleDependencies(dependentModule, callback);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn callback();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t});
\t\t\t});
\t\t}, function finalCallbackAddModuleDependencies(err) {
\t\t\t// In V8, the Error objects keep a reference to the functions on the stack. These warnings &
\t\t\t// errors are created inside closures that keep a reference to the Compilation, so errors are
\t\t\t// leaking the Compilation object. Setting _this to null workarounds the following issue in V8.
\t\t\t// https://bugs.chromium.org/p/chromium/issues/detail?id=612191
\t\t\t_this = null;

\t\t\tif(err) {
\t\t\t\treturn callback(err);
\t\t\t}

\t\t\treturn process.nextTick(callback);
\t\t});
\t}

\t_addModuleChain(context, dependency, onModule, callback) {
\t\tconst start = this.profile && Date.now();

\t\tconst errorAndCallback = this.bail ? (err) => {
\t\t\tcallback(err);
\t\t} : (err) => {
\t\t\terr.dependencies = [dependency];
\t\t\tthis.errors.push(err);
\t\t\tcallback();
\t\t};

\t\tif(typeof dependency !== \"object\" || dependency === null || !dependency.constructor) {
\t\t\tthrow new Error(\"Parameter 'dependency' must be a Dependency\");
\t\t}

\t\tconst moduleFactory = this.dependencyFactories.get(dependency.constructor);
\t\tif(!moduleFactory) {
\t\t\tthrow new Error(`No dependency factory available for this dependency type: \${dependency.constructor.name}`);
\t\t}

\t\tthis.semaphore.acquire(() => {
\t\t\tmoduleFactory.create({
\t\t\t\tcontextInfo: {
\t\t\t\t\tissuer: \"\",
\t\t\t\t\tcompiler: this.compiler.name
\t\t\t\t},
\t\t\t\tcontext: context,
\t\t\t\tdependencies: [dependency]
\t\t\t}, (err, module) => {
\t\t\t\tif(err) {
\t\t\t\t\tthis.semaphore.release();
\t\t\t\t\treturn errorAndCallback(new EntryModuleNotFoundError(err));
\t\t\t\t}

\t\t\t\tlet afterFactory;

\t\t\t\tif(this.profile) {
\t\t\t\t\tif(!module.profile) {
\t\t\t\t\t\tmodule.profile = {};
\t\t\t\t\t}
\t\t\t\t\tafterFactory = Date.now();
\t\t\t\t\tmodule.profile.factory = afterFactory - start;
\t\t\t\t}

\t\t\t\tconst result = this.addModule(module);
\t\t\t\tif(!result) {
\t\t\t\t\tmodule = this.getModule(module);

\t\t\t\t\tonModule(module);

\t\t\t\t\tif(this.profile) {
\t\t\t\t\t\tconst afterBuilding = Date.now();
\t\t\t\t\t\tmodule.profile.building = afterBuilding - afterFactory;
\t\t\t\t\t}

\t\t\t\t\tthis.semaphore.release();
\t\t\t\t\treturn callback(null, module);
\t\t\t\t}

\t\t\t\tif(result instanceof Module) {
\t\t\t\t\tif(this.profile) {
\t\t\t\t\t\tresult.profile = module.profile;
\t\t\t\t\t}

\t\t\t\t\tmodule = result;

\t\t\t\t\tonModule(module);

\t\t\t\t\tmoduleReady.call(this);
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tonModule(module);

\t\t\t\tthis.buildModule(module, false, null, null, (err) => {
\t\t\t\t\tif(err) {
\t\t\t\t\t\tthis.semaphore.release();
\t\t\t\t\t\treturn errorAndCallback(err);
\t\t\t\t\t}

\t\t\t\t\tif(this.profile) {
\t\t\t\t\t\tconst afterBuilding = Date.now();
\t\t\t\t\t\tmodule.profile.building = afterBuilding - afterFactory;
\t\t\t\t\t}

\t\t\t\t\tmoduleReady.call(this);
\t\t\t\t});

\t\t\t\tfunction moduleReady() {
\t\t\t\t\tthis.semaphore.release();
\t\t\t\t\tthis.processModuleDependencies(module, err => {
\t\t\t\t\t\tif(err) {
\t\t\t\t\t\t\treturn callback(err);
\t\t\t\t\t\t}

\t\t\t\t\t\treturn callback(null, module);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t});
\t}

\taddEntry(context, entry, name, callback) {
\t\tconst slot = {
\t\t\tname: name,
\t\t\tmodule: null
\t\t};
\t\tthis.preparedChunks.push(slot);
\t\tthis._addModuleChain(context, entry, (module) => {

\t\t\tentry.module = module;
\t\t\tthis.entries.push(module);
\t\t\tmodule.issuer = null;

\t\t}, (err, module) => {
\t\t\tif(err) {
\t\t\t\treturn callback(err);
\t\t\t}

\t\t\tif(module) {
\t\t\t\tslot.module = module;
\t\t\t} else {
\t\t\t\tconst idx = this.preparedChunks.indexOf(slot);
\t\t\t\tthis.preparedChunks.splice(idx, 1);
\t\t\t}
\t\t\treturn callback(null, module);
\t\t});
\t}

\tprefetch(context, dependency, callback) {
\t\tthis._addModuleChain(context, dependency, module => {

\t\t\tmodule.prefetched = true;
\t\t\tmodule.issuer = null;

\t\t}, callback);
\t}

\trebuildModule(module, thisCallback) {
\t\tif(module.variables.length || module.blocks.length)
\t\t\tthrow new Error(\"Cannot rebuild a complex module with variables or blocks\");
\t\tif(module.rebuilding) {
\t\t\treturn module.rebuilding.push(thisCallback);
\t\t}
\t\tconst rebuilding = module.rebuilding = [thisCallback];

\t\tfunction callback(err) {
\t\t\tmodule.rebuilding = undefined;
\t\t\trebuilding.forEach(cb => cb(err));
\t\t}
\t\tconst deps = module.dependencies.slice();
\t\tthis.buildModule(module, false, module, null, (err) => {
\t\t\tif(err) return callback(err);

\t\t\tthis.processModuleDependencies(module, (err) => {
\t\t\t\tif(err) return callback(err);
\t\t\t\tdeps.forEach(d => {
\t\t\t\t\tif(d.module && d.module.removeReason(module, d)) {
\t\t\t\t\t\tmodule.forEachChunk(chunk => {
\t\t\t\t\t\t\tif(!d.module.hasReasonForChunk(chunk)) {
\t\t\t\t\t\t\t\tif(d.module.removeChunk(chunk)) {
\t\t\t\t\t\t\t\t\tthis.removeChunkFromDependencies(d.module, chunk);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tcallback();
\t\t\t});

\t\t});
\t}

\tfinish() {
\t\tconst modules = this.modules;
\t\tthis.applyPlugins1(\"finish-modules\", modules);

\t\tfor(let index = 0; index < modules.length; index++) {
\t\t\tconst module = modules[index];
\t\t\tthis.reportDependencyErrorsAndWarnings(module, [module]);
\t\t}
\t}

\tunseal() {
\t\tthis.applyPlugins0(\"unseal\");
\t\tthis.chunks.length = 0;
\t\tthis.namedChunks = {};
\t\tthis.additionalChunkAssets.length = 0;
\t\tthis.assets = {};
\t\tthis.modules.forEach(module => module.unseal());
\t}

\tseal(callback) {
\t\tconst self = this;
\t\tself.applyPlugins0(\"seal\");
\t\tself.nextFreeModuleIndex = 0;
\t\tself.nextFreeModuleIndex2 = 0;
\t\tself.preparedChunks.forEach(preparedChunk => {
\t\t\tconst module = preparedChunk.module;
\t\t\tconst chunk = self.addChunk(preparedChunk.name, module);
\t\t\tconst entrypoint = self.entrypoints[chunk.name] = new Entrypoint(chunk.name);
\t\t\tentrypoint.unshiftChunk(chunk);

\t\t\tchunk.addModule(module);
\t\t\tmodule.addChunk(chunk);
\t\t\tchunk.entryModule = module;
\t\t\tself.assignIndex(module);
\t\t\tself.assignDepth(module);
\t\t\tself.processDependenciesBlockForChunk(module, chunk);
\t\t});
\t\tself.sortModules(self.modules);
\t\tself.applyPlugins0(\"optimize\");

\t\twhile(self.applyPluginsBailResult1(\"optimize-modules-basic\", self.modules) ||
\t\t\tself.applyPluginsBailResult1(\"optimize-modules\", self.modules) ||
\t\t\tself.applyPluginsBailResult1(\"optimize-modules-advanced\", self.modules)) { /* empty */ }
\t\tself.applyPlugins1(\"after-optimize-modules\", self.modules);

\t\twhile(self.applyPluginsBailResult1(\"optimize-chunks-basic\", self.chunks) ||
\t\t\tself.applyPluginsBailResult1(\"optimize-chunks\", self.chunks) ||
\t\t\tself.applyPluginsBailResult1(\"optimize-chunks-advanced\", self.chunks)) { /* empty */ }
\t\tself.applyPlugins1(\"after-optimize-chunks\", self.chunks);

\t\tself.applyPluginsAsyncSeries(\"optimize-tree\", self.chunks, self.modules, function sealPart2(err) {
\t\t\tif(err) {
\t\t\t\treturn callback(err);
\t\t\t}

\t\t\tself.applyPlugins2(\"after-optimize-tree\", self.chunks, self.modules);

\t\t\twhile(self.applyPluginsBailResult(\"optimize-chunk-modules-basic\", self.chunks, self.modules) ||
\t\t\t\tself.applyPluginsBailResult(\"optimize-chunk-modules\", self.chunks, self.modules) ||
\t\t\t\tself.applyPluginsBailResult(\"optimize-chunk-modules-advanced\", self.chunks, self.modules)) { /* empty */ }
\t\t\tself.applyPlugins2(\"after-optimize-chunk-modules\", self.chunks, self.modules);

\t\t\tconst shouldRecord = self.applyPluginsBailResult(\"should-record\") !== false;

\t\t\tself.applyPlugins2(\"revive-modules\", self.modules, self.records);
\t\t\tself.applyPlugins1(\"optimize-module-order\", self.modules);
\t\t\tself.applyPlugins1(\"advanced-optimize-module-order\", self.modules);
\t\t\tself.applyPlugins1(\"before-module-ids\", self.modules);
\t\t\tself.applyPlugins1(\"module-ids\", self.modules);
\t\t\tself.applyModuleIds();
\t\t\tself.applyPlugins1(\"optimize-module-ids\", self.modules);
\t\t\tself.applyPlugins1(\"after-optimize-module-ids\", self.modules);

\t\t\tself.sortItemsWithModuleIds();

\t\t\tself.applyPlugins2(\"revive-chunks\", self.chunks, self.records);
\t\t\tself.applyPlugins1(\"optimize-chunk-order\", self.chunks);
\t\t\tself.applyPlugins1(\"before-chunk-ids\", self.chunks);
\t\t\tself.applyChunkIds();
\t\t\tself.applyPlugins1(\"optimize-chunk-ids\", self.chunks);
\t\t\tself.applyPlugins1(\"after-optimize-chunk-ids\", self.chunks);

\t\t\tself.sortItemsWithChunkIds();

\t\t\tif(shouldRecord)
\t\t\t\tself.applyPlugins2(\"record-modules\", self.modules, self.records);
\t\t\tif(shouldRecord)
\t\t\t\tself.applyPlugins2(\"record-chunks\", self.chunks, self.records);

\t\t\tself.applyPlugins0(\"before-hash\");
\t\t\tself.createHash();
\t\t\tself.applyPlugins0(\"after-hash\");

\t\t\tif(shouldRecord)
\t\t\t\tself.applyPlugins1(\"record-hash\", self.records);

\t\t\tself.applyPlugins0(\"before-module-assets\");
\t\t\tself.createModuleAssets();
\t\t\tif(self.applyPluginsBailResult(\"should-generate-chunk-assets\") !== false) {
\t\t\t\tself.applyPlugins0(\"before-chunk-assets\");
\t\t\t\tself.createChunkAssets();
\t\t\t}
\t\t\tself.applyPlugins1(\"additional-chunk-assets\", self.chunks);
\t\t\tself.summarizeDependencies();
\t\t\tif(shouldRecord)
\t\t\t\tself.applyPlugins2(\"record\", self, self.records);

\t\t\tself.applyPluginsAsync(\"additional-assets\", err => {
\t\t\t\tif(err) {
\t\t\t\t\treturn callback(err);
\t\t\t\t}
\t\t\t\tself.applyPluginsAsync(\"optimize-chunk-assets\", self.chunks, err => {
\t\t\t\t\tif(err) {
\t\t\t\t\t\treturn callback(err);
\t\t\t\t\t}
\t\t\t\t\tself.applyPlugins1(\"after-optimize-chunk-assets\", self.chunks);
\t\t\t\t\tself.applyPluginsAsync(\"optimize-assets\", self.assets, err => {
\t\t\t\t\t\tif(err) {
\t\t\t\t\t\t\treturn callback(err);
\t\t\t\t\t\t}
\t\t\t\t\t\tself.applyPlugins1(\"after-optimize-assets\", self.assets);
\t\t\t\t\t\tif(self.applyPluginsBailResult(\"need-additional-seal\")) {
\t\t\t\t\t\t\tself.unseal();
\t\t\t\t\t\t\treturn self.seal(callback);
\t\t\t\t\t\t}
\t\t\t\t\t\treturn self.applyPluginsAsync(\"after-seal\", callback);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});
\t}

\tsortModules(modules) {
\t\tmodules.sort((a, b) => {
\t\t\tif(a.index < b.index) return -1;
\t\t\tif(a.index > b.index) return 1;
\t\t\treturn 0;
\t\t});
\t}

\treportDependencyErrorsAndWarnings(module, blocks) {
\t\tfor(let indexBlock = 0; indexBlock < blocks.length; indexBlock++) {
\t\t\tconst block = blocks[indexBlock];
\t\t\tconst dependencies = block.dependencies;

\t\t\tfor(let indexDep = 0; indexDep < dependencies.length; indexDep++) {
\t\t\t\tconst d = dependencies[indexDep];

\t\t\t\tconst warnings = d.getWarnings();
\t\t\t\tif(warnings) {
\t\t\t\t\tfor(let indexWar = 0; indexWar < warnings.length; indexWar++) {
\t\t\t\t\t\tconst w = warnings[indexWar];

\t\t\t\t\t\tconst warning = new ModuleDependencyWarning(module, w, d.loc);
\t\t\t\t\t\tthis.warnings.push(warning);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tconst errors = d.getErrors();
\t\t\t\tif(errors) {
\t\t\t\t\tfor(let indexErr = 0; indexErr < errors.length; indexErr++) {
\t\t\t\t\t\tconst e = errors[indexErr];

\t\t\t\t\t\tconst error = new ModuleDependencyError(module, e, d.loc);
\t\t\t\t\t\tthis.errors.push(error);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tthis.reportDependencyErrorsAndWarnings(module, block.blocks);
\t\t}
\t}

\taddChunk(name, module, loc) {
\t\tif(name) {
\t\t\tif(Object.prototype.hasOwnProperty.call(this.namedChunks, name)) {
\t\t\t\tconst chunk = this.namedChunks[name];
\t\t\t\tif(module) {
\t\t\t\t\tchunk.addOrigin(module, loc);
\t\t\t\t}
\t\t\t\treturn chunk;
\t\t\t}
\t\t}
\t\tconst chunk = new Chunk(name, module, loc);
\t\tthis.chunks.push(chunk);
\t\tif(name) {
\t\t\tthis.namedChunks[name] = chunk;
\t\t}
\t\treturn chunk;
\t}

\tassignIndex(module) {
\t\tconst _this = this;

\t\tconst queue = [() => {
\t\t\tassignIndexToModule(module);
\t\t}];

\t\tconst iteratorAllDependencies = d => {
\t\t\tqueue.push(() => assignIndexToDependency(d));
\t\t};

\t\tfunction assignIndexToModule(module) {
\t\t\t// enter module
\t\t\tif(typeof module.index !== \"number\") {
\t\t\t\tmodule.index = _this.nextFreeModuleIndex++;

\t\t\t\t// leave module
\t\t\t\tqueue.push(() => module.index2 = _this.nextFreeModuleIndex2++);

\t\t\t\t// enter it as block
\t\t\t\tassignIndexToDependencyBlock(module);
\t\t\t}
\t\t}

\t\tfunction assignIndexToDependency(dependency) {
\t\t\tif(dependency.module) {
\t\t\t\tqueue.push(() => assignIndexToModule(dependency.module));
\t\t\t}
\t\t}

\t\tfunction assignIndexToDependencyBlock(block) {
\t\t\tlet allDependencies = [];

\t\t\tfunction iteratorDependency(d) {
\t\t\t\tallDependencies.push(d);
\t\t\t}

\t\t\tfunction iteratorBlock(b) {
\t\t\t\tqueue.push(() => assignIndexToDependencyBlock(b));
\t\t\t}

\t\t\tif(block.variables) {
\t\t\t\titerationBlockVariable(block.variables, iteratorDependency);
\t\t\t}

\t\t\tif(block.dependencies) {
\t\t\t\titerationOfArrayCallback(block.dependencies, iteratorDependency);
\t\t\t}
\t\t\tif(block.blocks) {
\t\t\t\tconst blocks = block.blocks;
\t\t\t\tlet indexBlock = blocks.length;
\t\t\t\twhile(indexBlock--) {
\t\t\t\t\titeratorBlock(blocks[indexBlock]);
\t\t\t\t}
\t\t\t}

\t\t\tlet indexAll = allDependencies.length;
\t\t\twhile(indexAll--) {
\t\t\t\titeratorAllDependencies(allDependencies[indexAll]);
\t\t\t}
\t\t}

\t\twhile(queue.length) {
\t\t\tqueue.pop()();
\t\t}
\t}

\tassignDepth(module) {
\t\tfunction assignDepthToModule(module, depth) {
\t\t\t// enter module
\t\t\tif(typeof module.depth === \"number\" && module.depth <= depth) return;
\t\t\tmodule.depth = depth;

\t\t\t// enter it as block
\t\t\tassignDepthToDependencyBlock(module, depth + 1);
\t\t}

\t\tfunction assignDepthToDependency(dependency, depth) {
\t\t\tif(dependency.module) {
\t\t\t\tqueue.push(() => assignDepthToModule(dependency.module, depth));
\t\t\t}
\t\t}

\t\tfunction assignDepthToDependencyBlock(block, depth) {
\t\t\tfunction iteratorDependency(d) {
\t\t\t\tassignDepthToDependency(d, depth);
\t\t\t}

\t\t\tfunction iteratorBlock(b) {
\t\t\t\tassignDepthToDependencyBlock(b, depth);
\t\t\t}

\t\t\tif(block.variables) {
\t\t\t\titerationBlockVariable(block.variables, iteratorDependency);
\t\t\t}

\t\t\tif(block.dependencies) {
\t\t\t\titerationOfArrayCallback(block.dependencies, iteratorDependency);
\t\t\t}

\t\t\tif(block.blocks) {
\t\t\t\titerationOfArrayCallback(block.blocks, iteratorBlock);
\t\t\t}
\t\t}

\t\tconst queue = [() => {
\t\t\tassignDepthToModule(module, 0);
\t\t}];
\t\twhile(queue.length) {
\t\t\tqueue.pop()();
\t\t}
\t}

\tprocessDependenciesBlockForChunk(module, chunk) {
\t\tlet block = module;
\t\tconst initialChunk = chunk;
\t\tconst chunkDependencies = new Map(); // Map<Chunk, Array<{Module, Chunk}>>

\t\tconst iteratorBlock = b => {
\t\t\tlet c;
\t\t\tif(!b.chunks) {
\t\t\t\tc = this.addChunk(b.chunkName, b.module, b.loc);
\t\t\t\tb.chunks = [c];
\t\t\t\tc.addBlock(b);
\t\t\t} else {
\t\t\t\tc = b.chunks[0];
\t\t\t}
\t\t\tlet deps = chunkDependencies.get(chunk);
\t\t\tif(!deps) chunkDependencies.set(chunk, deps = []);
\t\t\tdeps.push({
\t\t\t\tchunk: c,
\t\t\t\tmodule
\t\t\t});
\t\t\tqueue.push({
\t\t\t\tblock: b,
\t\t\t\tmodule: null,
\t\t\t\tchunk: c
\t\t\t});
\t\t};

\t\tconst iteratorDependency = d => {
\t\t\tif(!d.module) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif(d.weak) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif(chunk.addModule(d.module)) {
\t\t\t\td.module.addChunk(chunk);
\t\t\t\tqueue.push({
\t\t\t\t\tblock: d.module,
\t\t\t\t\tmodule: d.module,
\t\t\t\t\tchunk
\t\t\t\t});
\t\t\t}
\t\t};

\t\tconst queue = [{
\t\t\tblock,
\t\t\tmodule,
\t\t\tchunk
\t\t}];

\t\twhile(queue.length) {
\t\t\tconst queueItem = queue.pop();
\t\t\tblock = queueItem.block;
\t\t\tmodule = queueItem.module;
\t\t\tchunk = queueItem.chunk;

\t\t\tif(block.variables) {
\t\t\t\titerationBlockVariable(block.variables, iteratorDependency);
\t\t\t}

\t\t\tif(block.dependencies) {
\t\t\t\titerationOfArrayCallback(block.dependencies, iteratorDependency);
\t\t\t}

\t\t\tif(block.blocks) {
\t\t\t\titerationOfArrayCallback(block.blocks, iteratorBlock);
\t\t\t}
\t\t}

\t\tchunk = initialChunk;
\t\tlet chunks = new Set();
\t\tconst queue2 = [{
\t\t\tchunk,
\t\t\tchunks
\t\t}];

\t\tconst filterFn = dep => {
\t\t\tif(chunks.has(dep.chunk)) return false;
\t\t\tfor(const chunk of chunks) {
\t\t\t\tif(chunk.containsModule(dep.module))
\t\t\t\t\treturn false;
\t\t\t}
\t\t\treturn true;
\t\t};

\t\twhile(queue2.length) {
\t\t\tconst queueItem = queue2.pop();
\t\t\tchunk = queueItem.chunk;
\t\t\tchunks = queueItem.chunks;

\t\t\tconst deps = chunkDependencies.get(chunk);
\t\t\tif(!deps) continue;

\t\t\tconst depsFiltered = deps.filter(filterFn);

\t\t\tfor(let i = 0; i < depsFiltered.length; i++) {
\t\t\t\tconst dep = depsFiltered[i];
\t\t\t\tconst depChunk = dep.chunk;
\t\t\t\tchunk.addChunk(depChunk);
\t\t\t\tdepChunk.addParent(chunk);

\t\t\t\tconst newChunks = depsFiltered.length > 1 ? new Set(chunks) : chunks;
\t\t\t\tnewChunks.add(chunk);
\t\t\t\tqueue2.push({
\t\t\t\t\tchunk: depChunk,
\t\t\t\t\tchunks: newChunks
\t\t\t\t});
\t\t\t}
\t\t}
\t}

\tremoveChunkFromDependencies(block, chunk) {
\t\tconst iteratorDependency = d => {
\t\t\tif(!d.module) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif(!d.module.hasReasonForChunk(chunk)) {
\t\t\t\tif(d.module.removeChunk(chunk)) {
\t\t\t\t\tthis.removeChunkFromDependencies(d.module, chunk);
\t\t\t\t}
\t\t\t}
\t\t};

\t\tconst blocks = block.blocks;
\t\tfor(let indexBlock = 0; indexBlock < blocks.length; indexBlock++) {
\t\t\tconst chunks = blocks[indexBlock].chunks;
\t\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\t\tconst blockChunk = chunks[indexChunk];
\t\t\t\tchunk.removeChunk(blockChunk);
\t\t\t\tblockChunk.removeParent(chunk);
\t\t\t\tthis.removeChunkFromDependencies(chunks, blockChunk);
\t\t\t}
\t\t}

\t\tif(block.dependencies) {
\t\t\titerationOfArrayCallback(block.dependencies, iteratorDependency);
\t\t}

\t\tif(block.variables) {
\t\t\titerationBlockVariable(block.variables, iteratorDependency);
\t\t}
\t}

\tapplyModuleIds() {
\t\tlet unusedIds = [];
\t\tlet nextFreeModuleId = 0;
\t\tlet usedIds = [];
\t\t// TODO consider Map when performance has improved https://gist.github.com/sokra/234c077e1299b7369461f1708519c392
\t\tconst usedIdMap = Object.create(null);
\t\tif(this.usedModuleIds) {
\t\t\tObject.keys(this.usedModuleIds).forEach(key => {
\t\t\t\tconst id = this.usedModuleIds[key];
\t\t\t\tif(!usedIdMap[id]) {
\t\t\t\t\tusedIds.push(id);
\t\t\t\t\tusedIdMap[id] = true;
\t\t\t\t}
\t\t\t});
\t\t}

\t\tconst modules1 = this.modules;
\t\tfor(let indexModule1 = 0; indexModule1 < modules1.length; indexModule1++) {
\t\t\tconst module1 = modules1[indexModule1];
\t\t\tif(module1.id && !usedIdMap[module1.id]) {
\t\t\t\tusedIds.push(module1.id);
\t\t\t\tusedIdMap[module1.id] = true;
\t\t\t}
\t\t}

\t\tif(usedIds.length > 0) {
\t\t\tlet usedIdMax = -1;
\t\t\tfor(let index = 0; index < usedIds.length; index++) {
\t\t\t\tconst usedIdKey = usedIds[index];

\t\t\t\tif(typeof usedIdKey !== \"number\") {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tusedIdMax = Math.max(usedIdMax, usedIdKey);
\t\t\t}

\t\t\tlet lengthFreeModules = nextFreeModuleId = usedIdMax + 1;

\t\t\twhile(lengthFreeModules--) {
\t\t\t\tif(!usedIdMap[lengthFreeModules]) {
\t\t\t\t\tunusedIds.push(lengthFreeModules);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tconst modules2 = this.modules;
\t\tfor(let indexModule2 = 0; indexModule2 < modules2.length; indexModule2++) {
\t\t\tconst module2 = modules2[indexModule2];
\t\t\tif(module2.id === null) {
\t\t\t\tif(unusedIds.length > 0)
\t\t\t\t\tmodule2.id = unusedIds.pop();
\t\t\t\telse
\t\t\t\t\tmodule2.id = nextFreeModuleId++;
\t\t\t}
\t\t}
\t}

\tapplyChunkIds() {
\t\tconst unusedIds = [];
\t\tlet nextFreeChunkId = 0;

\t\tfunction getNextFreeChunkId(usedChunkIds) {
\t\t\tconst keyChunks = Object.keys(usedChunkIds);
\t\t\tlet result = -1;

\t\t\tfor(let index = 0; index < keyChunks.length; index++) {
\t\t\t\tconst usedIdKey = keyChunks[index];
\t\t\t\tconst usedIdValue = usedChunkIds[usedIdKey];

\t\t\t\tif(typeof usedIdValue !== \"number\") {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tresult = Math.max(result, usedIdValue);
\t\t\t}

\t\t\treturn result;
\t\t}

\t\tif(this.usedChunkIds) {
\t\t\tnextFreeChunkId = getNextFreeChunkId(this.usedChunkIds) + 1;
\t\t\tlet index = nextFreeChunkId;
\t\t\twhile(index--) {
\t\t\t\tif(this.usedChunkIds[index] !== index) {
\t\t\t\t\tunusedIds.push(index);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tconst chunks = this.chunks;
\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\tconst chunk = chunks[indexChunk];
\t\t\tif(chunk.id === null) {
\t\t\t\tif(unusedIds.length > 0)
\t\t\t\t\tchunk.id = unusedIds.pop();
\t\t\t\telse
\t\t\t\t\tchunk.id = nextFreeChunkId++;
\t\t\t}
\t\t\tif(!chunk.ids) {
\t\t\t\tchunk.ids = [chunk.id];
\t\t\t}
\t\t}
\t}

\tsortItemsWithModuleIds() {
\t\tthis.modules.sort(byId);

\t\tconst modules = this.modules;
\t\tfor(let indexModule = 0; indexModule < modules.length; indexModule++) {
\t\t\tmodules[indexModule].sortItems(false);
\t\t}

\t\tconst chunks = this.chunks;
\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\tchunks[indexChunk].sortItems();
\t\t}
\t}

\tsortItemsWithChunkIds() {
\t\tthis.chunks.sort(byId);

\t\tconst modules = this.modules;
\t\tfor(let indexModule = 0; indexModule < modules.length; indexModule++) {
\t\t\tmodules[indexModule].sortItems(true);
\t\t}

\t\tconst chunks = this.chunks;
\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\tchunks[indexChunk].sortItems();
\t\t}

\t\tconst byMessage = (a, b) => {
\t\t\tconst ma = `\${a.message}`;
\t\t\tconst mb = `\${b.message}`;
\t\t\tif(ma < mb) return -1;
\t\t\tif(mb < ma) return 1;
\t\t\treturn 0;
\t\t};

\t\tthis.errors.sort(byMessage);
\t\tthis.warnings.sort(byMessage);
\t}

\tsummarizeDependencies() {
\t\tfunction filterDups(array) {
\t\t\tconst newArray = [];
\t\t\tfor(let i = 0; i < array.length; i++) {
\t\t\t\tif(i === 0 || array[i - 1] !== array[i])
\t\t\t\t\tnewArray.push(array[i]);
\t\t\t}
\t\t\treturn newArray;
\t\t}
\t\tthis.fileDependencies = (this.compilationDependencies || []).slice();
\t\tthis.contextDependencies = [];
\t\tthis.missingDependencies = [];

\t\tconst children = this.children;
\t\tfor(let indexChildren = 0; indexChildren < children.length; indexChildren++) {
\t\t\tconst child = children[indexChildren];

\t\t\tthis.fileDependencies = this.fileDependencies.concat(child.fileDependencies);
\t\t\tthis.contextDependencies = this.contextDependencies.concat(child.contextDependencies);
\t\t\tthis.missingDependencies = this.missingDependencies.concat(child.missingDependencies);
\t\t}

\t\tconst modules = this.modules;
\t\tfor(let indexModule = 0; indexModule < modules.length; indexModule++) {
\t\t\tconst module = modules[indexModule];

\t\t\tif(module.fileDependencies) {
\t\t\t\tconst fileDependencies = module.fileDependencies;
\t\t\t\tfor(let indexFileDep = 0; indexFileDep < fileDependencies.length; indexFileDep++) {
\t\t\t\t\tthis.fileDependencies.push(fileDependencies[indexFileDep]);
\t\t\t\t}
\t\t\t}
\t\t\tif(module.contextDependencies) {
\t\t\t\tconst contextDependencies = module.contextDependencies;
\t\t\t\tfor(let indexContextDep = 0; indexContextDep < contextDependencies.length; indexContextDep++) {
\t\t\t\t\tthis.contextDependencies.push(contextDependencies[indexContextDep]);
\t\t\t\t}
\t\t\t}
\t\t}
\t\tthis.errors.forEach(error => {
\t\t\tif(Array.isArray(error.missing)) {
\t\t\t\terror.missing.forEach(item => this.missingDependencies.push(item));
\t\t\t}
\t\t});
\t\tthis.fileDependencies.sort();
\t\tthis.fileDependencies = filterDups(this.fileDependencies);
\t\tthis.contextDependencies.sort();
\t\tthis.contextDependencies = filterDups(this.contextDependencies);
\t\tthis.missingDependencies.sort();
\t\tthis.missingDependencies = filterDups(this.missingDependencies);
\t}

\tcreateHash() {
\t\tconst outputOptions = this.outputOptions;
\t\tconst hashFunction = outputOptions.hashFunction;
\t\tconst hashDigest = outputOptions.hashDigest;
\t\tconst hashDigestLength = outputOptions.hashDigestLength;
\t\tconst hash = crypto.createHash(hashFunction);
\t\tif(outputOptions.hashSalt)
\t\t\thash.update(outputOptions.hashSalt);
\t\tthis.mainTemplate.updateHash(hash);
\t\tthis.chunkTemplate.updateHash(hash);
\t\tthis.moduleTemplate.updateHash(hash);
\t\tthis.children.forEach(function(child) {
\t\t\thash.update(child.hash);
\t\t});
\t\tthis.warnings.forEach(function(warning) {
\t\t\thash.update(`\${warning.message}`);
\t\t});
\t\tthis.errors.forEach(function(error) {
\t\t\thash.update(`\${error.message}`);
\t\t});
\t\t// clone needed as sort below is inplace mutation
\t\tconst chunks = this.chunks.slice();
\t\t/**
\t\t * sort here will bring all \"falsy\" values to the beginning
\t\t * this is needed as the \"hasRuntime()\" chunks are dependent on the
\t\t * hashes of the non-runtime chunks.
\t\t */
\t\tchunks.sort((a, b) => {
\t\t\tconst aEntry = a.hasRuntime();
\t\t\tconst bEntry = b.hasRuntime();
\t\t\tif(aEntry && !bEntry) return 1;
\t\t\tif(!aEntry && bEntry) return -1;
\t\t\treturn 0;
\t\t});
\t\tfor(let i = 0; i < chunks.length; i++) {
\t\t\tconst chunk = chunks[i];
\t\t\tconst chunkHash = crypto.createHash(hashFunction);
\t\t\tif(outputOptions.hashSalt)
\t\t\t\tchunkHash.update(outputOptions.hashSalt);
\t\t\tchunk.updateHash(chunkHash);
\t\t\tif(chunk.hasRuntime()) {
\t\t\t\tthis.mainTemplate.updateHashForChunk(chunkHash, chunk);
\t\t\t} else {
\t\t\t\tthis.chunkTemplate.updateHashForChunk(chunkHash, chunk);
\t\t\t}
\t\t\tthis.applyPlugins2(\"chunk-hash\", chunk, chunkHash);
\t\t\tchunk.hash = chunkHash.digest(hashDigest);
\t\t\thash.update(chunk.hash);
\t\t\tchunk.renderedHash = chunk.hash.substr(0, hashDigestLength);
\t\t}
\t\tthis.fullHash = hash.digest(hashDigest);
\t\tthis.hash = this.fullHash.substr(0, hashDigestLength);
\t}

\tmodifyHash(update) {
\t\tconst outputOptions = this.outputOptions;
\t\tconst hashFunction = outputOptions.hashFunction;
\t\tconst hashDigest = outputOptions.hashDigest;
\t\tconst hashDigestLength = outputOptions.hashDigestLength;
\t\tconst hash = crypto.createHash(hashFunction);
\t\thash.update(this.fullHash);
\t\thash.update(update);
\t\tthis.fullHash = hash.digest(hashDigest);
\t\tthis.hash = this.fullHash.substr(0, hashDigestLength);
\t}

\tcreateModuleAssets() {
\t\tfor(let i = 0; i < this.modules.length; i++) {
\t\t\tconst module = this.modules[i];
\t\t\tif(module.assets) {
\t\t\t\tObject.keys(module.assets).forEach((assetName) => {
\t\t\t\t\tconst fileName = this.getPath(assetName);
\t\t\t\t\tthis.assets[fileName] = module.assets[assetName];
\t\t\t\t\tthis.applyPlugins2(\"module-asset\", module, fileName);
\t\t\t\t});
\t\t\t}
\t\t}
\t}

\tcreateChunkAssets() {
\t\tconst outputOptions = this.outputOptions;
\t\tconst filename = outputOptions.filename;
\t\tconst chunkFilename = outputOptions.chunkFilename;
\t\tfor(let i = 0; i < this.chunks.length; i++) {
\t\t\tconst chunk = this.chunks[i];
\t\t\tchunk.files = [];
\t\t\tconst chunkHash = chunk.hash;
\t\t\tlet source;
\t\t\tlet file;
\t\t\tconst filenameTemplate = chunk.filenameTemplate ? chunk.filenameTemplate :
\t\t\t\tchunk.isInitial() ? filename :
\t\t\t\tchunkFilename;
\t\t\ttry {
\t\t\t\tconst useChunkHash = !chunk.hasRuntime() || (this.mainTemplate.useChunkHash && this.mainTemplate.useChunkHash(chunk));
\t\t\t\tconst usedHash = useChunkHash ? chunkHash : this.fullHash;
\t\t\t\tconst cacheName = \"c\" + chunk.id;
\t\t\t\tif(this.cache && this.cache[cacheName] && this.cache[cacheName].hash === usedHash) {
\t\t\t\t\tsource = this.cache[cacheName].source;
\t\t\t\t} else {
\t\t\t\t\tif(chunk.hasRuntime()) {
\t\t\t\t\t\tsource = this.mainTemplate.render(this.hash, chunk, this.moduleTemplate, this.dependencyTemplates);
\t\t\t\t\t} else {
\t\t\t\t\t\tsource = this.chunkTemplate.render(chunk, this.moduleTemplate, this.dependencyTemplates);
\t\t\t\t\t}
\t\t\t\t\tif(this.cache) {
\t\t\t\t\t\tthis.cache[cacheName] = {
\t\t\t\t\t\t\thash: usedHash,
\t\t\t\t\t\t\tsource: source = (source instanceof CachedSource ? source : new CachedSource(source))
\t\t\t\t\t\t};
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tfile = this.getPath(filenameTemplate, {
\t\t\t\t\tnoChunkHash: !useChunkHash,
\t\t\t\t\tchunk
\t\t\t\t});
\t\t\t\tif(this.assets[file])
\t\t\t\t\tthrow new Error(`Conflict: Multiple assets emit to the same filename \${file}`);
\t\t\t\tthis.assets[file] = source;
\t\t\t\tchunk.files.push(file);
\t\t\t\tthis.applyPlugins2(\"chunk-asset\", chunk, file);
\t\t\t} catch(err) {
\t\t\t\tthis.errors.push(new ChunkRenderError(chunk, file || filenameTemplate, err));
\t\t\t}
\t\t}
\t}

\tgetPath(filename, data) {
\t\tdata = data || {};
\t\tdata.hash = data.hash || this.hash;
\t\treturn this.mainTemplate.applyPluginsWaterfall(\"asset-path\", filename, data);
\t}

\tcreateChildCompiler(name, outputOptions, plugins) {
\t\tvar idx = (this.childrenCounters[name] || 0);
\t\tthis.childrenCounters[name] = idx + 1;
\t\treturn this.compiler.createChildCompiler(this, name, idx, outputOptions, plugins);
\t}

\tcheckConstraints() {
\t\tconst usedIds = {};

\t\tconst modules = this.modules;
\t\tfor(let indexModule = 0; indexModule < modules.length; indexModule++) {
\t\t\tconst moduleId = modules[indexModule].id;

\t\t\tif(usedIds[moduleId])
\t\t\t\tthrow new Error(`checkConstraints: duplicate module id \${moduleId}`);
\t\t}

\t\tconst chunks = this.chunks;
\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\tconst chunk = chunks[indexChunk];

\t\t\tif(chunks.indexOf(chunk) !== indexChunk)
\t\t\t\tthrow new Error(`checkConstraints: duplicate chunk in compilation \${chunk.debugId}`);
\t\t\tchunk.checkConstraints();
\t\t}
\t}
}

module.exports = Compilation;
";
        
        $__internal_cccbe8914a514d71b2c4f360fe4995bffe2f44493e738c08bfa504a2efad476f->leave($__internal_cccbe8914a514d71b2c4f360fe4995bffe2f44493e738c08bfa504a2efad476f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/Compilation.js";
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
\t*/
\"use strict\";

const asyncLib = require(\"async\");
const crypto = require(\"crypto\");
const Tapable = require(\"tapable\");
const EntryModuleNotFoundError = require(\"./EntryModuleNotFoundError\");
const ModuleNotFoundError = require(\"./ModuleNotFoundError\");
const ModuleDependencyWarning = require(\"./ModuleDependencyWarning\");
const ModuleDependencyError = require(\"./ModuleDependencyError\");
const Module = require(\"./Module\");
const Chunk = require(\"./Chunk\");
const Entrypoint = require(\"./Entrypoint\");
const MainTemplate = require(\"./MainTemplate\");
const ChunkTemplate = require(\"./ChunkTemplate\");
const HotUpdateChunkTemplate = require(\"./HotUpdateChunkTemplate\");
const ModuleTemplate = require(\"./ModuleTemplate\");
const Dependency = require(\"./Dependency\");
const ChunkRenderError = require(\"./ChunkRenderError\");
const CachedSource = require(\"webpack-sources\").CachedSource;
const Stats = require(\"./Stats\");
const Semaphore = require(\"./util/Semaphore\");

function byId(a, b) {
\tif(a.id < b.id) return -1;
\tif(a.id > b.id) return 1;
\treturn 0;
}

function iterationBlockVariable(variables, fn) {
\tfor(let indexVariable = 0; indexVariable < variables.length; indexVariable++) {
\t\tlet varDep = variables[indexVariable].dependencies;
\t\tfor(let indexVDep = 0; indexVDep < varDep.length; indexVDep++) {
\t\t\tfn(varDep[indexVDep]);
\t\t}
\t}
}

function iterationOfArrayCallback(arr, fn) {
\tfor(let index = 0; index < arr.length; index++) {
\t\tfn(arr[index]);
\t}
}

class Compilation extends Tapable {
\tconstructor(compiler) {
\t\tsuper();
\t\tthis.compiler = compiler;
\t\tthis.resolvers = compiler.resolvers;
\t\tthis.inputFileSystem = compiler.inputFileSystem;

\t\tconst options = this.options = compiler.options;
\t\tthis.outputOptions = options && options.output;
\t\tthis.bail = options && options.bail;
\t\tthis.profile = options && options.profile;
\t\tthis.performance = options && options.performance;

\t\tthis.mainTemplate = new MainTemplate(this.outputOptions);
\t\tthis.chunkTemplate = new ChunkTemplate(this.outputOptions);
\t\tthis.hotUpdateChunkTemplate = new HotUpdateChunkTemplate(this.outputOptions);
\t\tthis.moduleTemplate = new ModuleTemplate(this.outputOptions);

\t\tthis.semaphore = new Semaphore(options.parallelism || 100);

\t\tthis.entries = [];
\t\tthis.preparedChunks = [];
\t\tthis.entrypoints = {};
\t\tthis.chunks = [];
\t\tthis.namedChunks = {};
\t\tthis.modules = [];
\t\tthis._modules = {};
\t\tthis.cache = null;
\t\tthis.records = null;
\t\tthis.nextFreeModuleIndex = undefined;
\t\tthis.nextFreeModuleIndex2 = undefined;
\t\tthis.additionalChunkAssets = [];
\t\tthis.assets = {};
\t\tthis.errors = [];
\t\tthis.warnings = [];
\t\tthis.children = [];
\t\tthis.dependencyFactories = new Map();
\t\tthis.dependencyTemplates = new Map();
\t\tthis.dependencyTemplates.set(\"hash\", \"\");
\t\tthis.childrenCounters = {};
\t}

\tgetStats() {
\t\treturn new Stats(this);
\t}

\ttemplatesPlugin(name, fn) {
\t\tthis.mainTemplate.plugin(name, fn);
\t\tthis.chunkTemplate.plugin(name, fn);
\t}

\taddModule(module, cacheGroup) {
\t\tconst identifier = module.identifier();
\t\tif(this._modules[identifier]) {
\t\t\treturn false;
\t\t}
\t\tconst cacheName = (cacheGroup || \"m\") + identifier;
\t\tif(this.cache && this.cache[cacheName]) {
\t\t\tconst cacheModule = this.cache[cacheName];

\t\t\tlet rebuild = true;
\t\t\tif(!cacheModule.error && cacheModule.cacheable && this.fileTimestamps && this.contextTimestamps) {
\t\t\t\trebuild = cacheModule.needRebuild(this.fileTimestamps, this.contextTimestamps);
\t\t\t}

\t\t\tif(!rebuild) {
\t\t\t\tcacheModule.disconnect();
\t\t\t\tthis._modules[identifier] = cacheModule;
\t\t\t\tthis.modules.push(cacheModule);
\t\t\t\tcacheModule.errors.forEach(err => this.errors.push(err), this);
\t\t\t\tcacheModule.warnings.forEach(err => this.warnings.push(err), this);
\t\t\t\treturn cacheModule;
\t\t\t}
\t\t}
\t\tmodule.unbuild();
\t\tthis._modules[identifier] = module;
\t\tif(this.cache) {
\t\t\tthis.cache[cacheName] = module;
\t\t}
\t\tthis.modules.push(module);
\t\treturn true;
\t}

\tgetModule(module) {
\t\tconst identifier = module.identifier();
\t\treturn this._modules[identifier];
\t}

\tfindModule(identifier) {
\t\treturn this._modules[identifier];
\t}

\tbuildModule(module, optional, origin, dependencies, thisCallback) {
\t\tthis.applyPlugins1(\"build-module\", module);
\t\tif(module.building) return module.building.push(thisCallback);
\t\tconst building = module.building = [thisCallback];

\t\tfunction callback(err) {
\t\t\tmodule.building = undefined;
\t\t\tbuilding.forEach(cb => cb(err));
\t\t}
\t\tmodule.build(this.options, this, this.resolvers.normal, this.inputFileSystem, (error) => {
\t\t\tconst errors = module.errors;
\t\t\tfor(let indexError = 0; indexError < errors.length; indexError++) {
\t\t\t\tconst err = errors[indexError];
\t\t\t\terr.origin = origin;
\t\t\t\terr.dependencies = dependencies;
\t\t\t\tif(optional)
\t\t\t\t\tthis.warnings.push(err);
\t\t\t\telse
\t\t\t\t\tthis.errors.push(err);
\t\t\t}

\t\t\tconst warnings = module.warnings;
\t\t\tfor(let indexWarning = 0; indexWarning < warnings.length; indexWarning++) {
\t\t\t\tconst war = warnings[indexWarning];
\t\t\t\twar.origin = origin;
\t\t\t\twar.dependencies = dependencies;
\t\t\t\tthis.warnings.push(war);
\t\t\t}
\t\t\tmodule.dependencies.sort(Dependency.compare);
\t\t\tif(error) {
\t\t\t\tthis.applyPlugins2(\"failed-module\", module, error);
\t\t\t\treturn callback(error);
\t\t\t}
\t\t\tthis.applyPlugins1(\"succeed-module\", module);
\t\t\treturn callback();
\t\t});
\t}

\tprocessModuleDependencies(module, callback) {
\t\tconst dependencies = [];

\t\tfunction addDependency(dep) {
\t\t\tfor(let i = 0; i < dependencies.length; i++) {
\t\t\t\tif(dep.isEqualResource(dependencies[i][0])) {
\t\t\t\t\treturn dependencies[i].push(dep);
\t\t\t\t}
\t\t\t}
\t\t\tdependencies.push([dep]);
\t\t}

\t\tfunction addDependenciesBlock(block) {
\t\t\tif(block.dependencies) {
\t\t\t\titerationOfArrayCallback(block.dependencies, addDependency);
\t\t\t}
\t\t\tif(block.blocks) {
\t\t\t\titerationOfArrayCallback(block.blocks, addDependenciesBlock);
\t\t\t}
\t\t\tif(block.variables) {
\t\t\t\titerationBlockVariable(block.variables, addDependency);
\t\t\t}
\t\t}
\t\taddDependenciesBlock(module);
\t\tthis.addModuleDependencies(module, dependencies, this.bail, null, true, callback);
\t}

\taddModuleDependencies(module, dependencies, bail, cacheGroup, recursive, callback) {
\t\tlet _this = this;
\t\tconst start = _this.profile && Date.now();

\t\tconst factories = [];
\t\tfor(let i = 0; i < dependencies.length; i++) {
\t\t\tconst factory = _this.dependencyFactories.get(dependencies[i][0].constructor);
\t\t\tif(!factory) {
\t\t\t\treturn callback(new Error(`No module factory available for dependency type: \${dependencies[i][0].constructor.name}`));
\t\t\t}
\t\t\tfactories[i] = [factory, dependencies[i]];
\t\t}
\t\tasyncLib.forEach(factories, function iteratorFactory(item, callback) {
\t\t\tconst dependencies = item[1];

\t\t\tconst errorAndCallback = function errorAndCallback(err) {
\t\t\t\terr.origin = module;
\t\t\t\t_this.errors.push(err);
\t\t\t\tif(bail) {
\t\t\t\t\tcallback(err);
\t\t\t\t} else {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t};
\t\t\tconst warningAndCallback = function warningAndCallback(err) {
\t\t\t\terr.origin = module;
\t\t\t\t_this.warnings.push(err);
\t\t\t\tcallback();
\t\t\t};

\t\t\t_this.semaphore.acquire(() => {
\t\t\t\tconst factory = item[0];
\t\t\t\tfactory.create({
\t\t\t\t\tcontextInfo: {
\t\t\t\t\t\tissuer: module.nameForCondition && module.nameForCondition(),
\t\t\t\t\t\tcompiler: _this.compiler.name
\t\t\t\t\t},
\t\t\t\t\tcontext: module.context,
\t\t\t\t\tdependencies: dependencies
\t\t\t\t}, function factoryCallback(err, dependentModule) {
\t\t\t\t\tlet afterFactory;

\t\t\t\t\tfunction isOptional() {
\t\t\t\t\t\treturn dependencies.filter(d => !d.optional).length === 0;
\t\t\t\t\t}

\t\t\t\t\tfunction errorOrWarningAndCallback(err) {
\t\t\t\t\t\tif(isOptional()) {
\t\t\t\t\t\t\treturn warningAndCallback(err);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn errorAndCallback(err);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tfunction iterationDependencies(depend) {
\t\t\t\t\t\tfor(let index = 0; index < depend.length; index++) {
\t\t\t\t\t\t\tconst dep = depend[index];
\t\t\t\t\t\t\tdep.module = dependentModule;
\t\t\t\t\t\t\tdependentModule.addReason(module, dep);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif(err) {
\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\treturn errorOrWarningAndCallback(new ModuleNotFoundError(module, err, dependencies));
\t\t\t\t\t}
\t\t\t\t\tif(!dependentModule) {
\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\treturn process.nextTick(callback);
\t\t\t\t\t}
\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\tif(!dependentModule.profile) {
\t\t\t\t\t\t\tdependentModule.profile = {};
\t\t\t\t\t\t}
\t\t\t\t\t\tafterFactory = Date.now();
\t\t\t\t\t\tdependentModule.profile.factory = afterFactory - start;
\t\t\t\t\t}

\t\t\t\t\tdependentModule.issuer = module;
\t\t\t\t\tconst newModule = _this.addModule(dependentModule, cacheGroup);

\t\t\t\t\tif(!newModule) { // from cache
\t\t\t\t\t\tdependentModule = _this.getModule(dependentModule);

\t\t\t\t\t\tif(dependentModule.optional) {
\t\t\t\t\t\t\tdependentModule.optional = isOptional();
\t\t\t\t\t\t}

\t\t\t\t\t\titerationDependencies(dependencies);

\t\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\t\tif(!module.profile) {
\t\t\t\t\t\t\t\tmodule.profile = {};
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tconst time = Date.now() - start;
\t\t\t\t\t\t\tif(!module.profile.dependencies || time > module.profile.dependencies) {
\t\t\t\t\t\t\t\tmodule.profile.dependencies = time;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\treturn process.nextTick(callback);
\t\t\t\t\t}

\t\t\t\t\tif(newModule instanceof Module) {
\t\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\t\tnewModule.profile = dependentModule.profile;
\t\t\t\t\t\t}

\t\t\t\t\t\tnewModule.optional = isOptional();
\t\t\t\t\t\tnewModule.issuer = dependentModule.issuer;
\t\t\t\t\t\tdependentModule = newModule;

\t\t\t\t\t\titerationDependencies(dependencies);

\t\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\t\tconst afterBuilding = Date.now();
\t\t\t\t\t\t\tmodule.profile.building = afterBuilding - afterFactory;
\t\t\t\t\t\t}

\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\tif(recursive) {
\t\t\t\t\t\t\treturn process.nextTick(_this.processModuleDependencies.bind(_this, dependentModule, callback));
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn process.nextTick(callback);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tdependentModule.optional = isOptional();

\t\t\t\t\titerationDependencies(dependencies);

\t\t\t\t\t_this.buildModule(dependentModule, isOptional(), module, dependencies, err => {
\t\t\t\t\t\tif(err) {
\t\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\t\treturn errorOrWarningAndCallback(err);
\t\t\t\t\t\t}

\t\t\t\t\t\tif(_this.profile) {
\t\t\t\t\t\t\tconst afterBuilding = Date.now();
\t\t\t\t\t\t\tdependentModule.profile.building = afterBuilding - afterFactory;
\t\t\t\t\t\t}

\t\t\t\t\t\t_this.semaphore.release();
\t\t\t\t\t\tif(recursive) {
\t\t\t\t\t\t\t_this.processModuleDependencies(dependentModule, callback);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn callback();
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t});
\t\t\t});
\t\t}, function finalCallbackAddModuleDependencies(err) {
\t\t\t// In V8, the Error objects keep a reference to the functions on the stack. These warnings &
\t\t\t// errors are created inside closures that keep a reference to the Compilation, so errors are
\t\t\t// leaking the Compilation object. Setting _this to null workarounds the following issue in V8.
\t\t\t// https://bugs.chromium.org/p/chromium/issues/detail?id=612191
\t\t\t_this = null;

\t\t\tif(err) {
\t\t\t\treturn callback(err);
\t\t\t}

\t\t\treturn process.nextTick(callback);
\t\t});
\t}

\t_addModuleChain(context, dependency, onModule, callback) {
\t\tconst start = this.profile && Date.now();

\t\tconst errorAndCallback = this.bail ? (err) => {
\t\t\tcallback(err);
\t\t} : (err) => {
\t\t\terr.dependencies = [dependency];
\t\t\tthis.errors.push(err);
\t\t\tcallback();
\t\t};

\t\tif(typeof dependency !== \"object\" || dependency === null || !dependency.constructor) {
\t\t\tthrow new Error(\"Parameter 'dependency' must be a Dependency\");
\t\t}

\t\tconst moduleFactory = this.dependencyFactories.get(dependency.constructor);
\t\tif(!moduleFactory) {
\t\t\tthrow new Error(`No dependency factory available for this dependency type: \${dependency.constructor.name}`);
\t\t}

\t\tthis.semaphore.acquire(() => {
\t\t\tmoduleFactory.create({
\t\t\t\tcontextInfo: {
\t\t\t\t\tissuer: \"\",
\t\t\t\t\tcompiler: this.compiler.name
\t\t\t\t},
\t\t\t\tcontext: context,
\t\t\t\tdependencies: [dependency]
\t\t\t}, (err, module) => {
\t\t\t\tif(err) {
\t\t\t\t\tthis.semaphore.release();
\t\t\t\t\treturn errorAndCallback(new EntryModuleNotFoundError(err));
\t\t\t\t}

\t\t\t\tlet afterFactory;

\t\t\t\tif(this.profile) {
\t\t\t\t\tif(!module.profile) {
\t\t\t\t\t\tmodule.profile = {};
\t\t\t\t\t}
\t\t\t\t\tafterFactory = Date.now();
\t\t\t\t\tmodule.profile.factory = afterFactory - start;
\t\t\t\t}

\t\t\t\tconst result = this.addModule(module);
\t\t\t\tif(!result) {
\t\t\t\t\tmodule = this.getModule(module);

\t\t\t\t\tonModule(module);

\t\t\t\t\tif(this.profile) {
\t\t\t\t\t\tconst afterBuilding = Date.now();
\t\t\t\t\t\tmodule.profile.building = afterBuilding - afterFactory;
\t\t\t\t\t}

\t\t\t\t\tthis.semaphore.release();
\t\t\t\t\treturn callback(null, module);
\t\t\t\t}

\t\t\t\tif(result instanceof Module) {
\t\t\t\t\tif(this.profile) {
\t\t\t\t\t\tresult.profile = module.profile;
\t\t\t\t\t}

\t\t\t\t\tmodule = result;

\t\t\t\t\tonModule(module);

\t\t\t\t\tmoduleReady.call(this);
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tonModule(module);

\t\t\t\tthis.buildModule(module, false, null, null, (err) => {
\t\t\t\t\tif(err) {
\t\t\t\t\t\tthis.semaphore.release();
\t\t\t\t\t\treturn errorAndCallback(err);
\t\t\t\t\t}

\t\t\t\t\tif(this.profile) {
\t\t\t\t\t\tconst afterBuilding = Date.now();
\t\t\t\t\t\tmodule.profile.building = afterBuilding - afterFactory;
\t\t\t\t\t}

\t\t\t\t\tmoduleReady.call(this);
\t\t\t\t});

\t\t\t\tfunction moduleReady() {
\t\t\t\t\tthis.semaphore.release();
\t\t\t\t\tthis.processModuleDependencies(module, err => {
\t\t\t\t\t\tif(err) {
\t\t\t\t\t\t\treturn callback(err);
\t\t\t\t\t\t}

\t\t\t\t\t\treturn callback(null, module);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t});
\t}

\taddEntry(context, entry, name, callback) {
\t\tconst slot = {
\t\t\tname: name,
\t\t\tmodule: null
\t\t};
\t\tthis.preparedChunks.push(slot);
\t\tthis._addModuleChain(context, entry, (module) => {

\t\t\tentry.module = module;
\t\t\tthis.entries.push(module);
\t\t\tmodule.issuer = null;

\t\t}, (err, module) => {
\t\t\tif(err) {
\t\t\t\treturn callback(err);
\t\t\t}

\t\t\tif(module) {
\t\t\t\tslot.module = module;
\t\t\t} else {
\t\t\t\tconst idx = this.preparedChunks.indexOf(slot);
\t\t\t\tthis.preparedChunks.splice(idx, 1);
\t\t\t}
\t\t\treturn callback(null, module);
\t\t});
\t}

\tprefetch(context, dependency, callback) {
\t\tthis._addModuleChain(context, dependency, module => {

\t\t\tmodule.prefetched = true;
\t\t\tmodule.issuer = null;

\t\t}, callback);
\t}

\trebuildModule(module, thisCallback) {
\t\tif(module.variables.length || module.blocks.length)
\t\t\tthrow new Error(\"Cannot rebuild a complex module with variables or blocks\");
\t\tif(module.rebuilding) {
\t\t\treturn module.rebuilding.push(thisCallback);
\t\t}
\t\tconst rebuilding = module.rebuilding = [thisCallback];

\t\tfunction callback(err) {
\t\t\tmodule.rebuilding = undefined;
\t\t\trebuilding.forEach(cb => cb(err));
\t\t}
\t\tconst deps = module.dependencies.slice();
\t\tthis.buildModule(module, false, module, null, (err) => {
\t\t\tif(err) return callback(err);

\t\t\tthis.processModuleDependencies(module, (err) => {
\t\t\t\tif(err) return callback(err);
\t\t\t\tdeps.forEach(d => {
\t\t\t\t\tif(d.module && d.module.removeReason(module, d)) {
\t\t\t\t\t\tmodule.forEachChunk(chunk => {
\t\t\t\t\t\t\tif(!d.module.hasReasonForChunk(chunk)) {
\t\t\t\t\t\t\t\tif(d.module.removeChunk(chunk)) {
\t\t\t\t\t\t\t\t\tthis.removeChunkFromDependencies(d.module, chunk);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tcallback();
\t\t\t});

\t\t});
\t}

\tfinish() {
\t\tconst modules = this.modules;
\t\tthis.applyPlugins1(\"finish-modules\", modules);

\t\tfor(let index = 0; index < modules.length; index++) {
\t\t\tconst module = modules[index];
\t\t\tthis.reportDependencyErrorsAndWarnings(module, [module]);
\t\t}
\t}

\tunseal() {
\t\tthis.applyPlugins0(\"unseal\");
\t\tthis.chunks.length = 0;
\t\tthis.namedChunks = {};
\t\tthis.additionalChunkAssets.length = 0;
\t\tthis.assets = {};
\t\tthis.modules.forEach(module => module.unseal());
\t}

\tseal(callback) {
\t\tconst self = this;
\t\tself.applyPlugins0(\"seal\");
\t\tself.nextFreeModuleIndex = 0;
\t\tself.nextFreeModuleIndex2 = 0;
\t\tself.preparedChunks.forEach(preparedChunk => {
\t\t\tconst module = preparedChunk.module;
\t\t\tconst chunk = self.addChunk(preparedChunk.name, module);
\t\t\tconst entrypoint = self.entrypoints[chunk.name] = new Entrypoint(chunk.name);
\t\t\tentrypoint.unshiftChunk(chunk);

\t\t\tchunk.addModule(module);
\t\t\tmodule.addChunk(chunk);
\t\t\tchunk.entryModule = module;
\t\t\tself.assignIndex(module);
\t\t\tself.assignDepth(module);
\t\t\tself.processDependenciesBlockForChunk(module, chunk);
\t\t});
\t\tself.sortModules(self.modules);
\t\tself.applyPlugins0(\"optimize\");

\t\twhile(self.applyPluginsBailResult1(\"optimize-modules-basic\", self.modules) ||
\t\t\tself.applyPluginsBailResult1(\"optimize-modules\", self.modules) ||
\t\t\tself.applyPluginsBailResult1(\"optimize-modules-advanced\", self.modules)) { /* empty */ }
\t\tself.applyPlugins1(\"after-optimize-modules\", self.modules);

\t\twhile(self.applyPluginsBailResult1(\"optimize-chunks-basic\", self.chunks) ||
\t\t\tself.applyPluginsBailResult1(\"optimize-chunks\", self.chunks) ||
\t\t\tself.applyPluginsBailResult1(\"optimize-chunks-advanced\", self.chunks)) { /* empty */ }
\t\tself.applyPlugins1(\"after-optimize-chunks\", self.chunks);

\t\tself.applyPluginsAsyncSeries(\"optimize-tree\", self.chunks, self.modules, function sealPart2(err) {
\t\t\tif(err) {
\t\t\t\treturn callback(err);
\t\t\t}

\t\t\tself.applyPlugins2(\"after-optimize-tree\", self.chunks, self.modules);

\t\t\twhile(self.applyPluginsBailResult(\"optimize-chunk-modules-basic\", self.chunks, self.modules) ||
\t\t\t\tself.applyPluginsBailResult(\"optimize-chunk-modules\", self.chunks, self.modules) ||
\t\t\t\tself.applyPluginsBailResult(\"optimize-chunk-modules-advanced\", self.chunks, self.modules)) { /* empty */ }
\t\t\tself.applyPlugins2(\"after-optimize-chunk-modules\", self.chunks, self.modules);

\t\t\tconst shouldRecord = self.applyPluginsBailResult(\"should-record\") !== false;

\t\t\tself.applyPlugins2(\"revive-modules\", self.modules, self.records);
\t\t\tself.applyPlugins1(\"optimize-module-order\", self.modules);
\t\t\tself.applyPlugins1(\"advanced-optimize-module-order\", self.modules);
\t\t\tself.applyPlugins1(\"before-module-ids\", self.modules);
\t\t\tself.applyPlugins1(\"module-ids\", self.modules);
\t\t\tself.applyModuleIds();
\t\t\tself.applyPlugins1(\"optimize-module-ids\", self.modules);
\t\t\tself.applyPlugins1(\"after-optimize-module-ids\", self.modules);

\t\t\tself.sortItemsWithModuleIds();

\t\t\tself.applyPlugins2(\"revive-chunks\", self.chunks, self.records);
\t\t\tself.applyPlugins1(\"optimize-chunk-order\", self.chunks);
\t\t\tself.applyPlugins1(\"before-chunk-ids\", self.chunks);
\t\t\tself.applyChunkIds();
\t\t\tself.applyPlugins1(\"optimize-chunk-ids\", self.chunks);
\t\t\tself.applyPlugins1(\"after-optimize-chunk-ids\", self.chunks);

\t\t\tself.sortItemsWithChunkIds();

\t\t\tif(shouldRecord)
\t\t\t\tself.applyPlugins2(\"record-modules\", self.modules, self.records);
\t\t\tif(shouldRecord)
\t\t\t\tself.applyPlugins2(\"record-chunks\", self.chunks, self.records);

\t\t\tself.applyPlugins0(\"before-hash\");
\t\t\tself.createHash();
\t\t\tself.applyPlugins0(\"after-hash\");

\t\t\tif(shouldRecord)
\t\t\t\tself.applyPlugins1(\"record-hash\", self.records);

\t\t\tself.applyPlugins0(\"before-module-assets\");
\t\t\tself.createModuleAssets();
\t\t\tif(self.applyPluginsBailResult(\"should-generate-chunk-assets\") !== false) {
\t\t\t\tself.applyPlugins0(\"before-chunk-assets\");
\t\t\t\tself.createChunkAssets();
\t\t\t}
\t\t\tself.applyPlugins1(\"additional-chunk-assets\", self.chunks);
\t\t\tself.summarizeDependencies();
\t\t\tif(shouldRecord)
\t\t\t\tself.applyPlugins2(\"record\", self, self.records);

\t\t\tself.applyPluginsAsync(\"additional-assets\", err => {
\t\t\t\tif(err) {
\t\t\t\t\treturn callback(err);
\t\t\t\t}
\t\t\t\tself.applyPluginsAsync(\"optimize-chunk-assets\", self.chunks, err => {
\t\t\t\t\tif(err) {
\t\t\t\t\t\treturn callback(err);
\t\t\t\t\t}
\t\t\t\t\tself.applyPlugins1(\"after-optimize-chunk-assets\", self.chunks);
\t\t\t\t\tself.applyPluginsAsync(\"optimize-assets\", self.assets, err => {
\t\t\t\t\t\tif(err) {
\t\t\t\t\t\t\treturn callback(err);
\t\t\t\t\t\t}
\t\t\t\t\t\tself.applyPlugins1(\"after-optimize-assets\", self.assets);
\t\t\t\t\t\tif(self.applyPluginsBailResult(\"need-additional-seal\")) {
\t\t\t\t\t\t\tself.unseal();
\t\t\t\t\t\t\treturn self.seal(callback);
\t\t\t\t\t\t}
\t\t\t\t\t\treturn self.applyPluginsAsync(\"after-seal\", callback);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});
\t}

\tsortModules(modules) {
\t\tmodules.sort((a, b) => {
\t\t\tif(a.index < b.index) return -1;
\t\t\tif(a.index > b.index) return 1;
\t\t\treturn 0;
\t\t});
\t}

\treportDependencyErrorsAndWarnings(module, blocks) {
\t\tfor(let indexBlock = 0; indexBlock < blocks.length; indexBlock++) {
\t\t\tconst block = blocks[indexBlock];
\t\t\tconst dependencies = block.dependencies;

\t\t\tfor(let indexDep = 0; indexDep < dependencies.length; indexDep++) {
\t\t\t\tconst d = dependencies[indexDep];

\t\t\t\tconst warnings = d.getWarnings();
\t\t\t\tif(warnings) {
\t\t\t\t\tfor(let indexWar = 0; indexWar < warnings.length; indexWar++) {
\t\t\t\t\t\tconst w = warnings[indexWar];

\t\t\t\t\t\tconst warning = new ModuleDependencyWarning(module, w, d.loc);
\t\t\t\t\t\tthis.warnings.push(warning);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tconst errors = d.getErrors();
\t\t\t\tif(errors) {
\t\t\t\t\tfor(let indexErr = 0; indexErr < errors.length; indexErr++) {
\t\t\t\t\t\tconst e = errors[indexErr];

\t\t\t\t\t\tconst error = new ModuleDependencyError(module, e, d.loc);
\t\t\t\t\t\tthis.errors.push(error);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tthis.reportDependencyErrorsAndWarnings(module, block.blocks);
\t\t}
\t}

\taddChunk(name, module, loc) {
\t\tif(name) {
\t\t\tif(Object.prototype.hasOwnProperty.call(this.namedChunks, name)) {
\t\t\t\tconst chunk = this.namedChunks[name];
\t\t\t\tif(module) {
\t\t\t\t\tchunk.addOrigin(module, loc);
\t\t\t\t}
\t\t\t\treturn chunk;
\t\t\t}
\t\t}
\t\tconst chunk = new Chunk(name, module, loc);
\t\tthis.chunks.push(chunk);
\t\tif(name) {
\t\t\tthis.namedChunks[name] = chunk;
\t\t}
\t\treturn chunk;
\t}

\tassignIndex(module) {
\t\tconst _this = this;

\t\tconst queue = [() => {
\t\t\tassignIndexToModule(module);
\t\t}];

\t\tconst iteratorAllDependencies = d => {
\t\t\tqueue.push(() => assignIndexToDependency(d));
\t\t};

\t\tfunction assignIndexToModule(module) {
\t\t\t// enter module
\t\t\tif(typeof module.index !== \"number\") {
\t\t\t\tmodule.index = _this.nextFreeModuleIndex++;

\t\t\t\t// leave module
\t\t\t\tqueue.push(() => module.index2 = _this.nextFreeModuleIndex2++);

\t\t\t\t// enter it as block
\t\t\t\tassignIndexToDependencyBlock(module);
\t\t\t}
\t\t}

\t\tfunction assignIndexToDependency(dependency) {
\t\t\tif(dependency.module) {
\t\t\t\tqueue.push(() => assignIndexToModule(dependency.module));
\t\t\t}
\t\t}

\t\tfunction assignIndexToDependencyBlock(block) {
\t\t\tlet allDependencies = [];

\t\t\tfunction iteratorDependency(d) {
\t\t\t\tallDependencies.push(d);
\t\t\t}

\t\t\tfunction iteratorBlock(b) {
\t\t\t\tqueue.push(() => assignIndexToDependencyBlock(b));
\t\t\t}

\t\t\tif(block.variables) {
\t\t\t\titerationBlockVariable(block.variables, iteratorDependency);
\t\t\t}

\t\t\tif(block.dependencies) {
\t\t\t\titerationOfArrayCallback(block.dependencies, iteratorDependency);
\t\t\t}
\t\t\tif(block.blocks) {
\t\t\t\tconst blocks = block.blocks;
\t\t\t\tlet indexBlock = blocks.length;
\t\t\t\twhile(indexBlock--) {
\t\t\t\t\titeratorBlock(blocks[indexBlock]);
\t\t\t\t}
\t\t\t}

\t\t\tlet indexAll = allDependencies.length;
\t\t\twhile(indexAll--) {
\t\t\t\titeratorAllDependencies(allDependencies[indexAll]);
\t\t\t}
\t\t}

\t\twhile(queue.length) {
\t\t\tqueue.pop()();
\t\t}
\t}

\tassignDepth(module) {
\t\tfunction assignDepthToModule(module, depth) {
\t\t\t// enter module
\t\t\tif(typeof module.depth === \"number\" && module.depth <= depth) return;
\t\t\tmodule.depth = depth;

\t\t\t// enter it as block
\t\t\tassignDepthToDependencyBlock(module, depth + 1);
\t\t}

\t\tfunction assignDepthToDependency(dependency, depth) {
\t\t\tif(dependency.module) {
\t\t\t\tqueue.push(() => assignDepthToModule(dependency.module, depth));
\t\t\t}
\t\t}

\t\tfunction assignDepthToDependencyBlock(block, depth) {
\t\t\tfunction iteratorDependency(d) {
\t\t\t\tassignDepthToDependency(d, depth);
\t\t\t}

\t\t\tfunction iteratorBlock(b) {
\t\t\t\tassignDepthToDependencyBlock(b, depth);
\t\t\t}

\t\t\tif(block.variables) {
\t\t\t\titerationBlockVariable(block.variables, iteratorDependency);
\t\t\t}

\t\t\tif(block.dependencies) {
\t\t\t\titerationOfArrayCallback(block.dependencies, iteratorDependency);
\t\t\t}

\t\t\tif(block.blocks) {
\t\t\t\titerationOfArrayCallback(block.blocks, iteratorBlock);
\t\t\t}
\t\t}

\t\tconst queue = [() => {
\t\t\tassignDepthToModule(module, 0);
\t\t}];
\t\twhile(queue.length) {
\t\t\tqueue.pop()();
\t\t}
\t}

\tprocessDependenciesBlockForChunk(module, chunk) {
\t\tlet block = module;
\t\tconst initialChunk = chunk;
\t\tconst chunkDependencies = new Map(); // Map<Chunk, Array<{Module, Chunk}>>

\t\tconst iteratorBlock = b => {
\t\t\tlet c;
\t\t\tif(!b.chunks) {
\t\t\t\tc = this.addChunk(b.chunkName, b.module, b.loc);
\t\t\t\tb.chunks = [c];
\t\t\t\tc.addBlock(b);
\t\t\t} else {
\t\t\t\tc = b.chunks[0];
\t\t\t}
\t\t\tlet deps = chunkDependencies.get(chunk);
\t\t\tif(!deps) chunkDependencies.set(chunk, deps = []);
\t\t\tdeps.push({
\t\t\t\tchunk: c,
\t\t\t\tmodule
\t\t\t});
\t\t\tqueue.push({
\t\t\t\tblock: b,
\t\t\t\tmodule: null,
\t\t\t\tchunk: c
\t\t\t});
\t\t};

\t\tconst iteratorDependency = d => {
\t\t\tif(!d.module) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif(d.weak) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif(chunk.addModule(d.module)) {
\t\t\t\td.module.addChunk(chunk);
\t\t\t\tqueue.push({
\t\t\t\t\tblock: d.module,
\t\t\t\t\tmodule: d.module,
\t\t\t\t\tchunk
\t\t\t\t});
\t\t\t}
\t\t};

\t\tconst queue = [{
\t\t\tblock,
\t\t\tmodule,
\t\t\tchunk
\t\t}];

\t\twhile(queue.length) {
\t\t\tconst queueItem = queue.pop();
\t\t\tblock = queueItem.block;
\t\t\tmodule = queueItem.module;
\t\t\tchunk = queueItem.chunk;

\t\t\tif(block.variables) {
\t\t\t\titerationBlockVariable(block.variables, iteratorDependency);
\t\t\t}

\t\t\tif(block.dependencies) {
\t\t\t\titerationOfArrayCallback(block.dependencies, iteratorDependency);
\t\t\t}

\t\t\tif(block.blocks) {
\t\t\t\titerationOfArrayCallback(block.blocks, iteratorBlock);
\t\t\t}
\t\t}

\t\tchunk = initialChunk;
\t\tlet chunks = new Set();
\t\tconst queue2 = [{
\t\t\tchunk,
\t\t\tchunks
\t\t}];

\t\tconst filterFn = dep => {
\t\t\tif(chunks.has(dep.chunk)) return false;
\t\t\tfor(const chunk of chunks) {
\t\t\t\tif(chunk.containsModule(dep.module))
\t\t\t\t\treturn false;
\t\t\t}
\t\t\treturn true;
\t\t};

\t\twhile(queue2.length) {
\t\t\tconst queueItem = queue2.pop();
\t\t\tchunk = queueItem.chunk;
\t\t\tchunks = queueItem.chunks;

\t\t\tconst deps = chunkDependencies.get(chunk);
\t\t\tif(!deps) continue;

\t\t\tconst depsFiltered = deps.filter(filterFn);

\t\t\tfor(let i = 0; i < depsFiltered.length; i++) {
\t\t\t\tconst dep = depsFiltered[i];
\t\t\t\tconst depChunk = dep.chunk;
\t\t\t\tchunk.addChunk(depChunk);
\t\t\t\tdepChunk.addParent(chunk);

\t\t\t\tconst newChunks = depsFiltered.length > 1 ? new Set(chunks) : chunks;
\t\t\t\tnewChunks.add(chunk);
\t\t\t\tqueue2.push({
\t\t\t\t\tchunk: depChunk,
\t\t\t\t\tchunks: newChunks
\t\t\t\t});
\t\t\t}
\t\t}
\t}

\tremoveChunkFromDependencies(block, chunk) {
\t\tconst iteratorDependency = d => {
\t\t\tif(!d.module) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif(!d.module.hasReasonForChunk(chunk)) {
\t\t\t\tif(d.module.removeChunk(chunk)) {
\t\t\t\t\tthis.removeChunkFromDependencies(d.module, chunk);
\t\t\t\t}
\t\t\t}
\t\t};

\t\tconst blocks = block.blocks;
\t\tfor(let indexBlock = 0; indexBlock < blocks.length; indexBlock++) {
\t\t\tconst chunks = blocks[indexBlock].chunks;
\t\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\t\tconst blockChunk = chunks[indexChunk];
\t\t\t\tchunk.removeChunk(blockChunk);
\t\t\t\tblockChunk.removeParent(chunk);
\t\t\t\tthis.removeChunkFromDependencies(chunks, blockChunk);
\t\t\t}
\t\t}

\t\tif(block.dependencies) {
\t\t\titerationOfArrayCallback(block.dependencies, iteratorDependency);
\t\t}

\t\tif(block.variables) {
\t\t\titerationBlockVariable(block.variables, iteratorDependency);
\t\t}
\t}

\tapplyModuleIds() {
\t\tlet unusedIds = [];
\t\tlet nextFreeModuleId = 0;
\t\tlet usedIds = [];
\t\t// TODO consider Map when performance has improved https://gist.github.com/sokra/234c077e1299b7369461f1708519c392
\t\tconst usedIdMap = Object.create(null);
\t\tif(this.usedModuleIds) {
\t\t\tObject.keys(this.usedModuleIds).forEach(key => {
\t\t\t\tconst id = this.usedModuleIds[key];
\t\t\t\tif(!usedIdMap[id]) {
\t\t\t\t\tusedIds.push(id);
\t\t\t\t\tusedIdMap[id] = true;
\t\t\t\t}
\t\t\t});
\t\t}

\t\tconst modules1 = this.modules;
\t\tfor(let indexModule1 = 0; indexModule1 < modules1.length; indexModule1++) {
\t\t\tconst module1 = modules1[indexModule1];
\t\t\tif(module1.id && !usedIdMap[module1.id]) {
\t\t\t\tusedIds.push(module1.id);
\t\t\t\tusedIdMap[module1.id] = true;
\t\t\t}
\t\t}

\t\tif(usedIds.length > 0) {
\t\t\tlet usedIdMax = -1;
\t\t\tfor(let index = 0; index < usedIds.length; index++) {
\t\t\t\tconst usedIdKey = usedIds[index];

\t\t\t\tif(typeof usedIdKey !== \"number\") {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tusedIdMax = Math.max(usedIdMax, usedIdKey);
\t\t\t}

\t\t\tlet lengthFreeModules = nextFreeModuleId = usedIdMax + 1;

\t\t\twhile(lengthFreeModules--) {
\t\t\t\tif(!usedIdMap[lengthFreeModules]) {
\t\t\t\t\tunusedIds.push(lengthFreeModules);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tconst modules2 = this.modules;
\t\tfor(let indexModule2 = 0; indexModule2 < modules2.length; indexModule2++) {
\t\t\tconst module2 = modules2[indexModule2];
\t\t\tif(module2.id === null) {
\t\t\t\tif(unusedIds.length > 0)
\t\t\t\t\tmodule2.id = unusedIds.pop();
\t\t\t\telse
\t\t\t\t\tmodule2.id = nextFreeModuleId++;
\t\t\t}
\t\t}
\t}

\tapplyChunkIds() {
\t\tconst unusedIds = [];
\t\tlet nextFreeChunkId = 0;

\t\tfunction getNextFreeChunkId(usedChunkIds) {
\t\t\tconst keyChunks = Object.keys(usedChunkIds);
\t\t\tlet result = -1;

\t\t\tfor(let index = 0; index < keyChunks.length; index++) {
\t\t\t\tconst usedIdKey = keyChunks[index];
\t\t\t\tconst usedIdValue = usedChunkIds[usedIdKey];

\t\t\t\tif(typeof usedIdValue !== \"number\") {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tresult = Math.max(result, usedIdValue);
\t\t\t}

\t\t\treturn result;
\t\t}

\t\tif(this.usedChunkIds) {
\t\t\tnextFreeChunkId = getNextFreeChunkId(this.usedChunkIds) + 1;
\t\t\tlet index = nextFreeChunkId;
\t\t\twhile(index--) {
\t\t\t\tif(this.usedChunkIds[index] !== index) {
\t\t\t\t\tunusedIds.push(index);
\t\t\t\t}
\t\t\t}
\t\t}

\t\tconst chunks = this.chunks;
\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\tconst chunk = chunks[indexChunk];
\t\t\tif(chunk.id === null) {
\t\t\t\tif(unusedIds.length > 0)
\t\t\t\t\tchunk.id = unusedIds.pop();
\t\t\t\telse
\t\t\t\t\tchunk.id = nextFreeChunkId++;
\t\t\t}
\t\t\tif(!chunk.ids) {
\t\t\t\tchunk.ids = [chunk.id];
\t\t\t}
\t\t}
\t}

\tsortItemsWithModuleIds() {
\t\tthis.modules.sort(byId);

\t\tconst modules = this.modules;
\t\tfor(let indexModule = 0; indexModule < modules.length; indexModule++) {
\t\t\tmodules[indexModule].sortItems(false);
\t\t}

\t\tconst chunks = this.chunks;
\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\tchunks[indexChunk].sortItems();
\t\t}
\t}

\tsortItemsWithChunkIds() {
\t\tthis.chunks.sort(byId);

\t\tconst modules = this.modules;
\t\tfor(let indexModule = 0; indexModule < modules.length; indexModule++) {
\t\t\tmodules[indexModule].sortItems(true);
\t\t}

\t\tconst chunks = this.chunks;
\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\tchunks[indexChunk].sortItems();
\t\t}

\t\tconst byMessage = (a, b) => {
\t\t\tconst ma = `\${a.message}`;
\t\t\tconst mb = `\${b.message}`;
\t\t\tif(ma < mb) return -1;
\t\t\tif(mb < ma) return 1;
\t\t\treturn 0;
\t\t};

\t\tthis.errors.sort(byMessage);
\t\tthis.warnings.sort(byMessage);
\t}

\tsummarizeDependencies() {
\t\tfunction filterDups(array) {
\t\t\tconst newArray = [];
\t\t\tfor(let i = 0; i < array.length; i++) {
\t\t\t\tif(i === 0 || array[i - 1] !== array[i])
\t\t\t\t\tnewArray.push(array[i]);
\t\t\t}
\t\t\treturn newArray;
\t\t}
\t\tthis.fileDependencies = (this.compilationDependencies || []).slice();
\t\tthis.contextDependencies = [];
\t\tthis.missingDependencies = [];

\t\tconst children = this.children;
\t\tfor(let indexChildren = 0; indexChildren < children.length; indexChildren++) {
\t\t\tconst child = children[indexChildren];

\t\t\tthis.fileDependencies = this.fileDependencies.concat(child.fileDependencies);
\t\t\tthis.contextDependencies = this.contextDependencies.concat(child.contextDependencies);
\t\t\tthis.missingDependencies = this.missingDependencies.concat(child.missingDependencies);
\t\t}

\t\tconst modules = this.modules;
\t\tfor(let indexModule = 0; indexModule < modules.length; indexModule++) {
\t\t\tconst module = modules[indexModule];

\t\t\tif(module.fileDependencies) {
\t\t\t\tconst fileDependencies = module.fileDependencies;
\t\t\t\tfor(let indexFileDep = 0; indexFileDep < fileDependencies.length; indexFileDep++) {
\t\t\t\t\tthis.fileDependencies.push(fileDependencies[indexFileDep]);
\t\t\t\t}
\t\t\t}
\t\t\tif(module.contextDependencies) {
\t\t\t\tconst contextDependencies = module.contextDependencies;
\t\t\t\tfor(let indexContextDep = 0; indexContextDep < contextDependencies.length; indexContextDep++) {
\t\t\t\t\tthis.contextDependencies.push(contextDependencies[indexContextDep]);
\t\t\t\t}
\t\t\t}
\t\t}
\t\tthis.errors.forEach(error => {
\t\t\tif(Array.isArray(error.missing)) {
\t\t\t\terror.missing.forEach(item => this.missingDependencies.push(item));
\t\t\t}
\t\t});
\t\tthis.fileDependencies.sort();
\t\tthis.fileDependencies = filterDups(this.fileDependencies);
\t\tthis.contextDependencies.sort();
\t\tthis.contextDependencies = filterDups(this.contextDependencies);
\t\tthis.missingDependencies.sort();
\t\tthis.missingDependencies = filterDups(this.missingDependencies);
\t}

\tcreateHash() {
\t\tconst outputOptions = this.outputOptions;
\t\tconst hashFunction = outputOptions.hashFunction;
\t\tconst hashDigest = outputOptions.hashDigest;
\t\tconst hashDigestLength = outputOptions.hashDigestLength;
\t\tconst hash = crypto.createHash(hashFunction);
\t\tif(outputOptions.hashSalt)
\t\t\thash.update(outputOptions.hashSalt);
\t\tthis.mainTemplate.updateHash(hash);
\t\tthis.chunkTemplate.updateHash(hash);
\t\tthis.moduleTemplate.updateHash(hash);
\t\tthis.children.forEach(function(child) {
\t\t\thash.update(child.hash);
\t\t});
\t\tthis.warnings.forEach(function(warning) {
\t\t\thash.update(`\${warning.message}`);
\t\t});
\t\tthis.errors.forEach(function(error) {
\t\t\thash.update(`\${error.message}`);
\t\t});
\t\t// clone needed as sort below is inplace mutation
\t\tconst chunks = this.chunks.slice();
\t\t/**
\t\t * sort here will bring all \"falsy\" values to the beginning
\t\t * this is needed as the \"hasRuntime()\" chunks are dependent on the
\t\t * hashes of the non-runtime chunks.
\t\t */
\t\tchunks.sort((a, b) => {
\t\t\tconst aEntry = a.hasRuntime();
\t\t\tconst bEntry = b.hasRuntime();
\t\t\tif(aEntry && !bEntry) return 1;
\t\t\tif(!aEntry && bEntry) return -1;
\t\t\treturn 0;
\t\t});
\t\tfor(let i = 0; i < chunks.length; i++) {
\t\t\tconst chunk = chunks[i];
\t\t\tconst chunkHash = crypto.createHash(hashFunction);
\t\t\tif(outputOptions.hashSalt)
\t\t\t\tchunkHash.update(outputOptions.hashSalt);
\t\t\tchunk.updateHash(chunkHash);
\t\t\tif(chunk.hasRuntime()) {
\t\t\t\tthis.mainTemplate.updateHashForChunk(chunkHash, chunk);
\t\t\t} else {
\t\t\t\tthis.chunkTemplate.updateHashForChunk(chunkHash, chunk);
\t\t\t}
\t\t\tthis.applyPlugins2(\"chunk-hash\", chunk, chunkHash);
\t\t\tchunk.hash = chunkHash.digest(hashDigest);
\t\t\thash.update(chunk.hash);
\t\t\tchunk.renderedHash = chunk.hash.substr(0, hashDigestLength);
\t\t}
\t\tthis.fullHash = hash.digest(hashDigest);
\t\tthis.hash = this.fullHash.substr(0, hashDigestLength);
\t}

\tmodifyHash(update) {
\t\tconst outputOptions = this.outputOptions;
\t\tconst hashFunction = outputOptions.hashFunction;
\t\tconst hashDigest = outputOptions.hashDigest;
\t\tconst hashDigestLength = outputOptions.hashDigestLength;
\t\tconst hash = crypto.createHash(hashFunction);
\t\thash.update(this.fullHash);
\t\thash.update(update);
\t\tthis.fullHash = hash.digest(hashDigest);
\t\tthis.hash = this.fullHash.substr(0, hashDigestLength);
\t}

\tcreateModuleAssets() {
\t\tfor(let i = 0; i < this.modules.length; i++) {
\t\t\tconst module = this.modules[i];
\t\t\tif(module.assets) {
\t\t\t\tObject.keys(module.assets).forEach((assetName) => {
\t\t\t\t\tconst fileName = this.getPath(assetName);
\t\t\t\t\tthis.assets[fileName] = module.assets[assetName];
\t\t\t\t\tthis.applyPlugins2(\"module-asset\", module, fileName);
\t\t\t\t});
\t\t\t}
\t\t}
\t}

\tcreateChunkAssets() {
\t\tconst outputOptions = this.outputOptions;
\t\tconst filename = outputOptions.filename;
\t\tconst chunkFilename = outputOptions.chunkFilename;
\t\tfor(let i = 0; i < this.chunks.length; i++) {
\t\t\tconst chunk = this.chunks[i];
\t\t\tchunk.files = [];
\t\t\tconst chunkHash = chunk.hash;
\t\t\tlet source;
\t\t\tlet file;
\t\t\tconst filenameTemplate = chunk.filenameTemplate ? chunk.filenameTemplate :
\t\t\t\tchunk.isInitial() ? filename :
\t\t\t\tchunkFilename;
\t\t\ttry {
\t\t\t\tconst useChunkHash = !chunk.hasRuntime() || (this.mainTemplate.useChunkHash && this.mainTemplate.useChunkHash(chunk));
\t\t\t\tconst usedHash = useChunkHash ? chunkHash : this.fullHash;
\t\t\t\tconst cacheName = \"c\" + chunk.id;
\t\t\t\tif(this.cache && this.cache[cacheName] && this.cache[cacheName].hash === usedHash) {
\t\t\t\t\tsource = this.cache[cacheName].source;
\t\t\t\t} else {
\t\t\t\t\tif(chunk.hasRuntime()) {
\t\t\t\t\t\tsource = this.mainTemplate.render(this.hash, chunk, this.moduleTemplate, this.dependencyTemplates);
\t\t\t\t\t} else {
\t\t\t\t\t\tsource = this.chunkTemplate.render(chunk, this.moduleTemplate, this.dependencyTemplates);
\t\t\t\t\t}
\t\t\t\t\tif(this.cache) {
\t\t\t\t\t\tthis.cache[cacheName] = {
\t\t\t\t\t\t\thash: usedHash,
\t\t\t\t\t\t\tsource: source = (source instanceof CachedSource ? source : new CachedSource(source))
\t\t\t\t\t\t};
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tfile = this.getPath(filenameTemplate, {
\t\t\t\t\tnoChunkHash: !useChunkHash,
\t\t\t\t\tchunk
\t\t\t\t});
\t\t\t\tif(this.assets[file])
\t\t\t\t\tthrow new Error(`Conflict: Multiple assets emit to the same filename \${file}`);
\t\t\t\tthis.assets[file] = source;
\t\t\t\tchunk.files.push(file);
\t\t\t\tthis.applyPlugins2(\"chunk-asset\", chunk, file);
\t\t\t} catch(err) {
\t\t\t\tthis.errors.push(new ChunkRenderError(chunk, file || filenameTemplate, err));
\t\t\t}
\t\t}
\t}

\tgetPath(filename, data) {
\t\tdata = data || {};
\t\tdata.hash = data.hash || this.hash;
\t\treturn this.mainTemplate.applyPluginsWaterfall(\"asset-path\", filename, data);
\t}

\tcreateChildCompiler(name, outputOptions, plugins) {
\t\tvar idx = (this.childrenCounters[name] || 0);
\t\tthis.childrenCounters[name] = idx + 1;
\t\treturn this.compiler.createChildCompiler(this, name, idx, outputOptions, plugins);
\t}

\tcheckConstraints() {
\t\tconst usedIds = {};

\t\tconst modules = this.modules;
\t\tfor(let indexModule = 0; indexModule < modules.length; indexModule++) {
\t\t\tconst moduleId = modules[indexModule].id;

\t\t\tif(usedIds[moduleId])
\t\t\t\tthrow new Error(`checkConstraints: duplicate module id \${moduleId}`);
\t\t}

\t\tconst chunks = this.chunks;
\t\tfor(let indexChunk = 0; indexChunk < chunks.length; indexChunk++) {
\t\t\tconst chunk = chunks[indexChunk];

\t\t\tif(chunks.indexOf(chunk) !== indexChunk)
\t\t\t\tthrow new Error(`checkConstraints: duplicate chunk in compilation \${chunk.debugId}`);
\t\t\tchunk.checkConstraints();
\t\t}
\t}
}

module.exports = Compilation;
", "node_modules/webpack/lib/Compilation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/Compilation.js");
    }
}
