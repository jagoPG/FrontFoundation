<?php

/* node_modules/parsleyjs/bower_components/jquery/src/selector-sizzle.js */
class __TwigTemplate_320e7021a892a05190de37a08a9149f4f9aed666a0f06073497ee54a38c8063f extends Twig_Template
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
        $__internal_ca80f2d31472dfcb46c1687ba348daacac3c1ca0f35c6c792187d2d7e6e6ce6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca80f2d31472dfcb46c1687ba348daacac3c1ca0f35c6c792187d2d7e6e6ce6c->enter($__internal_ca80f2d31472dfcb46c1687ba348daacac3c1ca0f35c6c792187d2d7e6e6ce6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/selector-sizzle.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"sizzle\"
], function( jQuery, Sizzle ) {

jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;
jQuery.expr[\":\"] = jQuery.expr.pseudos;
jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;

});
";
        
        $__internal_ca80f2d31472dfcb46c1687ba348daacac3c1ca0f35c6c792187d2d7e6e6ce6c->leave($__internal_ca80f2d31472dfcb46c1687ba348daacac3c1ca0f35c6c792187d2d7e6e6ce6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/selector-sizzle.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"sizzle\"
], function( jQuery, Sizzle ) {

jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;
jQuery.expr[\":\"] = jQuery.expr.pseudos;
jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;

});
", "node_modules/parsleyjs/bower_components/jquery/src/selector-sizzle.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/selector-sizzle.js");
    }
}
