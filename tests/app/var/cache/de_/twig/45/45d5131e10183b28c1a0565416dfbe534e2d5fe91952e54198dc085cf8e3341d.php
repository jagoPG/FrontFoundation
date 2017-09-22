<?php

/* node_modules/parsleyjs/bower_components/jquery/src/core/parseHTML.js */
class __TwigTemplate_30556aeaa873a4f3e29920253687a4ad29756e7a7d480819d6058d03c3ce58af extends Twig_Template
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
        $__internal_6573fdbc331cc65e91ff9e37b0897229542c42aebe61b4cbd66ac1298995e441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6573fdbc331cc65e91ff9e37b0897229542c42aebe61b4cbd66ac1298995e441->enter($__internal_6573fdbc331cc65e91ff9e37b0897229542c42aebe61b4cbd66ac1298995e441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/core/parseHTML.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"./var/rsingleTag\",
\t\"../manipulation\" // buildFragment
], function( jQuery, rsingleTag ) {

// data: string of html
// context (optional): If specified, the fragment will be created in this context, defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}
\tcontext = context || document;

\tvar parsed = rsingleTag.exec( data ),
\t\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[1] ) ];
\t}

\tparsed = jQuery.buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};

return jQuery.parseHTML;

});
";
        
        $__internal_6573fdbc331cc65e91ff9e37b0897229542c42aebe61b4cbd66ac1298995e441->leave($__internal_6573fdbc331cc65e91ff9e37b0897229542c42aebe61b4cbd66ac1298995e441_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/core/parseHTML.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"./var/rsingleTag\",
\t\"../manipulation\" // buildFragment
], function( jQuery, rsingleTag ) {

// data: string of html
// context (optional): If specified, the fragment will be created in this context, defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}
\tif ( typeof context === \"boolean\" ) {
\t\tkeepScripts = context;
\t\tcontext = false;
\t}
\tcontext = context || document;

\tvar parsed = rsingleTag.exec( data ),
\t\tscripts = !keepScripts && [];

\t// Single tag
\tif ( parsed ) {
\t\treturn [ context.createElement( parsed[1] ) ];
\t}

\tparsed = jQuery.buildFragment( [ data ], context, scripts );

\tif ( scripts && scripts.length ) {
\t\tjQuery( scripts ).remove();
\t}

\treturn jQuery.merge( [], parsed.childNodes );
};

return jQuery.parseHTML;

});
", "node_modules/parsleyjs/bower_components/jquery/src/core/parseHTML.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/core/parseHTML.js");
    }
}
