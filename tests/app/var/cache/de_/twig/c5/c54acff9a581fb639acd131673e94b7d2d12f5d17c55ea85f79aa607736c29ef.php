<?php

/* node_modules/jquery/src/ajax/load.js */
class __TwigTemplate_e71200b646479f27c264c9aee828d0e7200c509e2be0d25b15afeafb23dd28a6 extends Twig_Template
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
        $__internal_36fc0945676b2c8ffa73396bd36de27b343f0bff7283e9beb572a2dea04e8ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fc0945676b2c8ffa73396bd36de27b343f0bff7283e9beb572a2dea04e8ad5->enter($__internal_36fc0945676b2c8ffa73396bd36de27b343f0bff7283e9beb572a2dea04e8ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/ajax/load.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../core/stripAndCollapse\",
\t\"../core/parseHTML\",
\t\"../ajax\",
\t\"../traversing\",
\t\"../manipulation\",
\t\"../selector\"
], function( jQuery, stripAndCollapse ) {

\"use strict\";

/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf( \" \" );

\tif ( off > -1 ) {
\t\tselector = stripAndCollapse( url.slice( off ) );
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
\t\tjQuery.ajax( {
\t\t\turl: url,

\t\t\t// If \"type\" variable is undefined, then \"GET\" method will be used.
\t\t\t// Make value of this field explicit since
\t\t\t// user can override it through ajaxSetup method
\t\t\ttype: type || \"GET\",
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t} ).done( function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery( \"<div>\" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t// If the request succeeds, this function gets \"data\", \"status\", \"jqXHR\"
\t\t// but they are ignored because response was set above.
\t\t// If it fails, this function gets \"jqXHR\", \"status\", \"error\"
\t\t} ).always( callback && function( jqXHR, status ) {
\t\t\tself.each( function() {
\t\t\t\tcallback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t\t} );
\t\t} );
\t}

\treturn this;
};

} );
";
        
        $__internal_36fc0945676b2c8ffa73396bd36de27b343f0bff7283e9beb572a2dea04e8ad5->leave($__internal_36fc0945676b2c8ffa73396bd36de27b343f0bff7283e9beb572a2dea04e8ad5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/ajax/load.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../core/stripAndCollapse\",
\t\"../core/parseHTML\",
\t\"../ajax\",
\t\"../traversing\",
\t\"../manipulation\",
\t\"../selector\"
], function( jQuery, stripAndCollapse ) {

\"use strict\";

/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
\tvar selector, type, response,
\t\tself = this,
\t\toff = url.indexOf( \" \" );

\tif ( off > -1 ) {
\t\tselector = stripAndCollapse( url.slice( off ) );
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
\t\tjQuery.ajax( {
\t\t\turl: url,

\t\t\t// If \"type\" variable is undefined, then \"GET\" method will be used.
\t\t\t// Make value of this field explicit since
\t\t\t// user can override it through ajaxSetup method
\t\t\ttype: type || \"GET\",
\t\t\tdataType: \"html\",
\t\t\tdata: params
\t\t} ).done( function( responseText ) {

\t\t\t// Save response for use in complete callback
\t\t\tresponse = arguments;

\t\t\tself.html( selector ?

\t\t\t\t// If a selector was specified, locate the right elements in a dummy div
\t\t\t\t// Exclude scripts to avoid IE 'Permission Denied' errors
\t\t\t\tjQuery( \"<div>\" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

\t\t\t\t// Otherwise use the full result
\t\t\t\tresponseText );

\t\t// If the request succeeds, this function gets \"data\", \"status\", \"jqXHR\"
\t\t// but they are ignored because response was set above.
\t\t// If it fails, this function gets \"jqXHR\", \"status\", \"error\"
\t\t} ).always( callback && function( jqXHR, status ) {
\t\t\tself.each( function() {
\t\t\t\tcallback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
\t\t\t} );
\t\t} );
\t}

\treturn this;
};

} );
", "node_modules/jquery/src/ajax/load.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/ajax/load.js");
    }
}
