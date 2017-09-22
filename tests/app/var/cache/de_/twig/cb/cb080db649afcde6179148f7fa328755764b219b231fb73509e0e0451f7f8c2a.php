<?php

/* node_modules/jquery/src/selector-sizzle.js */
class __TwigTemplate_082cbb0464ffe3a428f2540310a73c0ca299648519279665ca46ee45aeaf2b41 extends Twig_Template
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
        $__internal_41969e1beccd1a822981b8f99eed8cb1e68e82336074c1ec2d3f2311af09bcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41969e1beccd1a822981b8f99eed8cb1e68e82336074c1ec2d3f2311af09bcb9->enter($__internal_41969e1beccd1a822981b8f99eed8cb1e68e82336074c1ec2d3f2311af09bcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/selector-sizzle.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"../external/sizzle/dist/sizzle\"
], function( jQuery, Sizzle ) {

\"use strict\";

jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ \":\" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;

} );
";
        
        $__internal_41969e1beccd1a822981b8f99eed8cb1e68e82336074c1ec2d3f2311af09bcb9->leave($__internal_41969e1beccd1a822981b8f99eed8cb1e68e82336074c1ec2d3f2311af09bcb9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/selector-sizzle.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"../external/sizzle/dist/sizzle\"
], function( jQuery, Sizzle ) {

\"use strict\";

jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ \":\" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;

} );
", "node_modules/jquery/src/selector-sizzle.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/selector-sizzle.js");
    }
}
