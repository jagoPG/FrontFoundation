<?php

/* node_modules/es5-ext/number/is-safe-integer/implement.js */
class __TwigTemplate_2b2ed2e61a0723715c9f055c693c7a90fc2b8544fc631b7cfaaad318cedf611c extends Twig_Template
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
        $__internal_5a72bbb2aa8a723ebc2783164904298a74905a4b65c54cfa318fcf35de228e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a72bbb2aa8a723ebc2783164904298a74905a4b65c54cfa318fcf35de228e30->enter($__internal_5a72bbb2aa8a723ebc2783164904298a74905a4b65c54cfa318fcf35de228e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-safe-integer/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"isSafeInteger\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_5a72bbb2aa8a723ebc2783164904298a74905a4b65c54cfa318fcf35de228e30->leave($__internal_5a72bbb2aa8a723ebc2783164904298a74905a4b65c54cfa318fcf35de228e30_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-safe-integer/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"isSafeInteger\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/number/is-safe-integer/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-safe-integer/implement.js");
    }
}
