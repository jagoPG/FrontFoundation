<?php

/* node_modules/parsleyjs/bower_components/jquery/src/data.js */
class __TwigTemplate_844d533980dfc1b4c271a22d08ecef79d5595eb00454b676d06b6ffad12f9ee5 extends Twig_Template
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
        $__internal_e7d94ae1b876b28b7bab4340809ab45c5d16e9dcbf53c81b487f5cd29a9e7b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d94ae1b876b28b7bab4340809ab45c5d16e9dcbf53c81b487f5cd29a9e7b0f->enter($__internal_e7d94ae1b876b28b7bab4340809ab45c5d16e9dcbf53c81b487f5cd29a9e7b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/data.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/rnotwhite\",
\t\"./core/access\",
\t\"./data/var/data_priv\",
\t\"./data/var/data_user\"
], function( jQuery, rnotwhite, access, data_priv, data_user ) {

//\tImplementation Summary
//
//\t1. Enforce API surface and semantic compatibility with 1.9.x branch
//\t2. Improve the module's maintainability by reducing the storage
//\t\tpaths to a single mechanism.
//\t3. Use the same single mechanism to support \"private\" and \"user\" data.
//\t4. _Never_ expose \"private\" data to user code (TODO: Drop _data, _removeData)
//\t5. Avoid exposing implementation details on user objects (eg. expando properties)
//\t6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\\{[\\w\\W]*\\}|\\[[\\w\\W]*\\])\$/,
\trmultiDash = /([A-Z])/g;

function dataAttr( elem, key, data ) {
\tvar name;

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {
\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$1\" ).toLowerCase();
\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = data === \"true\" ? true :
\t\t\t\t\tdata === \"false\" ? false :
\t\t\t\t\tdata === \"null\" ? null :
\t\t\t\t\t// Only convert to a number if it doesn't change the string
\t\t\t\t\t+data + \"\" === data ? +data :
\t\t\t\t\trbrace.test( data ) ? jQuery.parseJSON( data ) :
\t\t\t\t\tdata;
\t\t\t} catch( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tdata_user.set( elem, key, data );
\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}
\treturn data;
}

jQuery.extend({
\thasData: function( elem ) {
\t\treturn data_user.hasData( elem ) || data_priv.hasData( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn data_user.access( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\tdata_user.remove( elem, name );
\t},

\t// TODO: Now that all calls to _data and _removeData have been replaced
\t// with direct calls to data_priv methods, these can be deprecated.
\t_data: function( elem, name, data ) {
\t\treturn data_priv.access( elem, name, data );
\t},

\t_removeData: function( elem, name ) {
\t\tdata_priv.remove( elem, name );
\t}
});

jQuery.fn.extend({
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = data_user.get( elem );

\t\t\t\tif ( elem.nodeType === 1 && !data_priv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE11+
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = jQuery.camelCase( name.slice(5) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tdata_priv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each(function() {
\t\t\t\tdata_user.set( this, key );
\t\t\t});
\t\t}

\t\treturn access( this, function( value ) {
\t\t\tvar data,
\t\t\t\tcamelKey = jQuery.camelCase( key );

\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\tif ( elem && value === undefined ) {
\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// with the key as-is
\t\t\t\tdata = data_user.get( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// with the key camelized
\t\t\t\tdata = data_user.get( elem, camelKey );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\tdata = dataAttr( elem, camelKey, undefined );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\treturn;
\t\t\t}

\t\t\t// Set the data...
\t\t\tthis.each(function() {
\t\t\t\t// First, attempt to store a copy or reference of any
\t\t\t\t// data that might've been store with a camelCased key.
\t\t\t\tvar data = data_user.get( this, camelKey );

\t\t\t\t// For HTML5 data-* attribute interop, we have to
\t\t\t\t// store property names with dashes in a camelCase form.
\t\t\t\t// This might not apply to all properties...*
\t\t\t\tdata_user.set( this, camelKey, value );

\t\t\t\t// *... In the case of properties that might _actually_
\t\t\t\t// have dashes, we need to also store a copy of that
\t\t\t\t// unchanged property.
\t\t\t\tif ( key.indexOf(\"-\") !== -1 && data !== undefined ) {
\t\t\t\t\tdata_user.set( this, key, value );
\t\t\t\t}
\t\t\t});
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each(function() {
\t\t\tdata_user.remove( this, key );
\t\t});
\t}
});

return jQuery;
});
";
        
        $__internal_e7d94ae1b876b28b7bab4340809ab45c5d16e9dcbf53c81b487f5cd29a9e7b0f->leave($__internal_e7d94ae1b876b28b7bab4340809ab45c5d16e9dcbf53c81b487f5cd29a9e7b0f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/data.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/rnotwhite\",
\t\"./core/access\",
\t\"./data/var/data_priv\",
\t\"./data/var/data_user\"
], function( jQuery, rnotwhite, access, data_priv, data_user ) {

//\tImplementation Summary
//
//\t1. Enforce API surface and semantic compatibility with 1.9.x branch
//\t2. Improve the module's maintainability by reducing the storage
//\t\tpaths to a single mechanism.
//\t3. Use the same single mechanism to support \"private\" and \"user\" data.
//\t4. _Never_ expose \"private\" data to user code (TODO: Drop _data, _removeData)
//\t5. Avoid exposing implementation details on user objects (eg. expando properties)
//\t6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\\{[\\w\\W]*\\}|\\[[\\w\\W]*\\])\$/,
\trmultiDash = /([A-Z])/g;

function dataAttr( elem, key, data ) {
\tvar name;

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {
\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$1\" ).toLowerCase();
\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = data === \"true\" ? true :
\t\t\t\t\tdata === \"false\" ? false :
\t\t\t\t\tdata === \"null\" ? null :
\t\t\t\t\t// Only convert to a number if it doesn't change the string
\t\t\t\t\t+data + \"\" === data ? +data :
\t\t\t\t\trbrace.test( data ) ? jQuery.parseJSON( data ) :
\t\t\t\t\tdata;
\t\t\t} catch( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tdata_user.set( elem, key, data );
\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}
\treturn data;
}

jQuery.extend({
\thasData: function( elem ) {
\t\treturn data_user.hasData( elem ) || data_priv.hasData( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn data_user.access( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\tdata_user.remove( elem, name );
\t},

\t// TODO: Now that all calls to _data and _removeData have been replaced
\t// with direct calls to data_priv methods, these can be deprecated.
\t_data: function( elem, name, data ) {
\t\treturn data_priv.access( elem, name, data );
\t},

\t_removeData: function( elem, name ) {
\t\tdata_priv.remove( elem, name );
\t}
});

jQuery.fn.extend({
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = data_user.get( elem );

\t\t\t\tif ( elem.nodeType === 1 && !data_priv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE11+
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = jQuery.camelCase( name.slice(5) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tdata_priv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each(function() {
\t\t\t\tdata_user.set( this, key );
\t\t\t});
\t\t}

\t\treturn access( this, function( value ) {
\t\t\tvar data,
\t\t\t\tcamelKey = jQuery.camelCase( key );

\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\tif ( elem && value === undefined ) {
\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// with the key as-is
\t\t\t\tdata = data_user.get( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// with the key camelized
\t\t\t\tdata = data_user.get( elem, camelKey );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\tdata = dataAttr( elem, camelKey, undefined );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\treturn;
\t\t\t}

\t\t\t// Set the data...
\t\t\tthis.each(function() {
\t\t\t\t// First, attempt to store a copy or reference of any
\t\t\t\t// data that might've been store with a camelCased key.
\t\t\t\tvar data = data_user.get( this, camelKey );

\t\t\t\t// For HTML5 data-* attribute interop, we have to
\t\t\t\t// store property names with dashes in a camelCase form.
\t\t\t\t// This might not apply to all properties...*
\t\t\t\tdata_user.set( this, camelKey, value );

\t\t\t\t// *... In the case of properties that might _actually_
\t\t\t\t// have dashes, we need to also store a copy of that
\t\t\t\t// unchanged property.
\t\t\t\tif ( key.indexOf(\"-\") !== -1 && data !== undefined ) {
\t\t\t\t\tdata_user.set( this, key, value );
\t\t\t\t}
\t\t\t});
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each(function() {
\t\t\tdata_user.remove( this, key );
\t\t});
\t}
});

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/data.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/data.js");
    }
}
