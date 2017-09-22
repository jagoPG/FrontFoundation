<?php

/* node_modules/verror/lib/verror.js */
class __TwigTemplate_4301935a139142563e74bb906cfc04377ce157b5542b9f3e9e1a7080ab28ba12 extends Twig_Template
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
        $__internal_93814bce0b6023bad28fd7cebfd7e96280f96c4840fdfbeac564554b136d0f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93814bce0b6023bad28fd7cebfd7e96280f96c4840fdfbeac564554b136d0f0e->enter($__internal_93814bce0b6023bad28fd7cebfd7e96280f96c4840fdfbeac564554b136d0f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/verror/lib/verror.js"));

        // line 1
        echo "/*
 * verror.js: richer JavaScript errors
 */

var mod_assertplus = require('assert-plus');
var mod_util = require('util');

var mod_extsprintf = require('extsprintf');
var mod_isError = require('core-util-is').isError;
var sprintf = mod_extsprintf.sprintf;

/*
 * Public interface
 */

/* So you can 'var VError = require('verror')' */
module.exports = VError;
/* For compatibility */
VError.VError = VError;
/* Other exported classes */
VError.SError = SError;
VError.WError = WError;
VError.MultiError = MultiError;

/*
 * Common function used to parse constructor arguments for VError, WError, and
 * SError.  Named arguments to this function:
 *
 *     strict\t\tforce strict interpretation of sprintf arguments, even
 *     \t\t\tif the options in \"argv\" don't say so
 *
 *     argv\t\terror's constructor arguments, which are to be
 *     \t\t\tinterpreted as described in README.md.  For quick
 *     \t\t\treference, \"argv\" has one of the following forms:
 *
 *          [ sprintf_args... ]           (argv[0] is a string)
 *          [ cause, sprintf_args... ]    (argv[0] is an Error)
 *          [ options, sprintf_args... ]  (argv[0] is an object)
 *
 * This function normalizes these forms, producing an object with the following
 * properties:
 *
 *    options           equivalent to \"options\" in third form.  This will never
 *    \t\t\tbe a direct reference to what the caller passed in
 *    \t\t\t(i.e., it may be a shallow copy), so it can be freely
 *    \t\t\tmodified.
 *
 *    shortmessage      result of sprintf(sprintf_args), taking options.strict
 *    \t\t\tinto account as described in README.md.
 */
function parseConstructorArguments(args)
{
\tvar argv, options, sprintf_args, shortmessage, k;

\tmod_assertplus.object(args, 'args');
\tmod_assertplus.bool(args.strict, 'args.strict');
\tmod_assertplus.array(args.argv, 'args.argv');
\targv = args.argv;

\t/*
\t * First, figure out which form of invocation we've been given.
\t */
\tif (argv.length === 0) {
\t\toptions = {};
\t\tsprintf_args = [];
\t} else if (mod_isError(argv[0])) {
\t\toptions = { 'cause': argv[0] };
\t\tsprintf_args = argv.slice(1);
\t} else if (typeof (argv[0]) === 'object') {
\t\toptions = {};
\t\tfor (k in argv[0]) {
\t\t\toptions[k] = argv[0][k];
\t\t}
\t\tsprintf_args = argv.slice(1);
\t} else {
\t\tmod_assertplus.string(argv[0],
\t\t    'first argument to VError, SError, or WError ' +
\t\t    'constructor must be a string, object, or Error');
\t\toptions = {};
\t\tsprintf_args = argv;
\t}

\t/*
\t * Now construct the error's message.
\t *
\t * extsprintf (which we invoke here with our caller's arguments in order
\t * to construct this Error's message) is strict in its interpretation of
\t * values to be processed by the \"%s\" specifier.  The value passed to
\t * extsprintf must actually be a string or something convertible to a
\t * String using .toString().  Passing other values (notably \"null\" and
\t * \"undefined\") is considered a programmer error.  The assumption is
\t * that if you actually want to print the string \"null\" or \"undefined\",
\t * then that's easy to do that when you're calling extsprintf; on the
\t * other hand, if you did NOT want that (i.e., there's actually a bug
\t * where the program assumes some variable is non-null and tries to
\t * print it, which might happen when constructing a packet or file in
\t * some specific format), then it's better to stop immediately than
\t * produce bogus output.
\t *
\t * However, sometimes the bug is only in the code calling VError, and a
\t * programmer might prefer to have the error message contain \"null\" or
\t * \"undefined\" rather than have the bug in the error path crash the
\t * program (making the first bug harder to identify).  For that reason,
\t * by default VError converts \"null\" or \"undefined\" arguments to their
\t * string representations and passes those to extsprintf.  Programmers
\t * desiring the strict behavior can use the SError class or pass the
\t * \"strict\" option to the VError constructor.
\t */
\tmod_assertplus.object(options);
\tif (!options.strict && !args.strict) {
\t\tsprintf_args = sprintf_args.map(function (a) {
\t\t\treturn (a === null ? 'null' :
\t\t\t    a === undefined ? 'undefined' : a);
\t\t});
\t}

\tif (sprintf_args.length === 0) {
\t\tshortmessage = '';
\t} else {
\t\tshortmessage = sprintf.apply(null, sprintf_args);
\t}

\treturn ({
\t    'options': options,
\t    'shortmessage': shortmessage
\t});
}

/*
 * See README.md for reference documentation.
 */
function VError()
{
\tvar args, obj, parsed, cause, ctor, message, k;

\targs = Array.prototype.slice.call(arguments, 0);

\t/*
\t * This is a regrettable pattern, but JavaScript's built-in Error class
\t * is defined to work this way, so we allow the constructor to be called
\t * without \"new\".
\t */
\tif (!(this instanceof VError)) {
\t\tobj = Object.create(VError.prototype);
\t\tVError.apply(obj, arguments);
\t\treturn (obj);
\t}

\t/*
\t * For convenience and backwards compatibility, we support several
\t * different calling forms.  Normalize them here.
\t */
\tparsed = parseConstructorArguments({
\t    'argv': args,
\t    'strict': false
\t});

\t/*
\t * If we've been given a name, apply it now.
\t */
\tif (parsed.options.name) {
\t\tmod_assertplus.string(parsed.options.name,
\t\t    'error\\'s \"name\" must be a string');
\t\tthis.name = parsed.options.name;
\t}

\t/*
\t * For debugging, we keep track of the original short message (attached
\t * this Error particularly) separately from the complete message (which
\t * includes the messages of our cause chain).
\t */
\tthis.jse_shortmsg = parsed.shortmessage;
\tmessage = parsed.shortmessage;

\t/*
\t * If we've been given a cause, record a reference to it and update our
\t * message appropriately.
\t */
\tcause = parsed.options.cause;
\tif (cause) {
\t\tmod_assertplus.ok(mod_isError(cause), 'cause is not an Error');
\t\tthis.jse_cause = cause;

\t\tif (!parsed.options.skipCauseMessage) {
\t\t\tmessage += ': ' + cause.message;
\t\t}
\t}

\t/*
\t * If we've been given an object with properties, shallow-copy that
\t * here.  We don't want to use a deep copy in case there are non-plain
\t * objects here, but we don't want to use the original object in case
\t * the caller modifies it later.
\t */
\tthis.jse_info = {};
\tif (parsed.options.info) {
\t\tfor (k in parsed.options.info) {
\t\t\tthis.jse_info[k] = parsed.options.info[k];
\t\t}
\t}

\tthis.message = message;
\tError.call(this, message);

\tif (Error.captureStackTrace) {
\t\tctor = parsed.options.constructorOpt || this.constructor;
\t\tError.captureStackTrace(this, ctor);
\t}

\treturn (this);
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

/*
 * This method is provided for compatibility.  New callers should use
 * VError.cause() instead.  That method also uses the saner `null` return value
 * when there is no cause.
 */
VError.prototype.cause = function ve_cause()
{
\tvar cause = VError.cause(this);
\treturn (cause === null ? undefined : cause);
};

/*
 * Static methods
 *
 * These class-level methods are provided so that callers can use them on
 * instances of Errors that are not VErrors.  New interfaces should be provided
 * only using static methods to eliminate the class of programming mistake where
 * people fail to check whether the Error object has the corresponding methods.
 */

VError.cause = function (err)
{
\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');
\treturn (mod_isError(err.jse_cause) ? err.jse_cause : null);
};

VError.info = function (err)
{
\tvar rv, cause, k;

\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');
\tcause = VError.cause(err);
\tif (cause !== null) {
\t\trv = VError.info(cause);
\t} else {
\t\trv = {};
\t}

\tif (typeof (err.jse_info) == 'object' && err.jse_info !== null) {
\t\tfor (k in err.jse_info) {
\t\t\trv[k] = err.jse_info[k];
\t\t}
\t}

\treturn (rv);
};

VError.findCauseByName = function (err, name)
{
\tvar cause;

\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');
\tmod_assertplus.string(name, 'name');
\tmod_assertplus.ok(name.length > 0, 'name cannot be empty');

\tfor (cause = err; cause !== null; cause = VError.cause(cause)) {
\t\tmod_assertplus.ok(mod_isError(cause));
\t\tif (cause.name == name) {
\t\t\treturn (cause);
\t\t}
\t}

\treturn (null);
};

VError.hasCauseWithName = function (err, name)
{
\treturn (VError.findCauseByName(err, name) !== null);
};

VError.fullStack = function (err)
{
\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');

\tvar cause = VError.cause(err);

\tif (cause) {
\t\treturn (err.stack + '\\ncaused by: ' + VError.fullStack(cause));
\t}

\treturn (err.stack);
};

VError.errorFromList = function (errors)
{
\tmod_assertplus.arrayOfObject(errors, 'errors');

\tif (errors.length === 0) {
\t\treturn (null);
\t}

\terrors.forEach(function (e) {
\t\tmod_assertplus.ok(mod_isError(e));
\t});

\tif (errors.length == 1) {
\t\treturn (errors[0]);
\t}

\treturn (new MultiError(errors));
};

VError.errorForEach = function (err, func)
{
\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');
\tmod_assertplus.func(func, 'func');

\tif (err instanceof MultiError) {
\t\terr.errors().forEach(function iterError(e) { func(e); });
\t} else {
\t\tfunc(err);
\t}
};


/*
 * SError is like VError, but stricter about types.  You cannot pass \"null\" or
 * \"undefined\" as string arguments to the formatter.
 */
function SError()
{
\tvar args, obj, parsed, options;

\targs = Array.prototype.slice.call(arguments, 0);
\tif (!(this instanceof SError)) {
\t\tobj = Object.create(SError.prototype);
\t\tSError.apply(obj, arguments);
\t\treturn (obj);
\t}

\tparsed = parseConstructorArguments({
\t    'argv': args,
\t    'strict': true
\t});

\toptions = parsed.options;
\tVError.call(this, options, '%s', parsed.shortmessage);

\treturn (this);
}

/*
 * We don't bother setting SError.prototype.name because once constructed,
 * SErrors are just like VErrors.
 */
mod_util.inherits(SError, VError);


/*
 * Represents a collection of errors for the purpose of consumers that generally
 * only deal with one error.  Callers can extract the individual errors
 * contained in this object, but may also just treat it as a normal single
 * error, in which case a summary message will be printed.
 */
function MultiError(errors)
{
\tmod_assertplus.array(errors, 'list of errors');
\tmod_assertplus.ok(errors.length > 0, 'must be at least one error');
\tthis.ase_errors = errors;

\tVError.call(this, {
\t    'cause': errors[0]
\t}, 'first of %d error%s', errors.length, errors.length == 1 ? '' : 's');
}

mod_util.inherits(MultiError, VError);
MultiError.prototype.name = 'MultiError';

MultiError.prototype.errors = function me_errors()
{
\treturn (this.ase_errors.slice(0));
};


/*
 * See README.md for reference details.
 */
function WError()
{
\tvar args, obj, parsed, options;

\targs = Array.prototype.slice.call(arguments, 0);
\tif (!(this instanceof WError)) {
\t\tobj = Object.create(WError.prototype);
\t\tWError.apply(obj, args);
\t\treturn (obj);
\t}

\tparsed = parseConstructorArguments({
\t    'argv': args,
\t    'strict': false
\t});

\toptions = parsed.options;
\toptions['skipCauseMessage'] = true;
\tVError.call(this, options, '%s', parsed.shortmessage);

\treturn (this);
}

mod_util.inherits(WError, VError);
WError.prototype.name = 'WError';

WError.prototype.toString = function we_toString()
{
\tvar str = (this.hasOwnProperty('name') && this.name ||
\t\tthis.constructor.name || this.constructor.prototype.name);
\tif (this.message)
\t\tstr += ': ' + this.message;
\tif (this.jse_cause && this.jse_cause.message)
\t\tstr += '; caused by ' + this.jse_cause.toString();

\treturn (str);
};

/*
 * For purely historical reasons, WError's cause() function allows you to set
 * the cause.
 */
WError.prototype.cause = function we_cause(c)
{
\tif (mod_isError(c))
\t\tthis.jse_cause = c;

\treturn (this.jse_cause);
};
";
        
        $__internal_93814bce0b6023bad28fd7cebfd7e96280f96c4840fdfbeac564554b136d0f0e->leave($__internal_93814bce0b6023bad28fd7cebfd7e96280f96c4840fdfbeac564554b136d0f0e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/verror/lib/verror.js";
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

var mod_assertplus = require('assert-plus');
var mod_util = require('util');

var mod_extsprintf = require('extsprintf');
var mod_isError = require('core-util-is').isError;
var sprintf = mod_extsprintf.sprintf;

/*
 * Public interface
 */

/* So you can 'var VError = require('verror')' */
module.exports = VError;
/* For compatibility */
VError.VError = VError;
/* Other exported classes */
VError.SError = SError;
VError.WError = WError;
VError.MultiError = MultiError;

/*
 * Common function used to parse constructor arguments for VError, WError, and
 * SError.  Named arguments to this function:
 *
 *     strict\t\tforce strict interpretation of sprintf arguments, even
 *     \t\t\tif the options in \"argv\" don't say so
 *
 *     argv\t\terror's constructor arguments, which are to be
 *     \t\t\tinterpreted as described in README.md.  For quick
 *     \t\t\treference, \"argv\" has one of the following forms:
 *
 *          [ sprintf_args... ]           (argv[0] is a string)
 *          [ cause, sprintf_args... ]    (argv[0] is an Error)
 *          [ options, sprintf_args... ]  (argv[0] is an object)
 *
 * This function normalizes these forms, producing an object with the following
 * properties:
 *
 *    options           equivalent to \"options\" in third form.  This will never
 *    \t\t\tbe a direct reference to what the caller passed in
 *    \t\t\t(i.e., it may be a shallow copy), so it can be freely
 *    \t\t\tmodified.
 *
 *    shortmessage      result of sprintf(sprintf_args), taking options.strict
 *    \t\t\tinto account as described in README.md.
 */
function parseConstructorArguments(args)
{
\tvar argv, options, sprintf_args, shortmessage, k;

\tmod_assertplus.object(args, 'args');
\tmod_assertplus.bool(args.strict, 'args.strict');
\tmod_assertplus.array(args.argv, 'args.argv');
\targv = args.argv;

\t/*
\t * First, figure out which form of invocation we've been given.
\t */
\tif (argv.length === 0) {
\t\toptions = {};
\t\tsprintf_args = [];
\t} else if (mod_isError(argv[0])) {
\t\toptions = { 'cause': argv[0] };
\t\tsprintf_args = argv.slice(1);
\t} else if (typeof (argv[0]) === 'object') {
\t\toptions = {};
\t\tfor (k in argv[0]) {
\t\t\toptions[k] = argv[0][k];
\t\t}
\t\tsprintf_args = argv.slice(1);
\t} else {
\t\tmod_assertplus.string(argv[0],
\t\t    'first argument to VError, SError, or WError ' +
\t\t    'constructor must be a string, object, or Error');
\t\toptions = {};
\t\tsprintf_args = argv;
\t}

\t/*
\t * Now construct the error's message.
\t *
\t * extsprintf (which we invoke here with our caller's arguments in order
\t * to construct this Error's message) is strict in its interpretation of
\t * values to be processed by the \"%s\" specifier.  The value passed to
\t * extsprintf must actually be a string or something convertible to a
\t * String using .toString().  Passing other values (notably \"null\" and
\t * \"undefined\") is considered a programmer error.  The assumption is
\t * that if you actually want to print the string \"null\" or \"undefined\",
\t * then that's easy to do that when you're calling extsprintf; on the
\t * other hand, if you did NOT want that (i.e., there's actually a bug
\t * where the program assumes some variable is non-null and tries to
\t * print it, which might happen when constructing a packet or file in
\t * some specific format), then it's better to stop immediately than
\t * produce bogus output.
\t *
\t * However, sometimes the bug is only in the code calling VError, and a
\t * programmer might prefer to have the error message contain \"null\" or
\t * \"undefined\" rather than have the bug in the error path crash the
\t * program (making the first bug harder to identify).  For that reason,
\t * by default VError converts \"null\" or \"undefined\" arguments to their
\t * string representations and passes those to extsprintf.  Programmers
\t * desiring the strict behavior can use the SError class or pass the
\t * \"strict\" option to the VError constructor.
\t */
\tmod_assertplus.object(options);
\tif (!options.strict && !args.strict) {
\t\tsprintf_args = sprintf_args.map(function (a) {
\t\t\treturn (a === null ? 'null' :
\t\t\t    a === undefined ? 'undefined' : a);
\t\t});
\t}

\tif (sprintf_args.length === 0) {
\t\tshortmessage = '';
\t} else {
\t\tshortmessage = sprintf.apply(null, sprintf_args);
\t}

\treturn ({
\t    'options': options,
\t    'shortmessage': shortmessage
\t});
}

/*
 * See README.md for reference documentation.
 */
function VError()
{
\tvar args, obj, parsed, cause, ctor, message, k;

\targs = Array.prototype.slice.call(arguments, 0);

\t/*
\t * This is a regrettable pattern, but JavaScript's built-in Error class
\t * is defined to work this way, so we allow the constructor to be called
\t * without \"new\".
\t */
\tif (!(this instanceof VError)) {
\t\tobj = Object.create(VError.prototype);
\t\tVError.apply(obj, arguments);
\t\treturn (obj);
\t}

\t/*
\t * For convenience and backwards compatibility, we support several
\t * different calling forms.  Normalize them here.
\t */
\tparsed = parseConstructorArguments({
\t    'argv': args,
\t    'strict': false
\t});

\t/*
\t * If we've been given a name, apply it now.
\t */
\tif (parsed.options.name) {
\t\tmod_assertplus.string(parsed.options.name,
\t\t    'error\\'s \"name\" must be a string');
\t\tthis.name = parsed.options.name;
\t}

\t/*
\t * For debugging, we keep track of the original short message (attached
\t * this Error particularly) separately from the complete message (which
\t * includes the messages of our cause chain).
\t */
\tthis.jse_shortmsg = parsed.shortmessage;
\tmessage = parsed.shortmessage;

\t/*
\t * If we've been given a cause, record a reference to it and update our
\t * message appropriately.
\t */
\tcause = parsed.options.cause;
\tif (cause) {
\t\tmod_assertplus.ok(mod_isError(cause), 'cause is not an Error');
\t\tthis.jse_cause = cause;

\t\tif (!parsed.options.skipCauseMessage) {
\t\t\tmessage += ': ' + cause.message;
\t\t}
\t}

\t/*
\t * If we've been given an object with properties, shallow-copy that
\t * here.  We don't want to use a deep copy in case there are non-plain
\t * objects here, but we don't want to use the original object in case
\t * the caller modifies it later.
\t */
\tthis.jse_info = {};
\tif (parsed.options.info) {
\t\tfor (k in parsed.options.info) {
\t\t\tthis.jse_info[k] = parsed.options.info[k];
\t\t}
\t}

\tthis.message = message;
\tError.call(this, message);

\tif (Error.captureStackTrace) {
\t\tctor = parsed.options.constructorOpt || this.constructor;
\t\tError.captureStackTrace(this, ctor);
\t}

\treturn (this);
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

/*
 * This method is provided for compatibility.  New callers should use
 * VError.cause() instead.  That method also uses the saner `null` return value
 * when there is no cause.
 */
VError.prototype.cause = function ve_cause()
{
\tvar cause = VError.cause(this);
\treturn (cause === null ? undefined : cause);
};

/*
 * Static methods
 *
 * These class-level methods are provided so that callers can use them on
 * instances of Errors that are not VErrors.  New interfaces should be provided
 * only using static methods to eliminate the class of programming mistake where
 * people fail to check whether the Error object has the corresponding methods.
 */

VError.cause = function (err)
{
\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');
\treturn (mod_isError(err.jse_cause) ? err.jse_cause : null);
};

VError.info = function (err)
{
\tvar rv, cause, k;

\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');
\tcause = VError.cause(err);
\tif (cause !== null) {
\t\trv = VError.info(cause);
\t} else {
\t\trv = {};
\t}

\tif (typeof (err.jse_info) == 'object' && err.jse_info !== null) {
\t\tfor (k in err.jse_info) {
\t\t\trv[k] = err.jse_info[k];
\t\t}
\t}

\treturn (rv);
};

VError.findCauseByName = function (err, name)
{
\tvar cause;

\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');
\tmod_assertplus.string(name, 'name');
\tmod_assertplus.ok(name.length > 0, 'name cannot be empty');

\tfor (cause = err; cause !== null; cause = VError.cause(cause)) {
\t\tmod_assertplus.ok(mod_isError(cause));
\t\tif (cause.name == name) {
\t\t\treturn (cause);
\t\t}
\t}

\treturn (null);
};

VError.hasCauseWithName = function (err, name)
{
\treturn (VError.findCauseByName(err, name) !== null);
};

VError.fullStack = function (err)
{
\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');

\tvar cause = VError.cause(err);

\tif (cause) {
\t\treturn (err.stack + '\\ncaused by: ' + VError.fullStack(cause));
\t}

\treturn (err.stack);
};

VError.errorFromList = function (errors)
{
\tmod_assertplus.arrayOfObject(errors, 'errors');

\tif (errors.length === 0) {
\t\treturn (null);
\t}

\terrors.forEach(function (e) {
\t\tmod_assertplus.ok(mod_isError(e));
\t});

\tif (errors.length == 1) {
\t\treturn (errors[0]);
\t}

\treturn (new MultiError(errors));
};

VError.errorForEach = function (err, func)
{
\tmod_assertplus.ok(mod_isError(err), 'err must be an Error');
\tmod_assertplus.func(func, 'func');

\tif (err instanceof MultiError) {
\t\terr.errors().forEach(function iterError(e) { func(e); });
\t} else {
\t\tfunc(err);
\t}
};


/*
 * SError is like VError, but stricter about types.  You cannot pass \"null\" or
 * \"undefined\" as string arguments to the formatter.
 */
function SError()
{
\tvar args, obj, parsed, options;

\targs = Array.prototype.slice.call(arguments, 0);
\tif (!(this instanceof SError)) {
\t\tobj = Object.create(SError.prototype);
\t\tSError.apply(obj, arguments);
\t\treturn (obj);
\t}

\tparsed = parseConstructorArguments({
\t    'argv': args,
\t    'strict': true
\t});

\toptions = parsed.options;
\tVError.call(this, options, '%s', parsed.shortmessage);

\treturn (this);
}

/*
 * We don't bother setting SError.prototype.name because once constructed,
 * SErrors are just like VErrors.
 */
mod_util.inherits(SError, VError);


/*
 * Represents a collection of errors for the purpose of consumers that generally
 * only deal with one error.  Callers can extract the individual errors
 * contained in this object, but may also just treat it as a normal single
 * error, in which case a summary message will be printed.
 */
function MultiError(errors)
{
\tmod_assertplus.array(errors, 'list of errors');
\tmod_assertplus.ok(errors.length > 0, 'must be at least one error');
\tthis.ase_errors = errors;

\tVError.call(this, {
\t    'cause': errors[0]
\t}, 'first of %d error%s', errors.length, errors.length == 1 ? '' : 's');
}

mod_util.inherits(MultiError, VError);
MultiError.prototype.name = 'MultiError';

MultiError.prototype.errors = function me_errors()
{
\treturn (this.ase_errors.slice(0));
};


/*
 * See README.md for reference details.
 */
function WError()
{
\tvar args, obj, parsed, options;

\targs = Array.prototype.slice.call(arguments, 0);
\tif (!(this instanceof WError)) {
\t\tobj = Object.create(WError.prototype);
\t\tWError.apply(obj, args);
\t\treturn (obj);
\t}

\tparsed = parseConstructorArguments({
\t    'argv': args,
\t    'strict': false
\t});

\toptions = parsed.options;
\toptions['skipCauseMessage'] = true;
\tVError.call(this, options, '%s', parsed.shortmessage);

\treturn (this);
}

mod_util.inherits(WError, VError);
WError.prototype.name = 'WError';

WError.prototype.toString = function we_toString()
{
\tvar str = (this.hasOwnProperty('name') && this.name ||
\t\tthis.constructor.name || this.constructor.prototype.name);
\tif (this.message)
\t\tstr += ': ' + this.message;
\tif (this.jse_cause && this.jse_cause.message)
\t\tstr += '; caused by ' + this.jse_cause.toString();

\treturn (str);
};

/*
 * For purely historical reasons, WError's cause() function allows you to set
 * the cause.
 */
WError.prototype.cause = function we_cause(c)
{
\tif (mod_isError(c))
\t\tthis.jse_cause = c;

\treturn (this.jse_cause);
};
", "node_modules/verror/lib/verror.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/verror/lib/verror.js");
    }
}
