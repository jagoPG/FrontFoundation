<?php

/* node_modules/d/auto-bind.js */
class __TwigTemplate_409d07c7dd89c31870f416f23247f4e93930fe5cbdd7d354d7ef523d17a5bbcf extends Twig_Template
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
        $__internal_e1f95bf31299fe158601f585cd41262c676ef9a7ec28ffc5aa84ae9782d10a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f95bf31299fe158601f585cd41262c676ef9a7ec28ffc5aa84ae9782d10a05->enter($__internal_e1f95bf31299fe158601f585cd41262c676ef9a7ec28ffc5aa84ae9782d10a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/d/auto-bind.js"));

        // line 1
        echo "'use strict';

var copy             = require('es5-ext/object/copy')
  , normalizeOptions = require('es5-ext/object/normalize-options')
  , ensureCallable   = require('es5-ext/object/valid-callable')
  , map              = require('es5-ext/object/map')
  , callable         = require('es5-ext/object/valid-callable')
  , validValue       = require('es5-ext/object/valid-value')

  , bind = Function.prototype.bind, defineProperty = Object.defineProperty
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , define;

define = function (name, desc, options) {
\tvar value = validValue(desc) && callable(desc.value), dgs;
\tdgs = copy(desc);
\tdelete dgs.writable;
\tdelete dgs.value;
\tdgs.get = function () {
\t\tif (!options.overwriteDefinition && hasOwnProperty.call(this, name)) return value;
\t\tdesc.value = bind.call(value, options.resolveContext ? options.resolveContext(this) : this);
\t\tdefineProperty(this, name, desc);
\t\treturn this[name];
\t};
\treturn dgs;
};

module.exports = function (props/*, options*/) {
\tvar options = normalizeOptions(arguments[1]);
\tif (options.resolveContext != null) ensureCallable(options.resolveContext);
\treturn map(props, function (desc, name) { return define(name, desc, options); });
};
";
        
        $__internal_e1f95bf31299fe158601f585cd41262c676ef9a7ec28ffc5aa84ae9782d10a05->leave($__internal_e1f95bf31299fe158601f585cd41262c676ef9a7ec28ffc5aa84ae9782d10a05_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/d/auto-bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var copy             = require('es5-ext/object/copy')
  , normalizeOptions = require('es5-ext/object/normalize-options')
  , ensureCallable   = require('es5-ext/object/valid-callable')
  , map              = require('es5-ext/object/map')
  , callable         = require('es5-ext/object/valid-callable')
  , validValue       = require('es5-ext/object/valid-value')

  , bind = Function.prototype.bind, defineProperty = Object.defineProperty
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , define;

define = function (name, desc, options) {
\tvar value = validValue(desc) && callable(desc.value), dgs;
\tdgs = copy(desc);
\tdelete dgs.writable;
\tdelete dgs.value;
\tdgs.get = function () {
\t\tif (!options.overwriteDefinition && hasOwnProperty.call(this, name)) return value;
\t\tdesc.value = bind.call(value, options.resolveContext ? options.resolveContext(this) : this);
\t\tdefineProperty(this, name, desc);
\t\treturn this[name];
\t};
\treturn dgs;
};

module.exports = function (props/*, options*/) {
\tvar options = normalizeOptions(arguments[1]);
\tif (options.resolveContext != null) ensureCallable(options.resolveContext);
\treturn map(props, function (desc, name) { return define(name, desc, options); });
};
", "node_modules/d/auto-bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/d/auto-bind.js");
    }
}
