<?php

/* node_modules/fsevents/node_modules/getpass/lib/index.js */
class __TwigTemplate_b87d303bd76822bd7247a3f4a1827f37c06c7dd940a768304f82fbf7d73a7ba6 extends Twig_Template
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
        $__internal_30eb5ac823dbf733ba5dad06caaf8a6fabec19038c9dd95875f194a58017f056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30eb5ac823dbf733ba5dad06caaf8a6fabec19038c9dd95875f194a58017f056->enter($__internal_30eb5ac823dbf733ba5dad06caaf8a6fabec19038c9dd95875f194a58017f056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/getpass/lib/index.js"));

        // line 1
        echo "/*
 * Copyright 2016, Joyent, Inc. All rights reserved.
 * Author: Alex Wilson <alex.wilson@joyent.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the \"Software\"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
*/

module.exports = {
\tgetPass: getPass
};

const mod_tty = require('tty');
const mod_fs = require('fs');
const mod_assert = require('assert-plus');

var BACKSPACE = String.fromCharCode(127);
var CTRLC = '\\u0003';
var CTRLD = '\\u0004';

function getPass(opts, cb) {
\tif (typeof (opts) === 'function' && cb === undefined) {
\t\tcb = opts;
\t\topts = {};
\t}
\tmod_assert.object(opts, 'options');
\tmod_assert.func(cb, 'callback');

\tmod_assert.optionalString(opts.prompt, 'options.prompt');
\tif (opts.prompt === undefined)
\t\topts.prompt = 'Password';

\topenTTY(function (err, rfd, wfd, rtty, wtty) {
\t\tif (err) {
\t\t\tcb(err);
\t\t\treturn;
\t\t}

\t\twtty.write(opts.prompt + ':');
\t\trtty.resume();
\t\trtty.setRawMode(true);
\t\trtty.resume();
\t\trtty.setEncoding('utf8');

\t\tvar pw = '';
\t\trtty.on('data', onData);

\t\tfunction onData(data) {
\t\t\tvar str = data.toString('utf8');
\t\t\tfor (var i = 0; i < str.length; ++i) {
\t\t\t\tvar ch = str[i];
\t\t\t\tswitch (ch) {
\t\t\t\tcase '\\r':
\t\t\t\tcase '\\n':
\t\t\t\tcase CTRLD:
\t\t\t\t\tcleanup();
\t\t\t\t\tcb(null, pw);
\t\t\t\t\treturn;
\t\t\t\tcase CTRLC:
\t\t\t\t\tcleanup();
\t\t\t\t\tcb(new Error('Aborted'));
\t\t\t\t\treturn;
\t\t\t\tcase BACKSPACE:
\t\t\t\t\tpw = pw.slice(0, pw.length - 1);
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\tpw += ch;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction cleanup() {
\t\t\twtty.write('\\r\\n');
\t\t\trtty.setRawMode(false);
\t\t\trtty.pause();
\t\t\trtty.removeListener('data', onData);
\t\t\tif (wfd !== undefined && wfd !== rfd) {
\t\t\t\twtty.end();
\t\t\t\tmod_fs.closeSync(wfd);
\t\t\t}
\t\t\tif (rfd !== undefined) {
\t\t\t\trtty.end();
\t\t\t\tmod_fs.closeSync(rfd);
\t\t\t}
\t\t}
\t});
}

function openTTY(cb) {
\tmod_fs.open('/dev/tty', 'r+', function (err, rttyfd) {
\t\tif ((err && (err.code === 'ENOENT' || err.code === 'EACCES')) ||
\t\t    (process.version.match(/^v0[.][0-8][.]/))) {
\t\t\tcb(null, undefined, undefined, process.stdin,
\t\t\t    process.stdout);
\t\t\treturn;
\t\t}
\t\tvar rtty = new mod_tty.ReadStream(rttyfd);
\t\tmod_fs.open('/dev/tty', 'w+', function (err3, wttyfd) {
\t\t\tvar wtty = new mod_tty.WriteStream(wttyfd);
\t\t\tif (err3) {
\t\t\t\tcb(err3);
\t\t\t\treturn;
\t\t\t}
\t\t\tcb(null, rttyfd, wttyfd, rtty, wtty);
\t\t});
\t});
}
";
        
        $__internal_30eb5ac823dbf733ba5dad06caaf8a6fabec19038c9dd95875f194a58017f056->leave($__internal_30eb5ac823dbf733ba5dad06caaf8a6fabec19038c9dd95875f194a58017f056_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/getpass/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * Copyright 2016, Joyent, Inc. All rights reserved.
 * Author: Alex Wilson <alex.wilson@joyent.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the \"Software\"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
*/

module.exports = {
\tgetPass: getPass
};

const mod_tty = require('tty');
const mod_fs = require('fs');
const mod_assert = require('assert-plus');

var BACKSPACE = String.fromCharCode(127);
var CTRLC = '\\u0003';
var CTRLD = '\\u0004';

function getPass(opts, cb) {
\tif (typeof (opts) === 'function' && cb === undefined) {
\t\tcb = opts;
\t\topts = {};
\t}
\tmod_assert.object(opts, 'options');
\tmod_assert.func(cb, 'callback');

\tmod_assert.optionalString(opts.prompt, 'options.prompt');
\tif (opts.prompt === undefined)
\t\topts.prompt = 'Password';

\topenTTY(function (err, rfd, wfd, rtty, wtty) {
\t\tif (err) {
\t\t\tcb(err);
\t\t\treturn;
\t\t}

\t\twtty.write(opts.prompt + ':');
\t\trtty.resume();
\t\trtty.setRawMode(true);
\t\trtty.resume();
\t\trtty.setEncoding('utf8');

\t\tvar pw = '';
\t\trtty.on('data', onData);

\t\tfunction onData(data) {
\t\t\tvar str = data.toString('utf8');
\t\t\tfor (var i = 0; i < str.length; ++i) {
\t\t\t\tvar ch = str[i];
\t\t\t\tswitch (ch) {
\t\t\t\tcase '\\r':
\t\t\t\tcase '\\n':
\t\t\t\tcase CTRLD:
\t\t\t\t\tcleanup();
\t\t\t\t\tcb(null, pw);
\t\t\t\t\treturn;
\t\t\t\tcase CTRLC:
\t\t\t\t\tcleanup();
\t\t\t\t\tcb(new Error('Aborted'));
\t\t\t\t\treturn;
\t\t\t\tcase BACKSPACE:
\t\t\t\t\tpw = pw.slice(0, pw.length - 1);
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\tpw += ch;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction cleanup() {
\t\t\twtty.write('\\r\\n');
\t\t\trtty.setRawMode(false);
\t\t\trtty.pause();
\t\t\trtty.removeListener('data', onData);
\t\t\tif (wfd !== undefined && wfd !== rfd) {
\t\t\t\twtty.end();
\t\t\t\tmod_fs.closeSync(wfd);
\t\t\t}
\t\t\tif (rfd !== undefined) {
\t\t\t\trtty.end();
\t\t\t\tmod_fs.closeSync(rfd);
\t\t\t}
\t\t}
\t});
}

function openTTY(cb) {
\tmod_fs.open('/dev/tty', 'r+', function (err, rttyfd) {
\t\tif ((err && (err.code === 'ENOENT' || err.code === 'EACCES')) ||
\t\t    (process.version.match(/^v0[.][0-8][.]/))) {
\t\t\tcb(null, undefined, undefined, process.stdin,
\t\t\t    process.stdout);
\t\t\treturn;
\t\t}
\t\tvar rtty = new mod_tty.ReadStream(rttyfd);
\t\tmod_fs.open('/dev/tty', 'w+', function (err3, wttyfd) {
\t\t\tvar wtty = new mod_tty.WriteStream(wttyfd);
\t\t\tif (err3) {
\t\t\t\tcb(err3);
\t\t\t\treturn;
\t\t\t}
\t\t\tcb(null, rttyfd, wttyfd, rtty, wtty);
\t\t});
\t});
}
", "node_modules/fsevents/node_modules/getpass/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/getpass/lib/index.js");
    }
}
