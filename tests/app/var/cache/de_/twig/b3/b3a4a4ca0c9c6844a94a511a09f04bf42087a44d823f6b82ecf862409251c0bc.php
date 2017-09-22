<?php

/* node_modules/parsleyjs/bower_components/jquery/src/selector-native.js */
class __TwigTemplate_5681d15ed2ddd279143768caddf535223ac8f1b9ead44bb5bad736831661e9ed extends Twig_Template
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
        $__internal_0243dc2a21307a2987d2c6a1c90469f204fd984629365217f6cd74f6a14effd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0243dc2a21307a2987d2c6a1c90469f204fd984629365217f6cd74f6a14effd9->enter($__internal_0243dc2a21307a2987d2c6a1c90469f204fd984629365217f6cd74f6a14effd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/selector-native.js"));

        // line 1
        echo "define([
\t\"./core\"
], function( jQuery ) {

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

var docElem = window.document.documentElement,
\tselector_hasDuplicate,
\tmatches = docElem.matches ||
\t\tdocElem.webkitMatchesSelector ||
\t\tdocElem.mozMatchesSelector ||
\t\tdocElem.oMatchesSelector ||
\t\tdocElem.msMatchesSelector,
\tselector_sortOrder = function( a, b ) {
\t\t// Flag for duplicate removal
\t\tif ( a === b ) {
\t\t\tselector_hasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\tvar compare = b.compareDocumentPosition && a.compareDocumentPosition && a.compareDocumentPosition( b );

\t\tif ( compare ) {
\t\t\t// Disconnected nodes
\t\t\tif ( compare & 1 ) {

\t\t\t\t// Choose the first element that is related to our document
\t\t\t\tif ( a === document || jQuery.contains(document, a) ) {
\t\t\t\t\treturn -1;
\t\t\t\t}
\t\t\t\tif ( b === document || jQuery.contains(document, b) ) {
\t\t\t\t\treturn 1;
\t\t\t\t}

\t\t\t\t// Maintain original order
\t\t\t\treturn 0;
\t\t\t}

\t\t\treturn compare & 4 ? -1 : 1;
\t\t}

\t\t// Not directly comparable, sort on existence of method
\t\treturn a.compareDocumentPosition ? -1 : 1;
\t};

jQuery.extend({
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
\t\tif ( (nodeType = context.nodeType) !== 1 && nodeType !== 9 ) {
\t\t\treturn [];
\t\t}

\t\tif ( seed ) {
\t\t\twhile ( (elem = seed[i++]) ) {
\t\t\t\tif ( jQuery.find.matchesSelector(elem, selector) ) {
\t\t\t\t\tresults.push( elem );
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tjQuery.merge( results, context.querySelectorAll(selector) );
\t\t}

\t\treturn results;
\t},
\tunique: function( results ) {
\t\tvar elem,
\t\t\tduplicates = [],
\t\t\ti = 0,
\t\t\tj = 0;

\t\tselector_hasDuplicate = false;
\t\tresults.sort( selector_sortOrder );

\t\tif ( selector_hasDuplicate ) {
\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\tif ( elem === results[ i ] ) {
\t\t\t\t\tj = duplicates.push( i );
\t\t\t\t}
\t\t\t}
\t\t\twhile ( j-- ) {
\t\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t\t}
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
\t\t\twhile ( (node = elem[i++]) ) {
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
\t\treturn a === bup || !!( bup && bup.nodeType === 1 && adown.contains(bup) );
\t},
\tisXMLDoc: function( elem ) {
\t\treturn (elem.ownerDocument || elem).documentElement.nodeName !== \"HTML\";
\t},
\texpr: {
\t\tattrHandle: {},
\t\tmatch: {
\t\t\tbool: /^(?:checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped)\$/i,
\t\t\tneedsContext: /^[\\x20\\t\\r\\n\\f]*[>+~]/
\t\t}
\t}
});

jQuery.extend( jQuery.find, {
\tmatches: function( expr, elements ) {
\t\treturn jQuery.find( expr, null, null, elements );
\t},
\tmatchesSelector: function( elem, expr ) {
\t\treturn matches.call( elem, expr );
\t},
\tattr: function( elem, name ) {
\t\treturn elem.getAttribute( name );
\t}
});

});
";
        
        $__internal_0243dc2a21307a2987d2c6a1c90469f204fd984629365217f6cd74f6a14effd9->leave($__internal_0243dc2a21307a2987d2c6a1c90469f204fd984629365217f6cd74f6a14effd9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/selector-native.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\"
], function( jQuery ) {

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

var docElem = window.document.documentElement,
\tselector_hasDuplicate,
\tmatches = docElem.matches ||
\t\tdocElem.webkitMatchesSelector ||
\t\tdocElem.mozMatchesSelector ||
\t\tdocElem.oMatchesSelector ||
\t\tdocElem.msMatchesSelector,
\tselector_sortOrder = function( a, b ) {
\t\t// Flag for duplicate removal
\t\tif ( a === b ) {
\t\t\tselector_hasDuplicate = true;
\t\t\treturn 0;
\t\t}

\t\tvar compare = b.compareDocumentPosition && a.compareDocumentPosition && a.compareDocumentPosition( b );

\t\tif ( compare ) {
\t\t\t// Disconnected nodes
\t\t\tif ( compare & 1 ) {

\t\t\t\t// Choose the first element that is related to our document
\t\t\t\tif ( a === document || jQuery.contains(document, a) ) {
\t\t\t\t\treturn -1;
\t\t\t\t}
\t\t\t\tif ( b === document || jQuery.contains(document, b) ) {
\t\t\t\t\treturn 1;
\t\t\t\t}

\t\t\t\t// Maintain original order
\t\t\t\treturn 0;
\t\t\t}

\t\t\treturn compare & 4 ? -1 : 1;
\t\t}

\t\t// Not directly comparable, sort on existence of method
\t\treturn a.compareDocumentPosition ? -1 : 1;
\t};

jQuery.extend({
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
\t\tif ( (nodeType = context.nodeType) !== 1 && nodeType !== 9 ) {
\t\t\treturn [];
\t\t}

\t\tif ( seed ) {
\t\t\twhile ( (elem = seed[i++]) ) {
\t\t\t\tif ( jQuery.find.matchesSelector(elem, selector) ) {
\t\t\t\t\tresults.push( elem );
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tjQuery.merge( results, context.querySelectorAll(selector) );
\t\t}

\t\treturn results;
\t},
\tunique: function( results ) {
\t\tvar elem,
\t\t\tduplicates = [],
\t\t\ti = 0,
\t\t\tj = 0;

\t\tselector_hasDuplicate = false;
\t\tresults.sort( selector_sortOrder );

\t\tif ( selector_hasDuplicate ) {
\t\t\twhile ( (elem = results[i++]) ) {
\t\t\t\tif ( elem === results[ i ] ) {
\t\t\t\t\tj = duplicates.push( i );
\t\t\t\t}
\t\t\t}
\t\t\twhile ( j-- ) {
\t\t\t\tresults.splice( duplicates[ j ], 1 );
\t\t\t}
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
\t\t\twhile ( (node = elem[i++]) ) {
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
\t\treturn a === bup || !!( bup && bup.nodeType === 1 && adown.contains(bup) );
\t},
\tisXMLDoc: function( elem ) {
\t\treturn (elem.ownerDocument || elem).documentElement.nodeName !== \"HTML\";
\t},
\texpr: {
\t\tattrHandle: {},
\t\tmatch: {
\t\t\tbool: /^(?:checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped)\$/i,
\t\t\tneedsContext: /^[\\x20\\t\\r\\n\\f]*[>+~]/
\t\t}
\t}
});

jQuery.extend( jQuery.find, {
\tmatches: function( expr, elements ) {
\t\treturn jQuery.find( expr, null, null, elements );
\t},
\tmatchesSelector: function( elem, expr ) {
\t\treturn matches.call( elem, expr );
\t},
\tattr: function( elem, name ) {
\t\treturn elem.getAttribute( name );
\t}
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/selector-native.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/selector-native.js");
    }
}
