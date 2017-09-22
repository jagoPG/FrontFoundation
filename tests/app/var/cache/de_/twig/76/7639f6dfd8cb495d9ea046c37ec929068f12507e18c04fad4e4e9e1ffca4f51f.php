<?php

/* node_modules/jquery/src/attributes/classes.js */
class __TwigTemplate_97c4a60a64d8fc2184f28b13c435d70a8948dce3111b271d2df71ffaebfd17a8 extends Twig_Template
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
        $__internal_499e7f14a31365a39a1505b846d6fb08bf4f866175c045ce379a984497451e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499e7f14a31365a39a1505b846d6fb08bf4f866175c045ce379a984497451e4c->enter($__internal_499e7f14a31365a39a1505b846d6fb08bf4f866175c045ce379a984497451e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/attributes/classes.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../core/stripAndCollapse\",
\t\"../var/rnothtmlwhite\",
\t\"../data/var/dataPriv\",
\t\"../core/init\"
], function( jQuery, stripAndCollapse, rnothtmlwhite, dataPriv ) {

\"use strict\";

function getClass( elem ) {
\treturn elem.getAttribute && elem.getAttribute( \"class\" ) || \"\";
}

jQuery.fn.extend( {
\taddClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tif ( typeof value === \"string\" && value ) {
\t\t\tclasses = value.match( rnothtmlwhite ) || [];

\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );
\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tif ( !arguments.length ) {
\t\t\treturn this.attr( \"class\", \"\" );
\t\t}

\t\tif ( typeof value === \"string\" && value ) {
\t\t\tclasses = value.match( rnothtmlwhite ) || [];

\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );

\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {

\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) > -1 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value;

\t\tif ( typeof stateVal === \"boolean\" && type === \"string\" ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).toggleClass(
\t\t\t\t\tvalue.call( this, i, getClass( this ), stateVal ),
\t\t\t\t\tstateVal
\t\t\t\t);
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar className, i, self, classNames;

\t\t\tif ( type === \"string\" ) {

\t\t\t\t// Toggle individual class names
\t\t\t\ti = 0;
\t\t\t\tself = jQuery( this );
\t\t\t\tclassNames = value.match( rnothtmlwhite ) || [];

\t\t\t\twhile ( ( className = classNames[ i++ ] ) ) {

\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( value === undefined || type === \"boolean\" ) {
\t\t\t\tclassName = getClass( this );
\t\t\t\tif ( className ) {

\t\t\t\t\t// Store className if set
\t\t\t\t\tdataPriv.set( this, \"__className__\", className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tif ( this.setAttribute ) {
\t\t\t\t\tthis.setAttribute( \"class\",
\t\t\t\t\t\tclassName || value === false ?
\t\t\t\t\t\t\"\" :
\t\t\t\t\t\tdataPriv.get( this, \"__className__\" ) || \"\"
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\thasClass: function( selector ) {
\t\tvar className, elem,
\t\t\ti = 0;

\t\tclassName = \" \" + selector + \" \";
\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\tif ( elem.nodeType === 1 &&
\t\t\t\t( \" \" + stripAndCollapse( getClass( elem ) ) + \" \" ).indexOf( className ) > -1 ) {
\t\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
} );

} );
";
        
        $__internal_499e7f14a31365a39a1505b846d6fb08bf4f866175c045ce379a984497451e4c->leave($__internal_499e7f14a31365a39a1505b846d6fb08bf4f866175c045ce379a984497451e4c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/attributes/classes.js";
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
\t\"../var/rnothtmlwhite\",
\t\"../data/var/dataPriv\",
\t\"../core/init\"
], function( jQuery, stripAndCollapse, rnothtmlwhite, dataPriv ) {

\"use strict\";

function getClass( elem ) {
\treturn elem.getAttribute && elem.getAttribute( \"class\" ) || \"\";
}

jQuery.fn.extend( {
\taddClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tif ( typeof value === \"string\" && value ) {
\t\t\tclasses = value.match( rnothtmlwhite ) || [];

\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );
\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, curValue, clazz, j, finalValue,
\t\t\ti = 0;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
\t\t\t} );
\t\t}

\t\tif ( !arguments.length ) {
\t\t\treturn this.attr( \"class\", \"\" );
\t\t}

\t\tif ( typeof value === \"string\" && value ) {
\t\t\tclasses = value.match( rnothtmlwhite ) || [];

\t\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\t\tcurValue = getClass( elem );

\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( \" \" + stripAndCollapse( curValue ) + \" \" );

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( ( clazz = classes[ j++ ] ) ) {

\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) > -1 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = stripAndCollapse( cur );
\t\t\t\t\tif ( curValue !== finalValue ) {
\t\t\t\t\t\telem.setAttribute( \"class\", finalValue );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value;

\t\tif ( typeof stateVal === \"boolean\" && type === \"string\" ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).toggleClass(
\t\t\t\t\tvalue.call( this, i, getClass( this ), stateVal ),
\t\t\t\t\tstateVal
\t\t\t\t);
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar className, i, self, classNames;

\t\t\tif ( type === \"string\" ) {

\t\t\t\t// Toggle individual class names
\t\t\t\ti = 0;
\t\t\t\tself = jQuery( this );
\t\t\t\tclassNames = value.match( rnothtmlwhite ) || [];

\t\t\t\twhile ( ( className = classNames[ i++ ] ) ) {

\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( value === undefined || type === \"boolean\" ) {
\t\t\t\tclassName = getClass( this );
\t\t\t\tif ( className ) {

\t\t\t\t\t// Store className if set
\t\t\t\t\tdataPriv.set( this, \"__className__\", className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tif ( this.setAttribute ) {
\t\t\t\t\tthis.setAttribute( \"class\",
\t\t\t\t\t\tclassName || value === false ?
\t\t\t\t\t\t\"\" :
\t\t\t\t\t\tdataPriv.get( this, \"__className__\" ) || \"\"
\t\t\t\t\t);
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\thasClass: function( selector ) {
\t\tvar className, elem,
\t\t\ti = 0;

\t\tclassName = \" \" + selector + \" \";
\t\twhile ( ( elem = this[ i++ ] ) ) {
\t\t\tif ( elem.nodeType === 1 &&
\t\t\t\t( \" \" + stripAndCollapse( getClass( elem ) ) + \" \" ).indexOf( className ) > -1 ) {
\t\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
} );

} );
", "node_modules/jquery/src/attributes/classes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/attributes/classes.js");
    }
}
