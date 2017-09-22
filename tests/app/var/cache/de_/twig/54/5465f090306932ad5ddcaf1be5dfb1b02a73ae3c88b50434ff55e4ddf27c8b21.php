<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css/defaultDisplay.js */
class __TwigTemplate_923b087fb20cad27731605a33ffa6f8bee52249d7374cc914608987977880d3b extends Twig_Template
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
        $__internal_1b909254f7ca4ecd8671303fdb9adb171b5f55f12179c7330ee940ecb5b72061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b909254f7ca4ecd8671303fdb9adb171b5f55f12179c7330ee940ecb5b72061->enter($__internal_1b909254f7ca4ecd8671303fdb9adb171b5f55f12179c7330ee940ecb5b72061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css/defaultDisplay.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../manipulation\" // appendTo
], function( jQuery ) {

var iframe,
\telemdisplay = {};

/**
 * Retrieve the actual display of a element
 * @param {String} name nodeName of the element
 * @param {Object} doc Document object
 */
// Called only from within defaultDisplay
function actualDisplay( name, doc ) {
\tvar style,
\t\telem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),

\t\t// getDefaultComputedStyle might be reliably used only on attached element
\t\tdisplay = window.getDefaultComputedStyle && ( style = window.getDefaultComputedStyle( elem[ 0 ] ) ) ?

\t\t\t// Use of this method is a temporary fix (more like optimization) until something better comes along,
\t\t\t// since it was removed from specification and supported only in FF
\t\t\tstyle.display : jQuery.css( elem[ 0 ], \"display\" );

\t// We don't have any data stored on the element,
\t// so use \"detach\" method as fast way to get rid of the element
\telem.detach();

\treturn display;
}

/**
 * Try to determine the default display value of an element
 * @param {String} nodeName
 */
function defaultDisplay( nodeName ) {
\tvar doc = document,
\t\tdisplay = elemdisplay[ nodeName ];

\tif ( !display ) {
\t\tdisplay = actualDisplay( nodeName, doc );

\t\t// If the simple way fails, read from inside an iframe
\t\tif ( display === \"none\" || !display ) {

\t\t\t// Use the already-created iframe if possible
\t\t\tiframe = (iframe || jQuery( \"<iframe frameborder='0' width='0' height='0'/>\" )).appendTo( doc.documentElement );

\t\t\t// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse
\t\t\tdoc = iframe[ 0 ].contentDocument;

\t\t\t// Support: IE
\t\t\tdoc.write();
\t\t\tdoc.close();

\t\t\tdisplay = actualDisplay( nodeName, doc );
\t\t\tiframe.detach();
\t\t}

\t\t// Store the correct default display
\t\telemdisplay[ nodeName ] = display;
\t}

\treturn display;
}

return defaultDisplay;

});
";
        
        $__internal_1b909254f7ca4ecd8671303fdb9adb171b5f55f12179c7330ee940ecb5b72061->leave($__internal_1b909254f7ca4ecd8671303fdb9adb171b5f55f12179c7330ee940ecb5b72061_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css/defaultDisplay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../manipulation\" // appendTo
], function( jQuery ) {

var iframe,
\telemdisplay = {};

/**
 * Retrieve the actual display of a element
 * @param {String} name nodeName of the element
 * @param {Object} doc Document object
 */
// Called only from within defaultDisplay
function actualDisplay( name, doc ) {
\tvar style,
\t\telem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),

\t\t// getDefaultComputedStyle might be reliably used only on attached element
\t\tdisplay = window.getDefaultComputedStyle && ( style = window.getDefaultComputedStyle( elem[ 0 ] ) ) ?

\t\t\t// Use of this method is a temporary fix (more like optimization) until something better comes along,
\t\t\t// since it was removed from specification and supported only in FF
\t\t\tstyle.display : jQuery.css( elem[ 0 ], \"display\" );

\t// We don't have any data stored on the element,
\t// so use \"detach\" method as fast way to get rid of the element
\telem.detach();

\treturn display;
}

/**
 * Try to determine the default display value of an element
 * @param {String} nodeName
 */
function defaultDisplay( nodeName ) {
\tvar doc = document,
\t\tdisplay = elemdisplay[ nodeName ];

\tif ( !display ) {
\t\tdisplay = actualDisplay( nodeName, doc );

\t\t// If the simple way fails, read from inside an iframe
\t\tif ( display === \"none\" || !display ) {

\t\t\t// Use the already-created iframe if possible
\t\t\tiframe = (iframe || jQuery( \"<iframe frameborder='0' width='0' height='0'/>\" )).appendTo( doc.documentElement );

\t\t\t// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse
\t\t\tdoc = iframe[ 0 ].contentDocument;

\t\t\t// Support: IE
\t\t\tdoc.write();
\t\t\tdoc.close();

\t\t\tdisplay = actualDisplay( nodeName, doc );
\t\t\tiframe.detach();
\t\t}

\t\t// Store the correct default display
\t\telemdisplay[ nodeName ] = display;
\t}

\treturn display;
}

return defaultDisplay;

});
", "node_modules/parsleyjs/bower_components/jquery/src/css/defaultDisplay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css/defaultDisplay.js");
    }
}
