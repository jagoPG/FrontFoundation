<?php

/* node_modules/jquery/src/core/ready.js */
class __TwigTemplate_15cdec7e3c0c5ce44ebe8a7d90e71cd4a517913d633da5dbf6987d841ba47a1d extends Twig_Template
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
        $__internal_e8c20fb6146e8d65932ba3adc5da1091ec7a09d15852737b78be6f73b9ee5c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c20fb6146e8d65932ba3adc5da1091ec7a09d15852737b78be6f73b9ee5c5a->enter($__internal_e8c20fb6146e8d65932ba3adc5da1091ec7a09d15852737b78be6f73b9ee5c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/ready.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/document\",
\t\"../core/readyException\",
\t\"../deferred\"
], function( jQuery, document ) {

\"use strict\";

// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

\treadyList
\t\t.then( fn )

\t\t// Wrap jQuery.readyException in a function so that the lookup
\t\t// happens at the time of error handling instead of callback
\t\t// registration.
\t\t.catch( function( error ) {
\t\t\tjQuery.readyException( error );
\t\t} );

\treturn this;
};

jQuery.extend( {

\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Handle when the DOM is ready
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

\t\t// If there are functions bound, to execute
\t\treadyList.resolveWith( document, [ jQuery ] );
\t}
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed );
\twindow.removeEventListener( \"load\", completed );
\tjQuery.ready();
}

// Catch cases where \$(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
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
        
        $__internal_e8c20fb6146e8d65932ba3adc5da1091ec7a09d15852737b78be6f73b9ee5c5a->leave($__internal_e8c20fb6146e8d65932ba3adc5da1091ec7a09d15852737b78be6f73b9ee5c5a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/ready.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../var/document\",
\t\"../core/readyException\",
\t\"../deferred\"
], function( jQuery, document ) {

\"use strict\";

// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

\treadyList
\t\t.then( fn )

\t\t// Wrap jQuery.readyException in a function so that the lookup
\t\t// happens at the time of error handling instead of callback
\t\t// registration.
\t\t.catch( function( error ) {
\t\t\tjQuery.readyException( error );
\t\t} );

\treturn this;
};

jQuery.extend( {

\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Handle when the DOM is ready
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

\t\t// If there are functions bound, to execute
\t\treadyList.resolveWith( document, [ jQuery ] );
\t}
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed );
\twindow.removeEventListener( \"load\", completed );
\tjQuery.ready();
}

// Catch cases where \$(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
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
", "node_modules/jquery/src/core/ready.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/ready.js");
    }
}
