<?php

/* node_modules/jquery/src/exports/global.js */
class __TwigTemplate_87f7af1da9fda89d4738d5506b0bd86c7266f7e4c001b5308894c881b34f275a extends Twig_Template
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
        $__internal_c08da940bbd883a6f937a1e4e2516babb8fe07b31ce45c907353ae4a204a0f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08da940bbd883a6f937a1e4e2516babb8fe07b31ce45c907353ae4a204a0f9e->enter($__internal_c08da940bbd883a6f937a1e4e2516babb8fe07b31ce45c907353ae4a204a0f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/exports/global.js"));

        // line 1
        echo "define( [
\t\"../core\"
], function( jQuery, noGlobal ) {

\"use strict\";

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
if ( !noGlobal ) {
\twindow.jQuery = window.\$ = jQuery;
}

} );
";
        
        $__internal_c08da940bbd883a6f937a1e4e2516babb8fe07b31ce45c907353ae4a204a0f9e->leave($__internal_c08da940bbd883a6f937a1e4e2516babb8fe07b31ce45c907353ae4a204a0f9e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/exports/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\"
], function( jQuery, noGlobal ) {

\"use strict\";

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
if ( !noGlobal ) {
\twindow.jQuery = window.\$ = jQuery;
}

} );
", "node_modules/jquery/src/exports/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/exports/global.js");
    }
}
