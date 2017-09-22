<?php

/* node_modules/jquery/src/traversing/var/dir.js */
class __TwigTemplate_0cf9743392a2dac992a63761e672e0850af60883ffc9511f9e45b53b0c72387b extends Twig_Template
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
        $__internal_6ad40ff0d118b6894e8d8c67a1b9bfedbf1771d0c3cf5d6f76d8765a9b04ac93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad40ff0d118b6894e8d8c67a1b9bfedbf1771d0c3cf5d6f76d8765a9b04ac93->enter($__internal_6ad40ff0d118b6894e8d8c67a1b9bfedbf1771d0c3cf5d6f76d8765a9b04ac93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/traversing/var/dir.js"));

        // line 1
        echo "define( [
\t\"../../core\"
], function( jQuery ) {

\"use strict\";

return function( elem, dir, until ) {
\tvar matched = [],
\t\ttruncate = until !== undefined;

\twhile ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
\t\tif ( elem.nodeType === 1 ) {
\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tmatched.push( elem );
\t\t}
\t}
\treturn matched;
};

} );
";
        
        $__internal_6ad40ff0d118b6894e8d8c67a1b9bfedbf1771d0c3cf5d6f76d8765a9b04ac93->leave($__internal_6ad40ff0d118b6894e8d8c67a1b9bfedbf1771d0c3cf5d6f76d8765a9b04ac93_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/traversing/var/dir.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../../core\"
], function( jQuery ) {

\"use strict\";

return function( elem, dir, until ) {
\tvar matched = [],
\t\ttruncate = until !== undefined;

\twhile ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
\t\tif ( elem.nodeType === 1 ) {
\t\t\tif ( truncate && jQuery( elem ).is( until ) ) {
\t\t\t\tbreak;
\t\t\t}
\t\t\tmatched.push( elem );
\t\t}
\t}
\treturn matched;
};

} );
", "node_modules/jquery/src/traversing/var/dir.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/traversing/var/dir.js");
    }
}
