<?php

/* node_modules/event-emitter/pipe.js */
class __TwigTemplate_cbd5886fa8256650fb1f37d2c7437f5adf7736fedd9cfa99e094fb87a268a29b extends Twig_Template
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
        $__internal_21a628136fc5101d3da3d0df6611b0ce803d6f38c5250081ae77a7f920c9f4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a628136fc5101d3da3d0df6611b0ce803d6f38c5250081ae77a7f920c9f4e4->enter($__internal_21a628136fc5101d3da3d0df6611b0ce803d6f38c5250081ae77a7f920c9f4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/pipe.js"));

        // line 1
        echo "'use strict';

var aFrom          = require('es5-ext/array/from')
  , remove         = require('es5-ext/array/#/remove')
  , value          = require('es5-ext/object/valid-object')
  , d              = require('d')
  , emit           = require('./').methods.emit

  , defineProperty = Object.defineProperty
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor;

module.exports = function (e1, e2/*, name*/) {
\tvar pipes, pipe, desc, name;

\t(value(e1) && value(e2));
\tname = arguments[2];
\tif (name === undefined) name = 'emit';

\tpipe = {
\t\tclose: function () { remove.call(pipes, e2); }
\t};
\tif (hasOwnProperty.call(e1, '__eePipes__')) {
\t\t(pipes = e1.__eePipes__).push(e2);
\t\treturn pipe;
\t}
\tdefineProperty(e1, '__eePipes__', d('c', pipes = [e2]));
\tdesc = getOwnPropertyDescriptor(e1, name);
\tif (!desc) {
\t\tdesc = d('c', undefined);
\t} else {
\t\tdelete desc.get;
\t\tdelete desc.set;
\t}
\tdesc.value = function () {
\t\tvar i, emitter, data = aFrom(pipes);
\t\temit.apply(this, arguments);
\t\tfor (i = 0; (emitter = data[i]); ++i) emit.apply(emitter, arguments);
\t};
\tdefineProperty(e1, name, desc);
\treturn pipe;
};
";
        
        $__internal_21a628136fc5101d3da3d0df6611b0ce803d6f38c5250081ae77a7f920c9f4e4->leave($__internal_21a628136fc5101d3da3d0df6611b0ce803d6f38c5250081ae77a7f920c9f4e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/pipe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var aFrom          = require('es5-ext/array/from')
  , remove         = require('es5-ext/array/#/remove')
  , value          = require('es5-ext/object/valid-object')
  , d              = require('d')
  , emit           = require('./').methods.emit

  , defineProperty = Object.defineProperty
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor;

module.exports = function (e1, e2/*, name*/) {
\tvar pipes, pipe, desc, name;

\t(value(e1) && value(e2));
\tname = arguments[2];
\tif (name === undefined) name = 'emit';

\tpipe = {
\t\tclose: function () { remove.call(pipes, e2); }
\t};
\tif (hasOwnProperty.call(e1, '__eePipes__')) {
\t\t(pipes = e1.__eePipes__).push(e2);
\t\treturn pipe;
\t}
\tdefineProperty(e1, '__eePipes__', d('c', pipes = [e2]));
\tdesc = getOwnPropertyDescriptor(e1, name);
\tif (!desc) {
\t\tdesc = d('c', undefined);
\t} else {
\t\tdelete desc.get;
\t\tdelete desc.set;
\t}
\tdesc.value = function () {
\t\tvar i, emitter, data = aFrom(pipes);
\t\temit.apply(this, arguments);
\t\tfor (i = 0; (emitter = data[i]); ++i) emit.apply(emitter, arguments);
\t};
\tdefineProperty(e1, name, desc);
\treturn pipe;
};
", "node_modules/event-emitter/pipe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/pipe.js");
    }
}
