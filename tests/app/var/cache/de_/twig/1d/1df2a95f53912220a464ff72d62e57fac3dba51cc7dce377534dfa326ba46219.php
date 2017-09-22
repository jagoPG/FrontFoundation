<?php

/* node_modules/punycode/punycode.js */
class __TwigTemplate_8b13ba50ed73a602f3de062e3e4a35979e787f23fdca3873efac6c6cb4eb6c17 extends Twig_Template
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
        $__internal_e942af6fc487e20902afd855ef5066f570a4bac7fe374b6123e96cca19be2d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e942af6fc487e20902afd855ef5066f570a4bac7fe374b6123e96cca19be2d06->enter($__internal_e942af6fc487e20902afd855ef5066f570a4bac7fe374b6123e96cca19be2d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/punycode/punycode.js"));

        // line 1
        echo "/*! https://mths.be/punycode v1.4.1 by @mathias */
;(function(root) {

\t/** Detect free variables */
\tvar freeExports = typeof exports == 'object' && exports &&
\t\t!exports.nodeType && exports;
\tvar freeModule = typeof module == 'object' && module &&
\t\t!module.nodeType && module;
\tvar freeGlobal = typeof global == 'object' && global;
\tif (
\t\tfreeGlobal.global === freeGlobal ||
\t\tfreeGlobal.window === freeGlobal ||
\t\tfreeGlobal.self === freeGlobal
\t) {
\t\troot = freeGlobal;
\t}

\t/**
\t * The `punycode` object.
\t * @name punycode
\t * @type Object
\t */
\tvar punycode,

\t/** Highest positive signed 32-bit float value */
\tmaxInt = 2147483647, // aka. 0x7FFFFFFF or 2^31-1

\t/** Bootstring parameters */
\tbase = 36,
\ttMin = 1,
\ttMax = 26,
\tskew = 38,
\tdamp = 700,
\tinitialBias = 72,
\tinitialN = 128, // 0x80
\tdelimiter = '-', // '\\x2D'

\t/** Regular expressions */
\tregexPunycode = /^xn--/,
\tregexNonASCII = /[^\\x20-\\x7E]/, // unprintable ASCII chars + non-ASCII chars
\tregexSeparators = /[\\x2E\\u3002\\uFF0E\\uFF61]/g, // RFC 3490 separators

\t/** Error messages */
\terrors = {
\t\t'overflow': 'Overflow: input needs wider integers to process',
\t\t'not-basic': 'Illegal input >= 0x80 (not a basic code point)',
\t\t'invalid-input': 'Invalid input'
\t},

\t/** Convenience shortcuts */
\tbaseMinusTMin = base - tMin,
\tfloor = Math.floor,
\tstringFromCharCode = String.fromCharCode,

\t/** Temporary variable */
\tkey;

\t/*--------------------------------------------------------------------------*/

\t/**
\t * A generic error utility function.
\t * @private
\t * @param {String} type The error type.
\t * @returns {Error} Throws a `RangeError` with the applicable error message.
\t */
\tfunction error(type) {
\t\tthrow new RangeError(errors[type]);
\t}

\t/**
\t * A generic `Array#map` utility function.
\t * @private
\t * @param {Array} array The array to iterate over.
\t * @param {Function} callback The function that gets called for every array
\t * item.
\t * @returns {Array} A new array of values returned by the callback function.
\t */
\tfunction map(array, fn) {
\t\tvar length = array.length;
\t\tvar result = [];
\t\twhile (length--) {
\t\t\tresult[length] = fn(array[length]);
\t\t}
\t\treturn result;
\t}

\t/**
\t * A simple `Array#map`-like wrapper to work with domain name strings or email
\t * addresses.
\t * @private
\t * @param {String} domain The domain name or email address.
\t * @param {Function} callback The function that gets called for every
\t * character.
\t * @returns {Array} A new string of characters returned by the callback
\t * function.
\t */
\tfunction mapDomain(string, fn) {
\t\tvar parts = string.split('@');
\t\tvar result = '';
\t\tif (parts.length > 1) {
\t\t\t// In email addresses, only the domain name should be punycoded. Leave
\t\t\t// the local part (i.e. everything up to `@`) intact.
\t\t\tresult = parts[0] + '@';
\t\t\tstring = parts[1];
\t\t}
\t\t// Avoid `split(regex)` for IE8 compatibility. See #17.
\t\tstring = string.replace(regexSeparators, '\\x2E');
\t\tvar labels = string.split('.');
\t\tvar encoded = map(labels, fn).join('.');
\t\treturn result + encoded;
\t}

\t/**
\t * Creates an array containing the numeric code points of each Unicode
\t * character in the string. While JavaScript uses UCS-2 internally,
\t * this function will convert a pair of surrogate halves (each of which
\t * UCS-2 exposes as separate characters) into a single code point,
\t * matching UTF-16.
\t * @see `punycode.ucs2.encode`
\t * @see <https://mathiasbynens.be/notes/javascript-encoding>
\t * @memberOf punycode.ucs2
\t * @name decode
\t * @param {String} string The Unicode input string (UCS-2).
\t * @returns {Array} The new array of code points.
\t */
\tfunction ucs2decode(string) {
\t\tvar output = [],
\t\t    counter = 0,
\t\t    length = string.length,
\t\t    value,
\t\t    extra;
\t\twhile (counter < length) {
\t\t\tvalue = string.charCodeAt(counter++);
\t\t\tif (value >= 0xD800 && value <= 0xDBFF && counter < length) {
\t\t\t\t// high surrogate, and there is a next character
\t\t\t\textra = string.charCodeAt(counter++);
\t\t\t\tif ((extra & 0xFC00) == 0xDC00) { // low surrogate
\t\t\t\t\toutput.push(((value & 0x3FF) << 10) + (extra & 0x3FF) + 0x10000);
\t\t\t\t} else {
\t\t\t\t\t// unmatched surrogate; only append this code unit, in case the next
\t\t\t\t\t// code unit is the high surrogate of a surrogate pair
\t\t\t\t\toutput.push(value);
\t\t\t\t\tcounter--;
\t\t\t\t}
\t\t\t} else {
\t\t\t\toutput.push(value);
\t\t\t}
\t\t}
\t\treturn output;
\t}

\t/**
\t * Creates a string based on an array of numeric code points.
\t * @see `punycode.ucs2.decode`
\t * @memberOf punycode.ucs2
\t * @name encode
\t * @param {Array} codePoints The array of numeric code points.
\t * @returns {String} The new Unicode string (UCS-2).
\t */
\tfunction ucs2encode(array) {
\t\treturn map(array, function(value) {
\t\t\tvar output = '';
\t\t\tif (value > 0xFFFF) {
\t\t\t\tvalue -= 0x10000;
\t\t\t\toutput += stringFromCharCode(value >>> 10 & 0x3FF | 0xD800);
\t\t\t\tvalue = 0xDC00 | value & 0x3FF;
\t\t\t}
\t\t\toutput += stringFromCharCode(value);
\t\t\treturn output;
\t\t}).join('');
\t}

\t/**
\t * Converts a basic code point into a digit/integer.
\t * @see `digitToBasic()`
\t * @private
\t * @param {Number} codePoint The basic numeric code point value.
\t * @returns {Number} The numeric value of a basic code point (for use in
\t * representing integers) in the range `0` to `base - 1`, or `base` if
\t * the code point does not represent a value.
\t */
\tfunction basicToDigit(codePoint) {
\t\tif (codePoint - 48 < 10) {
\t\t\treturn codePoint - 22;
\t\t}
\t\tif (codePoint - 65 < 26) {
\t\t\treturn codePoint - 65;
\t\t}
\t\tif (codePoint - 97 < 26) {
\t\t\treturn codePoint - 97;
\t\t}
\t\treturn base;
\t}

\t/**
\t * Converts a digit/integer into a basic code point.
\t * @see `basicToDigit()`
\t * @private
\t * @param {Number} digit The numeric value of a basic code point.
\t * @returns {Number} The basic code point whose value (when used for
\t * representing integers) is `digit`, which needs to be in the range
\t * `0` to `base - 1`. If `flag` is non-zero, the uppercase form is
\t * used; else, the lowercase form is used. The behavior is undefined
\t * if `flag` is non-zero and `digit` has no uppercase form.
\t */
\tfunction digitToBasic(digit, flag) {
\t\t//  0..25 map to ASCII a..z or A..Z
\t\t// 26..35 map to ASCII 0..9
\t\treturn digit + 22 + 75 * (digit < 26) - ((flag != 0) << 5);
\t}

\t/**
\t * Bias adaptation function as per section 3.4 of RFC 3492.
\t * https://tools.ietf.org/html/rfc3492#section-3.4
\t * @private
\t */
\tfunction adapt(delta, numPoints, firstTime) {
\t\tvar k = 0;
\t\tdelta = firstTime ? floor(delta / damp) : delta >> 1;
\t\tdelta += floor(delta / numPoints);
\t\tfor (/* no initialization */; delta > baseMinusTMin * tMax >> 1; k += base) {
\t\t\tdelta = floor(delta / baseMinusTMin);
\t\t}
\t\treturn floor(k + (baseMinusTMin + 1) * delta / (delta + skew));
\t}

\t/**
\t * Converts a Punycode string of ASCII-only symbols to a string of Unicode
\t * symbols.
\t * @memberOf punycode
\t * @param {String} input The Punycode string of ASCII-only symbols.
\t * @returns {String} The resulting string of Unicode symbols.
\t */
\tfunction decode(input) {
\t\t// Don't use UCS-2
\t\tvar output = [],
\t\t    inputLength = input.length,
\t\t    out,
\t\t    i = 0,
\t\t    n = initialN,
\t\t    bias = initialBias,
\t\t    basic,
\t\t    j,
\t\t    index,
\t\t    oldi,
\t\t    w,
\t\t    k,
\t\t    digit,
\t\t    t,
\t\t    /** Cached calculation results */
\t\t    baseMinusT;

\t\t// Handle the basic code points: let `basic` be the number of input code
\t\t// points before the last delimiter, or `0` if there is none, then copy
\t\t// the first basic code points to the output.

\t\tbasic = input.lastIndexOf(delimiter);
\t\tif (basic < 0) {
\t\t\tbasic = 0;
\t\t}

\t\tfor (j = 0; j < basic; ++j) {
\t\t\t// if it's not a basic code point
\t\t\tif (input.charCodeAt(j) >= 0x80) {
\t\t\t\terror('not-basic');
\t\t\t}
\t\t\toutput.push(input.charCodeAt(j));
\t\t}

\t\t// Main decoding loop: start just after the last delimiter if any basic code
\t\t// points were copied; start at the beginning otherwise.

\t\tfor (index = basic > 0 ? basic + 1 : 0; index < inputLength; /* no final expression */) {

\t\t\t// `index` is the index of the next character to be consumed.
\t\t\t// Decode a generalized variable-length integer into `delta`,
\t\t\t// which gets added to `i`. The overflow checking is easier
\t\t\t// if we increase `i` as we go, then subtract off its starting
\t\t\t// value at the end to obtain `delta`.
\t\t\tfor (oldi = i, w = 1, k = base; /* no condition */; k += base) {

\t\t\t\tif (index >= inputLength) {
\t\t\t\t\terror('invalid-input');
\t\t\t\t}

\t\t\t\tdigit = basicToDigit(input.charCodeAt(index++));

\t\t\t\tif (digit >= base || digit > floor((maxInt - i) / w)) {
\t\t\t\t\terror('overflow');
\t\t\t\t}

\t\t\t\ti += digit * w;
\t\t\t\tt = k <= bias ? tMin : (k >= bias + tMax ? tMax : k - bias);

\t\t\t\tif (digit < t) {
\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t\tbaseMinusT = base - t;
\t\t\t\tif (w > floor(maxInt / baseMinusT)) {
\t\t\t\t\terror('overflow');
\t\t\t\t}

\t\t\t\tw *= baseMinusT;

\t\t\t}

\t\t\tout = output.length + 1;
\t\t\tbias = adapt(i - oldi, out, oldi == 0);

\t\t\t// `i` was supposed to wrap around from `out` to `0`,
\t\t\t// incrementing `n` each time, so we'll fix that now:
\t\t\tif (floor(i / out) > maxInt - n) {
\t\t\t\terror('overflow');
\t\t\t}

\t\t\tn += floor(i / out);
\t\t\ti %= out;

\t\t\t// Insert `n` at position `i` of the output
\t\t\toutput.splice(i++, 0, n);

\t\t}

\t\treturn ucs2encode(output);
\t}

\t/**
\t * Converts a string of Unicode symbols (e.g. a domain name label) to a
\t * Punycode string of ASCII-only symbols.
\t * @memberOf punycode
\t * @param {String} input The string of Unicode symbols.
\t * @returns {String} The resulting Punycode string of ASCII-only symbols.
\t */
\tfunction encode(input) {
\t\tvar n,
\t\t    delta,
\t\t    handledCPCount,
\t\t    basicLength,
\t\t    bias,
\t\t    j,
\t\t    m,
\t\t    q,
\t\t    k,
\t\t    t,
\t\t    currentValue,
\t\t    output = [],
\t\t    /** `inputLength` will hold the number of code points in `input`. */
\t\t    inputLength,
\t\t    /** Cached calculation results */
\t\t    handledCPCountPlusOne,
\t\t    baseMinusT,
\t\t    qMinusT;

\t\t// Convert the input in UCS-2 to Unicode
\t\tinput = ucs2decode(input);

\t\t// Cache the length
\t\tinputLength = input.length;

\t\t// Initialize the state
\t\tn = initialN;
\t\tdelta = 0;
\t\tbias = initialBias;

\t\t// Handle the basic code points
\t\tfor (j = 0; j < inputLength; ++j) {
\t\t\tcurrentValue = input[j];
\t\t\tif (currentValue < 0x80) {
\t\t\t\toutput.push(stringFromCharCode(currentValue));
\t\t\t}
\t\t}

\t\thandledCPCount = basicLength = output.length;

\t\t// `handledCPCount` is the number of code points that have been handled;
\t\t// `basicLength` is the number of basic code points.

\t\t// Finish the basic string - if it is not empty - with a delimiter
\t\tif (basicLength) {
\t\t\toutput.push(delimiter);
\t\t}

\t\t// Main encoding loop:
\t\twhile (handledCPCount < inputLength) {

\t\t\t// All non-basic code points < n have been handled already. Find the next
\t\t\t// larger one:
\t\t\tfor (m = maxInt, j = 0; j < inputLength; ++j) {
\t\t\t\tcurrentValue = input[j];
\t\t\t\tif (currentValue >= n && currentValue < m) {
\t\t\t\t\tm = currentValue;
\t\t\t\t}
\t\t\t}

\t\t\t// Increase `delta` enough to advance the decoder's <n,i> state to <m,0>,
\t\t\t// but guard against overflow
\t\t\thandledCPCountPlusOne = handledCPCount + 1;
\t\t\tif (m - n > floor((maxInt - delta) / handledCPCountPlusOne)) {
\t\t\t\terror('overflow');
\t\t\t}

\t\t\tdelta += (m - n) * handledCPCountPlusOne;
\t\t\tn = m;

\t\t\tfor (j = 0; j < inputLength; ++j) {
\t\t\t\tcurrentValue = input[j];

\t\t\t\tif (currentValue < n && ++delta > maxInt) {
\t\t\t\t\terror('overflow');
\t\t\t\t}

\t\t\t\tif (currentValue == n) {
\t\t\t\t\t// Represent delta as a generalized variable-length integer
\t\t\t\t\tfor (q = delta, k = base; /* no condition */; k += base) {
\t\t\t\t\t\tt = k <= bias ? tMin : (k >= bias + tMax ? tMax : k - bias);
\t\t\t\t\t\tif (q < t) {
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t\tqMinusT = q - t;
\t\t\t\t\t\tbaseMinusT = base - t;
\t\t\t\t\t\toutput.push(
\t\t\t\t\t\t\tstringFromCharCode(digitToBasic(t + qMinusT % baseMinusT, 0))
\t\t\t\t\t\t);
\t\t\t\t\t\tq = floor(qMinusT / baseMinusT);
\t\t\t\t\t}

\t\t\t\t\toutput.push(stringFromCharCode(digitToBasic(q, 0)));
\t\t\t\t\tbias = adapt(delta, handledCPCountPlusOne, handledCPCount == basicLength);
\t\t\t\t\tdelta = 0;
\t\t\t\t\t++handledCPCount;
\t\t\t\t}
\t\t\t}

\t\t\t++delta;
\t\t\t++n;

\t\t}
\t\treturn output.join('');
\t}

\t/**
\t * Converts a Punycode string representing a domain name or an email address
\t * to Unicode. Only the Punycoded parts of the input will be converted, i.e.
\t * it doesn't matter if you call it on a string that has already been
\t * converted to Unicode.
\t * @memberOf punycode
\t * @param {String} input The Punycoded domain name or email address to
\t * convert to Unicode.
\t * @returns {String} The Unicode representation of the given Punycode
\t * string.
\t */
\tfunction toUnicode(input) {
\t\treturn mapDomain(input, function(string) {
\t\t\treturn regexPunycode.test(string)
\t\t\t\t? decode(string.slice(4).toLowerCase())
\t\t\t\t: string;
\t\t});
\t}

\t/**
\t * Converts a Unicode string representing a domain name or an email address to
\t * Punycode. Only the non-ASCII parts of the domain name will be converted,
\t * i.e. it doesn't matter if you call it with a domain that's already in
\t * ASCII.
\t * @memberOf punycode
\t * @param {String} input The domain name or email address to convert, as a
\t * Unicode string.
\t * @returns {String} The Punycode representation of the given domain name or
\t * email address.
\t */
\tfunction toASCII(input) {
\t\treturn mapDomain(input, function(string) {
\t\t\treturn regexNonASCII.test(string)
\t\t\t\t? 'xn--' + encode(string)
\t\t\t\t: string;
\t\t});
\t}

\t/*--------------------------------------------------------------------------*/

\t/** Define the public API */
\tpunycode = {
\t\t/**
\t\t * A string representing the current Punycode.js version number.
\t\t * @memberOf punycode
\t\t * @type String
\t\t */
\t\t'version': '1.4.1',
\t\t/**
\t\t * An object of methods to convert from JavaScript's internal character
\t\t * representation (UCS-2) to Unicode code points, and back.
\t\t * @see <https://mathiasbynens.be/notes/javascript-encoding>
\t\t * @memberOf punycode
\t\t * @type Object
\t\t */
\t\t'ucs2': {
\t\t\t'decode': ucs2decode,
\t\t\t'encode': ucs2encode
\t\t},
\t\t'decode': decode,
\t\t'encode': encode,
\t\t'toASCII': toASCII,
\t\t'toUnicode': toUnicode
\t};

\t/** Expose `punycode` */
\t// Some AMD build optimizers, like r.js, check for specific condition patterns
\t// like the following:
\tif (
\t\ttypeof define == 'function' &&
\t\ttypeof define.amd == 'object' &&
\t\tdefine.amd
\t) {
\t\tdefine('punycode', function() {
\t\t\treturn punycode;
\t\t});
\t} else if (freeExports && freeModule) {
\t\tif (module.exports == freeExports) {
\t\t\t// in Node.js, io.js, or RingoJS v0.8.0+
\t\t\tfreeModule.exports = punycode;
\t\t} else {
\t\t\t// in Narwhal or RingoJS v0.7.0-
\t\t\tfor (key in punycode) {
\t\t\t\tpunycode.hasOwnProperty(key) && (freeExports[key] = punycode[key]);
\t\t\t}
\t\t}
\t} else {
\t\t// in Rhino or a web browser
\t\troot.punycode = punycode;
\t}

}(this));
";
        
        $__internal_e942af6fc487e20902afd855ef5066f570a4bac7fe374b6123e96cca19be2d06->leave($__internal_e942af6fc487e20902afd855ef5066f570a4bac7fe374b6123e96cca19be2d06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/punycode/punycode.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*! https://mths.be/punycode v1.4.1 by @mathias */
;(function(root) {

\t/** Detect free variables */
\tvar freeExports = typeof exports == 'object' && exports &&
\t\t!exports.nodeType && exports;
\tvar freeModule = typeof module == 'object' && module &&
\t\t!module.nodeType && module;
\tvar freeGlobal = typeof global == 'object' && global;
\tif (
\t\tfreeGlobal.global === freeGlobal ||
\t\tfreeGlobal.window === freeGlobal ||
\t\tfreeGlobal.self === freeGlobal
\t) {
\t\troot = freeGlobal;
\t}

\t/**
\t * The `punycode` object.
\t * @name punycode
\t * @type Object
\t */
\tvar punycode,

\t/** Highest positive signed 32-bit float value */
\tmaxInt = 2147483647, // aka. 0x7FFFFFFF or 2^31-1

\t/** Bootstring parameters */
\tbase = 36,
\ttMin = 1,
\ttMax = 26,
\tskew = 38,
\tdamp = 700,
\tinitialBias = 72,
\tinitialN = 128, // 0x80
\tdelimiter = '-', // '\\x2D'

\t/** Regular expressions */
\tregexPunycode = /^xn--/,
\tregexNonASCII = /[^\\x20-\\x7E]/, // unprintable ASCII chars + non-ASCII chars
\tregexSeparators = /[\\x2E\\u3002\\uFF0E\\uFF61]/g, // RFC 3490 separators

\t/** Error messages */
\terrors = {
\t\t'overflow': 'Overflow: input needs wider integers to process',
\t\t'not-basic': 'Illegal input >= 0x80 (not a basic code point)',
\t\t'invalid-input': 'Invalid input'
\t},

\t/** Convenience shortcuts */
\tbaseMinusTMin = base - tMin,
\tfloor = Math.floor,
\tstringFromCharCode = String.fromCharCode,

\t/** Temporary variable */
\tkey;

\t/*--------------------------------------------------------------------------*/

\t/**
\t * A generic error utility function.
\t * @private
\t * @param {String} type The error type.
\t * @returns {Error} Throws a `RangeError` with the applicable error message.
\t */
\tfunction error(type) {
\t\tthrow new RangeError(errors[type]);
\t}

\t/**
\t * A generic `Array#map` utility function.
\t * @private
\t * @param {Array} array The array to iterate over.
\t * @param {Function} callback The function that gets called for every array
\t * item.
\t * @returns {Array} A new array of values returned by the callback function.
\t */
\tfunction map(array, fn) {
\t\tvar length = array.length;
\t\tvar result = [];
\t\twhile (length--) {
\t\t\tresult[length] = fn(array[length]);
\t\t}
\t\treturn result;
\t}

\t/**
\t * A simple `Array#map`-like wrapper to work with domain name strings or email
\t * addresses.
\t * @private
\t * @param {String} domain The domain name or email address.
\t * @param {Function} callback The function that gets called for every
\t * character.
\t * @returns {Array} A new string of characters returned by the callback
\t * function.
\t */
\tfunction mapDomain(string, fn) {
\t\tvar parts = string.split('@');
\t\tvar result = '';
\t\tif (parts.length > 1) {
\t\t\t// In email addresses, only the domain name should be punycoded. Leave
\t\t\t// the local part (i.e. everything up to `@`) intact.
\t\t\tresult = parts[0] + '@';
\t\t\tstring = parts[1];
\t\t}
\t\t// Avoid `split(regex)` for IE8 compatibility. See #17.
\t\tstring = string.replace(regexSeparators, '\\x2E');
\t\tvar labels = string.split('.');
\t\tvar encoded = map(labels, fn).join('.');
\t\treturn result + encoded;
\t}

\t/**
\t * Creates an array containing the numeric code points of each Unicode
\t * character in the string. While JavaScript uses UCS-2 internally,
\t * this function will convert a pair of surrogate halves (each of which
\t * UCS-2 exposes as separate characters) into a single code point,
\t * matching UTF-16.
\t * @see `punycode.ucs2.encode`
\t * @see <https://mathiasbynens.be/notes/javascript-encoding>
\t * @memberOf punycode.ucs2
\t * @name decode
\t * @param {String} string The Unicode input string (UCS-2).
\t * @returns {Array} The new array of code points.
\t */
\tfunction ucs2decode(string) {
\t\tvar output = [],
\t\t    counter = 0,
\t\t    length = string.length,
\t\t    value,
\t\t    extra;
\t\twhile (counter < length) {
\t\t\tvalue = string.charCodeAt(counter++);
\t\t\tif (value >= 0xD800 && value <= 0xDBFF && counter < length) {
\t\t\t\t// high surrogate, and there is a next character
\t\t\t\textra = string.charCodeAt(counter++);
\t\t\t\tif ((extra & 0xFC00) == 0xDC00) { // low surrogate
\t\t\t\t\toutput.push(((value & 0x3FF) << 10) + (extra & 0x3FF) + 0x10000);
\t\t\t\t} else {
\t\t\t\t\t// unmatched surrogate; only append this code unit, in case the next
\t\t\t\t\t// code unit is the high surrogate of a surrogate pair
\t\t\t\t\toutput.push(value);
\t\t\t\t\tcounter--;
\t\t\t\t}
\t\t\t} else {
\t\t\t\toutput.push(value);
\t\t\t}
\t\t}
\t\treturn output;
\t}

\t/**
\t * Creates a string based on an array of numeric code points.
\t * @see `punycode.ucs2.decode`
\t * @memberOf punycode.ucs2
\t * @name encode
\t * @param {Array} codePoints The array of numeric code points.
\t * @returns {String} The new Unicode string (UCS-2).
\t */
\tfunction ucs2encode(array) {
\t\treturn map(array, function(value) {
\t\t\tvar output = '';
\t\t\tif (value > 0xFFFF) {
\t\t\t\tvalue -= 0x10000;
\t\t\t\toutput += stringFromCharCode(value >>> 10 & 0x3FF | 0xD800);
\t\t\t\tvalue = 0xDC00 | value & 0x3FF;
\t\t\t}
\t\t\toutput += stringFromCharCode(value);
\t\t\treturn output;
\t\t}).join('');
\t}

\t/**
\t * Converts a basic code point into a digit/integer.
\t * @see `digitToBasic()`
\t * @private
\t * @param {Number} codePoint The basic numeric code point value.
\t * @returns {Number} The numeric value of a basic code point (for use in
\t * representing integers) in the range `0` to `base - 1`, or `base` if
\t * the code point does not represent a value.
\t */
\tfunction basicToDigit(codePoint) {
\t\tif (codePoint - 48 < 10) {
\t\t\treturn codePoint - 22;
\t\t}
\t\tif (codePoint - 65 < 26) {
\t\t\treturn codePoint - 65;
\t\t}
\t\tif (codePoint - 97 < 26) {
\t\t\treturn codePoint - 97;
\t\t}
\t\treturn base;
\t}

\t/**
\t * Converts a digit/integer into a basic code point.
\t * @see `basicToDigit()`
\t * @private
\t * @param {Number} digit The numeric value of a basic code point.
\t * @returns {Number} The basic code point whose value (when used for
\t * representing integers) is `digit`, which needs to be in the range
\t * `0` to `base - 1`. If `flag` is non-zero, the uppercase form is
\t * used; else, the lowercase form is used. The behavior is undefined
\t * if `flag` is non-zero and `digit` has no uppercase form.
\t */
\tfunction digitToBasic(digit, flag) {
\t\t//  0..25 map to ASCII a..z or A..Z
\t\t// 26..35 map to ASCII 0..9
\t\treturn digit + 22 + 75 * (digit < 26) - ((flag != 0) << 5);
\t}

\t/**
\t * Bias adaptation function as per section 3.4 of RFC 3492.
\t * https://tools.ietf.org/html/rfc3492#section-3.4
\t * @private
\t */
\tfunction adapt(delta, numPoints, firstTime) {
\t\tvar k = 0;
\t\tdelta = firstTime ? floor(delta / damp) : delta >> 1;
\t\tdelta += floor(delta / numPoints);
\t\tfor (/* no initialization */; delta > baseMinusTMin * tMax >> 1; k += base) {
\t\t\tdelta = floor(delta / baseMinusTMin);
\t\t}
\t\treturn floor(k + (baseMinusTMin + 1) * delta / (delta + skew));
\t}

\t/**
\t * Converts a Punycode string of ASCII-only symbols to a string of Unicode
\t * symbols.
\t * @memberOf punycode
\t * @param {String} input The Punycode string of ASCII-only symbols.
\t * @returns {String} The resulting string of Unicode symbols.
\t */
\tfunction decode(input) {
\t\t// Don't use UCS-2
\t\tvar output = [],
\t\t    inputLength = input.length,
\t\t    out,
\t\t    i = 0,
\t\t    n = initialN,
\t\t    bias = initialBias,
\t\t    basic,
\t\t    j,
\t\t    index,
\t\t    oldi,
\t\t    w,
\t\t    k,
\t\t    digit,
\t\t    t,
\t\t    /** Cached calculation results */
\t\t    baseMinusT;

\t\t// Handle the basic code points: let `basic` be the number of input code
\t\t// points before the last delimiter, or `0` if there is none, then copy
\t\t// the first basic code points to the output.

\t\tbasic = input.lastIndexOf(delimiter);
\t\tif (basic < 0) {
\t\t\tbasic = 0;
\t\t}

\t\tfor (j = 0; j < basic; ++j) {
\t\t\t// if it's not a basic code point
\t\t\tif (input.charCodeAt(j) >= 0x80) {
\t\t\t\terror('not-basic');
\t\t\t}
\t\t\toutput.push(input.charCodeAt(j));
\t\t}

\t\t// Main decoding loop: start just after the last delimiter if any basic code
\t\t// points were copied; start at the beginning otherwise.

\t\tfor (index = basic > 0 ? basic + 1 : 0; index < inputLength; /* no final expression */) {

\t\t\t// `index` is the index of the next character to be consumed.
\t\t\t// Decode a generalized variable-length integer into `delta`,
\t\t\t// which gets added to `i`. The overflow checking is easier
\t\t\t// if we increase `i` as we go, then subtract off its starting
\t\t\t// value at the end to obtain `delta`.
\t\t\tfor (oldi = i, w = 1, k = base; /* no condition */; k += base) {

\t\t\t\tif (index >= inputLength) {
\t\t\t\t\terror('invalid-input');
\t\t\t\t}

\t\t\t\tdigit = basicToDigit(input.charCodeAt(index++));

\t\t\t\tif (digit >= base || digit > floor((maxInt - i) / w)) {
\t\t\t\t\terror('overflow');
\t\t\t\t}

\t\t\t\ti += digit * w;
\t\t\t\tt = k <= bias ? tMin : (k >= bias + tMax ? tMax : k - bias);

\t\t\t\tif (digit < t) {
\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t\tbaseMinusT = base - t;
\t\t\t\tif (w > floor(maxInt / baseMinusT)) {
\t\t\t\t\terror('overflow');
\t\t\t\t}

\t\t\t\tw *= baseMinusT;

\t\t\t}

\t\t\tout = output.length + 1;
\t\t\tbias = adapt(i - oldi, out, oldi == 0);

\t\t\t// `i` was supposed to wrap around from `out` to `0`,
\t\t\t// incrementing `n` each time, so we'll fix that now:
\t\t\tif (floor(i / out) > maxInt - n) {
\t\t\t\terror('overflow');
\t\t\t}

\t\t\tn += floor(i / out);
\t\t\ti %= out;

\t\t\t// Insert `n` at position `i` of the output
\t\t\toutput.splice(i++, 0, n);

\t\t}

\t\treturn ucs2encode(output);
\t}

\t/**
\t * Converts a string of Unicode symbols (e.g. a domain name label) to a
\t * Punycode string of ASCII-only symbols.
\t * @memberOf punycode
\t * @param {String} input The string of Unicode symbols.
\t * @returns {String} The resulting Punycode string of ASCII-only symbols.
\t */
\tfunction encode(input) {
\t\tvar n,
\t\t    delta,
\t\t    handledCPCount,
\t\t    basicLength,
\t\t    bias,
\t\t    j,
\t\t    m,
\t\t    q,
\t\t    k,
\t\t    t,
\t\t    currentValue,
\t\t    output = [],
\t\t    /** `inputLength` will hold the number of code points in `input`. */
\t\t    inputLength,
\t\t    /** Cached calculation results */
\t\t    handledCPCountPlusOne,
\t\t    baseMinusT,
\t\t    qMinusT;

\t\t// Convert the input in UCS-2 to Unicode
\t\tinput = ucs2decode(input);

\t\t// Cache the length
\t\tinputLength = input.length;

\t\t// Initialize the state
\t\tn = initialN;
\t\tdelta = 0;
\t\tbias = initialBias;

\t\t// Handle the basic code points
\t\tfor (j = 0; j < inputLength; ++j) {
\t\t\tcurrentValue = input[j];
\t\t\tif (currentValue < 0x80) {
\t\t\t\toutput.push(stringFromCharCode(currentValue));
\t\t\t}
\t\t}

\t\thandledCPCount = basicLength = output.length;

\t\t// `handledCPCount` is the number of code points that have been handled;
\t\t// `basicLength` is the number of basic code points.

\t\t// Finish the basic string - if it is not empty - with a delimiter
\t\tif (basicLength) {
\t\t\toutput.push(delimiter);
\t\t}

\t\t// Main encoding loop:
\t\twhile (handledCPCount < inputLength) {

\t\t\t// All non-basic code points < n have been handled already. Find the next
\t\t\t// larger one:
\t\t\tfor (m = maxInt, j = 0; j < inputLength; ++j) {
\t\t\t\tcurrentValue = input[j];
\t\t\t\tif (currentValue >= n && currentValue < m) {
\t\t\t\t\tm = currentValue;
\t\t\t\t}
\t\t\t}

\t\t\t// Increase `delta` enough to advance the decoder's <n,i> state to <m,0>,
\t\t\t// but guard against overflow
\t\t\thandledCPCountPlusOne = handledCPCount + 1;
\t\t\tif (m - n > floor((maxInt - delta) / handledCPCountPlusOne)) {
\t\t\t\terror('overflow');
\t\t\t}

\t\t\tdelta += (m - n) * handledCPCountPlusOne;
\t\t\tn = m;

\t\t\tfor (j = 0; j < inputLength; ++j) {
\t\t\t\tcurrentValue = input[j];

\t\t\t\tif (currentValue < n && ++delta > maxInt) {
\t\t\t\t\terror('overflow');
\t\t\t\t}

\t\t\t\tif (currentValue == n) {
\t\t\t\t\t// Represent delta as a generalized variable-length integer
\t\t\t\t\tfor (q = delta, k = base; /* no condition */; k += base) {
\t\t\t\t\t\tt = k <= bias ? tMin : (k >= bias + tMax ? tMax : k - bias);
\t\t\t\t\t\tif (q < t) {
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t\tqMinusT = q - t;
\t\t\t\t\t\tbaseMinusT = base - t;
\t\t\t\t\t\toutput.push(
\t\t\t\t\t\t\tstringFromCharCode(digitToBasic(t + qMinusT % baseMinusT, 0))
\t\t\t\t\t\t);
\t\t\t\t\t\tq = floor(qMinusT / baseMinusT);
\t\t\t\t\t}

\t\t\t\t\toutput.push(stringFromCharCode(digitToBasic(q, 0)));
\t\t\t\t\tbias = adapt(delta, handledCPCountPlusOne, handledCPCount == basicLength);
\t\t\t\t\tdelta = 0;
\t\t\t\t\t++handledCPCount;
\t\t\t\t}
\t\t\t}

\t\t\t++delta;
\t\t\t++n;

\t\t}
\t\treturn output.join('');
\t}

\t/**
\t * Converts a Punycode string representing a domain name or an email address
\t * to Unicode. Only the Punycoded parts of the input will be converted, i.e.
\t * it doesn't matter if you call it on a string that has already been
\t * converted to Unicode.
\t * @memberOf punycode
\t * @param {String} input The Punycoded domain name or email address to
\t * convert to Unicode.
\t * @returns {String} The Unicode representation of the given Punycode
\t * string.
\t */
\tfunction toUnicode(input) {
\t\treturn mapDomain(input, function(string) {
\t\t\treturn regexPunycode.test(string)
\t\t\t\t? decode(string.slice(4).toLowerCase())
\t\t\t\t: string;
\t\t});
\t}

\t/**
\t * Converts a Unicode string representing a domain name or an email address to
\t * Punycode. Only the non-ASCII parts of the domain name will be converted,
\t * i.e. it doesn't matter if you call it with a domain that's already in
\t * ASCII.
\t * @memberOf punycode
\t * @param {String} input The domain name or email address to convert, as a
\t * Unicode string.
\t * @returns {String} The Punycode representation of the given domain name or
\t * email address.
\t */
\tfunction toASCII(input) {
\t\treturn mapDomain(input, function(string) {
\t\t\treturn regexNonASCII.test(string)
\t\t\t\t? 'xn--' + encode(string)
\t\t\t\t: string;
\t\t});
\t}

\t/*--------------------------------------------------------------------------*/

\t/** Define the public API */
\tpunycode = {
\t\t/**
\t\t * A string representing the current Punycode.js version number.
\t\t * @memberOf punycode
\t\t * @type String
\t\t */
\t\t'version': '1.4.1',
\t\t/**
\t\t * An object of methods to convert from JavaScript's internal character
\t\t * representation (UCS-2) to Unicode code points, and back.
\t\t * @see <https://mathiasbynens.be/notes/javascript-encoding>
\t\t * @memberOf punycode
\t\t * @type Object
\t\t */
\t\t'ucs2': {
\t\t\t'decode': ucs2decode,
\t\t\t'encode': ucs2encode
\t\t},
\t\t'decode': decode,
\t\t'encode': encode,
\t\t'toASCII': toASCII,
\t\t'toUnicode': toUnicode
\t};

\t/** Expose `punycode` */
\t// Some AMD build optimizers, like r.js, check for specific condition patterns
\t// like the following:
\tif (
\t\ttypeof define == 'function' &&
\t\ttypeof define.amd == 'object' &&
\t\tdefine.amd
\t) {
\t\tdefine('punycode', function() {
\t\t\treturn punycode;
\t\t});
\t} else if (freeExports && freeModule) {
\t\tif (module.exports == freeExports) {
\t\t\t// in Node.js, io.js, or RingoJS v0.8.0+
\t\t\tfreeModule.exports = punycode;
\t\t} else {
\t\t\t// in Narwhal or RingoJS v0.7.0-
\t\t\tfor (key in punycode) {
\t\t\t\tpunycode.hasOwnProperty(key) && (freeExports[key] = punycode[key]);
\t\t\t}
\t\t}
\t} else {
\t\t// in Rhino or a web browser
\t\troot.punycode = punycode;
\t}

}(this));
", "node_modules/punycode/punycode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/punycode/punycode.js");
    }
}
