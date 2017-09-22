<?php

/* node_modules/parsleyjs/bower_components/jquery/src/ajax/xhr.js */
class __TwigTemplate_8b5f982e8eaada84559f523fe368f195ac20fd9950d6e1fb752a9a2700dad739 extends Twig_Template
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
        $__internal_2d955807a8599e54ffa0a60a00b39032245f001ffda0f720398ad4cb56b41c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d955807a8599e54ffa0a60a00b39032245f001ffda0f720398ad4cb56b41c12->enter($__internal_2d955807a8599e54ffa0a60a00b39032245f001ffda0f720398ad4cb56b41c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/ajax/xhr.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../var/support\",
\t\"../ajax\"
], function( jQuery, support ) {

jQuery.ajaxSettings.xhr = function() {
\ttry {
\t\treturn new XMLHttpRequest();
\t} catch( e ) {}
};

var xhrId = 0,
\txhrCallbacks = {},
\txhrSuccessStatus = {
\t\t// file protocol always yields status code 0, assume 200
\t\t0: 200,
\t\t// Support: IE9
\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t1223: 204
\t},
\txhrSupported = jQuery.ajaxSettings.xhr();

// Support: IE9
// Open requests must be manually aborted on unload (#5280)
// See https://support.microsoft.com/kb/2856746 for more info
if ( window.attachEvent ) {
\twindow.attachEvent( \"onunload\", function() {
\t\tfor ( var key in xhrCallbacks ) {
\t\t\txhrCallbacks[ key ]();
\t\t}
\t});
}

support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport(function( options ) {
\tvar callback;

\t// Cross domain only allowed if supported through XMLHttpRequest
\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\treturn {
\t\t\tsend: function( headers, complete ) {
\t\t\t\tvar i,
\t\t\t\t\txhr = options.xhr(),
\t\t\t\t\tid = ++xhrId;

\t\t\t\txhr.open( options.type, options.url, options.async, options.username, options.password );

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
\t\t\t\tif ( !options.crossDomain && !headers[\"X-Requested-With\"] ) {
\t\t\t\t\theaders[\"X-Requested-With\"] = \"XMLHttpRequest\";
\t\t\t\t}

\t\t\t\t// Set headers
\t\t\t\tfor ( i in headers ) {
\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t}

\t\t\t\t// Callback
\t\t\t\tcallback = function( type ) {
\t\t\t\t\treturn function() {
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tdelete xhrCallbacks[ id ];
\t\t\t\t\t\t\tcallback = xhr.onload = xhr.onerror = null;

\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t} else if ( type === \"error\" ) {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\t// file: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText,
\t\t\t\t\t\t\t\t\t// Support: IE9
\t\t\t\t\t\t\t\t\t// Accessing binary-data responseText throws an exception
\t\t\t\t\t\t\t\t\t// (#11426)
\t\t\t\t\t\t\t\t\ttypeof xhr.responseText === \"string\" ? {
\t\t\t\t\t\t\t\t\t\ttext: xhr.responseText
\t\t\t\t\t\t\t\t\t} : undefined,
\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t\t// Listen to events
\t\t\t\txhr.onload = callback();
\t\t\t\txhr.onerror = callback(\"error\");

\t\t\t\t// Create the abort callback
\t\t\t\tcallback = xhrCallbacks[ id ] = callback(\"abort\");

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
});

});
";
        
        $__internal_2d955807a8599e54ffa0a60a00b39032245f001ffda0f720398ad4cb56b41c12->leave($__internal_2d955807a8599e54ffa0a60a00b39032245f001ffda0f720398ad4cb56b41c12_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/ajax/xhr.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../var/support\",
\t\"../ajax\"
], function( jQuery, support ) {

jQuery.ajaxSettings.xhr = function() {
\ttry {
\t\treturn new XMLHttpRequest();
\t} catch( e ) {}
};

var xhrId = 0,
\txhrCallbacks = {},
\txhrSuccessStatus = {
\t\t// file protocol always yields status code 0, assume 200
\t\t0: 200,
\t\t// Support: IE9
\t\t// #1450: sometimes IE returns 1223 when it should be 204
\t\t1223: 204
\t},
\txhrSupported = jQuery.ajaxSettings.xhr();

// Support: IE9
// Open requests must be manually aborted on unload (#5280)
// See https://support.microsoft.com/kb/2856746 for more info
if ( window.attachEvent ) {
\twindow.attachEvent( \"onunload\", function() {
\t\tfor ( var key in xhrCallbacks ) {
\t\t\txhrCallbacks[ key ]();
\t\t}
\t});
}

support.cors = !!xhrSupported && ( \"withCredentials\" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport(function( options ) {
\tvar callback;

\t// Cross domain only allowed if supported through XMLHttpRequest
\tif ( support.cors || xhrSupported && !options.crossDomain ) {
\t\treturn {
\t\t\tsend: function( headers, complete ) {
\t\t\t\tvar i,
\t\t\t\t\txhr = options.xhr(),
\t\t\t\t\tid = ++xhrId;

\t\t\t\txhr.open( options.type, options.url, options.async, options.username, options.password );

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
\t\t\t\tif ( !options.crossDomain && !headers[\"X-Requested-With\"] ) {
\t\t\t\t\theaders[\"X-Requested-With\"] = \"XMLHttpRequest\";
\t\t\t\t}

\t\t\t\t// Set headers
\t\t\t\tfor ( i in headers ) {
\t\t\t\t\txhr.setRequestHeader( i, headers[ i ] );
\t\t\t\t}

\t\t\t\t// Callback
\t\t\t\tcallback = function( type ) {
\t\t\t\t\treturn function() {
\t\t\t\t\t\tif ( callback ) {
\t\t\t\t\t\t\tdelete xhrCallbacks[ id ];
\t\t\t\t\t\t\tcallback = xhr.onload = xhr.onerror = null;

\t\t\t\t\t\t\tif ( type === \"abort\" ) {
\t\t\t\t\t\t\t\txhr.abort();
\t\t\t\t\t\t\t} else if ( type === \"error\" ) {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\t// file: protocol always yields status 0; see #8605, #14207
\t\t\t\t\t\t\t\t\txhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tcomplete(
\t\t\t\t\t\t\t\t\txhrSuccessStatus[ xhr.status ] || xhr.status,
\t\t\t\t\t\t\t\t\txhr.statusText,
\t\t\t\t\t\t\t\t\t// Support: IE9
\t\t\t\t\t\t\t\t\t// Accessing binary-data responseText throws an exception
\t\t\t\t\t\t\t\t\t// (#11426)
\t\t\t\t\t\t\t\t\ttypeof xhr.responseText === \"string\" ? {
\t\t\t\t\t\t\t\t\t\ttext: xhr.responseText
\t\t\t\t\t\t\t\t\t} : undefined,
\t\t\t\t\t\t\t\t\txhr.getAllResponseHeaders()
\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t};
\t\t\t\t};

\t\t\t\t// Listen to events
\t\t\t\txhr.onload = callback();
\t\t\t\txhr.onerror = callback(\"error\");

\t\t\t\t// Create the abort callback
\t\t\t\tcallback = xhrCallbacks[ id ] = callback(\"abort\");

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
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/ajax/xhr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/ajax/xhr.js");
    }
}
