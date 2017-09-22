<?php

/* node_modules/fsevents/node_modules/jsprim/lib/jsprim.js */
class __TwigTemplate_a0029241dcd5c961e59614b9f8f83fe049d9f2f0ec57d57226be42948f1e6954 extends Twig_Template
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
        $__internal_d3ff4ab3e81d901a0c82e3eacdcdd874580c2d7f1d50b864e63c0740957fdc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ff4ab3e81d901a0c82e3eacdcdd874580c2d7f1d50b864e63c0740957fdc98->enter($__internal_d3ff4ab3e81d901a0c82e3eacdcdd874580c2d7f1d50b864e63c0740957fdc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jsprim/lib/jsprim.js"));

        // line 1
        echo "/*
 * lib/jsprim.js: utilities for primitive JavaScript types
 */

var mod_assert = require('assert-plus');
var mod_util = require('util');

var mod_extsprintf = require('extsprintf');
var mod_verror = require('verror');
var mod_jsonschema = require('json-schema');

/*
 * Public interface
 */
exports.deepCopy = deepCopy;
exports.deepEqual = deepEqual;
exports.isEmpty = isEmpty;
exports.hasKey = hasKey;
exports.forEachKey = forEachKey;
exports.pluck = pluck;
exports.flattenObject = flattenObject;
exports.flattenIter = flattenIter;
exports.validateJsonObject = validateJsonObjectJS;
exports.validateJsonObjectJS = validateJsonObjectJS;
exports.randElt = randElt;
exports.extraProperties = extraProperties;
exports.mergeObjects = mergeObjects;

exports.startsWith = startsWith;
exports.endsWith = endsWith;

exports.parseInteger = parseInteger;

exports.iso8601 = iso8601;
exports.rfc1123 = rfc1123;
exports.parseDateTime = parseDateTime;

exports.hrtimediff = hrtimeDiff;
exports.hrtimeDiff = hrtimeDiff;
exports.hrtimeAccum = hrtimeAccum;
exports.hrtimeAdd = hrtimeAdd;
exports.hrtimeNanosec = hrtimeNanosec;
exports.hrtimeMicrosec = hrtimeMicrosec;
exports.hrtimeMillisec = hrtimeMillisec;


/*
 * Deep copy an acyclic *basic* Javascript object.  This only handles basic
 * scalars (strings, numbers, booleans) and arbitrarily deep arrays and objects
 * containing these.  This does *not* handle instances of other classes.
 */
function deepCopy(obj)
{
\tvar ret, key;
\tvar marker = '__deepCopy';

\tif (obj && obj[marker])
\t\tthrow (new Error('attempted deep copy of cyclic object'));

\tif (obj && obj.constructor == Object) {
\t\tret = {};
\t\tobj[marker] = true;

\t\tfor (key in obj) {
\t\t\tif (key == marker)
\t\t\t\tcontinue;

\t\t\tret[key] = deepCopy(obj[key]);
\t\t}

\t\tdelete (obj[marker]);
\t\treturn (ret);
\t}

\tif (obj && obj.constructor == Array) {
\t\tret = [];
\t\tobj[marker] = true;

\t\tfor (key = 0; key < obj.length; key++)
\t\t\tret.push(deepCopy(obj[key]));

\t\tdelete (obj[marker]);
\t\treturn (ret);
\t}

\t/*
\t * It must be a primitive type -- just return it.
\t */
\treturn (obj);
}

function deepEqual(obj1, obj2)
{
\tif (typeof (obj1) != typeof (obj2))
\t\treturn (false);

\tif (obj1 === null || obj2 === null || typeof (obj1) != 'object')
\t\treturn (obj1 === obj2);

\tif (obj1.constructor != obj2.constructor)
\t\treturn (false);

\tvar k;
\tfor (k in obj1) {
\t\tif (!obj2.hasOwnProperty(k))
\t\t\treturn (false);

\t\tif (!deepEqual(obj1[k], obj2[k]))
\t\t\treturn (false);
\t}

\tfor (k in obj2) {
\t\tif (!obj1.hasOwnProperty(k))
\t\t\treturn (false);
\t}

\treturn (true);
}

function isEmpty(obj)
{
\tvar key;
\tfor (key in obj)
\t\treturn (false);
\treturn (true);
}

function hasKey(obj, key)
{
\tmod_assert.equal(typeof (key), 'string');
\treturn (Object.prototype.hasOwnProperty.call(obj, key));
}

function forEachKey(obj, callback)
{
\tfor (var key in obj) {
\t\tif (hasKey(obj, key)) {
\t\t\tcallback(key, obj[key]);
\t\t}
\t}
}

function pluck(obj, key)
{
\tmod_assert.equal(typeof (key), 'string');
\treturn (pluckv(obj, key));
}

function pluckv(obj, key)
{
\tif (obj === null || typeof (obj) !== 'object')
\t\treturn (undefined);

\tif (obj.hasOwnProperty(key))
\t\treturn (obj[key]);

\tvar i = key.indexOf('.');
\tif (i == -1)
\t\treturn (undefined);

\tvar key1 = key.substr(0, i);
\tif (!obj.hasOwnProperty(key1))
\t\treturn (undefined);

\treturn (pluckv(obj[key1], key.substr(i + 1)));
}

/*
 * Invoke callback(row) for each entry in the array that would be returned by
 * flattenObject(data, depth).  This is just like flattenObject(data,
 * depth).forEach(callback), except that the intermediate array is never
 * created.
 */
function flattenIter(data, depth, callback)
{
\tdoFlattenIter(data, depth, [], callback);
}

function doFlattenIter(data, depth, accum, callback)
{
\tvar each;
\tvar key;

\tif (depth === 0) {
\t\teach = accum.slice(0);
\t\teach.push(data);
\t\tcallback(each);
\t\treturn;
\t}

\tmod_assert.ok(data !== null);
\tmod_assert.equal(typeof (data), 'object');
\tmod_assert.equal(typeof (depth), 'number');
\tmod_assert.ok(depth >= 0);

\tfor (key in data) {
\t\teach = accum.slice(0);
\t\teach.push(key);
\t\tdoFlattenIter(data[key], depth - 1, each, callback);
\t}
}

function flattenObject(data, depth)
{
\tif (depth === 0)
\t\treturn ([ data ]);

\tmod_assert.ok(data !== null);
\tmod_assert.equal(typeof (data), 'object');
\tmod_assert.equal(typeof (depth), 'number');
\tmod_assert.ok(depth >= 0);

\tvar rv = [];
\tvar key;

\tfor (key in data) {
\t\tflattenObject(data[key], depth - 1).forEach(function (p) {
\t\t\trv.push([ key ].concat(p));
\t\t});
\t}

\treturn (rv);
}

function startsWith(str, prefix)
{
\treturn (str.substr(0, prefix.length) == prefix);
}

function endsWith(str, suffix)
{
\treturn (str.substr(
\t    str.length - suffix.length, suffix.length) == suffix);
}

function iso8601(d)
{
\tif (typeof (d) == 'number')
\t\td = new Date(d);
\tmod_assert.ok(d.constructor === Date);
\treturn (mod_extsprintf.sprintf('%4d-%02d-%02dT%02d:%02d:%02d.%03dZ',
\t    d.getUTCFullYear(), d.getUTCMonth() + 1, d.getUTCDate(),
\t    d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds(),
\t    d.getUTCMilliseconds()));
}

var RFC1123_MONTHS = [
    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
var RFC1123_DAYS = [
    'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

function rfc1123(date) {
\treturn (mod_extsprintf.sprintf('%s, %02d %s %04d %02d:%02d:%02d GMT',
\t    RFC1123_DAYS[date.getUTCDay()], date.getUTCDate(),
\t    RFC1123_MONTHS[date.getUTCMonth()], date.getUTCFullYear(),
\t    date.getUTCHours(), date.getUTCMinutes(),
\t    date.getUTCSeconds()));
}

/*
 * Parses a date expressed as a string, as either a number of milliseconds since
 * the epoch or any string format that Date accepts, giving preference to the
 * former where these two sets overlap (e.g., small numbers).
 */
function parseDateTime(str)
{
\t/*
\t * This is irritatingly implicit, but significantly more concise than
\t * alternatives.  The \"+str\" will convert a string containing only a
\t * number directly to a Number, or NaN for other strings.  Thus, if the
\t * conversion succeeds, we use it (this is the milliseconds-since-epoch
\t * case).  Otherwise, we pass the string directly to the Date
\t * constructor to parse.
\t */
\tvar numeric = +str;
\tif (!isNaN(numeric)) {
\t\treturn (new Date(numeric));
\t} else {
\t\treturn (new Date(str));
\t}
}


/*
 * Number.*_SAFE_INTEGER isn't present before node v0.12, so we hardcode
 * the ES6 definitions here, while allowing for them to someday be higher.
 */
var MAX_SAFE_INTEGER = Number.MAX_SAFE_INTEGER || 9007199254740991;
var MIN_SAFE_INTEGER = Number.MIN_SAFE_INTEGER || -9007199254740991;


/*
 * Default options for parseInteger().
 */
var PI_DEFAULTS = {
\tbase: 10,
\tallowSign: true,
\tallowPrefix: false,
\tallowTrailing: false,
\tallowImprecise: false,
\ttrimWhitespace: false,
\tleadingZeroIsOctal: false
};

var CP_0 = 0x30;
var CP_9 = 0x39;

var CP_A = 0x41;
var CP_B = 0x42;
var CP_O = 0x4f;
var CP_T = 0x54;
var CP_X = 0x58;
var CP_Z = 0x5a;

var CP_a = 0x61;
var CP_b = 0x62;
var CP_o = 0x6f;
var CP_t = 0x74;
var CP_x = 0x78;
var CP_z = 0x7a;

var PI_CONV_DEC = 0x30;
var PI_CONV_UC = 0x37;
var PI_CONV_LC = 0x57;


/*
 * A stricter version of parseInt() that provides options for changing what
 * is an acceptable string (for example, disallowing trailing characters).
 */
function parseInteger(str, uopts)
{
\tmod_assert.string(str, 'str');
\tmod_assert.optionalObject(uopts, 'options');

\tvar baseOverride = false;
\tvar options = PI_DEFAULTS;

\tif (uopts) {
\t\tbaseOverride = hasKey(uopts, 'base');
\t\toptions = mergeObjects(options, uopts);
\t\tmod_assert.number(options.base, 'options.base');
\t\tmod_assert.ok(options.base >= 2, 'options.base >= 2');
\t\tmod_assert.ok(options.base <= 36, 'options.base <= 36');
\t\tmod_assert.bool(options.allowSign, 'options.allowSign');
\t\tmod_assert.bool(options.allowPrefix, 'options.allowPrefix');
\t\tmod_assert.bool(options.allowTrailing,
\t\t    'options.allowTrailing');
\t\tmod_assert.bool(options.allowImprecise,
\t\t    'options.allowImprecise');
\t\tmod_assert.bool(options.trimWhitespace,
\t\t    'options.trimWhitespace');
\t\tmod_assert.bool(options.leadingZeroIsOctal,
\t\t    'options.leadingZeroIsOctal');

\t\tif (options.leadingZeroIsOctal) {
\t\t\tmod_assert.ok(!baseOverride,
\t\t\t    '\"base\" and \"leadingZeroIsOctal\" are ' +
\t\t\t    'mutually exclusive');
\t\t}
\t}

\tvar c;
\tvar pbase = -1;
\tvar base = options.base;
\tvar start;
\tvar mult = 1;
\tvar value = 0;
\tvar idx = 0;
\tvar len = str.length;

\t/* Trim any whitespace on the left side. */
\tif (options.trimWhitespace) {
\t\twhile (idx < len && isSpace(str.charCodeAt(idx))) {
\t\t\t++idx;
\t\t}
\t}

\t/* Check the number for a leading sign. */
\tif (options.allowSign) {
\t\tif (str[idx] === '-') {
\t\t\tidx += 1;
\t\t\tmult = -1;
\t\t} else if (str[idx] === '+') {
\t\t\tidx += 1;
\t\t}
\t}

\t/* Parse the base-indicating prefix if there is one. */
\tif (str[idx] === '0') {
\t\tif (options.allowPrefix) {
\t\t\tpbase = prefixToBase(str.charCodeAt(idx + 1));
\t\t\tif (pbase !== -1 && (!baseOverride || pbase === base)) {
\t\t\t\tbase = pbase;
\t\t\t\tidx += 2;
\t\t\t}
\t\t}

\t\tif (pbase === -1 && options.leadingZeroIsOctal) {
\t\t\tbase = 8;
\t\t}
\t}

\t/* Parse the actual digits. */
\tfor (start = idx; idx < len; ++idx) {
\t\tc = translateDigit(str.charCodeAt(idx));
\t\tif (c !== -1 && c < base) {
\t\t\tvalue *= base;
\t\t\tvalue += c;
\t\t} else {
\t\t\tbreak;
\t\t}
\t}

\t/* If we didn't parse any digits, we have an invalid number. */
\tif (start === idx) {
\t\treturn (new Error('invalid number: ' + JSON.stringify(str)));
\t}

\t/* Trim any whitespace on the right side. */
\tif (options.trimWhitespace) {
\t\twhile (idx < len && isSpace(str.charCodeAt(idx))) {
\t\t\t++idx;
\t\t}
\t}

\t/* Check for trailing characters. */
\tif (idx < len && !options.allowTrailing) {
\t\treturn (new Error('trailing characters after number: ' +
\t\t    JSON.stringify(str.slice(idx))));
\t}

\t/* If our value is 0, we return now, to avoid returning -0. */
\tif (value === 0) {
\t\treturn (0);
\t}

\t/* Calculate our final value. */
\tvar result = value * mult;

\t/*
\t * If the string represents a value that cannot be precisely represented
\t * by JavaScript, then we want to check that:
\t *
\t * - We never increased the value past MAX_SAFE_INTEGER
\t * - We don't make the result negative and below MIN_SAFE_INTEGER
\t *
\t * Because we only ever increment the value during parsing, there's no
\t * chance of moving past MAX_SAFE_INTEGER and then dropping below it
\t * again, losing precision in the process. This means that we only need
\t * to do our checks here, at the end.
\t */
\tif (!options.allowImprecise &&
\t    (value > MAX_SAFE_INTEGER || result < MIN_SAFE_INTEGER)) {
\t\treturn (new Error('number is outside of the supported range: ' +
\t\t    JSON.stringify(str.slice(start, idx))));
\t}

\treturn (result);
}


/*
 * Interpret a character code as a base-36 digit.
 */
function translateDigit(d)
{
\tif (d >= CP_0 && d <= CP_9) {
\t\t/* '0' to '9' -> 0 to 9 */
\t\treturn (d - PI_CONV_DEC);
\t} else if (d >= CP_A && d <= CP_Z) {
\t\t/* 'A' - 'Z' -> 10 to 35 */
\t\treturn (d - PI_CONV_UC);
\t} else if (d >= CP_a && d <= CP_z) {
\t\t/* 'a' - 'z' -> 10 to 35 */
\t\treturn (d - PI_CONV_LC);
\t} else {
\t\t/* Invalid character code */
\t\treturn (-1);
\t}
}


/*
 * Test if a value matches the ECMAScript definition of trimmable whitespace.
 */
function isSpace(c)
{
\treturn (c === 0x20) ||
\t    (c >= 0x0009 && c <= 0x000d) ||
\t    (c === 0x00a0) ||
\t    (c === 0x1680) ||
\t    (c === 0x180e) ||
\t    (c >= 0x2000 && c <= 0x200a) ||
\t    (c === 0x2028) ||
\t    (c === 0x2029) ||
\t    (c === 0x202f) ||
\t    (c === 0x205f) ||
\t    (c === 0x3000) ||
\t    (c === 0xfeff);
}


/*
 * Determine which base a character indicates (e.g., 'x' indicates hex).
 */
function prefixToBase(c)
{
\tif (c === CP_b || c === CP_B) {
\t\t/* 0b/0B (binary) */
\t\treturn (2);
\t} else if (c === CP_o || c === CP_O) {
\t\t/* 0o/0O (octal) */
\t\treturn (8);
\t} else if (c === CP_t || c === CP_T) {
\t\t/* 0t/0T (decimal) */
\t\treturn (10);
\t} else if (c === CP_x || c === CP_X) {
\t\t/* 0x/0X (hexadecimal) */
\t\treturn (16);
\t} else {
\t\t/* Not a meaningful character */
\t\treturn (-1);
\t}
}


function validateJsonObjectJS(schema, input)
{
\tvar report = mod_jsonschema.validate(input, schema);

\tif (report.errors.length === 0)
\t\treturn (null);

\t/* Currently, we only do anything useful with the first error. */
\tvar error = report.errors[0];

\t/* The failed property is given by a URI with an irrelevant prefix. */
\tvar propname = error['property'];
\tvar reason = error['message'].toLowerCase();
\tvar i, j;

\t/*
\t * There's at least one case where the property error message is
\t * confusing at best.  We work around this here.
\t */
\tif ((i = reason.indexOf('the property ')) != -1 &&
\t    (j = reason.indexOf(' is not defined in the schema and the ' +
\t    'schema does not allow additional properties')) != -1) {
\t\ti += 'the property '.length;
\t\tif (propname === '')
\t\t\tpropname = reason.substr(i, j - i);
\t\telse
\t\t\tpropname = propname + '.' + reason.substr(i, j - i);

\t\treason = 'unsupported property';
\t}

\tvar rv = new mod_verror.VError('property \"%s\": %s', propname, reason);
\trv.jsv_details = error;
\treturn (rv);
}

function randElt(arr)
{
\tmod_assert.ok(Array.isArray(arr) && arr.length > 0,
\t    'randElt argument must be a non-empty array');

\treturn (arr[Math.floor(Math.random() * arr.length)]);
}

function assertHrtime(a)
{
\tmod_assert.ok(a[0] >= 0 && a[1] >= 0,
\t    'negative numbers not allowed in hrtimes');
\tmod_assert.ok(a[1] < 1e9, 'nanoseconds column overflow');
}

/*
 * Compute the time elapsed between hrtime readings A and B, where A is later
 * than B.  hrtime readings come from Node's process.hrtime().  There is no
 * defined way to represent negative deltas, so it's illegal to diff B from A
 * where the time denoted by B is later than the time denoted by A.  If this
 * becomes valuable, we can define a representation and extend the
 * implementation to support it.
 */
function hrtimeDiff(a, b)
{
\tassertHrtime(a);
\tassertHrtime(b);
\tmod_assert.ok(a[0] > b[0] || (a[0] == b[0] && a[1] >= b[1]),
\t    'negative differences not allowed');

\tvar rv = [ a[0] - b[0], 0 ];

\tif (a[1] >= b[1]) {
\t\trv[1] = a[1] - b[1];
\t} else {
\t\trv[0]--;
\t\trv[1] = 1e9 - (b[1] - a[1]);
\t}

\treturn (rv);
}

/*
 * Convert a hrtime reading from the array format returned by Node's
 * process.hrtime() into a scalar number of nanoseconds.
 */
function hrtimeNanosec(a)
{
\tassertHrtime(a);

\treturn (Math.floor(a[0] * 1e9 + a[1]));
}

/*
 * Convert a hrtime reading from the array format returned by Node's
 * process.hrtime() into a scalar number of microseconds.
 */
function hrtimeMicrosec(a)
{
\tassertHrtime(a);

\treturn (Math.floor(a[0] * 1e6 + a[1] / 1e3));
}

/*
 * Convert a hrtime reading from the array format returned by Node's
 * process.hrtime() into a scalar number of milliseconds.
 */
function hrtimeMillisec(a)
{
\tassertHrtime(a);

\treturn (Math.floor(a[0] * 1e3 + a[1] / 1e6));
}

/*
 * Add two hrtime readings A and B, overwriting A with the result of the
 * addition.  This function is useful for accumulating several hrtime intervals
 * into a counter.  Returns A.
 */
function hrtimeAccum(a, b)
{
\tassertHrtime(a);
\tassertHrtime(b);

\t/*
\t * Accumulate the nanosecond component.
\t */
\ta[1] += b[1];
\tif (a[1] >= 1e9) {
\t\t/*
\t\t * The nanosecond component overflowed, so carry to the seconds
\t\t * field.
\t\t */
\t\ta[0]++;
\t\ta[1] -= 1e9;
\t}

\t/*
\t * Accumulate the seconds component.
\t */
\ta[0] += b[0];

\treturn (a);
}

/*
 * Add two hrtime readings A and B, returning the result as a new hrtime array.
 * Does not modify either input argument.
 */
function hrtimeAdd(a, b)
{
\tassertHrtime(a);

\tvar rv = [ a[0], a[1] ];

\treturn (hrtimeAccum(rv, b));
}


/*
 * Check an object for unexpected properties.  Accepts the object to check, and
 * an array of allowed property names (strings).  Returns an array of key names
 * that were found on the object, but did not appear in the list of allowed
 * properties.  If no properties were found, the returned array will be of
 * zero length.
 */
function extraProperties(obj, allowed)
{
\tmod_assert.ok(typeof (obj) === 'object' && obj !== null,
\t    'obj argument must be a non-null object');
\tmod_assert.ok(Array.isArray(allowed),
\t    'allowed argument must be an array of strings');
\tfor (var i = 0; i < allowed.length; i++) {
\t\tmod_assert.ok(typeof (allowed[i]) === 'string',
\t\t    'allowed argument must be an array of strings');
\t}

\treturn (Object.keys(obj).filter(function (key) {
\t\treturn (allowed.indexOf(key) === -1);
\t}));
}

/*
 * Given three sets of properties \"provided\" (may be undefined), \"overrides\"
 * (required), and \"defaults\" (may be undefined), construct an object containing
 * the union of these sets with \"overrides\" overriding \"provided\", and
 * \"provided\" overriding \"defaults\".  None of the input objects are modified.
 */
function mergeObjects(provided, overrides, defaults)
{
\tvar rv, k;

\trv = {};
\tif (defaults) {
\t\tfor (k in defaults)
\t\t\trv[k] = defaults[k];
\t}

\tif (provided) {
\t\tfor (k in provided)
\t\t\trv[k] = provided[k];
\t}

\tif (overrides) {
\t\tfor (k in overrides)
\t\t\trv[k] = overrides[k];
\t}

\treturn (rv);
}
";
        
        $__internal_d3ff4ab3e81d901a0c82e3eacdcdd874580c2d7f1d50b864e63c0740957fdc98->leave($__internal_d3ff4ab3e81d901a0c82e3eacdcdd874580c2d7f1d50b864e63c0740957fdc98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jsprim/lib/jsprim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * lib/jsprim.js: utilities for primitive JavaScript types
 */

var mod_assert = require('assert-plus');
var mod_util = require('util');

var mod_extsprintf = require('extsprintf');
var mod_verror = require('verror');
var mod_jsonschema = require('json-schema');

/*
 * Public interface
 */
exports.deepCopy = deepCopy;
exports.deepEqual = deepEqual;
exports.isEmpty = isEmpty;
exports.hasKey = hasKey;
exports.forEachKey = forEachKey;
exports.pluck = pluck;
exports.flattenObject = flattenObject;
exports.flattenIter = flattenIter;
exports.validateJsonObject = validateJsonObjectJS;
exports.validateJsonObjectJS = validateJsonObjectJS;
exports.randElt = randElt;
exports.extraProperties = extraProperties;
exports.mergeObjects = mergeObjects;

exports.startsWith = startsWith;
exports.endsWith = endsWith;

exports.parseInteger = parseInteger;

exports.iso8601 = iso8601;
exports.rfc1123 = rfc1123;
exports.parseDateTime = parseDateTime;

exports.hrtimediff = hrtimeDiff;
exports.hrtimeDiff = hrtimeDiff;
exports.hrtimeAccum = hrtimeAccum;
exports.hrtimeAdd = hrtimeAdd;
exports.hrtimeNanosec = hrtimeNanosec;
exports.hrtimeMicrosec = hrtimeMicrosec;
exports.hrtimeMillisec = hrtimeMillisec;


/*
 * Deep copy an acyclic *basic* Javascript object.  This only handles basic
 * scalars (strings, numbers, booleans) and arbitrarily deep arrays and objects
 * containing these.  This does *not* handle instances of other classes.
 */
function deepCopy(obj)
{
\tvar ret, key;
\tvar marker = '__deepCopy';

\tif (obj && obj[marker])
\t\tthrow (new Error('attempted deep copy of cyclic object'));

\tif (obj && obj.constructor == Object) {
\t\tret = {};
\t\tobj[marker] = true;

\t\tfor (key in obj) {
\t\t\tif (key == marker)
\t\t\t\tcontinue;

\t\t\tret[key] = deepCopy(obj[key]);
\t\t}

\t\tdelete (obj[marker]);
\t\treturn (ret);
\t}

\tif (obj && obj.constructor == Array) {
\t\tret = [];
\t\tobj[marker] = true;

\t\tfor (key = 0; key < obj.length; key++)
\t\t\tret.push(deepCopy(obj[key]));

\t\tdelete (obj[marker]);
\t\treturn (ret);
\t}

\t/*
\t * It must be a primitive type -- just return it.
\t */
\treturn (obj);
}

function deepEqual(obj1, obj2)
{
\tif (typeof (obj1) != typeof (obj2))
\t\treturn (false);

\tif (obj1 === null || obj2 === null || typeof (obj1) != 'object')
\t\treturn (obj1 === obj2);

\tif (obj1.constructor != obj2.constructor)
\t\treturn (false);

\tvar k;
\tfor (k in obj1) {
\t\tif (!obj2.hasOwnProperty(k))
\t\t\treturn (false);

\t\tif (!deepEqual(obj1[k], obj2[k]))
\t\t\treturn (false);
\t}

\tfor (k in obj2) {
\t\tif (!obj1.hasOwnProperty(k))
\t\t\treturn (false);
\t}

\treturn (true);
}

function isEmpty(obj)
{
\tvar key;
\tfor (key in obj)
\t\treturn (false);
\treturn (true);
}

function hasKey(obj, key)
{
\tmod_assert.equal(typeof (key), 'string');
\treturn (Object.prototype.hasOwnProperty.call(obj, key));
}

function forEachKey(obj, callback)
{
\tfor (var key in obj) {
\t\tif (hasKey(obj, key)) {
\t\t\tcallback(key, obj[key]);
\t\t}
\t}
}

function pluck(obj, key)
{
\tmod_assert.equal(typeof (key), 'string');
\treturn (pluckv(obj, key));
}

function pluckv(obj, key)
{
\tif (obj === null || typeof (obj) !== 'object')
\t\treturn (undefined);

\tif (obj.hasOwnProperty(key))
\t\treturn (obj[key]);

\tvar i = key.indexOf('.');
\tif (i == -1)
\t\treturn (undefined);

\tvar key1 = key.substr(0, i);
\tif (!obj.hasOwnProperty(key1))
\t\treturn (undefined);

\treturn (pluckv(obj[key1], key.substr(i + 1)));
}

/*
 * Invoke callback(row) for each entry in the array that would be returned by
 * flattenObject(data, depth).  This is just like flattenObject(data,
 * depth).forEach(callback), except that the intermediate array is never
 * created.
 */
function flattenIter(data, depth, callback)
{
\tdoFlattenIter(data, depth, [], callback);
}

function doFlattenIter(data, depth, accum, callback)
{
\tvar each;
\tvar key;

\tif (depth === 0) {
\t\teach = accum.slice(0);
\t\teach.push(data);
\t\tcallback(each);
\t\treturn;
\t}

\tmod_assert.ok(data !== null);
\tmod_assert.equal(typeof (data), 'object');
\tmod_assert.equal(typeof (depth), 'number');
\tmod_assert.ok(depth >= 0);

\tfor (key in data) {
\t\teach = accum.slice(0);
\t\teach.push(key);
\t\tdoFlattenIter(data[key], depth - 1, each, callback);
\t}
}

function flattenObject(data, depth)
{
\tif (depth === 0)
\t\treturn ([ data ]);

\tmod_assert.ok(data !== null);
\tmod_assert.equal(typeof (data), 'object');
\tmod_assert.equal(typeof (depth), 'number');
\tmod_assert.ok(depth >= 0);

\tvar rv = [];
\tvar key;

\tfor (key in data) {
\t\tflattenObject(data[key], depth - 1).forEach(function (p) {
\t\t\trv.push([ key ].concat(p));
\t\t});
\t}

\treturn (rv);
}

function startsWith(str, prefix)
{
\treturn (str.substr(0, prefix.length) == prefix);
}

function endsWith(str, suffix)
{
\treturn (str.substr(
\t    str.length - suffix.length, suffix.length) == suffix);
}

function iso8601(d)
{
\tif (typeof (d) == 'number')
\t\td = new Date(d);
\tmod_assert.ok(d.constructor === Date);
\treturn (mod_extsprintf.sprintf('%4d-%02d-%02dT%02d:%02d:%02d.%03dZ',
\t    d.getUTCFullYear(), d.getUTCMonth() + 1, d.getUTCDate(),
\t    d.getUTCHours(), d.getUTCMinutes(), d.getUTCSeconds(),
\t    d.getUTCMilliseconds()));
}

var RFC1123_MONTHS = [
    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
var RFC1123_DAYS = [
    'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

function rfc1123(date) {
\treturn (mod_extsprintf.sprintf('%s, %02d %s %04d %02d:%02d:%02d GMT',
\t    RFC1123_DAYS[date.getUTCDay()], date.getUTCDate(),
\t    RFC1123_MONTHS[date.getUTCMonth()], date.getUTCFullYear(),
\t    date.getUTCHours(), date.getUTCMinutes(),
\t    date.getUTCSeconds()));
}

/*
 * Parses a date expressed as a string, as either a number of milliseconds since
 * the epoch or any string format that Date accepts, giving preference to the
 * former where these two sets overlap (e.g., small numbers).
 */
function parseDateTime(str)
{
\t/*
\t * This is irritatingly implicit, but significantly more concise than
\t * alternatives.  The \"+str\" will convert a string containing only a
\t * number directly to a Number, or NaN for other strings.  Thus, if the
\t * conversion succeeds, we use it (this is the milliseconds-since-epoch
\t * case).  Otherwise, we pass the string directly to the Date
\t * constructor to parse.
\t */
\tvar numeric = +str;
\tif (!isNaN(numeric)) {
\t\treturn (new Date(numeric));
\t} else {
\t\treturn (new Date(str));
\t}
}


/*
 * Number.*_SAFE_INTEGER isn't present before node v0.12, so we hardcode
 * the ES6 definitions here, while allowing for them to someday be higher.
 */
var MAX_SAFE_INTEGER = Number.MAX_SAFE_INTEGER || 9007199254740991;
var MIN_SAFE_INTEGER = Number.MIN_SAFE_INTEGER || -9007199254740991;


/*
 * Default options for parseInteger().
 */
var PI_DEFAULTS = {
\tbase: 10,
\tallowSign: true,
\tallowPrefix: false,
\tallowTrailing: false,
\tallowImprecise: false,
\ttrimWhitespace: false,
\tleadingZeroIsOctal: false
};

var CP_0 = 0x30;
var CP_9 = 0x39;

var CP_A = 0x41;
var CP_B = 0x42;
var CP_O = 0x4f;
var CP_T = 0x54;
var CP_X = 0x58;
var CP_Z = 0x5a;

var CP_a = 0x61;
var CP_b = 0x62;
var CP_o = 0x6f;
var CP_t = 0x74;
var CP_x = 0x78;
var CP_z = 0x7a;

var PI_CONV_DEC = 0x30;
var PI_CONV_UC = 0x37;
var PI_CONV_LC = 0x57;


/*
 * A stricter version of parseInt() that provides options for changing what
 * is an acceptable string (for example, disallowing trailing characters).
 */
function parseInteger(str, uopts)
{
\tmod_assert.string(str, 'str');
\tmod_assert.optionalObject(uopts, 'options');

\tvar baseOverride = false;
\tvar options = PI_DEFAULTS;

\tif (uopts) {
\t\tbaseOverride = hasKey(uopts, 'base');
\t\toptions = mergeObjects(options, uopts);
\t\tmod_assert.number(options.base, 'options.base');
\t\tmod_assert.ok(options.base >= 2, 'options.base >= 2');
\t\tmod_assert.ok(options.base <= 36, 'options.base <= 36');
\t\tmod_assert.bool(options.allowSign, 'options.allowSign');
\t\tmod_assert.bool(options.allowPrefix, 'options.allowPrefix');
\t\tmod_assert.bool(options.allowTrailing,
\t\t    'options.allowTrailing');
\t\tmod_assert.bool(options.allowImprecise,
\t\t    'options.allowImprecise');
\t\tmod_assert.bool(options.trimWhitespace,
\t\t    'options.trimWhitespace');
\t\tmod_assert.bool(options.leadingZeroIsOctal,
\t\t    'options.leadingZeroIsOctal');

\t\tif (options.leadingZeroIsOctal) {
\t\t\tmod_assert.ok(!baseOverride,
\t\t\t    '\"base\" and \"leadingZeroIsOctal\" are ' +
\t\t\t    'mutually exclusive');
\t\t}
\t}

\tvar c;
\tvar pbase = -1;
\tvar base = options.base;
\tvar start;
\tvar mult = 1;
\tvar value = 0;
\tvar idx = 0;
\tvar len = str.length;

\t/* Trim any whitespace on the left side. */
\tif (options.trimWhitespace) {
\t\twhile (idx < len && isSpace(str.charCodeAt(idx))) {
\t\t\t++idx;
\t\t}
\t}

\t/* Check the number for a leading sign. */
\tif (options.allowSign) {
\t\tif (str[idx] === '-') {
\t\t\tidx += 1;
\t\t\tmult = -1;
\t\t} else if (str[idx] === '+') {
\t\t\tidx += 1;
\t\t}
\t}

\t/* Parse the base-indicating prefix if there is one. */
\tif (str[idx] === '0') {
\t\tif (options.allowPrefix) {
\t\t\tpbase = prefixToBase(str.charCodeAt(idx + 1));
\t\t\tif (pbase !== -1 && (!baseOverride || pbase === base)) {
\t\t\t\tbase = pbase;
\t\t\t\tidx += 2;
\t\t\t}
\t\t}

\t\tif (pbase === -1 && options.leadingZeroIsOctal) {
\t\t\tbase = 8;
\t\t}
\t}

\t/* Parse the actual digits. */
\tfor (start = idx; idx < len; ++idx) {
\t\tc = translateDigit(str.charCodeAt(idx));
\t\tif (c !== -1 && c < base) {
\t\t\tvalue *= base;
\t\t\tvalue += c;
\t\t} else {
\t\t\tbreak;
\t\t}
\t}

\t/* If we didn't parse any digits, we have an invalid number. */
\tif (start === idx) {
\t\treturn (new Error('invalid number: ' + JSON.stringify(str)));
\t}

\t/* Trim any whitespace on the right side. */
\tif (options.trimWhitespace) {
\t\twhile (idx < len && isSpace(str.charCodeAt(idx))) {
\t\t\t++idx;
\t\t}
\t}

\t/* Check for trailing characters. */
\tif (idx < len && !options.allowTrailing) {
\t\treturn (new Error('trailing characters after number: ' +
\t\t    JSON.stringify(str.slice(idx))));
\t}

\t/* If our value is 0, we return now, to avoid returning -0. */
\tif (value === 0) {
\t\treturn (0);
\t}

\t/* Calculate our final value. */
\tvar result = value * mult;

\t/*
\t * If the string represents a value that cannot be precisely represented
\t * by JavaScript, then we want to check that:
\t *
\t * - We never increased the value past MAX_SAFE_INTEGER
\t * - We don't make the result negative and below MIN_SAFE_INTEGER
\t *
\t * Because we only ever increment the value during parsing, there's no
\t * chance of moving past MAX_SAFE_INTEGER and then dropping below it
\t * again, losing precision in the process. This means that we only need
\t * to do our checks here, at the end.
\t */
\tif (!options.allowImprecise &&
\t    (value > MAX_SAFE_INTEGER || result < MIN_SAFE_INTEGER)) {
\t\treturn (new Error('number is outside of the supported range: ' +
\t\t    JSON.stringify(str.slice(start, idx))));
\t}

\treturn (result);
}


/*
 * Interpret a character code as a base-36 digit.
 */
function translateDigit(d)
{
\tif (d >= CP_0 && d <= CP_9) {
\t\t/* '0' to '9' -> 0 to 9 */
\t\treturn (d - PI_CONV_DEC);
\t} else if (d >= CP_A && d <= CP_Z) {
\t\t/* 'A' - 'Z' -> 10 to 35 */
\t\treturn (d - PI_CONV_UC);
\t} else if (d >= CP_a && d <= CP_z) {
\t\t/* 'a' - 'z' -> 10 to 35 */
\t\treturn (d - PI_CONV_LC);
\t} else {
\t\t/* Invalid character code */
\t\treturn (-1);
\t}
}


/*
 * Test if a value matches the ECMAScript definition of trimmable whitespace.
 */
function isSpace(c)
{
\treturn (c === 0x20) ||
\t    (c >= 0x0009 && c <= 0x000d) ||
\t    (c === 0x00a0) ||
\t    (c === 0x1680) ||
\t    (c === 0x180e) ||
\t    (c >= 0x2000 && c <= 0x200a) ||
\t    (c === 0x2028) ||
\t    (c === 0x2029) ||
\t    (c === 0x202f) ||
\t    (c === 0x205f) ||
\t    (c === 0x3000) ||
\t    (c === 0xfeff);
}


/*
 * Determine which base a character indicates (e.g., 'x' indicates hex).
 */
function prefixToBase(c)
{
\tif (c === CP_b || c === CP_B) {
\t\t/* 0b/0B (binary) */
\t\treturn (2);
\t} else if (c === CP_o || c === CP_O) {
\t\t/* 0o/0O (octal) */
\t\treturn (8);
\t} else if (c === CP_t || c === CP_T) {
\t\t/* 0t/0T (decimal) */
\t\treturn (10);
\t} else if (c === CP_x || c === CP_X) {
\t\t/* 0x/0X (hexadecimal) */
\t\treturn (16);
\t} else {
\t\t/* Not a meaningful character */
\t\treturn (-1);
\t}
}


function validateJsonObjectJS(schema, input)
{
\tvar report = mod_jsonschema.validate(input, schema);

\tif (report.errors.length === 0)
\t\treturn (null);

\t/* Currently, we only do anything useful with the first error. */
\tvar error = report.errors[0];

\t/* The failed property is given by a URI with an irrelevant prefix. */
\tvar propname = error['property'];
\tvar reason = error['message'].toLowerCase();
\tvar i, j;

\t/*
\t * There's at least one case where the property error message is
\t * confusing at best.  We work around this here.
\t */
\tif ((i = reason.indexOf('the property ')) != -1 &&
\t    (j = reason.indexOf(' is not defined in the schema and the ' +
\t    'schema does not allow additional properties')) != -1) {
\t\ti += 'the property '.length;
\t\tif (propname === '')
\t\t\tpropname = reason.substr(i, j - i);
\t\telse
\t\t\tpropname = propname + '.' + reason.substr(i, j - i);

\t\treason = 'unsupported property';
\t}

\tvar rv = new mod_verror.VError('property \"%s\": %s', propname, reason);
\trv.jsv_details = error;
\treturn (rv);
}

function randElt(arr)
{
\tmod_assert.ok(Array.isArray(arr) && arr.length > 0,
\t    'randElt argument must be a non-empty array');

\treturn (arr[Math.floor(Math.random() * arr.length)]);
}

function assertHrtime(a)
{
\tmod_assert.ok(a[0] >= 0 && a[1] >= 0,
\t    'negative numbers not allowed in hrtimes');
\tmod_assert.ok(a[1] < 1e9, 'nanoseconds column overflow');
}

/*
 * Compute the time elapsed between hrtime readings A and B, where A is later
 * than B.  hrtime readings come from Node's process.hrtime().  There is no
 * defined way to represent negative deltas, so it's illegal to diff B from A
 * where the time denoted by B is later than the time denoted by A.  If this
 * becomes valuable, we can define a representation and extend the
 * implementation to support it.
 */
function hrtimeDiff(a, b)
{
\tassertHrtime(a);
\tassertHrtime(b);
\tmod_assert.ok(a[0] > b[0] || (a[0] == b[0] && a[1] >= b[1]),
\t    'negative differences not allowed');

\tvar rv = [ a[0] - b[0], 0 ];

\tif (a[1] >= b[1]) {
\t\trv[1] = a[1] - b[1];
\t} else {
\t\trv[0]--;
\t\trv[1] = 1e9 - (b[1] - a[1]);
\t}

\treturn (rv);
}

/*
 * Convert a hrtime reading from the array format returned by Node's
 * process.hrtime() into a scalar number of nanoseconds.
 */
function hrtimeNanosec(a)
{
\tassertHrtime(a);

\treturn (Math.floor(a[0] * 1e9 + a[1]));
}

/*
 * Convert a hrtime reading from the array format returned by Node's
 * process.hrtime() into a scalar number of microseconds.
 */
function hrtimeMicrosec(a)
{
\tassertHrtime(a);

\treturn (Math.floor(a[0] * 1e6 + a[1] / 1e3));
}

/*
 * Convert a hrtime reading from the array format returned by Node's
 * process.hrtime() into a scalar number of milliseconds.
 */
function hrtimeMillisec(a)
{
\tassertHrtime(a);

\treturn (Math.floor(a[0] * 1e3 + a[1] / 1e6));
}

/*
 * Add two hrtime readings A and B, overwriting A with the result of the
 * addition.  This function is useful for accumulating several hrtime intervals
 * into a counter.  Returns A.
 */
function hrtimeAccum(a, b)
{
\tassertHrtime(a);
\tassertHrtime(b);

\t/*
\t * Accumulate the nanosecond component.
\t */
\ta[1] += b[1];
\tif (a[1] >= 1e9) {
\t\t/*
\t\t * The nanosecond component overflowed, so carry to the seconds
\t\t * field.
\t\t */
\t\ta[0]++;
\t\ta[1] -= 1e9;
\t}

\t/*
\t * Accumulate the seconds component.
\t */
\ta[0] += b[0];

\treturn (a);
}

/*
 * Add two hrtime readings A and B, returning the result as a new hrtime array.
 * Does not modify either input argument.
 */
function hrtimeAdd(a, b)
{
\tassertHrtime(a);

\tvar rv = [ a[0], a[1] ];

\treturn (hrtimeAccum(rv, b));
}


/*
 * Check an object for unexpected properties.  Accepts the object to check, and
 * an array of allowed property names (strings).  Returns an array of key names
 * that were found on the object, but did not appear in the list of allowed
 * properties.  If no properties were found, the returned array will be of
 * zero length.
 */
function extraProperties(obj, allowed)
{
\tmod_assert.ok(typeof (obj) === 'object' && obj !== null,
\t    'obj argument must be a non-null object');
\tmod_assert.ok(Array.isArray(allowed),
\t    'allowed argument must be an array of strings');
\tfor (var i = 0; i < allowed.length; i++) {
\t\tmod_assert.ok(typeof (allowed[i]) === 'string',
\t\t    'allowed argument must be an array of strings');
\t}

\treturn (Object.keys(obj).filter(function (key) {
\t\treturn (allowed.indexOf(key) === -1);
\t}));
}

/*
 * Given three sets of properties \"provided\" (may be undefined), \"overrides\"
 * (required), and \"defaults\" (may be undefined), construct an object containing
 * the union of these sets with \"overrides\" overriding \"provided\", and
 * \"provided\" overriding \"defaults\".  None of the input objects are modified.
 */
function mergeObjects(provided, overrides, defaults)
{
\tvar rv, k;

\trv = {};
\tif (defaults) {
\t\tfor (k in defaults)
\t\t\trv[k] = defaults[k];
\t}

\tif (provided) {
\t\tfor (k in provided)
\t\t\trv[k] = provided[k];
\t}

\tif (overrides) {
\t\tfor (k in overrides)
\t\t\trv[k] = overrides[k];
\t}

\treturn (rv);
}
", "node_modules/fsevents/node_modules/jsprim/lib/jsprim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jsprim/lib/jsprim.js");
    }
}
