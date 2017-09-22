<?php

/* node_modules/jquery/src/manipulation/getAll.js */
class __TwigTemplate_cb77a1494102686690843750280305e28c7c4d50269f64a5b5b77bac46fb04c0 extends Twig_Template
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
        $__internal_ba838bb957fb3ad5a8f82fbc9fefbdd547ac17f6cc9e0a762b4f77300e9085c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba838bb957fb3ad5a8f82fbc9fefbdd547ac17f6cc9e0a762b4f77300e9085c5->enter($__internal_ba838bb957fb3ad5a8f82fbc9fefbdd547ac17f6cc9e0a762b4f77300e9085c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/manipulation/getAll.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../core/nodeName\"
], function( jQuery, nodeName ) {

\"use strict\";

function getAll( context, tag ) {

\t// Support: IE <=9 - 11 only
\t// Use typeof to avoid zero-argument method invocation on host objects (#15151)
\tvar ret;

\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\tret = context.getElementsByTagName( tag || \"*\" );

\t} else if ( typeof context.querySelectorAll !== \"undefined\" ) {
\t\tret = context.querySelectorAll( tag || \"*\" );

\t} else {
\t\tret = [];
\t}

\tif ( tag === undefined || tag && nodeName( context, tag ) ) {
\t\treturn jQuery.merge( [ context ], ret );
\t}

\treturn ret;
}

return getAll;
} );
";
        
        $__internal_ba838bb957fb3ad5a8f82fbc9fefbdd547ac17f6cc9e0a762b4f77300e9085c5->leave($__internal_ba838bb957fb3ad5a8f82fbc9fefbdd547ac17f6cc9e0a762b4f77300e9085c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/manipulation/getAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../core/nodeName\"
], function( jQuery, nodeName ) {

\"use strict\";

function getAll( context, tag ) {

\t// Support: IE <=9 - 11 only
\t// Use typeof to avoid zero-argument method invocation on host objects (#15151)
\tvar ret;

\tif ( typeof context.getElementsByTagName !== \"undefined\" ) {
\t\tret = context.getElementsByTagName( tag || \"*\" );

\t} else if ( typeof context.querySelectorAll !== \"undefined\" ) {
\t\tret = context.querySelectorAll( tag || \"*\" );

\t} else {
\t\tret = [];
\t}

\tif ( tag === undefined || tag && nodeName( context, tag ) ) {
\t\treturn jQuery.merge( [ context ], ret );
\t}

\treturn ret;
}

return getAll;
} );
", "node_modules/jquery/src/manipulation/getAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/manipulation/getAll.js");
    }
}
