<?php

/* node_modules/parsleyjs/bower_components/jquery/src/ajax/load.js */
class __TwigTemplate_a48b880a61a9030d4ce0e15ed27dafa22e56b49e40ef936b18a2559d55d52009 extends Twig_Template
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
        $__internal_4cacfc3b5b9b139a05463918dc58dbf4a51b1f71cfb89baa0e6f3ebc91f92212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cacfc3b5b9b139a05463918dc58dbf4a51b1f71cfb89baa0e6f3ebc91f92212->enter($__internal_4cacfc3b5b9b139a05463918dc58dbf4a51b1f71cfb89baa0e6f3ebc91f92212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/ajax/load.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../core/parseHTML\",
\t\"../ajax\",
\t\"../traversing\",
\t\"../manipulation\",
\t\"../selector\",
\t// Optional event/alias dependency
\t\"../event/alias\"
], function( jQuery ) {

// Keep a copy of the old load method
var _load = jQuery.fn.load;

/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tif ( typeof url !== \"string\" && _load ) {
\t\treturn _load.apply( this, arguments );
\t}

\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf(\" \");

\tif ( off >= 0 ) {
\t\tselector = jQuery.trim( url.slice( off ) );
\t\turl = url.slice( 0, off );
\t}

\t// If it's a function
\tif ( jQuery.isFunction( params ) ) {

\t\t// We assume that it's the callback
\t\tcallback = params;
\t\tparams = undefined;

\t// Otherwise, build a param string
\t} else if ( params && typeof params === \"object\" ) {
\t\ttype = \"POST\";
\t}

\t// If we have elements to modify, make the request
\tif ( self.length > 0 ) {
\t\tjQuery.ajax({
\t\t\turl: url,

\t\t\t// if \"type\" variable is undefined, then \"GET\" method will be used
\t\t\ttype: type,
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t}).done(function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery(\"<div>\").append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t}).complete( callback && function( jqXHR, status ) {
\t\t\tself.each( callback, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t});
\t}

\treturn this;
};

});
";
        
        $__internal_4cacfc3b5b9b139a05463918dc58dbf4a51b1f71cfb89baa0e6f3ebc91f92212->leave($__internal_4cacfc3b5b9b139a05463918dc58dbf4a51b1f71cfb89baa0e6f3ebc91f92212_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/ajax/load.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../core/parseHTML\",
\t\"../ajax\",
\t\"../traversing\",
\t\"../manipulation\",
\t\"../selector\",
\t// Optional event/alias dependency
\t\"../event/alias\"
], function( jQuery ) {

// Keep a copy of the old load method
var _load = jQuery.fn.load;

/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tif ( typeof url !== \"string\" && _load ) {
\t\treturn _load.apply( this, arguments );
\t}

\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf(\" \");

\tif ( off >= 0 ) {
\t\tselector = jQuery.trim( url.slice( off ) );
\t\turl = url.slice( 0, off );
\t}

\t// If it's a function
\tif ( jQuery.isFunction( params ) ) {

\t\t// We assume that it's the callback
\t\tcallback = params;
\t\tparams = undefined;

\t// Otherwise, build a param string
\t} else if ( params && typeof params === \"object\" ) {
\t\ttype = \"POST\";
\t}

\t// If we have elements to modify, make the request
\tif ( self.length > 0 ) {
\t\tjQuery.ajax({
\t\t\turl: url,

\t\t\t// if \"type\" variable is undefined, then \"GET\" method will be used
\t\t\ttype: type,
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t}).done(function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery(\"<div>\").append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t}).complete( callback && function( jqXHR, status ) {
\t\t\tself.each( callback, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t});
\t}

\treturn this;
};

});
", "node_modules/parsleyjs/bower_components/jquery/src/ajax/load.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/ajax/load.js");
    }
}
