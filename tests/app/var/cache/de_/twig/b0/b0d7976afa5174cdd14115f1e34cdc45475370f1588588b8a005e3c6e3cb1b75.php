<?php

/* node_modules/parsleyjs/bower_components/jquery/src/core/ready.js */
class __TwigTemplate_12436c89c351ee7b2d6b5b164de1231a590d238a66926bba24d271d5279d889d extends Twig_Template
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
        $__internal_1d021a13bda18217771efe30ff0b54e554906530835efca46880c964bad317de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d021a13bda18217771efe30ff0b54e554906530835efca46880c964bad317de->enter($__internal_1d021a13bda18217771efe30ff0b54e554906530835efca46880c964bad317de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/core/ready.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../core/init\",
\t\"../deferred\"
], function( jQuery ) {

// The deferred used on DOM ready
var readyList;

jQuery.fn.ready = function( fn ) {
\t// Add the callback
\tjQuery.ready.promise().done( fn );

\treturn this;
};

jQuery.extend({
\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Hold (or release) the ready event
\tholdReady: function( hold ) {
\t\tif ( hold ) {
\t\t\tjQuery.readyWait++;
\t\t} else {
\t\t\tjQuery.ready( true );
\t\t}
\t},

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

\t\t// Trigger any bound ready events
\t\tif ( jQuery.fn.triggerHandler ) {
\t\t\tjQuery( document ).triggerHandler( \"ready\" );
\t\t\tjQuery( document ).off( \"ready\" );
\t\t}
\t}
});

/**
 * The ready event handler and self cleanup method
 */
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed, false );
\twindow.removeEventListener( \"load\", completed, false );
\tjQuery.ready();
}

jQuery.ready.promise = function( obj ) {
\tif ( !readyList ) {

\t\treadyList = jQuery.Deferred();

\t\t// Catch cases where \$(document).ready() is called after the browser event has already occurred.
\t\t// We once tried to use readyState \"interactive\" here, but it caused issues like the one
\t\t// discovered by ChrisS here: http://bugs.jquery.com/ticket/12282#comment:15
\t\tif ( document.readyState === \"complete\" ) {
\t\t\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\t\t\tsetTimeout( jQuery.ready );

\t\t} else {

\t\t\t// Use the handy event callback
\t\t\tdocument.addEventListener( \"DOMContentLoaded\", completed, false );

\t\t\t// A fallback to window.onload, that will always work
\t\t\twindow.addEventListener( \"load\", completed, false );
\t\t}
\t}
\treturn readyList.promise( obj );
};

// Kick off the DOM ready check even if the user does not
jQuery.ready.promise();

});
";
        
        $__internal_1d021a13bda18217771efe30ff0b54e554906530835efca46880c964bad317de->leave($__internal_1d021a13bda18217771efe30ff0b54e554906530835efca46880c964bad317de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/core/ready.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../core/init\",
\t\"../deferred\"
], function( jQuery ) {

// The deferred used on DOM ready
var readyList;

jQuery.fn.ready = function( fn ) {
\t// Add the callback
\tjQuery.ready.promise().done( fn );

\treturn this;
};

jQuery.extend({
\t// Is the DOM ready to be used? Set to true once it occurs.
\tisReady: false,

\t// A counter to track how many items to wait for before
\t// the ready event fires. See #6781
\treadyWait: 1,

\t// Hold (or release) the ready event
\tholdReady: function( hold ) {
\t\tif ( hold ) {
\t\t\tjQuery.readyWait++;
\t\t} else {
\t\t\tjQuery.ready( true );
\t\t}
\t},

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

\t\t// Trigger any bound ready events
\t\tif ( jQuery.fn.triggerHandler ) {
\t\t\tjQuery( document ).triggerHandler( \"ready\" );
\t\t\tjQuery( document ).off( \"ready\" );
\t\t}
\t}
});

/**
 * The ready event handler and self cleanup method
 */
function completed() {
\tdocument.removeEventListener( \"DOMContentLoaded\", completed, false );
\twindow.removeEventListener( \"load\", completed, false );
\tjQuery.ready();
}

jQuery.ready.promise = function( obj ) {
\tif ( !readyList ) {

\t\treadyList = jQuery.Deferred();

\t\t// Catch cases where \$(document).ready() is called after the browser event has already occurred.
\t\t// We once tried to use readyState \"interactive\" here, but it caused issues like the one
\t\t// discovered by ChrisS here: http://bugs.jquery.com/ticket/12282#comment:15
\t\tif ( document.readyState === \"complete\" ) {
\t\t\t// Handle it asynchronously to allow scripts the opportunity to delay ready
\t\t\tsetTimeout( jQuery.ready );

\t\t} else {

\t\t\t// Use the handy event callback
\t\t\tdocument.addEventListener( \"DOMContentLoaded\", completed, false );

\t\t\t// A fallback to window.onload, that will always work
\t\t\twindow.addEventListener( \"load\", completed, false );
\t\t}
\t}
\treturn readyList.promise( obj );
};

// Kick off the DOM ready check even if the user does not
jQuery.ready.promise();

});
", "node_modules/parsleyjs/bower_components/jquery/src/core/ready.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/core/ready.js");
    }
}
