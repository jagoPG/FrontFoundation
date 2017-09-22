<?php

/* node_modules/jquery/src/traversing.js */
class __TwigTemplate_f28aa419b7758750d681cf1344d0161df57a3fbc51bf4b61c51690f833a8d576 extends Twig_Template
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
        $__internal_b155d7e3463d996c5e916ba1be5c2563a26da99754ca19804eef430a74e6570a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b155d7e3463d996c5e916ba1be5c2563a26da99754ca19804eef430a74e6570a->enter($__internal_b155d7e3463d996c5e916ba1be5c2563a26da99754ca19804eef430a74e6570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/traversing.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./var/indexOf\",
\t\"./traversing/var/dir\",
\t\"./traversing/var/siblings\",
\t\"./traversing/var/rneedsContext\",
\t\"./core/nodeName\",

\t\"./core/init\",
\t\"./traversing/findFilter\",
\t\"./selector\"
], function( jQuery, indexOf, dir, siblings, rneedsContext, nodeName ) {

\"use strict\";

var rparentsprev = /^(?:parents|prev(?:Until|All))/,

\t// Methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.fn.extend( {
\thas: function( target ) {
\t\tvar targets = jQuery( target, this ),
\t\t\tl = targets.length;

\t\treturn this.filter( function() {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[ i ] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\ttargets = typeof selectors !== \"string\" && jQuery( selectors );

\t\t// Positional selectors never match, since there's no _selection_ context
\t\tif ( !rneedsContext.test( selectors ) ) {
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tfor ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

\t\t\t\t\t// Always skip document fragments
\t\t\t\t\tif ( cur.nodeType < 11 && ( targets ?
\t\t\t\t\t\ttargets.index( cur ) > -1 :

\t\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\t\tjQuery.find.matchesSelector( cur, selectors ) ) ) {

\t\t\t\t\t\tmatched.push( cur );
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
\t},

\t// Determine the position of an element within the set
\tindex: function( elem ) {

\t\t// No argument, return index in parent
\t\tif ( !elem ) {
\t\t\treturn ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
\t\t}

\t\t// Index in selector
\t\tif ( typeof elem === \"string\" ) {
\t\t\treturn indexOf.call( jQuery( elem ), this[ 0 ] );
\t\t}

\t\t// Locate the position of the desired element
\t\treturn indexOf.call( this,

\t\t\t// If it receives a jQuery object, the first element is used
\t\t\telem.jquery ? elem[ 0 ] : elem
\t\t);
\t},

\tadd: function( selector, context ) {
\t\treturn this.pushStack(
\t\t\tjQuery.uniqueSort(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter( selector )
\t\t);
\t}
} );

function sibling( cur, dir ) {
\twhile ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
\treturn cur;
}

jQuery.each( {
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn siblings( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn siblings( elem.firstChild );
\t},
\tcontents: function( elem ) {
        if ( nodeName( elem, \"iframe\" ) ) {
            return elem.contentDocument;
        }

        // Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
        // Treat the template element as a regular one in browsers that
        // don't support it.
        if ( nodeName( elem, \"template\" ) ) {
            elem = elem.content || elem;
        }

        return jQuery.merge( [], elem.childNodes );
\t}
}, function( name, fn ) {
\tjQuery.fn[ name ] = function( until, selector ) {
\t\tvar matched = jQuery.map( this, fn, until );

\t\tif ( name.slice( -5 ) !== \"Until\" ) {
\t\t\tselector = until;
\t\t}

\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\tmatched = jQuery.filter( selector, matched );
\t\t}

\t\tif ( this.length > 1 ) {

\t\t\t// Remove duplicates
\t\t\tif ( !guaranteedUnique[ name ] ) {
\t\t\t\tjQuery.uniqueSort( matched );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tmatched.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched );
\t};
} );

return jQuery;
} );
";
        
        $__internal_b155d7e3463d996c5e916ba1be5c2563a26da99754ca19804eef430a74e6570a->leave($__internal_b155d7e3463d996c5e916ba1be5c2563a26da99754ca19804eef430a74e6570a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/traversing.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./var/indexOf\",
\t\"./traversing/var/dir\",
\t\"./traversing/var/siblings\",
\t\"./traversing/var/rneedsContext\",
\t\"./core/nodeName\",

\t\"./core/init\",
\t\"./traversing/findFilter\",
\t\"./selector\"
], function( jQuery, indexOf, dir, siblings, rneedsContext, nodeName ) {

\"use strict\";

var rparentsprev = /^(?:parents|prev(?:Until|All))/,

\t// Methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.fn.extend( {
\thas: function( target ) {
\t\tvar targets = jQuery( target, this ),
\t\t\tl = targets.length;

\t\treturn this.filter( function() {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[ i ] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t} );
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\ttargets = typeof selectors !== \"string\" && jQuery( selectors );

\t\t// Positional selectors never match, since there's no _selection_ context
\t\tif ( !rneedsContext.test( selectors ) ) {
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tfor ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

\t\t\t\t\t// Always skip document fragments
\t\t\t\t\tif ( cur.nodeType < 11 && ( targets ?
\t\t\t\t\t\ttargets.index( cur ) > -1 :

\t\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\t\tjQuery.find.matchesSelector( cur, selectors ) ) ) {

\t\t\t\t\t\tmatched.push( cur );
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
\t},

\t// Determine the position of an element within the set
\tindex: function( elem ) {

\t\t// No argument, return index in parent
\t\tif ( !elem ) {
\t\t\treturn ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
\t\t}

\t\t// Index in selector
\t\tif ( typeof elem === \"string\" ) {
\t\t\treturn indexOf.call( jQuery( elem ), this[ 0 ] );
\t\t}

\t\t// Locate the position of the desired element
\t\treturn indexOf.call( this,

\t\t\t// If it receives a jQuery object, the first element is used
\t\t\telem.jquery ? elem[ 0 ] : elem
\t\t);
\t},

\tadd: function( selector, context ) {
\t\treturn this.pushStack(
\t\t\tjQuery.uniqueSort(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter( selector )
\t\t);
\t}
} );

function sibling( cur, dir ) {
\twhile ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
\treturn cur;
}

jQuery.each( {
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn siblings( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn siblings( elem.firstChild );
\t},
\tcontents: function( elem ) {
        if ( nodeName( elem, \"iframe\" ) ) {
            return elem.contentDocument;
        }

        // Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
        // Treat the template element as a regular one in browsers that
        // don't support it.
        if ( nodeName( elem, \"template\" ) ) {
            elem = elem.content || elem;
        }

        return jQuery.merge( [], elem.childNodes );
\t}
}, function( name, fn ) {
\tjQuery.fn[ name ] = function( until, selector ) {
\t\tvar matched = jQuery.map( this, fn, until );

\t\tif ( name.slice( -5 ) !== \"Until\" ) {
\t\t\tselector = until;
\t\t}

\t\tif ( selector && typeof selector === \"string\" ) {
\t\t\tmatched = jQuery.filter( selector, matched );
\t\t}

\t\tif ( this.length > 1 ) {

\t\t\t// Remove duplicates
\t\t\tif ( !guaranteedUnique[ name ] ) {
\t\t\t\tjQuery.uniqueSort( matched );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tmatched.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched );
\t};
} );

return jQuery;
} );
", "node_modules/jquery/src/traversing.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/traversing.js");
    }
}
