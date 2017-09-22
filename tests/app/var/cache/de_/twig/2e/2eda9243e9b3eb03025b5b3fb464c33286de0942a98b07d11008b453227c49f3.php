<?php

/* node_modules/jquery/src/var/pnum.js */
class __TwigTemplate_0bf944feac128291b9a417dcd0449349aa3a5fbbb5a2c5d9e2fc616782fbb9c8 extends Twig_Template
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
        $__internal_8d7c163649f37df504066f77340b57fecba2bb895714658674e10ea79d663213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7c163649f37df504066f77340b57fecba2bb895714658674e10ea79d663213->enter($__internal_8d7c163649f37df504066f77340b57fecba2bb895714658674e10ea79d663213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/pnum.js"));

        // line 1
        echo "define( function() {
\t\"use strict\";

\treturn ( /[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/ ).source;
} );
";
        
        $__internal_8d7c163649f37df504066f77340b57fecba2bb895714658674e10ea79d663213->leave($__internal_8d7c163649f37df504066f77340b57fecba2bb895714658674e10ea79d663213_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/pnum.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {
\t\"use strict\";

\treturn ( /[+-]?(?:\\d*\\.|)\\d+(?:[eE][+-]?\\d+|)/ ).source;
} );
", "node_modules/jquery/src/var/pnum.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/pnum.js");
    }
}
