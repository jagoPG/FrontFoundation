<?php

/* node_modules/jquery/src/var/toString.js */
class __TwigTemplate_b1906bb38623534839abcfd46048d59238f5e96b4ff1f638a505491dff4a9d08 extends Twig_Template
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
        $__internal_dad523def47821a18755c007e901526e12bbc690d911561484896e505bba779e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad523def47821a18755c007e901526e12bbc690d911561484896e505bba779e->enter($__internal_dad523def47821a18755c007e901526e12bbc690d911561484896e505bba779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/toString.js"));

        // line 1
        echo "define( [
\t\"./class2type\"
], function( class2type ) {
\t\"use strict\";

\treturn class2type.toString;
} );
";
        
        $__internal_dad523def47821a18755c007e901526e12bbc690d911561484896e505bba779e->leave($__internal_dad523def47821a18755c007e901526e12bbc690d911561484896e505bba779e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/toString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./class2type\"
], function( class2type ) {
\t\"use strict\";

\treturn class2type.toString;
} );
", "node_modules/jquery/src/var/toString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/toString.js");
    }
}
