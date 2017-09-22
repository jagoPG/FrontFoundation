<?php

/* node_modules/parsleyjs/bower_components/jquery/src/deprecated.js */
class __TwigTemplate_e6e67a598873d46d99de33539a1397c50c7eb5fa863fd3c31d73e4f850e98302 extends Twig_Template
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
        $__internal_96b751eb044ab0dfbc8d0751d487743165711094d7cbb7a3671d10d3841e589a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b751eb044ab0dfbc8d0751d487743165711094d7cbb7a3671d10d3841e589a->enter($__internal_96b751eb044ab0dfbc8d0751d487743165711094d7cbb7a3671d10d3841e589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/deprecated.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./traversing\"
], function( jQuery ) {

// The number of elements contained in the matched element set
jQuery.fn.size = function() {
\treturn this.length;
};

jQuery.fn.andSelf = jQuery.fn.addBack;

});
";
        
        $__internal_96b751eb044ab0dfbc8d0751d487743165711094d7cbb7a3671d10d3841e589a->leave($__internal_96b751eb044ab0dfbc8d0751d487743165711094d7cbb7a3671d10d3841e589a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/deprecated.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./traversing\"
], function( jQuery ) {

// The number of elements contained in the matched element set
jQuery.fn.size = function() {
\treturn this.length;
};

jQuery.fn.andSelf = jQuery.fn.addBack;

});
", "node_modules/parsleyjs/bower_components/jquery/src/deprecated.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/deprecated.js");
    }
}
