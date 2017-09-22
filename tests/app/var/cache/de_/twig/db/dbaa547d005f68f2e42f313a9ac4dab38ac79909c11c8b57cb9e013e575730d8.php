<?php

/* node_modules/deep-extend/lib/deep-extend.js */
class __TwigTemplate_aa40b5f039a248f2333c4884c4e8699169e02d0b8147b82e9a14db3dbdf8c513 extends Twig_Template
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
        $__internal_010d1821f4dc8e45865b678971c8bb7fca25256c0f895beef565c77a0f924f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010d1821f4dc8e45865b678971c8bb7fca25256c0f895beef565c77a0f924f01->enter($__internal_010d1821f4dc8e45865b678971c8bb7fca25256c0f895beef565c77a0f924f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/deep-extend/lib/deep-extend.js"));

        // line 1
        echo "/*!
 * @description Recursive object extending
 * @author Viacheslav Lotsmanov <lotsmanov89@gmail.com>
 * @license MIT
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2013-2015 Viacheslav Lotsmanov
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the \"Software\"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

'use strict';

function isSpecificValue(val) {
\treturn (
\t\tval instanceof Buffer
\t\t|| val instanceof Date
\t\t|| val instanceof RegExp
\t) ? true : false;
}

function cloneSpecificValue(val) {
\tif (val instanceof Buffer) {
\t\tvar x = new Buffer(val.length);
\t\tval.copy(x);
\t\treturn x;
\t} else if (val instanceof Date) {
\t\treturn new Date(val.getTime());
\t} else if (val instanceof RegExp) {
\t\treturn new RegExp(val);
\t} else {
\t\tthrow new Error('Unexpected situation');
\t}
}

/**
 * Recursive cloning array.
 */
function deepCloneArray(arr) {
\tvar clone = [];
\tarr.forEach(function (item, index) {
\t\tif (typeof item === 'object' && item !== null) {
\t\t\tif (Array.isArray(item)) {
\t\t\t\tclone[index] = deepCloneArray(item);
\t\t\t} else if (isSpecificValue(item)) {
\t\t\t\tclone[index] = cloneSpecificValue(item);
\t\t\t} else {
\t\t\t\tclone[index] = deepExtend({}, item);
\t\t\t}
\t\t} else {
\t\t\tclone[index] = item;
\t\t}
\t});
\treturn clone;
}

/**
 * Extening object that entered in first argument.
 *
 * Returns extended object or false if have no target object or incorrect type.
 *
 * If you wish to clone source object (without modify it), just use empty new
 * object as first argument, like this:
 *   deepExtend({}, yourObj_1, [yourObj_N]);
 */
var deepExtend = module.exports = function (/*obj_1, [obj_2], [obj_N]*/) {
\tif (arguments.length < 1 || typeof arguments[0] !== 'object') {
\t\treturn false;
\t}

\tif (arguments.length < 2) {
\t\treturn arguments[0];
\t}

\tvar target = arguments[0];

\t// convert arguments to array and cut off target object
\tvar args = Array.prototype.slice.call(arguments, 1);

\tvar val, src, clone;

\targs.forEach(function (obj) {
\t\t// skip argument if isn't an object, is null, or is an array
\t\tif (typeof obj !== 'object' || obj === null || Array.isArray(obj)) {
\t\t\treturn;
\t\t}

\t\tObject.keys(obj).forEach(function (key) {
\t\t\tsrc = target[key]; // source value
\t\t\tval = obj[key]; // new value

\t\t\t// recursion prevention
\t\t\tif (val === target) {
\t\t\t\treturn;

\t\t\t/**
\t\t\t * if new value isn't object then just overwrite by new value
\t\t\t * instead of extending.
\t\t\t */
\t\t\t} else if (typeof val !== 'object' || val === null) {
\t\t\t\ttarget[key] = val;
\t\t\t\treturn;

\t\t\t// just clone arrays (and recursive clone objects inside)
\t\t\t} else if (Array.isArray(val)) {
\t\t\t\ttarget[key] = deepCloneArray(val);
\t\t\t\treturn;

\t\t\t// custom cloning and overwrite for specific objects
\t\t\t} else if (isSpecificValue(val)) {
\t\t\t\ttarget[key] = cloneSpecificValue(val);
\t\t\t\treturn;

\t\t\t// overwrite by new value if source isn't object or array
\t\t\t} else if (typeof src !== 'object' || src === null || Array.isArray(src)) {
\t\t\t\ttarget[key] = deepExtend({}, val);
\t\t\t\treturn;

\t\t\t// source value and new value is objects both, extending...
\t\t\t} else {
\t\t\t\ttarget[key] = deepExtend(src, val);
\t\t\t\treturn;
\t\t\t}
\t\t});
\t});

\treturn target;
}
";
        
        $__internal_010d1821f4dc8e45865b678971c8bb7fca25256c0f895beef565c77a0f924f01->leave($__internal_010d1821f4dc8e45865b678971c8bb7fca25256c0f895beef565c77a0f924f01_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/deep-extend/lib/deep-extend.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * @description Recursive object extending
 * @author Viacheslav Lotsmanov <lotsmanov89@gmail.com>
 * @license MIT
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2013-2015 Viacheslav Lotsmanov
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the \"Software\"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

'use strict';

function isSpecificValue(val) {
\treturn (
\t\tval instanceof Buffer
\t\t|| val instanceof Date
\t\t|| val instanceof RegExp
\t) ? true : false;
}

function cloneSpecificValue(val) {
\tif (val instanceof Buffer) {
\t\tvar x = new Buffer(val.length);
\t\tval.copy(x);
\t\treturn x;
\t} else if (val instanceof Date) {
\t\treturn new Date(val.getTime());
\t} else if (val instanceof RegExp) {
\t\treturn new RegExp(val);
\t} else {
\t\tthrow new Error('Unexpected situation');
\t}
}

/**
 * Recursive cloning array.
 */
function deepCloneArray(arr) {
\tvar clone = [];
\tarr.forEach(function (item, index) {
\t\tif (typeof item === 'object' && item !== null) {
\t\t\tif (Array.isArray(item)) {
\t\t\t\tclone[index] = deepCloneArray(item);
\t\t\t} else if (isSpecificValue(item)) {
\t\t\t\tclone[index] = cloneSpecificValue(item);
\t\t\t} else {
\t\t\t\tclone[index] = deepExtend({}, item);
\t\t\t}
\t\t} else {
\t\t\tclone[index] = item;
\t\t}
\t});
\treturn clone;
}

/**
 * Extening object that entered in first argument.
 *
 * Returns extended object or false if have no target object or incorrect type.
 *
 * If you wish to clone source object (without modify it), just use empty new
 * object as first argument, like this:
 *   deepExtend({}, yourObj_1, [yourObj_N]);
 */
var deepExtend = module.exports = function (/*obj_1, [obj_2], [obj_N]*/) {
\tif (arguments.length < 1 || typeof arguments[0] !== 'object') {
\t\treturn false;
\t}

\tif (arguments.length < 2) {
\t\treturn arguments[0];
\t}

\tvar target = arguments[0];

\t// convert arguments to array and cut off target object
\tvar args = Array.prototype.slice.call(arguments, 1);

\tvar val, src, clone;

\targs.forEach(function (obj) {
\t\t// skip argument if isn't an object, is null, or is an array
\t\tif (typeof obj !== 'object' || obj === null || Array.isArray(obj)) {
\t\t\treturn;
\t\t}

\t\tObject.keys(obj).forEach(function (key) {
\t\t\tsrc = target[key]; // source value
\t\t\tval = obj[key]; // new value

\t\t\t// recursion prevention
\t\t\tif (val === target) {
\t\t\t\treturn;

\t\t\t/**
\t\t\t * if new value isn't object then just overwrite by new value
\t\t\t * instead of extending.
\t\t\t */
\t\t\t} else if (typeof val !== 'object' || val === null) {
\t\t\t\ttarget[key] = val;
\t\t\t\treturn;

\t\t\t// just clone arrays (and recursive clone objects inside)
\t\t\t} else if (Array.isArray(val)) {
\t\t\t\ttarget[key] = deepCloneArray(val);
\t\t\t\treturn;

\t\t\t// custom cloning and overwrite for specific objects
\t\t\t} else if (isSpecificValue(val)) {
\t\t\t\ttarget[key] = cloneSpecificValue(val);
\t\t\t\treturn;

\t\t\t// overwrite by new value if source isn't object or array
\t\t\t} else if (typeof src !== 'object' || src === null || Array.isArray(src)) {
\t\t\t\ttarget[key] = deepExtend({}, val);
\t\t\t\treturn;

\t\t\t// source value and new value is objects both, extending...
\t\t\t} else {
\t\t\t\ttarget[key] = deepExtend(src, val);
\t\t\t\treturn;
\t\t\t}
\t\t});
\t});

\treturn target;
}
", "node_modules/deep-extend/lib/deep-extend.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/deep-extend/lib/deep-extend.js");
    }
}
