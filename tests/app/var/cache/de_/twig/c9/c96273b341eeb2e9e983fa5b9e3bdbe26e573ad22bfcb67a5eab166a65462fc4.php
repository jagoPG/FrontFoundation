<?php

/* node_modules/jquery/src/manipulation.js */
class __TwigTemplate_ff65cd3cda3b6a843438125052554b4a7b7d6ff57bf83a88c505458d54912ed3 extends Twig_Template
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
        $__internal_5fef9284946eeee4b414c218a953328bfa43a3d45e36b8e86811b186f59268c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fef9284946eeee4b414c218a953328bfa43a3d45e36b8e86811b186f59268c1->enter($__internal_5fef9284946eeee4b414c218a953328bfa43a3d45e36b8e86811b186f59268c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/manipulation.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./var/concat\",
\t\"./var/push\",
\t\"./core/access\",
\t\"./manipulation/var/rcheckableType\",
\t\"./manipulation/var/rtagName\",
\t\"./manipulation/var/rscriptType\",
\t\"./manipulation/wrapMap\",
\t\"./manipulation/getAll\",
\t\"./manipulation/setGlobalEval\",
\t\"./manipulation/buildFragment\",
\t\"./manipulation/support\",

\t\"./data/var/dataPriv\",
\t\"./data/var/dataUser\",
\t\"./data/var/acceptData\",
\t\"./core/DOMEval\",
\t\"./core/nodeName\",

\t\"./core/init\",
\t\"./traversing\",
\t\"./selector\",
\t\"./event\"
], function( jQuery, concat, push, access,
\trcheckableType, rtagName, rscriptType,
\twrapMap, getAll, setGlobalEval, buildFragment, support,
\tdataPriv, dataUser, acceptData, DOMEval, nodeName ) {

\"use strict\";

var

\t/* eslint-disable max-len */

\t// See https://github.com/eslint/eslint/issues/3229
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\\/\\0>\\x20\\t\\r\\n\\f]*)[^>]*)\\/>/gi,

\t/* eslint-enable */

\t// Support: IE <=10 - 11, Edge 12 - 13
\t// In IE/Edge using regex groups here causes severe slowdowns.
\t// See https://connect.microsoft.com/IE/feedback/details/1736512/
\trnoInnerhtml = /<script|<style|<link/i,

\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trscriptTypeMasked = /^true\\/(.*)/,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g;

// Prefer a tbody over its parent table for containing new rows
function manipulationTarget( elem, content ) {
\tif ( nodeName( elem, \"table\" ) &&
\t\tnodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ) {

\t\treturn jQuery( \">tbody\", elem )[ 0 ] || elem;
\t}

\treturn elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = ( elem.getAttribute( \"type\" ) !== null ) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tvar match = rscriptTypeMasked.exec( elem.type );

\tif ( match ) {
\t\telem.type = match[ 1 ];
\t} else {
\t\telem.removeAttribute( \"type\" );
\t}

\treturn elem;
}

function cloneCopyEvent( src, dest ) {
\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\t// 1. Copy private data: events, handlers, etc.
\tif ( dataPriv.hasData( src ) ) {
\t\tpdataOld = dataPriv.access( src );
\t\tpdataCur = dataPriv.set( dest, pdataOld );
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
\tif ( dataUser.hasData( src ) ) {
\t\tudataOld = dataUser.access( src );
\t\tudataCur = jQuery.extend( {}, udataOld );

\t\tdataUser.set( dest, udataCur );
\t}
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

function domManip( collection, args, callback, ignored ) {

\t// Flatten any nested arrays
\targs = concat.apply( [], args );

\tvar fragment, first, scripts, hasScripts, node, doc,
\t\ti = 0,
\t\tl = collection.length,
\t\tiNoClone = l - 1,
\t\tvalue = args[ 0 ],
\t\tisFunction = jQuery.isFunction( value );

\t// We can't cloneNode fragments that contain checked, in WebKit
\tif ( isFunction ||
\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\treturn collection.each( function( index ) {
\t\t\tvar self = collection.eq( index );
\t\t\tif ( isFunction ) {
\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t}
\t\t\tdomManip( self, args, callback, ignored );
\t\t} );
\t}

\tif ( l ) {
\t\tfragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
\t\tfirst = fragment.firstChild;

\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\tfragment = first;
\t\t}

\t\t// Require either new content or an interest in ignored elements to invoke the callback
\t\tif ( first || ignored ) {
\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\thasScripts = scripts.length;

\t\t\t// Use the original fragment for the last item
\t\t\t// instead of the first because it can end up
\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tnode = fragment;

\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\tif ( hasScripts ) {

\t\t\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcallback.call( collection[ i ], node, i );
\t\t\t}

\t\t\tif ( hasScripts ) {
\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t// Reenable scripts
\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t!dataPriv.access( node, \"globalEval\" ) &&
\t\t\t\t\t\tjQuery.contains( doc, node ) ) {

\t\t\t\t\t\tif ( node.src ) {

\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\tif ( jQuery._evalUrl ) {
\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tDOMEval( node.textContent.replace( rcleanScript, \"\" ), doc );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn collection;
}

function remove( elem, selector, keepData ) {
\tvar node,
\t\tnodes = selector ? jQuery.filter( selector, elem ) : elem,
\t\ti = 0;

\tfor ( ; ( node = nodes[ i ] ) != null; i++ ) {
\t\tif ( !keepData && node.nodeType === 1 ) {
\t\t\tjQuery.cleanData( getAll( node ) );
\t\t}

\t\tif ( node.parentNode ) {
\t\t\tif ( keepData && jQuery.contains( node.ownerDocument, node ) ) {
\t\t\t\tsetGlobalEval( getAll( node, \"script\" ) );
\t\t\t}
\t\t\tnode.parentNode.removeChild( node );
\t\t}
\t}

\treturn elem;
}

jQuery.extend( {
\thtmlPrefilter: function( html ) {
\t\treturn html.replace( rxhtmlTag, \"<\$1></\$2>\" );
\t},

\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar i, l, srcElements, destElements,
\t\t\tclone = elem.cloneNode( true ),
\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\t// Fix IE cloning issues
\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
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

\tcleanData: function( elems ) {
\t\tvar data, elem, type,
\t\t\tspecial = jQuery.event.special,
\t\t\ti = 0;

\t\tfor ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
\t\t\tif ( acceptData( elem ) ) {
\t\t\t\tif ( ( data = elem[ dataPriv.expando ] ) ) {
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

\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\telem[ dataPriv.expando ] = undefined;
\t\t\t\t}
\t\t\t\tif ( elem[ dataUser.expando ] ) {

\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\telem[ dataUser.expando ] = undefined;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
} );

jQuery.fn.extend( {
\tdetach: function( selector ) {
\t\treturn remove( this, selector, true );
\t},

\tremove: function( selector ) {
\t\treturn remove( this, selector );
\t},

\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().each( function() {
\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t}
\t\t\t\t} );
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t} );
\t},

\tprepend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t} );
\t},

\tbefore: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t} );
\t},

\tafter: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t} );
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; ( elem = this[ i ] ) != null; i++ ) {
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

\t\treturn this.map( function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t} );
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

\t\t\t\tvalue = jQuery.htmlPrefilter( value );

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
\t\t\t\t} catch ( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar ignored = [];

\t\t// Make the changes, replacing each non-ignored context element with the new content
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tvar parent = this.parentNode;

\t\t\tif ( jQuery.inArray( this, ignored ) < 0 ) {
\t\t\t\tjQuery.cleanData( getAll( this ) );
\t\t\t\tif ( parent ) {
\t\t\t\t\tparent.replaceChild( elem, this );
\t\t\t\t}
\t\t\t}

\t\t// Force callback invocation
\t\t}, ignored );
\t}
} );

jQuery.each( {
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

\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t// .get() because push.apply(_, arraylike) throws on ancient WebKit
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
} );

return jQuery;
} );
";
        
        $__internal_5fef9284946eeee4b414c218a953328bfa43a3d45e36b8e86811b186f59268c1->leave($__internal_5fef9284946eeee4b414c218a953328bfa43a3d45e36b8e86811b186f59268c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/manipulation.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./var/concat\",
\t\"./var/push\",
\t\"./core/access\",
\t\"./manipulation/var/rcheckableType\",
\t\"./manipulation/var/rtagName\",
\t\"./manipulation/var/rscriptType\",
\t\"./manipulation/wrapMap\",
\t\"./manipulation/getAll\",
\t\"./manipulation/setGlobalEval\",
\t\"./manipulation/buildFragment\",
\t\"./manipulation/support\",

\t\"./data/var/dataPriv\",
\t\"./data/var/dataUser\",
\t\"./data/var/acceptData\",
\t\"./core/DOMEval\",
\t\"./core/nodeName\",

\t\"./core/init\",
\t\"./traversing\",
\t\"./selector\",
\t\"./event\"
], function( jQuery, concat, push, access,
\trcheckableType, rtagName, rscriptType,
\twrapMap, getAll, setGlobalEval, buildFragment, support,
\tdataPriv, dataUser, acceptData, DOMEval, nodeName ) {

\"use strict\";

var

\t/* eslint-disable max-len */

\t// See https://github.com/eslint/eslint/issues/3229
\trxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\\/\\0>\\x20\\t\\r\\n\\f]*)[^>]*)\\/>/gi,

\t/* eslint-enable */

\t// Support: IE <=10 - 11, Edge 12 - 13
\t// In IE/Edge using regex groups here causes severe slowdowns.
\t// See https://connect.microsoft.com/IE/feedback/details/1736512/
\trnoInnerhtml = /<script|<style|<link/i,

\t// checked=\"checked\" or checked
\trchecked = /checked\\s*(?:[^=]|=\\s*.checked.)/i,
\trscriptTypeMasked = /^true\\/(.*)/,
\trcleanScript = /^\\s*<!(?:\\[CDATA\\[|--)|(?:\\]\\]|--)>\\s*\$/g;

// Prefer a tbody over its parent table for containing new rows
function manipulationTarget( elem, content ) {
\tif ( nodeName( elem, \"table\" ) &&
\t\tnodeName( content.nodeType !== 11 ? content : content.firstChild, \"tr\" ) ) {

\t\treturn jQuery( \">tbody\", elem )[ 0 ] || elem;
\t}

\treturn elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
\telem.type = ( elem.getAttribute( \"type\" ) !== null ) + \"/\" + elem.type;
\treturn elem;
}
function restoreScript( elem ) {
\tvar match = rscriptTypeMasked.exec( elem.type );

\tif ( match ) {
\t\telem.type = match[ 1 ];
\t} else {
\t\telem.removeAttribute( \"type\" );
\t}

\treturn elem;
}

function cloneCopyEvent( src, dest ) {
\tvar i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

\tif ( dest.nodeType !== 1 ) {
\t\treturn;
\t}

\t// 1. Copy private data: events, handlers, etc.
\tif ( dataPriv.hasData( src ) ) {
\t\tpdataOld = dataPriv.access( src );
\t\tpdataCur = dataPriv.set( dest, pdataOld );
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
\tif ( dataUser.hasData( src ) ) {
\t\tudataOld = dataUser.access( src );
\t\tudataCur = jQuery.extend( {}, udataOld );

\t\tdataUser.set( dest, udataCur );
\t}
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

function domManip( collection, args, callback, ignored ) {

\t// Flatten any nested arrays
\targs = concat.apply( [], args );

\tvar fragment, first, scripts, hasScripts, node, doc,
\t\ti = 0,
\t\tl = collection.length,
\t\tiNoClone = l - 1,
\t\tvalue = args[ 0 ],
\t\tisFunction = jQuery.isFunction( value );

\t// We can't cloneNode fragments that contain checked, in WebKit
\tif ( isFunction ||
\t\t\t( l > 1 && typeof value === \"string\" &&
\t\t\t\t!support.checkClone && rchecked.test( value ) ) ) {
\t\treturn collection.each( function( index ) {
\t\t\tvar self = collection.eq( index );
\t\t\tif ( isFunction ) {
\t\t\t\targs[ 0 ] = value.call( this, index, self.html() );
\t\t\t}
\t\t\tdomManip( self, args, callback, ignored );
\t\t} );
\t}

\tif ( l ) {
\t\tfragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
\t\tfirst = fragment.firstChild;

\t\tif ( fragment.childNodes.length === 1 ) {
\t\t\tfragment = first;
\t\t}

\t\t// Require either new content or an interest in ignored elements to invoke the callback
\t\tif ( first || ignored ) {
\t\t\tscripts = jQuery.map( getAll( fragment, \"script\" ), disableScript );
\t\t\thasScripts = scripts.length;

\t\t\t// Use the original fragment for the last item
\t\t\t// instead of the first because it can end up
\t\t\t// being emptied incorrectly in certain situations (#8070).
\t\t\tfor ( ; i < l; i++ ) {
\t\t\t\tnode = fragment;

\t\t\t\tif ( i !== iNoClone ) {
\t\t\t\t\tnode = jQuery.clone( node, true, true );

\t\t\t\t\t// Keep references to cloned scripts for later restoration
\t\t\t\t\tif ( hasScripts ) {

\t\t\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\t\t\tjQuery.merge( scripts, getAll( node, \"script\" ) );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tcallback.call( collection[ i ], node, i );
\t\t\t}

\t\t\tif ( hasScripts ) {
\t\t\t\tdoc = scripts[ scripts.length - 1 ].ownerDocument;

\t\t\t\t// Reenable scripts
\t\t\t\tjQuery.map( scripts, restoreScript );

\t\t\t\t// Evaluate executable scripts on first document insertion
\t\t\t\tfor ( i = 0; i < hasScripts; i++ ) {
\t\t\t\t\tnode = scripts[ i ];
\t\t\t\t\tif ( rscriptType.test( node.type || \"\" ) &&
\t\t\t\t\t\t!dataPriv.access( node, \"globalEval\" ) &&
\t\t\t\t\t\tjQuery.contains( doc, node ) ) {

\t\t\t\t\t\tif ( node.src ) {

\t\t\t\t\t\t\t// Optional AJAX dependency, but won't run scripts if not present
\t\t\t\t\t\t\tif ( jQuery._evalUrl ) {
\t\t\t\t\t\t\t\tjQuery._evalUrl( node.src );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tDOMEval( node.textContent.replace( rcleanScript, \"\" ), doc );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn collection;
}

function remove( elem, selector, keepData ) {
\tvar node,
\t\tnodes = selector ? jQuery.filter( selector, elem ) : elem,
\t\ti = 0;

\tfor ( ; ( node = nodes[ i ] ) != null; i++ ) {
\t\tif ( !keepData && node.nodeType === 1 ) {
\t\t\tjQuery.cleanData( getAll( node ) );
\t\t}

\t\tif ( node.parentNode ) {
\t\t\tif ( keepData && jQuery.contains( node.ownerDocument, node ) ) {
\t\t\t\tsetGlobalEval( getAll( node, \"script\" ) );
\t\t\t}
\t\t\tnode.parentNode.removeChild( node );
\t\t}
\t}

\treturn elem;
}

jQuery.extend( {
\thtmlPrefilter: function( html ) {
\t\treturn html.replace( rxhtmlTag, \"<\$1></\$2>\" );
\t},

\tclone: function( elem, dataAndEvents, deepDataAndEvents ) {
\t\tvar i, l, srcElements, destElements,
\t\t\tclone = elem.cloneNode( true ),
\t\t\tinPage = jQuery.contains( elem.ownerDocument, elem );

\t\t// Fix IE cloning issues
\t\tif ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
\t\t\t\t!jQuery.isXMLDoc( elem ) ) {

\t\t\t// We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
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

\tcleanData: function( elems ) {
\t\tvar data, elem, type,
\t\t\tspecial = jQuery.event.special,
\t\t\ti = 0;

\t\tfor ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
\t\t\tif ( acceptData( elem ) ) {
\t\t\t\tif ( ( data = elem[ dataPriv.expando ] ) ) {
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

\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\telem[ dataPriv.expando ] = undefined;
\t\t\t\t}
\t\t\t\tif ( elem[ dataUser.expando ] ) {

\t\t\t\t\t// Support: Chrome <=35 - 45+
\t\t\t\t\t// Assign undefined instead of using delete, see Data#remove
\t\t\t\t\telem[ dataUser.expando ] = undefined;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
} );

jQuery.fn.extend( {
\tdetach: function( selector ) {
\t\treturn remove( this, selector, true );
\t},

\tremove: function( selector ) {
\t\treturn remove( this, selector );
\t},

\ttext: function( value ) {
\t\treturn access( this, function( value ) {
\t\t\treturn value === undefined ?
\t\t\t\tjQuery.text( this ) :
\t\t\t\tthis.empty().each( function() {
\t\t\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\t\t\tthis.textContent = value;
\t\t\t\t\t}
\t\t\t\t} );
\t\t}, null, value, arguments.length );
\t},

\tappend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.appendChild( elem );
\t\t\t}
\t\t} );
\t},

\tprepend: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
\t\t\t\tvar target = manipulationTarget( this, elem );
\t\t\t\ttarget.insertBefore( elem, target.firstChild );
\t\t\t}
\t\t} );
\t},

\tbefore: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this );
\t\t\t}
\t\t} );
\t},

\tafter: function() {
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tif ( this.parentNode ) {
\t\t\t\tthis.parentNode.insertBefore( elem, this.nextSibling );
\t\t\t}
\t\t} );
\t},

\tempty: function() {
\t\tvar elem,
\t\t\ti = 0;

\t\tfor ( ; ( elem = this[ i ] ) != null; i++ ) {
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

\t\treturn this.map( function() {
\t\t\treturn jQuery.clone( this, dataAndEvents, deepDataAndEvents );
\t\t} );
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

\t\t\t\tvalue = jQuery.htmlPrefilter( value );

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
\t\t\t\t} catch ( e ) {}
\t\t\t}

\t\t\tif ( elem ) {
\t\t\t\tthis.empty().append( value );
\t\t\t}
\t\t}, null, value, arguments.length );
\t},

\treplaceWith: function() {
\t\tvar ignored = [];

\t\t// Make the changes, replacing each non-ignored context element with the new content
\t\treturn domManip( this, arguments, function( elem ) {
\t\t\tvar parent = this.parentNode;

\t\t\tif ( jQuery.inArray( this, ignored ) < 0 ) {
\t\t\t\tjQuery.cleanData( getAll( this ) );
\t\t\t\tif ( parent ) {
\t\t\t\t\tparent.replaceChild( elem, this );
\t\t\t\t}
\t\t\t}

\t\t// Force callback invocation
\t\t}, ignored );
\t}
} );

jQuery.each( {
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

\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t// .get() because push.apply(_, arraylike) throws on ancient WebKit
\t\t\tpush.apply( ret, elems.get() );
\t\t}

\t\treturn this.pushStack( ret );
\t};
} );

return jQuery;
} );
", "node_modules/jquery/src/manipulation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/manipulation.js");
    }
}
