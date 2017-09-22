<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css/swap.js */
class __TwigTemplate_2f570d263745838315a2928fc24386d59e300ca268c5e9c98028b8c329a7e3e4 extends Twig_Template
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
        $__internal_b25ae352bb1cbc0142ac3048828c84f37b09adec41243e01784da49bbca477d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25ae352bb1cbc0142ac3048828c84f37b09adec41243e01784da49bbca477d1->enter($__internal_b25ae352bb1cbc0142ac3048828c84f37b09adec41243e01784da49bbca477d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css/swap.js"));

        // line 1
        echo "define([
\t\"../core\"
], function( jQuery ) {

// A method for quickly swapping in/out CSS properties to get correct calculations.
jQuery.swap = function( elem, options, callback, args ) {
\tvar ret, name,
\t\told = {};

\t// Remember the old values, and insert the new ones
\tfor ( name in options ) {
\t\told[ name ] = elem.style[ name ];
\t\telem.style[ name ] = options[ name ];
\t}

\tret = callback.apply( elem, args || [] );

\t// Revert the old values
\tfor ( name in options ) {
\t\telem.style[ name ] = old[ name ];
\t}

\treturn ret;
};

return jQuery.swap;

});
";
        
        $__internal_b25ae352bb1cbc0142ac3048828c84f37b09adec41243e01784da49bbca477d1->leave($__internal_b25ae352bb1cbc0142ac3048828c84f37b09adec41243e01784da49bbca477d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css/swap.js";
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

// A method for quickly swapping in/out CSS properties to get correct calculations.
jQuery.swap = function( elem, options, callback, args ) {
\tvar ret, name,
\t\told = {};

\t// Remember the old values, and insert the new ones
\tfor ( name in options ) {
\t\told[ name ] = elem.style[ name ];
\t\telem.style[ name ] = options[ name ];
\t}

\tret = callback.apply( elem, args || [] );

\t// Revert the old values
\tfor ( name in options ) {
\t\telem.style[ name ] = old[ name ];
\t}

\treturn ret;
};

return jQuery.swap;

});
", "node_modules/parsleyjs/bower_components/jquery/src/css/swap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css/swap.js");
    }
}
