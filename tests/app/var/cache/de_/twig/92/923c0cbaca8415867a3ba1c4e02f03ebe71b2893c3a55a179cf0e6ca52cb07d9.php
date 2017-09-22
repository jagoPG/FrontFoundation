<?php

/* node_modules/event-emitter/index.js */
class __TwigTemplate_ed64ea70362812940d37e9c737ee4b1a498661e1b8b2f27a9b9d56899561b3a8 extends Twig_Template
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
        $__internal_8cb532f1c834a92b01e4efc81db3d5554caaa6e1b03b18a017d2c065f9084f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb532f1c834a92b01e4efc81db3d5554caaa6e1b03b18a017d2c065f9084f81->enter($__internal_8cb532f1c834a92b01e4efc81db3d5554caaa6e1b03b18a017d2c065f9084f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/index.js"));

        // line 1
        echo "'use strict';

var d        = require('d')
  , callable = require('es5-ext/object/valid-callable')

  , apply = Function.prototype.apply, call = Function.prototype.call
  , create = Object.create, defineProperty = Object.defineProperty
  , defineProperties = Object.defineProperties
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , descriptor = { configurable: true, enumerable: false, writable: true }

  , on, once, off, emit, methods, descriptors, base;

on = function (type, listener) {
\tvar data;

\tcallable(listener);

\tif (!hasOwnProperty.call(this, '__ee__')) {
\t\tdata = descriptor.value = create(null);
\t\tdefineProperty(this, '__ee__', descriptor);
\t\tdescriptor.value = null;
\t} else {
\t\tdata = this.__ee__;
\t}
\tif (!data[type]) data[type] = listener;
\telse if (typeof data[type] === 'object') data[type].push(listener);
\telse data[type] = [data[type], listener];

\treturn this;
};

once = function (type, listener) {
\tvar once, self;

\tcallable(listener);
\tself = this;
\ton.call(this, type, once = function () {
\t\toff.call(self, type, once);
\t\tapply.call(listener, this, arguments);
\t});

\tonce.__eeOnceListener__ = listener;
\treturn this;
};

off = function (type, listener) {
\tvar data, listeners, candidate, i;

\tcallable(listener);

\tif (!hasOwnProperty.call(this, '__ee__')) return this;
\tdata = this.__ee__;
\tif (!data[type]) return this;
\tlisteners = data[type];

\tif (typeof listeners === 'object') {
\t\tfor (i = 0; (candidate = listeners[i]); ++i) {
\t\t\tif ((candidate === listener) ||
\t\t\t\t\t(candidate.__eeOnceListener__ === listener)) {
\t\t\t\tif (listeners.length === 2) data[type] = listeners[i ? 0 : 1];
\t\t\t\telse listeners.splice(i, 1);
\t\t\t}
\t\t}
\t} else {
\t\tif ((listeners === listener) ||
\t\t\t\t(listeners.__eeOnceListener__ === listener)) {
\t\t\tdelete data[type];
\t\t}
\t}

\treturn this;
};

emit = function (type) {
\tvar i, l, listener, listeners, args;

\tif (!hasOwnProperty.call(this, '__ee__')) return;
\tlisteners = this.__ee__[type];
\tif (!listeners) return;

\tif (typeof listeners === 'object') {
\t\tl = arguments.length;
\t\targs = new Array(l - 1);
\t\tfor (i = 1; i < l; ++i) args[i - 1] = arguments[i];

\t\tlisteners = listeners.slice();
\t\tfor (i = 0; (listener = listeners[i]); ++i) {
\t\t\tapply.call(listener, this, args);
\t\t}
\t} else {
\t\tswitch (arguments.length) {
\t\tcase 1:
\t\t\tcall.call(listeners, this);
\t\t\tbreak;
\t\tcase 2:
\t\t\tcall.call(listeners, this, arguments[1]);
\t\t\tbreak;
\t\tcase 3:
\t\t\tcall.call(listeners, this, arguments[1], arguments[2]);
\t\t\tbreak;
\t\tdefault:
\t\t\tl = arguments.length;
\t\t\targs = new Array(l - 1);
\t\t\tfor (i = 1; i < l; ++i) {
\t\t\t\targs[i - 1] = arguments[i];
\t\t\t}
\t\t\tapply.call(listeners, this, args);
\t\t}
\t}
};

methods = {
\ton: on,
\tonce: once,
\toff: off,
\temit: emit
};

descriptors = {
\ton: d(on),
\tonce: d(once),
\toff: d(off),
\temit: d(emit)
};

base = defineProperties({}, descriptors);

module.exports = exports = function (o) {
\treturn (o == null) ? create(base) : defineProperties(Object(o), descriptors);
};
exports.methods = methods;
";
        
        $__internal_8cb532f1c834a92b01e4efc81db3d5554caaa6e1b03b18a017d2c065f9084f81->leave($__internal_8cb532f1c834a92b01e4efc81db3d5554caaa6e1b03b18a017d2c065f9084f81_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var d        = require('d')
  , callable = require('es5-ext/object/valid-callable')

  , apply = Function.prototype.apply, call = Function.prototype.call
  , create = Object.create, defineProperty = Object.defineProperty
  , defineProperties = Object.defineProperties
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , descriptor = { configurable: true, enumerable: false, writable: true }

  , on, once, off, emit, methods, descriptors, base;

on = function (type, listener) {
\tvar data;

\tcallable(listener);

\tif (!hasOwnProperty.call(this, '__ee__')) {
\t\tdata = descriptor.value = create(null);
\t\tdefineProperty(this, '__ee__', descriptor);
\t\tdescriptor.value = null;
\t} else {
\t\tdata = this.__ee__;
\t}
\tif (!data[type]) data[type] = listener;
\telse if (typeof data[type] === 'object') data[type].push(listener);
\telse data[type] = [data[type], listener];

\treturn this;
};

once = function (type, listener) {
\tvar once, self;

\tcallable(listener);
\tself = this;
\ton.call(this, type, once = function () {
\t\toff.call(self, type, once);
\t\tapply.call(listener, this, arguments);
\t});

\tonce.__eeOnceListener__ = listener;
\treturn this;
};

off = function (type, listener) {
\tvar data, listeners, candidate, i;

\tcallable(listener);

\tif (!hasOwnProperty.call(this, '__ee__')) return this;
\tdata = this.__ee__;
\tif (!data[type]) return this;
\tlisteners = data[type];

\tif (typeof listeners === 'object') {
\t\tfor (i = 0; (candidate = listeners[i]); ++i) {
\t\t\tif ((candidate === listener) ||
\t\t\t\t\t(candidate.__eeOnceListener__ === listener)) {
\t\t\t\tif (listeners.length === 2) data[type] = listeners[i ? 0 : 1];
\t\t\t\telse listeners.splice(i, 1);
\t\t\t}
\t\t}
\t} else {
\t\tif ((listeners === listener) ||
\t\t\t\t(listeners.__eeOnceListener__ === listener)) {
\t\t\tdelete data[type];
\t\t}
\t}

\treturn this;
};

emit = function (type) {
\tvar i, l, listener, listeners, args;

\tif (!hasOwnProperty.call(this, '__ee__')) return;
\tlisteners = this.__ee__[type];
\tif (!listeners) return;

\tif (typeof listeners === 'object') {
\t\tl = arguments.length;
\t\targs = new Array(l - 1);
\t\tfor (i = 1; i < l; ++i) args[i - 1] = arguments[i];

\t\tlisteners = listeners.slice();
\t\tfor (i = 0; (listener = listeners[i]); ++i) {
\t\t\tapply.call(listener, this, args);
\t\t}
\t} else {
\t\tswitch (arguments.length) {
\t\tcase 1:
\t\t\tcall.call(listeners, this);
\t\t\tbreak;
\t\tcase 2:
\t\t\tcall.call(listeners, this, arguments[1]);
\t\t\tbreak;
\t\tcase 3:
\t\t\tcall.call(listeners, this, arguments[1], arguments[2]);
\t\t\tbreak;
\t\tdefault:
\t\t\tl = arguments.length;
\t\t\targs = new Array(l - 1);
\t\t\tfor (i = 1; i < l; ++i) {
\t\t\t\targs[i - 1] = arguments[i];
\t\t\t}
\t\t\tapply.call(listeners, this, args);
\t\t}
\t}
};

methods = {
\ton: on,
\tonce: once,
\toff: off,
\temit: emit
};

descriptors = {
\ton: d(on),
\tonce: d(once),
\toff: d(off),
\temit: d(emit)
};

base = defineProperties({}, descriptors);

module.exports = exports = function (o) {
\treturn (o == null) ? create(base) : defineProperties(Object(o), descriptors);
};
exports.methods = methods;
", "node_modules/event-emitter/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/index.js");
    }
}
