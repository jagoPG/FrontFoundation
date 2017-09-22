<?php

/* node_modules/jquery/src/deferred.js */
class __TwigTemplate_696d670e2e3cfe42d327e05f3329e944dbf8e464cdeab8959d14ad27bf4bff55 extends Twig_Template
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
        $__internal_cca4717e43a5673515e34f02d017bbf9b8c23bc1af1affb14ec66da39a96615f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca4717e43a5673515e34f02d017bbf9b8c23bc1af1affb14ec66da39a96615f->enter($__internal_cca4717e43a5673515e34f02d017bbf9b8c23bc1af1affb14ec66da39a96615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/deferred.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./var/slice\",
\t\"./callbacks\"
], function( jQuery, slice ) {

\"use strict\";

function Identity( v ) {
\treturn v;
}
function Thrower( ex ) {
\tthrow ex;
}

function adoptValue( value, resolve, reject, noValue ) {
\tvar method;

\ttry {

\t\t// Check for promise aspect first to privilege synchronous behavior
\t\tif ( value && jQuery.isFunction( ( method = value.promise ) ) ) {
\t\t\tmethod.call( value ).done( resolve ).fail( reject );

\t\t// Other thenables
\t\t} else if ( value && jQuery.isFunction( ( method = value.then ) ) ) {
\t\t\tmethod.call( value, resolve, reject );

\t\t// Other non-thenables
\t\t} else {

\t\t\t// Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
\t\t\t// * false: [ value ].slice( 0 ) => resolve( value )
\t\t\t// * true: [ value ].slice( 1 ) => resolve()
\t\t\tresolve.apply( undefined, [ value ].slice( noValue ) );
\t\t}

\t// For Promises/A+, convert exceptions into rejections
\t// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
\t// Deferred#then to conditionally suppress rejection.
\t} catch ( value ) {

\t\t// Support: Android 4.0 only
\t\t// Strict mode functions invoked without .call/.apply get global-object context
\t\treject.apply( undefined, [ value ] );
\t}
}

jQuery.extend( {

\tDeferred: function( func ) {
\t\tvar tuples = [

\t\t\t\t// action, add listener, callbacks,
\t\t\t\t// ... .then handlers, argument index, [final state]
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks( \"memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"memory\" ), 2 ],
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 0, \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 1, \"rejected\" ]
\t\t\t],
\t\t\tstate = \"pending\",
\t\t\tpromise = {
\t\t\t\tstate: function() {
\t\t\t\t\treturn state;
\t\t\t\t},
\t\t\t\talways: function() {
\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\t\"catch\": function( fn ) {
\t\t\t\t\treturn promise.then( null, fn );
\t\t\t\t},

\t\t\t\t// Keep pipe for back-compat
\t\t\t\tpipe: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;

\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {

\t\t\t\t\t\t\t// Map tuples (progress, done, fail) to arguments (done, fail, progress)
\t\t\t\t\t\t\tvar fn = jQuery.isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

\t\t\t\t\t\t\t// deferred.progress(function() { bind to newDefer or newDefer.notify })
\t\t\t\t\t\t\t// deferred.done(function() { bind to newDefer or newDefer.resolve })
\t\t\t\t\t\t\t// deferred.fail(function() { bind to newDefer or newDefer.reject })
\t\t\t\t\t\t\tdeferred[ tuple[ 1 ] ]( function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && jQuery.isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify )
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ](
\t\t\t\t\t\t\t\t\t\tthis,
\t\t\t\t\t\t\t\t\t\tfn ? [ returned ] : arguments
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t} );
\t\t\t\t\t\tfns = null;
\t\t\t\t\t} ).promise();
\t\t\t\t},
\t\t\t\tthen: function( onFulfilled, onRejected, onProgress ) {
\t\t\t\t\tvar maxDepth = 0;
\t\t\t\t\tfunction resolve( depth, deferred, handler, special ) {
\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\tvar that = this,
\t\t\t\t\t\t\t\targs = arguments,
\t\t\t\t\t\t\t\tmightThrow = function() {
\t\t\t\t\t\t\t\t\tvar returned, then;

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.3
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-59
\t\t\t\t\t\t\t\t\t// Ignore double-resolution attempts
\t\t\t\t\t\t\t\t\tif ( depth < maxDepth ) {
\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\treturned = handler.apply( that, args );

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.1
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-48
\t\t\t\t\t\t\t\t\tif ( returned === deferred.promise() ) {
\t\t\t\t\t\t\t\t\t\tthrow new TypeError( \"Thenable self-resolution\" );
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ sections 2.3.3.1, 3.5
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-54
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-75
\t\t\t\t\t\t\t\t\t// Retrieve `then` only once
\t\t\t\t\t\t\t\t\tthen = returned &&

\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.4
\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-64
\t\t\t\t\t\t\t\t\t\t// Only check objects and functions for thenability
\t\t\t\t\t\t\t\t\t\t( typeof returned === \"object\" ||
\t\t\t\t\t\t\t\t\t\t\ttypeof returned === \"function\" ) &&
\t\t\t\t\t\t\t\t\t\treturned.then;

\t\t\t\t\t\t\t\t\t// Handle a returned thenable
\t\t\t\t\t\t\t\t\tif ( jQuery.isFunction( then ) ) {

\t\t\t\t\t\t\t\t\t\t// Special processors (notify) just wait for resolution
\t\t\t\t\t\t\t\t\t\tif ( special ) {
\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special )
\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t// Normal processors (resolve) also hook into progress
\t\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t\t// ...and disregard older resolution values
\t\t\t\t\t\t\t\t\t\t\tmaxDepth++;

\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity,
\t\t\t\t\t\t\t\t\t\t\t\t\tdeferred.notifyWith )
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Handle all other returned values
\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\tif ( handler !== Identity ) {
\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\targs = [ returned ];
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// Process the value(s)
\t\t\t\t\t\t\t\t\t\t// Default process is resolve
\t\t\t\t\t\t\t\t\t\t( special || deferred.resolveWith )( that, args );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},

\t\t\t\t\t\t\t\t// Only normal processors (resolve) catch and reject exceptions
\t\t\t\t\t\t\t\tprocess = special ?
\t\t\t\t\t\t\t\t\tmightThrow :
\t\t\t\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\tmightThrow();
\t\t\t\t\t\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t\t\t\t\t\tif ( jQuery.Deferred.exceptionHook ) {
\t\t\t\t\t\t\t\t\t\t\t\tjQuery.Deferred.exceptionHook( e,
\t\t\t\t\t\t\t\t\t\t\t\t\tprocess.stackTrace );
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.4.1
\t\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-61
\t\t\t\t\t\t\t\t\t\t\t// Ignore post-resolution exceptions
\t\t\t\t\t\t\t\t\t\t\tif ( depth + 1 >= maxDepth ) {

\t\t\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\t\t\tif ( handler !== Thrower ) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\t\t\targs = [ e ];
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tdeferred.rejectWith( that, args );
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.1
\t\t\t\t\t\t\t// https://promisesaplus.com/#point-57
\t\t\t\t\t\t\t// Re-resolve promises immediately to dodge false rejection from
\t\t\t\t\t\t\t// subsequent errors
\t\t\t\t\t\t\tif ( depth ) {
\t\t\t\t\t\t\t\tprocess();
\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t// Call an optional hook to record the stack, in case of exception
\t\t\t\t\t\t\t\t// since it's otherwise lost when execution goes async
\t\t\t\t\t\t\t\tif ( jQuery.Deferred.getStackHook ) {
\t\t\t\t\t\t\t\t\tprocess.stackTrace = jQuery.Deferred.getStackHook();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\twindow.setTimeout( process );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t}

\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {

\t\t\t\t\t\t// progress_handlers.add( ... )
\t\t\t\t\t\ttuples[ 0 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tjQuery.isFunction( onProgress ) ?
\t\t\t\t\t\t\t\t\tonProgress :
\t\t\t\t\t\t\t\t\tIdentity,
\t\t\t\t\t\t\t\tnewDefer.notifyWith
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);

\t\t\t\t\t\t// fulfilled_handlers.add( ... )
\t\t\t\t\t\ttuples[ 1 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tjQuery.isFunction( onFulfilled ) ?
\t\t\t\t\t\t\t\t\tonFulfilled :
\t\t\t\t\t\t\t\t\tIdentity
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);

\t\t\t\t\t\t// rejected_handlers.add( ... )
\t\t\t\t\t\ttuples[ 2 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tjQuery.isFunction( onRejected ) ?
\t\t\t\t\t\t\t\t\tonRejected :
\t\t\t\t\t\t\t\t\tThrower
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);
\t\t\t\t\t} ).promise();
\t\t\t\t},

\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 5 ];

\t\t\t// promise.progress = list.add
\t\t\t// promise.done = list.add
\t\t\t// promise.fail = list.add
\t\t\tpromise[ tuple[ 1 ] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(
\t\t\t\t\tfunction() {

\t\t\t\t\t\t// state = \"resolved\" (i.e., fulfilled)
\t\t\t\t\t\t// state = \"rejected\"
\t\t\t\t\t\tstate = stateString;
\t\t\t\t\t},

\t\t\t\t\t// rejected_callbacks.disable
\t\t\t\t\t// fulfilled_callbacks.disable
\t\t\t\t\ttuples[ 3 - i ][ 2 ].disable,

\t\t\t\t\t// progress_callbacks.lock
\t\t\t\t\ttuples[ 0 ][ 2 ].lock
\t\t\t\t);
\t\t\t}

\t\t\t// progress_handlers.fire
\t\t\t// fulfilled_handlers.fire
\t\t\t// rejected_handlers.fire
\t\t\tlist.add( tuple[ 3 ].fire );

\t\t\t// deferred.notify = function() { deferred.notifyWith(...) }
\t\t\t// deferred.resolve = function() { deferred.resolveWith(...) }
\t\t\t// deferred.reject = function() { deferred.rejectWith(...) }
\t\t\tdeferred[ tuple[ 0 ] ] = function() {
\t\t\t\tdeferred[ tuple[ 0 ] + \"With\" ]( this === deferred ? undefined : this, arguments );
\t\t\t\treturn this;
\t\t\t};

\t\t\t// deferred.notifyWith = list.fireWith
\t\t\t// deferred.resolveWith = list.fireWith
\t\t\t// deferred.rejectWith = list.fireWith
\t\t\tdeferred[ tuple[ 0 ] + \"With\" ] = list.fireWith;
\t\t} );

\t\t// Make the deferred a promise
\t\tpromise.promise( deferred );

\t\t// Call given func if any
\t\tif ( func ) {
\t\t\tfunc.call( deferred, deferred );
\t\t}

\t\t// All done!
\t\treturn deferred;
\t},

\t// Deferred helper
\twhen: function( singleValue ) {
\t\tvar

\t\t\t// count of uncompleted subordinates
\t\t\tremaining = arguments.length,

\t\t\t// count of unprocessed arguments
\t\t\ti = remaining,

\t\t\t// subordinate fulfillment data
\t\t\tresolveContexts = Array( i ),
\t\t\tresolveValues = slice.call( arguments ),

\t\t\t// the master Deferred
\t\t\tmaster = jQuery.Deferred(),

\t\t\t// subordinate callback factory
\t\t\tupdateFunc = function( i ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tresolveContexts[ i ] = this;
\t\t\t\t\tresolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( !( --remaining ) ) {
\t\t\t\t\t\tmaster.resolveWith( resolveContexts, resolveValues );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t};

\t\t// Single- and empty arguments are adopted like Promise.resolve
\t\tif ( remaining <= 1 ) {
\t\t\tadoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject,
\t\t\t\t!remaining );

\t\t\t// Use .then() to unwrap secondary thenables (cf. gh-3000)
\t\t\tif ( master.state() === \"pending\" ||
\t\t\t\tjQuery.isFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

\t\t\t\treturn master.then();
\t\t\t}
\t\t}

\t\t// Multiple arguments are aggregated like Promise.all array elements
\t\twhile ( i-- ) {
\t\t\tadoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
\t\t}

\t\treturn master.promise();
\t}
} );

return jQuery;
} );
";
        
        $__internal_cca4717e43a5673515e34f02d017bbf9b8c23bc1af1affb14ec66da39a96615f->leave($__internal_cca4717e43a5673515e34f02d017bbf9b8c23bc1af1affb14ec66da39a96615f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/deferred.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./var/slice\",
\t\"./callbacks\"
], function( jQuery, slice ) {

\"use strict\";

function Identity( v ) {
\treturn v;
}
function Thrower( ex ) {
\tthrow ex;
}

function adoptValue( value, resolve, reject, noValue ) {
\tvar method;

\ttry {

\t\t// Check for promise aspect first to privilege synchronous behavior
\t\tif ( value && jQuery.isFunction( ( method = value.promise ) ) ) {
\t\t\tmethod.call( value ).done( resolve ).fail( reject );

\t\t// Other thenables
\t\t} else if ( value && jQuery.isFunction( ( method = value.then ) ) ) {
\t\t\tmethod.call( value, resolve, reject );

\t\t// Other non-thenables
\t\t} else {

\t\t\t// Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
\t\t\t// * false: [ value ].slice( 0 ) => resolve( value )
\t\t\t// * true: [ value ].slice( 1 ) => resolve()
\t\t\tresolve.apply( undefined, [ value ].slice( noValue ) );
\t\t}

\t// For Promises/A+, convert exceptions into rejections
\t// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
\t// Deferred#then to conditionally suppress rejection.
\t} catch ( value ) {

\t\t// Support: Android 4.0 only
\t\t// Strict mode functions invoked without .call/.apply get global-object context
\t\treject.apply( undefined, [ value ] );
\t}
}

jQuery.extend( {

\tDeferred: function( func ) {
\t\tvar tuples = [

\t\t\t\t// action, add listener, callbacks,
\t\t\t\t// ... .then handlers, argument index, [final state]
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks( \"memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"memory\" ), 2 ],
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 0, \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks( \"once memory\" ),
\t\t\t\t\tjQuery.Callbacks( \"once memory\" ), 1, \"rejected\" ]
\t\t\t],
\t\t\tstate = \"pending\",
\t\t\tpromise = {
\t\t\t\tstate: function() {
\t\t\t\t\treturn state;
\t\t\t\t},
\t\t\t\talways: function() {
\t\t\t\t\tdeferred.done( arguments ).fail( arguments );
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\t\"catch\": function( fn ) {
\t\t\t\t\treturn promise.then( null, fn );
\t\t\t\t},

\t\t\t\t// Keep pipe for back-compat
\t\t\t\tpipe: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;

\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {

\t\t\t\t\t\t\t// Map tuples (progress, done, fail) to arguments (done, fail, progress)
\t\t\t\t\t\t\tvar fn = jQuery.isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

\t\t\t\t\t\t\t// deferred.progress(function() { bind to newDefer or newDefer.notify })
\t\t\t\t\t\t\t// deferred.done(function() { bind to newDefer or newDefer.resolve })
\t\t\t\t\t\t\t// deferred.fail(function() { bind to newDefer or newDefer.reject })
\t\t\t\t\t\t\tdeferred[ tuple[ 1 ] ]( function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && jQuery.isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify )
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ](
\t\t\t\t\t\t\t\t\t\tthis,
\t\t\t\t\t\t\t\t\t\tfn ? [ returned ] : arguments
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t} );
\t\t\t\t\t\tfns = null;
\t\t\t\t\t} ).promise();
\t\t\t\t},
\t\t\t\tthen: function( onFulfilled, onRejected, onProgress ) {
\t\t\t\t\tvar maxDepth = 0;
\t\t\t\t\tfunction resolve( depth, deferred, handler, special ) {
\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\tvar that = this,
\t\t\t\t\t\t\t\targs = arguments,
\t\t\t\t\t\t\t\tmightThrow = function() {
\t\t\t\t\t\t\t\t\tvar returned, then;

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.3
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-59
\t\t\t\t\t\t\t\t\t// Ignore double-resolution attempts
\t\t\t\t\t\t\t\t\tif ( depth < maxDepth ) {
\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\treturned = handler.apply( that, args );

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.1
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-48
\t\t\t\t\t\t\t\t\tif ( returned === deferred.promise() ) {
\t\t\t\t\t\t\t\t\t\tthrow new TypeError( \"Thenable self-resolution\" );
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Support: Promises/A+ sections 2.3.3.1, 3.5
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-54
\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-75
\t\t\t\t\t\t\t\t\t// Retrieve `then` only once
\t\t\t\t\t\t\t\t\tthen = returned &&

\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.4
\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-64
\t\t\t\t\t\t\t\t\t\t// Only check objects and functions for thenability
\t\t\t\t\t\t\t\t\t\t( typeof returned === \"object\" ||
\t\t\t\t\t\t\t\t\t\t\ttypeof returned === \"function\" ) &&
\t\t\t\t\t\t\t\t\t\treturned.then;

\t\t\t\t\t\t\t\t\t// Handle a returned thenable
\t\t\t\t\t\t\t\t\tif ( jQuery.isFunction( then ) ) {

\t\t\t\t\t\t\t\t\t\t// Special processors (notify) just wait for resolution
\t\t\t\t\t\t\t\t\t\tif ( special ) {
\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special )
\t\t\t\t\t\t\t\t\t\t\t);

\t\t\t\t\t\t\t\t\t\t// Normal processors (resolve) also hook into progress
\t\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t\t// ...and disregard older resolution values
\t\t\t\t\t\t\t\t\t\t\tmaxDepth++;

\t\t\t\t\t\t\t\t\t\t\tthen.call(
\t\t\t\t\t\t\t\t\t\t\t\treturned,
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Thrower, special ),
\t\t\t\t\t\t\t\t\t\t\t\tresolve( maxDepth, deferred, Identity,
\t\t\t\t\t\t\t\t\t\t\t\t\tdeferred.notifyWith )
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Handle all other returned values
\t\t\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\tif ( handler !== Identity ) {
\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\targs = [ returned ];
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// Process the value(s)
\t\t\t\t\t\t\t\t\t\t// Default process is resolve
\t\t\t\t\t\t\t\t\t\t( special || deferred.resolveWith )( that, args );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},

\t\t\t\t\t\t\t\t// Only normal processors (resolve) catch and reject exceptions
\t\t\t\t\t\t\t\tprocess = special ?
\t\t\t\t\t\t\t\t\tmightThrow :
\t\t\t\t\t\t\t\t\tfunction() {
\t\t\t\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\t\t\t\tmightThrow();
\t\t\t\t\t\t\t\t\t\t} catch ( e ) {

\t\t\t\t\t\t\t\t\t\t\tif ( jQuery.Deferred.exceptionHook ) {
\t\t\t\t\t\t\t\t\t\t\t\tjQuery.Deferred.exceptionHook( e,
\t\t\t\t\t\t\t\t\t\t\t\t\tprocess.stackTrace );
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.4.1
\t\t\t\t\t\t\t\t\t\t\t// https://promisesaplus.com/#point-61
\t\t\t\t\t\t\t\t\t\t\t// Ignore post-resolution exceptions
\t\t\t\t\t\t\t\t\t\t\tif ( depth + 1 >= maxDepth ) {

\t\t\t\t\t\t\t\t\t\t\t\t// Only substitute handlers pass on context
\t\t\t\t\t\t\t\t\t\t\t\t// and multiple values (non-spec behavior)
\t\t\t\t\t\t\t\t\t\t\t\tif ( handler !== Thrower ) {
\t\t\t\t\t\t\t\t\t\t\t\t\tthat = undefined;
\t\t\t\t\t\t\t\t\t\t\t\t\targs = [ e ];
\t\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\t\tdeferred.rejectWith( that, args );
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t// Support: Promises/A+ section 2.3.3.3.1
\t\t\t\t\t\t\t// https://promisesaplus.com/#point-57
\t\t\t\t\t\t\t// Re-resolve promises immediately to dodge false rejection from
\t\t\t\t\t\t\t// subsequent errors
\t\t\t\t\t\t\tif ( depth ) {
\t\t\t\t\t\t\t\tprocess();
\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t// Call an optional hook to record the stack, in case of exception
\t\t\t\t\t\t\t\t// since it's otherwise lost when execution goes async
\t\t\t\t\t\t\t\tif ( jQuery.Deferred.getStackHook ) {
\t\t\t\t\t\t\t\t\tprocess.stackTrace = jQuery.Deferred.getStackHook();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\twindow.setTimeout( process );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t}

\t\t\t\t\treturn jQuery.Deferred( function( newDefer ) {

\t\t\t\t\t\t// progress_handlers.add( ... )
\t\t\t\t\t\ttuples[ 0 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tjQuery.isFunction( onProgress ) ?
\t\t\t\t\t\t\t\t\tonProgress :
\t\t\t\t\t\t\t\t\tIdentity,
\t\t\t\t\t\t\t\tnewDefer.notifyWith
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);

\t\t\t\t\t\t// fulfilled_handlers.add( ... )
\t\t\t\t\t\ttuples[ 1 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tjQuery.isFunction( onFulfilled ) ?
\t\t\t\t\t\t\t\t\tonFulfilled :
\t\t\t\t\t\t\t\t\tIdentity
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);

\t\t\t\t\t\t// rejected_handlers.add( ... )
\t\t\t\t\t\ttuples[ 2 ][ 3 ].add(
\t\t\t\t\t\t\tresolve(
\t\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t\tnewDefer,
\t\t\t\t\t\t\t\tjQuery.isFunction( onRejected ) ?
\t\t\t\t\t\t\t\t\tonRejected :
\t\t\t\t\t\t\t\t\tThrower
\t\t\t\t\t\t\t)
\t\t\t\t\t\t);
\t\t\t\t\t} ).promise();
\t\t\t\t},

\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 5 ];

\t\t\t// promise.progress = list.add
\t\t\t// promise.done = list.add
\t\t\t// promise.fail = list.add
\t\t\tpromise[ tuple[ 1 ] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(
\t\t\t\t\tfunction() {

\t\t\t\t\t\t// state = \"resolved\" (i.e., fulfilled)
\t\t\t\t\t\t// state = \"rejected\"
\t\t\t\t\t\tstate = stateString;
\t\t\t\t\t},

\t\t\t\t\t// rejected_callbacks.disable
\t\t\t\t\t// fulfilled_callbacks.disable
\t\t\t\t\ttuples[ 3 - i ][ 2 ].disable,

\t\t\t\t\t// progress_callbacks.lock
\t\t\t\t\ttuples[ 0 ][ 2 ].lock
\t\t\t\t);
\t\t\t}

\t\t\t// progress_handlers.fire
\t\t\t// fulfilled_handlers.fire
\t\t\t// rejected_handlers.fire
\t\t\tlist.add( tuple[ 3 ].fire );

\t\t\t// deferred.notify = function() { deferred.notifyWith(...) }
\t\t\t// deferred.resolve = function() { deferred.resolveWith(...) }
\t\t\t// deferred.reject = function() { deferred.rejectWith(...) }
\t\t\tdeferred[ tuple[ 0 ] ] = function() {
\t\t\t\tdeferred[ tuple[ 0 ] + \"With\" ]( this === deferred ? undefined : this, arguments );
\t\t\t\treturn this;
\t\t\t};

\t\t\t// deferred.notifyWith = list.fireWith
\t\t\t// deferred.resolveWith = list.fireWith
\t\t\t// deferred.rejectWith = list.fireWith
\t\t\tdeferred[ tuple[ 0 ] + \"With\" ] = list.fireWith;
\t\t} );

\t\t// Make the deferred a promise
\t\tpromise.promise( deferred );

\t\t// Call given func if any
\t\tif ( func ) {
\t\t\tfunc.call( deferred, deferred );
\t\t}

\t\t// All done!
\t\treturn deferred;
\t},

\t// Deferred helper
\twhen: function( singleValue ) {
\t\tvar

\t\t\t// count of uncompleted subordinates
\t\t\tremaining = arguments.length,

\t\t\t// count of unprocessed arguments
\t\t\ti = remaining,

\t\t\t// subordinate fulfillment data
\t\t\tresolveContexts = Array( i ),
\t\t\tresolveValues = slice.call( arguments ),

\t\t\t// the master Deferred
\t\t\tmaster = jQuery.Deferred(),

\t\t\t// subordinate callback factory
\t\t\tupdateFunc = function( i ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tresolveContexts[ i ] = this;
\t\t\t\t\tresolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( !( --remaining ) ) {
\t\t\t\t\t\tmaster.resolveWith( resolveContexts, resolveValues );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t};

\t\t// Single- and empty arguments are adopted like Promise.resolve
\t\tif ( remaining <= 1 ) {
\t\t\tadoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject,
\t\t\t\t!remaining );

\t\t\t// Use .then() to unwrap secondary thenables (cf. gh-3000)
\t\t\tif ( master.state() === \"pending\" ||
\t\t\t\tjQuery.isFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

\t\t\t\treturn master.then();
\t\t\t}
\t\t}

\t\t// Multiple arguments are aggregated like Promise.all array elements
\t\twhile ( i-- ) {
\t\t\tadoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
\t\t}

\t\treturn master.promise();
\t}
} );

return jQuery;
} );
", "node_modules/jquery/src/deferred.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/deferred.js");
    }
}
