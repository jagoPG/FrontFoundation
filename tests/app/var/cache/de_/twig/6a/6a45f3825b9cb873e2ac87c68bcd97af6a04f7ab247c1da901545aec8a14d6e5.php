<?php

/* node_modules/parsleyjs/bower_components/jquery/src/data/accepts.js */
class __TwigTemplate_aaea79a5b5fdaad454a61ea2350a28a1106b91c551bf0d8fd61a190f6b48880c extends Twig_Template
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
        $__internal_e6f93264bf9fbcdaa0054fdfef5f64a7cf3e89a6fb58563030f6d9b7e9bc289f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f93264bf9fbcdaa0054fdfef5f64a7cf3e89a6fb58563030f6d9b7e9bc289f->enter($__internal_e6f93264bf9fbcdaa0054fdfef5f64a7cf3e89a6fb58563030f6d9b7e9bc289f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/data/accepts.js"));

        // line 1
        echo "define([
\t\"../core\"
], function( jQuery ) {

/**
 * Determines whether an object can have data
 */
jQuery.acceptData = function( owner ) {
\t// Accepts only:
\t//  - Node
\t//    - Node.ELEMENT_NODE
\t//    - Node.DOCUMENT_NODE
\t//  - Object
\t//    - Any
\t/* jshint -W018 */
\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};

return jQuery.acceptData;
});
";
        
        $__internal_e6f93264bf9fbcdaa0054fdfef5f64a7cf3e89a6fb58563030f6d9b7e9bc289f->leave($__internal_e6f93264bf9fbcdaa0054fdfef5f64a7cf3e89a6fb58563030f6d9b7e9bc289f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/data/accepts.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\"
], function( jQuery ) {

/**
 * Determines whether an object can have data
 */
jQuery.acceptData = function( owner ) {
\t// Accepts only:
\t//  - Node
\t//    - Node.ELEMENT_NODE
\t//    - Node.DOCUMENT_NODE
\t//  - Object
\t//    - Any
\t/* jshint -W018 */
\treturn owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};

return jQuery.acceptData;
});
", "node_modules/parsleyjs/bower_components/jquery/src/data/accepts.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/data/accepts.js");
    }
}
