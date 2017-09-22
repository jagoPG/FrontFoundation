<?php

/* node_modules/es6-iterator/array.js */
class __TwigTemplate_8f36efe4a952941af4b2787cacc76b14ce8e69bcec01c745b58e5ed960db51d4 extends Twig_Template
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
        $__internal_c3ef93ead2ede7000b5f1c02d450140ce93e61211f64b46c3aa0adce715c381f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ef93ead2ede7000b5f1c02d450140ce93e61211f64b46c3aa0adce715c381f->enter($__internal_c3ef93ead2ede7000b5f1c02d450140ce93e61211f64b46c3aa0adce715c381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/array.js"));

        // line 1
        echo "'use strict';

var setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , contains       = require('es5-ext/string/#/contains')
  , d              = require('d')
  , Iterator       = require('./')

  , defineProperty = Object.defineProperty
  , ArrayIterator;

ArrayIterator = module.exports = function (arr, kind) {
\tif (!(this instanceof ArrayIterator)) return new ArrayIterator(arr, kind);
\tIterator.call(this, arr);
\tif (!kind) kind = 'value';
\telse if (contains.call(kind, 'key+value')) kind = 'key+value';
\telse if (contains.call(kind, 'key')) kind = 'key';
\telse kind = 'value';
\tdefineProperty(this, '__kind__', d('', kind));
};
if (setPrototypeOf) setPrototypeOf(ArrayIterator, Iterator);

ArrayIterator.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(ArrayIterator),
\t_resolve: d(function (i) {
\t\tif (this.__kind__ === 'value') return this.__list__[i];
\t\tif (this.__kind__ === 'key+value') return [i, this.__list__[i]];
\t\treturn i;
\t}),
\ttoString: d(function () { return '[object Array Iterator]'; })
});
";
        
        $__internal_c3ef93ead2ede7000b5f1c02d450140ce93e61211f64b46c3aa0adce715c381f->leave($__internal_c3ef93ead2ede7000b5f1c02d450140ce93e61211f64b46c3aa0adce715c381f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , contains       = require('es5-ext/string/#/contains')
  , d              = require('d')
  , Iterator       = require('./')

  , defineProperty = Object.defineProperty
  , ArrayIterator;

ArrayIterator = module.exports = function (arr, kind) {
\tif (!(this instanceof ArrayIterator)) return new ArrayIterator(arr, kind);
\tIterator.call(this, arr);
\tif (!kind) kind = 'value';
\telse if (contains.call(kind, 'key+value')) kind = 'key+value';
\telse if (contains.call(kind, 'key')) kind = 'key';
\telse kind = 'value';
\tdefineProperty(this, '__kind__', d('', kind));
};
if (setPrototypeOf) setPrototypeOf(ArrayIterator, Iterator);

ArrayIterator.prototype = Object.create(Iterator.prototype, {
\tconstructor: d(ArrayIterator),
\t_resolve: d(function (i) {
\t\tif (this.__kind__ === 'value') return this.__list__[i];
\t\tif (this.__kind__ === 'key+value') return [i, this.__list__[i]];
\t\treturn i;
\t}),
\ttoString: d(function () { return '[object Array Iterator]'; })
});
", "node_modules/es6-iterator/array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/array.js");
    }
}
