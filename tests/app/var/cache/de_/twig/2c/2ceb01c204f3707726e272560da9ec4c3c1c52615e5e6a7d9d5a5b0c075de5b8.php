<?php

/* node_modules/watchpack/lib/watchpack.js */
class __TwigTemplate_c48748cedc3b0f9632b0efd01ae4ee6b3741a0e240afa75ebcc5b3e133773fc3 extends Twig_Template
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
        $__internal_01f808406dcc659fc6762f03c647ab4ebf74bcde75b14b68f9ebf3deef618706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f808406dcc659fc6762f03c647ab4ebf74bcde75b14b68f9ebf3deef618706->enter($__internal_01f808406dcc659fc6762f03c647ab4ebf74bcde75b14b68f9ebf3deef618706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/watchpack/lib/watchpack.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var watcherManager = require(\"./watcherManager\");
var EventEmitter = require(\"events\").EventEmitter;

function Watchpack(options) {
\tEventEmitter.call(this);
\tif(!options) options = {};
\tif(!options.aggregateTimeout) options.aggregateTimeout = 200;
\tthis.options = options;
\tthis.watcherOptions = {
\t\tignored: options.ignored,
\t\tpoll: options.poll
\t};
\tthis.fileWatchers = [];
\tthis.dirWatchers = [];
\tthis.mtimes = Object.create(null);
\tthis.paused = false;
\tthis.aggregatedChanges = [];
\tthis.aggregatedRemovals = [];
\tthis.aggregateTimeout = 0;
\tthis._onTimeout = this._onTimeout.bind(this);
}

module.exports = Watchpack;

Watchpack.prototype = Object.create(EventEmitter.prototype);

Watchpack.prototype.watch = function watch(files, directories, startTime) {
\tthis.paused = false;
\tvar oldFileWatchers = this.fileWatchers;
\tvar oldDirWatchers = this.dirWatchers;
\tthis.fileWatchers = files.map(function(file) {
\t\treturn this._fileWatcher(file, watcherManager.watchFile(file, this.watcherOptions, startTime));
\t}, this);
\tthis.dirWatchers = directories.map(function(dir) {
\t\treturn this._dirWatcher(dir, watcherManager.watchDirectory(dir, this.watcherOptions, startTime));
\t}, this);
\toldFileWatchers.forEach(function(w) {
\t\tw.close();
\t}, this);
\toldDirWatchers.forEach(function(w) {
\t\tw.close();
\t}, this);
};

Watchpack.prototype.close = function resume() {
\tthis.paused = true;
\tif(this.aggregateTimeout)
\t\tclearTimeout(this.aggregateTimeout);
\tthis.fileWatchers.forEach(function(w) {
\t\tw.close();
\t}, this);
\tthis.dirWatchers.forEach(function(w) {
\t\tw.close();
\t}, this);
\tthis.fileWatchers.length = 0;
\tthis.dirWatchers.length = 0;
};

Watchpack.prototype.pause = function pause() {
\tthis.paused = true;
\tif(this.aggregateTimeout)
\t\tclearTimeout(this.aggregateTimeout);
};

function addWatchersToArray(watchers, array) {
\twatchers.forEach(function(w) {
\t\tif(array.indexOf(w.directoryWatcher) < 0) {
\t\t\tarray.push(w.directoryWatcher);
\t\t\taddWatchersToArray(Object.keys(w.directoryWatcher.directories).reduce(function(a, dir) {
\t\t\t\tif(w.directoryWatcher.directories[dir] !== true)
\t\t\t\t\ta.push(w.directoryWatcher.directories[dir]);
\t\t\t\treturn a;
\t\t\t}, []), array);
\t\t}
\t});
}

Watchpack.prototype.getTimes = function() {
\tvar directoryWatchers = [];
\taddWatchersToArray(this.fileWatchers.concat(this.dirWatchers), directoryWatchers);
\tvar obj = Object.create(null);
\tdirectoryWatchers.forEach(function(w) {
\t\tvar times = w.getTimes();
\t\tObject.keys(times).forEach(function(file) {
\t\t\tobj[file] = times[file];
\t\t});
\t});
\treturn obj;
};

Watchpack.prototype._fileWatcher = function _fileWatcher(file, watcher) {
\twatcher.on(\"change\", function(mtime, type) {
\t\tthis._onChange(file, mtime, file, type);
\t}.bind(this));
\twatcher.on(\"remove\", function(type) {
\t\tthis._onRemove(file, file, type);
\t}.bind(this));
\treturn watcher;
};

Watchpack.prototype._dirWatcher = function _dirWatcher(item, watcher) {
\twatcher.on(\"change\", function(file, mtime, type) {
\t\tthis._onChange(item, mtime, file, type);
\t}.bind(this));
\treturn watcher;
};

Watchpack.prototype._onChange = function _onChange(item, mtime, file) {
\tfile = file || item;
\tthis.mtimes[file] = mtime;
\tif(this.paused) return;
\tthis.emit(\"change\", file, mtime);
\tif(this.aggregateTimeout)
\t\tclearTimeout(this.aggregateTimeout);
\tif(this.aggregatedChanges.indexOf(item) < 0)
\t\tthis.aggregatedChanges.push(item);
\tthis.aggregateTimeout = setTimeout(this._onTimeout, this.options.aggregateTimeout);
};

Watchpack.prototype._onRemove = function _onRemove(item, file) {
\tfile = file || item;
\tdelete this.mtimes[item];
\tif(this.paused) return;
\tthis.emit(\"remove\", item);
\tif(this.aggregateTimeout)
\t\tclearTimeout(this.aggregateTimeout);
\tif(this.aggregatedRemovals.indexOf(item) < 0)
\t\tthis.aggregatedRemovals.push(item);
\tthis.aggregateTimeout = setTimeout(this._onTimeout, this.options.aggregateTimeout);
};

Watchpack.prototype._onTimeout = function _onTimeout() {
\tthis.aggregateTimeout = 0;
\tvar changes = this.aggregatedChanges;
\tvar removals = this.aggregatedRemovals;
\tthis.aggregatedChanges = [];
\tthis.aggregatedRemovals = [];
\tthis.emit(\"aggregated\", changes, removals);
};
";
        
        $__internal_01f808406dcc659fc6762f03c647ab4ebf74bcde75b14b68f9ebf3deef618706->leave($__internal_01f808406dcc659fc6762f03c647ab4ebf74bcde75b14b68f9ebf3deef618706_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/watchpack/lib/watchpack.js";
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
var watcherManager = require(\"./watcherManager\");
var EventEmitter = require(\"events\").EventEmitter;

function Watchpack(options) {
\tEventEmitter.call(this);
\tif(!options) options = {};
\tif(!options.aggregateTimeout) options.aggregateTimeout = 200;
\tthis.options = options;
\tthis.watcherOptions = {
\t\tignored: options.ignored,
\t\tpoll: options.poll
\t};
\tthis.fileWatchers = [];
\tthis.dirWatchers = [];
\tthis.mtimes = Object.create(null);
\tthis.paused = false;
\tthis.aggregatedChanges = [];
\tthis.aggregatedRemovals = [];
\tthis.aggregateTimeout = 0;
\tthis._onTimeout = this._onTimeout.bind(this);
}

module.exports = Watchpack;

Watchpack.prototype = Object.create(EventEmitter.prototype);

Watchpack.prototype.watch = function watch(files, directories, startTime) {
\tthis.paused = false;
\tvar oldFileWatchers = this.fileWatchers;
\tvar oldDirWatchers = this.dirWatchers;
\tthis.fileWatchers = files.map(function(file) {
\t\treturn this._fileWatcher(file, watcherManager.watchFile(file, this.watcherOptions, startTime));
\t}, this);
\tthis.dirWatchers = directories.map(function(dir) {
\t\treturn this._dirWatcher(dir, watcherManager.watchDirectory(dir, this.watcherOptions, startTime));
\t}, this);
\toldFileWatchers.forEach(function(w) {
\t\tw.close();
\t}, this);
\toldDirWatchers.forEach(function(w) {
\t\tw.close();
\t}, this);
};

Watchpack.prototype.close = function resume() {
\tthis.paused = true;
\tif(this.aggregateTimeout)
\t\tclearTimeout(this.aggregateTimeout);
\tthis.fileWatchers.forEach(function(w) {
\t\tw.close();
\t}, this);
\tthis.dirWatchers.forEach(function(w) {
\t\tw.close();
\t}, this);
\tthis.fileWatchers.length = 0;
\tthis.dirWatchers.length = 0;
};

Watchpack.prototype.pause = function pause() {
\tthis.paused = true;
\tif(this.aggregateTimeout)
\t\tclearTimeout(this.aggregateTimeout);
};

function addWatchersToArray(watchers, array) {
\twatchers.forEach(function(w) {
\t\tif(array.indexOf(w.directoryWatcher) < 0) {
\t\t\tarray.push(w.directoryWatcher);
\t\t\taddWatchersToArray(Object.keys(w.directoryWatcher.directories).reduce(function(a, dir) {
\t\t\t\tif(w.directoryWatcher.directories[dir] !== true)
\t\t\t\t\ta.push(w.directoryWatcher.directories[dir]);
\t\t\t\treturn a;
\t\t\t}, []), array);
\t\t}
\t});
}

Watchpack.prototype.getTimes = function() {
\tvar directoryWatchers = [];
\taddWatchersToArray(this.fileWatchers.concat(this.dirWatchers), directoryWatchers);
\tvar obj = Object.create(null);
\tdirectoryWatchers.forEach(function(w) {
\t\tvar times = w.getTimes();
\t\tObject.keys(times).forEach(function(file) {
\t\t\tobj[file] = times[file];
\t\t});
\t});
\treturn obj;
};

Watchpack.prototype._fileWatcher = function _fileWatcher(file, watcher) {
\twatcher.on(\"change\", function(mtime, type) {
\t\tthis._onChange(file, mtime, file, type);
\t}.bind(this));
\twatcher.on(\"remove\", function(type) {
\t\tthis._onRemove(file, file, type);
\t}.bind(this));
\treturn watcher;
};

Watchpack.prototype._dirWatcher = function _dirWatcher(item, watcher) {
\twatcher.on(\"change\", function(file, mtime, type) {
\t\tthis._onChange(item, mtime, file, type);
\t}.bind(this));
\treturn watcher;
};

Watchpack.prototype._onChange = function _onChange(item, mtime, file) {
\tfile = file || item;
\tthis.mtimes[file] = mtime;
\tif(this.paused) return;
\tthis.emit(\"change\", file, mtime);
\tif(this.aggregateTimeout)
\t\tclearTimeout(this.aggregateTimeout);
\tif(this.aggregatedChanges.indexOf(item) < 0)
\t\tthis.aggregatedChanges.push(item);
\tthis.aggregateTimeout = setTimeout(this._onTimeout, this.options.aggregateTimeout);
};

Watchpack.prototype._onRemove = function _onRemove(item, file) {
\tfile = file || item;
\tdelete this.mtimes[item];
\tif(this.paused) return;
\tthis.emit(\"remove\", item);
\tif(this.aggregateTimeout)
\t\tclearTimeout(this.aggregateTimeout);
\tif(this.aggregatedRemovals.indexOf(item) < 0)
\t\tthis.aggregatedRemovals.push(item);
\tthis.aggregateTimeout = setTimeout(this._onTimeout, this.options.aggregateTimeout);
};

Watchpack.prototype._onTimeout = function _onTimeout() {
\tthis.aggregateTimeout = 0;
\tvar changes = this.aggregatedChanges;
\tvar removals = this.aggregatedRemovals;
\tthis.aggregatedChanges = [];
\tthis.aggregatedRemovals = [];
\tthis.emit(\"aggregated\", changes, removals);
};
", "node_modules/watchpack/lib/watchpack.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/watchpack/lib/watchpack.js");
    }
}
