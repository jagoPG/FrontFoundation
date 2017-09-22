<?php

/* node_modules/fsevents/node_modules/verror/lib/verror.js */
class __TwigTemplate_1e74a1d83b8c713316757cdf864bab5ab7c259099964edc4f1944566803d914c extends Twig_Template
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
        $__internal_dfe646f74839c08738ad33ecdc076515585ffcb68f345a72fe89109369b982ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe646f74839c08738ad33ecdc076515585ffcb68f345a72fe89109369b982ee->enter($__internal_dfe646f74839c08738ad33ecdc076515585ffcb68f345a72fe89109369b982ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/lib/verror.js"));

        // line 1
        echo "/*
 * verror.js: richer JavaScript errors
 */

var mod_assert = require('assert');
var mod_util = require('util');

var mod_extsprintf = require('extsprintf');

/*
 * Public interface
 */
exports.VError = VError;
exports.WError = WError;
exports.MultiError = MultiError;

/*
 * Like JavaScript's built-in Error class, but supports a \"cause\" argument and a
 * printf-style message.  The cause argument can be null.
 */
function VError(options)
{
\tvar args, causedBy, ctor, tailmsg;

\tif (options instanceof Error || typeof (options) === 'object') {
\t\targs = Array.prototype.slice.call(arguments, 1);
\t} else {
\t\targs = Array.prototype.slice.call(arguments, 0);
\t\toptions = undefined;
\t}

\ttailmsg = args.length > 0 ?
\t    mod_extsprintf.sprintf.apply(null, args) : '';
\tthis.jse_shortmsg = tailmsg;
\tthis.jse_summary = tailmsg;

\tif (options) {
\t\tcausedBy = options.cause;

\t\tif (!causedBy || !(options.cause instanceof Error))
\t\t\tcausedBy = options;

\t\tif (causedBy && (causedBy instanceof Error)) {
\t\t\tthis.jse_cause = causedBy;
\t\t\tthis.jse_summary += ': ' + causedBy.message;
\t\t}
\t}

\tthis.message = this.jse_summary;
\tError.call(this, this.jse_summary);

\tif (Error.captureStackTrace) {
\t\tctor = options ? options.constructorOpt : undefined;
\t\tctor = ctor || arguments.callee;
\t\tError.captureStackTrace(this, ctor);
\t}
}

mod_util.inherits(VError, Error);
VError.prototype.name = 'VError';

VError.prototype.toString = function ve_toString()
{
\tvar str = (this.hasOwnProperty('name') && this.name ||
\t\tthis.constructor.name || this.constructor.prototype.name);
\tif (this.message)
\t\tstr += ': ' + this.message;

\treturn (str);
};

VError.prototype.cause = function ve_cause()
{
\treturn (this.jse_cause);
};


/*
 * Represents a collection of errors for the purpose of consumers that generally
 * only deal with one error.  Callers can extract the individual errors
 * contained in this object, but may also just treat it as a normal single
 * error, in which case a summary message will be printed.
 */
function MultiError(errors)
{
\tmod_assert.ok(errors.length > 0);
\tthis.ase_errors = errors;

\tVError.call(this, errors[0], 'first of %d error%s',
\t    errors.length, errors.length == 1 ? '' : 's');
}

mod_util.inherits(MultiError, VError);



/*
 * Like JavaScript's built-in Error class, but supports a \"cause\" argument which
 * is wrapped, not \"folded in\" as with VError.\tAccepts a printf-style message.
 * The cause argument can be null.
 */
function WError(options)
{
\tError.call(this);

\tvar args, cause, ctor;
\tif (typeof (options) === 'object') {
\t\targs = Array.prototype.slice.call(arguments, 1);
\t} else {
\t\targs = Array.prototype.slice.call(arguments, 0);
\t\toptions = undefined;
\t}

\tif (args.length > 0) {
\t\tthis.message = mod_extsprintf.sprintf.apply(null, args);
\t} else {
\t\tthis.message = '';
\t}

\tif (options) {
\t\tif (options instanceof Error) {
\t\t\tcause = options;
\t\t} else {
\t\t\tcause = options.cause;
\t\t\tctor = options.constructorOpt;
\t\t}
\t}

\tError.captureStackTrace(this, ctor || this.constructor);
\tif (cause)
\t\tthis.cause(cause);

}

mod_util.inherits(WError, Error);
WError.prototype.name = 'WError';


WError.prototype.toString = function we_toString()
{
\tvar str = (this.hasOwnProperty('name') && this.name ||
\t\tthis.constructor.name || this.constructor.prototype.name);
\tif (this.message)
\t\tstr += ': ' + this.message;
\tif (this.we_cause && this.we_cause.message)
\t\tstr += '; caused by ' + this.we_cause.toString();

\treturn (str);
};

WError.prototype.cause = function we_cause(c)
{
\tif (c instanceof Error)
\t\tthis.we_cause = c;

\treturn (this.we_cause);
};
";
        
        $__internal_dfe646f74839c08738ad33ecdc076515585ffcb68f345a72fe89109369b982ee->leave($__internal_dfe646f74839c08738ad33ecdc076515585ffcb68f345a72fe89109369b982ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/lib/verror.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * verror.js: richer JavaScript errors
 */

var mod_assert = require('assert');
var mod_util = require('util');

var mod_extsprintf = require('extsprintf');

/*
 * Public interface
 */
exports.VError = VError;
exports.WError = WError;
exports.MultiError = MultiError;

/*
 * Like JavaScript's built-in Error class, but supports a \"cause\" argument and a
 * printf-style message.  The cause argument can be null.
 */
function VError(options)
{
\tvar args, causedBy, ctor, tailmsg;

\tif (options instanceof Error || typeof (options) === 'object') {
\t\targs = Array.prototype.slice.call(arguments, 1);
\t} else {
\t\targs = Array.prototype.slice.call(arguments, 0);
\t\toptions = undefined;
\t}

\ttailmsg = args.length > 0 ?
\t    mod_extsprintf.sprintf.apply(null, args) : '';
\tthis.jse_shortmsg = tailmsg;
\tthis.jse_summary = tailmsg;

\tif (options) {
\t\tcausedBy = options.cause;

\t\tif (!causedBy || !(options.cause instanceof Error))
\t\t\tcausedBy = options;

\t\tif (causedBy && (causedBy instanceof Error)) {
\t\t\tthis.jse_cause = causedBy;
\t\t\tthis.jse_summary += ': ' + causedBy.message;
\t\t}
\t}

\tthis.message = this.jse_summary;
\tError.call(this, this.jse_summary);

\tif (Error.captureStackTrace) {
\t\tctor = options ? options.constructorOpt : undefined;
\t\tctor = ctor || arguments.callee;
\t\tError.captureStackTrace(this, ctor);
\t}
}

mod_util.inherits(VError, Error);
VError.prototype.name = 'VError';

VError.prototype.toString = function ve_toString()
{
\tvar str = (this.hasOwnProperty('name') && this.name ||
\t\tthis.constructor.name || this.constructor.prototype.name);
\tif (this.message)
\t\tstr += ': ' + this.message;

\treturn (str);
};

VError.prototype.cause = function ve_cause()
{
\treturn (this.jse_cause);
};


/*
 * Represents a collection of errors for the purpose of consumers that generally
 * only deal with one error.  Callers can extract the individual errors
 * contained in this object, but may also just treat it as a normal single
 * error, in which case a summary message will be printed.
 */
function MultiError(errors)
{
\tmod_assert.ok(errors.length > 0);
\tthis.ase_errors = errors;

\tVError.call(this, errors[0], 'first of %d error%s',
\t    errors.length, errors.length == 1 ? '' : 's');
}

mod_util.inherits(MultiError, VError);



/*
 * Like JavaScript's built-in Error class, but supports a \"cause\" argument which
 * is wrapped, not \"folded in\" as with VError.\tAccepts a printf-style message.
 * The cause argument can be null.
 */
function WError(options)
{
\tError.call(this);

\tvar args, cause, ctor;
\tif (typeof (options) === 'object') {
\t\targs = Array.prototype.slice.call(arguments, 1);
\t} else {
\t\targs = Array.prototype.slice.call(arguments, 0);
\t\toptions = undefined;
\t}

\tif (args.length > 0) {
\t\tthis.message = mod_extsprintf.sprintf.apply(null, args);
\t} else {
\t\tthis.message = '';
\t}

\tif (options) {
\t\tif (options instanceof Error) {
\t\t\tcause = options;
\t\t} else {
\t\t\tcause = options.cause;
\t\t\tctor = options.constructorOpt;
\t\t}
\t}

\tError.captureStackTrace(this, ctor || this.constructor);
\tif (cause)
\t\tthis.cause(cause);

}

mod_util.inherits(WError, Error);
WError.prototype.name = 'WError';


WError.prototype.toString = function we_toString()
{
\tvar str = (this.hasOwnProperty('name') && this.name ||
\t\tthis.constructor.name || this.constructor.prototype.name);
\tif (this.message)
\t\tstr += ': ' + this.message;
\tif (this.we_cause && this.we_cause.message)
\t\tstr += '; caused by ' + this.we_cause.toString();

\treturn (str);
};

WError.prototype.cause = function we_cause(c)
{
\tif (c instanceof Error)
\t\tthis.we_cause = c;

\treturn (this.we_cause);
};
", "node_modules/fsevents/node_modules/verror/lib/verror.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/lib/verror.js");
    }
}
