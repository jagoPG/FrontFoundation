<?php

/* node_modules/parsleyjs/bower_components/jquery/src/callbacks.js */
class __TwigTemplate_d15a5208790426a9d406e8a42866f8e48252bf9bc6ff023769ac1b292ee51ec3 extends Twig_Template
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
        $__internal_ff87fbf7041a4fa414a3ce157fd5e61679da91f1a39ffa91fae763dab65f4f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff87fbf7041a4fa414a3ce157fd5e61679da91f1a39ffa91fae763dab65f4f4b->enter($__internal_ff87fbf7041a4fa414a3ce157fd5e61679da91f1a39ffa91fae763dab65f4f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/callbacks.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/rnotwhite\"
], function( jQuery, rnotwhite ) {

// String to Object options format cache
var optionsCache = {};

// Convert String-formatted options into Object-formatted ones and store in cache
function createOptions( options ) {
\tvar object = optionsCache[ options ] = {};
\tjQuery.each( options.match( rnotwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t});
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
\t\t( optionsCache[ options ] || createOptions( options ) ) :
\t\tjQuery.extend( {}, options );

\tvar // Last fire value (for non-forgettable lists)
\t\tmemory,
\t\t// Flag to know if list was already fired
\t\tfired,
\t\t// Flag to know if list is currently firing
\t\tfiring,
\t\t// First callback to fire (used internally by add and fireWith)
\t\tfiringStart,
\t\t// End of the loop when firing
\t\tfiringLength,
\t\t// Index of currently firing callback (modified by remove if needed)
\t\tfiringIndex,
\t\t// Actual callback list
\t\tlist = [],
\t\t// Stack of fire calls for repeatable lists
\t\tstack = !options.once && [],
\t\t// Fire callbacks
\t\tfire = function( data ) {
\t\t\tmemory = options.memory && data;
\t\t\tfired = true;
\t\t\tfiringIndex = firingStart || 0;
\t\t\tfiringStart = 0;
\t\t\tfiringLength = list.length;
\t\t\tfiring = true;
\t\t\tfor ( ; list && firingIndex < firingLength; firingIndex++ ) {
\t\t\t\tif ( list[ firingIndex ].apply( data[ 0 ], data[ 1 ] ) === false && options.stopOnFalse ) {
\t\t\t\t\tmemory = false; // To prevent further calls using add
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tfiring = false;
\t\t\tif ( list ) {
\t\t\t\tif ( stack ) {
\t\t\t\t\tif ( stack.length ) {
\t\t\t\t\t\tfire( stack.shift() );
\t\t\t\t\t}
\t\t\t\t} else if ( memory ) {
\t\t\t\t\tlist = [];
\t\t\t\t} else {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t// Actual Callbacks object
\t\tself = {
\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\t// First, we save the current length
\t\t\t\t\tvar start = list.length;
\t\t\t\t\t(function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tvar type = jQuery.type( arg );
\t\t\t\t\t\t\tif ( type === \"function\" ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && type !== \"string\" ) {
\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})( arguments );
\t\t\t\t\t// Do we need to add the callbacks to the
\t\t\t\t\t// current firing batch?
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tfiringLength = list.length;
\t\t\t\t\t// With memory, if we're not firing then
\t\t\t\t\t// we should call right away
\t\t\t\t\t} else if ( memory ) {
\t\t\t\t\t\tfiringStart = start;
\t\t\t\t\t\tfire( memory );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\t\tvar index;
\t\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\t\tlist.splice( index, 1 );
\t\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\t\t\tif ( index <= firingLength ) {
\t\t\t\t\t\t\t\t\tfiringLength--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ? jQuery.inArray( fn, list ) > -1 : !!( list && list.length );
\t\t\t},
\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tlist = [];
\t\t\t\tfiringLength = 0;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Have the list do nothing anymore
\t\t\tdisable: function() {
\t\t\t\tlist = stack = memory = undefined;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it disabled?
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},
\t\t\t// Lock the list in its current state
\t\t\tlock: function() {
\t\t\t\tstack = undefined;
\t\t\t\tif ( !memory ) {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it locked?
\t\t\tlocked: function() {
\t\t\t\treturn !stack;
\t\t\t},
\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( list && ( !fired || stack ) ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tstack.push( args );
\t\t\t\t\t} else {
\t\t\t\t\t\tfire( args );
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
});
";
        
        $__internal_ff87fbf7041a4fa414a3ce157fd5e61679da91f1a39ffa91fae763dab65f4f4b->leave($__internal_ff87fbf7041a4fa414a3ce157fd5e61679da91f1a39ffa91fae763dab65f4f4b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/callbacks.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/rnotwhite\"
], function( jQuery, rnotwhite ) {

// String to Object options format cache
var optionsCache = {};

// Convert String-formatted options into Object-formatted ones and store in cache
function createOptions( options ) {
\tvar object = optionsCache[ options ] = {};
\tjQuery.each( options.match( rnotwhite ) || [], function( _, flag ) {
\t\tobject[ flag ] = true;
\t});
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
\t\t( optionsCache[ options ] || createOptions( options ) ) :
\t\tjQuery.extend( {}, options );

\tvar // Last fire value (for non-forgettable lists)
\t\tmemory,
\t\t// Flag to know if list was already fired
\t\tfired,
\t\t// Flag to know if list is currently firing
\t\tfiring,
\t\t// First callback to fire (used internally by add and fireWith)
\t\tfiringStart,
\t\t// End of the loop when firing
\t\tfiringLength,
\t\t// Index of currently firing callback (modified by remove if needed)
\t\tfiringIndex,
\t\t// Actual callback list
\t\tlist = [],
\t\t// Stack of fire calls for repeatable lists
\t\tstack = !options.once && [],
\t\t// Fire callbacks
\t\tfire = function( data ) {
\t\t\tmemory = options.memory && data;
\t\t\tfired = true;
\t\t\tfiringIndex = firingStart || 0;
\t\t\tfiringStart = 0;
\t\t\tfiringLength = list.length;
\t\t\tfiring = true;
\t\t\tfor ( ; list && firingIndex < firingLength; firingIndex++ ) {
\t\t\t\tif ( list[ firingIndex ].apply( data[ 0 ], data[ 1 ] ) === false && options.stopOnFalse ) {
\t\t\t\t\tmemory = false; // To prevent further calls using add
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tfiring = false;
\t\t\tif ( list ) {
\t\t\t\tif ( stack ) {
\t\t\t\t\tif ( stack.length ) {
\t\t\t\t\t\tfire( stack.shift() );
\t\t\t\t\t}
\t\t\t\t} else if ( memory ) {
\t\t\t\t\tlist = [];
\t\t\t\t} else {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t// Actual Callbacks object
\t\tself = {
\t\t\t// Add a callback or a collection of callbacks to the list
\t\t\tadd: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\t// First, we save the current length
\t\t\t\t\tvar start = list.length;
\t\t\t\t\t(function add( args ) {
\t\t\t\t\t\tjQuery.each( args, function( _, arg ) {
\t\t\t\t\t\t\tvar type = jQuery.type( arg );
\t\t\t\t\t\t\tif ( type === \"function\" ) {
\t\t\t\t\t\t\t\tif ( !options.unique || !self.has( arg ) ) {
\t\t\t\t\t\t\t\t\tlist.push( arg );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else if ( arg && arg.length && type !== \"string\" ) {
\t\t\t\t\t\t\t\t// Inspect recursively
\t\t\t\t\t\t\t\tadd( arg );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t})( arguments );
\t\t\t\t\t// Do we need to add the callbacks to the
\t\t\t\t\t// current firing batch?
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tfiringLength = list.length;
\t\t\t\t\t// With memory, if we're not firing then
\t\t\t\t\t// we should call right away
\t\t\t\t\t} else if ( memory ) {
\t\t\t\t\t\tfiringStart = start;
\t\t\t\t\t\tfire( memory );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Remove a callback from the list
\t\t\tremove: function() {
\t\t\t\tif ( list ) {
\t\t\t\t\tjQuery.each( arguments, function( _, arg ) {
\t\t\t\t\t\tvar index;
\t\t\t\t\t\twhile ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
\t\t\t\t\t\t\tlist.splice( index, 1 );
\t\t\t\t\t\t\t// Handle firing indexes
\t\t\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\t\t\tif ( index <= firingLength ) {
\t\t\t\t\t\t\t\t\tfiringLength--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif ( index <= firingIndex ) {
\t\t\t\t\t\t\t\t\tfiringIndex--;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Check if a given callback is in the list.
\t\t\t// If no argument is given, return whether or not list has callbacks attached.
\t\t\thas: function( fn ) {
\t\t\t\treturn fn ? jQuery.inArray( fn, list ) > -1 : !!( list && list.length );
\t\t\t},
\t\t\t// Remove all callbacks from the list
\t\t\tempty: function() {
\t\t\t\tlist = [];
\t\t\t\tfiringLength = 0;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Have the list do nothing anymore
\t\t\tdisable: function() {
\t\t\t\tlist = stack = memory = undefined;
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it disabled?
\t\t\tdisabled: function() {
\t\t\t\treturn !list;
\t\t\t},
\t\t\t// Lock the list in its current state
\t\t\tlock: function() {
\t\t\t\tstack = undefined;
\t\t\t\tif ( !memory ) {
\t\t\t\t\tself.disable();
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t},
\t\t\t// Is it locked?
\t\t\tlocked: function() {
\t\t\t\treturn !stack;
\t\t\t},
\t\t\t// Call all callbacks with the given context and arguments
\t\t\tfireWith: function( context, args ) {
\t\t\t\tif ( list && ( !fired || stack ) ) {
\t\t\t\t\targs = args || [];
\t\t\t\t\targs = [ context, args.slice ? args.slice() : args ];
\t\t\t\t\tif ( firing ) {
\t\t\t\t\t\tstack.push( args );
\t\t\t\t\t} else {
\t\t\t\t\t\tfire( args );
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
});
", "node_modules/parsleyjs/bower_components/jquery/src/callbacks.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/callbacks.js");
    }
}
