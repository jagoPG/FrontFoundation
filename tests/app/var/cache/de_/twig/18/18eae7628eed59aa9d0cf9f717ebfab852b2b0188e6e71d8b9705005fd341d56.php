<?php

/* node_modules/parsleyjs/bower_components/jquery/src/traversing/findFilter.js */
class __TwigTemplate_2cbf1348b6057f43474a02589e5b5c12ebff1246a5dd5c9fc2bbf1e2b10b17a4 extends Twig_Template
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
        $__internal_7ca2dc9d8055c822c4bb1a842074cdb6bb4bbc6284e4b3c2f1c37825f19cee8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca2dc9d8055c822c4bb1a842074cdb6bb4bbc6284e4b3c2f1c37825f19cee8f->enter($__internal_7ca2dc9d8055c822c4bb1a842074cdb6bb4bbc6284e4b3c2f1c37825f19cee8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/traversing/findFilter.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../var/indexOf\",
\t\"./var/rneedsContext\",
\t\"../selector\"
], function( jQuery, indexOf, rneedsContext ) {

var risSimple = /^.[^:#\\[\\.,]*\$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( jQuery.isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\t/* jshint -W018 */
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t});

\t}

\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t});

\t}

\tif ( typeof qualifier === \"string\" ) {
\t\tif ( risSimple.test( qualifier ) ) {
\t\t\treturn jQuery.filter( qualifier, elements, not );
\t\t}

\t\tqualifier = jQuery.filter( qualifier, elements );
\t}

\treturn jQuery.grep( elements, function( elem ) {
\t\treturn ( indexOf.call( qualifier, elem ) >= 0 ) !== not;
\t});
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\treturn elems.length === 1 && elem.nodeType === 1 ?
\t\tjQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [] :
\t\tjQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\t\treturn elem.nodeType === 1;
\t\t}));
};

jQuery.fn.extend({
\tfind: function( selector ) {
\t\tvar i,
\t\t\tlen = this.length,
\t\t\tret = [],
\t\t\tself = this;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter(function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}) );
\t\t}

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\t// Needed because \$( selector, context ) becomes \$( context ).find( selector )
\t\tret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );
\t\tret.selector = this.selector ? this.selector + \" \" + selector : selector;
\t\treturn ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector || [], false) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector || [], true) );
\t},
\tis: function( selector ) {
\t\treturn !!winnow(
\t\t\tthis,

\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\ttypeof selector === \"string\" && rneedsContext.test( selector ) ?
\t\t\t\tjQuery( selector ) :
\t\t\t\tselector || [],
\t\t\tfalse
\t\t).length;
\t}
});

});
";
        
        $__internal_7ca2dc9d8055c822c4bb1a842074cdb6bb4bbc6284e4b3c2f1c37825f19cee8f->leave($__internal_7ca2dc9d8055c822c4bb1a842074cdb6bb4bbc6284e4b3c2f1c37825f19cee8f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/traversing/findFilter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../var/indexOf\",
\t\"./var/rneedsContext\",
\t\"../selector\"
], function( jQuery, indexOf, rneedsContext ) {

var risSimple = /^.[^:#\\[\\.,]*\$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( jQuery.isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\t/* jshint -W018 */
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t});

\t}

\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t});

\t}

\tif ( typeof qualifier === \"string\" ) {
\t\tif ( risSimple.test( qualifier ) ) {
\t\t\treturn jQuery.filter( qualifier, elements, not );
\t\t}

\t\tqualifier = jQuery.filter( qualifier, elements );
\t}

\treturn jQuery.grep( elements, function( elem ) {
\t\treturn ( indexOf.call( qualifier, elem ) >= 0 ) !== not;
\t});
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\treturn elems.length === 1 && elem.nodeType === 1 ?
\t\tjQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [] :
\t\tjQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\t\treturn elem.nodeType === 1;
\t\t}));
};

jQuery.fn.extend({
\tfind: function( selector ) {
\t\tvar i,
\t\t\tlen = this.length,
\t\t\tret = [],
\t\t\tself = this;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter(function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}) );
\t\t}

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\t// Needed because \$( selector, context ) becomes \$( context ).find( selector )
\t\tret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );
\t\tret.selector = this.selector ? this.selector + \" \" + selector : selector;
\t\treturn ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector || [], false) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow(this, selector || [], true) );
\t},
\tis: function( selector ) {
\t\treturn !!winnow(
\t\t\tthis,

\t\t\t// If this is a positional/relative selector, check membership in the returned set
\t\t\t// so \$(\"p:first\").is(\"p:last\") won't return true for a doc with two \"p\".
\t\t\ttypeof selector === \"string\" && rneedsContext.test( selector ) ?
\t\t\t\tjQuery( selector ) :
\t\t\t\tselector || [],
\t\t\tfalse
\t\t).length;
\t}
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/traversing/findFilter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/traversing/findFilter.js");
    }
}
