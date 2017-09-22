<?php

/* node_modules/jquery/src/var/slice.js */
class __TwigTemplate_85bdc23321644bdf3d7b9aae5b459dca4ef4ee00760bf3b120fbd2c8208fa59b extends Twig_Template
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
        $__internal_0060630098272fd4bbf656c5aad8192f8c3f415929c090ca11201e771cb82370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0060630098272fd4bbf656c5aad8192f8c3f415929c090ca11201e771cb82370->enter($__internal_0060630098272fd4bbf656c5aad8192f8c3f415929c090ca11201e771cb82370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/slice.js"));

        // line 1
        echo "define( [
\t\"./arr\"
], function( arr ) {
\t\"use strict\";

\treturn arr.slice;
} );
";
        
        $__internal_0060630098272fd4bbf656c5aad8192f8c3f415929c090ca11201e771cb82370->leave($__internal_0060630098272fd4bbf656c5aad8192f8c3f415929c090ca11201e771cb82370_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/slice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./arr\"
], function( arr ) {
\t\"use strict\";

\treturn arr.slice;
} );
", "node_modules/jquery/src/var/slice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/slice.js");
    }
}
