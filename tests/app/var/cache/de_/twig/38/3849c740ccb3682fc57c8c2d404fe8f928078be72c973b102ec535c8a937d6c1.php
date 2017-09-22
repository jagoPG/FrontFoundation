<?php

/* node_modules/parsleyjs/bower_components/jquery/src/ajax/script.js */
class __TwigTemplate_6716b09454b6b403f0c4d3b2928abf9f65cd160a5316ed7d87fbd2dd642e6dff extends Twig_Template
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
        $__internal_662821f123abd9102f2ca6f80d8e0691e9d43b87e273bacf74efbfaa90a59fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662821f123abd9102f2ca6f80d8e0691e9d43b87e273bacf74efbfaa90a59fcd->enter($__internal_662821f123abd9102f2ca6f80d8e0691e9d43b87e273bacf74efbfaa90a59fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/ajax/script.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../ajax\"
], function( jQuery ) {

// Install script dataType
jQuery.ajaxSetup({
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /(?:java|ecma)script/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
});

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t}
});

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {
\t// This transport only deals with cross domain requests
\tif ( s.crossDomain ) {
\t\tvar script, callback;
\t\treturn {
\t\t\tsend: function( _, complete ) {
\t\t\t\tscript = jQuery(\"<script>\").prop({
\t\t\t\t\tasync: true,
\t\t\t\t\tcharset: s.scriptCharset,
\t\t\t\t\tsrc: s.url
\t\t\t\t}).on(
\t\t\t\t\t\"load error\",
\t\t\t\t\tcallback = function( evt ) {
\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\tdocument.head.appendChild( script[ 0 ] );
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
        
        $__internal_662821f123abd9102f2ca6f80d8e0691e9d43b87e273bacf74efbfaa90a59fcd->leave($__internal_662821f123abd9102f2ca6f80d8e0691e9d43b87e273bacf74efbfaa90a59fcd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/ajax/script.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../ajax\"
], function( jQuery ) {

// Install script dataType
jQuery.ajaxSetup({
\taccepts: {
\t\tscript: \"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript\"
\t},
\tcontents: {
\t\tscript: /(?:java|ecma)script/
\t},
\tconverters: {
\t\t\"text script\": function( text ) {
\t\t\tjQuery.globalEval( text );
\t\t\treturn text;
\t\t}
\t}
});

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( \"script\", function( s ) {
\tif ( s.cache === undefined ) {
\t\ts.cache = false;
\t}
\tif ( s.crossDomain ) {
\t\ts.type = \"GET\";
\t}
});

// Bind script tag hack transport
jQuery.ajaxTransport( \"script\", function( s ) {
\t// This transport only deals with cross domain requests
\tif ( s.crossDomain ) {
\t\tvar script, callback;
\t\treturn {
\t\t\tsend: function( _, complete ) {
\t\t\t\tscript = jQuery(\"<script>\").prop({
\t\t\t\t\tasync: true,
\t\t\t\t\tcharset: s.scriptCharset,
\t\t\t\t\tsrc: s.url
\t\t\t\t}).on(
\t\t\t\t\t\"load error\",
\t\t\t\t\tcallback = function( evt ) {
\t\t\t\t\t\tscript.remove();
\t\t\t\t\t\tcallback = null;
\t\t\t\t\t\tif ( evt ) {
\t\t\t\t\t\t\tcomplete( evt.type === \"error\" ? 404 : 200, evt.type );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\tdocument.head.appendChild( script[ 0 ] );
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
", "node_modules/parsleyjs/bower_components/jquery/src/ajax/script.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/ajax/script.js");
    }
}
