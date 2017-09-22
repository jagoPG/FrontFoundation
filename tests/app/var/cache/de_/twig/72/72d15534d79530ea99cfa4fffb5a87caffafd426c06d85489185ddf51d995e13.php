<?php

/* node_modules/jquery/src/event/support.js */
class __TwigTemplate_09fbe9adb58f2872aba710f858785a3be2d190f23afe6c0c54be9e0dc4b7a199 extends Twig_Template
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
        $__internal_bc460f1beed3429f2d5e739ef06ecf683a221646b7c8377604a541b71e7c7f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc460f1beed3429f2d5e739ef06ecf683a221646b7c8377604a541b71e7c7f9b->enter($__internal_bc460f1beed3429f2d5e739ef06ecf683a221646b7c8377604a541b71e7c7f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/event/support.js"));

        // line 1
        echo "define( [
\t\"../var/support\"
], function( support ) {

\"use strict\";

support.focusin = \"onfocusin\" in window;

return support;

} );
";
        
        $__internal_bc460f1beed3429f2d5e739ef06ecf683a221646b7c8377604a541b71e7c7f9b->leave($__internal_bc460f1beed3429f2d5e739ef06ecf683a221646b7c8377604a541b71e7c7f9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/event/support.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../var/support\"
], function( support ) {

\"use strict\";

support.focusin = \"onfocusin\" in window;

return support;

} );
", "node_modules/jquery/src/event/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/event/support.js");
    }
}
