<?php

/* node_modules/jquery/src/offset.js */
class __TwigTemplate_16f07deeca52d0af1e60cc046a1217f38da61c0147d64812cd87183f0d6bdde4 extends Twig_Template
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
        $__internal_a639d74ffcc59eaf2669fca28a5cf31d3f9e531f7ab54ce5a6071f4abd747edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a639d74ffcc59eaf2669fca28a5cf31d3f9e531f7ab54ce5a6071f4abd747edf->enter($__internal_a639d74ffcc59eaf2669fca28a5cf31d3f9e531f7ab54ce5a6071f4abd747edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/offset.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./core/access\",
\t\"./var/document\",
\t\"./var/documentElement\",
\t\"./css/var/rnumnonpx\",
\t\"./css/curCSS\",
\t\"./css/addGetHookIf\",
\t\"./css/support\",
\t\"./core/nodeName\",

\t\"./core/init\",
\t\"./css\",
\t\"./selector\" // contains
], function( jQuery, access, document, documentElement, rnumnonpx,
             curCSS, addGetHookIf, support, nodeName ) {

\"use strict\";

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
\t\t\t( curCSSTop + curCSSLeft ).indexOf( \"auto\" ) > -1;

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

\t\t\t// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
\t\t\toptions = options.call( elem, i, jQuery.extend( {}, curOffset ) );
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

jQuery.fn.extend( {
\toffset: function( options ) {

\t\t// Preserve chaining for setter
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each( function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t} );
\t\t}

\t\tvar doc, docElem, rect, win,
\t\t\telem = this[ 0 ];

\t\tif ( !elem ) {
\t\t\treturn;
\t\t}

\t\t// Return zeros for disconnected and hidden (display: none) elements (gh-2310)
\t\t// Support: IE <=11 only
\t\t// Running getBoundingClientRect on a
\t\t// disconnected node in IE throws an error
\t\tif ( !elem.getClientRects().length ) {
\t\t\treturn { top: 0, left: 0 };
\t\t}

\t\trect = elem.getBoundingClientRect();

\t\tdoc = elem.ownerDocument;
\t\tdocElem = doc.documentElement;
\t\twin = doc.defaultView;

\t\treturn {
\t\t\ttop: rect.top + win.pageYOffset - docElem.clientTop,
\t\t\tleft: rect.left + win.pageXOffset - docElem.clientLeft
\t\t};
\t},

\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset,
\t\t\telem = this[ 0 ],
\t\t\tparentOffset = { top: 0, left: 0 };

\t\t// Fixed elements are offset from window (parentOffset = {top:0, left: 0},
\t\t// because it is its only offset parent
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {

\t\t\t// Assume getBoundingClientRect is there when computed position is fixed
\t\t\toffset = elem.getBoundingClientRect();

\t\t} else {

\t\t\t// Get *real* offsetParent
\t\t\toffsetParent = this.offsetParent();

\t\t\t// Get correct offsets
\t\t\toffset = this.offset();
\t\t\tif ( !nodeName( offsetParent[ 0 ], \"html\" ) ) {
\t\t\t\tparentOffset = offsetParent.offset();
\t\t\t}

\t\t\t// Add offsetParent borders
\t\t\tparentOffset = {
\t\t\t\ttop: parentOffset.top + jQuery.css( offsetParent[ 0 ], \"borderTopWidth\", true ),
\t\t\t\tleft: parentOffset.left + jQuery.css( offsetParent[ 0 ], \"borderLeftWidth\", true )
\t\t\t};
\t\t}

\t\t// Subtract parent offsets and element margins
\t\treturn {
\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\t// This method will return documentElement in the following cases:
\t// 1) For the element inside the iframe without offsetParent, this method will return
\t//    documentElement of the parent window
\t// 2) For the hidden or detached element
\t// 3) For body or html element, i.e. in case of the html node - it will return itself
\t//
\t// but those exceptions were never presented as a real life use-cases
\t// and might be considered as more preferable results.
\t//
\t// This logic, however, is not guaranteed and can change at any point in the future
\toffsetParent: function() {
\t\treturn this.map( function() {
\t\t\tvar offsetParent = this.offsetParent;

\t\t\twhile ( offsetParent && jQuery.css( offsetParent, \"position\" ) === \"static\" ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}

\t\t\treturn offsetParent || documentElement;
\t\t} );
\t}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = \"pageYOffset\" === prop;

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {

\t\t\t// Coalesce documents and windows
\t\t\tvar win;
\t\t\tif ( jQuery.isWindow( elem ) ) {
\t\t\t\twin = elem;
\t\t\t} else if ( elem.nodeType === 9 ) {
\t\t\t\twin = elem.defaultView;
\t\t\t}

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : win.pageXOffset,
\t\t\t\t\ttop ? val : win.pageYOffset
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length );
\t};
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
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
} );

return jQuery;
} );
";
        
        $__internal_a639d74ffcc59eaf2669fca28a5cf31d3f9e531f7ab54ce5a6071f4abd747edf->leave($__internal_a639d74ffcc59eaf2669fca28a5cf31d3f9e531f7ab54ce5a6071f4abd747edf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/offset.js";
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
\t\"./var/document\",
\t\"./var/documentElement\",
\t\"./css/var/rnumnonpx\",
\t\"./css/curCSS\",
\t\"./css/addGetHookIf\",
\t\"./css/support\",
\t\"./core/nodeName\",

\t\"./core/init\",
\t\"./css\",
\t\"./selector\" // contains
], function( jQuery, access, document, documentElement, rnumnonpx,
             curCSS, addGetHookIf, support, nodeName ) {

\"use strict\";

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
\t\t\t( curCSSTop + curCSSLeft ).indexOf( \"auto\" ) > -1;

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

\t\t\t// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
\t\t\toptions = options.call( elem, i, jQuery.extend( {}, curOffset ) );
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

jQuery.fn.extend( {
\toffset: function( options ) {

\t\t// Preserve chaining for setter
\t\tif ( arguments.length ) {
\t\t\treturn options === undefined ?
\t\t\t\tthis :
\t\t\t\tthis.each( function( i ) {
\t\t\t\t\tjQuery.offset.setOffset( this, options, i );
\t\t\t\t} );
\t\t}

\t\tvar doc, docElem, rect, win,
\t\t\telem = this[ 0 ];

\t\tif ( !elem ) {
\t\t\treturn;
\t\t}

\t\t// Return zeros for disconnected and hidden (display: none) elements (gh-2310)
\t\t// Support: IE <=11 only
\t\t// Running getBoundingClientRect on a
\t\t// disconnected node in IE throws an error
\t\tif ( !elem.getClientRects().length ) {
\t\t\treturn { top: 0, left: 0 };
\t\t}

\t\trect = elem.getBoundingClientRect();

\t\tdoc = elem.ownerDocument;
\t\tdocElem = doc.documentElement;
\t\twin = doc.defaultView;

\t\treturn {
\t\t\ttop: rect.top + win.pageYOffset - docElem.clientTop,
\t\t\tleft: rect.left + win.pageXOffset - docElem.clientLeft
\t\t};
\t},

\tposition: function() {
\t\tif ( !this[ 0 ] ) {
\t\t\treturn;
\t\t}

\t\tvar offsetParent, offset,
\t\t\telem = this[ 0 ],
\t\t\tparentOffset = { top: 0, left: 0 };

\t\t// Fixed elements are offset from window (parentOffset = {top:0, left: 0},
\t\t// because it is its only offset parent
\t\tif ( jQuery.css( elem, \"position\" ) === \"fixed\" ) {

\t\t\t// Assume getBoundingClientRect is there when computed position is fixed
\t\t\toffset = elem.getBoundingClientRect();

\t\t} else {

\t\t\t// Get *real* offsetParent
\t\t\toffsetParent = this.offsetParent();

\t\t\t// Get correct offsets
\t\t\toffset = this.offset();
\t\t\tif ( !nodeName( offsetParent[ 0 ], \"html\" ) ) {
\t\t\t\tparentOffset = offsetParent.offset();
\t\t\t}

\t\t\t// Add offsetParent borders
\t\t\tparentOffset = {
\t\t\t\ttop: parentOffset.top + jQuery.css( offsetParent[ 0 ], \"borderTopWidth\", true ),
\t\t\t\tleft: parentOffset.left + jQuery.css( offsetParent[ 0 ], \"borderLeftWidth\", true )
\t\t\t};
\t\t}

\t\t// Subtract parent offsets and element margins
\t\treturn {
\t\t\ttop: offset.top - parentOffset.top - jQuery.css( elem, \"marginTop\", true ),
\t\t\tleft: offset.left - parentOffset.left - jQuery.css( elem, \"marginLeft\", true )
\t\t};
\t},

\t// This method will return documentElement in the following cases:
\t// 1) For the element inside the iframe without offsetParent, this method will return
\t//    documentElement of the parent window
\t// 2) For the hidden or detached element
\t// 3) For body or html element, i.e. in case of the html node - it will return itself
\t//
\t// but those exceptions were never presented as a real life use-cases
\t// and might be considered as more preferable results.
\t//
\t// This logic, however, is not guaranteed and can change at any point in the future
\toffsetParent: function() {
\t\treturn this.map( function() {
\t\t\tvar offsetParent = this.offsetParent;

\t\t\twhile ( offsetParent && jQuery.css( offsetParent, \"position\" ) === \"static\" ) {
\t\t\t\toffsetParent = offsetParent.offsetParent;
\t\t\t}

\t\t\treturn offsetParent || documentElement;
\t\t} );
\t}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: \"pageXOffset\", scrollTop: \"pageYOffset\" }, function( method, prop ) {
\tvar top = \"pageYOffset\" === prop;

\tjQuery.fn[ method ] = function( val ) {
\t\treturn access( this, function( elem, method, val ) {

\t\t\t// Coalesce documents and windows
\t\t\tvar win;
\t\t\tif ( jQuery.isWindow( elem ) ) {
\t\t\t\twin = elem;
\t\t\t} else if ( elem.nodeType === 9 ) {
\t\t\t\twin = elem.defaultView;
\t\t\t}

\t\t\tif ( val === undefined ) {
\t\t\t\treturn win ? win[ prop ] : elem[ method ];
\t\t\t}

\t\t\tif ( win ) {
\t\t\t\twin.scrollTo(
\t\t\t\t\t!top ? val : win.pageXOffset,
\t\t\t\t\ttop ? val : win.pageYOffset
\t\t\t\t);

\t\t\t} else {
\t\t\t\telem[ method ] = val;
\t\t\t}
\t\t}, method, val, arguments.length );
\t};
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
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
} );

return jQuery;
} );
", "node_modules/jquery/src/offset.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/offset.js");
    }
}
