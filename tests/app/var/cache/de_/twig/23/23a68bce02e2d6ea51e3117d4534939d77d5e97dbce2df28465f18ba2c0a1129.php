<?php

/* node_modules/jquery/src/event/focusin.js */
class __TwigTemplate_d7f8fbb714bef7b700fd39917f80614b39e3ff83741ae0072afc0361b6a300d5 extends Twig_Template
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
        $__internal_f5a11db05b75146db0549ae55f7e883e2c56c15e3a65aaf0db93beb630171e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a11db05b75146db0549ae55f7e883e2c56c15e3a65aaf0db93beb630171e6e->enter($__internal_f5a11db05b75146db0549ae55f7e883e2c56c15e3a65aaf0db93beb630171e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/event/focusin.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../data/var/dataPriv\",
\t\"./support\",

\t\"../event\",
\t\"./trigger\"
], function( jQuery, dataPriv, support ) {

\"use strict\";

// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
\tjQuery.each( { focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = dataPriv.access( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tdataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = dataPriv.access( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tdataPriv.remove( doc, fix );

\t\t\t\t} else {
\t\t\t\t\tdataPriv.access( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t} );
}

return jQuery;
} );
";
        
        $__internal_f5a11db05b75146db0549ae55f7e883e2c56c15e3a65aaf0db93beb630171e6e->leave($__internal_f5a11db05b75146db0549ae55f7e883e2c56c15e3a65aaf0db93beb630171e6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/event/focusin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../data/var/dataPriv\",
\t\"./support\",

\t\"../event\",
\t\"./trigger\"
], function( jQuery, dataPriv, support ) {

\"use strict\";

// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
\tjQuery.each( { focus: \"focusin\", blur: \"focusout\" }, function( orig, fix ) {

\t\t// Attach a single capturing handler on the document while someone wants focusin/focusout
\t\tvar handler = function( event ) {
\t\t\tjQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
\t\t};

\t\tjQuery.event.special[ fix ] = {
\t\t\tsetup: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = dataPriv.access( doc, fix );

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.addEventListener( orig, handler, true );
\t\t\t\t}
\t\t\t\tdataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
\t\t\t},
\t\t\tteardown: function() {
\t\t\t\tvar doc = this.ownerDocument || this,
\t\t\t\t\tattaches = dataPriv.access( doc, fix ) - 1;

\t\t\t\tif ( !attaches ) {
\t\t\t\t\tdoc.removeEventListener( orig, handler, true );
\t\t\t\t\tdataPriv.remove( doc, fix );

\t\t\t\t} else {
\t\t\t\t\tdataPriv.access( doc, fix, attaches );
\t\t\t\t}
\t\t\t}
\t\t};
\t} );
}

return jQuery;
} );
", "node_modules/jquery/src/event/focusin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/event/focusin.js");
    }
}
