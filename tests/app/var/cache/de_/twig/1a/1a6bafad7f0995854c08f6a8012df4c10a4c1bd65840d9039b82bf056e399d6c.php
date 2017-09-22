<?php

/* node_modules/enhanced-resolve/lib/CachedInputFileSystem.js */
class __TwigTemplate_40535f366669c57216607b393d4a902f409d316f0dd9354c42f7afcdb1f00023 extends Twig_Template
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
        $__internal_41063b69a04c8eb41212a91f45982a3f17eba99123a4a971f75155a18ed08f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41063b69a04c8eb41212a91f45982a3f17eba99123a4a971f75155a18ed08f6d->enter($__internal_41063b69a04c8eb41212a91f45982a3f17eba99123a4a971f75155a18ed08f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/CachedInputFileSystem.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
function Storage(duration) {
\tthis.duration = duration;
\tthis.running = new Map();
\tthis.data = new Map();
\tthis.levels = [];
\tif(duration > 0) {
\t\tthis.levels.push(new Set(), new Set(), new Set(), new Set(), new Set(), new Set(), new Set(), new Set(), new Set());
\t\tfor(var i = 8000; i < duration; i += 500)
\t\t\tthis.levels.push(new Set());
\t}
\tthis.count = 0;
\tthis.interval = null;
\tthis.needTickCheck = false;
\tthis.nextTick = null;
\tthis.passive = true;
\tthis.tick = this.tick.bind(this);
}

Storage.prototype.ensureTick = function() {
\tif(!this.interval && this.duration > 0 && !this.nextTick)
\t\tthis.interval = setInterval(this.tick, Math.floor(this.duration / this.levels.length));
};

Storage.prototype.finished = function(name, err, result) {
\tvar callbacks = this.running.get(name);
\tthis.running.delete(name);
\tif(this.duration > 0) {
\t\tthis.data.set(name, [err, result]);
\t\tvar levelData = this.levels[0];
\t\tthis.count -= levelData.size;
\t\tlevelData.add(name);
\t\tthis.count += levelData.size;
\t\tthis.ensureTick();
\t}
\tfor(var i = 0; i < callbacks.length; i++) {
\t\tcallbacks[i](err, result);
\t}
};

Storage.prototype.finishedSync = function(name, err, result) {
\tif(this.duration > 0) {
\t\tthis.data.set(name, [err, result]);
\t\tvar levelData = this.levels[0];
\t\tthis.count -= levelData.size;
\t\tlevelData.add(name);
\t\tthis.count += levelData.size;
\t\tthis.ensureTick();
\t}
};

Storage.prototype.provide = function(name, provider, callback) {
\tif(typeof name !== \"string\") {
\t\tcallback(new TypeError(\"path must be a string\"));
\t\treturn;
\t}
\tvar running = this.running.get(name);
\tif(running) {
\t\trunning.push(callback);
\t\treturn;
\t}
\tif(this.duration > 0) {
\t\tthis.checkTicks();
\t\tvar data = this.data.get(name);
\t\tif(data) {
\t\t\treturn process.nextTick(function() {
\t\t\t\tcallback.apply(null, data);
\t\t\t});
\t\t}
\t}
\tthis.running.set(name, running = [callback]);
\tvar _this = this;
\tprovider(name, function(err, result) {
\t\t_this.finished(name, err, result);
\t});
};

Storage.prototype.provideSync = function(name, provider) {
\tif(typeof name !== \"string\") {
\t\tthrow new TypeError(\"path must be a string\");
\t}
\tif(this.duration > 0) {
\t\tthis.checkTicks();
\t\tvar data = this.data.get(name);
\t\tif(data) {
\t\t\tif(data[0])
\t\t\t\tthrow data[0];
\t\t\treturn data[1];
\t\t}
\t}
\ttry {
\t\tvar result = provider(name);
\t} catch(e) {
\t\tthis.finishedSync(name, e);
\t\tthrow e;
\t}
\tthis.finishedSync(name, null, result);
\treturn result;
};

Storage.prototype.tick = function() {
\tvar decay = this.levels.pop();
\tfor(var item of decay) {
\t\tthis.data.delete(item);
\t}
\tthis.count -= decay.size;
\tdecay.clear();
\tthis.levels.unshift(decay);
\tif(this.count === 0) {
\t\tclearInterval(this.interval);
\t\tthis.interval = null;
\t\tthis.nextTick = null;
\t\treturn true;
\t} else if(this.nextTick) {
\t\tthis.nextTick += Math.floor(this.duration / this.levels.length);
\t\tvar time = new Date().getTime();
\t\tif(this.nextTick > time) {
\t\t\tthis.nextTick = null;
\t\t\tthis.interval = setInterval(this.tick, Math.floor(this.duration / this.levels.length));
\t\t\treturn true;
\t\t}
\t} else if(this.passive) {
\t\tclearInterval(this.interval);
\t\tthis.interval = null;
\t\tthis.nextTick = new Date().getTime() + Math.floor(this.duration / this.levels.length);
\t} else {
\t\tthis.passive = true;
\t}
};

Storage.prototype.checkTicks = function() {
\tthis.passive = false;
\tif(this.nextTick) {
\t\twhile(!this.tick());
\t}
};

Storage.prototype.purge = function(what) {
\tif(!what) {
\t\tthis.count = 0;
\t\tclearInterval(this.interval);
\t\tthis.nextTick = null;
\t\tthis.data.clear();
\t\tthis.levels.forEach(function(level) {
\t\t\tlevel.clear();
\t\t});
\t} else if(typeof what === \"string\") {
\t\tfor(var key of this.data.keys()) {
\t\t\tif(key.startsWith(what))
\t\t\t\tthis.data.delete(key);
\t\t}
\t} else {
\t\tfor(var i = what.length - 1; i >= 0; i--) {
\t\t\tthis.purge(what[i]);
\t\t}
\t}
};

function CachedInputFileSystem(fileSystem, duration) {
\tthis.fileSystem = fileSystem;
\tthis._statStorage = new Storage(duration);
\tthis._readdirStorage = new Storage(duration);
\tthis._readFileStorage = new Storage(duration);
\tthis._readJsonStorage = new Storage(duration);
\tthis._readlinkStorage = new Storage(duration);

\tthis._stat = this.fileSystem.stat ? this.fileSystem.stat.bind(this.fileSystem) : null;
\tif(!this._stat) this.stat = null;

\tthis._statSync = this.fileSystem.statSync ? this.fileSystem.statSync.bind(this.fileSystem) : null;
\tif(!this._statSync) this.statSync = null;

\tthis._readdir = this.fileSystem.readdir ? this.fileSystem.readdir.bind(this.fileSystem) : null;
\tif(!this._readdir) this.readdir = null;

\tthis._readdirSync = this.fileSystem.readdirSync ? this.fileSystem.readdirSync.bind(this.fileSystem) : null;
\tif(!this._readdirSync) this.readdirSync = null;

\tthis._readFile = this.fileSystem.readFile ? this.fileSystem.readFile.bind(this.fileSystem) : null;
\tif(!this._readFile) this.readFile = null;

\tthis._readFileSync = this.fileSystem.readFileSync ? this.fileSystem.readFileSync.bind(this.fileSystem) : null;
\tif(!this._readFileSync) this.readFileSync = null;

\tif(this.fileSystem.readJson) {
\t\tthis._readJson = this.fileSystem.readJson.bind(this.fileSystem);
\t} else if(this.readFile) {
\t\tthis._readJson = function(path, callback) {
\t\t\tthis.readFile(path, function(err, buffer) {
\t\t\t\tif(err) return callback(err);
\t\t\t\ttry {
\t\t\t\t\tvar data = JSON.parse(buffer.toString(\"utf-8\"));
\t\t\t\t} catch(e) {
\t\t\t\t\treturn callback(e);
\t\t\t\t}
\t\t\t\tcallback(null, data);
\t\t\t});
\t\t}.bind(this);
\t} else {
\t\tthis.readJson = null;
\t}
\tif(this.fileSystem.readJsonSync) {
\t\tthis._readJsonSync = this.fileSystem.readJsonSync.bind(this.fileSystem);
\t} else if(this.readFileSync) {
\t\tthis._readJsonSync = function(path) {
\t\t\tvar buffer = this.readFileSync(path);
\t\t\tvar data = JSON.parse(buffer.toString(\"utf-8\"));
\t\t\treturn data;
\t\t}.bind(this);
\t} else {
\t\tthis.readJsonSync = null;
\t}

\tthis._readlink = this.fileSystem.readlink ? this.fileSystem.readlink.bind(this.fileSystem) : null;
\tif(!this._readlink) this.readlink = null;

\tthis._readlinkSync = this.fileSystem.readlinkSync ? this.fileSystem.readlinkSync.bind(this.fileSystem) : null;
\tif(!this._readlinkSync) this.readlinkSync = null;
}
module.exports = CachedInputFileSystem;

CachedInputFileSystem.prototype.stat = function(path, callback) {
\tthis._statStorage.provide(path, this._stat, callback);
};

CachedInputFileSystem.prototype.readdir = function(path, callback) {
\tthis._readdirStorage.provide(path, this._readdir, callback);
};

CachedInputFileSystem.prototype.readFile = function(path, callback) {
\tthis._readFileStorage.provide(path, this._readFile, callback);
};

CachedInputFileSystem.prototype.readJson = function(path, callback) {
\tthis._readJsonStorage.provide(path, this._readJson, callback);
};

CachedInputFileSystem.prototype.readlink = function(path, callback) {
\tthis._readlinkStorage.provide(path, this._readlink, callback);
};

CachedInputFileSystem.prototype.statSync = function(path) {
\treturn this._statStorage.provideSync(path, this._statSync);
};

CachedInputFileSystem.prototype.readdirSync = function(path) {
\treturn this._readdirStorage.provideSync(path, this._readdirSync);
};

CachedInputFileSystem.prototype.readFileSync = function(path) {
\treturn this._readFileStorage.provideSync(path, this._readFileSync);
};

CachedInputFileSystem.prototype.readJsonSync = function(path) {
\treturn this._readJsonStorage.provideSync(path, this._readJsonSync);
};

CachedInputFileSystem.prototype.readlinkSync = function(path) {
\treturn this._readlinkStorage.provideSync(path, this._readlinkSync);
};

CachedInputFileSystem.prototype.purge = function(what) {
\tthis._statStorage.purge(what);
\tthis._readdirStorage.purge(what);
\tthis._readFileStorage.purge(what);
\tthis._readlinkStorage.purge(what);
\tthis._readJsonStorage.purge(what);
};
";
        
        $__internal_41063b69a04c8eb41212a91f45982a3f17eba99123a4a971f75155a18ed08f6d->leave($__internal_41063b69a04c8eb41212a91f45982a3f17eba99123a4a971f75155a18ed08f6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/CachedInputFileSystem.js";
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
function Storage(duration) {
\tthis.duration = duration;
\tthis.running = new Map();
\tthis.data = new Map();
\tthis.levels = [];
\tif(duration > 0) {
\t\tthis.levels.push(new Set(), new Set(), new Set(), new Set(), new Set(), new Set(), new Set(), new Set(), new Set());
\t\tfor(var i = 8000; i < duration; i += 500)
\t\t\tthis.levels.push(new Set());
\t}
\tthis.count = 0;
\tthis.interval = null;
\tthis.needTickCheck = false;
\tthis.nextTick = null;
\tthis.passive = true;
\tthis.tick = this.tick.bind(this);
}

Storage.prototype.ensureTick = function() {
\tif(!this.interval && this.duration > 0 && !this.nextTick)
\t\tthis.interval = setInterval(this.tick, Math.floor(this.duration / this.levels.length));
};

Storage.prototype.finished = function(name, err, result) {
\tvar callbacks = this.running.get(name);
\tthis.running.delete(name);
\tif(this.duration > 0) {
\t\tthis.data.set(name, [err, result]);
\t\tvar levelData = this.levels[0];
\t\tthis.count -= levelData.size;
\t\tlevelData.add(name);
\t\tthis.count += levelData.size;
\t\tthis.ensureTick();
\t}
\tfor(var i = 0; i < callbacks.length; i++) {
\t\tcallbacks[i](err, result);
\t}
};

Storage.prototype.finishedSync = function(name, err, result) {
\tif(this.duration > 0) {
\t\tthis.data.set(name, [err, result]);
\t\tvar levelData = this.levels[0];
\t\tthis.count -= levelData.size;
\t\tlevelData.add(name);
\t\tthis.count += levelData.size;
\t\tthis.ensureTick();
\t}
};

Storage.prototype.provide = function(name, provider, callback) {
\tif(typeof name !== \"string\") {
\t\tcallback(new TypeError(\"path must be a string\"));
\t\treturn;
\t}
\tvar running = this.running.get(name);
\tif(running) {
\t\trunning.push(callback);
\t\treturn;
\t}
\tif(this.duration > 0) {
\t\tthis.checkTicks();
\t\tvar data = this.data.get(name);
\t\tif(data) {
\t\t\treturn process.nextTick(function() {
\t\t\t\tcallback.apply(null, data);
\t\t\t});
\t\t}
\t}
\tthis.running.set(name, running = [callback]);
\tvar _this = this;
\tprovider(name, function(err, result) {
\t\t_this.finished(name, err, result);
\t});
};

Storage.prototype.provideSync = function(name, provider) {
\tif(typeof name !== \"string\") {
\t\tthrow new TypeError(\"path must be a string\");
\t}
\tif(this.duration > 0) {
\t\tthis.checkTicks();
\t\tvar data = this.data.get(name);
\t\tif(data) {
\t\t\tif(data[0])
\t\t\t\tthrow data[0];
\t\t\treturn data[1];
\t\t}
\t}
\ttry {
\t\tvar result = provider(name);
\t} catch(e) {
\t\tthis.finishedSync(name, e);
\t\tthrow e;
\t}
\tthis.finishedSync(name, null, result);
\treturn result;
};

Storage.prototype.tick = function() {
\tvar decay = this.levels.pop();
\tfor(var item of decay) {
\t\tthis.data.delete(item);
\t}
\tthis.count -= decay.size;
\tdecay.clear();
\tthis.levels.unshift(decay);
\tif(this.count === 0) {
\t\tclearInterval(this.interval);
\t\tthis.interval = null;
\t\tthis.nextTick = null;
\t\treturn true;
\t} else if(this.nextTick) {
\t\tthis.nextTick += Math.floor(this.duration / this.levels.length);
\t\tvar time = new Date().getTime();
\t\tif(this.nextTick > time) {
\t\t\tthis.nextTick = null;
\t\t\tthis.interval = setInterval(this.tick, Math.floor(this.duration / this.levels.length));
\t\t\treturn true;
\t\t}
\t} else if(this.passive) {
\t\tclearInterval(this.interval);
\t\tthis.interval = null;
\t\tthis.nextTick = new Date().getTime() + Math.floor(this.duration / this.levels.length);
\t} else {
\t\tthis.passive = true;
\t}
};

Storage.prototype.checkTicks = function() {
\tthis.passive = false;
\tif(this.nextTick) {
\t\twhile(!this.tick());
\t}
};

Storage.prototype.purge = function(what) {
\tif(!what) {
\t\tthis.count = 0;
\t\tclearInterval(this.interval);
\t\tthis.nextTick = null;
\t\tthis.data.clear();
\t\tthis.levels.forEach(function(level) {
\t\t\tlevel.clear();
\t\t});
\t} else if(typeof what === \"string\") {
\t\tfor(var key of this.data.keys()) {
\t\t\tif(key.startsWith(what))
\t\t\t\tthis.data.delete(key);
\t\t}
\t} else {
\t\tfor(var i = what.length - 1; i >= 0; i--) {
\t\t\tthis.purge(what[i]);
\t\t}
\t}
};

function CachedInputFileSystem(fileSystem, duration) {
\tthis.fileSystem = fileSystem;
\tthis._statStorage = new Storage(duration);
\tthis._readdirStorage = new Storage(duration);
\tthis._readFileStorage = new Storage(duration);
\tthis._readJsonStorage = new Storage(duration);
\tthis._readlinkStorage = new Storage(duration);

\tthis._stat = this.fileSystem.stat ? this.fileSystem.stat.bind(this.fileSystem) : null;
\tif(!this._stat) this.stat = null;

\tthis._statSync = this.fileSystem.statSync ? this.fileSystem.statSync.bind(this.fileSystem) : null;
\tif(!this._statSync) this.statSync = null;

\tthis._readdir = this.fileSystem.readdir ? this.fileSystem.readdir.bind(this.fileSystem) : null;
\tif(!this._readdir) this.readdir = null;

\tthis._readdirSync = this.fileSystem.readdirSync ? this.fileSystem.readdirSync.bind(this.fileSystem) : null;
\tif(!this._readdirSync) this.readdirSync = null;

\tthis._readFile = this.fileSystem.readFile ? this.fileSystem.readFile.bind(this.fileSystem) : null;
\tif(!this._readFile) this.readFile = null;

\tthis._readFileSync = this.fileSystem.readFileSync ? this.fileSystem.readFileSync.bind(this.fileSystem) : null;
\tif(!this._readFileSync) this.readFileSync = null;

\tif(this.fileSystem.readJson) {
\t\tthis._readJson = this.fileSystem.readJson.bind(this.fileSystem);
\t} else if(this.readFile) {
\t\tthis._readJson = function(path, callback) {
\t\t\tthis.readFile(path, function(err, buffer) {
\t\t\t\tif(err) return callback(err);
\t\t\t\ttry {
\t\t\t\t\tvar data = JSON.parse(buffer.toString(\"utf-8\"));
\t\t\t\t} catch(e) {
\t\t\t\t\treturn callback(e);
\t\t\t\t}
\t\t\t\tcallback(null, data);
\t\t\t});
\t\t}.bind(this);
\t} else {
\t\tthis.readJson = null;
\t}
\tif(this.fileSystem.readJsonSync) {
\t\tthis._readJsonSync = this.fileSystem.readJsonSync.bind(this.fileSystem);
\t} else if(this.readFileSync) {
\t\tthis._readJsonSync = function(path) {
\t\t\tvar buffer = this.readFileSync(path);
\t\t\tvar data = JSON.parse(buffer.toString(\"utf-8\"));
\t\t\treturn data;
\t\t}.bind(this);
\t} else {
\t\tthis.readJsonSync = null;
\t}

\tthis._readlink = this.fileSystem.readlink ? this.fileSystem.readlink.bind(this.fileSystem) : null;
\tif(!this._readlink) this.readlink = null;

\tthis._readlinkSync = this.fileSystem.readlinkSync ? this.fileSystem.readlinkSync.bind(this.fileSystem) : null;
\tif(!this._readlinkSync) this.readlinkSync = null;
}
module.exports = CachedInputFileSystem;

CachedInputFileSystem.prototype.stat = function(path, callback) {
\tthis._statStorage.provide(path, this._stat, callback);
};

CachedInputFileSystem.prototype.readdir = function(path, callback) {
\tthis._readdirStorage.provide(path, this._readdir, callback);
};

CachedInputFileSystem.prototype.readFile = function(path, callback) {
\tthis._readFileStorage.provide(path, this._readFile, callback);
};

CachedInputFileSystem.prototype.readJson = function(path, callback) {
\tthis._readJsonStorage.provide(path, this._readJson, callback);
};

CachedInputFileSystem.prototype.readlink = function(path, callback) {
\tthis._readlinkStorage.provide(path, this._readlink, callback);
};

CachedInputFileSystem.prototype.statSync = function(path) {
\treturn this._statStorage.provideSync(path, this._statSync);
};

CachedInputFileSystem.prototype.readdirSync = function(path) {
\treturn this._readdirStorage.provideSync(path, this._readdirSync);
};

CachedInputFileSystem.prototype.readFileSync = function(path) {
\treturn this._readFileStorage.provideSync(path, this._readFileSync);
};

CachedInputFileSystem.prototype.readJsonSync = function(path) {
\treturn this._readJsonStorage.provideSync(path, this._readJsonSync);
};

CachedInputFileSystem.prototype.readlinkSync = function(path) {
\treturn this._readlinkStorage.provideSync(path, this._readlinkSync);
};

CachedInputFileSystem.prototype.purge = function(what) {
\tthis._statStorage.purge(what);
\tthis._readdirStorage.purge(what);
\tthis._readFileStorage.purge(what);
\tthis._readlinkStorage.purge(what);
\tthis._readJsonStorage.purge(what);
};
", "node_modules/enhanced-resolve/lib/CachedInputFileSystem.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/CachedInputFileSystem.js");
    }
}
