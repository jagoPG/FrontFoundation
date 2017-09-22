<?php

/* node_modules/pify/index.js */
class __TwigTemplate_5a8fe08cc17f87a2054f4a19877ca87de3340d03490b100155f6c041cc6998bb extends Twig_Template
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
        $__internal_44b492d6fb68057b2a08fe37f9353251385c209ccdefeab65d04d89618e68b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b492d6fb68057b2a08fe37f9353251385c209ccdefeab65d04d89618e68b92->enter($__internal_44b492d6fb68057b2a08fe37f9353251385c209ccdefeab65d04d89618e68b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pify/index.js"));

        // line 1
        echo "'use strict';

var processFn = function (fn, P, opts) {
\treturn function () {
\t\tvar that = this;
\t\tvar args = new Array(arguments.length);

\t\tfor (var i = 0; i < arguments.length; i++) {
\t\t\targs[i] = arguments[i];
\t\t}

\t\treturn new P(function (resolve, reject) {
\t\t\targs.push(function (err, result) {
\t\t\t\tif (err) {
\t\t\t\t\treject(err);
\t\t\t\t} else if (opts.multiArgs) {
\t\t\t\t\tvar results = new Array(arguments.length - 1);

\t\t\t\t\tfor (var i = 1; i < arguments.length; i++) {
\t\t\t\t\t\tresults[i - 1] = arguments[i];
\t\t\t\t\t}

\t\t\t\t\tresolve(results);
\t\t\t\t} else {
\t\t\t\t\tresolve(result);
\t\t\t\t}
\t\t\t});

\t\t\tfn.apply(that, args);
\t\t});
\t};
};

var pify = module.exports = function (obj, P, opts) {
\tif (typeof P !== 'function') {
\t\topts = P;
\t\tP = Promise;
\t}

\topts = opts || {};
\topts.exclude = opts.exclude || [/.+Sync\$/];

\tvar filter = function (key) {
\t\tvar match = function (pattern) {
\t\t\treturn typeof pattern === 'string' ? key === pattern : pattern.test(key);
\t\t};

\t\treturn opts.include ? opts.include.some(match) : !opts.exclude.some(match);
\t};

\tvar ret = typeof obj === 'function' ? function () {
\t\tif (opts.excludeMain) {
\t\t\treturn obj.apply(this, arguments);
\t\t}

\t\treturn processFn(obj, P, opts).apply(this, arguments);
\t} : {};

\treturn Object.keys(obj).reduce(function (ret, key) {
\t\tvar x = obj[key];

\t\tret[key] = typeof x === 'function' && filter(key) ? processFn(x, P, opts) : x;

\t\treturn ret;
\t}, ret);
};

pify.all = pify;
";
        
        $__internal_44b492d6fb68057b2a08fe37f9353251385c209ccdefeab65d04d89618e68b92->leave($__internal_44b492d6fb68057b2a08fe37f9353251385c209ccdefeab65d04d89618e68b92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pify/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var processFn = function (fn, P, opts) {
\treturn function () {
\t\tvar that = this;
\t\tvar args = new Array(arguments.length);

\t\tfor (var i = 0; i < arguments.length; i++) {
\t\t\targs[i] = arguments[i];
\t\t}

\t\treturn new P(function (resolve, reject) {
\t\t\targs.push(function (err, result) {
\t\t\t\tif (err) {
\t\t\t\t\treject(err);
\t\t\t\t} else if (opts.multiArgs) {
\t\t\t\t\tvar results = new Array(arguments.length - 1);

\t\t\t\t\tfor (var i = 1; i < arguments.length; i++) {
\t\t\t\t\t\tresults[i - 1] = arguments[i];
\t\t\t\t\t}

\t\t\t\t\tresolve(results);
\t\t\t\t} else {
\t\t\t\t\tresolve(result);
\t\t\t\t}
\t\t\t});

\t\t\tfn.apply(that, args);
\t\t});
\t};
};

var pify = module.exports = function (obj, P, opts) {
\tif (typeof P !== 'function') {
\t\topts = P;
\t\tP = Promise;
\t}

\topts = opts || {};
\topts.exclude = opts.exclude || [/.+Sync\$/];

\tvar filter = function (key) {
\t\tvar match = function (pattern) {
\t\t\treturn typeof pattern === 'string' ? key === pattern : pattern.test(key);
\t\t};

\t\treturn opts.include ? opts.include.some(match) : !opts.exclude.some(match);
\t};

\tvar ret = typeof obj === 'function' ? function () {
\t\tif (opts.excludeMain) {
\t\t\treturn obj.apply(this, arguments);
\t\t}

\t\treturn processFn(obj, P, opts).apply(this, arguments);
\t} : {};

\treturn Object.keys(obj).reduce(function (ret, key) {
\t\tvar x = obj[key];

\t\tret[key] = typeof x === 'function' && filter(key) ? processFn(x, P, opts) : x;

\t\treturn ret;
\t}, ret);
};

pify.all = pify;
", "node_modules/pify/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pify/index.js");
    }
}
