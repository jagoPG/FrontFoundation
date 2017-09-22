<?php

/* node_modules/es5-ext/object/set-prototype-of/implement.js */
class __TwigTemplate_a36d2bea890d4ce33e32128281e033fd2e8cfc4c65fe65a526b24b2aaa21e309 extends Twig_Template
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
        $__internal_0c0cb01d64cc85389ec5a1548bd673957fe66d3c955fb08b9b8649e47e5e0b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0cb01d64cc85389ec5a1548bd673957fe66d3c955fb08b9b8649e47e5e0b6b->enter($__internal_0c0cb01d64cc85389ec5a1548bd673957fe66d3c955fb08b9b8649e47e5e0b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/set-prototype-of/implement.js"));

        // line 1
        echo "\"use strict\";

var shim;

if (!require(\"./is-implemented\")() && (shim = require(\"./shim\"))) {
\tObject.defineProperty(Object, \"setPrototypeOf\",
\t\t{ value: shim, configurable: true, enumerable: false, writable: true });
}
";
        
        $__internal_0c0cb01d64cc85389ec5a1548bd673957fe66d3c955fb08b9b8649e47e5e0b6b->leave($__internal_0c0cb01d64cc85389ec5a1548bd673957fe66d3c955fb08b9b8649e47e5e0b6b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/set-prototype-of/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var shim;

if (!require(\"./is-implemented\")() && (shim = require(\"./shim\"))) {
\tObject.defineProperty(Object, \"setPrototypeOf\",
\t\t{ value: shim, configurable: true, enumerable: false, writable: true });
}
", "node_modules/es5-ext/object/set-prototype-of/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/set-prototype-of/implement.js");
    }
}
