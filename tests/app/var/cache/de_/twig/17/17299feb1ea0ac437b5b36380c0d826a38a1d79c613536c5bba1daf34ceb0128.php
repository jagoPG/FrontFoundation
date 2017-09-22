<?php

/* node_modules/execa/index.js */
class __TwigTemplate_12dde29b1d1c5e6ee1a7ceb03234bc7d0c4aa6a3513bc0a12c22561610ba649e extends Twig_Template
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
        $__internal_553ee7e28646c430ffedd969c3da6320dde7aac42ee383e0632591c4c6a897d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553ee7e28646c430ffedd969c3da6320dde7aac42ee383e0632591c4c6a897d5->enter($__internal_553ee7e28646c430ffedd969c3da6320dde7aac42ee383e0632591c4c6a897d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/execa/index.js"));

        // line 1
        echo "'use strict';
const childProcess = require('child_process');
const util = require('util');
const crossSpawn = require('cross-spawn');
const stripEof = require('strip-eof');
const npmRunPath = require('npm-run-path');
const isStream = require('is-stream');
const _getStream = require('get-stream');
const pFinally = require('p-finally');
const onExit = require('signal-exit');
const errname = require('./lib/errname');
const stdio = require('./lib/stdio');

const TEN_MEGABYTES = 1000 * 1000 * 10;

function handleArgs(cmd, args, opts) {
\tlet parsed;

\tif (opts && opts.env && opts.extendEnv !== false) {
\t\topts.env = Object.assign({}, process.env, opts.env);
\t}

\tif (opts && opts.__winShell === true) {
\t\tdelete opts.__winShell;
\t\tparsed = {
\t\t\tcommand: cmd,
\t\t\targs,
\t\t\toptions: opts,
\t\t\tfile: cmd,
\t\t\toriginal: cmd
\t\t};
\t} else {
\t\tparsed = crossSpawn._parse(cmd, args, opts);
\t}

\topts = Object.assign({
\t\tmaxBuffer: TEN_MEGABYTES,
\t\tstripEof: true,
\t\tpreferLocal: true,
\t\tlocalDir: parsed.options.cwd || process.cwd(),
\t\tencoding: 'utf8',
\t\treject: true,
\t\tcleanup: true
\t}, parsed.options);

\topts.stdio = stdio(opts);

\tif (opts.preferLocal) {
\t\topts.env = npmRunPath.env(Object.assign({}, opts, {cwd: opts.localDir}));
\t}

\treturn {
\t\tcmd: parsed.command,
\t\targs: parsed.args,
\t\topts,
\t\tparsed
\t};
}

function handleInput(spawned, opts) {
\tconst input = opts.input;

\tif (input === null || input === undefined) {
\t\treturn;
\t}

\tif (isStream(input)) {
\t\tinput.pipe(spawned.stdin);
\t} else {
\t\tspawned.stdin.end(input);
\t}
}

function handleOutput(opts, val) {
\tif (val && opts.stripEof) {
\t\tval = stripEof(val);
\t}

\treturn val;
}

function handleShell(fn, cmd, opts) {
\tlet file = '/bin/sh';
\tlet args = ['-c', cmd];

\topts = Object.assign({}, opts);

\tif (process.platform === 'win32') {
\t\topts.__winShell = true;
\t\tfile = process.env.comspec || 'cmd.exe';
\t\targs = ['/s', '/c', `\"\${cmd}\"`];
\t\topts.windowsVerbatimArguments = true;
\t}

\tif (opts.shell) {
\t\tfile = opts.shell;
\t\tdelete opts.shell;
\t}

\treturn fn(file, args, opts);
}

function getStream(process, stream, encoding, maxBuffer) {
\tif (!process[stream]) {
\t\treturn null;
\t}

\tlet ret;

\tif (encoding) {
\t\tret = _getStream(process[stream], {
\t\t\tencoding,
\t\t\tmaxBuffer
\t\t});
\t} else {
\t\tret = _getStream.buffer(process[stream], {maxBuffer});
\t}

\treturn ret.catch(err => {
\t\terr.stream = stream;
\t\terr.message = `\${stream} \${err.message}`;
\t\tthrow err;
\t});
}

module.exports = (cmd, args, opts) => {
\tlet joinedCmd = cmd;

\tif (Array.isArray(args) && args.length > 0) {
\t\tjoinedCmd += ' ' + args.join(' ');
\t}

\tconst parsed = handleArgs(cmd, args, opts);
\tconst encoding = parsed.opts.encoding;
\tconst maxBuffer = parsed.opts.maxBuffer;

\tlet spawned;
\ttry {
\t\tspawned = childProcess.spawn(parsed.cmd, parsed.args, parsed.opts);
\t} catch (err) {
\t\treturn Promise.reject(err);
\t}

\tlet removeExitHandler;
\tif (parsed.opts.cleanup) {
\t\tremoveExitHandler = onExit(() => {
\t\t\tspawned.kill();
\t\t});
\t}

\tlet timeoutId = null;
\tlet timedOut = false;

\tconst cleanupTimeout = () => {
\t\tif (timeoutId) {
\t\t\tclearTimeout(timeoutId);
\t\t\ttimeoutId = null;
\t\t}
\t};

\tif (parsed.opts.timeout > 0) {
\t\ttimeoutId = setTimeout(() => {
\t\t\ttimeoutId = null;
\t\t\ttimedOut = true;
\t\t\tspawned.kill(parsed.opts.killSignal);
\t\t}, parsed.opts.timeout);
\t}

\tconst processDone = new Promise(resolve => {
\t\tspawned.on('exit', (code, signal) => {
\t\t\tcleanupTimeout();
\t\t\tresolve({code, signal});
\t\t});

\t\tspawned.on('error', err => {
\t\t\tcleanupTimeout();
\t\t\tresolve({err});
\t\t});

\t\tif (spawned.stdin) {
\t\t\tspawned.stdin.on('error', err => {
\t\t\t\tcleanupTimeout();
\t\t\t\tresolve({err});
\t\t\t});
\t\t}
\t});

\tfunction destroy() {
\t\tif (spawned.stdout) {
\t\t\tspawned.stdout.destroy();
\t\t}

\t\tif (spawned.stderr) {
\t\t\tspawned.stderr.destroy();
\t\t}
\t}

\tconst promise = pFinally(Promise.all([
\t\tprocessDone,
\t\tgetStream(spawned, 'stdout', encoding, maxBuffer),
\t\tgetStream(spawned, 'stderr', encoding, maxBuffer)
\t]).then(arr => {
\t\tconst result = arr[0];
\t\tconst stdout = arr[1];
\t\tconst stderr = arr[2];

\t\tlet err = result.err;
\t\tconst code = result.code;
\t\tconst signal = result.signal;

\t\tif (removeExitHandler) {
\t\t\tremoveExitHandler();
\t\t}

\t\tif (err || code !== 0 || signal !== null) {
\t\t\tif (!err) {
\t\t\t\tlet output = '';

\t\t\t\tif (Array.isArray(parsed.opts.stdio)) {
\t\t\t\t\tif (parsed.opts.stdio[2] !== 'inherit') {
\t\t\t\t\t\toutput += output.length > 0 ? stderr : `\\n\${stderr}`;
\t\t\t\t\t}

\t\t\t\t\tif (parsed.opts.stdio[1] !== 'inherit') {
\t\t\t\t\t\toutput += `\\n\${stdout}`;
\t\t\t\t\t}
\t\t\t\t} else if (parsed.opts.stdio !== 'inherit') {
\t\t\t\t\toutput = `\\n\${stderr}\${stdout}`;
\t\t\t\t}

\t\t\t\terr = new Error(`Command failed: \${joinedCmd}\${output}`);
\t\t\t\terr.code = code < 0 ? errname(code) : code;
\t\t\t}

\t\t\t// TODO: missing some timeout logic for killed
\t\t\t// https://github.com/nodejs/node/blob/master/lib/child_process.js#L203
\t\t\t// err.killed = spawned.killed || killed;
\t\t\terr.killed = err.killed || spawned.killed;

\t\t\terr.stdout = stdout;
\t\t\terr.stderr = stderr;
\t\t\terr.failed = true;
\t\t\terr.signal = signal || null;
\t\t\terr.cmd = joinedCmd;
\t\t\terr.timedOut = timedOut;

\t\t\tif (!parsed.opts.reject) {
\t\t\t\treturn err;
\t\t\t}

\t\t\tthrow err;
\t\t}

\t\treturn {
\t\t\tstdout: handleOutput(parsed.opts, stdout),
\t\t\tstderr: handleOutput(parsed.opts, stderr),
\t\t\tcode: 0,
\t\t\tfailed: false,
\t\t\tkilled: false,
\t\t\tsignal: null,
\t\t\tcmd: joinedCmd,
\t\t\ttimedOut: false
\t\t};
\t}), destroy);

\tcrossSpawn._enoent.hookChildProcess(spawned, parsed.parsed);

\thandleInput(spawned, parsed.opts);

\tspawned.then = promise.then.bind(promise);
\tspawned.catch = promise.catch.bind(promise);

\treturn spawned;
};

module.exports.stdout = function () {
\t// TODO: set `stderr: 'ignore'` when that option is implemented
\treturn module.exports.apply(null, arguments).then(x => x.stdout);
};

module.exports.stderr = function () {
\t// TODO: set `stdout: 'ignore'` when that option is implemented
\treturn module.exports.apply(null, arguments).then(x => x.stderr);
};

module.exports.shell = (cmd, opts) => handleShell(module.exports, cmd, opts);

module.exports.sync = (cmd, args, opts) => {
\tconst parsed = handleArgs(cmd, args, opts);

\tif (isStream(parsed.opts.input)) {
\t\tthrow new TypeError('The `input` option cannot be a stream in sync mode');
\t}

\tconst result = childProcess.spawnSync(parsed.cmd, parsed.args, parsed.opts);

\tif (result.error || result.status !== 0) {
\t\tthrow (result.error || new Error(result.stderr === '' ? result.stdout : result.stderr));
\t}

\tresult.stdout = handleOutput(parsed.opts, result.stdout);
\tresult.stderr = handleOutput(parsed.opts, result.stderr);

\treturn result;
};

module.exports.shellSync = (cmd, opts) => handleShell(module.exports.sync, cmd, opts);

module.exports.spawn = util.deprecate(module.exports, 'execa.spawn() is deprecated. Use execa() instead.');
";
        
        $__internal_553ee7e28646c430ffedd969c3da6320dde7aac42ee383e0632591c4c6a897d5->leave($__internal_553ee7e28646c430ffedd969c3da6320dde7aac42ee383e0632591c4c6a897d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/execa/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const childProcess = require('child_process');
const util = require('util');
const crossSpawn = require('cross-spawn');
const stripEof = require('strip-eof');
const npmRunPath = require('npm-run-path');
const isStream = require('is-stream');
const _getStream = require('get-stream');
const pFinally = require('p-finally');
const onExit = require('signal-exit');
const errname = require('./lib/errname');
const stdio = require('./lib/stdio');

const TEN_MEGABYTES = 1000 * 1000 * 10;

function handleArgs(cmd, args, opts) {
\tlet parsed;

\tif (opts && opts.env && opts.extendEnv !== false) {
\t\topts.env = Object.assign({}, process.env, opts.env);
\t}

\tif (opts && opts.__winShell === true) {
\t\tdelete opts.__winShell;
\t\tparsed = {
\t\t\tcommand: cmd,
\t\t\targs,
\t\t\toptions: opts,
\t\t\tfile: cmd,
\t\t\toriginal: cmd
\t\t};
\t} else {
\t\tparsed = crossSpawn._parse(cmd, args, opts);
\t}

\topts = Object.assign({
\t\tmaxBuffer: TEN_MEGABYTES,
\t\tstripEof: true,
\t\tpreferLocal: true,
\t\tlocalDir: parsed.options.cwd || process.cwd(),
\t\tencoding: 'utf8',
\t\treject: true,
\t\tcleanup: true
\t}, parsed.options);

\topts.stdio = stdio(opts);

\tif (opts.preferLocal) {
\t\topts.env = npmRunPath.env(Object.assign({}, opts, {cwd: opts.localDir}));
\t}

\treturn {
\t\tcmd: parsed.command,
\t\targs: parsed.args,
\t\topts,
\t\tparsed
\t};
}

function handleInput(spawned, opts) {
\tconst input = opts.input;

\tif (input === null || input === undefined) {
\t\treturn;
\t}

\tif (isStream(input)) {
\t\tinput.pipe(spawned.stdin);
\t} else {
\t\tspawned.stdin.end(input);
\t}
}

function handleOutput(opts, val) {
\tif (val && opts.stripEof) {
\t\tval = stripEof(val);
\t}

\treturn val;
}

function handleShell(fn, cmd, opts) {
\tlet file = '/bin/sh';
\tlet args = ['-c', cmd];

\topts = Object.assign({}, opts);

\tif (process.platform === 'win32') {
\t\topts.__winShell = true;
\t\tfile = process.env.comspec || 'cmd.exe';
\t\targs = ['/s', '/c', `\"\${cmd}\"`];
\t\topts.windowsVerbatimArguments = true;
\t}

\tif (opts.shell) {
\t\tfile = opts.shell;
\t\tdelete opts.shell;
\t}

\treturn fn(file, args, opts);
}

function getStream(process, stream, encoding, maxBuffer) {
\tif (!process[stream]) {
\t\treturn null;
\t}

\tlet ret;

\tif (encoding) {
\t\tret = _getStream(process[stream], {
\t\t\tencoding,
\t\t\tmaxBuffer
\t\t});
\t} else {
\t\tret = _getStream.buffer(process[stream], {maxBuffer});
\t}

\treturn ret.catch(err => {
\t\terr.stream = stream;
\t\terr.message = `\${stream} \${err.message}`;
\t\tthrow err;
\t});
}

module.exports = (cmd, args, opts) => {
\tlet joinedCmd = cmd;

\tif (Array.isArray(args) && args.length > 0) {
\t\tjoinedCmd += ' ' + args.join(' ');
\t}

\tconst parsed = handleArgs(cmd, args, opts);
\tconst encoding = parsed.opts.encoding;
\tconst maxBuffer = parsed.opts.maxBuffer;

\tlet spawned;
\ttry {
\t\tspawned = childProcess.spawn(parsed.cmd, parsed.args, parsed.opts);
\t} catch (err) {
\t\treturn Promise.reject(err);
\t}

\tlet removeExitHandler;
\tif (parsed.opts.cleanup) {
\t\tremoveExitHandler = onExit(() => {
\t\t\tspawned.kill();
\t\t});
\t}

\tlet timeoutId = null;
\tlet timedOut = false;

\tconst cleanupTimeout = () => {
\t\tif (timeoutId) {
\t\t\tclearTimeout(timeoutId);
\t\t\ttimeoutId = null;
\t\t}
\t};

\tif (parsed.opts.timeout > 0) {
\t\ttimeoutId = setTimeout(() => {
\t\t\ttimeoutId = null;
\t\t\ttimedOut = true;
\t\t\tspawned.kill(parsed.opts.killSignal);
\t\t}, parsed.opts.timeout);
\t}

\tconst processDone = new Promise(resolve => {
\t\tspawned.on('exit', (code, signal) => {
\t\t\tcleanupTimeout();
\t\t\tresolve({code, signal});
\t\t});

\t\tspawned.on('error', err => {
\t\t\tcleanupTimeout();
\t\t\tresolve({err});
\t\t});

\t\tif (spawned.stdin) {
\t\t\tspawned.stdin.on('error', err => {
\t\t\t\tcleanupTimeout();
\t\t\t\tresolve({err});
\t\t\t});
\t\t}
\t});

\tfunction destroy() {
\t\tif (spawned.stdout) {
\t\t\tspawned.stdout.destroy();
\t\t}

\t\tif (spawned.stderr) {
\t\t\tspawned.stderr.destroy();
\t\t}
\t}

\tconst promise = pFinally(Promise.all([
\t\tprocessDone,
\t\tgetStream(spawned, 'stdout', encoding, maxBuffer),
\t\tgetStream(spawned, 'stderr', encoding, maxBuffer)
\t]).then(arr => {
\t\tconst result = arr[0];
\t\tconst stdout = arr[1];
\t\tconst stderr = arr[2];

\t\tlet err = result.err;
\t\tconst code = result.code;
\t\tconst signal = result.signal;

\t\tif (removeExitHandler) {
\t\t\tremoveExitHandler();
\t\t}

\t\tif (err || code !== 0 || signal !== null) {
\t\t\tif (!err) {
\t\t\t\tlet output = '';

\t\t\t\tif (Array.isArray(parsed.opts.stdio)) {
\t\t\t\t\tif (parsed.opts.stdio[2] !== 'inherit') {
\t\t\t\t\t\toutput += output.length > 0 ? stderr : `\\n\${stderr}`;
\t\t\t\t\t}

\t\t\t\t\tif (parsed.opts.stdio[1] !== 'inherit') {
\t\t\t\t\t\toutput += `\\n\${stdout}`;
\t\t\t\t\t}
\t\t\t\t} else if (parsed.opts.stdio !== 'inherit') {
\t\t\t\t\toutput = `\\n\${stderr}\${stdout}`;
\t\t\t\t}

\t\t\t\terr = new Error(`Command failed: \${joinedCmd}\${output}`);
\t\t\t\terr.code = code < 0 ? errname(code) : code;
\t\t\t}

\t\t\t// TODO: missing some timeout logic for killed
\t\t\t// https://github.com/nodejs/node/blob/master/lib/child_process.js#L203
\t\t\t// err.killed = spawned.killed || killed;
\t\t\terr.killed = err.killed || spawned.killed;

\t\t\terr.stdout = stdout;
\t\t\terr.stderr = stderr;
\t\t\terr.failed = true;
\t\t\terr.signal = signal || null;
\t\t\terr.cmd = joinedCmd;
\t\t\terr.timedOut = timedOut;

\t\t\tif (!parsed.opts.reject) {
\t\t\t\treturn err;
\t\t\t}

\t\t\tthrow err;
\t\t}

\t\treturn {
\t\t\tstdout: handleOutput(parsed.opts, stdout),
\t\t\tstderr: handleOutput(parsed.opts, stderr),
\t\t\tcode: 0,
\t\t\tfailed: false,
\t\t\tkilled: false,
\t\t\tsignal: null,
\t\t\tcmd: joinedCmd,
\t\t\ttimedOut: false
\t\t};
\t}), destroy);

\tcrossSpawn._enoent.hookChildProcess(spawned, parsed.parsed);

\thandleInput(spawned, parsed.opts);

\tspawned.then = promise.then.bind(promise);
\tspawned.catch = promise.catch.bind(promise);

\treturn spawned;
};

module.exports.stdout = function () {
\t// TODO: set `stderr: 'ignore'` when that option is implemented
\treturn module.exports.apply(null, arguments).then(x => x.stdout);
};

module.exports.stderr = function () {
\t// TODO: set `stdout: 'ignore'` when that option is implemented
\treturn module.exports.apply(null, arguments).then(x => x.stderr);
};

module.exports.shell = (cmd, opts) => handleShell(module.exports, cmd, opts);

module.exports.sync = (cmd, args, opts) => {
\tconst parsed = handleArgs(cmd, args, opts);

\tif (isStream(parsed.opts.input)) {
\t\tthrow new TypeError('The `input` option cannot be a stream in sync mode');
\t}

\tconst result = childProcess.spawnSync(parsed.cmd, parsed.args, parsed.opts);

\tif (result.error || result.status !== 0) {
\t\tthrow (result.error || new Error(result.stderr === '' ? result.stdout : result.stderr));
\t}

\tresult.stdout = handleOutput(parsed.opts, result.stdout);
\tresult.stderr = handleOutput(parsed.opts, result.stderr);

\treturn result;
};

module.exports.shellSync = (cmd, opts) => handleShell(module.exports.sync, cmd, opts);

module.exports.spawn = util.deprecate(module.exports, 'execa.spawn() is deprecated. Use execa() instead.');
", "node_modules/execa/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/execa/index.js");
    }
}
