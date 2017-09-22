<?php

/* node_modules/jquery/src/attributes/prop.js */
class __TwigTemplate_676944895efb780435daf5616f3e807a164b9a1b09f07343490ac01c37245102 extends Twig_Template
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
        $__internal_09b84aed3a99b0ab35a8bdb9690e049a53cf7c984a3d5dbb92ef53625c688e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b84aed3a99b0ab35a8bdb9690e049a53cf7c984a3d5dbb92ef53625c688e5f->enter($__internal_09b84aed3a99b0ab35a8bdb9690e049a53cf7c984a3d5dbb92ef53625c688e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/attributes/prop.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../core/access\",
\t\"./support\",
\t\"../selector\"
], function( jQuery, access, support ) {

\"use strict\";

var rfocusable = /^(?:input|select|textarea|button)\$/i,
\trclickable = /^(?:a|area)\$/i;

jQuery.fn.extend( {
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\treturn this.each( function() {
\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t} );
\t}
} );

jQuery.extend( {
\tprop: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\treturn ( elem[ name ] = value );
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\treturn elem[ name ];
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {

\t\t\t\t// Support: IE <=9 - 11 only
\t\t\t\t// elem.tabIndex doesn't always return the
\t\t\t\t// correct value when it hasn't been explicitly set
\t\t\t\t// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
\t\t\t\t// Use proper attribute retrieval(#12072)
\t\t\t\tvar tabindex = jQuery.find.attr( elem, \"tabindex\" );

\t\t\t\tif ( tabindex ) {
\t\t\t\t\treturn parseInt( tabindex, 10 );
\t\t\t\t}

\t\t\t\tif (
\t\t\t\t\trfocusable.test( elem.nodeName ) ||
\t\t\t\t\trclickable.test( elem.nodeName ) &&
\t\t\t\t\telem.href
\t\t\t\t) {
\t\t\t\t\treturn 0;
\t\t\t\t}

\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t},

\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t}
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule \"no-unused-expressions\" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {

\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t}
\t\t\treturn null;
\t\t},
\t\tset: function( elem ) {

\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent ) {
\t\t\t\tparent.selectedIndex;

\t\t\t\tif ( parent.parentNode ) {
\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

jQuery.each( [
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
} );

} );
";
        
        $__internal_09b84aed3a99b0ab35a8bdb9690e049a53cf7c984a3d5dbb92ef53625c688e5f->leave($__internal_09b84aed3a99b0ab35a8bdb9690e049a53cf7c984a3d5dbb92ef53625c688e5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/attributes/prop.js";
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
\t\"./support\",
\t\"../selector\"
], function( jQuery, access, support ) {

\"use strict\";

var rfocusable = /^(?:input|select|textarea|button)\$/i,
\trclickable = /^(?:a|area)\$/i;

jQuery.fn.extend( {
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\treturn this.each( function() {
\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t} );
\t}
} );

jQuery.extend( {
\tprop: function( elem, name, value ) {
\t\tvar ret, hooks,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tif ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\tif ( hooks && \"set\" in hooks &&
\t\t\t\t( ret = hooks.set( elem, value, name ) ) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\treturn ( elem[ name ] = value );
\t\t}

\t\tif ( hooks && \"get\" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
\t\t\treturn ret;
\t\t}

\t\treturn elem[ name ];
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {

\t\t\t\t// Support: IE <=9 - 11 only
\t\t\t\t// elem.tabIndex doesn't always return the
\t\t\t\t// correct value when it hasn't been explicitly set
\t\t\t\t// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
\t\t\t\t// Use proper attribute retrieval(#12072)
\t\t\t\tvar tabindex = jQuery.find.attr( elem, \"tabindex\" );

\t\t\t\tif ( tabindex ) {
\t\t\t\t\treturn parseInt( tabindex, 10 );
\t\t\t\t}

\t\t\t\tif (
\t\t\t\t\trfocusable.test( elem.nodeName ) ||
\t\t\t\t\trclickable.test( elem.nodeName ) &&
\t\t\t\t\telem.href
\t\t\t\t) {
\t\t\t\t\treturn 0;
\t\t\t\t}

\t\t\t\treturn -1;
\t\t\t}
\t\t}
\t},

\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t}
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule \"no-unused-expressions\" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {

\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t}
\t\t\treturn null;
\t\t},
\t\tset: function( elem ) {

\t\t\t/* eslint no-unused-expressions: \"off\" */

\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent ) {
\t\t\t\tparent.selectedIndex;

\t\t\t\tif ( parent.parentNode ) {
\t\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t\t}
\t\t\t}
\t\t}
\t};
}

jQuery.each( [
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
} );

} );
", "node_modules/jquery/src/attributes/prop.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/attributes/prop.js");
    }
}
