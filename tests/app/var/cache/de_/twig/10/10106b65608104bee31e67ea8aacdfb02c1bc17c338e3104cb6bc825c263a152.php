<?php

/* node_modules/jquery/src/effects/animatedSelector.js */
class __TwigTemplate_55ff6337747a05a8600d2ab895d93fe85a5c09075bf2f524a058adc2241b7b92 extends Twig_Template
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
        $__internal_bec5d3a8e5b1778e66be4d63752c58756a8899087045369fe33bd1df4d99151f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec5d3a8e5b1778e66be4d63752c58756a8899087045369fe33bd1df4d99151f->enter($__internal_bec5d3a8e5b1778e66be4d63752c58756a8899087045369fe33bd1df4d99151f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/effects/animatedSelector.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../selector\",
\t\"../effects\"
], function( jQuery ) {

\"use strict\";

jQuery.expr.pseudos.animated = function( elem ) {
\treturn jQuery.grep( jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t} ).length;
};

} );
";
        
        $__internal_bec5d3a8e5b1778e66be4d63752c58756a8899087045369fe33bd1df4d99151f->leave($__internal_bec5d3a8e5b1778e66be4d63752c58756a8899087045369fe33bd1df4d99151f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/effects/animatedSelector.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../selector\",
\t\"../effects\"
], function( jQuery ) {

\"use strict\";

jQuery.expr.pseudos.animated = function( elem ) {
\treturn jQuery.grep( jQuery.timers, function( fn ) {
\t\treturn elem === fn.elem;
\t} ).length;
};

} );
", "node_modules/jquery/src/effects/animatedSelector.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/effects/animatedSelector.js");
    }
}
