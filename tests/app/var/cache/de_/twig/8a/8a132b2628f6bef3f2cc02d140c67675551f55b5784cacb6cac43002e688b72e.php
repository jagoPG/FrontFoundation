<?php

/* node_modules/jquery/src/ajax/xhr.js */
class __TwigTemplate_af7a67c169ef5a63f56ad38b3a8d0357e41b22364f5be35ff34f859f5cf0d3b4 extends Twig_Template
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
        $__internal_a6715d8e4d3dfcbcda024486d1379946523b2958d8b1c684ca3ff2a05de1ca79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6715d8e4d3dfcbcda024486d1379946523b2958d8b1c684ca3ff2a05de1ca79->enter($__internal_a6715d8e4d3dfcbcda024486d1379946523b2958d8b1c684ca3ff2a05de1ca79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/ajax/xhr.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/support\",
\t\"../ajax\"
], function( jQuery, support ) {

\"use strict\";

jQuery.ajaxSettings.xhr = function() {
\ttry {
\t\treturn new window.XMLHttpRequest();
\t} catch ( e ) {}
};

var xhrSuccessStatus = {

\t\t// File protocol always yields status code 0, assume 200
\t\t0: 200,

\t\t// Support: IE <=9 only
\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t1223: 204
\t},
\txhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
\tvar callback, errorCallback;

\t// Cross domain only allowed if supported through XMLHttpRequest
\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\treturn {
\t\t\tsend: function( headers, complete ) {
\t\t\t\tvar i,
\t\t\t\t\txhr = options.xhr();

\t\t\t\txhr.open(
\t\t\t\t\toptions.type,
\t\t\t\t\toptions.url,
\t\t\t\t\toptions.async,
\t\t\t\t\toptions.username,
\t\t\t\t\toptions.password
\t\t\t\t);

\t\t\t\t// Apply custom fields if provided
\t\t\t\tif ( options.xhrFields ) {
\t\t\t\t\tfor ( i in options.xhrFields ) {
\t\t\t\t\t\txhr[ i ] = options.xhrFields[ i ];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Override mime type if needed
\t\t\t\tif ( options.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\txhr.overrideMimeType( options.mimeType );
\t\t\t\t}

\t\t\t\t// X-Requested-With header
\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\tif ( !options.crossDomain && !headers[ \"X-Requested-With\" ] ) {
\t\t\t\t\theaders[ \"X-Requested-With\" ] = \"XMLHttpRequest\";
\t\t\t\t}

\t\t\t\t// Set headers
\t\t\t\tfor ( i in headers ) {
\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t}

\t\t\t\t// Callback
\t\t\t\tcallback = function( type ) {
\t\t\t\t\treturn function() {
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tcallback = errorCallback = xhr.onload =
\t\t\t\t\t\t\t\txhr.onerror = xhr.onabort = xhr.onreadystatechange = null;

\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t} else if ( type === \"error\" ) {

\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t// On a manual native abort, IE9 throws
\t\t\t\t\t\t\t\t// errors on any property access that is not readyState
\t\t\t\t\t\t\t\tif ( typeof xhr.status !== \"number\" ) {
\t\t\t\t\t\t\t\t\tcomplete( 0, \"error\" );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcomplete(

\t\t\t\t\t\t\t\t\t\t// File: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText,

\t\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t\t// IE9 has no XHR2 but throws on binary (trac-11426)
\t\t\t\t\t\t\t\t\t// For XHR2 non-text, let the caller handle it (gh-2498)
\t\t\t\t\t\t\t\t\t( xhr.responseType || \"text\" ) !== \"text\"  ||
\t\t\t\t\t\t\t\t\ttypeof xhr.responseText !== \"string\" ?
\t\t\t\t\t\t\t\t\t\t{ binary: xhr.response } :
\t\t\t\t\t\t\t\t\t\t{ text: xhr.responseText },
\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t\t// Listen to events
\t\t\t\txhr.onload = callback();
\t\t\t\terrorCallback = xhr.onerror = callback( \"error\" );

\t\t\t\t// Support: IE 9 only
\t\t\t\t// Use onreadystatechange to replace onabort
\t\t\t\t// to handle uncaught aborts
\t\t\t\tif ( xhr.onabort !== undefined ) {
\t\t\t\t\txhr.onabort = errorCallback;
\t\t\t\t} else {
\t\t\t\t\txhr.onreadystatechange = function() {

\t\t\t\t\t\t// Check readyState before timeout as it changes
\t\t\t\t\t\tif ( xhr.readyState === 4 ) {

\t\t\t\t\t\t\t// Allow onerror to be called first,
\t\t\t\t\t\t\t// but that will not handle a native abort
\t\t\t\t\t\t\t// Also, save errorCallback to a variable
\t\t\t\t\t\t\t// as xhr.onerror cannot be accessed
\t\t\t\t\t\t\twindow.setTimeout( function() {
\t\t\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\t\t\terrorCallback();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\t// Create the abort callback
\t\t\t\tcallback = callback( \"abort\" );

\t\t\t\ttry {

\t\t\t\t\t// Do send the request (this may raise an exception)
\t\t\t\t\txhr.send( options.hasContent && options.data || null );
\t\t\t\t} catch ( e ) {

\t\t\t\t\t// #14683: Only rethrow if this hasn't been notified as an error yet
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tthrow e;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},

\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
} );

} );
";
        
        $__internal_a6715d8e4d3dfcbcda024486d1379946523b2958d8b1c684ca3ff2a05de1ca79->leave($__internal_a6715d8e4d3dfcbcda024486d1379946523b2958d8b1c684ca3ff2a05de1ca79_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/ajax/xhr.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../var/support\",
\t\"../ajax\"
], function( jQuery, support ) {

\"use strict\";

jQuery.ajaxSettings.xhr = function() {
\ttry {
\t\treturn new window.XMLHttpRequest();
\t} catch ( e ) {}
};

var xhrSuccessStatus = {

\t\t// File protocol always yields status code 0, assume 200
\t\t0: 200,

\t\t// Support: IE <=9 only
\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t1223: 204
\t},
\txhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
\tvar callback, errorCallback;

\t// Cross domain only allowed if supported through XMLHttpRequest
\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\treturn {
\t\t\tsend: function( headers, complete ) {
\t\t\t\tvar i,
\t\t\t\t\txhr = options.xhr();

\t\t\t\txhr.open(
\t\t\t\t\toptions.type,
\t\t\t\t\toptions.url,
\t\t\t\t\toptions.async,
\t\t\t\t\toptions.username,
\t\t\t\t\toptions.password
\t\t\t\t);

\t\t\t\t// Apply custom fields if provided
\t\t\t\tif ( options.xhrFields ) {
\t\t\t\t\tfor ( i in options.xhrFields ) {
\t\t\t\t\t\txhr[ i ] = options.xhrFields[ i ];
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Override mime type if needed
\t\t\t\tif ( options.mimeType && xhr.overrideMimeType ) {
\t\t\t\t\txhr.overrideMimeType( options.mimeType );
\t\t\t\t}

\t\t\t\t// X-Requested-With header
\t\t\t\t// For cross-domain requests, seeing as conditions for a preflight are
\t\t\t\t// akin to a jigsaw puzzle, we simply never set it to be sure.
\t\t\t\t// (it can always be set on a per-request basis or even using ajaxSetup)
\t\t\t\t// For same-domain requests, won't change header if already provided.
\t\t\t\tif ( !options.crossDomain && !headers[ \"X-Requested-With\" ] ) {
\t\t\t\t\theaders[ \"X-Requested-With\" ] = \"XMLHttpRequest\";
\t\t\t\t}

\t\t\t\t// Set headers
\t\t\t\tfor ( i in headers ) {
\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t}

\t\t\t\t// Callback
\t\t\t\tcallback = function( type ) {
\t\t\t\t\treturn function() {
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tcallback = errorCallback = xhr.onload =
\t\t\t\t\t\t\t\txhr.onerror = xhr.onabort = xhr.onreadystatechange = null;

\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t} else if ( type === \"error\" ) {

\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t// On a manual native abort, IE9 throws
\t\t\t\t\t\t\t\t// errors on any property access that is not readyState
\t\t\t\t\t\t\t\tif ( typeof xhr.status !== \"number\" ) {
\t\t\t\t\t\t\t\t\tcomplete( 0, \"error\" );
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tcomplete(

\t\t\t\t\t\t\t\t\t\t// File: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText,

\t\t\t\t\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t\t\t\t\t// IE9 has no XHR2 but throws on binary (trac-11426)
\t\t\t\t\t\t\t\t\t// For XHR2 non-text, let the caller handle it (gh-2498)
\t\t\t\t\t\t\t\t\t( xhr.responseType || \"text\" ) !== \"text\"  ||
\t\t\t\t\t\t\t\t\ttypeof xhr.responseText !== \"string\" ?
\t\t\t\t\t\t\t\t\t\t{ binary: xhr.response } :
\t\t\t\t\t\t\t\t\t\t{ text: xhr.responseText },
\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t\t// Listen to events
\t\t\t\txhr.onload = callback();
\t\t\t\terrorCallback = xhr.onerror = callback( \"error\" );

\t\t\t\t// Support: IE 9 only
\t\t\t\t// Use onreadystatechange to replace onabort
\t\t\t\t// to handle uncaught aborts
\t\t\t\tif ( xhr.onabort !== undefined ) {
\t\t\t\t\txhr.onabort = errorCallback;
\t\t\t\t} else {
\t\t\t\t\txhr.onreadystatechange = function() {

\t\t\t\t\t\t// Check readyState before timeout as it changes
\t\t\t\t\t\tif ( xhr.readyState === 4 ) {

\t\t\t\t\t\t\t// Allow onerror to be called first,
\t\t\t\t\t\t\t// but that will not handle a native abort
\t\t\t\t\t\t\t// Also, save errorCallback to a variable
\t\t\t\t\t\t\t// as xhr.onerror cannot be accessed
\t\t\t\t\t\t\twindow.setTimeout( function() {
\t\t\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\t\t\terrorCallback();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} );
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\t// Create the abort callback
\t\t\t\tcallback = callback( \"abort\" );

\t\t\t\ttry {

\t\t\t\t\t// Do send the request (this may raise an exception)
\t\t\t\t\txhr.send( options.hasContent && options.data || null );
\t\t\t\t} catch ( e ) {

\t\t\t\t\t// #14683: Only rethrow if this hasn't been notified as an error yet
\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\tthrow e;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},

\t\t\tabort: function() {
\t\t\t\tif ( callback ) {
\t\t\t\t\tcallback();
\t\t\t\t}
\t\t\t}
\t\t};
\t}
} );

} );
", "node_modules/jquery/src/ajax/xhr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/ajax/xhr.js");
    }
}
