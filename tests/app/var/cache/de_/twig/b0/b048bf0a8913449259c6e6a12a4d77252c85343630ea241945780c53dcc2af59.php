<?php

/* node_modules/jquery/src/dimensions.js */
class __TwigTemplate_0e306498ce9edc48783b670362c1a8c12941585b6be85323dd5f359191d6a21c extends Twig_Template
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
        $__internal_814fbca1c1c47addd8e8a8c987d0703493858a6524119d27b545c8a2fb9507b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814fbca1c1c47addd8e8a8c987d0703493858a6524119d27b545c8a2fb9507b0->enter($__internal_814fbca1c1c47addd8e8a8c987d0703493858a6524119d27b545c8a2fb9507b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/dimensions.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./core/access\",
\t\"./css\"
], function( jQuery, access ) {

\"use strict\";

// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name },
\t\tfunction( defaultExtra, funcName ) {

\t\t// Margin is only for outerHeight, outerWidth
\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\treturn access( this, function( elem, type, value ) {
\t\t\t\tvar doc;

\t\t\t\tif ( jQuery.isWindow( elem ) ) {

\t\t\t\t\t// \$( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
\t\t\t\t\treturn funcName.indexOf( \"outer\" ) === 0 ?
\t\t\t\t\t\telem[ \"inner\" + name ] :
\t\t\t\t\t\telem.document.documentElement[ \"client\" + name ];
\t\t\t\t}

\t\t\t\t// Get document width or height
\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
\t\t\t\t\t// whichever is greatest
\t\t\t\t\treturn Math.max(
\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\treturn value === undefined ?

\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t// Set width or height on the element
\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t}, type, chainable ? margin : undefined, chainable );
\t\t};
\t} );
} );

return jQuery;
} );
";
        
        $__internal_814fbca1c1c47addd8e8a8c987d0703493858a6524119d27b545c8a2fb9507b0->leave($__internal_814fbca1c1c47addd8e8a8c987d0703493858a6524119d27b545c8a2fb9507b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/dimensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./core/access\",
\t\"./css\"
], function( jQuery, access ) {

\"use strict\";

// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: \"height\", Width: \"width\" }, function( name, type ) {
\tjQuery.each( { padding: \"inner\" + name, content: type, \"\": \"outer\" + name },
\t\tfunction( defaultExtra, funcName ) {

\t\t// Margin is only for outerHeight, outerWidth
\t\tjQuery.fn[ funcName ] = function( margin, value ) {
\t\t\tvar chainable = arguments.length && ( defaultExtra || typeof margin !== \"boolean\" ),
\t\t\t\textra = defaultExtra || ( margin === true || value === true ? \"margin\" : \"border\" );

\t\t\treturn access( this, function( elem, type, value ) {
\t\t\t\tvar doc;

\t\t\t\tif ( jQuery.isWindow( elem ) ) {

\t\t\t\t\t// \$( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
\t\t\t\t\treturn funcName.indexOf( \"outer\" ) === 0 ?
\t\t\t\t\t\telem[ \"inner\" + name ] :
\t\t\t\t\t\telem.document.documentElement[ \"client\" + name ];
\t\t\t\t}

\t\t\t\t// Get document width or height
\t\t\t\tif ( elem.nodeType === 9 ) {
\t\t\t\t\tdoc = elem.documentElement;

\t\t\t\t\t// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
\t\t\t\t\t// whichever is greatest
\t\t\t\t\treturn Math.max(
\t\t\t\t\t\telem.body[ \"scroll\" + name ], doc[ \"scroll\" + name ],
\t\t\t\t\t\telem.body[ \"offset\" + name ], doc[ \"offset\" + name ],
\t\t\t\t\t\tdoc[ \"client\" + name ]
\t\t\t\t\t);
\t\t\t\t}

\t\t\t\treturn value === undefined ?

\t\t\t\t\t// Get width or height on the element, requesting but not forcing parseFloat
\t\t\t\t\tjQuery.css( elem, type, extra ) :

\t\t\t\t\t// Set width or height on the element
\t\t\t\t\tjQuery.style( elem, type, value, extra );
\t\t\t}, type, chainable ? margin : undefined, chainable );
\t\t};
\t} );
} );

return jQuery;
} );
", "node_modules/jquery/src/dimensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/dimensions.js");
    }
}
