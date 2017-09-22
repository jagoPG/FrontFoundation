<?php

/* node_modules/jquery/src/attributes/attr.js */
class __TwigTemplate_7e237bfa0018e1ed0fb4b10246b101c3b1e9adc522c0b6621850b169934a4f7a extends Twig_Template
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
        $__internal_b679011980b47dbf4307e926f3c8c0855342f2f2f06f8bd5b43c2ce285483288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b679011980b47dbf4307e926f3c8c0855342f2f2f06f8bd5b43c2ce285483288->enter($__internal_b679011980b47dbf4307e926f3c8c0855342f2f2f06f8bd5b43c2ce285483288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/attributes/attr.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../core/access\",
\t\"../core/nodeName\",
\t\"./support\",
\t\"../var/rnothtmlwhite\",
\t\"../selector\"
], function( jQuery, access, nodeName, support, rnothtmlwhite ) {

\"use strict\";

var boolHook,
\tattrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each( function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t} );
\t}
} );

jQuery.extend( {
\tattr: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set attributes on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === \"undefined\" ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// Attribute hooks are determined by the lowercase version
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\thooks = jQuery.attrHooks[ name.toLowerCase() ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\telem.setAttribute( name, value + \"\" );
\t\t\treturn value;
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\tret = jQuery.find.attr( elem, name );

\t\t// Non-existent attributes return null, we normalize to undefined
\t\treturn ret == null ? undefined : ret;
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tnodeName( elem, \"input\" ) ) {
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name,
\t\t\ti = 0,

\t\t\t// Attribute names can contain non-HTML whitespace characters
\t\t\t// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
\t\t\tattrNames = value && value.match( rnothtmlwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( ( name = attrNames[ i++ ] ) ) {
\t\t\t\telem.removeAttribute( name );
\t\t\t}
\t\t}
\t}
} );

// Hooks for boolean attributes
boolHook = {
\tset: function( elem, value, name ) {
\t\tif ( value === false ) {

\t\t\t// Remove boolean attributes when set to false
\t\t\tjQuery.removeAttr( elem, name );
\t\t} else {
\t\t\telem.setAttribute( name, name );
\t\t}
\t\treturn name;
\t}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\\w+/g ), function( i, name ) {
\tvar getter = attrHandle[ name ] || jQuery.find.attr;

\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\tvar ret, handle,
\t\t\tlowercaseName = name.toLowerCase();

\t\tif ( !isXML ) {

\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\thandle = attrHandle[ lowercaseName ];
\t\t\tattrHandle[ lowercaseName ] = ret;
\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\tlowercaseName :
\t\t\t\tnull;
\t\t\tattrHandle[ lowercaseName ] = handle;
\t\t}
\t\treturn ret;
\t};
} );

} );
";
        
        $__internal_b679011980b47dbf4307e926f3c8c0855342f2f2f06f8bd5b43c2ce285483288->leave($__internal_b679011980b47dbf4307e926f3c8c0855342f2f2f06f8bd5b43c2ce285483288_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/attributes/attr.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../core/access\",
\t\"../core/nodeName\",
\t\"./support\",
\t\"../var/rnothtmlwhite\",
\t\"../selector\"
], function( jQuery, access, nodeName, support, rnothtmlwhite ) {

\"use strict\";

var boolHook,
\tattrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each( function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t} );
\t}
} );

jQuery.extend( {
\tattr: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set attributes on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === \"undefined\" ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// Attribute hooks are determined by the lowercase version
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\thooks = jQuery.attrHooks[ name.toLowerCase() ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\telem.setAttribute( name, value + \"\" );
\t\t\treturn value;
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\tret = jQuery.find.attr( elem, name );

\t\t// Non-existent attributes return null, we normalize to undefined
\t\treturn ret == null ? undefined : ret;
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tnodeName( elem, \"input\" ) ) {
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name,
\t\t\ti = 0,

\t\t\t// Attribute names can contain non-HTML whitespace characters
\t\t\t// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
\t\t\tattrNames = value && value.match( rnothtmlwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( ( name = attrNames[ i++ ] ) ) {
\t\t\t\telem.removeAttribute( name );
\t\t\t}
\t\t}
\t}
} );

// Hooks for boolean attributes
boolHook = {
\tset: function( elem, value, name ) {
\t\tif ( value === false ) {

\t\t\t// Remove boolean attributes when set to false
\t\t\tjQuery.removeAttr( elem, name );
\t\t} else {
\t\t\telem.setAttribute( name, name );
\t\t}
\t\treturn name;
\t}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\\w+/g ), function( i, name ) {
\tvar getter = attrHandle[ name ] || jQuery.find.attr;

\tattrHandle[ name ] = function( elem, name, isXML ) {
\t\tvar ret, handle,
\t\t\tlowercaseName = name.toLowerCase();

\t\tif ( !isXML ) {

\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\thandle = attrHandle[ lowercaseName ];
\t\t\tattrHandle[ lowercaseName ] = ret;
\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\tlowercaseName :
\t\t\t\tnull;
\t\t\tattrHandle[ lowercaseName ] = handle;
\t\t}
\t\treturn ret;
\t};
} );

} );
", "node_modules/jquery/src/attributes/attr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/attributes/attr.js");
    }
}
