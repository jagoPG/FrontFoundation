<?php

/* node_modules/jquery/src/core/init.js */
class __TwigTemplate_86d6c623c063b3d2d4b6a4db187a60e28629b15baa597bdca9e0c67facec588e extends Twig_Template
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
        $__internal_2240868e234a5f6d861959a3d26b798cdd382992c33cb9b951bc9e1cc61a86c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2240868e234a5f6d861959a3d26b798cdd382992c33cb9b951bc9e1cc61a86c4->enter($__internal_2240868e234a5f6d861959a3d26b798cdd382992c33cb9b951bc9e1cc61a86c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/init.js"));

        // line 1
        echo "// Initialize a jQuery object
define( [
\t\"../core\",
\t\"../var/document\",
\t\"./var/rsingleTag\",

\t\"../traversing/findFilter\"
], function( jQuery, document, rsingleTag ) {

\"use strict\";

// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\t// Shortcut simple #id case for speed
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]+))\$/,

\tinit = jQuery.fn.init = function( selector, context, root ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Method init() accepts an alternate rootjQuery
\t\t// so migrate can support jQuery.sub (gh-2101)
\t\troot = root || rootjQuery;

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector[ 0 ] === \"<\" &&
\t\t\t\tselector[ selector.length - 1 ] === \">\" &&
\t\t\t\tselector.length >= 3 ) {

\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && ( match[ 1 ] || !context ) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[ 1 ] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[ 0 ] : context;

\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[ 1 ],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\tfor ( match in context ) {

\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\tif ( jQuery.isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t} else {
\t\t\t\t\telem = document.getElementById( match[ 2 ] );

\t\t\t\t\tif ( elem ) {

\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\tthis[ 0 ] = elem;
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || root ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis[ 0 ] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( jQuery.isFunction( selector ) ) {
\t\t\treturn root.ready !== undefined ?
\t\t\t\troot.ready( selector ) :

\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );

return init;

} );
";
        
        $__internal_2240868e234a5f6d861959a3d26b798cdd382992c33cb9b951bc9e1cc61a86c4->leave($__internal_2240868e234a5f6d861959a3d26b798cdd382992c33cb9b951bc9e1cc61a86c4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/init.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Initialize a jQuery object
define( [
\t\"../core\",
\t\"../var/document\",
\t\"./var/rsingleTag\",

\t\"../traversing/findFilter\"
], function( jQuery, document, rsingleTag ) {

\"use strict\";

// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\t// Shortcut simple #id case for speed
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]+))\$/,

\tinit = jQuery.fn.init = function( selector, context, root ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Method init() accepts an alternate rootjQuery
\t\t// so migrate can support jQuery.sub (gh-2101)
\t\troot = root || rootjQuery;

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector[ 0 ] === \"<\" &&
\t\t\t\tselector[ selector.length - 1 ] === \">\" &&
\t\t\t\tselector.length >= 3 ) {

\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && ( match[ 1 ] || !context ) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[ 1 ] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[ 0 ] : context;

\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[ 1 ],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
\t\t\t\t\t\tfor ( match in context ) {

\t\t\t\t\t\t\t// Properties of context are called as methods if possible
\t\t\t\t\t\t\tif ( jQuery.isFunction( this[ match ] ) ) {
\t\t\t\t\t\t\t\tthis[ match ]( context[ match ] );

\t\t\t\t\t\t\t// ...and otherwise set as attributes
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tthis.attr( match, context[ match ] );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\treturn this;

\t\t\t\t// HANDLE: \$(#id)
\t\t\t\t} else {
\t\t\t\t\telem = document.getElementById( match[ 2 ] );

\t\t\t\t\tif ( elem ) {

\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\tthis[ 0 ] = elem;
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t}
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || root ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis[ 0 ] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( jQuery.isFunction( selector ) ) {
\t\t\treturn root.ready !== undefined ?
\t\t\t\troot.ready( selector ) :

\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );

return init;

} );
", "node_modules/jquery/src/core/init.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/init.js");
    }
}
