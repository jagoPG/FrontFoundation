<?php

/* node_modules/jquery/src/core/ready-no-deferred.js */
class __TwigTemplate_867c4a5f61bf2e04fdec62ba3372b85119aed401d1593742ea7ec22cce52d005 extends Twig_Template
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
        $__internal_f8d14541fd8d7a802d5d8c66d3c0bab4e963ac4a75430eef5a5ba0a7a8117cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d14541fd8d7a802d5d8c66d3c0bab4e963ac4a75430eef5a5ba0a7a8117cdb->enter($__internal_f8d14541fd8d7a802d5d8c66d3c0bab4e963ac4a75430eef5a5ba0a7a8117cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/ready-no-deferred.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/document\"
], function( jQuery, document ) {

\"use strict\";

var readyCallbacks = [],
\twhenReady = function( fn ) {
\t\treadyCallbacks.push( fn );
\t},
\texecuteReady = function( fn ) {

\t\t// Prevent errors from freezing future callback execution (gh-1823)
\t\t// Not backwards-compatible as this does not execute sync
\t\twindow.setTimeout( function() {
\t\t\tfn.call( document, jQuery );
\t\t} );
\t};

jQuery.fn.ready = function( fn ) {
\twhenReady( fn );
\treturn this;
};

jQuery.extend( {

\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\tready: function( wait ) {

\t\t// Abort if there are pending holds or we're already ready
\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\treturn;
\t\t}

\t\t// Remember that the DOM is ready
\t\tjQuery.isReady = true;

\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\treturn;
\t\t}

\t\twhenReady = function( fn ) {
\t\t\treadyCallbacks.push( fn );

\t\t\twhile ( readyCallbacks.length ) {
\t\t\t\tfn = readyCallbacks.shift();
\t\t\t\tif ( jQuery.isFunction( fn ) ) {
\t\t\t\t\texecuteReady( fn );
\t\t\t\t}
\t\t\t}
\t\t};

\t\twhenReady();
\t}
} );

// Make jQuery.ready Promise consumable (gh-1778)
jQuery.ready.then = jQuery.fn.ready;

/**
 * The ready event handler and self cleanup method
 */
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed );
\twindow.removeEventListener( \"load\", completed );
\tjQuery.ready();
}

// Catch cases where \$(document).ready() is called
// after the browser event has already occurred.
// Support: IE9-10 only
// Older IE sometimes signals \"interactive\" too soon
if ( document.readyState === \"complete\" ||
\t( document.readyState !== \"loading\" && !document.documentElement.doScroll ) ) {

\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\twindow.setTimeout( jQuery.ready );

} else {

\t// Use the handy event callback
\tdocument.addEventListener( \"DOMContentLoaded\", completed );

\t// A fallback to window.onload, that will always work
\twindow.addEventListener( \"load\", completed );
}

} );
";
        
        $__internal_f8d14541fd8d7a802d5d8c66d3c0bab4e963ac4a75430eef5a5ba0a7a8117cdb->leave($__internal_f8d14541fd8d7a802d5d8c66d3c0bab4e963ac4a75430eef5a5ba0a7a8117cdb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/ready-no-deferred.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../var/document\"
], function( jQuery, document ) {

\"use strict\";

var readyCallbacks = [],
\twhenReady = function( fn ) {
\t\treadyCallbacks.push( fn );
\t},
\texecuteReady = function( fn ) {

\t\t// Prevent errors from freezing future callback execution (gh-1823)
\t\t// Not backwards-compatible as this does not execute sync
\t\twindow.setTimeout( function() {
\t\t\tfn.call( document, jQuery );
\t\t} );
\t};

jQuery.fn.ready = function( fn ) {
\twhenReady( fn );
\treturn this;
};

jQuery.extend( {

\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\tready: function( wait ) {

\t\t// Abort if there are pending holds or we're already ready
\t\tif ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
\t\t\treturn;
\t\t}

\t\t// Remember that the DOM is ready
\t\tjQuery.isReady = true;

\t\t// If a normal DOM Ready event fired, decrement, and wait if need be
\t\tif ( wait !== true && --jQuery.readyWait > 0 ) {
\t\t\treturn;
\t\t}

\t\twhenReady = function( fn ) {
\t\t\treadyCallbacks.push( fn );

\t\t\twhile ( readyCallbacks.length ) {
\t\t\t\tfn = readyCallbacks.shift();
\t\t\t\tif ( jQuery.isFunction( fn ) ) {
\t\t\t\t\texecuteReady( fn );
\t\t\t\t}
\t\t\t}
\t\t};

\t\twhenReady();
\t}
} );

// Make jQuery.ready Promise consumable (gh-1778)
jQuery.ready.then = jQuery.fn.ready;

/**
 * The ready event handler and self cleanup method
 */
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed );
\twindow.removeEventListener( \"load\", completed );
\tjQuery.ready();
}

// Catch cases where \$(document).ready() is called
// after the browser event has already occurred.
// Support: IE9-10 only
// Older IE sometimes signals \"interactive\" too soon
if ( document.readyState === \"complete\" ||
\t( document.readyState !== \"loading\" && !document.documentElement.doScroll ) ) {

\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\twindow.setTimeout( jQuery.ready );

} else {

\t// Use the handy event callback
\tdocument.addEventListener( \"DOMContentLoaded\", completed );

\t// A fallback to window.onload, that will always work
\twindow.addEventListener( \"load\", completed );
}

} );
", "node_modules/jquery/src/core/ready-no-deferred.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/ready-no-deferred.js");
    }
}
