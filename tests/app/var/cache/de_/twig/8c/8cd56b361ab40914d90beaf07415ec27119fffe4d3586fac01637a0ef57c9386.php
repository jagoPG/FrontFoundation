<?php

/* node_modules/es5-ext/array/#/filter/implement.js */
class __TwigTemplate_a7e88192b19fd01f25874896ae4329bc2a7bf189cb3e6e725ef1daa874ecec0c extends Twig_Template
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
        $__internal_8bf7d9ec191a0ccb7af0e686e9924007639720eea8db4670a3307adaf2ed184c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf7d9ec191a0ccb7af0e686e9924007639720eea8db4670a3307adaf2ed184c->enter($__internal_8bf7d9ec191a0ccb7af0e686e9924007639720eea8db4670a3307adaf2ed184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/filter/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"filter\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_8bf7d9ec191a0ccb7af0e686e9924007639720eea8db4670a3307adaf2ed184c->leave($__internal_8bf7d9ec191a0ccb7af0e686e9924007639720eea8db4670a3307adaf2ed184c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/filter/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"filter\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/filter/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/filter/implement.js");
    }
}
