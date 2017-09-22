<?php

/* node_modules/chalk/index.js */
class __TwigTemplate_a9fd86af7b44805bb7cd864476b6ffcf166c338927099ae401205fee15fef84b extends Twig_Template
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
        $__internal_0a0a30540c6686eda86f69d2a8ca31bc1adec3e6e8f4a89164ec22d4a8c04faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0a30540c6686eda86f69d2a8ca31bc1adec3e6e8f4a89164ec22d4a8c04faa->enter($__internal_0a0a30540c6686eda86f69d2a8ca31bc1adec3e6e8f4a89164ec22d4a8c04faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/chalk/index.js"));

        // line 1
        echo "'use strict';
var escapeStringRegexp = require('escape-string-regexp');
var ansiStyles = require('ansi-styles');
var stripAnsi = require('strip-ansi');
var hasAnsi = require('has-ansi');
var supportsColor = require('supports-color');
var defineProps = Object.defineProperties;
var isSimpleWindowsTerm = process.platform === 'win32' && !/^xterm/i.test(process.env.TERM);

function Chalk(options) {
\t// detect mode if not set manually
\tthis.enabled = !options || options.enabled === undefined ? supportsColor : options.enabled;
}

// use bright blue on Windows as the normal blue color is illegible
if (isSimpleWindowsTerm) {
\tansiStyles.blue.open = '\\u001b[94m';
}

var styles = (function () {
\tvar ret = {};

\tObject.keys(ansiStyles).forEach(function (key) {
\t\tansiStyles[key].closeRe = new RegExp(escapeStringRegexp(ansiStyles[key].close), 'g');

\t\tret[key] = {
\t\t\tget: function () {
\t\t\t\treturn build.call(this, this._styles.concat(key));
\t\t\t}
\t\t};
\t});

\treturn ret;
})();

var proto = defineProps(function chalk() {}, styles);

function build(_styles) {
\tvar builder = function () {
\t\treturn applyStyle.apply(builder, arguments);
\t};

\tbuilder._styles = _styles;
\tbuilder.enabled = this.enabled;
\t// __proto__ is used because we must return a function, but there is
\t// no way to create a function with a different prototype.
\t/* eslint-disable no-proto */
\tbuilder.__proto__ = proto;

\treturn builder;
}

function applyStyle() {
\t// support varags, but simply cast to string in case there's only one arg
\tvar args = arguments;
\tvar argsLen = args.length;
\tvar str = argsLen !== 0 && String(arguments[0]);

\tif (argsLen > 1) {
\t\t// don't slice `arguments`, it prevents v8 optimizations
\t\tfor (var a = 1; a < argsLen; a++) {
\t\t\tstr += ' ' + args[a];
\t\t}
\t}

\tif (!this.enabled || !str) {
\t\treturn str;
\t}

\tvar nestedStyles = this._styles;
\tvar i = nestedStyles.length;

\t// Turns out that on Windows dimmed gray text becomes invisible in cmd.exe,
\t// see https://github.com/chalk/chalk/issues/58
\t// If we're on Windows and we're dealing with a gray color, temporarily make 'dim' a noop.
\tvar originalDim = ansiStyles.dim.open;
\tif (isSimpleWindowsTerm && (nestedStyles.indexOf('gray') !== -1 || nestedStyles.indexOf('grey') !== -1)) {
\t\tansiStyles.dim.open = '';
\t}

\twhile (i--) {
\t\tvar code = ansiStyles[nestedStyles[i]];

\t\t// Replace any instances already present with a re-opening code
\t\t// otherwise only the part of the string until said closing code
\t\t// will be colored, and the rest will simply be 'plain'.
\t\tstr = code.open + str.replace(code.closeRe, code.open) + code.close;
\t}

\t// Reset the original 'dim' if we changed it to work around the Windows dimmed gray issue.
\tansiStyles.dim.open = originalDim;

\treturn str;
}

function init() {
\tvar ret = {};

\tObject.keys(styles).forEach(function (name) {
\t\tret[name] = {
\t\t\tget: function () {
\t\t\t\treturn build.call(this, [name]);
\t\t\t}
\t\t};
\t});

\treturn ret;
}

defineProps(Chalk.prototype, init());

module.exports = new Chalk();
module.exports.styles = ansiStyles;
module.exports.hasColor = hasAnsi;
module.exports.stripColor = stripAnsi;
module.exports.supportsColor = supportsColor;
";
        
        $__internal_0a0a30540c6686eda86f69d2a8ca31bc1adec3e6e8f4a89164ec22d4a8c04faa->leave($__internal_0a0a30540c6686eda86f69d2a8ca31bc1adec3e6e8f4a89164ec22d4a8c04faa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/chalk/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var escapeStringRegexp = require('escape-string-regexp');
var ansiStyles = require('ansi-styles');
var stripAnsi = require('strip-ansi');
var hasAnsi = require('has-ansi');
var supportsColor = require('supports-color');
var defineProps = Object.defineProperties;
var isSimpleWindowsTerm = process.platform === 'win32' && !/^xterm/i.test(process.env.TERM);

function Chalk(options) {
\t// detect mode if not set manually
\tthis.enabled = !options || options.enabled === undefined ? supportsColor : options.enabled;
}

// use bright blue on Windows as the normal blue color is illegible
if (isSimpleWindowsTerm) {
\tansiStyles.blue.open = '\\u001b[94m';
}

var styles = (function () {
\tvar ret = {};

\tObject.keys(ansiStyles).forEach(function (key) {
\t\tansiStyles[key].closeRe = new RegExp(escapeStringRegexp(ansiStyles[key].close), 'g');

\t\tret[key] = {
\t\t\tget: function () {
\t\t\t\treturn build.call(this, this._styles.concat(key));
\t\t\t}
\t\t};
\t});

\treturn ret;
})();

var proto = defineProps(function chalk() {}, styles);

function build(_styles) {
\tvar builder = function () {
\t\treturn applyStyle.apply(builder, arguments);
\t};

\tbuilder._styles = _styles;
\tbuilder.enabled = this.enabled;
\t// __proto__ is used because we must return a function, but there is
\t// no way to create a function with a different prototype.
\t/* eslint-disable no-proto */
\tbuilder.__proto__ = proto;

\treturn builder;
}

function applyStyle() {
\t// support varags, but simply cast to string in case there's only one arg
\tvar args = arguments;
\tvar argsLen = args.length;
\tvar str = argsLen !== 0 && String(arguments[0]);

\tif (argsLen > 1) {
\t\t// don't slice `arguments`, it prevents v8 optimizations
\t\tfor (var a = 1; a < argsLen; a++) {
\t\t\tstr += ' ' + args[a];
\t\t}
\t}

\tif (!this.enabled || !str) {
\t\treturn str;
\t}

\tvar nestedStyles = this._styles;
\tvar i = nestedStyles.length;

\t// Turns out that on Windows dimmed gray text becomes invisible in cmd.exe,
\t// see https://github.com/chalk/chalk/issues/58
\t// If we're on Windows and we're dealing with a gray color, temporarily make 'dim' a noop.
\tvar originalDim = ansiStyles.dim.open;
\tif (isSimpleWindowsTerm && (nestedStyles.indexOf('gray') !== -1 || nestedStyles.indexOf('grey') !== -1)) {
\t\tansiStyles.dim.open = '';
\t}

\twhile (i--) {
\t\tvar code = ansiStyles[nestedStyles[i]];

\t\t// Replace any instances already present with a re-opening code
\t\t// otherwise only the part of the string until said closing code
\t\t// will be colored, and the rest will simply be 'plain'.
\t\tstr = code.open + str.replace(code.closeRe, code.open) + code.close;
\t}

\t// Reset the original 'dim' if we changed it to work around the Windows dimmed gray issue.
\tansiStyles.dim.open = originalDim;

\treturn str;
}

function init() {
\tvar ret = {};

\tObject.keys(styles).forEach(function (name) {
\t\tret[name] = {
\t\t\tget: function () {
\t\t\t\treturn build.call(this, [name]);
\t\t\t}
\t\t};
\t});

\treturn ret;
}

defineProps(Chalk.prototype, init());

module.exports = new Chalk();
module.exports.styles = ansiStyles;
module.exports.hasColor = hasAnsi;
module.exports.stripColor = stripAnsi;
module.exports.supportsColor = supportsColor;
", "node_modules/chalk/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/chalk/index.js");
    }
}
