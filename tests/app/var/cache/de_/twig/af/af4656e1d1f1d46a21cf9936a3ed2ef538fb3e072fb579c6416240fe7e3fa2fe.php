<?php

/* node_modules/es6-set/lib/iterator.js */
class __TwigTemplate_075fc853c862652f7b800453a05364134929a1a892b929eae7e86ad8ab10bfb9 extends Twig_Template
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
        $__internal_7a0feb348fd20f831ef80c8f4debe342a31f82c22910b5ccdc8ded5dbf0f4937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0feb348fd20f831ef80c8f4debe342a31f82c22910b5ccdc8ded5dbf0f4937->enter($__internal_7a0feb348fd20f831ef80c8f4debe342a31f82c22910b5ccdc8ded5dbf0f4937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/lib/iterator.js"));

        // line 1
        echo "'use strict';

var setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , contains          = require('es5-ext/string/#/contains')
  , d                 = require('d')
  , Iterator          = require('es6-iterator')
  , toStringTagSymbol = require('es6-symbol').toStringTag

  , defineProperty = Object.defineProperty
  , SetIterator;

SetIterator = module.exports = function (set, kind) {
\tif (!(this instanceof SetIterator)) return new SetIterator(set, kind);
\tIterator.call(this, set.__setData__, set);
\tif (!kind) kind = 'value';
\telse if (contains.call(kind, 'key+value')) kind = 'key+value';
\telse kind = 'value';
\tdefineProperty(this, '__kind__', d('', kind));
};
if (setPrototypeOf) setPrototypeOf(SetIterator, Iterator);

SetIterator.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(SetIterator),
\t_resolve: d(function (i) {
\t\tif (this.__kind__ === 'value') return this.__list__[i];
\t\treturn [this.__list__[i], this.__list__[i]];
\t}),
\ttoString: d(function () { return '[object Set Iterator]'; })
});
defineProperty(SetIterator.prototype, toStringTagSymbol, d('c', 'Set Iterator'));
";
        
        $__internal_7a0feb348fd20f831ef80c8f4debe342a31f82c22910b5ccdc8ded5dbf0f4937->leave($__internal_7a0feb348fd20f831ef80c8f4debe342a31f82c22910b5ccdc8ded5dbf0f4937_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/lib/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , contains          = require('es5-ext/string/#/contains')
  , d                 = require('d')
  , Iterator          = require('es6-iterator')
  , toStringTagSymbol = require('es6-symbol').toStringTag

  , defineProperty = Object.defineProperty
  , SetIterator;

SetIterator = module.exports = function (set, kind) {
\tif (!(this instanceof SetIterator)) return new SetIterator(set, kind);
\tIterator.call(this, set.__setData__, set);
\tif (!kind) kind = 'value';
\telse if (contains.call(kind, 'key+value')) kind = 'key+value';
\telse kind = 'value';
\tdefineProperty(this, '__kind__', d('', kind));
};
if (setPrototypeOf) setPrototypeOf(SetIterator, Iterator);

SetIterator.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(SetIterator),
\t_resolve: d(function (i) {
\t\tif (this.__kind__ === 'value') return this.__list__[i];
\t\treturn [this.__list__[i], this.__list__[i]];
\t}),
\ttoString: d(function () { return '[object Set Iterator]'; })
});
defineProperty(SetIterator.prototype, toStringTagSymbol, d('c', 'Set Iterator'));
", "node_modules/es6-set/lib/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/lib/iterator.js");
    }
}
