<?php

/* node_modules/jquery/src/callbacks.js */
class __TwigTemplate_294128c2ab52dc27d69e23af1a6b76c90b649cb04f2598e488dee1c123d9abf2 extends Twig_Template
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
        $__internal_7ac92c84ccac148dbdae3b7d1e25ac67e60ac0d7399abb6f2e446e6b838fc991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac92c84ccac148dbdae3b7d1e25ac67e60ac0d7399abb6f2e446e6b838fc991->enter($__internal_7ac92c84ccac148dbdae3b7d1e25ac67e60ac0d7399abb6f2e446e6b838fc991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/callbacks.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./var/rnothtmlwhite\"
], function( jQuery, rnothtmlwhite ) {

\"use strict\";

// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
\tvar object = {};
\tjQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t} );
\treturn object;
}

/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

\t// Convert options from String-formatted to Object-formatted if needed
\t// (we check in cache first)
\toptions = typeof options === \"string\" ?
\t\tcreateOptions( options ) :
\t\tjQuery.extend( {}, options );

\tvar // Flag to know if list is currently firing
\t\tfiring,

\t\t// Last fire value for non-forgettable lists
\t\tmemory,

\t\t// Flag to know if list was already fired
\t\tfired,

\t\t// Flag to prevent firing
\t\tlocked,

\t\t// Actual callback list
\t\tlist = [],

\t\t// Queue of execution data for repeatable lists
\t\tqueue = [],

\t\t// Index of currently firing callback (modified by add/remove as needed)
\t\tfiringIndex = -1,

\t\t// Fire callbacks
\t\tfire = function() {

\t\t\t// Enforce single-firing
\t\t\tlocked = locked || options.once;

\t\t\t// Execute callbacks for all pending executions,
\t\t\t// respecting firingIndex overrides and runtime changes
\t\t\tfired = firing = true;
\t\t\tfor ( ; queue.length; firingIndex = -1 ) {
\t\t\t\tmemory = queue.shift();
\t\t\t\twhile ( ++firingIndex < list.length ) {

\t\t\t\t\t// Run callback and check for early termination
\t\t\t\t\tif ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
\t\t\t\t\t\toptions.stopOnFalse ) {

\t\t\t\t\t\t// Jump to end and forget the data so .add doesn't re-fire
\t\t\t\t\t\tfiringIndex = list.length;
\t\t\t\t\t\tmemory = false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Forget the data if we're done with it
\t\t\tif ( !options.memory ) {
\t\t\t\tmemory = false;
\t\t\t}

\t\t\tfiring = false;

\t\t\t// Clean up if we're done firing for good
\t\t\tif ( locked ) {

\t\t\t\t// Keep an empty list if we have data for future add calls
\t\t\t\tif ( memory ) {
\t\t\t\t\tlist = [];

\t\t\t\t// Otherwise, this object is spent
\t\t\t\t} else {
\t\t\t\t\tlist = \"\";
\t\t\t\t}
\t\t\t}
\t\t},

\t\t// Actual Callbacks object
\t\tself = {

\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {

\t\t\t\t\t// If we have memory from a past run, we should fire after adding
\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfiringIndex = list.length - 1;
\t\t\t\t\t\tqueue.push( memory );
\t\t\t\t\t}

\t\t\t\t\t( function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tif ( jQuery.isFunction( arg ) ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && jQuery.type( arg ) !== \"string\" ) {

\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} );
\t\t\t\t\t} )( arguments );

\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\tvar index;
\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\tlist.splice( index, 1 );

\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ?
\t\t\t\t\tjQuery.inArray( fn, list ) > -1 :
\t\t\t\t\tlist.length > 0;
\t\t\t},

\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tlist = [];
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Disable .fire and .add
\t\t\t// Abort any current/pending executions
\t\t\t// Clear all callbacks and values
\t\t\tdisable: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tlist = memory = \"\";
\t\t\t\treturn this;
\t\t\t},
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},

\t\t\t// Disable .fire
\t\t\t// Also disable .add unless we have memory (since it would have no effect)
\t\t\t// Abort any pending executions
\t\t\tlock: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tif ( !memory && !firing ) {
\t\t\t\t\tlist = memory = \"\";
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\tlocked: function() {
\t\t\t\treturn !!locked;
\t\t\t},

\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( !locked ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tqueue.push( args );
\t\t\t\t\tif ( !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Call all the callbacks with the given arguments
\t\t\tfire: function() {
\t\t\t\tself.fireWith( this, arguments );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// To know if the callbacks have already been called at least once
\t\t\tfired: function() {
\t\t\t\treturn !!fired;
\t\t\t}
\t\t};

\treturn self;
};

return jQuery;
} );
";
        
        $__internal_7ac92c84ccac148dbdae3b7d1e25ac67e60ac0d7399abb6f2e446e6b838fc991->leave($__internal_7ac92c84ccac148dbdae3b7d1e25ac67e60ac0d7399abb6f2e446e6b838fc991_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/callbacks.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./var/rnothtmlwhite\"
], function( jQuery, rnothtmlwhite ) {

\"use strict\";

// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
\tvar object = {};
\tjQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t} );
\treturn object;
}

/*
 * Create a callback list using the following parameters:
 *
 *\toptions: an optional list of space-separated options that will change how
 *\t\t\tthe callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * \"fired\" multiple times.
 *
 * Possible options:
 *
 *\tonce:\t\t\twill ensure the callback list can only be fired once (like a Deferred)
 *
 *\tmemory:\t\t\twill keep track of previous values and will call any callback added
 *\t\t\t\t\tafter the list has been fired right away with the latest \"memorized\"
 *\t\t\t\t\tvalues (like a Deferred)
 *
 *\tunique:\t\t\twill ensure a callback can only be added once (no duplicate in the list)
 *
 *\tstopOnFalse:\tinterrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

\t// Convert options from String-formatted to Object-formatted if needed
\t// (we check in cache first)
\toptions = typeof options === \"string\" ?
\t\tcreateOptions( options ) :
\t\tjQuery.extend( {}, options );

\tvar // Flag to know if list is currently firing
\t\tfiring,

\t\t// Last fire value for non-forgettable lists
\t\tmemory,

\t\t// Flag to know if list was already fired
\t\tfired,

\t\t// Flag to prevent firing
\t\tlocked,

\t\t// Actual callback list
\t\tlist = [],

\t\t// Queue of execution data for repeatable lists
\t\tqueue = [],

\t\t// Index of currently firing callback (modified by add/remove as needed)
\t\tfiringIndex = -1,

\t\t// Fire callbacks
\t\tfire = function() {

\t\t\t// Enforce single-firing
\t\t\tlocked = locked || options.once;

\t\t\t// Execute callbacks for all pending executions,
\t\t\t// respecting firingIndex overrides and runtime changes
\t\t\tfired = firing = true;
\t\t\tfor ( ; queue.length; firingIndex = -1 ) {
\t\t\t\tmemory = queue.shift();
\t\t\t\twhile ( ++firingIndex < list.length ) {

\t\t\t\t\t// Run callback and check for early termination
\t\t\t\t\tif ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
\t\t\t\t\t\toptions.stopOnFalse ) {

\t\t\t\t\t\t// Jump to end and forget the data so .add doesn't re-fire
\t\t\t\t\t\tfiringIndex = list.length;
\t\t\t\t\t\tmemory = false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Forget the data if we're done with it
\t\t\tif ( !options.memory ) {
\t\t\t\tmemory = false;
\t\t\t}

\t\t\tfiring = false;

\t\t\t// Clean up if we're done firing for good
\t\t\tif ( locked ) {

\t\t\t\t// Keep an empty list if we have data for future add calls
\t\t\t\tif ( memory ) {
\t\t\t\t\tlist = [];

\t\t\t\t// Otherwise, this object is spent
\t\t\t\t} else {
\t\t\t\t\tlist = \"\";
\t\t\t\t}
\t\t\t}
\t\t},

\t\t// Actual Callbacks object
\t\tself = {

\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {

\t\t\t\t\t// If we have memory from a past run, we should fire after adding
\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfiringIndex = list.length - 1;
\t\t\t\t\t\tqueue.push( memory );
\t\t\t\t\t}

\t\t\t\t\t( function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tif ( jQuery.isFunction( arg ) ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && jQuery.type( arg ) !== \"string\" ) {

\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} );
\t\t\t\t\t} )( arguments );

\t\t\t\t\tif ( memory && !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\tvar index;
\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\tlist.splice( index, 1 );

\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ?
\t\t\t\t\tjQuery.inArray( fn, list ) > -1 :
\t\t\t\t\tlist.length > 0;
\t\t\t},

\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tlist = [];
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Disable .fire and .add
\t\t\t// Abort any current/pending executions
\t\t\t// Clear all callbacks and values
\t\t\tdisable: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tlist = memory = \"\";
\t\t\t\treturn this;
\t\t\t},
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},

\t\t\t// Disable .fire
\t\t\t// Also disable .add unless we have memory (since it would have no effect)
\t\t\t// Abort any pending executions
\t\t\tlock: function() {
\t\t\t\tlocked = queue = [];
\t\t\t\tif ( !memory && !firing ) {
\t\t\t\t\tlist = memory = \"\";
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\tlocked: function() {
\t\t\t\treturn !!locked;
\t\t\t},

\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( !locked ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tqueue.push( args );
\t\t\t\t\tif ( !firing ) {
\t\t\t\t\t\tfire();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},

\t\t\t// Call all the callbacks with the given arguments
\t\t\tfire: function() {
\t\t\t\tself.fireWith( this, arguments );
\t\t\t\treturn this;
\t\t\t},

\t\t\t// To know if the callbacks have already been called at least once
\t\t\tfired: function() {
\t\t\t\treturn !!fired;
\t\t\t}
\t\t};

\treturn self;
};

return jQuery;
} );
", "node_modules/jquery/src/callbacks.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/callbacks.js");
    }
}
