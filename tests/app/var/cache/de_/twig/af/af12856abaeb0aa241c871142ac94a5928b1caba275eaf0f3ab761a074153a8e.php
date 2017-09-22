<?php

/* node_modules/es5-ext/string/#/code-point-at/implement.js */
class __TwigTemplate_3aff1f5084fd729c9b9eeadb0ebec918a3abfb441a454fb841faaca4323e4b3e extends Twig_Template
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
        $__internal_603db441bfab074d369f702be8065ec7eb7cbb598c2b20ce9d052764770cc453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603db441bfab074d369f702be8065ec7eb7cbb598c2b20ce9d052764770cc453->enter($__internal_603db441bfab074d369f702be8065ec7eb7cbb598c2b20ce9d052764770cc453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/code-point-at/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"codePointAt\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_603db441bfab074d369f702be8065ec7eb7cbb598c2b20ce9d052764770cc453->leave($__internal_603db441bfab074d369f702be8065ec7eb7cbb598c2b20ce9d052764770cc453_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/code-point-at/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"codePointAt\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es5-ext/string/#/code-point-at/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/code-point-at/implement.js");
    }
}
