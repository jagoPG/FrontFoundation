<?php

/* node_modules/jquery/src/data/var/dataPriv.js */
class __TwigTemplate_a589eb699c2617c6ad7d2638631762abe4a79a9ae5645860f6e9269a59b769cf extends Twig_Template
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
        $__internal_fad7dcf4d161ab359d0dd4106110bc6388d8d7483204c4e0129a89ccb1bd828b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad7dcf4d161ab359d0dd4106110bc6388d8d7483204c4e0129a89ccb1bd828b->enter($__internal_fad7dcf4d161ab359d0dd4106110bc6388d8d7483204c4e0129a89ccb1bd828b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/data/var/dataPriv.js"));

        // line 1
        echo "define( [
\t\"../Data\"
], function( Data ) {
\t\"use strict\";

\treturn new Data();
} );
";
        
        $__internal_fad7dcf4d161ab359d0dd4106110bc6388d8d7483204c4e0129a89ccb1bd828b->leave($__internal_fad7dcf4d161ab359d0dd4106110bc6388d8d7483204c4e0129a89ccb1bd828b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/data/var/dataPriv.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../Data\"
], function( Data ) {
\t\"use strict\";

\treturn new Data();
} );
", "node_modules/jquery/src/data/var/dataPriv.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/data/var/dataPriv.js");
    }
}
