<?php

/* node_modules/parsleyjs/bower_components/jquery/src/core/init.js */
class __TwigTemplate_dff52f603d8c5139ff431d0e9493276168e7e8a1dba1a605290afc4eca9f2452 extends Twig_Template
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
        $__internal_2f6ff3597bb34c1a9d1f2afc615864859814fe35c4b15e2ae2abd74721c1a113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6ff3597bb34c1a9d1f2afc615864859814fe35c4b15e2ae2abd74721c1a113->enter($__internal_2f6ff3597bb34c1a9d1f2afc615864859814fe35c4b15e2ae2abd74721c1a113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/core/init.js"));

        // line 1
        echo "// Initialize a jQuery object
define([
\t\"../core\",
\t\"./var/rsingleTag\",
\t\"../traversing/findFilter\"
], function( jQuery, rsingleTag ) {

// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]*))\$/,

\tinit = jQuery.fn.init = function( selector, context ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector[0] === \"<\" && selector[ selector.length - 1 ] === \">\" && selector.length >= 3 ) {
\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && (match[1] || !context) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[1] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[0] : context;

\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[1],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[1] ) && jQuery.isPlainObject( context ) ) {
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
\t\t\t\t\telem = document.getElementById( match[2] );

\t\t\t\t\t// Support: Blackberry 4.6
\t\t\t\t\t// gEBID returns nodes no longer in the document (#6963)
\t\t\t\t\tif ( elem && elem.parentNode ) {
\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t\tthis[0] = elem;
\t\t\t\t\t}

\t\t\t\t\tthis.context = document;
\t\t\t\t\tthis.selector = selector;
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || rootjQuery ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis.context = this[0] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( jQuery.isFunction( selector ) ) {
\t\t\treturn typeof rootjQuery.ready !== \"undefined\" ?
\t\t\t\trootjQuery.ready( selector ) :
\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\tif ( selector.selector !== undefined ) {
\t\t\tthis.selector = selector.selector;
\t\t\tthis.context = selector.context;
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );

return init;

});
";
        
        $__internal_2f6ff3597bb34c1a9d1f2afc615864859814fe35c4b15e2ae2abd74721c1a113->leave($__internal_2f6ff3597bb34c1a9d1f2afc615864859814fe35c4b15e2ae2abd74721c1a113_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/core/init.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Initialize a jQuery object
define([
\t\"../core\",
\t\"./var/rsingleTag\",
\t\"../traversing/findFilter\"
], function( jQuery, rsingleTag ) {

// A central reference to the root jQuery(document)
var rootjQuery,

\t// A simple way to check for HTML strings
\t// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
\t// Strict HTML recognition (#11290: must start with <)
\trquickExpr = /^(?:\\s*(<[\\w\\W]+>)[^>]*|#([\\w-]*))\$/,

\tinit = jQuery.fn.init = function( selector, context ) {
\t\tvar match, elem;

\t\t// HANDLE: \$(\"\"), \$(null), \$(undefined), \$(false)
\t\tif ( !selector ) {
\t\t\treturn this;
\t\t}

\t\t// Handle HTML strings
\t\tif ( typeof selector === \"string\" ) {
\t\t\tif ( selector[0] === \"<\" && selector[ selector.length - 1 ] === \">\" && selector.length >= 3 ) {
\t\t\t\t// Assume that strings that start and end with <> are HTML and skip the regex check
\t\t\t\tmatch = [ null, selector, null ];

\t\t\t} else {
\t\t\t\tmatch = rquickExpr.exec( selector );
\t\t\t}

\t\t\t// Match html or make sure no context is specified for #id
\t\t\tif ( match && (match[1] || !context) ) {

\t\t\t\t// HANDLE: \$(html) -> \$(array)
\t\t\t\tif ( match[1] ) {
\t\t\t\t\tcontext = context instanceof jQuery ? context[0] : context;

\t\t\t\t\t// Option to run scripts is true for back-compat
\t\t\t\t\t// Intentionally let the error be thrown if parseHTML is not present
\t\t\t\t\tjQuery.merge( this, jQuery.parseHTML(
\t\t\t\t\t\tmatch[1],
\t\t\t\t\t\tcontext && context.nodeType ? context.ownerDocument || context : document,
\t\t\t\t\t\ttrue
\t\t\t\t\t) );

\t\t\t\t\t// HANDLE: \$(html, props)
\t\t\t\t\tif ( rsingleTag.test( match[1] ) && jQuery.isPlainObject( context ) ) {
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
\t\t\t\t\telem = document.getElementById( match[2] );

\t\t\t\t\t// Support: Blackberry 4.6
\t\t\t\t\t// gEBID returns nodes no longer in the document (#6963)
\t\t\t\t\tif ( elem && elem.parentNode ) {
\t\t\t\t\t\t// Inject the element directly into the jQuery object
\t\t\t\t\t\tthis.length = 1;
\t\t\t\t\t\tthis[0] = elem;
\t\t\t\t\t}

\t\t\t\t\tthis.context = document;
\t\t\t\t\tthis.selector = selector;
\t\t\t\t\treturn this;
\t\t\t\t}

\t\t\t// HANDLE: \$(expr, \$(...))
\t\t\t} else if ( !context || context.jquery ) {
\t\t\t\treturn ( context || rootjQuery ).find( selector );

\t\t\t// HANDLE: \$(expr, context)
\t\t\t// (which is just equivalent to: \$(context).find(expr)
\t\t\t} else {
\t\t\t\treturn this.constructor( context ).find( selector );
\t\t\t}

\t\t// HANDLE: \$(DOMElement)
\t\t} else if ( selector.nodeType ) {
\t\t\tthis.context = this[0] = selector;
\t\t\tthis.length = 1;
\t\t\treturn this;

\t\t// HANDLE: \$(function)
\t\t// Shortcut for document ready
\t\t} else if ( jQuery.isFunction( selector ) ) {
\t\t\treturn typeof rootjQuery.ready !== \"undefined\" ?
\t\t\t\trootjQuery.ready( selector ) :
\t\t\t\t// Execute immediately if ready is not present
\t\t\t\tselector( jQuery );
\t\t}

\t\tif ( selector.selector !== undefined ) {
\t\t\tthis.selector = selector.selector;
\t\t\tthis.context = selector.context;
\t\t}

\t\treturn jQuery.makeArray( selector, this );
\t};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );

return init;

});
", "node_modules/parsleyjs/bower_components/jquery/src/core/init.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/core/init.js");
    }
}
