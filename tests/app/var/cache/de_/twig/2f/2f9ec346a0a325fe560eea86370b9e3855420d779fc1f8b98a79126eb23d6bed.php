<?php

/* node_modules/es5-ext/object/keys/implement.js */
class __TwigTemplate_70cba0d04ee25e640e6f7e1f70b861fe05cf2a5737c906c64ba3310861ec5485 extends Twig_Template
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
        $__internal_2540951ce488405a7ff91f110de7e607c36b88ee8fc4d3168717da666e69cd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2540951ce488405a7ff91f110de7e607c36b88ee8fc4d3168717da666e69cd14->enter($__internal_2540951ce488405a7ff91f110de7e607c36b88ee8fc4d3168717da666e69cd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/keys/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Object, \"keys\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_2540951ce488405a7ff91f110de7e607c36b88ee8fc4d3168717da666e69cd14->leave($__internal_2540951ce488405a7ff91f110de7e607c36b88ee8fc4d3168717da666e69cd14_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/keys/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Object, \"keys\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/object/keys/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/keys/implement.js");
    }
}
