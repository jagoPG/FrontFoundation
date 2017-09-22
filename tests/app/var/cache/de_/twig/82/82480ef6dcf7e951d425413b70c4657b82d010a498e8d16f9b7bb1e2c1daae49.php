<?php

/* node_modules/enhanced-resolve/lib/ResolverFactory.js */
class __TwigTemplate_56e3ec3dfe7e8f7efc2dca163d721694ee8a07dae3a75a895873ea64f6a7dc23 extends Twig_Template
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
        $__internal_75c0a7f83868af62d70106d0f30c6e4b683e128712f6a176d07f37068dbdac59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c0a7f83868af62d70106d0f30c6e4b683e128712f6a176d07f37068dbdac59->enter($__internal_75c0a7f83868af62d70106d0f30c6e4b683e128712f6a176d07f37068dbdac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ResolverFactory.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var Resolver = require(\"./Resolver\");

var SyncAsyncFileSystemDecorator = require(\"./SyncAsyncFileSystemDecorator\");

var ParsePlugin = require(\"./ParsePlugin\");
var DescriptionFilePlugin = require(\"./DescriptionFilePlugin\");
var NextPlugin = require(\"./NextPlugin\");
var TryNextPlugin = require(\"./TryNextPlugin\");
var ModuleKindPlugin = require(\"./ModuleKindPlugin\");
var FileKindPlugin = require(\"./FileKindPlugin\");
var JoinRequestPlugin = require(\"./JoinRequestPlugin\");
var ModulesInHierachicDirectoriesPlugin = require(\"./ModulesInHierachicDirectoriesPlugin\");
var ModulesInRootPlugin = require(\"./ModulesInRootPlugin\");
var AliasPlugin = require(\"./AliasPlugin\");
var AliasFieldPlugin = require(\"./AliasFieldPlugin\");
var ConcordExtensionsPlugin = require(\"./ConcordExtensionsPlugin\");
var ConcordMainPlugin = require(\"./ConcordMainPlugin\");
var ConcordModulesPlugin = require(\"./ConcordModulesPlugin\");
var DirectoryExistsPlugin = require(\"./DirectoryExistsPlugin\");
var FileExistsPlugin = require(\"./FileExistsPlugin\");
var SymlinkPlugin = require(\"./SymlinkPlugin\");
var MainFieldPlugin = require(\"./MainFieldPlugin\");
var UseFilePlugin = require(\"./UseFilePlugin\");
var AppendPlugin = require(\"./AppendPlugin\");
var ResultPlugin = require(\"./ResultPlugin\");
var ModuleAppendPlugin = require(\"./ModuleAppendPlugin\");
var UnsafeCachePlugin = require(\"./UnsafeCachePlugin\");

exports.createResolver = function(options) {

\t//// OPTIONS ////

\t// A list of directories to resolve modules from, can be absolute path or folder name
\tvar modules = options.modules || [\"node_modules\"];

\t// A list of description files to read from
\tvar descriptionFiles = options.descriptionFiles || [\"package.json\"];

\t// A list of additional resolve plugins which should be applied
\t// The slice is there to create a copy, because otherwise pushing into plugins
\t// changes the original options.plugins array, causing duplicate plugins
\tvar plugins = (options.plugins && options.plugins.slice()) || [];

\t// A list of main fields in description files
\tvar mainFields = options.mainFields || [\"main\"];

\t// A list of alias fields in description files
\tvar aliasFields = options.aliasFields || [];

\t// A list of main files in directories
\tvar mainFiles = options.mainFiles || [\"index\"];

\t// A list of extensions which should be tried for files
\tvar extensions = options.extensions || [\".js\", \".json\", \".node\"];

\t// Enforce that a extension from extensions must be used
\tvar enforceExtension = options.enforceExtension || false;

\t// A list of module extensions which should be tried for modules
\tvar moduleExtensions = options.moduleExtensions || [];

\t// Enforce that a extension from moduleExtensions must be used
\tvar enforceModuleExtension = options.enforceModuleExtension || false;

\t// A list of module alias configurations or an object which maps key to value
\tvar alias = options.alias || [];

\t// Resolve symlinks to their symlinked location
\tvar symlinks = typeof options.symlinks !== \"undefined\" ? options.symlinks : true;

\t// Resolve to a context instead of a file
\tvar resolveToContext = options.resolveToContext || false;

\t// Use this cache object to unsafely cache the successful requests
\tvar unsafeCache = options.unsafeCache || false;

\t// Whether or not the unsafeCache should include request context as part of the cache key.
\tvar cacheWithContext = typeof options.cacheWithContext !== \"undefined\" ? options.cacheWithContext : true;

\t// A function which decides whether a request should be cached or not.
\t// an object is passed with `path` and `request` properties.
\tvar cachePredicate = options.cachePredicate || function() {
\t\treturn true;
\t};

\t// The file system which should be used
\tvar fileSystem = options.fileSystem;

\t// Use only the sync variants of the file system calls
\tvar useSyncFileSystemCalls = options.useSyncFileSystemCalls;

\t// A prepared Resolver to which the plugins are attached
\tvar resolver = options.resolver;

\t//// options processing ////

\tif(!resolver) {
\t\tresolver = new Resolver(useSyncFileSystemCalls ? new SyncAsyncFileSystemDecorator(fileSystem) : fileSystem);
\t}

\textensions = [].concat(extensions);
\tmoduleExtensions = [].concat(moduleExtensions);

\tmodules = mergeFilteredToArray([].concat(modules), function(item) {
\t\treturn !isAbsolutePath(item);
\t});

\tmainFields = mainFields.map(function(item) {
\t\tif(typeof item === \"string\") {
\t\t\titem = {
\t\t\t\tname: item,
\t\t\t\tforceRelative: true
\t\t\t};
\t\t}
\t\treturn item;
\t});

\tif(typeof alias === \"object\" && !Array.isArray(alias)) {
\t\talias = Object.keys(alias).map(function(key) {
\t\t\tvar onlyModule = false;
\t\t\tvar obj = alias[key];
\t\t\tif(/\\\$\$/.test(key)) {
\t\t\t\tonlyModule = true;
\t\t\t\tkey = key.substr(0, key.length - 1);
\t\t\t}
\t\t\tif(typeof obj === \"string\") {
\t\t\t\tobj = {
\t\t\t\t\talias: obj
\t\t\t\t};
\t\t\t}
\t\t\tobj = Object.assign({
\t\t\t\tname: key,
\t\t\t\tonlyModule: onlyModule
\t\t\t}, obj);
\t\t\treturn obj;
\t\t});
\t}

\tif(unsafeCache && typeof unsafeCache !== \"object\") {
\t\tunsafeCache = {};
\t}

\t//// pipeline ////

\t// resolve
\tif(unsafeCache) {
\t\tplugins.push(new UnsafeCachePlugin(\"resolve\", cachePredicate, unsafeCache, cacheWithContext, \"new-resolve\"));
\t\tplugins.push(new ParsePlugin(\"new-resolve\", \"parsed-resolve\"));
\t} else {
\t\tplugins.push(new ParsePlugin(\"resolve\", \"parsed-resolve\"));
\t}

\t// parsed-resolve
\tplugins.push(new DescriptionFilePlugin(\"parsed-resolve\", descriptionFiles, \"described-resolve\"));
\tplugins.push(new NextPlugin(\"after-parsed-resolve\", \"described-resolve\"));

\t// described-resolve
\talias.forEach(function(item) {
\t\tplugins.push(new AliasPlugin(\"described-resolve\", item, \"resolve\"));
\t});
\tplugins.push(new ConcordModulesPlugin(\"described-resolve\", {}, \"resolve\"));
\taliasFields.forEach(function(item) {
\t\tplugins.push(new AliasFieldPlugin(\"described-resolve\", item, \"resolve\"));
\t});
\tplugins.push(new ModuleKindPlugin(\"after-described-resolve\", \"raw-module\"));
\tplugins.push(new JoinRequestPlugin(\"after-described-resolve\", \"relative\"));

\t// raw-module
\tmoduleExtensions.forEach(function(item) {
\t\tplugins.push(new ModuleAppendPlugin(\"raw-module\", item, \"module\"));
\t});
\tif(!enforceModuleExtension)
\t\tplugins.push(new TryNextPlugin(\"raw-module\", null, \"module\"));

\t// module
\tmodules.forEach(function(item) {
\t\tif(Array.isArray(item))
\t\t\tplugins.push(new ModulesInHierachicDirectoriesPlugin(\"module\", item, \"resolve\"));
\t\telse
\t\t\tplugins.push(new ModulesInRootPlugin(\"module\", item, \"resolve\"));
\t});

\t// relative
\tplugins.push(new DescriptionFilePlugin(\"relative\", descriptionFiles, \"described-relative\"));
\tplugins.push(new NextPlugin(\"after-relative\", \"described-relative\"));

\t// described-relative
\tplugins.push(new FileKindPlugin(\"described-relative\", \"raw-file\"));
\tplugins.push(new TryNextPlugin(\"described-relative\", \"as directory\", \"directory\"));

\t// directory
\tplugins.push(new DirectoryExistsPlugin(\"directory\", \"existing-directory\"));

\tif(resolveToContext) {

\t\t// existing-directory
\t\tplugins.push(new NextPlugin(\"existing-directory\", \"resolved\"));

\t} else {

\t\t// existing-directory
\t\tplugins.push(new ConcordMainPlugin(\"existing-directory\", {}, \"resolve\"));
\t\tmainFields.forEach(function(item) {
\t\t\tplugins.push(new MainFieldPlugin(\"existing-directory\", item, \"resolve\"));
\t\t});
\t\tmainFiles.forEach(function(item) {
\t\t\tplugins.push(new UseFilePlugin(\"existing-directory\", item, \"undescribed-raw-file\"));
\t\t});

\t\t// undescribed-raw-file
\t\tplugins.push(new DescriptionFilePlugin(\"undescribed-raw-file\", descriptionFiles, \"raw-file\"));
\t\tplugins.push(new NextPlugin(\"after-undescribed-raw-file\", \"raw-file\"));

\t\t// raw-file
\t\tif(!enforceExtension)
\t\t\tplugins.push(new TryNextPlugin(\"raw-file\", \"no extension\", \"file\"));
\t\tplugins.push(new ConcordExtensionsPlugin(\"raw-file\", {}, \"file\"));
\t\textensions.forEach(function(item) {
\t\t\tplugins.push(new AppendPlugin(\"raw-file\", item, \"file\"));
\t\t});

\t\t// file
\t\talias.forEach(function(item) {
\t\t\tplugins.push(new AliasPlugin(\"file\", item, \"resolve\"));
\t\t});
\t\tplugins.push(new ConcordModulesPlugin(\"file\", {}, \"resolve\"));
\t\taliasFields.forEach(function(item) {
\t\t\tplugins.push(new AliasFieldPlugin(\"file\", item, \"resolve\"));
\t\t});
\t\tif(symlinks)
\t\t\tplugins.push(new SymlinkPlugin(\"file\", \"relative\"));
\t\tplugins.push(new FileExistsPlugin(\"file\", \"existing-file\"));

\t\t// existing-file
\t\tplugins.push(new NextPlugin(\"existing-file\", \"resolved\"));

\t}

\t// resolved
\tplugins.push(new ResultPlugin(\"resolved\"));

\t//// RESOLVER ////

\tplugins.forEach(function(plugin) {
\t\tresolver.apply(plugin);
\t});
\treturn resolver;
};

function mergeFilteredToArray(array, filter) {
\treturn array.reduce(function(array, item) {
\t\tif(filter(item)) {
\t\t\tvar lastElement = array[array.length - 1];
\t\t\tif(Array.isArray(lastElement)) {
\t\t\t\tlastElement.push(item);
\t\t\t} else {
\t\t\t\tarray.push([item]);
\t\t\t}
\t\t\treturn array;
\t\t} else {
\t\t\tarray.push(item);
\t\t\treturn array;
\t\t}
\t}, []);
}

function isAbsolutePath(path) {
\treturn /^[A-Z]:|^\\//.test(path);
}
";
        
        $__internal_75c0a7f83868af62d70106d0f30c6e4b683e128712f6a176d07f37068dbdac59->leave($__internal_75c0a7f83868af62d70106d0f30c6e4b683e128712f6a176d07f37068dbdac59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ResolverFactory.js";
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
var Resolver = require(\"./Resolver\");

var SyncAsyncFileSystemDecorator = require(\"./SyncAsyncFileSystemDecorator\");

var ParsePlugin = require(\"./ParsePlugin\");
var DescriptionFilePlugin = require(\"./DescriptionFilePlugin\");
var NextPlugin = require(\"./NextPlugin\");
var TryNextPlugin = require(\"./TryNextPlugin\");
var ModuleKindPlugin = require(\"./ModuleKindPlugin\");
var FileKindPlugin = require(\"./FileKindPlugin\");
var JoinRequestPlugin = require(\"./JoinRequestPlugin\");
var ModulesInHierachicDirectoriesPlugin = require(\"./ModulesInHierachicDirectoriesPlugin\");
var ModulesInRootPlugin = require(\"./ModulesInRootPlugin\");
var AliasPlugin = require(\"./AliasPlugin\");
var AliasFieldPlugin = require(\"./AliasFieldPlugin\");
var ConcordExtensionsPlugin = require(\"./ConcordExtensionsPlugin\");
var ConcordMainPlugin = require(\"./ConcordMainPlugin\");
var ConcordModulesPlugin = require(\"./ConcordModulesPlugin\");
var DirectoryExistsPlugin = require(\"./DirectoryExistsPlugin\");
var FileExistsPlugin = require(\"./FileExistsPlugin\");
var SymlinkPlugin = require(\"./SymlinkPlugin\");
var MainFieldPlugin = require(\"./MainFieldPlugin\");
var UseFilePlugin = require(\"./UseFilePlugin\");
var AppendPlugin = require(\"./AppendPlugin\");
var ResultPlugin = require(\"./ResultPlugin\");
var ModuleAppendPlugin = require(\"./ModuleAppendPlugin\");
var UnsafeCachePlugin = require(\"./UnsafeCachePlugin\");

exports.createResolver = function(options) {

\t//// OPTIONS ////

\t// A list of directories to resolve modules from, can be absolute path or folder name
\tvar modules = options.modules || [\"node_modules\"];

\t// A list of description files to read from
\tvar descriptionFiles = options.descriptionFiles || [\"package.json\"];

\t// A list of additional resolve plugins which should be applied
\t// The slice is there to create a copy, because otherwise pushing into plugins
\t// changes the original options.plugins array, causing duplicate plugins
\tvar plugins = (options.plugins && options.plugins.slice()) || [];

\t// A list of main fields in description files
\tvar mainFields = options.mainFields || [\"main\"];

\t// A list of alias fields in description files
\tvar aliasFields = options.aliasFields || [];

\t// A list of main files in directories
\tvar mainFiles = options.mainFiles || [\"index\"];

\t// A list of extensions which should be tried for files
\tvar extensions = options.extensions || [\".js\", \".json\", \".node\"];

\t// Enforce that a extension from extensions must be used
\tvar enforceExtension = options.enforceExtension || false;

\t// A list of module extensions which should be tried for modules
\tvar moduleExtensions = options.moduleExtensions || [];

\t// Enforce that a extension from moduleExtensions must be used
\tvar enforceModuleExtension = options.enforceModuleExtension || false;

\t// A list of module alias configurations or an object which maps key to value
\tvar alias = options.alias || [];

\t// Resolve symlinks to their symlinked location
\tvar symlinks = typeof options.symlinks !== \"undefined\" ? options.symlinks : true;

\t// Resolve to a context instead of a file
\tvar resolveToContext = options.resolveToContext || false;

\t// Use this cache object to unsafely cache the successful requests
\tvar unsafeCache = options.unsafeCache || false;

\t// Whether or not the unsafeCache should include request context as part of the cache key.
\tvar cacheWithContext = typeof options.cacheWithContext !== \"undefined\" ? options.cacheWithContext : true;

\t// A function which decides whether a request should be cached or not.
\t// an object is passed with `path` and `request` properties.
\tvar cachePredicate = options.cachePredicate || function() {
\t\treturn true;
\t};

\t// The file system which should be used
\tvar fileSystem = options.fileSystem;

\t// Use only the sync variants of the file system calls
\tvar useSyncFileSystemCalls = options.useSyncFileSystemCalls;

\t// A prepared Resolver to which the plugins are attached
\tvar resolver = options.resolver;

\t//// options processing ////

\tif(!resolver) {
\t\tresolver = new Resolver(useSyncFileSystemCalls ? new SyncAsyncFileSystemDecorator(fileSystem) : fileSystem);
\t}

\textensions = [].concat(extensions);
\tmoduleExtensions = [].concat(moduleExtensions);

\tmodules = mergeFilteredToArray([].concat(modules), function(item) {
\t\treturn !isAbsolutePath(item);
\t});

\tmainFields = mainFields.map(function(item) {
\t\tif(typeof item === \"string\") {
\t\t\titem = {
\t\t\t\tname: item,
\t\t\t\tforceRelative: true
\t\t\t};
\t\t}
\t\treturn item;
\t});

\tif(typeof alias === \"object\" && !Array.isArray(alias)) {
\t\talias = Object.keys(alias).map(function(key) {
\t\t\tvar onlyModule = false;
\t\t\tvar obj = alias[key];
\t\t\tif(/\\\$\$/.test(key)) {
\t\t\t\tonlyModule = true;
\t\t\t\tkey = key.substr(0, key.length - 1);
\t\t\t}
\t\t\tif(typeof obj === \"string\") {
\t\t\t\tobj = {
\t\t\t\t\talias: obj
\t\t\t\t};
\t\t\t}
\t\t\tobj = Object.assign({
\t\t\t\tname: key,
\t\t\t\tonlyModule: onlyModule
\t\t\t}, obj);
\t\t\treturn obj;
\t\t});
\t}

\tif(unsafeCache && typeof unsafeCache !== \"object\") {
\t\tunsafeCache = {};
\t}

\t//// pipeline ////

\t// resolve
\tif(unsafeCache) {
\t\tplugins.push(new UnsafeCachePlugin(\"resolve\", cachePredicate, unsafeCache, cacheWithContext, \"new-resolve\"));
\t\tplugins.push(new ParsePlugin(\"new-resolve\", \"parsed-resolve\"));
\t} else {
\t\tplugins.push(new ParsePlugin(\"resolve\", \"parsed-resolve\"));
\t}

\t// parsed-resolve
\tplugins.push(new DescriptionFilePlugin(\"parsed-resolve\", descriptionFiles, \"described-resolve\"));
\tplugins.push(new NextPlugin(\"after-parsed-resolve\", \"described-resolve\"));

\t// described-resolve
\talias.forEach(function(item) {
\t\tplugins.push(new AliasPlugin(\"described-resolve\", item, \"resolve\"));
\t});
\tplugins.push(new ConcordModulesPlugin(\"described-resolve\", {}, \"resolve\"));
\taliasFields.forEach(function(item) {
\t\tplugins.push(new AliasFieldPlugin(\"described-resolve\", item, \"resolve\"));
\t});
\tplugins.push(new ModuleKindPlugin(\"after-described-resolve\", \"raw-module\"));
\tplugins.push(new JoinRequestPlugin(\"after-described-resolve\", \"relative\"));

\t// raw-module
\tmoduleExtensions.forEach(function(item) {
\t\tplugins.push(new ModuleAppendPlugin(\"raw-module\", item, \"module\"));
\t});
\tif(!enforceModuleExtension)
\t\tplugins.push(new TryNextPlugin(\"raw-module\", null, \"module\"));

\t// module
\tmodules.forEach(function(item) {
\t\tif(Array.isArray(item))
\t\t\tplugins.push(new ModulesInHierachicDirectoriesPlugin(\"module\", item, \"resolve\"));
\t\telse
\t\t\tplugins.push(new ModulesInRootPlugin(\"module\", item, \"resolve\"));
\t});

\t// relative
\tplugins.push(new DescriptionFilePlugin(\"relative\", descriptionFiles, \"described-relative\"));
\tplugins.push(new NextPlugin(\"after-relative\", \"described-relative\"));

\t// described-relative
\tplugins.push(new FileKindPlugin(\"described-relative\", \"raw-file\"));
\tplugins.push(new TryNextPlugin(\"described-relative\", \"as directory\", \"directory\"));

\t// directory
\tplugins.push(new DirectoryExistsPlugin(\"directory\", \"existing-directory\"));

\tif(resolveToContext) {

\t\t// existing-directory
\t\tplugins.push(new NextPlugin(\"existing-directory\", \"resolved\"));

\t} else {

\t\t// existing-directory
\t\tplugins.push(new ConcordMainPlugin(\"existing-directory\", {}, \"resolve\"));
\t\tmainFields.forEach(function(item) {
\t\t\tplugins.push(new MainFieldPlugin(\"existing-directory\", item, \"resolve\"));
\t\t});
\t\tmainFiles.forEach(function(item) {
\t\t\tplugins.push(new UseFilePlugin(\"existing-directory\", item, \"undescribed-raw-file\"));
\t\t});

\t\t// undescribed-raw-file
\t\tplugins.push(new DescriptionFilePlugin(\"undescribed-raw-file\", descriptionFiles, \"raw-file\"));
\t\tplugins.push(new NextPlugin(\"after-undescribed-raw-file\", \"raw-file\"));

\t\t// raw-file
\t\tif(!enforceExtension)
\t\t\tplugins.push(new TryNextPlugin(\"raw-file\", \"no extension\", \"file\"));
\t\tplugins.push(new ConcordExtensionsPlugin(\"raw-file\", {}, \"file\"));
\t\textensions.forEach(function(item) {
\t\t\tplugins.push(new AppendPlugin(\"raw-file\", item, \"file\"));
\t\t});

\t\t// file
\t\talias.forEach(function(item) {
\t\t\tplugins.push(new AliasPlugin(\"file\", item, \"resolve\"));
\t\t});
\t\tplugins.push(new ConcordModulesPlugin(\"file\", {}, \"resolve\"));
\t\taliasFields.forEach(function(item) {
\t\t\tplugins.push(new AliasFieldPlugin(\"file\", item, \"resolve\"));
\t\t});
\t\tif(symlinks)
\t\t\tplugins.push(new SymlinkPlugin(\"file\", \"relative\"));
\t\tplugins.push(new FileExistsPlugin(\"file\", \"existing-file\"));

\t\t// existing-file
\t\tplugins.push(new NextPlugin(\"existing-file\", \"resolved\"));

\t}

\t// resolved
\tplugins.push(new ResultPlugin(\"resolved\"));

\t//// RESOLVER ////

\tplugins.forEach(function(plugin) {
\t\tresolver.apply(plugin);
\t});
\treturn resolver;
};

function mergeFilteredToArray(array, filter) {
\treturn array.reduce(function(array, item) {
\t\tif(filter(item)) {
\t\t\tvar lastElement = array[array.length - 1];
\t\t\tif(Array.isArray(lastElement)) {
\t\t\t\tlastElement.push(item);
\t\t\t} else {
\t\t\t\tarray.push([item]);
\t\t\t}
\t\t\treturn array;
\t\t} else {
\t\t\tarray.push(item);
\t\t\treturn array;
\t\t}
\t}, []);
}

function isAbsolutePath(path) {
\treturn /^[A-Z]:|^\\//.test(path);
}
", "node_modules/enhanced-resolve/lib/ResolverFactory.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ResolverFactory.js");
    }
}
