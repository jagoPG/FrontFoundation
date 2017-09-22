<?php

/* node_modules/is-symbol/test/index.js */
class __TwigTemplate_022726b3ff0d15eed619f6d9b38e56fd5c1e8a8e67ea5ce804916e407b192371 extends Twig_Template
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
        $__internal_af832cc6e2d39a83749bd2f1db7b1d1c2f3dde34900084bab5e5178502d635d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af832cc6e2d39a83749bd2f1db7b1d1c2f3dde34900084bab5e5178502d635d4->enter($__internal_af832cc6e2d39a83749bd2f1db7b1d1c2f3dde34900084bab5e5178502d635d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-symbol/test/index.js"));

        // line 1
        echo "'use strict';

var test = require('tape');
var isSymbol = require('../index');

var forEach = function (arr, func) {
\tvar i;
\tfor (i = 0; i < arr.length; ++i) {
\t\tfunc(arr[i], i, arr);
\t}
};

var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';
var debug = function (value, msg) {
\tvar output = '';
\tif (hasSymbols) {
\t\ttry { output += String(value); }
\t\tcatch (e) { output += Symbol.prototype.toString.call(value); }
\t\tif (output === '') {
\t\t\toutput = JSON.stringify(value);
\t\t}
\t}
\tvar type = Object.prototype.toString.call(value).toLowerCase().slice(8, -1);
\toutput += ' (' + type;
\tvar typeOf = typeof value;
\tif (type !== typeOf) {
\t\toutput += ', typeof: ' + typeOf;
\t}
\treturn output + ') ' + msg;
};

test('non-symbol values', function (t) {
\tvar nonSymbols = [
\t\ttrue,
\t\tfalse,
\t\tObject(true),
\t\tObject(false),
\t\tnull,
\t\tundefined,
\t\t{},
\t\t[],
\t\t/a/g,
\t\t'string',
\t\t42,
\t\tnew Date(),
\t\tfunction () {},
\t\tNaN
\t];
\tt.plan(nonSymbols.length);
\tforEach(nonSymbols, function (nonSymbol) {
\t\tt.equal(false, isSymbol(nonSymbol), debug(nonSymbol, 'is not a symbol'));
\t});
\tt.end();
});

test('faked symbol values', function (t) {
\tt.test('real symbol valueOf', { skip: !hasSymbols }, function (st) {
\t\tvar fakeSymbol = { valueOf: function () { return Symbol('foo'); } };
\t\tst.equal(false, isSymbol(fakeSymbol), 'object with valueOf returning a symbol is not a symbol');
\t\tst.end();
\t});

\tt.test('faked @@toStringTag', { skip: !hasSymbols || !Symbol.toStringTag }, function (st) {
\t\tvar fakeSymbol = { valueOf: function () { return Symbol('foo'); } };
\t\tfakeSymbol[Symbol.toStringTag] = 'Symbol';
\t\tst.equal(false, isSymbol(fakeSymbol), 'object with fake Symbol @@toStringTag and valueOf returning a symbol is not a symbol');
\t\tvar notSoFakeSymbol = { valueOf: function () { return 42; } };
\t\tnotSoFakeSymbol[Symbol.toStringTag] = 'Symbol';
\t\tst.equal(false, isSymbol(notSoFakeSymbol), 'object with fake Symbol @@toStringTag and valueOf not returning a symbol is not a symbol');
\t\tst.end();
\t});

\tvar fakeSymbolString = { toString: function () { return 'Symbol(foo)'; } };
\tt.equal(false, isSymbol(fakeSymbolString), 'object with toString returning Symbol(foo) is not a symbol');

\tt.end();
});

test('Symbol support', { skip: !hasSymbols }, function (t) {
\tt.test('well-known Symbols', function (st) {
\t\tvar wellKnownSymbols = Object.getOwnPropertyNames(Symbol).filter(function filterer(name) {
\t\t\treturn name !== 'for' && name !== 'keyFor' && !(name in filterer);
\t\t});
\t\twellKnownSymbols.forEach(function (name) {
\t\t\tvar sym = Symbol[name];
\t\t\tst.equal(true, isSymbol(sym), debug(sym, ' is a symbol'));
\t\t});
\t\tst.end();
\t});

\tt.test('user-created symbols', function (st) {
\t\tvar symbols = [
\t\t\tSymbol(),
\t\t\tSymbol('foo'),
\t\t\tSymbol.for('foo'),
\t\t\tObject(Symbol('object'))
\t\t];
\t\tsymbols.forEach(function (sym) {
\t\t\tst.equal(true, isSymbol(sym), debug(sym, ' is a symbol'));
\t\t});
\t\tst.end();
\t});

\tt.end();
});

";
        
        $__internal_af832cc6e2d39a83749bd2f1db7b1d1c2f3dde34900084bab5e5178502d635d4->leave($__internal_af832cc6e2d39a83749bd2f1db7b1d1c2f3dde34900084bab5e5178502d635d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-symbol/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var test = require('tape');
var isSymbol = require('../index');

var forEach = function (arr, func) {
\tvar i;
\tfor (i = 0; i < arr.length; ++i) {
\t\tfunc(arr[i], i, arr);
\t}
};

var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';
var debug = function (value, msg) {
\tvar output = '';
\tif (hasSymbols) {
\t\ttry { output += String(value); }
\t\tcatch (e) { output += Symbol.prototype.toString.call(value); }
\t\tif (output === '') {
\t\t\toutput = JSON.stringify(value);
\t\t}
\t}
\tvar type = Object.prototype.toString.call(value).toLowerCase().slice(8, -1);
\toutput += ' (' + type;
\tvar typeOf = typeof value;
\tif (type !== typeOf) {
\t\toutput += ', typeof: ' + typeOf;
\t}
\treturn output + ') ' + msg;
};

test('non-symbol values', function (t) {
\tvar nonSymbols = [
\t\ttrue,
\t\tfalse,
\t\tObject(true),
\t\tObject(false),
\t\tnull,
\t\tundefined,
\t\t{},
\t\t[],
\t\t/a/g,
\t\t'string',
\t\t42,
\t\tnew Date(),
\t\tfunction () {},
\t\tNaN
\t];
\tt.plan(nonSymbols.length);
\tforEach(nonSymbols, function (nonSymbol) {
\t\tt.equal(false, isSymbol(nonSymbol), debug(nonSymbol, 'is not a symbol'));
\t});
\tt.end();
});

test('faked symbol values', function (t) {
\tt.test('real symbol valueOf', { skip: !hasSymbols }, function (st) {
\t\tvar fakeSymbol = { valueOf: function () { return Symbol('foo'); } };
\t\tst.equal(false, isSymbol(fakeSymbol), 'object with valueOf returning a symbol is not a symbol');
\t\tst.end();
\t});

\tt.test('faked @@toStringTag', { skip: !hasSymbols || !Symbol.toStringTag }, function (st) {
\t\tvar fakeSymbol = { valueOf: function () { return Symbol('foo'); } };
\t\tfakeSymbol[Symbol.toStringTag] = 'Symbol';
\t\tst.equal(false, isSymbol(fakeSymbol), 'object with fake Symbol @@toStringTag and valueOf returning a symbol is not a symbol');
\t\tvar notSoFakeSymbol = { valueOf: function () { return 42; } };
\t\tnotSoFakeSymbol[Symbol.toStringTag] = 'Symbol';
\t\tst.equal(false, isSymbol(notSoFakeSymbol), 'object with fake Symbol @@toStringTag and valueOf not returning a symbol is not a symbol');
\t\tst.end();
\t});

\tvar fakeSymbolString = { toString: function () { return 'Symbol(foo)'; } };
\tt.equal(false, isSymbol(fakeSymbolString), 'object with toString returning Symbol(foo) is not a symbol');

\tt.end();
});

test('Symbol support', { skip: !hasSymbols }, function (t) {
\tt.test('well-known Symbols', function (st) {
\t\tvar wellKnownSymbols = Object.getOwnPropertyNames(Symbol).filter(function filterer(name) {
\t\t\treturn name !== 'for' && name !== 'keyFor' && !(name in filterer);
\t\t});
\t\twellKnownSymbols.forEach(function (name) {
\t\t\tvar sym = Symbol[name];
\t\t\tst.equal(true, isSymbol(sym), debug(sym, ' is a symbol'));
\t\t});
\t\tst.end();
\t});

\tt.test('user-created symbols', function (st) {
\t\tvar symbols = [
\t\t\tSymbol(),
\t\t\tSymbol('foo'),
\t\t\tSymbol.for('foo'),
\t\t\tObject(Symbol('object'))
\t\t];
\t\tsymbols.forEach(function (sym) {
\t\t\tst.equal(true, isSymbol(sym), debug(sym, ' is a symbol'));
\t\t});
\t\tst.end();
\t});

\tt.end();
});

", "node_modules/is-symbol/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-symbol/test/index.js");
    }
}
