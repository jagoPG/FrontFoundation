<?php

/* node_modules/jquery/src/var/concat.js */
class __TwigTemplate_028db4405010fd7c09ea2633ab12df20cc104767a47845467fd77c608f73ef6f extends Twig_Template
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
        $__internal_4ba9be8d2f85f8f0e6eda4506cab85d5b2798e8d3105251c22319201aeb9aaaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba9be8d2f85f8f0e6eda4506cab85d5b2798e8d3105251c22319201aeb9aaaa->enter($__internal_4ba9be8d2f85f8f0e6eda4506cab85d5b2798e8d3105251c22319201aeb9aaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/concat.js"));

        // line 1
        echo "define( [
\t\"./arr\"
], function( arr ) {
\t\"use strict\";

\treturn arr.concat;
} );
";
        
        $__internal_4ba9be8d2f85f8f0e6eda4506cab85d5b2798e8d3105251c22319201aeb9aaaa->leave($__internal_4ba9be8d2f85f8f0e6eda4506cab85d5b2798e8d3105251c22319201aeb9aaaa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/concat.js";
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

\treturn arr.concat;
} );
", "node_modules/jquery/src/var/concat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/concat.js");
    }
}
