<?php

/* node_modules/es6-set/lib/primitive-iterator.js */
class __TwigTemplate_2dfd0b5c654f94c2fb5bfe1bc383568069683a7cb3366891878f03b01e1820e9 extends Twig_Template
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
        $__internal_b04c20a5d8cacc7494bb016da7f912712aa90b6d705ba79a7fcebe902b6c348f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04c20a5d8cacc7494bb016da7f912712aa90b6d705ba79a7fcebe902b6c348f->enter($__internal_b04c20a5d8cacc7494bb016da7f912712aa90b6d705ba79a7fcebe902b6c348f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/lib/primitive-iterator.js"));

        // line 1
        echo "'use strict';

var clear             = require('es5-ext/array/#/clear')
  , assign            = require('es5-ext/object/assign')
  , setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , contains          = require('es5-ext/string/#/contains')
  , d                 = require('d')
  , autoBind          = require('d/auto-bind')
  , Iterator          = require('es6-iterator')
  , toStringTagSymbol = require('es6-symbol').toStringTag

  , defineProperties = Object.defineProperties, keys = Object.keys
  , unBind = Iterator.prototype._unBind
  , PrimitiveSetIterator;

PrimitiveSetIterator = module.exports = function (set, kind) {
\tif (!(this instanceof PrimitiveSetIterator)) {
\t\treturn new PrimitiveSetIterator(set, kind);
\t}
\tIterator.call(this, keys(set.__setData__), set);
\tkind = (!kind || !contains.call(kind, 'key+value')) ? 'value' : 'key+value';
\tdefineProperties(this, {
\t\t__kind__: d('', kind),
\t\t__data__: d('w', set.__setData__)
\t});
};
if (setPrototypeOf) setPrototypeOf(PrimitiveSetIterator, Iterator);

PrimitiveSetIterator.prototype = Object.create(Iterator.prototype, assign({
\tconstructor: d(PrimitiveSetIterator),
\t_resolve: d(function (i) {
\t\tvar value = this.__data__[this.__list__[i]];
\t\treturn (this.__kind__ === 'value') ? value : [value, value];
\t}),
\t_unBind: d(function () {
\t\tthis.__data__ = null;
\t\tunBind.call(this);
\t}),
\ttoString: d(function () { return '[object Set Iterator]'; })
}, autoBind({
\t_onAdd: d(function (key) { this.__list__.push(key); }),
\t_onDelete: d(function (key) {
\t\tvar index = this.__list__.lastIndexOf(key);
\t\tif (index < this.__nextIndex__) return;
\t\tthis.__list__.splice(index, 1);
\t}),
\t_onClear: d(function () {
\t\tclear.call(this.__list__);
\t\tthis.__nextIndex__ = 0;
\t})
})));
Object.defineProperty(PrimitiveSetIterator.prototype, toStringTagSymbol,
\td('c', 'Set Iterator'));
";
        
        $__internal_b04c20a5d8cacc7494bb016da7f912712aa90b6d705ba79a7fcebe902b6c348f->leave($__internal_b04c20a5d8cacc7494bb016da7f912712aa90b6d705ba79a7fcebe902b6c348f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/lib/primitive-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var clear             = require('es5-ext/array/#/clear')
  , assign            = require('es5-ext/object/assign')
  , setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , contains          = require('es5-ext/string/#/contains')
  , d                 = require('d')
  , autoBind          = require('d/auto-bind')
  , Iterator          = require('es6-iterator')
  , toStringTagSymbol = require('es6-symbol').toStringTag

  , defineProperties = Object.defineProperties, keys = Object.keys
  , unBind = Iterator.prototype._unBind
  , PrimitiveSetIterator;

PrimitiveSetIterator = module.exports = function (set, kind) {
\tif (!(this instanceof PrimitiveSetIterator)) {
\t\treturn new PrimitiveSetIterator(set, kind);
\t}
\tIterator.call(this, keys(set.__setData__), set);
\tkind = (!kind || !contains.call(kind, 'key+value')) ? 'value' : 'key+value';
\tdefineProperties(this, {
\t\t__kind__: d('', kind),
\t\t__data__: d('w', set.__setData__)
\t});
};
if (setPrototypeOf) setPrototypeOf(PrimitiveSetIterator, Iterator);

PrimitiveSetIterator.prototype = Object.create(Iterator.prototype, assign({
\tconstructor: d(PrimitiveSetIterator),
\t_resolve: d(function (i) {
\t\tvar value = this.__data__[this.__list__[i]];
\t\treturn (this.__kind__ === 'value') ? value : [value, value];
\t}),
\t_unBind: d(function () {
\t\tthis.__data__ = null;
\t\tunBind.call(this);
\t}),
\ttoString: d(function () { return '[object Set Iterator]'; })
}, autoBind({
\t_onAdd: d(function (key) { this.__list__.push(key); }),
\t_onDelete: d(function (key) {
\t\tvar index = this.__list__.lastIndexOf(key);
\t\tif (index < this.__nextIndex__) return;
\t\tthis.__list__.splice(index, 1);
\t}),
\t_onClear: d(function () {
\t\tclear.call(this.__list__);
\t\tthis.__nextIndex__ = 0;
\t})
})));
Object.defineProperty(PrimitiveSetIterator.prototype, toStringTagSymbol,
\td('c', 'Set Iterator'));
", "node_modules/es6-set/lib/primitive-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/lib/primitive-iterator.js");
    }
}
