<?php

/* node_modules/es5-ext/array/from/implement.js */
class __TwigTemplate_a2a0fb1ceac0d3bd61385cae42d043b368b07873b9ba5c3f80df30232b36cb71 extends Twig_Template
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
        $__internal_589a7cb7e8df013e87285ff54627c3fc7bb33cf2395676c4ae106e8bfbd64e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589a7cb7e8df013e87285ff54627c3fc7bb33cf2395676c4ae106e8bfbd64e92->enter($__internal_589a7cb7e8df013e87285ff54627c3fc7bb33cf2395676c4ae106e8bfbd64e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/from/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array, \"from\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_589a7cb7e8df013e87285ff54627c3fc7bb33cf2395676c4ae106e8bfbd64e92->leave($__internal_589a7cb7e8df013e87285ff54627c3fc7bb33cf2395676c4ae106e8bfbd64e92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/from/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array, \"from\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/from/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/from/implement.js");
    }
}
