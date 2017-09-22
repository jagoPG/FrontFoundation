<?php

/* node_modules/es6-iterator/get.js */
class __TwigTemplate_23b44ecc8eae0958b1804bfd8924183202dc868ec5f356ddcbddae16d8ab1b98 extends Twig_Template
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
        $__internal_98de1b3eab022553f0e611d40f57adc91c71a569eca6da71f905fc962666a8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98de1b3eab022553f0e611d40f57adc91c71a569eca6da71f905fc962666a8ad->enter($__internal_98de1b3eab022553f0e611d40f57adc91c71a569eca6da71f905fc962666a8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/get.js"));

        // line 1
        echo "'use strict';

var isArguments    = require('es5-ext/function/is-arguments')
  , isString       = require('es5-ext/string/is-string')
  , ArrayIterator  = require('./array')
  , StringIterator = require('./string')
  , iterable       = require('./valid-iterable')
  , iteratorSymbol = require('es6-symbol').iterator;

module.exports = function (obj) {
\tif (typeof iterable(obj)[iteratorSymbol] === 'function') return obj[iteratorSymbol]();
\tif (isArguments(obj)) return new ArrayIterator(obj);
\tif (isString(obj)) return new StringIterator(obj);
\treturn new ArrayIterator(obj);
};
";
        
        $__internal_98de1b3eab022553f0e611d40f57adc91c71a569eca6da71f905fc962666a8ad->leave($__internal_98de1b3eab022553f0e611d40f57adc91c71a569eca6da71f905fc962666a8ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/get.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isArguments    = require('es5-ext/function/is-arguments')
  , isString       = require('es5-ext/string/is-string')
  , ArrayIterator  = require('./array')
  , StringIterator = require('./string')
  , iterable       = require('./valid-iterable')
  , iteratorSymbol = require('es6-symbol').iterator;

module.exports = function (obj) {
\tif (typeof iterable(obj)[iteratorSymbol] === 'function') return obj[iteratorSymbol]();
\tif (isArguments(obj)) return new ArrayIterator(obj);
\tif (isString(obj)) return new StringIterator(obj);
\treturn new ArrayIterator(obj);
};
", "node_modules/es6-iterator/get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/get.js");
    }
}
