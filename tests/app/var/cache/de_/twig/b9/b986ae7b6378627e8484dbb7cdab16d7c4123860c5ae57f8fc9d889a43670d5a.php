<?php

/* node_modules/regenerate/regenerate.js */
class __TwigTemplate_db5ed4376289bd774b897400b735ff98bef0b62c20a52c345ea3a80c9c68e499 extends Twig_Template
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
        $__internal_80fde90177264c569e478cf30ab51341ef42c341278b78bc5480a038ea18dc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fde90177264c569e478cf30ab51341ef42c341278b78bc5480a038ea18dc12->enter($__internal_80fde90177264c569e478cf30ab51341ef42c341278b78bc5480a038ea18dc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerate/regenerate.js"));

        // line 1
        echo "/*! https://mths.be/regenerate v1.3.2 by @mathias | MIT license */
;(function(root) {

\t// Detect free variables `exports`.
\tvar freeExports = typeof exports == 'object' && exports;

\t// Detect free variable `module`.
\tvar freeModule = typeof module == 'object' && module &&
\t\tmodule.exports == freeExports && module;

\t// Detect free variable `global`, from Node.js/io.js or Browserified code,
\t// and use it as `root`.
\tvar freeGlobal = typeof global == 'object' && global;
\tif (freeGlobal.global === freeGlobal || freeGlobal.window === freeGlobal) {
\t\troot = freeGlobal;
\t}

\t/*--------------------------------------------------------------------------*/

\tvar ERRORS = {
\t\t'rangeOrder': 'A range\\u2019s `stop` value must be greater than or equal ' +
\t\t\t'to the `start` value.',
\t\t'codePointRange': 'Invalid code point value. Code points range from ' +
\t\t\t'U+000000 to U+10FFFF.'
\t};

\t// https://mathiasbynens.be/notes/javascript-encoding#surrogate-pairs
\tvar HIGH_SURROGATE_MIN = 0xD800;
\tvar HIGH_SURROGATE_MAX = 0xDBFF;
\tvar LOW_SURROGATE_MIN = 0xDC00;
\tvar LOW_SURROGATE_MAX = 0xDFFF;

\t// In Regenerate output, `\\0` is never preceded by `\\` because we sort by
\t// code point value, so let’s keep this regular expression simple.
\tvar regexNull = /\\\\x00([^0123456789]|\$)/g;

\tvar object = {};
\tvar hasOwnProperty = object.hasOwnProperty;
\tvar extend = function(destination, source) {
\t\tvar key;
\t\tfor (key in source) {
\t\t\tif (hasOwnProperty.call(source, key)) {
\t\t\t\tdestination[key] = source[key];
\t\t\t}
\t\t}
\t\treturn destination;
\t};

\tvar forEach = function(array, callback) {
\t\tvar index = -1;
\t\tvar length = array.length;
\t\twhile (++index < length) {
\t\t\tcallback(array[index], index);
\t\t}
\t};

\tvar toString = object.toString;
\tvar isArray = function(value) {
\t\treturn toString.call(value) == '[object Array]';
\t};
\tvar isNumber = function(value) {
\t\treturn typeof value == 'number' ||
\t\t\ttoString.call(value) == '[object Number]';
\t};

\t// This assumes that `number` is a positive integer that `toString()`s nicely
\t// (which is the case for all code point values).
\tvar zeroes = '0000';
\tvar pad = function(number, totalCharacters) {
\t\tvar string = String(number);
\t\treturn string.length < totalCharacters
\t\t\t? (zeroes + string).slice(-totalCharacters)
\t\t\t: string;
\t};

\tvar hex = function(number) {
\t\treturn Number(number).toString(16).toUpperCase();
\t};

\tvar slice = [].slice;

\t/*--------------------------------------------------------------------------*/

\tvar dataFromCodePoints = function(codePoints) {
\t\tvar index = -1;
\t\tvar length = codePoints.length;
\t\tvar max = length - 1;
\t\tvar result = [];
\t\tvar isStart = true;
\t\tvar tmp;
\t\tvar previous = 0;
\t\twhile (++index < length) {
\t\t\ttmp = codePoints[index];
\t\t\tif (isStart) {
\t\t\t\tresult.push(tmp);
\t\t\t\tprevious = tmp;
\t\t\t\tisStart = false;
\t\t\t} else {
\t\t\t\tif (tmp == previous + 1) {
\t\t\t\t\tif (index != max) {
\t\t\t\t\t\tprevious = tmp;
\t\t\t\t\t\tcontinue;
\t\t\t\t\t} else {
\t\t\t\t\t\tisStart = true;
\t\t\t\t\t\tresult.push(tmp + 1);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t// End the previous range and start a new one.
\t\t\t\t\tresult.push(previous + 1, tmp);
\t\t\t\t\tprevious = tmp;
\t\t\t\t}
\t\t\t}
\t\t}
\t\tif (!isStart) {
\t\t\tresult.push(tmp + 1);
\t\t}
\t\treturn result;
\t};

\tvar dataRemove = function(data, codePoint) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];
\t\t\tif (codePoint >= start && codePoint < end) {
\t\t\t\t// Modify this pair.
\t\t\t\tif (codePoint == start) {
\t\t\t\t\tif (end == start + 1) {
\t\t\t\t\t\t// Just remove `start` and `end`.
\t\t\t\t\t\tdata.splice(index, 2);
\t\t\t\t\t\treturn data;
\t\t\t\t\t} else {
\t\t\t\t\t\t// Just replace `start` with a new value.
\t\t\t\t\t\tdata[index] = codePoint + 1;
\t\t\t\t\t\treturn data;
\t\t\t\t\t}
\t\t\t\t} else if (codePoint == end - 1) {
\t\t\t\t\t// Just replace `end` with a new value.
\t\t\t\t\tdata[index + 1] = codePoint;
\t\t\t\t\treturn data;
\t\t\t\t} else {
\t\t\t\t\t// Replace `[start, end]` with `[startA, endA, startB, endB]`.
\t\t\t\t\tdata.splice(index, 2, start, codePoint, codePoint + 1, end);
\t\t\t\t\treturn data;
\t\t\t\t}
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn data;
\t};

\tvar dataRemoveRange = function(data, rangeStart, rangeEnd) {
\t\tif (rangeEnd < rangeStart) {
\t\t\tthrow Error(ERRORS.rangeOrder);
\t\t}
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\twhile (index < data.length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1; // Note: the `- 1` makes `end` inclusive.

\t\t\t// Exit as soon as no more matching pairs can be found.
\t\t\tif (start > rangeEnd) {
\t\t\t\treturn data;
\t\t\t}

\t\t\t// Check if this range pair is equal to, or forms a subset of, the range
\t\t\t// to be removed.
\t\t\t// E.g. we have `[0, 11, 40, 51]` and want to remove 0-10 → `[40, 51]`.
\t\t\t// E.g. we have `[40, 51]` and want to remove 0-100 → `[]`.
\t\t\tif (rangeStart <= start && rangeEnd >= end) {
\t\t\t\t// Remove this pair.
\t\t\t\tdata.splice(index, 2);
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// Check if both `rangeStart` and `rangeEnd` are within the bounds of
\t\t\t// this pair.
\t\t\t// E.g. we have `[0, 11]` and want to remove 4-6 → `[0, 4, 7, 11]`.
\t\t\tif (rangeStart >= start && rangeEnd < end) {
\t\t\t\tif (rangeStart == start) {
\t\t\t\t\t// Replace `[start, end]` with `[startB, endB]`.
\t\t\t\t\tdata[index] = rangeEnd + 1;
\t\t\t\t\tdata[index + 1] = end + 1;
\t\t\t\t\treturn data;
\t\t\t\t}
\t\t\t\t// Replace `[start, end]` with `[startA, endA, startB, endB]`.
\t\t\t\tdata.splice(index, 2, start, rangeStart, rangeEnd + 1, end + 1);
\t\t\t\treturn data;
\t\t\t}

\t\t\t// Check if only `rangeStart` is within the bounds of this pair.
\t\t\t// E.g. we have `[0, 11]` and want to remove 4-20 → `[0, 4]`.
\t\t\tif (rangeStart >= start && rangeStart <= end) {
\t\t\t\t// Replace `end` with `rangeStart`.
\t\t\t\tdata[index + 1] = rangeStart;
\t\t\t\t// Note: we cannot `return` just yet, in case any following pairs still
\t\t\t\t// contain matching code points.
\t\t\t\t// E.g. we have `[0, 11, 14, 31]` and want to remove 4-20
\t\t\t\t// → `[0, 4, 21, 31]`.
\t\t\t}

\t\t\t// Check if only `rangeEnd` is within the bounds of this pair.
\t\t\t// E.g. we have `[14, 31]` and want to remove 4-20 → `[21, 31]`.
\t\t\telse if (rangeEnd >= start && rangeEnd <= end) {
\t\t\t\t// Just replace `start`.
\t\t\t\tdata[index] = rangeEnd + 1;
\t\t\t\treturn data;
\t\t\t}

\t\t\tindex += 2;
\t\t}
\t\treturn data;
\t};

\t var dataAdd = function(data, codePoint) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar lastIndex = null;
\t\tvar length = data.length;
\t\tif (codePoint < 0x0 || codePoint > 0x10FFFF) {
\t\t\tthrow RangeError(ERRORS.codePointRange);
\t\t}
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];

\t\t\t// Check if the code point is already in the set.
\t\t\tif (codePoint >= start && codePoint < end) {
\t\t\t\treturn data;
\t\t\t}

\t\t\tif (codePoint == start - 1) {
\t\t\t\t// Just replace `start` with a new value.
\t\t\t\tdata[index] = codePoint;
\t\t\t\treturn data;
\t\t\t}

\t\t\t// At this point, if `start` is `greater` than `codePoint`, insert a new
\t\t\t// `[start, end]` pair before the current pair, or after the current pair
\t\t\t// if there is a known `lastIndex`.
\t\t\tif (start > codePoint) {
\t\t\t\tdata.splice(
\t\t\t\t\tlastIndex != null ? lastIndex + 2 : 0,
\t\t\t\t\t0,
\t\t\t\t\tcodePoint,
\t\t\t\t\tcodePoint + 1
\t\t\t\t);
\t\t\t\treturn data;
\t\t\t}

\t\t\tif (codePoint == end) {
\t\t\t\t// Check if adding this code point causes two separate ranges to become
\t\t\t\t// a single range, e.g. `dataAdd([0, 4, 5, 10], 4)` → `[0, 10]`.
\t\t\t\tif (codePoint + 1 == data[index + 2]) {
\t\t\t\t\tdata.splice(index, 4, start, data[index + 3]);
\t\t\t\t\treturn data;
\t\t\t\t}
\t\t\t\t// Else, just replace `end` with a new value.
\t\t\t\tdata[index + 1] = codePoint + 1;
\t\t\t\treturn data;
\t\t\t}
\t\t\tlastIndex = index;
\t\t\tindex += 2;
\t\t}
\t\t// The loop has finished; add the new pair to the end of the data set.
\t\tdata.push(codePoint, codePoint + 1);
\t\treturn data;
\t};

\tvar dataAddData = function(dataA, dataB) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar data = dataA.slice();
\t\tvar length = dataB.length;
\t\twhile (index < length) {
\t\t\tstart = dataB[index];
\t\t\tend = dataB[index + 1] - 1;
\t\t\tif (start == end) {
\t\t\t\tdata = dataAdd(data, start);
\t\t\t} else {
\t\t\t\tdata = dataAddRange(data, start, end);
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn data;
\t};

\tvar dataRemoveData = function(dataA, dataB) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar data = dataA.slice();
\t\tvar length = dataB.length;
\t\twhile (index < length) {
\t\t\tstart = dataB[index];
\t\t\tend = dataB[index + 1] - 1;
\t\t\tif (start == end) {
\t\t\t\tdata = dataRemove(data, start);
\t\t\t} else {
\t\t\t\tdata = dataRemoveRange(data, start, end);
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn data;
\t};

\tvar dataAddRange = function(data, rangeStart, rangeEnd) {
\t\tif (rangeEnd < rangeStart) {
\t\t\tthrow Error(ERRORS.rangeOrder);
\t\t}
\t\tif (
\t\t\trangeStart < 0x0 || rangeStart > 0x10FFFF ||
\t\t\trangeEnd < 0x0 || rangeEnd > 0x10FFFF
\t\t) {
\t\t\tthrow RangeError(ERRORS.codePointRange);
\t\t}
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar added = false;
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];

\t\t\tif (added) {
\t\t\t\t// The range has already been added to the set; at this point, we just
\t\t\t\t// need to get rid of the following ranges in case they overlap.

\t\t\t\t// Check if this range can be combined with the previous range.
\t\t\t\tif (start == rangeEnd + 1) {
\t\t\t\t\tdata.splice(index - 1, 2);
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Exit as soon as no more possibly overlapping pairs can be found.
\t\t\t\tif (start > rangeEnd) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// E.g. `[0, 11, 12, 16]` and we’ve added 5-15, so we now have
\t\t\t\t// `[0, 16, 12, 16]`. Remove the `12,16` part, as it lies within the
\t\t\t\t// `0,16` range that was previously added.
\t\t\t\tif (start >= rangeStart && start <= rangeEnd) {
\t\t\t\t\t// `start` lies within the range that was previously added.

\t\t\t\t\tif (end > rangeStart && end - 1 <= rangeEnd) {
\t\t\t\t\t\t// `end` lies within the range that was previously added as well,
\t\t\t\t\t\t// so remove this pair.
\t\t\t\t\t\tdata.splice(index, 2);
\t\t\t\t\t\tindex -= 2;
\t\t\t\t\t\t// Note: we cannot `return` just yet, as there may still be other
\t\t\t\t\t\t// overlapping pairs.
\t\t\t\t\t} else {
\t\t\t\t\t\t// `start` lies within the range that was previously added, but
\t\t\t\t\t\t// `end` doesn’t. E.g. `[0, 11, 12, 31]` and we’ve added 5-15, so
\t\t\t\t\t\t// now we have `[0, 16, 12, 31]`. This must be written as `[0, 31]`.
\t\t\t\t\t\t// Remove the previously added `end` and the current `start`.
\t\t\t\t\t\tdata.splice(index - 1, 2);
\t\t\t\t\t\tindex -= 2;
\t\t\t\t\t}

\t\t\t\t\t// Note: we cannot return yet.
\t\t\t\t}

\t\t\t}

\t\t\telse if (start == rangeEnd + 1) {
\t\t\t\tdata[index] = rangeStart;
\t\t\t\treturn data;
\t\t\t}

\t\t\t// Check if a new pair must be inserted *before* the current one.
\t\t\telse if (start > rangeEnd) {
\t\t\t\tdata.splice(index, 0, rangeStart, rangeEnd + 1);
\t\t\t\treturn data;
\t\t\t}

\t\t\telse if (rangeStart >= start && rangeStart < end && rangeEnd + 1 <= end) {
\t\t\t\t// The new range lies entirely within an existing range pair. No action
\t\t\t\t// needed.
\t\t\t\treturn data;
\t\t\t}

\t\t\telse if (
\t\t\t\t// E.g. `[0, 11]` and you add 5-15 → `[0, 16]`.
\t\t\t\t(rangeStart >= start && rangeStart < end) ||
\t\t\t\t// E.g. `[0, 3]` and you add 3-6 → `[0, 7]`.
\t\t\t\tend == rangeStart
\t\t\t) {
\t\t\t\t// Replace `end` with the new value.
\t\t\t\tdata[index + 1] = rangeEnd + 1;
\t\t\t\t// Make sure the next range pair doesn’t overlap, e.g. `[0, 11, 12, 14]`
\t\t\t\t// and you add 5-15 → `[0, 16]`, i.e. remove the `12,14` part.
\t\t\t\tadded = true;
\t\t\t\t// Note: we cannot `return` just yet.
\t\t\t}

\t\t\telse if (rangeStart <= start && rangeEnd + 1 >= end) {
\t\t\t\t// The new range is a superset of the old range.
\t\t\t\tdata[index] = rangeStart;
\t\t\t\tdata[index + 1] = rangeEnd + 1;
\t\t\t\tadded = true;
\t\t\t}

\t\t\tindex += 2;
\t\t}
\t\t// The loop has finished without doing anything; add the new pair to the end
\t\t// of the data set.
\t\tif (!added) {
\t\t\tdata.push(rangeStart, rangeEnd + 1);
\t\t}
\t\treturn data;
\t};

\tvar dataContains = function(data, codePoint) {
\t\tvar index = 0;
\t\tvar length = data.length;
\t\t// Exit early if `codePoint` is not within `data`’s overall range.
\t\tvar start = data[index];
\t\tvar end = data[length - 1];
\t\tif (length >= 2) {
\t\t\tif (codePoint < start || codePoint > end) {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t// Iterate over the data per `(start, end)` pair.
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];
\t\t\tif (codePoint >= start && codePoint < end) {
\t\t\t\treturn true;
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn false;
\t};

\tvar dataIntersection = function(data, codePoints) {
\t\tvar index = 0;
\t\tvar length = codePoints.length;
\t\tvar codePoint;
\t\tvar result = [];
\t\twhile (index < length) {
\t\t\tcodePoint = codePoints[index];
\t\t\tif (dataContains(data, codePoint)) {
\t\t\t\tresult.push(codePoint);
\t\t\t}
\t\t\t++index;
\t\t}
\t\treturn dataFromCodePoints(result);
\t};

\tvar dataIsEmpty = function(data) {
\t\treturn !data.length;
\t};

\tvar dataIsSingleton = function(data) {
\t\t// Check if the set only represents a single code point.
\t\treturn data.length == 2 && data[0] + 1 == data[1];
\t};

\tvar dataToArray = function(data) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar result = [];
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];
\t\t\twhile (start < end) {
\t\t\t\tresult.push(start);
\t\t\t\t++start;
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn result;
\t};

\t/*--------------------------------------------------------------------------*/

\t// https://mathiasbynens.be/notes/javascript-encoding#surrogate-formulae
\tvar floor = Math.floor;
\tvar highSurrogate = function(codePoint) {
\t\treturn parseInt(
\t\t\tfloor((codePoint - 0x10000) / 0x400) + HIGH_SURROGATE_MIN,
\t\t\t10
\t\t);
\t};

\tvar lowSurrogate = function(codePoint) {
\t\treturn parseInt(
\t\t\t(codePoint - 0x10000) % 0x400 + LOW_SURROGATE_MIN,
\t\t\t10
\t\t);
\t};

\tvar stringFromCharCode = String.fromCharCode;
\tvar codePointToString = function(codePoint) {
\t\tvar string;
\t\t// https://mathiasbynens.be/notes/javascript-escapes#single
\t\t// Note: the `\\b` escape sequence for U+0008 BACKSPACE in strings has a
\t\t// different meaning in regular expressions (word boundary), so it cannot
\t\t// be used here.
\t\tif (codePoint == 0x09) {
\t\t\tstring = '\\\\t';
\t\t}
\t\t// Note: IE < 9 treats `'\\v'` as `'v'`, so avoid using it.
\t\t// else if (codePoint == 0x0B) {
\t\t// \tstring = '\\\\v';
\t\t// }
\t\telse if (codePoint == 0x0A) {
\t\t\tstring = '\\\\n';
\t\t}
\t\telse if (codePoint == 0x0C) {
\t\t\tstring = '\\\\f';
\t\t}
\t\telse if (codePoint == 0x0D) {
\t\t\tstring = '\\\\r';
\t\t}
\t\telse if (codePoint == 0x5C) {
\t\t\tstring = '\\\\\\\\';
\t\t}
\t\telse if (
\t\t\tcodePoint == 0x24 ||
\t\t\t(codePoint >= 0x28 && codePoint <= 0x2B) ||
\t\t\tcodePoint == 0x2D || codePoint == 0x2E || codePoint == 0x3F ||
\t\t\t(codePoint >= 0x5B && codePoint <= 0x5E) ||
\t\t\t(codePoint >= 0x7B && codePoint <= 0x7D)
\t\t) {
\t\t\t// The code point maps to an unsafe printable ASCII character;
\t\t\t// backslash-escape it. Here’s the list of those symbols:
\t\t\t//
\t\t\t//     \$()*+-.?[\\]^{|}
\t\t\t//
\t\t\t// See #7 for more info.
\t\t\tstring = '\\\\' + stringFromCharCode(codePoint);
\t\t}
\t\telse if (codePoint >= 0x20 && codePoint <= 0x7E) {
\t\t\t// The code point maps to one of these printable ASCII symbols
\t\t\t// (including the space character):
\t\t\t//
\t\t\t//      !\"#%&',/0123456789:;<=>@ABCDEFGHIJKLMNO
\t\t\t//     PQRSTUVWXYZ_`abcdefghijklmnopqrstuvwxyz~
\t\t\t//
\t\t\t// These can safely be used directly.
\t\t\tstring = stringFromCharCode(codePoint);
\t\t}
\t\telse if (codePoint <= 0xFF) {
\t\t\t// https://mathiasbynens.be/notes/javascript-escapes#hexadecimal
\t\t\tstring = '\\\\x' + pad(hex(codePoint), 2);
\t\t}
\t\telse { // `codePoint <= 0xFFFF` holds true.
\t\t\t// https://mathiasbynens.be/notes/javascript-escapes#unicode
\t\t\tstring = '\\\\u' + pad(hex(codePoint), 4);
\t\t}

\t\t// There’s no need to account for astral symbols / surrogate pairs here,
\t\t// since `codePointToString` is private and only used for BMP code points.
\t\t// But if that’s what you need, just add an `else` block with this code:
\t\t//
\t\t//     string = '\\\\u' + pad(hex(highSurrogate(codePoint)), 4)
\t\t//     \t+ '\\\\u' + pad(hex(lowSurrogate(codePoint)), 4);

\t\treturn string;
\t};

\tvar codePointToStringUnicode = function(codePoint) {
\t\tif (codePoint <= 0xFFFF) {
\t\t\treturn codePointToString(codePoint);
\t\t}
\t\treturn '\\\\u{' + codePoint.toString(16).toUpperCase() + '}';
\t};

\tvar symbolToCodePoint = function(symbol) {
\t\tvar length = symbol.length;
\t\tvar first = symbol.charCodeAt(0);
\t\tvar second;
\t\tif (
\t\t\tfirst >= HIGH_SURROGATE_MIN && first <= HIGH_SURROGATE_MAX &&
\t\t\tlength > 1 // There is a next code unit.
\t\t) {
\t\t\t// `first` is a high surrogate, and there is a next character. Assume
\t\t\t// it’s a low surrogate (else it’s invalid usage of Regenerate anyway).
\t\t\tsecond = symbol.charCodeAt(1);
\t\t\t// https://mathiasbynens.be/notes/javascript-encoding#surrogate-formulae
\t\t\treturn (first - HIGH_SURROGATE_MIN) * 0x400 +
\t\t\t\tsecond - LOW_SURROGATE_MIN + 0x10000;
\t\t}
\t\treturn first;
\t};

\tvar createBMPCharacterClasses = function(data) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar result = '';
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar length = data.length;
\t\tif (dataIsSingleton(data)) {
\t\t\treturn codePointToString(data[0]);
\t\t}
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1; // Note: the `- 1` makes `end` inclusive.
\t\t\tif (start == end) {
\t\t\t\tresult += codePointToString(start);
\t\t\t} else if (start + 1 == end) {
\t\t\t\tresult += codePointToString(start) + codePointToString(end);
\t\t\t} else {
\t\t\t\tresult += codePointToString(start) + '-' + codePointToString(end);
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn '[' + result + ']';
\t};

\tvar createUnicodeCharacterClasses = function(data) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar result = '';
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar length = data.length;
\t\tif (dataIsSingleton(data)) {
\t\t\treturn codePointToStringUnicode(data[0]);
\t\t}
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1; // Note: the `- 1` makes `end` inclusive.
\t\t\tif (start == end) {
\t\t\t\tresult += codePointToStringUnicode(start);
\t\t\t} else if (start + 1 == end) {
\t\t\t\tresult += codePointToStringUnicode(start) + codePointToStringUnicode(end);
\t\t\t} else {
\t\t\t\tresult += codePointToStringUnicode(start) + '-' + codePointToStringUnicode(end);
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn '[' + result + ']';
\t};

\tvar splitAtBMP = function(data) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar loneHighSurrogates = [];
\t\tvar loneLowSurrogates = [];
\t\tvar bmp = [];
\t\tvar astral = [];
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1; // Note: the `- 1` makes `end` inclusive.

\t\t\tif (start < HIGH_SURROGATE_MIN) {

\t\t\t\t// The range starts and ends before the high surrogate range.
\t\t\t\t// E.g. (0, 0x10).
\t\t\t\tif (end < HIGH_SURROGATE_MIN) {
\t\t\t\t\tbmp.push(start, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts before the high surrogate range and ends within it.
\t\t\t\t// E.g. (0, 0xD855).
\t\t\t\tif (end >= HIGH_SURROGATE_MIN && end <= HIGH_SURROGATE_MAX) {
\t\t\t\t\tbmp.push(start, HIGH_SURROGATE_MIN);
\t\t\t\t\tloneHighSurrogates.push(HIGH_SURROGATE_MIN, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts before the high surrogate range and ends in the low
\t\t\t\t// surrogate range. E.g. (0, 0xDCFF).
\t\t\t\tif (end >= LOW_SURROGATE_MIN && end <= LOW_SURROGATE_MAX) {
\t\t\t\t\tbmp.push(start, HIGH_SURROGATE_MIN);
\t\t\t\t\tloneHighSurrogates.push(HIGH_SURROGATE_MIN, HIGH_SURROGATE_MAX + 1);
\t\t\t\t\tloneLowSurrogates.push(LOW_SURROGATE_MIN, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts before the high surrogate range and ends after the
\t\t\t\t// low surrogate range. E.g. (0, 0x10FFFF).
\t\t\t\tif (end > LOW_SURROGATE_MAX) {
\t\t\t\t\tbmp.push(start, HIGH_SURROGATE_MIN);
\t\t\t\t\tloneHighSurrogates.push(HIGH_SURROGATE_MIN, HIGH_SURROGATE_MAX + 1);
\t\t\t\t\tloneLowSurrogates.push(LOW_SURROGATE_MIN, LOW_SURROGATE_MAX + 1);
\t\t\t\t\tif (end <= 0xFFFF) {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, end + 1);
\t\t\t\t\t} else {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, 0xFFFF + 1);
\t\t\t\t\t\tastral.push(0xFFFF + 1, end + 1);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t} else if (start >= HIGH_SURROGATE_MIN && start <= HIGH_SURROGATE_MAX) {

\t\t\t\t// The range starts and ends in the high surrogate range.
\t\t\t\t// E.g. (0xD855, 0xD866).
\t\t\t\tif (end >= HIGH_SURROGATE_MIN && end <= HIGH_SURROGATE_MAX) {
\t\t\t\t\tloneHighSurrogates.push(start, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts in the high surrogate range and ends in the low
\t\t\t\t// surrogate range. E.g. (0xD855, 0xDCFF).
\t\t\t\tif (end >= LOW_SURROGATE_MIN && end <= LOW_SURROGATE_MAX) {
\t\t\t\t\tloneHighSurrogates.push(start, HIGH_SURROGATE_MAX + 1);
\t\t\t\t\tloneLowSurrogates.push(LOW_SURROGATE_MIN, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts in the high surrogate range and ends after the low
\t\t\t\t// surrogate range. E.g. (0xD855, 0x10FFFF).
\t\t\t\tif (end > LOW_SURROGATE_MAX) {
\t\t\t\t\tloneHighSurrogates.push(start, HIGH_SURROGATE_MAX + 1);
\t\t\t\t\tloneLowSurrogates.push(LOW_SURROGATE_MIN, LOW_SURROGATE_MAX + 1);
\t\t\t\t\tif (end <= 0xFFFF) {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, end + 1);
\t\t\t\t\t} else {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, 0xFFFF + 1);
\t\t\t\t\t\tastral.push(0xFFFF + 1, end + 1);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t} else if (start >= LOW_SURROGATE_MIN && start <= LOW_SURROGATE_MAX) {

\t\t\t\t// The range starts and ends in the low surrogate range.
\t\t\t\t// E.g. (0xDCFF, 0xDDFF).
\t\t\t\tif (end >= LOW_SURROGATE_MIN && end <= LOW_SURROGATE_MAX) {
\t\t\t\t\tloneLowSurrogates.push(start, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts in the low surrogate range and ends after the low
\t\t\t\t// surrogate range. E.g. (0xDCFF, 0x10FFFF).
\t\t\t\tif (end > LOW_SURROGATE_MAX) {
\t\t\t\t\tloneLowSurrogates.push(start, LOW_SURROGATE_MAX + 1);
\t\t\t\t\tif (end <= 0xFFFF) {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, end + 1);
\t\t\t\t\t} else {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, 0xFFFF + 1);
\t\t\t\t\t\tastral.push(0xFFFF + 1, end + 1);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t} else if (start > LOW_SURROGATE_MAX && start <= 0xFFFF) {

\t\t\t\t// The range starts and ends after the low surrogate range.
\t\t\t\t// E.g. (0xFFAA, 0x10FFFF).
\t\t\t\tif (end <= 0xFFFF) {
\t\t\t\t\tbmp.push(start, end + 1);
\t\t\t\t} else {
\t\t\t\t\tbmp.push(start, 0xFFFF + 1);
\t\t\t\t\tastral.push(0xFFFF + 1, end + 1);
\t\t\t\t}

\t\t\t} else {

\t\t\t\t// The range starts and ends in the astral range.
\t\t\t\tastral.push(start, end + 1);

\t\t\t}

\t\t\tindex += 2;
\t\t}
\t\treturn {
\t\t\t'loneHighSurrogates': loneHighSurrogates,
\t\t\t'loneLowSurrogates': loneLowSurrogates,
\t\t\t'bmp': bmp,
\t\t\t'astral': astral
\t\t};
\t};

\tvar optimizeSurrogateMappings = function(surrogateMappings) {
\t\tvar result = [];
\t\tvar tmpLow = [];
\t\tvar addLow = false;
\t\tvar mapping;
\t\tvar nextMapping;
\t\tvar highSurrogates;
\t\tvar lowSurrogates;
\t\tvar nextHighSurrogates;
\t\tvar nextLowSurrogates;
\t\tvar index = -1;
\t\tvar length = surrogateMappings.length;
\t\twhile (++index < length) {
\t\t\tmapping = surrogateMappings[index];
\t\t\tnextMapping = surrogateMappings[index + 1];
\t\t\tif (!nextMapping) {
\t\t\t\tresult.push(mapping);
\t\t\t\tcontinue;
\t\t\t}
\t\t\thighSurrogates = mapping[0];
\t\t\tlowSurrogates = mapping[1];
\t\t\tnextHighSurrogates = nextMapping[0];
\t\t\tnextLowSurrogates = nextMapping[1];

\t\t\t// Check for identical high surrogate ranges.
\t\t\ttmpLow = lowSurrogates;
\t\t\twhile (
\t\t\t\tnextHighSurrogates &&
\t\t\t\thighSurrogates[0] == nextHighSurrogates[0] &&
\t\t\t\thighSurrogates[1] == nextHighSurrogates[1]
\t\t\t) {
\t\t\t\t// Merge with the next item.
\t\t\t\tif (dataIsSingleton(nextLowSurrogates)) {
\t\t\t\t\ttmpLow = dataAdd(tmpLow, nextLowSurrogates[0]);
\t\t\t\t} else {
\t\t\t\t\ttmpLow = dataAddRange(
\t\t\t\t\t\ttmpLow,
\t\t\t\t\t\tnextLowSurrogates[0],
\t\t\t\t\t\tnextLowSurrogates[1] - 1
\t\t\t\t\t);
\t\t\t\t}
\t\t\t\t++index;
\t\t\t\tmapping = surrogateMappings[index];
\t\t\t\thighSurrogates = mapping[0];
\t\t\t\tlowSurrogates = mapping[1];
\t\t\t\tnextMapping = surrogateMappings[index + 1];
\t\t\t\tnextHighSurrogates = nextMapping && nextMapping[0];
\t\t\t\tnextLowSurrogates = nextMapping && nextMapping[1];
\t\t\t\taddLow = true;
\t\t\t}
\t\t\tresult.push([
\t\t\t\thighSurrogates,
\t\t\t\taddLow ? tmpLow : lowSurrogates
\t\t\t]);
\t\t\taddLow = false;
\t\t}
\t\treturn optimizeByLowSurrogates(result);
\t};

\tvar optimizeByLowSurrogates = function(surrogateMappings) {
\t\tif (surrogateMappings.length == 1) {
\t\t\treturn surrogateMappings;
\t\t}
\t\tvar index = -1;
\t\tvar innerIndex = -1;
\t\twhile (++index < surrogateMappings.length) {
\t\t\tvar mapping = surrogateMappings[index];
\t\t\tvar lowSurrogates = mapping[1];
\t\t\tvar lowSurrogateStart = lowSurrogates[0];
\t\t\tvar lowSurrogateEnd = lowSurrogates[1];
\t\t\tinnerIndex = index; // Note: the loop starts at the next index.
\t\t\twhile (++innerIndex < surrogateMappings.length) {
\t\t\t\tvar otherMapping = surrogateMappings[innerIndex];
\t\t\t\tvar otherLowSurrogates = otherMapping[1];
\t\t\t\tvar otherLowSurrogateStart = otherLowSurrogates[0];
\t\t\t\tvar otherLowSurrogateEnd = otherLowSurrogates[1];
\t\t\t\tif (
\t\t\t\t\tlowSurrogateStart == otherLowSurrogateStart &&
\t\t\t\t\tlowSurrogateEnd == otherLowSurrogateEnd
\t\t\t\t) {
\t\t\t\t\t// Add the code points in the other item to this one.
\t\t\t\t\tif (dataIsSingleton(otherMapping[0])) {
\t\t\t\t\t\tmapping[0] = dataAdd(mapping[0], otherMapping[0][0]);
\t\t\t\t\t} else {
\t\t\t\t\t\tmapping[0] = dataAddRange(
\t\t\t\t\t\t\tmapping[0],
\t\t\t\t\t\t\totherMapping[0][0],
\t\t\t\t\t\t\totherMapping[0][1] - 1
\t\t\t\t\t\t);
\t\t\t\t\t}
\t\t\t\t\t// Remove the other, now redundant, item.
\t\t\t\t\tsurrogateMappings.splice(innerIndex, 1);
\t\t\t\t\t--innerIndex;
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn surrogateMappings;
\t};

\tvar surrogateSet = function(data) {
\t\t// Exit early if `data` is an empty set.
\t\tif (!data.length) {
\t\t\treturn [];
\t\t}

\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar startHigh;
\t\tvar startLow;
\t\tvar endHigh;
\t\tvar endLow;
\t\tvar surrogateMappings = [];
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1;

\t\t\tstartHigh = highSurrogate(start);
\t\t\tstartLow = lowSurrogate(start);
\t\t\tendHigh = highSurrogate(end);
\t\t\tendLow = lowSurrogate(end);

\t\t\tvar startsWithLowestLowSurrogate = startLow == LOW_SURROGATE_MIN;
\t\t\tvar endsWithHighestLowSurrogate = endLow == LOW_SURROGATE_MAX;
\t\t\tvar complete = false;

\t\t\t// Append the previous high-surrogate-to-low-surrogate mappings.
\t\t\t// Step 1: `(startHigh, startLow)` to `(startHigh, LOW_SURROGATE_MAX)`.
\t\t\tif (
\t\t\t\tstartHigh == endHigh ||
\t\t\t\tstartsWithLowestLowSurrogate && endsWithHighestLowSurrogate
\t\t\t) {
\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t[startHigh, endHigh + 1],
\t\t\t\t\t[startLow, endLow + 1]
\t\t\t\t]);
\t\t\t\tcomplete = true;
\t\t\t} else {
\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t[startHigh, startHigh + 1],
\t\t\t\t\t[startLow, LOW_SURROGATE_MAX + 1]
\t\t\t\t]);
\t\t\t}

\t\t\t// Step 2: `(startHigh + 1, LOW_SURROGATE_MIN)` to
\t\t\t// `(endHigh - 1, LOW_SURROGATE_MAX)`.
\t\t\tif (!complete && startHigh + 1 < endHigh) {
\t\t\t\tif (endsWithHighestLowSurrogate) {
\t\t\t\t\t// Combine step 2 and step 3.
\t\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t\t[startHigh + 1, endHigh + 1],
\t\t\t\t\t\t[LOW_SURROGATE_MIN, endLow + 1]
\t\t\t\t\t]);
\t\t\t\t\tcomplete = true;
\t\t\t\t} else {
\t\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t\t[startHigh + 1, endHigh],
\t\t\t\t\t\t[LOW_SURROGATE_MIN, LOW_SURROGATE_MAX + 1]
\t\t\t\t\t]);
\t\t\t\t}
\t\t\t}

\t\t\t// Step 3. `(endHigh, LOW_SURROGATE_MIN)` to `(endHigh, endLow)`.
\t\t\tif (!complete) {
\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t[endHigh, endHigh + 1],
\t\t\t\t\t[LOW_SURROGATE_MIN, endLow + 1]
\t\t\t\t]);
\t\t\t}

\t\t\tindex += 2;
\t\t}

\t\t// The format of `surrogateMappings` is as follows:
\t\t//
\t\t//     [ surrogateMapping1, surrogateMapping2 ]
\t\t//
\t\t// i.e.:
\t\t//
\t\t//     [
\t\t//       [ highSurrogates1, lowSurrogates1 ],
\t\t//       [ highSurrogates2, lowSurrogates2 ]
\t\t//     ]
\t\treturn optimizeSurrogateMappings(surrogateMappings);
\t};

\tvar createSurrogateCharacterClasses = function(surrogateMappings) {
\t\tvar result = [];
\t\tforEach(surrogateMappings, function(surrogateMapping) {
\t\t\tvar highSurrogates = surrogateMapping[0];
\t\t\tvar lowSurrogates = surrogateMapping[1];
\t\t\tresult.push(
\t\t\t\tcreateBMPCharacterClasses(highSurrogates) +
\t\t\t\tcreateBMPCharacterClasses(lowSurrogates)
\t\t\t);
\t\t});
\t\treturn result.join('|');
\t};

\tvar createCharacterClassesFromData = function(data, bmpOnly, hasUnicodeFlag) {
\t\tif (hasUnicodeFlag) {
\t\t\treturn createUnicodeCharacterClasses(data);
\t\t}
\t\tvar result = [];

\t\tvar parts = splitAtBMP(data);
\t\tvar loneHighSurrogates = parts.loneHighSurrogates;
\t\tvar loneLowSurrogates = parts.loneLowSurrogates;
\t\tvar bmp = parts.bmp;
\t\tvar astral = parts.astral;
\t\tvar hasLoneHighSurrogates = !dataIsEmpty(loneHighSurrogates);
\t\tvar hasLoneLowSurrogates = !dataIsEmpty(loneLowSurrogates);

\t\tvar surrogateMappings = surrogateSet(astral);

\t\tif (bmpOnly) {
\t\t\tbmp = dataAddData(bmp, loneHighSurrogates);
\t\t\thasLoneHighSurrogates = false;
\t\t\tbmp = dataAddData(bmp, loneLowSurrogates);
\t\t\thasLoneLowSurrogates = false;
\t\t}

\t\tif (!dataIsEmpty(bmp)) {
\t\t\t// The data set contains BMP code points that are not high surrogates
\t\t\t// needed for astral code points in the set.
\t\t\tresult.push(createBMPCharacterClasses(bmp));
\t\t}
\t\tif (surrogateMappings.length) {
\t\t\t// The data set contains astral code points; append character classes
\t\t\t// based on their surrogate pairs.
\t\t\tresult.push(createSurrogateCharacterClasses(surrogateMappings));
\t\t}
\t\t// https://gist.github.com/mathiasbynens/bbe7f870208abcfec860
\t\tif (hasLoneHighSurrogates) {
\t\t\tresult.push(
\t\t\t\tcreateBMPCharacterClasses(loneHighSurrogates) +
\t\t\t\t// Make sure the high surrogates aren’t part of a surrogate pair.
\t\t\t\t'(?![\\\\uDC00-\\\\uDFFF])'
\t\t\t);
\t\t}
\t\tif (hasLoneLowSurrogates) {
\t\t\tresult.push(
\t\t\t\t// It is not possible to accurately assert the low surrogates aren’t
\t\t\t\t// part of a surrogate pair, since JavaScript regular expressions do
\t\t\t\t// not support lookbehind.
\t\t\t\t'(?:[^\\\\uD800-\\\\uDBFF]|^)' +
\t\t\t\tcreateBMPCharacterClasses(loneLowSurrogates)
\t\t\t);
\t\t}
\t\treturn result.join('|');
\t};

\t/*--------------------------------------------------------------------------*/

\t// `regenerate` can be used as a constructor (and new methods can be added to
\t// its prototype) but also as a regular function, the latter of which is the
\t// documented and most common usage. For that reason, it’s not capitalized.
\tvar regenerate = function(value) {
\t\tif (arguments.length > 1) {
\t\t\tvalue = slice.call(arguments);
\t\t}
\t\tif (this instanceof regenerate) {
\t\t\tthis.data = [];
\t\t\treturn value ? this.add(value) : this;
\t\t}
\t\treturn (new regenerate).add(value);
\t};

\tregenerate.version = '1.3.2';

\tvar proto = regenerate.prototype;
\textend(proto, {
\t\t'add': function(value) {
\t\t\tvar \$this = this;
\t\t\tif (value == null) {
\t\t\t\treturn \$this;
\t\t\t}
\t\t\tif (value instanceof regenerate) {
\t\t\t\t// Allow passing other Regenerate instances.
\t\t\t\t\$this.data = dataAddData(\$this.data, value.data);
\t\t\t\treturn \$this;
\t\t\t}
\t\t\tif (arguments.length > 1) {
\t\t\t\tvalue = slice.call(arguments);
\t\t\t}
\t\t\tif (isArray(value)) {
\t\t\t\tforEach(value, function(item) {
\t\t\t\t\t\$this.add(item);
\t\t\t\t});
\t\t\t\treturn \$this;
\t\t\t}
\t\t\t\$this.data = dataAdd(
\t\t\t\t\$this.data,
\t\t\t\tisNumber(value) ? value : symbolToCodePoint(value)
\t\t\t);
\t\t\treturn \$this;
\t\t},
\t\t'remove': function(value) {
\t\t\tvar \$this = this;
\t\t\tif (value == null) {
\t\t\t\treturn \$this;
\t\t\t}
\t\t\tif (value instanceof regenerate) {
\t\t\t\t// Allow passing other Regenerate instances.
\t\t\t\t\$this.data = dataRemoveData(\$this.data, value.data);
\t\t\t\treturn \$this;
\t\t\t}
\t\t\tif (arguments.length > 1) {
\t\t\t\tvalue = slice.call(arguments);
\t\t\t}
\t\t\tif (isArray(value)) {
\t\t\t\tforEach(value, function(item) {
\t\t\t\t\t\$this.remove(item);
\t\t\t\t});
\t\t\t\treturn \$this;
\t\t\t}
\t\t\t\$this.data = dataRemove(
\t\t\t\t\$this.data,
\t\t\t\tisNumber(value) ? value : symbolToCodePoint(value)
\t\t\t);
\t\t\treturn \$this;
\t\t},
\t\t'addRange': function(start, end) {
\t\t\tvar \$this = this;
\t\t\t\$this.data = dataAddRange(\$this.data,
\t\t\t\tisNumber(start) ? start : symbolToCodePoint(start),
\t\t\t\tisNumber(end) ? end : symbolToCodePoint(end)
\t\t\t);
\t\t\treturn \$this;
\t\t},
\t\t'removeRange': function(start, end) {
\t\t\tvar \$this = this;
\t\t\tvar startCodePoint = isNumber(start) ? start : symbolToCodePoint(start);
\t\t\tvar endCodePoint = isNumber(end) ? end : symbolToCodePoint(end);
\t\t\t\$this.data = dataRemoveRange(
\t\t\t\t\$this.data,
\t\t\t\tstartCodePoint,
\t\t\t\tendCodePoint
\t\t\t);
\t\t\treturn \$this;
\t\t},
\t\t'intersection': function(argument) {
\t\t\tvar \$this = this;
\t\t\t// Allow passing other Regenerate instances.
\t\t\t// TODO: Optimize this by writing and using `dataIntersectionData()`.
\t\t\tvar array = argument instanceof regenerate ?
\t\t\t\tdataToArray(argument.data) :
\t\t\t\targument;
\t\t\t\$this.data = dataIntersection(\$this.data, array);
\t\t\treturn \$this;
\t\t},
\t\t'contains': function(codePoint) {
\t\t\treturn dataContains(
\t\t\t\tthis.data,
\t\t\t\tisNumber(codePoint) ? codePoint : symbolToCodePoint(codePoint)
\t\t\t);
\t\t},
\t\t'clone': function() {
\t\t\tvar set = new regenerate;
\t\t\tset.data = this.data.slice(0);
\t\t\treturn set;
\t\t},
\t\t'toString': function(options) {
\t\t\tvar result = createCharacterClassesFromData(
\t\t\t\tthis.data,
\t\t\t\toptions ? options.bmpOnly : false,
\t\t\t\toptions ? options.hasUnicodeFlag : false
\t\t\t);
\t\t\tif (!result) {
\t\t\t\t// For an empty set, return something that can be inserted `/here/` to
\t\t\t\t// form a valid regular expression. Avoid `(?:)` since that matches the
\t\t\t\t// empty string.
\t\t\t\treturn '[]';
\t\t\t}
\t\t\t// Use `\\0` instead of `\\x00` where possible.
\t\t\treturn result.replace(regexNull, '\\\\0\$1');
\t\t},
\t\t'toRegExp': function(flags) {
\t\t\tvar pattern = this.toString(
\t\t\t\tflags && flags.indexOf('u') != -1 ?
\t\t\t\t\t{ 'hasUnicodeFlag': true } :
\t\t\t\t\tnull
\t\t\t);
\t\t\treturn RegExp(pattern, flags || '');
\t\t},
\t\t'valueOf': function() { // Note: `valueOf` is aliased as `toArray`.
\t\t\treturn dataToArray(this.data);
\t\t}
\t});

\tproto.toArray = proto.valueOf;

\t// Some AMD build optimizers, like r.js, check for specific condition patterns
\t// like the following:
\tif (
\t\ttypeof define == 'function' &&
\t\ttypeof define.amd == 'object' &&
\t\tdefine.amd
\t) {
\t\tdefine(function() {
\t\t\treturn regenerate;
\t\t});
\t}\telse if (freeExports && !freeExports.nodeType) {
\t\tif (freeModule) { // in Node.js, io.js, or RingoJS v0.8.0+
\t\t\tfreeModule.exports = regenerate;
\t\t} else { // in Narwhal or RingoJS v0.7.0-
\t\t\tfreeExports.regenerate = regenerate;
\t\t}
\t} else { // in Rhino or a web browser
\t\troot.regenerate = regenerate;
\t}

}(this));
";
        
        $__internal_80fde90177264c569e478cf30ab51341ef42c341278b78bc5480a038ea18dc12->leave($__internal_80fde90177264c569e478cf30ab51341ef42c341278b78bc5480a038ea18dc12_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerate/regenerate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*! https://mths.be/regenerate v1.3.2 by @mathias | MIT license */
;(function(root) {

\t// Detect free variables `exports`.
\tvar freeExports = typeof exports == 'object' && exports;

\t// Detect free variable `module`.
\tvar freeModule = typeof module == 'object' && module &&
\t\tmodule.exports == freeExports && module;

\t// Detect free variable `global`, from Node.js/io.js or Browserified code,
\t// and use it as `root`.
\tvar freeGlobal = typeof global == 'object' && global;
\tif (freeGlobal.global === freeGlobal || freeGlobal.window === freeGlobal) {
\t\troot = freeGlobal;
\t}

\t/*--------------------------------------------------------------------------*/

\tvar ERRORS = {
\t\t'rangeOrder': 'A range\\u2019s `stop` value must be greater than or equal ' +
\t\t\t'to the `start` value.',
\t\t'codePointRange': 'Invalid code point value. Code points range from ' +
\t\t\t'U+000000 to U+10FFFF.'
\t};

\t// https://mathiasbynens.be/notes/javascript-encoding#surrogate-pairs
\tvar HIGH_SURROGATE_MIN = 0xD800;
\tvar HIGH_SURROGATE_MAX = 0xDBFF;
\tvar LOW_SURROGATE_MIN = 0xDC00;
\tvar LOW_SURROGATE_MAX = 0xDFFF;

\t// In Regenerate output, `\\0` is never preceded by `\\` because we sort by
\t// code point value, so let’s keep this regular expression simple.
\tvar regexNull = /\\\\x00([^0123456789]|\$)/g;

\tvar object = {};
\tvar hasOwnProperty = object.hasOwnProperty;
\tvar extend = function(destination, source) {
\t\tvar key;
\t\tfor (key in source) {
\t\t\tif (hasOwnProperty.call(source, key)) {
\t\t\t\tdestination[key] = source[key];
\t\t\t}
\t\t}
\t\treturn destination;
\t};

\tvar forEach = function(array, callback) {
\t\tvar index = -1;
\t\tvar length = array.length;
\t\twhile (++index < length) {
\t\t\tcallback(array[index], index);
\t\t}
\t};

\tvar toString = object.toString;
\tvar isArray = function(value) {
\t\treturn toString.call(value) == '[object Array]';
\t};
\tvar isNumber = function(value) {
\t\treturn typeof value == 'number' ||
\t\t\ttoString.call(value) == '[object Number]';
\t};

\t// This assumes that `number` is a positive integer that `toString()`s nicely
\t// (which is the case for all code point values).
\tvar zeroes = '0000';
\tvar pad = function(number, totalCharacters) {
\t\tvar string = String(number);
\t\treturn string.length < totalCharacters
\t\t\t? (zeroes + string).slice(-totalCharacters)
\t\t\t: string;
\t};

\tvar hex = function(number) {
\t\treturn Number(number).toString(16).toUpperCase();
\t};

\tvar slice = [].slice;

\t/*--------------------------------------------------------------------------*/

\tvar dataFromCodePoints = function(codePoints) {
\t\tvar index = -1;
\t\tvar length = codePoints.length;
\t\tvar max = length - 1;
\t\tvar result = [];
\t\tvar isStart = true;
\t\tvar tmp;
\t\tvar previous = 0;
\t\twhile (++index < length) {
\t\t\ttmp = codePoints[index];
\t\t\tif (isStart) {
\t\t\t\tresult.push(tmp);
\t\t\t\tprevious = tmp;
\t\t\t\tisStart = false;
\t\t\t} else {
\t\t\t\tif (tmp == previous + 1) {
\t\t\t\t\tif (index != max) {
\t\t\t\t\t\tprevious = tmp;
\t\t\t\t\t\tcontinue;
\t\t\t\t\t} else {
\t\t\t\t\t\tisStart = true;
\t\t\t\t\t\tresult.push(tmp + 1);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t// End the previous range and start a new one.
\t\t\t\t\tresult.push(previous + 1, tmp);
\t\t\t\t\tprevious = tmp;
\t\t\t\t}
\t\t\t}
\t\t}
\t\tif (!isStart) {
\t\t\tresult.push(tmp + 1);
\t\t}
\t\treturn result;
\t};

\tvar dataRemove = function(data, codePoint) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];
\t\t\tif (codePoint >= start && codePoint < end) {
\t\t\t\t// Modify this pair.
\t\t\t\tif (codePoint == start) {
\t\t\t\t\tif (end == start + 1) {
\t\t\t\t\t\t// Just remove `start` and `end`.
\t\t\t\t\t\tdata.splice(index, 2);
\t\t\t\t\t\treturn data;
\t\t\t\t\t} else {
\t\t\t\t\t\t// Just replace `start` with a new value.
\t\t\t\t\t\tdata[index] = codePoint + 1;
\t\t\t\t\t\treturn data;
\t\t\t\t\t}
\t\t\t\t} else if (codePoint == end - 1) {
\t\t\t\t\t// Just replace `end` with a new value.
\t\t\t\t\tdata[index + 1] = codePoint;
\t\t\t\t\treturn data;
\t\t\t\t} else {
\t\t\t\t\t// Replace `[start, end]` with `[startA, endA, startB, endB]`.
\t\t\t\t\tdata.splice(index, 2, start, codePoint, codePoint + 1, end);
\t\t\t\t\treturn data;
\t\t\t\t}
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn data;
\t};

\tvar dataRemoveRange = function(data, rangeStart, rangeEnd) {
\t\tif (rangeEnd < rangeStart) {
\t\t\tthrow Error(ERRORS.rangeOrder);
\t\t}
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\twhile (index < data.length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1; // Note: the `- 1` makes `end` inclusive.

\t\t\t// Exit as soon as no more matching pairs can be found.
\t\t\tif (start > rangeEnd) {
\t\t\t\treturn data;
\t\t\t}

\t\t\t// Check if this range pair is equal to, or forms a subset of, the range
\t\t\t// to be removed.
\t\t\t// E.g. we have `[0, 11, 40, 51]` and want to remove 0-10 → `[40, 51]`.
\t\t\t// E.g. we have `[40, 51]` and want to remove 0-100 → `[]`.
\t\t\tif (rangeStart <= start && rangeEnd >= end) {
\t\t\t\t// Remove this pair.
\t\t\t\tdata.splice(index, 2);
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// Check if both `rangeStart` and `rangeEnd` are within the bounds of
\t\t\t// this pair.
\t\t\t// E.g. we have `[0, 11]` and want to remove 4-6 → `[0, 4, 7, 11]`.
\t\t\tif (rangeStart >= start && rangeEnd < end) {
\t\t\t\tif (rangeStart == start) {
\t\t\t\t\t// Replace `[start, end]` with `[startB, endB]`.
\t\t\t\t\tdata[index] = rangeEnd + 1;
\t\t\t\t\tdata[index + 1] = end + 1;
\t\t\t\t\treturn data;
\t\t\t\t}
\t\t\t\t// Replace `[start, end]` with `[startA, endA, startB, endB]`.
\t\t\t\tdata.splice(index, 2, start, rangeStart, rangeEnd + 1, end + 1);
\t\t\t\treturn data;
\t\t\t}

\t\t\t// Check if only `rangeStart` is within the bounds of this pair.
\t\t\t// E.g. we have `[0, 11]` and want to remove 4-20 → `[0, 4]`.
\t\t\tif (rangeStart >= start && rangeStart <= end) {
\t\t\t\t// Replace `end` with `rangeStart`.
\t\t\t\tdata[index + 1] = rangeStart;
\t\t\t\t// Note: we cannot `return` just yet, in case any following pairs still
\t\t\t\t// contain matching code points.
\t\t\t\t// E.g. we have `[0, 11, 14, 31]` and want to remove 4-20
\t\t\t\t// → `[0, 4, 21, 31]`.
\t\t\t}

\t\t\t// Check if only `rangeEnd` is within the bounds of this pair.
\t\t\t// E.g. we have `[14, 31]` and want to remove 4-20 → `[21, 31]`.
\t\t\telse if (rangeEnd >= start && rangeEnd <= end) {
\t\t\t\t// Just replace `start`.
\t\t\t\tdata[index] = rangeEnd + 1;
\t\t\t\treturn data;
\t\t\t}

\t\t\tindex += 2;
\t\t}
\t\treturn data;
\t};

\t var dataAdd = function(data, codePoint) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar lastIndex = null;
\t\tvar length = data.length;
\t\tif (codePoint < 0x0 || codePoint > 0x10FFFF) {
\t\t\tthrow RangeError(ERRORS.codePointRange);
\t\t}
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];

\t\t\t// Check if the code point is already in the set.
\t\t\tif (codePoint >= start && codePoint < end) {
\t\t\t\treturn data;
\t\t\t}

\t\t\tif (codePoint == start - 1) {
\t\t\t\t// Just replace `start` with a new value.
\t\t\t\tdata[index] = codePoint;
\t\t\t\treturn data;
\t\t\t}

\t\t\t// At this point, if `start` is `greater` than `codePoint`, insert a new
\t\t\t// `[start, end]` pair before the current pair, or after the current pair
\t\t\t// if there is a known `lastIndex`.
\t\t\tif (start > codePoint) {
\t\t\t\tdata.splice(
\t\t\t\t\tlastIndex != null ? lastIndex + 2 : 0,
\t\t\t\t\t0,
\t\t\t\t\tcodePoint,
\t\t\t\t\tcodePoint + 1
\t\t\t\t);
\t\t\t\treturn data;
\t\t\t}

\t\t\tif (codePoint == end) {
\t\t\t\t// Check if adding this code point causes two separate ranges to become
\t\t\t\t// a single range, e.g. `dataAdd([0, 4, 5, 10], 4)` → `[0, 10]`.
\t\t\t\tif (codePoint + 1 == data[index + 2]) {
\t\t\t\t\tdata.splice(index, 4, start, data[index + 3]);
\t\t\t\t\treturn data;
\t\t\t\t}
\t\t\t\t// Else, just replace `end` with a new value.
\t\t\t\tdata[index + 1] = codePoint + 1;
\t\t\t\treturn data;
\t\t\t}
\t\t\tlastIndex = index;
\t\t\tindex += 2;
\t\t}
\t\t// The loop has finished; add the new pair to the end of the data set.
\t\tdata.push(codePoint, codePoint + 1);
\t\treturn data;
\t};

\tvar dataAddData = function(dataA, dataB) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar data = dataA.slice();
\t\tvar length = dataB.length;
\t\twhile (index < length) {
\t\t\tstart = dataB[index];
\t\t\tend = dataB[index + 1] - 1;
\t\t\tif (start == end) {
\t\t\t\tdata = dataAdd(data, start);
\t\t\t} else {
\t\t\t\tdata = dataAddRange(data, start, end);
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn data;
\t};

\tvar dataRemoveData = function(dataA, dataB) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar data = dataA.slice();
\t\tvar length = dataB.length;
\t\twhile (index < length) {
\t\t\tstart = dataB[index];
\t\t\tend = dataB[index + 1] - 1;
\t\t\tif (start == end) {
\t\t\t\tdata = dataRemove(data, start);
\t\t\t} else {
\t\t\t\tdata = dataRemoveRange(data, start, end);
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn data;
\t};

\tvar dataAddRange = function(data, rangeStart, rangeEnd) {
\t\tif (rangeEnd < rangeStart) {
\t\t\tthrow Error(ERRORS.rangeOrder);
\t\t}
\t\tif (
\t\t\trangeStart < 0x0 || rangeStart > 0x10FFFF ||
\t\t\trangeEnd < 0x0 || rangeEnd > 0x10FFFF
\t\t) {
\t\t\tthrow RangeError(ERRORS.codePointRange);
\t\t}
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar added = false;
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];

\t\t\tif (added) {
\t\t\t\t// The range has already been added to the set; at this point, we just
\t\t\t\t// need to get rid of the following ranges in case they overlap.

\t\t\t\t// Check if this range can be combined with the previous range.
\t\t\t\tif (start == rangeEnd + 1) {
\t\t\t\t\tdata.splice(index - 1, 2);
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Exit as soon as no more possibly overlapping pairs can be found.
\t\t\t\tif (start > rangeEnd) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// E.g. `[0, 11, 12, 16]` and we’ve added 5-15, so we now have
\t\t\t\t// `[0, 16, 12, 16]`. Remove the `12,16` part, as it lies within the
\t\t\t\t// `0,16` range that was previously added.
\t\t\t\tif (start >= rangeStart && start <= rangeEnd) {
\t\t\t\t\t// `start` lies within the range that was previously added.

\t\t\t\t\tif (end > rangeStart && end - 1 <= rangeEnd) {
\t\t\t\t\t\t// `end` lies within the range that was previously added as well,
\t\t\t\t\t\t// so remove this pair.
\t\t\t\t\t\tdata.splice(index, 2);
\t\t\t\t\t\tindex -= 2;
\t\t\t\t\t\t// Note: we cannot `return` just yet, as there may still be other
\t\t\t\t\t\t// overlapping pairs.
\t\t\t\t\t} else {
\t\t\t\t\t\t// `start` lies within the range that was previously added, but
\t\t\t\t\t\t// `end` doesn’t. E.g. `[0, 11, 12, 31]` and we’ve added 5-15, so
\t\t\t\t\t\t// now we have `[0, 16, 12, 31]`. This must be written as `[0, 31]`.
\t\t\t\t\t\t// Remove the previously added `end` and the current `start`.
\t\t\t\t\t\tdata.splice(index - 1, 2);
\t\t\t\t\t\tindex -= 2;
\t\t\t\t\t}

\t\t\t\t\t// Note: we cannot return yet.
\t\t\t\t}

\t\t\t}

\t\t\telse if (start == rangeEnd + 1) {
\t\t\t\tdata[index] = rangeStart;
\t\t\t\treturn data;
\t\t\t}

\t\t\t// Check if a new pair must be inserted *before* the current one.
\t\t\telse if (start > rangeEnd) {
\t\t\t\tdata.splice(index, 0, rangeStart, rangeEnd + 1);
\t\t\t\treturn data;
\t\t\t}

\t\t\telse if (rangeStart >= start && rangeStart < end && rangeEnd + 1 <= end) {
\t\t\t\t// The new range lies entirely within an existing range pair. No action
\t\t\t\t// needed.
\t\t\t\treturn data;
\t\t\t}

\t\t\telse if (
\t\t\t\t// E.g. `[0, 11]` and you add 5-15 → `[0, 16]`.
\t\t\t\t(rangeStart >= start && rangeStart < end) ||
\t\t\t\t// E.g. `[0, 3]` and you add 3-6 → `[0, 7]`.
\t\t\t\tend == rangeStart
\t\t\t) {
\t\t\t\t// Replace `end` with the new value.
\t\t\t\tdata[index + 1] = rangeEnd + 1;
\t\t\t\t// Make sure the next range pair doesn’t overlap, e.g. `[0, 11, 12, 14]`
\t\t\t\t// and you add 5-15 → `[0, 16]`, i.e. remove the `12,14` part.
\t\t\t\tadded = true;
\t\t\t\t// Note: we cannot `return` just yet.
\t\t\t}

\t\t\telse if (rangeStart <= start && rangeEnd + 1 >= end) {
\t\t\t\t// The new range is a superset of the old range.
\t\t\t\tdata[index] = rangeStart;
\t\t\t\tdata[index + 1] = rangeEnd + 1;
\t\t\t\tadded = true;
\t\t\t}

\t\t\tindex += 2;
\t\t}
\t\t// The loop has finished without doing anything; add the new pair to the end
\t\t// of the data set.
\t\tif (!added) {
\t\t\tdata.push(rangeStart, rangeEnd + 1);
\t\t}
\t\treturn data;
\t};

\tvar dataContains = function(data, codePoint) {
\t\tvar index = 0;
\t\tvar length = data.length;
\t\t// Exit early if `codePoint` is not within `data`’s overall range.
\t\tvar start = data[index];
\t\tvar end = data[length - 1];
\t\tif (length >= 2) {
\t\t\tif (codePoint < start || codePoint > end) {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t// Iterate over the data per `(start, end)` pair.
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];
\t\t\tif (codePoint >= start && codePoint < end) {
\t\t\t\treturn true;
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn false;
\t};

\tvar dataIntersection = function(data, codePoints) {
\t\tvar index = 0;
\t\tvar length = codePoints.length;
\t\tvar codePoint;
\t\tvar result = [];
\t\twhile (index < length) {
\t\t\tcodePoint = codePoints[index];
\t\t\tif (dataContains(data, codePoint)) {
\t\t\t\tresult.push(codePoint);
\t\t\t}
\t\t\t++index;
\t\t}
\t\treturn dataFromCodePoints(result);
\t};

\tvar dataIsEmpty = function(data) {
\t\treturn !data.length;
\t};

\tvar dataIsSingleton = function(data) {
\t\t// Check if the set only represents a single code point.
\t\treturn data.length == 2 && data[0] + 1 == data[1];
\t};

\tvar dataToArray = function(data) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar result = [];
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1];
\t\t\twhile (start < end) {
\t\t\t\tresult.push(start);
\t\t\t\t++start;
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn result;
\t};

\t/*--------------------------------------------------------------------------*/

\t// https://mathiasbynens.be/notes/javascript-encoding#surrogate-formulae
\tvar floor = Math.floor;
\tvar highSurrogate = function(codePoint) {
\t\treturn parseInt(
\t\t\tfloor((codePoint - 0x10000) / 0x400) + HIGH_SURROGATE_MIN,
\t\t\t10
\t\t);
\t};

\tvar lowSurrogate = function(codePoint) {
\t\treturn parseInt(
\t\t\t(codePoint - 0x10000) % 0x400 + LOW_SURROGATE_MIN,
\t\t\t10
\t\t);
\t};

\tvar stringFromCharCode = String.fromCharCode;
\tvar codePointToString = function(codePoint) {
\t\tvar string;
\t\t// https://mathiasbynens.be/notes/javascript-escapes#single
\t\t// Note: the `\\b` escape sequence for U+0008 BACKSPACE in strings has a
\t\t// different meaning in regular expressions (word boundary), so it cannot
\t\t// be used here.
\t\tif (codePoint == 0x09) {
\t\t\tstring = '\\\\t';
\t\t}
\t\t// Note: IE < 9 treats `'\\v'` as `'v'`, so avoid using it.
\t\t// else if (codePoint == 0x0B) {
\t\t// \tstring = '\\\\v';
\t\t// }
\t\telse if (codePoint == 0x0A) {
\t\t\tstring = '\\\\n';
\t\t}
\t\telse if (codePoint == 0x0C) {
\t\t\tstring = '\\\\f';
\t\t}
\t\telse if (codePoint == 0x0D) {
\t\t\tstring = '\\\\r';
\t\t}
\t\telse if (codePoint == 0x5C) {
\t\t\tstring = '\\\\\\\\';
\t\t}
\t\telse if (
\t\t\tcodePoint == 0x24 ||
\t\t\t(codePoint >= 0x28 && codePoint <= 0x2B) ||
\t\t\tcodePoint == 0x2D || codePoint == 0x2E || codePoint == 0x3F ||
\t\t\t(codePoint >= 0x5B && codePoint <= 0x5E) ||
\t\t\t(codePoint >= 0x7B && codePoint <= 0x7D)
\t\t) {
\t\t\t// The code point maps to an unsafe printable ASCII character;
\t\t\t// backslash-escape it. Here’s the list of those symbols:
\t\t\t//
\t\t\t//     \$()*+-.?[\\]^{|}
\t\t\t//
\t\t\t// See #7 for more info.
\t\t\tstring = '\\\\' + stringFromCharCode(codePoint);
\t\t}
\t\telse if (codePoint >= 0x20 && codePoint <= 0x7E) {
\t\t\t// The code point maps to one of these printable ASCII symbols
\t\t\t// (including the space character):
\t\t\t//
\t\t\t//      !\"#%&',/0123456789:;<=>@ABCDEFGHIJKLMNO
\t\t\t//     PQRSTUVWXYZ_`abcdefghijklmnopqrstuvwxyz~
\t\t\t//
\t\t\t// These can safely be used directly.
\t\t\tstring = stringFromCharCode(codePoint);
\t\t}
\t\telse if (codePoint <= 0xFF) {
\t\t\t// https://mathiasbynens.be/notes/javascript-escapes#hexadecimal
\t\t\tstring = '\\\\x' + pad(hex(codePoint), 2);
\t\t}
\t\telse { // `codePoint <= 0xFFFF` holds true.
\t\t\t// https://mathiasbynens.be/notes/javascript-escapes#unicode
\t\t\tstring = '\\\\u' + pad(hex(codePoint), 4);
\t\t}

\t\t// There’s no need to account for astral symbols / surrogate pairs here,
\t\t// since `codePointToString` is private and only used for BMP code points.
\t\t// But if that’s what you need, just add an `else` block with this code:
\t\t//
\t\t//     string = '\\\\u' + pad(hex(highSurrogate(codePoint)), 4)
\t\t//     \t+ '\\\\u' + pad(hex(lowSurrogate(codePoint)), 4);

\t\treturn string;
\t};

\tvar codePointToStringUnicode = function(codePoint) {
\t\tif (codePoint <= 0xFFFF) {
\t\t\treturn codePointToString(codePoint);
\t\t}
\t\treturn '\\\\u{' + codePoint.toString(16).toUpperCase() + '}';
\t};

\tvar symbolToCodePoint = function(symbol) {
\t\tvar length = symbol.length;
\t\tvar first = symbol.charCodeAt(0);
\t\tvar second;
\t\tif (
\t\t\tfirst >= HIGH_SURROGATE_MIN && first <= HIGH_SURROGATE_MAX &&
\t\t\tlength > 1 // There is a next code unit.
\t\t) {
\t\t\t// `first` is a high surrogate, and there is a next character. Assume
\t\t\t// it’s a low surrogate (else it’s invalid usage of Regenerate anyway).
\t\t\tsecond = symbol.charCodeAt(1);
\t\t\t// https://mathiasbynens.be/notes/javascript-encoding#surrogate-formulae
\t\t\treturn (first - HIGH_SURROGATE_MIN) * 0x400 +
\t\t\t\tsecond - LOW_SURROGATE_MIN + 0x10000;
\t\t}
\t\treturn first;
\t};

\tvar createBMPCharacterClasses = function(data) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar result = '';
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar length = data.length;
\t\tif (dataIsSingleton(data)) {
\t\t\treturn codePointToString(data[0]);
\t\t}
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1; // Note: the `- 1` makes `end` inclusive.
\t\t\tif (start == end) {
\t\t\t\tresult += codePointToString(start);
\t\t\t} else if (start + 1 == end) {
\t\t\t\tresult += codePointToString(start) + codePointToString(end);
\t\t\t} else {
\t\t\t\tresult += codePointToString(start) + '-' + codePointToString(end);
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn '[' + result + ']';
\t};

\tvar createUnicodeCharacterClasses = function(data) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar result = '';
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar length = data.length;
\t\tif (dataIsSingleton(data)) {
\t\t\treturn codePointToStringUnicode(data[0]);
\t\t}
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1; // Note: the `- 1` makes `end` inclusive.
\t\t\tif (start == end) {
\t\t\t\tresult += codePointToStringUnicode(start);
\t\t\t} else if (start + 1 == end) {
\t\t\t\tresult += codePointToStringUnicode(start) + codePointToStringUnicode(end);
\t\t\t} else {
\t\t\t\tresult += codePointToStringUnicode(start) + '-' + codePointToStringUnicode(end);
\t\t\t}
\t\t\tindex += 2;
\t\t}
\t\treturn '[' + result + ']';
\t};

\tvar splitAtBMP = function(data) {
\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar loneHighSurrogates = [];
\t\tvar loneLowSurrogates = [];
\t\tvar bmp = [];
\t\tvar astral = [];
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1; // Note: the `- 1` makes `end` inclusive.

\t\t\tif (start < HIGH_SURROGATE_MIN) {

\t\t\t\t// The range starts and ends before the high surrogate range.
\t\t\t\t// E.g. (0, 0x10).
\t\t\t\tif (end < HIGH_SURROGATE_MIN) {
\t\t\t\t\tbmp.push(start, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts before the high surrogate range and ends within it.
\t\t\t\t// E.g. (0, 0xD855).
\t\t\t\tif (end >= HIGH_SURROGATE_MIN && end <= HIGH_SURROGATE_MAX) {
\t\t\t\t\tbmp.push(start, HIGH_SURROGATE_MIN);
\t\t\t\t\tloneHighSurrogates.push(HIGH_SURROGATE_MIN, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts before the high surrogate range and ends in the low
\t\t\t\t// surrogate range. E.g. (0, 0xDCFF).
\t\t\t\tif (end >= LOW_SURROGATE_MIN && end <= LOW_SURROGATE_MAX) {
\t\t\t\t\tbmp.push(start, HIGH_SURROGATE_MIN);
\t\t\t\t\tloneHighSurrogates.push(HIGH_SURROGATE_MIN, HIGH_SURROGATE_MAX + 1);
\t\t\t\t\tloneLowSurrogates.push(LOW_SURROGATE_MIN, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts before the high surrogate range and ends after the
\t\t\t\t// low surrogate range. E.g. (0, 0x10FFFF).
\t\t\t\tif (end > LOW_SURROGATE_MAX) {
\t\t\t\t\tbmp.push(start, HIGH_SURROGATE_MIN);
\t\t\t\t\tloneHighSurrogates.push(HIGH_SURROGATE_MIN, HIGH_SURROGATE_MAX + 1);
\t\t\t\t\tloneLowSurrogates.push(LOW_SURROGATE_MIN, LOW_SURROGATE_MAX + 1);
\t\t\t\t\tif (end <= 0xFFFF) {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, end + 1);
\t\t\t\t\t} else {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, 0xFFFF + 1);
\t\t\t\t\t\tastral.push(0xFFFF + 1, end + 1);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t} else if (start >= HIGH_SURROGATE_MIN && start <= HIGH_SURROGATE_MAX) {

\t\t\t\t// The range starts and ends in the high surrogate range.
\t\t\t\t// E.g. (0xD855, 0xD866).
\t\t\t\tif (end >= HIGH_SURROGATE_MIN && end <= HIGH_SURROGATE_MAX) {
\t\t\t\t\tloneHighSurrogates.push(start, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts in the high surrogate range and ends in the low
\t\t\t\t// surrogate range. E.g. (0xD855, 0xDCFF).
\t\t\t\tif (end >= LOW_SURROGATE_MIN && end <= LOW_SURROGATE_MAX) {
\t\t\t\t\tloneHighSurrogates.push(start, HIGH_SURROGATE_MAX + 1);
\t\t\t\t\tloneLowSurrogates.push(LOW_SURROGATE_MIN, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts in the high surrogate range and ends after the low
\t\t\t\t// surrogate range. E.g. (0xD855, 0x10FFFF).
\t\t\t\tif (end > LOW_SURROGATE_MAX) {
\t\t\t\t\tloneHighSurrogates.push(start, HIGH_SURROGATE_MAX + 1);
\t\t\t\t\tloneLowSurrogates.push(LOW_SURROGATE_MIN, LOW_SURROGATE_MAX + 1);
\t\t\t\t\tif (end <= 0xFFFF) {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, end + 1);
\t\t\t\t\t} else {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, 0xFFFF + 1);
\t\t\t\t\t\tastral.push(0xFFFF + 1, end + 1);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t} else if (start >= LOW_SURROGATE_MIN && start <= LOW_SURROGATE_MAX) {

\t\t\t\t// The range starts and ends in the low surrogate range.
\t\t\t\t// E.g. (0xDCFF, 0xDDFF).
\t\t\t\tif (end >= LOW_SURROGATE_MIN && end <= LOW_SURROGATE_MAX) {
\t\t\t\t\tloneLowSurrogates.push(start, end + 1);
\t\t\t\t}

\t\t\t\t// The range starts in the low surrogate range and ends after the low
\t\t\t\t// surrogate range. E.g. (0xDCFF, 0x10FFFF).
\t\t\t\tif (end > LOW_SURROGATE_MAX) {
\t\t\t\t\tloneLowSurrogates.push(start, LOW_SURROGATE_MAX + 1);
\t\t\t\t\tif (end <= 0xFFFF) {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, end + 1);
\t\t\t\t\t} else {
\t\t\t\t\t\tbmp.push(LOW_SURROGATE_MAX + 1, 0xFFFF + 1);
\t\t\t\t\t\tastral.push(0xFFFF + 1, end + 1);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t} else if (start > LOW_SURROGATE_MAX && start <= 0xFFFF) {

\t\t\t\t// The range starts and ends after the low surrogate range.
\t\t\t\t// E.g. (0xFFAA, 0x10FFFF).
\t\t\t\tif (end <= 0xFFFF) {
\t\t\t\t\tbmp.push(start, end + 1);
\t\t\t\t} else {
\t\t\t\t\tbmp.push(start, 0xFFFF + 1);
\t\t\t\t\tastral.push(0xFFFF + 1, end + 1);
\t\t\t\t}

\t\t\t} else {

\t\t\t\t// The range starts and ends in the astral range.
\t\t\t\tastral.push(start, end + 1);

\t\t\t}

\t\t\tindex += 2;
\t\t}
\t\treturn {
\t\t\t'loneHighSurrogates': loneHighSurrogates,
\t\t\t'loneLowSurrogates': loneLowSurrogates,
\t\t\t'bmp': bmp,
\t\t\t'astral': astral
\t\t};
\t};

\tvar optimizeSurrogateMappings = function(surrogateMappings) {
\t\tvar result = [];
\t\tvar tmpLow = [];
\t\tvar addLow = false;
\t\tvar mapping;
\t\tvar nextMapping;
\t\tvar highSurrogates;
\t\tvar lowSurrogates;
\t\tvar nextHighSurrogates;
\t\tvar nextLowSurrogates;
\t\tvar index = -1;
\t\tvar length = surrogateMappings.length;
\t\twhile (++index < length) {
\t\t\tmapping = surrogateMappings[index];
\t\t\tnextMapping = surrogateMappings[index + 1];
\t\t\tif (!nextMapping) {
\t\t\t\tresult.push(mapping);
\t\t\t\tcontinue;
\t\t\t}
\t\t\thighSurrogates = mapping[0];
\t\t\tlowSurrogates = mapping[1];
\t\t\tnextHighSurrogates = nextMapping[0];
\t\t\tnextLowSurrogates = nextMapping[1];

\t\t\t// Check for identical high surrogate ranges.
\t\t\ttmpLow = lowSurrogates;
\t\t\twhile (
\t\t\t\tnextHighSurrogates &&
\t\t\t\thighSurrogates[0] == nextHighSurrogates[0] &&
\t\t\t\thighSurrogates[1] == nextHighSurrogates[1]
\t\t\t) {
\t\t\t\t// Merge with the next item.
\t\t\t\tif (dataIsSingleton(nextLowSurrogates)) {
\t\t\t\t\ttmpLow = dataAdd(tmpLow, nextLowSurrogates[0]);
\t\t\t\t} else {
\t\t\t\t\ttmpLow = dataAddRange(
\t\t\t\t\t\ttmpLow,
\t\t\t\t\t\tnextLowSurrogates[0],
\t\t\t\t\t\tnextLowSurrogates[1] - 1
\t\t\t\t\t);
\t\t\t\t}
\t\t\t\t++index;
\t\t\t\tmapping = surrogateMappings[index];
\t\t\t\thighSurrogates = mapping[0];
\t\t\t\tlowSurrogates = mapping[1];
\t\t\t\tnextMapping = surrogateMappings[index + 1];
\t\t\t\tnextHighSurrogates = nextMapping && nextMapping[0];
\t\t\t\tnextLowSurrogates = nextMapping && nextMapping[1];
\t\t\t\taddLow = true;
\t\t\t}
\t\t\tresult.push([
\t\t\t\thighSurrogates,
\t\t\t\taddLow ? tmpLow : lowSurrogates
\t\t\t]);
\t\t\taddLow = false;
\t\t}
\t\treturn optimizeByLowSurrogates(result);
\t};

\tvar optimizeByLowSurrogates = function(surrogateMappings) {
\t\tif (surrogateMappings.length == 1) {
\t\t\treturn surrogateMappings;
\t\t}
\t\tvar index = -1;
\t\tvar innerIndex = -1;
\t\twhile (++index < surrogateMappings.length) {
\t\t\tvar mapping = surrogateMappings[index];
\t\t\tvar lowSurrogates = mapping[1];
\t\t\tvar lowSurrogateStart = lowSurrogates[0];
\t\t\tvar lowSurrogateEnd = lowSurrogates[1];
\t\t\tinnerIndex = index; // Note: the loop starts at the next index.
\t\t\twhile (++innerIndex < surrogateMappings.length) {
\t\t\t\tvar otherMapping = surrogateMappings[innerIndex];
\t\t\t\tvar otherLowSurrogates = otherMapping[1];
\t\t\t\tvar otherLowSurrogateStart = otherLowSurrogates[0];
\t\t\t\tvar otherLowSurrogateEnd = otherLowSurrogates[1];
\t\t\t\tif (
\t\t\t\t\tlowSurrogateStart == otherLowSurrogateStart &&
\t\t\t\t\tlowSurrogateEnd == otherLowSurrogateEnd
\t\t\t\t) {
\t\t\t\t\t// Add the code points in the other item to this one.
\t\t\t\t\tif (dataIsSingleton(otherMapping[0])) {
\t\t\t\t\t\tmapping[0] = dataAdd(mapping[0], otherMapping[0][0]);
\t\t\t\t\t} else {
\t\t\t\t\t\tmapping[0] = dataAddRange(
\t\t\t\t\t\t\tmapping[0],
\t\t\t\t\t\t\totherMapping[0][0],
\t\t\t\t\t\t\totherMapping[0][1] - 1
\t\t\t\t\t\t);
\t\t\t\t\t}
\t\t\t\t\t// Remove the other, now redundant, item.
\t\t\t\t\tsurrogateMappings.splice(innerIndex, 1);
\t\t\t\t\t--innerIndex;
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn surrogateMappings;
\t};

\tvar surrogateSet = function(data) {
\t\t// Exit early if `data` is an empty set.
\t\tif (!data.length) {
\t\t\treturn [];
\t\t}

\t\t// Iterate over the data per `(start, end)` pair.
\t\tvar index = 0;
\t\tvar start;
\t\tvar end;
\t\tvar startHigh;
\t\tvar startLow;
\t\tvar endHigh;
\t\tvar endLow;
\t\tvar surrogateMappings = [];
\t\tvar length = data.length;
\t\twhile (index < length) {
\t\t\tstart = data[index];
\t\t\tend = data[index + 1] - 1;

\t\t\tstartHigh = highSurrogate(start);
\t\t\tstartLow = lowSurrogate(start);
\t\t\tendHigh = highSurrogate(end);
\t\t\tendLow = lowSurrogate(end);

\t\t\tvar startsWithLowestLowSurrogate = startLow == LOW_SURROGATE_MIN;
\t\t\tvar endsWithHighestLowSurrogate = endLow == LOW_SURROGATE_MAX;
\t\t\tvar complete = false;

\t\t\t// Append the previous high-surrogate-to-low-surrogate mappings.
\t\t\t// Step 1: `(startHigh, startLow)` to `(startHigh, LOW_SURROGATE_MAX)`.
\t\t\tif (
\t\t\t\tstartHigh == endHigh ||
\t\t\t\tstartsWithLowestLowSurrogate && endsWithHighestLowSurrogate
\t\t\t) {
\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t[startHigh, endHigh + 1],
\t\t\t\t\t[startLow, endLow + 1]
\t\t\t\t]);
\t\t\t\tcomplete = true;
\t\t\t} else {
\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t[startHigh, startHigh + 1],
\t\t\t\t\t[startLow, LOW_SURROGATE_MAX + 1]
\t\t\t\t]);
\t\t\t}

\t\t\t// Step 2: `(startHigh + 1, LOW_SURROGATE_MIN)` to
\t\t\t// `(endHigh - 1, LOW_SURROGATE_MAX)`.
\t\t\tif (!complete && startHigh + 1 < endHigh) {
\t\t\t\tif (endsWithHighestLowSurrogate) {
\t\t\t\t\t// Combine step 2 and step 3.
\t\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t\t[startHigh + 1, endHigh + 1],
\t\t\t\t\t\t[LOW_SURROGATE_MIN, endLow + 1]
\t\t\t\t\t]);
\t\t\t\t\tcomplete = true;
\t\t\t\t} else {
\t\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t\t[startHigh + 1, endHigh],
\t\t\t\t\t\t[LOW_SURROGATE_MIN, LOW_SURROGATE_MAX + 1]
\t\t\t\t\t]);
\t\t\t\t}
\t\t\t}

\t\t\t// Step 3. `(endHigh, LOW_SURROGATE_MIN)` to `(endHigh, endLow)`.
\t\t\tif (!complete) {
\t\t\t\tsurrogateMappings.push([
\t\t\t\t\t[endHigh, endHigh + 1],
\t\t\t\t\t[LOW_SURROGATE_MIN, endLow + 1]
\t\t\t\t]);
\t\t\t}

\t\t\tindex += 2;
\t\t}

\t\t// The format of `surrogateMappings` is as follows:
\t\t//
\t\t//     [ surrogateMapping1, surrogateMapping2 ]
\t\t//
\t\t// i.e.:
\t\t//
\t\t//     [
\t\t//       [ highSurrogates1, lowSurrogates1 ],
\t\t//       [ highSurrogates2, lowSurrogates2 ]
\t\t//     ]
\t\treturn optimizeSurrogateMappings(surrogateMappings);
\t};

\tvar createSurrogateCharacterClasses = function(surrogateMappings) {
\t\tvar result = [];
\t\tforEach(surrogateMappings, function(surrogateMapping) {
\t\t\tvar highSurrogates = surrogateMapping[0];
\t\t\tvar lowSurrogates = surrogateMapping[1];
\t\t\tresult.push(
\t\t\t\tcreateBMPCharacterClasses(highSurrogates) +
\t\t\t\tcreateBMPCharacterClasses(lowSurrogates)
\t\t\t);
\t\t});
\t\treturn result.join('|');
\t};

\tvar createCharacterClassesFromData = function(data, bmpOnly, hasUnicodeFlag) {
\t\tif (hasUnicodeFlag) {
\t\t\treturn createUnicodeCharacterClasses(data);
\t\t}
\t\tvar result = [];

\t\tvar parts = splitAtBMP(data);
\t\tvar loneHighSurrogates = parts.loneHighSurrogates;
\t\tvar loneLowSurrogates = parts.loneLowSurrogates;
\t\tvar bmp = parts.bmp;
\t\tvar astral = parts.astral;
\t\tvar hasLoneHighSurrogates = !dataIsEmpty(loneHighSurrogates);
\t\tvar hasLoneLowSurrogates = !dataIsEmpty(loneLowSurrogates);

\t\tvar surrogateMappings = surrogateSet(astral);

\t\tif (bmpOnly) {
\t\t\tbmp = dataAddData(bmp, loneHighSurrogates);
\t\t\thasLoneHighSurrogates = false;
\t\t\tbmp = dataAddData(bmp, loneLowSurrogates);
\t\t\thasLoneLowSurrogates = false;
\t\t}

\t\tif (!dataIsEmpty(bmp)) {
\t\t\t// The data set contains BMP code points that are not high surrogates
\t\t\t// needed for astral code points in the set.
\t\t\tresult.push(createBMPCharacterClasses(bmp));
\t\t}
\t\tif (surrogateMappings.length) {
\t\t\t// The data set contains astral code points; append character classes
\t\t\t// based on their surrogate pairs.
\t\t\tresult.push(createSurrogateCharacterClasses(surrogateMappings));
\t\t}
\t\t// https://gist.github.com/mathiasbynens/bbe7f870208abcfec860
\t\tif (hasLoneHighSurrogates) {
\t\t\tresult.push(
\t\t\t\tcreateBMPCharacterClasses(loneHighSurrogates) +
\t\t\t\t// Make sure the high surrogates aren’t part of a surrogate pair.
\t\t\t\t'(?![\\\\uDC00-\\\\uDFFF])'
\t\t\t);
\t\t}
\t\tif (hasLoneLowSurrogates) {
\t\t\tresult.push(
\t\t\t\t// It is not possible to accurately assert the low surrogates aren’t
\t\t\t\t// part of a surrogate pair, since JavaScript regular expressions do
\t\t\t\t// not support lookbehind.
\t\t\t\t'(?:[^\\\\uD800-\\\\uDBFF]|^)' +
\t\t\t\tcreateBMPCharacterClasses(loneLowSurrogates)
\t\t\t);
\t\t}
\t\treturn result.join('|');
\t};

\t/*--------------------------------------------------------------------------*/

\t// `regenerate` can be used as a constructor (and new methods can be added to
\t// its prototype) but also as a regular function, the latter of which is the
\t// documented and most common usage. For that reason, it’s not capitalized.
\tvar regenerate = function(value) {
\t\tif (arguments.length > 1) {
\t\t\tvalue = slice.call(arguments);
\t\t}
\t\tif (this instanceof regenerate) {
\t\t\tthis.data = [];
\t\t\treturn value ? this.add(value) : this;
\t\t}
\t\treturn (new regenerate).add(value);
\t};

\tregenerate.version = '1.3.2';

\tvar proto = regenerate.prototype;
\textend(proto, {
\t\t'add': function(value) {
\t\t\tvar \$this = this;
\t\t\tif (value == null) {
\t\t\t\treturn \$this;
\t\t\t}
\t\t\tif (value instanceof regenerate) {
\t\t\t\t// Allow passing other Regenerate instances.
\t\t\t\t\$this.data = dataAddData(\$this.data, value.data);
\t\t\t\treturn \$this;
\t\t\t}
\t\t\tif (arguments.length > 1) {
\t\t\t\tvalue = slice.call(arguments);
\t\t\t}
\t\t\tif (isArray(value)) {
\t\t\t\tforEach(value, function(item) {
\t\t\t\t\t\$this.add(item);
\t\t\t\t});
\t\t\t\treturn \$this;
\t\t\t}
\t\t\t\$this.data = dataAdd(
\t\t\t\t\$this.data,
\t\t\t\tisNumber(value) ? value : symbolToCodePoint(value)
\t\t\t);
\t\t\treturn \$this;
\t\t},
\t\t'remove': function(value) {
\t\t\tvar \$this = this;
\t\t\tif (value == null) {
\t\t\t\treturn \$this;
\t\t\t}
\t\t\tif (value instanceof regenerate) {
\t\t\t\t// Allow passing other Regenerate instances.
\t\t\t\t\$this.data = dataRemoveData(\$this.data, value.data);
\t\t\t\treturn \$this;
\t\t\t}
\t\t\tif (arguments.length > 1) {
\t\t\t\tvalue = slice.call(arguments);
\t\t\t}
\t\t\tif (isArray(value)) {
\t\t\t\tforEach(value, function(item) {
\t\t\t\t\t\$this.remove(item);
\t\t\t\t});
\t\t\t\treturn \$this;
\t\t\t}
\t\t\t\$this.data = dataRemove(
\t\t\t\t\$this.data,
\t\t\t\tisNumber(value) ? value : symbolToCodePoint(value)
\t\t\t);
\t\t\treturn \$this;
\t\t},
\t\t'addRange': function(start, end) {
\t\t\tvar \$this = this;
\t\t\t\$this.data = dataAddRange(\$this.data,
\t\t\t\tisNumber(start) ? start : symbolToCodePoint(start),
\t\t\t\tisNumber(end) ? end : symbolToCodePoint(end)
\t\t\t);
\t\t\treturn \$this;
\t\t},
\t\t'removeRange': function(start, end) {
\t\t\tvar \$this = this;
\t\t\tvar startCodePoint = isNumber(start) ? start : symbolToCodePoint(start);
\t\t\tvar endCodePoint = isNumber(end) ? end : symbolToCodePoint(end);
\t\t\t\$this.data = dataRemoveRange(
\t\t\t\t\$this.data,
\t\t\t\tstartCodePoint,
\t\t\t\tendCodePoint
\t\t\t);
\t\t\treturn \$this;
\t\t},
\t\t'intersection': function(argument) {
\t\t\tvar \$this = this;
\t\t\t// Allow passing other Regenerate instances.
\t\t\t// TODO: Optimize this by writing and using `dataIntersectionData()`.
\t\t\tvar array = argument instanceof regenerate ?
\t\t\t\tdataToArray(argument.data) :
\t\t\t\targument;
\t\t\t\$this.data = dataIntersection(\$this.data, array);
\t\t\treturn \$this;
\t\t},
\t\t'contains': function(codePoint) {
\t\t\treturn dataContains(
\t\t\t\tthis.data,
\t\t\t\tisNumber(codePoint) ? codePoint : symbolToCodePoint(codePoint)
\t\t\t);
\t\t},
\t\t'clone': function() {
\t\t\tvar set = new regenerate;
\t\t\tset.data = this.data.slice(0);
\t\t\treturn set;
\t\t},
\t\t'toString': function(options) {
\t\t\tvar result = createCharacterClassesFromData(
\t\t\t\tthis.data,
\t\t\t\toptions ? options.bmpOnly : false,
\t\t\t\toptions ? options.hasUnicodeFlag : false
\t\t\t);
\t\t\tif (!result) {
\t\t\t\t// For an empty set, return something that can be inserted `/here/` to
\t\t\t\t// form a valid regular expression. Avoid `(?:)` since that matches the
\t\t\t\t// empty string.
\t\t\t\treturn '[]';
\t\t\t}
\t\t\t// Use `\\0` instead of `\\x00` where possible.
\t\t\treturn result.replace(regexNull, '\\\\0\$1');
\t\t},
\t\t'toRegExp': function(flags) {
\t\t\tvar pattern = this.toString(
\t\t\t\tflags && flags.indexOf('u') != -1 ?
\t\t\t\t\t{ 'hasUnicodeFlag': true } :
\t\t\t\t\tnull
\t\t\t);
\t\t\treturn RegExp(pattern, flags || '');
\t\t},
\t\t'valueOf': function() { // Note: `valueOf` is aliased as `toArray`.
\t\t\treturn dataToArray(this.data);
\t\t}
\t});

\tproto.toArray = proto.valueOf;

\t// Some AMD build optimizers, like r.js, check for specific condition patterns
\t// like the following:
\tif (
\t\ttypeof define == 'function' &&
\t\ttypeof define.amd == 'object' &&
\t\tdefine.amd
\t) {
\t\tdefine(function() {
\t\t\treturn regenerate;
\t\t});
\t}\telse if (freeExports && !freeExports.nodeType) {
\t\tif (freeModule) { // in Node.js, io.js, or RingoJS v0.8.0+
\t\t\tfreeModule.exports = regenerate;
\t\t} else { // in Narwhal or RingoJS v0.7.0-
\t\t\tfreeExports.regenerate = regenerate;
\t\t}
\t} else { // in Rhino or a web browser
\t\troot.regenerate = regenerate;
\t}

}(this));
", "node_modules/regenerate/regenerate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerate/regenerate.js");
    }
}
