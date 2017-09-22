<?php

/* node_modules/parsleyjs/bower_components/jquery/src/attributes/attr.js */
class __TwigTemplate_a7d26a3847b140339acf8541eae2b2a45bfe8ee0eb2fb924b0702dd5425fd452 extends Twig_Template
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
        $__internal_fac8e6db329edac69094c8eb1b18d824569055e6d933448e6c7ec2a9c0fdf36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac8e6db329edac69094c8eb1b18d824569055e6d933448e6c7ec2a9c0fdf36b->enter($__internal_fac8e6db329edac69094c8eb1b18d824569055e6d933448e6c7ec2a9c0fdf36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/attributes/attr.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../var/rnotwhite\",
\t\"../var/strundefined\",
\t\"../core/access\",
\t\"./support\",
\t\"../selector\"
], function( jQuery, rnotwhite, strundefined, access, support ) {

var nodeHook, boolHook,
\tattrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend({
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each(function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t});
\t}
});

jQuery.extend({
\tattr: function( elem, name, value ) {
\t\tvar hooks, ret,
\t\t\tnType = elem.nodeType;

\t\t// don't get/set attributes on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === strundefined ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// All attributes are lowercase
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\tname = name.toLowerCase();
\t\t\thooks = jQuery.attrHooks[ name ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : nodeHook );
\t\t}

\t\tif ( value !== undefined ) {

\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );

\t\t\t} else if ( hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {
\t\t\t\treturn ret;

\t\t\t} else {
\t\t\t\telem.setAttribute( name, value + \"\" );
\t\t\t\treturn value;
\t\t\t}

\t\t} else if ( hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ) {
\t\t\treturn ret;

\t\t} else {
\t\t\tret = jQuery.find.attr( elem, name );

\t\t\t// Non-existent attributes return null, we normalize to undefined
\t\t\treturn ret == null ?
\t\t\t\tundefined :
\t\t\t\tret;
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name, propName,
\t\t\ti = 0,
\t\t\tattrNames = value && value.match( rnotwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( (name = attrNames[i++]) ) {
\t\t\t\tpropName = jQuery.propFix[ name ] || name;

\t\t\t\t// Boolean attributes get special treatment (#10870)
\t\t\t\tif ( jQuery.expr.match.bool.test( name ) ) {
\t\t\t\t\t// Set corresponding property to false
\t\t\t\t\telem[ propName ] = false;
\t\t\t\t}

\t\t\t\telem.removeAttribute( name );
\t\t\t}
\t\t}
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tjQuery.nodeName( elem, \"input\" ) ) {
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
});

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
\t\tvar ret, handle;
\t\tif ( !isXML ) {
\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\thandle = attrHandle[ name ];
\t\t\tattrHandle[ name ] = ret;
\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\tname.toLowerCase() :
\t\t\t\tnull;
\t\t\tattrHandle[ name ] = handle;
\t\t}
\t\treturn ret;
\t};
});

});
";
        
        $__internal_fac8e6db329edac69094c8eb1b18d824569055e6d933448e6c7ec2a9c0fdf36b->leave($__internal_fac8e6db329edac69094c8eb1b18d824569055e6d933448e6c7ec2a9c0fdf36b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/attributes/attr.js";
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
\t\"../var/strundefined\",
\t\"../core/access\",
\t\"./support\",
\t\"../selector\"
], function( jQuery, rnotwhite, strundefined, access, support ) {

var nodeHook, boolHook,
\tattrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend({
\tattr: function( name, value ) {
\t\treturn access( this, jQuery.attr, name, value, arguments.length > 1 );
\t},

\tremoveAttr: function( name ) {
\t\treturn this.each(function() {
\t\t\tjQuery.removeAttr( this, name );
\t\t});
\t}
});

jQuery.extend({
\tattr: function( elem, name, value ) {
\t\tvar hooks, ret,
\t\t\tnType = elem.nodeType;

\t\t// don't get/set attributes on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\t// Fallback to prop when attributes are not supported
\t\tif ( typeof elem.getAttribute === strundefined ) {
\t\t\treturn jQuery.prop( elem, name, value );
\t\t}

\t\t// All attributes are lowercase
\t\t// Grab necessary hook if one is defined
\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
\t\t\tname = name.toLowerCase();
\t\t\thooks = jQuery.attrHooks[ name ] ||
\t\t\t\t( jQuery.expr.match.bool.test( name ) ? boolHook : nodeHook );
\t\t}

\t\tif ( value !== undefined ) {

\t\t\tif ( value === null ) {
\t\t\t\tjQuery.removeAttr( elem, name );

\t\t\t} else if ( hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ) {
\t\t\t\treturn ret;

\t\t\t} else {
\t\t\t\telem.setAttribute( name, value + \"\" );
\t\t\t\treturn value;
\t\t\t}

\t\t} else if ( hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ) {
\t\t\treturn ret;

\t\t} else {
\t\t\tret = jQuery.find.attr( elem, name );

\t\t\t// Non-existent attributes return null, we normalize to undefined
\t\t\treturn ret == null ?
\t\t\t\tundefined :
\t\t\t\tret;
\t\t}
\t},

\tremoveAttr: function( elem, value ) {
\t\tvar name, propName,
\t\t\ti = 0,
\t\t\tattrNames = value && value.match( rnotwhite );

\t\tif ( attrNames && elem.nodeType === 1 ) {
\t\t\twhile ( (name = attrNames[i++]) ) {
\t\t\t\tpropName = jQuery.propFix[ name ] || name;

\t\t\t\t// Boolean attributes get special treatment (#10870)
\t\t\t\tif ( jQuery.expr.match.bool.test( name ) ) {
\t\t\t\t\t// Set corresponding property to false
\t\t\t\t\telem[ propName ] = false;
\t\t\t\t}

\t\t\t\telem.removeAttribute( name );
\t\t\t}
\t\t}
\t},

\tattrHooks: {
\t\ttype: {
\t\t\tset: function( elem, value ) {
\t\t\t\tif ( !support.radioValue && value === \"radio\" &&
\t\t\t\t\tjQuery.nodeName( elem, \"input\" ) ) {
\t\t\t\t\tvar val = elem.value;
\t\t\t\t\telem.setAttribute( \"type\", value );
\t\t\t\t\tif ( val ) {
\t\t\t\t\t\telem.value = val;
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
});

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
\t\tvar ret, handle;
\t\tif ( !isXML ) {
\t\t\t// Avoid an infinite loop by temporarily removing this function from the getter
\t\t\thandle = attrHandle[ name ];
\t\t\tattrHandle[ name ] = ret;
\t\t\tret = getter( elem, name, isXML ) != null ?
\t\t\t\tname.toLowerCase() :
\t\t\t\tnull;
\t\t\tattrHandle[ name ] = handle;
\t\t}
\t\treturn ret;
\t};
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/attributes/attr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/attributes/attr.js");
    }
}
