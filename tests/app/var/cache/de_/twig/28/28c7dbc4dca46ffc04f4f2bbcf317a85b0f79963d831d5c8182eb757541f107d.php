<?php

/* node_modules/error-ex/index.js */
class __TwigTemplate_9101ba6d5e4bfe3ef8143414dcd46afb61347e85a6b3d94bf841611afb6916cd extends Twig_Template
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
        $__internal_4601d9eac1fd80e79edf2359615d53c4136d8b4919ddc867350341208e20a5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4601d9eac1fd80e79edf2359615d53c4136d8b4919ddc867350341208e20a5be->enter($__internal_4601d9eac1fd80e79edf2359615d53c4136d8b4919ddc867350341208e20a5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/error-ex/index.js"));

        // line 1
        echo "'use strict';

var util = require('util');
var isArrayish = require('is-arrayish');

var errorEx = function errorEx(name, properties) {
\tif (!name || name.constructor !== String) {
\t\tproperties = name || {};
\t\tname = Error.name;
\t}

\tvar errorExError = function ErrorEXError(message) {
\t\tif (!this) {
\t\t\treturn new ErrorEXError(message);
\t\t}

\t\tmessage = message instanceof Error
\t\t\t? message.message
\t\t\t: (message || this.message);

\t\tError.call(this, message);
\t\tError.captureStackTrace(this, errorExError);

\t\tthis.name = name;

\t\tObject.defineProperty(this, 'message', {
\t\t\tconfigurable: true,
\t\t\tenumerable: false,
\t\t\tget: function () {
\t\t\t\tvar newMessage = message.split(/\\r?\\n/g);

\t\t\t\tfor (var key in properties) {
\t\t\t\t\tif (!properties.hasOwnProperty(key)) {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}

\t\t\t\t\tvar modifier = properties[key];

\t\t\t\t\tif ('message' in modifier) {
\t\t\t\t\t\tnewMessage = modifier.message(this[key], newMessage) || newMessage;
\t\t\t\t\t\tif (!isArrayish(newMessage)) {
\t\t\t\t\t\t\tnewMessage = [newMessage];
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn newMessage.join('\\n');
\t\t\t},
\t\t\tset: function (v) {
\t\t\t\tmessage = v;
\t\t\t}
\t\t});

\t\tvar stackDescriptor = Object.getOwnPropertyDescriptor(this, 'stack');
\t\tvar stackGetter = stackDescriptor.get;
\t\tvar stackValue = stackDescriptor.value;
\t\tdelete stackDescriptor.value;
\t\tdelete stackDescriptor.writable;

\t\tstackDescriptor.get = function () {
\t\t\tvar stack = (stackGetter)
\t\t\t\t? stackGetter.call(this).split(/\\r?\\n+/g)
\t\t\t\t: stackValue.split(/\\r?\\n+/g);

\t\t\t// starting in Node 7, the stack builder caches the message.
\t\t\t// just replace it.
\t\t\tstack[0] = this.name + ': ' + this.message;

\t\t\tvar lineCount = 1;
\t\t\tfor (var key in properties) {
\t\t\t\tif (!properties.hasOwnProperty(key)) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tvar modifier = properties[key];

\t\t\t\tif ('line' in modifier) {
\t\t\t\t\tvar line = modifier.line(this[key]);
\t\t\t\t\tif (line) {
\t\t\t\t\t\tstack.splice(lineCount++, 0, '    ' + line);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif ('stack' in modifier) {
\t\t\t\t\tmodifier.stack(this[key], stack);
\t\t\t\t}
\t\t\t}

\t\t\treturn stack.join('\\n');
\t\t};

\t\tObject.defineProperty(this, 'stack', stackDescriptor);
\t};

\tif (Object.setPrototypeOf) {
\t\tObject.setPrototypeOf(errorExError.prototype, Error.prototype);
\t\tObject.setPrototypeOf(errorExError, Error);
\t} else {
\t\tutil.inherits(errorExError, Error);
\t}

\treturn errorExError;
};

errorEx.append = function (str, def) {
\treturn {
\t\tmessage: function (v, message) {
\t\t\tv = v || def;

\t\t\tif (v) {
\t\t\t\tmessage[0] += ' ' + str.replace('%s', v.toString());
\t\t\t}

\t\t\treturn message;
\t\t}
\t};
};

errorEx.line = function (str, def) {
\treturn {
\t\tline: function (v) {
\t\t\tv = v || def;

\t\t\tif (v) {
\t\t\t\treturn str.replace('%s', v.toString());
\t\t\t}

\t\t\treturn null;
\t\t}
\t};
};

module.exports = errorEx;
";
        
        $__internal_4601d9eac1fd80e79edf2359615d53c4136d8b4919ddc867350341208e20a5be->leave($__internal_4601d9eac1fd80e79edf2359615d53c4136d8b4919ddc867350341208e20a5be_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/error-ex/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var util = require('util');
var isArrayish = require('is-arrayish');

var errorEx = function errorEx(name, properties) {
\tif (!name || name.constructor !== String) {
\t\tproperties = name || {};
\t\tname = Error.name;
\t}

\tvar errorExError = function ErrorEXError(message) {
\t\tif (!this) {
\t\t\treturn new ErrorEXError(message);
\t\t}

\t\tmessage = message instanceof Error
\t\t\t? message.message
\t\t\t: (message || this.message);

\t\tError.call(this, message);
\t\tError.captureStackTrace(this, errorExError);

\t\tthis.name = name;

\t\tObject.defineProperty(this, 'message', {
\t\t\tconfigurable: true,
\t\t\tenumerable: false,
\t\t\tget: function () {
\t\t\t\tvar newMessage = message.split(/\\r?\\n/g);

\t\t\t\tfor (var key in properties) {
\t\t\t\t\tif (!properties.hasOwnProperty(key)) {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}

\t\t\t\t\tvar modifier = properties[key];

\t\t\t\t\tif ('message' in modifier) {
\t\t\t\t\t\tnewMessage = modifier.message(this[key], newMessage) || newMessage;
\t\t\t\t\t\tif (!isArrayish(newMessage)) {
\t\t\t\t\t\t\tnewMessage = [newMessage];
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn newMessage.join('\\n');
\t\t\t},
\t\t\tset: function (v) {
\t\t\t\tmessage = v;
\t\t\t}
\t\t});

\t\tvar stackDescriptor = Object.getOwnPropertyDescriptor(this, 'stack');
\t\tvar stackGetter = stackDescriptor.get;
\t\tvar stackValue = stackDescriptor.value;
\t\tdelete stackDescriptor.value;
\t\tdelete stackDescriptor.writable;

\t\tstackDescriptor.get = function () {
\t\t\tvar stack = (stackGetter)
\t\t\t\t? stackGetter.call(this).split(/\\r?\\n+/g)
\t\t\t\t: stackValue.split(/\\r?\\n+/g);

\t\t\t// starting in Node 7, the stack builder caches the message.
\t\t\t// just replace it.
\t\t\tstack[0] = this.name + ': ' + this.message;

\t\t\tvar lineCount = 1;
\t\t\tfor (var key in properties) {
\t\t\t\tif (!properties.hasOwnProperty(key)) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\tvar modifier = properties[key];

\t\t\t\tif ('line' in modifier) {
\t\t\t\t\tvar line = modifier.line(this[key]);
\t\t\t\t\tif (line) {
\t\t\t\t\t\tstack.splice(lineCount++, 0, '    ' + line);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif ('stack' in modifier) {
\t\t\t\t\tmodifier.stack(this[key], stack);
\t\t\t\t}
\t\t\t}

\t\t\treturn stack.join('\\n');
\t\t};

\t\tObject.defineProperty(this, 'stack', stackDescriptor);
\t};

\tif (Object.setPrototypeOf) {
\t\tObject.setPrototypeOf(errorExError.prototype, Error.prototype);
\t\tObject.setPrototypeOf(errorExError, Error);
\t} else {
\t\tutil.inherits(errorExError, Error);
\t}

\treturn errorExError;
};

errorEx.append = function (str, def) {
\treturn {
\t\tmessage: function (v, message) {
\t\t\tv = v || def;

\t\t\tif (v) {
\t\t\t\tmessage[0] += ' ' + str.replace('%s', v.toString());
\t\t\t}

\t\t\treturn message;
\t\t}
\t};
};

errorEx.line = function (str, def) {
\treturn {
\t\tline: function (v) {
\t\t\tv = v || def;

\t\t\tif (v) {
\t\t\t\treturn str.replace('%s', v.toString());
\t\t\t}

\t\t\treturn null;
\t\t}
\t};
};

module.exports = errorEx;
", "node_modules/error-ex/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/error-ex/index.js");
    }
}
