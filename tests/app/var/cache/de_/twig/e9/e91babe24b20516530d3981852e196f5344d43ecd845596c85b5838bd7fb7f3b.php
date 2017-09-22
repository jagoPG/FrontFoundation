<?php

/* node_modules/extsprintf/lib/extsprintf.js */
class __TwigTemplate_0c82e917f7fcbbd961285eb4afbdd8859dd4014e0eb3cbb8ba177c3f83dc02b1 extends Twig_Template
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
        $__internal_b57140cfb09fb7c61b511d9523411516aa3d0d738132c9ab44d92c4de834c3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57140cfb09fb7c61b511d9523411516aa3d0d738132c9ab44d92c4de834c3f3->enter($__internal_b57140cfb09fb7c61b511d9523411516aa3d0d738132c9ab44d92c4de834c3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/extsprintf/lib/extsprintf.js"));

        // line 1
        echo "/*
 * extsprintf.js: extended POSIX-style sprintf
 */

var mod_assert = require('assert');
var mod_util = require('util');

/*
 * Public interface
 */
exports.sprintf = jsSprintf;
exports.printf = jsPrintf;
exports.fprintf = jsFprintf;

/*
 * Stripped down version of s[n]printf(3c).  We make a best effort to throw an
 * exception when given a format string we don't understand, rather than
 * ignoring it, so that we won't break existing programs if/when we go implement
 * the rest of this.
 *
 * This implementation currently supports specifying
 *\t- field alignment ('-' flag),
 * \t- zero-pad ('0' flag)
 *\t- always show numeric sign ('+' flag),
 *\t- field width
 *\t- conversions for strings, decimal integers, and floats (numbers).
 *\t- argument size specifiers.  These are all accepted but ignored, since
 *\t  Javascript has no notion of the physical size of an argument.
 *
 * Everything else is currently unsupported, most notably precision, unsigned
 * numbers, non-decimal numbers, and characters.
 */
function jsSprintf(fmt)
{
\tvar regex = [
\t    '([^%]*)',\t\t\t\t/* normal text */
\t    '%',\t\t\t\t/* start of format */
\t    '([\\'\\\\-+ #0]*?)',\t\t\t/* flags (optional) */
\t    '([1-9]\\\\d*)?',\t\t\t/* width (optional) */
\t    '(\\\\.([1-9]\\\\d*))?',\t\t/* precision (optional) */
\t    '[lhjztL]*?',\t\t\t/* length mods (ignored) */
\t    '([diouxXfFeEgGaAcCsSp%jr])'\t/* conversion */
\t].join('');

\tvar re = new RegExp(regex);
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar flags, width, precision, conversion;
\tvar left, pad, sign, arg, match;
\tvar ret = '';
\tvar argn = 1;

\tmod_assert.equal('string', typeof (fmt));

\twhile ((match = re.exec(fmt)) !== null) {
\t\tret += match[1];
\t\tfmt = fmt.substring(match[0].length);

\t\tflags = match[2] || '';
\t\twidth = match[3] || 0;
\t\tprecision = match[4] || '';
\t\tconversion = match[6];
\t\tleft = false;
\t\tsign = false;
\t\tpad = ' ';

\t\tif (conversion == '%') {
\t\t\tret += '%';
\t\t\tcontinue;
\t\t}

\t\tif (args.length === 0)
\t\t\tthrow (new Error('too few args to sprintf'));

\t\targ = args.shift();
\t\targn++;

\t\tif (flags.match(/[\\' #]/))
\t\t\tthrow (new Error(
\t\t\t    'unsupported flags: ' + flags));

\t\tif (precision.length > 0)
\t\t\tthrow (new Error(
\t\t\t    'non-zero precision not supported'));

\t\tif (flags.match(/-/))
\t\t\tleft = true;

\t\tif (flags.match(/0/))
\t\t\tpad = '0';

\t\tif (flags.match(/\\+/))
\t\t\tsign = true;

\t\tswitch (conversion) {
\t\tcase 's':
\t\t\tif (arg === undefined || arg === null)
\t\t\t\tthrow (new Error('argument ' + argn +
\t\t\t\t    ': attempted to print undefined or null ' +
\t\t\t\t    'as a string'));
\t\t\tret += doPad(pad, width, left, arg.toString());
\t\t\tbreak;

\t\tcase 'd':
\t\t\targ = Math.floor(arg);
\t\t\t/*jsl:fallthru*/
\t\tcase 'f':
\t\t\tsign = sign && arg > 0 ? '+' : '';
\t\t\tret += sign + doPad(pad, width, left,
\t\t\t    arg.toString());
\t\t\tbreak;

\t\tcase 'x':
\t\t\tret += doPad(pad, width, left, arg.toString(16));
\t\t\tbreak;

\t\tcase 'j': /* non-standard */
\t\t\tif (width === 0)
\t\t\t\twidth = 10;
\t\t\tret += mod_util.inspect(arg, false, width);
\t\t\tbreak;

\t\tcase 'r': /* non-standard */
\t\t\tret += dumpException(arg);
\t\t\tbreak;

\t\tdefault:
\t\t\tthrow (new Error('unsupported conversion: ' +
\t\t\t    conversion));
\t\t}
\t}

\tret += fmt;
\treturn (ret);
}

function jsPrintf() {
\tvar args = Array.prototype.slice.call(arguments);
\targs.unshift(process.stdout);
\tjsFprintf.apply(null, args);
}

function jsFprintf(stream) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\treturn (stream.write(jsSprintf.apply(this, args)));
}

function doPad(chr, width, left, str)
{
\tvar ret = str;

\twhile (ret.length < width) {
\t\tif (left)
\t\t\tret += chr;
\t\telse
\t\t\tret = chr + ret;
\t}

\treturn (ret);
}

/*
 * This function dumps long stack traces for exceptions having a cause() method.
 * See node-verror for an example.
 */
function dumpException(ex)
{
\tvar ret;

\tif (!(ex instanceof Error))
\t\tthrow (new Error(jsSprintf('invalid type for %%r: %j', ex)));

\t/* Note that V8 prepends \"ex.stack\" with ex.toString(). */
\tret = 'EXCEPTION: ' + ex.constructor.name + ': ' + ex.stack;

\tif (ex.cause && typeof (ex.cause) === 'function') {
\t\tvar cex = ex.cause();
\t\tif (cex) {
\t\t\tret += '\\nCaused by: ' + dumpException(cex);
\t\t}
\t}

\treturn (ret);
}
";
        
        $__internal_b57140cfb09fb7c61b511d9523411516aa3d0d738132c9ab44d92c4de834c3f3->leave($__internal_b57140cfb09fb7c61b511d9523411516aa3d0d738132c9ab44d92c4de834c3f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/extsprintf/lib/extsprintf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * extsprintf.js: extended POSIX-style sprintf
 */

var mod_assert = require('assert');
var mod_util = require('util');

/*
 * Public interface
 */
exports.sprintf = jsSprintf;
exports.printf = jsPrintf;
exports.fprintf = jsFprintf;

/*
 * Stripped down version of s[n]printf(3c).  We make a best effort to throw an
 * exception when given a format string we don't understand, rather than
 * ignoring it, so that we won't break existing programs if/when we go implement
 * the rest of this.
 *
 * This implementation currently supports specifying
 *\t- field alignment ('-' flag),
 * \t- zero-pad ('0' flag)
 *\t- always show numeric sign ('+' flag),
 *\t- field width
 *\t- conversions for strings, decimal integers, and floats (numbers).
 *\t- argument size specifiers.  These are all accepted but ignored, since
 *\t  Javascript has no notion of the physical size of an argument.
 *
 * Everything else is currently unsupported, most notably precision, unsigned
 * numbers, non-decimal numbers, and characters.
 */
function jsSprintf(fmt)
{
\tvar regex = [
\t    '([^%]*)',\t\t\t\t/* normal text */
\t    '%',\t\t\t\t/* start of format */
\t    '([\\'\\\\-+ #0]*?)',\t\t\t/* flags (optional) */
\t    '([1-9]\\\\d*)?',\t\t\t/* width (optional) */
\t    '(\\\\.([1-9]\\\\d*))?',\t\t/* precision (optional) */
\t    '[lhjztL]*?',\t\t\t/* length mods (ignored) */
\t    '([diouxXfFeEgGaAcCsSp%jr])'\t/* conversion */
\t].join('');

\tvar re = new RegExp(regex);
\tvar args = Array.prototype.slice.call(arguments, 1);
\tvar flags, width, precision, conversion;
\tvar left, pad, sign, arg, match;
\tvar ret = '';
\tvar argn = 1;

\tmod_assert.equal('string', typeof (fmt));

\twhile ((match = re.exec(fmt)) !== null) {
\t\tret += match[1];
\t\tfmt = fmt.substring(match[0].length);

\t\tflags = match[2] || '';
\t\twidth = match[3] || 0;
\t\tprecision = match[4] || '';
\t\tconversion = match[6];
\t\tleft = false;
\t\tsign = false;
\t\tpad = ' ';

\t\tif (conversion == '%') {
\t\t\tret += '%';
\t\t\tcontinue;
\t\t}

\t\tif (args.length === 0)
\t\t\tthrow (new Error('too few args to sprintf'));

\t\targ = args.shift();
\t\targn++;

\t\tif (flags.match(/[\\' #]/))
\t\t\tthrow (new Error(
\t\t\t    'unsupported flags: ' + flags));

\t\tif (precision.length > 0)
\t\t\tthrow (new Error(
\t\t\t    'non-zero precision not supported'));

\t\tif (flags.match(/-/))
\t\t\tleft = true;

\t\tif (flags.match(/0/))
\t\t\tpad = '0';

\t\tif (flags.match(/\\+/))
\t\t\tsign = true;

\t\tswitch (conversion) {
\t\tcase 's':
\t\t\tif (arg === undefined || arg === null)
\t\t\t\tthrow (new Error('argument ' + argn +
\t\t\t\t    ': attempted to print undefined or null ' +
\t\t\t\t    'as a string'));
\t\t\tret += doPad(pad, width, left, arg.toString());
\t\t\tbreak;

\t\tcase 'd':
\t\t\targ = Math.floor(arg);
\t\t\t/*jsl:fallthru*/
\t\tcase 'f':
\t\t\tsign = sign && arg > 0 ? '+' : '';
\t\t\tret += sign + doPad(pad, width, left,
\t\t\t    arg.toString());
\t\t\tbreak;

\t\tcase 'x':
\t\t\tret += doPad(pad, width, left, arg.toString(16));
\t\t\tbreak;

\t\tcase 'j': /* non-standard */
\t\t\tif (width === 0)
\t\t\t\twidth = 10;
\t\t\tret += mod_util.inspect(arg, false, width);
\t\t\tbreak;

\t\tcase 'r': /* non-standard */
\t\t\tret += dumpException(arg);
\t\t\tbreak;

\t\tdefault:
\t\t\tthrow (new Error('unsupported conversion: ' +
\t\t\t    conversion));
\t\t}
\t}

\tret += fmt;
\treturn (ret);
}

function jsPrintf() {
\tvar args = Array.prototype.slice.call(arguments);
\targs.unshift(process.stdout);
\tjsFprintf.apply(null, args);
}

function jsFprintf(stream) {
\tvar args = Array.prototype.slice.call(arguments, 1);
\treturn (stream.write(jsSprintf.apply(this, args)));
}

function doPad(chr, width, left, str)
{
\tvar ret = str;

\twhile (ret.length < width) {
\t\tif (left)
\t\t\tret += chr;
\t\telse
\t\t\tret = chr + ret;
\t}

\treturn (ret);
}

/*
 * This function dumps long stack traces for exceptions having a cause() method.
 * See node-verror for an example.
 */
function dumpException(ex)
{
\tvar ret;

\tif (!(ex instanceof Error))
\t\tthrow (new Error(jsSprintf('invalid type for %%r: %j', ex)));

\t/* Note that V8 prepends \"ex.stack\" with ex.toString(). */
\tret = 'EXCEPTION: ' + ex.constructor.name + ': ' + ex.stack;

\tif (ex.cause && typeof (ex.cause) === 'function') {
\t\tvar cex = ex.cause();
\t\tif (cex) {
\t\t\tret += '\\nCaused by: ' + dumpException(cex);
\t\t}
\t}

\treturn (ret);
}
", "node_modules/extsprintf/lib/extsprintf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/extsprintf/lib/extsprintf.js");
    }
}
