<?php

/* node_modules/jquery/src/core/parseHTML.js */
class __TwigTemplate_b24b5653af861c21ff0a78a25d2cb61fcadb8619a60d00d7fbe3ae9e4f2c5445 extends Twig_Template
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
        $__internal_8059e480ee32f82d8f2fd2bbc7be830685030bf54f5f164c7ac43c7625ae2132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8059e480ee32f82d8f2fd2bbc7be830685030bf54f5f164c7ac43c7625ae2132->enter($__internal_8059e480ee32f82d8f2fd2bbc7be830685030bf54f5f164c7ac43c7625ae2132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/parseHTML.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/document\",
\t\"./var/rsingleTag\",
\t\"../manipulation/buildFragment\",

\t// This is the only module that needs core/support
\t\"./support\"
], function( jQuery, document, rsingleTag, buildFragment, support ) {

\"use strict\";

// Argument \"data\" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( typeof data !== \"string\" ) {
\t\treturn [];
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}

\tvar base, parsed, scripts;

\tif ( !context ) {

\t\t// Stop scripts or inline event handlers from being executed immediately
\t\t// by using document.implementation
\t\tif ( support.createHTMLDocument ) {
\t\t\tcontext = document.implementation.createHTMLDocument( \"\" );

\t\t\t// Set the base href for the created document
\t\t\t// so any parsed elements with URLs
\t\t\t// are based on the document's URL (gh-2965)
\t\t\tbase = context.createElement( \"base\" );
\t\t\tbase.href = document.location.href;
\t\t\tcontext.head.appendChild( base );
\t\t} else {
\t\t\tcontext = document;
\t\t}
\t}

\tparsed = rsingleTag.exec( data );
\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[ 1 ] ) ];
\t}

\tparsed = buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};

return jQuery.parseHTML;

} );
";
        
        $__internal_8059e480ee32f82d8f2fd2bbc7be830685030bf54f5f164c7ac43c7625ae2132->leave($__internal_8059e480ee32f82d8f2fd2bbc7be830685030bf54f5f164c7ac43c7625ae2132_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/parseHTML.js";
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
\t\"./var/rsingleTag\",
\t\"../manipulation/buildFragment\",

\t// This is the only module that needs core/support
\t\"./support\"
], function( jQuery, document, rsingleTag, buildFragment, support ) {

\"use strict\";

// Argument \"data\" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( typeof data !== \"string\" ) {
\t\treturn [];
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}

\tvar base, parsed, scripts;

\tif ( !context ) {

\t\t// Stop scripts or inline event handlers from being executed immediately
\t\t// by using document.implementation
\t\tif ( support.createHTMLDocument ) {
\t\t\tcontext = document.implementation.createHTMLDocument( \"\" );

\t\t\t// Set the base href for the created document
\t\t\t// so any parsed elements with URLs
\t\t\t// are based on the document's URL (gh-2965)
\t\t\tbase = context.createElement( \"base\" );
\t\t\tbase.href = document.location.href;
\t\t\tcontext.head.appendChild( base );
\t\t} else {
\t\t\tcontext = document;
\t\t}
\t}

\tparsed = rsingleTag.exec( data );
\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[ 1 ] ) ];
\t}

\tparsed = buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};

return jQuery.parseHTML;

} );
", "node_modules/jquery/src/core/parseHTML.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/parseHTML.js");
    }
}
