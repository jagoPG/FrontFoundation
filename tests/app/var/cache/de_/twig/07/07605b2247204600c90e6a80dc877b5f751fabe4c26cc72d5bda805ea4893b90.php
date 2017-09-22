<?php

/* node_modules/jquery/src/deferred/exceptionHook.js */
class __TwigTemplate_21ee8a6df26397d623bfb5a762c405a64d69c2fde28d2ff068b1f1d7f12d10e8 extends Twig_Template
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
        $__internal_6360582621a9e2b4c3f728a4c0bc4f9c10da78fa1585b4b8179215bd1c4b5380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6360582621a9e2b4c3f728a4c0bc4f9c10da78fa1585b4b8179215bd1c4b5380->enter($__internal_6360582621a9e2b4c3f728a4c0bc4f9c10da78fa1585b4b8179215bd1c4b5380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/deferred/exceptionHook.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../deferred\"
], function( jQuery ) {

\"use strict\";

// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error\$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

\t// Support: IE 8 - 9 only
\t// Console exists when dev tools are open, which can happen at any time
\tif ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
\t\twindow.console.warn( \"jQuery.Deferred exception: \" + error.message, error.stack, stack );
\t}
};

} );
";
        
        $__internal_6360582621a9e2b4c3f728a4c0bc4f9c10da78fa1585b4b8179215bd1c4b5380->leave($__internal_6360582621a9e2b4c3f728a4c0bc4f9c10da78fa1585b4b8179215bd1c4b5380_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/deferred/exceptionHook.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../deferred\"
], function( jQuery ) {

\"use strict\";

// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error\$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

\t// Support: IE 8 - 9 only
\t// Console exists when dev tools are open, which can happen at any time
\tif ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
\t\twindow.console.warn( \"jQuery.Deferred exception: \" + error.message, error.stack, stack );
\t}
};

} );
", "node_modules/jquery/src/deferred/exceptionHook.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/deferred/exceptionHook.js");
    }
}
