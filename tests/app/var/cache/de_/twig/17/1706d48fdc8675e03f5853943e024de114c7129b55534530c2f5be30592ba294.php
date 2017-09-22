<?php

/* node_modules/parsleyjs/bower_components/jquery/src/deferred.js */
class __TwigTemplate_0fd8a2219546fd39d3cf4c6818c46eed2957201fb647ed2bd6d0d457d39981c0 extends Twig_Template
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
        $__internal_c91871dd70c25f0a93c3252245213c9d7d308e8ccbad8392d71bdfff7f982c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91871dd70c25f0a93c3252245213c9d7d308e8ccbad8392d71bdfff7f982c7c->enter($__internal_c91871dd70c25f0a93c3252245213c9d7d308e8ccbad8392d71bdfff7f982c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/deferred.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/slice\",
\t\"./callbacks\"
], function( jQuery, slice ) {

jQuery.extend({

\tDeferred: function( func ) {
\t\tvar tuples = [
\t\t\t\t// action, add listener, listener list, final state
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks(\"once memory\"), \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks(\"once memory\"), \"rejected\" ],
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks(\"memory\") ]
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
\t\t\t\tthen: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;
\t\t\t\t\treturn jQuery.Deferred(function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\t\t\t\t\tvar fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];
\t\t\t\t\t\t\t// deferred[ done | fail | progress ] for forwarding actions to newDefer
\t\t\t\t\t\t\tdeferred[ tuple[1] ](function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && jQuery.isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject )
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ]( this === promise ? newDefer.promise() : this, fn ? [ returned ] : arguments );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\tfns = null;
\t\t\t\t\t}).promise();
\t\t\t\t},
\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Keep pipe for back-compat
\t\tpromise.pipe = promise.then;

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 3 ];

\t\t\t// promise[ done | fail | progress ] = list.add
\t\t\tpromise[ tuple[1] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(function() {
\t\t\t\t\t// state = [ resolved | rejected ]
\t\t\t\t\tstate = stateString;

\t\t\t\t// [ reject_list | resolve_list ].disable; progress_list.lock
\t\t\t\t}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );
\t\t\t}

\t\t\t// deferred[ resolve | reject | notify ]
\t\t\tdeferred[ tuple[0] ] = function() {
\t\t\t\tdeferred[ tuple[0] + \"With\" ]( this === deferred ? promise : this, arguments );
\t\t\t\treturn this;
\t\t\t};
\t\t\tdeferred[ tuple[0] + \"With\" ] = list.fireWith;
\t\t});

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
\twhen: function( subordinate /* , ..., subordinateN */ ) {
\t\tvar i = 0,
\t\t\tresolveValues = slice.call( arguments ),
\t\t\tlength = resolveValues.length,

\t\t\t// the count of uncompleted subordinates
\t\t\tremaining = length !== 1 || ( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,

\t\t\t// the master Deferred. If resolveValues consist of only a single Deferred, just use that.
\t\t\tdeferred = remaining === 1 ? subordinate : jQuery.Deferred(),

\t\t\t// Update function for both resolve and progress values
\t\t\tupdateFunc = function( i, contexts, values ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tcontexts[ i ] = this;
\t\t\t\t\tvalues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( values === progressValues ) {
\t\t\t\t\t\tdeferred.notifyWith( contexts, values );
\t\t\t\t\t} else if ( !( --remaining ) ) {
\t\t\t\t\t\tdeferred.resolveWith( contexts, values );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t},

\t\t\tprogressValues, progressContexts, resolveContexts;

\t\t// Add listeners to Deferred subordinates; treat others as resolved
\t\tif ( length > 1 ) {
\t\t\tprogressValues = new Array( length );
\t\t\tprogressContexts = new Array( length );
\t\t\tresolveContexts = new Array( length );
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {
\t\t\t\t\tresolveValues[ i ].promise()
\t\t\t\t\t\t.done( updateFunc( i, resolveContexts, resolveValues ) )
\t\t\t\t\t\t.fail( deferred.reject )
\t\t\t\t\t\t.progress( updateFunc( i, progressContexts, progressValues ) );
\t\t\t\t} else {
\t\t\t\t\t--remaining;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// If we're not waiting on anything, resolve the master
\t\tif ( !remaining ) {
\t\t\tdeferred.resolveWith( resolveContexts, resolveValues );
\t\t}

\t\treturn deferred.promise();
\t}
});

return jQuery;
});
";
        
        $__internal_c91871dd70c25f0a93c3252245213c9d7d308e8ccbad8392d71bdfff7f982c7c->leave($__internal_c91871dd70c25f0a93c3252245213c9d7d308e8ccbad8392d71bdfff7f982c7c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/deferred.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/slice\",
\t\"./callbacks\"
], function( jQuery, slice ) {

jQuery.extend({

\tDeferred: function( func ) {
\t\tvar tuples = [
\t\t\t\t// action, add listener, listener list, final state
\t\t\t\t[ \"resolve\", \"done\", jQuery.Callbacks(\"once memory\"), \"resolved\" ],
\t\t\t\t[ \"reject\", \"fail\", jQuery.Callbacks(\"once memory\"), \"rejected\" ],
\t\t\t\t[ \"notify\", \"progress\", jQuery.Callbacks(\"memory\") ]
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
\t\t\t\tthen: function( /* fnDone, fnFail, fnProgress */ ) {
\t\t\t\t\tvar fns = arguments;
\t\t\t\t\treturn jQuery.Deferred(function( newDefer ) {
\t\t\t\t\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\t\t\t\t\tvar fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];
\t\t\t\t\t\t\t// deferred[ done | fail | progress ] for forwarding actions to newDefer
\t\t\t\t\t\t\tdeferred[ tuple[1] ](function() {
\t\t\t\t\t\t\t\tvar returned = fn && fn.apply( this, arguments );
\t\t\t\t\t\t\t\tif ( returned && jQuery.isFunction( returned.promise ) ) {
\t\t\t\t\t\t\t\t\treturned.promise()
\t\t\t\t\t\t\t\t\t\t.done( newDefer.resolve )
\t\t\t\t\t\t\t\t\t\t.fail( newDefer.reject )
\t\t\t\t\t\t\t\t\t\t.progress( newDefer.notify );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tnewDefer[ tuple[ 0 ] + \"With\" ]( this === promise ? newDefer.promise() : this, fn ? [ returned ] : arguments );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\tfns = null;
\t\t\t\t\t}).promise();
\t\t\t\t},
\t\t\t\t// Get a promise for this deferred
\t\t\t\t// If obj is provided, the promise aspect is added to the object
\t\t\t\tpromise: function( obj ) {
\t\t\t\t\treturn obj != null ? jQuery.extend( obj, promise ) : promise;
\t\t\t\t}
\t\t\t},
\t\t\tdeferred = {};

\t\t// Keep pipe for back-compat
\t\tpromise.pipe = promise.then;

\t\t// Add list-specific methods
\t\tjQuery.each( tuples, function( i, tuple ) {
\t\t\tvar list = tuple[ 2 ],
\t\t\t\tstateString = tuple[ 3 ];

\t\t\t// promise[ done | fail | progress ] = list.add
\t\t\tpromise[ tuple[1] ] = list.add;

\t\t\t// Handle state
\t\t\tif ( stateString ) {
\t\t\t\tlist.add(function() {
\t\t\t\t\t// state = [ resolved | rejected ]
\t\t\t\t\tstate = stateString;

\t\t\t\t// [ reject_list | resolve_list ].disable; progress_list.lock
\t\t\t\t}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );
\t\t\t}

\t\t\t// deferred[ resolve | reject | notify ]
\t\t\tdeferred[ tuple[0] ] = function() {
\t\t\t\tdeferred[ tuple[0] + \"With\" ]( this === deferred ? promise : this, arguments );
\t\t\t\treturn this;
\t\t\t};
\t\t\tdeferred[ tuple[0] + \"With\" ] = list.fireWith;
\t\t});

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
\twhen: function( subordinate /* , ..., subordinateN */ ) {
\t\tvar i = 0,
\t\t\tresolveValues = slice.call( arguments ),
\t\t\tlength = resolveValues.length,

\t\t\t// the count of uncompleted subordinates
\t\t\tremaining = length !== 1 || ( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,

\t\t\t// the master Deferred. If resolveValues consist of only a single Deferred, just use that.
\t\t\tdeferred = remaining === 1 ? subordinate : jQuery.Deferred(),

\t\t\t// Update function for both resolve and progress values
\t\t\tupdateFunc = function( i, contexts, values ) {
\t\t\t\treturn function( value ) {
\t\t\t\t\tcontexts[ i ] = this;
\t\t\t\t\tvalues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
\t\t\t\t\tif ( values === progressValues ) {
\t\t\t\t\t\tdeferred.notifyWith( contexts, values );
\t\t\t\t\t} else if ( !( --remaining ) ) {
\t\t\t\t\t\tdeferred.resolveWith( contexts, values );
\t\t\t\t\t}
\t\t\t\t};
\t\t\t},

\t\t\tprogressValues, progressContexts, resolveContexts;

\t\t// Add listeners to Deferred subordinates; treat others as resolved
\t\tif ( length > 1 ) {
\t\t\tprogressValues = new Array( length );
\t\t\tprogressContexts = new Array( length );
\t\t\tresolveContexts = new Array( length );
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {
\t\t\t\t\tresolveValues[ i ].promise()
\t\t\t\t\t\t.done( updateFunc( i, resolveContexts, resolveValues ) )
\t\t\t\t\t\t.fail( deferred.reject )
\t\t\t\t\t\t.progress( updateFunc( i, progressContexts, progressValues ) );
\t\t\t\t} else {
\t\t\t\t\t--remaining;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// If we're not waiting on anything, resolve the master
\t\tif ( !remaining ) {
\t\t\tdeferred.resolveWith( resolveContexts, resolveValues );
\t\t}

\t\treturn deferred.promise();
\t}
});

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/deferred.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/deferred.js");
    }
}
