<?php

/* node_modules/jquery/src/core/support.js */
class __TwigTemplate_1ad9b530daecf0ec091f252392638073a9875c3d6f0cc60106b68d09e2421562 extends Twig_Template
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
        $__internal_935db1f17aae34dded3bcdf13305bc590c9d578095ecf8628fa5fc48a31c40b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935db1f17aae34dded3bcdf13305bc590c9d578095ecf8628fa5fc48a31c40b0->enter($__internal_935db1f17aae34dded3bcdf13305bc590c9d578095ecf8628fa5fc48a31c40b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/support.js"));

        // line 1
        echo "define( [
\t\"../var/document\",
\t\"../var/support\"
], function( document, support ) {

\"use strict\";

// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
\tvar body = document.implementation.createHTMLDocument( \"\" ).body;
\tbody.innerHTML = \"<form></form><form></form>\";
\treturn body.childNodes.length === 2;
} )();

return support;
} );
";
        
        $__internal_935db1f17aae34dded3bcdf13305bc590c9d578095ecf8628fa5fc48a31c40b0->leave($__internal_935db1f17aae34dded3bcdf13305bc590c9d578095ecf8628fa5fc48a31c40b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/support.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../var/document\",
\t\"../var/support\"
], function( document, support ) {

\"use strict\";

// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
\tvar body = document.implementation.createHTMLDocument( \"\" ).body;
\tbody.innerHTML = \"<form></form><form></form>\";
\treturn body.childNodes.length === 2;
} )();

return support;
} );
", "node_modules/jquery/src/core/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/support.js");
    }
}
