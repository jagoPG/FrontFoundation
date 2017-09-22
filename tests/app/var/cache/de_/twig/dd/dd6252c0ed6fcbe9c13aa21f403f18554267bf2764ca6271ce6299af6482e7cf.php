<?php

/* node_modules/jquery/src/event/alias.js */
class __TwigTemplate_d19013688c6bf25fc1c472fa075cde6d86d937fecc28bef538cf380f3c2894b6 extends Twig_Template
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
        $__internal_8ce1f08b2d9d6031f1f598c81792aa987e2eb01264d980b8222795d471a13e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce1f08b2d9d6031f1f598c81792aa987e2eb01264d980b8222795d471a13e67->enter($__internal_8ce1f08b2d9d6031f1f598c81792aa987e2eb01264d980b8222795d471a13e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/event/alias.js"));

        // line 1
        echo "define( [
\t\"../core\",

\t\"../event\",
\t\"./trigger\"
], function( jQuery ) {

\"use strict\";

jQuery.each( ( \"blur focus focusin focusout resize scroll click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup contextmenu\" ).split( \" \" ),
\tfunction( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
} );

jQuery.fn.extend( {
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t}
} );

} );
";
        
        $__internal_8ce1f08b2d9d6031f1f598c81792aa987e2eb01264d980b8222795d471a13e67->leave($__internal_8ce1f08b2d9d6031f1f598c81792aa987e2eb01264d980b8222795d471a13e67_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/event/alias.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",

\t\"../event\",
\t\"./trigger\"
], function( jQuery ) {

\"use strict\";

jQuery.each( ( \"blur focus focusin focusout resize scroll click dblclick \" +
\t\"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave \" +
\t\"change select submit keydown keypress keyup contextmenu\" ).split( \" \" ),
\tfunction( i, name ) {

\t// Handle event binding
\tjQuery.fn[ name ] = function( data, fn ) {
\t\treturn arguments.length > 0 ?
\t\t\tthis.on( name, null, data, fn ) :
\t\t\tthis.trigger( name );
\t};
} );

jQuery.fn.extend( {
\thover: function( fnOver, fnOut ) {
\t\treturn this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
\t}
} );

} );
", "node_modules/jquery/src/event/alias.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/event/alias.js");
    }
}
