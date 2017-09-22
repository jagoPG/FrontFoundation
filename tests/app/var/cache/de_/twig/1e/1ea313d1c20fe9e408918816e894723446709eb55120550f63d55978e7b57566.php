<?php

/* node_modules/jquery/src/ajax/script.js */
class __TwigTemplate_4ef481748d409029689caa33fc19293b822134ef0d57149735722b5501d0f44a extends Twig_Template
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
        $__internal_cfcfcbd68d7778f64dfc4cde4ee330a48939ccbe0a9794023aa39927dc59f4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcfcbd68d7778f64dfc4cde4ee330a48939ccbe0a9794023aa39927dc59f4f9->enter($__internal_cfcfcbd68d7778f64dfc4cde4ee330a48939ccbe0a9794023aa39927dc59f4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/ajax/script.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/document\",
\t\"../ajax\"
], function( jQuery, document ) {

\"use strict\";

// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
\tif ( s.crossDomain ) {
\t\ts.contents.script = false;
\t}
} );

// Install script dataType
jQuery.ajaxSetup( {
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, \" +
\t\t\t\"application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /\\b(?:java|ecma)script\\b/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {

\t// This transport only deals with cross domain requests
\tif ( s.crossDomain ) {
\t\tvar script, callback;
\t\treturn {
\t\t\tsend: function( _, complete ) {
\t\t\t\tscript = jQuery( \"<script>\" ).prop( {
\t\t\t\t\tcharset: s.scriptCharset,
\t\t\t\t\tsrc: s.url
\t\t\t\t} ).on(
\t\t\t\t\t\"load error\",
\t\t\t\t\tcallback = function( evt ) {
\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);

\t\t\t\t// Use native DOM manipulation to avoid our domManip AJAX trickery
\t\t\t\tdocument.head.appendChild( script[ 0 ] );
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
        
        $__internal_cfcfcbd68d7778f64dfc4cde4ee330a48939ccbe0a9794023aa39927dc59f4f9->leave($__internal_cfcfcbd68d7778f64dfc4cde4ee330a48939ccbe0a9794023aa39927dc59f4f9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/ajax/script.js";
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
\t\"../ajax\"
], function( jQuery, document ) {

\"use strict\";

// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
\tif ( s.crossDomain ) {
\t\ts.contents.script = false;
\t}
} );

// Install script dataType
jQuery.ajaxSetup( {
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, \" +
\t\t\t\"application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /\\b(?:java|ecma)script\\b/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {

\t// This transport only deals with cross domain requests
\tif ( s.crossDomain ) {
\t\tvar script, callback;
\t\treturn {
\t\t\tsend: function( _, complete ) {
\t\t\t\tscript = jQuery( \"<script>\" ).prop( {
\t\t\t\t\tcharset: s.scriptCharset,
\t\t\t\t\tsrc: s.url
\t\t\t\t} ).on(
\t\t\t\t\t\"load error\",
\t\t\t\t\tcallback = function( evt ) {
\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);

\t\t\t\t// Use native DOM manipulation to avoid our domManip AJAX trickery
\t\t\t\tdocument.head.appendChild( script[ 0 ] );
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
", "node_modules/jquery/src/ajax/script.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/ajax/script.js");
    }
}
