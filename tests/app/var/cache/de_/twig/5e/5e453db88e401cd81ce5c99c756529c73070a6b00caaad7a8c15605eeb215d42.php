<?php

/* node_modules/jquery/src/data/Data.js */
class __TwigTemplate_0b339f987b9b976dd63a0aa6a881878eabdb41252a23a35b613ab7cb260dfc3f extends Twig_Template
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
        $__internal_4ac9d7a3e9d12c1c626aedfc2618940df6c9e558edbe76ea5f09f97d1e902956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac9d7a3e9d12c1c626aedfc2618940df6c9e558edbe76ea5f09f97d1e902956->enter($__internal_4ac9d7a3e9d12c1c626aedfc2618940df6c9e558edbe76ea5f09f97d1e902956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/data/Data.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/rnothtmlwhite\",
\t\"./var/acceptData\"
], function( jQuery, rnothtmlwhite, acceptData ) {

\"use strict\";

function Data() {
\tthis.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

\tcache: function( owner ) {

\t\t// Check if the owner object already has a cache
\t\tvar value = owner[ this.expando ];

\t\t// If not, create one
\t\tif ( !value ) {
\t\t\tvalue = {};

\t\t\t// We can accept data for non-element nodes in modern browsers,
\t\t\t// but we should not, see #8335.
\t\t\t// Always return an empty object.
\t\t\tif ( acceptData( owner ) ) {

\t\t\t\t// If it is a node unlikely to be stringify-ed or looped over
\t\t\t\t// use plain assignment
\t\t\t\tif ( owner.nodeType ) {
\t\t\t\t\towner[ this.expando ] = value;

\t\t\t\t// Otherwise secure it in a non-enumerable property
\t\t\t\t// configurable must be true to allow the property to be
\t\t\t\t// deleted when data is removed
\t\t\t\t} else {
\t\t\t\t\tObject.defineProperty( owner, this.expando, {
\t\t\t\t\t\tvalue: value,
\t\t\t\t\t\tconfigurable: true
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn value;
\t},
\tset: function( owner, data, value ) {
\t\tvar prop,
\t\t\tcache = this.cache( owner );

\t\t// Handle: [ owner, key, value ] args
\t\t// Always use camelCase key (gh-2257)
\t\tif ( typeof data === \"string\" ) {
\t\t\tcache[ jQuery.camelCase( data ) ] = value;

\t\t// Handle: [ owner, { properties } ] args
\t\t} else {

\t\t\t// Copy the properties one-by-one to the cache object
\t\t\tfor ( prop in data ) {
\t\t\t\tcache[ jQuery.camelCase( prop ) ] = data[ prop ];
\t\t\t}
\t\t}
\t\treturn cache;
\t},
\tget: function( owner, key ) {
\t\treturn key === undefined ?
\t\t\tthis.cache( owner ) :

\t\t\t// Always use camelCase key (gh-2257)
\t\t\towner[ this.expando ] && owner[ this.expando ][ jQuery.camelCase( key ) ];
\t},
\taccess: function( owner, key, value ) {

\t\t// In cases where either:
\t\t//
\t\t//   1. No key was specified
\t\t//   2. A string key was specified, but no value provided
\t\t//
\t\t// Take the \"read\" path and allow the get method to determine
\t\t// which value to return, respectively either:
\t\t//
\t\t//   1. The entire cache object
\t\t//   2. The data stored at the key
\t\t//
\t\tif ( key === undefined ||
\t\t\t\t( ( key && typeof key === \"string\" ) && value === undefined ) ) {

\t\t\treturn this.get( owner, key );
\t\t}

\t\t// When the key is not a string, or both a key and value
\t\t// are specified, set or extend (existing objects) with either:
\t\t//
\t\t//   1. An object of properties
\t\t//   2. A key and value
\t\t//
\t\tthis.set( owner, key, value );

\t\t// Since the \"set\" path can have two possible entry points
\t\t// return the expected data based on which path was taken[*]
\t\treturn value !== undefined ? value : key;
\t},
\tremove: function( owner, key ) {
\t\tvar i,
\t\t\tcache = owner[ this.expando ];

\t\tif ( cache === undefined ) {
\t\t\treturn;
\t\t}

\t\tif ( key !== undefined ) {

\t\t\t// Support array or space separated string of keys
\t\t\tif ( Array.isArray( key ) ) {

\t\t\t\t// If key is an array of keys...
\t\t\t\t// We always set camelCase keys, so remove that.
\t\t\t\tkey = key.map( jQuery.camelCase );
\t\t\t} else {
\t\t\t\tkey = jQuery.camelCase( key );

\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\tkey = key in cache ?
\t\t\t\t\t[ key ] :
\t\t\t\t\t( key.match( rnothtmlwhite ) || [] );
\t\t\t}

\t\t\ti = key.length;

\t\t\twhile ( i-- ) {
\t\t\t\tdelete cache[ key[ i ] ];
\t\t\t}
\t\t}

\t\t// Remove the expando if there's no more data
\t\tif ( key === undefined || jQuery.isEmptyObject( cache ) ) {

\t\t\t// Support: Chrome <=35 - 45
\t\t\t// Webkit & Blink performance suffers when deleting properties
\t\t\t// from DOM nodes, so set to undefined instead
\t\t\t// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
\t\t\tif ( owner.nodeType ) {
\t\t\t\towner[ this.expando ] = undefined;
\t\t\t} else {
\t\t\t\tdelete owner[ this.expando ];
\t\t\t}
\t\t}
\t},
\thasData: function( owner ) {
\t\tvar cache = owner[ this.expando ];
\t\treturn cache !== undefined && !jQuery.isEmptyObject( cache );
\t}
};

return Data;
} );
";
        
        $__internal_4ac9d7a3e9d12c1c626aedfc2618940df6c9e558edbe76ea5f09f97d1e902956->leave($__internal_4ac9d7a3e9d12c1c626aedfc2618940df6c9e558edbe76ea5f09f97d1e902956_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/data/Data.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../var/rnothtmlwhite\",
\t\"./var/acceptData\"
], function( jQuery, rnothtmlwhite, acceptData ) {

\"use strict\";

function Data() {
\tthis.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

\tcache: function( owner ) {

\t\t// Check if the owner object already has a cache
\t\tvar value = owner[ this.expando ];

\t\t// If not, create one
\t\tif ( !value ) {
\t\t\tvalue = {};

\t\t\t// We can accept data for non-element nodes in modern browsers,
\t\t\t// but we should not, see #8335.
\t\t\t// Always return an empty object.
\t\t\tif ( acceptData( owner ) ) {

\t\t\t\t// If it is a node unlikely to be stringify-ed or looped over
\t\t\t\t// use plain assignment
\t\t\t\tif ( owner.nodeType ) {
\t\t\t\t\towner[ this.expando ] = value;

\t\t\t\t// Otherwise secure it in a non-enumerable property
\t\t\t\t// configurable must be true to allow the property to be
\t\t\t\t// deleted when data is removed
\t\t\t\t} else {
\t\t\t\t\tObject.defineProperty( owner, this.expando, {
\t\t\t\t\t\tvalue: value,
\t\t\t\t\t\tconfigurable: true
\t\t\t\t\t} );
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn value;
\t},
\tset: function( owner, data, value ) {
\t\tvar prop,
\t\t\tcache = this.cache( owner );

\t\t// Handle: [ owner, key, value ] args
\t\t// Always use camelCase key (gh-2257)
\t\tif ( typeof data === \"string\" ) {
\t\t\tcache[ jQuery.camelCase( data ) ] = value;

\t\t// Handle: [ owner, { properties } ] args
\t\t} else {

\t\t\t// Copy the properties one-by-one to the cache object
\t\t\tfor ( prop in data ) {
\t\t\t\tcache[ jQuery.camelCase( prop ) ] = data[ prop ];
\t\t\t}
\t\t}
\t\treturn cache;
\t},
\tget: function( owner, key ) {
\t\treturn key === undefined ?
\t\t\tthis.cache( owner ) :

\t\t\t// Always use camelCase key (gh-2257)
\t\t\towner[ this.expando ] && owner[ this.expando ][ jQuery.camelCase( key ) ];
\t},
\taccess: function( owner, key, value ) {

\t\t// In cases where either:
\t\t//
\t\t//   1. No key was specified
\t\t//   2. A string key was specified, but no value provided
\t\t//
\t\t// Take the \"read\" path and allow the get method to determine
\t\t// which value to return, respectively either:
\t\t//
\t\t//   1. The entire cache object
\t\t//   2. The data stored at the key
\t\t//
\t\tif ( key === undefined ||
\t\t\t\t( ( key && typeof key === \"string\" ) && value === undefined ) ) {

\t\t\treturn this.get( owner, key );
\t\t}

\t\t// When the key is not a string, or both a key and value
\t\t// are specified, set or extend (existing objects) with either:
\t\t//
\t\t//   1. An object of properties
\t\t//   2. A key and value
\t\t//
\t\tthis.set( owner, key, value );

\t\t// Since the \"set\" path can have two possible entry points
\t\t// return the expected data based on which path was taken[*]
\t\treturn value !== undefined ? value : key;
\t},
\tremove: function( owner, key ) {
\t\tvar i,
\t\t\tcache = owner[ this.expando ];

\t\tif ( cache === undefined ) {
\t\t\treturn;
\t\t}

\t\tif ( key !== undefined ) {

\t\t\t// Support array or space separated string of keys
\t\t\tif ( Array.isArray( key ) ) {

\t\t\t\t// If key is an array of keys...
\t\t\t\t// We always set camelCase keys, so remove that.
\t\t\t\tkey = key.map( jQuery.camelCase );
\t\t\t} else {
\t\t\t\tkey = jQuery.camelCase( key );

\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\tkey = key in cache ?
\t\t\t\t\t[ key ] :
\t\t\t\t\t( key.match( rnothtmlwhite ) || [] );
\t\t\t}

\t\t\ti = key.length;

\t\t\twhile ( i-- ) {
\t\t\t\tdelete cache[ key[ i ] ];
\t\t\t}
\t\t}

\t\t// Remove the expando if there's no more data
\t\tif ( key === undefined || jQuery.isEmptyObject( cache ) ) {

\t\t\t// Support: Chrome <=35 - 45
\t\t\t// Webkit & Blink performance suffers when deleting properties
\t\t\t// from DOM nodes, so set to undefined instead
\t\t\t// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
\t\t\tif ( owner.nodeType ) {
\t\t\t\towner[ this.expando ] = undefined;
\t\t\t} else {
\t\t\t\tdelete owner[ this.expando ];
\t\t\t}
\t\t}
\t},
\thasData: function( owner ) {
\t\tvar cache = owner[ this.expando ];
\t\treturn cache !== undefined && !jQuery.isEmptyObject( cache );
\t}
};

return Data;
} );
", "node_modules/jquery/src/data/Data.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/data/Data.js");
    }
}
