<?php

/* node_modules/memory-fs/lib/MemoryFileSystem.js */
class __TwigTemplate_db8554b2053cc31665646cf4b6c720d8708e8dd8d1b7284df39e17787efe4120 extends Twig_Template
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
        $__internal_7f3b57220b44476491c8e1fa18da5ca3b394f006a9c3330133040dc58fae348b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3b57220b44476491c8e1fa18da5ca3b394f006a9c3330133040dc58fae348b->enter($__internal_7f3b57220b44476491c8e1fa18da5ca3b394f006a9c3330133040dc58fae348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/memory-fs/lib/MemoryFileSystem.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/

var normalize = require(\"./normalize\");
var errors = require(\"errno\");
var stream = require(\"readable-stream\");

var ReadableStream = stream.Readable;
var WritableStream = stream.Writable;

function MemoryFileSystemError(err, path) {
\tError.call(this)
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, arguments.callee)
\tthis.code = err.code;
\tthis.errno = err.errno;
\tthis.message = err.description;
\tthis.path = path;
}
MemoryFileSystemError.prototype = new Error();

function MemoryFileSystem(data) {
\tthis.data = data || {};
}
module.exports = MemoryFileSystem;

function isDir(item) {
\tif(typeof item !== \"object\") return false;
\treturn item[\"\"] === true;
}

function isFile(item) {
\tif(typeof item !== \"object\") return false;
\treturn !item[\"\"];
}

function pathToArray(path) {
\tpath = normalize(path);
\tvar nix = /^\\//.test(path);
\tif(!nix) {
\t\tif(!/^[A-Za-z]:/.test(path)) {
\t\t\tthrow new MemoryFileSystemError(errors.code.EINVAL, path);
\t\t}
\t\tpath = path.replace(/[\\\\\\/]+/g, \"\\\\\"); // multi slashs
\t\tpath = path.split(/[\\\\\\/]/);
\t\tpath[0] = path[0].toUpperCase();
\t} else {
\t\tpath = path.replace(/\\/+/g, \"/\"); // multi slashs
\t\tpath = path.substr(1).split(\"/\");
\t}
\tif(!path[path.length-1]) path.pop();
\treturn path;
}

function trueFn() { return true; }
function falseFn() { return false; }

MemoryFileSystem.prototype.meta = function(_path) {
\tvar path = pathToArray(_path);
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\treturn;
\t\tcurrent = current[path[i]];
\t}
\treturn current[path[i]];
}

MemoryFileSystem.prototype.existsSync = function(_path) {
\treturn !!this.meta(_path);
}

MemoryFileSystem.prototype.statSync = function(_path) {
\tvar current = this.meta(_path);
\tif(_path === \"/\" || isDir(current)) {
\t\treturn {
\t\t\tisFile: falseFn,
\t\t\tisDirectory: trueFn,
\t\t\tisBlockDevice: falseFn,
\t\t\tisCharacterDevice: falseFn,
\t\t\tisSymbolicLink: falseFn,
\t\t\tisFIFO: falseFn,
\t\t\tisSocket: falseFn
\t\t};
\t} else if(isFile(current)) {
\t\treturn {
\t\t\tisFile: trueFn,
\t\t\tisDirectory: falseFn,
\t\t\tisBlockDevice: falseFn,
\t\t\tisCharacterDevice: falseFn,
\t\t\tisSymbolicLink: falseFn,
\t\t\tisFIFO: falseFn,
\t\t\tisSocket: falseFn
\t\t};
\t} else {
\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t}
};

MemoryFileSystem.prototype.readFileSync = function(_path, encoding) {
\tvar path = pathToArray(_path);
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(!isFile(current[path[i]])) {
\t\tif(isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.EISDIR, _path);
\t\telse
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t}
\tcurrent = current[path[i]];
\treturn encoding ? current.toString(encoding) : current;
};

MemoryFileSystem.prototype.readdirSync = function(_path) {
\tif(_path === \"/\") return Object.keys(this.data).filter(Boolean);
\tvar path = pathToArray(_path);
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(!isDir(current[path[i]])) {
\t\tif(isFile(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOTDIR, _path);
\t\telse
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t}
\treturn Object.keys(current[path[i]]).filter(Boolean);
};

MemoryFileSystem.prototype.mkdirpSync = function(_path) {
\tvar path = pathToArray(_path);
\tif(path.length === 0) return;
\tvar current = this.data;
\tfor(var i = 0; i < path.length; i++) {
\t\tif(isFile(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOTDIR, _path);
\t\telse if(!isDir(current[path[i]]))
\t\t\tcurrent[path[i]] = {\"\":true};
\t\tcurrent = current[path[i]];
\t}
\treturn;
};

MemoryFileSystem.prototype.mkdirSync = function(_path) {
\tvar path = pathToArray(_path);
\tif(path.length === 0) return;
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(isDir(current[path[i]]))
\t\tthrow new MemoryFileSystemError(errors.code.EEXIST, _path);
\telse if(isFile(current[path[i]]))
\t\tthrow new MemoryFileSystemError(errors.code.ENOTDIR, _path);
\tcurrent[path[i]] = {\"\":true};
\treturn;
};

MemoryFileSystem.prototype._remove = function(_path, name, testFn) {
\tvar path = pathToArray(_path);
\tif(path.length === 0) {
\t\tthrow new MemoryFileSystemError(errors.code.EPERM, _path);
\t}
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(!testFn(current[path[i]]))
\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\tdelete current[path[i]];
\treturn;
};

MemoryFileSystem.prototype.rmdirSync = function(_path) {
\treturn this._remove(_path, \"Directory\", isDir);
};

MemoryFileSystem.prototype.unlinkSync = function(_path) {
\treturn this._remove(_path, \"File\", isFile);
};

MemoryFileSystem.prototype.readlinkSync = function(_path) {
\tthrow new MemoryFileSystemError(errors.code.ENOSYS, _path);
};

MemoryFileSystem.prototype.writeFileSync = function(_path, content, encoding) {
\tif(!content && !encoding) throw new Error(\"No content\");
\tvar path = pathToArray(_path);
\tif(path.length === 0) {
\t\tthrow new MemoryFileSystemError(errors.code.EISDIR, _path);
\t}
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(isDir(current[path[i]]))
\t\tthrow new MemoryFileSystemError(errors.code.EISDIR, _path);
\tcurrent[path[i]] = encoding || typeof content === \"string\" ? new Buffer(content, encoding) : content;
\treturn;
};

MemoryFileSystem.prototype.join = require(\"./join\");
MemoryFileSystem.prototype.pathToArray = pathToArray;
MemoryFileSystem.prototype.normalize = normalize;

// stream functions

MemoryFileSystem.prototype.createReadStream = function(path, options) {
\tvar stream = new ReadableStream();
\tvar done = false;
\tvar data;
\ttry {
\t\tdata = this.readFileSync(path);
\t} catch (e) {
\t\tstream._read = function() {
\t\t\tif (done) {
\t\t\t\treturn;
\t\t\t}
\t\t\tdone = true;
\t\t\tthis.emit('error', e);
\t\t\tthis.push(null);
\t\t};
\t\treturn stream;
\t}
\toptions = options || { };
\toptions.start = options.start || 0;
\toptions.end = options.end || data.length;
\tstream._read = function() {
\t\tif (done) {
\t\t\treturn;
\t\t}
\t\tdone = true;
\t\tthis.push(data.slice(options.start, options.end));
\t\tthis.push(null);
\t};
\treturn stream;
};

MemoryFileSystem.prototype.createWriteStream = function(path, options) {
\tvar stream = new WritableStream(), self = this;
\ttry {
\t\t// Zero the file and make sure it is writable
\t\tthis.writeFileSync(path, new Buffer(0));
\t} catch(e) {
\t\t// This or setImmediate?
\t\tstream.once('prefinish', function() {
\t\t\tstream.emit('error', e);
\t\t});
\t\treturn stream;
\t}
\tvar bl = [ ], len = 0;
\tstream._write = function(chunk, encoding, callback) {
\t\tbl.push(chunk);
\t\tlen += chunk.length;
\t\tself.writeFile(path, Buffer.concat(bl, len), callback);
\t}
\treturn stream;
};

// async functions

[\"stat\", \"readdir\", \"mkdirp\", \"rmdir\", \"unlink\", \"readlink\"].forEach(function(fn) {
\tMemoryFileSystem.prototype[fn] = function(path, callback) {
\t\ttry {
\t\t\tvar result = this[fn + \"Sync\"](path);
\t\t} catch(e) {
\t\t\tsetImmediate(function() {
\t\t\t\tcallback(e);
\t\t\t});

\t\t\treturn;
\t\t}
\t\tsetImmediate(function() {
\t\t\tcallback(null, result);
\t\t});
\t};
});

[\"mkdir\", \"readFile\"].forEach(function(fn) {
\tMemoryFileSystem.prototype[fn] = function(path, optArg, callback) {
\t\tif(!callback) {
\t\t\tcallback = optArg;
\t\t\toptArg = undefined;
\t\t}
\t\ttry {
\t\t\tvar result = this[fn + \"Sync\"](path, optArg);
\t\t} catch(e) {
\t\t\tsetImmediate(function() {
\t\t\t\tcallback(e);
\t\t\t});

\t\t\treturn;
\t\t}
\t\tsetImmediate(function() {
\t\t\tcallback(null, result);
\t\t});
\t};
});

MemoryFileSystem.prototype.exists = function(path, callback) {
\treturn callback(this.existsSync(path));
}

MemoryFileSystem.prototype.writeFile = function (path, content, encoding, callback) {
\tif(!callback) {
\t\tcallback = encoding;
\t\tencoding = undefined;
\t}
\ttry {
\t\tthis.writeFileSync(path, content, encoding);
\t} catch(e) {
\t\treturn callback(e);
\t}
\treturn callback();
};
";
        
        $__internal_7f3b57220b44476491c8e1fa18da5ca3b394f006a9c3330133040dc58fae348b->leave($__internal_7f3b57220b44476491c8e1fa18da5ca3b394f006a9c3330133040dc58fae348b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/memory-fs/lib/MemoryFileSystem.js";
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

var normalize = require(\"./normalize\");
var errors = require(\"errno\");
var stream = require(\"readable-stream\");

var ReadableStream = stream.Readable;
var WritableStream = stream.Writable;

function MemoryFileSystemError(err, path) {
\tError.call(this)
\tif (Error.captureStackTrace)
\t\tError.captureStackTrace(this, arguments.callee)
\tthis.code = err.code;
\tthis.errno = err.errno;
\tthis.message = err.description;
\tthis.path = path;
}
MemoryFileSystemError.prototype = new Error();

function MemoryFileSystem(data) {
\tthis.data = data || {};
}
module.exports = MemoryFileSystem;

function isDir(item) {
\tif(typeof item !== \"object\") return false;
\treturn item[\"\"] === true;
}

function isFile(item) {
\tif(typeof item !== \"object\") return false;
\treturn !item[\"\"];
}

function pathToArray(path) {
\tpath = normalize(path);
\tvar nix = /^\\//.test(path);
\tif(!nix) {
\t\tif(!/^[A-Za-z]:/.test(path)) {
\t\t\tthrow new MemoryFileSystemError(errors.code.EINVAL, path);
\t\t}
\t\tpath = path.replace(/[\\\\\\/]+/g, \"\\\\\"); // multi slashs
\t\tpath = path.split(/[\\\\\\/]/);
\t\tpath[0] = path[0].toUpperCase();
\t} else {
\t\tpath = path.replace(/\\/+/g, \"/\"); // multi slashs
\t\tpath = path.substr(1).split(\"/\");
\t}
\tif(!path[path.length-1]) path.pop();
\treturn path;
}

function trueFn() { return true; }
function falseFn() { return false; }

MemoryFileSystem.prototype.meta = function(_path) {
\tvar path = pathToArray(_path);
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\treturn;
\t\tcurrent = current[path[i]];
\t}
\treturn current[path[i]];
}

MemoryFileSystem.prototype.existsSync = function(_path) {
\treturn !!this.meta(_path);
}

MemoryFileSystem.prototype.statSync = function(_path) {
\tvar current = this.meta(_path);
\tif(_path === \"/\" || isDir(current)) {
\t\treturn {
\t\t\tisFile: falseFn,
\t\t\tisDirectory: trueFn,
\t\t\tisBlockDevice: falseFn,
\t\t\tisCharacterDevice: falseFn,
\t\t\tisSymbolicLink: falseFn,
\t\t\tisFIFO: falseFn,
\t\t\tisSocket: falseFn
\t\t};
\t} else if(isFile(current)) {
\t\treturn {
\t\t\tisFile: trueFn,
\t\t\tisDirectory: falseFn,
\t\t\tisBlockDevice: falseFn,
\t\t\tisCharacterDevice: falseFn,
\t\t\tisSymbolicLink: falseFn,
\t\t\tisFIFO: falseFn,
\t\t\tisSocket: falseFn
\t\t};
\t} else {
\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t}
};

MemoryFileSystem.prototype.readFileSync = function(_path, encoding) {
\tvar path = pathToArray(_path);
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(!isFile(current[path[i]])) {
\t\tif(isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.EISDIR, _path);
\t\telse
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t}
\tcurrent = current[path[i]];
\treturn encoding ? current.toString(encoding) : current;
};

MemoryFileSystem.prototype.readdirSync = function(_path) {
\tif(_path === \"/\") return Object.keys(this.data).filter(Boolean);
\tvar path = pathToArray(_path);
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(!isDir(current[path[i]])) {
\t\tif(isFile(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOTDIR, _path);
\t\telse
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t}
\treturn Object.keys(current[path[i]]).filter(Boolean);
};

MemoryFileSystem.prototype.mkdirpSync = function(_path) {
\tvar path = pathToArray(_path);
\tif(path.length === 0) return;
\tvar current = this.data;
\tfor(var i = 0; i < path.length; i++) {
\t\tif(isFile(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOTDIR, _path);
\t\telse if(!isDir(current[path[i]]))
\t\t\tcurrent[path[i]] = {\"\":true};
\t\tcurrent = current[path[i]];
\t}
\treturn;
};

MemoryFileSystem.prototype.mkdirSync = function(_path) {
\tvar path = pathToArray(_path);
\tif(path.length === 0) return;
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(isDir(current[path[i]]))
\t\tthrow new MemoryFileSystemError(errors.code.EEXIST, _path);
\telse if(isFile(current[path[i]]))
\t\tthrow new MemoryFileSystemError(errors.code.ENOTDIR, _path);
\tcurrent[path[i]] = {\"\":true};
\treturn;
};

MemoryFileSystem.prototype._remove = function(_path, name, testFn) {
\tvar path = pathToArray(_path);
\tif(path.length === 0) {
\t\tthrow new MemoryFileSystemError(errors.code.EPERM, _path);
\t}
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(!testFn(current[path[i]]))
\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\tdelete current[path[i]];
\treturn;
};

MemoryFileSystem.prototype.rmdirSync = function(_path) {
\treturn this._remove(_path, \"Directory\", isDir);
};

MemoryFileSystem.prototype.unlinkSync = function(_path) {
\treturn this._remove(_path, \"File\", isFile);
};

MemoryFileSystem.prototype.readlinkSync = function(_path) {
\tthrow new MemoryFileSystemError(errors.code.ENOSYS, _path);
};

MemoryFileSystem.prototype.writeFileSync = function(_path, content, encoding) {
\tif(!content && !encoding) throw new Error(\"No content\");
\tvar path = pathToArray(_path);
\tif(path.length === 0) {
\t\tthrow new MemoryFileSystemError(errors.code.EISDIR, _path);
\t}
\tvar current = this.data;
\tfor(var i = 0; i < path.length - 1; i++) {
\t\tif(!isDir(current[path[i]]))
\t\t\tthrow new MemoryFileSystemError(errors.code.ENOENT, _path);
\t\tcurrent = current[path[i]];
\t}
\tif(isDir(current[path[i]]))
\t\tthrow new MemoryFileSystemError(errors.code.EISDIR, _path);
\tcurrent[path[i]] = encoding || typeof content === \"string\" ? new Buffer(content, encoding) : content;
\treturn;
};

MemoryFileSystem.prototype.join = require(\"./join\");
MemoryFileSystem.prototype.pathToArray = pathToArray;
MemoryFileSystem.prototype.normalize = normalize;

// stream functions

MemoryFileSystem.prototype.createReadStream = function(path, options) {
\tvar stream = new ReadableStream();
\tvar done = false;
\tvar data;
\ttry {
\t\tdata = this.readFileSync(path);
\t} catch (e) {
\t\tstream._read = function() {
\t\t\tif (done) {
\t\t\t\treturn;
\t\t\t}
\t\t\tdone = true;
\t\t\tthis.emit('error', e);
\t\t\tthis.push(null);
\t\t};
\t\treturn stream;
\t}
\toptions = options || { };
\toptions.start = options.start || 0;
\toptions.end = options.end || data.length;
\tstream._read = function() {
\t\tif (done) {
\t\t\treturn;
\t\t}
\t\tdone = true;
\t\tthis.push(data.slice(options.start, options.end));
\t\tthis.push(null);
\t};
\treturn stream;
};

MemoryFileSystem.prototype.createWriteStream = function(path, options) {
\tvar stream = new WritableStream(), self = this;
\ttry {
\t\t// Zero the file and make sure it is writable
\t\tthis.writeFileSync(path, new Buffer(0));
\t} catch(e) {
\t\t// This or setImmediate?
\t\tstream.once('prefinish', function() {
\t\t\tstream.emit('error', e);
\t\t});
\t\treturn stream;
\t}
\tvar bl = [ ], len = 0;
\tstream._write = function(chunk, encoding, callback) {
\t\tbl.push(chunk);
\t\tlen += chunk.length;
\t\tself.writeFile(path, Buffer.concat(bl, len), callback);
\t}
\treturn stream;
};

// async functions

[\"stat\", \"readdir\", \"mkdirp\", \"rmdir\", \"unlink\", \"readlink\"].forEach(function(fn) {
\tMemoryFileSystem.prototype[fn] = function(path, callback) {
\t\ttry {
\t\t\tvar result = this[fn + \"Sync\"](path);
\t\t} catch(e) {
\t\t\tsetImmediate(function() {
\t\t\t\tcallback(e);
\t\t\t});

\t\t\treturn;
\t\t}
\t\tsetImmediate(function() {
\t\t\tcallback(null, result);
\t\t});
\t};
});

[\"mkdir\", \"readFile\"].forEach(function(fn) {
\tMemoryFileSystem.prototype[fn] = function(path, optArg, callback) {
\t\tif(!callback) {
\t\t\tcallback = optArg;
\t\t\toptArg = undefined;
\t\t}
\t\ttry {
\t\t\tvar result = this[fn + \"Sync\"](path, optArg);
\t\t} catch(e) {
\t\t\tsetImmediate(function() {
\t\t\t\tcallback(e);
\t\t\t});

\t\t\treturn;
\t\t}
\t\tsetImmediate(function() {
\t\t\tcallback(null, result);
\t\t});
\t};
});

MemoryFileSystem.prototype.exists = function(path, callback) {
\treturn callback(this.existsSync(path));
}

MemoryFileSystem.prototype.writeFile = function (path, content, encoding, callback) {
\tif(!callback) {
\t\tcallback = encoding;
\t\tencoding = undefined;
\t}
\ttry {
\t\tthis.writeFileSync(path, content, encoding);
\t} catch(e) {
\t\treturn callback(e);
\t}
\treturn callback();
};
", "node_modules/memory-fs/lib/MemoryFileSystem.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/memory-fs/lib/MemoryFileSystem.js");
    }
}
