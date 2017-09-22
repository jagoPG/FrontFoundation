<?php

/* node_modules/es6-map/lib/iterator.js */
class __TwigTemplate_e1a6169fcceeec79c417ac1a0620ecba6bb17558c9a3009df5769a6a7f6634a1 extends Twig_Template
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
        $__internal_aa4a89c725f2c084fe99db6ad5b67fc47b57a96424f3d81ed053f35c485fafc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4a89c725f2c084fe99db6ad5b67fc47b57a96424f3d81ed053f35c485fafc6->enter($__internal_aa4a89c725f2c084fe99db6ad5b67fc47b57a96424f3d81ed053f35c485fafc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/lib/iterator.js"));

        // line 1
        echo "'use strict';

var setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , d                 = require('d')
  , Iterator          = require('es6-iterator')
  , toStringTagSymbol = require('es6-symbol').toStringTag
  , kinds             = require('./iterator-kinds')

  , defineProperties = Object.defineProperties
  , unBind = Iterator.prototype._unBind
  , MapIterator;

MapIterator = module.exports = function (map, kind) {
\tif (!(this instanceof MapIterator)) return new MapIterator(map, kind);
\tIterator.call(this, map.__mapKeysData__, map);
\tif (!kind || !kinds[kind]) kind = 'key+value';
\tdefineProperties(this, {
\t\t__kind__: d('', kind),
\t\t__values__: d('w', map.__mapValuesData__)
\t});
};
if (setPrototypeOf) setPrototypeOf(MapIterator, Iterator);

MapIterator.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(MapIterator),
\t_resolve: d(function (i) {
\t\tif (this.__kind__ === 'value') return this.__values__[i];
\t\tif (this.__kind__ === 'key') return this.__list__[i];
\t\treturn [this.__list__[i], this.__values__[i]];
\t}),
\t_unBind: d(function () {
\t\tthis.__values__ = null;
\t\tunBind.call(this);
\t}),
\ttoString: d(function () { return '[object Map Iterator]'; })
});
Object.defineProperty(MapIterator.prototype, toStringTagSymbol,
\td('c', 'Map Iterator'));
";
        
        $__internal_aa4a89c725f2c084fe99db6ad5b67fc47b57a96424f3d81ed053f35c485fafc6->leave($__internal_aa4a89c725f2c084fe99db6ad5b67fc47b57a96424f3d81ed053f35c485fafc6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/lib/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , d                 = require('d')
  , Iterator          = require('es6-iterator')
  , toStringTagSymbol = require('es6-symbol').toStringTag
  , kinds             = require('./iterator-kinds')

  , defineProperties = Object.defineProperties
  , unBind = Iterator.prototype._unBind
  , MapIterator;

MapIterator = module.exports = function (map, kind) {
\tif (!(this instanceof MapIterator)) return new MapIterator(map, kind);
\tIterator.call(this, map.__mapKeysData__, map);
\tif (!kind || !kinds[kind]) kind = 'key+value';
\tdefineProperties(this, {
\t\t__kind__: d('', kind),
\t\t__values__: d('w', map.__mapValuesData__)
\t});
};
if (setPrototypeOf) setPrototypeOf(MapIterator, Iterator);

MapIterator.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(MapIterator),
\t_resolve: d(function (i) {
\t\tif (this.__kind__ === 'value') return this.__values__[i];
\t\tif (this.__kind__ === 'key') return this.__list__[i];
\t\treturn [this.__list__[i], this.__values__[i]];
\t}),
\t_unBind: d(function () {
\t\tthis.__values__ = null;
\t\tunBind.call(this);
\t}),
\ttoString: d(function () { return '[object Map Iterator]'; })
});
Object.defineProperty(MapIterator.prototype, toStringTagSymbol,
\td('c', 'Map Iterator'));
", "node_modules/es6-map/lib/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/lib/iterator.js");
    }
}
