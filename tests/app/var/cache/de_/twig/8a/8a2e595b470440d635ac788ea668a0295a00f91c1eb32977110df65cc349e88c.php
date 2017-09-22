<?php

/* node_modules/mem/index.js */
class __TwigTemplate_a4b3789fe9fae3de740bb51a82eb9936ad08a952b71f3588a1548e2cc4dd4938 extends Twig_Template
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
        $__internal_47098c78713a634ff3a2fda7c88850b8a5f9812e7647e7a78516ed7e62206bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47098c78713a634ff3a2fda7c88850b8a5f9812e7647e7a78516ed7e62206bb7->enter($__internal_47098c78713a634ff3a2fda7c88850b8a5f9812e7647e7a78516ed7e62206bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mem/index.js"));

        // line 1
        echo "'use strict';
const mimicFn = require('mimic-fn');

const cacheStore = new WeakMap();

const defaultCacheKey = function (x) {
\tif (arguments.length === 1 && (x === null || x === undefined || (typeof x !== 'function' && typeof x !== 'object'))) {
\t\treturn x;
\t}

\treturn JSON.stringify(arguments);
};

module.exports = (fn, opts) => {
\topts = Object.assign({
\t\tcacheKey: defaultCacheKey,
\t\tcache: new Map()
\t}, opts);

\tconst memoized = function () {
\t\tconst cache = cacheStore.get(memoized);
\t\tconst key = opts.cacheKey.apply(null, arguments);

\t\tif (cache.has(key)) {
\t\t\tconst c = cache.get(key);

\t\t\tif (typeof opts.maxAge !== 'number' || Date.now() < c.maxAge) {
\t\t\t\treturn c.data;
\t\t\t}
\t\t}

\t\tconst ret = fn.apply(null, arguments);

\t\tcache.set(key, {
\t\t\tdata: ret,
\t\t\tmaxAge: Date.now() + (opts.maxAge || 0)
\t\t});

\t\treturn ret;
\t};

\tmimicFn(memoized, fn);

\tcacheStore.set(memoized, opts.cache);

\treturn memoized;
};

module.exports.clear = fn => {
\tconst cache = cacheStore.get(fn);

\tif (cache && typeof cache.clear === 'function') {
\t\tcache.clear();
\t}
};
";
        
        $__internal_47098c78713a634ff3a2fda7c88850b8a5f9812e7647e7a78516ed7e62206bb7->leave($__internal_47098c78713a634ff3a2fda7c88850b8a5f9812e7647e7a78516ed7e62206bb7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mem/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const mimicFn = require('mimic-fn');

const cacheStore = new WeakMap();

const defaultCacheKey = function (x) {
\tif (arguments.length === 1 && (x === null || x === undefined || (typeof x !== 'function' && typeof x !== 'object'))) {
\t\treturn x;
\t}

\treturn JSON.stringify(arguments);
};

module.exports = (fn, opts) => {
\topts = Object.assign({
\t\tcacheKey: defaultCacheKey,
\t\tcache: new Map()
\t}, opts);

\tconst memoized = function () {
\t\tconst cache = cacheStore.get(memoized);
\t\tconst key = opts.cacheKey.apply(null, arguments);

\t\tif (cache.has(key)) {
\t\t\tconst c = cache.get(key);

\t\t\tif (typeof opts.maxAge !== 'number' || Date.now() < c.maxAge) {
\t\t\t\treturn c.data;
\t\t\t}
\t\t}

\t\tconst ret = fn.apply(null, arguments);

\t\tcache.set(key, {
\t\t\tdata: ret,
\t\t\tmaxAge: Date.now() + (opts.maxAge || 0)
\t\t});

\t\treturn ret;
\t};

\tmimicFn(memoized, fn);

\tcacheStore.set(memoized, opts.cache);

\treturn memoized;
};

module.exports.clear = fn => {
\tconst cache = cacheStore.get(fn);

\tif (cache && typeof cache.clear === 'function') {
\t\tcache.clear();
\t}
};
", "node_modules/mem/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mem/index.js");
    }
}
