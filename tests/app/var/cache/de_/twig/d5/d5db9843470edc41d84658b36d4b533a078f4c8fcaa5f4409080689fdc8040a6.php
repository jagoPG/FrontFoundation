<?php

/* node_modules/jquery/src/event/trigger.js */
class __TwigTemplate_9c79d0b542c3d61d94e8b36024695e2b9c4e1dc16cac09a5f5cfe8798e5f957d extends Twig_Template
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
        $__internal_204bede2dfa9eaab94a0d0c905f8793a4daa9a6d88a25468ed80a32b6432f567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204bede2dfa9eaab94a0d0c905f8793a4daa9a6d88a25468ed80a32b6432f567->enter($__internal_204bede2dfa9eaab94a0d0c905f8793a4daa9a6d88a25468ed80a32b6432f567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/event/trigger.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/document\",
\t\"../data/var/dataPriv\",
\t\"../data/var/acceptData\",
\t\"../var/hasOwn\",

\t\"../event\"
], function( jQuery, document, dataPriv, acceptData, hasOwn ) {

\"use strict\";

var rfocusMorph = /^(?:focusinfocus|focusoutblur)\$/;

jQuery.extend( jQuery.event, {

\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\tvar i, cur, tmp, bubbleType, ontype, handle, special,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split( \".\" ) : [];

\t\tcur = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf( \".\" ) > -1 ) {

\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split( \".\" );
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf( \":\" ) < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join( \".\" );
\t\tevent.rnamespace = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" ) :
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
\t\t\tif ( tmp === ( elem.ownerDocument || document ) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {

\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( dataPriv.get( cur, \"events\" ) || {} )[ event.type ] &&
\t\t\t\tdataPriv.get( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( ( !special._default ||
\t\t\t\tspecial._default.apply( eventPath.pop(), data ) === false ) &&
\t\t\t\tacceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name as the event.
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

\t// Piggyback on a donor event to simulate a different one
\t// Used only for `focus(in | out)` events
\tsimulate: function( type, elem, event ) {
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true
\t\t\t}
\t\t);

\t\tjQuery.event.trigger( e, null, elem );
\t}

} );

jQuery.fn.extend( {

\ttrigger: function( type, data ) {
\t\treturn this.each( function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t} );
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[ 0 ];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
} );

return jQuery;
} );
";
        
        $__internal_204bede2dfa9eaab94a0d0c905f8793a4daa9a6d88a25468ed80a32b6432f567->leave($__internal_204bede2dfa9eaab94a0d0c905f8793a4daa9a6d88a25468ed80a32b6432f567_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/event/trigger.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../var/document\",
\t\"../data/var/dataPriv\",
\t\"../data/var/acceptData\",
\t\"../var/hasOwn\",

\t\"../event\"
], function( jQuery, document, dataPriv, acceptData, hasOwn ) {

\"use strict\";

var rfocusMorph = /^(?:focusinfocus|focusoutblur)\$/;

jQuery.extend( jQuery.event, {

\ttrigger: function( event, data, elem, onlyHandlers ) {

\t\tvar i, cur, tmp, bubbleType, ontype, handle, special,
\t\t\teventPath = [ elem || document ],
\t\t\ttype = hasOwn.call( event, \"type\" ) ? event.type : event,
\t\t\tnamespaces = hasOwn.call( event, \"namespace\" ) ? event.namespace.split( \".\" ) : [];

\t\tcur = tmp = elem = elem || document;

\t\t// Don't do events on text and comment nodes
\t\tif ( elem.nodeType === 3 || elem.nodeType === 8 ) {
\t\t\treturn;
\t\t}

\t\t// focus/blur morphs to focusin/out; ensure we're not firing them right now
\t\tif ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
\t\t\treturn;
\t\t}

\t\tif ( type.indexOf( \".\" ) > -1 ) {

\t\t\t// Namespaced trigger; create a regexp to match event type in handle()
\t\t\tnamespaces = type.split( \".\" );
\t\t\ttype = namespaces.shift();
\t\t\tnamespaces.sort();
\t\t}
\t\tontype = type.indexOf( \":\" ) < 0 && \"on\" + type;

\t\t// Caller can pass in a jQuery.Event object, Object, or just an event type string
\t\tevent = event[ jQuery.expando ] ?
\t\t\tevent :
\t\t\tnew jQuery.Event( type, typeof event === \"object\" && event );

\t\t// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
\t\tevent.isTrigger = onlyHandlers ? 2 : 3;
\t\tevent.namespace = namespaces.join( \".\" );
\t\tevent.rnamespace = event.namespace ?
\t\t\tnew RegExp( \"(^|\\\\.)\" + namespaces.join( \"\\\\.(?:.*\\\\.|)\" ) + \"(\\\\.|\$)\" ) :
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
\t\t\tif ( tmp === ( elem.ownerDocument || document ) ) {
\t\t\t\teventPath.push( tmp.defaultView || tmp.parentWindow || window );
\t\t\t}
\t\t}

\t\t// Fire handlers on the event path
\t\ti = 0;
\t\twhile ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {

\t\t\tevent.type = i > 1 ?
\t\t\t\tbubbleType :
\t\t\t\tspecial.bindType || type;

\t\t\t// jQuery handler
\t\t\thandle = ( dataPriv.get( cur, \"events\" ) || {} )[ event.type ] &&
\t\t\t\tdataPriv.get( cur, \"handle\" );
\t\t\tif ( handle ) {
\t\t\t\thandle.apply( cur, data );
\t\t\t}

\t\t\t// Native handler
\t\t\thandle = ontype && cur[ ontype ];
\t\t\tif ( handle && handle.apply && acceptData( cur ) ) {
\t\t\t\tevent.result = handle.apply( cur, data );
\t\t\t\tif ( event.result === false ) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t}
\t\t\t}
\t\t}
\t\tevent.type = type;

\t\t// If nobody prevented the default action, do it now
\t\tif ( !onlyHandlers && !event.isDefaultPrevented() ) {

\t\t\tif ( ( !special._default ||
\t\t\t\tspecial._default.apply( eventPath.pop(), data ) === false ) &&
\t\t\t\tacceptData( elem ) ) {

\t\t\t\t// Call a native DOM method on the target with the same name as the event.
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

\t// Piggyback on a donor event to simulate a different one
\t// Used only for `focus(in | out)` events
\tsimulate: function( type, elem, event ) {
\t\tvar e = jQuery.extend(
\t\t\tnew jQuery.Event(),
\t\t\tevent,
\t\t\t{
\t\t\t\ttype: type,
\t\t\t\tisSimulated: true
\t\t\t}
\t\t);

\t\tjQuery.event.trigger( e, null, elem );
\t}

} );

jQuery.fn.extend( {

\ttrigger: function( type, data ) {
\t\treturn this.each( function() {
\t\t\tjQuery.event.trigger( type, data, this );
\t\t} );
\t},
\ttriggerHandler: function( type, data ) {
\t\tvar elem = this[ 0 ];
\t\tif ( elem ) {
\t\t\treturn jQuery.event.trigger( type, data, elem, true );
\t\t}
\t}
} );

return jQuery;
} );
", "node_modules/jquery/src/event/trigger.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/event/trigger.js");
    }
}
