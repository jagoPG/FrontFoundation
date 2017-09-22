<?php

/* node_modules/make-dir/index.js */
class __TwigTemplate_1addc5b9804d8584bdb744bf1bf24f7e042e556b9a92470d2752fd4875bec36e extends Twig_Template
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
        $__internal_e04b6a723b2267de170c6edb2ac6619b5c0444131a4a9f8a536c6e0c72dc0a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04b6a723b2267de170c6edb2ac6619b5c0444131a4a9f8a536c6e0c72dc0a76->enter($__internal_e04b6a723b2267de170c6edb2ac6619b5c0444131a4a9f8a536c6e0c72dc0a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/make-dir/index.js"));

        // line 1
        echo "'use strict';
const fs = require('fs');
const path = require('path');
const pify = require('pify');

const defaults = {
\tmode: 0o777 & (~process.umask()),
\tfs
};

// https://github.com/nodejs/node/issues/8987
// https://github.com/libuv/libuv/pull/1088
const checkPath = pth => {
\tif (process.platform === 'win32') {
\t\tconst pathHasInvalidWinCharacters = /[<>:\"|?*]/.test(pth.replace(path.parse(pth).root, ''));

\t\tif (pathHasInvalidWinCharacters) {
\t\t\tconst err = new Error(`Path contains invalid characters: \${pth}`);
\t\t\terr.code = 'EINVAL';
\t\t\tthrow err;
\t\t}
\t}
};

module.exports = (input, opts) => Promise.resolve().then(() => {
\tcheckPath(input);
\topts = Object.assign({}, defaults, opts);
\tconst fsP = pify(opts.fs);

\tconst make = pth => {
\t\treturn fsP.mkdir(pth, opts.mode)
\t\t\t.then(() => pth)
\t\t\t.catch(err => {
\t\t\t\tif (err.code === 'ENOENT') {
\t\t\t\t\tif (err.message.includes('null bytes') || path.dirname(pth) === pth) {
\t\t\t\t\t\tthrow err;
\t\t\t\t\t}

\t\t\t\t\treturn make(path.dirname(pth)).then(() => make(pth));
\t\t\t\t}

\t\t\t\treturn fsP.stat(pth)
\t\t\t\t\t.then(stats => stats.isDirectory() ? pth : Promise.reject())
\t\t\t\t\t.catch(() => {
\t\t\t\t\t\tthrow err;
\t\t\t\t\t});
\t\t\t});
\t};

\treturn make(path.resolve(input));
});

module.exports.sync = (input, opts) => {
\tcheckPath(input);
\topts = Object.assign({}, defaults, opts);

\tconst make = pth => {
\t\ttry {
\t\t\topts.fs.mkdirSync(pth, opts.mode);
\t\t} catch (err) {
\t\t\tif (err.code === 'ENOENT') {
\t\t\t\tif (err.message.includes('null bytes') || path.dirname(pth) === pth) {
\t\t\t\t\tthrow err;
\t\t\t\t}

\t\t\t\tmake(path.dirname(pth));
\t\t\t\treturn make(pth);
\t\t\t}

\t\t\ttry {
\t\t\t\tif (!opts.fs.statSync(pth).isDirectory()) {
\t\t\t\t\tthrow new Error();
\t\t\t\t}
\t\t\t} catch (_) {
\t\t\t\tthrow err;
\t\t\t}
\t\t}

\t\treturn pth;
\t};

\treturn make(path.resolve(input));
};
";
        
        $__internal_e04b6a723b2267de170c6edb2ac6619b5c0444131a4a9f8a536c6e0c72dc0a76->leave($__internal_e04b6a723b2267de170c6edb2ac6619b5c0444131a4a9f8a536c6e0c72dc0a76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/make-dir/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const fs = require('fs');
const path = require('path');
const pify = require('pify');

const defaults = {
\tmode: 0o777 & (~process.umask()),
\tfs
};

// https://github.com/nodejs/node/issues/8987
// https://github.com/libuv/libuv/pull/1088
const checkPath = pth => {
\tif (process.platform === 'win32') {
\t\tconst pathHasInvalidWinCharacters = /[<>:\"|?*]/.test(pth.replace(path.parse(pth).root, ''));

\t\tif (pathHasInvalidWinCharacters) {
\t\t\tconst err = new Error(`Path contains invalid characters: \${pth}`);
\t\t\terr.code = 'EINVAL';
\t\t\tthrow err;
\t\t}
\t}
};

module.exports = (input, opts) => Promise.resolve().then(() => {
\tcheckPath(input);
\topts = Object.assign({}, defaults, opts);
\tconst fsP = pify(opts.fs);

\tconst make = pth => {
\t\treturn fsP.mkdir(pth, opts.mode)
\t\t\t.then(() => pth)
\t\t\t.catch(err => {
\t\t\t\tif (err.code === 'ENOENT') {
\t\t\t\t\tif (err.message.includes('null bytes') || path.dirname(pth) === pth) {
\t\t\t\t\t\tthrow err;
\t\t\t\t\t}

\t\t\t\t\treturn make(path.dirname(pth)).then(() => make(pth));
\t\t\t\t}

\t\t\t\treturn fsP.stat(pth)
\t\t\t\t\t.then(stats => stats.isDirectory() ? pth : Promise.reject())
\t\t\t\t\t.catch(() => {
\t\t\t\t\t\tthrow err;
\t\t\t\t\t});
\t\t\t});
\t};

\treturn make(path.resolve(input));
});

module.exports.sync = (input, opts) => {
\tcheckPath(input);
\topts = Object.assign({}, defaults, opts);

\tconst make = pth => {
\t\ttry {
\t\t\topts.fs.mkdirSync(pth, opts.mode);
\t\t} catch (err) {
\t\t\tif (err.code === 'ENOENT') {
\t\t\t\tif (err.message.includes('null bytes') || path.dirname(pth) === pth) {
\t\t\t\t\tthrow err;
\t\t\t\t}

\t\t\t\tmake(path.dirname(pth));
\t\t\t\treturn make(pth);
\t\t\t}

\t\t\ttry {
\t\t\t\tif (!opts.fs.statSync(pth).isDirectory()) {
\t\t\t\t\tthrow new Error();
\t\t\t\t}
\t\t\t} catch (_) {
\t\t\t\tthrow err;
\t\t\t}
\t\t}

\t\treturn pth;
\t};

\treturn make(path.resolve(input));
};
", "node_modules/make-dir/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/make-dir/index.js");
    }
}
