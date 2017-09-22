<?php

/* node_modules/jquery/src/data.js */
class __TwigTemplate_7dd74500da90aa299a8e4d6e390c5b70ac8c9470127b92998eb12193c84fccd3 extends Twig_Template
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
        $__internal_a752774bf235ce2fb3794fc565a3882cbed87088451af7f08328aa6cdffaa0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a752774bf235ce2fb3794fc565a3882cbed87088451af7f08328aa6cdffaa0ec->enter($__internal_a752774bf235ce2fb3794fc565a3882cbed87088451af7f08328aa6cdffaa0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/data.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./core/access\",
\t\"./data/var/dataPriv\",
\t\"./data/var/dataUser\"
], function( jQuery, access, dataPriv, dataUser ) {

\"use strict\";

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
\trmultiDash = /[A-Z]/g;

function getData( data ) {
\tif ( data === \"true\" ) {
\t\treturn true;
\t}

\tif ( data === \"false\" ) {
\t\treturn false;
\t}

\tif ( data === \"null\" ) {
\t\treturn null;
\t}

\t// Only convert to a number if it doesn't change the string
\tif ( data === +data + \"\" ) {
\t\treturn +data;
\t}

\tif ( rbrace.test( data ) ) {
\t\treturn JSON.parse( data );
\t}

\treturn data;
}

function dataAttr( elem, key, data ) {
\tvar name;

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {
\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$&\" ).toLowerCase();
\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = getData( data );
\t\t\t} catch ( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tdataUser.set( elem, key, data );
\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}
\treturn data;
}

jQuery.extend( {
\thasData: function( elem ) {
\t\treturn dataUser.hasData( elem ) || dataPriv.hasData( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn dataUser.access( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\tdataUser.remove( elem, name );
\t},

\t// TODO: Now that all calls to _data and _removeData have been replaced
\t// with direct calls to dataPriv methods, these can be deprecated.
\t_data: function( elem, name, data ) {
\t\treturn dataPriv.access( elem, name, data );
\t},

\t_removeData: function( elem, name ) {
\t\tdataPriv.remove( elem, name );
\t}
} );

jQuery.fn.extend( {
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = dataUser.get( elem );

\t\t\t\tif ( elem.nodeType === 1 && !dataPriv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE 11 only
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = jQuery.camelCase( name.slice( 5 ) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tdataPriv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each( function() {
\t\t\t\tdataUser.set( this, key );
\t\t\t} );
\t\t}

\t\treturn access( this, function( value ) {
\t\t\tvar data;

\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\tif ( elem && value === undefined ) {

\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// The key will always be camelCased in Data
\t\t\t\tdata = dataUser.get( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\tdata = dataAttr( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\treturn;
\t\t\t}

\t\t\t// Set the data...
\t\t\tthis.each( function() {

\t\t\t\t// We always store the camelCased key
\t\t\t\tdataUser.set( this, key, value );
\t\t\t} );
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each( function() {
\t\t\tdataUser.remove( this, key );
\t\t} );
\t}
} );

return jQuery;
} );
";
        
        $__internal_a752774bf235ce2fb3794fc565a3882cbed87088451af7f08328aa6cdffaa0ec->leave($__internal_a752774bf235ce2fb3794fc565a3882cbed87088451af7f08328aa6cdffaa0ec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/data.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./core/access\",
\t\"./data/var/dataPriv\",
\t\"./data/var/dataUser\"
], function( jQuery, access, dataPriv, dataUser ) {

\"use strict\";

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
\trmultiDash = /[A-Z]/g;

function getData( data ) {
\tif ( data === \"true\" ) {
\t\treturn true;
\t}

\tif ( data === \"false\" ) {
\t\treturn false;
\t}

\tif ( data === \"null\" ) {
\t\treturn null;
\t}

\t// Only convert to a number if it doesn't change the string
\tif ( data === +data + \"\" ) {
\t\treturn +data;
\t}

\tif ( rbrace.test( data ) ) {
\t\treturn JSON.parse( data );
\t}

\treturn data;
}

function dataAttr( elem, key, data ) {
\tvar name;

\t// If nothing was found internally, try to fetch any
\t// data from the HTML5 data-* attribute
\tif ( data === undefined && elem.nodeType === 1 ) {
\t\tname = \"data-\" + key.replace( rmultiDash, \"-\$&\" ).toLowerCase();
\t\tdata = elem.getAttribute( name );

\t\tif ( typeof data === \"string\" ) {
\t\t\ttry {
\t\t\t\tdata = getData( data );
\t\t\t} catch ( e ) {}

\t\t\t// Make sure we set the data so it isn't changed later
\t\t\tdataUser.set( elem, key, data );
\t\t} else {
\t\t\tdata = undefined;
\t\t}
\t}
\treturn data;
}

jQuery.extend( {
\thasData: function( elem ) {
\t\treturn dataUser.hasData( elem ) || dataPriv.hasData( elem );
\t},

\tdata: function( elem, name, data ) {
\t\treturn dataUser.access( elem, name, data );
\t},

\tremoveData: function( elem, name ) {
\t\tdataUser.remove( elem, name );
\t},

\t// TODO: Now that all calls to _data and _removeData have been replaced
\t// with direct calls to dataPriv methods, these can be deprecated.
\t_data: function( elem, name, data ) {
\t\treturn dataPriv.access( elem, name, data );
\t},

\t_removeData: function( elem, name ) {
\t\tdataPriv.remove( elem, name );
\t}
} );

jQuery.fn.extend( {
\tdata: function( key, value ) {
\t\tvar i, name, data,
\t\t\telem = this[ 0 ],
\t\t\tattrs = elem && elem.attributes;

\t\t// Gets all values
\t\tif ( key === undefined ) {
\t\t\tif ( this.length ) {
\t\t\t\tdata = dataUser.get( elem );

\t\t\t\tif ( elem.nodeType === 1 && !dataPriv.get( elem, \"hasDataAttrs\" ) ) {
\t\t\t\t\ti = attrs.length;
\t\t\t\t\twhile ( i-- ) {

\t\t\t\t\t\t// Support: IE 11 only
\t\t\t\t\t\t// The attrs elements can be null (#14894)
\t\t\t\t\t\tif ( attrs[ i ] ) {
\t\t\t\t\t\t\tname = attrs[ i ].name;
\t\t\t\t\t\t\tif ( name.indexOf( \"data-\" ) === 0 ) {
\t\t\t\t\t\t\t\tname = jQuery.camelCase( name.slice( 5 ) );
\t\t\t\t\t\t\t\tdataAttr( elem, name, data[ name ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tdataPriv.set( elem, \"hasDataAttrs\", true );
\t\t\t\t}
\t\t\t}

\t\t\treturn data;
\t\t}

\t\t// Sets multiple values
\t\tif ( typeof key === \"object\" ) {
\t\t\treturn this.each( function() {
\t\t\t\tdataUser.set( this, key );
\t\t\t} );
\t\t}

\t\treturn access( this, function( value ) {
\t\t\tvar data;

\t\t\t// The calling jQuery object (element matches) is not empty
\t\t\t// (and therefore has an element appears at this[ 0 ]) and the
\t\t\t// `value` parameter was not undefined. An empty jQuery object
\t\t\t// will result in `undefined` for elem = this[ 0 ] which will
\t\t\t// throw an exception if an attempt to read a data cache is made.
\t\t\tif ( elem && value === undefined ) {

\t\t\t\t// Attempt to get data from the cache
\t\t\t\t// The key will always be camelCased in Data
\t\t\t\tdata = dataUser.get( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// Attempt to \"discover\" the data in
\t\t\t\t// HTML5 custom data-* attrs
\t\t\t\tdata = dataAttr( elem, key );
\t\t\t\tif ( data !== undefined ) {
\t\t\t\t\treturn data;
\t\t\t\t}

\t\t\t\t// We tried really hard, but the data doesn't exist.
\t\t\t\treturn;
\t\t\t}

\t\t\t// Set the data...
\t\t\tthis.each( function() {

\t\t\t\t// We always store the camelCased key
\t\t\t\tdataUser.set( this, key, value );
\t\t\t} );
\t\t}, null, value, arguments.length > 1, null, true );
\t},

\tremoveData: function( key ) {
\t\treturn this.each( function() {
\t\t\tdataUser.remove( this, key );
\t\t} );
\t}
} );

return jQuery;
} );
", "node_modules/jquery/src/data.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/data.js");
    }
}
