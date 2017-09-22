<?php

/* node_modules/jquery/src/css.js */
class __TwigTemplate_8400197d93664294c421988414e66ecd382dadf6f9b87cf6c823977536f746d4 extends Twig_Template
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
        $__internal_c3dfac29bb743d691ff4b4d9da2873903893e76a2d6c1accc5609cf9d4fd5dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dfac29bb743d691ff4b4d9da2873903893e76a2d6c1accc5609cf9d4fd5dbf->enter($__internal_c3dfac29bb743d691ff4b4d9da2873903893e76a2d6c1accc5609cf9d4fd5dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./var/pnum\",
\t\"./core/access\",
\t\"./css/var/rmargin\",
\t\"./var/document\",
\t\"./var/rcssNum\",
\t\"./css/var/rnumnonpx\",
\t\"./css/var/cssExpand\",
\t\"./css/var/getStyles\",
\t\"./css/var/swap\",
\t\"./css/curCSS\",
\t\"./css/adjustCSS\",
\t\"./css/addGetHookIf\",
\t\"./css/support\",

\t\"./core/init\",
\t\"./core/ready\",
\t\"./selector\" // contains
], function( jQuery, pnum, access, rmargin, document, rcssNum, rnumnonpx, cssExpand,
\tgetStyles, swap, curCSS, adjustCSS, addGetHookIf, support ) {

\"use strict\";

var

\t// Swappable if display is none or starts with table
\t// except \"table\", \"table-cell\", or \"table-caption\"
\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trcustomProp = /^--/,
\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t},

\tcssPrefixes = [ \"Webkit\", \"Moz\", \"ms\" ],
\temptyStyle = document.createElement( \"div\" ).style;

// Return a css property mapped to a potentially vendor prefixed property
function vendorPropName( name ) {

\t// Shortcut for names that are not vendor prefixed
\tif ( name in emptyStyle ) {
\t\treturn name;
\t}

\t// Check for vendor prefixed names
\tvar capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in emptyStyle ) {
\t\t\treturn name;
\t\t}
\t}
}

// Return a property mapped along what jQuery.cssProps suggests or to
// a vendor prefixed property.
function finalPropName( name ) {
\tvar ret = jQuery.cssProps[ name ];
\tif ( !ret ) {
\t\tret = jQuery.cssProps[ name ] = vendorPropName( name ) || name;
\t}
\treturn ret;
}

function setPositiveNumber( elem, value, subtract ) {

\t// Any relative (+/-) values have already been
\t// normalized at this point
\tvar matches = rcssNum.exec( value );
\treturn matches ?

\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || \"px\" ) :
\t\tvalue;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
\tvar i,
\t\tval = 0;

\t// If we already have the right measurement, avoid augmentation
\tif ( extra === ( isBorderBox ? \"border\" : \"content\" ) ) {
\t\ti = 4;

\t// Otherwise initialize for horizontal or vertical properties
\t} else {
\t\ti = name === \"width\" ? 1 : 0;
\t}

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

\t// Start with computed style
\tvar valueIsBorderBox,
\t\tstyles = getStyles( elem ),
\t\tval = curCSS( elem, name, styles ),
\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t// Computed unit is not pixels. Stop here and return.
\tif ( rnumnonpx.test( val ) ) {
\t\treturn val;
\t}

\t// Check for style in case a browser which returns unreliable values
\t// for getComputedStyle silently falls back to the reliable elem.style
\tvalueIsBorderBox = isBorderBox &&
\t\t( support.boxSizingReliable() || val === elem.style[ name ] );

\t// Fall back to offsetWidth/Height when value is \"auto\"
\t// This happens for inline elements with no explicit setting (gh-3571)
\tif ( val === \"auto\" ) {
\t\tval = elem[ \"offset\" + name[ 0 ].toUpperCase() + name.slice( 1 ) ];
\t}

\t// Normalize \"\", auto, and prepare for extra
\tval = parseFloat( val ) || 0;

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

jQuery.extend( {

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
\t\t\"animationIterationCount\": true,
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
\t\t\tisCustomProp = rcustomProp.test( name ),
\t\t\tstyle = elem.style;

\t\t// Make sure that we're working with the right name. We don't
\t\t// want to query the value if it is a CSS custom property
\t\t// since they are user-defined.
\t\tif ( !isCustomProp ) {
\t\t\tname = finalPropName( origName );
\t\t}

\t\t// Gets hook for the prefixed version, then unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
\t\t\t\tvalue = adjustCSS( elem, name, ret );

\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number was passed in, add the unit (except for certain CSS properties)
\t\t\tif ( type === \"number\" ) {
\t\t\t\tvalue += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? \"\" : \"px\" );
\t\t\t}

\t\t\t// background-* props affect original clone's values
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !( \"set\" in hooks ) ||
\t\t\t\t( value = hooks.set( elem, value, extra ) ) !== undefined ) {

\t\t\t\tif ( isCustomProp ) {
\t\t\t\t\tstyle.setProperty( name, value );
\t\t\t\t} else {
\t\t\t\t\tstyle[ name ] = value;
\t\t\t\t}
\t\t\t}

\t\t} else {

\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks &&
\t\t\t\t( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar val, num, hooks,
\t\t\torigName = jQuery.camelCase( name ),
\t\t\tisCustomProp = rcustomProp.test( name );

\t\t// Make sure that we're working with the right name. We don't
\t\t// want to modify the value if it is a CSS custom property
\t\t// since they are user-defined.
\t\tif ( !isCustomProp ) {
\t\t\tname = finalPropName( origName );
\t\t}

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
\t\t\treturn extra === true || isFinite( num ) ? num || 0 : val;
\t\t}

\t\treturn val;
\t}
} );

jQuery.each( [ \"height\", \"width\" ], function( i, name ) {
\tjQuery.cssHooks[ name ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) &&

\t\t\t\t\t// Support: Safari 8+
\t\t\t\t\t// Table columns in Safari have non-zero offsetWidth & zero
\t\t\t\t\t// getBoundingClientRect().width unless display is changed.
\t\t\t\t\t// Support: IE <=11 only
\t\t\t\t\t// Running getBoundingClientRect on a disconnected node
\t\t\t\t\t// in IE throws an error.
\t\t\t\t\t( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
\t\t\t\t\t\tswap( elem, cssShow, function() {
\t\t\t\t\t\t\treturn getWidthOrHeight( elem, name, extra );
\t\t\t\t\t\t} ) :
\t\t\t\t\t\tgetWidthOrHeight( elem, name, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar matches,
\t\t\t\tstyles = extra && getStyles( elem ),
\t\t\t\tsubtract = extra && augmentWidthOrHeight(
\t\t\t\t\telem,
\t\t\t\t\tname,
\t\t\t\t\textra,
\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tstyles
\t\t\t\t);

\t\t\t// Convert to pixels if value adjustment is needed
\t\t\tif ( subtract && ( matches = rcssNum.exec( value ) ) &&
\t\t\t\t( matches[ 3 ] || \"px\" ) !== \"px\" ) {

\t\t\t\telem.style[ name ] = value;
\t\t\t\tvalue = jQuery.css( elem, name );
\t\t\t}

\t\t\treturn setPositiveNumber( elem, value, subtract );
\t\t}
\t};
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn ( parseFloat( curCSS( elem, \"marginLeft\" ) ) ||
\t\t\t\telem.getBoundingClientRect().left -
\t\t\t\t\tswap( elem, { marginLeft: 0 }, function() {
\t\t\t\t\t\treturn elem.getBoundingClientRect().left;
\t\t\t\t\t} )
\t\t\t\t) + \"px\";
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each( {
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// Assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split( \" \" ) : [ value ];

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
} );

jQuery.fn.extend( {
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( Array.isArray( name ) ) {
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
\t}
} );

return jQuery;
} );
";
        
        $__internal_c3dfac29bb743d691ff4b4d9da2873903893e76a2d6c1accc5609cf9d4fd5dbf->leave($__internal_c3dfac29bb743d691ff4b4d9da2873903893e76a2d6c1accc5609cf9d4fd5dbf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./var/pnum\",
\t\"./core/access\",
\t\"./css/var/rmargin\",
\t\"./var/document\",
\t\"./var/rcssNum\",
\t\"./css/var/rnumnonpx\",
\t\"./css/var/cssExpand\",
\t\"./css/var/getStyles\",
\t\"./css/var/swap\",
\t\"./css/curCSS\",
\t\"./css/adjustCSS\",
\t\"./css/addGetHookIf\",
\t\"./css/support\",

\t\"./core/init\",
\t\"./core/ready\",
\t\"./selector\" // contains
], function( jQuery, pnum, access, rmargin, document, rcssNum, rnumnonpx, cssExpand,
\tgetStyles, swap, curCSS, adjustCSS, addGetHookIf, support ) {

\"use strict\";

var

\t// Swappable if display is none or starts with table
\t// except \"table\", \"table-cell\", or \"table-caption\"
\t// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
\trdisplayswap = /^(none|table(?!-c[ea]).+)/,
\trcustomProp = /^--/,
\tcssShow = { position: \"absolute\", visibility: \"hidden\", display: \"block\" },
\tcssNormalTransform = {
\t\tletterSpacing: \"0\",
\t\tfontWeight: \"400\"
\t},

\tcssPrefixes = [ \"Webkit\", \"Moz\", \"ms\" ],
\temptyStyle = document.createElement( \"div\" ).style;

// Return a css property mapped to a potentially vendor prefixed property
function vendorPropName( name ) {

\t// Shortcut for names that are not vendor prefixed
\tif ( name in emptyStyle ) {
\t\treturn name;
\t}

\t// Check for vendor prefixed names
\tvar capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
\t\ti = cssPrefixes.length;

\twhile ( i-- ) {
\t\tname = cssPrefixes[ i ] + capName;
\t\tif ( name in emptyStyle ) {
\t\t\treturn name;
\t\t}
\t}
}

// Return a property mapped along what jQuery.cssProps suggests or to
// a vendor prefixed property.
function finalPropName( name ) {
\tvar ret = jQuery.cssProps[ name ];
\tif ( !ret ) {
\t\tret = jQuery.cssProps[ name ] = vendorPropName( name ) || name;
\t}
\treturn ret;
}

function setPositiveNumber( elem, value, subtract ) {

\t// Any relative (+/-) values have already been
\t// normalized at this point
\tvar matches = rcssNum.exec( value );
\treturn matches ?

\t\t// Guard against undefined \"subtract\", e.g., when used as in cssHooks
\t\tMath.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || \"px\" ) :
\t\tvalue;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
\tvar i,
\t\tval = 0;

\t// If we already have the right measurement, avoid augmentation
\tif ( extra === ( isBorderBox ? \"border\" : \"content\" ) ) {
\t\ti = 4;

\t// Otherwise initialize for horizontal or vertical properties
\t} else {
\t\ti = name === \"width\" ? 1 : 0;
\t}

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

\t// Start with computed style
\tvar valueIsBorderBox,
\t\tstyles = getStyles( elem ),
\t\tval = curCSS( elem, name, styles ),
\t\tisBorderBox = jQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\";

\t// Computed unit is not pixels. Stop here and return.
\tif ( rnumnonpx.test( val ) ) {
\t\treturn val;
\t}

\t// Check for style in case a browser which returns unreliable values
\t// for getComputedStyle silently falls back to the reliable elem.style
\tvalueIsBorderBox = isBorderBox &&
\t\t( support.boxSizingReliable() || val === elem.style[ name ] );

\t// Fall back to offsetWidth/Height when value is \"auto\"
\t// This happens for inline elements with no explicit setting (gh-3571)
\tif ( val === \"auto\" ) {
\t\tval = elem[ \"offset\" + name[ 0 ].toUpperCase() + name.slice( 1 ) ];
\t}

\t// Normalize \"\", auto, and prepare for extra
\tval = parseFloat( val ) || 0;

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

jQuery.extend( {

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
\t\t\"animationIterationCount\": true,
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
\t\t\tisCustomProp = rcustomProp.test( name ),
\t\t\tstyle = elem.style;

\t\t// Make sure that we're working with the right name. We don't
\t\t// want to query the value if it is a CSS custom property
\t\t// since they are user-defined.
\t\tif ( !isCustomProp ) {
\t\t\tname = finalPropName( origName );
\t\t}

\t\t// Gets hook for the prefixed version, then unprefixed version
\t\thooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

\t\t// Check if we're setting a value
\t\tif ( value !== undefined ) {
\t\t\ttype = typeof value;

\t\t\t// Convert \"+=\" or \"-=\" to relative numbers (#7345)
\t\t\tif ( type === \"string\" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
\t\t\t\tvalue = adjustCSS( elem, name, ret );

\t\t\t\t// Fixes bug #9237
\t\t\t\ttype = \"number\";
\t\t\t}

\t\t\t// Make sure that null and NaN values aren't set (#7116)
\t\t\tif ( value == null || value !== value ) {
\t\t\t\treturn;
\t\t\t}

\t\t\t// If a number was passed in, add the unit (except for certain CSS properties)
\t\t\tif ( type === \"number\" ) {
\t\t\t\tvalue += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? \"\" : \"px\" );
\t\t\t}

\t\t\t// background-* props affect original clone's values
\t\t\tif ( !support.clearCloneStyle && value === \"\" && name.indexOf( \"background\" ) === 0 ) {
\t\t\t\tstyle[ name ] = \"inherit\";
\t\t\t}

\t\t\t// If a hook was provided, use that value, otherwise just set the specified value
\t\t\tif ( !hooks || !( \"set\" in hooks ) ||
\t\t\t\t( value = hooks.set( elem, value, extra ) ) !== undefined ) {

\t\t\t\tif ( isCustomProp ) {
\t\t\t\t\tstyle.setProperty( name, value );
\t\t\t\t} else {
\t\t\t\t\tstyle[ name ] = value;
\t\t\t\t}
\t\t\t}

\t\t} else {

\t\t\t// If a hook was provided get the non-computed value from there
\t\t\tif ( hooks && \"get\" in hooks &&
\t\t\t\t( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

\t\t\t\treturn ret;
\t\t\t}

\t\t\t// Otherwise just get the value from the style object
\t\t\treturn style[ name ];
\t\t}
\t},

\tcss: function( elem, name, extra, styles ) {
\t\tvar val, num, hooks,
\t\t\torigName = jQuery.camelCase( name ),
\t\t\tisCustomProp = rcustomProp.test( name );

\t\t// Make sure that we're working with the right name. We don't
\t\t// want to modify the value if it is a CSS custom property
\t\t// since they are user-defined.
\t\tif ( !isCustomProp ) {
\t\t\tname = finalPropName( origName );
\t\t}

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
\t\t\treturn extra === true || isFinite( num ) ? num || 0 : val;
\t\t}

\t\treturn val;
\t}
} );

jQuery.each( [ \"height\", \"width\" ], function( i, name ) {
\tjQuery.cssHooks[ name ] = {
\t\tget: function( elem, computed, extra ) {
\t\t\tif ( computed ) {

\t\t\t\t// Certain elements can have dimension info if we invisibly show them
\t\t\t\t// but it must have a current display style that would benefit
\t\t\t\treturn rdisplayswap.test( jQuery.css( elem, \"display\" ) ) &&

\t\t\t\t\t// Support: Safari 8+
\t\t\t\t\t// Table columns in Safari have non-zero offsetWidth & zero
\t\t\t\t\t// getBoundingClientRect().width unless display is changed.
\t\t\t\t\t// Support: IE <=11 only
\t\t\t\t\t// Running getBoundingClientRect on a disconnected node
\t\t\t\t\t// in IE throws an error.
\t\t\t\t\t( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
\t\t\t\t\t\tswap( elem, cssShow, function() {
\t\t\t\t\t\t\treturn getWidthOrHeight( elem, name, extra );
\t\t\t\t\t\t} ) :
\t\t\t\t\t\tgetWidthOrHeight( elem, name, extra );
\t\t\t}
\t\t},

\t\tset: function( elem, value, extra ) {
\t\t\tvar matches,
\t\t\t\tstyles = extra && getStyles( elem ),
\t\t\t\tsubtract = extra && augmentWidthOrHeight(
\t\t\t\t\telem,
\t\t\t\t\tname,
\t\t\t\t\textra,
\t\t\t\t\tjQuery.css( elem, \"boxSizing\", false, styles ) === \"border-box\",
\t\t\t\t\tstyles
\t\t\t\t);

\t\t\t// Convert to pixels if value adjustment is needed
\t\t\tif ( subtract && ( matches = rcssNum.exec( value ) ) &&
\t\t\t\t( matches[ 3 ] || \"px\" ) !== \"px\" ) {

\t\t\t\telem.style[ name ] = value;
\t\t\t\tvalue = jQuery.css( elem, name );
\t\t\t}

\t\t\treturn setPositiveNumber( elem, value, subtract );
\t\t}
\t};
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
\tfunction( elem, computed ) {
\t\tif ( computed ) {
\t\t\treturn ( parseFloat( curCSS( elem, \"marginLeft\" ) ) ||
\t\t\t\telem.getBoundingClientRect().left -
\t\t\t\t\tswap( elem, { marginLeft: 0 }, function() {
\t\t\t\t\t\treturn elem.getBoundingClientRect().left;
\t\t\t\t\t} )
\t\t\t\t) + \"px\";
\t\t}
\t}
);

// These hooks are used by animate to expand properties
jQuery.each( {
\tmargin: \"\",
\tpadding: \"\",
\tborder: \"Width\"
}, function( prefix, suffix ) {
\tjQuery.cssHooks[ prefix + suffix ] = {
\t\texpand: function( value ) {
\t\t\tvar i = 0,
\t\t\t\texpanded = {},

\t\t\t\t// Assumes a single number if not a string
\t\t\t\tparts = typeof value === \"string\" ? value.split( \" \" ) : [ value ];

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
} );

jQuery.fn.extend( {
\tcss: function( name, value ) {
\t\treturn access( this, function( elem, name, value ) {
\t\t\tvar styles, len,
\t\t\t\tmap = {},
\t\t\t\ti = 0;

\t\t\tif ( Array.isArray( name ) ) {
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
\t}
} );

return jQuery;
} );
", "node_modules/jquery/src/css.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css.js");
    }
}
