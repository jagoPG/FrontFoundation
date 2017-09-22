<?php

/* node_modules/filesize/lib/filesize.js */
class __TwigTemplate_1e26d613b758dc17550fbb09feae2076056f5d8309c549134a5f4a9fdff4bba7 extends Twig_Template
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
        $__internal_30a486cd258f434b7f6b638dc88c4e96869f5bfe29d2a3684223ed6db6173a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a486cd258f434b7f6b638dc88c4e96869f5bfe29d2a3684223ed6db6173a92->enter($__internal_30a486cd258f434b7f6b638dc88c4e96869f5bfe29d2a3684223ed6db6173a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/filesize/lib/filesize.js"));

        // line 1
        echo "\"use strict\";

/**
 * filesize
 *
 * @copyright 2017 Jason Mulligan <jason.mulligan@avoidwork.com>
 * @license BSD-3-Clause
 * @version 3.5.10
 */
(function (global) {
\tvar b = /^(b|B)\$/,
\t    symbol = {
\t\tiec: {
\t\t\tbits: [\"b\", \"Kib\", \"Mib\", \"Gib\", \"Tib\", \"Pib\", \"Eib\", \"Zib\", \"Yib\"],
\t\t\tbytes: [\"B\", \"KiB\", \"MiB\", \"GiB\", \"TiB\", \"PiB\", \"EiB\", \"ZiB\", \"YiB\"]
\t\t},
\t\tjedec: {
\t\t\tbits: [\"b\", \"Kb\", \"Mb\", \"Gb\", \"Tb\", \"Pb\", \"Eb\", \"Zb\", \"Yb\"],
\t\t\tbytes: [\"B\", \"KB\", \"MB\", \"GB\", \"TB\", \"PB\", \"EB\", \"ZB\", \"YB\"]
\t\t}
\t},
\t    fullform = {
\t\tiec: [\"\", \"kibi\", \"mebi\", \"gibi\", \"tebi\", \"pebi\", \"exbi\", \"zebi\", \"yobi\"],
\t\tjedec: [\"\", \"kilo\", \"mega\", \"giga\", \"tera\", \"peta\", \"exa\", \"zetta\", \"yotta\"]
\t};

\t/**
  * filesize
  *
  * @method filesize
  * @param  {Mixed}   arg        String, Int or Float to transform
  * @param  {Object}  descriptor [Optional] Flags
  * @return {String}             Readable file size String
  */
\tfunction filesize(arg) {
\t\tvar descriptor = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

\t\tvar result = [],
\t\t    val = 0,
\t\t    e = void 0,
\t\t    base = void 0,
\t\t    bits = void 0,
\t\t    ceil = void 0,
\t\t    full = void 0,
\t\t    fullforms = void 0,
\t\t    neg = void 0,
\t\t    num = void 0,
\t\t    output = void 0,
\t\t    round = void 0,
\t\t    unix = void 0,
\t\t    spacer = void 0,
\t\t    standard = void 0,
\t\t    symbols = void 0;

\t\tif (isNaN(arg)) {
\t\t\tthrow new Error(\"Invalid arguments\");
\t\t}

\t\tbits = descriptor.bits === true;
\t\tunix = descriptor.unix === true;
\t\tbase = descriptor.base || 2;
\t\tround = descriptor.round !== undefined ? descriptor.round : unix ? 1 : 2;
\t\tspacer = descriptor.spacer !== undefined ? descriptor.spacer : unix ? \"\" : \" \";
\t\tsymbols = descriptor.symbols || descriptor.suffixes || {};
\t\tstandard = base === 2 ? descriptor.standard || \"jedec\" : \"jedec\";
\t\toutput = descriptor.output || \"string\";
\t\tfull = descriptor.fullform === true;
\t\tfullforms = descriptor.fullforms instanceof Array ? descriptor.fullforms : [];
\t\te = descriptor.exponent !== undefined ? descriptor.exponent : -1;
\t\tnum = Number(arg);
\t\tneg = num < 0;
\t\tceil = base > 2 ? 1000 : 1024;

\t\t// Flipping a negative number to determine the size
\t\tif (neg) {
\t\t\tnum = -num;
\t\t}

\t\t// Determining the exponent
\t\tif (e === -1 || isNaN(e)) {
\t\t\te = Math.floor(Math.log(num) / Math.log(ceil));

\t\t\tif (e < 0) {
\t\t\t\te = 0;
\t\t\t}
\t\t}

\t\t// Exceeding supported length, time to reduce & multiply
\t\tif (e > 8) {
\t\t\te = 8;
\t\t}

\t\t// Zero is now a special case because bytes divide by 1
\t\tif (num === 0) {
\t\t\tresult[0] = 0;
\t\t\tresult[1] = unix ? \"\" : symbol[standard][bits ? \"bits\" : \"bytes\"][e];
\t\t} else {
\t\t\tval = num / (base === 2 ? Math.pow(2, e * 10) : Math.pow(1000, e));

\t\t\tif (bits) {
\t\t\t\tval = val * 8;

\t\t\t\tif (val >= ceil && e < 8) {
\t\t\t\t\tval = val / ceil;
\t\t\t\t\te++;
\t\t\t\t}
\t\t\t}

\t\t\tresult[0] = Number(val.toFixed(e > 0 ? round : 0));
\t\t\tresult[1] = base === 10 && e === 1 ? bits ? \"kb\" : \"kB\" : symbol[standard][bits ? \"bits\" : \"bytes\"][e];

\t\t\tif (unix) {
\t\t\t\tresult[1] = standard === \"jedec\" ? result[1].charAt(0) : e > 0 ? result[1].replace(/B\$/, \"\") : result[1];

\t\t\t\tif (b.test(result[1])) {
\t\t\t\t\tresult[0] = Math.floor(result[0]);
\t\t\t\t\tresult[1] = \"\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Decorating a 'diff'
\t\tif (neg) {
\t\t\tresult[0] = -result[0];
\t\t}

\t\t// Applying custom symbol
\t\tresult[1] = symbols[result[1]] || result[1];

\t\t// Returning Array, Object, or String (default)
\t\tif (output === \"array\") {
\t\t\treturn result;
\t\t}

\t\tif (output === \"exponent\") {
\t\t\treturn e;
\t\t}

\t\tif (output === \"object\") {
\t\t\treturn { value: result[0], suffix: result[1], symbol: result[1] };
\t\t}

\t\tif (full) {
\t\t\tresult[1] = fullforms[e] ? fullforms[e] : fullform[standard][e] + (bits ? \"bit\" : \"byte\") + (result[0] === 1 ? \"\" : \"s\");
\t\t}

\t\treturn result.join(spacer);
\t}

\t// Partial application for functional programming
\tfilesize.partial = function (opt) {
\t\treturn function (arg) {
\t\t\treturn filesize(arg, opt);
\t\t};
\t};

\t// CommonJS, AMD, script tag
\tif (typeof exports !== \"undefined\") {
\t\tmodule.exports = filesize;
\t} else if (typeof define === \"function\" && define.amd) {
\t\tdefine(function () {
\t\t\treturn filesize;
\t\t});
\t} else {
\t\tglobal.filesize = filesize;
\t}
})(typeof window !== \"undefined\" ? window : global);
";
        
        $__internal_30a486cd258f434b7f6b638dc88c4e96869f5bfe29d2a3684223ed6db6173a92->leave($__internal_30a486cd258f434b7f6b638dc88c4e96869f5bfe29d2a3684223ed6db6173a92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/filesize/lib/filesize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

/**
 * filesize
 *
 * @copyright 2017 Jason Mulligan <jason.mulligan@avoidwork.com>
 * @license BSD-3-Clause
 * @version 3.5.10
 */
(function (global) {
\tvar b = /^(b|B)\$/,
\t    symbol = {
\t\tiec: {
\t\t\tbits: [\"b\", \"Kib\", \"Mib\", \"Gib\", \"Tib\", \"Pib\", \"Eib\", \"Zib\", \"Yib\"],
\t\t\tbytes: [\"B\", \"KiB\", \"MiB\", \"GiB\", \"TiB\", \"PiB\", \"EiB\", \"ZiB\", \"YiB\"]
\t\t},
\t\tjedec: {
\t\t\tbits: [\"b\", \"Kb\", \"Mb\", \"Gb\", \"Tb\", \"Pb\", \"Eb\", \"Zb\", \"Yb\"],
\t\t\tbytes: [\"B\", \"KB\", \"MB\", \"GB\", \"TB\", \"PB\", \"EB\", \"ZB\", \"YB\"]
\t\t}
\t},
\t    fullform = {
\t\tiec: [\"\", \"kibi\", \"mebi\", \"gibi\", \"tebi\", \"pebi\", \"exbi\", \"zebi\", \"yobi\"],
\t\tjedec: [\"\", \"kilo\", \"mega\", \"giga\", \"tera\", \"peta\", \"exa\", \"zetta\", \"yotta\"]
\t};

\t/**
  * filesize
  *
  * @method filesize
  * @param  {Mixed}   arg        String, Int or Float to transform
  * @param  {Object}  descriptor [Optional] Flags
  * @return {String}             Readable file size String
  */
\tfunction filesize(arg) {
\t\tvar descriptor = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

\t\tvar result = [],
\t\t    val = 0,
\t\t    e = void 0,
\t\t    base = void 0,
\t\t    bits = void 0,
\t\t    ceil = void 0,
\t\t    full = void 0,
\t\t    fullforms = void 0,
\t\t    neg = void 0,
\t\t    num = void 0,
\t\t    output = void 0,
\t\t    round = void 0,
\t\t    unix = void 0,
\t\t    spacer = void 0,
\t\t    standard = void 0,
\t\t    symbols = void 0;

\t\tif (isNaN(arg)) {
\t\t\tthrow new Error(\"Invalid arguments\");
\t\t}

\t\tbits = descriptor.bits === true;
\t\tunix = descriptor.unix === true;
\t\tbase = descriptor.base || 2;
\t\tround = descriptor.round !== undefined ? descriptor.round : unix ? 1 : 2;
\t\tspacer = descriptor.spacer !== undefined ? descriptor.spacer : unix ? \"\" : \" \";
\t\tsymbols = descriptor.symbols || descriptor.suffixes || {};
\t\tstandard = base === 2 ? descriptor.standard || \"jedec\" : \"jedec\";
\t\toutput = descriptor.output || \"string\";
\t\tfull = descriptor.fullform === true;
\t\tfullforms = descriptor.fullforms instanceof Array ? descriptor.fullforms : [];
\t\te = descriptor.exponent !== undefined ? descriptor.exponent : -1;
\t\tnum = Number(arg);
\t\tneg = num < 0;
\t\tceil = base > 2 ? 1000 : 1024;

\t\t// Flipping a negative number to determine the size
\t\tif (neg) {
\t\t\tnum = -num;
\t\t}

\t\t// Determining the exponent
\t\tif (e === -1 || isNaN(e)) {
\t\t\te = Math.floor(Math.log(num) / Math.log(ceil));

\t\t\tif (e < 0) {
\t\t\t\te = 0;
\t\t\t}
\t\t}

\t\t// Exceeding supported length, time to reduce & multiply
\t\tif (e > 8) {
\t\t\te = 8;
\t\t}

\t\t// Zero is now a special case because bytes divide by 1
\t\tif (num === 0) {
\t\t\tresult[0] = 0;
\t\t\tresult[1] = unix ? \"\" : symbol[standard][bits ? \"bits\" : \"bytes\"][e];
\t\t} else {
\t\t\tval = num / (base === 2 ? Math.pow(2, e * 10) : Math.pow(1000, e));

\t\t\tif (bits) {
\t\t\t\tval = val * 8;

\t\t\t\tif (val >= ceil && e < 8) {
\t\t\t\t\tval = val / ceil;
\t\t\t\t\te++;
\t\t\t\t}
\t\t\t}

\t\t\tresult[0] = Number(val.toFixed(e > 0 ? round : 0));
\t\t\tresult[1] = base === 10 && e === 1 ? bits ? \"kb\" : \"kB\" : symbol[standard][bits ? \"bits\" : \"bytes\"][e];

\t\t\tif (unix) {
\t\t\t\tresult[1] = standard === \"jedec\" ? result[1].charAt(0) : e > 0 ? result[1].replace(/B\$/, \"\") : result[1];

\t\t\t\tif (b.test(result[1])) {
\t\t\t\t\tresult[0] = Math.floor(result[0]);
\t\t\t\t\tresult[1] = \"\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Decorating a 'diff'
\t\tif (neg) {
\t\t\tresult[0] = -result[0];
\t\t}

\t\t// Applying custom symbol
\t\tresult[1] = symbols[result[1]] || result[1];

\t\t// Returning Array, Object, or String (default)
\t\tif (output === \"array\") {
\t\t\treturn result;
\t\t}

\t\tif (output === \"exponent\") {
\t\t\treturn e;
\t\t}

\t\tif (output === \"object\") {
\t\t\treturn { value: result[0], suffix: result[1], symbol: result[1] };
\t\t}

\t\tif (full) {
\t\t\tresult[1] = fullforms[e] ? fullforms[e] : fullform[standard][e] + (bits ? \"bit\" : \"byte\") + (result[0] === 1 ? \"\" : \"s\");
\t\t}

\t\treturn result.join(spacer);
\t}

\t// Partial application for functional programming
\tfilesize.partial = function (opt) {
\t\treturn function (arg) {
\t\t\treturn filesize(arg, opt);
\t\t};
\t};

\t// CommonJS, AMD, script tag
\tif (typeof exports !== \"undefined\") {
\t\tmodule.exports = filesize;
\t} else if (typeof define === \"function\" && define.amd) {
\t\tdefine(function () {
\t\t\treturn filesize;
\t\t});
\t} else {
\t\tglobal.filesize = filesize;
\t}
})(typeof window !== \"undefined\" ? window : global);
", "node_modules/filesize/lib/filesize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/filesize/lib/filesize.js");
    }
}
