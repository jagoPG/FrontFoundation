<?php

/* node_modules/parsleyjs/bower_components/jquery/src/serialize.js */
class __TwigTemplate_8c26835ec09f1af14b5e817b20af859d684fd2300b955998f016f565c51a709c extends Twig_Template
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
        $__internal_b165be5ddbe48a2c898454f9137822ab937484be2e6da4caf0aaa0420a97f06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b165be5ddbe48a2c898454f9137822ab937484be2e6da4caf0aaa0420a97f06b->enter($__internal_b165be5ddbe48a2c898454f9137822ab937484be2e6da4caf0aaa0420a97f06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/serialize.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./manipulation/var/rcheckableType\",
\t\"./core/init\",
\t\"./traversing\", // filter
\t\"./attributes/prop\"
], function( jQuery, rcheckableType ) {

var r20 = /%20/g,
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( jQuery.isArray( obj ) ) {
\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {
\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {
\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams( prefix + \"[\" + ( typeof v === \"object\" ? i : \"\" ) + \"]\", v, traditional, add );
\t\t\t}
\t\t});

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
\t\tadd = function( key, value ) {
\t\t\t// If value is a function, invoke it and return its value
\t\t\tvalue = jQuery.isFunction( value ) ? value() : ( value == null ? \"\" : value );
\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" + encodeURIComponent( value );
\t\t};

\t// Set traditional to true for jQuery <= 1.3.2 behavior.
\tif ( traditional === undefined ) {
\t\ttraditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;
\t}

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {
\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t});

\t} else {
\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" ).replace( r20, \"+\" );
};

jQuery.fn.extend({
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map(function() {
\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t})
\t\t.filter(function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t})
\t\t.map(function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\treturn val == null ?
\t\t\t\tnull :
\t\t\t\tjQuery.isArray( val ) ?
\t\t\t\t\tjQuery.map( val, function( val ) {
\t\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t\t}) :
\t\t\t\t\t{ name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t}).get();
\t}
});

return jQuery;
});
";
        
        $__internal_b165be5ddbe48a2c898454f9137822ab937484be2e6da4caf0aaa0420a97f06b->leave($__internal_b165be5ddbe48a2c898454f9137822ab937484be2e6da4caf0aaa0420a97f06b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/serialize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./manipulation/var/rcheckableType\",
\t\"./core/init\",
\t\"./traversing\", // filter
\t\"./attributes/prop\"
], function( jQuery, rcheckableType ) {

var r20 = /%20/g,
\trbracket = /\\[\\]\$/,
\trCRLF = /\\r?\\n/g,
\trsubmitterTypes = /^(?:submit|button|image|reset|file)\$/i,
\trsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
\tvar name;

\tif ( jQuery.isArray( obj ) ) {
\t\t// Serialize array item.
\t\tjQuery.each( obj, function( i, v ) {
\t\t\tif ( traditional || rbracket.test( prefix ) ) {
\t\t\t\t// Treat each array item as a scalar.
\t\t\t\tadd( prefix, v );

\t\t\t} else {
\t\t\t\t// Item is non-scalar (array or object), encode its numeric index.
\t\t\t\tbuildParams( prefix + \"[\" + ( typeof v === \"object\" ? i : \"\" ) + \"]\", v, traditional, add );
\t\t\t}
\t\t});

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
\t\tadd = function( key, value ) {
\t\t\t// If value is a function, invoke it and return its value
\t\t\tvalue = jQuery.isFunction( value ) ? value() : ( value == null ? \"\" : value );
\t\t\ts[ s.length ] = encodeURIComponent( key ) + \"=\" + encodeURIComponent( value );
\t\t};

\t// Set traditional to true for jQuery <= 1.3.2 behavior.
\tif ( traditional === undefined ) {
\t\ttraditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;
\t}

\t// If an array was passed in, assume that it is an array of form elements.
\tif ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {
\t\t// Serialize the form elements
\t\tjQuery.each( a, function() {
\t\t\tadd( this.name, this.value );
\t\t});

\t} else {
\t\t// If traditional, encode the \"old\" way (the way 1.3.2 or older
\t\t// did it), otherwise encode params recursively.
\t\tfor ( prefix in a ) {
\t\t\tbuildParams( prefix, a[ prefix ], traditional, add );
\t\t}
\t}

\t// Return the resulting serialization
\treturn s.join( \"&\" ).replace( r20, \"+\" );
};

jQuery.fn.extend({
\tserialize: function() {
\t\treturn jQuery.param( this.serializeArray() );
\t},
\tserializeArray: function() {
\t\treturn this.map(function() {
\t\t\t// Can add propHook for \"elements\" to filter or add form elements
\t\t\tvar elements = jQuery.prop( this, \"elements\" );
\t\t\treturn elements ? jQuery.makeArray( elements ) : this;
\t\t})
\t\t.filter(function() {
\t\t\tvar type = this.type;

\t\t\t// Use .is( \":disabled\" ) so that fieldset[disabled] works
\t\t\treturn this.name && !jQuery( this ).is( \":disabled\" ) &&
\t\t\t\trsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
\t\t\t\t( this.checked || !rcheckableType.test( type ) );
\t\t})
\t\t.map(function( i, elem ) {
\t\t\tvar val = jQuery( this ).val();

\t\t\treturn val == null ?
\t\t\t\tnull :
\t\t\t\tjQuery.isArray( val ) ?
\t\t\t\t\tjQuery.map( val, function( val ) {
\t\t\t\t\t\treturn { name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t\t\t\t}) :
\t\t\t\t\t{ name: elem.name, value: val.replace( rCRLF, \"\\r\\n\" ) };
\t\t}).get();
\t}
});

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/serialize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/serialize.js");
    }
}
