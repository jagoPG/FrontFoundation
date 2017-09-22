<?php

/* node_modules/es6-iterator/index.js */
class __TwigTemplate_3a4a6fc0bef96b1d96d8a053986b1823ba5b9646e42c6f5d6c42c26a0dbd5b00 extends Twig_Template
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
        $__internal_925f1a687a9bf2ddae0eb056ce083451db04d7d1fd883a7a450376c3bf4a9a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925f1a687a9bf2ddae0eb056ce083451db04d7d1fd883a7a450376c3bf4a9a37->enter($__internal_925f1a687a9bf2ddae0eb056ce083451db04d7d1fd883a7a450376c3bf4a9a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/index.js"));

        // line 1
        echo "'use strict';

var clear    = require('es5-ext/array/#/clear')
  , assign   = require('es5-ext/object/assign')
  , callable = require('es5-ext/object/valid-callable')
  , value    = require('es5-ext/object/valid-value')
  , d        = require('d')
  , autoBind = require('d/auto-bind')
  , Symbol   = require('es6-symbol')

  , defineProperty = Object.defineProperty
  , defineProperties = Object.defineProperties
  , Iterator;

module.exports = Iterator = function (list, context) {
\tif (!(this instanceof Iterator)) return new Iterator(list, context);
\tdefineProperties(this, {
\t\t__list__: d('w', value(list)),
\t\t__context__: d('w', context),
\t\t__nextIndex__: d('w', 0)
\t});
\tif (!context) return;
\tcallable(context.on);
\tcontext.on('_add', this._onAdd);
\tcontext.on('_delete', this._onDelete);
\tcontext.on('_clear', this._onClear);
};

defineProperties(Iterator.prototype, assign({
\tconstructor: d(Iterator),
\t_next: d(function () {
\t\tvar i;
\t\tif (!this.__list__) return;
\t\tif (this.__redo__) {
\t\t\ti = this.__redo__.shift();
\t\t\tif (i !== undefined) return i;
\t\t}
\t\tif (this.__nextIndex__ < this.__list__.length) return this.__nextIndex__++;
\t\tthis._unBind();
\t}),
\tnext: d(function () { return this._createResult(this._next()); }),
\t_createResult: d(function (i) {
\t\tif (i === undefined) return { done: true, value: undefined };
\t\treturn { done: false, value: this._resolve(i) };
\t}),
\t_resolve: d(function (i) { return this.__list__[i]; }),
\t_unBind: d(function () {
\t\tthis.__list__ = null;
\t\tdelete this.__redo__;
\t\tif (!this.__context__) return;
\t\tthis.__context__.off('_add', this._onAdd);
\t\tthis.__context__.off('_delete', this._onDelete);
\t\tthis.__context__.off('_clear', this._onClear);
\t\tthis.__context__ = null;
\t}),
\ttoString: d(function () { return '[object Iterator]'; })
}, autoBind({
\t_onAdd: d(function (index) {
\t\tif (index >= this.__nextIndex__) return;
\t\t++this.__nextIndex__;
\t\tif (!this.__redo__) {
\t\t\tdefineProperty(this, '__redo__', d('c', [index]));
\t\t\treturn;
\t\t}
\t\tthis.__redo__.forEach(function (redo, i) {
\t\t\tif (redo >= index) this.__redo__[i] = ++redo;
\t\t}, this);
\t\tthis.__redo__.push(index);
\t}),
\t_onDelete: d(function (index) {
\t\tvar i;
\t\tif (index >= this.__nextIndex__) return;
\t\t--this.__nextIndex__;
\t\tif (!this.__redo__) return;
\t\ti = this.__redo__.indexOf(index);
\t\tif (i !== -1) this.__redo__.splice(i, 1);
\t\tthis.__redo__.forEach(function (redo, i) {
\t\t\tif (redo > index) this.__redo__[i] = --redo;
\t\t}, this);
\t}),
\t_onClear: d(function () {
\t\tif (this.__redo__) clear.call(this.__redo__);
\t\tthis.__nextIndex__ = 0;
\t})
})));

defineProperty(Iterator.prototype, Symbol.iterator, d(function () {
\treturn this;
}));
defineProperty(Iterator.prototype, Symbol.toStringTag, d('', 'Iterator'));
";
        
        $__internal_925f1a687a9bf2ddae0eb056ce083451db04d7d1fd883a7a450376c3bf4a9a37->leave($__internal_925f1a687a9bf2ddae0eb056ce083451db04d7d1fd883a7a450376c3bf4a9a37_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var clear    = require('es5-ext/array/#/clear')
  , assign   = require('es5-ext/object/assign')
  , callable = require('es5-ext/object/valid-callable')
  , value    = require('es5-ext/object/valid-value')
  , d        = require('d')
  , autoBind = require('d/auto-bind')
  , Symbol   = require('es6-symbol')

  , defineProperty = Object.defineProperty
  , defineProperties = Object.defineProperties
  , Iterator;

module.exports = Iterator = function (list, context) {
\tif (!(this instanceof Iterator)) return new Iterator(list, context);
\tdefineProperties(this, {
\t\t__list__: d('w', value(list)),
\t\t__context__: d('w', context),
\t\t__nextIndex__: d('w', 0)
\t});
\tif (!context) return;
\tcallable(context.on);
\tcontext.on('_add', this._onAdd);
\tcontext.on('_delete', this._onDelete);
\tcontext.on('_clear', this._onClear);
};

defineProperties(Iterator.prototype, assign({
\tconstructor: d(Iterator),
\t_next: d(function () {
\t\tvar i;
\t\tif (!this.__list__) return;
\t\tif (this.__redo__) {
\t\t\ti = this.__redo__.shift();
\t\t\tif (i !== undefined) return i;
\t\t}
\t\tif (this.__nextIndex__ < this.__list__.length) return this.__nextIndex__++;
\t\tthis._unBind();
\t}),
\tnext: d(function () { return this._createResult(this._next()); }),
\t_createResult: d(function (i) {
\t\tif (i === undefined) return { done: true, value: undefined };
\t\treturn { done: false, value: this._resolve(i) };
\t}),
\t_resolve: d(function (i) { return this.__list__[i]; }),
\t_unBind: d(function () {
\t\tthis.__list__ = null;
\t\tdelete this.__redo__;
\t\tif (!this.__context__) return;
\t\tthis.__context__.off('_add', this._onAdd);
\t\tthis.__context__.off('_delete', this._onDelete);
\t\tthis.__context__.off('_clear', this._onClear);
\t\tthis.__context__ = null;
\t}),
\ttoString: d(function () { return '[object Iterator]'; })
}, autoBind({
\t_onAdd: d(function (index) {
\t\tif (index >= this.__nextIndex__) return;
\t\t++this.__nextIndex__;
\t\tif (!this.__redo__) {
\t\t\tdefineProperty(this, '__redo__', d('c', [index]));
\t\t\treturn;
\t\t}
\t\tthis.__redo__.forEach(function (redo, i) {
\t\t\tif (redo >= index) this.__redo__[i] = ++redo;
\t\t}, this);
\t\tthis.__redo__.push(index);
\t}),
\t_onDelete: d(function (index) {
\t\tvar i;
\t\tif (index >= this.__nextIndex__) return;
\t\t--this.__nextIndex__;
\t\tif (!this.__redo__) return;
\t\ti = this.__redo__.indexOf(index);
\t\tif (i !== -1) this.__redo__.splice(i, 1);
\t\tthis.__redo__.forEach(function (redo, i) {
\t\t\tif (redo > index) this.__redo__[i] = --redo;
\t\t}, this);
\t}),
\t_onClear: d(function () {
\t\tif (this.__redo__) clear.call(this.__redo__);
\t\tthis.__nextIndex__ = 0;
\t})
})));

defineProperty(Iterator.prototype, Symbol.iterator, d(function () {
\treturn this;
}));
defineProperty(Iterator.prototype, Symbol.toStringTag, d('', 'Iterator'));
", "node_modules/es6-iterator/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/index.js");
    }
}
