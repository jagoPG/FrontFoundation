<?php

/* node_modules/jquery/src/css/showHide.js */
class __TwigTemplate_717c6fbaa7dca63be4bf0e907d14dd25119c3d283a52a56fe1a83b111365f6ca extends Twig_Template
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
        $__internal_b7e09f3c83d7c736b8211f2315c2c04ac2530e4403499e15940b9cd333238bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e09f3c83d7c736b8211f2315c2c04ac2530e4403499e15940b9cd333238bbd->enter($__internal_b7e09f3c83d7c736b8211f2315c2c04ac2530e4403499e15940b9cd333238bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/showHide.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../data/var/dataPriv\",
\t\"../css/var/isHiddenWithinTree\"
], function( jQuery, dataPriv, isHiddenWithinTree ) {

\"use strict\";

var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
\tvar temp,
\t\tdoc = elem.ownerDocument,
\t\tnodeName = elem.nodeName,
\t\tdisplay = defaultDisplayMap[ nodeName ];

\tif ( display ) {
\t\treturn display;
\t}

\ttemp = doc.body.appendChild( doc.createElement( nodeName ) );
\tdisplay = jQuery.css( temp, \"display\" );

\ttemp.parentNode.removeChild( temp );

\tif ( display === \"none\" ) {
\t\tdisplay = \"block\";
\t}
\tdefaultDisplayMap[ nodeName ] = display;

\treturn display;
}

function showHide( elements, show ) {
\tvar display, elem,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\t// Determine new display value for elements that need to change
\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tdisplay = elem.style.display;
\t\tif ( show ) {

\t\t\t// Since we force visibility upon cascade-hidden elements, an immediate (and slow)
\t\t\t// check is required in this first loop unless we have a nonempty display value (either
\t\t\t// inline or about-to-be-restored)
\t\t\tif ( display === \"none\" ) {
\t\t\t\tvalues[ index ] = dataPriv.get( elem, \"display\" ) || null;
\t\t\t\tif ( !values[ index ] ) {
\t\t\t\t\telem.style.display = \"\";
\t\t\t\t}
\t\t\t}
\t\t\tif ( elem.style.display === \"\" && isHiddenWithinTree( elem ) ) {
\t\t\t\tvalues[ index ] = getDefaultDisplay( elem );
\t\t\t}
\t\t} else {
\t\t\tif ( display !== \"none\" ) {
\t\t\t\tvalues[ index ] = \"none\";

\t\t\t\t// Remember what we're overwriting
\t\t\t\tdataPriv.set( elem, \"display\", display );
\t\t\t}
\t\t}
\t}

\t// Set the display of the elements in a second loop to avoid constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\tif ( values[ index ] != null ) {
\t\t\telements[ index ].style.display = values[ index ];
\t\t}
\t}

\treturn elements;
}

jQuery.fn.extend( {
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each( function() {
\t\t\tif ( isHiddenWithinTree( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t} );
\t}
} );

return showHide;
} );
";
        
        $__internal_b7e09f3c83d7c736b8211f2315c2c04ac2530e4403499e15940b9cd333238bbd->leave($__internal_b7e09f3c83d7c736b8211f2315c2c04ac2530e4403499e15940b9cd333238bbd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/showHide.js";
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
\t\"../css/var/isHiddenWithinTree\"
], function( jQuery, dataPriv, isHiddenWithinTree ) {

\"use strict\";

var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
\tvar temp,
\t\tdoc = elem.ownerDocument,
\t\tnodeName = elem.nodeName,
\t\tdisplay = defaultDisplayMap[ nodeName ];

\tif ( display ) {
\t\treturn display;
\t}

\ttemp = doc.body.appendChild( doc.createElement( nodeName ) );
\tdisplay = jQuery.css( temp, \"display\" );

\ttemp.parentNode.removeChild( temp );

\tif ( display === \"none\" ) {
\t\tdisplay = \"block\";
\t}
\tdefaultDisplayMap[ nodeName ] = display;

\treturn display;
}

function showHide( elements, show ) {
\tvar display, elem,
\t\tvalues = [],
\t\tindex = 0,
\t\tlength = elements.length;

\t// Determine new display value for elements that need to change
\tfor ( ; index < length; index++ ) {
\t\telem = elements[ index ];
\t\tif ( !elem.style ) {
\t\t\tcontinue;
\t\t}

\t\tdisplay = elem.style.display;
\t\tif ( show ) {

\t\t\t// Since we force visibility upon cascade-hidden elements, an immediate (and slow)
\t\t\t// check is required in this first loop unless we have a nonempty display value (either
\t\t\t// inline or about-to-be-restored)
\t\t\tif ( display === \"none\" ) {
\t\t\t\tvalues[ index ] = dataPriv.get( elem, \"display\" ) || null;
\t\t\t\tif ( !values[ index ] ) {
\t\t\t\t\telem.style.display = \"\";
\t\t\t\t}
\t\t\t}
\t\t\tif ( elem.style.display === \"\" && isHiddenWithinTree( elem ) ) {
\t\t\t\tvalues[ index ] = getDefaultDisplay( elem );
\t\t\t}
\t\t} else {
\t\t\tif ( display !== \"none\" ) {
\t\t\t\tvalues[ index ] = \"none\";

\t\t\t\t// Remember what we're overwriting
\t\t\t\tdataPriv.set( elem, \"display\", display );
\t\t\t}
\t\t}
\t}

\t// Set the display of the elements in a second loop to avoid constant reflow
\tfor ( index = 0; index < length; index++ ) {
\t\tif ( values[ index ] != null ) {
\t\t\telements[ index ].style.display = values[ index ];
\t\t}
\t}

\treturn elements;
}

jQuery.fn.extend( {
\tshow: function() {
\t\treturn showHide( this, true );
\t},
\thide: function() {
\t\treturn showHide( this );
\t},
\ttoggle: function( state ) {
\t\tif ( typeof state === \"boolean\" ) {
\t\t\treturn state ? this.show() : this.hide();
\t\t}

\t\treturn this.each( function() {
\t\t\tif ( isHiddenWithinTree( this ) ) {
\t\t\t\tjQuery( this ).show();
\t\t\t} else {
\t\t\t\tjQuery( this ).hide();
\t\t\t}
\t\t} );
\t}
} );

return showHide;
} );
", "node_modules/jquery/src/css/showHide.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/showHide.js");
    }
}
