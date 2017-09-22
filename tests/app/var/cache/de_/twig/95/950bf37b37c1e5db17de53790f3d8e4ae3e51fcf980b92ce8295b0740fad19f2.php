<?php

/* node_modules/parsleyjs/bower_components/jquery/src/event.js */
class __TwigTemplate_904390578774a718f70c8cb4a28d7b8ddcc2552243b62f64e8d59f9e05296d86 extends Twig_Template
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
        $__internal_0b34a491baa61fb878cc338636ec0ab46f0d1888a6d5d1d30f3bf52a7b5ad328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b34a491baa61fb878cc338636ec0ab46f0d1888a6d5d1d30f3bf52a7b5ad328->enter($__internal_0b34a491baa61fb878cc338636ec0ab46f0d1888a6d5d1d30f3bf52a7b5ad328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/event.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/strundefined\",
\t\"./var/rnotwhite\",
\t\"./var/hasOwn\",
\t\"./var/slice\",
\t\"./event/support\",
\t\"./data/var/data_priv\",

\t\"./core/init\",
\t\"./data/accepts\",
\t\"./selector\"
], function( jQuery, strundefined, rnotwhite, hasOwn, slice, support, data_priv ) {

var
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu)|click/,
\trfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)\$/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
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
\t\t\telemData = data_priv.get( elem );

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

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !(events = elemData.events) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !(eventHandle = elemData.handle) ) {
\t\t\teventHandle = elemData.handle = function( e ) {
\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== strundefined && jQuery.event.triggered !== e.type ?
\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t};
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

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
\t\t\thandleObj = jQuery.extend({
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join(\".\")
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !(handlers = events[ type ]) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\tif ( !special.setup || special.setup.call( elem, data, namespaces, eventHandle ) === false ) {
\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle, false );
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
\t\t\telemData = data_priv.hasData( elem ) && data_priv.get( elem );

\t\tif ( !elemData || !(events = elemData.events) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

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
\t\t\ttmp = tmp[2] && new RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector || selector === \"**\" && handleObj.selector ) ) {
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
\t\t\t\tif ( !special.teardown || special.teardown.call( elem, namespaces, elemData.handle ) === false ) {
\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdelete elemData.handle;
\t\t\tdata_priv.remove( elem, \"events\" );
\t\t}
\t},

\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\tvar i, cur, tmp, bubbleType, ontype, handle, special,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split(\".\") : [];

\t\tcur = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf(\".\") >= 0 ) {
\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split(\".\");
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf(\":\") < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join(\".\");
\t\tevent.namespace_re = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" ) :
\t\t\tnull;

\t\t// Clean up the event in case it is being reused
\t\tevent.result = undefined;
\t\tif ( !event.target ) {
\t\t\tevent.target = elem;
\t\t}

\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\tdata = data == null ?
\t\t\t[ event ] :
\t\t\tjQuery.makeArray( data, [ event ] );

\t\t// Allow special events to draw outside the lines
\t\tspecial = jQuery.event.special[ type ] || {};
\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\tif ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

\t\t\tbubbleType = special.delegateType || type;
\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\teventPath.push( cur );
\t\t\t\ttmp = cur;
\t\t\t}

\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\tif ( tmp === (elem.ownerDocument || document) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( (cur = eventPath[i++]) && !event.isPropagationStopped() ) {

\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( data_priv.get( cur, \"events\" ) || {} )[ event.type ] && data_priv.get( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && jQuery.acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( (!special._default || special._default.apply( eventPath.pop(), data ) === false) &&
\t\t\t\tjQuery.acceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name name as the event.
\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\tif ( ontype && jQuery.isFunction( elem[ type ] ) && !jQuery.isWindow( elem ) ) {

\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t}

\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\tjQuery.event.triggered = type;
\t\t\t\t\telem[ type ]();
\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn event.result;
\t},

\tdispatch: function( event ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tevent = jQuery.event.fix( event );

\t\tvar i, j, ret, matched, handleObj,
\t\t\thandlerQueue = [],
\t\t\targs = slice.call( arguments ),
\t\t\thandlers = ( data_priv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[0] = event;
\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( (matched = handlerQueue[ i++ ]) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( (handleObj = matched.handlers[ j++ ]) && !event.isImmediatePropagationStopped() ) {

\t\t\t\t// Triggered event must either 1) have no namespace, or 2) have namespace(s)
\t\t\t\t// a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\tif ( !event.namespace_re || event.namespace_re.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( (jQuery.event.special[ handleObj.origType ] || {}).handle || handleObj.handler )
\t\t\t\t\t\t\t.apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( (event.result = ret) === false ) {
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
\t\tvar i, matches, sel, handleObj,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\t// Black-hole SVG <use> instance trees (#13180)
\t\t// Avoid non-left-click bubbling in Firefox (#3861)
\t\tif ( delegateCount && cur.nodeType && (!event.button || event.type !== \"click\") ) {

\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.disabled !== true || event.type !== \"click\" ) {
\t\t\t\t\tmatches = [];
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matches[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatches[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) >= 0 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matches[ sel ] ) {
\t\t\t\t\t\t\tmatches.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matches.length ) {
\t\t\t\t\t\thandlerQueue.push({ elem: cur, handlers: matches });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push({ elem: this, handlers: handlers.slice( delegateCount ) });
\t\t}

\t\treturn handlerQueue;
\t},

\t// Includes some event props shared by KeyEvent and MouseEvent
\tprops: \"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which\".split(\" \"),

\tfixHooks: {},

\tkeyHooks: {
\t\tprops: \"char charCode key keyCode\".split(\" \"),
\t\tfilter: function( event, original ) {

\t\t\t// Add which for key events
\t\t\tif ( event.which == null ) {
\t\t\t\tevent.which = original.charCode != null ? original.charCode : original.keyCode;
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tmouseHooks: {
\t\tprops: \"button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement\".split(\" \"),
\t\tfilter: function( event, original ) {
\t\t\tvar eventDoc, doc, body,
\t\t\t\tbutton = original.button;

\t\t\t// Calculate pageX/Y if missing and clientX/Y available
\t\t\tif ( event.pageX == null && original.clientX != null ) {
\t\t\t\teventDoc = event.target.ownerDocument || document;
\t\t\t\tdoc = eventDoc.documentElement;
\t\t\t\tbody = eventDoc.body;

\t\t\t\tevent.pageX = original.clientX + ( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) - ( doc && doc.clientLeft || body && body.clientLeft || 0 );
\t\t\t\tevent.pageY = original.clientY + ( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) - ( doc && doc.clientTop  || body && body.clientTop  || 0 );
\t\t\t}

\t\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\t\t// Note: button is not normalized, so don't use it
\t\t\tif ( !event.which && button !== undefined ) {
\t\t\t\tevent.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tfix: function( event ) {
\t\tif ( event[ jQuery.expando ] ) {
\t\t\treturn event;
\t\t}

\t\t// Create a writable copy of the event object and normalize some properties
\t\tvar i, prop, copy,
\t\t\ttype = event.type,
\t\t\toriginalEvent = event,
\t\t\tfixHook = this.fixHooks[ type ];

\t\tif ( !fixHook ) {
\t\t\tthis.fixHooks[ type ] = fixHook =
\t\t\t\trmouseEvent.test( type ) ? this.mouseHooks :
\t\t\t\trkeyEvent.test( type ) ? this.keyHooks :
\t\t\t\t{};
\t\t}
\t\tcopy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

\t\tevent = new jQuery.Event( originalEvent );

\t\ti = copy.length;
\t\twhile ( i-- ) {
\t\t\tprop = copy[ i ];
\t\t\tevent[ prop ] = originalEvent[ prop ];
\t\t}

\t\t// Support: Cordova 2.5 (WebKit) (#13255)
\t\t// All events should have a target; Cordova deviceready doesn't
\t\tif ( !event.target ) {
\t\t\tevent.target = document;
\t\t}

\t\t// Support: Safari 6.0+, Chrome<28
\t\t// Target should not be a text node (#504, #13143)
\t\tif ( event.target.nodeType === 3 ) {
\t\t\tevent.target = event.target.parentNode;
\t\t}

\t\treturn fixHook.filter ? fixHook.filter( event, originalEvent ) : event;
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
\t\t\t\tif ( this.type === \"checkbox\" && this.click && jQuery.nodeName( this, \"input\" ) ) {
\t\t\t\t\tthis.click();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},

\t\t\t// For cross-browser consistency, don't fire native .click() on links
\t\t\t_default: function( event ) {
\t\t\t\treturn jQuery.nodeName( event.target, \"a\" );
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
\t},

\tsimulate: function( type, elem, event, bubble ) {
\t\t// Piggyback on a donor event to simulate a different one.
\t\t// Fake originalEvent to avoid donor's stopPropagation, but if the
\t\t// simulated event prevents default then we do the same on the donor.
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true,
\t\t\t\toriginalEvent: {}
\t\t\t}
\t\t);
\t\tif ( bubble ) {
\t\t\tjQuery.event.trigger( e, null, elem );
\t\t} else {
\t\t\tjQuery.event.dispatch.call( elem, e );
\t\t}
\t\tif ( e.isDefaultPrevented() ) {
\t\t\tevent.preventDefault();
\t\t}
\t}
};

jQuery.removeEvent = function( elem, type, handle ) {
\tif ( elem.removeEventListener ) {
\t\telem.removeEventListener( type, handle, false );
\t}
};

jQuery.Event = function( src, props ) {
\t// Allow instantiation without the 'new' keyword
\tif ( !(this instanceof jQuery.Event) ) {
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
\t\t\t\t// Support: Android<4.0
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

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
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;

\t\tif ( e && e.preventDefault ) {
\t\t\te.preventDefault();
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( e && e.stopPropagation ) {
\t\t\te.stopPropagation();
\t\t}
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && e.stopImmediatePropagation ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Create mouseenter/leave events using mouseover/out and event-time checks
// Support: Chrome 15+
jQuery.each({
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

\t\t\t// For mousenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || (related !== target && !jQuery.contains( target, related )) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
});

// Support: Firefox, Chrome, Safari
// Create \"bubbling\" focus and blur events
if ( !support.focusinBubbles ) {
\tjQuery.each({ focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ), true );
\t\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = data_priv.access( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tdata_priv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = data_priv.access( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tdata_priv.remove( doc, fix );

\t\t\t\t} else {
\t\t\t\t\tdata_priv.access( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t});
}

jQuery.fn.extend({

\ton: function( types, selector, data, fn, /*INTERNAL*/ one ) {
\t\tvar origFn, type;

\t\t// Types can be a map of types/handlers
\t\tif ( typeof types === \"object\" ) {
\t\t\t// ( types-Object, selector, data )
\t\t\tif ( typeof selector !== \"string\" ) {
\t\t\t\t// ( types-Object, data )
\t\t\t\tdata = data || selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t\tfor ( type in types ) {
\t\t\t\tthis.on( type, selector, data, types[ type ], one );
\t\t\t}
\t\t\treturn this;
\t\t}

\t\tif ( data == null && fn == null ) {
\t\t\t// ( types, fn )
\t\t\tfn = selector;
\t\t\tdata = selector = undefined;
\t\t} else if ( fn == null ) {
\t\t\tif ( typeof selector === \"string\" ) {
\t\t\t\t// ( types, selector, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = undefined;
\t\t\t} else {
\t\t\t\t// ( types, data, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t} else if ( !fn ) {
\t\t\treturn this;
\t\t}

\t\tif ( one === 1 ) {
\t\t\torigFn = fn;
\t\t\tfn = function( event ) {
\t\t\t\t// Can use an empty set, since event contains the info
\t\t\t\tjQuery().off( event );
\t\t\t\treturn origFn.apply( this, arguments );
\t\t\t};
\t\t\t// Use same guid so caller can remove using origFn
\t\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.add( this, types, fn, data, selector );
\t\t});
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn this.on( types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {
\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ? handleObj.origType + \".\" + handleObj.namespace : handleObj.origType,
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
\t\treturn this.each(function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t});
\t},

\ttrigger: function( type, data ) {
\t\treturn this.each(function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t});
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[0];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
});

return jQuery;
});
";
        
        $__internal_0b34a491baa61fb878cc338636ec0ab46f0d1888a6d5d1d30f3bf52a7b5ad328->leave($__internal_0b34a491baa61fb878cc338636ec0ab46f0d1888a6d5d1d30f3bf52a7b5ad328_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/event.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/strundefined\",
\t\"./var/rnotwhite\",
\t\"./var/hasOwn\",
\t\"./var/slice\",
\t\"./event/support\",
\t\"./data/var/data_priv\",

\t\"./core/init\",
\t\"./data/accepts\",
\t\"./selector\"
], function( jQuery, strundefined, rnotwhite, hasOwn, slice, support, data_priv ) {

var
\trkeyEvent = /^key/,
\trmouseEvent = /^(?:mouse|pointer|contextmenu)|click/,
\trfocusMorph = /^(?:focusinfocus|focusoutblur)\$/,
\trtypenamespace = /^([^.]*)(?:\\.(.+)|)\$/;

function returnTrue() {
\treturn true;
}

function returnFalse() {
\treturn false;
}

function safeActiveElement() {
\ttry {
\t\treturn document.activeElement;
\t} catch ( err ) { }
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
\t\t\telemData = data_priv.get( elem );

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

\t\t// Make sure that the handler has a unique ID, used to find/remove it later
\t\tif ( !handler.guid ) {
\t\t\thandler.guid = jQuery.guid++;
\t\t}

\t\t// Init the element's event structure and main handler, if this is the first
\t\tif ( !(events = elemData.events) ) {
\t\t\tevents = elemData.events = {};
\t\t}
\t\tif ( !(eventHandle = elemData.handle) ) {
\t\t\teventHandle = elemData.handle = function( e ) {
\t\t\t\t// Discard the second event of a jQuery.event.trigger() and
\t\t\t\t// when an event is called after a page has unloaded
\t\t\t\treturn typeof jQuery !== strundefined && jQuery.event.triggered !== e.type ?
\t\t\t\t\tjQuery.event.dispatch.apply( elem, arguments ) : undefined;
\t\t\t};
\t\t}

\t\t// Handle multiple events separated by a space
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

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
\t\t\thandleObj = jQuery.extend({
\t\t\t\ttype: type,
\t\t\t\torigType: origType,
\t\t\t\tdata: data,
\t\t\t\thandler: handler,
\t\t\t\tguid: handler.guid,
\t\t\t\tselector: selector,
\t\t\t\tneedsContext: selector && jQuery.expr.match.needsContext.test( selector ),
\t\t\t\tnamespace: namespaces.join(\".\")
\t\t\t}, handleObjIn );

\t\t\t// Init the event handler queue if we're the first
\t\t\tif ( !(handlers = events[ type ]) ) {
\t\t\t\thandlers = events[ type ] = [];
\t\t\t\thandlers.delegateCount = 0;

\t\t\t\t// Only use addEventListener if the special events handler returns false
\t\t\t\tif ( !special.setup || special.setup.call( elem, data, namespaces, eventHandle ) === false ) {
\t\t\t\t\tif ( elem.addEventListener ) {
\t\t\t\t\t\telem.addEventListener( type, eventHandle, false );
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
\t\t\telemData = data_priv.hasData( elem ) && data_priv.get( elem );

\t\tif ( !elemData || !(events = elemData.events) ) {
\t\t\treturn;
\t\t}

\t\t// Once for each type.namespace in types; type may be omitted
\t\ttypes = ( types || \"\" ).match( rnotwhite ) || [ \"\" ];
\t\tt = types.length;
\t\twhile ( t-- ) {
\t\t\ttmp = rtypenamespace.exec( types[t] ) || [];
\t\t\ttype = origType = tmp[1];
\t\t\tnamespaces = ( tmp[2] || \"\" ).split( \".\" ).sort();

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
\t\t\ttmp = tmp[2] && new RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" );

\t\t\t// Remove matching events
\t\t\torigCount = j = handlers.length;
\t\t\twhile ( j-- ) {
\t\t\t\thandleObj = handlers[ j ];

\t\t\t\tif ( ( mappedTypes || origType === handleObj.origType ) &&
\t\t\t\t\t( !handler || handler.guid === handleObj.guid ) &&
\t\t\t\t\t( !tmp || tmp.test( handleObj.namespace ) ) &&
\t\t\t\t\t( !selector || selector === handleObj.selector || selector === \"**\" && handleObj.selector ) ) {
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
\t\t\t\tif ( !special.teardown || special.teardown.call( elem, namespaces, elemData.handle ) === false ) {
\t\t\t\t\tjQuery.removeEvent( elem, type, elemData.handle );
\t\t\t\t}

\t\t\t\tdelete events[ type ];
\t\t\t}
\t\t}

\t\t// Remove the expando if it's no longer used
\t\tif ( jQuery.isEmptyObject( events ) ) {
\t\t\tdelete elemData.handle;
\t\t\tdata_priv.remove( elem, \"events\" );
\t\t}
\t},

\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\tvar i, cur, tmp, bubbleType, ontype, handle, special,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split(\".\") : [];

\t\tcur = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf(\".\") >= 0 ) {
\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split(\".\");
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf(\":\") < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join(\".\");
\t\tevent.namespace_re = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join(\"\\\\.(?:.*\\\\.|)\") + \"(\\\\.|\$)\" ) :
\t\t\tnull;

\t\t// Clean up the event in case it is being reused
\t\tevent.result = undefined;
\t\tif ( !event.target ) {
\t\t\tevent.target = elem;
\t\t}

\t\t// Clone any incoming data and prepend the event, creating the handler arg list
\t\tdata = data == null ?
\t\t\t[ event ] :
\t\t\tjQuery.makeArray( data, [ event ] );

\t\t// Allow special events to draw outside the lines
\t\tspecial = jQuery.event.special[ type ] || {};
\t\tif ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine event propagation path in advance, per W3C events spec (#9951)
\t\t// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
\t\tif ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

\t\t\tbubbleType = special.delegateType || type;
\t\t\tif ( !rfocusMorph.test( bubbleType + type ) ) {
\t\t\t\tcur = cur.parentNode;
\t\t\t}
\t\t\tfor ( ; cur; cur = cur.parentNode ) {
\t\t\t\teventPath.push( cur );
\t\t\t\ttmp = cur;
\t\t\t}

\t\t\t// Only add window if we got to document (e.g., not plain obj or detached DOM)
\t\t\tif ( tmp === (elem.ownerDocument || document) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( (cur = eventPath[i++]) && !event.isPropagationStopped() ) {

\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( data_priv.get( cur, \"events\" ) || {} )[ event.type ] && data_priv.get( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && jQuery.acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( (!special._default || special._default.apply( eventPath.pop(), data ) === false) &&
\t\t\t\tjQuery.acceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name name as the event.
\t\t\t\t// Don't do default actions on window, that's where global variables be (#6170)
\t\t\t\tif ( ontype && jQuery.isFunction( elem[ type ] ) && !jQuery.isWindow( elem ) ) {

\t\t\t\t\t// Don't re-trigger an onFOO event when we call its FOO() method
\t\t\t\t\ttmp = elem[ ontype ];

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = null;
\t\t\t\t\t}

\t\t\t\t\t// Prevent re-triggering of the same event, since we already bubbled it above
\t\t\t\t\tjQuery.event.triggered = type;
\t\t\t\t\telem[ type ]();
\t\t\t\t\tjQuery.event.triggered = undefined;

\t\t\t\t\tif ( tmp ) {
\t\t\t\t\t\telem[ ontype ] = tmp;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn event.result;
\t},

\tdispatch: function( event ) {

\t\t// Make a writable jQuery.Event from the native event object
\t\tevent = jQuery.event.fix( event );

\t\tvar i, j, ret, matched, handleObj,
\t\t\thandlerQueue = [],
\t\t\targs = slice.call( arguments ),
\t\t\thandlers = ( data_priv.get( this, \"events\" ) || {} )[ event.type ] || [],
\t\t\tspecial = jQuery.event.special[ event.type ] || {};

\t\t// Use the fix-ed jQuery.Event rather than the (read-only) native event
\t\targs[0] = event;
\t\tevent.delegateTarget = this;

\t\t// Call the preDispatch hook for the mapped type, and let it bail if desired
\t\tif ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
\t\t\treturn;
\t\t}

\t\t// Determine handlers
\t\thandlerQueue = jQuery.event.handlers.call( this, event, handlers );

\t\t// Run delegates first; they may want to stop propagation beneath us
\t\ti = 0;
\t\twhile ( (matched = handlerQueue[ i++ ]) && !event.isPropagationStopped() ) {
\t\t\tevent.currentTarget = matched.elem;

\t\t\tj = 0;
\t\t\twhile ( (handleObj = matched.handlers[ j++ ]) && !event.isImmediatePropagationStopped() ) {

\t\t\t\t// Triggered event must either 1) have no namespace, or 2) have namespace(s)
\t\t\t\t// a subset or equal to those in the bound event (both can have no namespace).
\t\t\t\tif ( !event.namespace_re || event.namespace_re.test( handleObj.namespace ) ) {

\t\t\t\t\tevent.handleObj = handleObj;
\t\t\t\t\tevent.data = handleObj.data;

\t\t\t\t\tret = ( (jQuery.event.special[ handleObj.origType ] || {}).handle || handleObj.handler )
\t\t\t\t\t\t\t.apply( matched.elem, args );

\t\t\t\t\tif ( ret !== undefined ) {
\t\t\t\t\t\tif ( (event.result = ret) === false ) {
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
\t\tvar i, matches, sel, handleObj,
\t\t\thandlerQueue = [],
\t\t\tdelegateCount = handlers.delegateCount,
\t\t\tcur = event.target;

\t\t// Find delegate handlers
\t\t// Black-hole SVG <use> instance trees (#13180)
\t\t// Avoid non-left-click bubbling in Firefox (#3861)
\t\tif ( delegateCount && cur.nodeType && (!event.button || event.type !== \"click\") ) {

\t\t\tfor ( ; cur !== this; cur = cur.parentNode || this ) {

\t\t\t\t// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
\t\t\t\tif ( cur.disabled !== true || event.type !== \"click\" ) {
\t\t\t\t\tmatches = [];
\t\t\t\t\tfor ( i = 0; i < delegateCount; i++ ) {
\t\t\t\t\t\thandleObj = handlers[ i ];

\t\t\t\t\t\t// Don't conflict with Object.prototype properties (#13203)
\t\t\t\t\t\tsel = handleObj.selector + \" \";

\t\t\t\t\t\tif ( matches[ sel ] === undefined ) {
\t\t\t\t\t\t\tmatches[ sel ] = handleObj.needsContext ?
\t\t\t\t\t\t\t\tjQuery( sel, this ).index( cur ) >= 0 :
\t\t\t\t\t\t\t\tjQuery.find( sel, this, null, [ cur ] ).length;
\t\t\t\t\t\t}
\t\t\t\t\t\tif ( matches[ sel ] ) {
\t\t\t\t\t\t\tmatches.push( handleObj );
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif ( matches.length ) {
\t\t\t\t\t\thandlerQueue.push({ elem: cur, handlers: matches });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Add the remaining (directly-bound) handlers
\t\tif ( delegateCount < handlers.length ) {
\t\t\thandlerQueue.push({ elem: this, handlers: handlers.slice( delegateCount ) });
\t\t}

\t\treturn handlerQueue;
\t},

\t// Includes some event props shared by KeyEvent and MouseEvent
\tprops: \"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which\".split(\" \"),

\tfixHooks: {},

\tkeyHooks: {
\t\tprops: \"char charCode key keyCode\".split(\" \"),
\t\tfilter: function( event, original ) {

\t\t\t// Add which for key events
\t\t\tif ( event.which == null ) {
\t\t\t\tevent.which = original.charCode != null ? original.charCode : original.keyCode;
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tmouseHooks: {
\t\tprops: \"button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement\".split(\" \"),
\t\tfilter: function( event, original ) {
\t\t\tvar eventDoc, doc, body,
\t\t\t\tbutton = original.button;

\t\t\t// Calculate pageX/Y if missing and clientX/Y available
\t\t\tif ( event.pageX == null && original.clientX != null ) {
\t\t\t\teventDoc = event.target.ownerDocument || document;
\t\t\t\tdoc = eventDoc.documentElement;
\t\t\t\tbody = eventDoc.body;

\t\t\t\tevent.pageX = original.clientX + ( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) - ( doc && doc.clientLeft || body && body.clientLeft || 0 );
\t\t\t\tevent.pageY = original.clientY + ( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) - ( doc && doc.clientTop  || body && body.clientTop  || 0 );
\t\t\t}

\t\t\t// Add which for click: 1 === left; 2 === middle; 3 === right
\t\t\t// Note: button is not normalized, so don't use it
\t\t\tif ( !event.which && button !== undefined ) {
\t\t\t\tevent.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
\t\t\t}

\t\t\treturn event;
\t\t}
\t},

\tfix: function( event ) {
\t\tif ( event[ jQuery.expando ] ) {
\t\t\treturn event;
\t\t}

\t\t// Create a writable copy of the event object and normalize some properties
\t\tvar i, prop, copy,
\t\t\ttype = event.type,
\t\t\toriginalEvent = event,
\t\t\tfixHook = this.fixHooks[ type ];

\t\tif ( !fixHook ) {
\t\t\tthis.fixHooks[ type ] = fixHook =
\t\t\t\trmouseEvent.test( type ) ? this.mouseHooks :
\t\t\t\trkeyEvent.test( type ) ? this.keyHooks :
\t\t\t\t{};
\t\t}
\t\tcopy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

\t\tevent = new jQuery.Event( originalEvent );

\t\ti = copy.length;
\t\twhile ( i-- ) {
\t\t\tprop = copy[ i ];
\t\t\tevent[ prop ] = originalEvent[ prop ];
\t\t}

\t\t// Support: Cordova 2.5 (WebKit) (#13255)
\t\t// All events should have a target; Cordova deviceready doesn't
\t\tif ( !event.target ) {
\t\t\tevent.target = document;
\t\t}

\t\t// Support: Safari 6.0+, Chrome<28
\t\t// Target should not be a text node (#504, #13143)
\t\tif ( event.target.nodeType === 3 ) {
\t\t\tevent.target = event.target.parentNode;
\t\t}

\t\treturn fixHook.filter ? fixHook.filter( event, originalEvent ) : event;
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
\t\t\t\tif ( this.type === \"checkbox\" && this.click && jQuery.nodeName( this, \"input\" ) ) {
\t\t\t\t\tthis.click();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},

\t\t\t// For cross-browser consistency, don't fire native .click() on links
\t\t\t_default: function( event ) {
\t\t\t\treturn jQuery.nodeName( event.target, \"a\" );
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
\t},

\tsimulate: function( type, elem, event, bubble ) {
\t\t// Piggyback on a donor event to simulate a different one.
\t\t// Fake originalEvent to avoid donor's stopPropagation, but if the
\t\t// simulated event prevents default then we do the same on the donor.
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true,
\t\t\t\toriginalEvent: {}
\t\t\t}
\t\t);
\t\tif ( bubble ) {
\t\t\tjQuery.event.trigger( e, null, elem );
\t\t} else {
\t\t\tjQuery.event.dispatch.call( elem, e );
\t\t}
\t\tif ( e.isDefaultPrevented() ) {
\t\t\tevent.preventDefault();
\t\t}
\t}
};

jQuery.removeEvent = function( elem, type, handle ) {
\tif ( elem.removeEventListener ) {
\t\telem.removeEventListener( type, handle, false );
\t}
};

jQuery.Event = function( src, props ) {
\t// Allow instantiation without the 'new' keyword
\tif ( !(this instanceof jQuery.Event) ) {
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
\t\t\t\t// Support: Android<4.0
\t\t\t\tsrc.returnValue === false ?
\t\t\treturnTrue :
\t\t\treturnFalse;

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
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
\tisDefaultPrevented: returnFalse,
\tisPropagationStopped: returnFalse,
\tisImmediatePropagationStopped: returnFalse,

\tpreventDefault: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isDefaultPrevented = returnTrue;

\t\tif ( e && e.preventDefault ) {
\t\t\te.preventDefault();
\t\t}
\t},
\tstopPropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isPropagationStopped = returnTrue;

\t\tif ( e && e.stopPropagation ) {
\t\t\te.stopPropagation();
\t\t}
\t},
\tstopImmediatePropagation: function() {
\t\tvar e = this.originalEvent;

\t\tthis.isImmediatePropagationStopped = returnTrue;

\t\tif ( e && e.stopImmediatePropagation ) {
\t\t\te.stopImmediatePropagation();
\t\t}

\t\tthis.stopPropagation();
\t}
};

// Create mouseenter/leave events using mouseover/out and event-time checks
// Support: Chrome 15+
jQuery.each({
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

\t\t\t// For mousenter/leave call the handler if related is outside the target.
\t\t\t// NB: No relatedTarget if the mouse left/entered the browser window
\t\t\tif ( !related || (related !== target && !jQuery.contains( target, related )) ) {
\t\t\t\tevent.type = handleObj.origType;
\t\t\t\tret = handleObj.handler.apply( this, arguments );
\t\t\t\tevent.type = fix;
\t\t\t}
\t\t\treturn ret;
\t\t}
\t};
});

// Support: Firefox, Chrome, Safari
// Create \"bubbling\" focus and blur events
if ( !support.focusinBubbles ) {
\tjQuery.each({ focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ), true );
\t\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = data_priv.access( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tdata_priv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = data_priv.access( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tdata_priv.remove( doc, fix );

\t\t\t\t} else {
\t\t\t\t\tdata_priv.access( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t});
}

jQuery.fn.extend({

\ton: function( types, selector, data, fn, /*INTERNAL*/ one ) {
\t\tvar origFn, type;

\t\t// Types can be a map of types/handlers
\t\tif ( typeof types === \"object\" ) {
\t\t\t// ( types-Object, selector, data )
\t\t\tif ( typeof selector !== \"string\" ) {
\t\t\t\t// ( types-Object, data )
\t\t\t\tdata = data || selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t\tfor ( type in types ) {
\t\t\t\tthis.on( type, selector, data, types[ type ], one );
\t\t\t}
\t\t\treturn this;
\t\t}

\t\tif ( data == null && fn == null ) {
\t\t\t// ( types, fn )
\t\t\tfn = selector;
\t\t\tdata = selector = undefined;
\t\t} else if ( fn == null ) {
\t\t\tif ( typeof selector === \"string\" ) {
\t\t\t\t// ( types, selector, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = undefined;
\t\t\t} else {
\t\t\t\t// ( types, data, fn )
\t\t\t\tfn = data;
\t\t\t\tdata = selector;
\t\t\t\tselector = undefined;
\t\t\t}
\t\t}
\t\tif ( fn === false ) {
\t\t\tfn = returnFalse;
\t\t} else if ( !fn ) {
\t\t\treturn this;
\t\t}

\t\tif ( one === 1 ) {
\t\t\torigFn = fn;
\t\t\tfn = function( event ) {
\t\t\t\t// Can use an empty set, since event contains the info
\t\t\t\tjQuery().off( event );
\t\t\t\treturn origFn.apply( this, arguments );
\t\t\t};
\t\t\t// Use same guid so caller can remove using origFn
\t\t\tfn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
\t\t}
\t\treturn this.each( function() {
\t\t\tjQuery.event.add( this, types, fn, data, selector );
\t\t});
\t},
\tone: function( types, selector, data, fn ) {
\t\treturn this.on( types, selector, data, fn, 1 );
\t},
\toff: function( types, selector, fn ) {
\t\tvar handleObj, type;
\t\tif ( types && types.preventDefault && types.handleObj ) {
\t\t\t// ( event )  dispatched jQuery.Event
\t\t\thandleObj = types.handleObj;
\t\t\tjQuery( types.delegateTarget ).off(
\t\t\t\thandleObj.namespace ? handleObj.origType + \".\" + handleObj.namespace : handleObj.origType,
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
\t\treturn this.each(function() {
\t\t\tjQuery.event.remove( this, types, fn, selector );
\t\t});
\t},

\ttrigger: function( type, data ) {
\t\treturn this.each(function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t});
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[0];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
});

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/event.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/event.js");
    }
}
