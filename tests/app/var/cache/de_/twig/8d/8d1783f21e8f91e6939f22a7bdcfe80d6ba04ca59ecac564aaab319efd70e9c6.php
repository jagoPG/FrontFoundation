<?php

/* node_modules/jquery/src/serialize.js */
class __TwigTemplate_e3ea62b4287e37882a83d1efd0eb1cb5c9f29a97629c7728570ca5558ccb62e0 extends Twig_Template
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
        $__internal_11df527a9c5e83e3cdbb963ce68c768ac46239598aaa171e625b84c8a1b45934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11df527a9c5e83e3cdbb963ce68c768ac46239598aaa171e625b84c8a1b45934->enter($__internal_11df527a9c5e83e3cdbb963ce68c768ac46239598aaa171e625b84c8a1b45934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/serialize.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./manipulation/var/rcheckableType\",
\t\"./core/init\",
\t\"./traversing\", // filter
\t\"./attributes/prop\"
], function( jQuery, rcheckableType ) {

\"use strict\";

var
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( Array.isArray( obj ) ) {

\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {

\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {

\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams(
\t\t\t\t\tprefix + \"[\" + ( typeof v === \"object\" && v != null ? i : \"\" ) + \"]\",
\t\t\t\t\tv,
\t\t\t\t\ttraditional,
\t\t\t\t\tadd
\t\t\t\t);
\t\t\t}
\t\t} );

\t} else if ( !traditional && jQuery.type( obj ) === \"object\" ) {

\t\t// Serialize object item.
\t\tfor ( name in obj ) {
\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t}

\t} else {

\t\t// Serialize scalar item.
\t\tadd( prefix, obj );
\t}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
\tvar prefix,
\t\ts = [],
\t\tadd = function( key, valueOrFunction ) {

\t\t\t// If value is a function, invoke it and use its return value
\t\t\tvar value = jQuery.isFunction( valueOrFunction ) ?
\t\t\t\tvalueOrFunction() :
\t\t\t\tvalueOrFunction;

\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" +
\t\t\t\tencodeURIComponent( value == null ? \"\" : value );
\t\t};

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t} );

\t} else {

\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" );
};

jQuery.fn.extend( {
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map( function() {

\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t} )
\t\t.filter( function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t} )
\t\t.map( function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\tif ( val == null ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\tif ( Array.isArray( val ) ) {
\t\t\t\treturn jQuery.map( val, function( val ) {
\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t} );
\t\t\t}

\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t} ).get();
\t}
} );

return jQuery;
} );
";
        
        $__internal_11df527a9c5e83e3cdbb963ce68c768ac46239598aaa171e625b84c8a1b45934->leave($__internal_11df527a9c5e83e3cdbb963ce68c768ac46239598aaa171e625b84c8a1b45934_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/serialize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./manipulation/var/rcheckableType\",
\t\"./core/init\",
\t\"./traversing\", // filter
\t\"./attributes/prop\"
], function( jQuery, rcheckableType ) {

\"use strict\";

var
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( Array.isArray( obj ) ) {

\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {

\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {

\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams(
\t\t\t\t\tprefix + \"[\" + ( typeof v === \"object\" && v != null ? i : \"\" ) + \"]\",
\t\t\t\t\tv,
\t\t\t\t\ttraditional,
\t\t\t\t\tadd
\t\t\t\t);
\t\t\t}
\t\t} );

\t} else if ( !traditional && jQuery.type( obj ) === \"object\" ) {

\t\t// Serialize object item.
\t\tfor ( name in obj ) {
\t\t\tbuildParams( prefix + \"[\" + name + \"]\", obj[ name ], traditional, add );
\t\t}

\t} else {

\t\t// Serialize scalar item.
\t\tadd( prefix, obj );
\t}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
\tvar prefix,
\t\ts = [],
\t\tadd = function( key, valueOrFunction ) {

\t\t\t// If value is a function, invoke it and use its return value
\t\t\tvar value = jQuery.isFunction( valueOrFunction ) ?
\t\t\t\tvalueOrFunction() :
\t\t\t\tvalueOrFunction;

\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" +
\t\t\t\tencodeURIComponent( value == null ? \"\" : value );
\t\t};

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t} );

\t} else {

\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" );
};

jQuery.fn.extend( {
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map( function() {

\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t} )
\t\t.filter( function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t} )
\t\t.map( function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\tif ( val == null ) {
\t\t\t\treturn null;
\t\t\t}

\t\t\tif ( Array.isArray( val ) ) {
\t\t\t\treturn jQuery.map( val, function( val ) {
\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t} );
\t\t\t}

\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t} ).get();
\t}
} );

return jQuery;
} );
", "node_modules/jquery/src/serialize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/serialize.js");
    }
}
