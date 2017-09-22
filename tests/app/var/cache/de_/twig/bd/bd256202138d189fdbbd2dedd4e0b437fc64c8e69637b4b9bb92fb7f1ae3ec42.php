<?php

/* node_modules/jquery/src/wrap.js */
class __TwigTemplate_2989049f9ffc52ab4583d04d4db51e9f05d09d15e05365813f39d4753c7f9450 extends Twig_Template
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
        $__internal_eb7a6f382cdd33a06fadb056e93d99330dd126614175ddca0d2664a23b0e430e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7a6f382cdd33a06fadb056e93d99330dd126614175ddca0d2664a23b0e430e->enter($__internal_eb7a6f382cdd33a06fadb056e93d99330dd126614175ddca0d2664a23b0e430e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/wrap.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./core/init\",
\t\"./manipulation\", // clone
\t\"./traversing\" // parent, contents
], function( jQuery ) {

\"use strict\";

jQuery.fn.extend( {
\twrapAll: function( html ) {
\t\tvar wrap;

\t\tif ( this[ 0 ] ) {
\t\t\tif ( jQuery.isFunction( html ) ) {
\t\t\t\thtml = html.call( this[ 0 ] );
\t\t\t}

\t\t\t// The elements to wrap the target around
\t\t\twrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

\t\t\tif ( this[ 0 ].parentNode ) {
\t\t\t\twrap.insertBefore( this[ 0 ] );
\t\t\t}

\t\t\twrap.map( function() {
\t\t\t\tvar elem = this;

\t\t\t\twhile ( elem.firstElementChild ) {
\t\t\t\t\telem = elem.firstElementChild;
\t\t\t\t}

\t\t\t\treturn elem;
\t\t\t} ).append( this );
\t\t}

\t\treturn this;
\t},

\twrapInner: function( html ) {
\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).wrapInner( html.call( this, i ) );
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar self = jQuery( this ),
\t\t\t\tcontents = self.contents();

\t\t\tif ( contents.length ) {
\t\t\t\tcontents.wrapAll( html );

\t\t\t} else {
\t\t\t\tself.append( html );
\t\t\t}
\t\t} );
\t},

\twrap: function( html ) {
\t\tvar isFunction = jQuery.isFunction( html );

\t\treturn this.each( function( i ) {
\t\t\tjQuery( this ).wrapAll( isFunction ? html.call( this, i ) : html );
\t\t} );
\t},

\tunwrap: function( selector ) {
\t\tthis.parent( selector ).not( \"body\" ).each( function() {
\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t} );
\t\treturn this;
\t}
} );

return jQuery;
} );
";
        
        $__internal_eb7a6f382cdd33a06fadb056e93d99330dd126614175ddca0d2664a23b0e430e->leave($__internal_eb7a6f382cdd33a06fadb056e93d99330dd126614175ddca0d2664a23b0e430e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/wrap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./core/init\",
\t\"./manipulation\", // clone
\t\"./traversing\" // parent, contents
], function( jQuery ) {

\"use strict\";

jQuery.fn.extend( {
\twrapAll: function( html ) {
\t\tvar wrap;

\t\tif ( this[ 0 ] ) {
\t\t\tif ( jQuery.isFunction( html ) ) {
\t\t\t\thtml = html.call( this[ 0 ] );
\t\t\t}

\t\t\t// The elements to wrap the target around
\t\t\twrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

\t\t\tif ( this[ 0 ].parentNode ) {
\t\t\t\twrap.insertBefore( this[ 0 ] );
\t\t\t}

\t\t\twrap.map( function() {
\t\t\t\tvar elem = this;

\t\t\t\twhile ( elem.firstElementChild ) {
\t\t\t\t\telem = elem.firstElementChild;
\t\t\t\t}

\t\t\t\treturn elem;
\t\t\t} ).append( this );
\t\t}

\t\treturn this;
\t},

\twrapInner: function( html ) {
\t\tif ( jQuery.isFunction( html ) ) {
\t\t\treturn this.each( function( i ) {
\t\t\t\tjQuery( this ).wrapInner( html.call( this, i ) );
\t\t\t} );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar self = jQuery( this ),
\t\t\t\tcontents = self.contents();

\t\t\tif ( contents.length ) {
\t\t\t\tcontents.wrapAll( html );

\t\t\t} else {
\t\t\t\tself.append( html );
\t\t\t}
\t\t} );
\t},

\twrap: function( html ) {
\t\tvar isFunction = jQuery.isFunction( html );

\t\treturn this.each( function( i ) {
\t\t\tjQuery( this ).wrapAll( isFunction ? html.call( this, i ) : html );
\t\t} );
\t},

\tunwrap: function( selector ) {
\t\tthis.parent( selector ).not( \"body\" ).each( function() {
\t\t\tjQuery( this ).replaceWith( this.childNodes );
\t\t} );
\t\treturn this;
\t}
} );

return jQuery;
} );
", "node_modules/jquery/src/wrap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/wrap.js");
    }
}
