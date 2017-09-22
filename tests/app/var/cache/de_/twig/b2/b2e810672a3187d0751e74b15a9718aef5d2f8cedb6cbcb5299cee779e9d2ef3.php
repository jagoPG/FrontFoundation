<?php

/* node_modules/parsleyjs/bower_components/jquery/src/exports/global.js */
class __TwigTemplate_7f8ef20bf23f34ab28aaa5dbc961d09af7da3ff4c08e042e95ec0534049e0b36 extends Twig_Template
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
        $__internal_c52ce005e8a8f0467424d886276229482f66317a7c646bdfe10910556e955de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52ce005e8a8f0467424d886276229482f66317a7c646bdfe10910556e955de7->enter($__internal_c52ce005e8a8f0467424d886276229482f66317a7c646bdfe10910556e955de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/exports/global.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../var/strundefined\"
], function( jQuery, strundefined ) {

var
\t// Map over jQuery in case of overwrite
\t_jQuery = window.jQuery,

\t// Map over the \$ in case of overwrite
\t_\$ = window.\$;

jQuery.noConflict = function( deep ) {
\tif ( window.\$ === jQuery ) {
\t\twindow.\$ = _\$;
\t}

\tif ( deep && window.jQuery === jQuery ) {
\t\twindow.jQuery = _jQuery;
\t}

\treturn jQuery;
};

// Expose jQuery and \$ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( typeof noGlobal === strundefined ) {
\twindow.jQuery = window.\$ = jQuery;
}

});
";
        
        $__internal_c52ce005e8a8f0467424d886276229482f66317a7c646bdfe10910556e955de7->leave($__internal_c52ce005e8a8f0467424d886276229482f66317a7c646bdfe10910556e955de7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/exports/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../var/strundefined\"
], function( jQuery, strundefined ) {

var
\t// Map over jQuery in case of overwrite
\t_jQuery = window.jQuery,

\t// Map over the \$ in case of overwrite
\t_\$ = window.\$;

jQuery.noConflict = function( deep ) {
\tif ( window.\$ === jQuery ) {
\t\twindow.\$ = _\$;
\t}

\tif ( deep && window.jQuery === jQuery ) {
\t\twindow.jQuery = _jQuery;
\t}

\treturn jQuery;
};

// Expose jQuery and \$ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( typeof noGlobal === strundefined ) {
\twindow.jQuery = window.\$ = jQuery;
}

});
", "node_modules/parsleyjs/bower_components/jquery/src/exports/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/exports/global.js");
    }
}
