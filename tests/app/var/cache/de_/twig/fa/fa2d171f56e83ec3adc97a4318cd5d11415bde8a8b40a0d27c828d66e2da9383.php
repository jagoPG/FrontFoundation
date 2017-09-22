<?php

/* node_modules/webpack/lib/CachePlugin.js */
class __TwigTemplate_3aff029e53b6cec073c985d98fe2b5f064e1b2becf76fcb5e3dc4fd413cf38a1 extends Twig_Template
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
        $__internal_115e94ac238c1f48e5441055b067ffd82e390e5c123704214b6a7c1b5443f84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115e94ac238c1f48e5441055b067ffd82e390e5c123704214b6a7c1b5443f84b->enter($__internal_115e94ac238c1f48e5441055b067ffd82e390e5c123704214b6a7c1b5443f84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/CachePlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const asyncLib = require(\"async\");

class CachePlugin {
\tconstructor(cache) {
\t\tthis.cache = cache || {};
\t\tthis.FS_ACCURENCY = 2000;
\t}

\tapply(compiler) {
\t\tif(Array.isArray(compiler.compilers)) {
\t\t\tcompiler.compilers.forEach((c, idx) => {
\t\t\t\tc.apply(new CachePlugin(this.cache[idx] = this.cache[idx] || {}));
\t\t\t});
\t\t} else {
\t\t\tcompiler.plugin(\"compilation\", compilation => {
\t\t\t\tif(!compilation.notCacheable) {
\t\t\t\t\tcompilation.cache = this.cache;
\t\t\t\t} else if(this.watching) {
\t\t\t\t\tcompilation.warnings.push(
\t\t\t\t\t\tnew Error(`CachePlugin - Cache cannot be used because of: \${compilation.notCacheable}`)
\t\t\t\t\t);
\t\t\t\t}
\t\t\t});
\t\t\tcompiler.plugin(\"watch-run\", (compiler, callback) => {
\t\t\t\tthis.watching = true;
\t\t\t\tcallback();
\t\t\t});
\t\t\tcompiler.plugin(\"run\", (compiler, callback) => {
\t\t\t\tif(!compiler._lastCompilationFileDependencies) return callback();
\t\t\t\tconst fs = compiler.inputFileSystem;
\t\t\t\tconst fileTs = compiler.fileTimestamps = {};
\t\t\t\tasyncLib.forEach(compiler._lastCompilationFileDependencies, (file, callback) => {
\t\t\t\t\tfs.stat(file, (err, stat) => {
\t\t\t\t\t\tif(err) {
\t\t\t\t\t\t\tif(err.code === \"ENOENT\") return callback();
\t\t\t\t\t\t\treturn callback(err);
\t\t\t\t\t\t}

\t\t\t\t\t\tif(stat.mtime)
\t\t\t\t\t\t\tthis.applyMtime(+stat.mtime);

\t\t\t\t\t\tfileTs[file] = +stat.mtime || Infinity;
\t\t\t\t\t\tcallback();
\t\t\t\t\t});
\t\t\t\t}, err => {
\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\tObject.keys(fileTs).forEach(key => {
\t\t\t\t\t\tfileTs[key] += this.FS_ACCURENCY;
\t\t\t\t\t});
\t\t\t\t\tcallback();
\t\t\t\t});
\t\t\t});
\t\t\tcompiler.plugin(\"after-compile\", function(compilation, callback) {
\t\t\t\tcompilation.compiler._lastCompilationFileDependencies = compilation.fileDependencies;
\t\t\t\tcompilation.compiler._lastCompilationContextDependencies = compilation.contextDependencies;
\t\t\t\tcallback();
\t\t\t});
\t\t}
\t}

\t/* istanbul ignore next */
\tapplyMtime(mtime) {
\t\tif(this.FS_ACCURENCY > 1 && mtime % 2 !== 0)
\t\t\tthis.FS_ACCURENCY = 1;
\t\telse if(this.FS_ACCURENCY > 10 && mtime % 20 !== 0)
\t\t\tthis.FS_ACCURENCY = 10;
\t\telse if(this.FS_ACCURENCY > 100 && mtime % 200 !== 0)
\t\t\tthis.FS_ACCURENCY = 100;
\t\telse if(this.FS_ACCURENCY > 1000 && mtime % 2000 !== 0)
\t\t\tthis.FS_ACCURENCY = 1000;
\t}
}
module.exports = CachePlugin;
";
        
        $__internal_115e94ac238c1f48e5441055b067ffd82e390e5c123704214b6a7c1b5443f84b->leave($__internal_115e94ac238c1f48e5441055b067ffd82e390e5c123704214b6a7c1b5443f84b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/CachePlugin.js";
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

class CachePlugin {
\tconstructor(cache) {
\t\tthis.cache = cache || {};
\t\tthis.FS_ACCURENCY = 2000;
\t}

\tapply(compiler) {
\t\tif(Array.isArray(compiler.compilers)) {
\t\t\tcompiler.compilers.forEach((c, idx) => {
\t\t\t\tc.apply(new CachePlugin(this.cache[idx] = this.cache[idx] || {}));
\t\t\t});
\t\t} else {
\t\t\tcompiler.plugin(\"compilation\", compilation => {
\t\t\t\tif(!compilation.notCacheable) {
\t\t\t\t\tcompilation.cache = this.cache;
\t\t\t\t} else if(this.watching) {
\t\t\t\t\tcompilation.warnings.push(
\t\t\t\t\t\tnew Error(`CachePlugin - Cache cannot be used because of: \${compilation.notCacheable}`)
\t\t\t\t\t);
\t\t\t\t}
\t\t\t});
\t\t\tcompiler.plugin(\"watch-run\", (compiler, callback) => {
\t\t\t\tthis.watching = true;
\t\t\t\tcallback();
\t\t\t});
\t\t\tcompiler.plugin(\"run\", (compiler, callback) => {
\t\t\t\tif(!compiler._lastCompilationFileDependencies) return callback();
\t\t\t\tconst fs = compiler.inputFileSystem;
\t\t\t\tconst fileTs = compiler.fileTimestamps = {};
\t\t\t\tasyncLib.forEach(compiler._lastCompilationFileDependencies, (file, callback) => {
\t\t\t\t\tfs.stat(file, (err, stat) => {
\t\t\t\t\t\tif(err) {
\t\t\t\t\t\t\tif(err.code === \"ENOENT\") return callback();
\t\t\t\t\t\t\treturn callback(err);
\t\t\t\t\t\t}

\t\t\t\t\t\tif(stat.mtime)
\t\t\t\t\t\t\tthis.applyMtime(+stat.mtime);

\t\t\t\t\t\tfileTs[file] = +stat.mtime || Infinity;
\t\t\t\t\t\tcallback();
\t\t\t\t\t});
\t\t\t\t}, err => {
\t\t\t\t\tif(err) return callback(err);
\t\t\t\t\tObject.keys(fileTs).forEach(key => {
\t\t\t\t\t\tfileTs[key] += this.FS_ACCURENCY;
\t\t\t\t\t});
\t\t\t\t\tcallback();
\t\t\t\t});
\t\t\t});
\t\t\tcompiler.plugin(\"after-compile\", function(compilation, callback) {
\t\t\t\tcompilation.compiler._lastCompilationFileDependencies = compilation.fileDependencies;
\t\t\t\tcompilation.compiler._lastCompilationContextDependencies = compilation.contextDependencies;
\t\t\t\tcallback();
\t\t\t});
\t\t}
\t}

\t/* istanbul ignore next */
\tapplyMtime(mtime) {
\t\tif(this.FS_ACCURENCY > 1 && mtime % 2 !== 0)
\t\t\tthis.FS_ACCURENCY = 1;
\t\telse if(this.FS_ACCURENCY > 10 && mtime % 20 !== 0)
\t\t\tthis.FS_ACCURENCY = 10;
\t\telse if(this.FS_ACCURENCY > 100 && mtime % 200 !== 0)
\t\t\tthis.FS_ACCURENCY = 100;
\t\telse if(this.FS_ACCURENCY > 1000 && mtime % 2000 !== 0)
\t\t\tthis.FS_ACCURENCY = 1000;
\t}
}
module.exports = CachePlugin;
", "node_modules/webpack/lib/CachePlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/CachePlugin.js");
    }
}
