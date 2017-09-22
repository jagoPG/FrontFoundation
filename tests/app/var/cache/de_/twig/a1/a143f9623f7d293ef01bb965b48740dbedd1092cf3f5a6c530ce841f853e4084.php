<?php

/* node_modules/es6-iterator/#/chain.js */
class __TwigTemplate_0d7fcf68f9ebfba28cc5dd4f4acfe084a742b898366530113daec8f8ecb6dc51 extends Twig_Template
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
        $__internal_df498c4c2c8a53ad0cf741457a388159efd8bb77f400936c4249e9944c625074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df498c4c2c8a53ad0cf741457a388159efd8bb77f400936c4249e9944c625074->enter($__internal_df498c4c2c8a53ad0cf741457a388159efd8bb77f400936c4249e9944c625074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/#/chain.js"));

        // line 1
        echo "'use strict';

var setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , d              = require('d')
  , Iterator       = require('../')
  , validIterable  = require('../valid-iterable')

  , push = Array.prototype.push
  , defineProperties = Object.defineProperties
  , IteratorChain;

IteratorChain = function (iterators) {
\tdefineProperties(this, {
\t\t__iterators__: d('', iterators),
\t\t__current__: d('w', iterators.shift())
\t});
};
if (setPrototypeOf) setPrototypeOf(IteratorChain, Iterator);

IteratorChain.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(IteratorChain),
\tnext: d(function () {
\t\tvar result;
\t\tif (!this.__current__) return { done: true, value: undefined };
\t\tresult = this.__current__.next();
\t\twhile (result.done) {
\t\t\tthis.__current__ = this.__iterators__.shift();
\t\t\tif (!this.__current__) return { done: true, value: undefined };
\t\t\tresult = this.__current__.next();
\t\t}
\t\treturn result;
\t})
});

module.exports = function () {
\tvar iterators = [this];
\tpush.apply(iterators, arguments);
\titerators.forEach(validIterable);
\treturn new IteratorChain(iterators);
};
";
        
        $__internal_df498c4c2c8a53ad0cf741457a388159efd8bb77f400936c4249e9944c625074->leave($__internal_df498c4c2c8a53ad0cf741457a388159efd8bb77f400936c4249e9944c625074_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/#/chain.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , d              = require('d')
  , Iterator       = require('../')
  , validIterable  = require('../valid-iterable')

  , push = Array.prototype.push
  , defineProperties = Object.defineProperties
  , IteratorChain;

IteratorChain = function (iterators) {
\tdefineProperties(this, {
\t\t__iterators__: d('', iterators),
\t\t__current__: d('w', iterators.shift())
\t});
};
if (setPrototypeOf) setPrototypeOf(IteratorChain, Iterator);

IteratorChain.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(IteratorChain),
\tnext: d(function () {
\t\tvar result;
\t\tif (!this.__current__) return { done: true, value: undefined };
\t\tresult = this.__current__.next();
\t\twhile (result.done) {
\t\t\tthis.__current__ = this.__iterators__.shift();
\t\t\tif (!this.__current__) return { done: true, value: undefined };
\t\t\tresult = this.__current__.next();
\t\t}
\t\treturn result;
\t})
});

module.exports = function () {
\tvar iterators = [this];
\tpush.apply(iterators, arguments);
\titerators.forEach(validIterable);
\treturn new IteratorChain(iterators);
};
", "node_modules/es6-iterator/#/chain.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/#/chain.js");
    }
}
