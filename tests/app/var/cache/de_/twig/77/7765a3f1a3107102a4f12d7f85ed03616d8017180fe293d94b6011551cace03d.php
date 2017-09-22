<?php

/* node_modules/tapable/lib/Tapable.js */
class __TwigTemplate_78e9977fd08a9b84e45aeb63551da487fe21fd28595cc97d36c9001debba87c6 extends Twig_Template
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
        $__internal_05eb02b296c444c1ed244f94a5057a4e7001949685544ad3d837b7318ba63408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eb02b296c444c1ed244f94a5057a4e7001949685544ad3d837b7318ba63408->enter($__internal_05eb02b296c444c1ed244f94a5057a4e7001949685544ad3d837b7318ba63408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tapable/lib/Tapable.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/

// polyfill from https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/filter
// using the polyfill specifically to avoid the call to `Object.defineProperty` for performance reasons
function fastFilter(fun/*, thisArg*/) {
\t'use strict';

\tif (this === void 0 || this === null) {
\t\tthrow new TypeError();
\t}

\tvar t = Object(this);
\tvar len = t.length >>> 0;
\tif (typeof fun !== 'function') {
\t\tthrow new TypeError();
\t}

\tvar res = [];
\tvar thisArg = arguments.length >= 2 ? arguments[1] : void 0;
\tfor (var i = 0; i < len; i++) {
\t\tif (i in t) {
\t\t\tvar val = t[i];

\t\t\t// NOTE: Technically this should Object.defineProperty at
\t\t\t//       the next index, as push can be affected by
\t\t\t//       properties on Object.prototype and Array.prototype.
\t\t\t//       But that method's new, and collisions should be
\t\t\t//       rare, so use the more-compatible alternative.
\t\t\tif (fun.call(thisArg, val, i, t)) {
\t\t\t\tres.push(val);
\t\t\t}
\t\t}
\t}

\treturn res;
}

function Tapable() {
\tthis._plugins = {};
}
module.exports = Tapable;

function copyProperties(from, to) {
\tfor(var key in from)
\t\tto[key] = from[key];
\treturn to;
}

Tapable.mixin = function mixinTapable(pt) {
\tcopyProperties(Tapable.prototype, pt);
};

Tapable.prototype.applyPlugins = function applyPlugins(name) {
\tif(!this._plugins[name]) return;
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++)
\t\tplugins[i].apply(this, args);
};

Tapable.prototype.applyPlugins0 = function applyPlugins0(name) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return;
\tfor(var i = 0; i < plugins.length; i++)
\t\tplugins[i].call(this);
};

Tapable.prototype.applyPlugins1 = function applyPlugins1(name, param) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return;
\tfor(var i = 0; i < plugins.length; i++)
\t\tplugins[i].call(this, param);
};

Tapable.prototype.applyPlugins2 = function applyPlugins2(name, param1, param2) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return;
\tfor(var i = 0; i < plugins.length; i++)
\t\tplugins[i].call(this, param1, param2);
};

Tapable.prototype.applyPluginsWaterfall = function applyPluginsWaterfall(name, init) {
\tif(!this._plugins[name]) return init;
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar plugins = this._plugins[name];
\tvar current = init;
\tfor(var i = 0; i < plugins.length; i++) {
\t\targs[0] = current;
\t\tcurrent = plugins[i].apply(this, args);
\t}
\treturn current;
};

Tapable.prototype.applyPluginsWaterfall0 = function applyPluginsWaterfall0(name, init) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return init;
\tvar current = init;
\tfor(var i = 0; i < plugins.length; i++)
\t\tcurrent = plugins[i].call(this, current);
\treturn current;
};

Tapable.prototype.applyPluginsWaterfall1 = function applyPluginsWaterfall1(name, init, param) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return init;
\tvar current = init;
\tfor(var i = 0; i < plugins.length; i++)
\t\tcurrent = plugins[i].call(this, current, param);
\treturn current;
};

Tapable.prototype.applyPluginsWaterfall2 = function applyPluginsWaterfall2(name, init, param1, param2) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return init;
\tvar current = init;
\tfor(var i = 0; i < plugins.length; i++)
\t\tcurrent = plugins[i].call(this, current, param1, param2);
\treturn current;
};

Tapable.prototype.applyPluginsBailResult = function applyPluginsBailResult(name) {
\tif(!this._plugins[name]) return;
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].apply(this, args);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult1 = function applyPluginsBailResult1(name, param) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult2 = function applyPluginsBailResult2(name, param1, param2) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param1, param2);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult3 = function applyPluginsBailResult3(name, param1, param2, param3) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param1, param2, param3);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult4 = function applyPluginsBailResult4(name, param1, param2, param3, param4) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param1, param2, param3, param4);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult5 = function applyPluginsBailResult5(name, param1, param2, param3, param4, param5) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param1, param2, param3, param4, param5);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsAsyncSeries = Tapable.prototype.applyPluginsAsync = function applyPluginsAsyncSeries(name) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar callback = args.pop();
\tvar plugins = this._plugins[name];
\tif(!plugins || plugins.length === 0) return callback();
\tvar i = 0;
\tvar _this = this;
\targs.push(copyProperties(callback, function next(err) {
\t\tif(err) return callback(err);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback();
\t\t}
\t\tplugins[i].apply(_this, args);
\t}));
\tplugins[0].apply(this, args);
};

Tapable.prototype.applyPluginsAsyncSeries1 = function applyPluginsAsyncSeries1(name, param, callback) {
\tvar plugins = this._plugins[name];
\tif(!plugins || plugins.length === 0) return callback();
\tvar i = 0;
\tvar _this = this;
\tvar innerCallback = copyProperties(callback, function next(err) {
\t\tif(err) return callback(err);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback();
\t\t}
\t\tplugins[i].call(_this, param, innerCallback);
\t});
\tplugins[0].call(this, param, innerCallback);
};

Tapable.prototype.applyPluginsAsyncSeriesBailResult = function applyPluginsAsyncSeriesBailResult(name) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar callback = args.pop();
\tif(!this._plugins[name] || this._plugins[name].length === 0) return callback();
\tvar plugins = this._plugins[name];
\tvar i = 0;
\tvar _this = this;
\targs.push(copyProperties(callback, function next() {
\t\tif(arguments.length > 0) return callback.apply(null, arguments);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback();
\t\t}
\t\tplugins[i].apply(_this, args);
\t}));
\tplugins[0].apply(this, args);
};

Tapable.prototype.applyPluginsAsyncSeriesBailResult1 = function applyPluginsAsyncSeriesBailResult1(name, param, callback) {
\tvar plugins = this._plugins[name];
\tif(!plugins || plugins.length === 0) return callback();
\tvar i = 0;
\tvar _this = this;
\tvar innerCallback = copyProperties(callback, function next(err, result) {
\t\tif(arguments.length > 0) return callback(err, result);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback();
\t\t}
\t\tplugins[i].call(_this, param, innerCallback);
\t});
\tplugins[0].call(this, param, innerCallback);
};

Tapable.prototype.applyPluginsAsyncWaterfall = function applyPluginsAsyncWaterfall(name, init, callback) {
\tif(!this._plugins[name] || this._plugins[name].length === 0) return callback(null, init);
\tvar plugins = this._plugins[name];
\tvar i = 0;
\tvar _this = this;
\tvar next = copyProperties(callback, function(err, value) {
\t\tif(err) return callback(err);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback(null, value);
\t\t}
\t\tplugins[i].call(_this, value, next);
\t});
\tplugins[0].call(this, init, next);
};

Tapable.prototype.applyPluginsParallel = function applyPluginsParallel(name) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar callback = args.pop();
\tif(!this._plugins[name] || this._plugins[name].length === 0) return callback();
\tvar plugins = this._plugins[name];
\tvar remaining = plugins.length;
\targs.push(copyProperties(callback, function(err) {
\t\tif(remaining < 0) return; // ignore
\t\tif(err) {
\t\t\tremaining = -1;
\t\t\treturn callback(err);
\t\t}
\t\tremaining--;
\t\tif(remaining === 0) {
\t\t\treturn callback();
\t\t}
\t}));
\tfor(var i = 0; i < plugins.length; i++) {
\t\tplugins[i].apply(this, args);
\t\tif(remaining < 0) return;
\t}
};

Tapable.prototype.applyPluginsParallelBailResult = function applyPluginsParallelBailResult(name) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar callback = args[args.length - 1];
\tif(!this._plugins[name] || this._plugins[name].length === 0) return callback();
\tvar plugins = this._plugins[name];
\tvar currentPos = plugins.length;
\tvar currentResult;
\tvar done = [];
\tfor(var i = 0; i < plugins.length; i++) {
\t\targs[args.length - 1] = (function(i) {
\t\t\treturn copyProperties(callback, function() {
\t\t\t\tif(i >= currentPos) return; // ignore
\t\t\t\tdone.push(i);
\t\t\t\tif(arguments.length > 0) {
\t\t\t\t\tcurrentPos = i + 1;
\t\t\t\t\tdone = fastFilter.call(done, function(item) {
\t\t\t\t\t\treturn item <= i;
\t\t\t\t\t});
\t\t\t\t\tcurrentResult = Array.prototype.slice.call(arguments);
\t\t\t\t}
\t\t\t\tif(done.length === currentPos) {
\t\t\t\t\tcallback.apply(null, currentResult);
\t\t\t\t\tcurrentPos = 0;
\t\t\t\t}
\t\t\t});
\t\t}(i));
\t\tplugins[i].apply(this, args);
\t}
};

Tapable.prototype.applyPluginsParallelBailResult1 = function applyPluginsParallelBailResult1(name, param, callback) {
\tvar plugins = this._plugins[name];
\tif(!plugins || plugins.length === 0) return callback();
\tvar currentPos = plugins.length;
\tvar currentResult;
\tvar done = [];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar innerCallback = (function(i) {
\t\t\treturn copyProperties(callback, function() {
\t\t\t\tif(i >= currentPos) return; // ignore
\t\t\t\tdone.push(i);
\t\t\t\tif(arguments.length > 0) {
\t\t\t\t\tcurrentPos = i + 1;
\t\t\t\t\tdone = fastFilter.call(done, function(item) {
\t\t\t\t\t\treturn item <= i;
\t\t\t\t\t});
\t\t\t\t\tcurrentResult = Array.prototype.slice.call(arguments);
\t\t\t\t}
\t\t\t\tif(done.length === currentPos) {
\t\t\t\t\tcallback.apply(null, currentResult);
\t\t\t\t\tcurrentPos = 0;
\t\t\t\t}
\t\t\t});
\t\t}(i));
\t\tplugins[i].call(this, param, innerCallback);
\t}
};

Tapable.prototype.hasPlugins = function hasPlugins(name) {
\tvar plugins = this._plugins[name];
\treturn plugins && plugins.length > 0;
};


Tapable.prototype.plugin = function plugin(name, fn) {
\tif(Array.isArray(name)) {
\t\tname.forEach(function(name) {
\t\t\tthis.plugin(name, fn);
\t\t}, this);
\t\treturn;
\t}
\tif(!this._plugins[name]) this._plugins[name] = [fn];
\telse this._plugins[name].push(fn);
};

Tapable.prototype.apply = function apply() {
\tfor(var i = 0; i < arguments.length; i++) {
\t\targuments[i].apply(this);
\t}
};
";
        
        $__internal_05eb02b296c444c1ed244f94a5057a4e7001949685544ad3d837b7318ba63408->leave($__internal_05eb02b296c444c1ed244f94a5057a4e7001949685544ad3d837b7318ba63408_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tapable/lib/Tapable.js";
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

// polyfill from https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/filter
// using the polyfill specifically to avoid the call to `Object.defineProperty` for performance reasons
function fastFilter(fun/*, thisArg*/) {
\t'use strict';

\tif (this === void 0 || this === null) {
\t\tthrow new TypeError();
\t}

\tvar t = Object(this);
\tvar len = t.length >>> 0;
\tif (typeof fun !== 'function') {
\t\tthrow new TypeError();
\t}

\tvar res = [];
\tvar thisArg = arguments.length >= 2 ? arguments[1] : void 0;
\tfor (var i = 0; i < len; i++) {
\t\tif (i in t) {
\t\t\tvar val = t[i];

\t\t\t// NOTE: Technically this should Object.defineProperty at
\t\t\t//       the next index, as push can be affected by
\t\t\t//       properties on Object.prototype and Array.prototype.
\t\t\t//       But that method's new, and collisions should be
\t\t\t//       rare, so use the more-compatible alternative.
\t\t\tif (fun.call(thisArg, val, i, t)) {
\t\t\t\tres.push(val);
\t\t\t}
\t\t}
\t}

\treturn res;
}

function Tapable() {
\tthis._plugins = {};
}
module.exports = Tapable;

function copyProperties(from, to) {
\tfor(var key in from)
\t\tto[key] = from[key];
\treturn to;
}

Tapable.mixin = function mixinTapable(pt) {
\tcopyProperties(Tapable.prototype, pt);
};

Tapable.prototype.applyPlugins = function applyPlugins(name) {
\tif(!this._plugins[name]) return;
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++)
\t\tplugins[i].apply(this, args);
};

Tapable.prototype.applyPlugins0 = function applyPlugins0(name) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return;
\tfor(var i = 0; i < plugins.length; i++)
\t\tplugins[i].call(this);
};

Tapable.prototype.applyPlugins1 = function applyPlugins1(name, param) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return;
\tfor(var i = 0; i < plugins.length; i++)
\t\tplugins[i].call(this, param);
};

Tapable.prototype.applyPlugins2 = function applyPlugins2(name, param1, param2) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return;
\tfor(var i = 0; i < plugins.length; i++)
\t\tplugins[i].call(this, param1, param2);
};

Tapable.prototype.applyPluginsWaterfall = function applyPluginsWaterfall(name, init) {
\tif(!this._plugins[name]) return init;
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar plugins = this._plugins[name];
\tvar current = init;
\tfor(var i = 0; i < plugins.length; i++) {
\t\targs[0] = current;
\t\tcurrent = plugins[i].apply(this, args);
\t}
\treturn current;
};

Tapable.prototype.applyPluginsWaterfall0 = function applyPluginsWaterfall0(name, init) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return init;
\tvar current = init;
\tfor(var i = 0; i < plugins.length; i++)
\t\tcurrent = plugins[i].call(this, current);
\treturn current;
};

Tapable.prototype.applyPluginsWaterfall1 = function applyPluginsWaterfall1(name, init, param) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return init;
\tvar current = init;
\tfor(var i = 0; i < plugins.length; i++)
\t\tcurrent = plugins[i].call(this, current, param);
\treturn current;
};

Tapable.prototype.applyPluginsWaterfall2 = function applyPluginsWaterfall2(name, init, param1, param2) {
\tvar plugins = this._plugins[name];
\tif(!plugins) return init;
\tvar current = init;
\tfor(var i = 0; i < plugins.length; i++)
\t\tcurrent = plugins[i].call(this, current, param1, param2);
\treturn current;
};

Tapable.prototype.applyPluginsBailResult = function applyPluginsBailResult(name) {
\tif(!this._plugins[name]) return;
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].apply(this, args);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult1 = function applyPluginsBailResult1(name, param) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult2 = function applyPluginsBailResult2(name, param1, param2) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param1, param2);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult3 = function applyPluginsBailResult3(name, param1, param2, param3) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param1, param2, param3);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult4 = function applyPluginsBailResult4(name, param1, param2, param3, param4) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param1, param2, param3, param4);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsBailResult5 = function applyPluginsBailResult5(name, param1, param2, param3, param4, param5) {
\tif(!this._plugins[name]) return;
\tvar plugins = this._plugins[name];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar result = plugins[i].call(this, param1, param2, param3, param4, param5);
\t\tif(typeof result !== \"undefined\") {
\t\t\treturn result;
\t\t}
\t}
};

Tapable.prototype.applyPluginsAsyncSeries = Tapable.prototype.applyPluginsAsync = function applyPluginsAsyncSeries(name) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar callback = args.pop();
\tvar plugins = this._plugins[name];
\tif(!plugins || plugins.length === 0) return callback();
\tvar i = 0;
\tvar _this = this;
\targs.push(copyProperties(callback, function next(err) {
\t\tif(err) return callback(err);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback();
\t\t}
\t\tplugins[i].apply(_this, args);
\t}));
\tplugins[0].apply(this, args);
};

Tapable.prototype.applyPluginsAsyncSeries1 = function applyPluginsAsyncSeries1(name, param, callback) {
\tvar plugins = this._plugins[name];
\tif(!plugins || plugins.length === 0) return callback();
\tvar i = 0;
\tvar _this = this;
\tvar innerCallback = copyProperties(callback, function next(err) {
\t\tif(err) return callback(err);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback();
\t\t}
\t\tplugins[i].call(_this, param, innerCallback);
\t});
\tplugins[0].call(this, param, innerCallback);
};

Tapable.prototype.applyPluginsAsyncSeriesBailResult = function applyPluginsAsyncSeriesBailResult(name) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar callback = args.pop();
\tif(!this._plugins[name] || this._plugins[name].length === 0) return callback();
\tvar plugins = this._plugins[name];
\tvar i = 0;
\tvar _this = this;
\targs.push(copyProperties(callback, function next() {
\t\tif(arguments.length > 0) return callback.apply(null, arguments);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback();
\t\t}
\t\tplugins[i].apply(_this, args);
\t}));
\tplugins[0].apply(this, args);
};

Tapable.prototype.applyPluginsAsyncSeriesBailResult1 = function applyPluginsAsyncSeriesBailResult1(name, param, callback) {
\tvar plugins = this._plugins[name];
\tif(!plugins || plugins.length === 0) return callback();
\tvar i = 0;
\tvar _this = this;
\tvar innerCallback = copyProperties(callback, function next(err, result) {
\t\tif(arguments.length > 0) return callback(err, result);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback();
\t\t}
\t\tplugins[i].call(_this, param, innerCallback);
\t});
\tplugins[0].call(this, param, innerCallback);
};

Tapable.prototype.applyPluginsAsyncWaterfall = function applyPluginsAsyncWaterfall(name, init, callback) {
\tif(!this._plugins[name] || this._plugins[name].length === 0) return callback(null, init);
\tvar plugins = this._plugins[name];
\tvar i = 0;
\tvar _this = this;
\tvar next = copyProperties(callback, function(err, value) {
\t\tif(err) return callback(err);
\t\ti++;
\t\tif(i >= plugins.length) {
\t\t\treturn callback(null, value);
\t\t}
\t\tplugins[i].call(_this, value, next);
\t});
\tplugins[0].call(this, init, next);
};

Tapable.prototype.applyPluginsParallel = function applyPluginsParallel(name) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar callback = args.pop();
\tif(!this._plugins[name] || this._plugins[name].length === 0) return callback();
\tvar plugins = this._plugins[name];
\tvar remaining = plugins.length;
\targs.push(copyProperties(callback, function(err) {
\t\tif(remaining < 0) return; // ignore
\t\tif(err) {
\t\t\tremaining = -1;
\t\t\treturn callback(err);
\t\t}
\t\tremaining--;
\t\tif(remaining === 0) {
\t\t\treturn callback();
\t\t}
\t}));
\tfor(var i = 0; i < plugins.length; i++) {
\t\tplugins[i].apply(this, args);
\t\tif(remaining < 0) return;
\t}
};

Tapable.prototype.applyPluginsParallelBailResult = function applyPluginsParallelBailResult(name) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar callback = args[args.length - 1];
\tif(!this._plugins[name] || this._plugins[name].length === 0) return callback();
\tvar plugins = this._plugins[name];
\tvar currentPos = plugins.length;
\tvar currentResult;
\tvar done = [];
\tfor(var i = 0; i < plugins.length; i++) {
\t\targs[args.length - 1] = (function(i) {
\t\t\treturn copyProperties(callback, function() {
\t\t\t\tif(i >= currentPos) return; // ignore
\t\t\t\tdone.push(i);
\t\t\t\tif(arguments.length > 0) {
\t\t\t\t\tcurrentPos = i + 1;
\t\t\t\t\tdone = fastFilter.call(done, function(item) {
\t\t\t\t\t\treturn item <= i;
\t\t\t\t\t});
\t\t\t\t\tcurrentResult = Array.prototype.slice.call(arguments);
\t\t\t\t}
\t\t\t\tif(done.length === currentPos) {
\t\t\t\t\tcallback.apply(null, currentResult);
\t\t\t\t\tcurrentPos = 0;
\t\t\t\t}
\t\t\t});
\t\t}(i));
\t\tplugins[i].apply(this, args);
\t}
};

Tapable.prototype.applyPluginsParallelBailResult1 = function applyPluginsParallelBailResult1(name, param, callback) {
\tvar plugins = this._plugins[name];
\tif(!plugins || plugins.length === 0) return callback();
\tvar currentPos = plugins.length;
\tvar currentResult;
\tvar done = [];
\tfor(var i = 0; i < plugins.length; i++) {
\t\tvar innerCallback = (function(i) {
\t\t\treturn copyProperties(callback, function() {
\t\t\t\tif(i >= currentPos) return; // ignore
\t\t\t\tdone.push(i);
\t\t\t\tif(arguments.length > 0) {
\t\t\t\t\tcurrentPos = i + 1;
\t\t\t\t\tdone = fastFilter.call(done, function(item) {
\t\t\t\t\t\treturn item <= i;
\t\t\t\t\t});
\t\t\t\t\tcurrentResult = Array.prototype.slice.call(arguments);
\t\t\t\t}
\t\t\t\tif(done.length === currentPos) {
\t\t\t\t\tcallback.apply(null, currentResult);
\t\t\t\t\tcurrentPos = 0;
\t\t\t\t}
\t\t\t});
\t\t}(i));
\t\tplugins[i].call(this, param, innerCallback);
\t}
};

Tapable.prototype.hasPlugins = function hasPlugins(name) {
\tvar plugins = this._plugins[name];
\treturn plugins && plugins.length > 0;
};


Tapable.prototype.plugin = function plugin(name, fn) {
\tif(Array.isArray(name)) {
\t\tname.forEach(function(name) {
\t\t\tthis.plugin(name, fn);
\t\t}, this);
\t\treturn;
\t}
\tif(!this._plugins[name]) this._plugins[name] = [fn];
\telse this._plugins[name].push(fn);
};

Tapable.prototype.apply = function apply() {
\tfor(var i = 0; i < arguments.length; i++) {
\t\targuments[i].apply(this);
\t}
};
", "node_modules/tapable/lib/Tapable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tapable/lib/Tapable.js");
    }
}
