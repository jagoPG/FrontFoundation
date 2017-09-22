<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css.js */
class __TwigTemplate_22f77644659ee6b46720e7e6c0395a3660818202480f5caf44524cb9a49e2669 extends Twig_Template
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
        $__internal_537f5bd54a4b848cd1a21966d913657d5c663f6667b0cb9bdc248d2ab134c423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537f5bd54a4b848cd1a21966d913657d5c663f6667b0cb9bdc248d2ab134c423->enter($__internal_537f5bd54a4b848cd1a21966d913657d5c663f6667b0cb9bdc248d2ab134c423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/pnum\",
\t\"./core/access\",
\t\"./css/var/rmargin\",
\t\"./css/var/rnumnonpx\",
\t\"./css/var/cssExpand\",
\t\"./css/var/isHidden\",
\t\"./css/var/getStyles\",
\t\"./css/curCSS\",
\t\"./css/defaultDisplay\",
\t\"./css/addGetHookIf\",
\t\"./css/support\",
\t\"./data/var/data_priv\",

\t\"./core/init\",
\t\"./css/swap\",
\t\"./core/ready\",
\t\"./selector\" // contains
], function( jQuery, pnum, access, rmargin, rnumnonpx, cssExpand, isHidden,
\tgetStyles, curCSS, defaultDisplay, addGetHookIf, support, data_priv ) {

var
\t// Swappable if display is none or starts with table except \"table\", \"table-cell\", or \"table-caption\"
\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trnumsplit = new RegExp( \"^(\" + pnum + \")(.*)\$\", \"i\" ),
\trrelNum = new RegExp( \"^([+-])=(\" + pnum + \")\", \"i\" ),

\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t},

\tcssPrefixes = [ \"Webkit\", \"O\", \"Moz\", \"ms\" ];

// Return a css property mapped to a potentially vendor prefixed property
function vendorPropName( style, name ) {

\t// Shortcut for names that are not vendor prefixed
\tif ( name in style ) {
\t\treturn name;
\t}

\t// Check for vendor prefixed names
\tvar capName = name[0].toUpperCase() + name.slice(1),
\t\torigName = name,
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in style ) {
\t\t\treturn name;
\t\t}
\t}

\treturn origName;
}

function setPositiveNumber( elem, value, subtract ) {
\tvar matches = rnumsplit.exec( value );
\treturn matches ?
\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || \"px\" ) :
\t\tvalue;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
\tvar i = extra === ( isBorderBox ? \"border\" : \"content\" ) ?
\t\t// If we already have the right measurement, avoid augmentation
\t\t4 :
\t\t// Otherwise initialize for horizontal or vertical properties
\t\tname === \"width\" ? 1 : 0,

\t\tval = 0;

\tfor ( ; i < 4; i += 2 ) {
\t\t// Both box models exclude margin, so add it if we want it
\t\tif ( extra === \"margin\" ) {
\t\t\tval += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
\t\t}

\t\tif ( isBorderBox ) {
\t\t\t// border-box includes padding, so remove it if we want content
\t\t\tif ( extra === \"content\" ) {
\t\t\t\tval -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// At this point, extra isn't border nor margin, so remove border
\t\t\tif ( extra !== \"margin\" ) {
\t\t\t\tval -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t} else {
\t\t\t// At this point, extra isn't content, so add padding
\t\t\tval += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t// At this point, extra isn't content nor padding, so add border
\t\t\tif ( extra !== \"padding\" ) {
\t\t\t\tval += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t}
\t}

\treturn val;
}

function getWidthOrHeight( elem, name, extra ) {

\t// Start with offset property, which is equivalent to the border-box value
\tvar valueIsBorderBox = true,
\t\tval = name === \"width\" ? elem.offsetWidth : elem.offsetHeight,
\t\tstyles = getStyles( elem ),
\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t// Some non-html elements return undefined for offsetWidth, so check for null/undefined
\t// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
\t// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
\tif ( val <= 0 || val == null ) {
\t\t// Fall back to computed then uncomputed css if necessary
\t\tval = curCSS( elem, name, styles );
\t\tif ( val < 0 || val == null ) {
\t\t\tval = elem.style[ name ];
\t\t}

\t\t// Computed unit is not pixels. Stop here and return.
\t\tif ( rnumnonpx.test(val) ) {
\t\t\treturn val;
\t\t}

\t\t// Check for style in case a browser which returns unreliable values
\t\t// for getComputedStyle silently falls back to the reliable elem.style
\t\tvalueIsBorderBox = isBorderBox &&
\t\t\t( support.boxSizingReliable() || val === elem.style[ name ] );

\t\t// Normalize \"\", auto, and prepare for extra
\t\tval = parseFloat( val ) || 0;
\t}

\t// Use the active box-sizing model to add/subtract irrelevant styles
\treturn ( val +
\t\taugmentWidthOrHeight(
\t\t\telem,
\t\t\tname,
\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\tvalueIsBorderBox,
\t\t\tstyles
\t\t)
\t) + \"px\";
}

function showHide( elements, show ) {
\tvar display, elem, hidden,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tvalues[ index ] = data_priv.get( elem, \"olddisplay\" );
\t\tdisplay = elem.style.display;
\t\tif ( show ) {
\t\t\t// Reset the inline display of this element to learn if it is
\t\t\t// being hidden by cascaded rules or not
\t\t\tif ( !values[ index ] && display === \"none\" ) {
\t\t\t\telem.style.display = \"\";
\t\t\t}

\t\t\t// Set elements which have been overridden with display: none
\t\t\t// in a stylesheet to whatever the default browser style is
\t\t\t// for such an element
\t\t\tif ( elem.style.display === \"\" && isHidden( elem ) ) {
\t\t\t\tvalues[ index ] = data_priv.access( elem, \"olddisplay\", defaultDisplay(elem.nodeName) );
\t\t\t}
\t\t} else {
\t\t\thidden = isHidden( elem );

\t\t\tif ( display !== \"none\" || !hidden ) {
\t\t\t\tdata_priv.set( elem, \"olddisplay\", hidden ? display : jQuery.css( elem, \"display\" ) );
\t\t\t}
\t\t}
\t}

\t// Set the display of most of the elements in a second loop
\t// to avoid the constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}
\t\tif ( !show || elem.style.display === \"none\" || elem.style.display === \"\" ) {
\t\t\telem.style.display = show ? values[ index ] || \"\" : \"none\";
\t\t}
\t}

\treturn elements;
}

jQuery.extend({

\t// Add in style property hooks for overriding the default
\t// behavior of getting and setting a style property
\tcssHooks: {
\t\topacity: {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {

\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Don't automatically add \"px\" to these possibly-unitless properties
\tcssNumber: {
\t\t\"columnCount\": true,
\t\t\"fillOpacity\": true,
\t\t\"flexGrow\": true,
\t\t\"flexShrink\": true,
\t\t\"fontWeight\": true,
\t\t\"lineHeight\": true,
\t\t\"opacity\": true,
\t\t\"order\": true,
\t\t\"orphans\": true,
\t\t\"widows\": true,
\t\t\"zIndex\": true,
\t\t\"zoom\": true
\t},

\t// Add in properties whose names you wish to fix before
\t// setting or getting the value
\tcssProps: {
\t\t\"float\": \"cssFloat\"
\t},

\t// Get and set the style property on a DOM Node
\tstyle: function( elem, name, value, extra ) {

\t\t// Don't set styles on text and comment nodes
\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\treturn;
\t\t}

\t\t// Make sure that we're working with the right name
\t\tvar ret, type, hooks,
\t\t\torigName = jQuery.camelCase( name ),
\t\t\tstyle = elem.style;

\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( style, origName ) );

\t\t// Gets hook for the prefixed version, then unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && (ret = rrelNum.exec( value )) ) {
\t\t\t\tvalue = ( ret[1] + 1 ) * ret[2] + parseFloat( jQuery.css( elem, name ) );
\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number, add 'px' to the (except for certain CSS properties)
\t\t\tif ( type === \"number\" && !jQuery.cssNumber[ origName ] ) {
\t\t\t\tvalue += \"px\";
\t\t\t}

\t\t\t// Support: IE9-11+
\t\t\t// background-* props affect original clone's values
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !(\"set\" in hooks) || (value = hooks.set( elem, value, extra )) !== undefined ) {
\t\t\t\tstyle[ name ] = value;
\t\t\t}

\t\t} else {
\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, false, extra )) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar val, num, hooks,
\t\t\torigName = jQuery.camelCase( name );

\t\t// Make sure that we're working with the right name
\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( elem.style, origName ) );

\t\t// Try prefixed name followed by the unprefixed name
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// If a hook was provided get the computed value from there
\t\tif ( hooks && \"get\" in hooks ) {
\t\t\tval = hooks.get( elem, true, extra );
\t\t}

\t\t// Otherwise, if a way to get the computed value exists, use that
\t\tif ( val === undefined ) {
\t\t\tval = curCSS( elem, name, styles );
\t\t}

\t\t// Convert \"normal\" to computed value
\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\tval = cssNormalTransform[ name ];
\t\t}

\t\t// Make numeric if forced or a qualifier was provided and val looks numeric
\t\tif ( extra === \"\" || extra ) {
\t\t\tnum = parseFloat( val );
\t\t\treturn extra === true || jQuery.isNumeric( num ) ? num || 0 : val;
\t\t}
\t\treturn val;
\t}
});

jQuery.each([ \"height\", \"width\" ], function( i, name ) {
\tjQuery.cssHooks[ name ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) && elem.offsetWidth === 0 ?
\t\t\t\t\tjQuery.swap( elem, cssShow, function() {
\t\t\t\t\t\treturn getWidthOrHeight( elem, name, extra );
\t\t\t\t\t}) :
\t\t\t\t\tgetWidthOrHeight( elem, name, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar styles = extra && getStyles( elem );
\t\t\treturn setPositiveNumber( elem, value, extra ?
\t\t\t\taugmentWidthOrHeight(
\t\t\t\t\telem,
\t\t\t\t\tname,
\t\t\t\t\textra,
\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tstyles
\t\t\t\t) : 0
\t\t\t);
\t\t}
\t};
});

// Support: Android 2.3
jQuery.cssHooks.marginRight = addGetHookIf( support.reliableMarginRight,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn jQuery.swap( elem, { \"display\": \"inline-block\" },
\t\t\t\tcurCSS, [ elem, \"marginRight\" ] );
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each({
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// Assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split(\" \") : [ value ];

\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t}

\t\t\treturn expanded;
\t\t}
\t};

\tif ( !rmargin.test( prefix ) ) {
\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t}
});

jQuery.fn.extend({
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( jQuery.isArray( name ) ) {
\t\t\t\tstyles = getStyles( elem );
\t\t\t\tlen = name.length;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t}

\t\t\t\treturn map;
\t\t\t}

\t\t\treturn value !== undefined ?
\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\tjQuery.css( elem, name );
\t\t}, name, value, arguments.length > 1 );
\t},
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( isHidden( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t});
\t}
});

return jQuery;
});
";
        
        $__internal_537f5bd54a4b848cd1a21966d913657d5c663f6667b0cb9bdc248d2ab134c423->leave($__internal_537f5bd54a4b848cd1a21966d913657d5c663f6667b0cb9bdc248d2ab134c423_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/pnum\",
\t\"./core/access\",
\t\"./css/var/rmargin\",
\t\"./css/var/rnumnonpx\",
\t\"./css/var/cssExpand\",
\t\"./css/var/isHidden\",
\t\"./css/var/getStyles\",
\t\"./css/curCSS\",
\t\"./css/defaultDisplay\",
\t\"./css/addGetHookIf\",
\t\"./css/support\",
\t\"./data/var/data_priv\",

\t\"./core/init\",
\t\"./css/swap\",
\t\"./core/ready\",
\t\"./selector\" // contains
], function( jQuery, pnum, access, rmargin, rnumnonpx, cssExpand, isHidden,
\tgetStyles, curCSS, defaultDisplay, addGetHookIf, support, data_priv ) {

var
\t// Swappable if display is none or starts with table except \"table\", \"table-cell\", or \"table-caption\"
\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trnumsplit = new RegExp( \"^(\" + pnum + \")(.*)\$\", \"i\" ),
\trrelNum = new RegExp( \"^([+-])=(\" + pnum + \")\", \"i\" ),

\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t},

\tcssPrefixes = [ \"Webkit\", \"O\", \"Moz\", \"ms\" ];

// Return a css property mapped to a potentially vendor prefixed property
function vendorPropName( style, name ) {

\t// Shortcut for names that are not vendor prefixed
\tif ( name in style ) {
\t\treturn name;
\t}

\t// Check for vendor prefixed names
\tvar capName = name[0].toUpperCase() + name.slice(1),
\t\torigName = name,
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in style ) {
\t\t\treturn name;
\t\t}
\t}

\treturn origName;
}

function setPositiveNumber( elem, value, subtract ) {
\tvar matches = rnumsplit.exec( value );
\treturn matches ?
\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || \"px\" ) :
\t\tvalue;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
\tvar i = extra === ( isBorderBox ? \"border\" : \"content\" ) ?
\t\t// If we already have the right measurement, avoid augmentation
\t\t4 :
\t\t// Otherwise initialize for horizontal or vertical properties
\t\tname === \"width\" ? 1 : 0,

\t\tval = 0;

\tfor ( ; i < 4; i += 2 ) {
\t\t// Both box models exclude margin, so add it if we want it
\t\tif ( extra === \"margin\" ) {
\t\t\tval += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
\t\t}

\t\tif ( isBorderBox ) {
\t\t\t// border-box includes padding, so remove it if we want content
\t\t\tif ( extra === \"content\" ) {
\t\t\t\tval -= jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );
\t\t\t}

\t\t\t// At this point, extra isn't border nor margin, so remove border
\t\t\tif ( extra !== \"margin\" ) {
\t\t\t\tval -= jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t} else {
\t\t\t// At this point, extra isn't content, so add padding
\t\t\tval += jQuery.css( elem, \"padding\" + cssExpand[ i ], true, styles );

\t\t\t// At this point, extra isn't content nor padding, so add border
\t\t\tif ( extra !== \"padding\" ) {
\t\t\t\tval += jQuery.css( elem, \"border\" + cssExpand[ i ] + \"Width\", true, styles );
\t\t\t}
\t\t}
\t}

\treturn val;
}

function getWidthOrHeight( elem, name, extra ) {

\t// Start with offset property, which is equivalent to the border-box value
\tvar valueIsBorderBox = true,
\t\tval = name === \"width\" ? elem.offsetWidth : elem.offsetHeight,
\t\tstyles = getStyles( elem ),
\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t// Some non-html elements return undefined for offsetWidth, so check for null/undefined
\t// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
\t// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
\tif ( val <= 0 || val == null ) {
\t\t// Fall back to computed then uncomputed css if necessary
\t\tval = curCSS( elem, name, styles );
\t\tif ( val < 0 || val == null ) {
\t\t\tval = elem.style[ name ];
\t\t}

\t\t// Computed unit is not pixels. Stop here and return.
\t\tif ( rnumnonpx.test(val) ) {
\t\t\treturn val;
\t\t}

\t\t// Check for style in case a browser which returns unreliable values
\t\t// for getComputedStyle silently falls back to the reliable elem.style
\t\tvalueIsBorderBox = isBorderBox &&
\t\t\t( support.boxSizingReliable() || val === elem.style[ name ] );

\t\t// Normalize \"\", auto, and prepare for extra
\t\tval = parseFloat( val ) || 0;
\t}

\t// Use the active box-sizing model to add/subtract irrelevant styles
\treturn ( val +
\t\taugmentWidthOrHeight(
\t\t\telem,
\t\t\tname,
\t\t\textra || ( isBorderBox ? \"border\" : \"content\" ),
\t\t\tvalueIsBorderBox,
\t\t\tstyles
\t\t)
\t) + \"px\";
}

function showHide( elements, show ) {
\tvar display, elem, hidden,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tvalues[ index ] = data_priv.get( elem, \"olddisplay\" );
\t\tdisplay = elem.style.display;
\t\tif ( show ) {
\t\t\t// Reset the inline display of this element to learn if it is
\t\t\t// being hidden by cascaded rules or not
\t\t\tif ( !values[ index ] && display === \"none\" ) {
\t\t\t\telem.style.display = \"\";
\t\t\t}

\t\t\t// Set elements which have been overridden with display: none
\t\t\t// in a stylesheet to whatever the default browser style is
\t\t\t// for such an element
\t\t\tif ( elem.style.display === \"\" && isHidden( elem ) ) {
\t\t\t\tvalues[ index ] = data_priv.access( elem, \"olddisplay\", defaultDisplay(elem.nodeName) );
\t\t\t}
\t\t} else {
\t\t\thidden = isHidden( elem );

\t\t\tif ( display !== \"none\" || !hidden ) {
\t\t\t\tdata_priv.set( elem, \"olddisplay\", hidden ? display : jQuery.css( elem, \"display\" ) );
\t\t\t}
\t\t}
\t}

\t// Set the display of most of the elements in a second loop
\t// to avoid the constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}
\t\tif ( !show || elem.style.display === \"none\" || elem.style.display === \"\" ) {
\t\t\telem.style.display = show ? values[ index ] || \"\" : \"none\";
\t\t}
\t}

\treturn elements;
}

jQuery.extend({

\t// Add in style property hooks for overriding the default
\t// behavior of getting and setting a style property
\tcssHooks: {
\t\topacity: {
\t\t\tget: function( elem, computed ) {
\t\t\t\tif ( computed ) {

\t\t\t\t\t// We should always get a number back from opacity
\t\t\t\t\tvar ret = curCSS( elem, \"opacity\" );
\t\t\t\t\treturn ret === \"\" ? \"1\" : ret;
\t\t\t\t}
\t\t\t}
\t\t}
\t},

\t// Don't automatically add \"px\" to these possibly-unitless properties
\tcssNumber: {
\t\t\"columnCount\": true,
\t\t\"fillOpacity\": true,
\t\t\"flexGrow\": true,
\t\t\"flexShrink\": true,
\t\t\"fontWeight\": true,
\t\t\"lineHeight\": true,
\t\t\"opacity\": true,
\t\t\"order\": true,
\t\t\"orphans\": true,
\t\t\"widows\": true,
\t\t\"zIndex\": true,
\t\t\"zoom\": true
\t},

\t// Add in properties whose names you wish to fix before
\t// setting or getting the value
\tcssProps: {
\t\t\"float\": \"cssFloat\"
\t},

\t// Get and set the style property on a DOM Node
\tstyle: function( elem, name, value, extra ) {

\t\t// Don't set styles on text and comment nodes
\t\tif ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
\t\t\treturn;
\t\t}

\t\t// Make sure that we're working with the right name
\t\tvar ret, type, hooks,
\t\t\torigName = jQuery.camelCase( name ),
\t\t\tstyle = elem.style;

\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( style, origName ) );

\t\t// Gets hook for the prefixed version, then unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && (ret = rrelNum.exec( value )) ) {
\t\t\t\tvalue = ( ret[1] + 1 ) * ret[2] + parseFloat( jQuery.css( elem, name ) );
\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number, add 'px' to the (except for certain CSS properties)
\t\t\tif ( type === \"number\" && !jQuery.cssNumber[ origName ] ) {
\t\t\t\tvalue += \"px\";
\t\t\t}

\t\t\t// Support: IE9-11+
\t\t\t// background-* props affect original clone's values
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !(\"set\" in hooks) || (value = hooks.set( elem, value, extra )) !== undefined ) {
\t\t\t\tstyle[ name ] = value;
\t\t\t}

\t\t} else {
\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks && (ret = hooks.get( elem, false, extra )) !== undefined ) {
\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar val, num, hooks,
\t\t\torigName = jQuery.camelCase( name );

\t\t// Make sure that we're working with the right name
\t\tname = jQuery.cssProps[ origName ] || ( jQuery.cssProps[ origName ] = vendorPropName( elem.style, origName ) );

\t\t// Try prefixed name followed by the unprefixed name
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// If a hook was provided get the computed value from there
\t\tif ( hooks && \"get\" in hooks ) {
\t\t\tval = hooks.get( elem, true, extra );
\t\t}

\t\t// Otherwise, if a way to get the computed value exists, use that
\t\tif ( val === undefined ) {
\t\t\tval = curCSS( elem, name, styles );
\t\t}

\t\t// Convert \"normal\" to computed value
\t\tif ( val === \"normal\" && name in cssNormalTransform ) {
\t\t\tval = cssNormalTransform[ name ];
\t\t}

\t\t// Make numeric if forced or a qualifier was provided and val looks numeric
\t\tif ( extra === \"\" || extra ) {
\t\t\tnum = parseFloat( val );
\t\t\treturn extra === true || jQuery.isNumeric( num ) ? num || 0 : val;
\t\t}
\t\treturn val;
\t}
});

jQuery.each([ \"height\", \"width\" ], function( i, name ) {
\tjQuery.cssHooks[ name ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) && elem.offsetWidth === 0 ?
\t\t\t\t\tjQuery.swap( elem, cssShow, function() {
\t\t\t\t\t\treturn getWidthOrHeight( elem, name, extra );
\t\t\t\t\t}) :
\t\t\t\t\tgetWidthOrHeight( elem, name, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar styles = extra && getStyles( elem );
\t\t\treturn setPositiveNumber( elem, value, extra ?
\t\t\t\taugmentWidthOrHeight(
\t\t\t\t\telem,
\t\t\t\t\tname,
\t\t\t\t\textra,
\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tstyles
\t\t\t\t) : 0
\t\t\t);
\t\t}
\t};
});

// Support: Android 2.3
jQuery.cssHooks.marginRight = addGetHookIf( support.reliableMarginRight,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn jQuery.swap( elem, { \"display\": \"inline-block\" },
\t\t\t\tcurCSS, [ elem, \"marginRight\" ] );
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each({
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// Assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split(\" \") : [ value ];

\t\t\tfor ( ; i < 4; i++ ) {
\t\t\t\texpanded[ prefix + cssExpand[ i ] + suffix ] =
\t\t\t\t\tparts[ i ] || parts[ i - 2 ] || parts[ 0 ];
\t\t\t}

\t\t\treturn expanded;
\t\t}
\t};

\tif ( !rmargin.test( prefix ) ) {
\t\tjQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
\t}
});

jQuery.fn.extend({
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( jQuery.isArray( name ) ) {
\t\t\t\tstyles = getStyles( elem );
\t\t\t\tlen = name.length;

\t\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\t\tmap[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
\t\t\t\t}

\t\t\t\treturn map;
\t\t\t}

\t\t\treturn value !== undefined ?
\t\t\t\tjQuery.style( elem, name, value ) :
\t\t\t\tjQuery.css( elem, name );
\t\t}, name, value, arguments.length > 1 );
\t},
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( isHidden( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t});
\t}
});

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/css.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css.js");
    }
}
