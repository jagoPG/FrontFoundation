<?php

/* node_modules/parsleyjs/bower_components/jquery/src/data/Data.js */
class __TwigTemplate_f3a7bf839e3149ba8334df07dc02d184d9d9d9af62998de76309af4ddf687a5d extends Twig_Template
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
        $__internal_efcc0f9e41d8d7dfcd2d99fea30aa351ee686a3d4b8c3dac0afa1517359101da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcc0f9e41d8d7dfcd2d99fea30aa351ee686a3d4b8c3dac0afa1517359101da->enter($__internal_efcc0f9e41d8d7dfcd2d99fea30aa351ee686a3d4b8c3dac0afa1517359101da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/data/Data.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../var/rnotwhite\",
\t\"./accepts\"
], function( jQuery, rnotwhite ) {

function Data() {
\t// Support: Android<4,
\t// Old WebKit does not have Object.preventExtensions/freeze method,
\t// return new empty object instead with no [[set]] accessor
\tObject.defineProperty( this.cache = {}, 0, {
\t\tget: function() {
\t\t\treturn {};
\t\t}
\t});

\tthis.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;
Data.accepts = jQuery.acceptData;

Data.prototype = {
\tkey: function( owner ) {
\t\t// We can accept data for non-element nodes in modern browsers,
\t\t// but we should not, see #8335.
\t\t// Always return the key for a frozen object.
\t\tif ( !Data.accepts( owner ) ) {
\t\t\treturn 0;
\t\t}

\t\tvar descriptor = {},
\t\t\t// Check if the owner object already has a cache key
\t\t\tunlock = owner[ this.expando ];

\t\t// If not, create one
\t\tif ( !unlock ) {
\t\t\tunlock = Data.uid++;

\t\t\t// Secure it in a non-enumerable, non-writable property
\t\t\ttry {
\t\t\t\tdescriptor[ this.expando ] = { value: unlock };
\t\t\t\tObject.defineProperties( owner, descriptor );

\t\t\t// Support: Android<4
\t\t\t// Fallback to a less secure definition
\t\t\t} catch ( e ) {
\t\t\t\tdescriptor[ this.expando ] = unlock;
\t\t\t\tjQuery.extend( owner, descriptor );
\t\t\t}
\t\t}

\t\t// Ensure the cache object
\t\tif ( !this.cache[ unlock ] ) {
\t\t\tthis.cache[ unlock ] = {};
\t\t}

\t\treturn unlock;
\t},
\tset: function( owner, data, value ) {
\t\tvar prop,
\t\t\t// There may be an unlock assigned to this node,
\t\t\t// if there is no entry for this \"owner\", create one inline
\t\t\t// and set the unlock as though an owner entry had always existed
\t\t\tunlock = this.key( owner ),
\t\t\tcache = this.cache[ unlock ];

\t\t// Handle: [ owner, key, value ] args
\t\tif ( typeof data === \"string\" ) {
\t\t\tcache[ data ] = value;

\t\t// Handle: [ owner, { properties } ] args
\t\t} else {
\t\t\t// Fresh assignments by object are shallow copied
\t\t\tif ( jQuery.isEmptyObject( cache ) ) {
\t\t\t\tjQuery.extend( this.cache[ unlock ], data );
\t\t\t// Otherwise, copy the properties one-by-one to the cache object
\t\t\t} else {
\t\t\t\tfor ( prop in data ) {
\t\t\t\t\tcache[ prop ] = data[ prop ];
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn cache;
\t},
\tget: function( owner, key ) {
\t\t// Either a valid cache is found, or will be created.
\t\t// New caches will be created and the unlock returned,
\t\t// allowing direct access to the newly created
\t\t// empty data object. A valid owner object must be provided.
\t\tvar cache = this.cache[ this.key( owner ) ];

\t\treturn key === undefined ?
\t\t\tcache : cache[ key ];
\t},
\taccess: function( owner, key, value ) {
\t\tvar stored;
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
\t\t\t\t((key && typeof key === \"string\") && value === undefined) ) {

\t\t\tstored = this.get( owner, key );

\t\t\treturn stored !== undefined ?
\t\t\t\tstored : this.get( owner, jQuery.camelCase(key) );
\t\t}

\t\t// [*]When the key is not a string, or both a key and value
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
\t\tvar i, name, camel,
\t\t\tunlock = this.key( owner ),
\t\t\tcache = this.cache[ unlock ];

\t\tif ( key === undefined ) {
\t\t\tthis.cache[ unlock ] = {};

\t\t} else {
\t\t\t// Support array or space separated string of keys
\t\t\tif ( jQuery.isArray( key ) ) {
\t\t\t\t// If \"name\" is an array of keys...
\t\t\t\t// When data is initially created, via (\"key\", \"val\") signature,
\t\t\t\t// keys will be converted to camelCase.
\t\t\t\t// Since there is no way to tell _how_ a key was added, remove
\t\t\t\t// both plain key and camelCase key. #12786
\t\t\t\t// This will only penalize the array argument path.
\t\t\t\tname = key.concat( key.map( jQuery.camelCase ) );
\t\t\t} else {
\t\t\t\tcamel = jQuery.camelCase( key );
\t\t\t\t// Try the string as a key before any manipulation
\t\t\t\tif ( key in cache ) {
\t\t\t\t\tname = [ key, camel ];
\t\t\t\t} else {
\t\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\t\tname = camel;
\t\t\t\t\tname = name in cache ?
\t\t\t\t\t\t[ name ] : ( name.match( rnotwhite ) || [] );
\t\t\t\t}
\t\t\t}

\t\t\ti = name.length;
\t\t\twhile ( i-- ) {
\t\t\t\tdelete cache[ name[ i ] ];
\t\t\t}
\t\t}
\t},
\thasData: function( owner ) {
\t\treturn !jQuery.isEmptyObject(
\t\t\tthis.cache[ owner[ this.expando ] ] || {}
\t\t);
\t},
\tdiscard: function( owner ) {
\t\tif ( owner[ this.expando ] ) {
\t\t\tdelete this.cache[ owner[ this.expando ] ];
\t\t}
\t}
};

return Data;
});
";
        
        $__internal_efcc0f9e41d8d7dfcd2d99fea30aa351ee686a3d4b8c3dac0afa1517359101da->leave($__internal_efcc0f9e41d8d7dfcd2d99fea30aa351ee686a3d4b8c3dac0afa1517359101da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/data/Data.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../var/rnotwhite\",
\t\"./accepts\"
], function( jQuery, rnotwhite ) {

function Data() {
\t// Support: Android<4,
\t// Old WebKit does not have Object.preventExtensions/freeze method,
\t// return new empty object instead with no [[set]] accessor
\tObject.defineProperty( this.cache = {}, 0, {
\t\tget: function() {
\t\t\treturn {};
\t\t}
\t});

\tthis.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;
Data.accepts = jQuery.acceptData;

Data.prototype = {
\tkey: function( owner ) {
\t\t// We can accept data for non-element nodes in modern browsers,
\t\t// but we should not, see #8335.
\t\t// Always return the key for a frozen object.
\t\tif ( !Data.accepts( owner ) ) {
\t\t\treturn 0;
\t\t}

\t\tvar descriptor = {},
\t\t\t// Check if the owner object already has a cache key
\t\t\tunlock = owner[ this.expando ];

\t\t// If not, create one
\t\tif ( !unlock ) {
\t\t\tunlock = Data.uid++;

\t\t\t// Secure it in a non-enumerable, non-writable property
\t\t\ttry {
\t\t\t\tdescriptor[ this.expando ] = { value: unlock };
\t\t\t\tObject.defineProperties( owner, descriptor );

\t\t\t// Support: Android<4
\t\t\t// Fallback to a less secure definition
\t\t\t} catch ( e ) {
\t\t\t\tdescriptor[ this.expando ] = unlock;
\t\t\t\tjQuery.extend( owner, descriptor );
\t\t\t}
\t\t}

\t\t// Ensure the cache object
\t\tif ( !this.cache[ unlock ] ) {
\t\t\tthis.cache[ unlock ] = {};
\t\t}

\t\treturn unlock;
\t},
\tset: function( owner, data, value ) {
\t\tvar prop,
\t\t\t// There may be an unlock assigned to this node,
\t\t\t// if there is no entry for this \"owner\", create one inline
\t\t\t// and set the unlock as though an owner entry had always existed
\t\t\tunlock = this.key( owner ),
\t\t\tcache = this.cache[ unlock ];

\t\t// Handle: [ owner, key, value ] args
\t\tif ( typeof data === \"string\" ) {
\t\t\tcache[ data ] = value;

\t\t// Handle: [ owner, { properties } ] args
\t\t} else {
\t\t\t// Fresh assignments by object are shallow copied
\t\t\tif ( jQuery.isEmptyObject( cache ) ) {
\t\t\t\tjQuery.extend( this.cache[ unlock ], data );
\t\t\t// Otherwise, copy the properties one-by-one to the cache object
\t\t\t} else {
\t\t\t\tfor ( prop in data ) {
\t\t\t\t\tcache[ prop ] = data[ prop ];
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn cache;
\t},
\tget: function( owner, key ) {
\t\t// Either a valid cache is found, or will be created.
\t\t// New caches will be created and the unlock returned,
\t\t// allowing direct access to the newly created
\t\t// empty data object. A valid owner object must be provided.
\t\tvar cache = this.cache[ this.key( owner ) ];

\t\treturn key === undefined ?
\t\t\tcache : cache[ key ];
\t},
\taccess: function( owner, key, value ) {
\t\tvar stored;
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
\t\t\t\t((key && typeof key === \"string\") && value === undefined) ) {

\t\t\tstored = this.get( owner, key );

\t\t\treturn stored !== undefined ?
\t\t\t\tstored : this.get( owner, jQuery.camelCase(key) );
\t\t}

\t\t// [*]When the key is not a string, or both a key and value
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
\t\tvar i, name, camel,
\t\t\tunlock = this.key( owner ),
\t\t\tcache = this.cache[ unlock ];

\t\tif ( key === undefined ) {
\t\t\tthis.cache[ unlock ] = {};

\t\t} else {
\t\t\t// Support array or space separated string of keys
\t\t\tif ( jQuery.isArray( key ) ) {
\t\t\t\t// If \"name\" is an array of keys...
\t\t\t\t// When data is initially created, via (\"key\", \"val\") signature,
\t\t\t\t// keys will be converted to camelCase.
\t\t\t\t// Since there is no way to tell _how_ a key was added, remove
\t\t\t\t// both plain key and camelCase key. #12786
\t\t\t\t// This will only penalize the array argument path.
\t\t\t\tname = key.concat( key.map( jQuery.camelCase ) );
\t\t\t} else {
\t\t\t\tcamel = jQuery.camelCase( key );
\t\t\t\t// Try the string as a key before any manipulation
\t\t\t\tif ( key in cache ) {
\t\t\t\t\tname = [ key, camel ];
\t\t\t\t} else {
\t\t\t\t\t// If a key with the spaces exists, use it.
\t\t\t\t\t// Otherwise, create an array by matching non-whitespace
\t\t\t\t\tname = camel;
\t\t\t\t\tname = name in cache ?
\t\t\t\t\t\t[ name ] : ( name.match( rnotwhite ) || [] );
\t\t\t\t}
\t\t\t}

\t\t\ti = name.length;
\t\t\twhile ( i-- ) {
\t\t\t\tdelete cache[ name[ i ] ];
\t\t\t}
\t\t}
\t},
\thasData: function( owner ) {
\t\treturn !jQuery.isEmptyObject(
\t\t\tthis.cache[ owner[ this.expando ] ] || {}
\t\t);
\t},
\tdiscard: function( owner ) {
\t\tif ( owner[ this.expando ] ) {
\t\t\tdelete this.cache[ owner[ this.expando ] ];
\t\t}
\t}
};

return Data;
});
", "node_modules/parsleyjs/bower_components/jquery/src/data/Data.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/data/Data.js");
    }
}
