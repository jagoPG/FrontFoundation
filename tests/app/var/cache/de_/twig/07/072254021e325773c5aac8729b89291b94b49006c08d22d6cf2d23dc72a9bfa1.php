<?php

/* node_modules/jquery/src/queue/delay.js */
class __TwigTemplate_2a7ef8295e0db5b9a719cf2e81f2aff06ee0a3b1044677e2957f2e06bdbd19a5 extends Twig_Template
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
        $__internal_a4ae68280225bae5f572d3a8c7f2e33e6659b55a82bdfa1ef4eefd4a5eebc256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ae68280225bae5f572d3a8c7f2e33e6659b55a82bdfa1ef4eefd4a5eebc256->enter($__internal_a4ae68280225bae5f572d3a8c7f2e33e6659b55a82bdfa1ef4eefd4a5eebc256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/queue/delay.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../queue\",
\t\"../effects\" // Delay is optional because of this dependency
], function( jQuery ) {

\"use strict\";

// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = window.setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\twindow.clearTimeout( timeout );
\t\t};
\t} );
};

return jQuery.fn.delay;
} );
";
        
        $__internal_a4ae68280225bae5f572d3a8c7f2e33e6659b55a82bdfa1ef4eefd4a5eebc256->leave($__internal_a4ae68280225bae5f572d3a8c7f2e33e6659b55a82bdfa1ef4eefd4a5eebc256_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/queue/delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../queue\",
\t\"../effects\" // Delay is optional because of this dependency
], function( jQuery ) {

\"use strict\";

// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = window.setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\twindow.clearTimeout( timeout );
\t\t};
\t} );
};

return jQuery.fn.delay;
} );
", "node_modules/jquery/src/queue/delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/queue/delay.js");
    }
}
