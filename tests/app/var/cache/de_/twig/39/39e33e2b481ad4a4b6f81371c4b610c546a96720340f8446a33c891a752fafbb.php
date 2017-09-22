<?php

/* node_modules/jquery/src/var/rcssNum.js */
class __TwigTemplate_91fe7fd9390dd8ffb44097936318776307431ea55c0516e8d0e6fa3e106ea470 extends Twig_Template
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
        $__internal_355a4b0bd6c62fc74c696965bcd76932c52332d093df8e19d45ccc27a155ca37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355a4b0bd6c62fc74c696965bcd76932c52332d093df8e19d45ccc27a155ca37->enter($__internal_355a4b0bd6c62fc74c696965bcd76932c52332d093df8e19d45ccc27a155ca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/rcssNum.js"));

        // line 1
        echo "define( [
\t\"../var/pnum\"
], function( pnum ) {

\"use strict\";

return new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" );

} );
";
        
        $__internal_355a4b0bd6c62fc74c696965bcd76932c52332d093df8e19d45ccc27a155ca37->leave($__internal_355a4b0bd6c62fc74c696965bcd76932c52332d093df8e19d45ccc27a155ca37_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/rcssNum.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../var/pnum\"
], function( pnum ) {

\"use strict\";

return new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" );

} );
", "node_modules/jquery/src/var/rcssNum.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/rcssNum.js");
    }
}
