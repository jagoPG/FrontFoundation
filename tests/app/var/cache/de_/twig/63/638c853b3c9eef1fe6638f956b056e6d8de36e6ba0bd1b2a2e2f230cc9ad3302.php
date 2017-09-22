<?php

/* node_modules/es5-ext/string/#/ends-with/implement.js */
class __TwigTemplate_528135680649f66be368bfc75e7a95721efe64c88f4979565e0ff8f8c98bbb6f extends Twig_Template
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
        $__internal_16d4b186ffe211c0b175d9baf5489656f0a38a1022f2e5b8851c5a1fa0c57311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d4b186ffe211c0b175d9baf5489656f0a38a1022f2e5b8851c5a1fa0c57311->enter($__internal_16d4b186ffe211c0b175d9baf5489656f0a38a1022f2e5b8851c5a1fa0c57311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/ends-with/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"endsWith\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_16d4b186ffe211c0b175d9baf5489656f0a38a1022f2e5b8851c5a1fa0c57311->leave($__internal_16d4b186ffe211c0b175d9baf5489656f0a38a1022f2e5b8851c5a1fa0c57311_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/ends-with/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"endsWith\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es5-ext/string/#/ends-with/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/ends-with/implement.js");
    }
}
