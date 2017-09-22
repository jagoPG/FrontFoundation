<?php

/* node_modules/jquery/src/attributes/val.js */
class __TwigTemplate_ef8532f5b4aa07a1d4cbd4dd9d040899d9f068406a0ff0340f0b9f910ae53f08 extends Twig_Template
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
        $__internal_3af5eb25c1d8eadc9bf545949d07da28eaf80c55ba32e2de9e2e414d68946dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af5eb25c1d8eadc9bf545949d07da28eaf80c55ba32e2de9e2e414d68946dd1->enter($__internal_3af5eb25c1d8eadc9bf545949d07da28eaf80c55ba32e2de9e2e414d68946dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/attributes/val.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../core/stripAndCollapse\",
\t\"./support\",
\t\"../core/nodeName\",

\t\"../core/init\"
], function( jQuery, stripAndCollapse, support, nodeName ) {

\"use strict\";

var rreturn = /\\r/g;

jQuery.fn.extend( {
\tval: function( value ) {
\t\tvar hooks, ret, isFunction,
\t\t\telem = this[ 0 ];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] ||
\t\t\t\t\tjQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks &&
\t\t\t\t\t\"get\" in hooks &&
\t\t\t\t\t( ret = hooks.get( elem, \"value\" ) ) !== undefined
\t\t\t\t) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\t// Handle most common string cases
\t\t\t\tif ( typeof ret === \"string\" ) {
\t\t\t\t\treturn ret.replace( rreturn, \"\" );
\t\t\t\t}

\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\treturn ret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tisFunction = jQuery.isFunction( value );

\t\treturn this.each( function( i ) {
\t\t\tvar val;

\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( isFunction ) {
\t\t\t\tval = value.call( this, i, jQuery( this ).val() );
\t\t\t} else {
\t\t\t\tval = value;
\t\t\t}

\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\tif ( val == null ) {
\t\t\t\tval = \"\";

\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\tval += \"\";

\t\t\t} else if ( Array.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t} );
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !( \"set\" in hooks ) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t} );
\t}
} );

jQuery.extend( {
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {

\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :

\t\t\t\t\t// Support: IE <=10 - 11 only
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\t// Strip and collapse whitespace
\t\t\t\t\t// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
\t\t\t\t\tstripAndCollapse( jQuery.text( elem ) );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option, i,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\",
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length;

\t\t\t\tif ( index < 0 ) {
\t\t\t\t\ti = max;

\t\t\t\t} else {
\t\t\t\t\ti = one ? index : 0;
\t\t\t\t}

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t// IE8-9 doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&

\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t!option.disabled &&
\t\t\t\t\t\t\t( !option.parentNode.disabled ||
\t\t\t\t\t\t\t\t!nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn values;
\t\t\t},

\t\t\tset: function( elem, value ) {
\t\t\t\tvar optionSet, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tvalues = jQuery.makeArray( value ),
\t\t\t\t\ti = options.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t/* eslint-disable no-cond-assign */

\t\t\t\t\tif ( option.selected =
\t\t\t\t\t\tjQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
\t\t\t\t\t) {
\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t}

\t\t\t\t\t/* eslint-enable no-cond-assign */
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( Array.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute( \"value\" ) === null ? \"on\" : elem.value;
\t\t};
\t}
} );

} );
";
        
        $__internal_3af5eb25c1d8eadc9bf545949d07da28eaf80c55ba32e2de9e2e414d68946dd1->leave($__internal_3af5eb25c1d8eadc9bf545949d07da28eaf80c55ba32e2de9e2e414d68946dd1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/attributes/val.js";
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
\t\"./support\",
\t\"../core/nodeName\",

\t\"../core/init\"
], function( jQuery, stripAndCollapse, support, nodeName ) {

\"use strict\";

var rreturn = /\\r/g;

jQuery.fn.extend( {
\tval: function( value ) {
\t\tvar hooks, ret, isFunction,
\t\t\telem = this[ 0 ];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] ||
\t\t\t\t\tjQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks &&
\t\t\t\t\t\"get\" in hooks &&
\t\t\t\t\t( ret = hooks.get( elem, \"value\" ) ) !== undefined
\t\t\t\t) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\t// Handle most common string cases
\t\t\t\tif ( typeof ret === \"string\" ) {
\t\t\t\t\treturn ret.replace( rreturn, \"\" );
\t\t\t\t}

\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\treturn ret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tisFunction = jQuery.isFunction( value );

\t\treturn this.each( function( i ) {
\t\t\tvar val;

\t\t\tif ( this.nodeType !== 1 ) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif ( isFunction ) {
\t\t\t\tval = value.call( this, i, jQuery( this ).val() );
\t\t\t} else {
\t\t\t\tval = value;
\t\t\t}

\t\t\t// Treat null/undefined as \"\"; convert numbers to string
\t\t\tif ( val == null ) {
\t\t\t\tval = \"\";

\t\t\t} else if ( typeof val === \"number\" ) {
\t\t\t\tval += \"\";

\t\t\t} else if ( Array.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t} );
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !( \"set\" in hooks ) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t} );
\t}
} );

jQuery.extend( {
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {

\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :

\t\t\t\t\t// Support: IE <=10 - 11 only
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\t// Strip and collapse whitespace
\t\t\t\t\t// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
\t\t\t\t\tstripAndCollapse( jQuery.text( elem ) );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option, i,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\",
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length;

\t\t\t\tif ( index < 0 ) {
\t\t\t\t\ti = max;

\t\t\t\t} else {
\t\t\t\t\ti = one ? index : 0;
\t\t\t\t}

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// Support: IE <=9 only
\t\t\t\t\t// IE8-9 doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&

\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t!option.disabled &&
\t\t\t\t\t\t\t( !option.parentNode.disabled ||
\t\t\t\t\t\t\t\t!nodeName( option.parentNode, \"optgroup\" ) ) ) {

\t\t\t\t\t\t// Get the specific value for the option
\t\t\t\t\t\tvalue = jQuery( option ).val();

\t\t\t\t\t\t// We don't need an array for one selects
\t\t\t\t\t\tif ( one ) {
\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t}

\t\t\t\t\t\t// Multi-Selects return an array
\t\t\t\t\t\tvalues.push( value );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\treturn values;
\t\t\t},

\t\t\tset: function( elem, value ) {
\t\t\t\tvar optionSet, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tvalues = jQuery.makeArray( value ),
\t\t\t\t\ti = options.length;

\t\t\t\twhile ( i-- ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t/* eslint-disable no-cond-assign */

\t\t\t\t\tif ( option.selected =
\t\t\t\t\t\tjQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
\t\t\t\t\t) {
\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t}

\t\t\t\t\t/* eslint-enable no-cond-assign */
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( Array.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute( \"value\" ) === null ? \"on\" : elem.value;
\t\t};
\t}
} );

} );
", "node_modules/jquery/src/attributes/val.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/attributes/val.js");
    }
}
