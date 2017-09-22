<?php

/* node_modules/es5-ext/math/trunc/implement.js */
class __TwigTemplate_2d4932b53a2268dda9e7d7ee25a019fb71bfc888faab7128efc6134e959b4984 extends Twig_Template
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
        $__internal_1bd06ea6cc1d3c2bd1c0234b789c7d6958add3e7799be1f786be49b4da545917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd06ea6cc1d3c2bd1c0234b789c7d6958add3e7799be1f786be49b4da545917->enter($__internal_1bd06ea6cc1d3c2bd1c0234b789c7d6958add3e7799be1f786be49b4da545917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/trunc/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"trunc\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_1bd06ea6cc1d3c2bd1c0234b789c7d6958add3e7799be1f786be49b4da545917->leave($__internal_1bd06ea6cc1d3c2bd1c0234b789c7d6958add3e7799be1f786be49b4da545917_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/trunc/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"trunc\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/trunc/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/trunc/implement.js");
    }
}
