<?php

/* node_modules/parsleyjs/bower_components/jquery/src/offset.js */
class __TwigTemplate_e18e1ef615eb2563ebd62628786f562ef57e937e44bda0bfde215b6b70081619 extends Twig_Template
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
        $__internal_c590cc80ab3051c03ae43ae6e471f8d44a3dc3efc4b707dee944de0ee7139b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c590cc80ab3051c03ae43ae6e471f8d44a3dc3efc4b707dee944de0ee7139b52->enter($__internal_c590cc80ab3051c03ae43ae6e471f8d44a3dc3efc4b707dee944de0ee7139b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/offset.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/strundefined\",
\t\"./core/access\",
\t\"./css/var/rnumnonpx\",
\t\"./css/curCSS\",
\t\"./css/addGetHookIf\",
\t\"./css/support\",

\t\"./core/init\",
\t\"./css\",
\t\"./selector\" // contains
], function( jQuery, strundefined, access, rnumnonpx, curCSS, addGetHookIf, support ) {

var docElem = window.document.documentElement;

/**
 * Gets a window from an element
 */
function getWindow( elem ) {
\treturn jQuery.isWindow( elem ) ? elem : elem.nodeType === 9 && elem.defaultView;
}

jQuery.offset = {
\tsetOffset: function( elem, options, i ) {
\t\tvar curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
\t\t\tposition = jQuery.css( elem, \"position\" ),
\t\t\tcurElem = jQuery( elem ),
\t\t\tprops = {};

\t\t// Set position first, in-case top/left are set even on static elem
\t\tif ( position === \"static\" ) {
\t\t\telem.style.position = \"relative\";
\t\t}

\t\tcurOffset = curElem.offset();
\t\tcurCSSTop = jQuery.css( elem, \"top\" );
\t\tcurCSSLeft = jQuery.css( elem, \"left\" );
\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) &&
\t\t\t( curCSSTop + curCSSLeft ).indexOf(\"auto\") > -1;

\t\t// Need to be able to calculate position if either
\t\t// top or left is auto and position is either absolute or fixed
\t\tif ( calculatePosition ) {
\t\t\tcurPosition = curElem.position();
\t\t\tcurTop = curPosition.top;
\t\t\tcurLeft = curPosition.left;

\t\t} else {
\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t}

\t\tif ( jQuery.isFunction( options ) ) {
\t\t\toptions = options.call( elem, i, curOffset );
\t\t}

\t\tif ( options.top != null ) {
\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t}
\t\tif ( options.left != null ) {
\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t}

\t\tif ( \"using\" in options ) {
\t\t\toptions.using.call( elem, props );

\t\t} else {
\t\t\tcurElem.css( props );
\t\t}
\t}
};

jQuery.fn.extend({
\toffset: function( options ) {
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each(function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t});
\t\t}

\t\tvar docElem, win,
\t\t\telem = this[ 0 ],
\t\t\tbox = { top: 0, left: 0 },
\t\t\tdoc = elem && elem.ownerDocument;

\t\tif ( !doc ) {
\t\t\treturn;
\t\t}

\t\tdocElem = doc.documentElement;

\t\t// Make sure it's not a disconnected DOM node
\t\tif ( !jQuery.contains( docElem, elem ) ) {
\t\t\treturn box;
\t\t}

\t\t// Support: BlackBerry 5, iOS 3 (original iPhone)
\t\t// If we don't have gBCR, just use 0,0 rather than error
\t\tif ( typeof elem.getBoundingClientRect !== strundefined ) {
\t\t\tbox = elem.getBoundingClientRect();
\t\t}
\t\twin = getWindow( doc );
\t\treturn {
\t\t\ttop: box.top + win.pageYOffset - docElem.clientTop,
\t\t\tleft: box.left + win.pageXOffset - docElem.clientLeft
\t\t};
\t},

\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset,
\t\t\telem = this[ 0 ],
\t\t\tparentOffset = { top: 0, left: 0 };

\t\t// Fixed elements are offset from window (parentOffset = {top:0, left: 0}, because it is its only offset parent
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {
\t\t\t// Assume getBoundingClientRect is there when computed position is fixed
\t\t\toffset = elem.getBoundingClientRect();

\t\t} else {
\t\t\t// Get *real* offsetParent
\t\t\toffsetParent = this.offsetParent();

\t\t\t// Get correct offsets
\t\t\toffset = this.offset();
\t\t\tif ( !jQuery.nodeName( offsetParent[ 0 ], \"html\" ) ) {
\t\t\t\tparentOffset = offsetParent.offset();
\t\t\t}

\t\t\t// Add offsetParent borders
\t\t\tparentOffset.top += jQuery.css( offsetParent[ 0 ], \"borderTopWidth\", true );
\t\t\tparentOffset.left += jQuery.css( offsetParent[ 0 ], \"borderLeftWidth\", true );
\t\t}

\t\t// Subtract parent offsets and element margins
\t\treturn {
\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\toffsetParent: function() {
\t\treturn this.map(function() {
\t\t\tvar offsetParent = this.offsetParent || docElem;

\t\t\twhile ( offsetParent && ( !jQuery.nodeName( offsetParent, \"html\" ) && jQuery.css( offsetParent, \"position\" ) === \"static\" ) ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}

\t\t\treturn offsetParent || docElem;
\t\t});
\t}
});

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = \"pageYOffset\" === prop;

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {
\t\t\tvar win = getWindow( elem );

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : window.pageXOffset,
\t\t\t\t\ttop ? val : window.pageYOffset
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length, null );
\t};
});

// Support: Safari<7+, Chrome<37+
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://code.google.com/p/chromium/issues/detail?id=229280
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\tjQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
\t\tfunction( elem, computed ) {
\t\t\tif ( computed ) {
\t\t\t\tcomputed = curCSS( elem, prop );
\t\t\t\t// If curCSS returns percentage, fallback to offset
\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\tcomputed;
\t\t\t}
\t\t}
\t);
});

return jQuery;
});
";
        
        $__internal_c590cc80ab3051c03ae43ae6e471f8d44a3dc3efc4b707dee944de0ee7139b52->leave($__internal_c590cc80ab3051c03ae43ae6e471f8d44a3dc3efc4b707dee944de0ee7139b52_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/offset.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/strundefined\",
\t\"./core/access\",
\t\"./css/var/rnumnonpx\",
\t\"./css/curCSS\",
\t\"./css/addGetHookIf\",
\t\"./css/support\",

\t\"./core/init\",
\t\"./css\",
\t\"./selector\" // contains
], function( jQuery, strundefined, access, rnumnonpx, curCSS, addGetHookIf, support ) {

var docElem = window.document.documentElement;

/**
 * Gets a window from an element
 */
function getWindow( elem ) {
\treturn jQuery.isWindow( elem ) ? elem : elem.nodeType === 9 && elem.defaultView;
}

jQuery.offset = {
\tsetOffset: function( elem, options, i ) {
\t\tvar curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
\t\t\tposition = jQuery.css( elem, \"position\" ),
\t\t\tcurElem = jQuery( elem ),
\t\t\tprops = {};

\t\t// Set position first, in-case top/left are set even on static elem
\t\tif ( position === \"static\" ) {
\t\t\telem.style.position = \"relative\";
\t\t}

\t\tcurOffset = curElem.offset();
\t\tcurCSSTop = jQuery.css( elem, \"top\" );
\t\tcurCSSLeft = jQuery.css( elem, \"left\" );
\t\tcalculatePosition = ( position === \"absolute\" || position === \"fixed\" ) &&
\t\t\t( curCSSTop + curCSSLeft ).indexOf(\"auto\") > -1;

\t\t// Need to be able to calculate position if either
\t\t// top or left is auto and position is either absolute or fixed
\t\tif ( calculatePosition ) {
\t\t\tcurPosition = curElem.position();
\t\t\tcurTop = curPosition.top;
\t\t\tcurLeft = curPosition.left;

\t\t} else {
\t\t\tcurTop = parseFloat( curCSSTop ) || 0;
\t\t\tcurLeft = parseFloat( curCSSLeft ) || 0;
\t\t}

\t\tif ( jQuery.isFunction( options ) ) {
\t\t\toptions = options.call( elem, i, curOffset );
\t\t}

\t\tif ( options.top != null ) {
\t\t\tprops.top = ( options.top - curOffset.top ) + curTop;
\t\t}
\t\tif ( options.left != null ) {
\t\t\tprops.left = ( options.left - curOffset.left ) + curLeft;
\t\t}

\t\tif ( \"using\" in options ) {
\t\t\toptions.using.call( elem, props );

\t\t} else {
\t\t\tcurElem.css( props );
\t\t}
\t}
};

jQuery.fn.extend({
\toffset: function( options ) {
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each(function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t});
\t\t}

\t\tvar docElem, win,
\t\t\telem = this[ 0 ],
\t\t\tbox = { top: 0, left: 0 },
\t\t\tdoc = elem && elem.ownerDocument;

\t\tif ( !doc ) {
\t\t\treturn;
\t\t}

\t\tdocElem = doc.documentElement;

\t\t// Make sure it's not a disconnected DOM node
\t\tif ( !jQuery.contains( docElem, elem ) ) {
\t\t\treturn box;
\t\t}

\t\t// Support: BlackBerry 5, iOS 3 (original iPhone)
\t\t// If we don't have gBCR, just use 0,0 rather than error
\t\tif ( typeof elem.getBoundingClientRect !== strundefined ) {
\t\t\tbox = elem.getBoundingClientRect();
\t\t}
\t\twin = getWindow( doc );
\t\treturn {
\t\t\ttop: box.top + win.pageYOffset - docElem.clientTop,
\t\t\tleft: box.left + win.pageXOffset - docElem.clientLeft
\t\t};
\t},

\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset,
\t\t\telem = this[ 0 ],
\t\t\tparentOffset = { top: 0, left: 0 };

\t\t// Fixed elements are offset from window (parentOffset = {top:0, left: 0}, because it is its only offset parent
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {
\t\t\t// Assume getBoundingClientRect is there when computed position is fixed
\t\t\toffset = elem.getBoundingClientRect();

\t\t} else {
\t\t\t// Get *real* offsetParent
\t\t\toffsetParent = this.offsetParent();

\t\t\t// Get correct offsets
\t\t\toffset = this.offset();
\t\t\tif ( !jQuery.nodeName( offsetParent[ 0 ], \"html\" ) ) {
\t\t\t\tparentOffset = offsetParent.offset();
\t\t\t}

\t\t\t// Add offsetParent borders
\t\t\tparentOffset.top += jQuery.css( offsetParent[ 0 ], \"borderTopWidth\", true );
\t\t\tparentOffset.left += jQuery.css( offsetParent[ 0 ], \"borderLeftWidth\", true );
\t\t}

\t\t// Subtract parent offsets and element margins
\t\treturn {
\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\toffsetParent: function() {
\t\treturn this.map(function() {
\t\t\tvar offsetParent = this.offsetParent || docElem;

\t\t\twhile ( offsetParent && ( !jQuery.nodeName( offsetParent, \"html\" ) && jQuery.css( offsetParent, \"position\" ) === \"static\" ) ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}

\t\t\treturn offsetParent || docElem;
\t\t});
\t}
});

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = \"pageYOffset\" === prop;

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {
\t\t\tvar win = getWindow( elem );

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : window.pageXOffset,
\t\t\t\t\ttop ? val : window.pageYOffset
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length, null );
\t};
});

// Support: Safari<7+, Chrome<37+
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://code.google.com/p/chromium/issues/detail?id=229280
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ \"top\", \"left\" ], function( i, prop ) {
\tjQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
\t\tfunction( elem, computed ) {
\t\t\tif ( computed ) {
\t\t\t\tcomputed = curCSS( elem, prop );
\t\t\t\t// If curCSS returns percentage, fallback to offset
\t\t\t\treturn rnumnonpx.test( computed ) ?
\t\t\t\t\tjQuery( elem ).position()[ prop ] + \"px\" :
\t\t\t\t\tcomputed;
\t\t\t}
\t\t}
\t);
});

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/offset.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/offset.js");
    }
}
