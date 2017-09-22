<?php

/* node_modules/jquery/src/traversing/findFilter.js */
class __TwigTemplate_e409ccb503c81447911c015e344a07be85b62943429c6d742b739b9c383fc128 extends Twig_Template
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
        $__internal_f0c6eb3c4a9843652475450e1cc878257521c52db0d76cfb60fa88487ac64364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c6eb3c4a9843652475450e1cc878257521c52db0d76cfb60fa88487ac64364->enter($__internal_f0c6eb3c4a9843652475450e1cc878257521c52db0d76cfb60fa88487ac64364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/traversing/findFilter.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/indexOf\",
\t\"./var/rneedsContext\",
\t\"../selector\"
], function( jQuery, indexOf, rneedsContext ) {

\"use strict\";

var risSimple = /^.[^:#\\[\\.,]*\$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( jQuery.isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t} );
\t}

\t// Single element
\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t} );
\t}

\t// Arraylike of elements (jQuery, arguments, Array)
\tif ( typeof qualifier !== \"string\" ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( indexOf.call( qualifier, elem ) > -1 ) !== not;
\t\t} );
\t}

\t// Simple selector that can be filtered directly, removing non-Elements
\tif ( risSimple.test( qualifier ) ) {
\t\treturn jQuery.filter( qualifier, elements, not );
\t}

\t// Complex selector, compare the two sets, removing non-Elements
\tqualifier = jQuery.filter( qualifier, elements );
\treturn jQuery.grep( elements, function( elem ) {
\t\treturn ( indexOf.call( qualifier, elem ) > -1 ) !== not && elem.nodeType === 1;
\t} );
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\tif ( elems.length === 1 && elem.nodeType === 1 ) {
\t\treturn jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
\t}

\treturn jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\treturn elem.nodeType === 1;
\t} ) );
};

jQuery.fn.extend( {
\tfind: function( selector ) {
\t\tvar i, ret,
\t\t\tlen = this.length,
\t\t\tself = this;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter( function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} ) );
\t\t}

\t\tret = this.pushStack( [] );

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\treturn len > 1 ? jQuery.uniqueSort( ret ) : ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], false ) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], true ) );
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
} );

} );
";
        
        $__internal_f0c6eb3c4a9843652475450e1cc878257521c52db0d76cfb60fa88487ac64364->leave($__internal_f0c6eb3c4a9843652475450e1cc878257521c52db0d76cfb60fa88487ac64364_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/traversing/findFilter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../var/indexOf\",
\t\"./var/rneedsContext\",
\t\"../selector\"
], function( jQuery, indexOf, rneedsContext ) {

\"use strict\";

var risSimple = /^.[^:#\\[\\.,]*\$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
\tif ( jQuery.isFunction( qualifier ) ) {
\t\treturn jQuery.grep( elements, function( elem, i ) {
\t\t\treturn !!qualifier.call( elem, i, elem ) !== not;
\t\t} );
\t}

\t// Single element
\tif ( qualifier.nodeType ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( elem === qualifier ) !== not;
\t\t} );
\t}

\t// Arraylike of elements (jQuery, arguments, Array)
\tif ( typeof qualifier !== \"string\" ) {
\t\treturn jQuery.grep( elements, function( elem ) {
\t\t\treturn ( indexOf.call( qualifier, elem ) > -1 ) !== not;
\t\t} );
\t}

\t// Simple selector that can be filtered directly, removing non-Elements
\tif ( risSimple.test( qualifier ) ) {
\t\treturn jQuery.filter( qualifier, elements, not );
\t}

\t// Complex selector, compare the two sets, removing non-Elements
\tqualifier = jQuery.filter( qualifier, elements );
\treturn jQuery.grep( elements, function( elem ) {
\t\treturn ( indexOf.call( qualifier, elem ) > -1 ) !== not && elem.nodeType === 1;
\t} );
}

jQuery.filter = function( expr, elems, not ) {
\tvar elem = elems[ 0 ];

\tif ( not ) {
\t\texpr = \":not(\" + expr + \")\";
\t}

\tif ( elems.length === 1 && elem.nodeType === 1 ) {
\t\treturn jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
\t}

\treturn jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
\t\treturn elem.nodeType === 1;
\t} ) );
};

jQuery.fn.extend( {
\tfind: function( selector ) {
\t\tvar i, ret,
\t\t\tlen = this.length,
\t\t\tself = this;

\t\tif ( typeof selector !== \"string\" ) {
\t\t\treturn this.pushStack( jQuery( selector ).filter( function() {
\t\t\t\tfor ( i = 0; i < len; i++ ) {
\t\t\t\t\tif ( jQuery.contains( self[ i ], this ) ) {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} ) );
\t\t}

\t\tret = this.pushStack( [] );

\t\tfor ( i = 0; i < len; i++ ) {
\t\t\tjQuery.find( selector, self[ i ], ret );
\t\t}

\t\treturn len > 1 ? jQuery.uniqueSort( ret ) : ret;
\t},
\tfilter: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], false ) );
\t},
\tnot: function( selector ) {
\t\treturn this.pushStack( winnow( this, selector || [], true ) );
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
} );

} );
", "node_modules/jquery/src/traversing/findFilter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/traversing/findFilter.js");
    }
}
