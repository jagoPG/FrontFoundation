<?php

/* node_modules/jquery/src/css/var/swap.js */
class __TwigTemplate_ca41a74bb51bf0ec18008460d3e74d4fa43cbb5f5b413bf60751a7c4d1d32c86 extends Twig_Template
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
        $__internal_52a27e8b8d3e94f21e84b4dc50527c078634f1b3e9d835c48d7ab4c89e8198a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a27e8b8d3e94f21e84b4dc50527c078634f1b3e9d835c48d7ab4c89e8198a5->enter($__internal_52a27e8b8d3e94f21e84b4dc50527c078634f1b3e9d835c48d7ab4c89e8198a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/var/swap.js"));

        // line 1
        echo "define( function() {

\"use strict\";

// A method for quickly swapping in/out CSS properties to get correct calculations.
return function( elem, options, callback, args ) {
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

} );
";
        
        $__internal_52a27e8b8d3e94f21e84b4dc50527c078634f1b3e9d835c48d7ab4c89e8198a5->leave($__internal_52a27e8b8d3e94f21e84b4dc50527c078634f1b3e9d835c48d7ab4c89e8198a5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/var/swap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {

\"use strict\";

// A method for quickly swapping in/out CSS properties to get correct calculations.
return function( elem, options, callback, args ) {
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

} );
", "node_modules/jquery/src/css/var/swap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/var/swap.js");
    }
}
