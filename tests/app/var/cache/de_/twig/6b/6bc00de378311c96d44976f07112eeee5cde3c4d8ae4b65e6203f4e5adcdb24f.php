<?php

/* node_modules/es5-ext/math/cosh/implement.js */
class __TwigTemplate_a8b7f243ee675b135867d3eac65f1048e42de6bcbeaca6d8d627349e822123fd extends Twig_Template
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
        $__internal_55c46151154f6099afd5ae286d8837925bc7899a0ca4f3a4665fdcc91bda6e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c46151154f6099afd5ae286d8837925bc7899a0ca4f3a4665fdcc91bda6e14->enter($__internal_55c46151154f6099afd5ae286d8837925bc7899a0ca4f3a4665fdcc91bda6e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/cosh/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"cosh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_55c46151154f6099afd5ae286d8837925bc7899a0ca4f3a4665fdcc91bda6e14->leave($__internal_55c46151154f6099afd5ae286d8837925bc7899a0ca4f3a4665fdcc91bda6e14_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/cosh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"cosh\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/cosh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/cosh/implement.js");
    }
}
