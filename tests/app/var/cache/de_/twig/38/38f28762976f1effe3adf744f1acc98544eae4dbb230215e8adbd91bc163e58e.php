<?php

/* node_modules/parsleyjs/bower_components/jquery/src/ajax/parseJSON.js */
class __TwigTemplate_e74a869ecc22c9e9ce40289d0420a6cd8ff73ac15981d7f8fd4dad80074c991b extends Twig_Template
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
        $__internal_4e015b7f153ccefaec30de89ff103ad44a77a07ae73c46a5d093291ba46b11b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e015b7f153ccefaec30de89ff103ad44a77a07ae73c46a5d093291ba46b11b9->enter($__internal_4e015b7f153ccefaec30de89ff103ad44a77a07ae73c46a5d093291ba46b11b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/ajax/parseJSON.js"));

        // line 1
        echo "define([
\t\"../core\"
], function( jQuery ) {

// Support: Android 2.3
// Workaround failure to string-cast null input
jQuery.parseJSON = function( data ) {
\treturn JSON.parse( data + \"\" );
};

return jQuery.parseJSON;

});
";
        
        $__internal_4e015b7f153ccefaec30de89ff103ad44a77a07ae73c46a5d093291ba46b11b9->leave($__internal_4e015b7f153ccefaec30de89ff103ad44a77a07ae73c46a5d093291ba46b11b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/ajax/parseJSON.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\"
], function( jQuery ) {

// Support: Android 2.3
// Workaround failure to string-cast null input
jQuery.parseJSON = function( data ) {
\treturn JSON.parse( data + \"\" );
};

return jQuery.parseJSON;

});
", "node_modules/parsleyjs/bower_components/jquery/src/ajax/parseJSON.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/ajax/parseJSON.js");
    }
}
