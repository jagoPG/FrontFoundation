<?php

/* node_modules/supports-color/index.js */
class __TwigTemplate_c086549d4352e7f079e6df66fa22f7c25fb77cca5e51dcccd55b1c769ac97626 extends Twig_Template
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
        $__internal_018740da38ee1cb353f892f114e3246c8e0ef9d0baba2a43bc7629f57176bb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018740da38ee1cb353f892f114e3246c8e0ef9d0baba2a43bc7629f57176bb81->enter($__internal_018740da38ee1cb353f892f114e3246c8e0ef9d0baba2a43bc7629f57176bb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/supports-color/index.js"));

        // line 1
        echo "'use strict';
const os = require('os');
const hasFlag = require('has-flag');

const env = process.env;

const support = level => {
\tif (level === 0) {
\t\treturn false;
\t}

\treturn {
\t\tlevel,
\t\thasBasic: true,
\t\thas256: level >= 2,
\t\thas16m: level >= 3
\t};
};

let supportLevel = (() => {
\tif (hasFlag('no-color') ||
\t\thasFlag('no-colors') ||
\t\thasFlag('color=false')) {
\t\treturn 0;
\t}

\tif (hasFlag('color=16m') ||
\t\thasFlag('color=full') ||
\t\thasFlag('color=truecolor')) {
\t\treturn 3;
\t}

\tif (hasFlag('color=256')) {
\t\treturn 2;
\t}

\tif (hasFlag('color') ||
\t\thasFlag('colors') ||
\t\thasFlag('color=true') ||
\t\thasFlag('color=always')) {
\t\treturn 1;
\t}

\tif (process.stdout && !process.stdout.isTTY) {
\t\treturn 0;
\t}

\tif (process.platform === 'win32') {
\t\t// Node.js 7.5.0 is the first version of Node.js to include a patch to
\t\t// libuv that enables 256 color output on Windows. Anything earlier and it
\t\t// won't work. However, here we target Node.js 8 at minimum as it is an LTS
\t\t// release, and Node.js 7 is not. Windows 10 build 10586 is the first Windows
\t\t// release that supports 256 colors.
\t\tconst osRelease = os.release().split('.');
\t\tif (
\t\t\tNumber(process.versions.node.split('.')[0]) >= 8 &&
\t\t\tNumber(osRelease[0]) >= 10 &&
\t\t\tNumber(osRelease[2]) >= 10586
\t\t) {
\t\t\treturn 2;
\t\t}

\t\treturn 1;
\t}

\tif ('CI' in env) {
\t\tif (['TRAVIS', 'CIRCLECI', 'APPVEYOR', 'GITLAB_CI'].some(sign => sign in env) || env.CI_NAME === 'codeship') {
\t\t\treturn 1;
\t\t}

\t\treturn 0;
\t}

\tif ('TEAMCITY_VERSION' in env) {
\t\treturn /^(9\\.(0*[1-9]\\d*)\\.|\\d{2,}\\.)/.test(env.TEAMCITY_VERSION) ? 1 : 0;
\t}

\tif ('TERM_PROGRAM' in env) {
\t\tconst version = parseInt((env.TERM_PROGRAM_VERSION || '').split('.')[0], 10);

\t\tswitch (env.TERM_PROGRAM) {
\t\t\tcase 'iTerm.app':
\t\t\t\treturn version >= 3 ? 3 : 2;
\t\t\tcase 'Hyper':
\t\t\t\treturn 3;
\t\t\tcase 'Apple_Terminal':
\t\t\t\treturn 2;
\t\t\t// No default
\t\t}
\t}

\tif (/-256(color)?\$/i.test(env.TERM)) {
\t\treturn 2;
\t}

\tif (/^screen|^xterm|^vt100|color|ansi|cygwin|linux/i.test(env.TERM)) {
\t\treturn 1;
\t}

\tif ('COLORTERM' in env) {
\t\treturn 1;
\t}

\tif (env.TERM === 'dumb') {
\t\treturn 0;
\t}

\treturn 0;
})();

if ('FORCE_COLOR' in env) {
\tsupportLevel = parseInt(env.FORCE_COLOR, 10) === 0 ? 0 : (supportLevel || 1);
}

module.exports = process && support(supportLevel);
";
        
        $__internal_018740da38ee1cb353f892f114e3246c8e0ef9d0baba2a43bc7629f57176bb81->leave($__internal_018740da38ee1cb353f892f114e3246c8e0ef9d0baba2a43bc7629f57176bb81_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/supports-color/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const os = require('os');
const hasFlag = require('has-flag');

const env = process.env;

const support = level => {
\tif (level === 0) {
\t\treturn false;
\t}

\treturn {
\t\tlevel,
\t\thasBasic: true,
\t\thas256: level >= 2,
\t\thas16m: level >= 3
\t};
};

let supportLevel = (() => {
\tif (hasFlag('no-color') ||
\t\thasFlag('no-colors') ||
\t\thasFlag('color=false')) {
\t\treturn 0;
\t}

\tif (hasFlag('color=16m') ||
\t\thasFlag('color=full') ||
\t\thasFlag('color=truecolor')) {
\t\treturn 3;
\t}

\tif (hasFlag('color=256')) {
\t\treturn 2;
\t}

\tif (hasFlag('color') ||
\t\thasFlag('colors') ||
\t\thasFlag('color=true') ||
\t\thasFlag('color=always')) {
\t\treturn 1;
\t}

\tif (process.stdout && !process.stdout.isTTY) {
\t\treturn 0;
\t}

\tif (process.platform === 'win32') {
\t\t// Node.js 7.5.0 is the first version of Node.js to include a patch to
\t\t// libuv that enables 256 color output on Windows. Anything earlier and it
\t\t// won't work. However, here we target Node.js 8 at minimum as it is an LTS
\t\t// release, and Node.js 7 is not. Windows 10 build 10586 is the first Windows
\t\t// release that supports 256 colors.
\t\tconst osRelease = os.release().split('.');
\t\tif (
\t\t\tNumber(process.versions.node.split('.')[0]) >= 8 &&
\t\t\tNumber(osRelease[0]) >= 10 &&
\t\t\tNumber(osRelease[2]) >= 10586
\t\t) {
\t\t\treturn 2;
\t\t}

\t\treturn 1;
\t}

\tif ('CI' in env) {
\t\tif (['TRAVIS', 'CIRCLECI', 'APPVEYOR', 'GITLAB_CI'].some(sign => sign in env) || env.CI_NAME === 'codeship') {
\t\t\treturn 1;
\t\t}

\t\treturn 0;
\t}

\tif ('TEAMCITY_VERSION' in env) {
\t\treturn /^(9\\.(0*[1-9]\\d*)\\.|\\d{2,}\\.)/.test(env.TEAMCITY_VERSION) ? 1 : 0;
\t}

\tif ('TERM_PROGRAM' in env) {
\t\tconst version = parseInt((env.TERM_PROGRAM_VERSION || '').split('.')[0], 10);

\t\tswitch (env.TERM_PROGRAM) {
\t\t\tcase 'iTerm.app':
\t\t\t\treturn version >= 3 ? 3 : 2;
\t\t\tcase 'Hyper':
\t\t\t\treturn 3;
\t\t\tcase 'Apple_Terminal':
\t\t\t\treturn 2;
\t\t\t// No default
\t\t}
\t}

\tif (/-256(color)?\$/i.test(env.TERM)) {
\t\treturn 2;
\t}

\tif (/^screen|^xterm|^vt100|color|ansi|cygwin|linux/i.test(env.TERM)) {
\t\treturn 1;
\t}

\tif ('COLORTERM' in env) {
\t\treturn 1;
\t}

\tif (env.TERM === 'dumb') {
\t\treturn 0;
\t}

\treturn 0;
})();

if ('FORCE_COLOR' in env) {
\tsupportLevel = parseInt(env.FORCE_COLOR, 10) === 0 ? 0 : (supportLevel || 1);
}

module.exports = process && support(supportLevel);
", "node_modules/supports-color/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/supports-color/index.js");
    }
}
