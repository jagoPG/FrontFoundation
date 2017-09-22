<?php

/* node_modules/parsleyjs/bower_components/jquery/src/event/ajax.js */
class __TwigTemplate_0197518e60f1ec3efc39e64af7a348f33202e0b2f90956b8dd038ebd8a94a3bc extends Twig_Template
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
        $__internal_bf0584a0ab5275fd4feba8e2b74c76c06a8838c1d47c8e3de0bfcf8f2198df01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0584a0ab5275fd4feba8e2b74c76c06a8838c1d47c8e3de0bfcf8f2198df01->enter($__internal_bf0584a0ab5275fd4feba8e2b74c76c06a8838c1d47c8e3de0bfcf8f2198df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/event/ajax.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../event\"
], function( jQuery ) {

// Attach a bunch of functions for handling common AJAX events
jQuery.each( [ \"ajaxStart\", \"ajaxStop\", \"ajaxComplete\", \"ajaxError\", \"ajaxSuccess\", \"ajaxSend\" ], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
});

});
";
        
        $__internal_bf0584a0ab5275fd4feba8e2b74c76c06a8838c1d47c8e3de0bfcf8f2198df01->leave($__internal_bf0584a0ab5275fd4feba8e2b74c76c06a8838c1d47c8e3de0bfcf8f2198df01_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/event/ajax.js";
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

// Attach a bunch of functions for handling common AJAX events
jQuery.each( [ \"ajaxStart\", \"ajaxStop\", \"ajaxComplete\", \"ajaxError\", \"ajaxSuccess\", \"ajaxSend\" ], function( i, type ) {
\tjQuery.fn[ type ] = function( fn ) {
\t\treturn this.on( type, fn );
\t};
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/event/ajax.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/event/ajax.js");
    }
}
