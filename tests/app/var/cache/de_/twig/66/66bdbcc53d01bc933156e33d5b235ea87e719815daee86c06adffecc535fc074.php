<?php

/* node_modules/parsleyjs/bower_components/jquery/src/queue/delay.js */
class __TwigTemplate_1a7788302d9cad850c0c3c46f4f7d0415352f1fddcdad6a2facee88afc8dc4d7 extends Twig_Template
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
        $__internal_c9ad5f6f8df0aabfc480f3aa876fd0c0052af666d0e88efc579a5349797c8fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ad5f6f8df0aabfc480f3aa876fd0c0052af666d0e88efc579a5349797c8fa7->enter($__internal_c9ad5f6f8df0aabfc480f3aa876fd0c0052af666d0e88efc579a5349797c8fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/queue/delay.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../queue\",
\t\"../effects\" // Delay is optional because of this dependency
], function( jQuery ) {

// Based off of the plugin by Clint Helfers, with permission.
// http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\tclearTimeout( timeout );
\t\t};
\t});
};

return jQuery.fn.delay;
});
";
        
        $__internal_c9ad5f6f8df0aabfc480f3aa876fd0c0052af666d0e88efc579a5349797c8fa7->leave($__internal_c9ad5f6f8df0aabfc480f3aa876fd0c0052af666d0e88efc579a5349797c8fa7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/queue/delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../queue\",
\t\"../effects\" // Delay is optional because of this dependency
], function( jQuery ) {

// Based off of the plugin by Clint Helfers, with permission.
// http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
\ttime = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
\ttype = type || \"fx\";

\treturn this.queue( type, function( next, hooks ) {
\t\tvar timeout = setTimeout( next, time );
\t\thooks.stop = function() {
\t\t\tclearTimeout( timeout );
\t\t};
\t});
};

return jQuery.fn.delay;
});
", "node_modules/parsleyjs/bower_components/jquery/src/queue/delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/queue/delay.js");
    }
}
