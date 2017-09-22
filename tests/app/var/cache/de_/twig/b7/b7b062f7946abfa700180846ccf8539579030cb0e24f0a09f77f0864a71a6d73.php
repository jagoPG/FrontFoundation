<?php

/* node_modules/es5-ext/array/#/entries/implement.js */
class __TwigTemplate_efb316ae8cd59cfe20cca0a6803b27743d206088b86132306ff40b3c4f19bba6 extends Twig_Template
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
        $__internal_e24140b0349ad87b9c4937158fba8c211f442d029399d294d2183b338492e520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24140b0349ad87b9c4937158fba8c211f442d029399d294d2183b338492e520->enter($__internal_e24140b0349ad87b9c4937158fba8c211f442d029399d294d2183b338492e520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/entries/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"entries\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_e24140b0349ad87b9c4937158fba8c211f442d029399d294d2183b338492e520->leave($__internal_e24140b0349ad87b9c4937158fba8c211f442d029399d294d2183b338492e520_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/entries/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"entries\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/entries/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/entries/implement.js");
    }
}
