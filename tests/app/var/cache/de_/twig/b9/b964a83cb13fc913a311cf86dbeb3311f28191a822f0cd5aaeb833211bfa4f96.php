<?php

/* node_modules/os-locale/index.js */
class __TwigTemplate_809a204c81a1f1a0e469804baaa6caaa6381f12b6c8dafef8a3fb6f8cb75e0ba extends Twig_Template
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
        $__internal_1d98815a2aed9a7abb2923d88a60d998ce996e75763fb5b6ea6c7db592ad8d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d98815a2aed9a7abb2923d88a60d998ce996e75763fb5b6ea6c7db592ad8d86->enter($__internal_1d98815a2aed9a7abb2923d88a60d998ce996e75763fb5b6ea6c7db592ad8d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/os-locale/index.js"));

        // line 1
        echo "'use strict';
const execa = require('execa');
const lcid = require('lcid');
const mem = require('mem');

const defaultOpts = {spawn: true};
const defaultLocale = 'en_US';

function getEnvLocale(env) {
\tenv = env || process.env;
\treturn env.LC_ALL || env.LC_MESSAGES || env.LANG || env.LANGUAGE;
}

function parseLocale(x) {
\tconst env = x.split('\\n').reduce((env, def) => {
\t\tdef = def.split('=');
\t\tenv[def[0]] = def[1].replace(/^\"|\"\$/g, '');
\t\treturn env;
\t}, {});
\treturn getEnvLocale(env);
}

function getLocale(str) {
\treturn (str && str.replace(/[.:].*/, ''));
}

function getAppleLocale() {
\treturn execa.stdout('defaults', ['read', '-g', 'AppleLocale']);
}

function getAppleLocaleSync() {
\treturn execa.sync('defaults', ['read', '-g', 'AppleLocale']).stdout;
}

function getUnixLocale() {
\tif (process.platform === 'darwin') {
\t\treturn getAppleLocale();
\t}

\treturn execa.stdout('locale')
\t\t.then(stdout => getLocale(parseLocale(stdout)));
}

function getUnixLocaleSync() {
\tif (process.platform === 'darwin') {
\t\treturn getAppleLocaleSync();
\t}

\treturn getLocale(parseLocale(execa.sync('locale').stdout));
}

function getWinLocale() {
\treturn execa.stdout('wmic', ['os', 'get', 'locale'])
\t\t.then(stdout => {
\t\t\tconst lcidCode = parseInt(stdout.replace('Locale', ''), 16);
\t\t\treturn lcid.from(lcidCode);
\t\t});
}

function getWinLocaleSync() {
\tconst stdout = execa.sync('wmic', ['os', 'get', 'locale']).stdout;
\tconst lcidCode = parseInt(stdout.replace('Locale', ''), 16);
\treturn lcid.from(lcidCode);
}

module.exports = mem(opts => {
\topts = opts || defaultOpts;
\tconst envLocale = getEnvLocale();
\tlet thenable;

\tif (envLocale || opts.spawn === false) {
\t\tthenable = Promise.resolve(getLocale(envLocale));
\t} else if (process.platform === 'win32') {
\t\tthenable = getWinLocale();
\t} else {
\t\tthenable = getUnixLocale();
\t}

\treturn thenable.then(locale => locale || defaultLocale)
\t\t.catch(() => defaultLocale);
});

module.exports.sync = mem(opts => {
\topts = opts || defaultOpts;
\tconst envLocale = getEnvLocale();
\tlet res;

\tif (envLocale || opts.spawn === false) {
\t\tres = getLocale(envLocale);
\t} else {
\t\ttry {
\t\t\tif (process.platform === 'win32') {
\t\t\t\tres = getWinLocaleSync();
\t\t\t} else {
\t\t\t\tres = getUnixLocaleSync();
\t\t\t}
\t\t} catch (err) {}
\t}

\treturn res || defaultLocale;
});
";
        
        $__internal_1d98815a2aed9a7abb2923d88a60d998ce996e75763fb5b6ea6c7db592ad8d86->leave($__internal_1d98815a2aed9a7abb2923d88a60d998ce996e75763fb5b6ea6c7db592ad8d86_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/os-locale/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const execa = require('execa');
const lcid = require('lcid');
const mem = require('mem');

const defaultOpts = {spawn: true};
const defaultLocale = 'en_US';

function getEnvLocale(env) {
\tenv = env || process.env;
\treturn env.LC_ALL || env.LC_MESSAGES || env.LANG || env.LANGUAGE;
}

function parseLocale(x) {
\tconst env = x.split('\\n').reduce((env, def) => {
\t\tdef = def.split('=');
\t\tenv[def[0]] = def[1].replace(/^\"|\"\$/g, '');
\t\treturn env;
\t}, {});
\treturn getEnvLocale(env);
}

function getLocale(str) {
\treturn (str && str.replace(/[.:].*/, ''));
}

function getAppleLocale() {
\treturn execa.stdout('defaults', ['read', '-g', 'AppleLocale']);
}

function getAppleLocaleSync() {
\treturn execa.sync('defaults', ['read', '-g', 'AppleLocale']).stdout;
}

function getUnixLocale() {
\tif (process.platform === 'darwin') {
\t\treturn getAppleLocale();
\t}

\treturn execa.stdout('locale')
\t\t.then(stdout => getLocale(parseLocale(stdout)));
}

function getUnixLocaleSync() {
\tif (process.platform === 'darwin') {
\t\treturn getAppleLocaleSync();
\t}

\treturn getLocale(parseLocale(execa.sync('locale').stdout));
}

function getWinLocale() {
\treturn execa.stdout('wmic', ['os', 'get', 'locale'])
\t\t.then(stdout => {
\t\t\tconst lcidCode = parseInt(stdout.replace('Locale', ''), 16);
\t\t\treturn lcid.from(lcidCode);
\t\t});
}

function getWinLocaleSync() {
\tconst stdout = execa.sync('wmic', ['os', 'get', 'locale']).stdout;
\tconst lcidCode = parseInt(stdout.replace('Locale', ''), 16);
\treturn lcid.from(lcidCode);
}

module.exports = mem(opts => {
\topts = opts || defaultOpts;
\tconst envLocale = getEnvLocale();
\tlet thenable;

\tif (envLocale || opts.spawn === false) {
\t\tthenable = Promise.resolve(getLocale(envLocale));
\t} else if (process.platform === 'win32') {
\t\tthenable = getWinLocale();
\t} else {
\t\tthenable = getUnixLocale();
\t}

\treturn thenable.then(locale => locale || defaultLocale)
\t\t.catch(() => defaultLocale);
});

module.exports.sync = mem(opts => {
\topts = opts || defaultOpts;
\tconst envLocale = getEnvLocale();
\tlet res;

\tif (envLocale || opts.spawn === false) {
\t\tres = getLocale(envLocale);
\t} else {
\t\ttry {
\t\t\tif (process.platform === 'win32') {
\t\t\t\tres = getWinLocaleSync();
\t\t\t} else {
\t\t\t\tres = getUnixLocaleSync();
\t\t\t}
\t\t} catch (err) {}
\t}

\treturn res || defaultLocale;
});
", "node_modules/os-locale/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/os-locale/index.js");
    }
}
