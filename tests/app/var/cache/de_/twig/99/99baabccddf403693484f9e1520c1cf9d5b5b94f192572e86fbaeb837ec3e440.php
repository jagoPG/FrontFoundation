<?php

/* node_modules/jquery/src/selector-native.js */
class __TwigTemplate_5a7178cdbf410d3ecc683dcaf4eebae6074c70ad32da7f72fcdcfbe34b8a3b4d extends Twig_Template
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
        $__internal_2f5e9236435fe52a2a43d531847f53c7e6c3ba5201db2593fb66617df38ba946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5e9236435fe52a2a43d531847f53c7e6c3ba5201db2593fb66617df38ba946->enter($__internal_2f5e9236435fe52a2a43d531847f53c7e6c3ba5201db2593fb66617df38ba946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/selector-native.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./var/document\",
\t\"./var/documentElement\",
\t\"./var/hasOwn\",
\t\"./var/indexOf\"
], function( jQuery, document, documentElement, hasOwn, indexOf ) {

\"use strict\";

/*
 * Optional (non-Sizzle) selector module for custom builds.
 *
 * Note that this DOES NOT SUPPORT many documented jQuery
 * features in exchange for its smaller size:
 *
 * Attribute not equal selector
 * Positional selectors (:first; :eq(n); :odd; etc.)
 * Type selectors (:input; :checkbox; :button; etc.)
 * State-based selectors (:animated; :visible; :hidden; etc.)
 * :has(selector)
 * :not(complex selector)
 * custom selectors via Sizzle extensions
 * Leading combinators (e.g., \$collection.find(\"> *\"))
 * Reliable functionality on XML fragments
 * Requiring all parts of a selector to match elements under context
 *   (e.g., \$div.find(\"div > *\") now matches children of \$div)
 * Matching against non-elements
 * Reliable sorting of disconnected nodes
 * querySelectorAll bug fixes (e.g., unreliable :focus on WebKit)
 *
 * If any of these are unacceptable tradeoffs, either use Sizzle or
 * customize this stub for the project's specific needs.
 */

var hasDuplicate, sortInput,
\tsortStable = jQuery.expando.split( \"\" ).sort( sortOrder ).join( \"\" ) === jQuery.expando,
\tmatches = documentElement.matches ||
\t\tdocumentElement.webkitMatchesSelector ||
\t\tdocumentElement.mozMatchesSelector ||
\t\tdocumentElement.oMatchesSelector ||
\t\tdocumentElement.msMatchesSelector,

\t// CSS string/identifier serialization
\t// https://drafts.csswg.org/cssom/#common-serializing-idioms
\trcssescape = /([\\0-\\x1f\\x7f]|^-?\\d)|^-\$|[^\\x80-\\uFFFF\\w-]/g,
\tfcssescape = function( ch, asCodePoint ) {
\t\tif ( asCodePoint ) {

\t\t\t// U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
\t\t\tif ( ch === \"\\0\" ) {
\t\t\t\treturn \"\\uFFFD\";
\t\t\t}

\t\t\t// Control characters and (dependent upon position) numbers get escaped as code points
\t\t\treturn ch.slice( 0, -1 ) + \"\\\\\" + ch.charCodeAt( ch.length - 1 ).toString( 16 ) + \" \";
\t\t}

\t\t// Other potentially-special ASCII characters get backslash-escaped
\t\treturn \"\\\\\" + ch;
\t};

function sortOrder( a, b ) {

\t// Flag for duplicate removal
\tif ( a === b ) {
\t\thasDuplicate = true;
\t\treturn 0;
\t}

\t// Sort on method existence if only one input has compareDocumentPosition
\tvar compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
\tif ( compare ) {
\t\treturn compare;
\t}

\t// Calculate position if both inputs belong to the same document
\tcompare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
\t\ta.compareDocumentPosition( b ) :

\t\t// Otherwise we know they are disconnected
\t\t1;

\t// Disconnected nodes
\tif ( compare & 1 ) {

\t\t// Choose the first element that is related to our preferred document
\t\tif ( a === document || a.ownerDocument === document &&
\t\t\tjQuery.contains( document, a ) ) {
\t\t\treturn -1;
\t\t}
\t\tif ( b === document || b.ownerDocument === document &&
\t\t\tjQuery.contains( document, b ) ) {
\t\t\treturn 1;
\t\t}

\t\t// Maintain original order
\t\treturn sortInput ?
\t\t\t( indexOf.call( sortInput, a ) - indexOf.call( sortInput, b ) ) :
\t\t\t0;
\t}

\treturn compare & 4 ? -1 : 1;
}

function uniqueSort( results ) {
\tvar elem,
\t\tduplicates = [],
\t\tj = 0,
\t\ti = 0;

\thasDuplicate = false;
\tsortInput = !sortStable && results.slice( 0 );
\tresults.sort( sortOrder );

\tif ( hasDuplicate ) {
\t\twhile ( ( elem = results[ i++ ] ) ) {
\t\t\tif ( elem === results[ i ] ) {
\t\t\t\tj = duplicates.push( i );
\t\t\t}
\t\t}
\t\twhile ( j-- ) {
\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t}
\t}

\t// Clear input after sorting to release objects
\t// See https://github.com/jquery/sizzle/pull/225
\tsortInput = null;

\treturn results;
}

function escape( sel ) {
\treturn ( sel + \"\" ).replace( rcssescape, fcssescape );
}

jQuery.extend( {
\tuniqueSort: uniqueSort,
\tunique: uniqueSort,
\tescapeSelector: escape,
\tfind: function( selector, context, results, seed ) {
\t\tvar elem, nodeType,
\t\t\ti = 0;

\t\tresults = results || [];
\t\tcontext = context || document;

\t\t// Same basic safeguard as Sizzle
\t\tif ( !selector || typeof selector !== \"string\" ) {
\t\t\treturn results;
\t\t}

\t\t// Early return if context is not an element or document
\t\tif ( ( nodeType = context.nodeType ) !== 1 && nodeType !== 9 ) {
\t\t\treturn [];
\t\t}

\t\tif ( seed ) {
\t\t\twhile ( ( elem = seed[ i++ ] ) ) {
\t\t\t\tif ( jQuery.find.matchesSelector( elem, selector ) ) {
\t\t\t\t\tresults.push( elem );
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tjQuery.merge( results, context.querySelectorAll( selector ) );
\t\t}

\t\treturn results;
\t},
\ttext: function( elem ) {
\t\tvar node,
\t\t\tret = \"\",
\t\t\ti = 0,
\t\t\tnodeType = elem.nodeType;

\t\tif ( !nodeType ) {

\t\t\t// If no nodeType, this is expected to be an array
\t\t\twhile ( ( node = elem[ i++ ] ) ) {

\t\t\t\t// Do not traverse comment nodes
\t\t\t\tret += jQuery.text( node );
\t\t\t}
\t\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {

\t\t\t// Use textContent for elements
\t\t\treturn elem.textContent;
\t\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\t\treturn elem.nodeValue;
\t\t}

\t\t// Do not include comment or processing instruction nodes

\t\treturn ret;
\t},
\tcontains: function( a, b ) {
\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\tbup = b && b.parentNode;
\t\treturn a === bup || !!( bup && bup.nodeType === 1 && adown.contains( bup ) );
\t},
\tisXMLDoc: function( elem ) {

\t\t// documentElement is verified for cases where it doesn't yet exist
\t\t// (such as loading iframes in IE - #4833)
\t\tvar documentElement = elem && ( elem.ownerDocument || elem ).documentElement;
\t\treturn documentElement ? documentElement.nodeName !== \"HTML\" : false;
\t},
\texpr: {
\t\tattrHandle: {},
\t\tmatch: {
\t\t\tbool: new RegExp( \"^(?:checked|selected|async|autofocus|autoplay|controls|defer\" +
\t\t\t\t\"|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped)\$\", \"i\" ),
\t\t\tneedsContext: /^[\\x20\\t\\r\\n\\f]*[>+~]/
\t\t}
\t}
} );

jQuery.extend( jQuery.find, {
\tmatches: function( expr, elements ) {
\t\treturn jQuery.find( expr, null, null, elements );
\t},
\tmatchesSelector: function( elem, expr ) {
\t\treturn matches.call( elem, expr );
\t},
\tattr: function( elem, name ) {
\t\tvar fn = jQuery.expr.attrHandle[ name.toLowerCase() ],

\t\t\t// Don't get fooled by Object.prototype properties (jQuery #13807)
\t\t\tvalue = fn && hasOwn.call( jQuery.expr.attrHandle, name.toLowerCase() ) ?
\t\t\t\tfn( elem, name, jQuery.isXMLDoc( elem ) ) :
\t\t\t\tundefined;
\t\treturn value !== undefined ? value : elem.getAttribute( name );
\t}
} );

} );
";
        
        $__internal_2f5e9236435fe52a2a43d531847f53c7e6c3ba5201db2593fb66617df38ba946->leave($__internal_2f5e9236435fe52a2a43d531847f53c7e6c3ba5201db2593fb66617df38ba946_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/selector-native.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./var/document\",
\t\"./var/documentElement\",
\t\"./var/hasOwn\",
\t\"./var/indexOf\"
], function( jQuery, document, documentElement, hasOwn, indexOf ) {

\"use strict\";

/*
 * Optional (non-Sizzle) selector module for custom builds.
 *
 * Note that this DOES NOT SUPPORT many documented jQuery
 * features in exchange for its smaller size:
 *
 * Attribute not equal selector
 * Positional selectors (:first; :eq(n); :odd; etc.)
 * Type selectors (:input; :checkbox; :button; etc.)
 * State-based selectors (:animated; :visible; :hidden; etc.)
 * :has(selector)
 * :not(complex selector)
 * custom selectors via Sizzle extensions
 * Leading combinators (e.g., \$collection.find(\"> *\"))
 * Reliable functionality on XML fragments
 * Requiring all parts of a selector to match elements under context
 *   (e.g., \$div.find(\"div > *\") now matches children of \$div)
 * Matching against non-elements
 * Reliable sorting of disconnected nodes
 * querySelectorAll bug fixes (e.g., unreliable :focus on WebKit)
 *
 * If any of these are unacceptable tradeoffs, either use Sizzle or
 * customize this stub for the project's specific needs.
 */

var hasDuplicate, sortInput,
\tsortStable = jQuery.expando.split( \"\" ).sort( sortOrder ).join( \"\" ) === jQuery.expando,
\tmatches = documentElement.matches ||
\t\tdocumentElement.webkitMatchesSelector ||
\t\tdocumentElement.mozMatchesSelector ||
\t\tdocumentElement.oMatchesSelector ||
\t\tdocumentElement.msMatchesSelector,

\t// CSS string/identifier serialization
\t// https://drafts.csswg.org/cssom/#common-serializing-idioms
\trcssescape = /([\\0-\\x1f\\x7f]|^-?\\d)|^-\$|[^\\x80-\\uFFFF\\w-]/g,
\tfcssescape = function( ch, asCodePoint ) {
\t\tif ( asCodePoint ) {

\t\t\t// U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
\t\t\tif ( ch === \"\\0\" ) {
\t\t\t\treturn \"\\uFFFD\";
\t\t\t}

\t\t\t// Control characters and (dependent upon position) numbers get escaped as code points
\t\t\treturn ch.slice( 0, -1 ) + \"\\\\\" + ch.charCodeAt( ch.length - 1 ).toString( 16 ) + \" \";
\t\t}

\t\t// Other potentially-special ASCII characters get backslash-escaped
\t\treturn \"\\\\\" + ch;
\t};

function sortOrder( a, b ) {

\t// Flag for duplicate removal
\tif ( a === b ) {
\t\thasDuplicate = true;
\t\treturn 0;
\t}

\t// Sort on method existence if only one input has compareDocumentPosition
\tvar compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
\tif ( compare ) {
\t\treturn compare;
\t}

\t// Calculate position if both inputs belong to the same document
\tcompare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
\t\ta.compareDocumentPosition( b ) :

\t\t// Otherwise we know they are disconnected
\t\t1;

\t// Disconnected nodes
\tif ( compare & 1 ) {

\t\t// Choose the first element that is related to our preferred document
\t\tif ( a === document || a.ownerDocument === document &&
\t\t\tjQuery.contains( document, a ) ) {
\t\t\treturn -1;
\t\t}
\t\tif ( b === document || b.ownerDocument === document &&
\t\t\tjQuery.contains( document, b ) ) {
\t\t\treturn 1;
\t\t}

\t\t// Maintain original order
\t\treturn sortInput ?
\t\t\t( indexOf.call( sortInput, a ) - indexOf.call( sortInput, b ) ) :
\t\t\t0;
\t}

\treturn compare & 4 ? -1 : 1;
}

function uniqueSort( results ) {
\tvar elem,
\t\tduplicates = [],
\t\tj = 0,
\t\ti = 0;

\thasDuplicate = false;
\tsortInput = !sortStable && results.slice( 0 );
\tresults.sort( sortOrder );

\tif ( hasDuplicate ) {
\t\twhile ( ( elem = results[ i++ ] ) ) {
\t\t\tif ( elem === results[ i ] ) {
\t\t\t\tj = duplicates.push( i );
\t\t\t}
\t\t}
\t\twhile ( j-- ) {
\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t}
\t}

\t// Clear input after sorting to release objects
\t// See https://github.com/jquery/sizzle/pull/225
\tsortInput = null;

\treturn results;
}

function escape( sel ) {
\treturn ( sel + \"\" ).replace( rcssescape, fcssescape );
}

jQuery.extend( {
\tuniqueSort: uniqueSort,
\tunique: uniqueSort,
\tescapeSelector: escape,
\tfind: function( selector, context, results, seed ) {
\t\tvar elem, nodeType,
\t\t\ti = 0;

\t\tresults = results || [];
\t\tcontext = context || document;

\t\t// Same basic safeguard as Sizzle
\t\tif ( !selector || typeof selector !== \"string\" ) {
\t\t\treturn results;
\t\t}

\t\t// Early return if context is not an element or document
\t\tif ( ( nodeType = context.nodeType ) !== 1 && nodeType !== 9 ) {
\t\t\treturn [];
\t\t}

\t\tif ( seed ) {
\t\t\twhile ( ( elem = seed[ i++ ] ) ) {
\t\t\t\tif ( jQuery.find.matchesSelector( elem, selector ) ) {
\t\t\t\t\tresults.push( elem );
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tjQuery.merge( results, context.querySelectorAll( selector ) );
\t\t}

\t\treturn results;
\t},
\ttext: function( elem ) {
\t\tvar node,
\t\t\tret = \"\",
\t\t\ti = 0,
\t\t\tnodeType = elem.nodeType;

\t\tif ( !nodeType ) {

\t\t\t// If no nodeType, this is expected to be an array
\t\t\twhile ( ( node = elem[ i++ ] ) ) {

\t\t\t\t// Do not traverse comment nodes
\t\t\t\tret += jQuery.text( node );
\t\t\t}
\t\t} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {

\t\t\t// Use textContent for elements
\t\t\treturn elem.textContent;
\t\t} else if ( nodeType === 3 || nodeType === 4 ) {
\t\t\treturn elem.nodeValue;
\t\t}

\t\t// Do not include comment or processing instruction nodes

\t\treturn ret;
\t},
\tcontains: function( a, b ) {
\t\tvar adown = a.nodeType === 9 ? a.documentElement : a,
\t\t\tbup = b && b.parentNode;
\t\treturn a === bup || !!( bup && bup.nodeType === 1 && adown.contains( bup ) );
\t},
\tisXMLDoc: function( elem ) {

\t\t// documentElement is verified for cases where it doesn't yet exist
\t\t// (such as loading iframes in IE - #4833)
\t\tvar documentElement = elem && ( elem.ownerDocument || elem ).documentElement;
\t\treturn documentElement ? documentElement.nodeName !== \"HTML\" : false;
\t},
\texpr: {
\t\tattrHandle: {},
\t\tmatch: {
\t\t\tbool: new RegExp( \"^(?:checked|selected|async|autofocus|autoplay|controls|defer\" +
\t\t\t\t\"|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped)\$\", \"i\" ),
\t\t\tneedsContext: /^[\\x20\\t\\r\\n\\f]*[>+~]/
\t\t}
\t}
} );

jQuery.extend( jQuery.find, {
\tmatches: function( expr, elements ) {
\t\treturn jQuery.find( expr, null, null, elements );
\t},
\tmatchesSelector: function( elem, expr ) {
\t\treturn matches.call( elem, expr );
\t},
\tattr: function( elem, name ) {
\t\tvar fn = jQuery.expr.attrHandle[ name.toLowerCase() ],

\t\t\t// Don't get fooled by Object.prototype properties (jQuery #13807)
\t\t\tvalue = fn && hasOwn.call( jQuery.expr.attrHandle, name.toLowerCase() ) ?
\t\t\t\tfn( elem, name, jQuery.isXMLDoc( elem ) ) :
\t\t\t\tundefined;
\t\treturn value !== undefined ? value : elem.getAttribute( name );
\t}
} );

} );
", "node_modules/jquery/src/selector-native.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/selector-native.js");
    }
}
