<?php

/* node_modules/parsleyjs/bower_components/jquery/src/attributes/val.js */
class __TwigTemplate_084d9af3ff52a7d16cf71cb659e0a7e7ffe973b841259ee82e7eea1c218121b1 extends Twig_Template
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
        $__internal_ef50b1ba878d00ecb997103c4b7d822cf27ea6d0c50de2f952eb0ab2d09f4ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef50b1ba878d00ecb997103c4b7d822cf27ea6d0c50de2f952eb0ab2d09f4ff9->enter($__internal_ef50b1ba878d00ecb997103c4b7d822cf27ea6d0c50de2f952eb0ab2d09f4ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/attributes/val.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"./support\",
\t\"../core/init\"
], function( jQuery, support ) {

var rreturn = /\\r/g;

jQuery.fn.extend({
\tval: function( value ) {
\t\tvar hooks, ret, isFunction,
\t\t\telem = this[0];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, \"value\" )) !== undefined ) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\treturn typeof ret === \"string\" ?
\t\t\t\t\t// Handle most common string cases
\t\t\t\t\tret.replace(rreturn, \"\") :
\t\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\t\tret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tisFunction = jQuery.isFunction( value );

\t\treturn this.each(function( i ) {
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

\t\t\t} else if ( jQuery.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t});
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !(\"set\" in hooks) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t});
\t}
});

jQuery.extend({
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {
\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :
\t\t\t\t\t// Support: IE10-11+
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\tjQuery.trim( jQuery.text( elem ) );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\" || index < 0,
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length,
\t\t\t\t\ti = index < 0 ?
\t\t\t\t\t\tmax :
\t\t\t\t\t\tone ? index : 0;

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// IE6-9 doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&
\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t( support.optDisabled ? !option.disabled : option.getAttribute( \"disabled\" ) === null ) &&
\t\t\t\t\t\t\t( !option.parentNode.disabled || !jQuery.nodeName( option.parentNode, \"optgroup\" ) ) ) {

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
\t\t\t\t\tif ( (option.selected = jQuery.inArray( option.value, values ) >= 0) ) {
\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t}
});

// Radios and checkboxes getter/setter
jQuery.each([ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( jQuery.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery(elem).val(), value ) >= 0 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute(\"value\") === null ? \"on\" : elem.value;
\t\t};
\t}
});

});
";
        
        $__internal_ef50b1ba878d00ecb997103c4b7d822cf27ea6d0c50de2f952eb0ab2d09f4ff9->leave($__internal_ef50b1ba878d00ecb997103c4b7d822cf27ea6d0c50de2f952eb0ab2d09f4ff9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/attributes/val.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"./support\",
\t\"../core/init\"
], function( jQuery, support ) {

var rreturn = /\\r/g;

jQuery.fn.extend({
\tval: function( value ) {
\t\tvar hooks, ret, isFunction,
\t\t\telem = this[0];

\t\tif ( !arguments.length ) {
\t\t\tif ( elem ) {
\t\t\t\thooks = jQuery.valHooks[ elem.type ] || jQuery.valHooks[ elem.nodeName.toLowerCase() ];

\t\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, \"value\" )) !== undefined ) {
\t\t\t\t\treturn ret;
\t\t\t\t}

\t\t\t\tret = elem.value;

\t\t\t\treturn typeof ret === \"string\" ?
\t\t\t\t\t// Handle most common string cases
\t\t\t\t\tret.replace(rreturn, \"\") :
\t\t\t\t\t// Handle cases where value is null/undef or number
\t\t\t\t\tret == null ? \"\" : ret;
\t\t\t}

\t\t\treturn;
\t\t}

\t\tisFunction = jQuery.isFunction( value );

\t\treturn this.each(function( i ) {
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

\t\t\t} else if ( jQuery.isArray( val ) ) {
\t\t\t\tval = jQuery.map( val, function( value ) {
\t\t\t\t\treturn value == null ? \"\" : value + \"\";
\t\t\t\t});
\t\t\t}

\t\t\thooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

\t\t\t// If set returns undefined, fall back to normal setting
\t\t\tif ( !hooks || !(\"set\" in hooks) || hooks.set( this, val, \"value\" ) === undefined ) {
\t\t\t\tthis.value = val;
\t\t\t}
\t\t});
\t}
});

jQuery.extend({
\tvalHooks: {
\t\toption: {
\t\t\tget: function( elem ) {
\t\t\t\tvar val = jQuery.find.attr( elem, \"value\" );
\t\t\t\treturn val != null ?
\t\t\t\t\tval :
\t\t\t\t\t// Support: IE10-11+
\t\t\t\t\t// option.text throws exceptions (#14686, #14858)
\t\t\t\t\tjQuery.trim( jQuery.text( elem ) );
\t\t\t}
\t\t},
\t\tselect: {
\t\t\tget: function( elem ) {
\t\t\t\tvar value, option,
\t\t\t\t\toptions = elem.options,
\t\t\t\t\tindex = elem.selectedIndex,
\t\t\t\t\tone = elem.type === \"select-one\" || index < 0,
\t\t\t\t\tvalues = one ? null : [],
\t\t\t\t\tmax = one ? index + 1 : options.length,
\t\t\t\t\ti = index < 0 ?
\t\t\t\t\t\tmax :
\t\t\t\t\t\tone ? index : 0;

\t\t\t\t// Loop through all the selected options
\t\t\t\tfor ( ; i < max; i++ ) {
\t\t\t\t\toption = options[ i ];

\t\t\t\t\t// IE6-9 doesn't update selected after form reset (#2551)
\t\t\t\t\tif ( ( option.selected || i === index ) &&
\t\t\t\t\t\t\t// Don't return options that are disabled or in a disabled optgroup
\t\t\t\t\t\t\t( support.optDisabled ? !option.disabled : option.getAttribute( \"disabled\" ) === null ) &&
\t\t\t\t\t\t\t( !option.parentNode.disabled || !jQuery.nodeName( option.parentNode, \"optgroup\" ) ) ) {

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
\t\t\t\t\tif ( (option.selected = jQuery.inArray( option.value, values ) >= 0) ) {
\t\t\t\t\t\toptionSet = true;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Force browsers to behave consistently when non-matching value is set
\t\t\t\tif ( !optionSet ) {
\t\t\t\t\telem.selectedIndex = -1;
\t\t\t\t}
\t\t\t\treturn values;
\t\t\t}
\t\t}
\t}
});

// Radios and checkboxes getter/setter
jQuery.each([ \"radio\", \"checkbox\" ], function() {
\tjQuery.valHooks[ this ] = {
\t\tset: function( elem, value ) {
\t\t\tif ( jQuery.isArray( value ) ) {
\t\t\t\treturn ( elem.checked = jQuery.inArray( jQuery(elem).val(), value ) >= 0 );
\t\t\t}
\t\t}
\t};
\tif ( !support.checkOn ) {
\t\tjQuery.valHooks[ this ].get = function( elem ) {
\t\t\treturn elem.getAttribute(\"value\") === null ? \"on\" : elem.value;
\t\t};
\t}
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/attributes/val.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/attributes/val.js");
    }
}
