<?php

/* node_modules/es5-ext/object/assign/implement.js */
class __TwigTemplate_18b413480f5798e5a7c9e6b734ef84743e5c331730401b60e2cf80ed6b9a52e5 extends Twig_Template
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
        $__internal_6b1408d96f27261380394e029e7cd7c620ac006558e7aee9a989ae5eb4c7c8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1408d96f27261380394e029e7cd7c620ac006558e7aee9a989ae5eb4c7c8af->enter($__internal_6b1408d96f27261380394e029e7cd7c620ac006558e7aee9a989ae5eb4c7c8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/assign/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Object, \"assign\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_6b1408d96f27261380394e029e7cd7c620ac006558e7aee9a989ae5eb4c7c8af->leave($__internal_6b1408d96f27261380394e029e7cd7c620ac006558e7aee9a989ae5eb4c7c8af_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/assign/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Object, \"assign\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/object/assign/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/assign/implement.js");
    }
}
