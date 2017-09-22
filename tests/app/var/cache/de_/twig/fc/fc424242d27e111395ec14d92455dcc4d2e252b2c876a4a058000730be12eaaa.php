<?php

/* node_modules/parsleyjs/bower_components/jquery/src/exports/amd.js */
class __TwigTemplate_d753a67d1d6617f8bd5b634214f7ed2cb982949aa5fae7442337c582e974e8ea extends Twig_Template
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
        $__internal_1a6fb7c7251d0f17fca000506597bf7c75dab6240ff6e039ce80c6515d61a8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6fb7c7251d0f17fca000506597bf7c75dab6240ff6e039ce80c6515d61a8c1->enter($__internal_1a6fb7c7251d0f17fca000506597bf7c75dab6240ff6e039ce80c6515d61a8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/exports/amd.js"));

        // line 1
        echo "define([
\t\"../core\"
], function( jQuery ) {

// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === \"function\" && define.amd ) {
\tdefine( \"jquery\", [], function() {
\t\treturn jQuery;
\t});
}

});
";
        
        $__internal_1a6fb7c7251d0f17fca000506597bf7c75dab6240ff6e039ce80c6515d61a8c1->leave($__internal_1a6fb7c7251d0f17fca000506597bf7c75dab6240ff6e039ce80c6515d61a8c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/exports/amd.js";
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

// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === \"function\" && define.amd ) {
\tdefine( \"jquery\", [], function() {
\t\treturn jQuery;
\t});
}

});
", "node_modules/parsleyjs/bower_components/jquery/src/exports/amd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/exports/amd.js");
    }
}
