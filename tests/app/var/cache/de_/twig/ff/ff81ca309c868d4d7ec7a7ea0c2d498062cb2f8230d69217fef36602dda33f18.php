<?php

/* node_modules/es5-ext/number/is-finite/implement.js */
class __TwigTemplate_ff457c03378edf6854447916e1b2e98125281eb06a94e6baa882b0b50fbcd55c extends Twig_Template
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
        $__internal_3ab6bdd72484d24c2934f0cbff163183d488b85324d71974f1a3f48291a98c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab6bdd72484d24c2934f0cbff163183d488b85324d71974f1a3f48291a98c41->enter($__internal_3ab6bdd72484d24c2934f0cbff163183d488b85324d71974f1a3f48291a98c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-finite/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"isFinite\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_3ab6bdd72484d24c2934f0cbff163183d488b85324d71974f1a3f48291a98c41->leave($__internal_3ab6bdd72484d24c2934f0cbff163183d488b85324d71974f1a3f48291a98c41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-finite/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"isFinite\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/number/is-finite/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-finite/implement.js");
    }
}
