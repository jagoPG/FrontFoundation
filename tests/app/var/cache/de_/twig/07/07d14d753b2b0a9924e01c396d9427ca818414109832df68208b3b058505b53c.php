<?php

/* node_modules/jquery/src/attributes.js */
class __TwigTemplate_b9bd0edf97cac58c63fb220d8be8e5ccdd1302138dd069bc121e629178c1d137 extends Twig_Template
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
        $__internal_72050fe71b20d0ad762f1a4136b1297675833c2126cb099b988936d03411a5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72050fe71b20d0ad762f1a4136b1297675833c2126cb099b988936d03411a5e5->enter($__internal_72050fe71b20d0ad762f1a4136b1297675833c2126cb099b988936d03411a5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/attributes.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./attributes/attr\",
\t\"./attributes/prop\",
\t\"./attributes/classes\",
\t\"./attributes/val\"
], function( jQuery ) {

\"use strict\";

// Return jQuery for attributes-only inclusion
return jQuery;
} );
";
        
        $__internal_72050fe71b20d0ad762f1a4136b1297675833c2126cb099b988936d03411a5e5->leave($__internal_72050fe71b20d0ad762f1a4136b1297675833c2126cb099b988936d03411a5e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/attributes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./attributes/attr\",
\t\"./attributes/prop\",
\t\"./attributes/classes\",
\t\"./attributes/val\"
], function( jQuery ) {

\"use strict\";

// Return jQuery for attributes-only inclusion
return jQuery;
} );
", "node_modules/jquery/src/attributes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/attributes.js");
    }
}
