<?php

/* node_modules/jquery/src/event/ajax.js */
class __TwigTemplate_f60d424cd970258eee2456600a5aa49947c82580a88d5d01f0f234a1ce3cb781 extends Twig_Template
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
        $__internal_520e06b54c65b81e2099694b6d948649ec97e1d20030548a7ad0a5b1658cb00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520e06b54c65b81e2099694b6d948649ec97e1d20030548a7ad0a5b1658cb00e->enter($__internal_520e06b54c65b81e2099694b6d948649ec97e1d20030548a7ad0a5b1658cb00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/event/ajax.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../event\"
], function( jQuery ) {

\"use strict\";

// Attach a bunch of functions for handling common AJAX events
jQuery.each( [
\t\"ajaxStart\",
\t\"ajaxStop\",
\t\"ajaxComplete\",
\t\"ajaxError\",
\t\"ajaxSuccess\",
\t\"ajaxSend\"
], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
} );

} );
";
        
        $__internal_520e06b54c65b81e2099694b6d948649ec97e1d20030548a7ad0a5b1658cb00e->leave($__internal_520e06b54c65b81e2099694b6d948649ec97e1d20030548a7ad0a5b1658cb00e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/event/ajax.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../event\"
], function( jQuery ) {

\"use strict\";

// Attach a bunch of functions for handling common AJAX events
jQuery.each( [
\t\"ajaxStart\",
\t\"ajaxStop\",
\t\"ajaxComplete\",
\t\"ajaxError\",
\t\"ajaxSuccess\",
\t\"ajaxSend\"
], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
} );

} );
", "node_modules/jquery/src/event/ajax.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/event/ajax.js");
    }
}
