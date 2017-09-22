<?php

/* node_modules/jquery/src/event.js */
class __TwigTemplate_76861540fa1d855ed67a6dc8de50c3c6de530f73361c02f559d7a1a33642feae extends Twig_Template
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
        $__internal_49d10d4d4f304abde2a18d14343707f3898b20f52f2057b81d6faa9f4d7a69ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d10d4d4f304abde2a18d14343707f3898b20f52f2057b81d6faa9f4d7a69ff->enter($__internal_49d10d4d4f304abde2a18d14343707f3898b20f52f2057b81d6faa9f4d7a69ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/event.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./var/document\",
\t\"./var/documentElement\",
\t\"./var/rnothtmlwhite\",
\t\"./var/slice\",
\t\"./data/var/dataPriv\",
\t\"./core/nodeName\",

\t\"./core/init\",
\t\"./selector\"
], function( jQuery, document, documentElement, rnothtmlwhite, slice, dataPriv, nodeName ) {

\"use strict\";

var
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

// Support: IE <=9 only
// See #13393 for more info
function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
\tvar origFn, type;

\t// Types can be a map of types/handlers
\tif ( typeof types === \"object\" ) {

\t\t// ( types-Object, selector, data )
\t\tif ( typeof selector !== \"string\" ) {

\t\t\t// ( types-Object, data )
\t\t\tdata = data || selector;
\t\t\tselector = undefined;
\t\t}
\t\tfor ( type in types ) {
\t\t\ton( elem, type, selector, data, types[ type ], one );
\t\t}
\t\treturn elem;
\t}

\tif ( data == null && fn == null ) {

\t\t// ( types, fn )
\t\tfn = selector;
\t\tdata = selector = undefined;
\t} else if ( fn == null ) {
\t\tif ( typeof selector === \"string\" ) {

\t\t\t// ( types, selector, fn )
\t\t\tfn = data;
\t\t\tdata = undefined;
\t\t} else {

\t\t\t// ( types, data, fn )
\t\t\tfn = data;
\t\t\tdata = selector;
\t\t\tselector = undefined;
\t\t}
\t}
\tif ( fn === false ) {
\t\tfn = returnFalse;
\t} else if ( !fn ) {
\t\treturn elem;
\t}

\tif ( one === 1 ) {
\t\torigFn = fn;
\t\tfn = function( event ) {

\t\t\t// Can use an empty set, since event contains the info
\t\t\tjQuery().off( event );
\t\t\treturn origFn.apply( this, arguments );
\t\t};

\t\t// Use same guid so caller can remove using origFn
\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t}
\treturn elem.each( function() {
\t\tjQuery.event.add( this, types, fn, data, selector );
\t} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

\tglobal: {},

\tadd: function( elem, types, handler, data, selector ) {

\t\tvar handleObjIn, eventHandle, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = dataPriv.get( elem );

\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\tif ( !elemData ) {
\t\t\treturn;
\t\t}

\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\tif ( handler.handler ) {
\t\t\thandleObjIn = handler;
\t\t\thandler = handleObjIn.handler;
\t\t\tselector = handleObjIn.selector;
\t\t}

\t\t// Ensure that invalid selectors throw exceptions at attach time
\t\t// Evaluate against documentElement in case elem is a non-element node (e.g., document)
\t\tif ( selector ) {
\t\t\tjQuery.find.matchesSelector( documentElement, selector );
\t\t}

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !( events = elemData.events ) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !( eventHandle = elemData.handle ) ) {
\t\t\teventHandle = elemData.handle = function( e ) {

\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== \"undefined\" && jQuery.event.triggered !== e.type ?
\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t};
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// There *must* be a type, no attaching namespace-only handlers
\t\t\tif ( !type ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t// Update special based on newly reset type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// handleObj is passed to all event handlers
\t\t\thandleObj = jQuery.extend( {
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join( \".\" )
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !( handlers = events[ type ] ) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\tif ( !special.setup ||
\t\t\t\t\tspecial.setup.call( elem, data, namespaces, eventHandle ) === false ) {

\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif ( special.add ) {
\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t}
\t\t\t}

\t\t\t// Add to the element's handler list, delegates in front
\t\t\tif ( selector ) {
\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t} else {
\t\t\t\thandlers.push( handleObj );
\t\t\t}

\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\tjQuery.event.global[ type ] = true;
\t\t}

\t},

\t// Detach an event or set of events from an element
\tremove: function( elem, types, handler, selector, mappedTypes ) {

\t\tvar j, origCount, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

\t\tif ( !elemData || !( events = elemData.events ) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\tif ( !type ) {
\t\t\t\tfor ( type in events ) {
\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\thandlers = events[ type ] || [];
\t\t\ttmp = tmp[ 2 ] &&
\t\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector ||
\t\t\t\t\t\tselector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t}
\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\tif ( !special.teardown ||
\t\t\t\t\tspecial.teardown.call( elem, namespaces, elemData.handle ) === false ) {

\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove data and the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdataPriv.remove( elem, \"handle events\" );
\t\t}
\t},

\tdispatch: function( nativeEvent ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tvar event = jQuery.event.fix( nativeEvent );

\t\tvar i, j, ret, matched, handleObj, handlerQueue,
\t\t\targs = new Array( arguments.length ),
\t\t\thandlers = ( dataPriv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[ 0 ] = event;

\t\tfor ( i = 1; i < arguments.length; i++ ) {
\t\t\targs[ i ] = arguments[ i ];
\t\t}

\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( ( handleObj = matched.handlers[ j++ ] ) &&
\t\t\t\t!event.isImmediatePropagationStopped() ) {

\t\t\t\t// Triggered event must either 1) have no namespace, or 2) have namespace(s)
\t\t\t\t// a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\tif ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
\t\t\t\t\t\thandleObj.handler ).apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( ( event.result = ret ) === false ) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Call the postDispatch hook for the mapped type
\t\tif ( special.postDispatch ) {
\t\t\tspecial.postDispatch.call( this, event );
\t\t}

\t\treturn event.result;
\t},

\thandlers: function( event, handlers ) {
\t\tvar i, handleObj, sel, matchedHandlers, matchedSelectors,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\tif ( delegateCount &&

\t\t\t// Support: IE <=9
\t\t\t// Black-hole SVG <use> instance trees (trac-13180)
\t\t\tcur.nodeType &&

\t\t\t// Support: Firefox <=42
\t\t\t// Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
\t\t\t// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
\t\t\t// Support: IE 11 only
\t\t\t// ...but not arrow key \"clicks\" of radio inputs, which can have `button` -1 (gh-2343)
\t\t\t!( event.type === \"click\" && event.button >= 1 ) ) {

\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't check non-elements (#13208)
\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.nodeType === 1 && !( event.type === \"click\" && cur.disabled === true ) ) {
\t\t\t\t\tmatchedHandlers = [];
\t\t\t\t\tmatchedSelectors = {};
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matchedSelectors[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatchedSelectors[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) > -1 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matchedSelectors[ sel ] ) {
\t\t\t\t\t\t\tmatchedHandlers.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matchedHandlers.length ) {
\t\t\t\t\t\thandlerQueue.push( { elem: cur, handlers: matchedHandlers } );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tcur = this;
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
\t\t}

\t\treturn handlerQueue;
\t},

\taddProp: function( name, hook ) {
\t\tObject.defineProperty( jQuery.Event.prototype, name, {
\t\t\tenumerable: true,
\t\t\tconfigurable: true,

\t\t\tget: jQuery.isFunction( hook ) ?
\t\t\t\tfunction() {
\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn hook( this.originalEvent );
\t\t\t\t\t}
\t\t\t\t} :
\t\t\t\tfunction() {
\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn this.originalEvent[ name ];
\t\t\t\t\t}
\t\t\t\t},

\t\t\tset: function( value ) {
\t\t\t\tObject.defineProperty( this, name, {
\t\t\t\t\tenumerable: true,
\t\t\t\t\tconfigurable: true,
\t\t\t\t\twritable: true,
\t\t\t\t\tvalue: value
\t\t\t\t} );
\t\t\t}
\t\t} );
\t},

\tfix: function( originalEvent ) {
\t\treturn originalEvent[ jQuery.expando ] ?
\t\t\toriginalEvent :
\t\t\tnew jQuery.Event( originalEvent );
\t},

\tspecial: {
\t\tload: {

\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\tnoBubble: true
\t\t},
\t\tfocus: {

\t\t\t// Fire native event if possible so blur/focus sequence is correct
\t\t\ttrigger: function() {
\t\t\t\tif ( this !== safeActiveElement() && this.focus ) {
\t\t\t\t\tthis.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusin\"
\t\t},
\t\tblur: {
\t\t\ttrigger: function() {
\t\t\t\tif ( this === safeActiveElement() && this.blur ) {
\t\t\t\t\tthis.blur();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusout\"
\t\t},
\t\tclick: {

\t\t\t// For checkbox, fire native event so checked state will be right
\t\t\ttrigger: function() {
\t\t\t\tif ( this.type === \"checkbox\" && this.click && nodeName( this, \"input\" ) ) {
\t\t\t\t\tthis.click();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},

\t\t\t// For cross-browser consistency, don't fire native .click() on links
\t\t\t_default: function( event ) {
\t\t\t\treturn nodeName( event.target, \"a\" );
\t\t\t}
\t\t},

\t\tbeforeunload: {
\t\t\tpostDispatch: function( event ) {

\t\t\t\t// Support: Firefox 20+
\t\t\t\t// Firefox doesn't alert if the returnValue field is not set.
\t\t\t\tif ( event.result !== undefined && event.originalEvent ) {
\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
};

jQuery.removeEvent = function( elem, type, handle ) {

\t// This \"if\" is needed for plain objects
\tif ( elem.removeEventListener ) {
\t\telem.removeEventListener( type, handle );
\t}
};

jQuery.Event = function( src, props ) {

\t// Allow instantiation without the 'new' keyword
\tif ( !( this instanceof jQuery.Event ) ) {
\t\treturn new jQuery.Event( src, props );
\t}

\t// Event object
\tif ( src && src.type ) {
\t\tthis.originalEvent = src;
\t\tthis.type = src.type;

\t\t// Events bubbling up the document may have been marked as prevented
\t\t// by a handler lower down the tree; reflect the correct value.
\t\tthis.isDefaultPrevented = src.defaultPrevented ||
\t\t\t\tsrc.defaultPrevented === undefined &&

\t\t\t\t// Support: Android <=2.3 only
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

\t\t// Create target properties
\t\t// Support: Safari <=6 - 7 only
\t\t// Target should not be a text node (#504, #13143)
\t\tthis.target = ( src.target && src.target.nodeType === 3 ) ?
\t\t\tsrc.target.parentNode :
\t\t\tsrc.target;

\t\tthis.currentTarget = src.currentTarget;
\t\tthis.relatedTarget = src.relatedTarget;

\t// Event type
\t} else {
\t\tthis.type = src;
\t}

\t// Put explicitly provided properties onto the event object
\tif ( props ) {
\t\tjQuery.extend( this, props );
\t}

\t// Create a timestamp if incoming event doesn't have one
\tthis.timeStamp = src && src.timeStamp || jQuery.now();

\t// Mark it as fixed
\tthis[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tconstructor: jQuery.Event,
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,
\tisSimulated: false,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.preventDefault();
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.stopPropagation();
\t\t}
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
\taltKey: true,
\tbubbles: true,
\tcancelable: true,
\tchangedTouches: true,
\tctrlKey: true,
\tdetail: true,
\teventPhase: true,
\tmetaKey: true,
\tpageX: true,
\tpageY: true,
\tshiftKey: true,
\tview: true,
\t\"char\": true,
\tcharCode: true,
\tkey: true,
\tkeyCode: true,
\tbutton: true,
\tbuttons: true,
\tclientX: true,
\tclientY: true,
\toffsetX: true,
\toffsetY: true,
\tpointerId: true,
\tpointerType: true,
\tscreenX: true,
\tscreenY: true,
\ttargetTouches: true,
\ttoElement: true,
\ttouches: true,

\twhich: function( event ) {
\t\tvar button = event.button;

\t\t// Add which for key events
\t\tif ( event.which == null && rkeyEvent.test( event.type ) ) {
\t\t\treturn event.charCode != null ? event.charCode : event.keyCode;
\t\t}

\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\tif ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
\t\t\tif ( button & 1 ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\tif ( button & 2 ) {
\t\t\t\treturn 3;
\t\t\t}

\t\t\tif ( button & 4 ) {
\t\t\t\treturn 2;
\t\t\t}

\t\t\treturn 0;
\t\t}

\t\treturn event.which;
\t}
}, jQuery.event.addProp );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
\tmouseenter: \"mouseover\",
\tmouseleave: \"mouseout\",
\tpointerenter: \"pointerover\",
\tpointerleave: \"pointerout\"
}, function( orig, fix ) {
\tjQuery.event.special[ orig ] = {
\t\tdelegateType: fix,
\t\tbindType: fix,

\t\thandle: function( event ) {
\t\t\tvar ret,
\t\t\t\ttarget = this,
\t\t\t\trelated = event.relatedTarget,
\t\t\t\thandleObj = event.handleObj;

\t\t\t// For mouseenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
} );

jQuery.fn.extend( {

\ton: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn );
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {

\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ?
\t\t\t\t\thandleObj.origType + \".\" + handleObj.namespace :
\t\t\t\t\thandleObj.origType,
\t\t\t\thandleObj.selector,
\t\t\t\thandleObj.handler
\t\t\t);
\t\t\treturn this;
\t\t}
\t\tif ( typeof types === \"object\" ) {

\t\t\t// ( types-object [, selector] )
\t\t\tfor ( type in types ) {
\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t}
\t\t\treturn this;
\t\t}
\t\tif ( selector === false || typeof selector === \"function\" ) {

\t\t\t// ( types [, fn] )
\t\t\tfn = selector;
\t\t\tselector = undefined;
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t} );
\t}
} );

return jQuery;
} );
";
        
        $__internal_49d10d4d4f304abde2a18d14343707f3898b20f52f2057b81d6faa9f4d7a69ff->leave($__internal_49d10d4d4f304abde2a18d14343707f3898b20f52f2057b81d6faa9f4d7a69ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/event.js";
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
\t\"./var/rnothtmlwhite\",
\t\"./var/slice\",
\t\"./data/var/dataPriv\",
\t\"./core/nodeName\",

\t\"./core/init\",
\t\"./selector\"
], function( jQuery, document, documentElement, rnothtmlwhite, slice, dataPriv, nodeName ) {

\"use strict\";

var
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

// Support: IE <=9 only
// See #13393 for more info
function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
\tvar origFn, type;

\t// Types can be a map of types/handlers
\tif ( typeof types === \"object\" ) {

\t\t// ( types-Object, selector, data )
\t\tif ( typeof selector !== \"string\" ) {

\t\t\t// ( types-Object, data )
\t\t\tdata = data || selector;
\t\t\tselector = undefined;
\t\t}
\t\tfor ( type in types ) {
\t\t\ton( elem, type, selector, data, types[ type ], one );
\t\t}
\t\treturn elem;
\t}

\tif ( data == null && fn == null ) {

\t\t// ( types, fn )
\t\tfn = selector;
\t\tdata = selector = undefined;
\t} else if ( fn == null ) {
\t\tif ( typeof selector === \"string\" ) {

\t\t\t// ( types, selector, fn )
\t\t\tfn = data;
\t\t\tdata = undefined;
\t\t} else {

\t\t\t// ( types, data, fn )
\t\t\tfn = data;
\t\t\tdata = selector;
\t\t\tselector = undefined;
\t\t}
\t}
\tif ( fn === false ) {
\t\tfn = returnFalse;
\t} else if ( !fn ) {
\t\treturn elem;
\t}

\tif ( one === 1 ) {
\t\torigFn = fn;
\t\tfn = function( event ) {

\t\t\t// Can use an empty set, since event contains the info
\t\t\tjQuery().off( event );
\t\t\treturn origFn.apply( this, arguments );
\t\t};

\t\t// Use same guid so caller can remove using origFn
\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t}
\treturn elem.each( function() {
\t\tjQuery.event.add( this, types, fn, data, selector );
\t} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

\tglobal: {},

\tadd: function( elem, types, handler, data, selector ) {

\t\tvar handleObjIn, eventHandle, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = dataPriv.get( elem );

\t\t// Don't attach events to noData or text/comment nodes (but allow plain objects)
\t\tif ( !elemData ) {
\t\t\treturn;
\t\t}

\t\t// Caller can pass in an object of custom data in lieu of the handler
\t\tif ( handler.handler ) {
\t\t\thandleObjIn = handler;
\t\t\thandler = handleObjIn.handler;
\t\t\tselector = handleObjIn.selector;
\t\t}

\t\t// Ensure that invalid selectors throw exceptions at attach time
\t\t// Evaluate against documentElement in case elem is a non-element node (e.g., document)
\t\tif ( selector ) {
\t\t\tjQuery.find.matchesSelector( documentElement, selector );
\t\t}

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !( events = elemData.events ) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !( eventHandle = elemData.handle ) ) {
\t\t\teventHandle = elemData.handle = function( e ) {

\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== \"undefined\" && jQuery.event.triggered !== e.type ?
\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t};
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// There *must* be a type, no attaching namespace-only handlers
\t\t\tif ( !type ) {
\t\t\t\tcontinue;
\t\t\t}

\t\t\t// If event changes its type, use the special event handlers for the changed type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// If selector defined, determine special event api type, otherwise given type
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;

\t\t\t// Update special based on newly reset type
\t\t\tspecial = jQuery.event.special[ type ] || {};

\t\t\t// handleObj is passed to all event handlers
\t\t\thandleObj = jQuery.extend( {
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join( \".\" )
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !( handlers = events[ type ] ) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\tif ( !special.setup ||
\t\t\t\t\tspecial.setup.call( elem, data, namespaces, eventHandle ) === false ) {

\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif ( special.add ) {
\t\t\t\tspecial.add.call( elem, handleObj );

\t\t\t\tif ( !handleObj.handler.guid ) {
\t\t\t\t\thandleObj.handler.guid = handler.guid;
\t\t\t\t}
\t\t\t}

\t\t\t// Add to the element's handler list, delegates in front
\t\t\tif ( selector ) {
\t\t\t\thandlers.splice( handlers.delegateCount++, 0, handleObj );
\t\t\t} else {
\t\t\t\thandlers.push( handleObj );
\t\t\t}

\t\t\t// Keep track of which events have ever been used, for event optimization
\t\t\tjQuery.event.global[ type ] = true;
\t\t}

\t},

\t// Detach an event or set of events from an element
\tremove: function( elem, types, handler, selector, mappedTypes ) {

\t\tvar j, origCount, tmp,
\t\t\tevents, t, handleObj,
\t\t\tspecial, handlers, type, namespaces, origType,
\t\t\telemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

\t\tif ( !elemData || !( events = elemData.events ) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnothtmlwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[ t ] ) || [];
\t\t\ttype = origType = tmp[ 1 ];
\t\t\tnamespaces = ( tmp[ 2 ] || \"\" ).split( \".\" ).sort();

\t\t\t// Unbind all events (on this namespace, if provided) for the element
\t\t\tif ( !type ) {
\t\t\t\tfor ( type in events ) {
\t\t\t\t\tjQuery.event.remove( elem, type + types[ t ], handler, selector, true );
\t\t\t\t}
\t\t\t\tcontinue;
\t\t\t}

\t\t\tspecial = jQuery.event.special[ type ] || {};
\t\t\ttype = ( selector ? special.delegateType : special.bindType ) || type;
\t\t\thandlers = events[ type ] || [];
\t\t\ttmp = tmp[ 2 ] &&
\t\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector ||
\t\t\t\t\t\tselector === \"**\" && handleObj.selector ) ) {
\t\t\t\t\thandlers.splice( j, 1 );

\t\t\t\t\tif ( handleObj.selector ) {
\t\t\t\t\t\thandlers.delegateCount--;
\t\t\t\t\t}
\t\t\t\t\tif ( special.remove ) {
\t\t\t\t\t\tspecial.remove.call( elem, handleObj );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// Remove generic event handler if we removed something and no more handlers exist
\t\t\t// (avoids potential for endless recursion during removal of special event handlers)
\t\t\tif ( origCount && !handlers.length ) {
\t\t\t\tif ( !special.teardown ||
\t\t\t\t\tspecial.teardown.call( elem, namespaces, elemData.handle ) === false ) {

\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove data and the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdataPriv.remove( elem, \"handle events\" );
\t\t}
\t},

\tdispatch: function( nativeEvent ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tvar event = jQuery.event.fix( nativeEvent );

\t\tvar i, j, ret, matched, handleObj, handlerQueue,
\t\t\targs = new Array( arguments.length ),
\t\t\thandlers = ( dataPriv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[ 0 ] = event;

\t\tfor ( i = 1; i < arguments.length; i++ ) {
\t\t\targs[ i ] = arguments[ i ];
\t\t}

\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( ( handleObj = matched.handlers[ j++ ] ) &&
\t\t\t\t!event.isImmediatePropagationStopped() ) {

\t\t\t\t// Triggered event must either 1) have no namespace, or 2) have namespace(s)
\t\t\t\t// a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\tif ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
\t\t\t\t\t\thandleObj.handler ).apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( ( event.result = ret ) === false ) {
\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\tevent.stopPropagation();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Call the postDispatch hook for the mapped type
\t\tif ( special.postDispatch ) {
\t\t\tspecial.postDispatch.call( this, event );
\t\t}

\t\treturn event.result;
\t},

\thandlers: function( event, handlers ) {
\t\tvar i, handleObj, sel, matchedHandlers, matchedSelectors,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\tif ( delegateCount &&

\t\t\t// Support: IE <=9
\t\t\t// Black-hole SVG <use> instance trees (trac-13180)
\t\t\tcur.nodeType &&

\t\t\t// Support: Firefox <=42
\t\t\t// Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
\t\t\t// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
\t\t\t// Support: IE 11 only
\t\t\t// ...but not arrow key \"clicks\" of radio inputs, which can have `button` -1 (gh-2343)
\t\t\t!( event.type === \"click\" && event.button >= 1 ) ) {

\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't check non-elements (#13208)
\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.nodeType === 1 && !( event.type === \"click\" && cur.disabled === true ) ) {
\t\t\t\t\tmatchedHandlers = [];
\t\t\t\t\tmatchedSelectors = {};
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matchedSelectors[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatchedSelectors[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) > -1 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matchedSelectors[ sel ] ) {
\t\t\t\t\t\t\tmatchedHandlers.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matchedHandlers.length ) {
\t\t\t\t\t\thandlerQueue.push( { elem: cur, handlers: matchedHandlers } );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tcur = this;
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
\t\t}

\t\treturn handlerQueue;
\t},

\taddProp: function( name, hook ) {
\t\tObject.defineProperty( jQuery.Event.prototype, name, {
\t\t\tenumerable: true,
\t\t\tconfigurable: true,

\t\t\tget: jQuery.isFunction( hook ) ?
\t\t\t\tfunction() {
\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn hook( this.originalEvent );
\t\t\t\t\t}
\t\t\t\t} :
\t\t\t\tfunction() {
\t\t\t\t\tif ( this.originalEvent ) {
\t\t\t\t\t\t\treturn this.originalEvent[ name ];
\t\t\t\t\t}
\t\t\t\t},

\t\t\tset: function( value ) {
\t\t\t\tObject.defineProperty( this, name, {
\t\t\t\t\tenumerable: true,
\t\t\t\t\tconfigurable: true,
\t\t\t\t\twritable: true,
\t\t\t\t\tvalue: value
\t\t\t\t} );
\t\t\t}
\t\t} );
\t},

\tfix: function( originalEvent ) {
\t\treturn originalEvent[ jQuery.expando ] ?
\t\t\toriginalEvent :
\t\t\tnew jQuery.Event( originalEvent );
\t},

\tspecial: {
\t\tload: {

\t\t\t// Prevent triggered image.load events from bubbling to window.load
\t\t\tnoBubble: true
\t\t},
\t\tfocus: {

\t\t\t// Fire native event if possible so blur/focus sequence is correct
\t\t\ttrigger: function() {
\t\t\t\tif ( this !== safeActiveElement() && this.focus ) {
\t\t\t\t\tthis.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusin\"
\t\t},
\t\tblur: {
\t\t\ttrigger: function() {
\t\t\t\tif ( this === safeActiveElement() && this.blur ) {
\t\t\t\t\tthis.blur();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},
\t\t\tdelegateType: \"focusout\"
\t\t},
\t\tclick: {

\t\t\t// For checkbox, fire native event so checked state will be right
\t\t\ttrigger: function() {
\t\t\t\tif ( this.type === \"checkbox\" && this.click && nodeName( this, \"input\" ) ) {
\t\t\t\t\tthis.click();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},

\t\t\t// For cross-browser consistency, don't fire native .click() on links
\t\t\t_default: function( event ) {
\t\t\t\treturn nodeName( event.target, \"a\" );
\t\t\t}
\t\t},

\t\tbeforeunload: {
\t\t\tpostDispatch: function( event ) {

\t\t\t\t// Support: Firefox 20+
\t\t\t\t// Firefox doesn't alert if the returnValue field is not set.
\t\t\t\tif ( event.result !== undefined && event.originalEvent ) {
\t\t\t\t\tevent.originalEvent.returnValue = event.result;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
};

jQuery.removeEvent = function( elem, type, handle ) {

\t// This \"if\" is needed for plain objects
\tif ( elem.removeEventListener ) {
\t\telem.removeEventListener( type, handle );
\t}
};

jQuery.Event = function( src, props ) {

\t// Allow instantiation without the 'new' keyword
\tif ( !( this instanceof jQuery.Event ) ) {
\t\treturn new jQuery.Event( src, props );
\t}

\t// Event object
\tif ( src && src.type ) {
\t\tthis.originalEvent = src;
\t\tthis.type = src.type;

\t\t// Events bubbling up the document may have been marked as prevented
\t\t// by a handler lower down the tree; reflect the correct value.
\t\tthis.isDefaultPrevented = src.defaultPrevented ||
\t\t\t\tsrc.defaultPrevented === undefined &&

\t\t\t\t// Support: Android <=2.3 only
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

\t\t// Create target properties
\t\t// Support: Safari <=6 - 7 only
\t\t// Target should not be a text node (#504, #13143)
\t\tthis.target = ( src.target && src.target.nodeType === 3 ) ?
\t\t\tsrc.target.parentNode :
\t\t\tsrc.target;

\t\tthis.currentTarget = src.currentTarget;
\t\tthis.relatedTarget = src.relatedTarget;

\t// Event type
\t} else {
\t\tthis.type = src;
\t}

\t// Put explicitly provided properties onto the event object
\tif ( props ) {
\t\tjQuery.extend( this, props );
\t}

\t// Create a timestamp if incoming event doesn't have one
\tthis.timeStamp = src && src.timeStamp || jQuery.now();

\t// Mark it as fixed
\tthis[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tconstructor: jQuery.Event,
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,
\tisSimulated: false,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.preventDefault();
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.stopPropagation();
\t\t}
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && !this.isSimulated ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
\taltKey: true,
\tbubbles: true,
\tcancelable: true,
\tchangedTouches: true,
\tctrlKey: true,
\tdetail: true,
\teventPhase: true,
\tmetaKey: true,
\tpageX: true,
\tpageY: true,
\tshiftKey: true,
\tview: true,
\t\"char\": true,
\tcharCode: true,
\tkey: true,
\tkeyCode: true,
\tbutton: true,
\tbuttons: true,
\tclientX: true,
\tclientY: true,
\toffsetX: true,
\toffsetY: true,
\tpointerId: true,
\tpointerType: true,
\tscreenX: true,
\tscreenY: true,
\ttargetTouches: true,
\ttoElement: true,
\ttouches: true,

\twhich: function( event ) {
\t\tvar button = event.button;

\t\t// Add which for key events
\t\tif ( event.which == null && rkeyEvent.test( event.type ) ) {
\t\t\treturn event.charCode != null ? event.charCode : event.keyCode;
\t\t}

\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\tif ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
\t\t\tif ( button & 1 ) {
\t\t\t\treturn 1;
\t\t\t}

\t\t\tif ( button & 2 ) {
\t\t\t\treturn 3;
\t\t\t}

\t\t\tif ( button & 4 ) {
\t\t\t\treturn 2;
\t\t\t}

\t\t\treturn 0;
\t\t}

\t\treturn event.which;
\t}
}, jQuery.event.addProp );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
\tmouseenter: \"mouseover\",
\tmouseleave: \"mouseout\",
\tpointerenter: \"pointerover\",
\tpointerleave: \"pointerout\"
}, function( orig, fix ) {
\tjQuery.event.special[ orig ] = {
\t\tdelegateType: fix,
\t\tbindType: fix,

\t\thandle: function( event ) {
\t\t\tvar ret,
\t\t\t\ttarget = this,
\t\t\t\trelated = event.relatedTarget,
\t\t\t\thandleObj = event.handleObj;

\t\t\t// For mouseenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
} );

jQuery.fn.extend( {

\ton: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn );
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn on( this, types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {

\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ?
\t\t\t\t\thandleObj.origType + \".\" + handleObj.namespace :
\t\t\t\t\thandleObj.origType,
\t\t\t\thandleObj.selector,
\t\t\t\thandleObj.handler
\t\t\t);
\t\t\treturn this;
\t\t}
\t\tif ( typeof types === \"object\" ) {

\t\t\t// ( types-object [, selector] )
\t\t\tfor ( type in types ) {
\t\t\t\tthis.off( type, selector, types[ type ] );
\t\t\t}
\t\t\treturn this;
\t\t}
\t\tif ( selector === false || typeof selector === \"function\" ) {

\t\t\t// ( types [, fn] )
\t\t\tfn = selector;
\t\t\tselector = undefined;
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t} );
\t}
} );

return jQuery;
} );
", "node_modules/jquery/src/event.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/event.js");
    }
}
