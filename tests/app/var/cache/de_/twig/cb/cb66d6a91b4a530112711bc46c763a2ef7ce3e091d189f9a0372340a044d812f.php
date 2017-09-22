<?php

/* node_modules/parsleyjs/bower_components/jquery/src/event/alias.js */
class __TwigTemplate_c3238e38d1780ed893dcfe64c79e004551013b36ebd9d15874aff10f24a78738 extends Twig_Template
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
        $__internal_06f9415b5e3ab0b8899af5844540a94da89d3192c6510ba8244847ea255877e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f9415b5e3ab0b8899af5844540a94da89d3192c6510ba8244847ea255877e2->enter($__internal_06f9415b5e3ab0b8899af5844540a94da89d3192c6510ba8244847ea255877e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/event/alias.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../event\"
], function( jQuery ) {

jQuery.each( (\"blur focus focusin focusout load resize scroll unload click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup error contextmenu\").split(\" \"), function( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
});

jQuery.fn.extend({
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t},

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {
\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ? this.off( selector, \"**\" ) : this.off( types, selector || \"**\", fn );
\t}
});

});
";
        
        $__internal_06f9415b5e3ab0b8899af5844540a94da89d3192c6510ba8244847ea255877e2->leave($__internal_06f9415b5e3ab0b8899af5844540a94da89d3192c6510ba8244847ea255877e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/event/alias.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../event\"
], function( jQuery ) {

jQuery.each( (\"blur focus focusin focusout load resize scroll unload click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup error contextmenu\").split(\" \"), function( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
});

jQuery.fn.extend({
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t},

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {
\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ? this.off( selector, \"**\" ) : this.off( types, selector || \"**\", fn );
\t}
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/event/alias.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/event/alias.js");
    }
}
