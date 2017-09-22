<?php

/* node_modules/es5-ext/array/#/slice/implement.js */
class __TwigTemplate_9cb03d5776872b79b98363788bf35846cc011f74096c80238923f40558954c78 extends Twig_Template
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
        $__internal_a62e54142fb9724094cfac1717b9acbc9f5061663ac55799260beaa05834d6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62e54142fb9724094cfac1717b9acbc9f5061663ac55799260beaa05834d6ac->enter($__internal_a62e54142fb9724094cfac1717b9acbc9f5061663ac55799260beaa05834d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/slice/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"slice\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_a62e54142fb9724094cfac1717b9acbc9f5061663ac55799260beaa05834d6ac->leave($__internal_a62e54142fb9724094cfac1717b9acbc9f5061663ac55799260beaa05834d6ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/slice/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"slice\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/slice/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/slice/implement.js");
    }
}
