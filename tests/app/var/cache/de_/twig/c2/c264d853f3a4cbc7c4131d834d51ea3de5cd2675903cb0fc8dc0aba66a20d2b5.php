<?php

/* node_modules/jquery/src/core/readyException.js */
class __TwigTemplate_a9dfeb4939285654eea8a24b95628463c880eacc4632fc2ff39a49ff44116d93 extends Twig_Template
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
        $__internal_be435781089320a515e02abf84d23d6b06525c564439f1e31e1833b917f642b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be435781089320a515e02abf84d23d6b06525c564439f1e31e1833b917f642b5->enter($__internal_be435781089320a515e02abf84d23d6b06525c564439f1e31e1833b917f642b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/readyException.js"));

        // line 1
        echo "define( [
\t\"../core\"
], function( jQuery ) {

\"use strict\";

jQuery.readyException = function( error ) {
\twindow.setTimeout( function() {
\t\tthrow error;
\t} );
};

} );
";
        
        $__internal_be435781089320a515e02abf84d23d6b06525c564439f1e31e1833b917f642b5->leave($__internal_be435781089320a515e02abf84d23d6b06525c564439f1e31e1833b917f642b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/readyException.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\"
], function( jQuery ) {

\"use strict\";

jQuery.readyException = function( error ) {
\twindow.setTimeout( function() {
\t\tthrow error;
\t} );
};

} );
", "node_modules/jquery/src/core/readyException.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/readyException.js");
    }
}
