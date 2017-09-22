<?php

/* node_modules/parsleyjs/bower_components/jquery/src/traversing.js */
class __TwigTemplate_b2878c6b0e6016a2fdf481dd19fb52bdba9d65a1193ad89d6d1dd99a4229ae28 extends Twig_Template
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
        $__internal_632ed8f323429f4c44271a827906633e6b6688f5dd69bb91948830f70683130d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632ed8f323429f4c44271a827906633e6b6688f5dd69bb91948830f70683130d->enter($__internal_632ed8f323429f4c44271a827906633e6b6688f5dd69bb91948830f70683130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/traversing.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/indexOf\",
\t\"./traversing/var/rneedsContext\",
\t\"./core/init\",
\t\"./traversing/findFilter\",
\t\"./selector\"
], function( jQuery, indexOf, rneedsContext ) {

var rparentsprev = /^(?:parents|prev(?:Until|All))/,
\t// Methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.extend({
\tdir: function( elem, dir, until ) {
\t\tvar matched = [],
\t\t\ttruncate = until !== undefined;

\t\twhile ( (elem = elem[ dir ]) && elem.nodeType !== 9 ) {
\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tmatched.push( elem );
\t\t\t}
\t\t}
\t\treturn matched;
\t},

\tsibling: function( n, elem ) {
\t\tvar matched = [];

\t\tfor ( ; n; n = n.nextSibling ) {
\t\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\t\tmatched.push( n );
\t\t\t}
\t\t}

\t\treturn matched;
\t}
});

jQuery.fn.extend({
\thas: function( target ) {
\t\tvar targets = jQuery( target, this ),
\t\t\tl = targets.length;

\t\treturn this.filter(function() {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[i] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t});
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\tpos = rneedsContext.test( selectors ) || typeof selectors !== \"string\" ?
\t\t\t\tjQuery( selectors, context || this.context ) :
\t\t\t\t0;

\t\tfor ( ; i < l; i++ ) {
\t\t\tfor ( cur = this[i]; cur && cur !== context; cur = cur.parentNode ) {
\t\t\t\t// Always skip document fragments
\t\t\t\tif ( cur.nodeType < 11 && (pos ?
\t\t\t\t\tpos.index(cur) > -1 :

\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\tjQuery.find.matchesSelector(cur, selectors)) ) {

\t\t\t\t\tmatched.push( cur );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.unique( matched ) : matched );
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
\t\t\tjQuery.unique(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter(selector)
\t\t);
\t}
});

function sibling( cur, dir ) {
\twhile ( (cur = cur[dir]) && cur.nodeType !== 1 ) {}
\treturn cur;
}

jQuery.each({
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn jQuery.dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn jQuery.sibling( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn jQuery.sibling( elem.firstChild );
\t},
\tcontents: function( elem ) {
\t\treturn elem.contentDocument || jQuery.merge( [], elem.childNodes );
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
\t\t\t\tjQuery.unique( matched );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tmatched.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched );
\t};
});

return jQuery;
});
";
        
        $__internal_632ed8f323429f4c44271a827906633e6b6688f5dd69bb91948830f70683130d->leave($__internal_632ed8f323429f4c44271a827906633e6b6688f5dd69bb91948830f70683130d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/traversing.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/indexOf\",
\t\"./traversing/var/rneedsContext\",
\t\"./core/init\",
\t\"./traversing/findFilter\",
\t\"./selector\"
], function( jQuery, indexOf, rneedsContext ) {

var rparentsprev = /^(?:parents|prev(?:Until|All))/,
\t// Methods guaranteed to produce a unique set when starting from a unique set
\tguaranteedUnique = {
\t\tchildren: true,
\t\tcontents: true,
\t\tnext: true,
\t\tprev: true
\t};

jQuery.extend({
\tdir: function( elem, dir, until ) {
\t\tvar matched = [],
\t\t\ttruncate = until !== undefined;

\t\twhile ( (elem = elem[ dir ]) && elem.nodeType !== 9 ) {
\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tmatched.push( elem );
\t\t\t}
\t\t}
\t\treturn matched;
\t},

\tsibling: function( n, elem ) {
\t\tvar matched = [];

\t\tfor ( ; n; n = n.nextSibling ) {
\t\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\t\tmatched.push( n );
\t\t\t}
\t\t}

\t\treturn matched;
\t}
});

jQuery.fn.extend({
\thas: function( target ) {
\t\tvar targets = jQuery( target, this ),
\t\t\tl = targets.length;

\t\treturn this.filter(function() {
\t\t\tvar i = 0;
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tif ( jQuery.contains( this, targets[i] ) ) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t});
\t},

\tclosest: function( selectors, context ) {
\t\tvar cur,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tmatched = [],
\t\t\tpos = rneedsContext.test( selectors ) || typeof selectors !== \"string\" ?
\t\t\t\tjQuery( selectors, context || this.context ) :
\t\t\t\t0;

\t\tfor ( ; i < l; i++ ) {
\t\t\tfor ( cur = this[i]; cur && cur !== context; cur = cur.parentNode ) {
\t\t\t\t// Always skip document fragments
\t\t\t\tif ( cur.nodeType < 11 && (pos ?
\t\t\t\t\tpos.index(cur) > -1 :

\t\t\t\t\t// Don't pass non-elements to Sizzle
\t\t\t\t\tcur.nodeType === 1 &&
\t\t\t\t\t\tjQuery.find.matchesSelector(cur, selectors)) ) {

\t\t\t\t\tmatched.push( cur );
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched.length > 1 ? jQuery.unique( matched ) : matched );
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
\t\t\tjQuery.unique(
\t\t\t\tjQuery.merge( this.get(), jQuery( selector, context ) )
\t\t\t)
\t\t);
\t},

\taddBack: function( selector ) {
\t\treturn this.add( selector == null ?
\t\t\tthis.prevObject : this.prevObject.filter(selector)
\t\t);
\t}
});

function sibling( cur, dir ) {
\twhile ( (cur = cur[dir]) && cur.nodeType !== 1 ) {}
\treturn cur;
}

jQuery.each({
\tparent: function( elem ) {
\t\tvar parent = elem.parentNode;
\t\treturn parent && parent.nodeType !== 11 ? parent : null;
\t},
\tparents: function( elem ) {
\t\treturn jQuery.dir( elem, \"parentNode\" );
\t},
\tparentsUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"parentNode\", until );
\t},
\tnext: function( elem ) {
\t\treturn sibling( elem, \"nextSibling\" );
\t},
\tprev: function( elem ) {
\t\treturn sibling( elem, \"previousSibling\" );
\t},
\tnextAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"nextSibling\" );
\t},
\tprevAll: function( elem ) {
\t\treturn jQuery.dir( elem, \"previousSibling\" );
\t},
\tnextUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"nextSibling\", until );
\t},
\tprevUntil: function( elem, i, until ) {
\t\treturn jQuery.dir( elem, \"previousSibling\", until );
\t},
\tsiblings: function( elem ) {
\t\treturn jQuery.sibling( ( elem.parentNode || {} ).firstChild, elem );
\t},
\tchildren: function( elem ) {
\t\treturn jQuery.sibling( elem.firstChild );
\t},
\tcontents: function( elem ) {
\t\treturn elem.contentDocument || jQuery.merge( [], elem.childNodes );
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
\t\t\t\tjQuery.unique( matched );
\t\t\t}

\t\t\t// Reverse order for parents* and prev-derivatives
\t\t\tif ( rparentsprev.test( name ) ) {
\t\t\t\tmatched.reverse();
\t\t\t}
\t\t}

\t\treturn this.pushStack( matched );
\t};
});

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/traversing.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/traversing.js");
    }
}
