<?php

/* node_modules/jquery/src/var/documentElement.js */
class __TwigTemplate_29e9b690176e124d17edc56b13629e61c4a24d712b93d4fd169f15543cb543d0 extends Twig_Template
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
        $__internal_565a5cc56524ddf1d36c9a504dded366169e87ea7da4ef3f8d231c1b2585d43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565a5cc56524ddf1d36c9a504dded366169e87ea7da4ef3f8d231c1b2585d43a->enter($__internal_565a5cc56524ddf1d36c9a504dded366169e87ea7da4ef3f8d231c1b2585d43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/documentElement.js"));

        // line 1
        echo "define( [
\t\"./document\"
], function( document ) {
\t\"use strict\";

\treturn document.documentElement;
} );
";
        
        $__internal_565a5cc56524ddf1d36c9a504dded366169e87ea7da4ef3f8d231c1b2585d43a->leave($__internal_565a5cc56524ddf1d36c9a504dded366169e87ea7da4ef3f8d231c1b2585d43a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/documentElement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./document\"
], function( document ) {
\t\"use strict\";

\treturn document.documentElement;
} );
", "node_modules/jquery/src/var/documentElement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/documentElement.js");
    }
}
