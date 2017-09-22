<?php

/* node_modules/parsleyjs/bower_components/jquery/src/manipulation.js */
class __TwigTemplate_c5515a4e05b08a8a747062130105991bed0c34a83417dd412759d0a416497ad2 extends Twig_Template
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
        $__internal_0c2e19c53c2e187f264fb94b3939ff3f518b6015e0c782147936382deab90a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2e19c53c2e187f264fb94b3939ff3f518b6015e0c782147936382deab90a92->enter($__internal_0c2e19c53c2e187f264fb94b3939ff3f518b6015e0c782147936382deab90a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/manipulation.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/concat\",
\t\"./var/push\",
\t\"./core/access\",
\t\"./manipulation/var/rcheckableType\",
\t\"./manipulation/support\",
\t\"./data/var/data_priv\",
\t\"./data/var/data_user\",

\t\"./core/init\",
\t\"./data/accepts\",
\t\"./traversing\",
\t\"./selector\",
\t\"./event\"
], function( jQuery, concat, push, access, rcheckableType, support, data_priv, data_user ) {

var
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\\w:]+)[^>]*)\\/>/gi,
\trtagName = /<([\\w:]+)/,
\trhtml = /<|&#?\\w+;/,
\trnoInnerhtml = /<(?:script|style|link)/i,
\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trscriptType = /^\$|\\/(?:java|ecma)script/i,
\trscriptTypeMasked = /^true\\/(.*)/,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g,

\t// We have to close these tags to support XHTML (#13200)
\twrapMap = {

\t\t// Support: IE9
\t\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t\tthead: [ 1, \"<table>\", \"</table>\" ],
\t\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\t\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\t\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t\t_default: [ 0, \"\", \"\" ]
\t};

// Support: IE9
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// Support: 1.x compatibility
// Manipulating tables requires a tbody
function manipulationTarget( elem, content ) {
\treturn jQuery.nodeName( elem, \"table\" ) &&
\t\tjQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ?

\t\telem.getElementsByTagName(\"tbody\")[0] ||
\t\t\telem.appendChild( elem.ownerDocument.createElement(\"tbody\") ) :
\t\telem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = (elem.getAttribute(\"type\") !== null) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tvar match = rscriptTypeMasked.exec( elem.type );

\tif ( match ) {
\t\telem.type = match[ 1 ];
\t} else {
\t\telem.removeAttribute(\"type\");
\t}

\treturn elem;
}

// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar i = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\tdata_priv.set(
\t\t\telems[ i ], \"globalEval\", !refElements || data_priv.get( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}

function cloneCopyEvent( src, dest ) {
\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\t// 1. Copy private data: events, handlers, etc.
\tif ( data_priv.hasData( src ) ) {
\t\tpdataOld = data_priv.access( src );
\t\tpdataCur = data_priv.set( dest, pdataOld );
\t\tevents = pdataOld.events;

\t\tif ( events ) {
\t\t\tdelete pdataCur.handle;
\t\t\tpdataCur.events = {};

\t\t\tfor ( type in events ) {
\t\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// 2. Copy user data
\tif ( data_user.hasData( src ) ) {
\t\tudataOld = data_user.access( src );
\t\tudataCur = jQuery.extend( {}, udataOld );

\t\tdata_user.set( dest, udataCur );
\t}
}

function getAll( context, tag ) {
\tvar ret = context.getElementsByTagName ? context.getElementsByTagName( tag || \"*\" ) :
\t\t\tcontext.querySelectorAll ? context.querySelectorAll( tag || \"*\" ) :
\t\t\t[];

\treturn tag === undefined || tag && jQuery.nodeName( context, tag ) ?
\t\tjQuery.merge( [ context ], ret ) :
\t\tret;
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
\tvar nodeName = dest.nodeName.toLowerCase();

\t// Fails to persist the checked state of a cloned checkbox or radio button.
\tif ( nodeName === \"input\" && rcheckableType.test( src.type ) ) {
\t\tdest.checked = src.checked;

\t// Fails to return the selected option to the default selected state when cloning options
\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\tdest.defaultValue = src.defaultValue;
\t}
}

jQuery.extend({
\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar i, l, srcElements, destElements,
\t\t\tclone = elem.cloneNode( true ),
\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\t// Fix IE cloning issues
\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2
\t\t\tdestElements = getAll( clone );
\t\t\tsrcElements = getAll( elem );

\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\tfixInput( srcElements[ i ], destElements[ i ] );
\t\t\t}
\t\t}

\t\t// Copy the events from the original to the clone
\t\tif ( dataAndEvents ) {
\t\t\tif ( deepDataAndEvents ) {
\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\t\tcloneCopyEvent( srcElements[ i ], destElements[ i ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t}
\t\t}

\t\t// Preserve script evaluation history
\t\tdestElements = getAll( clone, \"script\" );
\t\tif ( destElements.length > 0 ) {
\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t}

\t\t// Return the cloned set
\t\treturn clone;
\t},

\tbuildFragment: function( elems, context, scripts, selection ) {
\t\tvar elem, tmp, tag, wrap, contains, j,
\t\t\tfragment = context.createDocumentFragment(),
\t\t\tnodes = [],
\t\t\ti = 0,
\t\t\tl = elems.length;

\t\tfor ( ; i < l; i++ ) {
\t\t\telem = elems[ i ];

\t\t\tif ( elem || elem === 0 ) {

\t\t\t\t// Add nodes directly
\t\t\t\tif ( jQuery.type( elem ) === \"object\" ) {
\t\t\t\t\t// Support: QtWebKit, PhantomJS
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t\t// Convert non-html into a text node
\t\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t\t// Convert html into DOM nodes
\t\t\t\t} else {
\t\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement(\"div\") );

\t\t\t\t\t// Deserialize a standard representation
\t\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\t\ttmp.innerHTML = wrap[ 1 ] + elem.replace( rxhtmlTag, \"<\$1></\$2>\" ) + wrap[ 2 ];

\t\t\t\t\t// Descend through wrappers to the right content
\t\t\t\t\tj = wrap[ 0 ];
\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t\t}

\t\t\t\t\t// Support: QtWebKit, PhantomJS
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t\t// Remember the top-level container
\t\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\t\ttmp.textContent = \"\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Remove wrapper from fragment
\t\tfragment.textContent = \"\";

\t\ti = 0;
\t\twhile ( (elem = nodes[ i++ ]) ) {

\t\t\t// #4087 - If origin and destination elements are the same, and this is
\t\t\t// that element, do not do anything
\t\t\tif ( selection && jQuery.inArray( elem, selection ) !== -1 ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t\t// Append to fragment
\t\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t\t// Preserve script evaluation history
\t\t\tif ( contains ) {
\t\t\t\tsetGlobalEval( tmp );
\t\t\t}

\t\t\t// Capture executables
\t\t\tif ( scripts ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (elem = tmp[ j++ ]) ) {
\t\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\t\tscripts.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn fragment;
\t},

\tcleanData: function( elems ) {
\t\tvar data, elem, type, key,
\t\t\tspecial = jQuery.event.special,
\t\t\ti = 0;

\t\tfor ( ; (elem = elems[ i ]) !== undefined; i++ ) {
\t\t\tif ( jQuery.acceptData( elem ) ) {
\t\t\t\tkey = elem[ data_priv.expando ];

\t\t\t\tif ( key && (data = data_priv.cache[ key ]) ) {
\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( data_priv.cache[ key ] ) {
\t\t\t\t\t\t// Discard any remaining `private` data
\t\t\t\t\t\tdelete data_priv.cache[ key ];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t// Discard any remaining `user` data
\t\t\tdelete data_user.cache[ elem[ data_user.expando ] ];
\t\t}
\t}
});

jQuery.fn.extend({
\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().each(function() {
\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t}
\t\t\t\t});
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t});
\t},

\tprepend: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t});
\t},

\tbefore: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t});
\t},

\tafter: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t});
\t},

\tremove: function( selector, keepData /* Internal Use Only */ ) {
\t\tvar elem,
\t\t\telems = selector ? jQuery.filter( selector, this ) : this,
\t\t\ti = 0;

\t\tfor ( ; (elem = elems[i]) != null; i++ ) {
\t\t\tif ( !keepData && elem.nodeType === 1 ) {
\t\t\t\tjQuery.cleanData( getAll( elem ) );
\t\t\t}

\t\t\tif ( elem.parentNode ) {
\t\t\t\tif ( keepData && jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\t\t\tsetGlobalEval( getAll( elem, \"script\" ) );
\t\t\t\t}
\t\t\t\telem.parentNode.removeChild( elem );
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; (elem = this[i]) != null; i++ ) {
\t\t\tif ( elem.nodeType === 1 ) {

\t\t\t\t// Prevent memory leaks
\t\t\t\tjQuery.cleanData( getAll( elem, false ) );

\t\t\t\t// Remove any remaining nodes
\t\t\t\telem.textContent = \"\";
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\treturn this.map(function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t});
\t},

\thtml: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\tvar elem = this[ 0 ] || {},
\t\t\t\ti = 0,
\t\t\t\tl = this.length;

\t\t\tif ( value === undefined && elem.nodeType === 1 ) {
\t\t\t\treturn elem.innerHTML;
\t\t\t}

\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [ \"\", \"\" ] )[ 1 ].toLowerCase() ] ) {

\t\t\t\tvalue = value.replace( rxhtmlTag, \"<\$1></\$2>\" );

\t\t\t\ttry {
\t\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\t\telem = this[ i ] || {};

\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\telem = 0;

\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t} catch( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar arg = arguments[ 0 ];

\t\t// Make the changes, replacing each context element with the new content
\t\tthis.domManip( arguments, function( elem ) {
\t\t\targ = this.parentNode;

\t\t\tjQuery.cleanData( getAll( this ) );

\t\t\tif ( arg ) {
\t\t\t\targ.replaceChild( elem, this );
\t\t\t}
\t\t});

\t\t// Force removal if there was no new content (e.g., from empty arguments)
\t\treturn arg && (arg.length || arg.nodeType) ? this : this.remove();
\t},

\tdetach: function( selector ) {
\t\treturn this.remove( selector, true );
\t},

\tdomManip: function( args, callback ) {

\t\t// Flatten any nested arrays
\t\targs = concat.apply( [], args );

\t\tvar fragment, first, scripts, hasScripts, node, doc,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tset = this,
\t\t\tiNoClone = l - 1,
\t\t\tvalue = args[ 0 ],
\t\t\tisFunction = jQuery.isFunction( value );

\t\t// We can't cloneNode fragments that contain checked, in WebKit
\t\tif ( isFunction ||
\t\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\t\treturn this.each(function( index ) {
\t\t\t\tvar self = set.eq( index );
\t\t\t\tif ( isFunction ) {
\t\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t\t}
\t\t\t\tself.domManip( args, callback );
\t\t\t});
\t\t}

\t\tif ( l ) {
\t\t\tfragment = jQuery.buildFragment( args, this[ 0 ].ownerDocument, false, this );
\t\t\tfirst = fragment.firstChild;

\t\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\t\tfragment = first;
\t\t\t}

\t\t\tif ( first ) {
\t\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\t\thasScripts = scripts.length;

\t\t\t\t// Use the original fragment for the last item instead of the first because it can end up
\t\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\tnode = fragment;

\t\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\t\tif ( hasScripts ) {
\t\t\t\t\t\t\t// Support: QtWebKit
\t\t\t\t\t\t\t// jQuery.merge because push.apply(_, arraylike) throws
\t\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tcallback.call( this[ i ], node, i );
\t\t\t\t}

\t\t\t\tif ( hasScripts ) {
\t\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t\t// Reenable scripts
\t\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t\t!data_priv.access( node, \"globalEval\" ) && jQuery.contains( doc, node ) ) {

\t\t\t\t\t\t\tif ( node.src ) {
\t\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\t\tif ( jQuery._evalUrl ) {
\t\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.globalEval( node.textContent.replace( rcleanScript, \"\" ) );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t}
});

jQuery.each({
\tappendTo: \"append\",
\tprependTo: \"prepend\",
\tinsertBefore: \"before\",
\tinsertAfter: \"after\",
\treplaceAll: \"replaceWith\"
}, function( name, original ) {
\tjQuery.fn[ name ] = function( selector ) {
\t\tvar elems,
\t\t\tret = [],
\t\t\tinsert = jQuery( selector ),
\t\t\tlast = insert.length - 1,
\t\t\ti = 0;

\t\tfor ( ; i <= last; i++ ) {
\t\t\telems = i === last ? this : this.clone( true );
\t\t\tjQuery( insert[ i ] )[ original ]( elems );

\t\t\t// Support: QtWebKit
\t\t\t// .get() because push.apply(_, arraylike) throws
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
});

return jQuery;
});
";
        
        $__internal_0c2e19c53c2e187f264fb94b3939ff3f518b6015e0c782147936382deab90a92->leave($__internal_0c2e19c53c2e187f264fb94b3939ff3f518b6015e0c782147936382deab90a92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/manipulation.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/concat\",
\t\"./var/push\",
\t\"./core/access\",
\t\"./manipulation/var/rcheckableType\",
\t\"./manipulation/support\",
\t\"./data/var/data_priv\",
\t\"./data/var/data_user\",

\t\"./core/init\",
\t\"./data/accepts\",
\t\"./traversing\",
\t\"./selector\",
\t\"./event\"
], function( jQuery, concat, push, access, rcheckableType, support, data_priv, data_user ) {

var
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\\w:]+)[^>]*)\\/>/gi,
\trtagName = /<([\\w:]+)/,
\trhtml = /<|&#?\\w+;/,
\trnoInnerhtml = /<(?:script|style|link)/i,
\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trscriptType = /^\$|\\/(?:java|ecma)script/i,
\trscriptTypeMasked = /^true\\/(.*)/,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g,

\t// We have to close these tags to support XHTML (#13200)
\twrapMap = {

\t\t// Support: IE9
\t\toption: [ 1, \"<select multiple='multiple'>\", \"</select>\" ],

\t\tthead: [ 1, \"<table>\", \"</table>\" ],
\t\tcol: [ 2, \"<table><colgroup>\", \"</colgroup></table>\" ],
\t\ttr: [ 2, \"<table><tbody>\", \"</tbody></table>\" ],
\t\ttd: [ 3, \"<table><tbody><tr>\", \"</tr></tbody></table>\" ],

\t\t_default: [ 0, \"\", \"\" ]
\t};

// Support: IE9
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// Support: 1.x compatibility
// Manipulating tables requires a tbody
function manipulationTarget( elem, content ) {
\treturn jQuery.nodeName( elem, \"table\" ) &&
\t\tjQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ?

\t\telem.getElementsByTagName(\"tbody\")[0] ||
\t\t\telem.appendChild( elem.ownerDocument.createElement(\"tbody\") ) :
\t\telem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = (elem.getAttribute(\"type\") !== null) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tvar match = rscriptTypeMasked.exec( elem.type );

\tif ( match ) {
\t\telem.type = match[ 1 ];
\t} else {
\t\telem.removeAttribute(\"type\");
\t}

\treturn elem;
}

// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar i = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\tdata_priv.set(
\t\t\telems[ i ], \"globalEval\", !refElements || data_priv.get( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}

function cloneCopyEvent( src, dest ) {
\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\t// 1. Copy private data: events, handlers, etc.
\tif ( data_priv.hasData( src ) ) {
\t\tpdataOld = data_priv.access( src );
\t\tpdataCur = data_priv.set( dest, pdataOld );
\t\tevents = pdataOld.events;

\t\tif ( events ) {
\t\t\tdelete pdataCur.handle;
\t\t\tpdataCur.events = {};

\t\t\tfor ( type in events ) {
\t\t\t\tfor ( i = 0, l = events[ type ].length; i < l; i++ ) {
\t\t\t\t\tjQuery.event.add( dest, type, events[ type ][ i ] );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// 2. Copy user data
\tif ( data_user.hasData( src ) ) {
\t\tudataOld = data_user.access( src );
\t\tudataCur = jQuery.extend( {}, udataOld );

\t\tdata_user.set( dest, udataCur );
\t}
}

function getAll( context, tag ) {
\tvar ret = context.getElementsByTagName ? context.getElementsByTagName( tag || \"*\" ) :
\t\t\tcontext.querySelectorAll ? context.querySelectorAll( tag || \"*\" ) :
\t\t\t[];

\treturn tag === undefined || tag && jQuery.nodeName( context, tag ) ?
\t\tjQuery.merge( [ context ], ret ) :
\t\tret;
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
\tvar nodeName = dest.nodeName.toLowerCase();

\t// Fails to persist the checked state of a cloned checkbox or radio button.
\tif ( nodeName === \"input\" && rcheckableType.test( src.type ) ) {
\t\tdest.checked = src.checked;

\t// Fails to return the selected option to the default selected state when cloning options
\t} else if ( nodeName === \"input\" || nodeName === \"textarea\" ) {
\t\tdest.defaultValue = src.defaultValue;
\t}
}

jQuery.extend({
\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar i, l, srcElements, destElements,
\t\t\tclone = elem.cloneNode( true ),
\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\t// Fix IE cloning issues
\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2
\t\t\tdestElements = getAll( clone );
\t\t\tsrcElements = getAll( elem );

\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\tfixInput( srcElements[ i ], destElements[ i ] );
\t\t\t}
\t\t}

\t\t// Copy the events from the original to the clone
\t\tif ( dataAndEvents ) {
\t\t\tif ( deepDataAndEvents ) {
\t\t\t\tsrcElements = srcElements || getAll( elem );
\t\t\t\tdestElements = destElements || getAll( clone );

\t\t\t\tfor ( i = 0, l = srcElements.length; i < l; i++ ) {
\t\t\t\t\tcloneCopyEvent( srcElements[ i ], destElements[ i ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tcloneCopyEvent( elem, clone );
\t\t\t}
\t\t}

\t\t// Preserve script evaluation history
\t\tdestElements = getAll( clone, \"script\" );
\t\tif ( destElements.length > 0 ) {
\t\t\tsetGlobalEval( destElements, !inPage && getAll( elem, \"script\" ) );
\t\t}

\t\t// Return the cloned set
\t\treturn clone;
\t},

\tbuildFragment: function( elems, context, scripts, selection ) {
\t\tvar elem, tmp, tag, wrap, contains, j,
\t\t\tfragment = context.createDocumentFragment(),
\t\t\tnodes = [],
\t\t\ti = 0,
\t\t\tl = elems.length;

\t\tfor ( ; i < l; i++ ) {
\t\t\telem = elems[ i ];

\t\t\tif ( elem || elem === 0 ) {

\t\t\t\t// Add nodes directly
\t\t\t\tif ( jQuery.type( elem ) === \"object\" ) {
\t\t\t\t\t// Support: QtWebKit, PhantomJS
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t\t// Convert non-html into a text node
\t\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t\t// Convert html into DOM nodes
\t\t\t\t} else {
\t\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement(\"div\") );

\t\t\t\t\t// Deserialize a standard representation
\t\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\t\ttmp.innerHTML = wrap[ 1 ] + elem.replace( rxhtmlTag, \"<\$1></\$2>\" ) + wrap[ 2 ];

\t\t\t\t\t// Descend through wrappers to the right content
\t\t\t\t\tj = wrap[ 0 ];
\t\t\t\t\twhile ( j-- ) {
\t\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t\t}

\t\t\t\t\t// Support: QtWebKit, PhantomJS
\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t\t// Remember the top-level container
\t\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\t\ttmp.textContent = \"\";
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Remove wrapper from fragment
\t\tfragment.textContent = \"\";

\t\ti = 0;
\t\twhile ( (elem = nodes[ i++ ]) ) {

\t\t\t// #4087 - If origin and destination elements are the same, and this is
\t\t\t// that element, do not do anything
\t\t\tif ( selection && jQuery.inArray( elem, selection ) !== -1 ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t\t// Append to fragment
\t\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t\t// Preserve script evaluation history
\t\t\tif ( contains ) {
\t\t\t\tsetGlobalEval( tmp );
\t\t\t}

\t\t\t// Capture executables
\t\t\tif ( scripts ) {
\t\t\t\tj = 0;
\t\t\t\twhile ( (elem = tmp[ j++ ]) ) {
\t\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\t\tscripts.push( elem );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn fragment;
\t},

\tcleanData: function( elems ) {
\t\tvar data, elem, type, key,
\t\t\tspecial = jQuery.event.special,
\t\t\ti = 0;

\t\tfor ( ; (elem = elems[ i ]) !== undefined; i++ ) {
\t\t\tif ( jQuery.acceptData( elem ) ) {
\t\t\t\tkey = elem[ data_priv.expando ];

\t\t\t\tif ( key && (data = data_priv.cache[ key ]) ) {
\t\t\t\t\tif ( data.events ) {
\t\t\t\t\t\tfor ( type in data.events ) {
\t\t\t\t\t\t\tif ( special[ type ] ) {
\t\t\t\t\t\t\t\tjQuery.event.remove( elem, type );

\t\t\t\t\t\t\t// This is a shortcut to avoid jQuery.event.remove's overhead
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.removeEvent( elem, type, data.handle );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( data_priv.cache[ key ] ) {
\t\t\t\t\t\t// Discard any remaining `private` data
\t\t\t\t\t\tdelete data_priv.cache[ key ];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t// Discard any remaining `user` data
\t\t\tdelete data_user.cache[ elem[ data_user.expando ] ];
\t\t}
\t}
});

jQuery.fn.extend({
\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().each(function() {
\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t}
\t\t\t\t});
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t});
\t},

\tprepend: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t});
\t},

\tbefore: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t});
\t},

\tafter: function() {
\t\treturn this.domManip( arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t});
\t},

\tremove: function( selector, keepData /* Internal Use Only */ ) {
\t\tvar elem,
\t\t\telems = selector ? jQuery.filter( selector, this ) : this,
\t\t\ti = 0;

\t\tfor ( ; (elem = elems[i]) != null; i++ ) {
\t\t\tif ( !keepData && elem.nodeType === 1 ) {
\t\t\t\tjQuery.cleanData( getAll( elem ) );
\t\t\t}

\t\t\tif ( elem.parentNode ) {
\t\t\t\tif ( keepData && jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\t\t\tsetGlobalEval( getAll( elem, \"script\" ) );
\t\t\t\t}
\t\t\t\telem.parentNode.removeChild( elem );
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; (elem = this[i]) != null; i++ ) {
\t\t\tif ( elem.nodeType === 1 ) {

\t\t\t\t// Prevent memory leaks
\t\t\t\tjQuery.cleanData( getAll( elem, false ) );

\t\t\t\t// Remove any remaining nodes
\t\t\t\telem.textContent = \"\";
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tclone: function( dataAndEvents, deepDataAndEvents ) {
\t\tdataAndEvents = dataAndEvents == null ? false : dataAndEvents;
\t\tdeepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

\t\treturn this.map(function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t});
\t},

\thtml: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\tvar elem = this[ 0 ] || {},
\t\t\t\ti = 0,
\t\t\t\tl = this.length;

\t\t\tif ( value === undefined && elem.nodeType === 1 ) {
\t\t\t\treturn elem.innerHTML;
\t\t\t}

\t\t\t// See if we can take a shortcut and just use innerHTML
\t\t\tif ( typeof value === \"string\" && !rnoInnerhtml.test( value ) &&
\t\t\t\t!wrapMap[ ( rtagName.exec( value ) || [ \"\", \"\" ] )[ 1 ].toLowerCase() ] ) {

\t\t\t\tvalue = value.replace( rxhtmlTag, \"<\$1></\$2>\" );

\t\t\t\ttry {
\t\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\t\telem = this[ i ] || {};

\t\t\t\t\t\t// Remove element nodes and prevent memory leaks
\t\t\t\t\t\tif ( elem.nodeType === 1 ) {
\t\t\t\t\t\t\tjQuery.cleanData( getAll( elem, false ) );
\t\t\t\t\t\t\telem.innerHTML = value;
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\telem = 0;

\t\t\t\t// If using innerHTML throws an exception, use the fallback method
\t\t\t\t} catch( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar arg = arguments[ 0 ];

\t\t// Make the changes, replacing each context element with the new content
\t\tthis.domManip( arguments, function( elem ) {
\t\t\targ = this.parentNode;

\t\t\tjQuery.cleanData( getAll( this ) );

\t\t\tif ( arg ) {
\t\t\t\targ.replaceChild( elem, this );
\t\t\t}
\t\t});

\t\t// Force removal if there was no new content (e.g., from empty arguments)
\t\treturn arg && (arg.length || arg.nodeType) ? this : this.remove();
\t},

\tdetach: function( selector ) {
\t\treturn this.remove( selector, true );
\t},

\tdomManip: function( args, callback ) {

\t\t// Flatten any nested arrays
\t\targs = concat.apply( [], args );

\t\tvar fragment, first, scripts, hasScripts, node, doc,
\t\t\ti = 0,
\t\t\tl = this.length,
\t\t\tset = this,
\t\t\tiNoClone = l - 1,
\t\t\tvalue = args[ 0 ],
\t\t\tisFunction = jQuery.isFunction( value );

\t\t// We can't cloneNode fragments that contain checked, in WebKit
\t\tif ( isFunction ||
\t\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\t\treturn this.each(function( index ) {
\t\t\t\tvar self = set.eq( index );
\t\t\t\tif ( isFunction ) {
\t\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t\t}
\t\t\t\tself.domManip( args, callback );
\t\t\t});
\t\t}

\t\tif ( l ) {
\t\t\tfragment = jQuery.buildFragment( args, this[ 0 ].ownerDocument, false, this );
\t\t\tfirst = fragment.firstChild;

\t\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\t\tfragment = first;
\t\t\t}

\t\t\tif ( first ) {
\t\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\t\thasScripts = scripts.length;

\t\t\t\t// Use the original fragment for the last item instead of the first because it can end up
\t\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\t\tnode = fragment;

\t\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\t\tif ( hasScripts ) {
\t\t\t\t\t\t\t// Support: QtWebKit
\t\t\t\t\t\t\t// jQuery.merge because push.apply(_, arraylike) throws
\t\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tcallback.call( this[ i ], node, i );
\t\t\t\t}

\t\t\t\tif ( hasScripts ) {
\t\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t\t// Reenable scripts
\t\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t\t!data_priv.access( node, \"globalEval\" ) && jQuery.contains( doc, node ) ) {

\t\t\t\t\t\t\tif ( node.src ) {
\t\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\t\tif ( jQuery._evalUrl ) {
\t\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tjQuery.globalEval( node.textContent.replace( rcleanScript, \"\" ) );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t}
});

jQuery.each({
\tappendTo: \"append\",
\tprependTo: \"prepend\",
\tinsertBefore: \"before\",
\tinsertAfter: \"after\",
\treplaceAll: \"replaceWith\"
}, function( name, original ) {
\tjQuery.fn[ name ] = function( selector ) {
\t\tvar elems,
\t\t\tret = [],
\t\t\tinsert = jQuery( selector ),
\t\t\tlast = insert.length - 1,
\t\t\ti = 0;

\t\tfor ( ; i <= last; i++ ) {
\t\t\telems = i === last ? this : this.clone( true );
\t\t\tjQuery( insert[ i ] )[ original ]( elems );

\t\t\t// Support: QtWebKit
\t\t\t// .get() because push.apply(_, arraylike) throws
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
});

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/manipulation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/manipulation.js");
    }
}
