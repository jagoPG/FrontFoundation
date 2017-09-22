<?php

/* node_modules/watchpack/lib/DirectoryWatcher.js */
class __TwigTemplate_f508345d1a3fe5de1dcf72515fc7590e803659068eec41daa6c4d51f77551f2f extends Twig_Template
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
        $__internal_89105da2478039058c65900f74e447494fadaca60faf22bc2680a3db58409a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89105da2478039058c65900f74e447494fadaca60faf22bc2680a3db58409a35->enter($__internal_89105da2478039058c65900f74e447494fadaca60faf22bc2680a3db58409a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/watchpack/lib/DirectoryWatcher.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var EventEmitter = require(\"events\").EventEmitter;
var async = require(\"async\");
var chokidar = require(\"chokidar\");
var fs = require(\"graceful-fs\");
var path = require(\"path\");

var watcherManager = require(\"./watcherManager\");

var FS_ACCURACY = 10000;


function withoutCase(str) {
\treturn str.toLowerCase();
}


function Watcher(directoryWatcher, filePath, startTime) {
\tEventEmitter.call(this);
\tthis.directoryWatcher = directoryWatcher;
\tthis.path = filePath;
\tthis.startTime = startTime && +startTime;
\tthis.data = 0;
}

Watcher.prototype = Object.create(EventEmitter.prototype);
Watcher.prototype.constructor = Watcher;

Watcher.prototype.checkStartTime = function checkStartTime(mtime, initial) {
\tif(typeof this.startTime !== \"number\") return !initial;
\tvar startTime = this.startTime;
\treturn startTime <= mtime;
};

Watcher.prototype.close = function close() {
\tthis.emit(\"closed\");
};


function DirectoryWatcher(directoryPath, options) {
\tEventEmitter.call(this);
\tthis.options = options;
\tthis.path = directoryPath;
\tthis.files = Object.create(null);
\tthis.directories = Object.create(null);
\tthis.watcher = chokidar.watch(directoryPath, {
\t\tignoreInitial: true,
\t\tpersistent: true,
\t\tfollowSymlinks: false,
\t\tdepth: 0,
\t\tatomic: false,
\t\talwaysStat: true,
\t\tignorePermissionErrors: true,
\t\tignored: options.ignored,
\t\tusePolling: options.poll ? true : undefined,
\t\tinterval: typeof options.poll === \"number\" ? options.poll : undefined,
\t\tdisableGlobbing: true
\t});
\tthis.watcher.on(\"add\", this.onFileAdded.bind(this));
\tthis.watcher.on(\"addDir\", this.onDirectoryAdded.bind(this));
\tthis.watcher.on(\"change\", this.onChange.bind(this));
\tthis.watcher.on(\"unlink\", this.onFileUnlinked.bind(this));
\tthis.watcher.on(\"unlinkDir\", this.onDirectoryUnlinked.bind(this));
\tthis.watcher.on(\"error\", this.onWatcherError.bind(this));
\tthis.initialScan = true;
\tthis.nestedWatching = false;
\tthis.initialScanRemoved = [];
\tthis.doInitialScan();
\tthis.watchers = Object.create(null);
\tthis.refs = 0;
}
module.exports = DirectoryWatcher;

DirectoryWatcher.prototype = Object.create(EventEmitter.prototype);
DirectoryWatcher.prototype.constructor = DirectoryWatcher;

DirectoryWatcher.prototype.setFileTime = function setFileTime(filePath, mtime, initial, type) {
\tvar now = Date.now();
\tvar old = this.files[filePath];

\tthis.files[filePath] = [initial ? Math.min(now, mtime) : now, mtime];

\t// we add the fs accurency to reach the maximum possible mtime
\tif(mtime)
\t\tmtime = mtime + FS_ACCURACY;

\tif(!old) {
\t\tif(mtime) {
\t\t\tif(this.watchers[withoutCase(filePath)]) {
\t\t\t\tthis.watchers[withoutCase(filePath)].forEach(function(w) {
\t\t\t\t\tif(!initial || w.checkStartTime(mtime, initial)) {
\t\t\t\t\t\tw.emit(\"change\", mtime, initial ? \"initial\" : type);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t} else if(!initial && mtime && type !== \"add\") {
\t\tif(this.watchers[withoutCase(filePath)]) {
\t\t\tthis.watchers[withoutCase(filePath)].forEach(function(w) {
\t\t\t\tw.emit(\"change\", mtime, type);
\t\t\t});
\t\t}
\t} else if(!initial && !mtime) {
\t\tif(this.watchers[withoutCase(filePath)]) {
\t\t\tthis.watchers[withoutCase(filePath)].forEach(function(w) {
\t\t\t\tw.emit(\"remove\", type);
\t\t\t});
\t\t}
\t}
\tif(this.watchers[withoutCase(this.path)]) {
\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\tif(!initial || w.checkStartTime(mtime, initial)) {
\t\t\t\tw.emit(\"change\", filePath, mtime, initial ? \"initial\" : type);
\t\t\t}
\t\t});
\t}
};

DirectoryWatcher.prototype.setDirectory = function setDirectory(directoryPath, exist, initial, type) {
\tif(directoryPath === this.path) {
\t\tif(!initial && this.watchers[withoutCase(this.path)]) {
\t\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\t\tw.emit(\"change\", directoryPath, w.data, initial ? \"initial\" : type);
\t\t\t});
\t\t}
\t} else {
\t\tvar old = this.directories[directoryPath];
\t\tif(!old) {
\t\t\tif(exist) {
\t\t\t\tif(this.nestedWatching) {
\t\t\t\t\tthis.createNestedWatcher(directoryPath);
\t\t\t\t} else {
\t\t\t\t\tthis.directories[directoryPath] = true;
\t\t\t\t}
\t\t\t\tif(!initial && this.watchers[withoutCase(this.path)]) {
\t\t\t\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\t\t\t\tw.emit(\"change\", directoryPath, w.data, initial ? \"initial\" : type);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tif(!exist) {
\t\t\t\tif(this.nestedWatching)
\t\t\t\t\tthis.directories[directoryPath].close();
\t\t\t\tdelete this.directories[directoryPath];
\t\t\t\tif(!initial && this.watchers[withoutCase(this.path)]) {
\t\t\t\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\t\t\t\tw.emit(\"change\", directoryPath, w.data, initial ? \"initial\" : type);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t}
\t}
};

DirectoryWatcher.prototype.createNestedWatcher = function(directoryPath) {
\tthis.directories[directoryPath] = watcherManager.watchDirectory(directoryPath, this.options, 1);
\tthis.directories[directoryPath].on(\"change\", function(filePath, mtime, type) {
\t\tif(this.watchers[withoutCase(this.path)]) {
\t\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\t\tif(w.checkStartTime(mtime, false)) {
\t\t\t\t\tw.emit(\"change\", filePath, mtime, type);
\t\t\t\t}
\t\t\t});
\t\t}
\t}.bind(this));
};

DirectoryWatcher.prototype.setNestedWatching = function(flag) {
\tif(this.nestedWatching !== !!flag) {
\t\tthis.nestedWatching = !!flag;
\t\tif(this.nestedWatching) {
\t\t\tObject.keys(this.directories).forEach(function(directory) {
\t\t\t\tthis.createNestedWatcher(directory);
\t\t\t}, this);
\t\t} else {
\t\t\tObject.keys(this.directories).forEach(function(directory) {
\t\t\t\tthis.directories[directory].close();
\t\t\t\tthis.directories[directory] = true;
\t\t\t}, this);
\t\t}
\t}
};

DirectoryWatcher.prototype.watch = function watch(filePath, startTime) {
\tthis.watchers[withoutCase(filePath)] = this.watchers[withoutCase(filePath)] || [];
\tthis.refs++;
\tvar watcher = new Watcher(this, filePath, startTime);
\twatcher.on(\"closed\", function() {
\t\tvar idx = this.watchers[withoutCase(filePath)].indexOf(watcher);
\t\tthis.watchers[withoutCase(filePath)].splice(idx, 1);
\t\tif(this.watchers[withoutCase(filePath)].length === 0) {
\t\t\tdelete this.watchers[withoutCase(filePath)];
\t\t\tif(this.path === filePath)
\t\t\t\tthis.setNestedWatching(false);
\t\t}
\t\tif(--this.refs <= 0)
\t\t\tthis.close();
\t}.bind(this));
\tthis.watchers[withoutCase(filePath)].push(watcher);
\tvar data;
\tif(filePath === this.path) {
\t\tthis.setNestedWatching(true);
\t\tdata = false;
\t\tObject.keys(this.files).forEach(function(file) {
\t\t\tvar d = this.files[file];
\t\t\tif(!data)
\t\t\t\tdata = d;
\t\t\telse
\t\t\t\tdata = [Math.max(data[0], d[0]), Math.max(data[1], d[1])];
\t\t}, this);
\t} else {
\t\tdata = this.files[filePath];
\t}
\tprocess.nextTick(function() {
\t\tif(data) {
\t\t\tvar ts = data[0] === data[1] ? data[0] + FS_ACCURACY : data[0];
\t\t\tif(ts >= startTime)
\t\t\t\twatcher.emit(\"change\", data[1]);
\t\t} else if(this.initialScan && this.initialScanRemoved.indexOf(filePath) >= 0) {
\t\t\twatcher.emit(\"remove\");
\t\t}
\t}.bind(this));
\treturn watcher;
};

DirectoryWatcher.prototype.onFileAdded = function onFileAdded(filePath, stat) {
\tif(filePath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(filePath.substr(this.path.length + 1))) return;

\tthis.setFileTime(filePath, +stat.mtime, false, \"add\");
};

DirectoryWatcher.prototype.onDirectoryAdded = function onDirectoryAdded(directoryPath /*, stat */) {
\tif(directoryPath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(directoryPath.substr(this.path.length + 1))) return;
\tthis.setDirectory(directoryPath, true, false, \"add\");
};

DirectoryWatcher.prototype.onChange = function onChange(filePath, stat) {
\tif(filePath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(filePath.substr(this.path.length + 1))) return;
\tvar mtime = +stat.mtime;
\tensureFsAccuracy(mtime);
\tthis.setFileTime(filePath, mtime, false, \"change\");
};

DirectoryWatcher.prototype.onFileUnlinked = function onFileUnlinked(filePath) {
\tif(filePath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(filePath.substr(this.path.length + 1))) return;
\tthis.setFileTime(filePath, null, false, \"unlink\");
\tif(this.initialScan) {
\t\tthis.initialScanRemoved.push(filePath);
\t}
};

DirectoryWatcher.prototype.onDirectoryUnlinked = function onDirectoryUnlinked(directoryPath) {
\tif(directoryPath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(directoryPath.substr(this.path.length + 1))) return;
\tthis.setDirectory(directoryPath, false, false, \"unlink\");
\tif(this.initialScan) {
\t\tthis.initialScanRemoved.push(directoryPath);
\t}
};

DirectoryWatcher.prototype.onWatcherError = function onWatcherError(/* err */) {
};

DirectoryWatcher.prototype.doInitialScan = function doInitialScan() {
\tfs.readdir(this.path, function(err, items) {
\t\tif(err) {
\t\t\tthis.initialScan = false;
\t\t\treturn;
\t\t}
\t\tasync.forEach(items, function(item, callback) {
\t\t\tvar itemPath = path.join(this.path, item);
\t\t\tfs.stat(itemPath, function(err2, stat) {
\t\t\t\tif(!this.initialScan) return;
\t\t\t\tif(err2) {
\t\t\t\t\tcallback();
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif(stat.isFile()) {
\t\t\t\t\tif(!this.files[itemPath])
\t\t\t\t\t\tthis.setFileTime(itemPath, +stat.mtime, true);
\t\t\t\t} else if(stat.isDirectory()) {
\t\t\t\t\tif(!this.directories[itemPath])
\t\t\t\t\t\tthis.setDirectory(itemPath, true, true);
\t\t\t\t}
\t\t\t\tcallback();
\t\t\t}.bind(this));
\t\t}.bind(this), function() {
\t\t\tthis.initialScan = false;
\t\t\tthis.initialScanRemoved = null;
\t\t}.bind(this));
\t}.bind(this));
};

DirectoryWatcher.prototype.getTimes = function() {
\tvar obj = Object.create(null);
\tvar selfTime = 0;
\tObject.keys(this.files).forEach(function(file) {
\t\tvar data = this.files[file];
\t\tvar time;
\t\tif(data[1]) {
\t\t\ttime = Math.max(data[0], data[1] + FS_ACCURACY);
\t\t} else {
\t\t\ttime = data[0];
\t\t}
\t\tobj[file] = time;
\t\tif(time > selfTime)
\t\t\tselfTime = time;
\t}, this);
\tif(this.nestedWatching) {
\t\tObject.keys(this.directories).forEach(function(dir) {
\t\t\tvar w = this.directories[dir];
\t\t\tvar times = w.directoryWatcher.getTimes();
\t\t\tObject.keys(times).forEach(function(file) {
\t\t\t\tvar time = times[file];
\t\t\t\tobj[file] = time;
\t\t\t\tif(time > selfTime)
\t\t\t\t\tselfTime = time;
\t\t\t});
\t\t}, this);
\t\tobj[this.path] = selfTime;
\t}
\treturn obj;
};

DirectoryWatcher.prototype.close = function() {
\tthis.initialScan = false;
\tthis.watcher.close();
\tif(this.nestedWatching) {
\t\tObject.keys(this.directories).forEach(function(dir) {
\t\t\tthis.directories[dir].close();
\t\t}, this);
\t}
\tthis.emit(\"closed\");
};

function ensureFsAccuracy(mtime) {
\tif(!mtime) return;
\tif(FS_ACCURACY > 1 && mtime % 1 !== 0)
\t\tFS_ACCURACY = 1;
\telse if(FS_ACCURACY > 10 && mtime % 10 !== 0)
\t\tFS_ACCURACY = 10;
\telse if(FS_ACCURACY > 100 && mtime % 100 !== 0)
\t\tFS_ACCURACY = 100;
\telse if(FS_ACCURACY > 1000 && mtime % 1000 !== 0)
\t\tFS_ACCURACY = 1000;
\telse if(FS_ACCURACY > 2000 && mtime % 2000 !== 0)
\t\tFS_ACCURACY = 2000;
}
";
        
        $__internal_89105da2478039058c65900f74e447494fadaca60faf22bc2680a3db58409a35->leave($__internal_89105da2478039058c65900f74e447494fadaca60faf22bc2680a3db58409a35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/watchpack/lib/DirectoryWatcher.js";
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
var EventEmitter = require(\"events\").EventEmitter;
var async = require(\"async\");
var chokidar = require(\"chokidar\");
var fs = require(\"graceful-fs\");
var path = require(\"path\");

var watcherManager = require(\"./watcherManager\");

var FS_ACCURACY = 10000;


function withoutCase(str) {
\treturn str.toLowerCase();
}


function Watcher(directoryWatcher, filePath, startTime) {
\tEventEmitter.call(this);
\tthis.directoryWatcher = directoryWatcher;
\tthis.path = filePath;
\tthis.startTime = startTime && +startTime;
\tthis.data = 0;
}

Watcher.prototype = Object.create(EventEmitter.prototype);
Watcher.prototype.constructor = Watcher;

Watcher.prototype.checkStartTime = function checkStartTime(mtime, initial) {
\tif(typeof this.startTime !== \"number\") return !initial;
\tvar startTime = this.startTime;
\treturn startTime <= mtime;
};

Watcher.prototype.close = function close() {
\tthis.emit(\"closed\");
};


function DirectoryWatcher(directoryPath, options) {
\tEventEmitter.call(this);
\tthis.options = options;
\tthis.path = directoryPath;
\tthis.files = Object.create(null);
\tthis.directories = Object.create(null);
\tthis.watcher = chokidar.watch(directoryPath, {
\t\tignoreInitial: true,
\t\tpersistent: true,
\t\tfollowSymlinks: false,
\t\tdepth: 0,
\t\tatomic: false,
\t\talwaysStat: true,
\t\tignorePermissionErrors: true,
\t\tignored: options.ignored,
\t\tusePolling: options.poll ? true : undefined,
\t\tinterval: typeof options.poll === \"number\" ? options.poll : undefined,
\t\tdisableGlobbing: true
\t});
\tthis.watcher.on(\"add\", this.onFileAdded.bind(this));
\tthis.watcher.on(\"addDir\", this.onDirectoryAdded.bind(this));
\tthis.watcher.on(\"change\", this.onChange.bind(this));
\tthis.watcher.on(\"unlink\", this.onFileUnlinked.bind(this));
\tthis.watcher.on(\"unlinkDir\", this.onDirectoryUnlinked.bind(this));
\tthis.watcher.on(\"error\", this.onWatcherError.bind(this));
\tthis.initialScan = true;
\tthis.nestedWatching = false;
\tthis.initialScanRemoved = [];
\tthis.doInitialScan();
\tthis.watchers = Object.create(null);
\tthis.refs = 0;
}
module.exports = DirectoryWatcher;

DirectoryWatcher.prototype = Object.create(EventEmitter.prototype);
DirectoryWatcher.prototype.constructor = DirectoryWatcher;

DirectoryWatcher.prototype.setFileTime = function setFileTime(filePath, mtime, initial, type) {
\tvar now = Date.now();
\tvar old = this.files[filePath];

\tthis.files[filePath] = [initial ? Math.min(now, mtime) : now, mtime];

\t// we add the fs accurency to reach the maximum possible mtime
\tif(mtime)
\t\tmtime = mtime + FS_ACCURACY;

\tif(!old) {
\t\tif(mtime) {
\t\t\tif(this.watchers[withoutCase(filePath)]) {
\t\t\t\tthis.watchers[withoutCase(filePath)].forEach(function(w) {
\t\t\t\t\tif(!initial || w.checkStartTime(mtime, initial)) {
\t\t\t\t\t\tw.emit(\"change\", mtime, initial ? \"initial\" : type);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}
\t} else if(!initial && mtime && type !== \"add\") {
\t\tif(this.watchers[withoutCase(filePath)]) {
\t\t\tthis.watchers[withoutCase(filePath)].forEach(function(w) {
\t\t\t\tw.emit(\"change\", mtime, type);
\t\t\t});
\t\t}
\t} else if(!initial && !mtime) {
\t\tif(this.watchers[withoutCase(filePath)]) {
\t\t\tthis.watchers[withoutCase(filePath)].forEach(function(w) {
\t\t\t\tw.emit(\"remove\", type);
\t\t\t});
\t\t}
\t}
\tif(this.watchers[withoutCase(this.path)]) {
\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\tif(!initial || w.checkStartTime(mtime, initial)) {
\t\t\t\tw.emit(\"change\", filePath, mtime, initial ? \"initial\" : type);
\t\t\t}
\t\t});
\t}
};

DirectoryWatcher.prototype.setDirectory = function setDirectory(directoryPath, exist, initial, type) {
\tif(directoryPath === this.path) {
\t\tif(!initial && this.watchers[withoutCase(this.path)]) {
\t\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\t\tw.emit(\"change\", directoryPath, w.data, initial ? \"initial\" : type);
\t\t\t});
\t\t}
\t} else {
\t\tvar old = this.directories[directoryPath];
\t\tif(!old) {
\t\t\tif(exist) {
\t\t\t\tif(this.nestedWatching) {
\t\t\t\t\tthis.createNestedWatcher(directoryPath);
\t\t\t\t} else {
\t\t\t\t\tthis.directories[directoryPath] = true;
\t\t\t\t}
\t\t\t\tif(!initial && this.watchers[withoutCase(this.path)]) {
\t\t\t\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\t\t\t\tw.emit(\"change\", directoryPath, w.data, initial ? \"initial\" : type);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tif(!exist) {
\t\t\t\tif(this.nestedWatching)
\t\t\t\t\tthis.directories[directoryPath].close();
\t\t\t\tdelete this.directories[directoryPath];
\t\t\t\tif(!initial && this.watchers[withoutCase(this.path)]) {
\t\t\t\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\t\t\t\tw.emit(\"change\", directoryPath, w.data, initial ? \"initial\" : type);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t}
\t}
};

DirectoryWatcher.prototype.createNestedWatcher = function(directoryPath) {
\tthis.directories[directoryPath] = watcherManager.watchDirectory(directoryPath, this.options, 1);
\tthis.directories[directoryPath].on(\"change\", function(filePath, mtime, type) {
\t\tif(this.watchers[withoutCase(this.path)]) {
\t\t\tthis.watchers[withoutCase(this.path)].forEach(function(w) {
\t\t\t\tif(w.checkStartTime(mtime, false)) {
\t\t\t\t\tw.emit(\"change\", filePath, mtime, type);
\t\t\t\t}
\t\t\t});
\t\t}
\t}.bind(this));
};

DirectoryWatcher.prototype.setNestedWatching = function(flag) {
\tif(this.nestedWatching !== !!flag) {
\t\tthis.nestedWatching = !!flag;
\t\tif(this.nestedWatching) {
\t\t\tObject.keys(this.directories).forEach(function(directory) {
\t\t\t\tthis.createNestedWatcher(directory);
\t\t\t}, this);
\t\t} else {
\t\t\tObject.keys(this.directories).forEach(function(directory) {
\t\t\t\tthis.directories[directory].close();
\t\t\t\tthis.directories[directory] = true;
\t\t\t}, this);
\t\t}
\t}
};

DirectoryWatcher.prototype.watch = function watch(filePath, startTime) {
\tthis.watchers[withoutCase(filePath)] = this.watchers[withoutCase(filePath)] || [];
\tthis.refs++;
\tvar watcher = new Watcher(this, filePath, startTime);
\twatcher.on(\"closed\", function() {
\t\tvar idx = this.watchers[withoutCase(filePath)].indexOf(watcher);
\t\tthis.watchers[withoutCase(filePath)].splice(idx, 1);
\t\tif(this.watchers[withoutCase(filePath)].length === 0) {
\t\t\tdelete this.watchers[withoutCase(filePath)];
\t\t\tif(this.path === filePath)
\t\t\t\tthis.setNestedWatching(false);
\t\t}
\t\tif(--this.refs <= 0)
\t\t\tthis.close();
\t}.bind(this));
\tthis.watchers[withoutCase(filePath)].push(watcher);
\tvar data;
\tif(filePath === this.path) {
\t\tthis.setNestedWatching(true);
\t\tdata = false;
\t\tObject.keys(this.files).forEach(function(file) {
\t\t\tvar d = this.files[file];
\t\t\tif(!data)
\t\t\t\tdata = d;
\t\t\telse
\t\t\t\tdata = [Math.max(data[0], d[0]), Math.max(data[1], d[1])];
\t\t}, this);
\t} else {
\t\tdata = this.files[filePath];
\t}
\tprocess.nextTick(function() {
\t\tif(data) {
\t\t\tvar ts = data[0] === data[1] ? data[0] + FS_ACCURACY : data[0];
\t\t\tif(ts >= startTime)
\t\t\t\twatcher.emit(\"change\", data[1]);
\t\t} else if(this.initialScan && this.initialScanRemoved.indexOf(filePath) >= 0) {
\t\t\twatcher.emit(\"remove\");
\t\t}
\t}.bind(this));
\treturn watcher;
};

DirectoryWatcher.prototype.onFileAdded = function onFileAdded(filePath, stat) {
\tif(filePath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(filePath.substr(this.path.length + 1))) return;

\tthis.setFileTime(filePath, +stat.mtime, false, \"add\");
};

DirectoryWatcher.prototype.onDirectoryAdded = function onDirectoryAdded(directoryPath /*, stat */) {
\tif(directoryPath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(directoryPath.substr(this.path.length + 1))) return;
\tthis.setDirectory(directoryPath, true, false, \"add\");
};

DirectoryWatcher.prototype.onChange = function onChange(filePath, stat) {
\tif(filePath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(filePath.substr(this.path.length + 1))) return;
\tvar mtime = +stat.mtime;
\tensureFsAccuracy(mtime);
\tthis.setFileTime(filePath, mtime, false, \"change\");
};

DirectoryWatcher.prototype.onFileUnlinked = function onFileUnlinked(filePath) {
\tif(filePath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(filePath.substr(this.path.length + 1))) return;
\tthis.setFileTime(filePath, null, false, \"unlink\");
\tif(this.initialScan) {
\t\tthis.initialScanRemoved.push(filePath);
\t}
};

DirectoryWatcher.prototype.onDirectoryUnlinked = function onDirectoryUnlinked(directoryPath) {
\tif(directoryPath.indexOf(this.path) !== 0) return;
\tif(/[\\\\\\/]/.test(directoryPath.substr(this.path.length + 1))) return;
\tthis.setDirectory(directoryPath, false, false, \"unlink\");
\tif(this.initialScan) {
\t\tthis.initialScanRemoved.push(directoryPath);
\t}
};

DirectoryWatcher.prototype.onWatcherError = function onWatcherError(/* err */) {
};

DirectoryWatcher.prototype.doInitialScan = function doInitialScan() {
\tfs.readdir(this.path, function(err, items) {
\t\tif(err) {
\t\t\tthis.initialScan = false;
\t\t\treturn;
\t\t}
\t\tasync.forEach(items, function(item, callback) {
\t\t\tvar itemPath = path.join(this.path, item);
\t\t\tfs.stat(itemPath, function(err2, stat) {
\t\t\t\tif(!this.initialScan) return;
\t\t\t\tif(err2) {
\t\t\t\t\tcallback();
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif(stat.isFile()) {
\t\t\t\t\tif(!this.files[itemPath])
\t\t\t\t\t\tthis.setFileTime(itemPath, +stat.mtime, true);
\t\t\t\t} else if(stat.isDirectory()) {
\t\t\t\t\tif(!this.directories[itemPath])
\t\t\t\t\t\tthis.setDirectory(itemPath, true, true);
\t\t\t\t}
\t\t\t\tcallback();
\t\t\t}.bind(this));
\t\t}.bind(this), function() {
\t\t\tthis.initialScan = false;
\t\t\tthis.initialScanRemoved = null;
\t\t}.bind(this));
\t}.bind(this));
};

DirectoryWatcher.prototype.getTimes = function() {
\tvar obj = Object.create(null);
\tvar selfTime = 0;
\tObject.keys(this.files).forEach(function(file) {
\t\tvar data = this.files[file];
\t\tvar time;
\t\tif(data[1]) {
\t\t\ttime = Math.max(data[0], data[1] + FS_ACCURACY);
\t\t} else {
\t\t\ttime = data[0];
\t\t}
\t\tobj[file] = time;
\t\tif(time > selfTime)
\t\t\tselfTime = time;
\t}, this);
\tif(this.nestedWatching) {
\t\tObject.keys(this.directories).forEach(function(dir) {
\t\t\tvar w = this.directories[dir];
\t\t\tvar times = w.directoryWatcher.getTimes();
\t\t\tObject.keys(times).forEach(function(file) {
\t\t\t\tvar time = times[file];
\t\t\t\tobj[file] = time;
\t\t\t\tif(time > selfTime)
\t\t\t\t\tselfTime = time;
\t\t\t});
\t\t}, this);
\t\tobj[this.path] = selfTime;
\t}
\treturn obj;
};

DirectoryWatcher.prototype.close = function() {
\tthis.initialScan = false;
\tthis.watcher.close();
\tif(this.nestedWatching) {
\t\tObject.keys(this.directories).forEach(function(dir) {
\t\t\tthis.directories[dir].close();
\t\t}, this);
\t}
\tthis.emit(\"closed\");
};

function ensureFsAccuracy(mtime) {
\tif(!mtime) return;
\tif(FS_ACCURACY > 1 && mtime % 1 !== 0)
\t\tFS_ACCURACY = 1;
\telse if(FS_ACCURACY > 10 && mtime % 10 !== 0)
\t\tFS_ACCURACY = 10;
\telse if(FS_ACCURACY > 100 && mtime % 100 !== 0)
\t\tFS_ACCURACY = 100;
\telse if(FS_ACCURACY > 1000 && mtime % 1000 !== 0)
\t\tFS_ACCURACY = 1000;
\telse if(FS_ACCURACY > 2000 && mtime % 2000 !== 0)
\t\tFS_ACCURACY = 2000;
}
", "node_modules/watchpack/lib/DirectoryWatcher.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/watchpack/lib/DirectoryWatcher.js");
    }
}
