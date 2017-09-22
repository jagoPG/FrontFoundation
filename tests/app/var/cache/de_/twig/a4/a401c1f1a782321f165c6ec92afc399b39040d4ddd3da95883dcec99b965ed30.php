<?php

/* node_modules/es6-map/lib/primitive-iterator.js */
class __TwigTemplate_f47a332d9255449240242f2f5d8e5285b6d73f74cae4fa6aa12fc1eee3a2e16c extends Twig_Template
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
        $__internal_6d7070e7248927d6a5d0062ca8b94651db87b9bbf403d83bf620765f4de44333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7070e7248927d6a5d0062ca8b94651db87b9bbf403d83bf620765f4de44333->enter($__internal_6d7070e7248927d6a5d0062ca8b94651db87b9bbf403d83bf620765f4de44333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/lib/primitive-iterator.js"));

        // line 1
        echo "'use strict';

var clear             = require('es5-ext/array/#/clear')
  , assign            = require('es5-ext/object/assign')
  , setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , toStringTagSymbol = require('es6-symbol').toStringTag
  , d                 = require('d')
  , autoBind          = require('d/auto-bind')
  , Iterator          = require('es6-iterator')
  , kinds             = require('./iterator-kinds')

  , defineProperties = Object.defineProperties, keys = Object.keys
  , unBind = Iterator.prototype._unBind
  , PrimitiveMapIterator;

PrimitiveMapIterator = module.exports = function (map, kind) {
\tif (!(this instanceof PrimitiveMapIterator)) {
\t\treturn new PrimitiveMapIterator(map, kind);
\t}
\tIterator.call(this, keys(map.__mapKeysData__), map);
\tif (!kind || !kinds[kind]) kind = 'key+value';
\tdefineProperties(this, {
\t\t__kind__: d('', kind),
\t\t__keysData__: d('w', map.__mapKeysData__),
\t\t__valuesData__: d('w', map.__mapValuesData__)
\t});
};
if (setPrototypeOf) setPrototypeOf(PrimitiveMapIterator, Iterator);

PrimitiveMapIterator.prototype = Object.create(Iterator.prototype, assign({
\tconstructor: d(PrimitiveMapIterator),
\t_resolve: d(function (i) {
\t\tif (this.__kind__ === 'value') return this.__valuesData__[this.__list__[i]];
\t\tif (this.__kind__ === 'key') return this.__keysData__[this.__list__[i]];
\t\treturn [this.__keysData__[this.__list__[i]],
\t\t\tthis.__valuesData__[this.__list__[i]]];
\t}),
\t_unBind: d(function () {
\t\tthis.__keysData__ = null;
\t\tthis.__valuesData__ = null;
\t\tunBind.call(this);
\t}),
\ttoString: d(function () { return '[object Map Iterator]'; })
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
Object.defineProperty(PrimitiveMapIterator.prototype, toStringTagSymbol,
\td('c', 'Map Iterator'));
";
        
        $__internal_6d7070e7248927d6a5d0062ca8b94651db87b9bbf403d83bf620765f4de44333->leave($__internal_6d7070e7248927d6a5d0062ca8b94651db87b9bbf403d83bf620765f4de44333_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/lib/primitive-iterator.js";
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
  , toStringTagSymbol = require('es6-symbol').toStringTag
  , d                 = require('d')
  , autoBind          = require('d/auto-bind')
  , Iterator          = require('es6-iterator')
  , kinds             = require('./iterator-kinds')

  , defineProperties = Object.defineProperties, keys = Object.keys
  , unBind = Iterator.prototype._unBind
  , PrimitiveMapIterator;

PrimitiveMapIterator = module.exports = function (map, kind) {
\tif (!(this instanceof PrimitiveMapIterator)) {
\t\treturn new PrimitiveMapIterator(map, kind);
\t}
\tIterator.call(this, keys(map.__mapKeysData__), map);
\tif (!kind || !kinds[kind]) kind = 'key+value';
\tdefineProperties(this, {
\t\t__kind__: d('', kind),
\t\t__keysData__: d('w', map.__mapKeysData__),
\t\t__valuesData__: d('w', map.__mapValuesData__)
\t});
};
if (setPrototypeOf) setPrototypeOf(PrimitiveMapIterator, Iterator);

PrimitiveMapIterator.prototype = Object.create(Iterator.prototype, assign({
\tconstructor: d(PrimitiveMapIterator),
\t_resolve: d(function (i) {
\t\tif (this.__kind__ === 'value') return this.__valuesData__[this.__list__[i]];
\t\tif (this.__kind__ === 'key') return this.__keysData__[this.__list__[i]];
\t\treturn [this.__keysData__[this.__list__[i]],
\t\t\tthis.__valuesData__[this.__list__[i]]];
\t}),
\t_unBind: d(function () {
\t\tthis.__keysData__ = null;
\t\tthis.__valuesData__ = null;
\t\tunBind.call(this);
\t}),
\ttoString: d(function () { return '[object Map Iterator]'; })
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
Object.defineProperty(PrimitiveMapIterator.prototype, toStringTagSymbol,
\td('c', 'Map Iterator'));
", "node_modules/es6-map/lib/primitive-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/lib/primitive-iterator.js");
    }
}
