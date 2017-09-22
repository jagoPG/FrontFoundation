<?php

/* node_modules/jquery/src/ajax/jsonp.js */
class __TwigTemplate_7c7b159f5d89fcd0075a813bb55ed2a4e08c060b926de23d853bfec29e46ded0 extends Twig_Template
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
        $__internal_37b3e057daae949d783acf8312022b97d66eba4966188d0812473719391f8ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b3e057daae949d783acf8312022b97d66eba4966188d0812473719391f8ce5->enter($__internal_37b3e057daae949d783acf8312022b97d66eba4966188d0812473719391f8ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/ajax/jsonp.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"./var/nonce\",
\t\"./var/rquery\",
\t\"../ajax\"
], function( jQuery, nonce, rquery ) {

\"use strict\";

var oldCallbacks = [],
\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
\tjsonp: \"callback\",
\tjsonpCallback: function() {
\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( nonce++ ) );
\t\tthis[ callback ] = true;
\t\treturn callback;
\t}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\tvar callbackName, overwritten, responseContainer,
\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\"url\" :
\t\t\ttypeof s.data === \"string\" &&
\t\t\t\t( s.contentType || \"\" )
\t\t\t\t\t.indexOf( \"application/x-www-form-urlencoded\" ) === 0 &&
\t\t\t\trjsonp.test( s.data ) && \"data\"
\t\t);

\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t// Get callback name, remembering preexisting value associated with it
\t\tcallbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
\t\t\ts.jsonpCallback() :
\t\t\ts.jsonpCallback;

\t\t// Insert callback into url or form data
\t\tif ( jsonProp ) {
\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t} else if ( s.jsonp !== false ) {
\t\t\ts.url += ( rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t}

\t\t// Use data converter to retrieve json after script execution
\t\ts.converters[ \"script json\" ] = function() {
\t\t\tif ( !responseContainer ) {
\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t}
\t\t\treturn responseContainer[ 0 ];
\t\t};

\t\t// Force json dataType
\t\ts.dataTypes[ 0 ] = \"json\";

\t\t// Install callback
\t\toverwritten = window[ callbackName ];
\t\twindow[ callbackName ] = function() {
\t\t\tresponseContainer = arguments;
\t\t};

\t\t// Clean-up function (fires after converters)
\t\tjqXHR.always( function() {

\t\t\t// If previous value didn't exist - remove it
\t\t\tif ( overwritten === undefined ) {
\t\t\t\tjQuery( window ).removeProp( callbackName );

\t\t\t// Otherwise restore preexisting value
\t\t\t} else {
\t\t\t\twindow[ callbackName ] = overwritten;
\t\t\t}

\t\t\t// Save back as free
\t\t\tif ( s[ callbackName ] ) {

\t\t\t\t// Make sure that re-using the options doesn't screw things around
\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t// Save the callback name for future use
\t\t\t\toldCallbacks.push( callbackName );
\t\t\t}

\t\t\t// Call if it was a function and we have a response
\t\t\tif ( responseContainer && jQuery.isFunction( overwritten ) ) {
\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t}

\t\t\tresponseContainer = overwritten = undefined;
\t\t} );

\t\t// Delegate to script
\t\treturn \"script\";
\t}
} );

} );
";
        
        $__internal_37b3e057daae949d783acf8312022b97d66eba4966188d0812473719391f8ce5->leave($__internal_37b3e057daae949d783acf8312022b97d66eba4966188d0812473719391f8ce5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/ajax/jsonp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"./var/nonce\",
\t\"./var/rquery\",
\t\"../ajax\"
], function( jQuery, nonce, rquery ) {

\"use strict\";

var oldCallbacks = [],
\trjsonp = /(=)\\?(?=&|\$)|\\?\\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
\tjsonp: \"callback\",
\tjsonpCallback: function() {
\t\tvar callback = oldCallbacks.pop() || ( jQuery.expando + \"_\" + ( nonce++ ) );
\t\tthis[ callback ] = true;
\t\treturn callback;
\t}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( \"json jsonp\", function( s, originalSettings, jqXHR ) {

\tvar callbackName, overwritten, responseContainer,
\t\tjsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
\t\t\t\"url\" :
\t\t\ttypeof s.data === \"string\" &&
\t\t\t\t( s.contentType || \"\" )
\t\t\t\t\t.indexOf( \"application/x-www-form-urlencoded\" ) === 0 &&
\t\t\t\trjsonp.test( s.data ) && \"data\"
\t\t);

\t// Handle iff the expected data type is \"jsonp\" or we have a parameter to set
\tif ( jsonProp || s.dataTypes[ 0 ] === \"jsonp\" ) {

\t\t// Get callback name, remembering preexisting value associated with it
\t\tcallbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
\t\t\ts.jsonpCallback() :
\t\t\ts.jsonpCallback;

\t\t// Insert callback into url or form data
\t\tif ( jsonProp ) {
\t\t\ts[ jsonProp ] = s[ jsonProp ].replace( rjsonp, \"\$1\" + callbackName );
\t\t} else if ( s.jsonp !== false ) {
\t\t\ts.url += ( rquery.test( s.url ) ? \"&\" : \"?\" ) + s.jsonp + \"=\" + callbackName;
\t\t}

\t\t// Use data converter to retrieve json after script execution
\t\ts.converters[ \"script json\" ] = function() {
\t\t\tif ( !responseContainer ) {
\t\t\t\tjQuery.error( callbackName + \" was not called\" );
\t\t\t}
\t\t\treturn responseContainer[ 0 ];
\t\t};

\t\t// Force json dataType
\t\ts.dataTypes[ 0 ] = \"json\";

\t\t// Install callback
\t\toverwritten = window[ callbackName ];
\t\twindow[ callbackName ] = function() {
\t\t\tresponseContainer = arguments;
\t\t};

\t\t// Clean-up function (fires after converters)
\t\tjqXHR.always( function() {

\t\t\t// If previous value didn't exist - remove it
\t\t\tif ( overwritten === undefined ) {
\t\t\t\tjQuery( window ).removeProp( callbackName );

\t\t\t// Otherwise restore preexisting value
\t\t\t} else {
\t\t\t\twindow[ callbackName ] = overwritten;
\t\t\t}

\t\t\t// Save back as free
\t\t\tif ( s[ callbackName ] ) {

\t\t\t\t// Make sure that re-using the options doesn't screw things around
\t\t\t\ts.jsonpCallback = originalSettings.jsonpCallback;

\t\t\t\t// Save the callback name for future use
\t\t\t\toldCallbacks.push( callbackName );
\t\t\t}

\t\t\t// Call if it was a function and we have a response
\t\t\tif ( responseContainer && jQuery.isFunction( overwritten ) ) {
\t\t\t\toverwritten( responseContainer[ 0 ] );
\t\t\t}

\t\t\tresponseContainer = overwritten = undefined;
\t\t} );

\t\t// Delegate to script
\t\treturn \"script\";
\t}
} );

} );
", "node_modules/jquery/src/ajax/jsonp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/ajax/jsonp.js");
    }
}
