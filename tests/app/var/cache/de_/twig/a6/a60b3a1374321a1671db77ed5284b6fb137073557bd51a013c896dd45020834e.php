<?php

/* node_modules/parsleyjs/bower_components/jquery/src/effects/animatedSelector.js */
class __TwigTemplate_63636b12bb730f36e1dcf33c20a9cf561a58c13eeedb20228aa2d0bc46cd4a8d extends Twig_Template
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
        $__internal_9cea92ab8e52bcbbadc10cd77a42f242c9edb7cc48d29c69823bab372e2fe639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cea92ab8e52bcbbadc10cd77a42f242c9edb7cc48d29c69823bab372e2fe639->enter($__internal_9cea92ab8e52bcbbadc10cd77a42f242c9edb7cc48d29c69823bab372e2fe639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/effects/animatedSelector.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../selector\",
\t\"../effects\"
], function( jQuery ) {

jQuery.expr.filters.animated = function( elem ) {
\treturn jQuery.grep(jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t}).length;
};

});
";
        
        $__internal_9cea92ab8e52bcbbadc10cd77a42f242c9edb7cc48d29c69823bab372e2fe639->leave($__internal_9cea92ab8e52bcbbadc10cd77a42f242c9edb7cc48d29c69823bab372e2fe639_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/effects/animatedSelector.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../selector\",
\t\"../effects\"
], function( jQuery ) {

jQuery.expr.filters.animated = function( elem ) {
\treturn jQuery.grep(jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t}).length;
};

});
", "node_modules/parsleyjs/bower_components/jquery/src/effects/animatedSelector.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/effects/animatedSelector.js");
    }
}
