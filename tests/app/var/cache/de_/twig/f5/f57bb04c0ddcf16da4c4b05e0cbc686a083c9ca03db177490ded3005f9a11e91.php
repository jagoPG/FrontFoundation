<?php

/* node_modules/parsleyjs/bower_components/jquery/src/attributes.js */
class __TwigTemplate_789ecf5426ad91ebd22c9145e8e04485d24c853af4420bf952887c8f14e5114f extends Twig_Template
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
        $__internal_280f2365f2c848dde4d2f69fb5e77eb00811dd6343ae32e71851b8c5a82c59bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280f2365f2c848dde4d2f69fb5e77eb00811dd6343ae32e71851b8c5a82c59bd->enter($__internal_280f2365f2c848dde4d2f69fb5e77eb00811dd6343ae32e71851b8c5a82c59bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/attributes.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./attributes/attr\",
\t\"./attributes/prop\",
\t\"./attributes/classes\",
\t\"./attributes/val\"
], function( jQuery ) {

// Return jQuery for attributes-only inclusion
return jQuery;
});
";
        
        $__internal_280f2365f2c848dde4d2f69fb5e77eb00811dd6343ae32e71851b8c5a82c59bd->leave($__internal_280f2365f2c848dde4d2f69fb5e77eb00811dd6343ae32e71851b8c5a82c59bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/attributes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./attributes/attr\",
\t\"./attributes/prop\",
\t\"./attributes/classes\",
\t\"./attributes/val\"
], function( jQuery ) {

// Return jQuery for attributes-only inclusion
return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/attributes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/attributes.js");
    }
}
