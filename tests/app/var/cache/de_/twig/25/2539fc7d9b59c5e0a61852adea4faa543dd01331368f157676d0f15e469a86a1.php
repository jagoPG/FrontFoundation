<?php

/* node_modules/jquery/src/exports/amd.js */
class __TwigTemplate_0f9213e9d2c2365928e5713ab068fb1080d1208ace4a6ca29bf487f8688e1387 extends Twig_Template
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
        $__internal_dc8411863d5c0868b8206dd6dcf76851bff06da79dd4d07a1a811d43b95673a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8411863d5c0868b8206dd6dcf76851bff06da79dd4d07a1a811d43b95673a8->enter($__internal_dc8411863d5c0868b8206dd6dcf76851bff06da79dd4d07a1a811d43b95673a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/exports/amd.js"));

        // line 1
        echo "define( [
\t\"../core\"
], function( jQuery ) {

\"use strict\";

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
\t} );
}

} );
";
        
        $__internal_dc8411863d5c0868b8206dd6dcf76851bff06da79dd4d07a1a811d43b95673a8->leave($__internal_dc8411863d5c0868b8206dd6dcf76851bff06da79dd4d07a1a811d43b95673a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/exports/amd.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\"
], function( jQuery ) {

\"use strict\";

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
\t} );
}

} );
", "node_modules/jquery/src/exports/amd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/exports/amd.js");
    }
}
